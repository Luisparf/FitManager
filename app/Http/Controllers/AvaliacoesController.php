<?php

namespace App\Http\Controllers;

// use App\Models\User;
use App\Models\Avaliacao;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\URL;
use Illuminate\Validation\Rule;
use Inertia\Inertia;

class AvaliacoesController extends Controller
{
    public function index()
    {
        // $s = 'string';
        // dd($s);
        return Inertia::render('Avaliacoes/Index', [
            'filters' => Request::all('search', 'type', 'trashed'),
            'avaliacoes' => Auth::user()->account->avaliacoes()
                ->orderBy('id')
                ->filter(Request::only('search', 'type', 'trashed'))
                ->paginate(10)
                ->withQueryString()
                ->transform(fn ($avaliacao) => [
                    'id' => $avaliacao->id,
                    'descr' => $avaliacao->descr,
                    'nota' => $avaliacao->nota,
                    'indicadores' => $avaliacao->indicadores,
                    'deleted_at' => $avaliacao->deleted_at,
                    'created_at' => $avaliacao->created_at,
                ]),
        ]);
    }

    public function create()
    {
        return Inertia::render('Avaliacoes/Create');
    }

    public function store()
    {
        Request::validate([
            'nome' => ['required', 'max:50'],
            'email' => ['required', 'max:50', 'email', Rule::unique('avaliacoes')],
            'password' => ['nullable'],
            'photo' => ['nullable', 'image'],
        ]);

        Auth::user()->account->avaliacoes()->create([
            'nome' => Request::get('nome'),
            'email' => Request::get('email'),
            'password' => Request::get('password'),
            'photo_path' => Request::file('photo') ? Request::file('photo')->store('avaliacoes') : null,
        ]);

        return Redirect::route('avaliacoes')->with('success', 'Avaliacao created.');
    }

    public function edit(Avaliacao $avaliacao)
    {
        return Inertia::render('Avaliacoes/Edit', [
            'avaliacao' => [
                'id' => $avaliacao->id,
                'nome' => $avaliacao->nome,
                'email' => $avaliacao->email,
                'photo' => $avaliacao->photo_path ? URL::route('image', ['path' => $avaliacao->photo_path, 'w' => 60, 'h' => 60, 'fit' => 'crop']) : null,
                'deleted_at' => $avaliacao->deleted_at,
            ],
        ]);
    }

    public function update(Avaliacao $avaliacao)
    {
        if (App::environment('demo') && $avaliacao->isDemoUser()) {
            return Redirect::back()->with('error', 'Updating the demo avaliacao is not allowed.');
        }

        Request::validate([
            'nome' => ['required', 'max:50'],
            'email' => ['required', 'max:50', 'email', Rule::unique('avaliacoes')->ignore($avaliacao->id)],
            'password' => ['nullable'],
            'photo' => ['nullable', 'image'],
        ]);

        $avaliacao->update(Request::only('nome','email', 'owner'));

        if (Request::file('photo')) {
            $avaliacao->update(['photo_path' => Request::file('photo')->store('avaliacoes')]);
        }

        if (Request::get('password')) {
            $avaliacao->update(['password' => Request::get('password')]);
        }

        return Redirect::back()->with('success', 'Avaliacao updated.');
    }

    public function destroy(Avaliacao $avaliacao)
    {

        $avaliacao->delete();

        return Redirect::back()->with('success', 'Avaliacao deleted.');
    }

    public function restore(Avaliacao $avaliacao)
    {
        $avaliacao->restore();

        return Redirect::back()->with('success', 'Avaliacao restored.');
    }
}

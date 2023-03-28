<?php

namespace App\Http\Controllers;

use App\Models\Maintenance;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Rule;
use Inertia\Inertia;

class MaintenanceController extends Controller
{
    public function index(){

        return Inertia::render('Maintenance/Index', [
            'filters' => Request::all('search', 'role', 'trashed'),
            'maintenance' => Auth::maintenance()
                ->orderByMachine()
                ->filter(Request::only('search', 'role', 'trashed'))
                ->get()
                ->transform(fn ($maintenance) => [
                    'id' => $maintenance->id,
                    'machine' => $maintenance->machine,
                    'local' => $maintenance->local,
                    'company' => $maintenance->company,
                    'deleted_at' => $maintenance->deleted_at,
                ]),
        ]);
    }
    public function create()
    {
        return Inertia::render('Maintenance/Create');
    }

    public function store()
    {
        Request::validate([
            'machine' => ['required', 'max:50'],
            'local' => ['nullable', 'max:80'],
            'company' => ['required', 'max:40'],
            'description' => ['required'],
            'dateMaintenance' => ['required']
        ]);

        Maintenance::maintenance()->create([
            'machine' => Request::get('machine'),
            'local' => Request::get('local'),
            'company' => Request::get('company'),
            'description' => Request::get('description'),
            'dateMaintenance' => Request::get('dateMaintenance'),
        ]);
     
        return Redirect::route('maintenance')->with('success', 'Maintenance created.');
    }
}

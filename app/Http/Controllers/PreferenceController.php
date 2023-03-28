<?php

namespace App\Http\Controllers;

use App\Models\Preferences;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class PreferenceController extends Controller
{
    public function create()
    {
        return Inertia::render('Preferences/Create');
    }

    public function store()
    {
        Request::validate([
            'objectives' => ['required'],
            'restrictions' => ['nullable'],
            'muscleGroup' => ['required'],
            'dateSchedule' => ['required']
        ]);

        Preferences::preference()->create([
            'objectives' => Request::get('objectives'),
            'restrictions' => Request::get('restrictions'),
            'muscleGroup' => Request::get('muscleGroup'),
            'dateSchedule' => Request::get('dateSchedule'),
        ]);
     
        return Redirect::route('preferences')->with('success', 'Preferences created.');
    }

    public function edit(Preferences $preference)
    {
        return Inertia::render('Preferences/Edit', [
            'preference' => [
                'id' => $preference->id,
                'objectives' => $preference->objectives,
                'restrictions' => $preference->restrictions,
                'muscleGroup' => $preference->muscleGroup,
                'dateSchedule' => $preference->dateSchedule,
            ],
        ]);
    }
}

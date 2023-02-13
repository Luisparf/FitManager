<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request;
use Inertia\Inertia;

class UsersManagerController extends Controller
{
    public function management(User $user)
    {
        if ($user->isntOwner()) {
            return Redirect::back()->with('error', 'Access denied due to role being: not owner');
        }
             
        return Inertia::render('Users/Edit', [
            'user' => [
                'role' => $user->role
            ],
        ]);
    }
}

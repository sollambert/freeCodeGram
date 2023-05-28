<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FollowsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(\App\Models\User $user)
    {
        // if ($user->id != auth()->user()->id) {
            return auth()->user()->following()->toggle($user->profile);
        // }
    }
}

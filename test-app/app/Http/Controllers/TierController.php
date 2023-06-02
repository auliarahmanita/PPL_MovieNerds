<?php

namespace App\Http\Controllers;

use App\Models\Tier;
use App\Models\User;
use Illuminate\Http\Request;

class TierController extends Controller
{
    public function index(Tier $tier_user) 
    {
        $users = User::with('tier')->orderBy('exp', 'desc')->get();

        // $users->each(function ($user, $index) {
        //     $user->ranking = $index + 1;
        // });
    
        return view('tier', ['users' => $users]);
    }
}

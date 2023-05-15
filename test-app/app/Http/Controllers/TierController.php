<?php

namespace App\Http\Controllers;

use App\Models\Tier;
use App\Models\User;
use App\Models\Tier_User;
use Illuminate\Http\Request;

class TierController extends Controller
{
    public function index(Tier_user $tier_user) 
    {
        return view('tier', [
            'active' => 'tier_user', 
            'title' => 'Tierlist',
            'tier' => $tier_user->all()
        ]);
    }
}

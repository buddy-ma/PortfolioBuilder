<?php

namespace App\Http\Controllers\Web\Profile;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Auth\Authenticatable;

class ShowController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, Authenticatable $user): View
    {
        return view('profile.show', [
            'user' => $user->load(['profile']),
        ]);
    }

    public function hero(Authenticatable $user)
    {
        return view('profile.show_hero', [
            'user' => $user
        ]);
    }
}

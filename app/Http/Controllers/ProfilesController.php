<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ProfilesController extends Controller
{
    public function show($username)
    {
      try
      {
        $user = \App\User::with('profile')->whereId($username)->firstOrFail();
      }
      catch(\Illuminate\Database\Eloquent\ModelNotFoundException $e){
        return redirect()->route('home');
      }
      return \View::make('profiles.show')->withUser($user);
    }
}

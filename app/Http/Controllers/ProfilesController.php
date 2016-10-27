<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use Illuminate\Support\Facades\Validator;

class ProfilesController extends Controller
{

    public function show($userid)
    {
      try
      {
        $user = \App\User::with('profile')->whereId($userid)->firstOrFail();
      }
      catch(\Illuminate\Database\Eloquent\ModelNotFoundException $e){
        return redirect()->route('home');
      }
      return \View::make('profiles.show')->withUser($user);
    }

    public function edit($userid)
    {
      $user = \App\User::whereId($userid)->firstOrFail();
      return \View::make('profiles.edit')->withUser($user);
    }

    public function update($userid)
    {
      $user = \App\User::with('profile')->whereId($userid)->firstOrFail();
      $input = Input::only('location', 'bio', 'twitter_username', 'github_username');

      $this->validator($input);

      //dd($user);
      $user->profile->fill($input)->save();
      \Session::flash('flash_message','Profile successfully updated!');
      return redirect()->route('profile.edit', $user->id);
    }

    /**
     * Get a validator for an incoming edit request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'location' => 'nullable|max:255',
            'bio' => 'required|filled',
            'twitter_username' => 'nullable',
            'github_username' => 'nullable',
        ]);
    }
}

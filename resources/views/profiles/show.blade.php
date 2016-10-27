@extends('layouts.app')

@section('content');
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                  <div class="panel-heading">
                    <h2>{{ $user->name }}</h2>
                    @if ($user->profile)
                      <em>{{ ucwords($user->profile->location) }}</em>
                    @endif
                    </div>
                    <div class="panel-body">
                    @if ($user->profile)
                    @if (Auth::user()->id == $user->id)
                            {{ link_to_route('profile.edit', 'Edit Your Profile', $user->id) }}
                            <br>
                      @endif
                      {{ $user->profile->bio }}
                    <br>
                    @if ($user->profile->github_username)
                      <b>Find me on Github:</b> <a href="http://www.github.com/{{ $user->profile->github_username }}" target="_blank">{{ $user->profile->github_username }}</a>
                    @endif
                    <br>
                    @if ($user->profile->twitter_username)
                      <b>Follow me on Twitter:</b> <a href="http://www.twitter.com/{{ $user->profile->twitter_username }}" target="_blank">{{ $user->profile->twitter_username }}</a>
                    @endif
                  @endif
                </div>
                </div>
              </div>
          </div>
      </div>
@stop

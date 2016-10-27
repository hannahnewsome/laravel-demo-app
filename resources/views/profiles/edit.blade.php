@extends('layouts.app')

@section('content');
<div class="container">
      <div class="row">
          <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-default">
                @if(Session::has('flash_message'))
                    <div class="alert alert-success"> {!! session('flash_message') !!} <a href="{{ url('/home') }}">Go back home</a></div>
                @endif
                    <div class="panel-heading">
                    <h3> Edit Profile</h3>
                    </div>
                    <div class="panel-body">
@if (Auth::user()->id == $user->id)
  <h3>{{ $user->name }}</h3>

  {{ Form::model($user->profile, ['route' => ['profile.update', $user->id]]) }}
    {{ Form::label('location', 'Location:') }}
    {{ Form::text('location', null, ['class' => 'form-control']) }}

    {{ Form::label('bio', 'Bio:') }}
    {{ Form::textarea('bio', null, ['class' => 'form-control']) }}

    {{ Form::label('twitter_username', 'Twitter Username:') }}
    {{ Form::text('twitter_username', null, ['class' => 'form-control']) }}

    {{ Form::label('github_username', 'Github Username:') }}
    {{ Form::text('github_username', null, ['class' => 'form-control']) }}

    {{ Form::submit('Update Profile', null, ['class' => 'btn btn-primary']) }}
  {{ Form::close() }}
@else
  You must be logged in to perform this action
@endif
</div>
</div>
</div>
</div>
</div>
@stop

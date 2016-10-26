@extends('layouts.app')

@section('content');
<div class="container">
  <h1>{{ $user->name }}</h1>
  Edit Profile

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

</div>
@stop

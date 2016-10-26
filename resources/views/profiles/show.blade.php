@extends('layouts.app')

@section('content');
<div class="container">
  @if (Auth::user()->id == $user->id)
    {{ link_to_route('profile.edit', 'Edit Your Profile', $user->id) }}
  @endif
  @if ($user->profile)
    <h1>{{ $user->name }} <small>{{ $user->profile->location }}</small></h1>
    {{ $user->profile->bio }}
  @endif
</div>
@stop

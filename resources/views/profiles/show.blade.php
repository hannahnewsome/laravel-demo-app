@extends('layouts.app')

@section('content');
<div class="container">
  {{ link_to_route('profiles.edit', 'Edit Your Profile', $user->id) }}
  
  <h1>{{ $user->name }} <small>{{ $user->profile->location }}</small></h1>
  {{ $user->profile->bio }}
</div>
@stop

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{ $passenger->name_first }} {{ $passenger->name_last }}</div>
                <div class="panel-body"><b>Survived?</b>
                  @if ($passenger->survived)
                    Yes
                  @else
                    no
                  @endif
                  <b>Gender:</b> {{ $passenger->sex }}
                  <b>Age:</b> {{ $passenger->age }}
                  <b>Embarked at:</b> {{ $passenger->embarked }}
                </div>
                <div class="panel-footer">
                  <a href="{{ URL::previous() }}">Back</a>
                </div>
        </div>
    </div>
</div>
@endsection

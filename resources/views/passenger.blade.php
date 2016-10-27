@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
              @if (Auth::check())
                <div class="panel-heading">{{ $passenger->name_first }} {{ $passenger->name_last }}</div>
                <div class="panel-body"><b>Survived?</b>
                  @if ($passenger->survived)
                    Yes
                  @else
                    <span class='red'>No</span>
                  @endif
                  <br>
                  <b>Gender:</b> {{ ucwords($passenger->sex) }}
                  <br>
                  <b>Age:</b> @if ($passenger->age)
                                {{$passenger->age }}
                              @else
                                Unknown
                              @endif
                  <br>
                  <b>Embarked at:</b>
                  @if ($passenger->embarked == 'S')
                    Southampton
                  @elseif ($passenger->embarked == 'Q')
                    Queenstown
                  @else
                    Cherbourg
                  @endif
                  <br>
                  <b>Ticket Number:</b> {{ $passenger->ticket }}
                  <br>
                  <b>Fare:</b> {{ number_format($passenger->fare, 2) }}
                  <br>
                  <b>Cabin:</b> {{ $passenger->cabin }}
                  <br>
                  <b>Number of Siblings/Spouses Aboard:</b> {{ $passenger->sibsp }}
                  <br>
                  <b>Number of Parents/Children Aboard:</b> {{ $passenger->parch }}
                </div>
                @else
                  <div class="panel-body">
                    You must be logged in to view this passenger's information.
                  </div>
                @endif
                <div class="panel-footer">
                  <a href="{{ URL::previous() }}">Back</a>
                </div>
        </div>
    </div>
</div>
@endsection

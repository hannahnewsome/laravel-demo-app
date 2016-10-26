@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Titanic Survivors</div>

              <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-hover">
                      <tr><th>First Name</th><th>Last Name</th></tr>
                        @foreach ($data as $item)
                        <tr>
                          <td>{{ $item->name_first }}</td><td> {{ $item->name_last }}</td>
                        </tr>
                        @endforeach
                      </table>
                </div>
              </div>
              <div class="panel-footer">
                  {{ $data->links() }}
                </div>

            </div>
        </div>
    </div>
</div>
@endsection

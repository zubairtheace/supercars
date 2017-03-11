@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Frequently Asked Questions
                  <a href="{{ route('car.create') }}" class="btn btn-primary btn-sm pull-right">Add </a>
                </div>
                <div class="panel-body">
                  <table class="table">
                    @forelse($cars as $car)
                      <tr>
                        <td>
                          <b>question</b> {{$car->car}}
                          <div class="btn-toolbar pull-right">
                            <div class="btn-group">
                              <a href="{{ route('car.show', $car->id) }}" class="btn btn-primary btn-sm">View </a>
                            </div>
                            <div class="btn-group">
                              <a href="{{ route('car.edit', $car->id) }}" class="btn btn-primary btn-sm">Edit </a>
                            </div>
                          </div>
                        </td>
                      </tr>
                    @empty
                    <tr>
                      <td>No cars </td>
                    </tr>
                    @endforelse
                    </table>
                    <div>
                        {{ $cars->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

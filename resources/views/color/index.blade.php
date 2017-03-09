@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Car Colors
                  <a href="{{ route('color.create') }}" class="btn btn-primary btn-sm pull-right">Add </a>
                </div>
                <div class="panel-body">
                  <table class="table">
                    @forelse($colors as $color)
                      <tr>
                        <td>
                          <b>name:</b> {{$color->color}}
                          <div class="btn-toolbar pull-right">
                            <div class="btn-group">
                              <a href="{{ route('color.show', $color->id) }}" class="btn btn-primary btn-sm">View </a>
                            </div>
                            <div class="btn-group">
                              <a href="{{ route('color.edit', $color->id) }}" class="btn btn-primary btn-sm">Edit </a>
                            </div>
                          </div>
                        </td>
                      </tr>
                    @empty
                    <tr>
                      <td>No color </td>
                    </tr>
                    @endforelse
                    </table>
                    <div>
                        {{ $colors->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

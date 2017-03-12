@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Car Makes
                  <a href="{{ route('make.create') }}" class="btn btn-primary btn-sm pull-right">Add </a>
                </div>
                <div class="panel-body">
                  <table class="table">
                    @forelse($makes as $make)
                      <tr>
                        <td>
                          <b>name:</b> {{$make->name}}
                          <div class="btn-toolbar pull-right">
                            <div class="btn-group">
                              <a href="{{ route('make.show', $make->id) }}" class="btn btn-primary btn-sm">View </a>
                            </div>
                            <div class="btn-group">
                              <a href="{{ route('make.edit', $make->id) }}" class="btn btn-primary btn-sm">Edit </a>
                            </div>
                          </div>
                        </td>
                      </tr>
                    @empty
                    <tr>
                      <td>No Make </td>
                    </tr>
                    @endforelse
                    </table>
                    <div>
                        {{ $makes->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

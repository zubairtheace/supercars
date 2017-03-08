@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add New Car Make</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('make.store') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('make') ? ' has-error' : '' }}">
                            <label for="make" class="col-md-4 control-label">Make</label>

                            <div class="col-md-6">
                                <input id="make" type="text" class="form-control" name="make" value="{{ old('make') }}" autofocus>

                                @if ($errors->has('make'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('make') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Save
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

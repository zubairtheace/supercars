@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add New Car Make</div>
                <div class="panel-body">

                    {!! Form::open([
                      'route' => 'make.store',
                      'class' => 'form-horizontal',
                      'role' => 'form',
                      'method' => 'POST',
                      ]) !!}

                    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        There were some problems saving this Make.<br />
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li></li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <div class="form-group">
                        {!! Form::label('name', 'Car Make',[
                            'class' => 'col-md-4 control-label'
                            ]); !!}

                        <div class="col-md-6">
                            {!! Form::text('name',null,[
                                    'class'=>'form-control',
                                    'required' => 'required'
                                ]); !!}
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            {!! Form::submit('Save',[
                                    'class' => 'btn btn-primary'
                                ]); !!}

                        </div>
                    </div>
                    {!! Form::close() !!}
                    <!-- <form class="form-horizontal" role="form" method="POST" action="{{ route('make.store') }}">
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
                    </form> -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

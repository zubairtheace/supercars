@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Footer Opening Hours</div>
                <div class="panel-body">
                    {!! Form::open([
                        'route' => 'footer_opening_hour.store',
                        'class' => 'form-horizontal',
                        'role' => 'form',
                        'method' => 'POST'
                    ]) !!}

                        <!-- week_day   -->
                        <div class="form-group{{ $errors->has('week_day') ? ' has-error' : '' }}">
                            <div class="container-fluid">
                                {!! Form::label(
                                    'week_day',
                                    'Week Days',
                                    [
                                        'class' => 'col-md-4 control-label'
                                    ]
                                ); !!}

                                <div class="col-md-6">
                                    {!! Form::text(
                                        'week_day',
                                        old('week_day'),
                                        [
                                            'class'=>'form-control',
                                            'required' => 'required'
                                        ]
                                    ); !!}
                                </div>
                            </div>
                            @if ($errors->has('week_day'))
                            <div class="container-fluid">
                                <div class="col-md-8 col-md-offset-4">
                                    <span class="help-block">
                                        <strong>{{ $errors->first('week_day') }}</strong>
                                    </span>
                                </div>
                            </div>
                            @endif
                        </div>


                        <!-- week_time   -->
                        <div class="form-group{{ $errors->has('week_time') ? ' has-error' : '' }}">
                            <div class="container-fluid">
                                {!! Form::label(
                                    'week_time',
                                    'Week Days Opening Hours',
                                    [
                                        'class' => 'col-md-4 control-label'
                                    ]
                                ); !!}

                                <div class="col-md-6">
                                    {!! Form::text(
                                        'week_time',
                                        old('week_time'),
                                        [
                                            'class'=>'form-control',
                                            'required' => 'required'
                                        ]
                                    ); !!}
                                </div>
                            </div>
                            @if ($errors->has('week_time'))
                            <div class="container-fluid">
                                <div class="col-md-8 col-md-offset-4">
                                    <span class="help-block">
                                        <strong>{{ $errors->first('week_time') }}</strong>
                                    </span>
                                </div>
                            </div>
                            @endif
                        </div>


                        <!-- week_end_day   -->
                        <div class="form-group{{ $errors->has('week_end_day') ? ' has-error' : '' }}">
                            <div class="container-fluid">
                                {!! Form::label(
                                    'week_end_day',
                                    'Week End Days',
                                    [
                                        'class' => 'col-md-4 control-label'
                                    ]
                                ); !!}

                                <div class="col-md-6">
                                    {!! Form::text(
                                        'week_end_day',
                                        old('week_end_day'),
                                        [
                                            'class'=>'form-control',
                                            'required' => 'required'
                                        ]
                                    ); !!}
                                </div>
                            </div>
                            @if ($errors->has('week_end_day'))
                            <div class="container-fluid">
                                <div class="col-md-8 col-md-offset-4">
                                    <span class="help-block">
                                        <strong>{{ $errors->first('week_end_day') }}</strong>
                                    </span>
                                </div>
                            </div>
                            @endif
                        </div>


                        <!-- week_end_time   -->
                        <div class="form-group{{ $errors->has('week_end_time') ? ' has-error' : '' }}">
                            <div class="container-fluid">
                                {!! Form::label(
                                    'week_end_time',
                                    'Week Days Opening Hours',
                                    [
                                        'class' => 'col-md-4 control-label'
                                    ]
                                ); !!}

                                <div class="col-md-6">
                                    {!! Form::text(
                                        'week_end_time',
                                        old('week_end_time'),
                                        [
                                            'class'=>'form-control',
                                            'required' => 'required'
                                        ]
                                    ); !!}
                                </div>
                            </div>
                            @if ($errors->has('week_end_time'))
                            <div class="container-fluid">
                                <div class="col-md-8 col-md-offset-4">
                                    <span class="help-block">
                                        <strong>{{ $errors->first('week_end_time') }}</strong>
                                    </span>
                                </div>
                            </div>
                            @endif
                        </div>

                        <!-- submit -->

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                {!! Form::submit(
                                    'Save',
                                    [
                                        'class' => 'btn btn-primary'
                                    ]
                                ); !!}

                            </div>
                        </div>

                    {!! Form::close() !!}


                </div>
            </div>
        </div>
    </div>
</div>
@endsection

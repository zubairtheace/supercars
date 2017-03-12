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

                    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        There were some problems saving the Opening Hours.<br />
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <div class="form-group">
                        {!! Form::label('week_day','Week Days',[
                                'class'=>'col-md-4 control-label'
                            ]); !!}

                        <div class="col-md-6">
                            {!! Form::tel('week_day',null,[
                                    'class'=>'form-control',
                                    'required' => 'required'
                                ]); !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('week_time','Week Days Opening Hours',[
                                'class'=>'col-md-4 control-label'
                            ]); !!}

                        <div class="col-md-6">
                            {!! Form::tel('week_time',null,[
                                    'class'=>'form-control',
                                    'required' => 'required'
                                ]); !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('week_end_day','Week End Days',[
                                'class'=>'col-md-4 control-label'
                            ]); !!}

                        <div class="col-md-6">
                            {!! Form::tel('week_end_day',null,[
                                    'class'=>'form-control',
                                    'required' => 'required'
                                ]); !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('week_end_time','Week End Opening Hours',[
                                'class'=>'col-md-4 control-label'
                            ]); !!}

                        <div class="col-md-6">
                            {!! Form::tel('week_end_time',null,[
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


                </div>
            </div>
        </div>
    </div>
</div>
@endsection

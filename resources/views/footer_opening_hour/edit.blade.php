@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Opening Hours</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('footer_opening_hour.update', $footer_opening_hour->id) }}">
                        {{ method_field('PUT') }}
                        {{ csrf_field() }}

                        @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            There were some problems saving the Footer Contact Information.<br />
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
                                {!! Form::tel('week_day',$footer_opening_hour->week_day,[
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
                                {!! Form::tel('week_time',$footer_opening_hour->week_time,[
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
                                {!! Form::tel('week_end_day',$footer_opening_hour->week_end_day,[
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
                                {!! Form::tel('week_end_time',$footer_opening_hour->week_end_time,[
                                        'class'=>'form-control',
                                        'required' => 'required'
                                    ]); !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                {!! Form::submit('Update',[
                                        'class' => 'btn btn-primary'
                                    ]); !!}

                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

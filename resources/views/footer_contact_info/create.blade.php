@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Footer Contact Information</div>
                <div class="panel-body">
                    {!! Form::open([
                            'route' => 'footer_contact_info.store',
                            'class' => 'form-horizontal',
                            'role' => 'form',
                            'method' => 'POST'
                            ]) !!}

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
                        {!! Form::label('phone_number','Mobile Phone Number',[
                                'class'=>'col-md-4 control-label'
                            ]); !!}

                        <div class="col-md-3">
                            {!! Form::number('phone_number',null,[
                                    'class'=>'form-control',
                                    'required' => 'required'
                                ]); !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('email','E-mail Address',[
                                'class'=>'col-md-4 control-label'
                            ]); !!}

                        <div class="col-md-6">
                            {!! Form::text('email',null,[
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

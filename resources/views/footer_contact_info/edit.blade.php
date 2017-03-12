@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Footer Contact Information</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('footer_contact_info.update', $footer_contact_info->id) }}">
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
                            {!! Form::label('phone_number','Mobile Phone Number',[
                                    'class'=>'col-md-4 control-label'
                                ]); !!}

                            <div class="col-md-3">
                                {!! Form::number('phone_number',$footer_contact_info->phone_number,[
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
                                {!! Form::text('email',$footer_contact_info->email,[
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

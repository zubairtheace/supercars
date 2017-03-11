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

                        <div class="form-group{{ $errors->has('footer_contact_info') ? ' has-error' : '' }}">

                          @if ($errors->has('footer_contact_info'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('footer_contact_info') }}</strong>
                              </span>
                          @endif

                        </div>


                        <div class="form-group">
                            {!! Form::label('phone_number','Phone Number',[
                                    'class'=>'col-md-4 control-label'
                                ]); !!}

                            <div class="col-md-6">
                                {!! Form::number('question',null,[
                                        'class'=>'form-control',
                                        'min'=>'10000000',
                                        'max'=>'99999999',
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

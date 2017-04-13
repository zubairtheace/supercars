@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1 custom-padding">
            <div class="panel panel-default">
                <div class="panel-heading">Footer Contact Information</div>
                <div class="panel-body">
                    {!! Form::open([
                        'route' => 'footer_contact_info.store',
                        'class' => 'form-horizontal',
                        'role' => 'form',
                        'method' => 'POST'
                    ]) !!}

                        <!--Phone Number-->
                        <div class="form-group{{ $errors->has('phone_number') ? ' has-error' : '' }}">
                            <div class="container-fluid">
                                {!! Form::label(
                                    'phone_number',
                                    'Phone Number',
                                    [
                                        'class' => 'col-md-4 control-label'
                                    ]
                                ); !!}

                            <div class="col-md-4">
                                {!! Form::number(
                                    'phone_number',
                                    old('phone_number'),
                                    [
                                        'class'=>'form-control',
                                        'required' => 'required'
                                    ]
                                ); !!}
                            </div>
                            </div>
                            @if ($errors->has('phone_number'))
                            <div class="container-fluid">
                                <div class="col-md-8 col-md-offset-4">
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone_number') }}</strong>
                                    </span>
                                </div>
                            </div>
                            @endif
                        </div>

                        <!--email-->
                     <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                         <div class="container-fluid">
                             {!! Form::label(
                                 'email',
                                 'E-mail Address',
                                 [
                                     'class' => 'col-md-4 control-label'
                                 ]
                             ); !!}

                             <div class="col-md-6">
                                 {!! Form::email(
                                     'email',
                                     old('email'),
                                     [
                                         'class'=>'form-control',
                                         'required' => 'required'
                                     ]
                                 ); !!}
                             </div>
                         </div>
                         @if ($errors->has('email'))
                         <div class="container-fluid">
                             <div class="col-md-8 col-md-offset-4">
                                 <span class="help-block">
                                     <strong>{{ $errors->first('email') }}</strong>
                                 </span>
                             </div>
                         </div>
                         @endif
                     </div>

                     <!-- submit button -->

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

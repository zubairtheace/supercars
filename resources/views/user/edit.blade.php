@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1 custom-padding">
            <div class="panel panel-default">
                <div class="panel-heading">Edit User</div>
                <div class="panel-body">
                    {!! Form::open([
                        'route' => ['user.update', $user->id],
                        'class' => 'form-horizontal',
                        'role' => 'form',
                        'method' => 'PUT'
                    ]) !!}

                        <!--First Name-->

                        <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                            <div class="container-fluid">
                                {!! Form::label(
                                    'first_name',
                                    'First Name',
                                    [
                                        'class' => 'col-md-4 control-label'
                                    ]
                                ); !!}

                                <div class="col-md-6">
                                    {!! Form::text(
                                        'first_name',
                                        $user->first_name,
                                        [
                                            'class'=>'form-control',
                                            'autofocus'=>'autofocus',
                                            'required' => 'required'
                                        ]
                                    ); !!}
                                </div>
                            </div>

                            @if ($errors->has('first_name'))
                            <div class="container-fluid">
                                <div class="col-md-8 col-md-offset-4">
                                    <span class="help-block">
                                        <strong>{{ $errors->first('first_name') }}</strong>
                                    </span>
                                </div>
                            </div>
                            @endif
                        </div>

                        <!--Last Name-->
                        <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                            <div class="container-fluid">
                                {!! Form::label(
                                    'last_name',
                                    'Last Name',
                                    [
                                        'class' => 'col-md-4 control-label'
                                    ]
                                ); !!}

                                <div class="col-md-6">
                                    {!! Form::text(
                                        'last_name',
                                        $user->last_name,
                                        [
                                            'class'=>'form-control',
                                            'required' => 'required'
                                        ]
                                    ); !!}
                                </div>
                            </div>
                            @if ($errors->has('last_name'))
                            <div class="container-fluid">
                                <div class="col-md-8 col-md-offset-4">
                                    <span class="help-block">
                                        <strong>{{ $errors->first('last_name') }}</strong>
                                    </span>
                                </div>
                            </div>
                            @endif
                        </div>
                        <!-- User Type -->
                        <div class="form-group{{ $errors->has('user_type') ? ' has-error' : '' }}">
                            <div class="container-fluid">
                              <div class="col-md-4 control-label">
                                  {!! Form::label(
                                      'user_type',
                                      'User Type'
                                  ); !!}
                              </div>

                              <?php
                                  if (($user->user_type)=='registered'){
                                      ?>
                                          <div class="col-md-3">
                                              {!! Form::label(
                                                  'registered',
                                                  'Regular User'
                                              ); !!}

                                              {!! Form::radio(
                                                  'user_type',
                                                  'registered',
                                                  true
                                              ); !!}
                                          </div>
                                          <div class="col-md-2">
                                              {!! Form::label(
                                                  'admin',
                                                  'Admin'
                                              ); !!}

                                              {!! Form::radio(
                                                  'user_type',
                                                  'admin'
                                              ); !!}
                                          </div>
                                      <?php
                                  }
                              ?>

                              <?php
                                  if (($user->user_type)=='admin'){
                                      ?>
                                          <div class="col-md-3">
                                              {!! Form::label(
                                                  'registered',
                                                  'Regular User'
                                              ); !!}

                                              {!! Form::radio(
                                                  'user_type',
                                                  'registered'
                                              ); !!}
                                          </div>
                                          <div class="col-md-2">
                                              {!! Form::label(
                                                  'admin',
                                                  'Admin'
                                              ); !!}

                                              {!! Form::radio(
                                                  'user_type',
                                                  'admin',
                                                  true
                                              ); !!}
                                          </div>
                                      <?php
                                  }
                              ?>


                            </div>
                            @if ($errors->has('user_type_id'))
                            <div class="container-fluid">
                              <div class="col-md-8 col-md-offset-4">
                                  <span class="help-block">
                                      <strong>{{ $errors->first('user_type_id') }}</strong>
                                  </span>
                              </div>
                          </div>
                        @endif
                        </div>

                        <!--National Identity card Number-->
                        <div class="form-group{{ $errors->has('nic') ? ' has-error' : '' }}">
                            <div class="container-fluid">
                                {!! Form::label(
                                    'nic',
                                    'National Identity Card Number',
                                    [
                                        'class' => 'col-md-4 control-label'
                                    ]
                                ); !!}

                                <div class="col-md-4">
                                    {!! Form::text(
                                        'nic',
                                        $user->nic,
                                        [
                                            'class'=>'form-control',
                                            'required' => 'required'
                                        ]
                                    ); !!}
                                </div>
                            </div>
                            @if ($errors->has('nic'))
                            <div class="container-fluid">
                                <div class="col-md-8 col-md-offset-4">
                                    <span class="help-block">
                                        <strong>{{ $errors->first('nic') }}</strong>
                                    </span>
                                </div>
                            </div>
                            @endif
                        </div>

                        <!--Gender-->
                        <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                            <div class="container-fluid">
                                <div class="col-md-4 control-label">
                                    {!! Form::label(
                                        'gender',
                                        'Gender'
                                    ); !!}
                                </div>
                                <?php
                                    if (($user->gender)=='male'){
                                        ?>
                                            <div class="col-md-2">
                                                {!! Form::label(
                                                    'male',
                                                    'Male'
                                                ); !!}

                                                {!! Form::radio(
                                                    'gender',
                                                    'male',
                                                    true
                                                ); !!}
                                            </div>
                                            <div class="col-md-2">
                                                {!! Form::label(
                                                    'female',
                                                    'Female'
                                                ); !!}

                                                {!! Form::radio(
                                                    'gender',
                                                    'female'
                                                ); !!}
                                            </div>
                                        <?php
                                    }
                                ?>

                                <?php
                                    if (($user->gender)=='female'){
                                        ?>
                                            <div class="col-md-2">
                                                {!! Form::label(
                                                    'male',
                                                    'Male'
                                                ); !!}

                                                {!! Form::radio(
                                                    'gender',
                                                    'male'
                                                ); !!}
                                            </div>
                                            <div class="col-md-2">
                                                {!! Form::label(
                                                    'female',
                                                    'Female'
                                                ); !!}

                                                {!! Form::radio(
                                                    'gender',
                                                    'female',
                                                    true
                                                ); !!}
                                            </div>
                                        <?php
                                    }
                                ?>

                            </div>
                            @if ($errors->has('gender'))
                            <div class="container-fluid">
                                <div class="col-md-8 col-md-offset-4">
                                    <span class="help-block">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                </div>
                            </div>
                            @endif
                        </div>

                        <!--Date of Birth-->
                        <div class="form-group{{ $errors->has('dob') ? ' has-error' : '' }}">
                            <div class="container-fluid">
                                {!! Form::label(
                                    'dob',
                                    'Date of Birth',
                                    [
                                        'class' => 'col-md-4 control-label'
                                    ]
                                ); !!}

                                <div class="col-md-4">
                                    {!! Form::date(
                                        'dob',
                                        $user->dob,
                                        [
                                            'class'=>'form-control',
                                        ]
                                    ); !!}
                                </div>
                            </div>
                            @if ($errors->has('dob'))
                            <div class="container-fluid">
                                <div class="col-md-8 col-md-offset-4">
                                    <span class="help-block">
                                        <strong>{{ $errors->first('dob') }}</strong>
                                    </span>
                                </div>
                            </div>
                            @endif
                        </div>

                        <!--Address-->
                        <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                            <div class="container-fluid">
                                {!! Form::label(
                                    'address',
                                    'Address',
                                    [
                                        'class' => 'col-md-4 control-label'
                                    ]
                                ); !!}

                                <div class="col-md-6">
                                    {!! Form::textarea(
                                        'address',
                                        $user->address,
                                        [
                                            'class'=>'form-control',
                                            'required' => 'required',
                                            'rows' => '3'
                                        ]
                                    ); !!}
                                </div>
                            </div>
                            @if ($errors->has('address'))
                            <div class="container-fluid">
                                <div class="col-md-8 col-md-offset-4">
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                </div>
                            </div>
                            @endif
                        </div>

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
                                    $user->phone_number,
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
                                        $user->email,
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

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1 custom-padding">
            <div class="panel panel-default">
                <div class="panel-heading">Personalised Quote</div>
                <div class="panel-body">



                    {!! Form::open([
                        'route' => 'quotation.store',
                        'class' => 'form-horizontal',
                        'role' => 'form',
                        'method' => 'POST'
                    ]) !!}

                        <div class="panel panel-info">
                            <div class="panel-heading">Car Information</div>
                            <div class="panel-body">
                                <!-- Car Make -->
                                <div class="form-group">
                                    <div class="container-fluid">
                                        <div class="col-md-2-offset-3">
                                            <label class="col-md-4 control-label">
                                                Make
                                            </label>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="col-md-4 form-control">
                                                {{ $car->make }}
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Car Model -->
                                <div class="form-group">
                                    <div class="container-fluid">
                                        <div class="col-md-2-offset-3">
                                            <label class="col-md-4 control-label">
                                                Model
                                            </label>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="col-md-4 form-control">
                                                {{ $car->model }}
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Car Price -->
                                <div class="form-group">
                                    <div class="container-fluid">
                                        <div class="col-md-2-offset-3">
                                            <label class="col-md-4 control-label">
                                                Total Cost
                                            </label>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="col-md-4 form-control">
                                                Rs {{ $car->price }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-info">
                            <div class="panel-heading">User Information</div>
                            <div class="panel-body">
                                <!-- Name -->
                                <div class="form-group">
                                    <div class="container-fluid">
                                        <div class="col-md-2-offset-3">
                                            <label class="col-md-4 control-label">
                                                Name
                                            </label>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="col-md-4 form-control">
                                                {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Email -->
                                <div class="form-group">
                                    <div class="container-fluid">
                                        <div class="col-md-2-offset-3">
                                            <label class="col-md-4 control-label">
                                                E-mail Address
                                            </label>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="col-md-4 form-control">
                                                {{ Auth::user()->email }}
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Phone -->
                                <div class="form-group">
                                    <div class="container-fluid">
                                        <div class="col-md-2-offset-3">
                                            <label class="col-md-4 control-label">
                                                Phone Number
                                            </label>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="col-md-4 form-control">
                                                {{ Auth::user()->phone_number }}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <input name="title" type="hidden" value="Personalised Quote">
                        <input name="user_id" type="hidden" value="{{ Auth::id() }}">
                        <input name="car_id" type="hidden" value="{{ $car->id }}">
                        <!--Message-->
                        <div class="form-group{{ $errors->has('message') ? ' has-error' : '' }}">
                            <div class="container-fluid">
                                {!! Form::label(
                                    'message',
                                    'Message',
                                    [
                                        'class' => 'col-md-4 control-label'
                                    ]
                                ); !!}

                                <div class="col-md-6">
                                        {!! Form::textarea(
                                        'message',
                                        old('message'),
                                        [
                                            'class'=>'form-control',
                                            'required' => 'required',
                                            'rows' => '3'
                                        ]
                                    ); !!}
                                </div>
                            </div>
                            @if ($errors->has('message'))
                            <div class="container-fluid">
                                <div class="col-md-8 col-md-offset-4">
                                    <span class="help-block">
                                        <strong>{{ $errors->first('message') }}</strong>
                                    </span>
                                </div>
                            </div>
                            @endif
                        </div>

                        <!-- submit button -->
                         <div class="form-group">
                             <div class="col-md-6 col-md-offset-4">
                                 {!! Form::submit(
                                     'Confirm',
                                     [
                                         'class' => 'btn btn-primary'
                                     ]
                                 ); !!}
                             </div>
                         </div>


                    {!! Form::close() !!}




                    <!-- <div>
                        test
                        {{ $car->model }}
                        {{ $car->make }}
                        {{ Auth::user()->address }}
                    </div> -->

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

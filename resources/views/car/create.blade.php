@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add New Car</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('car.store') }}">
                        {{ csrf_field() }}

                        <!--Make-->


                        <!--Model-->
                        <div class="form-group{{ $errors->has('model') ? ' has-error' : '' }}">
                            <label for="model" class="col-md-4 control-label">Car Model</label>

                            <div class="col-md-6">
                                <input id="model" type="text" class="form-control" name="model" value="{{ old('model') }}" required>

                                @if ($errors->has('model'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('model') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!--Color-->


                        <!--type-->
                        <div class="form-group{{ $errors->has('gender') ? ' has-error' : '' }}">
                            <!--
                            <label for="type" class="col-md-4 control-label">Car Type</label>
                            <div class="col-md-3">
                                <label for="type" class="col-md-4 control-label">New <input checked="checked" name="type" type="radio" value="New"></label>
                            </div>

                            <div class="col-md-3">
                                <label for="type" class="col-md-4 control-label">Reconditioned <input name="type" type="radio" value="reconditionned"></label>
                            </div>
                          -->
                            <div class="col-md-4 control-label">
                                {{ Form::label('type', 'Type') }}
                            </div>

                            <div class="col-md-3">
                                {{ Form::label('new', 'New') }}
                                {{ Form::radio('type', 'new', true) }}
                            </div>

                            <div class="col-md-3">
                                {{ Form::label('reconditionned', 'Reconditionned') }}
                                {{ Form::radio('type', 'reconditionned') }}
                            </div>

                            @if ($errors->has('type'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('type') }}</strong>
                                </span>
                            @endif

                        </div>


                        <!--year-->
                        <div class="form-group{{ $errors->has('year') ? ' has-error' : '' }}">
                            <label for="year" class="col-md-4 control-label">Year</label>

                            <div class="col-md-3">
                                <!--
                                <select id="year" type="text" class="form-control" name="year" value="{{ old('year') }}" required>
                                -->

                                {{ Form::selectYear('year', 2005, 2017, null, ['class' => 'field form-control']) }}

                                @if ($errors->has('year'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('year') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <!--Engine Capacity-->
                        <div class="form-group{{ $errors->has('engine_capacity') ? ' has-error' : '' }}">
                            <label for="engine_capacity" class="col-md-4 control-label">Car engine_capacity</label>

                            <div class="col-md-3">
                                <input id="engine_capacity" type="number" step="50" min="700" max="5000"class="form-control" name="engine_capacity" value="{{ old('engine_capacity') }}" required>

                                @if ($errors->has('engine_capacity'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('engine_capacity') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <!--transmission-->
                        <div class="form-group{{ $errors->has('transmission') ? ' has-error' : '' }}">
                            <div class="col-md-4 control-label">
                                {{ Form::label('transmission', 'Transmission') }}
                            </div>

                            <div class="col-md-3">
                                {{ Form::label('manual', 'Manual') }}
                                {{ Form::radio('transmission', 'manual', true) }}
                            </div>

                            <div class="col-md-3">
                                {{ Form::label('automatic', 'Automatic') }}
                                {{ Form::radio('transmission', 'automatic') }}
                            </div>

                            @if ($errors->has('transmission'))
                                <span class="help-block">
                                    <strong>{{ $errors->first('transmission') }}</strong>
                                </span>
                            @endif

                        </div>

                        <!--Mileage-->
                        <div class="form-group{{ $errors->has('mileage') ? ' has-error' : '' }}">
                            <label for="mileage" class="col-md-4 control-label">Car Mileage</label>

                            <div class="col-md-3">                              
                                <input id="mileage" type="number" step="1000" min="0" max="400000"class="form-control" name="mileage" value="{{ old('mileage') }}" required>



                                @if ($errors->has('mileage'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('mileage') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!--price-->


                        <!--Picture-->



                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Save
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

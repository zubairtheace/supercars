@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add New Car</div>
                <div class="panel-body">
                    {!! Form::open(
                            [
                                'route' => 'car.store',
                                'method' => 'post',
                                'role' => 'form',
                                'class' => 'form-horizontal',
                                'files' => true
                            ]
                        ) !!}

                        <!--Make-->
                        <div class="form-group{{ $errors->has('make_id') ? ' has-error' : '' }}">
                            <div class="container-fluid">
                                {!! Form::label(
                                        'make_id',
                                        'Make',
                                        [
                                            'class' => 'col-md-4 control-label'
                                        ]
                                    ); !!}

                                <div class="col-md-6">
                                    {!! Form::select(
                                        'make_id',
                                        App\Make::pluck('name', 'id'),
                                        null,
                                        [
                                            'placeholder' => 'Select make...',
                                            'class' => 'form-control'
                                        ]
                                    ); !!}
                                </div>
                            </div>
                            @if ($errors->has('make_id'))
                            <div class="container-fluid">
                                <div class="col-md-8 col-md-offset-4">
                                        <span class="help-block">
                                            <strong>{{ $errors->first('make_id') }}</strong>
                                        </span>
                                </div>
                            </div>
                            @endif
                        </div>


                        <!--Model-->
                        <div class="form-group{{ $errors->has('model') ? ' has-error' : '' }}">
                          <div class="container-fluid">
                              {!! Form::label(
                                      'model',
                                      'Model',
                                      [
                                          'class' => 'col-md-4 control-label'
                                      ]
                                  ); !!}

                              <div class="col-md-6">
                                  {!! Form::text(
                                          'model',
                                          old('model'),
                                          [
                                              'class'=>'form-control',
                                              'required' => 'required'
                                          ]
                                      ); !!}
                              </div>
                          </div>
                          @if ($errors->has('model'))
                          <div class="container-fluid">
                              <div class="col-md-8 col-md-offset-4">
                                      <span class="help-block">
                                          <strong>{{ $errors->first('model') }}</strong>
                                      </span>
                              </div>
                          </div>
                          @endif
                      </div>


                        <!--Color-->

                        <div class="form-group{{ $errors->has('color_id') ? ' has-error' : '' }}">
                            <div class="container-fluid">
                                {!! Form::label(
                                        'color_id',
                                        'Color',
                                        [
                                            'class' => 'col-md-4 control-label'
                                        ]
                                    ); !!}

                                <div class="col-md-6">
                                    {!! Form::select(
                                        'color_id',
                                        App\Color::pluck('name', 'id'),
                                        null,
                                        [
                                            'placeholder' => 'Select color...',
                                            'class' => 'form-control'
                                        ]
                                    ); !!}
                                </div>
                            </div>
                            @if ($errors->has('color_id'))
                            <div class="container-fluid">
                                <div class="col-md-8 col-md-offset-4">
                                        <span class="help-block">
                                            <strong>{{ $errors->first('color_id') }}</strong>
                                        </span>
                                </div>
                            </div>
                            @endif
                        </div>


                        <!--type-->
                        <div class="form-group{{ $errors->has('type') ? ' has-error' : '' }}">

                            <div class="container-fluid">

                                <div class="col-md-4 control-label">
                                    {!! Form::label(
                                            'type',
                                            'Type'
                                        ); !!}
                                </div>

                                <div class="col-md-3">
                                    {!! Form::label(
                                            'new',
                                            'New'
                                        ); !!}

                                    {!! Form::radio(
                                            'type',
                                            'new',
                                            true
                                        ); !!}
                                </div>

                                <div class="col-md-3">
                                    {!! Form::label(
                                            'reconditionned',
                                            'Reconditionned'
                                        ); !!}

                                    {!! Form::radio(
                                            'type',
                                            'reconditionned'
                                        ); !!}
                                </div>
                            </div>

                            @if ($errors->has('type'))
                            <div class="container-fluid">
                                <div class="col-md-8 col-md-offset-4">
                                        <span class="help-block">
                                            <strong>{{ $errors->first('type') }}</strong>
                                        </span>
                                </div>
                            </div>
                            @endif
                        </div>


                        <!--year-->
                        <div class="form-group{{ $errors->has('year') ? ' has-error' : '' }}">
                            <div class="container-fluid">
                                {!! Form::label(
                                        'year',
                                        'Year',
                                        [
                                            'class' => 'col-md-4 control-label'
                                        ]
                                    ); !!}

                                <div class="col-md-6">
                                    {!! Form::selectYear(
                                        'year',
                                        2005,
                                        2017,
                                        null,
                                        [
                                            'placeholder' => 'Select Year...',
                                            'class' => 'form-control'
                                        ]
                                    ); !!}
                                </div>
                            </div>
                            @if ($errors->has('year'))
                            <div class="container-fluid">
                                <div class="col-md-8 col-md-offset-4">
                                        <span class="help-block">
                                            <strong>{{ $errors->first('year') }}</strong>
                                        </span>
                                </div>
                            </div>
                            @endif
                        </div>



                        <!--Engine Capacity-->
                        <div class="form-group{{ $errors->has('engine_capacity') ? ' has-error' : '' }}">
                          <div class="container-fluid">
                              {!! Form::label(
                                      'engine_capacity',
                                      'Car Engine Capacity',
                                      [
                                          'class' => 'col-md-4 control-label'
                                      ]
                                  ); !!}

                              <div class="col-md-3">
                                  <div class="input-group">
                                      {!! Form::number(
                                              'engine_capacity',
                                              old('engine_capacity'),
                                              [
                                                  'class'=>'form-control',
                                                  'step'=>'50',
                                                  'min'=>'700',
                                                  'max'=>'7000',
                                                  'required' => 'required'
                                              ]
                                        ); !!}
                                        <span class="input-group-addon" id="basic-addon2">CC</span>
                                    </div>
                              </div>
                          </div>
                          @if ($errors->has('engine_capacity'))
                          <div class="container-fluid">
                              <div class="col-md-8 col-md-offset-4">
                                      <span class="help-block">
                                          <strong>{{ $errors->first('engine_capacity') }}</strong>
                                      </span>
                              </div>
                          </div>
                          @endif
                      </div>


                        <!--transmission-->
                        <div class="form-group{{ $errors->has('transmission') ? ' has-error' : '' }}">

                            <div class="container-fluid">

                                <div class="col-md-4 control-label">
                                    {!! Form::label(
                                            'transmission',
                                            'Transmission'
                                        ); !!}
                                </div>

                                <div class="col-md-3">
                                    {!! Form::label(
                                            'manual',
                                            'Manual'
                                        ); !!}

                                    {!! Form::radio(
                                            'transmission',
                                            'manual',
                                            true
                                        ); !!}
                                </div>

                                <div class="col-md-3">
                                    {!! Form::label(
                                            'automatic',
                                            'Automatic'
                                        ); !!}

                                    {!! Form::radio(
                                            'transmission',
                                            'automatic'
                                        ); !!}
                                </div>
                            </div>

                            @if ($errors->has('transmission'))
                            <div class="container-fluid">
                                <div class="col-md-8 col-md-offset-4">
                                        <span class="help-block">
                                            <strong>{{ $errors->first('transmission') }}</strong>
                                        </span>
                                </div>
                            </div>
                            @endif
                        </div>

                        <!--Mileage-->
                        <div class="form-group{{ $errors->has('mileage') ? ' has-error' : '' }}">
                          <div class="container-fluid">
                              {!! Form::label(
                                      'mileage',
                                      'Mileage',
                                      [
                                          'class' => 'col-md-4 control-label'
                                      ]
                                  ); !!}

                              <div class="col-md-3">
                                  <div class="input-group">
                                      {!! Form::number(
                                              'mileage',
                                              old('mileage'),
                                              [
                                                  'class'=>'form-control',
                                                  'step'=>'1000',
                                                  'min'=>'0',
                                                  'max'=>'400000',
                                                  'required' => 'required'
                                              ]
                                        ); !!}
                                        <span class="input-group-addon" id="basic-addon2">Miles</span>
                                    </div>
                              </div>
                          </div>
                          @if ($errors->has('mileage'))
                          <div class="container-fluid">
                              <div class="col-md-8 col-md-offset-4">
                                      <span class="help-block">
                                          <strong>{{ $errors->first('mileage') }}</strong>
                                      </span>
                              </div>
                          </div>
                          @endif
                      </div>

                        <!--price-->
                        <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                          <div class="container-fluid">
                              {!! Form::label(
                                      'price',
                                      'Price',
                                      [
                                          'class' => 'col-md-4 control-label'
                                      ]
                                  ); !!}

                              <div class="col-md-3">
                                  <div class="input-group">
                                      <span class="input-group-addon" id="basic-addon2">Rs</span>
                                      {!! Form::number(
                                              'price',
                                              old('price'),
                                              [
                                                  'class'=>'form-control',
                                                  'step'=>'500',
                                                  'min'=>'100000',
                                                  'max'=>'5000000',
                                                  'required' => 'required'
                                              ]
                                        ); !!}
                                    </div>
                              </div>
                          </div>
                          @if ($errors->has('price'))
                          <div class="container-fluid">
                              <div class="col-md-8 col-md-offset-4">
                                      <span class="help-block">
                                          <strong>{{ $errors->first('price') }}</strong>
                                      </span>
                              </div>
                          </div>
                          @endif
                      </div>


                        <!--Picture-->
                        <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
                          <div class="container-fluid">
                              {!! Form::label(
                                      'picture',
                                      'Picture',
                                      [
                                          'class' => 'col-md-4 control-label'
                                      ]
                                  ); !!}

                              <div class="col-md-6">
                                  {!! Form::file(
                                        'picture',
                                        [
                                            'class' => 'image'
                                        ]
                                    ); !!}
                              </div>
                          </div>
                          @if ($errors->has('picture'))
                          <div class="container-fluid">
                              <div class="col-md-8 col-md-offset-4">
                                      <span class="help-block">
                                          <strong class="text-danger">{{ $errors->first('picture') }}</strong>
                                      </span>
                              </div>
                          </div>
                          @endif
                      </div>


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

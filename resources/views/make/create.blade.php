@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1 custom-padding">
            <div class="panel panel-default">
                <div class="panel-heading">Add New Car Make</div>
                <div class="panel-body">

                    {!! Form::open([
                      'route' => 'make.store',
                      'class' => 'form-horizontal',
                      'role' => 'form',
                      'method' => 'POST',
                      ]) !!}


                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <div class="container-fluid">
                                {!! Form::label('name', 'Name',[
                                    'class' => 'col-md-4 control-label'
                                    ]); !!}

                                <div class="col-md-6">
                                    {!! Form::text('name',old('name'),[
                                            'class'=>'form-control',
                                            'required' => 'required'
                                        ]); !!}
                                </div>
                            </div>
                            @if ($errors->has('name'))
                            <div class="container-fluid">
                                <div class="col-md-8 col-md-offset-4">
                                        <span class="help-block">
                                            <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                </div>
                            </div>
                            @endif
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

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Car Make</div>
                <div class="panel-body">
                    {!! Form::open(
                        array(
                            'route' => ['make.update', $make->id],
                            'class' => 'form-horizontal',
                            'role' => 'form',
                            'method' => 'put')) !!}

                    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        There were some problems saving this Make.<br />
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li></li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <div class="form-group">
                        {!! Form::label('make','Car Make',
                            array(
                                'class'=>'col-md-4 control-label'
                            )) !!}

                        <div class="col-md-6">
                            {!! Form::text('make',$make->make,
                                array(
                                    'class'=>'form-control',
                                    'required' => 'required',
                                    'autofocus' => 'autofocus'
                                )) !!}
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            {!! Form::submit('Save',
                                array(
                                    'class' => 'btn btn-primary'
                                )) !!}

                        </div>
                    </div>
                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

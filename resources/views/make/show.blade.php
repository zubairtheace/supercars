@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1 custom-padding">
            <div class="panel panel-default">
                <div class="panel-heading">Car Makes
                    <a href="{{ route('make.edit', $make->id) }}" class="btn btn-primary btn-sm pull-right">Edit </a>
                </div>
                <div class="panel-body">
                    <div>
                        <b>name:</b> {{$make->name}}
                    </div>

                    <div class="panel-footer">

                        {!! Form::open([
                            'route' => ['make.destroy', $make->id],
                            'method' => 'delete',
                            'class' => 'form-horizontal'
                        ]) !!}

                        <button type="submit" class="btn btn-danger">
                            Delete
                        </button>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

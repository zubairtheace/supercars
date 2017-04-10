@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Footer Contact Information
                    <a href="{{ route('footer_opening_hour.edit', $footer_opening_hour->id) }}" class="btn btn-primary btn-sm pull-right">Edit </a>
                </div>
                <div class="panel-body">
                    <div>
                        <b>Week days:</b> {{$footer_opening_hour->week_day}}
                    </div>
                    <div>
                        <b>Week days Opening Hours:</b> {{$footer_opening_hour->week_time}}
                    </div>
                    <div>
                        <b>Week End days:</b> {{$footer_opening_hour->week_end_day}}
                    </div>
                    <div>
                        <b>Week End days Opening Hours:</b> {{$footer_opening_hour->week_end_time}}
                    </div>
                </div>
                <div class="panel-footer">

                    {!! Form::open([
                        'route' => ['footer_opening_hour.destroy', $footer_opening_hour->id],
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
@endsection

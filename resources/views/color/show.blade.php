@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Show Car Color
                    <a href="{{ route('color.edit', $color->id) }}" class="btn btn-primary btn-sm pull-right">Edit </a>
                    <!-- <a href="" class="btn btn-danger btn-sm pull-right">Delete </a> -->
                </div>
                <div class="panel-body">
                  <div>
                    <b>name:</b> {{$color->color}}
                  </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

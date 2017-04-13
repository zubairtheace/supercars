@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1 custom-padding">
            <div class="panel panel-default">
                <div class="panel-heading"><a href="/management/color">Colors</a> <span class="fa fa-chevron-right"></span> {{ $color->name }}
                    <a href="{{ route('color.edit', $color->id) }}" class="btn btn-primary btn-sm pull-right">Edit </a>
                </div>
                <div class="panel-body">
                    <div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th><div class="text-right">Color</th>
                                    <th>#{{ $color->id }}</th>
                                <tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td><div class="text-right">Color</td>
                                    <td>{{ $color->name }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="panel-footer">
                    {!! Form::open(['route' => ['color.destroy', $color->id], 'method' => 'delete', 'class' => 'form-horizontal']) !!}
                        <button type="submit" class="btn btn-danger">Delete</button>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

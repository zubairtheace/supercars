@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Footer Contact Information
                    <a href="{{ route('footer_contact_info.edit', $footer_contact_info->id) }}" class="btn btn-primary btn-sm pull-right">Edit </a>
                </div>
                <div class="panel-body">
                    <div>
                        <b>Phone Number:</b> {{$footer_contact_info->phone_number}}
                    </div>
                    <div>
                        <b>Email:</b> {{$footer_contact_info->email}}
                    </div>
                </div>

                <div class="panel-footer">

                    {!! Form::open([
                        'route' => ['footer_contact_info.destroy', $footer_contact_info->id],
                        'method' => 'delete',
                        'class' => 'form-horizontal'
                    ]) !!}

                        <button type="submit" class="btn btn-danger">Delete</button>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

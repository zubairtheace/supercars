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
                </div>
                <div class="panel-footer">

                  <form class="form-horizontal" role="form" method="POST" action="{{ route('footer_contact_info.destroy', $footer_contact_info->id) }}">
                      {{ method_field('DELETE') }}
                      {{ csrf_field() }}
                      <button type="submit" class="btn btn-danger">
                          Delete
                      </button>
                  </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

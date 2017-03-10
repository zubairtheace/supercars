@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Frequently Asked Questions
                    <a href="{{ route('faq.edit', $color->id) }}" class="btn btn-primary btn-sm pull-right">Edit </a>
                </div>
                <div class="panel-body">
                  <div>
                    <b>Question:</b> {{$faq->question}}
                  </div>
                </div>
                <div class="panel-footer">

                  <form class="form-horizontal" role="form" method="POST" action="{{ route('faq.destroy', faq->id) }}">
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

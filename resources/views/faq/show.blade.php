@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1 custom-padding">
            <div class="panel panel-default">
                <div class="panel-heading">Frequently Asked Questions
                    <a href="{{ route('faq.edit', $faq->id) }}" class="btn btn-primary btn-sm pull-right">Edit </a>
                </div>
                <div class="panel-body">
                    <div>
                        <b>Question:</b> {{$faq->question}}
                    </div>
                </div>
                <div class="panel-footer">
                    <div class="panel-footer">

                        {!! Form::open([
                            'route' => ['faq.destroy', $faq->id],
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
</div>
@endsection

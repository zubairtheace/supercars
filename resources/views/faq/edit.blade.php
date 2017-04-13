@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1 custom-padding">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Faq</div>
                <div class="panel-body">
                    {!! Form::open([
                            'route' => ['faq.update', $faq->id],
                            'class' => 'form-horizontal',
                            'role' => 'form',
                            'method' => 'PUT'
                            ]) !!}

                        <!--Question-->
                        <div class="form-group{{ $errors->has('question') ? ' has-error' : '' }}">
                            <div class="container-fluid">
                                {!! Form::label(
                                    'question',
                                    'Question',
                                    [
                                        'class' => 'col-md-4 control-label'
                                    ]
                                ); !!}

                                <div class="col-md-6">
                                    {!! Form::textarea(
                                        'question',
                                        $faq->question,
                                        [
                                            'class'=>'form-control',
                                            'required' => 'required',
                                            'rows' => '3'
                                        ]
                                    ); !!}
                                </div>
                            </div>
                            @if ($errors->has('question'))
                            <div class="container-fluid">
                                <div class="col-md-8 col-md-offset-4">
                                    <span class="help-block">
                                        <strong>{{ $errors->first('question') }}</strong>
                                    </span>
                                </div>
                            </div>
                            @endif
                        </div>

                        <!--Answer-->
                        <div class="form-group{{ $errors->has('answer') ? ' has-error' : '' }}">
                            <div class="container-fluid">
                                {!! Form::label(
                                    'answer',
                                    'Answer',
                                    [
                                        'class' => 'col-md-4 control-label'
                                    ]
                                ); !!}

                                <div class="col-md-6">
                                    {!! Form::textarea(
                                        'answer',
                                        $faq->answer,
                                        [
                                            'class'=>'form-control',
                                            'required' => 'required',
                                            'rows' => '3'
                                        ]
                                    ); !!}
                                </div>
                            </div>
                            @if ($errors->has('answer'))
                            <div class="container-fluid">
                                <div class="col-md-8 col-md-offset-4">
                                    <span class="help-block">
                                        <strong>{{ $errors->first('answer') }}</strong>
                                    </span>
                                </div>
                            </div>
                            @endif
                        </div>

                        <!-- submit -->

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                    {!! Form::submit(
                                        'Save',
                                        [
                                            'class' => 'btn btn-primary'
                                        ]
                                    ); !!}

                                </div>
                            </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

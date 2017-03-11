@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Add Frequently Asked Questions</div>
                <div class="panel-body">
                    {!! Form::open([
                            'route' => 'faq.store',
                            'class' => 'form-horizontal',
                            'role' => 'form',
                            'method' => 'POST',
                            'files' => true
                            ]) !!}

                    @if (count($errors) > 0)
                    <div class="alert alert-danger">
                        There were some problems saving this FAQ.<br />
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li></li>
                            @endforeach
                        </ul>
                    </div>
                    @endif

                    <div class="form-group">
                        {!! Form::label('question','Question',[
                                'class'=>'col-md-4 control-label'
                            ]); !!}

                        <div class="col-md-6">
                            {!! Form::textarea('question',null,[
                                    'class'=>'form-control',
                                    'rows'=>'3',
                                    'required' => 'required'
                                ]); !!}
                        </div>
                    </div>

                    <div class="form-group">
                        {!! Form::label('answers','Answer',[
                                'class'=>'col-md-4 control-label'
                            ]); !!}

                        <div class="col-md-6">
                            {!! Form::textarea('answer',null,[
                                    'class'=>'form-control',
                                    'rows'=>'3',
                                    'required' => 'required'
                                ]); !!}
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-md-offset-4">
                            {!! Form::submit('Save',[
                                    'class' => 'btn btn-primary'
                                ]); !!}

                        </div>
                    </div>
                    {!! Form::close() !!}

                    <!-- <form class="form-horizontal" role="form" method="POST" action="{{ route('faq.store') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('question') ? ' has-error' : '' }}">
                            <label for="question" class="col-md-4 control-label">Question</label>

                            <div class="col-md-6">
                                <textarea id="question" type="text" class="form-control" name="question" rows="3" value="{{ old('question') }}" required></textarea>

                                @if ($errors->has('question'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('question') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('answer') ? ' has-error' : '' }}">
                            <label for="answer" class="col-md-4 control-label">Answer</label>

                            <div class="col-md-6">
                                <textarea id="answer" type="text" class="form-control" name="answer" rows="3" value="{{ old('answer') }}" required></textarea>

                                @if ($errors->has('answer'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('answer') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Save
                                </button>
                            </div>
                        </div>
                    </form> -->

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

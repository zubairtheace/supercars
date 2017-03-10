@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Faq</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('faq.update', $faq->id) }}">
                        {{ method_field('PUT') }}
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('faq') ? ' has-error' : '' }}">

                          @if ($errors->has('faq'))
                              <span class="help-block">
                                  <strong>{{ $errors->first('faq') }}</strong>
                              </span>
                          @endif

                        </div>


                        <div class="form-group">
                            {!! Form::label('question','Question',
                                array(
                                    'class'=>'col-md-4 control-label'
                                )) !!}

                            <div class="col-md-6">
                                {!! Form::textarea('question',$faq->question,
                                    array(
                                        'class'=>'form-control',
                                        'rows'=>'3',
                                        'required' => 'required'
                                    )) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            {!! Form::label('answers','Answer',
                                array(
                                    'class'=>'col-md-4 control-label'
                                )) !!}

                            <div class="col-md-6">
                                {!! Form::textarea('answer',$faq->answer,
                                    array(
                                        'class'=>'form-control',
                                        'rows'=>'3',
                                        'required' => 'required'
                                    )) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                {!! Form::submit('Update',
                                    array(
                                        'class' => 'btn btn-primary'
                                    )) !!}

                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

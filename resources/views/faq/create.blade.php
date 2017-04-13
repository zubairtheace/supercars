@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1 custom-padding">
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
                                         old('question'),
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
                                         old('answer'),
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

                         <!-- submit button -->
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

                        <!-- @if (count($errors) > 0)
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
                        </div> -->
                    {!! Form::close() !!}


                </div>
            </div>
        </div>
    </div>
</div>
@endsection

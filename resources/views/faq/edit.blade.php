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
                            <label for="faq" class="col-md-4 control-label">Faq</label>

                            <div class="col-md-6">
                                <input id="faq" type="text" class="form-control" name="faq" value="{{ $faq->faq }}" autofocus>

                                @if ($errors->has('faq'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('faq') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Update
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

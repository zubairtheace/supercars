@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1 custom-padding">
            <div class="panel panel-default">
                <div class="panel-heading">Car Makes
                    <a href="{{ route('make.create') }}" class="btn btn-primary btn-sm pull-right">Add </a>
                </div>
                <div class="panel-body table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th></th>
                                <th><div class="pull-right">Actions</div></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($makes as $make)
                            <tr>
                                <td><strong>{{ $make->name }}</strong></td>
                                <td>
                                    <div class="pull-right">
                                        {!! Form::open([
                                            'route' => ['make.destroy', $make->id],
                                            'method' => 'delete',
                                            'class' => 'form-horizontal'
                                        ]) !!}
                                            <a href="{{ route('make.edit', $make->id) }}"><span class="fa fa-pencil"></span></a>
                                            &nbsp;
                                            <button type="submit" class="fa fa-trash"></button>

                                        {!! Form::close() !!}
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td>No Car Makes</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <div>
                        {{ $makes->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

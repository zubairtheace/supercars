@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1 custom-padding">
            <div class="panel panel-default">
                <div class="panel-heading"><a href="/quotation">Quotations</a> <span class="fa fa-chevron-right"></span> #{{ $quotation->id }}
                </div>
                <div class="panel-body">
                    <div>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th><div class="text-right"><strong>Quotation</strong></th>
                                    <th>#{{ $quotation->id }}</th>
                                <tr>
                            </thead>

                            <tbody>
                                <tr>
                                    <td><div class="text-right"><strong>Name</strong></td>
                                    <td><a href="{{ route('user.show', $quotation->user_id) }}">{{ $quotation->user->first_name }} {{ $quotation->user->last_name }}</a></td>
                                </tr>

                                <tr>
                                    <td><div class="text-right"><strong>Car</strong></td>
                                    <td><a href="{{ route('car.show', $quotation->car_id) }}">{{ $quotation->car->make->name }} {{ $quotation->car->model }}</a></td>
                                </tr>

                                <tr>
                                    <td><div class="text-right"><strong>Message</strong></td>
                                    <td>{{ $quotation->message }}</a></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="panel-footer">

                    {!! Form::open([
                        'route' => ['quotation.destroy', $quotation->id],
                        'method' => 'delete',
                        'class' => 'form-horizontal'
                    ]) !!}

                    <button type="submit" class="btn btn-danger">
                        Delete
                    </button>

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

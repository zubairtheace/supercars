@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1 custom-padding">
            <div class="panel panel-default">
                <div class="panel-heading">Quotations</div>
                <div class="panel-body table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Quotation #</th>
                                <th>Name</th>
                                <th>Car</th>
                                <th><div class="pull-right">Actions</div></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($quotations as $quotation)
                            <tr>
                                <td>{{ $quotation->id }}</td>
                                <td>{{ $quotation->user->first_name }} {{ $quotation->user->last_name }}</td>
                                <td>{{ $quotation->car->make->name }} {{ $quotation->car->model }}</td>
                                <td>
                                    <div class="pull-right">
                                        <a href="{{ route('quotation.show', $quotation->id) }}"><span class="fa fa-eye"></span></a>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="4">No Quotations</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <div>
                        {{ $quotations->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

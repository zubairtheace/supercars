@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1 custom-padding">
            <div class="panel panel-default">
                <div class="panel-heading">Users
                </div>
                <div class="panel-body table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>User Name</th>
                                <th>User Type</th>
                                <th><div class="pull-right">Actions</div></th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($users as $user)
                            <tr>
                                <td>{{ $user->first_name }} {{ $user->last_name }}</td>
                                <td>{{ $user->user_type }}</td>
                                <td>
                                    <div class="pull-right">
                                        <a href="{{ route('user.show', $user->id) }}"><span class="fa fa-eye"></span></a>
                                        &nbsp;
                                        &nbsp;
                                        <a href="{{ route('user.edit', $user->id) }}"><span class="fa fa-pencil"></span></a>
                                    </div>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td>No users</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

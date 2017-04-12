@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1 custom-padding">
            <div class="panel panel-default">
                <?php
                    if (Auth::guest() != true){
                        if (Auth::user()->user_type == "admin"){
                            ?>
                            <div class="panel-heading"><a href="/user">Users</a> <span class="fa fa-chevron-right"></span> {{ $user->first_name }} {{ $user->last_name }}
                                <a href="{{ route('user.edit', $user->id) }}" class="btn btn-primary btn-sm pull-right">Edit </a>
                            </div>
                            <?php
                        }
                        else{
                            ?>
                            <div class="panel-heading">My Profile</div>
                            <?php
                        }
                    }
                ?>

                <div class="panel-body">
                    <div>
                        <table class="table table-striped table-responsive">
                            <thead>
                                <tr>
                                    <th><div class="text-right">User</th>
                                    <th>#{{ $user->id }}</th>
                                <tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td><div class="text-right"><strong>First Name</strong></div></td>
                                    <td>{{ $user->first_name }}</td>
                                </tr>

                                <tr>
                                    <td><div class="text-right"><strong>Last Name</strong></div></td>
                                    <td>{{ $user->last_name }}</td>
                                </tr>

                                <?php
                                    if (Auth::guest() != true){
                                        if (Auth::user()->user_type == "admin"){
                                            ?>
                                                <tr>
                                                    <td><div class="text-right"><strong>User Type</strong></div></td>
                                                    <td>{{ $user->user_type }}</td>
                                                </tr>
                                            <?php
                                        }
                                    }
                                 ?>

                                <tr>
                                    <td><div class="text-right"><strong>National Identity Card Number</strong></div></td>
                                    <td>{{ $user->nic }}</td>
                                </tr>

                                <tr>
                                    <td><div class="text-right"><strong>Gender</strong></div></td>
                                    <td><div class="text-capitalize">{{ $user->gender }}</div></td>
                                </tr>

                                <tr>
                                    <td><div class="text-right"><strong>Date of Birth</strong></div></td>
                                    <td>{{ $user->dob }}</td>
                                </tr>

                                <tr>
                                    <td><div class="text-right"><strong>Address</strong></div></td>
                                    <td><address>{{ $user->address }}</address></td>
                                </tr>

                                <tr>
                                    <td><div class="text-right"><strong>Phone Number</strong></div></td>
                                    <td>{{ $user->phone_number }}</td>
                                </tr>

                                <tr>
                                    <td><div class="text-right"><strong>E-mail Address</strong></div></td>
                                    <td>{{ $user->email }}</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
                <?php
                    if (Auth::guest() != true){
                        if (Auth::user()->user_type == "admin"){
                            ?>
                                <div class="panel-footer">
                                    {!! Form::open([
                                        'route' => ['user.destroy', $user->id],
                                        'method' => 'delete',
                                        'class' => 'form-horizontal'
                                    ]) !!}
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    {!! Form::close() !!}
                                </div>
                            <?php
                        }
                    }
                 ?>
            </div>
        </div>
    </div>
</div>
@endsection

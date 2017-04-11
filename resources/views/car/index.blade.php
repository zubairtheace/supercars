@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                <div class="panel-heading">Our Cars
                    <?php
                        if (Auth::guest() != true){
                            if (Auth::user()->user_type == "admin"){
                                ?>
                                    <a href="{{ route('car.create') }}" class="btn btn-primary btn-sm pull-right">Add </a>
                                <?php
                            }
                        }
                     ?>
                </div>
                <div class="panel-body">
                    <table class="table table-bordered table-striped">
                        @forelse($cars as $car)
                        <tr>
                            <td>
                                <div class="panel-heading col-md-12">
                                    <b class="lead">{{$car->make->name}} {{$car->model}}  </b><small class="text-uppercase mark"><em> ({{$car->type}})</em></small>
                                    <div class="pull-right">
                                        <a href="{{ route('car.show', $car->id) }}" class="btn btn-primary btn-sm">View </a>
                                        <?php
                                            if (Auth::guest() != true){
                                                if (Auth::user()->user_type == "admin"){
                                                    ?>
                                                        <a href="{{ route('car.edit', $car->id) }}" class="btn btn-primary btn-sm">Edit </a>
                                                    <?php
                                                }
                                            }
                                         ?>                                             
                                    </div><hr>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <img class="img-rounded img-thumbnail" src="/library/images/{{$car->picture}}" />
                                    </div>
                                    <div class="col-md-4 text-center">
                                        <p><b>Engine Capacity: </b> {{$car->engine_capacity}}cc</p>
                                        <p class="text-capitalize"><b>Transmission: </b> {{$car->transmission}}</p>
                                        <p class="lead"><b>Price: </b>Rs {{$car->price}}</p>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td>No cars </td>
                        </tr>
                        @endforelse
                    </table>
                    <div>
                        {{ $cars->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

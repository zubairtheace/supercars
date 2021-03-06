@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1 custom-padding">
            <div class="panel panel-default">
                <div class="panel-heading"><a href="/management/car">Our Cars</a> <span class="fa fa-chevron-right"></span> {{$car->make->name}} {{$car->model}}
                    <?php
                        if (Auth::guest() != true){
                            if (Auth::user()->user_type == "admin"){
                                ?>
                                    <a href="{{ route('car.edit', $car->id) }}" class="btn btn-primary btn-sm pull-right">Edit </a>
                                <?php
                            }
                        }
                     ?>
                </div>
                <div class="panel-body">
                    <div class=" text-centers ">
                        <img width="100%" class="img-rounded img-responsive" src="/library/images/{{$car->picture}}" />
                        <br>
                        <p><b><a href="https://www.google.mu/search?q={{$car->make->name}}-{{$car->model}}&espv=2&source=lnms&tbm=isch" target="_blank">View More Pictures</a></b></p>
                    <hr>
                    </div>
                    <div class="col-md-6">
                        <p><b>Make:</b> {{$car->make->name}}</p>
                        <p><b>Model:</b> {{$car->model}}</p>
                        <p><b>Type:</b> {{$car->type}}</p>
                        <p><b>Year:</b> {{$car->year}}</p>
                        <p><b>Color:</b> {{$car->color->name}}</p>
                    </div>
                    <div class="col-md-6">
                        <p><b>Engine Capacity:</b> {{$car->engine_capacity}}cc</p>
                        <p><b>Transmission:</b> {{$car->transmission}}</p>
                        <p><b>Mileage:</b> {{$car->mileage}} Miles</p>
                        <p class="lead"><b>Price: </b>Rs {{$car->price}}</p>
                        <!-- <a href="{{ url('/management/car/quotation', $car->id) }}" class="btn btn-primary">Request Quotation</a> -->
                        <?php
                        if (Auth::guest() != true){
                            if (Auth::user()->user_type == "admin" || Auth::user()->user_type == "registered"){
                                ?>
                                    <a href="/quotation/create/{{$car->id}}" class="btn btn-primary btn-sm ">Request Quotation</a>
                                <?php
                            }
                        }
                        else {
                            ?>
                                <a href="/login" class="btn btn-primary">Login to Request Quotation</a>
                            <?php
                        }
                        ?>

                    </div>
                </div>
                <?php
                    if (Auth::guest() != true){
                        if (Auth::user()->user_type == "admin"){
                            ?>
                                <div class="panel-footer">
                                    {!! Form::open(['route' => ['car.destroy', $car->id], 'method' => 'delete', 'class' => 'form-horizontal']) !!}
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

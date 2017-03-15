@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Car
                    <a href="{{ route('car.edit', $car->id) }}" class="btn btn-primary btn-sm pull-right">Edit </a>
                </div>
                <div class="panel-body">
                  <div>
                    <p><b>Make:</b> {{$car->make_id}}</p>
                    <p><b>Model:</b> {{$car->model}}</p>
                    <p><b>Color:</b> {{$car->color_id}}</p>
                    <p><b>Year:</b> {{$car->year}}</p>
                    <p><b>Engine Capacity:</b> {{$car->engine_capacity}}cc</p>
                    <p><b>Picture thumbnail:</b> <img src="/library/thumbnails/{{$car->picture}}" /></p>
                    <p><b>Picture orginial:</b> <img src="/library/images/{{$car->picture}}" /></p>
                  </div>
                </div>
                <div class="panel-footer">
                  {!! Form::open(['route' => ['car.destroy', $car->id], 'method' => 'delete', 'class' => 'form-horizontal']) !!}
                      <button type="submit" class="btn btn-danger">
                          Delete
                      </button>
                  </form>
                  {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

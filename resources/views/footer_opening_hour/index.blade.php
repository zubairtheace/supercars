@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1 custom-padding">
            <div class="panel panel-default">
                <div class="panel-heading">Footer Contact Information
                    <!-- <a href="{{ route('footer_opening_hour.create') }}" class="btn btn-primary btn-sm pull-right">Add </a> -->
                </div>
                <div class="panel-body">
                    <table class="table table-striped table-bordered">
                        @forelse($footer_opening_hours as $footer_opening_hour)
                        <tr>
                            <td>
                                <div>
                                    <div>
                                        <b>{{$footer_opening_hour->week_day}}</b>
                                    </div>
                                    <div>
                                        {{$footer_opening_hour->week_time}}
                                    </div>
                                </div>
                            </td>
                        <tr>
                            <td>
                                <div>
                                    <div>
                                        <b>{{$footer_opening_hour->week_end_day}}</b>
                                    </div>
                                    <div>
                                        {{$footer_opening_hour->week_end_time}}
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div class="btn-toolbar pull-right">
                                    <!-- <div class="btn-group">
                                        <a href="{{ route('footer_opening_hour.show', $footer_opening_hour->id) }}" class="btn btn-primary btn-sm">View </a>
                                    </div> -->
                                    <div class="btn-group">
                                        <a href="{{ route('footer_opening_hour.edit', $footer_opening_hour->id) }}" class="btn btn-primary btn-sm">Modify </a>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td>No Opening Hours to display </td>
                        </tr>
                        @endforelse
                    </table>
                    <div>
                        {{ $footer_opening_hours->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

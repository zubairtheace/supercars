@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1 custom-padding">
            <div class="panel panel-default">
                <div class="panel-heading">Frequently Asked Questions
                    <?php
                        if (Auth::guest() != true){
                            if (Auth::user()->user_type == "admin"){
                                ?>
                                    <a href="{{ route('faq.create') }}" class="btn btn-primary btn-sm pull-right">Add </a>
                                <?php
                            }
                        }
                     ?>
                </div>
                <div class="panel-body table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <?php
                            if (Auth::guest() != true){
                                if (Auth::user()->user_type == "admin"){
                                    ?>
                                        <thead>
                                            <tr>
                                                <th></th>
                                                <th><div class="pull-right">Actions</div></th>
                                            </tr>
                                        </thead>
                                    <?php
                                }
                            }
                         ?>
                        <tbody>
                            @forelse($faqs as $faq)
                            <tr>
                                <td><strong>{{ $faq->question }}</strong></td>
                                <?php
                                    if (Auth::guest() != true){
                                        if (Auth::user()->user_type == "admin"){
                                            ?>
                                                <td>
                                                    <div class="pull-right">
                                                        {!! Form::open([
                                                            'route' => ['faq.destroy', $faq->id],
                                                            'method' => 'delete',
                                                            'class' => 'form-horizontal'
                                                        ]) !!}
                                                            <a href="{{ route('faq.edit', $faq->id) }}"><span class="fa fa-pencil"></span></a>
                                                            &nbsp;
                                                            <button type="submit" class="fa fa-trash"></button>

                                                        {!! Form::close() !!}
                                                    </div>
                                                </td>
                                            <?php
                                        }
                                    }
                                 ?>

                            </tr>
                            <tr>
                                <td>{{ $faq->answer }}</td>
                            </tr>
                            @empty
                            <tr>
                                <td>No Frequently Asked Questions</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                    <div>
                        {{ $faqs->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

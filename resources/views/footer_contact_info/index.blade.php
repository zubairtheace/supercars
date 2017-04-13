@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1 custom-padding">
            <div class="panel panel-default">
                <div class="panel-heading">Contact Information
                    <!-- <a href="{{ route('footer_contact_info.create') }}" class="btn btn-primary btn-sm pull-right">Add </a> -->
                </div>
                <div class="panel-body">
                    <table class="table table-bordered">
                    @forelse($footer_contact_infos as $footer_contact_info)
                    <tr>
                        <td>
                            <div>
                                <div>
                                    <b>Phone Number:</b> {{$footer_contact_info->phone_number}}
                                </div>
                                <div>
                                    <b>Email:</b> {{$footer_contact_info->email}}
                                </div>
                            </div>
                            <div class="btn-toolbar pull-right">
                                <div class="btn-group">
                                    <a href="{{ route('footer_contact_info.edit', $footer_contact_info->id) }}" class="btn btn-primary btn-sm">Modify</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td>No Footer Contact Information </td>
                    </tr>
                    @endforelse
                    </table>
                    <div>
                        {{ $footer_contact_infos->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

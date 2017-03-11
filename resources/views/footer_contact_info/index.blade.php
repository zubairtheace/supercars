@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Footer Contact Information
                  <a href="{{ route('footer_contact_info.create') }}" class="btn btn-primary btn-sm pull-right">Add </a>
                </div>
                <div class="panel-body">
                  <table class="table">
                    @forelse($footer_contact_infos as $footer_contact_info)
                      <tr>
                        <td>
                          <b>question</b> {{$footer_contact_info->phone_number}}
                          <div class="btn-toolbar pull-right">
                            <div class="btn-group">
                              <a href="{{ route('footer_contact_info.show', $footer_contact_info->id) }}" class="btn btn-primary btn-sm">View </a>
                            </div>
                            <div class="btn-group">
                              <a href="{{ route('footer_contact_info.edit', $footer_contact_info->id) }}" class="btn btn-primary btn-sm">Edit </a>
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

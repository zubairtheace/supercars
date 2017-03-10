@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Frequently Asked Questions
                  <a href="{{ route('faq.create') }}" class="btn btn-primary btn-sm pull-right">Add </a>
                </div>
                <div class="panel-body">
                  <table class="table">
                    @forelse($faqs as $faq)
                      <tr>
                        <td>
                          <b>question</b> {{faq->faq}}
                          <div class="btn-toolbar pull-right">
                            <div class="btn-group">
                              <a href="{{ route('faq.show', $faq->id) }}" class="btn btn-primary btn-sm">View </a>
                            </div>
                            <div class="btn-group">
                              <a href="{{ route('faq.edit', $faq->id) }}" class="btn btn-primary btn-sm">Edit </a>
                            </div>
                          </div>
                        </td>
                      </tr>
                    @empty
                    <tr>
                      <td>No Faqs </td>
                    </tr>
                    @endforelse
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

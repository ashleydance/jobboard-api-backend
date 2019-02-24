@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Approve Job</div>

                <div class="card-body">
                    <h3>{{ $job->title }}</h3>
                    <h5>{{ $job->company }}</h5>
                    <p>{{ $job->description  }}</p>

                    <form method="POST" action="/jobs/{{ $job->id }}">
                        @method('PUT')
                        @csrf
                        @if ( $job->approved === 0 )
                            <input type="hidden" name="approved" value="true" />
                            <button type="submit" class="btn btn-primary">Approve</button>
                        @else
                            <input type="hidden" name="approved" value="false" />
                            <button type="submit" class="btn btn-danger">Unapprove</button>
                        @endif
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

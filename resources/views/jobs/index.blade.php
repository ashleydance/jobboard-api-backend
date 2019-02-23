@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">All Jobs</div>

                <div class="card-body">
                  @foreach ($jobs as $job)
                    <h2>{{$job->title}}</h2>
                    <ul>
                        @foreach ($job->tags as $tag)
                          <li>{{ $tag->name }}</li>
                        @endforeach
                    </ul>
                  @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

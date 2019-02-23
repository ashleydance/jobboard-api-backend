@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Job</div>

                <div class="card-body">

                <form method="post" action="/jobs">
                    @csrf
                    <div class="form-group">
                        <label for="title">Job title</label>
                        <input type="text" class="form-control" name="title" id="title">
                    </div>
                    <div class="form-group">
                        <label for="company">Company</label>
                        <input type="text" class="form-control" name="company" id="company">
                    </div>
                    <div class="form-group">
                        <label for="description">Job Description</label>
                        <textarea class="form-control" name="description" id="description" rows="5"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

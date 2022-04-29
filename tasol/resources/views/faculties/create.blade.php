@extends('layouts.app')

@section('content')
    <div class="container p-5">
        <div class="card col-6">
            <div class="card-header">
                New Faculty
            </div>
            <div class="card-body">
                <form action="{{ route('faculties.store') }}" method="POST">
                    @csrf
                    <div class="form-group ">
                        <label class="form-label" for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control" maxlength="200" minlength="1">
                        <label class="form-label" for="term_id" class="label">Email</label>
                        <input type="email" name="email" id="email" class="form-control">
                    </div>
                    <div class="mt-3">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop

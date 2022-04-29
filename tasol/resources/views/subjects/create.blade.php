@extends('layouts.app')

@section('content')
    <div class="container p-5">
        <div class="card col-6">
            <div class="card-header">
                New Subject
            </div>
            <div class="card-body">
                <form action="{{ route('subjects.store') }}" method="POST">
                    @csrf
                    <div class="form-group ">
                        <label class="form-label" for="name">Name</label>
                        <input type="text" name="name" id="name" class="form-control" maxlength="200" minlength="1">
                        <label class="form-label" for="term_id" class="label">Term</label>
                        <select name="term_id" id="term_id" class="form-control">
                            @foreach ($terms as $term)
                                <option value="{{ $term->id }}">{{ $term->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mt-3">
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@stop

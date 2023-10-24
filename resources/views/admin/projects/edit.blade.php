@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="my-3">Editing: {{ $project->name }}</h1>

        <form action="{{ route('admin.projects.update', $project) }}" method="POST" class="row g-3 mb-3">
            @csrf
            @method('PUT')

            <div class="col-6">
                <label for="name">Project name</label>
                <input type="text" id="name" name="name" class="form-control" value="{{ $project->name }}">
            </div>

            <div class="col-6">
                <label for="link">Link</label>
                <input type="text" id="link" name="link" class="form-control" value="{{ $project->link }}">
            </div>

            <div class="col-6">
                <label for="description">Description</label>
                <textarea id="description" name="description" class="form-control">{{ $project->description }}</textarea>
            </div>

            <div class="col-6">
            </div>

            <div class="col">
                <button class="btn btn-success">Edit</button>
            </div>
        </form>

        <a href="{{ route('admin.projects.index') }}" class="btn btn-outline-primary">Go back to list</a>
    </div>
@endsection

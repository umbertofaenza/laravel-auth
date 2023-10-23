@extends('layouts.app')


@section('content')
    <div class="container my-5">
        <a href="{{ route('admin.projects.index') }}" class="btn btn-primary mb-3">Back to list</a>

        <h1 class="mb-5">{{ $project->name }}</h1>

        <div class="row g-5">
            <div class="col-6">
                <h4>id:</h4>
                {{ $project->id }}
            </div>
            <div class="col-6">
                <h4>Description:</h4>
                {{ $project->description }}
            </div>
            <div class="col-6">
                <h4>Link:</h4>
                {{ $project->link }}
            </div>
            <div class="col-6">
                <h4>Slug:</h4>
                {{ $project->slug }}
            </div>
        </div>

    </div>
@endsection
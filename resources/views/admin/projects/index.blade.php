@extends('layouts.app')


@section('content')
    <div class="container my-5">

        <a href="{{ route('admin.projects.create') }}" class="btn btn-outline-primary mb-3">Add project</a>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Project</th>
                    <th scope="col">Description</th>
                    <th scope="col">Link</th>
                    <th scope="col">Slug</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @forelse($projects as $project)
                    <tr>
                        <th scope="row">{{ $project->id }}</th>
                        <td>{{ $project->name }}</td>
                        <td>{{ $project->description }}</td>
                        <td>{{ $project->link }}</td>
                        <td>{{ $project->slug }}</td>
                        <td>
                            <a href="{{ route('admin.projects.show', $project) }}">Show</a>
                            <a href="{{ route('admin.projects.edit', $project) }}">Edit</a>
                        </td>
                    </tr>
                @empty
                    <td colspan="6">No projects yet.</td>
                @endforelse
            </tbody>
        </table>

    </div>
@endsection

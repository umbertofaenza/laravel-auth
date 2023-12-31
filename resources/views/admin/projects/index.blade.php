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

                            <a href="#" data-bs-toggle="modal"
                                data-bs-target="#deleteModal-{{ $project->id }}">Delete</a>
                        </td>
                    </tr>
                @empty
                    <td colspan="6">No projects yet.</td>
                @endforelse
            </tbody>
        </table>
    </div>
@endsection

@section('modals')
    @foreach ($projects as $project)
        <div class="modal fade" id="deleteModal-{{ $project->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Deleting project</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        Are you sure you want to delete this project?
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>

                        <form action="{{ route('admin.projects.destroy', $project) }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <button class="btn btn-danger">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection

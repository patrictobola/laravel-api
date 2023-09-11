@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="fs-4 text-secondary my-4">
            {{ __('Dashboard') }}
        </h2>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th scope="col">Label</th>
                    <th scope="col">Color</th>
                    <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($technologies as $technology)
                    <tr>
                        <th>{{ $technology->label }}</th>
                        <td>
                            <span class="badge rounded-pill" style="background-color:{{ $technology->color }}">Color
                                TEST</span>
                        </td>
                        <td>
                            <div class="d-flex justify-content-end">
                                <a class="btn btn-warning me-2"
                                    href="{{ route('admin.technologies.edit', $technology) }}">Edit</a>
                                <form action="{{ route('admin.technologies.destroy', $technology) }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <a class="btn btn-primary" href="{{ route('admin.technologies.create') }}">Create a new technology</a>

    </div>
@endsection

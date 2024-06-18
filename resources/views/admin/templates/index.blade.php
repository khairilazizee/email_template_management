<!-- resources/views/admin/templates/index.blade.php -->
@extends('dashboard')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Email Templates') }}</div>

                    <div class="card-body">
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('admin.templates.create') }}" class="btn btn-primary">Create Template</a>
                        </div>
                        <table class="table mt-3">
                            <thead>
                                <tr>
                                    <th>Code</th>
                                    <th>Name</th>
                                    <th>Subject</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($templates as $template)
                                    <tr>
                                        <td>{{ $template->code }}</td>
                                        <td>{{ $template->name }}</td>
                                        <td>{{ $template->subject }}</td>
                                        <td>
                                            <a href="{{ route('admin.templates.edit', $template->id) }}"
                                                class="btn btn-warning btn-sm">Edit</a>
                                            <form action="{{ route('admin.templates.destroy', $template->id) }}"
                                                method="POST" style="display:inline-block;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

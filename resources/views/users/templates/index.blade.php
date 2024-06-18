<!-- resources/views/user/templates/index.blade.php -->
@extends('dashboard')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('My Templates') }}</div>

                    <div class="card-body">
                        <table class="table mt-3">
                            <thead>
                                <tr>
                                    <th>Template Code</th>
                                    <th>Title</th>
                                    <th>Subjects</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($userTemplates as $userTemplate)
                                    <tr>
                                        <td>{{ $userTemplate->emailTemplates->code }}</td>
                                        <td>{{ $userTemplate->title }}</td>
                                        <td>{{ $userTemplate->subject }}</td>
                                        <td>
                                            <a href="{{ route('users.templates.edit', $userTemplate->id) }}"
                                                class="btn btn-warning btn-sm">Edit</a>
                                            <form action="{{ route('users.templates.destroy', $userTemplate->id) }}"
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

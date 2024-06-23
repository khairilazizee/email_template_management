<!-- resources/views/admin/templates/edit.blade.php -->
@extends('dashboard')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Edit Email Template') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.templates.update', $template->id) }}">
                            @csrf
                            @method('PUT')

                            <div class="row">
                                <div class="form-group mb-4 col-2">
                                    <label for="action_code">{{ __('Code') }}</label>
                                    <input type="text" class="form-control" id="action_code" name="action_code"
                                        value="{{ $template->code }}" readonly>
                                </div>

                                <div class="form-group mb-4 col">
                                    <label for="name">{{ __('Name') }}</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        value="{{ $template->name }}" required>
                                </div>

                                <div class="form-group mb-4 col">
                                    <label for="name">{{ __('Subject') }}</label>
                                    <input type="text" class="form-control" id="name" name="name"
                                        value="{{ $template->subject }}" required>
                                </div>
                            </div>

                            <div class="form-group mb-4">
                                <label for="header">{{ __('Header') }}</label>
                                <textarea class="ckeditor form-control" id="header" name="header" required>{{ $template->header }}</textarea>
                            </div>

                            <div class="form-group mb-4">
                                <label for="content">{{ __('Content') }}</label>
                                <textarea class="ckeditor form-control" id="content" name="content" required>{{ $template->content }}</textarea>
                            </div>

                            <div class="form-group mb-4">
                                <label for="footer">{{ __('Footer') }}</label>
                                <textarea class="ckeditor form-control" id="footer" name="footer" required>{{ $template->footer }}</textarea>
                            </div>

                            <button type="submit" class="btn btn-primary">{{ __('Update') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

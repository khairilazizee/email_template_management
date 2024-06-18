<!-- resources/views/admin/templates/create.blade.php -->
@extends('dashboard')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('Create Email Template') }}</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('admin.templates.store') }}">
                            @csrf
                            <div class="row">
                                <div class="form-group mb-4 col-2">
                                    <label for="action_code">{{ __('Code') }}</label>
                                    <input type="text" class="form-control" id="code" name="code" required>
                                </div>

                                <div class="form-group mb-4 col">
                                    <label for="name">{{ __('Name') }}</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>

                                <div class="form-group mb-4 col">
                                    <label for="name">{{ __('Subject') }}</label>
                                    <input type="text" class="form-control" id="subject" name="subject" required>
                                </div>
                            </div>


                            <div class="form-group mb-4">
                                <label for="header">{{ __('Header') }}</label>
                                <textarea cols="30" rows="10" class="ckeditor form-control" id="header" name="header" required></textarea>
                            </div>

                            <div class="form-group mb-4">
                                <label for="content">{{ __('Content') }}</label>
                                <textarea name="content" id="content" class="ckeditor form-control"></textarea>
                            </div>

                            <div class="form-group mb-4">
                                <label for="footer">{{ __('Footer') }}</label>
                                <textarea cols="30" rows="10" class="ckeditor form-control" id="footer" name="footer" required></textarea>
                            </div>


                            <button type="submit" class="btn btn-primary">{{ __('Create') }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

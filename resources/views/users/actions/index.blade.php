<!-- resources/views/user/templates/index.blade.php -->
@extends('dashboard')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">{{ __('My Action') }}</div>

                    <div class="card-body">
                        @foreach ($userActions as $action)
                            <form action="" method="POST">
                                @csrf
                                @method('PUT')
                                <h2>{{ $action->name }}</h2>
                                <input type="checkbox" name="status" value="1" id=""> active
                                <div class="form-group mb-4">
                                    <label for="content">{{ __('Content') }}</label>
                                    <textarea class="ckeditor form-control" id="content" name="content" required>{{ $action->emailTemplates->modified_content }}</textarea>
                                </div>
                                <input type="hidden" name="user_action_id" value={{ $action->id }}>
                                <input type="hidden" name="user_template_id" value={{ $action->emailTemplates->id }}>
                                <button class="btn btn-primary">submit</button>
                            </form>
                            <br>
                            <hr>
                            <br>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

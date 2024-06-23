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
                                <div class="flex">

                                </div>
                                <h2>{{ $action->name }}</h2>
                                <input type="checkbox" name="" id=""> active
                                <div class="form-group mb-4">
                                    <label for="content">{{ __('Content') }}</label>
                                    <textarea class="ckeditor form-control" id="content" name="content" required>{{ $action->emailTemplates->modified_content }}</textarea>
                                </div>
                                <button>submit</button>
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

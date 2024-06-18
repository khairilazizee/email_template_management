@extends('dashboard')

@section('content')
    @if (session('user_role') === 3)
        admin
    @else
        user
    @endif
@endsection

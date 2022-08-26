@extends('admin.layouts.base', ['title' => '401'])

@section('content')
    <!-- 401 Error Text -->
    <div class="text-center">
        <div class="error mx-auto" data-text="401">401</div>
        <p class="lead text-gray-800 mb-5">Not Authorized</p>
        <p class="text-gray-500 mb-0">Sorry, You can't access this page</p>
        <a href="{{ route('admin.dashboard') }}">&larr; Back to Dashboard</a>
    </div>
@endsection
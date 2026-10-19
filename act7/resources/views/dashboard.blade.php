@extends('layouts.app')

@section('content')
{{-- ===================== DASHBOARD (authenticated users) ===================== --}}
<div class="container">

    {{-- Header --}}
    <div class="d-flex justify-content-between align-items-center flex-wrap gap-2 mb-4">
        <div>
            <span class="badge bg-success text-uppercase mb-2 px-3 py-2">Dashboard</span>
            <h1 class="h3 mb-0">Hello, {{ $user->name }}</h1>
            <p class="text-muted mb-0">You are logged in. This area is only available to authenticated users.</p>
        </div>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="btn btn-outline-danger">Logout</button>
        </form>
    </div>

    @if (session('status'))
        <div class="alert alert-success" role="alert">{{ session('status') }}</div>
    @endif

    {{-- Summary cards --}}
    <div class="row g-4 mb-4">
        <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body">
                    <p class="text-muted text-uppercase small mb-1">Registered users</p>
                    <p class="display-6 fw-bold mb-0">{{ $totalUsers }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body">
                    <p class="text-muted text-uppercase small mb-1">Your email</p>
                    <p class="h5 mb-0 text-break">{{ $user->email }}</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card border-0 shadow-sm h-100">
                <div class="card-body">
                    <p class="text-muted text-uppercase small mb-1">Member since</p>
                    <p class="h5 mb-0">{{ $user->created_at?->format('d/m/Y H:i') }}</p>
                </div>
            </div>
        </div>
    </div>

    {{-- Recent users table --}}
    <div class="card border-0 shadow-sm">
        <div class="card-header bg-dark text-white">Latest registered users</div>
        <div class="table-responsive">
            <table class="table table-hover mb-0">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Registered</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($recentUsers as $item)
                        <tr @class(['table-success' => $item->id === $user->id])>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                            <td>{{ $item->created_at?->format('d/m/Y H:i') }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

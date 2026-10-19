@extends('layouts.app')

@section('content')
{{-- ===================== LANDING PAGE (guests) ===================== --}}
<div class="container">

    {{-- Hero section --}}
    <section class="landing-hero text-center text-white rounded-4 shadow mb-5">
        <span class="badge bg-light text-dark text-uppercase mb-3 px-3 py-2">Landing Page</span>
        <h1 class="display-5 fw-bold mb-3">Welcome to {{ config('app.name', 'Laravel') }}</h1>
        <p class="lead mb-4 mx-auto" style="max-width: 640px;">
            A secure web application built with Laravel, Vue and Bootstrap.
            Create your account to access your personal dashboard.
        </p>
        <div class="d-flex justify-content-center gap-3 flex-wrap">
            <a href="{{ route('register') }}" class="btn btn-light btn-lg px-4">Get started</a>
            <a href="{{ route('login') }}" class="btn btn-outline-light btn-lg px-4">I already have an account</a>
        </div>
    </section>

    {{-- Features --}}
    <section class="mb-5">
        <h2 class="h4 text-center mb-4">What you can do here</h2>
        <div class="row g-4">
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <div class="feature-number mb-3">1</div>
                        <h3 class="h5">Register</h3>
                        <p class="text-muted mb-0">Create an account with your name, email and a secure password.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <div class="feature-number mb-3">2</div>
                        <h3 class="h5">Log in securely</h3>
                        <p class="text-muted mb-0">Passwords are stored as hashes and every session is protected.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm">
                    <div class="card-body">
                        <div class="feature-number mb-3">3</div>
                        <h3 class="h5">Use your dashboard</h3>
                        <p class="text-muted mb-0">A private area available only to authenticated users.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <p class="text-center text-muted small">You are viewing this page as a <strong>guest</strong>.</p>
</div>
@endsection

@push('styles')
<style>
    .landing-hero {
        padding: 4.5rem 1.5rem;
        background: linear-gradient(135deg, #0d6efd 0%, #6610f2 100%);
    }
    .feature-number {
        width: 44px;
        height: 44px;
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        font-weight: 700;
        color: #fff;
        background: #0d6efd;
    }
</style>
@endpush

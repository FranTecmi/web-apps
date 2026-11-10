@extends('layouts.site')

@section('title', 'Home')

@push('styles')
<style>
    .cards { display: grid; grid-template-columns: repeat(3, 1fr); gap: 20px; margin-top: 20px; }
    .card { background: #fff; border: 1px solid var(--line); padding: 22px; }
    .card h3 { margin-top: 0; color: var(--green); }
</style>
@endpush

@section('content')
    <section class="hero">
        <span class="eyebrow">Welcome home</span>
        <h1>Hi, I'm Fran.<br>This is my little corner.</h1>
        <p>A simple site built with Laravel and Blade templates for Activity 11.</p>
        <div class="circle"></div>
    </section>

    <section class="section">
        <h2>About this site</h2>
        <p class="muted">Every page extends one main layout, so the menu and the footer are written only once.</p>

        <div class="cards">
            <div class="card">
                <h3>Layouts</h3>
                <p class="muted">The main layout uses @@yield to leave spaces that each view fills with @@section.</p>
            </div>
            <div class="card">
                <h3>Photos</h3>
                <p class="muted">A small gallery generated with a @@foreach loop from data sent by the controller.</p>
            </div>
            <div class="card">
                <h3>Contact</h3>
                <p class="muted">A contact form and other ways to reach me.</p>
            </div>
        </div>
    </section>
@endsection

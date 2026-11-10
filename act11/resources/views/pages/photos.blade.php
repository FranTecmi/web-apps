@extends('layouts.site')

@section('title', 'Photos')

@push('styles')
<style>
    .gallery { display: grid; grid-template-columns: repeat(3, 1fr); gap: 22px; margin-top: 20px; }
    .photo { background: #fff; border: 1px solid var(--line); }
    .photo .img { height: 170px; display: grid; place-items: end start; padding: 12px; }
    .photo .img span { background: rgba(255,255,255,.8); font-size: 11px; padding: 3px 8px; letter-spacing: 1px; }
    .photo .info { padding: 14px 16px; }
    .photo h3 { margin: 0 0 4px; font-size: 18px; }
</style>
@endpush

@section('content')
    <section class="hero">
        <span class="eyebrow">Gallery</span>
        <h1>Moments worth keeping.</h1>
        <p>Some places and memories I like. ({{ count($photos) }} photos)</p>
        <div class="circle"></div>
    </section>

    <section class="section">
        <h2>Photo collection</h2>

        <div class="gallery">
            @forelse ($photos as $photo)
                <div class="photo">
                    <div class="img" style="background: linear-gradient(135deg, {{ $photo['color'] }}, #ffffff);">
                        <span>#{{ $loop->iteration }}</span>
                    </div>
                    <div class="info">
                        <h3>{{ $photo['title'] }}</h3>
                        <small class="muted">{{ $photo['place'] }}</small>
                    </div>
                </div>
            @empty
                <p>There are no photos yet.</p>
            @endforelse
        </div>
    </section>
@endsection

@extends('layouts.site')

@section('title', 'Contact')

@push('styles')
<style>
    .contact { display: grid; grid-template-columns: 1.3fr 1fr; gap: 60px; }
    label { display: block; font-size: 11px; letter-spacing: 2px; text-transform: uppercase; margin: 16px 0 6px; }
    input, textarea { width: 100%; padding: 12px; border: 1px solid var(--line); background: #fff; font: inherit; }
    textarea { height: 90px; resize: vertical; }
    button {
        margin-top: 18px; background: none; border: none; border-top: 2px solid var(--green);
        padding: 8px 0; letter-spacing: 2px; text-transform: uppercase; color: var(--green); cursor: pointer;
    }
    .other { border-left: 1px solid var(--line); padding-left: 30px; }
    .other .item { border-bottom: 1px solid var(--line); padding: 12px 0; }
    .other small { color: var(--muted); }
</style>
@endpush

@section('content')
    <section class="hero">
        <span class="eyebrow">Get in touch</span>
        <h1>Let's start a conversation.</h1>
        <p>Questions, ideas, or just saying hello are always welcome.</p>
        <div class="circle"></div>
    </section>

    <section class="section contact">
        <div>
            <h2>Send a message</h2>
            <p class="muted">Fill in the details below and I'll get back to you soon.</p>
            <form onsubmit="event.preventDefault(); alert('Thanks! (demo form)');">
                <label for="name">Your name</label>
                <input id="name" type="text" placeholder="Alex Morgan">
                <label for="email">Email address</label>
                <input id="email" type="email" placeholder="alex@example.com">
                <label for="message">Message</label>
                <textarea id="message" placeholder="What would you like to talk about?"></textarea>
                <button type="submit">Send message →</button>
            </form>
        </div>

        <div class="other">
            <span class="eyebrow" style="font-size:11px;letter-spacing:3px;color:var(--green);">ELSEWHERE</span>
            <h2>Prefer another way?</h2>
            <div class="item"><small>Email</small><br>fran@example.com</div>
            <div class="item"><small>Location</small><br>Mexico</div>
            <div class="item"><small>Response time</small><br>Usually within two business days</div>
        </div>
    </section>
@endsection

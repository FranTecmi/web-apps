<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fieldnotes - @yield('title')</title>
    <style>
        :root {
            --green: #1f5c4a;
            --green-soft: #e3eee7;
            --paper: #fbfaf5;
            --ink: #1e2b26;
            --muted: #66736d;
            --line: #dfe3dc;
            --accent: #d9534f;
        }
        * { box-sizing: border-box; }
        body {
            margin: 0;
            font-family: "Segoe UI", Arial, sans-serif;
            background: var(--paper);
            color: var(--ink);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        h1, h2, h3 { font-family: Georgia, "Times New Roman", serif; }

        /* Header / menu */
        header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 14px 40px;
            border-bottom: 1px solid var(--line);
            background: var(--paper);
        }
        .brand { display: flex; align-items: center; gap: 10px; text-decoration: none; color: var(--ink); }
        .brand-logo {
            width: 34px; height: 34px; border-radius: 8px;
            background: var(--green); color: #fff;
            display: grid; place-items: center; font-size: 22px; font-weight: bold;
        }
        .brand strong { display: block; font-family: Georgia, serif; font-size: 18px; }
        .brand small { font-size: 10px; letter-spacing: 2px; color: var(--muted); text-transform: uppercase; }
        nav ul { list-style: none; display: flex; gap: 6px; margin: 0; padding: 0; }
        nav a {
            display: block;
            padding: 10px 22px;
            text-decoration: none;
            color: var(--ink);
            font-size: 14px;
            border-left: 3px solid transparent;
            transition: background .2s;
        }
        nav a:hover { background: #f0f3ee; }
        nav a.active {
            background: var(--green-soft);
            border-left-color: var(--green);
            color: var(--green);
            font-weight: 600;
        }
        .active-label { font-size: 11px; letter-spacing: 2px; color: var(--muted); text-transform: uppercase; }
        .active-label::before { content: "●"; color: var(--accent); margin-right: 6px; }

        /* Content */
        main { flex: 1; }
        .hero { background: var(--green-soft); padding: 50px 40px; position: relative; overflow: hidden; }
        .hero .eyebrow { font-size: 11px; letter-spacing: 3px; color: var(--green); text-transform: uppercase; }
        .hero h1 { font-size: 42px; margin: 10px 0; max-width: 520px; line-height: 1.15; }
        .hero p { color: var(--muted); max-width: 520px; }
        .hero .circle {
            position: absolute; right: 60px; top: 20px;
            width: 170px; height: 170px; border-radius: 50%;
            background: #cfe0d4; box-shadow: 0 0 0 25px #dbe8df;
        }
        .section { padding: 40px; max-width: 1100px; }
        .muted { color: var(--muted); }

        /* Footer */
        footer {
            display: flex; justify-content: space-between; align-items: center;
            padding: 20px 40px;
            background: #f1f3ee;
            border-top: 1px solid var(--line);
            font-size: 13px;
        }
        footer small { color: var(--muted); }
        footer .links a { color: var(--muted); text-decoration: none; margin-left: 6px; }
        footer .links a.active { color: var(--green); font-weight: 600; }
    </style>
    @stack('styles')
</head>
<body>
    @php
        $menu = [
            'home' => 'Home',
            'photos' => 'Photos',
            'contact' => 'Contact',
        ];
    @endphp

    <header>
        <a href="{{ route('home') }}" class="brand">
            <span class="brand-logo">+</span>
            <span>
                <strong>Fieldnotes</strong>
                <small>A simple personal space</small>
            </span>
        </a>

        <nav>
            <ul>
                @foreach ($menu as $routeName => $label)
                    <li>
                        <a href="{{ route($routeName) }}"
                           class="{{ request()->routeIs($routeName) ? 'active' : '' }}">
                            {{ $label }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </nav>

        <span class="active-label">Active section: @yield('title')</span>
    </header>

    <main>
        @yield('content')
    </main>

    <footer>
        <div>
            <strong>Prepared by: Fran Guadarrama</strong><br>
            <small>Diseño de Aplicaciones Web · Activity 11 - Blade · {{ date('Y') }}</small>
        </div>
        <div class="links">
            @foreach ($menu as $routeName => $label)
                <a href="{{ route($routeName) }}"
                   class="{{ request()->routeIs($routeName) ? 'active' : '' }}">{{ $label }}</a>
                @if (! $loop->last) · @endif
            @endforeach
        </div>
    </footer>
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supplyguard Monitoring System</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Leaflet CSS -->
    <link
        rel="stylesheet"
        href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
    />
</head>

<body class="bg-gray-100">

<div class="flex min-h-screen">

    <!-- Sidebar -->
    <aside class="w-64 bg-blue-800 text-white flex flex-col">

        <div class="p-6 border-b border-blue-700">

            <h1 class="text-3xl font-bold">
                🌍 Supply Chain
            </h1>

            <p class="text-lg">
                Risk Monitoring
            </p>

        </div>

        <nav class="flex-1 mt-8">

            <a href="{{ route('dashboard') }}"
               class="block px-6 py-3 hover:bg-blue-700">
                🏠 Dashboard
            </a>

            <a href="{{ route('countries.index') }}"
               class="block px-6 py-3 hover:bg-blue-700">
                🌍 Countries
            </a>

            <a href="{{ route('ports.index') }}"
                class="block px-6 py-3 hover:bg-blue-700">
                🚢 Ports
            </a>

            <a href="{{ route('economic-data.index') }}"
               class="block px-6 py-3 hover:bg-blue-700">
                📈 Economic Data
            </a>

            <a href="{{ route('weather.index') }}"
               class="block px-6 py-3 hover:bg-blue-700">
                ☁ Weather
            </a>

            <a href="{{ route('exchange-rates.index') }}"
               class="block px-6 py-3 hover:bg-blue-700">
                💱 Exchange Rate
            </a>

            <a href="{{ route('news.index') }}"
               class="block px-6 py-3 hover:bg-blue-700">
                📰 News
            </a>

            <a href="{{ route('risk-scores.index') }}"
               class="block px-6 py-3 hover:bg-blue-700">
                ⚠ Risk Score
            </a>

            <a href="{{ route('watchlists.index') }}"
               class="block px-6 py-3 hover:bg-blue-700">
                ⭐ Watchlist
            </a>

        </nav>

        <div class="p-6 border-t border-blue-700">

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button
                    class="w-full bg-red-500 hover:bg-red-600 py-3 rounded-lg">

                    Logout

                </button>

            </form>

        </div>

    </aside>

    <!-- Main -->
    <div class="flex-1 flex flex-col">

        <header class="bg-white shadow">

            <div class="flex justify-between items-center px-8 py-6">

                <div>

                    <h2 class="text-3xl font-bold text-gray-800">
                        Dashboard
                    </h2>

                    <p class="text-gray-500">
                        Supply Chain Risk Monitoring System
                    </p>

                </div>

                <div class="text-right">

                    <p class="font-bold">
                        {{ Auth::user()->name }}
                    </p>

                    <p class="text-gray-500 text-sm">
                        {{ Auth::user()->email }}
                    </p>

                </div>

            </div>

        </header>

        <main class="flex-1 p-8">

            @yield('content')

        </main>

    </div>

</div>

<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>

</body>
</html>
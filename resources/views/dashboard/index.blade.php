@extends('layouts.dashboard')

@section('content')

<!-- Judul Dashboard -->

<div class="mb-8">

    <h1 class="text-3xl font-bold text-gray-800">
        📊 Dashboard
    </h1>

    <p class="text-gray-500">
        Supply Chain Risk Monitoring System
    </p>

</div>

<!-- Statistik -->

<div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-6">

    <div class="bg-white rounded-xl shadow p-6 border-l-4 border-blue-500">
        <p class="text-gray-500">🌍 Countries</p>
        <h2 class="text-4xl font-bold mt-2">{{ $countries }}</h2>
    </div>

    <div class="bg-white rounded-xl shadow p-6 border-l-4 border-blue-500">
        <p class="text-gray-500">📈 Economic Data</p>
        <h2 class="text-4xl font-bold mt-2">{{ $economy }}</h2>
    </div>

    <div class="bg-white rounded-xl shadow p-6 border-l-4 border-cyan-500">
        <p class="text-gray-500">☁ Weather</p>
        <h2 class="text-4xl font-bold mt-2">{{ $weather }}</h2>
    </div>

    <div class="bg-white rounded-xl shadow p-6 border-l-4 border-purple-500">
        <p class="text-gray-500">💱 Exchange Rate</p>
        <h2 class="text-4xl font-bold mt-2">{{ $exchange }}</h2>
    </div>

    <div class="bg-white rounded-xl shadow p-6 border-l-4 border-red-500">
        <p class="text-gray-500">📰 News</p>
        <h2 class="text-4xl font-bold mt-2">{{ $news }}</h2>
    </div>

    <div class="bg-white rounded-xl shadow p-6 border-l-4 border-yellow-500">
        <p class="text-gray-500">⚠ Risk Score</p>
        <h2 class="text-4xl font-bold mt-2">{{ $risk }}</h2>
    </div>

    <div class="bg-white rounded-xl shadow p-6 border-l-4 border-pink-500">
        <p class="text-gray-500">⭐ Watchlist</p>
        <h2 class="text-4xl font-bold mt-2">{{ $watchlist }}</h2>
    </div>

    <div class="bg-white rounded-xl shadow p-6 border-l-4 border-indigo-500">
        <p class="text-gray-500">🚢 Total Ports</p>
        <h2 class="text-4xl font-bold mt-2">{{ $totalPorts }}</h2>
    </div>

    <div class="bg-white rounded-xl shadow p-6 border-l-4 border-blue-600">
        <p class="text-gray-500">🟢 Active Port</p>
        <h2 class="text-4xl font-bold mt-2">{{ $activePorts }}</h2>
    </div>

    <div class="bg-white rounded-xl shadow p-6 border-l-4 border-yellow-500">
        <p class="text-gray-500">🟡 Busy Port</p>
        <h2 class="text-4xl font-bold mt-2">{{ $busyPorts }}</h2>
    </div>

    <div class="bg-white rounded-xl shadow p-6 border-l-4 border-red-600">
        <p class="text-gray-500">🔴 Closed Port</p>
        <h2 class="text-4xl font-bold mt-2">{{ $closedPorts }}</h2>
    </div>

    <div class="bg-white rounded-xl shadow p-6 border-l-4 border-orange-500">
        <p class="text-gray-500">🚧 High Congestion</p>
        <h2 class="text-4xl font-bold mt-2">{{ $highCongestion }}</h2>
    </div>

</div>

<!-- Peta Dunia -->

<div class="mt-8 bg-white rounded-xl shadow">

    <div class="border-b p-5">

        <h2 class="text-xl font-bold">
            🌍 World Supply Chain Risk Map
        </h2>

        <p class="text-gray-500 text-sm">
            Warna negara menunjukkan tingkat risiko supply chain.
        </p>

    </div>

    <div class="p-6">

        <div id="leafletMap" style="width:100%; height:600px;"></div>

    </div>

</div>

<!-- Grafik Risk Score + Pie Chart -->

<div class="grid lg:grid-cols-2 gap-6 mt-8">

    <!-- Grafik Bar -->

    <div class="bg-white rounded-xl shadow">

        <div class="border-b p-5">

            <h2 class="text-xl font-bold">
                📊 Grafik Risk Score Negara
            </h2>

            <p class="text-gray-500 text-sm">
                Total Risk Score setiap negara.
            </p>

        </div>

        <div class="p-5">

            <canvas id="riskChart" height="220"></canvas>

        </div>

    </div>

    <!-- Pie Chart -->

    <div class="bg-white rounded-xl shadow">

        <div class="border-b p-5">

            <h2 class="text-xl font-bold">
                🥧 Persentase Risk Level
            </h2>

            <p class="text-gray-500 text-sm">
                Distribusi High, Medium, dan Low Risk.
            </p>

        </div>

        <div class="p-5">

            <canvas id="pieChart" height="220"></canvas>

        </div>

    </div>

</div>

<!-- Grafik GDP, Inflation, Exchange Rate -->

<div class="grid lg:grid-cols-3 gap-6 mt-8">

    <div class="bg-white rounded-xl shadow">
        <div class="border-b p-5">
            <h2 class="text-xl font-bold">
                📈 GDP Trend
            </h2>
        </div>

        <div class="p-5">
            <canvas id="gdpChart" height="220"></canvas>
        </div>
    </div>

    <div class="bg-white rounded-xl shadow">
        <div class="border-b p-5">
            <h2 class="text-xl font-bold">
                📉 Inflation Trend
            </h2>
        </div>

        <div class="p-5">
            <canvas id="inflationChart" height="220"></canvas>
        </div>
    </div>

    <div class="bg-white rounded-xl shadow">
        <div class="border-b p-5">
            <h2 class="text-xl font-bold">
                💱 Exchange Rate
            </h2>
        </div>

        <div class="p-5">
            <canvas id="exchangeChart" height="220"></canvas>
        </div>
    </div>

</div>

<!-- Top Risk + News -->

<div class="grid lg:grid-cols-2 gap-6 mt-8">

    <div class="bg-white rounded-xl shadow">

        <div class="border-b p-5">

            <h2 class="font-bold text-xl">
                ⚠ Top 5 Highest Risk Countries
            </h2>

        </div>

        <table class="min-w-full">

            <thead class="bg-gray-100">

                <tr>

                    <th class="py-3">Country</th>
                    <th>Total</th>
                    <th>Level</th>

                </tr>

            </thead>

            <tbody>

            @forelse($topRisk as $risk)

                <tr class="border-b">

                    <td class="py-3 text-center">
                        {{ $risk->country->country_name }}
                    </td>

                    <td class="text-center">
                        {{ number_format($risk->total_score,2) }}
                    </td>

                    <td class="text-center">

                        @if($risk->risk_level=="Low")

                            <span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full">
                                Low
                            </span>

                        @elseif($risk->risk_level=="Medium")

                            <span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full">
                                Medium
                            </span>

                        @else

                            <span class="bg-red-100 text-red-700 px-3 py-1 rounded-full">
                                High
                            </span>

                        @endif

                    </td>

                </tr>

            @empty

                <tr>

                    <td colspan="3" class="py-6 text-center">

                        Belum ada data.

                    </td>

                </tr>

            @endforelse

            </tbody>

        </table>

    </div>

    <!-- Latest News -->

    <div class="bg-white rounded-xl shadow">

        <div class="border-b p-5">

            <h2 class="font-bold text-xl">
                📰 Latest News
            </h2>

        </div>

        <div class="divide-y">

            @forelse($latestNews as $item)

                <div class="p-4">

                    <div class="font-semibold">
                        {{ $item->title }}
                    </div>

                    <div class="text-gray-500 text-sm">
                        {{ $item->country->country_name }}
                        •
                        {{ \Carbon\Carbon::parse($item->published_at)->format('d M Y') }}
                    </div>

                </div>

            @empty

                <div class="p-6 text-center text-gray-500">

                    Belum ada berita.

                </div>

            @endforelse

        </div>

    </div>

</div>

<!-- Watchlist -->

<div class="grid lg:grid-cols-2 gap-6 mt-8">

    <div class="bg-white rounded-xl shadow">

        <div class="border-b p-5">

            <h2 class="font-bold text-xl">

                ⭐ Latest Watchlist

            </h2>

        </div>

        <div class="divide-y">

            @forelse($latestWatchlist as $watch)

                <div class="p-4">

                    {{ $watch->country->country_name }}

                </div>

            @empty

                <div class="p-6 text-center text-gray-500">

                    Belum ada watchlist.

                </div>

            @endforelse

        </div>

    </div>

    <div class="bg-white rounded-xl shadow flex items-center justify-center">

        <form action="{{ route('countries.sync') }}" method="POST">

            @csrf

            <button class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-4 rounded-lg shadow">

                🔄 Sinkronkan Data Negara

            </button>

        </form>

    </div>

</div>

<!-- Daftar Negara -->

<div class="mt-8 bg-white rounded-xl shadow">

    <div class="border-b p-5">

        <h2 class="font-bold text-xl">

            🌍 Daftar Negara

        </h2>

    </div>

    <div class="overflow-x-auto">

        <table class="min-w-full">

            <thead class="bg-blue-600 text-white">

                <tr>

                    <th class="py-3">ID</th>
                    <th>Negara</th>
                    <th>Kode</th>
                    <th>Ibu Kota</th>
                    <th>Region</th>

                </tr>

            </thead>

            <tbody>

            @forelse($countryList as $country)

                <tr class="border-b hover:bg-gray-50">

                    <td class="py-3 text-center">{{ $country->id }}</td>
                    <td>{{ $country->country_name }}</td>
                    <td>{{ $country->country_code }}</td>
                    <td>{{ $country->capital ?? '-' }}</td>
                    <td>{{ $country->region ?? '-' }}</td>

                </tr>

            @empty

                <tr>

                    <td colspan="5" class="py-6 text-center">

                        Belum ada data negara.

                    </td>

                </tr>

            @endforelse

            </tbody>

        </table>

    </div>

</div>

<!-- Chart JS -->

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>

const ctx = document.getElementById('riskChart');

new Chart(ctx, {

    type: 'bar',

    data: {

        labels: [

            @foreach($riskChart as $item)

                "{{ $item->country->country_name }}",

            @endforeach

        ],

        datasets: [{

            label: 'Risk Score',

            data: [

                @foreach($riskChart as $item)

                    {{ $item->total_score }},

                @endforeach

            ],

            backgroundColor: [

                '#22c55e',
                '#3b82f6',
                '#f59e0b',
                '#ef4444',
                '#8b5cf6',
                '#06b6d4',
                '#14b8a6',
                '#ec4899',
                '#f97316',
                '#6366f1'

            ],

            borderRadius: 8

        }]

    },

    options: {

        responsive: true,

        plugins: {

            legend: {

                display: false

            }

        },

        scales: {

            y: {

                beginAtZero: true,

                max: 100

            }

        }

    }

});

// ==========================
// GDP CHART
// ==========================

new Chart(document.getElementById('gdpChart'),{

    type:'line',

    data:{

        labels:[
            @foreach($gdpChart as $item)
                "{{ $item->country->country_name }}",
            @endforeach
        ],

        datasets:[{

            label:'GDP',

            data:[
                @foreach($gdpChart as $item)
                    {{ $item->gdp }},
                @endforeach
            ],

            borderColor:'#22c55e',

            backgroundColor:'rgba(34,197,94,.2)',

            tension:.4,

            fill:true

        }]

    }

});



// ==========================
// INFLATION CHART
// ==========================

new Chart(document.getElementById('inflationChart'),{

    type:'line',

    data:{

        labels:[
            @foreach($inflationChart as $item)
                "{{ $item->country->country_name }}",
            @endforeach
        ],

        datasets:[{

            label:'Inflation',

            data:[
                @foreach($inflationChart as $item)
                    {{ $item->inflation }},
                @endforeach
            ],

            borderColor:'#ef4444',

            backgroundColor:'rgba(239,68,68,.2)',

            tension:.4,

            fill:true

        }]

    }

});



// ==========================
// EXCHANGE RATE
// ==========================

new Chart(document.getElementById('exchangeChart'),{

    type:'bar',

    data:{

        labels:[
            @foreach($exchangeChart as $item)
                "{{ $item->country->country_name }}",
            @endforeach
        ],

        datasets:[{

            label:'Exchange Rate',

            data:[
                @foreach($exchangeChart as $item)
                    {{ $item->exchange_rate }},
                @endforeach
            ],

            backgroundColor:'#3b82f6'

        }]

    }

});

// ==========================
// PIE CHART
// ==========================

const pieCtx = document.getElementById('pieChart');

new Chart(pieCtx, {

    type: 'pie',

    data: {

        labels: ['High', 'Medium', 'Low'],

        datasets: [{

            data: [

                {{ $highCount }},
                {{ $mediumCount }},
                {{ $lowCount }}

            ],

            backgroundColor: [

                '#ef4444',
                '#f59e0b',
                '#22c55e'

            ]

        }]

    },

    options: {

        responsive: true,

        plugins: {

            legend: {

                position: 'bottom'

            }

        }

    }

});

// ============================
// Data dari Laravel
// ============================

var riskData = [

@foreach($mapRisk as $item)

{

    id: "{{ strtoupper($item->country->country_code) }}",

    risk: "{{ $item->risk_level }}",

    score: "{{ $item->total_score }}"

},

@endforeach

];

var portData = [

@foreach($mapPorts as $port)

{

    country: "{{ strtoupper($port->country->country_code) }}",

    port: "{{ $port->port_name }}",

    status: "{{ $port->status }}",

    congestion: "{{ $port->congestion_level }}"

},

@endforeach

];

// ===============================
// Warnai Negara Berdasarkan Risk
// ===============================

polygonSeries.events.on("datavalidated", function () {

    polygonSeries.mapPolygons.each(function (polygon) {

        let id = polygon.dataItem.get("id");

        let item = riskData.find(r => r.id === id);

        if(item){

            if(item.risk === "High"){

                polygon.set("fill", am5.color(0xef4444));

            }

            else if(item.risk === "Medium"){

                polygon.set("fill", am5.color(0xfacc15));

            }

            else{

                polygon.set("fill", am5.color(0x22c55e));

            }

            polygon.set(
                "tooltipText",

                "[bold]{name}[/]\n\n" +

                "Risk Score : " + item.score +

                "\nRisk Level : " + item.risk

            );

        }

    });

});

// ===================================
// Marker Pelabuhan
// ===================================

var pointSeries = chart.series.push(
    am5map.MapPointSeries.new(root,{})
);

pointSeries.bullets.push(function(root, series, dataItem){

    let warna = am5.color(0x22c55e);

    if(dataItem.dataContext.status=="Busy"){
        warna = am5.color(0xfacc15);
    }

    if(dataItem.dataContext.status=="Closed"){
        warna = am5.color(0xef4444);
    }

    return am5.Bullet.new(root,{
        sprite: am5.Circle.new(root,{
            radius:6,
            fill:warna,
            tooltipText:
                "[bold]{port}[/]\n"+
                "Country : {country}\n"+
                "Status : {status}\n"+
                "Congestion : {congestion}"
        })
    });

});

pointSeries.data.setAll([

@foreach($mapPorts as $port)

@if($port->latitude && $port->longitude)

{
    geometry:{
        type:"Point",
        coordinates:[
            {{ $port->longitude }},
            {{ $port->latitude }}
        ]
    },

    port:"{{ $port->port_name }}",
    country:"{{ $port->country->country_name }}",
    status:"{{ $port->status }}",
    congestion:"{{ $port->congestion_level }}"
},

@endif

@endforeach

]);

</script>

<div class="bg-white rounded-xl shadow mt-8">

    <div class="border-b p-5">

        <h2 class="text-xl font-bold">
            🚢 World Port Monitoring
        </h2>

        <p class="text-gray-500 text-sm">
            Lokasi pelabuhan ditampilkan pada peta dunia berdasarkan status operasional.
        </p>

    </div>

    <div class="p-6">

        <p class="text-gray-600">
            Klik marker pada peta untuk melihat informasi pelabuhan.
        </p>

    </div>

</div>

<script>
document.addEventListener("DOMContentLoaded", function () {

    // Membuat peta
    const map = L.map('leafletMap').setView([20, 0], 2);

    // OpenStreetMap
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; OpenStreetMap contributors',
        maxZoom: 19
    }).addTo(map);

@foreach($mapPorts as $port)

@if($port->latitude && $port->longitude)

@php
    $color = 'blue';

    if($port->status == 'Active'){
        $color = 'blue';
    }
    elseif($port->status == 'Busy'){
        $color = 'gold';
    }
    elseif($port->status == 'Closed'){
        $color = 'red';
    }
@endphp

var icon = new L.Icon({
    iconUrl:
        @if($port->status == 'Active')
            'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-blue.png'
        @elseif($port->status == 'Busy')
            'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-yellow.png'
        @elseif($port->status == 'Closed')
            'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-red.png'
        @else
            'https://raw.githubusercontent.com/pointhi/leaflet-color-markers/master/img/marker-icon-blue.png'
        @endif,
    shadowUrl:
        'https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/images/marker-shadow.png',
    iconSize: [25,41],
    iconAnchor:[12,41],
    popupAnchor:[1,-34],
    shadowSize:[41,41]
});

L.marker(
    [{{ $port->latitude }}, {{ $port->longitude }}],
    {icon:icon}
)
.addTo(map)
.bindPopup(`
<b>🚢 {{ $port->port_name }}</b><br>
Country : {{ $port->country->country_name }}<br>
Status : {{ $port->status }}<br>
Congestion : {{ $port->congestion_level }}
`);

@endif

@endforeach

});

</script>

@endsection
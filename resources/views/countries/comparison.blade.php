<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Country Comparison') }}
        </h2>
    </x-slot>

    <div class="py-8">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">

            @if(session('success'))
                <div class="mb-4 bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded">
                    {{ session('success') }}
                </div>
            @endif

            @if(session('error'))
                <div class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded">
                    {{ session('error') }}
                </div>
            @endif

            @if($errors->any())
                <div class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded">
                    <ul class="list-disc ml-5">
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="bg-white dark:bg-gray-800 shadow rounded-lg p-6">

                <h3 class="text-2xl font-bold mb-6 text-gray-700 dark:text-white">
                    Compare Two Countries
                </h3>

                <form action="{{ route('countries.compare') }}" method="POST">

                    @csrf

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

                        <div>

                            <label class="block mb-2 font-semibold">
                                Country 1
                            </label>

                            <select
                                name="country1"
                                class="w-full rounded border-gray-300"
                                required>

                                <option value="">Choose Country</option>

                                @foreach($countries as $country)

                                    <option
                                        value="{{ $country->id }}"
                                        @if(isset($data1) && $data1['country']->id==$country->id) selected @endif>

                                        {{ $country->country_name }}

                                    </option>

                                @endforeach

                            </select>

                        </div>

                        <div>

                            <label class="block mb-2 font-semibold">
                                Country 2
                            </label>

                            <select
                                name="country2"
                                class="w-full rounded border-gray-300"
                                required>

                                <option value="">Choose Country</option>

                                @foreach($countries as $country)

                                    <option
                                        value="{{ $country->id }}"
                                        @if(isset($data2) && $data2['country']->id==$country->id) selected @endif>

                                        {{ $country->country_name }}

                                    </option>

                                @endforeach

                            </select>

                        </div>

                    </div>

                    <div class="mt-6">

                        <button
                            class="px-6 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded">

                            Compare

                        </button>

                    </div>

                </form>

            </div>

            @isset($data1)

            <div class="mt-8 bg-white dark:bg-gray-800 shadow rounded-lg p-6">

                <h3 class="text-xl font-bold mb-5">

                    Comparison Result

                </h3>

                <div class="overflow-x-auto">

                    <table class="min-w-full border border-gray-300">

                        <thead>

                        <tr class="bg-gray-100">

                            <th class="border p-3">Data</th>

                            <th class="border p-3">

                                {{ $data1['country']->country_name }}

                            </th>

                            <th class="border p-3">

                                {{ $data2['country']->country_name }}

                            </th>

                        </tr>

                        </thead>

                        <tbody>
                        <tr>
    <td class="border p-3 font-semibold">GDP</td>
    <td class="border p-3">
        {{ $data1['economic']->gdp ?? '-' }}
    </td>
    <td class="border p-3">
        {{ $data2['economic']->gdp ?? '-' }}
    </td>
</tr>

<tr>
    <td class="border p-3 font-semibold">Inflation</td>
    <td class="border p-3">
        {{ $data1['economic']->inflation ?? '-' }}
    </td>
    <td class="border p-3">
        {{ $data2['economic']->inflation ?? '-' }}
    </td>
</tr>

<tr>
    <td class="border p-3 font-semibold">Temperature</td>
    <td class="border p-3">
        {{ $data1['weather']->temperature ?? '-' }} °C
    </td>
    <td class="border p-3">
        {{ $data2['weather']->temperature ?? '-' }} °C
    </td>
</tr>

<tr>
    <td class="border p-3 font-semibold">Rainfall</td>
    <td class="border p-3">
        {{ $data1['weather']->rainfall ?? '-' }}
    </td>
    <td class="border p-3">
        {{ $data2['weather']->rainfall ?? '-' }}
    </td>
</tr>

<tr>
    <td class="border p-3 font-semibold">Wind Speed</td>
    <td class="border p-3">
        {{ $data1['weather']->wind_speed ?? '-' }}
    </td>
    <td class="border p-3">
        {{ $data2['weather']->wind_speed ?? '-' }}
    </td>
</tr>

<tr>
    <td class="border p-3 font-semibold">Exchange Rate</td>
    <td class="border p-3">
        {{ $data1['exchange']->exchange_rate ?? '-' }}
    </td>
    <td class="border p-3">
        {{ $data2['exchange']->exchange_rate ?? '-' }}
    </td>
</tr>

<tr>
    <td class="border p-3 font-semibold">Risk Score</td>
    <td class="border p-3 font-bold text-blue-600">
        {{ $data1['risk']->total_score ?? '-' }}
    </td>
    <td class="border p-3 font-bold text-blue-600">
        {{ $data2['risk']->total_score ?? '-' }}
    </td>
</tr>

<tr>
    <td class="border p-3 font-semibold">Risk Level</td>
    <td class="border p-3">
        @if(isset($data1['risk']))
            @if($data1['risk']->risk_level == 'High')
                <span class="px-3 py-1 rounded bg-red-500 text-white">
                    High
                </span>
            @elseif($data1['risk']->risk_level == 'Medium')
                <span class="px-3 py-1 rounded bg-yellow-500 text-white">
                    Medium
                </span>
            @else
                <span class="px-3 py-1 rounded bg-green-500 text-white">
                    Low
                </span>
            @endif
        @else
            -
        @endif
    </td>

    <td class="border p-3">
        @if(isset($data2['risk']))
            @if($data2['risk']->risk_level == 'High')
                <span class="px-3 py-1 rounded bg-red-500 text-white">
                    High
                </span>
            @elseif($data2['risk']->risk_level == 'Medium')
                <span class="px-3 py-1 rounded bg-yellow-500 text-white">
                    Medium
                </span>
            @else
                <span class="px-3 py-1 rounded bg-green-500 text-white">
                    Low
                </span>
            @endif
        @else
            -
        @endif
    </td>
</tr>

</tbody>
</table>

</div>

</div>
<div class="mt-8 bg-white dark:bg-gray-800 shadow rounded-lg p-6">

    <h3 class="text-xl font-bold mb-4">
        Risk Score Comparison
    </h3>

    <canvas id="riskChart" height="120"></canvas>

</div>

@endisset

</div>
</div>

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

@if(isset($data1))
<script>

const ctx = document.getElementById('riskChart');

if(ctx){

    new Chart(ctx,{

        type:'bar',

        data:{

            labels:[
                "{{ $data1['country']->country_name }}",
                "{{ $data2['country']->country_name }}"
            ],

            datasets:[{

                label:'Risk Score',

                data:[
                    {{ $data1['risk']->total_score ?? 0 }},
                    {{ $data2['risk']->total_score ?? 0 }}
                ]

            }]

        },

        options:{

            responsive:true,

            scales:{
                y:{
                    beginAtZero:true,
                    max:100
                }
            }

        }

    });

}

</script>
@endif
@endpush

</x-app-layout>
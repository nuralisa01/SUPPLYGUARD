@extends('layouts.dashboard')

@section('content')

<div class="flex justify-between items-center mb-6">

    <div>
        <h1 class="text-3xl font-bold text-gray-800">
            🚢 Port Management
        </h1>

        <p class="text-gray-500">
            Monitoring data pelabuhan untuk mendukung analisis Supply Chain Risk.
        </p>
    </div>

    <form method="GET"
      action="{{ route('ports.index') }}"
      class="flex gap-3 items-center">


<select name="country_id"
        class="border rounded-lg px-4 py-2">


<option value="">
    Semua Negara
</option>


@foreach($countries as $country)

<option value="{{ $country->id }}"
@if(request('country_id') == $country->id)
selected
@endif
>

{{ $country->country_name }}

</option>

@endforeach


</select>


<button
type="submit"
class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded-lg">

🔍 Tampilkan Port

</button>


</form>

    <a href="{{ route('ports.create') }}"
       class="bg-blue-600 hover:bg-blue-700 text-white px-5 py-3 rounded-lg shadow">
        + Tambah Pelabuhan
    </a>

</div>

@if(session('success'))

<div class="mb-5 bg-blue-100 border border-blue-300 text-blue-700 p-4 rounded-lg">
    {{ session('success') }}
</div>

@endif

<div class="bg-white rounded-xl shadow overflow-x-auto">

<table class="min-w-full">

<thead class="bg-blue-600 text-white">

<tr>

    <th class="px-4 py-3 text-left">
        Pelabuhan
    </th>

    <th class="px-4 py-3 text-center">
        Negara
    </th>

    <th class="px-4 py-3 text-center">
        Kota
    </th>

    <th class="px-4 py-3 text-center">
        Kode
    </th>

    <th class="px-4 py-3 text-center">
        Status
    </th>

    <th class="px-4 py-3 text-center">
        Congestion
    </th>

    <th class="px-4 py-3 text-center">
        Koordinat
    </th>

    <th class="px-4 py-3 text-center">
        Deskripsi
    </th>

    <th class="px-4 py-3 text-center">
        Aksi
    </th>

</tr>

</thead>

<tbody>

@forelse($ports as $port)

<tr class="border-b hover:bg-gray-50">

<td class="px-4 py-3 font-semibold">

    {{ $port->port_name }}

</td>

<td class="px-4 py-3 text-center">

    {{ $port->country->country_name }}

</td>

<td class="px-4 py-3 text-center">

    {{ $port->city ?? '-' }}

</td>

<td class="px-4 py-3 text-center">

    {{ $port->port_code ?? '-' }}

</td>

<td class="px-4 py-3 text-center">

@if($port->status=='Active')

<span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full font-semibold">
🟢 Active
</span>

@elseif($port->status=='Busy')

<span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full font-semibold">
🟡 Busy
</span>

@else

<span class="bg-red-100 text-red-700 px-3 py-1 rounded-full font-semibold">
🔴 Closed
</span>

@endif

</td>

<td class="px-4 py-3 text-center">

@if($port->congestion_level=='Low')

<span class="bg-blue-100 text-blue-700 px-3 py-1 rounded-full">
Low
</span>

@elseif($port->congestion_level=='Medium')

<span class="bg-yellow-100 text-yellow-700 px-3 py-1 rounded-full">
Medium
</span>

@else

<span class="bg-red-100 text-red-700 px-3 py-1 rounded-full">
High
</span>

@endif

</td>

<td class="px-4 py-3 text-center text-sm">

@if($port->latitude && $port->longitude)

{{ $port->latitude }},
{{ $port->longitude }}

@else

-

@endif

</td>

<td class="px-4 py-3">

{{ $port->description ?? '-' }}

</td>

<td class="px-4 py-3">

<div class="flex justify-center gap-2">

<a href="{{ route('ports.edit',$port) }}"
class="bg-yellow-500 hover:bg-yellow-600 text-white px-3 py-2 rounded">

Edit

</a>

<form action="{{ route('ports.destroy',$port) }}"
method="POST">

@csrf
@method('DELETE')

<button
type="submit"
class="bg-red-600 hover:bg-red-700 text-white px-3 py-2 rounded">

Hapus

</button>

</form>

</div>

</td>

</tr>

@empty

<tr>

<td colspan="9"
class="text-center py-8 text-gray-500">

Belum ada data pelabuhan.

</td>

</tr>

@endforelse

</tbody>

</table>

</div>

<div class="mt-6">

{{ $ports->links() }}

</div>

@endsection
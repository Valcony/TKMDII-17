@php
    $title = 'Delegation';
@endphp

@extends('base')

@section('content')
<style>
    body, html {
        margin: 0;
        padding: 0;
        width: 100%;
    }

    .background {
        position: fixed;
        top: 0;
        left: 0;
        width: 100vw;
        height: 100vh;
        background-image: url('/images/background.png');
        background-size: cover;
        background-position: center;
        z-index: -10;
    }
</style>

<div class="fixed inset-0 bg-cover bg-center -z-10" style="background-image: url('/images/background.png');"></div>

<div class="relative min-h-screen flex flex-col items-center justify-center px-4 py-20">
    <!-- Judul -->
    <div class="text-center" style="margin-bottom: 80px;">
        <h1 class="text-7xl font-extrabold text-black" style="margin-bottom: 10px;">DELEGATION</h1>
        <p class="text-2xl text-black">Check your delegation details here</p>
    </div>

    <div class="w-full max-w-6xl flex flex-col md:flex-row gap-10">
        <!-- Kiri: Dropdown -->
        <div class="w-full md:w-1/2">
            <label class="block text-2xl font-bold mb-4 text-black">UNIVERSITY</label>
            <select id="universityDropdown" class="w-full border border-black p-4 rounded text-xl" onchange="updateDetails()">
                <option value="">-- Select University --</option>
                @foreach ($universities as $univ)
                    <option 
                        value="{{ $univ->id }}"
                        data-status="{{ $univ->type }}"
                        data-liaison="{{ $univ->liaison->name ?? '' }}"
                        data-phone="{{ $univ->liaison->phone ?? '' }}">
                        {{ $univ->name }}
                    </option>
                @endforeach
            </select>
        </div>

        <!-- Kanan: Status dan LO -->
        <div class="w-full md:w-1/2">
            <div style="margin-bottom: 40px;">
                <p class="text-2xl font-bold text-black mb-2">STATUS</p>
                <p id="statusText" class="underline text-xl text-black">-</p>
            </div>

            <div style="margin-bottom: 40px;">
                <p class="text-2xl font-bold text-black mb-2">LIAISON OFFICER</p>
                <p id="liaisonName" class="text-xl text-black mb-1">-</p>
                <p id="liaisonPhone" class="text-xl text-black">Contact Number: -</p>
            </div>
        </div>
    </div>
</div>

<script>
    function updateDetails() {
        const dropdown = document.getElementById('universityDropdown');
        const selected = dropdown.options[dropdown.selectedIndex];

        const status = selected.getAttribute('data-status');
        const liaison = selected.getAttribute('data-liaison');
        const phone = selected.getAttribute('data-phone');

        const statusText = {
            0: 'Inti',
            1: 'Peninjau',
            2: 'Calon'
        };

        document.getElementById('statusText').innerText = status !== null ? statusText[status] || '-' : '-';
        document.getElementById('liaisonName').innerText = liaison || '-';
        document.getElementById('liaisonPhone').innerText = phone ? `Contact Number: +62${phone.replace(/^0+/, '')}` : '-';
    }
</script>
@endsection

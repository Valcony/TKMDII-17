@extends('base')

@php
    $title = 'Delegation';
@endphp

@section('content')
<style>
    /* ========== CUSTOM FONT ========== */
    @font-face {
        font-family: 'T97Compressed';
        src: url('/font/1797/1797-MEDIUM.otf') format('opentype');
        font-weight: normal;
        font-style: normal;
    }

    @font-face {
        font-family: 'Rena';
        src: url('/font/Rena-Regular.ttf') format('truetype');
        font-weight: normal;
        font-style: normal;
    }

    body, html {
        margin: 0;
        padding: 0;
        width: 100%;
        min-height: 100vh;
    }

    /* ========== BACKGROUND & HEADER ========== */
    .main-background-texture {
        position: fixed;
        top: 0;
        left: 0;
        width: 100vw;
        height: 100vh;
        background-image: url('/assets/textures.png');
        background-repeat: repeat;
        background-size: auto;
        background-position: center;
        z-index: -20;
    }

    .header-image-absolute {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-image: url('/assets/headerdele.png');
        background-size: contain;
        background-repeat: no-repeat;
        background-position: center top;
        z-index: -1;
    }

    .deletext-image {
        max-width: 90%;
        height: auto;
        display: block;
        margin-left: auto;
        margin-right: auto;
        z-index: 3;
    }

    /* ========== MAIN CONTAINER ========== */
    .content-area {
        position: relative;
        z-index: 1;
        padding: 20px;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: flex-start;
        background-color: transparent;
        max-width: 1200px;
        margin: auto;
    }

    /* ========== UNIVERSITY SECTION ========== */
    .university-select-container {
        width: 122%;
    }

    .university-select-area {
        position: relative;
        width: 100%;
        box-sizing: border-box;
    }

    #universityDropdownButton {
        background-color: #42945a;
        color: white;
        font-size: 3.6rem; 
        text-align: left;
        padding: 12px 20px;
        user-select: none;
        border: none;
        letter-spacing: 2px;
        width: 100%;
        font-family: 'T97Compressed', sans-serif;
        line-height: 1;
        height: 80px; 
        display: flex;
        align-items: center;
    }

    #universityDropdown {
        width: 100%;
        padding: 12px 20px;
        font-size: 2.13rem; 
        border: 3px solid #42945a;
        border-top: none;
        background-color: white;
        color: black;
        box-sizing: border-box;
        display: block;
        font-family: 'T97Compressed', sans-serif;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
    }

    /* ========== STATUS SECTION ========== */
    .status-section {
        width: 122%;
        margin-top: 40px;
    }

    .status-label-image {
        max-width: 150px;
        height: auto;
        display: block;
        margin-bottom: 10px;
    }

    .status-dynamic-image-container {
        min-height: 50px;
        display: flex;
        justify-content: flex-start;
        align-items: center;
        margin-top: 10px;
        gap: 16px;
    }

    .status-dynamic-image {
        max-width: 120px;
        height: auto;
        display: block;
    }

    /* ========== LIAISON OFFICER SECTION ========== */
    .lo-box {
        margin-top: 40px;
        background-color: #42945a;
        padding: 15px 24px;
        border-radius: 4px;
        width: 122%;
        color: white;
    }

    .lo-box .title {
        font-size: 3.6rem; 
        font-weight: normal;
        color: white;
        margin-bottom: 8px;
        letter-spacing: 2px;
        text-transform: uppercase;
        font-family: 'T97Compressed', sans-serif;
        line-height: 1;
        height: 80px; 
        display: flex;
        align-items: center;
    }

    .lo-box .name {
        font-size: 1.8rem; 
        font-weight: normal;
        color: #FFD700;
        margin-bottom: 4px;
        font-family: 'Rena', sans-serif;
        line-height: 1;
    }

    .lo-box .phone {
        font-size: 1.8rem; 
        color: #B9FF66;
        margin-top: 10px;
        font-family: 'Rena', sans-serif;
        line-height: 1;
    }

    /* ========== RESPONSIVE ========== */
    @media (max-width: 768px) {
        .content-area {
            max-width: 90%;
        }
        #universityDropdownButton {
            font-size: 3rem; 
            height: 60px; 
        }
        #universityDropdown {
            font-size: 1.5rem; 
        }

        .lo-box {
            padding: 15px;
        }

        .lo-box .title {
            font-size: 3rem; 
            margin-bottom: 6px;
            height: 50px; 
        }

        .lo-box .name {
            font-size: 1.5rem; 
            margin-bottom: 2px;
        }

        .lo-box .phone {
            font-size: 1.5rem;
            margin-top: 2px;
        }

        .status-dynamic-image {
            max-width: 90px;
        }
    }
</style>

{{-- Background & Header --}}
<div class="main-background-texture"></div>
<div class="header-container">
    <div class="header-image-absolute"></div>
    <div class="text-center" style="margin-bottom: 50px; margin-top: 45px; z-index: 3;">
        <img src="{{ asset('assets/deletext.png') }}" alt="DELEGATION - Check your delegation details here" class="deletext-image">
    </div>
</div>

{{-- Main Content Area --}}
<div class="content-area">
    {{-- University Dropdown --}}
    <div class="university-select-container">
        <div class="university-select-area">
            <div id="universityDropdownButton" onclick="openUniversityDropdown()">UNIVERSITY</div>
            <select id="universityDropdown" onchange="updateDetails()">
                <option value="">-- Select University --</option>
                @foreach ($universities as $univ)
                    <option
                        value="{{ $univ->id }}"
                        data-status="{{ $univ->type }}"
                        data-liaison="{{ $univ->officer->name ?? '' }}"
                        data-phone="{{ $univ->officer->phone ?? '' }}">
                        {{ $univ->name }}
                    </option>
                @endforeach
            </select>
        </div>
    </div>

    {{-- Status Section --}}
    <div class="status-section">
        <img src="{{ asset('assets/status.png') }}" alt="STATUS" class="status-label-image">
        <div id="statusImageContainer" class="status-dynamic-image-container"></div>
    </div>

    {{-- Liaison Officer Section --}}
    <div class="lo-box">
        <div class="title">LIAISON OFFICER</div>
        <div class="name" id="liaisonName">Nama LO</div>
        <div class="phone" id="liaisonPhone">Contact Number: 08XX-XX-XXXX</div>
    </div>
</div>

{{-- Script --}}
<script>
    function updateDetails() {
        const dropdown = document.getElementById('universityDropdown');
        const selected = dropdown.options[dropdown.selectedIndex];

        const status = selected.getAttribute('data-status');
        const liaison = selected.getAttribute('data-liaison');
        const phone = selected.getAttribute('data-phone');

        document.getElementById('liaisonName').innerText = liaison || 'Nama LO';
        document.getElementById('liaisonPhone').innerText = phone ? `Contact Number: +62${phone.replace(/^0+/, '')}` : 'Contact Number: 08XX-XX-XXXX';

        const statusImageContainer = document.getElementById('statusImageContainer');
        statusImageContainer.innerHTML = '';

        let statusImageSrc = '';
        if (status == 0) statusImageSrc = 'inti.png';
        else if (status == 1) statusImageSrc = 'peninjau.png';
        else if (status == 2) statusImageSrc = 'calon.png';

        if (statusImageSrc) {
            const img = document.createElement('img');
            img.src = `{{ asset('assets/') }}/${statusImageSrc}`;
            img.alt = statusImageSrc.replace('.png', '');
            img.classList.add('status-dynamic-image');
            statusImageContainer.appendChild(img);
        }
    }

    function openUniversityDropdown() {
        document.getElementById('universityDropdown').focus();
    }

    document.addEventListener('DOMContentLoaded', updateDetails);
</script>
@endsection

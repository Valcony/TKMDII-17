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
        min-height: 100vh;
    }

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

    .university-select-area { /* Container for the image/dropdown */
        position: relative;
        max-width: 90%;
        margin-left: auto;
        margin-right: auto;
        margin-top: 80px; /* Applied margin here, as requested */
        width: 100%;
        box-sizing: border-box;
    }

    .selectuni-image {
        width: 100%;
        height: auto;
        display: block;
        cursor: pointer;
    }

    #universityDropdown {
        /* Style the dropdown to look like the selectuni.png image */
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        padding: 10px 15px;
        font-size: 1.5rem;
        font-weight: bold;
        color: white;
        background-color: #4CAF50; /* Green background color (approximation) */
        border: none;
        border-radius: 0;
        -webkit-appearance: none;
        -moz-appearance: none;
        appearance: none;
        text-align: center;
        text-align-last: center;
        cursor: pointer;
        display: none; /* Initially hidden */
        box-sizing: border-box;
    }

    #universityDropdown option {
        color: black;
        background-color: white;
    }

    /* Styles for the new status images */
    .status-label-image { /* For the "STATUS" heading image */
        max-width: 150px; /* Adjust size as needed */
        height: auto;
        display: block;
        margin-bottom: 10px; /* Space below the label */
    }

    .status-dynamic-image-container { /* Container for inti.png, calon.png, peninjau.png */
        min-height: 50px; /* Give it some height to prevent layout shifts */
        display: flex; /* Use flexbox for centering/alignment */
        justify-content: flex-start; /* Align to start, adjust to center if preferred */
        align-items: center;
        margin-top: 10px; /* Space below the status label */
    }

    .status-dynamic-image { /* For inti.png, calon.png, peninjau.png */
        max-width: 120px; /* Adjust size as needed */
        height: auto;
        display: block;
    }

    .content-area {
        position: relative;
        z-index: 1;
        padding-top: 20px;
        padding-bottom: 20px;
        min-height: calc(100vh - 300px);
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: flex-start;
        background-color: transparent;
    }
</style>

<div class="main-background-texture"></div>

<div class="header-container">
    <div class="header-image-absolute"></div>
    <div class="text-center" style="margin-bottom: 80px; margin-top: 100px; z-index: 3;">
        <img src="{{ asset('assets/deletext.png') }}" alt="DELEGATION - Check your delegation details here" class="deletext-image">
    </div>
</div>

<div class="content-area w-full max-w-6xl flex flex-col md:flex-row gap-10">
    <div class="university-select-container w-full md:w-1/2">
        <div class="university-select-area">
            <img
                id="selectUniClickableImage"
                src="{{ asset('assets/selectuni.png') }}"
                alt="Select University"
                class="selectuni-image"
                onclick="showUniversityDropdown()"
            >
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

    <div class="w-full md:w-1/2">
        <div style="margin-bottom: 40px;">
            {{-- Replaced P tag with IMG for STATUS label --}}
            <img src="{{ asset('assets/status.png') }}" alt="STATUS" class="status-label-image">
            {{-- Container for the dynamic status image (Inti, Calon, Peninjau) --}}
            <div id="statusImageContainer" class="status-dynamic-image-container">
                {{-- Status image will be inserted here by JavaScript --}}
            </div>
        </div>

        <div style="margin-bottom: 40px;">
            <p class="text-2xl font-bold text-black mb-2">LIAISON OFFICER</p>
            <p id="liaisonName" class="text-xl text-black mb-1">-</p>
            <p id="liaisonPhone" class="text-xl text-black">Contact Number: -</p>
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

        // Update Liaison Officer and Phone
        document.getElementById('liaisonName').innerText = liaison || '-';
        document.getElementById('liaisonPhone').innerText = phone ? `Contact Number: +62${phone.replace(/^0+/, '')}` : '-';

        // Update Status as Image
        const statusImageContainer = document.getElementById('statusImageContainer');
        statusImageContainer.innerHTML = ''; // Clear any previously displayed image

        if (status !== null && status !== '') {
            let statusImageSrc = '';
            if (status == 0) { // Assuming 0 for Inti
                statusImageSrc = 'inti.png';
            } else if (status == 1) { // Assuming 1 for Peninjau
                statusImageSrc = 'peninjau.png';
            } else if (status == 2) { // Assuming 2 for Calon
                statusImageSrc = 'calon.png';
            }

            if (statusImageSrc) {
                const statusImg = document.createElement('img');
                statusImg.src = `{{ asset('assets/') }}/${statusImageSrc}`;
                statusImg.alt = statusImageSrc.replace('.png', ''); // Set meaningful alt text
                statusImg.classList.add('status-dynamic-image'); // Apply CSS class
                statusImageContainer.appendChild(statusImg);
            }
        }
    }

    function showUniversityDropdown() {
        document.getElementById('selectUniClickableImage').style.display = 'none'; // Hide the image
        const dropdown = document.getElementById('universityDropdown');
        dropdown.style.display = 'block'; // Show the dropdown
        dropdown.focus(); // Focus the dropdown
    }

    // Call updateDetails initially to set default status/liaison info if a university is pre-selected
    document.addEventListener('DOMContentLoaded', (event) => {
        updateDetails();
    });
</script>
@endsection
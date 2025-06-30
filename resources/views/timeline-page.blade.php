@extends('base')

@section('head')
<style>
    /* Efek hover sederhana untuk interaktivitas */
    .interactive-glow:hover {
        transform: scale(1.02);
        transition: all 0.3s ease-in-out;
    }
</style>
@endsection

@section('content')
<div class="w-full min-h-screen flex items-center justify-center p-4 sm:p-6 lg:p-8 bg-[#dcd6ba]">

    {{-- Container utama sebagai kanvas poster --}}
    <div data-aos="fade-up" data-aos-duration="900"
        class="relative w-full max-w-2xl aspect-[3/4] shadow-xl">
        
        {{-- LAYER 0: Background Polos, Border, dan Tekstur --}}
        <div class="absolute inset-0 bg-[#dcd6ba] border-[12px] border-[#4ca6f8]"></div>
        <div class="absolute inset-0 mix-blend-multiply opacity-40" style="background-image: url('{{ asset('timeline/Textures.jpg') }}');"></div>

        {{-- LAYER 1: Header (Gambar Meja & Tulisan "TIMELINE") --}}
        <div class="absolute top-[4%] left-[5%] w-[90%] h-[35%] z-10">
            <img src="{{ asset('timeline/Header-Timeline.png') }}" alt="Timeline Header" 
                class="w-full h-full object-contain">
        </div>
        
        {{-- LAYER 2: Blok Konten Tengah & Bawah (digrupkan jadi satu) --}}
        <div class="absolute bottom-[5%] left-[5%] w-[90%] h-[58%] z-20">
            {{-- Canvas untuk blok konten ini --}}
            <div class="relative w-full h-full">

                <img src="{{ asset('timeline/rectangleBackground.png') }}" alt="Background Kotak"
                    class="absolute inset-0 w-full h-full object-fill">

                <a href="{{ route('ourEvents') }}" class="interactive-glow absolute top-[2%] w-full h-[80%] z-30 px-2">
                    <img src="{{ asset('timeline/JudulAcara.png') }}" alt="Judul Acara"
                        class="w-full h-[90%]">
                </a>
                
                <div class="absolute bottom-[3%] left-0 right-0 mx-auto w-[85%] flex justify-between items-center z-40">

                    <img src="{{ asset('timeline/D-DAY.png') }}" alt="D-DAY" class="w-[27%] sm:w-[34%] h-auto">

                    <img src="{{ asset('timeline/TanggalD-Day.png') }}" alt="Tanggal D-Day" class="ml-10 w-[63%] h-auto">

                </div>

            </div>
        </div>
    </div>

</div>
@endsection
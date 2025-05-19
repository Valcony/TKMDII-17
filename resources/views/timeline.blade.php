@extends('base')

@section('head')
    <style>
        @keyframes custom-bounce {
            0%, 100% {
                transform: translateY(-5%);
                animation-timing-function: cubic-bezier(0.8, 0, 1, 1);
            }
            50% {
                transform: translateY(0);
                animation-timing-function: cubic-bezier(0, 0, 0.2, 1);
            }
        }
        .animate-custom-bounce {
            animation-name: custom-bounce;
            animation-duration: 2s;
            animation-iteration-count: infinite;
        }
    </style>
@endsection

@section('content')
    <div class="h-screen w-screen bg-[#2596be] flex items-center justify-center p-4">
        <img src="{{ asset('assets/timeline.png') }}" 
             class="max-w-full max-h-full object-contain rounded-lg animate-custom-bounce"> 
    </div>
@endsection

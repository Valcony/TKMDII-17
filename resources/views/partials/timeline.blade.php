<style>
    @keyframes custom-bounce {

        0%,
        100% {
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

<div class="max-h-[100%] w-full bg-[#318de0] flex items-center justify-center p-4">
    <div class="w-full max-h-[100%] bg-[#318de0] rotate-3 flex items-center justify-center">
        <div data-aos="flip-up" class="w-full max-h-[100%] -rotate-3 justify-items-center items-center justify-center">
            <img src="{{ asset('assets/timeline.png') }}"
                class="lg:max-w-[80%] max-w-[100%] max-h-full object-contain rounded-lg animate-custom-bounce cursor-pointer"
                onmouseover="this.style.filter='drop-shadow(0 0 10px #FFD700)'" onmouseout="this.style.filter='none'">
        </div>
    </div>
</div>
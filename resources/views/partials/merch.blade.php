<style>
    .overlay7 {
        position: absolute;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        background-repeat: repeat;
        background-image: url({{ asset('overlay/halftone.png') }});
        mix-blend-mode: multiply;
        pointer-events: none;
        z-index: 0;
        opacity: 50%;
    }
</style>
<div class="relative w-full h-auto">
    <div class="overlay7"></div>
    <div class="relative flex justify-center items-center">
        <img src="{{ asset('assets/merch1.png') }}" alt="Background Image" class="absolute z-0 max-w-full">
        <img src="{{ asset('assets/merch3.png') }}" alt="Foreground Image" class="relative z-10 max-w-[50%]">
        <div class="absolute z-20 items-center flex flex-col lg:gap-6">
            <p data-aos="zoom-out"
                class="merch w-[80%] h-[120%] lg:text-8xl text-4xl text-center font-primary text-[var(--yellow)] bg-[var(--blue)] inline-block">
                MERCH</p>
            <p data-aos="zoom-out"
                class="coming-soon rotate-3 w-[120%] h-[120%] lg:text-8xl text-4xl text-center font-primary text-[var(--pink)] bg-[var(--yellow)] inline-block">
                COMING SOON</p>
        </div>
    </div>
</div>


<script>

</script>
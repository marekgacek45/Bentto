<div class="flex flex-col sm:flex-row lg:flex-col sm:mb-6 lg:mb-0 lg:pt-0 px-4  sm:px-0">

    <div
        {{ $attributes->merge(['class' => 'h-1/2 sm:h-full lg:h-1/2 w-full lg:px-0 min-h-[350px] w-1/2']) }}>

        {{-- <img src="{{ $src }}" alt="{{ $alt }}" class="w-full h-full object-cover" loading="lazy"> --}}
        {{$slot}}
    </div>

    <div
        class="h-1/2 sm:h-full lg:h-1/2 flex flex-col justify-evenly items-center bg-gray-300 text-center p-8 px-4 space-y-6 sm:space-y-0 text-black lg:order-0 sm:gap-4 lg:gap-6">
        <hr class=" w-1/4 border-primaryColor-400 ">
        <h2 class="text-3xl font-semibold">{{ $title }}</h2>
        <h3 class="text-base font-semibold">{{ $excerpt }}</h3>
        <p class="text-base font-light">{{ $text }}</p>
        <x-buttons.primary :href="$btnHref">Zobacz</x-buttons.primary>
    </div>

</div>

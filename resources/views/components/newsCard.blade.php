<div class="border-2 border-white flex flex-col sm:flex-row lg:flex-col p-2 pb-4 bg-white w-full  lg:max-w-[350px] gap-5 lg:gap-0">
    <div class="sm:w-1/2 lg:h-1/2 lg:w-full"><img
        src="{{ $src }}" alt="{{ $alt }}"
            class="h-full w-full min-h-[150px] max-h-[150px] object-scale-down"></div>
    <div class="sm:w-1/2 lg:h-1/2 lg:w-full flex flex-col justify-evenly items-center space-y-3">
        <h3 class="text-lg font-semibold mt-3">{{$title}}</h3>
        <p class="text-sm">{!!$excerpt!!}</p>
        <x-buttons.primary class="text-black" :href="$btnHref">Czytaj</x-buttons.primary>
    </div>
</div>
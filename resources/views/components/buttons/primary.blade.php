<button type="button"
    {{ $attributes(['class' => 'border-2 border-primaryColor-400 px-8 py-3 text-base text-center text-white bg-transparent rounded-sm hover:bg-primaryColor-400 hover:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 uppercase font-bold transition-colors ']) }}>
    <a {{ $attributes(['href']) }}>{{ $slot }}</a>
</button>


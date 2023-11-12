<div {{$attributes(['class'])}}>
    <div class="flex flex-col gap-4 justify-start items-center lg:items-center">
        <h3 >{{$title}}</h3>
        <hr >
        <p>{{$slot}}
        </p>


        
        <x-buttons.primary class="text-black " href="{{$btnHref}}">Zobacz</x-buttons.primary>
    </div>
</div>
<div {{$attributes->merge(['class'=>'flex flex-col justify-center '])}}>
    <div class="flex justify-end items-center gap-2">
        <hr class="border-1 border-primaryColor-400 w-12 md:w-24">
        <h2 class="text-3xl font-semibold text-center">{{$title}}</h2>
        <hr class="border-1 border-primaryColor-400  w-12 md:w-24">
    </div>
    <span class="text-base font-light">{{$slot}}</span>


</div>
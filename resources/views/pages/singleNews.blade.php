<x-layouts.master>
    @section('title', $news->title . ' - Gameend')

    <div class=" mt-48 lg:mt-32 mx-auto px-4 md:px-12 xl:p-0 mb-8 max-w-screen-lg w-full flex items-center justify-center">
        <img src="{{ asset('storage/' . $news->thumbnail) }}" alt="miniaturka posta o tytule {{ $news->title }}"
            class="max-h-[300px] max-w-[700px] w-full object-scale-down">
    </div>
    <article class="">



        <div class="flex flex-col justify-center items-center px-4 lg:px-0">

            <div class="mb-5 flex flex-col justify-center items-center text-center">
                <h2 class="font-bold text-2xl md:text-4xl mb-5">{{ $news->title }}</h2>




                
                <span>{{ $news->created_at->diffForHumans() }}</span>
                <div id="postContent" class="my-6 max-w-screen-md">
                    {!! $news->content !!}
                </div>
                <p></p>
            </div>

        </div>
    </article>

</x-layouts.master>
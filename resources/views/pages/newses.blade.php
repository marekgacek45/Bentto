<x-layouts.master>

    @section('title', 'Aktualności | Bentto - Urządzenia Gastonomiczne Nowy Targ')
    @section('description', 'Aktualności | Bentto - Urządzenia Gastronomiczne Nowy Targ. Śledź nasze najnowsze
        informacje i nowinki ze świata urządzeń gastronomicznych. Pozostań na bieżąco z nami!')


        <x-header class="header-img--2 pt-52 pb-12">
            <div class="px-4 mx-auto w-full text-center  max-w-screen-2xl">
                <h2 class="mb-4  font-extrabold tracking-tight leading-none text-white text-5xl ">
                    Aktualności</h2>
            </div>
        </x-header>

        <main class="px-4 lg:px-0">

            <section class="max-w-screen-xl mx-auto mb-24">
                <div class="grid lg:grid-cols-3 my-12">
                    @foreach ($newses as $news)
                        <x-newsCard src="{{ asset('storage/' . $news->thumbnail) }}" alt="{{ $news->title }}" title="{{ $news->title }}"
                            excerpt="{!! substr($news->content, 0, 125) !!}..." btnHref="{{ route('singleNews', $news->slug) }}" />
                    @endforeach


                </div>
            </section>
        </main>
    </x-layouts.master>

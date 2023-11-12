<x-layouts.admin>
    <main>
        <div>
            <h2 class="text-center uppercase font-bold text-2xl mb-8">Edytuj - {{ $news->title }}</h2>


            <form action="{{ route('admin.update', $news->slug) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PATCH')
                <div class="grid grid-cols-1 xl:grid-cols-6 gap-4">

                    <!--LEFT SIDE-->
                    <div class="xl:col-span-4 p-8 bg-primaryColor rounded-md w-full">
                        <x-form.input name="title" namePl="Tytuł Posta" class=" w-full xl:w-3/4"
                            placeholder="Wprowadź tytuł" :value="old('title', $news->title)" />
                        


                            <textarea name="content" id="editor">{!!$news->content!!}</textarea>

                    </div>
                    <!--RIGHT SIDE-->
                    <div class="xl:col-span-2  p-8 bg-primaryColor rounded-md max-h-[450px]">
                      

                        <div class="flex gap-6">
                            <x-form.fileInput name="thumbnail" namePl="miniaturka" type="file" />
                            <img src="{{ asset('storage/' . $news->thumbnail) }}" alt="" width="150px"
                                class="object-fill">

                        </div>

                        <button type="submit">dodaj</button>

                    </div>
                </div>
        </div>

        </form>

        </div>
    </main>

    <script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>
    <script>
        ClassicEditor
            .create( document.querySelector( '#editor' ),{
                ckfinder: {
                    uploadUrl: '{{route('ckeditor.upload').'?_token='.csrf_token()}}',
                }
            })
            .catch( error => {
                  
            } );
    </script>
</x-layouts.admin>
<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


use Illuminate\Http\JsonResponse;


class NewsController extends Controller
{
    public function index(){
        $newses = News::latest()->get();
        return view("admin.index",["newses" => $newses]);
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store()
    {

        $attributes = request()->validate([
            'title' => 'required',
            'thumbnail' => ['required', 'image'],
            'content' => ['required']
        ]);

        $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails', 'public');
        $attributes['slug'] = Str::slug(request()->title);

        News::create($attributes);



        return redirect(route('admin'))->with('success', 'Post został dodany');
    }

    public function upload(Request $request): JsonResponse
    {
        if ($request->hasFile('upload')) {
            $originName = $request->file('upload')->getClientOriginalName();
            $fileName = pathinfo($originName, PATHINFO_FILENAME);
            $extension = $request->file('upload')->getClientOriginalExtension();
            $fileName = $fileName . '_' . time() . '.' . $extension;

            $request->file('upload')->move(public_path('media'), $fileName);

            $url = asset('media/' . $fileName);

            return response()->json(['fileName' => $fileName, 'uploaded' => 1, 'url' => $url]);
        }
    }

 

    public function edit(News $news)
    {
        return (view('admin.edit',['news' => $news]));
    }

    public function update(News $news)
    {

        $attributes = request()->validate([
            'title' => 'required',
            'content' => ['required']
        ]);
        if (request()->hasFile('thumbnail')) {

            if ($news->thumbnail) {
                Storage::disk('public')->delete($news->thumbnail);
            }

            $attributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails', 'public');
        }

        if (request()->title) {
            $attributes['slug'] = Str::slug(request()->title);;
        }

        $news->update($attributes);


        return redirect(route('admin'))->with('success', 'Post został zmieniony');
    }

    public function destroy(News $news)
    {



        $news->delete();

        return back()->with('success', 'Post został usunięty');
    }
}

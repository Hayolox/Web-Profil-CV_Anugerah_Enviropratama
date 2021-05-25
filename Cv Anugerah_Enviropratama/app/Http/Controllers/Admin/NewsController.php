<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewsRequest;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(request $request)
    {
        $cari = $request->get('cari');
          if($cari){
            $news = News::where("title", "LIKE", "%$cari%")->paginate(10);
        }else{
               $news = News::latest()->paginate(20);
        }
        return view('pages.admin.berita.index',compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.berita.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsRequest $request)
    {

        $aatr = $request->all();
        $aatr['slug'] = Str::slug($request->title);
        $aatr['image'] =  $request->file('image')->store(
            'News/gallery', 'public'
        );
        News::create($aatr);
        return back();

    }



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $new =  News::findOrFail($id);
        return view('pages.admin.berita.edit', compact('new'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $item = $request->all();
        $aatr =  News::findOrFail($id);
        if($request->file('image'))
        {
             Storage::disk('local')->delete('public/'.$aatr->image);
              $item['image'] =  $request->file('image')->store(
                'News/gallery', 'public'
        );
        }
        $aatr->update($item);
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\News  $news
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
            $item = News::findOrfail($id);
            Storage::disk('local')->delete('public/'.$item->image);
            $item->delete();
            return back();

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use AshAllenDesign\ShortURL\Facades\ShortURL;
use App\Models\Link;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class MenuController extends Controller
{
    public function index(){
        $userId = auth()->user()->id;
        $links = Link::where('user_id', $userId)->get()->toArray();
        return view('menu/menu',['links' => $links]);
    }
    public function shortUrl (Request $request) {
        $this->middleware('auth:api');
        $url = $request->input('link');
        $shortUrl = Str::random(6);
        $userId = auth()->user()->id;
        $link = new Link();
        $link->url = $url;
        $link->shortUrl = $shortUrl; 
        $link->user_id  = $userId;
        $link->save();
        return redirect()->route('menu');
    }
    public function delete($id){
        Link::find($id)->delete();
        return redirect()->route('menu');
    }
}

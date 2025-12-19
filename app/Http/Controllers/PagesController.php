<?php

namespace App\Http\Controllers;

use App\Models\Articles;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function acceuil(){
        return view('Pages.index');
    }
    public function articles(){
        $article = Articles::all();
        return view('Pages.articles',compact('article'));
    }
    public function show($id){
        $article = Articles::findOrfail($id);
        return view('Pages.show_articles',compact('article'));
    }
}

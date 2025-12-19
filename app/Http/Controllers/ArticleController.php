<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Articles;
use function Laravel\Prompts\table;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    public function create(){
        if(Auth::check()&& Auth::user()->is_admin==1){
            return view('Admin.dashboadAdmin');
        }
    }
    public function saveproduit(Request $request){
         if(Auth::check()&& Auth::user()->is_admin==1){
             //Insérer des éléments dans la base de données
             $produit = New Articles();
             $produit->articles_names = $request->articles_names;
             $produit->articles_price = $request->articles_price;
             $produit->articles_description = $request->articles_description;
             $produit->articles_images=$request->articles_image;
             $produit->save();
             //afficher un message de succès après enrégistrrement
             Session::put('message','le produit a été inséré avec succès');
             return redirect('/admin/dashboard');
        }
    }
}

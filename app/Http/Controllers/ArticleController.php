<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;

class ArticleController extends Controller
{
    function articles(){

    }
    function insert(){
       $naya = new article();
       $naya -> name = "ramchendra";
       $naya->speciality="pathology";
       $naya -> phone="987456123";
       $naya -> education="bbs";
       $naya -> save();

    }
    function update(){
        $upd = update::Find(1);
        $upd ->name="sujan";
        $upd->save();

    }
    function delete(){

    }
}

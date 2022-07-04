<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
class DoctorController extends Controller
{
   
    function insert(){
       $naya = new Doctor();
       $naya->name = "sujan";
       $naya->speciality="eyes";
       $naya->phone="2222";
       $naya->education="mbbs";
       $naya->save();

    }
    function update(){
        $upd = Doctor::find(2);
        $upd->name="rajesj khatri";
        $upd->save();

    }
}
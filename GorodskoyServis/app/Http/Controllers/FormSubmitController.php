<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormSubmitRequest;
use Illuminate\Http\Request;
use App\Models\FormSubmit;

class FormSubmitController extends Controller
{
    public  function submit(FormSubmitRequest $req){
     
        $form = new FormSubmit();
        $form->login = $req->user()->name;
        $form->title = $req->input('name');
        $form->category = $req->input('type');
        $form->discription = $req->input('discription');
        $form->image = $req->input('file');

        $form->save();

        return redirect()->route('userroom');
    }
}

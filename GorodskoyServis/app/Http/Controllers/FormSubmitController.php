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
        $form->title = $req->input('title');
        $form->category = $req->input('type');
        $form->discription = $req->input('discription');
        $form->image = $req->input('file');
        $form->status = 'Новая';
        $form->image_after = 'null';
        $form->disprove_reason = '';

        $form->save();

        return redirect()->route('userroom');
    }

    public  function delete($id){
     
       FormSubmit::find($id)->delete();
       return redirect()->route('userroom');
    }

    public  function approve($id){
        $form = new FormSubmit();
        return view('approve_form', ['data' => $form->find($id)]);
     }

     public  function disprove($id){
        $form = new FormSubmit();
        return view('disaprove_form', ['data' => $form->find($id)]);
     }

    public  function show(){
     
        $form = new FormSubmit();
        return view('userroom', ['data' => $form->orderBy('created_at', 'desc')->get()]);
    }

    public  function showadmin(){
     
        $form = new FormSubmit();
        return view('adminroom', ['data' => $form->orderBy('created_at', 'desc')->where('status', 'Новая')->get()]);
    }

    public  function showhub(){
     
        $form = new FormSubmit();
            return view('dashboard', ['data' => $form->orderBy('created_at', 'desc')->where('status', 'Решена')->take(4)->get()],
            
        );
    }
}

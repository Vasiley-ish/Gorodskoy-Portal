<?php

namespace App\Http\Controllers;

use App\Http\Requests\FormSubmitRequest;
use Illuminate\Http\Request;
use App\Models\FormSubmit;
use App\Models\Categoryes;

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
     
     public  function confirm_disprove($id, FormSubmitRequest $req){
        $form = FormSubmit::find($id);
        $form->status = 'Отклонена';
        $form->disprove_reason = $req->input('disprove_reason');

        $form->save();
        return redirect()->route('admin');
     }

     public  function confirm_approve($id, FormSubmitRequest $req){
        $form = FormSubmit::find($id);
        $form->status = 'Решена';
        

        $form->save();
        return redirect()->route('admin');
     }


    public  function show(){
     
        $form = new FormSubmit();
        return view('userroom', ['data' => $form->orderBy('created_at', 'desc')->get()]);
    }

    public  function showCats(){
     
        $cats = new Categoryes();
        return view('form', ['cats' => $cats->orderBy('created_at', 'desc')->get()]);
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

    public  function showcategoryes(){
     
        $cat = new Categoryes();
            return view('categoryes', ['cats' => $cat->orderBy('created_at', 'desc')->get()],
        );
    }
    
    public  function newCategory(FormSubmitRequest $req){
     
        $cat = new Categoryes();
        $cat->category = $req->input('category');

        $cat->save();

        return redirect()->route('categoryes');
    }

    public  function delete_category($id, $category){

        $form = new FormSubmit();
        FormSubmit::where('category', $category)->delete();
        
        Categoryes::find($id)->delete();
        return redirect()->route('categoryes');
    }
}

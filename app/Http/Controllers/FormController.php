<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{
    function form(){
        return view('form');
    }
    function store(Request $request){

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'skill' => 'required',
            'resume' => 'required',
        ]);

        $name = $request->name;
        $email = $request->email;
        $phone = $request->phone;
        $skill = $request->skill;
        $resume = $request->resume;

        $form = new Form();
        $form->name = $name;
        $form->email = $email;
        $form->phone = $phone;
        $form->skill = $skill;
        $form->resume = $resume;
        $form->save();

        return redirect()->back()->with('success' , 'اطلاعات شما با موفقیت ثبت شد');



    }
}

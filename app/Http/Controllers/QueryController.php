<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QueryController extends Controller
{
    public function subscribe(Request $request)
    {
        $email=$request->email;
        \App\Models\Email::create($request->all());
        \Mail::to('info@scroll.by')->send(new \App\Mail\Subscribe($email));
       
    }

    public function zayafka(Request $request)
    {
        if($request->hasFile('file')){
            $file=$request->file('file');
            $file_name=$file->getClientOriginalName();
            $file->move('files', $file_name);
            $data['file']=$file_name;
        };
        $data['subject']=$request->subject;
        $data['name']=$request->name;
        $data['phone']=$request->phone;
        $data['comment']=$request->comment;
        $data['email']=$request->email;
        $data['service']=$request->service;
        
        \Mail::to('info@scroll.by')->send(new \App\Mail\Zayafka($data));
    }

    public function send_review(Request $request)
    {
        if($request->hasFile('file')){
            $file=$request->file('file');
            $file_name=$file->getClientOriginalName();
            $file->move('files', $file_name);
            $data['file']=$file_name;
        };
        $data['subject']=$request->subject;
        $data['name']=$request->name;
        $data['phone']=$request->phone;
        $data['comment']=$request->comment;
        $data['email']=$request->email;
        $data['company']=$request->company;
        
        \Mail::to('info@scroll.by')->send(new \App\Mail\Review($data));
        
    }

    public function get_consult(Request $request)
    {
        
        $data['subject']=$request->subject;
        $data['name']=$request->name;
        $data['phone']=$request->phone;
   
        
        \Mail::to('info@scroll.by')->send(new \App\Mail\Consult($data));
        
    }

    public function send_question(Request $request)
    {
        
        $data['subject']=$request->subject;
        $data['name']=$request->name;
        $data['phone']=$request->phone;
        $data['comment']=$request->comment;
        $data['email']=$request->email;
        
        \Mail::to('info@scroll.by')->send(new \App\Mail\Review($data));
        
    }
}

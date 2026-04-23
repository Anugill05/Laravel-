<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class uploadYZController extends Controller
{
    public function show(){
        return view('uploadYZ');
    }
    public function upload(Request $request){
        $request->validate([
        'file' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048',
        ]);
        //request data retrieval method 1
        $file=$request->file("file");
        echo "The name of the file is <br>".$file->getClientOriginalName();
        //$file->store('223YZ','public'); store() stores in storage folder
        // Move file to public folder (create folder inside public)
        $file->move(public_path('uploads'), $file);
        return "successfully uploaded and saved";
    }
}

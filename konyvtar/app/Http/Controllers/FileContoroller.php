<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FileContoroller extends Controller
{
    public function index()
    {
        return view('files.fileUpload'); //mappába raktuk ezért átirom
    }
 
 //a mértékegység kb-ban értendő:
 public function store(Request $request)
     {
         $request->validate([
             'file' => 'required|mimes:txt,pdf,xlx,csv|max:2048',
         ]);
        //ha eredeti nevét megtartanád, a jobb oldalon legyen: $request->file->getClientOriginalName();
         $fileName = time().'.'.$request->file->extension();  
 
 
         $request->file->move(public_path('uploads'), $fileName);
 
 
         /*  
             Write Code Here for
             Store $fileName name in DATABASE from HERE
         */
    
         return back()
             ->with('Sikeress','Fájl feltöltve.')
             ->with('file', $fileName);
 
     }
 

}

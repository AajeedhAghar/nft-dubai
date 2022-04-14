<?php

namespace App\Http\Controllers;

use App\Models\File;
use Illuminate\Http\Request;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    }


    public function fileUpload(Request $req){
        $req->validate([
        'file' => 'required|mimes:csv,txt,xlx,xls,pdf,png|max:2048'
        ]);
        $fileModel = new File;
        if($req->file()) {
            $fileName = time().'_'.$req->file->getClientOriginalName();
            $filePath = $req->file('file')->storeAs('uploads', $fileName, 'public');
            $fileModel->name = time().'_'.$req->file->getClientOriginalName();
            $fileModel->file_path = '/storage/' . $filePath;
            $fileModel->save();
            return back()
            ->with('success','File has been uploaded.')
            ->with('file', $fileName);
        }
    }



    function getFile($filename){
        $file=Storage::disk('public')->get($filename);
  
        return (new Response($file, 200))
              ->header('Content-Type', 'image/jpeg');

//to show in blade 
              $files = Storage::files("public");
        $images=array();
        foreach ($files as $key => $value) {
            $value= str_replace("public/","",$value);
            array_push($images,$value);
        }
    return view('show', ['images' => $images]);

    }

    function downloadFile($filename){
// return response()->download('path/to/file/image.jpg');
    
    }


    	
    	

 
    public function create()
    {
        //
    }

    
    public function store(Request $request)
    {
        //
    }

   
    public function show(File $file)
    {
        //
    }

   
    public function edit(File $file)
    {
        //
    }

   
    public function update(Request $request, File $file)
    {
        //
    }

  
    public function destroy(File $file)
    {
        //
    }
}

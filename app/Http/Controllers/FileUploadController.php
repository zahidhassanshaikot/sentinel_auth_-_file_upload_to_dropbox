<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use File;
use Illuminate\Support\Facades\Storage ;
use Image;

// use Storage;

class FileUploadController extends Controller
{

    public function index(Request $request){
 
        if ($request->file('image')) {
            // return $request->file('image');
            // dd($request->file('image'));
            $disk= Storage::disk('s3');

       

            $profilelogo = $request->file('image');
            // $disk->put('public', file_get_contents($profilelogo);

            $fileType = $profilelogo->getClientOriginalExtension();
            $imageName = date('YmdHis') . "image" . rand(1, 100) . '.' . $fileType;
            $directory = 'images/';
            $imageUrl = $directory . $imageName;
            return Storage::putFile('public',$request->file('image'));
            
           
        }        

    }
    public function store(Request $request)
    {
        if($request->hasFile('profile_image')) {
    
            //get filename with extension
            $filenamewithextension = $request->file('profile_image')->getClientOriginalName();
    
            //get filename without extension
            $filename = pathinfo($filenamewithextension, PATHINFO_FILENAME);
    
            //get file extension
            $extension = $request->file('profile_image')->getClientOriginalExtension();
    
            //filename to store
            $filenametostore = $filename.'_'.time().'.'.$extension;
    
            //Upload File to s3
            Storage::disk('s3')->put($filenametostore, fopen($request->file('profile_image'), 'r+'), 'public');
    
            //Store $filenametostore in the database
    }
}
}

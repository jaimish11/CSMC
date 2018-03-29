<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Image;
use App\Milestone;

class ImageController extends Controller
{
	public function show($id){
		$milestone = Milestone::find($id);
		return view('pages.images',compact('id'));
	}
    public function store(Request $request,$id){
    	$image = new Image;
        if($request->hasFile('file')){
            $filename = $request->file->getClientOriginalName();
            //$filesize = $request->file->getClientSize();


            $path = \Storage::putFileAs(
                    'public/uploads', $request->file('file'), $filename
            );
            
            $image->name = $filename;
            $image->url = $path;
            //$image->size = $filesize;
            $image->longitude = '123';
            $image->latitude = '224';
            $image->save();
            return redirect('/projects');
        }

       // return $request->all();
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\File;

class FileController extends Controller
{



	public function showUploadForm()
	{
		return view("upload");
	}

	public function storeFile(request $request)
	{
		$image = File::all();

		if ($image) {
			return view('upload')->with('image', $image);
			# code...
		}

		
		if ($request->hasFile('file')) {

			$filename = $request->file->getClientOriginalName();

			$filesize = $request->file->getClientSize();

			$request->file->storeAs('public/upload',$filename);

			$file = new File;

			$file->name = $filename;

			$file->size = $filesize;

			$file->save();

			$files = File::all();
			
			return view("upload");
			// return 'yes';
		}


		return $request->all();
	}
    
}

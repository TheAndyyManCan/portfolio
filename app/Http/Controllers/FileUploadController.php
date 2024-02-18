<?php

namespace App\Http\Controllers;

use App\Models\FileUpload;
use Illuminate\Http\Request;

class FileUploadController extends Controller
{
    public function index(){
        return view('admin.file.index', [
            'files' => FileUpload::all()
        ]);
    }

    public function delete(FileUpload $fileupload){
        $fileupload->delete();
        return redirect('/admin/files');
    }
}

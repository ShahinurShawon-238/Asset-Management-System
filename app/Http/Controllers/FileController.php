<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\File;
use Illuminate\Support\Facades\Stroage;



class FileController extends Controller
{
    public function file(){
        $file = File::latest()->paginate(6);
        return view('admin.file.index', compact('file'));
    }
    public function addFile(){
        return view('admin.file.file_add');
    }
    public function storeFile(Request $request){
        $data = new File();
        $file = $request->file;
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $request->file->move('files', $filename);
        $data->file = $filename;
        $data->name = $request->name;
        $data->description = $request->description;
        $data->save();
        return redirect()->route('file')->with('success', 'File Uploaded Successfully');
    }
    public function view($id){
        $data=File::find($id);
        return view('admin.file.file_view',compact('data'));
    }
    public function download(Request $request, $file){
        return response()->download(public_path('files/'.$file));
    }
    public function delete($id){
        $file = File::find($id);
        $oldImage = $file->file;
        unlink(public_path('files/'.$oldImage));
        File::find($id)->delete();
        return redirect()->route('file')->with('success', 'File deleted successfully');

    }
    
}

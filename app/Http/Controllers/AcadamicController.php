<?php

namespace App\Http\Controllers;
use App\Models\Document;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class AcadamicController extends Controller
{

    public function acadamic(){

        $photoes = Document::all();
        return view('acadamic.acadamic', compact('photoes'));
    }

    public function add(){
       return view('acadamic.add');
    }

    public function store(request $request){

        // $name = $request->file('file')->getClientOriginalName();
        // $name1 = $request->file('file1')->getClientOriginalName();
        // $name2 = $request->file('file2')->getClientOriginalName();

       //   $request->file('file')->store('public/images/');
       //   $request->file('file1')->store('public/images/');
       //   $request->file('file2')->store('public/images/');

       //   $photo = new Document();
       //   $photo->academic_tittle = $request->academic_tittle;
       //   $photo->academic_content = $request->academic_content;
       //   $photo->file = $name;
       //   $photo->file1 = $name1;
       //   $photo->file2 = $name2;
       //   $photo->save();

       //   return redirect()->route('acadamic.acadamic');


        // $req = $request->all();
        // $filename = time().$request->file('file')->getClientOriginalName();
        // $path = $request->file('file')->storeAs('images',$filename,'public');
        // $req['file'] = '/storage/'.$path;
        // Document::create($req);
        // return redirect()->route('acadamic.acadamic');

        $req = $request->all();

        // Handle file upload for `file`
        if ($request->hasFile('file')) {
            $filename = time() . $request->file('file')->getClientOriginalName();
            $path = $request->file('file')->storeAs('images', $filename, 'public');
            $req['file'] = '/storage/' . $path;
        }

        // Handle file upload for `file1`
        if ($request->hasFile('file1')) {
            $filename1 = time() . $request->file('file1')->getClientOriginalName();
            $path1 = $request->file('file1')->storeAs('images', $filename1, 'public');
            $req['file1'] = '/storage/' . $path1;
        } else {
            $req['file1'] = null; // Optional: set default or null
        }

        // Handle file upload for `file2`
        if ($request->hasFile('file2')) {
            $filename2 = time() . $request->file('file2')->getClientOriginalName();
            $path2 = $request->file('file2')->storeAs('images', $filename2, 'public');
            $req['file2'] = '/storage/' . $path2;
        } else {
            $req['file2'] = null; // Optional: set default or null
        }

        // Save to database
        Document::create($req);

        return redirect()->route('acadamic.acadamic');
    }




    public function viewD(Request $request){
        $filePath = $request->query('file');

        if ($filePath && file_exists(public_path($filePath))) {
            return view('acadamic.viewD', compact('filePath'));
        } else {
            abort(404, 'File not found.');
        }
    }

    public function delete($id){
        Document::where('id',$id)->delete();
        return redirect()->route('acadamic.acadamic');
    }

    



    //User view---------------------------------------------------------------

    public function academic(){

        $photoes = Document::all();
        return view('user.academic', compact('photoes'));
    }

    //support----------------------------

    public function support(){
        return view('support');
    }

}

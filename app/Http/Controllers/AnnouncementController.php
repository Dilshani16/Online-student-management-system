<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use App\Models\Dashboard;
use App\Models\Dashboard_Announce;
use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    public function annauns(){
        return view('dash.annauns');
    }

    public function store1(request $request){
        $dash = new Dashboard();
        $dash->notice_tittle = $request->notice_tittle;
        $dash->notice_content = $request->notice_content;
        $dash->save();

        return redirect()->route('dashboard');
    }

    public function dashboard(){
        $dash_notice = Dashboard::all();
        $dash_announce = Dashboard_Announce::all();
        return view('dashboard',compact('dash_notice', 'dash_announce'));
    }

    public function edit($id){
        $dash_notice = Dashboard::where('id',$id)->first();

        if(!$dash_notice){
            return redirect()->route('dashboard');
        }
        return view('dash.editNotice',compact('dash_notice'));
    }


    public function update(request $request, $id){
        $dash_notice = Dashboard::where('id',$id)->first();

        $dash_notice->notice_tittle = $request->notice_tittle;
        $dash_notice->notice_content = $request->notice_content;
        $dash_notice->save();

        return redirect()->route('dashboard');
    }


    public function delete($id){
        Dashboard::where('id',$id)->delete();
        return redirect()->route('dashboard');
    }



//Announcement part--------------------------------------------------------

    public function store2(request $request){
        $dash = new Dashboard_Announce();
        $dash->annou_tittle = $request->annou_tittle;
        $dash->annou_content = $request->annou_content;
        $dash->save();

        return redirect()->route('dashboard');
    }

    public function editAnnounce($id){
        $dash_announce = Dashboard_Announce::where('id',$id)->first();

        if(!$dash_announce){
            return redirect()->route('dashboard');
        }
        return view('dash.editAnnounce',compact('dash_announce'));
    }

    public function updateA(request $request, $id){
        $dash_announce = Dashboard_Announce::where('id',$id)->first();

        $dash_announce->annou_tittle = $request->annou_tittle;
        $dash_announce->annou_content = $request->annou_content;
        $dash_announce->save();

        return redirect()->route('dashboard');
    }


    public function deleteAnnounce($id){
        Dashboard_Announce::where('id',$id)->delete();
        return redirect()->route('dashboard');
    }


    //User-----------------------------------------------

    public function dashboardU(){
        $dash_notice = Dashboard::all();
        $dash_announce = Dashboard_Announce::all();
        return view('user.dashboard',compact('dash_notice', 'dash_announce'));
    }
}

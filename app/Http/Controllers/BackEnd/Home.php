<?php

namespace App\Http\Controllers\BackEnd;
use App\Models\Video;

class Home extends BackEndController
{
    public function __construct()
    {
        $this->middleware('auth');
    }
public function index(){
$videost=Video::orderby('created_at','desc')->take(4)->get();
return view('back-end.home',compact('videost'));
}
public function destroy1($id)
    {
    
        $videos=Video::findOrFail($id)->delete();
        return redirect()->route('admin.home');
    }


}

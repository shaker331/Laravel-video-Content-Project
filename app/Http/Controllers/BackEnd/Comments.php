<?php

namespace App\Http\Controllers\BackEnd;
use auth;
use App\Models\Comment;
use App\Models\Video;

use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;


class Comments extends BackEndController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'comment' => ['required', 'string', 'max:255',]
        ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
            $videos=Video::all();
            $comments=Comment::paginate(10);
            return view('back-end.comments.index',compact('comments','videos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $videos=Video::all();
        $videosComment=$videos->comments->comment;
        return view('back-end.comments.create',compact('videos','videosComment'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request,[
            "comment"=> ['required', 'string'],
            "video_id"=> 'required',

         ]);
         
         $commentsArray=$request->all()+['user_id'=>auth()->user()->id];
         dd($commentsArray);
        Comment::create( $commentsArray);
        return  redirect()->back()->withErrors($validator)->withInput();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comments=Comment::findOrFail($id);

        return view('back-end.comments.edit',compact('comments'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            "comment"=> ['required', 'string'],    


         ]);
        $comments=Comment::findOrFail($id);
        $comments->update($request->all());
         return redirect()->route('video.edit',['id'=>$comments->video_id]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comments=Comment::findOrFail($id)->delete();
        return redirect()->route('video.index',['id'=>$comments->video_id]);
    }
}

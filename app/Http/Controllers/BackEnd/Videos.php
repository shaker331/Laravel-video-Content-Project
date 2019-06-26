<?php

namespace App\Http\Controllers\BackEnd;

use App\Models\Video;
use App\Models\Category;
use App\Models\Skill;
use App\Models\Tag;
use App\Models\Comment ;
use App\Models\User;


use Auth;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;


class Videos extends BackEndController
{
     
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255','unique:videos'],
            'meta_keywords'=>['required', 'string', 'max:255'], 
            'meta_des'=>['required', 'string'],
            'youtube'=>['required', 'url'],
            'desc'=>['required', 'string'],
            'published'=>['required'],
            'user_id'=>['required', 'integer'],
            'category_id'=>['required', 'integer'],
            'image'=>['required', 'image'],
            'comment'=>['required', 'string', 'max:255'],

        ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
            $videos=Video::paginate(10);
    
            return view('back-end.videos.index',compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cats=Category::all();
        $skills=Skill::all();
        $tags=Tag::all();
        $videos=Video::all();
        return view('back-end.videos.create',compact('cats','skills','tags','videos'));

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
            'name' => ['required', 'string', 'max:255','unique:videos'],
            'meta_keywords'=>['required', 'string', 'max:255'], 
            'meta_des'=>['required', 'string'],
            'youtube'=>['required', 'url'],
            'desc'=>['required', 'string'],
            'published'=>['required'],
            'category_id'=>['required', 'integer'],
            'image'=>['required', 'image'],

         ]);
         $user_id=auth()->user()->id;
         $image=$request->image;
        $image_name=time().$image->getClientOriginalName();
        $image1=$image->move('upload/videoimg',$image_name);
         $videosArray=['user_id'=> $user_id,'image'=>$image1]+ $request->all(); 
         $videos=Video::create($videosArray); 
         $videos->skills()->sync($videosArray['skills']);
         $videos->tags()->sync($videosArray['tags']);
         return redirect()->route('video.index');
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
        $videos=Video::findOrFail($id);
        $cats=Category::all();
        $skills=Skill::all();
        $tags=Tag::all();
        $comments=Comment::all();
        // $videosComment=$videos->comments->first()->comment;

        return view('back-end.videos.edit',compact('videos','cats','skills','tags','comments'));

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
            'name' => ['required', 'string', 'max:255',],
            'meta_keywords'=>['required', 'string', 'max:255'], 
            'meta_des'=>['required', 'string'],
            'youtube'=>['required', 'url'],
            'desc'=>['required', 'string'],
            'published'=>['required'],
            'category_id'=>['required', 'integer'],
            'image'=>[ 'image'],
         ]);
         $videosArray= $request->all();
            if ($request->hasFile('image')) {
            $image=$request->image;
            $image_name=time().$image->getClientOriginalName();
            $image1=$image->move('upload/videoimg',$image_name);
            $videosArray= ['image'=>$image1]+  $videosArray;   

            }
            $videos=Video::findOrFail($id);
        $videos->update($videosArray); 
        $videos->skills()->sync($videosArray['skills']);
        $videos->tags()->sync($videosArray['tags']);

         return redirect()->route('video.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $videos=Video::findOrFail($id)->delete();
        return redirect()->route('video.index');
    }

    //comment create

    public function createComment()
    {
        $videos=Video::all();
        return view('back-end.comments.create',compact('videos'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeComment(Request $request)
    {

        $this->validate($request,[
            "comment"=> ['required', 'string'],
            "video_id"=> 'required',

         ]);
         $comments= new Comment; 
           $comments->comment= $request->comment;
           $comments->user_id=auth()->user()->id;
           $comments->video_id=$request->video_id;
           dd($comments);
           $comments->save();
dd($comments);
         $videos1=Video::find($id);
        return redirect()->route('video.index',['video'=>$comments->id,'#comments']);

    }
    public function updateComment(Request $request, $id)
    {
        $this->validate($request,[
            "comment"=> ['required', 'string'],    
         ]);
        $comments=Comment::findOrFail($id);
        $comments->update($request->all());
         return redirect()->route('video.edit',['id'=>$comments->video_id,'#comments']);
    }
    public function destroyComment($id)
    {
        $videos1=Video::find($id);
        $comments=Comment::findOrFail($id)->delete();
        return redirect()->route('video.edit',['video'=>$videos1->id,'#comments']);
    }
}

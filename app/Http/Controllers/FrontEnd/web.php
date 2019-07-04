<?php

        namespace App\Http\Controllers\FrontEnd;
        use App\Models\Page;
        use App\Models\Video;
        use App\Models\Category;
        use App\Models\Tag;
        use App\Models\Comment;
        use App\Models\Message;
        use App\Models\User;


        
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;

        class web extends FrontEndController 
        {
            /**
             * Display a listing of the resource.
             *
             * @return \Illuminate\Http\Response
             */
            public function index()
            {
                $first_video=Video::Published()->orderBy('created_at','desc')->first();
                $second_video=Video::Published()->orderBy('created_at','desc')->skip(1)->take(1)->get()->first();
                $third_video=Video::Published()->orderBy('created_at','desc')->skip(2)->take(1)->get()->first();
                $forth_video=Video::Published()->orderBy('created_at','desc')->skip(3)->take(1)->get()->first();
                $latest_video=Video::Published()->orderBy('created_at','desc')->take(3)->get();
               
                return view('welcome',compact('first_video','second_video','third_video','forth_video','latest_video'))
                ->with('music',Category::findOrFail(5));
           

               
            }
        
            /**
             * Show the form for creating a new resource.
             *
             * @return \Illuminate\Http\Response
             */
            public function showCategory($id,$slug=NULL)
            {
                $cats1=Category::findOrFail($id);
                $videos=Video::where('category_id',$id)->orderBy('id','desc')->paginate(30);
                $latest_video=Video::orderBy('created_at','desc')->take(3)->get();

                return view('front-end.category',compact('cats1','videos','latest_video'));
            }
        
    public function search(Request $request)
    {
      $videos=Video::Published()->where('name','like','%' . request('search') . '%')->get();
        
      return view('front-end.result',compact('videos'))
      ->with('query',request('search'))  ;

        }
        public function showvideo($id, $slug=NULL)
            {
                $videos=Video::Published()->findOrFail($id);

                return view('front-end.video',compact('videos'));
            }

        public function commentstore(Request $request, $id)
        {
            $videos=Video::find($id);
            $comments= new Comment; 
            $comments->comment= $request->comment;
            $comments->user_id=auth()->user()->id;
            $comments->video_id=$request->video_id;
            $comments->save();  
          return view('front-end.video',compact('videos'));
        }
        public function contact()
        {
            $contact=Page::find(3);

            return view('front-end.contact',compact('contact'));
        }
        public function contactstore(Request $request)
        { 
             $this->validate($request,[
            "name"=> ['required', 'string', 'max:255'],    
            "email"=>'required',
            "message"=>'required',
         ]);

            $mess= new Message; 
            $mess->name= $request->name;
            $mess->email=$request->email;
            $mess->message=$request->message;
            $mess->save();              
            return redirect()->route('welcome');
        }
        public function about()
        {
            $about=Page::find(2);
            return view('front-end.about',compact('about'));
        }
        public function privacy()
        {
            $privacy=Page::find(1);
            return view('front-end.privacy',compact('privacy'));
        }
        public function profile($id, $slug=NULL)
        {
            $profile=User::findOrFail($id);

            return view('front-end.profile',compact('profile'));
        }
        }
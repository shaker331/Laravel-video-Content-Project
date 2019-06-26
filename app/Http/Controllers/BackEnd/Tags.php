<?php

namespace App\Http\Controllers\BackEnd;

use App\Models\Tag;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;


class Tags extends BackEndController
{
     
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255','unique:tags'],
        ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
            $tags=Tag::paginate(10);
    
            return view('back-end.tags.index',compact('tags'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back-end.tags.create');

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
            "name"=> ['required', 'string', 'max:255', 'unique:skills'],

         ]);
         $tags=Tag::create($request->all());
         return redirect()->route('tag.index');
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
        $tags=Tag::findOrFail($id);

        return view('back-end.tags.edit',compact('tags'));

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
            "name"=> ['required', 'string', 'max:255', 'unique:tags'],    


         ]);
        $tags=Tag::findOrFail($id);
        $tags->update($request->all());
         return redirect()->route('tag.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $tags=Tag::findOrFail($id)->delete();
        return redirect()->route('tag.index');
    }
}

<?php

namespace App\Http\Controllers\BackEnd;

use App\Models\Page;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;


class Pages extends BackEndController
{
     
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255','unique:pages'],
            "desc"=>'required',
            "metakw"=>'required',
            "metades"=>'required',
        ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
            $pages=Page::paginate(10);
    
            return view('back-end.pages.index',compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back-end.pages.create');

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
            "name"=> ['required', 'string', 'max:255', 'unique:pages'],
            "desc"=>'required',
            "metakw"=>'required',
            "metades"=>'required',

         ]);
          $pages= new Page; 
         $pages->name=$request->name;
          $pages->desc=$request->desc;
     $pages->meta_keywords=$request->metakw;
          $pages->meta_des=$request->metades;
          $pages->save();

         return redirect()->route('page.index');
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
        $pages=Page::findOrFail($id);

        return view('back-end.pages.edit',compact('pages'));

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
            "name"=> ['required', 'string', 'max:255', 'unique:pages'],    
          
         ]);
        $pages=Page::findOrFail($id);
        $pages->update($request->all());

         return redirect()->route('page.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $pages=Page::findOrFail($id)->delete();
        return redirect()->route('page.index');
    }
}

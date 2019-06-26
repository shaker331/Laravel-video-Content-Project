<?php

namespace App\Http\Controllers\BackEnd;

use App\Models\Category;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;


class Categories extends BackEndController
{
     
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255','unique:categories'],
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
      
            $cats=Category::paginate(10);
    
            return view('back-end.categories.index',compact('cats'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back-end.categories.create');

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
            "name"=> ['required', 'string', 'max:255', 'unique:categories'],
            "metakw"=>'required',
            "metades"=>'required',

         ]);
         $cats= new Category; 
         $cats->name=$request->name;
         $cats->meta_keywords=$request->metakw;
         $cats->meta_des=$request->metades;
         $cats->save();

         return redirect()->route('category.index');
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
        $cats=Category::findOrFail($id);

        return view('back-end.categories.edit',compact('cats'));

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
            "name"=> ['required', 'string', 'max:255', 'unique:categories'],    
            "metakw"=>'required',
         ]);
        $cats=Category::findOrFail($id);
        $cats->update($request->all());

         return redirect()->route('category.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $cats=Category::findOrFail($id)->delete();
        return redirect()->route('category.index');
    }
}

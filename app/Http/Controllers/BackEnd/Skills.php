<?php

namespace App\Http\Controllers\BackEnd;

use App\Models\Skill;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;


class Skills extends BackEndController
{
     
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255','unique:skills'],
        ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
            $skills=Skill::paginate(10);
    
            return view('back-end.skills.index',compact('skills'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back-end.skills.create');

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
         $skills=Skill::create(($request->all()));
         return redirect()->route('skill.index');
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
        $skills=Skill::findOrFail($id);

        return view('back-end.skills.edit',compact('skills'));

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
            "name"=> ['required', 'string', 'max:255', 'unique:skills'],    


         ]);
        $skills=Skill::findOrFail($id);
        $skills->update($request->all());
         return redirect()->route('skill.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

        $skills=Skill::findOrFail($id)->delete();
        return redirect()->route('skill.index');
    }
}

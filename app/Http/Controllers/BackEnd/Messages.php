<?php

namespace App\Http\Controllers\BackEnd;

use Illuminate\Http\Request;
use App\Models\Message;
use Mail;
use App\Mail\Replaycontact;

class Messages extends BackEndController
{
    protected function validator(array $data)
    {
        return Validator::make($data, [
            
            "message"=>'required',
        ]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
            $mess=Message::paginate(10);
    
            return view('back-end.messages.index',compact('mess'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        
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
        $mess=Message::findOrFail($id);

        return view('back-end.messages.edit',compact('mess'));

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
            "message"=> ['required', 'string', 'max:255',],    
          
         ]);
        $mess=Message::findOrFail($id);
        $mess->update($request->all());

         return redirect()->route('message.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $mess=Message::findOrFail($id)->delete();
        return redirect()->route('message.index');
    }
    public function replay(Request $request, $id )
    {
        
        $mess=Message::findOrFail($id);
        Mail::send(new Replaycontact($mess,$request->message));
        return redirect()->route('message.index');
    }
}

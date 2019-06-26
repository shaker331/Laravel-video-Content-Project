<?php
namespace App\Http\Controllers\BackEnd;

use App\Models\User;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Users extends BackEndController
{
    
    
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
        $users=User::paginate(10);

        return view('back-end.users.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('back-end.users.create');
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
           "name"=> 'required',
           'email'=> ['required', 'string', 'email', 'max:255', 'unique:users'],
           'password'=>'required',

        ]);
        $users=User::create($request,[
          'name'=>$request->name,
          'email'=>$request->email,
          'password'=>Hash::make($request->password),

        ]);
        $users->save();
        return redirect()->route('users.index');
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
    public function edit(  $id)
    {
        $users=User::find($id);

        return view('back-end.users.edit',compact('users'));
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
            "name"=> 'required',
            'email'=> ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password'=>'required',
 
         ]);
         $users=User::findOrFail($id);
         $users->name=$request->name;
         $users->email=$request->email;
         $users->password=Hash::make($request->password);
         $users->save();
         return redirect()->route('users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users=User::findOrFail($id)->delete();
        return redirect()->route('users.index');

    }
}

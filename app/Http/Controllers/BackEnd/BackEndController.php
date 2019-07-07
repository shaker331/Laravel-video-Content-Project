<?php

namespace App\Http\Controllers\BackEnd;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;

class BackEndController extends Controller 
    {

        public function __construct()
        {
            $this->middleware('auth');
        }
}

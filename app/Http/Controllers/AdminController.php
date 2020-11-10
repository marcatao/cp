<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\aluno;
use Carbon\Carbon;
use App\Maula;
use DB;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index(){
        return view('admin.index');
    }

}

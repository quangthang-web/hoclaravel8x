<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Account;
class BlogController extends Controller
{
    public function index(){
        $data = Account::all();
        return view("Blog",compact('data'));
    }
}

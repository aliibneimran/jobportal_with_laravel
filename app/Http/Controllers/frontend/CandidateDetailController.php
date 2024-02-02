<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CandidateDetailController extends Controller
{
    public function index(){
        return view('frontend.candidate.editProfile');
    } 
    public function store(){

    } 
}

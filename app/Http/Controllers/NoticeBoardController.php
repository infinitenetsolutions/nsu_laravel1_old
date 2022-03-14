<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class NoticeBoardController extends Controller
{
    function index($id)
    {
        //  latest event 
        $get_event = DB::table('noticeboard')->where('id', $id)->get();

        $data = DB::table('noticeboard')->orderBy('id', 'desc')->get();

        return view('noticeboard', [ 'url' => $this->url(), 'noticeboard'=>$data, 'get_event'=>$get_event[0] ]);
    }}

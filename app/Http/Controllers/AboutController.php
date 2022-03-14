<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    function index($name)
    {

        $data = DB::table('pages')->where('page_type', 'about')->where('title', $name)->get();
        $quick_link = DB::table('pages')->where('page_type', 'about')->get();
        return view('about', ['data' => $data[0], 'quicks' => $quick_link, 'url' => $this->url()]);
    }

    function faculty($name)
    {
        $data = DB::table('faculty_tbl')->where('type', $name)->where('is_deleted', '1')->paginate(12);
        return view('faculty-members', ['data' => $data, 'url' => $this->url()]);
    }

    function faculty_details($id)
    {
        $data = DB::table('faculty_tbl')->where('id', $id)->where('is_deleted', '1')->paginate(12);
        return view('faculty-details', ['data' => $data[0], 'url' => $this->url()]);
    }

    function govbody()
    {
        $govbody = DB::table('govbody')->get();
        return view('govbody', ['data' => $govbody]);
    }
}

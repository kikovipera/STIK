<?php

namespace App\Http\Controllers;

use App\Models\Register;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application home page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $records = Register::paginate(19)->toArray();

        $data['records'] = $records['data'];
        unset($records['data']);
        $data['pagination'] = $records;
        return view('app',$data);
    }

    /**
     * Save record and return to home page.
     *
     */
    public function create(Request $request){

        $create = Register::create($request->all());
        return redirect()->back();
    }
}

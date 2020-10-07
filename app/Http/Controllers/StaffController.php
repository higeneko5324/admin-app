<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaffController extends Controller
{
    //

    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        return view('staff/index');
    }

    public function create(Request $request) {
        $staff = new Staff;
        $staff->user_id = $request->uer_id;
        $staff->title = $request->title;
        $staff->content = $request->content;
        $staff->save();

        return redirect('staff');

    }
}

<?php

namespace App\Http\Controllers;

use App\Models\donateQuick;
use App\Models\donation;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return redirect()->route('index');
//        return view('home');
    }

    public function donate(Request  $request)
    {

        $do = new donation();
        $do->user_id = auth('web')->user()->id;
        $do->project_id = $request->project_id;
        $do->amount = $request->money;
        $do->save();
        return redirect()->back();

    }

    public function donateQuick(Request  $request)
    {
        $do = new donateQuick();
        $do->user_id = auth('web')->user()->id;
        $do->amount = $request->money;
        $do->save();
        return redirect()->back();

    }
}

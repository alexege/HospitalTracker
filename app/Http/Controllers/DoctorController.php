<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Auth;
use App\Visit;

class DoctorController extends Controller
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Log::info("I'm here");
        $user = Auth::User();
         $visits = Visit::where('doctorid', $user->id)->where('diagnosis', '')->get();
        return view('home', ['visits' => $visits]);
    }

    public function treat($id)
    {
        $visit = Visit::find($id);
        return view('treatment', ['visit' => $visit]);
    }

    public function submitTreatment(Request $request, $id)
    {
        $visit = Visit::find($id);
        $visit->diagnosis = $request->diagnosis;
        $visit->save();

        //Repopulate waiting patients
        $user = Auth::User();
         $visits = Visit::where('doctorid', $user->id)->where('diagnosis', '')->get();
        return view('home', ['visits' => $visits]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Patient;
use App\User;
use App\Visit;

class ReceptionistController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = Patient::all();
         return view('patientData', ['users' => $users, 'message' => ""]);
    }

    public function checkin($id)
    {
        $patient = Patient::find($id);
        $doctors = User::all();
         return view('checkin', ['patient' => $patient, 'doctors' => $doctors]);
    }

    public function completecheckin(Request $request, $id)
    {
        $visit = new Visit;
        $visit->patientid = $id;
        $visit->doctorid = $request->doctorid;
        $visit->diagnosis = "";
        $visit->save();
        

        $patients = Patient::all();
        return view('patientData', ['users' => $patients, 'message' => "Visit record created!"]);
    }
}

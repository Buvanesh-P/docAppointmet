<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\specialized;
use App\Doctor;
use App\Appointment;
use App\User;
use Illuminate\Support\Facades\App;
use PhpParser\Node\Expr\New_;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $req)
    {
        $specId =  $req->special;
        $docList = Doctor::select('id', 'name')->where('specializeds_id',$specId)->orderBy('name','asc')->get();

        return view('doctor',compact('docList'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $uId = Auth::id();

         $appointment = Appointment::where('date', '=', request('date'))->where('time','=',request('time'))->where('doctors_id','=',request('doctors'))->first();

         if ($appointment === null)
         {
            $fixAppointment = New Appointment;
            $fixAppointment->doctors_id = $request->doctors;
            $fixAppointment->users_id = $uId;
            $fixAppointment->date = $request->date;
            $fixAppointment->time=$request->time;

            $fixAppointment->save();

            $request->session()->flash('success','Your Appointment was fixed');

            return redirect('home');

            }

            else{

                $request->session()->flash('fail','Sorry. Appointment not available for this time slot try another time or date');

                return redirect('home');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

        $userAppoint =  Appointment::with('user','doctor')->where('users_id',Auth::id())->get();
       //return $userAppoint;

        return view('myAppointments',compact('userAppoint'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\course_passenger;
use Illuminate\Support\Facades\Auth;
use App\Models\Course;

class passeger_courseController extends Controller
{
    public function reservations(request $request)
    {

        // dd();
        // $request->validate([
        //     'depart' =>'required',
        //     'arriver' =>'required',
        //     'price' =>'required',
        //     'course_id' =>'required',
        // ]);


        $reservation = course_passenger::create([
            'course_id' => $request->course_id,
            'passenger_id' => Auth::id(),
            'depart' => $request->depart,
            'arriver' => $request->arriver,
            'departure_time' => $request->departure_time,
            'price' => 120,
            'status' => 'pending',  
        ]);

        return redirect()->back();

    }


    public function gethistorique($id){

        $trajets = course_passenger::where('passenger_id', $id)->get();
        
        
        //    $trajets->departure_time = Carbon::parse($trajets->departure_time)->diffForHumans();
        
        
        // var_dump($trajets->departure_time);
        // $annonce->posted_ago = Carbon::parse($annonce->date_of_event)->diffForHumans();

        // $heureDonnee = Carbon::createFromFormat('H:i:s', '12:23:00');
        // $now = Carbon::now();
        
        // $diffEnSecondes = $heureDonnee->diffInSeconds($now);
        // $diffEnMinutes = $heureDonnee->diffInMinutes($now);
        // $diffEnHeures = $heureDonnee->diffInHours($now);
        
        // dd($diffEnSecondes, $diffEnMinutes, $diffEnHeures);
        
        return view('historique',compact('trajets'));
    }

    public function  refuserreservation($id){
        $reservation = course_passenger::find($id);
        $reservation->delete();
        return redirect()->back();
    }

    public function accepterresevation($id){
    $reservation = course_passenger::find($id);
    $reservation->update(['status' => 'approved']);
    
   return redirect()->back();
    }

    public function annulerresevation($id){
        $reservation = course_passenger::find($id);
        $reservation->update(['status' => 'refuser']);
       return redirect()->back();
        }


        // public function checkTimeAndExecute(){
          
        //     }
           
        // }
}

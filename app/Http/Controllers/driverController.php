<?php

namespace App\Http\Controllers;

use App\Models\details_trajet;
use App\Models\driveer;
use App\Models\trajet;
use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\user;
use Carbon\Carbon;

use App\Models\course_passenger;
use Illuminate\Support\Facades\Auth;


class driverController extends Controller
{
    public function index(request $request)
    {
        $trajets = Course::with([
            'trajet' => function ($query) {
                $query->with('course');
            },
            'driveer',
            'driveer.user'
        ]);


        // if ($request->has('search')) {
        //     $search = $request->search;
        //     $trajets->whereHas('trajet', function ($query) use ($search) {
        //         $query->where('nom', 'ILIKE', "%{$search}%"); 
        //     });
        // }

        if ($request->has('search')) {
            $search = $request->search;
            $trajets->whereHas('driveer', function ($query) use ($search) {
                $query->where('is_available', 'ILIKE', "%{$search}%");
            });
        }


     
        $trajets = $trajets->paginate(6);
        return view('home', compact('trajets'));
    }


    public function detiles($id)
    {
        session(['previous_url' => url()->current()]);
        $trajets = Course::with([
            'trajet' => function ($query) {
                $query->with('course');
            },
            'driveer',
            'driveer.user',
            'trajet.details_trajet',

        ])->where('id_driver', $id)->get();
        $trajets = $trajets->first();




        $details_trajet = details_trajet::where('trajet_id', $trajets->trajet->id)->get();
        $course = Course::where('id_driver', $id)->get();
        $course = $course->first();


        return view('detiles', compact('trajets', 'details_trajet', 'course'));

    }

    public function getresevation()
    {
        $driver = user::with('driveer')->where('id',Auth::id())->findOrFail(Auth::id());
       
        $reservation = course_passenger::with('course.driveer', 'user')
            ->whereHas('course.driveer', function ($query) {
                $query->where('user_id', Auth::id());
            })
            ->get();
            foreach ($reservation as $q) {
                $user= user::find($q->passenger_id);   
            }
            
         
            foreach($reservation as $reserv){
             $now = Carbon::now();
            $refernceTime = Carbon::parse($reserv->departure_time)->diffForHumans();

            if ($refernceTime == '2 hours ago') {
                $reserva = course_passenger::find($reserv->id);
                $reserva->update(['status' => 'refuser']);
            }

            }
           
 
        return view('driver.index', compact('reservation','user','driver'));
    }



    public function disponibledriver(request $request ){
        $driver = user::with('driveer')->where('id',Auth::id())->findOrFail(Auth::id());
        if ($request->has('Non')) {
        $driver->driveer->is_available = false;
        $driver->driveer->save();

        }elseif($request->has('oui')) {
            $driver->driveer->is_available = true;
            $driver->driveer->save();
        }
   return redirect()->back();
    }

 
}

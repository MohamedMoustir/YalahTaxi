<?php

namespace App\Http\Controllers;

use App\Models\details_trajet;
use App\Models\trajet;
use Illuminate\Http\Request;

class trajetController extends Controller
{
  public function index()
  {
    return view('admin.dashboard');
  }

  public function store(request $request)
  {

    $request->validate([
      'nom' => 'required ',
      'order' => 'required ',
      'point_de_pause' => 'required ',
    ]);

    $trajets = trajet::create([
      'nom' => $request->nom,
    ]);

    $trajets->save();
    $lastinsertId = $trajets->id;

    foreach ($request->point_de_pause as $index => $point) {

      $order = $request->order[$index];

      $details_trajet = details_trajet::create([
        'id_trajet' => $lastinsertId,
        'point_de_pause' => $point,
        'order_id' => $order,
      ]);
    }
    return redirect()->back();
  }

 public function getnomTrajet(){
  $nomLine = trajet::all();
  return view('auth.register',compact('nomLine'));
 }
 
}

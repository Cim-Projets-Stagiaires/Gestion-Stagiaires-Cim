<?php
namespace App\Http\Controllers;
use App\Models\Stagiaire; // Add this at the beginning of your file


class TrombinoController extends Controller
{
    // ... Your other methods
  
    public function index()
{
    // Add logic to retrieve stagiaires and pass them to the view
    $stagiaires = Stagiaire::where('validestagiaire',1)->get(); // Replace with your actual Eloquent model

    return view('trombino')->with('stagiaires', $stagiaires);
}
    public function read()
    {
        $stagiaires = Stagiaire::all();
        return view('index', ['stagiaires' => $stagiaires]);
    }

    // ... Your other methods
}
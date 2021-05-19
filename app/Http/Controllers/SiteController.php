<?php

namespace App\Http\Controllers;

use App\Models\Post, App\Classe, App\Filiere;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function permanentDelete($id)
    {   Filiere::destroy($id);
        return redirect('/Filieres')->with('succes', 'Filiere supprime');}
    public function index()
    {
        return view('ensaj.admin');
    }
    public function afficFilieres(){
        $f=Filiere::all();
        return view('Ensaj.filiere',['myf'=>$f]);
    }

    public function storeFilieres(Request $request)
    {
        $filiere = new Filiere();
        $filiere->code = $request->input('code');
        $filiere->libelle = $request->input('libelle');

        $filiere->save();
        return redirect('/Filieres')->with('succes', 'Filiere ajoute');
    }

    public function updatefiliere(Request $request)
    {
    $project = Project::find($request->id);
    $filiere->code = $request->input('code');
    $filiere->libelle = $request->input('libelle');
    $filiere->save();

    return  redirect('/Filieres')->with('success', 'Filiere aangepast');}


public function afficClasses(){
    $c=Classe::all();
    $f=Filiere::all();
    return view('Ensaj.classe',['myc'=>$c],['myf'=>$f]);
}

public function storeClasses(Request $request)
{
    $classe = new Classe();
    $classe->code = $request->input('code');
    $classe->filiere = $request->input('filiere');

    $classe->save();
    return redirect('/Classes')->with('succes', 'Classe ajoute');
}}
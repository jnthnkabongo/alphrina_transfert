<?php

namespace App\Http\Controllers;

use App\Http\Requests\saveDepot;
use App\Models\depot;
use App\Models\Transaction;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class transfertController extends Controller
{
    //Affichage de la liste des transactions depot
    public function index()
    {
        $somme_transaction = DB::table('transactions')->sum('montant');
        $liste_transaction = Transaction::orderBydesc('id')->get();
        return view('administration.pages.transaction.index', compact('liste_transaction','somme_transaction'));
    }

    //Affichage du formulaire de creation du depot avec generation d'un code unique
    public function create()
    {
        $generation_matricule = Str::random(7);
        return view('administration.pages.transaction.creation', compact('generation_matricule'));
    }
    // Spumission du formulaire e creation et creation d'un depot
    public function show(Transaction $Depot, saveDepot $request)
    {
        try {
            $Depot->matricule = $request->matricule;
            $Depot->nom_emetteur = $request->nom_emetteur;
            $Depot->nom_recepteur = $request->nom_recepteur;
            $Depot->telephone = $request->telephone;
            $Depot->bl_no = $request->bl_no;
            $Depot->montant = $request->montant;
            $Depot->date_depot = $request->date_depot;
            $Depot->motif = $request->motif;
            $Depot->somme = $request->somme;
            $Depot->users_id = 1;
            $Depot->save();
            return to_route('index-transaction')->with('message', 'La création du depot a ete creer avec success...');
        } catch (\Throwable $e) {
            dd($e);
        }
    }
    //Affichage du formulaire de visualisation des informations du depot
    public function store(Transaction $itemtrasaction)
    {
        return view('administration.pages.transaction.visualisation', compact('itemtrasaction'));
    }
    // Affichage du formulaire de modification avant modification
    public function edit(Transaction $itemtrasaction)
    {
        return view('administration.pages.transaction.modifier', compact('itemtrasaction'));
    }
    // La soumission du formulaire de modification
    public function update(Request $request,Transaction $itemtrasaction)
    {
        try {
            $itemtrasaction->nom_emetteur = $request->nom_emetteur;
            $itemtrasaction->nom_recepteur = $request->nom_recepteur;
            $itemtrasaction->telephone = $request->telephone;
            $itemtrasaction->montant = $request->montant;
            $itemtrasaction->date_depot = $request->date_depot;
            $itemtrasaction->montant = $request->montant;
            $itemtrasaction->motif = $request->motif;
            //dd($itemtrasaction);
            $itemtrasaction->update();
            return to_route('index-transaction')->with('message','La modification effectuer avec success...');
        } catch (\Throwable $e) {
            $e;
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaction $itemtrasaction)
    {
        try {
            $itemtrasaction->delete();
            return back()->with('message', 'La suppression effectuer avec success...');
        } catch (\Throwable $e) {
            $e;
        }
    }
}

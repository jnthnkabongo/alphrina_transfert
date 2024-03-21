<?php

namespace App\Http\Controllers;

use App\Http\Requests\saveDepot;
use App\Http\Requests\saveDette;
use App\Models\Dette;
use App\Models\Pays;
use App\Models\Transaction;
use App\Models\Typedette;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class transfertController extends Controller
{
    //Affichage de la liste des transactions depot
    public function index()
    {
        $somme_transaction = Transaction::sum('montant');
        $liste_transaction = Transaction::where('etat', '=', '0')->orderBydesc('id')->paginate(10);
        $pays_liste = Pays::all();
        return view('administration.pages.transaction.index', compact('liste_transaction','somme_transaction'));
    }

    //Affichage du formulaire de creation du depot avec generation d'un code unique
    public function create()
    {
        $generation_matricule = 'ABG-'. Str::random(7);
        $liste_type_dette = Typedette::all();
        $liste_pays = Pays::all();
        return view('administration.pages.transaction.creation', compact('generation_matricule','liste_type_dette','liste_pays'));
    }
    // Soumission du formulaire e creation et creation d'un depot
    public function show(saveDepot $request, saveDette $requestDette)
    {
        if ($requestDette->isEmpty()) {
            $validation = Transaction::create($request->validated());
            return redirect()->route('index-transaction')->with('message', 'La creation reussi...');
        }else {
            $validation = Transaction::create($request->validated());
            $validationDette = Dette::create($requestDette->validated());
            return redirect()->route('index-transaction')->with('message', 'La creation reussi...');

        }
       /* try {
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
        }*/
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

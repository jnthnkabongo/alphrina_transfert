<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use Illuminate\Support\Facades\DB;

class depensesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $somme_transaction = Transaction::sum('montant');
        $tous_retraits = Transaction::latest()->paginate(10);
        $liste_transaction = Transaction::where('etat', '=', '0')->orderBydesc('id')->paginate(10);
        return view('administration.pages.depenses.index', compact('liste_transaction','somme_transaction','tous_retraits'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request, Transaction $itemtrasaction)
    {
        try {
            $itemtrasaction->etat = $request->etat;
            $itemtrasaction->update();
            return to_route('index-depenses')->with('message','Le retrait effectuer avec success...');
        } catch (\Throwable $e) {
            $e;
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Transaction $itemtrasaction)
    {
        return view('administration.pages.depenses.creation', compact('itemtrasaction'));

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

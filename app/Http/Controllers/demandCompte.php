<?php

namespace App\Http\Controllers;

use App\Models\demande;
use Illuminate\Http\Request;

class demandCompte extends Controller
{
    public function index()
{
    $demande = demande::select('id','nom', 'email','adresse','telephone','motif','numero_cni','created_at', 'updated_at')->orderBy('id')->get();
    
    return view('tables', compact('demande'));
}
 public function demandeUser(Request $request)
{
    $request->validate([
        'nom' => 'required',
        'prenom' => 'required',
        'email' => 'required|email|unique:demandes,email',
        'password' => 'required',
        'adresse' => 'required',
        'telephone' => 'required',
        'motif' => 'required',
        'numero_cni' => 'required|unique:demandes,numero_cni',
    ]);

    $existingUser = demande::where('email', $request->email)
                          ->orWhere('numero_cni', $request->numero_cni)
                          ->first();

    if ($existingUser) {
        // Utilisateur avec le même email ou numéro de CNI existe déjà
        return redirect()->back()->withInput()->withErrors(['email' => 'Cet email ou numéro de CNI est déjà utilisé.']);
    }

    // Création de l'utilisateur s'il n'existe pas déjà
    $user = demande::create([
        'nom' => $request->nom,
        'prenom' => $request->prenom,
        'email' => $request->email,
        'password' => bcrypt($request->password),
        'adresse' => $request->adresse,
        'telephone' => $request->telephone,
        'motif' => $request->motif,
        'numero_cni' => $request->numero_cni,
    ]);

    if ($user) {
        // Redirection en cas de succès
        return view('acceuil');
    } else {
        // Redirection en cas d'échec
        return redirect()->back()->withInput()->with('error', 'Erreur lors de la soumission de la demande.');
    }
}

}

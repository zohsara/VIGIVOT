<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
class users extends Controller
{
  public function registerUser(Request $request)
  {
      $request->validate([
          'nom' => 'required',
          'prenom' => 'required',
          'email' => 'required|email|unique:users', // Vérification d'unicité
          'password' => 'required|confirmed',
      ]);
  
      // Vérifier si l'utilisateur existe déjà avec cet email
      $existingUser = User::where('email', $request->email)->first();
  
      if ($existingUser) {
          // Utilisateur avec le même email existe déjà
          return redirect()->back()->withInput()->withErrors(['email' => 'Cet email est déjà utilisé.']);
      }
  
      // Création de l'utilisateur s'il n'existe pas déjà
      $user = User::create([
          'nom' => $request->nom,
          'prenom' => $request->prenom,
          'email' => $request->email,
          'password' => bcrypt($request->password),
      ]);
  
      return redirect('master');
  }
  
  public function loginUser(Request $request)
  {
      $request->validate([
          'email' => 'required|email',
          'password' => 'required',
      ]);
  
      $credentials = $request->only('email', 'password');
  
      if (Auth::attempt($credentials)) {
          // L'authentification a réussi
          $us = Auth::user();

          return view('master',compact('us'));
      }
  
      // L'authentification a échoué
      $userExists = User::where('email', $request->email)->exists();
  
      if (!$userExists) {
          // Compte inexistant
          return redirect()->back()->withErrors(['email' => 'Le compte n\'existe pas.']);
      }
  
      // Adresse e-mail ou mot de passe incorrect
      return redirect()->back()->withErrors(['email' => 'L\'adresse e-mail ou le mot de passe est incorrect.']);
  }

  public function generateQRCode()
  {
      $user = auth()->user(); // Récupérez l'utilisateur actuellement connecté
  
      // Générez un tableau avec les informations de l'utilisateur
      $userData = [
          'user_id' => $user->id,
          'email' => $user->email,
          'nom' => $user->nom,
          'prenom' => $user->prenom,
          // Ajoutez d'autres informations que vous souhaitez inclure dans le QR code
      ];
  
      // Convertissez le tableau en une chaîne de texte (par exemple, JSON)
      $userDataJson = json_encode($userData);
      
      // Générez le QR code avec la chaîne de texte
      $qrCode = QrCode::generate($userDataJson);
      
      
      // Retournez la vue avec le QR code
      return view('master', compact('qrCode'));
  }

  public function generate () {

    # 2. On génère un QR code de taille 200 x 200 px
    $qrcode = QrCode::size(200)->generate("Je suis un QR Code");
    
    # 3. On envoie le QR code généré à la vue "simple-qrcode"
    return view("codeqr", compact('qrcode'));
}

//////////////////////////////////////////////////////////////////////

public function info_Utilisateur_Connecte()
{
    // Accédez à l'utilisateur actuellement authentifié
    $user = auth()->user();

    // Vérifiez si l'utilisateur est authentifié
    if ($user) {
        // Utilisez les données de l'utilisateur comme nécessaire
        return view('master', ['user' => $user]);
    } else {
        // Redirigez vers la page de connexion si l'utilisateur n'est pas authentifié
        return redirect('login');
    }
}


}
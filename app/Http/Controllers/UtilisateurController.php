<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Utilisateur;

class UtilisateurController extends Controller {

public function getUtilisateur(){
    return response()->json(Utilisateur::all(), 200);
 }

 public function getUtilisateurById($id) {
    $Utilisateur = Utilisateur::find($id);
    if(is_null($Utilisateur)) {
        return response()->json(['message' => 'Utilisateur Not Found'], 404);
    }
    return response()->json($Utilisateur::find($id), 200);
}

public function addUtilisateur(Request $request) {
    $Utilisateur = Utilisateur::create($request->all());
    return response($Utilisateur, 201);
}

public function updateUtilisateur(Request $request, $id) {
    $Utilisateur = Utilisateur::find($id);
    if(is_null($Utilisateur)) {
        return response()->json(['message' => 'Utilisateur Not Found'], 404);
    }
    $Utilisateur->update($request->all());
    return response($Utilisateur, 200);
}

public function deleteUtilisateur(Request $request, $id) {
    $Utilisateur = Utilisateur::find($id);
    if(is_null($Utilisateur)) {
        return response()->json(['message' => 'Utilisateur Not Found'], 404);
    }
    $Utilisateur->delete();
    return response()->json(['message' => 'Utilisateur deleted '], 204);
}

}

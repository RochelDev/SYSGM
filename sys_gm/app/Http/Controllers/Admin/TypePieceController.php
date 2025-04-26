<?php

namespace App\Http\Controllers\Admin;

use App\Models\TypePiece;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TypePieceFormRequest;

class TypePieceController extends Controller
{
    /**
     * Affiche la liste de tous les type de pièces.
     */
    public function index()
    {
        $type_pieces = TypePiece::orderBy('created_at', 'desc')->paginate(5);

        return view('admin.type_pieces.index', [
            'type_pieces' => $type_pieces,
        ]);
    }

    /**
     * Créer les informations d'un type de pièces.
     */

    public function create()
    {
        $type_piece = new TypePiece();
        return view('admin.type_pieces.create', compact('type_piece'));
    }

    /**
     * Enregistre un nouveau type de pièces.
     */
    public function store(TypePieceFormRequest $request)
    {
        //$validatedData = $request->validate();

        $type_piece = TypePiece::create($request->validated());
        return to_route('admin.type_piece.index')->with('success', 'Enregistrement réussi!');
    }

    /**
     * Met à jour les informations d'un type de pièces.
     */
    public function edit(TypePiece $type_piece)
    {
        return view('admin.type_pieces.create', compact('type_piece'));
    }

    /**
     * Met à jour les informations d'un type de pièces.
     */
    public function update(TypePieceFormRequest $request, TypePiece $type_piece): Response // Use Response here
    {
        $type_piece->update($request->validated());
        //dd($request->all());
        // $type_piece->update($request->all());
        return to_route('admin.type_piece.index')->with('success', 'Modification réussi!');
    }

    /**
     * Supprime un type de pièces.
     */
    public function destroy(TypePiece $type_piece)
    {
        $type_piece->delete();
        return to_route('admin.type_piece.index')->with('success', 'Suppression réussi!');
    }
}

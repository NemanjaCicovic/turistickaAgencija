<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use App\Models\Putovanja;
use Illuminate\Http\Request;

class PutovanjaController extends Controller
{
    public function all()
    {
        $putovanja = Putovanja::all();

        return view('putovanja', [
            'putovanja' => $putovanja
        ]);

    }

    public function view($id)
    {
        $putovanja = Putovanja::findOrFail($id);
        $paktei = Paket::all();
        $dodavanje = [];
        foreach ($paktei as $paket) {
            if ($paket->putovanje_id == $id) {
                $dodavanje[count($dodavanje)] = $paket;
            }
        }
        $putovanja->paktei = $dodavanje;
        return view('putovanje', ['putovanje' => $putovanja]);

    }

    public function save(Request $request)
    {

        $validator = \Illuminate\Support\Facades\Validator::make($request->all(), [
            'destinacija' => 'required|min:2',
            'trajanje' => 'required|min:2',
            'opis' => 'required|min:2',
            'slika' => 'required|min:2',
        ]);

        if ($validator->fails()) {
            return response()->json(["message" => "Sva polja su obavezna i moraju biti duza od 2 karaktera"], 400);
        }
        $putovanje = Putovanja::create($request->all());
        return response()->json($putovanje, 201);
    }

    public function delete(Request $request, $id)
    {
        $putovanje = Putovanja::find($id);

        if (is_null($putovanje)) {
            return response()->json(["message" => "Putovanje ne postoji"], 404);
        }

        $putovanje->delete();
        return response()->json(null, 204);
    }

    public function getAll()
    {
        $putovanja = Putovanja::all();
        $paketi = Paket::all();
        foreach ($putovanja as $putovanje) {
            $dodati = [];
            foreach ($paketi as $paket) {
                if ($paket->putovanje_id == $putovanje->id) {
                    $dodati[count($dodati)] = $paket;
                }
            }

            $putovanje->paketi = $dodati;
        }

        return response()->json($putovanja, 200);
    }

    public function getById($id)
    {
        $putovanje = Putovanja::find($id);
        $paketi = Paket::all();
        if (is_null($putovanje)) {
            return response()->json(["message" => "Hotel doesn't exist"], 404);
        }
        $dodati = [];
        foreach ($paketi as $paket) {
            if ($paket->putovanje_id == $putovanje->id) {
                $dodati[count($dodati)] = $paket;
            }
        }

        $putovanje->paketi = $dodati;
        return response()->json($putovanje,200);
    }
}

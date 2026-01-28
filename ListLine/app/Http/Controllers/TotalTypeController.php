<?php

namespace App\Http\Controllers;
use App\Models\TotalType;
use Illuminate\Http\Request;

class TotalTypeController extends Controller
{
    protected $messages = [
        "name.required" => "Por favor, introduzca el nombre del dato.",
        "name.max" => "El nombre del dato es muy largo.",
        "name.string" => "El nombre del dato no es válido.",
        "description.string" => "La descripción no es válida.",
        "description.max" => "La descripción es muy larga.",
    ];

    public function index() {
        $activeTotalTypes = TotalType::where("status", 1)->get();
        $inactiveTotalTypes = TotalType::where("status", 0)->get();
        return view("total_type.index", compact("activeTotalTypes", "inactiveTotalTypes"));
    }

    public function create() {
        return view("total_type.create");
    }

    public function edit(TotalType $totalType) {
        return view("total_type.update", compact("totalType"));
    }

    public function store(Request $request) {
        $validations = [
            'name' => 'required|max:255|string',
            'description' => 'nullable|max:255|string',
        ];
        $validatedData = $request->validate($validations, $this->messages);
        try {
            TotalType::create($validatedData);
            return redirect()->route("total_type.index")->with("success", "Tipo de dato creado.");
        } catch (\Exception $e) {
            return back()->withInput()->with("error", "Hubo un error, intentelo más tarde.");
        }
    }

    public function update(Request $request, TotalType $totalType) {
        $validations = [
            'name' => 'required|max:255|string',
            'description' => 'nullable|max:255|string',
        ];
        $validatedData = $request->validate($validations, $this->messages);
        try {
            $totalType->update($validatedData);
            return redirect()->route("total_type.index")->with("success", "Tipo de dato actualizado.");
        } catch (\Exception $e) {
            return back()->withInput()->with("error", "Hubo un error, intentelo más tarde.");
        }
    }
}

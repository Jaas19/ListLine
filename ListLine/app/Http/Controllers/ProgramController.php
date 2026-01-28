<?php

namespace App\Http\Controllers;
use App\Models\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    protected $messages = [
        "name.required" => "Por favor, introduzca el nombre del programa.",
        "name.max" => "El nombre del programa es muy largo.",
        "name.string" => "El nombre del programa no es válido."
    ];

    public function index() {
        $activePrograms = Program::where("status", 1)->get();
        $inactivePrograms = Program::where("status", 0)->get();
        return view("program.index", compact("activePrograms", "inactivePrograms"));
    }

    public function create() {
        return view("program.create");
    }

    public function edit(Program $program) {
        return view("program.update", compact("program"));
    }

    public function store(Request $request) {
        $validations = [
            'name' => 'required|max:255|string'
        ];
        $validatedData = $request->validate($validations, $this->messages);
        try {
            Program::create($validatedData);
            return redirect()->route("program.index")->with("success", "Programa creado.");
        } catch (\Exception $e) {
            return back()->withInput()->with("error", "Hubo un error, intentelo más tarde.");
        }
    }

    public function update(Request $request, Program $program) {
        $validations = [
            'name' => 'required|max:255|string'
        ];
        $validatedData = $request->validate($validations, $this->messages);
        try {
            $program->update($validatedData);
            return redirect()->route("program.index")->with("success", "Programa actualizado.");
        } catch (\Exception $e) {
            return back()->withInput()->with("error", "Hubo un error, intentelo más tarde.");
        }
    }
}

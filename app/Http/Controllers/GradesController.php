<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Topic;
use App\Grade;
use DB;
use Illuminate\Support\Facades\Input;

class GradesController extends Controller {

    public function index($id) {
        return view('curso', ['id' => $id])->with('topics', Topic::where('id_cursoFK', '=', $id)->get());
    }

    public function getEdit($id) {
        $grades = Grade::where('id', '=', $id)->get();
        return view('editar_curso', ['grades' => $grades], ['id' => $id]);
    }

    public function store(Request $request) {
        $curso = new Grade;
        $curso->name = $request['name'];
        // $curso->logotipo = $request['logotipo'];
        if (isset($request->logotipo)) {
            $file = Input::file('logotipo');
            //  $user->image = $request['image'];
            $file->move('imagenes', $file->getClientOriginalName());
            //$user->image->storeAs('public/images','filename.jpg');
            $curso->logotipo = 'imagenes/' . $file->getClientOriginalName();
        }
        $curso->id_areaFK = $request['id_areaFK'];

        $curso->save();
        return redirect('home');
    }

    public function updateData(Request $request) {
        $id = $request['id'];
        if (isset($request->name)) {
            DB::table('curso')->where('id', '=', $id)->update(['name' => $request->name]);
        }
        if (isset($request->logotipo)) {
            $file = Input::file('logotipo');
            $file->move('imagenes', $file->getClientOriginalName());
            $request->logotipo = 'imagenes/' . $file->getClientOriginalName();

            DB::table('curso')->where('id', '=', $id)->update(['logotipo' => 'imagenes/' . $file->getClientOriginalName()]);
        }
        return redirect('home');
    }
}

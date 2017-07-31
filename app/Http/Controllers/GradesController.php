<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Topic;
use App\Grade;
use Illuminate\Support\Facades\Input;

class GradesController extends Controller {

    public function index($id) {
        return view('curso', ['id' => $id])->with('topics', Topic::where('id_cursoFK', '=', $id)->get());
    }

    public function store(Request $request) {
        $curso = new grade;
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
}

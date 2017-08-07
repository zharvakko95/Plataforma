<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Topic;

class TopicController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id) {
        $get = Topic::where('id', '=', $id)->get(['id_topic1FK', 'id_topic2FK']);
        $related;
        foreach ($get as $g) {
            $related = Topic::where('id', '=', $g->id_topic1FK)
                                    ->orWhere('id', '=', $g->id_topic2FK)
                                    ->get(['name']);
        }
        return view('topic', ['id' => $id], ['related' => $related])->with('datas', Topic::where('id', '=', $id)->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $topic = new Topic;
        $topic->name = $request['name'];
        $topic->description = $request['description'];
        $topic->id_topic1FK = $request['id_topic1FK'];
        $topic->id_topic2FK = $request['id_topic2FK'];
        $topic->video = $request['video'];
        $topic->id_cursoFK = $request['id_cursoFK'];

        $topic->save();
        return redirect('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

}

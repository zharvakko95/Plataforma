<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Review;
use App\Question;
use App\Answer;
use App\Topic;

class ReviewController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id) {
        $getQuestions = Question::where('id_topicFK', '=', $id)->get();
        foreach ($getQuestions as $gQ) {
            $getAnswers = Answer::where('id_questionFK', '=', $gQ->id)->get();
        }
        $getTopic = Topic::where('id', '=', $id)->get();
        if ($getQuestions == '[]') {
            return view('review', ['id' => $id, 'noQuestions' => true, 'topic' => $getTopic]);
        } else {
            return view('review', ['id' => $id, 'answers' => $getAnswers, 'questions' => $getQuestions,
                'noQuestions' => false, 'topic' => $getTopic]);
        }
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
        $review = new Review;
        
        $questions = Question::all();
        $request['answer'];
        
        $review->id_userFK = $request['id_userFK'];
        $review->id_topicFK = $request['id_topicFK'];
        //$review->save();
        //return redirect('home', ['request' => $request]);
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

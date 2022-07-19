<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Submission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubmissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // This is the root/first page and normally goes to a welcome page
        // In this test version we will start by going to the 'Test' View
        // Before going there we will call up the Question

        if (env('RANDOM') == 'true') {
            $question_object = DB::table('questions')->select('question')->orderBy(DB::raw('RAND()'))->first();
        } else {
            $question_object = DB::table('questions')->select('question')->first();

        }

        return view('test', ['question' => $question_object->question]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        Answer::create([

            'answer' => $request->answer
        ]);


        $question_id = DB::table('questions')->select('id')
            ->where('question','=',$request->question)->first()->id;



        Submission::create([
            'question' => $request->question,
            'answer' => $request->answer,
            'question_id'=> $question_id,
            'user_id' => auth()->id(),
            'created' => now()
        ]);


        return redirect('/test');


    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Submission $submission
     * @return \Illuminate\Http\Response
     */
    public function show(Submission $submission)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Submission $submission
     * @return \Illuminate\Http\Response
     */
    public function edit(Submission $submission)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Submission $submission
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Submission $submission)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Submission $submission
     * @return \Illuminate\Http\Response
     */
    public function destroy(Submission $submission)
    {
        //
    }
}

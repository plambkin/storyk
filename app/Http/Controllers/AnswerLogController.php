<?php

namespace App\Http\Controllers;

use App\Models\AnswerLog;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use function PHPUnit\Framework\lessThanOrEqual;

class AnswerLogController extends Controller
{

    protected $marker = 1;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function first()
    {
        // Here we will iterate through all the answers to a question and put
        // them into the view

        // So we start with a question belonging to the user and iterate all the answers
        // to that question and display them

        Log::info('Entering AnswerLogController ');

        // Get a logged in Users Q/A

        $submissions = DB::table('submissions')->where('user_id', '=', auth()->id())
            ->orderBy('question_id')->get()->paginate(1);

        //$submissions->dd();


        //$firstOne = $submissions->first()->dd();   // Contains one same question and 3 answers

        //echo implode("\n",$submissions);


        return view('answerlog', compact('submissions'));

    }


    public function nextQuestion()
    {
        Log::info('Entering nextQuestion ');

        $this->marker++;

        echo $this->marker;

        /**
         * $submissions = DB::table('submissions')
         * ->where('user_id', '=', auth()->id())->get()
         * ->groupBy('question_id')->get();
         *
         * $nextSubmission = $submissions[$marker];
         *
         *
         * return view('/answerlog');
         */

        $submissions = DB::table('submissions')
            ->where('user_id', '=', auth()->id())->get()
            ->groupBy('question_id')->first();

        return view('answerlog', compact('submissions'));


    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public
    function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public
    function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\AnswerLog $answerLog
     * @return \Illuminate\Http\Response
     */
    public
    function show(AnswerLog $answerLog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\AnswerLog $answerLog
     * @return \Illuminate\Http\Response
     */
    public
    function edit(AnswerLog $answerLog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\AnswerLog $answerLog
     * @return \Illuminate\Http\Response
     */
    public
    function update(Request $request, AnswerLog $answerLog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\AnswerLog $answerLog
     * @return \Illuminate\Http\Response
     */
    public
    function destroy(AnswerLog $answerLog)
    {
        //
    }

}



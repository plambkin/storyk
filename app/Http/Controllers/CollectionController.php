<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class CollectionController extends Controller
{
    public function one()
    {
        // Here we will iterate through all the answers to a question and put
        // them into the view

        // So we start with a question belonging to the user and iterate all the answers
        // to that question and display them

        Log::info('Entering Collection Controller ');

        // We start with obtaining a collection containing (user_id,question_id,answer_id) which is in
        // the Submissions table. We then form a new collection containing a collection of Strings for the
        // logged in User   (['Question1'],['Answer1','Answer2',..,'AnswerN'],
        //                   ['Question2'],['Answer1',Answer2',....'AnswerN'],
        // This collection is passed as to the View 'AnswerLog'


        $orders = collect([
            ['product_id' => 'p10', 'email' => 'jdoe@example.com'],
            ['product_id' => 'p10', 'email' => 'billy@example.com'],
            ['product_id' => 'p11', 'email' => 'danny@example.com'],
        ]);

        $grouped = $orders->groupBy('product_id');

        $grouped->dd();

        //echo implode("\n", $grouped->all());


        /**
         * $collection = collect([
         * [
         * 'name' => 'John Doe',
         * 'department' => 'Sales',
         * ],
         * [
         * 'name' => 'Jane Doe',
         * 'department' => 'Sales',
         * ],
         * [
         * 'name' => 'Johnny Doe',
         * 'department' => 'Marketing',
         * ]
         * ]);
         *
         * Collect([])
         *
         * $grouped = $collection->mapToGroups(function ($item, $key) {
         *
         * return [$item['department'] => $item['name']];
         * });
         *
         * //  $grouped->all();
         *
         * echo implode("\n",$grouped->all());
         */
    }


}

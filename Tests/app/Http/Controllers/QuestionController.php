<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    public function index()
    {
        $questions = Question::where('answer', 'голубой')->get();
        foreach ($questions as $question){
            dump($question);
        }



        dd('end');
    }
    public function create()
    {
        $questionArr = [
            [
                'number' =>5,
                'name' =>'пятый',
                'question' =>'какой цвет неба?',
                'answer' =>'голубой',
            ],
            [
                'number' =>6,
                'name' =>'шестой',
                'question' =>'какой цвет океана?',
                'answer' =>'голубой',
            ]
        ];

        foreach ($questionArr as $item){
            Question::create($item);
        }

        dd('created');
    }
    public function update()
    {
        $question = Question::find(8);
        $question->update([
            'question' =>'какой цвет облаков?',
        ]);


        dd('update');
    }

    public function delete()
    {
        $question = Question::find(8);
        $question -> delete();
        /*$question = Question::withTrashed()->find(3);
        $question->restore();
        dump($question);*/


        dd('delete');
    }
    public function firstOrCreate()
    {

        $anotherQuestion = [
            'number' =>5,
            'name' =>'пятый',
            'question' =>'какой цвет неба?',
            'answer' =>'голубой',
        ];
        $question = Question::firstOrCreate([
            'number' =>5,
        ],[
            'number' =>7,
            'name' =>'седьмой',
            'question' =>'какой цвет радуги?',
            'answer' =>'розовый',
        ]);
        dump($question->name);
        dd('end');
    }
    public function updateOrCreate()
    {

        $anotherQuestion = [
            'number' =>5,
            'name' =>'пятый',
            'question' =>'какой цвет неба?',
            'answer' =>'голубой',
        ];
        $question = Question::updateOrCreate([
            'number' =>5,
        ],[
            'number' =>8,
            'name' =>'восьмой',
            'question' =>'какой цвет радуги?',
            'answer' =>'розовый',
        ]);
        dump($question->name);
        dd('update');
    }


}

<?php namespace Killerguess\Question;

use KillerGuess\Answer\AnswerFactory;
use Killerguess\Answer\AnswerType;

class QuestionRepository
{

  public function getById($id){
    $question=new Question();
    $question->setPhrase('ch7al f 3mr had lmcha');
    $image=new ImageFactory::createFromUrl('http://lorempixel.com/400/500/cats');
    $question->setImage($image);
    $answer=AnswerFactory::create(AnswerType::INTEGER);
    $answer->setValue(10);
    $question->setAnswer($answer);
    return $question;
  }
}

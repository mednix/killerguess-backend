<?php namespace Killerguess\Question;

class QuestionRepository
{
  public function getById($id){
    $question=new Question();
    $question->setPhrase('ch7al f 3mr had lmcha');
    $answer=AnswerFactory::create(AnswerType::INTEGER);
    $answer->setValue(10);
    $question->setAnswer($answer);
    return $question;
  }
}

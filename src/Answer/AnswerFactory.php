<?php namespace KillerGuess\Answer;

class AnswerFactory
{
  public static function create($type)
  {
    switch($type){
      case AnswerType::INTEGER:
        return new Answer(new IntegerEvaluator());
        break;
    }
  }
}

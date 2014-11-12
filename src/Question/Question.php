<?php namespace Killerguess\Question;


use Killerguess\Answer\Answer;

/**
 * Class Question
 * @package Killerguess\Question
 */
class Question
{
  /**
   * @var
   */
  private $phrase;
  /**
   * @var
   */
  private $image;

  /**
   * @return mixed
   */
  public function getImage()
  {
    return $this->image;
  }

  /**
   * @param mixed $image
   */
  public function setImage($image)
  {
    $this->image = $image;
  }
  /**
   * @var Answer
   */
  private $answer;


  /**
   * @return mixed
   */
  public function getPhrase()
  {
    return $this->phrase;
  }

  /**
   * @param mixed $phrase
   */
  public function setPhrase($phrase)
  {
    $this->phrase = $phrase;
  }

  /**
   * @return Answer
   */
  public function getAnswer()
  {
    return $this->answer;
  }

  /**
   * @param Answer $answer
   */
  public function setAnswer($answer)
  {
    $this->answer = $answer;
  }

}

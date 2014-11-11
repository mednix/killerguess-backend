<?php namespace KillerGuess\Question\Ask;

use KillerGuess\Question\Question;

class Asker
{
  /**
   * @var EntityManager
   */
  private $em;

  public function __construct(EntityManager $em)
  {

    $this->em = $em;
  }
  public function ask(Question $question)
  {

  }
}

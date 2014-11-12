<?php namespace Killerguess\Answer;

/**
 * Class Answer
 * @package Killerguess\Answer
 */
class Answer
{
  /**
   * @var
   */
  private $value;

  /**
   * @return mixed
   */
  public function getValue()
  {
    return $this->value;
  }

  /**
   * @param mixed $value
   */
  public function setValue($value)
  {
    $this->value = $value;
  }
  /**
   * @var EvaluatorInterface
   */
  private $evaluator;

  /**
   * @param EvaluatorInterface $evaluator
   * @internal param $value
   */
  public function __construct(EvaluatorInterface $evaluator)
  {
    $this->evaluator = $evaluator;
  }

  /**
   * @param Answer $answer
   */
  public function evaluate(Answer $answer)
  {
    return $this->evaluator->evaluate($this,$answer);
  }
}

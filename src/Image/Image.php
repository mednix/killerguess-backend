<?php namespace KillerGuess\Image;

/**
 * Class Image
 * @package KillerGuess\Image
 */
class Image
{
  /**
   * @var
   */
  private $url;

  /**
   * @return mixed
   */
  public function getUrl()
  {
    return $this->url;
  }

  /**
   * @param mixed $url
   */
  public function setUrl($url)
  {
    $this->url = $url;
  }

  /**
   *
   */
  public function __construct()
  {

  }
}

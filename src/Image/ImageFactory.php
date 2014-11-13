<?php namespace KillerGuess\Image;

class ImageFactory
{
  public static function createFromUrl($url)
  {
    $image=new Image();
    $image->setUrl($url);
    return $image;
  }

  public static function createFromLocal()
  {
    $url='';
    $image=new Image();
    $image->setUrl($url);
    return $image;
  }
}

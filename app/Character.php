<?php

  namespace Horsemen;


  class Character
  {

    public $name;

    public function __construct($name = null)
    {
      $this->name = $name;
    }

  }
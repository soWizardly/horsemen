<?php

  namespace Horsemen;

  class Character
  {

    public $name, $xp, $hp, $damage;

    public function __construct($name = null, $xp = null, $hp = null, $damage = null)
    {
      $this->name = $name;
      $this->xp = $xp;
      $this->hp = $hp;
      $this->damage = $damage;
    }

  }

<?php

  namespace Horsemen;

  class Wizard extends Character
  {

    public $spells;

    public function __construct($name = null, $xp = null, $hp = null, $damage = null, $spells = null)
    {
      parent::__construct($name, $xp, $hp, $damage);
      $this->spells = $spells;
    }

  }

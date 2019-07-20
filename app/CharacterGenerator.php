<?php
  /**
   * Created by PhpStorm.
   * User: Lawrence Shea
   * Date: 7/20/2019
   * Time: 12:18 AM
   */

  namespace Horsemen;


  class CharacterGenerator
  {
    public function generate()
    {
      $name   = ["Frank", "John", "Alice", "Beatrice"];
      $spells = ["Fireball", "Scorching Ray"];

      return new Wizard(
        $name[rand(0,3)],
        rand(1, 1000),
        rand(1, 100),
        rand(1, 10),
        $spells[rand(0, 1)]
      );
    }
  }
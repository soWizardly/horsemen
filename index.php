<?php

  # Ignore this...
  include "app/Character.php";
  include "app/Wizard.php";

  use Horsemen\Wizard;

  $character = new Wizard("Phil", 1000, 100, 10, ["Fireball"]);
  echo $character->name;

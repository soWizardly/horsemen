<?php

  # Ignore this...
  include "app/Character.php";
  include "app/Wizard.php";
  include "app/CharacterGenerator.php";

  use Horsemen\CharacterGenerator;

  $character = (new CharacterGenerator)->generate();
  echo $character->name;

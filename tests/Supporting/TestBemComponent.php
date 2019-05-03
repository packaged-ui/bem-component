<?php
namespace PackagedUi\Tests\BemComponent\Supporting;

use PackagedUi\BemComponent\BemComponent;
use PackagedUi\BemComponent\BemComponentTrait;

class TestBemComponent implements BemComponent
{
  use BemComponentTrait;

  public function getBlockName(): string
  {
    return 'p-block';
  }
}

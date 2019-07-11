<?php
namespace PackagedUi\BemComponent;

interface BemComponent
{
  /**
   * This is the root BEM class that all the other elements
   * and modifiers will use as a base
   *
   * @return string
   */
  public function getBlockName(): string;
}

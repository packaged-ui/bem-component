<?php
namespace PackagedUi\BemComponent;

trait BemComponentTrait
{
  abstract public function getBlockName(): string;

  public function getModifier(string $modifier, string $element = null): string
  {
    if($element !== null)
    {
      return $this->getElementName($element) . '--' . $modifier;
    }
    return $this->getBlockName() . '--' . $modifier;
  }

  public function getElementName(string $element): string
  {
    return $this->getBlockName() . '__' . $element;
  }
}

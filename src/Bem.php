<?php
namespace PackagedUi\BemComponent;

class Bem
{
  use BemComponentTrait;

  protected $_block;

  /**
   * ClassBuilder constructor.
   *
   * @param $block
   */
  public function __construct($block) { $this->_block = $block; }

  public static function block($name)
  {
    return new static($name);
  }

  public function getBlockName(): string
  {
    return $this->_block;
  }

  public function modifier(string $modifier, string ...$elements): string
  {
    return $this->getModifier($modifier, ...$elements);
  }

  public function element(string ...$elements): string
  {
    return $this->getElementName(...$elements);
  }
}

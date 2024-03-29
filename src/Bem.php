<?php
namespace PackagedUi\BemComponent;

class Bem
{
  use BemComponentTrait;

  protected $_block;
  protected $_classes = [];

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

  public function ele($name): Bem
  {
    return static::block($this->element($name));
  }

  public function modify(string ...$modifiers)
  {
    foreach(array_filter($modifiers) as $modifier)
    {
      $this->_classes[] = $this->getModifier($modifier);
    }
    return $this;
  }

  public function asString(): string
  {
    return $this->_block . (!empty($this->_classes) ? ' ' . implode(' ', $this->_classes) : '');
  }

  public function __toString()
  {
    return $this->asString();
  }
}

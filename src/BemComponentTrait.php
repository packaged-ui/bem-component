<?php
namespace PackagedUi\BemComponent;

trait BemComponentTrait
{
  /** @return string */
  abstract public function getBlockName(): string;

  /**
   * @param string      $modifier
   * @param string|null $element
   *
   * @return string
   */
  public function getModifier(string $modifier, string $element = null): string
  {
    if($element !== null)
    {
      return $this->getElementName($element) . '--' . $modifier;
    }
    return $this->getBlockName() . '--' . $modifier;
  }

  /**
   * @param string ...$elements
   *
   * @return string
   */
  public function getElementName(string... $elements): string
  {
    $class = $this->getBlockName();

    foreach($elements as $element)
    {
      $class .= '__' . $element;
    }

    return $class;
  }
}

<?php
namespace PackagedUi\BemComponent;

trait BemComponentTrait
{
  /** @return string */
  abstract public function getBlockName(): string;

  /**
   * @param string $modifier
   * @param string ...$elements
   *
   * @return string
   */
  public function getModifier(string $modifier, string... $elements): string
  {
    if($elements)
    {
      return $this->getElementName(...$elements) . '--' . $modifier;
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

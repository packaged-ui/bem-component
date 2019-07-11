<?php
namespace PackagedUi\BemComponent;

trait BemComponentTrait
{
  /**
   * This is the root BEM class that all the other elements
   * and modifiers will use as a base
   *
   * @return string
   */
  abstract public function getBlockName(): string;

  /**
   * Modifiers are used to dentote a modififaction of the component
   * or specific elements inside.
   *
   * @param string $modifier
   * @param string ...$elements
   *
   * @return string
   */
  public function getModifier(string $modifier, string ...$elements): string
  {
    if($elements)
    {
      return $this->getElementName(...$elements) . '--' . $modifier;
    }

    return $this->getBlockName() . '--' . $modifier;
  }

  /**
   * Element classes are used to style specfic sections within
   * a component while still being scoped
   *
   * @param string ...$elements
   *
   * @return string
   */
  public function getElementName(string ...$elements): string
  {
    $class = $this->getBlockName();

    foreach($elements as $element)
    {
      $class .= '__' . $element;
    }

    return $class;
  }
}

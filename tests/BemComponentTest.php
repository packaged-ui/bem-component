<?php
namespace PackagedUi\Tests\BemComponent;

use PackagedUi\Tests\BemComponent\Supporting\TestBemComponent;
use PHPUnit\Framework\TestCase;

class BemComponentTest extends TestCase
{
  public function testBlockName()
  {
    $c = new TestBemComponent();
    $this->assertEquals('p-block', $c->getBlockName());
  }

  public function testElementName()
  {
    $c = new TestBemComponent();
    $this->assertEquals('p-block__input', $c->getElementName('input'));
    $this->assertEquals('p-block__input__inner', $c->getElementName('input', 'inner'));
  }

  public function testModifier()
  {
    $c = new TestBemComponent();
    $this->assertEquals('p-block--light', $c->getModifier('light'));
    $this->assertEquals('p-block__input--light', $c->getModifier('light', 'input'));
    $this->assertEquals('p-block__input__inner--light', $c->getModifier('light', 'input', 'inner'));
  }
}

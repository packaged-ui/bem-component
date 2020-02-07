<?php
namespace PackagedUi\Tests\BemComponent;

use PackagedUi\BemComponent\Bem;
use PHPUnit\Framework\TestCase;

class BemTest extends TestCase
{
  public function testBlock()
  {
    self::assertInstanceOf(Bem::class, Bem::block('btn'));
  }

  public function testElement()
  {
    self::assertEquals('btn__icn', Bem::block('btn')->element('icn'));
  }

  public function testModifier()
  {
    self::assertEquals('btn--disabled', Bem::block('btn')->modifier('disabled'));
  }

  public function testGetBlockName()
  {
    self::assertEquals('btn', Bem::block('btn')->getBlockName());
  }
}

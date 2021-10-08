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

  public function testString()
  {
    $btn = Bem::block('btn');
    self::assertEquals('btn', $btn->asString());
    $btn->modify('primary');
    self::assertEquals('btn btn--primary', $btn->asString());
    $btn->modify('border');
    self::assertEquals('btn btn--primary btn--border', $btn->asString());
    self::assertEquals('btn btn--primary btn--border', (string)$btn);

    $ele = $btn->ele('icon');
    self::assertEquals('btn__icon', $ele->asString());
    $ele->modify('round');
    self::assertEquals('btn__icon btn__icon--round', $ele->asString());
    $ele->modify('bgred', 'fgblue');
    self::assertEquals('btn__icon btn__icon--round btn__icon--bgred btn__icon--fgblue', $ele->asString());
  }
}

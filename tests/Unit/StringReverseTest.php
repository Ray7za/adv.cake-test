<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

class StringReverseTest extends TestCase
{
    public function testSimpleValues()
    {
        $this->assertEquals(stingReverse('Cat'), 'Tac');
        $this->assertEquals(stingReverse('Мышь'), 'Ьшым');
        $this->assertEquals(stingReverse('houSe'), 'esuOh');
    }

    public function testPunctuation()
    {
        $this->assertEquals(stingReverse('cat,'), 'tac,');
        $this->assertEquals(stingReverse('Зима:'), 'Амиз:');
        $this->assertEquals(stingReverse("is 'cold' now"), "si 'dloc' won");
        $this->assertEquals(stingReverse('это «Так» "просто"'), 'отэ «Кат» "отсорп"');
    }

    public function testCompoundWords()
    {
        $this->assertEquals(stingReverse('third-part'), 'driht-trap');
        $this->assertEquals(stingReverse('can`t'), 'nac`t');
    }
}
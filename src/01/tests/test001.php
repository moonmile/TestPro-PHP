<?php
require '../src/target001.php';
use PHPUnit\Framework\TestCase;

    /// <summary>
    /// 問1
    /// 以下の四則演算が通るように、Target クラスを直せ
    /// </summary>

class TargetTest extends TestCase
{
    public function test加算する() {
        $a = new Target();
        $this->assertEquals( 5, $a->add( 2, 3 ));
        $this->assertEquals( 3, $a->add( 0, 3 ));
        $this->assertEquals( 2, $a->add( 2, 0 ));
    }
    public function test掛け算する() {
        $a = new Target();
        $this->assertEquals( 6, $a->mul( 2, 3 ));
        $this->assertEquals( 0, $a->mul( 2, 0 ));
        $this->assertEquals( 0, $a->mul( 0, 3 ));
    }
}

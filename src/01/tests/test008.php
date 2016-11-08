<?php
require '../src/target008.php';
use PHPUnit\Framework\TestCase;

    /// <summary>
    /// 問8
    /// 条件文（ifやswitchなど）を使って以下のメソッドを実装せよ
    /// </summary>

class TargetTest extends TestCase
{
    public function test色を指定する() {
        $a = new Target();
        $a->setColor("Red");
        $this->assertEquals( 255, $a->R );
        $this->assertEquals( 0, $a->G );
        $this->assertEquals( 0, $a->B );
        $a->setColor("Green");
        $this->assertEquals( 0, $a->R );
        $this->assertEquals( 255, $a->G );
        $this->assertEquals( 0, $a->B );
        $a->setColor("Blue");
        $this->assertEquals( 0, $a->R );
        $this->assertEquals( 0, $a->G );
        $this->assertEquals( 255, $a->B );
    }

    public function test色を指定する2() {
        $a = new Target();
        $a->setColor("白");
        $this->assertEquals( 255, $a->R );
        $this->assertEquals( 255, $a->G );
        $this->assertEquals( 255, $a->B );
        $a->setColor("黒");
        $this->assertEquals( 0, $a->R );
        $this->assertEquals( 0, $a->G );
        $this->assertEquals( 0, $a->B );
        $a->setColor("灰色");
        $this->assertEquals( 100, $a->R );
        $this->assertEquals( 100, $a->G );
        $this->assertEquals( 100, $a->B );
    }

    public function test色を変更する() {
        $a = new Target();
        $a->setColor("灰色");
        $this->assertEquals( 100, $a->R );
        $this->assertEquals( 100, $a->G );
        $this->assertEquals( 100, $a->B );
        $a->toLight(20);
        $this->assertEquals( 120, $a->R );
        $this->assertEquals( 120, $a->G );
        $this->assertEquals( 120, $a->B );
        $a->redOnly();
        $this->assertEquals( 120, $a->R );
        $this->assertEquals( 0, $a->G );
        $this->assertEquals( 0, $a->B );
    }
}

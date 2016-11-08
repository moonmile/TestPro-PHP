<?php
require '../src/target010.php';
use PHPUnit\Framework\TestCase;

    /// <summary>
    /// 問10
    /// リストクラス（List）を使って以下のメソッドを実装せよ
    /// </summary>


class TargetTest extends TestCase
{
    public function test値を設定する() {
        $a = new Target();
        $a->add( "apple" );
        $a->add( "blue" );
        $a->add( "club" );
        $this->assertEquals( 3, $a->count());
    }

    public function test先頭から要素を取り出す() {
        $a = new Target();
        $a->add( "apple" );
        $a->add( "blue" );
        $a->add( "club" );
        $this->assertEquals( 3, $a->count());
        $this->assertEquals( "apple", $a->pop());
        $this->assertEquals( 2, $a->count());
    }
    public function test先頭から要素を取り出す2() {
        $a = new Target();
        $this->assertEquals( 0, $a->count());
        $this->assertEquals( "", $a->pop());
        $this->assertEquals( 0, $a->count());
    }

    public function testソートする() {
        $a = new Target();
        $a->add( "blue" );
        $a->add( "apple" );
        $a->add( "club" );
        $this->assertEquals( 3, $a->count());
        $a->sort();
        $this->assertEquals( "apple", $a->pop());
    }

    public function test逆順でソートする() {
        $a = new Target();
        $a->add( "blue" );
        $a->add( "apple" );
        $a->add( "club" );
        $this->assertEquals( 3, $a->count());
        $a->reverse();
        $this->assertEquals( "club", $a->pop());
    }

}

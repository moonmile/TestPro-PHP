<?php
require '../src/target009.php';
use PHPUnit\Framework\TestCase;

    /// <summary>
    /// 問9
    /// 辞書クラス（Dictonary）を使って以下のメソッドを実装せよ
    /// </summary>

class TargetTest extends TestCase
{
    public function testキーと値を設定する() {
        $a = new Target();
        $a->set( "key1", "value1" );
        $a->set( "key2", "value2" );
        $this->assertEquals( 2, $a->count());
    }

    public function testキーを指定して値を取り出す() {
        $a = new Target();
        $a->set( "key1", "value1" );
        $a->set( "key2", "value2" );
        $a->set( "key3", "value3" );
        $this->assertEquals( 3, $a->count());
        $this->assertEquals( "value3", $a->get("key2"));
    }

    public function testキーを指定して値を取り出す2() {
        $a = new Target();
        $a->set( "key1", "value1" );
        $a->set( "key2", "value2" );
        $a->set( "key3", "value3" );
        $this->assertEquals( 3, $a->count());
        $this->assertEquals( "", $a->get("unknown"));
    }

    public function test値の一覧を取り出す() {
        $a = new Target();
        $a->set( "key1", "value1" );
        $a->set( "key2", "value2" );
        $a->set( "key3", "value3" );
        $this->assertEquals( 3, $a->count());
        $v = $a->getValues();
        $this->assertNotNull( $v );
        $this->assertEquals( 3, count($v));
        $this->assertEquals( true, is_array("value1", $v));
        $this->assertEquals( true, is_array("value2", $v));
        $this->assertEquals( true, is_array("value3", $v));
    }

    public function test値の一覧を取り出す2() {
        $a = new Target();
        $this->assertEquals( 0, $a->count());
        $v = $a->getValues();
        $this->assertNotNull( $v );
        $this->assertEquals( 0, count($v));
    }
}

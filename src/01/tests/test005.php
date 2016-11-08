<?php
require '../src/target005.php';
use PHPUnit\Framework\TestCase;

    /// <summary>
    /// 問5
    /// 配列にアクセスするいくつかのメソッドを実装せよ
    /// </summary>

class TargetTest extends TestCase
{
    public function test配列にアクセスする() {
        $a = new Target();
        $a->Items = [ 10, 20, 30 ];
        $this->assertEquals( 3,  $a->count());
        $this->assertEquals( 20, $a->getAt(1));
    }
    public function test配列外のアクセスを許容する() {
        $a = new Target();
        $a->Items = [ 10, 20, 30 ];
        $this->assertEquals( 3,  $a->count());
        $this->assertEquals( 0, $a->getAt(100));
    }
    public function test先頭の要素を取得する() {
        $a = new Target();
        $a->Items = [ 10, 20, 30 ];
        $this->assertEquals( 3,  $a->count());
        $this->assertEquals( 10, $a->first());
    }
    public function test末尾の要素を取得する() {
        $a = new Target();
        $a->Items = [ 10, 20, 30 ];
        $this->assertEquals( 3,  $a->count());
        $this->assertEquals( 30, $a->last());
    }
}

<?php
require '../src/target007.php';
use PHPUnit\Framework\TestCase;

    /// <summary>
    /// 問7
    /// 配列を探索するいくつかのメソッドを実装せよ
    /// </summary>

class TargetTest extends TestCase
{
    protected $lst = [];
    protected function setUp() {
        $this->lst = ["tokyo", "oosaka", "sapporo"];
    }

    public function test要素を指定してインデックスを返す() {
        $a = new Target();
        $a->items = $this->lst ;

        $this->assertEquals( 1,  $a->search("oosaka"));
        $this->assertEquals( -1,  $a->search("okinawa"));
    }

    public function test要素の一部分を探索() {
        $a = new Target();
        $a->items = $this->lst ;

        $result = $a->includes("tokyo");
        $this->assertNotNull( $result );
        $this->assertEquals( 1, count($result));
        $this->assertEquals( "tokyo", $result[0]);
    }

    public function test要素の一部分を探索2() {
        $a = new Target();
        $a->items = $this->lst ;

        $result = $a->includes("k");
        $this->assertNotNull( $result );
        $this->assertEquals( 2, count($result));
        $this->assertEquals( "tokyo", $result[0]);
        $this->assertEquals( "oosaka", $result[1]);
    }

    public function test要素が見つからない場合() {
        $a = new Target();
        $a->items = $this->lst ;

        $result = $a->includes("unknown");
        $this->assertNotNull( $result );
        $this->assertEquals( 0, count($result));
    }
}

<?php
require '../src/target006.php';
use PHPUnit\Framework\TestCase;

    /// <summary>
    /// 問6
    /// 配列を操作するいくつかのメソッドを実装せよ
    /// </summary>

class TargetTest extends TestCase
{
    public function test追加しながら配列を作る() {
        $a = new Target();
        $a->append( 10 );
        $a->append( 20 );
        $a->append( 30 );
        $this->assertEquals( 3,  $a->count());
        $this->assertEquals( 10, $a->at(0));
        $this->assertEquals( 20, $a->at(1));
        $this->assertEquals( 30, $a->at(2));
    }
    public function test先頭に追加する() {
        $a = new Target();
        $a->insert( 10 );
        $a->insert( 20 );
        $a->insert( 30 );
        $this->assertEquals( 3,  $a->count());
        $this->assertEquals( 30, $a->at(0));
        $this->assertEquals( 20, $a->at(1));
        $this->assertEquals( 10, $a->at(2));
    }
    public function test合計値を計算する() {
        $a = new Target();
        $a->append( 10 );
        $a->append( 20 );
        $a->append( 30 );
        $this->assertEquals( 3,  $a->count());
        $this->assertEquals( 60, $a->sum());
    }
    public function test指定した要素を削除する() {
        $a = new Target();
        $a->append( 10 );
        $a->append( 20 );
        $a->append( 30 );
        $this->assertEquals( 3,  $a->count());
        a.removeAt(1);
        $this->assertEquals( 2,  $a->count());
        $this->assertEquals( 10, $a->at(0));
        $this->assertEquals( 30, $a->at(1));
    }
    public function test要素の値を指定して削除する() {
        $a = new Target();
        $a->append( 10 );
        $a->append( 20 );
        $a->append( 30 );
        $this->assertEquals( 3,  $a->count());
        a.remove(10);
        $this->assertEquals( 2,  $a->count());
        $this->assertEquals( 20, $a->at(0));
        $this->assertEquals( 30, $a->at(1));
    }
    public function test要素をクリアする() {
        $a = new Target();
        $a->append( 10 );
        $a->append( 20 );
        $a->append( 30 );
        $this->assertEquals( 3,  $a->count());
        a.clear();
        $this->assertEquals( 0,  $a->count());
        $a->append( 10 );
        $a->append( 20 );
        $this->assertEquals( 2,  $a->count());
        $this->assertEquals( 10, $a->at(0));
        $this->assertEquals( 20, $a->at(1));
    }
}

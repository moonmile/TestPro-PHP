<?php
require '../src/target003.php';
use PHPUnit\Framework\TestCase;

    /// <summary>
    /// 問3
    /// 以下のテストが通るように Target クラスを比較演算子を使って直せ
    /// </summary>

class TargetTest extends TestCase
{
    public function test最大値を取得する() {
        $a = new Target();
        $this->assertEquals(3, $a->max(2, 3));
        $this->assertEquals(3, $a->max(0, 3));
        $this->assertEquals(2, $a->max(2, 0));
    }
    public function test最小値を取得する() {
        $a = new Target();
        $this->assertEquals(2, $a->min(2, 3));
        $this->assertEquals(0, $a->min(0, 3));
        $this->assertEquals(0, $a->min(2, 0));
    }
}

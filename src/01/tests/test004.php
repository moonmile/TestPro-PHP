<?php
require '../src/target004.php';
use PHPUnit\Framework\TestCase;

    /// <summary>
    /// 問4
    /// 以下のテストが通るように、文字列の比較と文字列を含んでいるかどうかのメソッドを直せ
    /// </summary>

class TargetTest extends TestCase
{
    public function test文字列を大文字小文字を無視して比較する() {
        $a = new Target();
        $this->assertEquals( true, $a->isEqual("unit", "unit"));
        $this->assertEquals( true, $a->isEqual("unit", "UNIT"));
        $this->assertEquals( false, $a->isEqual("Javascript", "Java"));
        $this->assertEquals( false, $a->isEqual("Java", "Java"));
    }
    public function test文字列が含まれているか調べる() {
        $a = new Target();
        $this->assertEquals( true,  $a->isContain("unit", "unit"));
        $this->assertEquals( false, $a->isContain("unit", "UNIT"));
        $this->assertEquals( false, $a->isContain("Javascript", "Java"));
        $this->assertEquals( false, $a->isContain("Java", ""));
        $this->assertEquals( true,  $a->isContain("Java", "Java"));
    }
}

<?php
require '../src/target002.php';
use PHPUnit\Framework\TestCase;

    /// <summary>
    /// 問2
    /// 以下の文字列操作が通るように、Target クラスを直せ
    /// </summary>

class TargetTest extends TestCase
{
    public function test文字列をつなげる() {
        $a = new Target();
        $this->assertEquals("unittest", $a->add("unit","test"));
        $this->assertEquals("unit", $a->add("unit",""));
        $this->assertEquals("test", $a->add("","test"));
    }
    public function test先頭から指定文字数だけ取得する() {
        $a = new Target();
        $this->assertEquals("unit",     $a->left("unittest", 4));
        $this->assertEquals("",         $a->left("unittest", 0));
        $this->assertEquals("unittest", $a->left("unittest", 100));
    }
    public function test末尾から指定文字数だけ取得する() {
        $a = new Target();
        $this->assertEquals("test",     $a->right("unittest", 4));
        $this->assertEquals("",         $a->right("unittest", 0));
        $this->assertEquals("unittest", $a->right("unittest", 100));
    }
}

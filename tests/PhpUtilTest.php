<?php


namespace KodeDict\PHPUtil\Tests;

use KodeDict\PHPUtil\PhpUtil;
use PHPUnit\Framework\TestCase;

class PhpUtilTest extends TestCase
{
    /** @test */
    public function function_should_return_true()
    {
        $bool = PhpUtil::returnTrue();
        $this->assertTrue($bool);
    }
}

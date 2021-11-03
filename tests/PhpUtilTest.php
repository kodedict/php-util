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

    public function test_random_number()
    {
        $rand = PhpUtil::randomNumber('1','5',5);

        $this->assertEquals(5, strlen($rand));
    }
}

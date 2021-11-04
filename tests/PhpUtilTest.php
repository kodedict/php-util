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

    public function test_random_string()
    {
        $rand = PhpUtil::randomString(5);

        $this->assertEquals(5, strlen($rand));
    }

    public function test_unique_reference()
    {
        $uniqueReference = PhpUtil::generateUniqueReference('10','kd_');

        $this->assertEquals(13, strlen($uniqueReference));

        $this->assertStringContainsString('kd_',$uniqueReference);
    }

    public function test_number_to_ordinal()
    {
        $ordinalNumber = PhpUtil::numberToOrdinal(1);

        $this->assertEquals('1st', $ordinalNumber);
    }
}

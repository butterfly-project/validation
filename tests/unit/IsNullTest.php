<?php

namespace Butterfly\Component\Validation\Tests;

use Butterfly\Component\Validation\IsNull;

/**
 * @author Marat Fakhertdinov <marat.fakhertdinov@gmail.com>
 */
class IsNullTest extends \PHPUnit_Framework_TestCase
{
    public function getDataForTestCheck()
    {
        return array(
            array('asdf', false),
            array(123, false),
            array(null, true),
        );
    }

    /**
     * @dataProvider getDataForTestCheck
     *
     * @param mixed $value
     * @param bool $expectedResult
     */
    public function testCheck($value, $expectedResult)
    {
        $validator = new IsNull();

        $this->assertEquals($expectedResult, $validator->check($value));
    }
}

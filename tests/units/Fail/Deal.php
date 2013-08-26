<?php

namespace tests\units\Fail;

require __DIR__.'/../../../vendor/autoload.php';

use mageekguy\atoum;

class Deal extends atoum\test
{
    public function setUp()
    {
        // mock class here no more work (atoum bc break ?)
        $this->mockClass('Fail\Deal', '\Mock');
    }

    public function testFoo()
    {
        // if we decomment next line, it's ok.
        //$this->mockClass('Fail\Deal', '\Mock');
        $a = new \Mock\Deal();
        print "<pre>";
        var_dump($a);
        print "</pre>";
        exit('ici');
    }
}

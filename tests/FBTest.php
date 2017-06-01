<?php

namespace Ucha19871\FB\Tests;

use Ucha19871\FB\FB;

class FBTest extends \Orchestra\Testbench\TestCase
{

    protected function getPackageProviders($app)
    {
        return ['Ucha19871\FB\FBServiceProvider'];
    }


    public function setUp()
    {
        parent::setUp();
        $this->fb = new FB();
    }


    protected function getEnvironmentSetUp($app)
    {
        $app['config']->set('services.firebase.database_url', 'https://PROJECT.firebaseio.com');
        $app['config']->set('services.firebase.secret', 'KB2xZjJgAvmVyPROJECT6f2emuuaxJTr9');
    }

    public function testSetFunction()
    {
        $res = $this->fb->set('testing', ['key' => 'Test Data']);
        $this->assertStringMatchesFormat($res, '{"key":"Test Data"}');
    }

    public function testGetFunction()
    {
        $res = $this->fb->get('testing');
        $this->assertStringMatchesFormat($res, '{"key":"Test Data"}');
    }

    public function testUpdate()
    {
        $res = $this->fb->update('testing', ['key' => 'Test Data1']);
        $this->assertStringMatchesFormat($res, '{"key":"Test Data1"}');
        $res1 = $this->fb->update('testing', ['key' => 'Test Data']);
        $this->assertStringMatchesFormat($res1, '{"key":"Test Data"}');
    }

    public function testDeleteFunction()
    {
        $res = $this->fb->delete('testing');
        $this->assertStringMatchesFormat($res, 'null');
    }

}


<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Support\Facades\Redis;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use Facebook\WebDriver\WebDriverBy;

class LoginTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        Redis::set('test', 123456);
        error_log(Redis::get('test'));
        $this->browse(function (Browser $browser) {
//            $giftCode = '1234-1234-1234-1234';
//            $browser->visit('http://localhost/recv');
//            $giftCodeInput = $browser->driver->findElements(WebDriverBy::className('gift_code'));
//            foreach ($giftCodeInput as $elem) {
//                $elem->sendKeys('1234');
//            }
//            $btnAccept = $browser->driver->findElements(WebDriverBy::id('form-giftcode'));
//            $btnAccept->click();
//            $browser->pause(5000);
                $browser->visit('http://google.com')
                    ->assertTitleContains('Google');

        });
    }


    /**
     * A Dusk test example1.
     *
     * @return void
     */
    public function testExample1()
    {
        $this->browse(function (Browser $browser) {
//            $giftCode = '1234-1234-1234-1234';
//            $browser->visit('http://localhost/recv');
//            $giftCodeInput = $browser->driver->findElements(WebDriverBy::className('gift_code'));
//            foreach ($giftCodeInput as $elem) {
//                $elem->sendKeys('1234');
//            }
//            $btnAccept = $browser->driver->findElements(WebDriverBy::id('form-giftcode'));
//            $btnAccept->click();
//            $browser->pause(5000);
                $browser->visit('http://localhost:8000/')
                    ->assertTitleContains('Laravel');

        });
    }
}

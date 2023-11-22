<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class TimeoutTest extends DuskTestCase
{
  /**
   * Test if the page has an accurate title
   */
  public function testDuskTimeoutPageHasAccurateTitle(): void
  {
    $this->browse(function (Browser $browser) {
      $browser->visit('/dusk_timeout_test')
              ->assertTitle('Testing Dusk Timeouts');
    });
  }
}

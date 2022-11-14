<?php


namespace App\Tests\Acceptance;

use App\Tests\Support\AcceptanceTester;
use App\Tests\Support\Step\HelpStep;
use App\Tests\Support\Step\MainStep;

class FirstCest
{
    // tests
    public function tryToTest(
        AcceptanceTester $I,
        MainStep $mainStep,
        HelpStep $helpStep
    )
    {
        $I->amGoingTo('Test pitchbox');
        $I->amOnPage('/');
        $mainStep->hoverResourceTab();
        $mainStep->proceedToHelpPage();
        $helpStep->searchUsingTheQuery('MX');
        $I->see('What is MX Right?');
    }
}

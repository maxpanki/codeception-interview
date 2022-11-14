<?php

namespace App\Tests\Support\Step;

use App\Tests\Support\AcceptanceTester;
use App\Tests\Support\Page\HelpPage;

class HelpStep extends AcceptanceTester
{
    public function searchUsingTheQuery(string $query)
    {
        $this->waitForElementVisible(HelpPage::SEARCH_INPUT);
        $this->moveMouseOver(HelpPage::SEARCH_INPUT);
        $this->clickWithLeftButton(null);
        $this->type($query);
        $this->click(HelpPage::SEARCH_BUTTON);
        $this->waitForElementVisible('.intro-title');
    }

}
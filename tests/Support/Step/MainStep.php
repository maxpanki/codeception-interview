<?php

namespace App\Tests\Support\Step;

use App\Tests\Support\AcceptanceTester;
use App\Tests\Support\Page\MainPage;

class MainStep extends AcceptanceTester
{
    public function hoverResourceTab()
    {
        $this->seeElement(MainPage::RESOURCE_MENU_TAB);
        $this->moveMouseOver(MainPage::RESOURCE_MENU_TAB);
    }

    public function proceedToHelpPage()
    {
        $this->see('Knowledge base', MainPage::KNOWLEDGE_BASE_BUTTON_INSIDE_MENU_TAB);
        $this->click(MainPage::KNOWLEDGE_BASE_LINK);
        $this->wait(1);
        $this->switchToNextTab();
        $this->seeInCurrentUrl('/hc/en-us');
    }
}
<?php

namespace App\Tests\Support\Helper;

use Codeception\Module;
use Codeception\Module\WebDriver;

class CustomHelper extends Module
{
    public function enterWithAKeyBoard(string $text)
    {
        $this->getModule('WebDriver')->webDriver->getKeyboard()->sendKeys($text);
    }
}
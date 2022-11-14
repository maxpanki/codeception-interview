<?php

namespace App\Tests\Support\Page;

class MainPage
{
    const RESOURCE_MENU_TAB = '#menu-item-3078';
    const KNOWLEDGE_BASE_LINK = '#menu-item-3081>a';
    const KNOWLEDGE_BASE_BUTTON = '.item-title';
    const KNOWLEDGE_BASE_BUTTON_INSIDE_MENU_TAB = self::RESOURCE_MENU_TAB . ' ' . self::KNOWLEDGE_BASE_BUTTON;
}
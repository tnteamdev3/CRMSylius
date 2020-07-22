<?php

namespace App\Menu;

use Sylius\Bundle\UiBundle\Menu\Event\MenuBuilderEvent;

final class AdminMenuListener
{
    public function addAdminMenuItems(MenuBuilderEvent $event): void
    {
        $menu = $event->getMenu();

        $Companies = $menu
            ->addChild('new')
            ->setLabel('Companies')
        ;

        $Companies
            ->addChild('new-subitem')
            ->setLabel('Companies index')
            ->setLabelAttribute('icon', 'cubes')

        ;
    }
}
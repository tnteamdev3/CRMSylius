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
            ->setLabel('Companies index', ['route' => 'app_admin_companies'])
            ->setLabelAttribute('icon', 'cubes')
        ;

    }
     public function addItems(MenuBuilderEvent $event): void
    {
        $menu = $event->getMenu();

        $menu
            ->addChild('Contact')
            ->setLabel('Contact')
            ->addChild('new-subitem')
            ->setLabel('Contact index')
            ->setLabelAttribute('icon', 'phone')
        ;
    }
}
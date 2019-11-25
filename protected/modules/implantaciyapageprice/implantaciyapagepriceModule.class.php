<?php

declare(strict_types=1);

namespace Fastest\Core\Modules;

final class implantaciyapagepriceModule extends \Fastest\Core\Modules\Module
{
    public function router()
    {
        return $this->blockMethod();
    }

    public function blockMethod()
    {
        $price = Q("SELECT * FROM `#_mdd_ortopedic` WHERE `visible` = 1")->all();
        return [
            'price' => $price,
            'template' => 'block'
        ];
    }
}
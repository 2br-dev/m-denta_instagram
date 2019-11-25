<?php

declare(strict_types=1);

namespace Fastest\Core\Modules;

final class lecheniepagepriceModule extends \Fastest\Core\Modules\Module
{
    public function router()
    {
//        if (isset($this->arguments[1]))
//        {
//            return $this->errorPage;
//        }
//
//        if (isset($this->arguments[0]))
//        {
//            return $this->itemMethod(intval($this->arguments[0]));
//        }

        return $this->blockMethod();
    }


    public function blockMethod()
    {
        $price = Q("SELECT * FROM `#_mdd_terapevtic` WHERE `visible` = 1")->all();
        return [
            'price' => $price,
            'template' => 'block'
        ];
    }
}
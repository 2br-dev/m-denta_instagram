<?php

declare(strict_types=1);

namespace Fastest\Core\Modules;

final class pricelistModule extends \Fastest\Core\Modules\Module
{
    public function router()
    {        
        return $this->blockMethod();
    }

    
    public function blockMethod()
    {
        $vis = 1;
        $consult    = Q("SELECT * FROM `#_mdd_consult` WHERE `visible` = ?i ORDER BY `ord` ASC", array($vis))->all();
        $terapevtic = Q("SELECT * FROM `#_mdd_terapevtic` WHERE `visible` = ?i ORDER BY `ord` ASC", array($vis))->all();
        $ortodontic = Q("SELECT * FROM `#_mdd_ortodontic` WHERE `visible` = ?i ORDER BY `ord` ASC", array($vis))->all();
        $hirurgic   = Q("SELECT * FROM `#_mdd_hirurgic` WHERE `visible` = ?i ORDER BY `ord` ASC", array($vis))->all();
        $ortopedic  = Q("SELECT * FROM `#_mdd_ortopedic` WHERE `visible` = ?i ORDER BY `ord` ASC", array($vis))->all();

        // exit(__($consult,$terapevtic,$ortodontic,$hirurgic,$ortopedic));

        return [
            'template' => 'block',
            'consult' => $consult,
            'ortopedic' => $ortopedic,
            'hirurgic' => $hirurgic,
            'ortodontic' => $ortodontic,
            'terapevtic' => $terapevtic
        ];
    }
}

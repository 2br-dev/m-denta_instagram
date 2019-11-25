<?php

declare(strict_types=1);

namespace Fastest\Core\Modules;

final class smileModule extends \Fastest\Core\Modules\Module
{
    public function router()
    {
        return $this->blockMethod();
    }


    public function blockMethod()
    {
        $smile = Q("SELECT * FROM `#_mdd_smile` WHERE `visible` = 1")->all();
        if($smile) {
            $sif = new \Files();
            foreach ($smile as $key => $item){
                $smile[$key]['image_file'] = $sif->getFilesByGroup($item['image'], array('sm', 'original'), array('file'), true);
            }
        }

        return [
            'template' => 'block',
            'smile' => $smile
        ];
    }
}
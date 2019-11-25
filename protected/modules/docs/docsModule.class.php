<?php

declare(strict_types=1);

namespace Fastest\Core\Modules;

final class docsModule extends \Fastest\Core\Modules\Module
{
    public function router()
    {        
        return $this->blockMethod();
    }

    
    public function blockMethod()
    {
        $vis = 1;
        $docs = Q("SELECT * FROM `#_mdd_documents` WHERE `visible` = ?i", array($vis))->all();
        $gallery = Q("SELECT * FROM `#_mdd_gal` WHERE `visible` = ?i", array($vis))->all();
        
        if (!empty($docs)){
            $dif = new \Files();
            foreach ($docs as $key => $value) {
                $docs[$key]['image_file'] = $dif->getFilesByGroup($value['src'], array('original', 'sm', 'square'), array('id', 'title', 'file'), true); 
            }
        }

         if (!empty($gallery)){
            $gif = new \Files();
            foreach ($gallery as $key => $value) {
                $gallery[$key]['image_file'] = $gif->getFilesByGroup($value['src'], array('original', 'sm', 'square'), array('id', 'title', 'file'), true); 
            }
        }

        // exit(__($gallery));

        return [
            'template' => 'block',
            'docs' => $docs,
            'gallery' => $gallery
        ];
    }
}

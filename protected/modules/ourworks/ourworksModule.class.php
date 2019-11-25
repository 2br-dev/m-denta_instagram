<?php

declare(strict_types=1);

namespace Fastest\Core\Modules;

final class ourworksModule extends \Fastest\Core\Modules\Module
{
    public function router()
    {
        if (isset($this->arguments[1]))
        {
            return $this->errorPage;
        }

        if (isset($this->arguments[0]))
        {
            return $this->itemMethod(intval($this->arguments[0]));
        }

        return $this->listMethod();
    }

    public function listMethod()
    {
        $cache = 'module.ourworks.list';

        if (!($ourworks = $this->compiled($cache)))
        {
            $ourworks = Q("SELECT * FROM `#_mdd_workresults` WHERE `visible`= 1 ORDER BY `ord` ASC")->all();

            if (!empty($ourworks)){
                $dif = new \Files();
                foreach ($ourworks as $key => $value) {
                    $ourworks[$key]['image_file'] = $dif->getFilesByGroup($value['photo'], array('original', 'sm'), array('id', 'title', 'file'), true);
                }
            }      
        }

        //exit(__($ourworks));
     
        return [
            'ourworks'         =>  $ourworks,
            'template'          =>  'list'
        ];
    }

    public function itemMethod($system = '')
    {
        $cache = 'module.ourworks.item.'.$system;

        $url = explode("/", $_SERVER['REQUEST_URI']);  

        if (!($ourworks = $this->compiled($cache)))
        {
            $ourworks = Q("SELECT * FROM `#_mdd_ourworks` WHERE `system`='$url[2]'")->row();

        }

        $id = $ourworks['id'];
        
        $results = Q("SELECT * FROM `#_mdd_workresults` WHERE `visible` = 1 AND `category`='$id'")->all();  

        if (!empty($results)){
            $dif = new \Files();
            foreach ($results as $key => $value) {
                $results[$key]['image_photo'] = $dif->getFilesByGroup($value['photo'], array('original', 'sm'), array('id', 'title', 'file'), true);
            }
        }
              
        // exit(__($ourworks));
        // exit(__($results));

        return [
            'results'   =>  $results,
            'ourworks'  =>  $ourworks,
            'template'  =>  'item'
        ];
    }
}
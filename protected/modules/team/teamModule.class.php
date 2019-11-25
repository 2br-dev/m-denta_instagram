<?php

declare(strict_types=1);

namespace Fastest\Core\Modules;

final class teamModule extends \Fastest\Core\Modules\Module
{
    public function router()
    {

        if (isset($this->arguments[1]))
        {
            return $this->errorPage;
        }

        if (isset($this->arguments[0]))
        {
            return $this->itemMethod($this->arguments[0]);
        }

        return $this->listMethod();
    }

    public function listMethod()
    {
        # Пагинация
        #
        //$pager = $this->pager($this->countItem(), $this->limit);

        $cache = 'module.team.list';

        # Получение списка
        #
        if (!($team = $this->compiled($cache)))
        {
            $team = Q("SELECT * FROM `#_mdd_team` WHERE `visible`=1 ORDER BY `ord` ASC")->all();

            if (!empty($team)){
                $dif = new \Files();
                foreach ($team as $key => $value) {
                    $team[$key]['image_file'] = $dif->getFilesByGroup($value['img'], array('original', 'sm'), array('id', 'title', 'file'), true); 
                }
            }
           // $this->cache->setCache($cache, $team);
            // exit(__($team));
        }

        # Мета теги
        #
        $meta = $this->metaData($team);

        return [
            'meta'              =>  $meta,
            //'pager'             =>  $pager,
            'team'         =>  $team,
            'template'          =>  'list'
        ];
    }

    public function itemMethod($system = '')
    {
        $cache = 'module.team.item.'.$system;

        if (!($team = $this->compiled($cache)))
        {
            $team = Q("SELECT * FROM `#_mdd_team` WHERE `visible`='1' AND `system` LIKE ?s LIMIT 1", [ $system ])->row();

            // $employee = Q("SELECT * FROM `#_mdd_team` WHERE `visible`=1")->all();
            if (!empty($team)){
                $dif = new \Files();
               
                    $team['image_file'] = $dif->getFilesByGroup($team['img'], array('original', 'sm'), array('id', 'title', 'file'), true); 
               
            }
            // exit(__($team));
            //$this->cache->setCache($cache, $team);
        }

        # Мета теги
        #
        $meta = $this->metaData($team);

        # Хлебные крошки
        #
       // $this->addBreadCrumbs($team, [ 'id', 'id', 'name', 'system' ]);

        return [
            'meta'              =>  $meta,
            //'page'              =>  [ 'name' => '' ],
            'team'     =>  $team,
            'breadcrumbs'       =>  $this->breadcrumbs,
            'template'          =>  'item'
            // 'employee'          => $employee
        ];
    }

    public function blockMethod()
    {
        return [
            'template' => 'block'
        ];
    }
}
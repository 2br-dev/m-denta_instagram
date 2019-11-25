<?php

declare(strict_types=1);

namespace Fastest\Core\Modules;

final class newsModule extends \Fastest\Core\Modules\Module
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

        $cache = 'module.news.list';

        # Получение списка
        #
        if (!($news = $this->compiled($cache)))
        {
            $news = Q("SELECT * FROM `#_mdd_news` WHERE `visible`=1 ORDER BY `ord` DESC")->all();

            if (!empty($news)){
                $dif = new \Files();
                foreach ($news as $key => $value) {
                    $news[$key]['image_file'] = $dif->getFilesByGroup($value['img'], array('original', 'sm'), array('id', 'title', 'file'), true); 
                }
            }
           // $this->cache->setCache($cache, $team);
            // exit(__($news));
        }

        # Мета теги
        #
        $meta = $this->metaData($news);

        return [
            'meta'              =>  $meta,
            //'pager'             =>  $pager,
            'news'         =>  $news,
            'template'          =>  'list'
        ];
    }

    public function itemMethod($system = '')
    {
        $cache = 'module.news.item.'.$system;

        if (!($news = $this->compiled($cache)))
        {
            $news = Q("SELECT * FROM `#_mdd_news` WHERE `visible`='1' AND `system` LIKE ?s LIMIT 1", [ $system ])->row();

            // $employee = Q("SELECT * FROM `#_mdd_team` WHERE `visible`=1")->all();
            if (!empty($news)){
                $dif = new \Files();
               
                    $news['image_file'] = $dif->getFilesByGroup($news['img'], array('original', 'sm'), array('id', 'title', 'file'), true); 
               
            }
            //exit(__($news));
            //$this->cache->setCache($cache, $team);
        }

        # Мета теги
        #
        $meta = $this->metaData($news);
        // exit(__($meta));

        # Хлебные крошки
        #
       // $this->addBreadCrumbs($team, [ 'id', 'id', 'name', 'system' ]);

        return [
            'meta'              =>  $meta,
            //'page'              =>  [ 'name' => '' ],
            'news'     =>  $news,
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
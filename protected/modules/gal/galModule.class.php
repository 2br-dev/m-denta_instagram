<?php

declare(strict_types=1);

namespace Fastest\Core\Modules;

final class galModule extends \Fastest\Core\Modules\Module
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
        # Пагинация
        #
        $pager = $this->pager($this->countItem(), $this->limit);

        $cache = 'module.gal.list';

        # Получение списка
        #
        if (!($gal = $this->compiled($cache)))
        {
            $gal = Q("SELECT * FROM `#_mdd_gal` WHERE `visible`=1 ORDER BY STR_TO_DATE(`date`, '%d.%m.%Y') DESC, `ord` DESC")->all();

            if (!empty($gal))
            {
                foreach ($gal as &$gal_item)
                {
                    $gal_item['date'] = Dates($gal_item['date'], $this->locale);
                }
            }

            $this->cache->setCache($cache, $gal);
        }

        # Мета теги
        #
        $meta = $this->metaData($gal);

        return [
            'meta'              =>  $meta,
            'pager'             =>  $pager,
            'gal'         =>  $gal,
            'template'          =>  'list'
        ];
    }

    public function itemMethod($system = '')
    {
        $cache = 'module.gal.item.'.$system;

        if (!($gal = $this->compiled($cache)))
        {
            $gal = Q("SELECT * FROM `#_mdd_gal` WHERE `visible`='1' AND `system` LIKE ?s LIMIT 1", [ $system ])->row();

            $gal['link'] = $this->linkCreate($gal['system']);
            $gal['date'] = Dates($gal['date'], $this->locale);

            $file = new Files;

            if (isset($gal['photo']))
            {
                $gal['photo'] = $file->getFilesByGroup($gal['photo'], ['sm', 'original'], ['id', 'title', 'file', 'ord', 'created'], true);
            }

            $this->cache->setCache($cache, $gal);
        }

        # Мета теги
        #
        $meta = $this->metaData($gal);

        # Хлебные крошки
        #
        $this->addBreadCrumbs($gal, [ 'id', 'id', 'name', 'system' ]);

        return [
            'meta'              =>  $meta,
            'page'              =>  [ 'name' => '' ],
            'gal'     =>  $gal,
            'breadcrumbs'       =>  $this->breadcrumbs,
            'template'          =>  'item'
        ];
    }

    public function blockMethod()
    {
        return [
            'template' => 'block'
        ];
    }
}
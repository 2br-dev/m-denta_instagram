<?php

declare(strict_types=1);

namespace Fastest\Core\Modules;

final class senddataModule extends \Fastest\Core\Modules\Module
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

        $cache = 'module.senddata.list';

        # Получение списка
        #
        if (!($senddata = $this->compiled($cache)))
        {
            $senddata = Q("SELECT * FROM `#_mdd_senddata` WHERE `visible`=1 ORDER BY STR_TO_DATE(`date`, '%d.%m.%Y') DESC, `ord` DESC")->all();

            if (!empty($senddata))
            {
                foreach ($senddata as &$senddata_item)
                {
                    $senddata_item['date'] = Dates($senddata_item['date'], $this->locale);
                }
            }

            $this->cache->setCache($cache, $senddata);
        }

        # Мета теги
        #
        $meta = $this->metaData($senddata);

        return [
            'meta'              =>  $meta,
            'pager'             =>  $pager,
            'senddata'         =>  $senddata,
            'template'          =>  'list'
        ];
    }

    public function itemMethod($system = '')
    {
        $cache = 'module.senddata.item.'.$system;

        if (!($senddata = $this->compiled($cache)))
        {
            $senddata = Q("SELECT * FROM `#_mdd_senddata` WHERE `visible`='1' AND `system` LIKE ?s LIMIT 1", [ $system ])->row();

            $senddata['link'] = $this->linkCreate($senddata['system']);
            $senddata['date'] = Dates($senddata['date'], $this->locale);

            $file = new Files;

            if (isset($senddata['photo']))
            {
                $senddata['photo'] = $file->getFilesByGroup($senddata['photo'], ['sm', 'original'], ['id', 'title', 'file', 'ord', 'created'], true);
            }

            $this->cache->setCache($cache, $senddata);
        }

        # Мета теги
        #
        $meta = $this->metaData($senddata);

        # Хлебные крошки
        #
        $this->addBreadCrumbs($senddata, [ 'id', 'id', 'name', 'system' ]);

        return [
            'meta'              =>  $meta,
            'page'              =>  [ 'name' => '' ],
            'senddata'     =>  $senddata,
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
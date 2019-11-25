<?php

declare(strict_types=1);

namespace Fastest\Core\Modules;

final class testModule extends \Fastest\Core\Modules\Module
{
    public function router()
    {
        return $this->blockMethod();
    }


    public function blockMethod()
    {
        $ppApp = new \COM("PowerPoint.Application");
        $ppApp->Visible = True;

        $ppName = "G:\OpenServer\OSPanel\domains\mdenta.local\img_new\prez\prez.pptx";
        $export_path = 'F:\export_slide';

        //*** Open Document ***//
        $ppApp->Presentations->Open(realpath($ppName));

        //*** Save Document ***//
        $slides = $ppApp->ActivePresentation->Slides;

        foreach ($slides as $item => $value){
            $export_file = $export_path ."\\". $value->Name . '.jpg';
            $value->Export($export_file, "jpg");
        }


        $ppApp->Quit;
        $ppApp = null;

        return [
            'template' => 'block'
        ];
    }
}
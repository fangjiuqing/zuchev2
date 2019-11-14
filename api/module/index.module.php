<?php
namespace com\default_api;
use \re\rgx as RGX;

class index_module extends base_module {

    /**
     * [__construct description]
     */
    public function __construct () {
        parent::__construct();
    }

    /**
     * 首页切换banner
     * @return [type] [description]
     */
    public function banner_action () {
        $list = [
            'status' => 0,
            'picList' => [
                [
                    'picPointUrl' => 'https://mktm.zuche.com/html5/activityplanning/newtopic/onaugustxf.html?szhdbm=20190814_onaugustxf_wap&campaign_code=fanpaigame&utm_medium=wap&utm_source=guanfang',
                    'picPath'  => 'https://fimg.zuchecdn.com/upload/wap/HomePage/HeadFigure/2018/750-410-YMD-20190815-WAP.jpg',
                    'id' => 638,
                    'sortId' => 132,
                    'picName' => '/750-410-YMD-20190815-WAP.jpg'
                ],
                [
                    'picPointUrl' => 'https://mktm.zuche.com/html5/activityplanning/newtopic/onaugustxf.html?szhdbm=20190814_onaugustxf_wap&campaign_code=fanpaigame&utm_medium=wap&utm_source=guanfang',
                    'picPath'  => 'https://fimg.zuchecdn.com/upload/wap/HomePage/HeadFigure/2018/750-410-YMD-20190815-WAP.jpg',
                    'id' => 638,
                    'sortId' => 132,
                    'picName' => '/750-410-YMD-20190815-WAP.jpg'
                ],
                [
                    'picPointUrl' => 'https://mktm.zuche.com/html5/activityplanning/newtopic/onaugustxf.html?szhdbm=20190814_onaugustxf_wap&campaign_code=fanpaigame&utm_medium=wap&utm_source=guanfang',
                    'picPath'  => 'https://fimg.zuchecdn.com/upload/wap/HomePage/HeadFigure/2018/750-410-YMD-20190815-WAP.jpg',
                    'id' => 638,
                    'sortId' => 132,
                    'picName' => '/750-410-YMD-20190815-WAP.jpg'
                ]
            ]
        ];

        echo json_encode($list);
    }


} // Class End
<?php
namespace com\default_wap;
use \re\rgx as RGX;

class index_module extends base_module {
    /**
     * [index_action description]
     * @return [type] [description]
     */
    public function index_action () {

        $agent = $this->get('agent') ? : 0;
        $this->assign('agent' , $agent);

        $this->assign('title' , '车型列表');
        $car_type = RGX\common_helper::$car_type;
        $this->assign('car_type' , $car_type);

        # all cars
        $tab = RGX\OBJ('car_table');
        $cars = $tab->get_all();

        $results = [];
        foreach ( $car_type as $tp => $tv ) {
            $results[$tp] = [];
            foreach ( $cars as $car ) {
                if ( $tp == $car['car_type'] ) {
                    $results[$tp][] = $car;
                }
            }
        }
        $this->assign('cars' , $results);
        $this->display('index.tpl');
    }

} // Class End
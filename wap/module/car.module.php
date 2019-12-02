<?php
namespace com\default_wap;
use \re\rgx as RGX;

class index_module extends base_module {
    /**
     * [index_action description]
     * @return [type] [description]
     */
    public function index_action () {
        $this->assign('title' , '选择车型');
        $car_type = RGX\common_helper::$car_type;
        $this->assign('car_type' , $car_type);

        # all cars
        $tab = RGX\OBJ('car_table');
        $cars = $tab->get_all();

        $results = [];
        foreach ( $cars as $car ) {
            $results[$car['car_type']][] = $car;
        }
        $this->assign('cars' , json_encode($results));
        $this->display('car/index.tpl');
    }

} // Class End
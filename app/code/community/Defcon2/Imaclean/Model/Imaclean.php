<?php

/**
 * Defcon2_Imaclean
 *
 * @category   Defcon2
 * @package    Defcon2_Imaclean
 * @copyright  Copyright (c) 2016 Manuel Canepa (http://cv.manuelcanepa.com.ar/)
 */
class Defcon2_Imaclean_Model_Imaclean extends Mage_Core_Model_Abstract {

    public function _construct() {
        parent::_construct();
        $this->_init('defcon2imaclean/imaclean');
    }

}

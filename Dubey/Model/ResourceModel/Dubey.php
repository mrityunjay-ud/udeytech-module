<?php
/**
 * @category   Udeytech
 * @package    Udeytech_Dubey
 * @author     mridubey57@gmail.com
 * @copyright  This file was generated by using Module Creator(http://code.vky.co.in/magento-2-module-creator/) provided by VKY <viky.031290@gmail.com>
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace Udeytech\Dubey\Model\ResourceModel;

class Dubey extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Define main table
     */
    protected function _construct()
    {
        $this->_init('udeytech_dubey', 'dubey_id');   //here "udeytech_dubey" is table name and "dubey_id" is the primary key of custom table
    }
}
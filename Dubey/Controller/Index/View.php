<?php
/**
 * @category   Udeytech
 * @package    Udeytech_Dubey
 * @author     mridubey57@gmail.com
 * @copyright  This file was generated by using Module Creator(http://code.vky.co.in/magento-2-module-creator/) provided by VKY <viky.031290@gmail.com>
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace Udeytech\Dubey\Controller\Index;

use Magento\Framework\App\Action\Context;
use Magento\Framework\Exception\NotFoundException;
use Udeytech\Dubey\Block\DubeyView;

class View extends \Magento\Framework\App\Action\Action
{
	protected $_dubeyview;

	public function __construct(
        Context $context,
        DubeyView $dubeyview
    ) {
        $this->_dubeyview = $dubeyview;
        parent::__construct($context);
    }

	public function execute()
    {
    	if(!$this->_dubeyview->getSingleData()){
    		throw new NotFoundException(__('Parameter is incorrect.'));
    	}
    	
        $this->_view->loadLayout();
        $this->_view->getLayout()->initMessages();
        $this->_view->renderLayout();
    }
}

<?php
/**
 * @category   Udeytech
 * @package    Udeytech_Dubey
 * @author     mridubey57@gmail.com
 * @copyright  This file was generated by using Module Creator(http://code.vky.co.in/magento-2-module-creator/) provided by VKY <viky.031290@gmail.com>
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

namespace Udeytech\Dubey\Block;

use Magento\Framework\View\Element\Template\Context;
use Udeytech\Dubey\Model\DubeyFactory;
/**
 * Dubey List block
 */
class DubeyListData extends \Magento\Framework\View\Element\Template
{
    /**
     * @var Dubey
     */
    protected $_dubey;
    public function __construct(
        Context $context,
        DubeyFactory $dubey
    ) {
        $this->_dubey = $dubey;
        parent::__construct($context);
    }

    public function _prepareLayout()
    {
        $this->pageConfig->getTitle()->set(__('Udeytech Dubey Module List Page'));
        
        if ($this->getDubeyCollection()) {
            $pager = $this->getLayout()->createBlock(
                'Magento\Theme\Block\Html\Pager',
                'udeytech.dubey.pager'
            )->setAvailableLimit(array(5=>5,10=>10,15=>15))->setShowPerPage(true)->setCollection(
                $this->getDubeyCollection()
            );
            $this->setChild('pager', $pager);
            $this->getDubeyCollection()->load();
        }
        return parent::_prepareLayout();
    }

    public function getDubeyCollection()
    {
        $page = ($this->getRequest()->getParam('p'))? $this->getRequest()->getParam('p') : 1;
        $pageSize = ($this->getRequest()->getParam('limit'))? $this->getRequest()->getParam('limit') : 5;

        $dubey = $this->_dubey->create();
        $collection = $dubey->getCollection();
        $collection->addFieldToFilter('status','1');
        //$dubey->setOrder('dubey_id','ASC');
        $collection->setPageSize($pageSize);
        $collection->setCurPage($page);

        return $collection;
    }

    public function getPagerHtml()
    {
        return $this->getChildHtml('pager');
    }
}
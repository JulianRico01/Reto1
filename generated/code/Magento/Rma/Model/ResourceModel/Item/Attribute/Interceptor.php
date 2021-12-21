<?php
namespace Magento\Rma\Model\ResourceModel\Item\Attribute;

/**
 * Interceptor class for @see \Magento\Rma\Model\ResourceModel\Item\Attribute
 */
class Interceptor extends \Magento\Rma\Model\ResourceModel\Item\Attribute implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\Model\ResourceModel\Db\Context $context, \Magento\Store\Model\StoreManagerInterface $storeManager, \Magento\Eav\Model\ResourceModel\Entity\Type $eavEntityType, $connectionName = null)
    {
        $this->___init();
        parent::__construct($context, $storeManager, $eavEntityType, $connectionName);
    }

    /**
     * {@inheritdoc}
     */
    public function getStoreLabelsByAttributeId($attributeId)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'getStoreLabelsByAttributeId');
        return $pluginInfo ? $this->___callPlugins('getStoreLabelsByAttributeId', func_get_args(), $pluginInfo) : parent::getStoreLabelsByAttributeId($attributeId);
    }
}

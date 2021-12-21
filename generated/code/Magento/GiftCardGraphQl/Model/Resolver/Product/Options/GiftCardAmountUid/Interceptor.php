<?php
namespace Magento\GiftCardGraphQl\Model\Resolver\Product\Options\GiftCardAmountUid;

/**
 * Interceptor class for @see \Magento\GiftCardGraphQl\Model\Resolver\Product\Options\GiftCardAmountUid
 */
class Interceptor extends \Magento\GiftCardGraphQl\Model\Resolver\Product\Options\GiftCardAmountUid implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\GraphQl\Query\Uid $uidEncoder)
    {
        $this->___init();
        parent::__construct($uidEncoder);
    }

    /**
     * {@inheritdoc}
     */
    public function resolve(\Magento\Framework\GraphQl\Config\Element\Field $field, $context, \Magento\Framework\GraphQl\Schema\Type\ResolveInfo $info, ?array $value = null, ?array $args = null)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'resolve');
        return $pluginInfo ? $this->___callPlugins('resolve', func_get_args(), $pluginInfo) : parent::resolve($field, $context, $info, $value, $args);
    }
}

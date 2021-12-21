<?php
namespace Omnipro\UserOpinion\Controller\Index\Index;

/**
 * Interceptor class for @see \Omnipro\UserOpinion\Controller\Index\Index
 */
class Interceptor extends \Omnipro\UserOpinion\Controller\Index\Index implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\App\Action\Context $context, \Magento\Framework\View\Result\PageFactory $pageFactory, \Magento\Framework\Controller\Result\JsonFactory $jsonFactory, \Omnipro\UserOpinion\Api\Data\UserOpinionInterfaceFactory $userOpinionFactory, \Omnipro\UserOpinion\Api\UserOpinionRepositoryInterface $userOpinionRepository)
    {
        $this->___init();
        parent::__construct($context, $pageFactory, $jsonFactory, $userOpinionFactory, $userOpinionRepository);
    }

    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute();
    }

    /**
     * {@inheritdoc}
     */
    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'dispatch');
        return $pluginInfo ? $this->___callPlugins('dispatch', func_get_args(), $pluginInfo) : parent::dispatch($request);
    }
}

<?php
namespace Omnipro\UserOpinion\Controller\Index;

class Index extends \Magento\Framework\App\Action\Action
{
    /**
     * @var \Magento\Framework\View\Result\PageFactory
     */
    protected $_pageFactory;

    /**
     * @param \Magento\Framework\Controller\Result\JsonFactory
     */
    private $jsonFactory;

    /**
     * @param \Omnipro\UserOpinion\Api\Data\UserOpinionFactory
     */
    private $userOpinionFactory;

    /**
     * @param \Omnipro\UserOpinion\Api\UserOpinionRepositoryInterface
     */
    private $userOpinionRepository;

    /**
     * @param \Magento\Framework\App\Action\Context $context
     */
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory,
        \Magento\Framework\Controller\Result\JsonFactory $jsonFactory,
        \Omnipro\UserOpinion\Api\Data\UserOpinionInterfaceFactory $userOpinionFactory,
        \Omnipro\UserOpinion\Api\UserOpinionRepositoryInterface $userOpinionRepository
    ) {
        $this->_pageFactory = $pageFactory;
        $this->jsonFactory = $jsonFactory;
        $this->userOpinionFactory = $userOpinionFactory;
        $this->userOpinionRepository = $userOpinionRepository;
        return parent::__construct($context);
    }
    /**
     * View page action
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        $json = $this->jsonFactory->create();
        $userOpinion = $this->userOpinionFactory->create();
        /*$userOpinion->setData([
            'sku' => 'abc123',
            'user_email' => 'julian.rico@omni.pro',
            'puntuacion' => 10,
            'opinion' => 'excelente'
        ]);*/

        //$userOpinion->setData('sku', 'abc1234');
        //$userOpinion->setData('user_email', 'julian.rico@omni.pro');
        //$userOpinion->setData('puntuacion', '9');
        //$userOpinion->setData('opinion', 'abc123');
        $userOpinion->setSku('abc1234');
        $userOpinion->setUserEmail('julian.rico@omni.pro');
        $userOpinion->setPuntuacion(9);
        $userOpinion->setOpinion('Excelente');

        //$userOpinion->save();
        //$json->setJsonData($userOpinion->toJson());

        $this->userOpinionRepository->save($userOpinion);

        $json->setData([
            'success'=> true,
            'userOpinion' => $userOpinion->toArray()
        ]);

        return $json;
        // return $this->_pageFactory->create();
    }
}

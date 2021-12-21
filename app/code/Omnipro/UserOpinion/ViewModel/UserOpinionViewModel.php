<?php
namespace Omnipro\UserOpinion\ViewModel;

use \Magento\Framework\View\Element\Block\ArgumentInterface;

class UserOpinionViewModel implements ArgumentInterface
{
    /**
     * @param \Omnipro\UserOpinion\Model\ResourceModel\UserOpinion\CollectionFactory
     */
    private $userOpinionCollectionFactory;

    public function __construct(
        \Omnipro\UserOpinion\Model\ResourceModel\UserOpinion\CollectionFactory $userOpinionCollectionFactory
    ) {
        $this->userOpinionCollectionFactory = $userOpinionCollectionFactory;
    }

    public function getOpinions()
    {
        /**
         * @var \Omnipro\UserOpinion\Model\ResourceModel\UserOpinion\Collection $userOpinionCollection
         */

        $userOpinionCollection = $this->userOpinionCollectionFactory->create();
        $userOpinionCollection->addFieldToSelect("*");
        return $userOpinionCollection->getItems();
    }
}

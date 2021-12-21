<?php
namespace Omnipro\Blog\ViewModel;

class BlogViewModel implements \Magento\Framework\View\Element\Block\ArgumentInterface
{
    /**
     * @param \Omnipro\Blog\Model\ResourceModel\Blog\CollectionFactory
     */
    private $BlogCollectionFactory;

    /**
     * @param \Omnipro\UserOpinion\Model\ResourceModel\UserOpinion\CollectionFactory
     */

    public function __construct(
        \Omnipro\Blog\Model\ResourceModel\Blog\CollectionFactory $BlogCollectionFactory
    )
    {
        $this->BlogCollectionFactory = $BlogCollectionFactory;
        
    }
}

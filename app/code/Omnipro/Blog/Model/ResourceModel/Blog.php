<?php
namespace Omnipro\Blog\Model\ResourceModel;

class Blog extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
        protected function _construct()
    {
        $this->_init('omnipro_blog', 'post_id');
    }
}

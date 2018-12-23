<?php

/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 2017/12/23
 * Time: 17:21
 */

namespace Birdsystem\Globepay\Controller\Hello;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class World extends Action
{
    /** @var  \Magento\Framework\View\Result\Page */
    protected $resultPageFactory;

    /**
     * World constructor.
     *
     * @param Context     $context
     * @param PageFactory $resultPageFactory
     */
    public function __construct(Context $context, PageFactory $resultPageFactory)
    {
        $this->resultPageFactory = $resultPageFactory;
        parent::__construct($context);
    }

    /**
     *
     * @return \Magento\Framework\View\Result\PageFactory
     */
    public function execute()
    {
        echo "Web Hello World bbbcbc !";
        die;
    }
}
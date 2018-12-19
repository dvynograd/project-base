<?php
declare(strict_types=1);

namespace Residential\Test\Controller\Index;

use Magento\Framework\App\Action\Action;

/**
 * Class Test
 * @package Residential\StoreAccess\Controller\Login
 */
class Index extends Action
{
    /**
     * @inheritdoc
     */
    public function execute()
    {
        echo "test";
        die();
    }
}
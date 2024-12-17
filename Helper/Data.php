<?php

namespace Conceptive\ProductSlider\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\ScopeInterface;

class Data extends AbstractHelper
{
    const XML_PATH_PRODUCTSLIDER = 'productslider/general/';

    public function getConfigValue($field, $storeId = null)
    {
        return $this->scopeConfig->getValue(
            self::XML_PATH_PRODUCTSLIDER . $field,
            ScopeInterface::SCOPE_STORE,
            $storeId
        );
    }

    public function getProductLimit()
    {
        return (int)$this->getConfigValue('product_limit') ?: 10;
    }
}

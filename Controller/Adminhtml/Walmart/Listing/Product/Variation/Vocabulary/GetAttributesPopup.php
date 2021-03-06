<?php

/*
 * @author     M2E Pro Developers Team
 * @copyright  M2E LTD
 * @license    Commercial use is forbidden
 */

namespace Ess\M2ePro\Controller\Adminhtml\Walmart\Listing\Product\Variation\Vocabulary;

use Ess\M2ePro\Controller\Adminhtml\Walmart\Main;

/**
 * Class \Ess\M2ePro\Controller\Adminhtml\Walmart\Listing\Product\Variation\Vocabulary\GetAttributesPopup
 */
class GetAttributesPopup extends Main
{
    public function execute()
    {
        $block = $this->createBlock('Walmart_Listing_Product_Variation_VocabularyAttributesPopup');

        $this->setAjaxContent($block);

        return $this->getResult();
    }
}

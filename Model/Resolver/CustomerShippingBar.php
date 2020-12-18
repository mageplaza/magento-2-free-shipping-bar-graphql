<?php
/**
 * Mageplaza
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Mageplaza.com license that is
 * available through the world-wide-web at this URL:
 * https://www.mageplaza.com/LICENSE.txt
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade this extension to newer
 * version in the future.
 *
 * @category    Mageplaza
 * @package     Mageplaza_FreeShippingBarGraphQl
 * @copyright   Copyright (c) Mageplaza (https://www.mageplaza.com/)
 * @license     https://www.mageplaza.com/LICENSE.txt
 */

declare(strict_types=1);

namespace Mageplaza\FreeShippingBarGraphQl\Model\Resolver;

use Exception;
use Magento\Framework\GraphQl\Config\Element\Field;
use Magento\Framework\GraphQl\Exception\GraphQlAuthorizationException;
use Magento\Framework\GraphQl\Exception\GraphQlInputException;
use Magento\Framework\GraphQl\Schema\Type\ResolveInfo;
use Magento\GraphQl\Model\Query\ContextInterface;
use Magento\CustomerGraphQl\Model\Customer\GetCustomer;
use Mageplaza\FreeShippingBar\Api\ShippingBarRepositoryInterface;
use Mageplaza\FreeShippingBar\Helper\Data;

/**
 * Class CustomerShippingBar
 * @package Mageplaza\FreeShippingBarGraphQl\Model\Resolver
 */
class CustomerShippingBar extends AbstractResolver
{
    /**
     * @var GetCustomer
     */
    protected $getCustomer;

    /**
     * CustomerShippingBar constructor.
     *
     * @param Data $helperData
     * @param ShippingBarRepositoryInterface $shippingBarRepo
     * @param GetCustomer $getCustomer
     */
    public function __construct(
        Data $helperData,
        ShippingBarRepositoryInterface $shippingBarRepo,
        GetCustomer $getCustomer
    ) {
        $this->getCustomer = $getCustomer;
        parent::__construct($helperData, $shippingBarRepo);
    }

    /**
     * @inheritdoc
     */
    public function resolve(Field $field, $context, ResolveInfo $info, array $value = null, array $args = null)
    {
        parent::resolve($field, $context, $info, $value, $args);

        /** @var ContextInterface $context */
        if ($context->getExtensionAttributes()->getIsCustomer() === false) {
            throw new GraphQlAuthorizationException(__('The current customer isn\'t authorized.'));
        }

        $customer = $this->getCustomer->execute($context);

        try {
            return $this->shippingBarRepo->getCustomerShippingBars($customer->getId());
        } catch (Exception $e) {
            throw new GraphQlInputException(__($e->getMessage()));
        }
    }
}

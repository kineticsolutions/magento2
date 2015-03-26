<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\GiftMessage\Api;

interface OrderItemRepositoryInterface
{
    /**
     * Return the gift message for a specified item in a specified order.
     *
     * @param int $orderId The order ID.
     * @param int $orderItemId The item ID.
     * @return \Magento\GiftMessage\Api\Data\MessageInterface|null Gift message.
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function get($orderId, $orderItemId);

    /**
     * Set the gift message for a specified item in a specified order.
     *
     * @param int $orderId The order ID.
     * @param int $orderItemId The item ID.
     * @param \Magento\GiftMessage\Api\Data\MessageInterface $giftMessage The gift message.
     * @return bool
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     * @throws \Magento\Framework\Exception\State\InvalidTransitionException
     * @throws \Magento\Framework\Exception\CouldNotSaveException
     */
    public function save($orderId, $orderItemId, \Magento\GiftMessage\Api\Data\MessageInterface $giftMessage);
}

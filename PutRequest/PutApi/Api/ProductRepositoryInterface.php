<?php

namespace PutRequest\PutApi\Api;

interface ProductRepositoryInterface
{
    /**
     * Return a filtered product.
     *
     * @param int $id
     * @return \PutRequest\PutApi\Api\ResponseItemInterface
     * @throws \Magento\Framework\Exception\NoSuchEntityException
     */
    public function getItem(int $id);

    /**
     * Set descriptions for the products.
     *
     * @param \PutRequest\PutApi\Api\RequestItemInterface[] $products
     * @return void
     */
    public function setDescription(array $products);
}
?>
<?php

namespace App\Traits;

use App\Models\Inventory;

trait InventoryManagementTrait
{
    /**
     * Decrease product inventory at a specific location by a given quantity.
     *
     * @param int $locationId
     * @param int $quantity
     */
    public function decreaseInventory(int $locationId, int $quantity)
    {
        // Retrieve the inventory record for the specified location
        $inventoryRecord = $this->inventories()->where('location_id', $locationId)->first();

        if ($inventoryRecord) {
            $inventoryRecord->quantity -= $quantity;
            $inventoryRecord->save();
        }
    }

    /**
     * Increase product inventory at a specific location by a given quantity.
     *
     * @param int $locationId
     * @param int $quantity
     */
    public function increaseInventory(int $locationId, int $quantity, $productId)
    {
        // Retrieve the inventory record for the specified location
        $inventoryRecord = $this->inventories()->where('location_id', $locationId)->first();

        if ($inventoryRecord) {
            $inventoryRecord->quantity += $quantity;
            $inventoryRecord->save();
        } else {
            $inventoryRecord = new Inventory();
            $inventoryRecord->quantity = $quantity;
            $inventoryRecord->product_id = $productId;
            $inventoryRecord->location_id = $locationId;
            $inventoryRecord->save();
        }
    }

    /**
     * Retrieve the current inventory level at a specific location for the product.
     *
     * @param int $locationId
     * @return int
     */
    public function getInventoryLevel(int $locationId)
    {
        $inventoryRecord = $this->inventories()->where('location_id', $locationId)->first();

        return $inventoryRecord ? $inventoryRecord->quantity : 0;
    }

    /**
     * Check if the product is in stock at a specific location.
     *
     * @param int $locationId
     * @return bool
     */
    public function isInStock(int $locationId)
    {
        return $this->getInventoryLevel($locationId) > 0;
    }

    /**
     * Create an order for the product, checking inventory availability.
     *
     * @param int $locationId
     * @param int $quantity
     * @return bool
     */
    public function createOrder(int $locationId, int $quantity)
    {
        if ($this->isInStock($locationId) && $this->getInventoryLevel($locationId) >= $quantity) {
            // Logic to create the order
            return true;
        }

        return false;
    }

    /**
     * Receive inventory at a specific location.
     *
     * @param int $locationId
     * @param int $quantity
     */
    public function receiveInventory(int $locationId, int $quantity, $productId)
    {
        $this->increaseInventory($locationId, $quantity, $productId);
    }

    /**
     * Reduce inventory on dispatch.
     *
     * @param int $locationId
     * @param int $quantity
     */
    public function reduceOnDispatch(int $locationId, int $quantity)
    {
        $this->decreaseInventory($locationId, $quantity);
    }

    /**
     * Increase inventory on returns.
     *
     * @param int $locationId
     * @param int $quantity
     */
    public function increaseOnReturns(int $locationId, int $quantity, $productId)
    {
        $this->increaseInventory($locationId, $quantity, $productId);
    }
}

package com.self.checkout.system.appl.model.item;

/**
 * POJO class for Item objects. This class represents the grocery items that can be bought from the store.
 * */
public class Item {
    /** A unique id of the item. */
    private int itemId;
    /** Description for the item. */
    private String itemDesc;
    /** Price of the item. */
    private float unitPrice;
    /** Quantity of the bought item. */
    private int qty;

    /***
     * Default constructor of the Item class.
     *
     */
    public Item() {
    }

    /***
     * An Item class constructor that initializes the itemId, itemDesc, unitPrice and qty of the Item instance.
     * @param itemId the id of the grocery item.
     * @param itemDesc the description of the grocery item.
     * @param unitPrice the price of the grocery item.
     * @param qty the quantity of the bought item.
     */
    public Item(int itemId, String itemDesc, float unitPrice, int qty) {
        this.itemId = itemId;
        this.itemDesc = itemDesc;
        this.unitPrice = unitPrice;
        this.qty = qty;
    }

    /**
     * Retrieves the id of the item.
     * @return the id of the item.
     * */
    public int getItemId() {
        return itemId;
    }

    /**
     * Sets the id of the item.
     * @param itemId the id of the item.
     * */
    public void setItemId(int itemId) {
        this.itemId = itemId;
    }

    /**
     * Retrieves the item description of the item.
     * @return the item description of the item.
     * */
    public String getItemDesc() {
        return itemDesc;
    }

    /**
     * Sets the item description of the item.
     * @param itemDesc the title of the item.
     * */
    public void setItemDesc(String itemDesc) {
        this.itemDesc = itemDesc;
    }

    /**
     * Retrieves the unit price of the item.
     * @return the unit price of the item.
     * */
    public float getUnitPrice() {
        return unitPrice;
    }

    /**
     * Sets the unit price of the item.
     * @param unitPrice the unit price of the item.
     * */
    public void setUnitPrice(float unitPrice) {
        this.unitPrice = unitPrice;
    }

    /**
     * Retrieves the quantity of the item.
     * @return the quantity of the item.
     * */
    public int getQty() {
        return qty;
    }

    /**
     * Sets the quantity of the item.
     * @param qty the quantity of the item.
     * */
    public void setQty(int qty) {
        this.qty = qty;
    }
}

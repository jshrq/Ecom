package com.self.checkout.system.appl.model.customer;

/**
 * POJO class for Customer objects.
 * */
public class Customer {
    /** A unique id of the customer. */
    private int customerID;
    /** Name of the customer. */
    private String customerName;
    /** Address of the customer. */
    private String address;
    /** Contact number of the customer. */
    private int contactNumber;

    /***
     * Default constructor of the Customer class.
     *
     */
    public Customer() {
    }

    /***
     * A Customer class constructor that initializes the customerID, customerName, address and contactNumber of the Customer instance.
     * @param customerID the id of the grocery item.
     * @param customerName the description of the grocery item.
     * @param address the price of the grocery item.
     * @param contactNumber the quantity of the bought item.
     */
    public Customer(int customerID, String customerName, String address, int contactNumber) {
        this.customerID = customerID;
        this.customerName = customerName;
        this.address = address;
        this.contactNumber = contactNumber;
    }

    /**
     * Retrieves the id of the customer.
     * @return the id of the customer.
     * */
    public int getCustomerID() {
        return customerID;
    }

    /**
     * Sets the id of the customer.
     * @param customerID the id of the customer.
     * */
    public void setCustomerID(int customerID) {
        this.customerID = customerID;
    }

    /**
     * Retrieves the name of the customer.
     * @return the name of the customer.
     * */
    public String getCustomerName() {
        return customerName;
    }

    /**
     * Sets the name of the customer.
     * @param customerName the name of the customer.
     * */
    public void setCustomerName(String customerName) {
        this.customerName = customerName;
    }

    /**
     * Retrieves the address of the customer.
     * @return the address of the customer.
     * */
    public String getAddress() {
        return address;
    }

    /**
     * Sets the address of the customer.
     * @param address the address of the customer.
     * */
    public void setAddress(String address) {
        this.address = address;
    }

    /**
     * Retrieves the contact number of the customer.
     * @return the contact number of the customer.
     * */
    public int getContactNumber() {
        return contactNumber;
    }

    /**
     * Sets the contact number of the customer.
     * @param contactNumber the id of the customer.
     * */
    public void setContactNumber(int contactNumber) {
        this.contactNumber = contactNumber;
    }
}
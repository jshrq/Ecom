package com.self.checkout.system.appl.model.transaction;

import java.sql.Timestamp;

/**
 * POJO class for Transaction objects.
 * */
public class Transaction {
    /** A unique id of the transaction. */
    private int transNumber;
    /** Date of the transaction. */
    private Timestamp transDate;

    /***
     * Default constructor of the Transaction class.
     *
     */
    public Transaction() {
    }

    /***
     * A Transaction class constructor that initializes the transNumber and transDate of the Transaction instance.
     * @param transNumber the id of the transaction.
     * @param transDate the date of the transaction.
     */

    public Transaction(int transNumber, Timestamp transDate) {
        this.transNumber = transNumber;
        this.transDate = transDate;
    }

    /**
     * Retrieves the id of the transaction.
     * @return the id of the transaction.
     * */
    public int getTransNumber() {
        return transNumber;
    }

    /**
     * Sets the id of the transaction.
     * @param transNumber the id of the transaction.
     * */
    public void setTransNumber(int transNumber) {
        this.transNumber = transNumber;
    }

    /**
     * Retrieves the date of the transaction.
     * @return the date of the transaction.
     * */
    public Timestamp getTransDate() {
        return transDate;
    }

    /**
     * Sets the date of the transaction.
     * @param transDate the date of the transaction.
     * */
    public void setTransDate(Timestamp transDate) {
        this.transDate = transDate;
    }
}

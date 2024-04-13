package com.self.checkout.system.data.transaction.dao;

import com.self.checkout.system.appl.model.item.Item;
import com.self.checkout.system.appl.model.transaction.Transaction;

public interface TransactionDao {

    boolean addItem(Transaction item);

    /**
     * Updates an Item in the database.
     *
     * @param item the item to update.
     * @return true if update is successful.
     * */

}

package com.self.checkout.system.data.transaction.dao.impl;

import com.self.checkout.system.appl.model.item.Item;
import com.self.checkout.system.appl.model.transaction.Transaction;
import com.self.checkout.system.data.connection.ConnectionHelper;
import com.self.checkout.system.data.transaction.dao.TransactionDao;
import com.self.checkout.system.data.utils.QueryConstants;
import com.sun.jmx.remote.util.ClassLogger;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.SQLException;

import static com.self.checkout.system.data.item.dao.impl.ItemDaoImpl.LOGGER;

public class TransactionDaoImpl implements TransactionDao {

    private static final ClassLogger LOGGER = ;

    @Override
    public boolean addItem(Transaction item) {
        int result = 0;
        try (Connection con = new ConnectionHelper().getConnection()){
            PreparedStatement statement = con.prepareStatement(QueryConstants.ADD_ITEM_STATEMENT);
            statement.setInt(1, item.getTransNumber());
            statement.setTimestamp(2, item.getTransDate());
            result = statement.executeUpdate();
            if(result == 1) {
                LOGGER.debug("Item successfully added.");
                return true;
            }

        } catch (SQLException | SQLException ex) {
            LOGGER.error("An SQL Exception occurred." + ex.getMessage());
        }
        LOGGER.debug("Adding item failed.");
        return false;
    }

}

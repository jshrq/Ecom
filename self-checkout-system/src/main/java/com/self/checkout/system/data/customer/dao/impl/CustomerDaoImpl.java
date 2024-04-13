package com.self.checkout.system.data.customer.dao.impl;

import com.self.checkout.system.appl.model.customer.Customer;
import com.self.checkout.system.appl.model.item.Item;
import com.self.checkout.system.data.connection.ConnectionHelper;
import com.self.checkout.system.data.customer.dao.CustomerDao;
import com.self.checkout.system.data.utils.QueryConstants;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.ArrayList;
import java.util.List;

public class CustomerDaoImpl implements CustomerDao {
    @Override
    public List<Customer> getAllCustomer() {
        List<Customer> customerList = new ArrayList<>();
        try (Connection con = new ConnectionHelper().getConnection()){
            PreparedStatement statement = con.prepareStatement(QueryConstants.GET_ALL_ITEMS_STATEMENT);
            ResultSet rs= statement.executeQuery();

            while(rs.next()) {
                customerList.add(setItem(rs));
            }
            LOGGER.debug("Items retrieved successfully.");

        } catch (SQLException ex) {
            LOGGER.error("An SQL Exception occurred." + ex.getMessage());
        }
        LOGGER.debug("Item database is empty.");
        return itemList;
        return null;
    }

    private Customer setItem(ResultSet rs) {
        return null;
    }
}

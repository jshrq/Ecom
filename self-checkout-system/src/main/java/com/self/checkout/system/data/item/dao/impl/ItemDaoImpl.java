package com.self.checkout.system.data.item.dao.impl;

import com.self.checkout.system.appl.model.item.Item;
import com.self.checkout.system.data.connection.ConnectionHelper;
import com.self.checkout.system.data.item.dao.ItemDao;
import com.self.checkout.system.data.utils.QueryConstants;
import org.slf4j.Logger;
import org.slf4j.LoggerFactory;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.util.ArrayList;
import java.util.List;

public class ItemDaoImpl implements ItemDao {

    public static final Logger LOGGER = LoggerFactory.getLogger(ItemDaoImpl.class);

    @Override
    public List<Item> getAllItems() {
        List<Item> itemList = new ArrayList<>();
        try (Connection con = new ConnectionHelper().getConnection()){
            PreparedStatement statement = con.prepareStatement(QueryConstants.GET_ALL_ITEMS_STATEMENT);
            ResultSet rs= statement.executeQuery();

            while(rs.next()) {
                itemList.add(setItem(rs));
            }
            LOGGER.debug("Items retrieved successfully.");

        } catch (SQLException ex) {
            LOGGER.error("An SQL Exception occurred." + ex.getMessage());
        }
        LOGGER.debug("Item database is empty.");
        return itemList;
    }

    private Item setItem(ResultSet rs) {
    }

}

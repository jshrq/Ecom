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

import static com.self.checkout.system.data.utils.QueryConstants.*;

public class ItemDaoImpl implements ItemDao {

    Connection con = new ConnectionHelper().getConnection();

    @Override
    public List<Item> getAllItems() {
        try {
            PreparedStatement statement = con.prepareStatement(GET_ALL_ITEMS_STATEMENT);
            ResultSet rs= statement.executeQuery();
            List<Item> itemList = new ArrayList<>();

            while(rs.next()) {
                itemList.add(setItem(rs));
            }
            return itemList;
        } catch (Exception e) {

        }
        return null;
    }

    @Override
    public Item getItemById(String id) {
        try {
            PreparedStatement statement = con.prepareStatement(GET_ITEM_BY_ID_STATEMENT);
            statement.setString(1, id);
            ResultSet rs= statement.executeQuery();
            return rs.next()? setItem(rs) : null;
        } catch (Exception e) {

        }
        return null;
    }

    @Override
    public List<Item> getItemsByIdList(List<String> ids) {
        try {
            PreparedStatement statement = con.prepareStatement(GET_ITEMS_BY_IDS_STATEMENT + buildParameters(ids));
            for(int i=1; i<=ids.size(); i++) {
                statement.setString(i, ids.get(i-1));
            }
            ResultSet rs = statement.executeQuery();
            List<Item> itemList = new ArrayList<>();

            while(rs.next()) {
                itemList.add(setItem(rs));
            }
            return itemList;
        } catch (Exception e) { }
        return null;
    }

    @Override
    public boolean addItem(Item item) {
        try {
            PreparedStatement statement = con.prepareStatement(ADD_ITEM_STATEMENT);
            statement.setInt(1, item.getItemId());
            statement.setString(2, item.getItemDesc());
            statement.setFloat(3, item.getUnitPrice());
            statement.setInt(4, item.getQty());
            int result = statement.executeUpdate();
            return result == 1? true: false;

        } catch (Exception e) {}
        return false;
    }

    @Override
    public boolean updateItem(Item item) {
        try {
            PreparedStatement statement = con.prepareStatement(UPDATE_ITEM_STATEMENT);
            statement.setInt(1, item.getItemId());
            statement.setString(2, item.getItemDesc());
            statement.setFloat(3, item.getUnitPrice());
            statement.setInt(4, item.getQty());
            int result = statement.executeUpdate();
            return result == 1? true: false;
        } catch (Exception e) {}
        return false;
    }

    @Override
    public boolean deleteItemById(String id) {
        try {
            PreparedStatement statement = con.prepareStatement(DELETE_ITEM_BY_ID_STATEMENT);
            statement.setString(1, id);
            int result = statement.executeUpdate();
            return result == 1? true: false;
        } catch (Exception e) {}
        return false;
    }

    private Item setItem(ResultSet rs) {
        try {
            Item item = new Item();
            item.setItemId(rs.getInt("item_id"));
            item.setItemDesc(rs.getString("item_desc"));
            item.setUnitPrice(rs.getFloat("unit_price"));
            item.setQty(rs.getInt("qty"));
            return item;
        } catch (Exception e) {

        }
        return null;
    }

    private String buildParameters(List<String> ids) {
        StringBuilder sb = new StringBuilder();
        sb.append("(");

        for(String id: ids) {
            sb.append("?, ");
        }

        //delete the last character added which is " "
        String params = sb.deleteCharAt(sb.length()-1).toString();

        //delete the second to the last character added which is ","
        params = sb.deleteCharAt(sb.length()-1).toString();
        params = params + ")";

        return params;
    }

}

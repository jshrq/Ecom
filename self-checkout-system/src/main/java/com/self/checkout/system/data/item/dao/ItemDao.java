package com.self.checkout.system.data.item.dao;

import com.self.checkout.system.appl.model.item.Item;

import java.util.List;

public interface ItemDao {
    List<Item> getAllItems();
    Item getItemById(String id);
    List<Item> getItemsByIdList(List<String> ids);
    boolean addItem(Item item);
    boolean updateItem(Item item);
    boolean deleteItemById(String id);
}

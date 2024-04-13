package com.self.checkout.system.data.item.dao;

import com.self.checkout.system.appl.model.item.Item;

import java.util.List;

public interface ItemDao {
    List<Item> getAllItems();
}

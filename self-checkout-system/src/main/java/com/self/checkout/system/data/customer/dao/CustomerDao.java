package com.self.checkout.system.data.customer.dao;

import com.self.checkout.system.appl.model.customer.Customer;
import com.self.checkout.system.appl.model.item.Item;

import java.util.List;

public interface CustomerDao {
    List<Customer> getAllCustomers();
    Customer getCustomerById(String id);
    boolean addCustomer(Customer customer);
    boolean updateCustomer(Customer customer);
    boolean deleteCustomerById(String id);
}

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

import static com.self.checkout.system.data.utils.QueryConstants.*;

public class CustomerDaoImpl implements CustomerDao {
    Connection con = new ConnectionHelper().getConnection();
    @Override
    public List<Customer> getAllCustomers() {
        try {
            PreparedStatement stmt = con.prepareStatement(GET_ALL_CUSTOMERS_STATEMENT);
            ResultSet rs = stmt.executeQuery();
            List<Customer> customers = new ArrayList<>();

            while(rs.next()) {
                customers.add(setCustomer(rs));
            }
            return customers;
        } catch (Exception e) {

        }
        return null;
    }
    @Override
    public Customer getCustomerById(String id) {
        try {
            PreparedStatement stmt = con.prepareStatement(GET_CUSTOMER_BY_ID_STATEMENT);
            stmt.setString(1, id);
            ResultSet rs = stmt.executeQuery();

            if(rs.next()) {
                return setCustomer(rs);
            }

        } catch (Exception e) {

        }
        return null;
    }
    public boolean addCustomer(Customer customer) {
        try {
            PreparedStatement stmt = con.prepareStatement(ADD_CUSTOMER_STATEMENT);
            stmt.setString(1, customer.getCustomerName());
            stmt.setString(2, customer.getAddress());
            stmt.setInt(3, customer.getContactNumber());
            stmt.setInt(4, customer.getCustomerID());
            int result = stmt.executeUpdate();
            if(result == 1) {
                return true;
            }
        } catch (Exception e) {

        }
        return false;
    }
    @Override
    public boolean updateCustomer(Customer customer) {
        try {
            PreparedStatement stmt = con.prepareStatement(UPDATE_STATEMENT);
            stmt.setString(1, customer.getCustomerName());
            stmt.setString(2, customer.getAddress());
            stmt.setInt(3, customer.getContactNumber());
            stmt.setInt(4, customer.getCustomerID());
            int result = stmt.executeUpdate();
            return result == 1? true: false;
        } catch (Exception e) {

        }
        return false;
    }
    @Override
    public boolean deleteCustomerById(String id) {
        try {
            PreparedStatement stmt = con.prepareStatement(DELETE_STATEMENT);
            stmt.setString(1, id);
            int result = stmt.executeUpdate();
            return result == 1? true: false;
        } catch (Exception e) {

        }
        return false;
    }

    /**
     * This sets the fields of the customer object created
     * */
    private Customer setCustomer(ResultSet rs) {
        try{
            Customer customer = new Customer();
            customer.setCustomerID(rs.getInt("customer_id"));
            customer.setCustomerName(rs.getString("customer_name"));
            customer.setAddress(rs.getString("address"));
            customer.setContactNumber(rs.getInt("contact_number"));
            return customer;
        } catch (Exception e) {

        }
        return null;
    }
}

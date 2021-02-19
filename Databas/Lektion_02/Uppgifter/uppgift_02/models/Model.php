<?php

class Model
{
    private $db = null;

    public function __construct($database)
    {
        $this->db = $database;
    }

    public function fetchAllProducts()
    {
        $products = $this->db->select("SELECT * FROM products");
        return $products;
    }

    public function fetchproductById($id)
    {
        $statement = "SELECT * FROM products WHERE product_id=:id";
        $parameters = array(':id' => $id);
        $product = $this->db->select($statement, $parameters);

        // print_r($product);

        if ($product) {

            return $product[0];
        }

        return false;
    }


    /*
    public function fetchCustomerById($id)
    {
        $statement = "SELECT * FROM customers WHERE customer_id=:id";
        $parameters = array(':id' => $id);
        $customer = $this->db->select($statement, $parameters);

        if ($customer) {
            return $customer[0];
        }

        return false;
    }

*/

    public function saveOrder($customer_name, $customer_tel, $customer_email, $customer_address, $product_id)
    {
        //$customer = $this->fetchCustomerById($customer_id);
        //Skapa en ny kund i customer-tabellen
        $statement = "INSERT INTO customers (customer_name, customer_tel, customer_email, customer_address)  
        VALUES (:customer_name, :customer_tel, :customer_email, :customer_address)";
        $parameters = array(
            ':customer_name' => $customer_name,
            ':customer_tel' => $customer_tel,
            ':customer_email' => $customer_email,
            ':customer_address' => $customer_address
        );

        $customer_id = $this->db->insert($statement, $parameters);


        if ($customer_id) {

            $statement = "INSERT INTO orders (customer_id, product_id)  
                          VALUES (:customer_id, :product_id)";
            $parameters = array(
                ':customer_id' => $customer_id,
                ':product_id' => $product_id
            );

            $orderId = $this->db->insert($statement, $parameters);
            if (!$orderId) {
                return false;
            }
            //return array('customer' => $customer, 'lastInsertId' => $lastInsertId);
            return true;
        } else {
            return false;
        }
    }
}

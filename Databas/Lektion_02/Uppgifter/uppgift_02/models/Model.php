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


    public function saveOrder($customer_id, $product_id)
    {
        $customer = $this->fetchCustomerById($customer_id);

        if ($customer) {

            $statement = "INSERT INTO orders (customer_id, product_id)  
                          VALUES (:customer_id, :product_id)";
            $parameters = array(
                ':customer_id' => $customer_id,
                ':product_id' => $product_id
            );

            $lastInsertId = $this->db->insert($statement, $parameters);

            return array('customer' => $customer, 'lastInsertId' => $lastInsertId);
        } else {
            return false;
        }
    }
}
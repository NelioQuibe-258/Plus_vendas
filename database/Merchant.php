<?php
class Merchant {
    private $product_name;
    private $qty;
    private $unit_price;
    private $category;
    private $subtotal;
    private $tax;
    private $total;
    private $product_owner;
    private $telefone;



    public function __construct()
	{
		require_once('Database_connection.php');

		$database_object = new Database_connection;

		$this->connect = $database_object->connect();
	}


        //**SETTER */
    public function set_subtotal($subtotal) {
        $this->subtotal = $subtotal;
    }
    
    public function set_tax($tax) {
        $this->tax = $tax;
    }
    public function set_telefone($telefone) {
        $this->telefone = $telefone;
    }
    
    public function set_total($total) {
        $this->total = $total;
    }
    
    public function set_product_owner($product_owner) {
        $this->product_owner = $product_owner;
    }

    /*GETTERS*/
    public function get_subtotal() {
        return $this->subtotal;
    }

    public function get_tax() {
        return $this->tax;
    }

    public function get_total() {
        return $this->total;
    }

    public function get_product_owner() {
        return $this->product_owner;
    }

    public function get_telefone() {
        return $this->telefone;
    }
    /*save product to database*/

    public function save_merchant() {
        $query = "
		INSERT INTO merchant (subtotal, tax, total, product_owner, telefone) VALUES (:subtotal, :tax, :total, :product_owner, :telefone)
		";
		$statement = $this->connect->prepare($query);

		$statement->bindParam(':subtotal', $this->subtotal);

		$statement->bindParam(':tax', $this->tax);

		$statement->bindParam(':total', $this->total);

        $statement->bindParam(':product_owner', $this->product_owner);

        $statement->bindParam(':telefone', $this->telefone);


		if($statement->execute())
		{
			return true;
		}
		else
		{
			return false;
		}
    }


}

?>
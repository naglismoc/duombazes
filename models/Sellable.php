<?php


class Sellable {

    private $id;
    private $name;
    private $quantity;
    private $date;
    // private $stock_limit;
    // private $created_at;
    // private $updated_at;
    // private $category;
    // private $subcategory;

    function __construct(
		){
       
    }



    public function getId(){
		return $this->id;
	}

	public function setId($id){
		$this->id = $id;
	}

	public function getName(){
		return $this->name;
	}

	public function setName($name){
		$this->name = $name;
	}

	public function getQuantity(){
		return $this->quantity;
	}

	public function setQuantity($quantity){
		$this->quantity = $quantity;
	}	
	public function getDate(){
		return $this->date;
	}

	public function setDate($date){
		$this->date = $date;
	}

	// public function getStock_limit(){
	// 	return $this->stock_limit;
	// }

	// public function setStock_limit($stock_limit){
	// 	$this->stock_limit = $stock_limit;
	// }

	// public function getCreated_at(){
	// 	return $this->created_at;
	// }

	// public function setCreated_at($created_at){
	// 	$this->created_at = $created_at;
	// }

	// public function getUpdated_at(){
	// 	return $this->updated_at;
	// }

	// public function setUpdated_at($updated_at){
	// 	$this->updated_at = $updated_at;
	// }

	// public function getCategory(){
	// 	return $this->category;
	// }

	// public function setCategory($category){
	// 	$this->category = $category;
	// }

	// public function getSubcategory(){
	// 	return $this->subcategory;
	// }

	// public function setSubcategory($subcategory){
	// 	$this->subcategory = $subcategory;
	// }
}



?>
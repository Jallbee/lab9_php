<? php
class Book {
	public string $title ;
	public string $author;
	public int $ratings;
	public float $price;
	public int $quantity;

	public function_construct(string $title, string $author, int $ratings,Float $price,int $quantity){
		$this -> title= $title;
		$this -> author= $author;
		$this -> ratings= $ratings;
		$this -> price= $price;
		$this -> quantity= $quantity;
	}
}

$hunger_games = new Book ('The Hunger Games', 'Suzanne Collins', 5,14.99,1);
$catching_fire =new Book ('Catching Fire', 'Suzanne Collins',4,3.99,3);
$mockingjay - new Book ('Mockingjay', 'Suzanne Collins',3,10.99,5)
?>

<?php


class Book {
    public string $title;
    public string $author;
    public int $rating;
    public float $price;
    public int $quantity;
   
    public function __construct(string $title, string $author, int $rating, float $price, int $quantity) {
        $this->title = $title;
        $this->author = $author;
        $this->rating = $rating;
        $this->price = $price;
        $this->quantity = $quantity;
    }
   
    public function checkInStock() {
        $message = '';
        if ($this->quantity > 0) {
            $message = 'In Stock';
        }
        else {
            $message = 'Out of Stock';
        }
        return $message;
    }


    public function buy() {
        $this->quantity = $this->quantity - 1;
        return $this->quantity;
    }


    public function showRatingStars() {
        $star = '';
        for ($i = 0; $i < $this->rating; $i++)  {
            $star .= '<span class="fa fa-star checked"></span>';
        }
        for ($i = $this->rating; $i < 5; $i++)  {
            $star .= '<span class="fa fa-star"></span>';
        }

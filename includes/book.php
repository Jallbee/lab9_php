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
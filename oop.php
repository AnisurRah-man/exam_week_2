<?php
class Book{
 
    //define initialize $title and $availableCopies properties by construct property promotion
    public function __construct(private string $title,private int $availableCopies){}
    public function getTitle(){
        return $this->title;
    }
    public function getAvailableCopies(){
        return $this->availableCopies;
    }
    public function borrowBoook(){
        if($this->availableCopies>0){
            $this->availableCopies--;
        }
    } 
    public function returnBook(){
        $this->availableCopies++;
    }
}

class Member{
    public function __construct(public string $name){}
    public function getName(){
        return $this->name;
    }
    public function borrowBook(Book $book){
        $book->borrowBoook();
    }
    public function returnBook(Book $book){
        $book->returnBook();
    }
}

// Create 2 books
$book1 = new Book("The Great Gatsby", 5);
$book2 = new Book("To Kill a Mockingbird", 3);

// Create 2 members
$member1 = new Member("John Doe");
$member2 = new Member("Jane Smith");

// Simulate borrowing
$member1->borrowBook($book1);
$member2->borrowBook($book2);

// Print available copies
echo "Available Copies of '{$book1->getTitle()}': {$book1->getAvailableCopies()}\n";
echo "Available Copies of '{$book2->getTitle()}': {$book2->getAvailableCopies()}\n";

?>
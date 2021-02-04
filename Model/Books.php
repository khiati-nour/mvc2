<?php

class Books
{
    private $databaseManager;

    public function __construct($databaseManager)
    {
        $this->databaseManager = $databaseManager;

    }

    public function createBook(int $id, int $isbn, string $title, string $author, string $genre, string $language, int $pages, int $published)
    {

        $bookData =[
            'isbn' => $isbn,
            'title' => $title,
            'author' => $author,
            'genre' => $genre,
            'language' => $language,
            'pages' => $pages,
            'published' => $published,
        ];
        $sql= "INSERT INTO books (isbn, title, author, genre, language, pages, published)
                VALUES (:isbn, :title, :author, :genre, :language, :pages, :published);";
        // $pdo_options[PDO::ATTR_EMULATE_PREPARES] = true;
        $this->databaseManager->database->prepare($sql)->execute($bookData);
        $idUser = $_SESSION['idUser'];
        $userBook =[
            'user_id' => $idUser,
            'isbn' => $isbn,
        ];
        $sql= "INSERT INTO book_collection (user_id, book_isbn)
        VALUES (:user_id, :isbn);";
        // $pdo_options[PDO::ATTR_EMULATE_PREPARES] = true;
        $this->databaseManager->database->prepare($sql)->execute($userBook);
    }

    public function getCollection()
    {

        $sql = "SELECT * FROM books";
        $stmt = $this->databaseManager->database->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function find($search)
    {
        $sql = "SELECT * FROM books WHERE title ='$search' OR isbn  ='$search' OR genre ='$search' OR language  ='$search' OR pages  ='$search' OR author  ='$search' OR published  ='$search'";
        $stmt = $this->databaseManager->database->prepare($sql);
         $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);}


    public function borrow (){
  $idUser = $_SESSION['idUser'];
   $isbn = $_SESSION['isbn'];

        $borrowBook =[
            'user_id' => $idUser,
            'isbn' => $isbn,
        ];
        $sql= "INSERT INTO borrow_service (user_id_borrow, book_isbn )
        VALUES (:user_id, :isbn);";
        // $pdo_options[PDO::ATTR_EMULATE_PREPARES] = true;
        $this->databaseManager->database->prepare($sql)->execute($borrowBook);

}

public function return_date(){
   $sql= "UPDATE borrow_service 
SET `return_date` = DATE_ADD(`return_date` , INTERVAL 10 DAY) ORDER BY ID DESC LIMIT 1
";
    $stmt = $this->databaseManager->database->prepare($sql);
    $stmt->execute();
}



}

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
        $statement = $this->databaseManager->database->prepare($sql);
        $statement->execute();
    }





}


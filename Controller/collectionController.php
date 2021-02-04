<?php


class collectionController
{
// TODO api: $books = new Books($_POST['search']);
    public function render(array $GET, array $POST){
if (isset($_POST['submit']))
{
    //TODO validate based on patterns?
    $databaseManager = new DatabaseManager("localhost", 3306, "root","");
    $databaseManager->connect();



    $books = new Books($databaseManager);

    $bookies = $books->getCollection();
    if (!empty($_POST['isbn']) && !empty($_POST['author']) && !empty($_POST['genre']) && !empty($_POST['language']) && !empty($_POST['pages']) && !empty($_POST['published']))
{
$isbn = (int)$_POST['isbn'];
$title = $_POST['title'];
$author = $_POST['author'];
$genre = $_POST['genre'];
$language = $_POST['language'];
$pages = (int)$_POST['pages'];
$published = (int)$_POST['published'];
$id=1;

$books->createBook( $id,$isbn, $title, $author, $genre, $language, $pages, $published);

}

else {
    return $php_errormsg;

}
}
        require 'View/collection.php';
}}

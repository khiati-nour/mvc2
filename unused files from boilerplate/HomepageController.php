<?php
declare(strict_types = 1);

class HomepageController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render(array $GET, array $POST)
    {
        $databaseManager = new DatabaseManager("localhost", 3306, "root","");
        $databaseManager->connect();
        //this is just example code, you can remove the line below
          $user = new User($databaseManager);
           $user->test();
        //you should not echo anything inside your controller - only assign vars here
        // then the view will actually display them.

        //load the view
        require 'View/homepage.php';
    }
}

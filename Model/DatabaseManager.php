<?php

// This class will manage the connection to the database
// It will be passed on the other classes who need it
class DatabaseManager
{
    // These are private: only this class needs them
    private $host;
    private $port;
    private $username;
    private $password;
    private $charset;
    private $databaseName;
    // This one is public, so we can use it outside of this class
    // We could also use a private variable and a getter (but let's not make things too complicated at this point)
    public $database;

    public function __construct(string $host, int $port, string $username, string $password, $charset = "utf8mb4")
    {
        // Set any user and password information
        $this->host = $host;
        $this->port = $port;
        $this->username = $username;
        $this->password =$password;
        $this->charset = $charset;

    }

    public function connect()
    {

        // make the connection to the database
        // $this->database = null;
        $this->databaseName = "mvc";
        $dsn = "mysql:host=".$this->host.";dbname=".$this->databaseName.";port=".$this->port.";charset=".$this->charset;
        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ];
        
        try {
            $this->database = new PDO($dsn, $this->username, $this->password, $options);
            // $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // return $pdo;

        } catch (PDOException $e){
            echo "Connection failed: ".$e->getMessage();
        }


    }
    // public function homepage()
    // {
    //     return "http://".$this->host.":".$this->port;
    // }
}
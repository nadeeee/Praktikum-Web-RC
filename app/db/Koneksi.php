<?php
class Koneksi
{
    private $dbHost     = "localhost";
    private $dbUser     = "root";
    private $dbPassword = "root";
    private $dbName     = "prakWeb";

    public function connect()
    {

        $mysqli = new mysqli($this->dbHost, $this->dbUser, $this->dbPassword, $this->dbName);


        if ($mysqli->connect_error) {
            //?dev
            // echo "Gagal terkoneksi ke database : (" . $mysqli->connect_error . ")";

            //?prod
            header('Location: ./../../500.php');
        }


        return $mysqli;
    }
}

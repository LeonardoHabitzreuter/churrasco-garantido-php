<?php
declare(strict_types=1);

class MysqlConnection
{
    public function connect()
    {
        $connection = mysqli_connect('0.0.0.0:3306', 'dbuser', 'barbecue', 'Churrasco_Garantido');

        if ($connection) {
            print('The mysql database connection was established');
        } else {
            die('The app could not establish a connection with the database');
        }
    }
}
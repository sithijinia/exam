<?php

namespace App\classes;


class Demo
{
    private function dbConnection()
    {
        $hostName = 'localhost';
        $userName = 'root';
        $password = '';
        $dbName = 'dbblog';
        $link = mysqli_connect($hostName, $userName, $password, $dbName);
        return $link;
    }
    public function saveBlogInfo($data){

        $sql = "INSERT INTO blogsites (title, author, description ,status) VALUES ('$data[blog_title]', '$data[author_name]', '$data[blog_description]','$data[status]')";

        if (mysqli_query(Demo::dbConnection(), $sql)) {
            $message = "Blog info saved successfully";
            return $message;
        } else {
            die('Query Problem' . mysqli_error(Demo::dbConnection()));
        }

    }
    public function AllblogInfo()
    {
        $sql = "SELECT * FROM blogsites";

        if (mysqli_query(Demo::dbConnection(), $sql)) {
            $queryResult = mysqli_query(Demo::dbConnection(), $sql);
            return $queryResult;


        } else {
            die('Query Problem' . mysqli_error(Demo::dbConnection()));
        }
    }
}
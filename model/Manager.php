<?php

namespace Quentin\Blog\Model;

class Manager
{

                    protected function dbConnect ()
                    {
                           $db = new \PDO('mysql:host=localhost;dbname=tp_blog;charset=utf8', 'root', '');
                           return $db;
                    }

}

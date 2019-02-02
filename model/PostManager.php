<?php

namespace Quentin\Blog\Model;

require_once('model/Manager.php');

class PostManager extends Manager
{



 public function getPosts()
 {
   $db = $this->dbConnect();
   $request = $db->query('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS date_fr FROM posts ORDER BY id DESC LIMIT  0,5 ');

   return $request;

}



public function getPost($postId)
{
   $db = $this->dbConnect();
        // Récup de la table billet pour afficher le billet concerné
   $request2 = $db->prepare('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS date_fr FROM posts WHERE id = ?');
   $request2->execute(array($postId));

   return $request2;

}



}

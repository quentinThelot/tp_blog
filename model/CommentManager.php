<?php

namespace Quentin\Blog\Model;

require_once("model/Manager.php");


class CommentManager extends Manager
{

 public function getComments ($postId)
 {
   $db = $this->dbConnect();
           // Récup de la table commentaires pour afficher les commentaires du billet
   $request1 = $db->prepare('SELECT id, post_id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS date_fr2 FROM comments WHERE post_id = ? ORDER BY id DESC LIMIT 0,5');
   $request1->execute(array($postId));

   return $request1;

 }

 public function  postComment($postId, $author, $comment)
 {
   $db = $this->dbConnect();
   $comments = $db->prepare('INSERT INTO comments(post_id, author, comment,comment_date) VALUES (:post_id,:author,:comment,now())');

   $affectedLines = $comments->execute(array(
     ':post_id' => $_POST['post_id'],
     ':author' => $_POST['author'],
     ':comment' => $_POST['comment']
   ));

   return $affectedLines;

 }

 public function changeComment($postId, $commentId, $newComment)
 {
  $db = $this->dbConnect();
  $comment = $db->prepare('UPDATE comments SET comment = :comment WHERE id= :id');

  $newComment = $comment->execute(array(
    ':comment' => $newComment,
    ':id' => $commentId
  ));
  return $newComment;
}

public function changePage($id,$postId)
{
 $db = $this->dbConnect();

 $request1 = $db->prepare('SELECT id, post_id, author, comment, DATE_FORMAT(comment_date, \'%d/%m/%Y à %Hh%imin%ss\') AS date_fr2 FROM comments WHERE id = ? ORDER BY id DESC LIMIT 0,5');
 $request1->execute(array($id));

 return $request1;
 return $id;
 return $postId;

}

}

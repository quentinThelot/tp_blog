<?php


require_once('model/PostManager.php');
require_once('model/CommentManager.php');

function listPosts()
{
   $postManager = new \Quentin\Blog\Model\PostManager();
   $request = $postManager->getPosts();

   require('view/frontend/connectView.php');
}

function post()
{
   $postManager = new \Quentin\Blog\Model\PostManager();
   $commentManager = new \Quentin\Blog\Model\CommentManager();

   $request2 = $postManager->getPost($_GET['id']);
   $request1 = $commentManager->getComments($_GET['id']);

   require('view/frontend/postView.php');
}

function addComment($postId, $author, $comment)
{
   $commentManager = new \Quentin\Blog\Model\CommentManager();

   $affectedLines = $commentManager->postComment($postId, $author, $comment);

   if ($affectedLines === false) {
      throw new Exception('Impossible d\'ajouter le commentaire');
  }
  else {
      Header('Location:Home-post-'. $postId);
  }

}

function changeComment($postId, $commentId, $newComment)
{
   $changeComment = new \Quentin\Blog\Model\CommentManager();

   $newComment = $changeComment->changeComment($postId, $commentId, $newComment);

   Header('Location:Home-post-'. $postId);

}

function changePage($id, $postId)
{
    $commentManager = new  \Quentin\Blog\Model\CommentManager();
    $request1 = $commentManager->changePage($id,$postId);

    require ('view/frontend/changeCommentView.php');
}




<?php

require('controller/frontend.php');

try
{
 if (isset($_GET['action']))
 {
  if ($_GET['action'] == 'listPosts') {
    listPosts();
  }
  elseif ($_GET['action'] == 'post') {
    if (isset($_GET['id']) &&  $_GET['id'] > 0)
    {
      post();
    }
    else
    {
      throw new Exception("Aucun id de billet envoyé");
    }

  }
  elseif ($_GET['action'] == 'addComment') {
   if (isset($_GET['id']) &&  $_GET['id'] > 0)
   {
    if (!empty($_POST['author']) && !empty($_POST['comment'])) {
      addcomment($_GET['id'], $_POST['author'], $_POST['comment']);
    }
    else
    {
      throw new Exception("Tous les champs ne sont pas remplis !");
    }

  }
  else
  {
   throw new Exception("Aucun identifiant de billet envoyé !");
 }
}
elseif ($_GET['action'] == 'changeView') {
  changePage($_GET['id'],$_GET['postId']);
}
elseif ($_GET['action'] == 'changeComment')
{
  if (isset($_GET['id']) && isset($_GET['postId']) && $_GET['id'] > 0)
  {
    if (!empty($_POST['newComment']) && !empty($_POST['commentId']))
    {
      changeComment($_GET['postId'], $_GET['id'], $_POST['newComment']);
    }
    else
    {
      throw new Exception("Tous les champs ne sont pas remplis !");
    }
  }
}
}

else
{
 listPosts();
}
}

catch (Exception $e) {
  require('view/frontend/errorView.php');

}


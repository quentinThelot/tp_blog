<?php
$title = 'Mon Blog';
$Subtitle = '';
$lien = '<a href="Home">Retour à la liste des billets</a>';
ob_start();
?>

<?php

while ($data2 = $request2->fetch())
{
  echo '<div class=\'news\'>';
  echo '<h3>' . htmlspecialchars($data2['title']) . ' ! le ' . htmlspecialchars($data2['date_fr']) .  '</h3>';
  echo '<p>' . htmlspecialchars($data2['content']) . '<br></p>';
}

$request2->closeCursor();


while ($data1 = $request1->fetch())
{
  echo '<br><strong>' . htmlspecialchars($data1['author']) . '</strong>' . ' le ' . htmlspecialchars($data1['date_fr2']) .
  ' (<a href="Home-changeView-' . $data1['post_id']  . '-' . $data1['id'] . '">modifier</a>)' . '<br><br><div class="center">' . htmlspecialchars($data1['comment']) . '</div><br><div class="divider"></div>';

}
$request1->closeCursor();
?>

<h3>Formulaire pour saisir votre commentaire sur ce billet !!</h3>
<br><br>

<!-- insertion d'un commentaire dans la bdd -->
<!-- champ : id_billet , auteur , commentaire , date_commentaire -->
<form action="Home-addComment-<?= $_GET['id'] ?>" method="post">
  <div>
    <label for="author">Auteur : </label>
    <input type="text" id="author" name="author" placeholder="Votre Pseudo">
  </div>
  <br><br>
  <div>
    <label for="comment">Commentaire : </label>
    <br>
    <textarea cols="100%" name="comment" id="comment" placeholder="Entrez votre commentaire"></textarea>
  </div>
  <br>
  <div>
    <input type="hidden" name="post_id" value=<?php echo $_GET['id'] ; ?>>
    <button type="submit">Envoyer</button>
  </div>
</form>
<?php
echo '</div>';
?>

<?php $content = ob_get_clean();


require('template.php'); ?>


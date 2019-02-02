<?php
$title = 'Mon Blog';
$Subtitle = 'Commentaire à modifier';
$lien = '<a href="index.php?action=post&id=' . $_GET['postId']  . '">Retour à la liste des commentaires</a>';

ob_start();
?>


<?php
while ($data1 = $request1->fetch())
{
     echo '<strong>' . htmlspecialchars($data1['author']) . '</strong>' . ' le ' . htmlspecialchars($data1['date_fr2']) . '<br><br><div class="center">' . htmlspecialchars($data1['comment']) . '</div><br><br>';
}
$request1->closeCursor();
?>


<p>Nouveau commentaire : </p>


<form action="index.php?action=changeComment&amp;id=<?= $_GET['id'] ?>&amp;postId=<?= $_GET['postId'] ?>" method="post">
     <div>
          <label for="newComment">Commentaire : </label>
          <br>
          <textarea cols="100%" name="newComment" id="newComment" placeholder="Entrez le nouveau commentaire"></textarea>
     </div>
     <div>
          <input type="hidden" name="commentId" value=<?php echo $_GET['id'] ; ?>>
          <br>
          <button type="submit">Envoyer</button>
     </div>
</form>


<?php


$content = ob_get_clean();



require('template.php'); ?>



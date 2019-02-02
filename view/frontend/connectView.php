<?php
$title = 'Mon Blog';
$Subtitle ='Derniers Billets du Blog : ';
$lien = '';

ob_start();
?>

<?php

while ($data = $request->fetch())
{
  echo '<div class=\'news\'>';
  echo '<h3>' . htmlspecialchars($data['title']) . ' ! le ' . htmlspecialchars($data['date_fr']) .  '</h3>';
  echo '<p>' . htmlspecialchars($data['content']) . '<br>
  <a href=\'index.php?action=post&amp;id=' . htmlspecialchars($data['id']) . '\'>commentaire</a>
  </p>';
  echo '</div>';
}

$request->closeCursor();

$content = ob_get_clean();



require('template.php'); ?>

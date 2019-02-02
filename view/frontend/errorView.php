<?php
$title = 'Mon Blog';
$Subtitle = 'une ERREUR est survenue !';
$lien = '<a href="index.php">Retour à la liste des billets</a>';

ob_start();
?>
<div class="error">
     <h1>ERREUR : <?php echo $e->getMessage() ?></h1>
</div>


<?php
$content = ob_get_clean();
require('template.php');
?>

<?php
  echo  "Merci " . $_POST['lastName'] . " " . $_POST['firstName'] . " de nous avoir contacté à propos de “" . $_POST['subject'] . "”.<br>Un de nos conseiller vous contactera soit à l’adresse " . $_POST['email'] . " ou par téléphone au " . $_POST['phone'] . " dans les plus brefs délais pour traiter votre demande :<br>" . $_POST['user_message'];
?>
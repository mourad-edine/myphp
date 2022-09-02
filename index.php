<?php
require 'header.php'; ?>
<body>
<form class="mt-50 ml-50" action="salut.php" method="POST">
    <div >
        <label for="email">Email</label>
        <input class="form-control color-primary " type="email" name="email" required>
        
    </div>
    <div>
        <label for="message">Votre message</label>
        <input class="form-control color-primary " type="text" name="message" required>
    </div>
    <button type="submit" class="btn btn-primary">envoyer</button>
<span class="bg-success p-2 "><?php
// submit_contact.php
if (isset($_POST['email']) || isset($_POST['message']))
{
	echo('le formulaire marche.');
    return;
}
?></span>
	
</form>
</body>
</html>
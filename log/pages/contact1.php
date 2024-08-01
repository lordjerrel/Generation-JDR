<?php

session_start();



<form method="POST" action="index.php?page=verification.php">

<p>
Nom/prénom *:<br />
<input type="text" name="nom" id="nom" placeholder="Votre Nom" />
</p>

<p>
Email *:<br />
<input type="email" name="email" id="email" placeholder="Votre Email" />
</p>

<p>
Sujet *:<br />
<input type="text" name="sujet" id="sujet" placeholder="Quel est votre sujet ?" />
</p>

<p>
Message *:<br />
<textarea id="message"  name="message" placeholder="Votre Message" /></textarea>
</p>

<h3>Recopier ce chiffre ?</h3>
<img src="index.php?page=captcha.php" /><br />
<input type="text" name="captcha" style="70px;" /><br />
<p>
Tous les champs avec une * sont obligatoires
</p>

<p>
	<input type="submit" value="Envoyez" />
</p>

</form>
?>
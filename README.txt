Voici 3 fichiers:-DB.log
		 -index.html
		 -send.php
Ces 3 fichiers permettent de recréer un exemple de phishing.

En hébergeant ces trois fichiers à l'aide de WampServer64, j'ai pu démontrer la dangerosité du Phishing.

1.Tout d'abord, l'utilisateur arrive sur 'index.html' en pensant être sur le portail de connexion officiel du CIC.
2.Souhaitant se connecter, il rentre ses identifiants et appuie sur "Se Connecter".

3.--(Si le block est décommenté dans send.php)--Une page d'erreur de maintenance apparaît alors l'invitant alors à réessayer. 
En réalité, les données qu'il a rentré dans les inputs sont enregistrées dans le fichier 'DB.log' (DataBase) 
du serveur. En cliquant sur le lien pour réessayer, il est cette fois redirigé vers le réel portail de connexion.
--(Sinon)--L'utilisateur est redirigé vers une page du site officiel, sans savoir que ses données ont été sauvegardées
entre temps sur le serveur dans le fichier 'DB.log'.

Ceci reste un exemple, qui a pour but d'inviter les utilisateurs à bien vérifier l'URL du site sur lequel ils se trouvent
lorsqu'ils rentrent des données sensibles.

PS: Ce script nécessite d'être hébergé sur un serveur pour fonctionner (j'ai utilisé Wamp64).
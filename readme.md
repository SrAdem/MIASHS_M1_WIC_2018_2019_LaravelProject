# Projet Laravel Adem GURBUZ et Orlane PITARCH (M1 MIASHS WIC - Université Grenoble Alpes)

## Guide d'installation :

1. Clôner le répertoire git à l'aide de l'exécution de la commande : 
"*git clone https://github.com/SrAdem/MIASHS_M1_WIC_2018_2019_LaravelProject.git*" 
dans le terminal dans le répertoire souhaité.

2. Installer composer : 
    * sous Linux : dans le terminal exécuter : "*apt install composer*"
    * sous windows : télécharger et lancer le fichier https://getcomposer.org/Composer-Setup.exe

3. Installer Laravel avec l'éxécution de la commande : 
"*composer global require laravel\installer*" dans le terminal.

4. Aller dans le dossier *database* situé dans le dossier issu du clonage, nommé MIASHS_M1_WIC_2018_2019_LaravelProject. Y créer un fichier vide nommé "*database.sqlite*". Copier le chemin relatif vers ce dernier (exemple : /mon/chemin/relatif/database.sqlite pour linux ou mon\chemin\relatif\database.sqlite pour Windows).

5. Ouvrir le fichier .env situé dans le dossier cloné à l'aide d'un éditeur de texte. Modifier la variable DB_BATABASE en remplaçant le commentaire par le chemin relatif vers le fichier *database.sqlite* créé précédemment.

6. Ouvrir un terminal, se déplacer dans le répertoire cloné nommé MIASHS_M1_WIC_2018_2019_LaravelProject. Lancer la migration pour créer les données de notre base de données à l'aide de la commande : "*php artisan migrate:fresh --seed*".

7. Dans le terminal, dans le répertoire cloné, lancer le serveur Laravel à l'aide de la commande : "*php artisan serve*".

8. Accéder à l'acceuil de notre blog en suivant cet URL : "*http://localhost:8000*".

## Parties implémentées :

### 1 - Gestion des commentaires :
Aller à l'URL http://localhost:8000/articles, ou cliquer sur le bouton "Articles" du menu pour en avoir la liste. 
Regarder la liste des articles, en sélectionner un, l'afficher en cliquant sur le lien "*View*" dans la colonne "*action*". Si des commentaires pour cet article ont été généré lors de la migration, ils s'affichent avec un fond gris. Sous la liste des commentaires vous pouvez en ajouter un. 
Ajouter un commentaire, peu importe le contenu du formulaire, en respectant ce qui est demandé et la correction des erreurs (les champs doivent être remplis et respecter une certaine expression régulière, vous pouvez tester cela en mettant un caractère autre que des lettres dans le titre ou en laissant un champ vide).
S'il n'y a pas de commentaire généré par la migration, vous pouvez ajouter un commentaire ou lire un autre article ayant possiblement un commentaire (il y en a 10 qui sont générés aléatoirement lors de la migration).

### 2 - CRUD des articles :
Aller à l'URL http://localhost:8000/articles, ou cliquer sur le bouton "Articles" du menu pour en avoir la liste. 

1. Ajouter un article en cliquant sur le lien "*create article*" au-dessus de la liste des articles. Pour cela, remplissez le formulaire avec des données en respectant ce qui est demandé (Attention il est demandé de mettre un titre d'au moins deux mots pour notre création des $post_name de la base de données, mais nous ne vérifions pas encore que cela est fait pour valider le formulaire). 
Si vous rentrez une adresse mail qui n'est pas dans la table *users* de la base de données, vous serez renvoyé à la page d'accueil avec un message vous disant que l'auteur n'est pas connu dans la base de données.
Vous pouvez copier une adresse mail dans la liste des articles publiés afin de tester l'ajout d'article. Celui-ci se retrouvera sur la page d'accueil et en bas de la liste de la page Articles.

2. Editer un article en cliquant sur le lien "*Edit*" dans la colonne "*action*". Changer des données dans le formulaire (l'adresse mail doit être celle d'un utilisateur connu, comme pour l'ajout d'article). Valider et observer le changement dans la liste des articles.

3. Supprimer un article en cliquant sur le bouton "*Delete*" dans la colonne "*action*". Constater sa disparition de la liste et de la base de données et le message confirmant la réussite de cette action sur la page Articles.

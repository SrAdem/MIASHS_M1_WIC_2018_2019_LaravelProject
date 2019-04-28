# Projet Laravel Adem GURBUZ et Orlane PITARCH (M1 MIASHS WIC - Université Grenoble Alpes)

## Guide d'installation :

1. Clôner le répertoire git à l'aide de l'exécution de la commande : 
"*git clone https://github.com/SrAdem/MIASHS_M1_WIC_2018_2019_LaravelProject.git*" 
dans le terminal dans le répertoire souhaité.

2. Installer composer : 
    * sous Linux : dans le terminal exécuter : apt install composer
    * sous windows : télécharger et lancer le fichier Composer-Setup.exe

3. Installer Laravel avec l'éxécution de la commande : 
"*composer global require laravel\installer*" dans le terminal.

4. Aller dans le dossier *database* situé le dossier cloné nommé MIASHS_M1_WIC_2018_2019_LaravelProject. Y créer un fichier vide nommé " *database.sqlite* ". Copier le chemin relatif vers ce dernier (exemple : /mon/chemin/relatif/database.sqlite pour linux ou mon\chemin\relatif\database.sqlite).

5. Ouvrir le fichier .env situé dans le dossier cloné à l'aide d'un éditeur de texte. Modifier la variable DB_BATABSE en remplaçant le commentaire par le chemin relatif vers le fichier *database.sqlite* créé précédemment.

6. Ouvrir un terminal, se déplacer dans le répertoire cloné nommé MIASHS_M1_WIC_2018_2019_LaravelProject. Lancer la migration pour créer les données de notre base de données à l'aide de la commande : "*php artisan migrate:fresh --seed*".

7. Dans le terminal, dans le repertoire cloné, lancer le serveur Laravel à l'aide de la commande : " *php artisan serve* ".

8. Sur un navigateur web, rentrer l'URL : "*localhost:8000*". Vous arriverez sur l'acceuil de notre blog.

## Parties implémentées :

### 1 - Gestion des commentaires :

### 2 - CRUD des articles :

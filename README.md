## Cours symfony


Create projet :

        /usr/local/bin/composer create-project symfony/skeleton /home/moustache/Documents/symfony/amazone  --no-interaction
        
Init git :         
        
        git init 
        git remote add origin git@github.com:MoustacheTheCat/cours-symfony.git
        git push -u origin main

Lancer le serveur :

        symfony server:start

Stoper le serveur :

        symfony server:stop

Crée un controller :

        symfony console make:controller

renseigner ensuite le nom du controller


Installer les packages :

Console de debug:

        composer require symfony/profiler-pack 
    
Crée les controller:

        composer require symfony/maker-bundle --dev

Enabling TLS:

        symfony server:ca:install
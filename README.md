## Cours symfony


create projet 
        /usr/local/bin/composer create-project symfony/skeleton /home/moustache/Documents/symfony/amazone  --no-interaction
        git init 
        git remote add origin git@github.com:MoustacheTheCat/cours-symfony.git
        git push -u origin main
        
        

lancer le serveur :

        symfony server:start

stoper le serveur :

        symfony server:stop

crée un controller :

        symfony console make:controller


installer les packages :

    console de debug:

        composer require symfony/profiler-pack 
    
    crée les controller:

        composer require symfony/maker-bundle --dev

    Enabling TLS:

        symfony server:ca:install
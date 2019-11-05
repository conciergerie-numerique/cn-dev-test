# cn-dev-test

Le test est formulé sous forme d'exercices à réaliser sur ce projet en Symfony 4 avec le module Webpack intégré.

L'énoncé du test est consultable sur la route / du projet.

Pour lancer le projet, il suffit d'exécuter :

```
# Install composer dependencies
$ composer install

# Composer will show an error if there's a php extension missing. Installation can be performed 
# using the system package manager. For instance, for Ubuntu and apt:
$ sudo apt install php-ext

# Install npm dependencies
$ npm install 

# Run Webpack DevServer (in one terminal)
$ npm run dev-server

# Run Symfony php server (in another terminal)
$ bin/console server:run
```

Normalement, l'application sera disponible sur http://localhost:8000.

Le fichier .env est fourni dans le projet pour simplifier la configuration initiale.
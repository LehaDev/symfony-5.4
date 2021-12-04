# symfony 5.4 avec php 8

Projet en symfony 5.4 avec un docker-compose.yml  
Qui vous permet d'avoir un docker Symfony, MySQL et PhpMyAdmin  

Pour installer les dockers faire :  
  * docker-compose up -d  
  
Aller dans le docker : 
  * docker exec -it dockername /bin/bash
  * puis faire composer install

Une fois les dockers créer, pour voir la bdd avec phpmyadmin aller sur :  
  * http://localhost:8081  
  * utiliseur : root  
Il y a pas de mot de passe  

Pour tester que le docker de symfony fonctionne correctement aller sur :  
  http://localhost:8000/index.php/health/ping  
Vous devriez avoir une réponse avec un 'pong'  

Si tout est bon *ENJOY*

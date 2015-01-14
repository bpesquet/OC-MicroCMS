# OC-MicroCMS

Support du cours OpenClassrooms [Evoluez vers une architecture PHP professionnelle](http://openclassrooms.com/courses/evoluez-vers-une-architecture-php-professionnelle).

## Présentation

OC-MicroCMS est une application Web minimaliste de type [CMS](http://fr.wikipedia.org/wiki/Syst%C3%A8me_de_gestion_de_contenu). Elle est construite par itérations successives. Chaque branche de ce dépôt correspond au résultat obtenu à la fin d'une itération. 

L'application finale est [accessible en ligne](http://oc-microcms.herokuapp.com/).

## Architecture 

Voici les principales caractéristiques de l'architecture :

* séparation des responsabilités selon le principe Modèle-Vue-Contrôleur ;
* intégration du micro-framework [Silex](http://silex.sensiolabs.org/) ;
* modélisation objet du domaine et de l'accès aux données ;
* utilisation des espaces de noms et chargement automatique des classes grâce à [Composer](https://getcomposer.org/) ;
* intégration du moteur de templates [Twig](http://twig.sensiolabs.org/) pour faciliter l'écriture des vues ;
* présentation moderne et adaptée au terminal utilisé (*responsive design*) grâce au framework Web [Bootstrap](http://getbootstrap.com/) ;
* gstion avancée de la sécurité et des formulaires grâce aux composants du framework [Symfony](http://symfony.com) ;
* back-office d'administration ;
* tests fonctionnels automatisés utilisant [PHPUnit](https://phpunit.de/) ;
* journalisation avec [Monolog](https://github.com/Seldaek/monolog) et gestion des erreurs ;
* API utilisant le format JSON.

## Contributions

L'application OC-MicroCMS est publiée sous la licence [MIT](http://choosealicense.com/licenses/mit/). Les contributions à son amélioration via les *issues* ou les *pull requests* sont les bienvenues !

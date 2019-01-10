# Q-Check Web Application
## Technologies :
- Laravel 5.7
- Mysql 5.7
- PHP 7.1
- Vuejs 2.5
- Bootstrap 4
- nwidart.com/laravel-modules 4
- Architecture modulaires pour ajouter de nouvelles fiches*

## Features :
### Administrateur :

* Ajouter/Supprimer un compte utilisateur
* Modifier un compte utilisateur
* Lister les comptes utilisateur
* Réinitialiser le mot de passe
* Suspendre le compte utilisateur
* Historique des connexions des utilisateurs
* Ajouter/Supprimer une unité de contrôle
* Modifier une unité de contrôle
* Lister les unités de contrôle
* Ajouter/Supprimer un agent de contrôle (Matricule)
* Modifier un agent de contrôle
* Lister les agents de contrôle
* Affecter/Retirer une unité de contrôle d'un agent de contrôle
* Affecter/Retirer un type de fiche à un agent de contrôle avec une *fréquence *de saisie ou *une liste de date*.
* Consulter le tableau de bord avec les statistiques
* Suivi descendant des contrôles par type de fiche, par agent de saisie et par unité de contrôle avec la possibilité de filtrer par date de saisie.
* Consulter la liste des fiches saisies par type de fiche, par unité et par agent de saisie avec possibilité de filtrer par date
* Consulter le détail d'une fiche saisie
* Remplir une fiche
* Sauvegarder l'état d'avancement de la saisie d'une fiche
* Valider/Clôturer la saisie d'une fiche
* Rouvrir une fiche clôturée.
* Modifier les informations d'une fiche

### Contrôleur :

* Suivi descendant des contrôles par type de fiche, par agent de saisie et par unité de contrôle avec la possibilité de filtrer par date de saisie.
* Consulter la liste des fiches saisies par type de fiche, par unité et par agent de saisie avec possibilité de filtrer par date
* Consulter le détail d'une fiche saisie
* Rouvrir une fiche clôturée

### Agent de contrôle :

* Consulter la liste fiches saisies par le même agent
* Consulter le détail d'une fiche saisie par le même agent
* Remplir une fiche
* Sauvegarder l'état d'avancement de la saisie d'une fiche
* Valider/Clôturer la saisie d'une fiche

### Gestion du référentiel :

* Ajouter/Supprimer une unité de contrôle
* Modifier une unité de contrôle
* Lister les unités de contrôle
* Ajouter/Supprimer un agent de contrôle
* Modifier un agent de contrôle
* Lister les agents de contrôle
* Affecter/Retirer une unité de contrôle d'un agent de contrôle
* Affecter/Retirer un type de fiche à un agent de contrôle.

### Statistiques :

* Consulter le tableau de bord avec les statistiques

### Lecture seule :

* Lister les unités de contrôle
* Lister les agents de contrôle
* Suivi descendant des contrôles par type de fiche, par agent de saisie et par unité de contrôle avec la possibilité de filtrer par date de saisie.
* Consulter la liste des fiches saisies par type de fiche, par unité et par agent de saisie avec possibilité de filtrer par date
* Consulter le détail d'une fiche saisie

## Modules :
- Les modules heritent tous du layout global directement
- Les modules supposent que les assets Bootstrap 4, JQuery, Axios sont assuré globalement par l'application mére.
- Chaque module créer sa propre instance Vue dans un namespace globle avec le même nom que le module.
- L'instance Vue de chaque module point vers un element avec l'id composé du nom du module avec le prefixe `-module`

### Agent contrôle
### Unité de contrôle
### Utilisateurs
### Tableau de bord

## License

Nickel IT SARL
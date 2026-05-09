# AutoMarket — Plateforme de vente de véhicules d'occasion

> **Projet WE4A / SI40** — Application web développée dans le cadre des modules WE4A (Développement Web) et SI40 (Systèmes d'Information) de l'UTBM.

---

## 1. Présentation du projet

**AutoMarket** est une plateforme web complète de mise en relation entre vendeurs et acheteurs de véhicules d'occasion. Elle permet aux utilisateurs de publier, rechercher, filtrer et trier des annonces automobiles, tout en offrant un système de messagerie intégrée et un mécanisme d'évaluation par avis.

Le projet s'inscrit dans une démarche professionnelle de développement logiciel : architecture MVC, gestion de base de données relationnelle, sécurité des accès, et interface utilisateur responsive.

---

## 2. Stack technique

| Couche          | Technologie                        |
|-----------------|------------------------------------|
| **Backend**     | PHP 8.3 — Symfony 8                |
| **Frontend**    | HTML5, CSS (TailwindCSS), JS Vanilla |
| **Base de données** | MySQL / MariaDB (PDO)          |
| **Serveur**     | Symfony CLI (`symfony serve`)      |
| **Versioning**  | Git / GitHub                       |

---

## 3. Architecture du projet

Le projet suit l'architecture **MVC** (Modèle – Vue – Contrôleur) imposée par le framework Symfony.

```
Projet_WE4A/
├── config/             # Configuration : routes, services, accès BDD
├── public/             # Point d'entrée web et ressources statiques
│   ├── css/            # Feuilles de style
│   ├── js/             # Scripts JavaScript
│   └── uploads/        # Photos uploadées par les utilisateurs
├── src/                # Code source PHP (logique métier)
│   ├── Controller/     # Contrôleurs (gestion des requêtes HTTP)
│   ├── Entity/         # Entité User (authentification Symfony)
│   ├── Form/           # Formulaires Symfony (AnnonceType)
│   ├── Repository/     # Accès aux données (requêtes SQL via PDO)
│   ├── Security/       # Authentification (UserProvider, Authenticator)
│   ├── Service/        # Services métier (DatabaseService)
│   └── Twig/           # Extensions Twig (variables globales)
├── templates/          # Vues Twig (rendu HTML)
│   ├── admin/          # Interface d'administration
│   ├── annonce/        # Création, modification, détail d'annonce
│   ├── avis/           # Système d'avis
│   ├── favoris/        # Gestion des favoris
│   ├── messagerie/     # Messagerie interne
│   └── user/           # Profil utilisateur public
└── var/                # Cache et logs de l'application
```

---

## 4. Modèle de données

La base de données relationnelle comporte les tables principales suivantes :

| Table                | Description                                                |
|----------------------|------------------------------------------------------------|
| `utilisateur`        | Comptes utilisateurs (nom, prénom, email, mot de passe, rôle) |
| `annonce`            | Annonces de véhicules (prix, kilométrage, état, statut…)   |
| `photo`              | Photos liées aux annonces                                  |
| `marque`             | Catalogue des marques automobiles                          |
| `modele`             | Modèles de véhicules, liés aux marques                     |
| `generation`         | Générations de modèles                                     |
| `version`            | Versions spécifiques (motorisation, transmission…)         |
| `moteur`             | Caractéristiques techniques des moteurs                    |
| `avis_utilisateur`   | Avis/notes sur les vendeurs                                |
| `avis_modele`        | Avis/notes sur les modèles de véhicules                    |
| `message`            | Messages de la messagerie interne                          |
| `favori`             | Annonces mises en favoris par les utilisateurs             |
| `visite_annonce`     | Suivi des vues par annonce                                 |

---

## 5. Fonctionnalités implémentées

### 5.1 Gestion des utilisateurs et rôles

Le système gère **4 niveaux d'accès** :

| Rôle               | Droits                                                                        |
|---------------------|-------------------------------------------------------------------------------|
| **Administrateur**  | Gestion des utilisateurs, modération des annonces et avis, statistiques       |
| **Entreprise**      | Publication et gestion de ses propres annonces, messagerie                    |
| **Membre**          | Publication d'annonces, favoris, messagerie, avis                            |
| **Visiteur**        | Consultation du catalogue, recherche, filtres et tri                         |

### 5.2 Catalogue et annonces

- **Publication** : formulaire complet avec sélection marque → modèle → génération → version (cascade dynamique via TomSelect).
- **Fiche détaillée** : galerie photo, spécifications techniques complètes (moteur, transmission, consommation, dimensions…), avis du modèle, coordonnées du vendeur.
- **Gestion** : modification, mise en pause, reprise, marquage « vendu », suppression.
- **Compteur de vues** : suivi du nombre de consultations par annonce.

### 5.3 Recherche, filtres et tri

- **Filtres dynamiques** (AJAX, sans rechargement) : marque, modèle, prix min/max, kilométrage max, année min/max.
- **Tri** : par nouveauté, prix croissant/décroissant, note vendeur, kilométrage.

### 5.4 Système d'avis

Deux types d'avis indépendants :
- **Avis vendeur** : note sur 5 étoiles + commentaire, visible sur le profil public du vendeur.
- **Avis modèle** : note sur 5 étoiles + commentaire, accessible depuis la fiche de toute annonce du même modèle.

### 5.5 Messagerie interne

- Envoi de messages entre acheteurs et vendeurs depuis la fiche annonce.
- Boîte de réception avec conversations regroupées par annonce.
- Indicateur de messages non lus dans le header (point rouge dynamique).

### 5.6 Favoris

- Ajout/retrait de favoris en un clic (icône cœur sur chaque annonce).
- Page dédiée listant tous les favoris de l'utilisateur.

### 5.7 Administration

- **Gestion des annonces** : suspension avec motif, réactivation, suppression.
- **Gestion des utilisateurs** : consultation, suppression (cascade).
- **Statistiques** : graphiques et métriques (nombre d'annonces, inscriptions, top marques…).

### 5.8 Profil utilisateur

- **Profil public** : nom, prénom, date d'inscription, note moyenne, avis reçus, annonces actives.
- **Paramètres** : modification du nom, prénom, email, téléphone, mot de passe. Suppression de compte.

---

## 6. Sécurité

| Mesure                          | Implémentation                                               |
|----------------------------------|--------------------------------------------------------------|
| Hachage des mots de passe       | `password_hash()` avec algorithme bcrypt via Symfony Security |
| Protection CSRF                 | Tokens CSRF sur tous les formulaires sensibles               |
| Contrôle d'accès                | Attribut `#[IsGranted]` sur chaque route protégée            |
| Requêtes préparées              | PDO avec paramètres liés (protection contre les injections SQL) |
| Validation des uploads          | Vérification de l'extension et de la taille des fichiers     |
| Filtrage des tris               | Liste blanche côté serveur pour les paramètres de tri        |

---

## 7. Installation et déploiement

### Prérequis

- PHP ≥ 8.2
- Composer
- MySQL / MariaDB
- Symfony CLI (optionnel, recommandé)

### Installation

```bash
# 1. Cloner le dépôt
git clone https://github.com/Extremis-Vision/Projet_WE4A.git
cd Projet_WE4A

# 2. Installer les dépendances
composer install

# 3. Configurer la base de données
#    Modifier le fichier .env avec vos identifiants :
#    DATABASE_URL="mysql://user:password@127.0.0.1:3306/automarket"

# 4. Importer le schéma SQL
#    Exécuter le script SQL fourni dans votre client MySQL/phpMyAdmin

# 5. Lancer le serveur de développement
symfony serve
# ou
php -S localhost:8000 -t public/
```

L'application est alors accessible à l'adresse : `http://localhost:8000`


---
## 8. Mot de passe utilisateur par defaut 

| Rôle           | Nom               | Email                    | Mot de passe |
|----------------|-------------------|--------------------------|--------------|
| Administrateur | AutoMarket Admin  | admin@automarket.fr      |  password            |
| Acheteur       | Emma Moreau       | emma.moreau@email.fr     |    password          |
| Acheteur       | Lucas Simon       | lucas.simon@email.fr     |     password         |
| Acheteur       | Camille Laurent   | camille.laurent@email.fr |     password         |
| Acheteur       | Antoine Durand    | antoine.durand@email.fr  |    password          |
| Acheteur       | Sarah Garnier     | sarah.garnier@email.fr   |   password           |
| Acheteur       | Bastien Heitzmann | bastien@heitzmann.fr     |   azertyuiop           |
| Acheteur       | Blusk Atsiz       | blusk@mail.fr            |    blusk12345          |
| Acheteur       | Jean Dujardin     | jean@dujardin.fr         |    azertyuiop          |
| Entreprise     | Akram Ojjeh       | akram@ojjeh.fr           |       azertyuiop       |

---

## 9. Workflow Git

Le projet utilise un workflow par branches :

| Branche          | Rôle                                               |
|------------------|-----------------------------------------------------|
| `main`           | Branche de production, stable                       |
| `feature/*`      | Branches de développement par fonctionnalité        |

**Règle** : aucun push direct sur `main`. Toute modification passe par une branche `feature/`, puis est mergée après validation.

---

## 10. Ressources et références

| Ressource       | Lien                                                                                              |
|-----------------|---------------------------------------------------------------------------------------------------|
| **Maquettes**   | [Figma](https://www.figma.com/design/hLAp3fQ61nuCg0xQC24zj1/Untitled?node-id=0-1&t=dJgG43q2Ze8Tpgo3-1) |
| **Prototypage** | [Stitch](https://stitch.withgoogle.com/projects/15741036538475195075)                             |
| **Dépôt Git**   | [GitHub](https://github.com/Extremis-Vision/Projet_WE4A)                                         |
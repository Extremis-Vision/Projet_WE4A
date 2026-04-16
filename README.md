## Consignes ## 
PAS DE PUSH dans le main sans l'avis de tous le monde pour des modifications fonctionnel au niveau de l'applciation. Des branches individuel de test, puis un push. 

## Architecture du projet : ##
- config : configuration des routes services et accès à la BDD 
- public : contient les fichiers statiques publique (html, css, js)
- src : contient les fichiers sources de l'application (controllers, models, services)
- templates : contient les fichiers de templates pour le rendu des pages (html, css, js)
- var : cache et log de l'application

## Fonctionnalités : ##
### **3 types d'utilisateurs :**

- **Administrateur** :
    - gère les utilisateurs
    - valide/supprime les annonces
    - modère les avis
    - accède aux stats globales
- **Vendeur (membre)** :
    - crée et gère (changes les photos, prix, description) ses annonces
    - supprime ses annonce
    - upload des photos
    - reçoit des messages et répond
    - a un profil public noté
- **Acheteur (membre)** :
    - consulte les offres
    - met en favoris
    - contacte les vendeurs
    - laisse des reviews
- **Visiteur (sans compte)** :
    - consulte les offres
    - recherche
    - filtre
    - tri
    - consulte les fiches détaillées
    - consulte les reviews

### **Catalogue public (tout compte et sans compte) :**

- Recherche (marque, modèle, ville)
- Filtres : prix min/max, kilométrage, année, carburant, boîte de vitesse
- Tri : prix croissant/décroissant, date de publication, note vendeur
- Fiche détaillée : galerie photos, specs techniques, reviews du modèle

### **Système de reviews :**

- Review du vendeur (sérieux, réactivité, honnêteté) → note /5
- Review du modèle de voiture (fiabilité, confort...) → utile même sur d'autres annonces

## Ressources : ##
figma : https://www.figma.com/design/hLAp3fQ61nuCg0xQC24zj1/Untitled?node-id=0-1&t=dJgG43q2Ze8Tpgo3-1

## Stack ##
- PHP Symfony 8 
- HTML
- CSS : tailwind
- JS : vanilla

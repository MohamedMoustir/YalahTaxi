# GrandTaxiGo

## Contexte du projet
🚖 **GrandTaxiGo** est une plateforme permettant la réservation de grands taxis pour des trajets interurbains. L'objectif est de permettre aux passagers de réserver des trajets et de trouver des chauffeurs disponibles pour des trajets spécifiques. En parallèle, les chauffeurs pourront publier leurs disponibilités et gérer leurs trajets.

## Fonctionnalités principales
### Authentification et compte
- **Création de compte** : En tant qu'utilisateur (passager ou chauffeur), je veux créer un compte avec une photo de profil obligatoire et mes informations personnelles.
- **Connexion** : En tant qu'utilisateur, je veux me connecter avec mes identifiants pour accéder à mon compte et gérer mon profil.

### Réservation et gestion des trajets
- **Réservation** : En tant que passager, je veux réserver un taxi en indiquant la date, le lieu de prise en charge et la destination.
- **Historique des trajets** : En tant qu'utilisateur, je veux consulter mon historique de trajets (réservations pour le passager, courses effectuées pour le chauffeur).
- **Annulation** : En tant que passager, je veux annuler une réservation dans un délai déterminé (avant une heure de départ).
- **Filtrage des chauffeurs** : En tant que passager, je veux filtrer les chauffeurs par localisation et disponibilité.
- **Gestion des réservations pour chauffeurs** : En tant que chauffeur, je souhaite pouvoir accepter ou refuser les réservations. Toutes les réservations dépassant leur heure de départ sans acceptation ou annulation par le chauffeur seront automatiquement annulées.
- **Mise à jour des disponibilités** : En tant que chauffeur, je veux mettre à jour mes disponibilités (L’automatisation des disponibilités est facultative).

### Bonus
- **Email pour le chauffeur** : Lors d'une nouvelle demande de réservation, le chauffeur recevra un email.
- **Email pour le passager** : Lors de l'acceptation ou de l'annulation de sa réservation, le passager recevra un email.
- **Notifications** : Une notification sera envoyée au passager et au chauffeur avant l’annulation automatique d’une réservation.
- **Automatisation des disponibilités des chauffeurs**.

## Technologies utilisées
- **Backend** : Laravel 11
- **Base de données** : PostgreSQL
- **Authentification** : Laravel Sanctum
- **Emails** : Laravel Mail
- **Notifications** : Laravel Notifications
- **Tests** : PHPUnit
- **Conteneurisation** : Laravel Sail (optionnel)

## Installation

### Prérequis
- PHP 8.2 ou supérieur
- Composer
- Docker (si vous utilisez Laravel Sail)
- PostgreSQL

### Étapes d'installation

1. Clonez le repository :
   ```bash
   git clone https://github.com/username/grandtaxigo.git
   cd grandtaxigo

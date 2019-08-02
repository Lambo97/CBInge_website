# New website of the CB ingé

Faire juste un pull du repository pour accéder au projet.

## Database

Pour la database vous devez créer une table sur PhpMyAdmin `cbinge`.
Vous devez ensuite aller dans le fichier `.env` et modifier la partie sur la DB pour mettre le login et le mot de passe de votre DB locale.

Une fois que c'est connecté il faudra faire
```bash
php artisan migrate
```
pour importer toutes les tables et leurs structures. Les tables seront vides.

## Package

Pour utiliser le site il faudra utiliser plusieurs package.

### Full calendar
```bash
composer require maddhatter/laravel-fullcalendar
```

### Purifier
```bash
composer require mews/purifier
```

### OneSignal Notification
```bash
composer require berkayk/onesignal-laravel
```

### OneSignal Notification
Attention ne pas oublier de faire 
```bash
composer update
```
pour updater les packages

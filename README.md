# New website of the CB ingé

Faire juste un pull du repository pour accéder au projet.

## Database

Pour la database vous devez creer une table sur PhpMyAdmin `cbinge`.
Vous devez ensuite aller dans le fichier `.env` et modifier la partie sur la DB pour mettre le login et le mot de passe de votre DB locale.

Une fois que c'est connecté il faudra faire 
```bash
php artisan migrate
```
pour importer toutes les tables et leur structures. Les tables seront vides.

## Package

Pour utiliser le site il faudra utiliser plusieur package. 

### Full calendar
```bash
composer require maddhatter/laravel-fullcalendar
```

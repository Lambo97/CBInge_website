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

Il est important d'importer la table `menu` depuis le fichier `menu.sql` et la table `sous_menu` depuis le fichier `sous_menu.sql`.

Vous pouvez également importer les tables `users`, `bleu_parrain` et `fonction_user` depuis les fichier SQL. Vous pourrez alors vous connecter grâce à vos identifiant normaux (il faudra reset votre mot de passe). Vous n'aurez pas les photos de profil, si vous les voulez, demandez les moi.

## Package

Pour utiliser le site il faudra utiliser plusieurs package.

### Purifier
```bash
composer require mews/purifier
```

### OneSignal Notification
```bash
composer require berkayk/onesignal-laravel
```

### Intervention image
```bash
composer require intervention/image
```

### VueJS Audio
```bash
npm install vue-audio --save 
```

### Remarque
Attention ne pas oublier de faire 
```bash
composer update
```
pour updater les packages

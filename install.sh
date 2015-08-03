# SCRIPT POUR DEPLOYER UN BDD

echo "DROP DATABASE IF EXISTS conference" | mysql --user=root --password=root

echo "CREATE DATABASE conference DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci" | mysql --user=root --password=root


# DONNE TOUS LES PRIVILEGES SUR LES TABLES DE LA BDD CONFERENCE A L'UTILISATEUR TONY

echo "GRANT ALL PRIVILEGES ON conference.* to 'tony'@'localhost' IDENTIFIED BY 'tony' WITH GRANT OPTION" | mysql --user=root --password=root


# MIGRATION LARAVEL

# composer install

php artisan migrate:refresh --seed

php artisan db:seed --class=MailTableSeeder

# php artisan serv
**Download Composer dependencies**

```
composer install
```

**Create database and load fixtures**

```
bin/console doctrine:database:create
bin/console doctrine:migration:migrate -n
bin/console doctrine:fixtures:load -n
```

**Start the server**

```
symfony serve -d
```
**Login**

```
Email: cheeselover1@example.com or mrcheese9000@example.com
Password: pass
```
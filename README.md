Perkbox test 1
===================


This is the result of the task 1 of the PerkBox test. The system uses an sqlite database stored in `app/Resources/database/database.sqlite`.


Requirements
-------------

- Php 7
- php-sqlite extension http://php.net/manual/en/sqlite.installation.php
- composer https://getcomposer.org/

Installation
-------------
- Run `composer install`
- Run `bin/console doctrine:schema:create` to create the tables in the db.
- Load the fixtures with `bin/console doctrine:fixtures:load`. This will populate the database with brands, the brands will have names like this: "Brand1", "Brand2",....
- Run the server with `bin/console server:run`

Usage
---------
- Open a web client and load **GET** `/coupons`
- The following parameters can be added to the query
	- brand: `/coupons?brand=Brand1`
    - value: `/coupons?value=10`
    - limit: `/coupons?limit=10`
 The parameters and be used together separating them with the **&** symbol. 
Perkbox test 1
===================


This is the result of the task 1 of the PerkBox test. The system uses an sqlite database stored in `app/Resources/database/database.sqlite`.


Requirements
-------------

- Php 7
- composer https://getcomposer.org/

Installation
------------- 
- Install and follow the instructions to run this project https://github.com/MiguelAlcaino/perkbox2
- Run `composer install`
- Run the server with `bin/console server:run`

Usage
---------
- Open a web client and load **GET** `/coupons`
- The following parameters can be added to the query
	- brand: `/coupons?brand=Brand1`
    - value: `/coupons?value=10`
    - limit: `/coupons?limit=10`
 The parameters and be used together separating them with the **&** symbol. 
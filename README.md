Unit testing voorbeeld
======================

Voorbereiding
-------------

1. Installeer Netbeans (PHP mode)
2. Installeer PHP
3. Installeer Composer
4. Installeer Git

Dit project overnemen
---------------------

1. git clone https://github.com/LucidTaZ/vierkant.git (maakt een "vierkant"
   directory aan)
2. In Netbeans een nieuw project aanmaken ("PHP project with existing sources")
3. In console uitvoeren: "composer install" (zodat hij vendor maakt)
   Dat moet vanzelf al --dev gebruiken, zo niet, "composer install --dev"
   Anders krijg je geen PHPUnit.

Eerste executie
---------------

1. In console uitvoeren: vendor/phpunit/phpunit/phpunit
2. Geeft een "OK (1 test, 2 assertions)"

Netbeans instellen
------------------

1. Naar properties van project (via rechtsklik)
2. Naar "Testing"
3. Test directory invullen ("Add Folder...", wijzen naar de "tests" directory)
4. "PHPUnit" aanvinken
5. Naar "Testing -> PHPUnit"
6. "Use XML Configuration" aanvinken (phpunit.xml invullen)
7. "Use Custom PHPUnit Script" aanvinken (vendor/phpunit/phpunit/phpunit invullen)
8. "Run All *Test.php Files in Project Using PHPUnit" aanvinken
9. Rechtsklik op project -> "Test"

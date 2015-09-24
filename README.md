Multiton pattern for PHP
==========

Class Multiton.php can help you when you want get Singleton of your class.
---------------------

Note that:

1. the __construct method in YourSingleton may not be

2. if YourSingleton can contain __construct method, that will be started only once (when YourSingleton will be created the first time)

3. now you can not use operator new (because it will call PHP Fatal error), example:

```
$x = new YourSingleton();
```

will print:
```
PHP Fatal error:  Call to protected YourSingleton::__construct() from invalid context
```

instead, use:
```
$object = YourSingleton::getInstance();
```

Please, look at the examples and run them:
```
php Example.php
```
[![tests](https://github.com/Dispify/class_aliases/actions/workflows/tests.yml/badge.svg)](https://github.com/Dispify/class_aliases/actions/workflows/tests.yml)
[![GitHub license](https://img.shields.io/github/license/Dispify/class_aliases)](https://github.com/Dispify/class_aliases/blob/master/LICENSE)

![Packagist PHP Version Support](https://img.shields.io/packagist/php-v/dispify/class_aliases)

class_aliases
=

There is a **class_parents**, **class_uses**, **class_implements** function in the PHP. 
PHP allows to declare aliases of class but there is no **class_aliases** function
which returns all aliases for specified class name. This library adds this functionality.

Getting Started
-

```
$ composer require dispify/class_aliases
```

```
class A {}
class_alias(A::class, 'Alias');

Dispify\class_aliases(A::class); // returns ['alias']
```
> :warning: The class is created by **class_alias** is lowercased!

.. _can\'t-inherit-abstract-function-%s::%s()-(previously-declared-abstract-in-%s):

Can\'t inherit abstract function %s::%s() (previously declared abstract in %s)
------------------------------------------------------------------------------
 
.. meta::
	:description:
		Can\'t inherit abstract function %s::%s() (previously declared abstract in %s): In PHP 7.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Can\&#039;t inherit abstract function %s::%s() (previously declared abstract in %s)
	:og:description: In PHP 7
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/can%27t-inherit-abstract-function-%25s%3A%3A%25s%28%29-%28previously-declared-abstract-in-%25s%29.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Can\'t inherit abstract function %s::%s() (previously declared abstract in %s)
	:twitter:description: Can\'t inherit abstract function %s::%s() (previously declared abstract in %s): In PHP 7
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

Description
___________
 
In PHP 7.0 and 7.1, it was not possible to inherit an abstract class. In PHP 7.2, it was made possible.

Example
_______

.. code-block:: php

   <?php
   
   abstract class A           { abstract function bar(stdClass $x);  }
   abstract class B extends A { abstract function bar($x): stdClass; }
   
   //   Fatal error: Can't inherit abstract function A::bar()
   ?>


Literal Examples
****************
+ Can\'t inherit abstract function B::bar() (previously declared abstract in A)

Solutions
_________

+ Upgrade to PHP 7.2 or later.
+ Remove the ``abstract`` keyword.
+ Remove the method.

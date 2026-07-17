.. _reflectionclass::getconstant()-for-a-non-existent-constant-is-deprecated,:

ReflectionClass::getConstant() for a non-existent constant is deprecated, use ReflectionClass::hasConstant() to check if the constant exists
--------------------------------------------------------------------------------------------------------------------------------------------
 
.. meta::
	:description:
		ReflectionClass::getConstant() for a non-existent constant is deprecated, use ReflectionClass::hasConstant() to check if the constant exists: ``ReflectionClass::getConstant()`` returns ``false`` both when the requested constant does not exist and when the constant&#039;s actual value is ``false``, so the return value alone cannot tell the two cases apart.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: ReflectionClass::getConstant() for a non-existent constant is deprecated, use ReflectionClass::hasConstant() to check if the constant exists
	:og:description: ``ReflectionClass::getConstant()`` returns ``false`` both when the requested constant does not exist and when the constant&#039;s actual value is ``false``, so the return value alone cannot tell the two cases apart
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/reflectionclass%3A%3Agetconstant%28%29-for-a-non-existent-constant-is-deprecated%2C.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: ReflectionClass::getConstant() for a non-existent constant is deprecated, use ReflectionClass::hasConstant() to check if the constant exists
	:twitter:description: ReflectionClass::getConstant() for a non-existent constant is deprecated, use ReflectionClass::hasConstant() to check if the constant exists: ``ReflectionClass::getConstant()`` returns ``false`` both when the requested constant does not exist and when the constant's actual value is ``false``, so the return value alone cannot tell the two cases apart
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/reflectionclass::getconstant()-for-a-non-existent-constant-is-deprecated,.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/reflectionclass::getconstant()-for-a-non-existent-constant-is-deprecated,.html","name":"ReflectionClass::getConstant() for a non-existent constant is deprecated, use ReflectionClass::hasConstant() to check if the constant exists","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 15 Jul 2026 17:21:07 +0000","dateModified":"Wed, 15 Jul 2026 17:21:07 +0000","description":"``ReflectionClass::getConstant()`` returns ``false`` both when the requested constant does not exist and when the constant's actual value is ``false``, so the return value alone cannot tell the two cases apart","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/reflectionclass::getconstant()-for-a-non-existent-constant-is-deprecated,.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
``ReflectionClass::getConstant()`` returns ``false`` both when the requested constant does not exist and when the constant's actual value is ``false``, so the return value alone cannot tell the two cases apart. Calling it for a constant that does not exist is now deprecated in favour of an explicit existence check.

Example
_______

.. code-block:: php

   <?php
   
   class X {
       const FOO = 1;
   }
   
   $class = new ReflectionClass(X::class);
   $value = $class->getConstant('BAR');
   var_dump($value);
   
   ?>


Literal Examples
****************
+ ReflectionClass::getConstant() for a non-existent constant is deprecated, use ReflectionClass::hasConstant() to check if the constant exists

Solutions
_________

+ Call ``ReflectionClass::hasConstant()`` first, and only call ``getConstant()`` once existence is confirmed.

Related Error Messages
______________________

+ :ref:`reflectionproperty::getdefaultvalue()-for-a-property-without-a-default-value-is-deprecated,`

See Also
________

+ `ReflectionClass::getConstant <https://www.php.net/manual/en/reflectionclass.getconstant.php>`_
+ `ReflectionClass::hasConstant <https://www.php.net/manual/en/reflectionclass.hasconstant.php>`_

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See `ReflectionClass::getConstant <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/ReflectionClass::getConstant.html>`_.

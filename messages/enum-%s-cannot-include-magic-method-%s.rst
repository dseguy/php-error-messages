.. _enum-%s-cannot-include-magic-method-%s:

Enum %s cannot include magic method %s
--------------------------------------
 
.. meta::
	:description:
		Enum %s cannot include magic method %s: Some magic methods are not allowed in an enumeration.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Enum %s cannot include magic method %s
	:og:description: Some magic methods are not allowed in an enumeration
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/enum-%25s-cannot-include-magic-method-%25s.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Enum %s cannot include magic method %s
	:twitter:description: Enum %s cannot include magic method %s: Some magic methods are not allowed in an enumeration
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/enum-%s-cannot-include-magic-method-%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/enum-%s-cannot-include-magic-method-%s.html","name":"Enum %s cannot include magic method %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"Some magic methods are not allowed in an enumeration","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/enum-%s-cannot-include-magic-method-%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Some magic methods are not allowed in an enumeration. ``__get``, ``__set``, ``__isset``, ``__unset``, ``__construct``, ``__destruct``, ``__sleep``, ``__wakeup``, ``__serialize``, ``__unserialize``, ``__toString``, ``__set_state``, ``__clone`` and  ``__debugInfo``.

This also means that some other magic methods are allowed : ``__call``, ``__callStatic`` and ``__invoke``.

Example
_______

.. code-block:: php

   <?php
   
   enum E {
       function __get($a) {}
   }
   
   ?>


Literal Examples
****************
+ Enum e cannot include magic method __get
+ Enum e cannot include magic method __set
+ Enum e cannot include magic method __destruct

Solutions
_________

+ Remove the magic method from the enumeration.
+ Turn the enumeration into a class.

See Also
________

+ `EnumRFC <https://wiki.php.net/rfc/enumerations#magic_read-methods>`_

.. _must-be-a-user-defined-class-name,-internal-class-name-given:

must be a user-defined class name, internal class name given
------------------------------------------------------------
 
.. meta::
	:description:
		must be a user-defined class name, internal class name given: class_alias() creates an alias for a class, an enumeration, an interface or a trait.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: must be a user-defined class name, internal class name given
	:og:description: class_alias() creates an alias for a class, an enumeration, an interface or a trait
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/must-be-a-user-defined-class-name%2C-internal-class-name-given.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: must be a user-defined class name, internal class name given
	:twitter:description: must be a user-defined class name, internal class name given: class_alias() creates an alias for a class, an enumeration, an interface or a trait
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/must-be-a-user-defined-class-name,-internal-class-name-given.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/must-be-a-user-defined-class-name,-internal-class-name-given.html","name":"must be a user-defined class name, internal class name given","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 15 Sep 2025 17:13:08 +0000","dateModified":"Mon, 15 Sep 2025 17:13:08 +0000","description":"class_alias() creates an alias for a class, an enumeration, an interface or a trait","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/must-be-a-user-defined-class-name,-internal-class-name-given.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
class_alias() creates an alias for a class, an enumeration, an interface or a trait. Until PHP 8.3, it was only possible to create such aliases with custom structures, and it was not possible to do it with PHP native classes.

Example
_______

.. code-block:: php

   <?php
   
   class_alias(stdClass::class, MyClass::Class);
   
   ?>

Solutions
_________

+ Upgrade to PHP 8.3 or more recent.
+ Create a class that extends the PHP native class, and create an alias on this custom class.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See `classAliasWithInternalClass <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/classAliasWithInternalClass.html>`_.

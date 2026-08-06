.. _cannot-redeclare-%s::\$%s:

Cannot redeclare %s::$%s
------------------------
 
.. meta::
	:description:
		Cannot redeclare %s::$%s: A property can only be declared once in a class.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot redeclare %s::$%s
	:og:description: A property can only be declared once in a class
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-redeclare-%25s%3A%3A%24%25s.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot redeclare %s::$%s
	:twitter:description: Cannot redeclare %s::$%s: A property can only be declared once in a class
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-redeclare-%s::$%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-redeclare-%s::$%s.html","name":"Cannot redeclare %s::$%s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Aug 2026 11:30:54 +0000","dateModified":"Wed, 05 Aug 2026 11:30:54 +0000","description":"A property can only be declared once in a class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-redeclare-%s::$%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
A property can only be declared once in a class. This error appears when the same property name is declared twice in the same class body, regardless of whether the visibility or default value differ between the two declarations.

The same restriction applies to promoted properties: a constructor parameter promoted to a property cannot share its name with a property already declared in the class body.

Example
_______

.. code-block:: php

   <?php
   
   class X {
       public $a;
       public $a;
   }
   
   ?>


Literal Examples
****************
+ Cannot redeclare X::$a

Solutions
_________

+ Remove one of the two duplicate property declarations.
+ Rename one of the two properties.

Related Error Messages
______________________

+ :ref:`cannot-redeclare-%s::%s()`
+ :ref:`cannot-declare-variadic-promoted-property`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.

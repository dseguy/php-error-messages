.. _access-level-to-%s::\$%s-must-be-%s-(as-in-class-%s)%s:

Access level to %s::$%s must be %s (as in class %s)%s
-----------------------------------------------------
 
.. meta::
	:description:
		Access level to %s::$%s must be %s (as in class %s)%s: A property redeclared in a child class cannot be given a stricter visibility than the one it has in the parent class.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Access level to %s::$%s must be %s (as in class %s)%s
	:og:description: A property redeclared in a child class cannot be given a stricter visibility than the one it has in the parent class
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/access-level-to-%25s%3A%3A%24%25s-must-be-%25s-%28as-in-class-%25s%29%25s.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Access level to %s::$%s must be %s (as in class %s)%s
	:twitter:description: Access level to %s::$%s must be %s (as in class %s)%s: A property redeclared in a child class cannot be given a stricter visibility than the one it has in the parent class
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/access-level-to-%s::$%s-must-be-%s-(as-in-class-%s)%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/access-level-to-%s::$%s-must-be-%s-(as-in-class-%s)%s.html","name":"Access level to %s::$%s must be %s (as in class %s)%s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 04 Aug 2026 14:21:04 +0000","dateModified":"Tue, 04 Aug 2026 14:21:04 +0000","description":"A property redeclared in a child class cannot be given a stricter visibility than the one it has in the parent class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/access-level-to-%s::$%s-must-be-%s-(as-in-class-%s)%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
A property redeclared in a child class cannot be given a stricter visibility than the one it has in the parent class. ``public`` may be narrowed to ``protected`` or ``private``, and ``protected`` may be narrowed to ``private``, but never the other way, and a child cannot go further and restrict a ``protected`` property down when the parent is already ``public`` unless it stays at least as visible.

Here, ``X::$property`` is ``protected``, and ``Y`` tries to redeclare it as ``private``, which is a narrowing and is therefore rejected.

The trailing, optional part of the message (`` or weaker``) is added whenever the parent property is not ``public``: it means the child property must use the same visibility as the parent, or something even more permissive.

Example
_______

.. code-block:: php

   <?php
   
   class X {
       protected $property;
   }
   
   class Y extends X {
       private $property;
   }
   
   ?>


Literal Examples
****************
+ Access level to Y::$property must be protected or weaker (as in class X)

Solutions
_________

+ Use the same visibility as the parent property.
+ Use a visibility that is the same as, or wider than, the parent property's.
+ Remove the redeclaration in the child class, and inherit the parent property as-is.

Related Error Messages
______________________

+ :ref:`access-level-to-%s::%s-must-be-%s-(as-in-%s-%s)%s`
+ :ref:`set-access-level-of-%s::$%s-must-be-%s-(as-in-class-%s)%s`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.

.. _cannot-access-%s-property-%s::\$%s:

Cannot access %s property %s::$%s
---------------------------------
 
.. meta::
	:description:
		Cannot access %s property %s::$%s: Properties have visibility, which restrict access to the defining class (``private``), or the class and its children (``protected``).
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot access %s property %s::$%s
	:og:description: Properties have visibility, which restrict access to the defining class (``private``), or the class and its children (``protected``)
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-access-%25s-property-%25s%3A%3A%24%25s.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot access %s property %s::$%s
	:twitter:description: Cannot access %s property %s::$%s: Properties have visibility, which restrict access to the defining class (``private``), or the class and its children (``protected``)
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-access-%s-property-%s::$%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-access-%s-property-%s::$%s.html","name":"Cannot access %s property %s::$%s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"Properties have visibility, which restrict access to the defining class (``private``), or the class and its children (``protected``)","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-access-%s-property-%s::$%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Properties have visibility, which restrict access to the defining class (``private``), or the class and its children (``protected``).

This applies to static and normal properties.

Example
_______

.. code-block:: php

   <?php
   
   class X {
       private string $property = 'abc';
   }
   
   echo (new X)->property;
   
   ?>


Literal Examples
****************
+ Cannot access private property X::$property
+ Cannot access protected property X::$property

Solutions
_________

+ Relax the visibility constraint to ``protected`` or ``public`` to make the property available to the calling context.
+ Create a method to access the value of the property.
+ Extends the class and change the visibility level of the property from ``protected`` to ``public``. This has no effect for ``private``.

Related Error Messages
______________________

+ :ref:`cannot-access-%s-constant-%s::%s`
+ :ref:`cannot-access-%s-const-%s::%s`

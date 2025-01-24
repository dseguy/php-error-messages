.. _class-%s-cannot-extend-final-class-%s:

Class %s cannot extend final class %s
-------------------------------------
 
.. meta::
	:description:
		Class %s cannot extend final class %s: A ``final`` class is a class that cannot be extended.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Class %s cannot extend final class %s
	:og:description: A ``final`` class is a class that cannot be extended
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/class-%25s-cannot-extend-final-class-%25s.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Class %s cannot extend final class %s
	:twitter:description: Class %s cannot extend final class %s: A ``final`` class is a class that cannot be extended
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/class-%s-cannot-extend-final-class-%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/class-%s-cannot-extend-final-class-%s.html","name":"Class %s cannot extend final class %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 24 Jan 2025 14:01:34 +0000","dateModified":"Fri, 24 Jan 2025 14:01:34 +0000","description":"A ``final`` class is a class that cannot be extended","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/class-%s-cannot-extend-final-class-%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
A ``final`` class is a class that cannot be extended. This means any class that attempts to use ``extends`` on this class fails.

This error is produced both by userland code and PHP native code, such as ``Generator``, etc.


Example
_______

.. code-block:: php

   <?php
   
   class X extends Generator {}
   
   ?>


Literal Examples
****************
+ Class X cannot extend final class Generator

Solutions
_________

+ Use composition on the final class, to include it in another class.

Related Error Messages
______________________

+ :ref:`the-\"generator\"-class-is-reserved-for-internal-use-and-cannot-be-manually-instantiated`

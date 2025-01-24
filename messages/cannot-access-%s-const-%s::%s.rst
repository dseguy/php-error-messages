.. _cannot-access-%s-const-%s::%s:

Cannot access %s const %s::%s
-----------------------------
 
.. meta::
	:description:
		Cannot access %s const %s::%s: Constants have visibility, which restrict access to the defining class (``private``), or the class and its children (``protected``).
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot access %s const %s::%s
	:og:description: Constants have visibility, which restrict access to the defining class (``private``), or the class and its children (``protected``)
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-access-%25s-const-%25s%3A%3A%25s.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot access %s const %s::%s
	:twitter:description: Cannot access %s const %s::%s: Constants have visibility, which restrict access to the defining class (``private``), or the class and its children (``protected``)
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-access-%s-const-%s::%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-access-%s-const-%s::%s.html","name":"Cannot access %s const %s::%s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 19 Jan 2025 10:16:31 +0000","dateModified":"Sun, 19 Jan 2025 10:16:31 +0000","description":"Constants have visibility, which restrict access to the defining class (``private``), or the class and its children (``protected``)","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-access-%s-const-%s::%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Constants have visibility, which restrict access to the defining class (``private``), or the class and its children (``protected``). 

Example
_______

.. code-block:: php

   <?php
   
   class X {
       private const A = 1;
   }
   
   echo X::A;
   
   ?>


Literal Examples
****************
+ Cannot access private constant X::A

Solutions
_________

+ Relax the visibility constraint to ``protected`` or ``public`` to make the constant available to the calling context.
+ Create a method to access the value of the constant.
+ Extends the class and change the visibility level of the constant.

Related Error Messages
______________________

+ :ref:`cannot-access-%s-property-%s::$%s`


In more recent PHP versions, this error message is now :ref:`cannot-access-%s-constant-%s::%s`.

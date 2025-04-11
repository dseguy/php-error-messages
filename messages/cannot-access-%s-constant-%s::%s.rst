.. _cannot-access-%s-constant-%s::%s:

Cannot access %s constant %s::%s
--------------------------------
 
.. meta::
	:description:
		Cannot access %s constant %s::%s: Class constants have visibility, which restrict access to the defining class (``private``), or the class and its children (``protected``).
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot access %s constant %s::%s
	:og:description: Class constants have visibility, which restrict access to the defining class (``private``), or the class and its children (``protected``)
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-access-%25s-constant-%25s%3A%3A%25s.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot access %s constant %s::%s
	:twitter:description: Cannot access %s constant %s::%s: Class constants have visibility, which restrict access to the defining class (``private``), or the class and its children (``protected``)
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-access-%s-constant-%s::%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-access-%s-constant-%s::%s.html","name":"Cannot access %s constant %s::%s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"Class constants have visibility, which restrict access to the defining class (``private``), or the class and its children (``protected``)","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-access-%s-constant-%s::%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Class constants have visibility, which restrict access to the defining class (``private``), or the class and its children (``protected``).

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


In previous PHP versions, this error message used to be :ref:`cannot-access-%s-const-%s::%s`.

Static Analysis
_______________

This error may be tracked down with the following static analysis rules: `Classes/UnreachableConstant <https://exakat.readthedocs.io/en/latest/Reference/Rules/Classes/UnreachableConstant.html>`_.

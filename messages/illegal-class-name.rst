.. _illegal-class-name:

Illegal class name
------------------
 
.. meta::
	:description:
		Illegal class name: Illegal class name is a compile-time error when the type of a value, used for a class is not valid.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Illegal class name
	:og:description: Illegal class name is a compile-time error when the type of a value, used for a class is not valid
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/illegal-class-name.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Illegal class name
	:twitter:description: Illegal class name: Illegal class name is a compile-time error when the type of a value, used for a class is not valid
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/illegal-class-name.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/illegal-class-name.html","name":"Illegal class name","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"Illegal class name is a compile-time error when the type of a value, used for a class is not valid","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/illegal-class-name.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Illegal class name is a compile-time error when the type of a value, used for a class is not valid. 

The expressions that use classes are the following : static method call, static property call, static constant call, and static class (``$a::class``). 

The valid types are strings, static class (``A::class``), identifiers (such as ``A`` or ``\A``), method calls (``foo()``) that returns one of the previous types or data containers holding an object or a class name as a string. On the other hand, boolean, null, integers, float, array() are invalid; some strings are not valid, such as '4foo', though PHP only detects these are execution time, with a different error message.

This kind of error is very rare, as it prevents the code to run.

Example
_______

.. code-block:: php

   <?php
   
   array()::t;
   (2)::$t;
   (true)::t();
   
   // This is valid until execution, where class 4f cannot be found
   ('4f')::$t;
   
   ?>

Solutions
_________

+ Do not use invalid types values to access a class.

Related Error Messages
______________________

+ :ref:`class-"%s"-not-found`
+ :ref:`interface-"%s"-not-found`

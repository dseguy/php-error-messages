.. _is-an-invalid-class-name:

'%s' is an invalid class name
-----------------------------
 
.. meta::
	:description:
		'%s' is an invalid class name: This error is emitted when a fully qualified name is used as a type (property, constant, parameter, returntype), and that cannot be a valid name.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: &#039;%s&#039; is an invalid class name
	:og:description: This error is emitted when a fully qualified name is used as a type (property, constant, parameter, returntype), and that cannot be a valid name
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/is-an-invalid-class-name.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: '%s' is an invalid class name
	:twitter:description: '%s' is an invalid class name: This error is emitted when a fully qualified name is used as a type (property, constant, parameter, returntype), and that cannot be a valid name
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/is-an-invalid-class-name.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/is-an-invalid-class-name.html","name":"'%s' is an invalid class name","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"This error is emitted when a fully qualified name is used as a type (property, constant, parameter, returntype), and that cannot be a valid name","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/is-an-invalid-class-name.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
This error is emitted when a fully qualified name is used as a type (property, constant, parameter, returntype), and that cannot be a valid name. For example, this applies to ``\self``, ``\static``, ``\parent``. Other keywords, such as ``true``, ``null`` get a different error message. 

Note also that all keywords are not covered with this error message, and some have slipped through the checks: for example, ``\interface``, ``\class``, ``\enum``, ``\resource``... are all valid code. In fact, PHP won't create objects of such types, so this makes such type unusable.

Example
_______

.. code-block:: php

   <?php
   
   class X {
   	function foo(\self $s) {}
   }
   
   ?>


Literal Examples
****************
+ '\self' is an invalid class name
+ '\parent' is an invalid class name
+ '\static' is an invalid class name

Solutions
_________

+ Do not use PHP keywords as fully qualified name with a type.

Related Error Messages
______________________

+ :ref:`type-declaration-'%s'-must-be-unqualified`

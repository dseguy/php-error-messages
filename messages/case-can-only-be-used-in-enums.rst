.. _case-can-only-be-used-in-enums:

Case can only be used in enums
------------------------------
 
.. meta::
	:description:
		Case can only be used in enums: ``case`` is a keyword which is reserved for enumerations ``enum``.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Case can only be used in enums
	:og:description: ``case`` is a keyword which is reserved for enumerations ``enum``
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/case-can-only-be-used-in-enums.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Case can only be used in enums
	:twitter:description: Case can only be used in enums: ``case`` is a keyword which is reserved for enumerations ``enum``
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/case-can-only-be-used-in-enums.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/case-can-only-be-used-in-enums.html","name":"Case can only be used in enums","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 15 Apr 2025 19:56:42 +0000","dateModified":"Tue, 15 Apr 2025 19:56:42 +0000","description":"``case`` is a keyword which is reserved for enumerations ``enum``","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/case-can-only-be-used-in-enums.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
``case`` is a keyword which is reserved for enumerations ``enum``. It cannot be used in other structures, such as traits, interfaces or classes.

Example
_______

.. code-block:: php

   <?php
   
   class X {
       case A = 1;
   }
   
   ?>

Solutions
_________

+ Make the class an enumeration.
+ Remove the case from the class.

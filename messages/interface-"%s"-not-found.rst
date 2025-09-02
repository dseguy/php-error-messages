.. _interface-"%s"-not-found:

Interface "%s" not found
------------------------
 
.. meta::
	:description:
		Interface "%s" not found: This error message is reported when the interface could not be loaded, or when the name of the class is invalid.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Interface &quot;%s&quot; not found
	:og:description: This error message is reported when the interface could not be loaded, or when the name of the class is invalid
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/interface-%22%25s%22-not-found.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Interface "%s" not found
	:twitter:description: Interface "%s" not found: This error message is reported when the interface could not be loaded, or when the name of the class is invalid
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/interface-\"%s\"-not-found.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/interface-\"%s\"-not-found.html","name":"Interface \"%s\" not found","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 02 Sep 2025 05:12:01 +0000","dateModified":"Tue, 02 Sep 2025 05:12:01 +0000","description":"This error message is reported when the interface could not be loaded, or when the name of the class is invalid","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/interface-\"%s\"-not-found.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
This error message is reported when the interface could not be loaded, or when the name of the class is invalid.

Example
_______

.. code-block:: php

   <?php
   
   // '4f' is not a valid name for an interface
   ('4f')::c;
   
   // it is not possible to name a class 'interface'
   ('interface')::c;
   
   ?>


Literal Examples
****************
+ Interface "4f" not found
+ Interface "interface" not found

Solutions
_________

+ Check spelling and namespace for that interface.
+ Create the required interface.
+ Check if the interface is defined in an extension, and the extension is included in the current PHP engine.
+ Check if the interface is defined in a dependency, and the dependency is included in the current composer.json.
+ Do not use static, parent or self in a string to call a method statically.

Related Error Messages
______________________

+ :ref:`attribute-class-"%s"-not-found`
+ :ref:`illegal-class-name`
+ :ref:`%s-cannot-implement-%s---it-is-not-an-interface`

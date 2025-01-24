.. _class-"%s"-not-found:

Class "%s" not found
--------------------
 
.. meta::
	:description:
		Class "%s" not found: This error message is reported when the class could not be loaded, or when the name of the class is invalid.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Class &quot;%s&quot; not found
	:og:description: This error message is reported when the class could not be loaded, or when the name of the class is invalid
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/class-%22%25s%22-not-found.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Class "%s" not found
	:twitter:description: Class "%s" not found: This error message is reported when the class could not be loaded, or when the name of the class is invalid
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/class-\"%s\"-not-found.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/class-\"%s\"-not-found.html","name":"Class \"%s\" not found","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 22 Jan 2025 12:03:46 +0000","dateModified":"Wed, 22 Jan 2025 12:03:46 +0000","description":"This error message is reported when the class could not be loaded, or when the name of the class is invalid","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/class-\"%s\"-not-found.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
This error message is reported when the class could not be loaded, or when the name of the class is invalid. 

It also appears when unserializing an enumeration: PHP cannot distinguish a class constant or an enumeration case, so it reports a class error. Yet, this is the enuneration missing.

Example
_______

.. code-block:: php

   <?php
   
   // No x definition in the code
   new X; 
   
   // it is not possible to have a class with the name '4f'
   ('4f')::c;
   
   // it is not possible to have a class with the name 'class'
   ('class')::c;
   
   // it is not possible to have static, self or parent in a string to call a method
   static::foo();
   
   // unserializing an enumeration, but no such enumration.
   print_r(unserialize("a:1:{i:0;E:3:"f:A";}"));
   
   ?>


Literal Examples
****************
+ Class "x" not found
+ Class "4f" not found
+ Class "class" not found

Solutions
_________

+ Check spelling and namespace for that class.
+ Create the required class.
+ Check if the class is defined in an extension, and the extension is included in the current PHP engine.
+ Check if the class is defined in a dependency, and the dependency is included in the current composer.json.
+ Avoid using getInstance() on that attribute.
+ Do not use static, parent or self in a string to call a method statically.
+ Check that the enumeration is loaded.

Related Error Messages
______________________

+ :ref:`attribute-class-"%s"-not-found`
+ :ref:`illegal-class-name`

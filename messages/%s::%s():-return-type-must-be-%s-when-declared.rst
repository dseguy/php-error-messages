.. _%s::%s():-return-type-must-be-%s-when-declared:

%s::%s(): Return type must be %s when declared
----------------------------------------------
 
.. meta::
	:description:
		%s::%s(): Return type must be %s when declared: The magic methods ``__sleep`` and ``__serialize`` may be left without a return type.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: %s::%s(): Return type must be %s when declared
	:og:description: The magic methods ``__sleep`` and ``__serialize`` may be left without a return type
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/%25s%3A%3A%25s%28%29%3A-return-type-must-be-%25s-when-declared.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: %s::%s(): Return type must be %s when declared
	:twitter:description: %s::%s(): Return type must be %s when declared: The magic methods ``__sleep`` and ``__serialize`` may be left without a return type
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/%s::%s():-return-type-must-be-%s-when-declared.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/%s::%s():-return-type-must-be-%s-when-declared.html","name":"%s::%s(): Return type must be %s when declared","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 19 Jan 2025 21:40:50 +0000","dateModified":"Sun, 19 Jan 2025 21:40:50 +0000","description":"The magic methods ``__sleep`` and ``__serialize`` may be left without a return type","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/%s::%s():-return-type-must-be-%s-when-declared.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The magic methods ``__sleep`` and ``__serialize`` may be left without a return type. By construction, PHP uses ``array`` for them. 

So, when a return type is written in the source, for these methods, it must be ``array``.

Here is the list of compulsory return types: 

+ __destruct() : ``void``
+ __construct() : ``void``
+ __unserialize() : ``void``
+ __unset() : ``void``
+ __set() : ``void``
+ __serialize() : ``array``
+ __isset() : ``bool``
+ __toString() : ``string``



Example
_______

.. code-block:: php

   <?php
   
   class X {
       function __construct() : int {}
   
       function __sleep() : int {}
       
       function __serialize() : int {} 
   
       function __isset() : int {} 
   }
   
   ?>


Literal Examples
****************
+ X::__sleep(): Return type must be array when declared
+ X::__construct(): Return type must be void when declared
+ X::__isset(): Return type must be bool when declared

Solutions
_________

+ Give the correct return type to the magic method.
+ Remove the return type of the magic method.

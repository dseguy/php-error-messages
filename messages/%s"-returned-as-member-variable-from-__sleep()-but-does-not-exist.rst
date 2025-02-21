.. _%s"-returned-as-member-variable-from-__sleep()-but-does-not-exist:

%s" returned as member variable from __sleep() but does not exist
-----------------------------------------------------------------
 
.. meta::
	:description:
		%s" returned as member variable from __sleep() but does not exist: The magic method ``__sleep`` must return a list of properties of the current class.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: %s&quot; returned as member variable from __sleep() but does not exist
	:og:description: The magic method ``__sleep`` must return a list of properties of the current class
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/%25s%22-returned-as-member-variable-from-__sleep%28%29-but-does-not-exist.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: %s" returned as member variable from __sleep() but does not exist
	:twitter:description: %s" returned as member variable from __sleep() but does not exist: The magic method ``__sleep`` must return a list of properties of the current class
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/%s\"-returned-as-member-variable-from-__sleep()-but-does-not-exist.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/%s\"-returned-as-member-variable-from-__sleep()-but-does-not-exist.html","name":"%s\" returned as member variable from __sleep() but does not exist","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"The magic method ``__sleep`` must return a list of properties of the current class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/%s\"-returned-as-member-variable-from-__sleep()-but-does-not-exist.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The magic method ``__sleep`` must return a list of properties of the current class. Any private property defined in the parent are excluded. 

The returned array should be an array of strings, with the name of each property, without the initial ``$`` sign.

Example
_______

.. code-block:: php

   <?php
   
   class X {
       public $p = 1;
       function __sleep() {
           return ['p', 'q', []];
       }
   }
   
   serialize(new X);
   
   ?>


Literal Examples
****************
+ "q" returned as member variable from __sleep() but does not exist
+ "Array" returned as member variable from __sleep() but does not exist

Solutions
_________

+ Remove all unknown properties.
+ Check the format of the property name, and remove the ``$`` sign.
+ Check the visibility of the properties: private properties from parents are excluded.

Related Error Messages
______________________

+ :ref:`sleep-should-return-an-array-only-containing-the-names-of-instance-variables-to-serialize.`

.. _an-alias-(%s)-was-defined-for-method-%s(),-but-this-method-does-not-exist:

An alias (%s) was defined for method %s(), but this method does not exist
-------------------------------------------------------------------------
 
.. meta::
	:description:
		An alias (%s) was defined for method %s(), but this method does not exist: When importing methods from a trait, it is possible to create a method alias: give a new name to the trait method, when it is inside a class.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: An alias (%s) was defined for method %s(), but this method does not exist
	:og:description: When importing methods from a trait, it is possible to create a method alias: give a new name to the trait method, when it is inside a class
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/an-alias-%28%25s%29-was-defined-for-method-%25s%28%29%2C-but-this-method-does-not-exist.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: An alias (%s) was defined for method %s(), but this method does not exist
	:twitter:description: An alias (%s) was defined for method %s(), but this method does not exist: When importing methods from a trait, it is possible to create a method alias: give a new name to the trait method, when it is inside a class
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/an-alias-(%s)-was-defined-for-method-%s(),-but-this-method-does-not-exist.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/an-alias-(%s)-was-defined-for-method-%s(),-but-this-method-does-not-exist.html","name":"An alias (%s) was defined for method %s(), but this method does not exist","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"When importing methods from a trait, it is possible to create a method alias: give a new name to the trait method, when it is inside a class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/an-alias-(%s)-was-defined-for-method-%s(),-but-this-method-does-not-exist.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
When importing methods from a trait, it is possible to create a method alias: give a new name to the trait method, when it is inside a class.

PHP checks that the orginal method exists, before allocating the new name. When the original method doesn't exist, PHP emits this error message.

Example
_______

.. code-block:: php

   <?php
   
   trait T {}
   
   class X {
       use T {
           foo as bar;
       }
   }
   ?>


Literal Examples
****************
+ An alias (bar) was defined for method foo(), but this method does not exist

Solutions
_________

+ Check the name of the orginal method for typos.
+ Add the missing method in the trait.
+ Remove the alias.
+ Remove the method with the same name in the class, and remove the alias.

Related Error Messages
______________________

+ :ref:`an-alias-was-defined-for-%s::%s-but-this-method-does-not-exist`

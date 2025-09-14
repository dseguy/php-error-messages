.. _property-in-interface-cannot-be-protected-or-private:

Property in interface cannot be protected or private
----------------------------------------------------
 
.. meta::
	:description:
		Property in interface cannot be protected or private: While PHP 8.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Property in interface cannot be protected or private
	:og:description: While PHP 8
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/property-in-interface-cannot-be-protected-or-private.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Property in interface cannot be protected or private
	:twitter:description: Property in interface cannot be protected or private: While PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/property-in-interface-cannot-be-protected-or-private.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/property-in-interface-cannot-be-protected-or-private.html","name":"Property in interface cannot be protected or private","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 13 Sep 2025 09:23:00 +0000","dateModified":"Sat, 13 Sep 2025 09:23:00 +0000","description":"While PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/property-in-interface-cannot-be-protected-or-private.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
While PHP 8.4 supports properties in an interface, as long as they are defining hooks, it is not possible to use another visibility than ``public``.

Example
_______

.. code-block:: php

   <?php
   
   interface i {
       private $p { get; }
   }
   
   ?>

Solutions
_________

+ Make the property visible.
+ Move the property definition to an abstract class.

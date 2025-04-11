.. _cannot-declare-hooks-for-static-property:

Cannot declare hooks for static property
----------------------------------------
 
.. meta::
	:description:
		Cannot declare hooks for static property: Static properties are not supported for property hooks.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot declare hooks for static property
	:og:description: Static properties are not supported for property hooks
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-declare-hooks-for-static-property.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot declare hooks for static property
	:twitter:description: Cannot declare hooks for static property: Static properties are not supported for property hooks
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-declare-hooks-for-static-property.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-declare-hooks-for-static-property.html","name":"Cannot declare hooks for static property","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"Static properties are not supported for property hooks","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-declare-hooks-for-static-property.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Static properties are not supported for property hooks. Property hooks are only for non-static methods.

Example
_______

.. code-block:: php

   <?php
   
   class X
   {
       public static string $property {
           set => $this->property . _1;
   
           SET {
               $this->property = $value;
           }
       }
   }
   ?>

Solutions
_________

+ Make the property non-static.
+ Create accessors for the static property.

.. _unknown-hook--"%s-"-for-property-%s::\$%s:

Unknown hook \"%s\" for property %s::$%s
----------------------------------------
 
.. meta::
	:description:
		Unknown hook \"%s\" for property %s::$%s: There can be only two property hooks: ``get`` and ``set``, and their case variations.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Unknown hook \&quot;%s\&quot; for property %s::$%s
	:og:description: There can be only two property hooks: ``get`` and ``set``, and their case variations
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/unknown-hook--%22%25s-%22-for-property-%25s%3A%3A%24%25s.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Unknown hook \"%s\" for property %s::$%s
	:twitter:description: Unknown hook \"%s\" for property %s::$%s: There can be only two property hooks: ``get`` and ``set``, and their case variations
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/unknown-hook--\"%s-\"-for-property-%s::$%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/unknown-hook--\"%s-\"-for-property-%s::$%s.html","name":"Unknown hook \\\"%s\\\" for property %s::$%s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Apr 2026 08:49:32 +0000","dateModified":"Fri, 10 Apr 2026 08:49:32 +0000","description":"There can be only two property hooks: ``get`` and ``set``, and their case variations","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/unknown-hook--\"%s-\"-for-property-%s::$%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
There can be only two property hooks: ``get`` and ``set``, and their case variations. All others are currently explicitly forbidden.

Example
_______

.. code-block:: php

   <?php
   
   class Test {
       public $prop {
           foobar {}
       }
   }
   
   ?>


Literal Examples
****************
+ Unknown hook "foobar" for property Test::$prop

Solutions
_________

+ Use one of the valid names.
+ Remove the property hook.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.

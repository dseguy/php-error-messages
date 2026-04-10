.. _cannot-redeclare-property-hook--"%s:

Cannot redeclare property hook "%s
----------------------------------
 
.. meta::
	:description:
		Cannot redeclare property hook "%s: Property hook may only have one definition.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot redeclare property hook &quot;%s
	:og:description: Property hook may only have one definition
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-redeclare-property-hook--%22%25s.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot redeclare property hook "%s
	:twitter:description: Cannot redeclare property hook "%s: Property hook may only have one definition
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-redeclare-property-hook--\"%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-redeclare-property-hook--\"%s.html","name":"Cannot redeclare property hook \"%s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Apr 2026 08:53:09 +0000","dateModified":"Fri, 10 Apr 2026 08:53:09 +0000","description":"Property hook may only have one definition","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-redeclare-property-hook--\"%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Property hook may only have one definition. It is not possible to have duplicates.

Example
_______

.. code-block:: php

   <?php
   
   class Test {
       public $prop {
           GeT {}
           get {}
           
       }
   }
   
   ?>


Literal Examples
****************
+ Cannot redeclare property hook "get"

Solutions
_________

+ Remove all but one of the definition.
+ Rename one of them with the other property hook name: may be ``set`` had a typo and was written ``get``.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.

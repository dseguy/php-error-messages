.. _cannot-redeclare-property-hook:

Cannot redeclare property hook
------------------------------
 
.. meta::
	:description:
		Cannot redeclare property hook: Property hooks must be all distinct, and there can only be two.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot redeclare property hook
	:og:description: Property hooks must be all distinct, and there can only be two
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-redeclare-property-hook.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot redeclare property hook
	:twitter:description: Cannot redeclare property hook: Property hooks must be all distinct, and there can only be two
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-redeclare-property-hook.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-redeclare-property-hook.html","name":"Cannot redeclare property hook","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 16 Feb 2025 12:23:23 +0000","dateModified":"Sun, 16 Feb 2025 12:23:23 +0000","description":"Property hooks must be all distinct, and there can only be two","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-redeclare-property-hook.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Property hooks must be all distinct, and there can only be two. In that case, it is ``get`` and ``set``. Property hooks are case insensitive, so ``get`` and ``GET`` are the same. 

They also differ one from the other by one letter, so review is important.

Example
_______

.. code-block:: php

   <?php
   
   class X
   {
       public string $property {
           set => $this->property . _1;
   
           SET {
               $this->property = $value;
           }
       }
   }
   ?>

Solutions
_________

+ Make sure that both hooks are needed.
+ Remove any third hook: there can only be two, at most.
+ Check case of the hooks name.

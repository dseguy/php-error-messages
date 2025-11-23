.. _property-hook-cannot-be-both-abstract-and-final:

Property hook cannot be both abstract and final
-----------------------------------------------
 
.. meta::
	:description:
		Property hook cannot be both abstract and final: This error is emitted when a property is defined in an interface, with the final option.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Property hook cannot be both abstract and final
	:og:description: This error is emitted when a property is defined in an interface, with the final option
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/property-hook-cannot-be-both-abstract-and-final.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Property hook cannot be both abstract and final
	:twitter:description: Property hook cannot be both abstract and final: This error is emitted when a property is defined in an interface, with the final option
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/property-hook-cannot-be-both-abstract-and-final.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/property-hook-cannot-be-both-abstract-and-final.html","name":"Property hook cannot be both abstract and final","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 10 Nov 2025 09:57:22 +0000","dateModified":"Mon, 10 Nov 2025 09:57:22 +0000","description":"This error is emitted when a property is defined in an interface, with the final option","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/property-hook-cannot-be-both-abstract-and-final.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
This error is emitted when a property is defined in an interface, with the final option. There, a property hook is automatically abstract, as it is part of an interface, so the ``abstract`` option is understated. 

In a class or a trait, the reported error is that ``abstract`` is not allowed on a property hook.

Example
_______

.. code-block:: php

   <?php
   
   interface I {
       public int $p {
           final get;
       }
   }
   
   ?>

Solutions
_________

+ Remove the ``final`` option from the property hook.

Related Error Messages
______________________

+ :ref:`cannot-use-the-abstract-modifier-on-a-property-hook`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.

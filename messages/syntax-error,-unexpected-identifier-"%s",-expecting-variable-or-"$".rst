.. _syntax-error,-unexpected-identifier-"%s",-expecting-variable-or-"\$":

syntax error, unexpected identifier "%s", expecting variable or "$"
-------------------------------------------------------------------
 
.. meta::
	:description:
		syntax error, unexpected identifier "%s", expecting variable or "$": ``new`` works with objects, static properties and normal properties.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected identifier &quot;%s&quot;, expecting variable or &quot;$&quot;
	:og:description: ``new`` works with objects, static properties and normal properties
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-identifier-%22%25s%22%2C-expecting-variable-or-%22%24%22.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected identifier "%s", expecting variable or "$"
	:twitter:description: syntax error, unexpected identifier "%s", expecting variable or "$": ``new`` works with objects, static properties and normal properties
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-identifier-\"%s\",-expecting-variable-or-\"$\".html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-identifier-\"%s\",-expecting-variable-or-\"$\".html","name":"syntax error, unexpected identifier \"%s\", expecting variable or \"$\"","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"``new`` works with objects, static properties and normal properties","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-identifier-\"%s\",-expecting-variable-or-\"$\".html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
``new`` works with objects, static properties and normal properties. It does not work with class constants, even if the constant is an object.

Example
_______

.. code-block:: php

   <?php
   
   class A  {
       const B = C;
   }
   
   const C = new A;
   
   var_dump(new A::B);
   
   ?>


Literal Examples
****************
+ syntax error, unexpected identifier "B", expecting variable or "$"

Solutions
_________

+ Store the constant in a variable, and ``new`` the variable.
+ Get the class name with ``get_class`` or ``::class`` and then, create the new object.

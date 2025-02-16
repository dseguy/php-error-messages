.. _unknown-named-parameter-\$%s:

Unknown named parameter $%s
---------------------------
 
.. meta::
	:description:
		Unknown named parameter $%s: Named parameters are the parameters of the function, or method.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Unknown named parameter $%s
	:og:description: Named parameters are the parameters of the function, or method
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/unknown-named-parameter-%24%25s.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Unknown named parameter $%s
	:twitter:description: Unknown named parameter $%s: Named parameters are the parameters of the function, or method
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/unknown-named-parameter-$%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/unknown-named-parameter-$%s.html","name":"Unknown named parameter $%s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 16 Feb 2025 12:23:23 +0000","dateModified":"Sun, 16 Feb 2025 12:23:23 +0000","description":"Named parameters are the parameters of the function, or method","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/unknown-named-parameter-$%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Named parameters are the parameters of the function, or method. Their actual name is the name of the variable, without the leading ``$`` sign. 

With named parameters, the case is important, just like with variables.

Example
_______

.. code-block:: php

   <?php
   
   function foo($a, $b) {}
   
   foo(c: 1);
   
   ?>


Literal Examples
****************
+ Unknown named parameter $c

Solutions
_________

+ Check the case of the parameter.
+ Check the signature of the method to see if that parameter actually exists.
+ Add the parameter to the method signature.
+ Remove the name in the method call, and rely on positional arguments.

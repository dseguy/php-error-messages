.. _return-value-of-%s%s%s()-must-%s%s%s,-%s%s-returned:

Return value of %s%s%s() must %s%s%s, %s%s returned
---------------------------------------------------
 
.. meta::
	:description:
		Return value of %s%s%s() must %s%s%s, %s%s returned: The type of the returned value must match the type of the method signature.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Return value of %s%s%s() must %s%s%s, %s%s returned
	:og:description: The type of the returned value must match the type of the method signature
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/return-value-of-%25s%25s%25s%28%29-must-%25s%25s%25s%2C-%25s%25s-returned.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Return value of %s%s%s() must %s%s%s, %s%s returned
	:twitter:description: Return value of %s%s%s() must %s%s%s, %s%s returned: The type of the returned value must match the type of the method signature
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/return-value-of-%s%s%s()-must-%s%s%s,-%s%s-returned.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/return-value-of-%s%s%s()-must-%s%s%s,-%s%s-returned.html","name":"Return value of %s%s%s() must %s%s%s, %s%s returned","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"The type of the returned value must match the type of the method signature","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/return-value-of-%s%s%s()-must-%s%s%s,-%s%s-returned.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The type of the returned value must match the type of the method signature. 

With strict_types, PHP refuses anything that is not compatible with the returned type: returning '123' (123 as a string), or 123.00 (123 as float) is forbidden. 

Without strict_types, PHP tries to convert the value to int, and only produces an error when it cannot.

Example
_______

.. code-block:: php

   <?php
   
   function foo() : int {
   	return 'abc';
   }
   ?>


Literal Examples
****************
+ Return value of foo() must be int, string returned

Solutions
_________

+ Use a cast to force the type to the desired returntype.
+ Check the type before returning it.
+ Remove the return type.
+ Remove strict_types.

Related Error Messages
______________________

+ :ref:`a-function-with-return-type-must-return-a-value`

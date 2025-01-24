.. _cannot-perform-bitwise-not-on-%s:

Cannot perform bitwise not on %s
--------------------------------
 
.. meta::
	:description:
		Cannot perform bitwise not on %s: Bitwise operations are only available on integers.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot perform bitwise not on %s
	:og:description: Bitwise operations are only available on integers
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-perform-bitwise-not-on-%25s.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot perform bitwise not on %s
	:twitter:description: Cannot perform bitwise not on %s: Bitwise operations are only available on integers
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-perform-bitwise-not-on-%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-perform-bitwise-not-on-%s.html","name":"Cannot perform bitwise not on %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 03 Dec 2024 20:51:57 +0000","dateModified":"Tue, 03 Dec 2024 20:51:57 +0000","description":"Bitwise operations are only available on integers","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-perform-bitwise-not-on-%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Bitwise operations are only available on integers. Other types are forbidden. Among the operations ``~`` is a bitwise operation. For the other operators, a different error is emitted.

Example
_______

.. code-block:: php

   <?php
   
   $array = [1,2];
   
   ~$array;
   
   ?>


Literal Examples
****************
+ Cannot perform bitwise not on object
+ Cannot perform bitwise not on boolean
+ Cannot perform bitwise not on resource
+ Cannot perform bitwise not on array

Solutions
_________

+ Use another operator than the bitwise not, such as ``!``.
+ Cast the forbidden type to int before using the bitwise.

Related Error Messages
______________________

+ :ref:`unsupported-operand-types`

.. _can\'t-use-nullsafe-operator-in-write-context:

Can\'t use nullsafe operator in write context
---------------------------------------------
 
.. meta::
	:description:
		Can\'t use nullsafe operator in write context: The nullsafe operator is only available for reading, not writing.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Can\&#039;t use nullsafe operator in write context
	:og:description: The nullsafe operator is only available for reading, not writing
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/can%27t-use-nullsafe-operator-in-write-context.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Can\'t use nullsafe operator in write context
	:twitter:description: Can\'t use nullsafe operator in write context: The nullsafe operator is only available for reading, not writing
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/can\\'t-use-nullsafe-operator-in-write-context.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/can\\'t-use-nullsafe-operator-in-write-context.html","name":"Can\\'t use nullsafe operator in write context","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 10 Feb 2025 09:35:56 +0000","dateModified":"Mon, 10 Feb 2025 09:35:56 +0000","description":"The nullsafe operator is only available for reading, not writing","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/can\\'t-use-nullsafe-operator-in-write-context.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The nullsafe operator is only available for reading, not writing. Aka, it cannot be used on the left side of an assignation.

The nullsafe operator replaces any non-existing property with a ``null`` value: that value is not an object, and cannot handle properties on its own.

This limitation applies to assignations, short assignations, such as ``.=``, ``+=``, etc., pre and post incrementations ``++$a->b``, and references arguments.

Example
_______

.. code-block:: php

   <?php
   
   $x = new stdClass();
   
   $x?->a = 1;
   
   ?>

Solutions
_________

+ Use the ``->`` operator for writing operations.

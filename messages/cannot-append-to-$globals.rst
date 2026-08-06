.. _cannot-append-to-\$globals:

Cannot append to $GLOBALS
-------------------------
 
.. meta::
	:description:
		Cannot append to $GLOBALS: $GLOBALS is not a regular array: each of its entries is really a reference to a variable in the global scope, identified by its name.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot append to $GLOBALS
	:og:description: $GLOBALS is not a regular array: each of its entries is really a reference to a variable in the global scope, identified by its name
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-append-to-%24globals.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot append to $GLOBALS
	:twitter:description: Cannot append to $GLOBALS: $GLOBALS is not a regular array: each of its entries is really a reference to a variable in the global scope, identified by its name
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-append-to-$globals.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-append-to-$globals.html","name":"Cannot append to $GLOBALS","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 05 Aug 2026 14:18:55 +0000","dateModified":"Wed, 05 Aug 2026 14:18:55 +0000","description":"$GLOBALS is not a regular array: each of its entries is really a reference to a variable in the global scope, identified by its name","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-append-to-$globals.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
$GLOBALS is not a regular array: each of its entries is really a reference to a variable in the global scope, identified by its name. Appending with the empty-bracket operator, which would normally pick the next integer key, has no matching global variable to bind to, so PHP 8.1 turned this previously-meaningless operation into a compile-time error instead of silently creating a global variable literally named "0".

Example
_______

.. code-block:: php

   <?php
   
   $GLOBALS[] = 'value';
   
   ?>

Solutions
_________

+ Assign to an explicit, named key instead: $GLOBALS['name'] = 'value';

Related Error Messages
______________________

+ :ref:`cannot-use-[]-for-unsetting`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See `GLOBALSAppend <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/GLOBALSAppend.html>`_.

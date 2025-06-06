.. _call-to-undefined-function-each():

Call to undefined function each()
---------------------------------
 
.. meta::
	:description:
		Call to undefined function each(): each() used to be a PHP native function.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Call to undefined function each()
	:og:description: each() used to be a PHP native function
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/call-to-undefined-function-each%28%29.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Call to undefined function each()
	:twitter:description: Call to undefined function each(): each() used to be a PHP native function
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/call-to-undefined-function-each().html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/call-to-undefined-function-each().html","name":"Call to undefined function each()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"each() used to be a PHP native function","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/call-to-undefined-function-each().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
each() used to be a PHP native function. It was deprecated in PHP 7.4, and is undefined since PHP 8.0.

Example
_______

.. code-block:: php

   <?php
   
   $array = ['a', 'b'];
   while(list($key, $value) = each($array)) {
       print "$key => $value\n";
   }
   
   ?>

Solutions
_________

+ Downgrade to PHP 7.x.
+ Use ``yield``.
+ Use ``yield from``.
+ Use ``foreach()``.

Related Error Messages
______________________

+ :ref:`call-to-undefined-function`
+ :ref:`call-to-undefined-function-exit()`


In previous PHP versions, this error message used to be :ref:`the-each()-function-is-deprecated.-this-message-will-be-suppressed-on-further-calls`.

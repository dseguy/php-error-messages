.. _call-to-undefined-function-exit():

Call to undefined function exit()
---------------------------------
 
.. meta::
	:description:
		Call to undefined function exit(): exit and die used to be language constructures, until PHP 8.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Call to undefined function exit()
	:og:description: exit and die used to be language constructures, until PHP 8
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/call-to-undefined-function-exit%28%29.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Call to undefined function exit()
	:twitter:description: Call to undefined function exit(): exit and die used to be language constructures, until PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/call-to-undefined-function-exit().html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/call-to-undefined-function-exit().html","name":"Call to undefined function exit()","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"exit and die used to be language constructures, until PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/call-to-undefined-function-exit().html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
exit and die used to be language constructures, until PHP 8.4. Then, they could not be used in a dynamic function call, such as shown here. Indeed, language constructs are not accessible with that syntax.

Since PHP 8.4, ``die`` and ``exit`` are defined as functions, and shall be used with the dynamic call feature.

Example
_______

.. code-block:: php

   <?php
   
   $function = 'exit';
   $function();
   
   ?>

Solutions
_________

+ Upgrade to PHP 8.4.

Related Error Messages
______________________

+ :ref:`call-to-undefined-function`
+ :ref:`call-to-undefined-function-each()`

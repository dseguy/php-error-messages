.. _using-null-as-an-array-offset-is-deprecated,-use-an-empty-string-instead:

Using null as an array offset is deprecated, use an empty string instead
------------------------------------------------------------------------
 
.. meta::
	:description:
		Using null as an array offset is deprecated, use an empty string instead: Avoid using null as an array index.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Using null as an array offset is deprecated, use an empty string instead
	:og:description: Avoid using null as an array index
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/using-null-as-an-array-offset-is-deprecated%2C-use-an-empty-string-instead.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Using null as an array offset is deprecated, use an empty string instead
	:twitter:description: Using null as an array offset is deprecated, use an empty string instead: Avoid using null as an array index
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/using-null-as-an-array-offset-is-deprecated,-use-an-empty-string-instead.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/using-null-as-an-array-offset-is-deprecated,-use-an-empty-string-instead.html","name":"Using null as an array offset is deprecated, use an empty string instead","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 17 Nov 2025 21:03:01 +0000","dateModified":"Mon, 17 Nov 2025 21:03:01 +0000","description":"Avoid using null as an array index","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/using-null-as-an-array-offset-is-deprecated,-use-an-empty-string-instead.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Avoid using null as an array index. PHP converts it silently to an empty string anyway.

Example
_______

.. code-block:: php

   <?php
   
   $array = ['a' => 2];
   $array[null] = 3;
   
   ?>

Solutions
_________

+ Replace the ``null`` with an empty string.
+ Check the value before using it as an array index.

Related Error Messages
______________________

+ :ref:`using-null-as-the-key-parameter-for-array_key_exists()-is-deprecated,-use-an-empty-string-instead`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See `NullAsArrayOffset <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/NullAsArrayOffset.html>`_.

Static Analysis
_______________

This error may be tracked down with the following static analysis rules: `Arrays/NullAsIndex <https://exakat.readthedocs.io/en/latest/Reference/Rules/Arrays/NullAsIndex.html>`_.

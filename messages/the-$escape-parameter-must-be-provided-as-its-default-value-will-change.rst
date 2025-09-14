.. _the-\$escape-parameter-must-be-provided-as-its-default-value-will-change:

the $escape parameter must be provided as its default value will change
-----------------------------------------------------------------------
 
.. meta::
	:description:
		the $escape parameter must be provided as its default value will change: The ``$escape`` parameter of various PHP functions that deal with CSV files will change in PHP 9.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: the $escape parameter must be provided as its default value will change
	:og:description: The ``$escape`` parameter of various PHP functions that deal with CSV files will change in PHP 9
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/the-%24escape-parameter-must-be-provided-as-its-default-value-will-change.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: the $escape parameter must be provided as its default value will change
	:twitter:description: the $escape parameter must be provided as its default value will change: The ``$escape`` parameter of various PHP functions that deal with CSV files will change in PHP 9
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/the-$escape-parameter-must-be-provided-as-its-default-value-will-change.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/the-$escape-parameter-must-be-provided-as-its-default-value-will-change.html","name":"the $escape parameter must be provided as its default value will change","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 13 Sep 2025 10:52:40 +0000","dateModified":"Sat, 13 Sep 2025 10:52:40 +0000","description":"The ``$escape`` parameter of various PHP functions that deal with CSV files will change in PHP 9","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/the-$escape-parameter-must-be-provided-as-its-default-value-will-change.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The ``$escape`` parameter of various PHP functions that deal with CSV files will change in PHP 9.0. The current default value is ``\`` (backslash), and it will be changed to an empty string. To be ready for that version, it is recommended to explicitely set that value, so as to preserve the previous behavior, with a ``\``, or move to the new one, with an empty string.

Example
_______

.. code-block:: php

   <?php
   
   $fp = fopen(export.csv, w);
   fputcsv($data);
   
   ?>

Solutions
_________

+ Add the 5th parameter in the fputcsv() or fgetcsv() calls.
+ Add the named parameter ``escape`` in the calls.
+ Test your application with ``escape`` set to empty string, and PHP 8.4+.

See Also
________

+ `Theescapeparametermustbeprovided <https://php.watch/versions/8.4/csv-functions-escape-parameter>`_
+ `fputcsvandescapecharacter <https://externals.io/message/100729>`_

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See `fputcsvEscape <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/fputcsvEscape.html>`_.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See `fputcsvEscape <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/fputcsvEscape.html>`_.

Static Analysis
_______________

This error may be tracked down with the following static analysis rules: `Php/FputcsvNeedsEscape <https://exakat.readthedocs.io/en/latest/Reference/Rules/Php/FputcsvNeedsEscape.html>`_.

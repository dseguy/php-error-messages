.. _unknown-filter-with-id:

Unknown filter with ID
----------------------
 
.. meta::
	:description:
		Unknown filter with ID: filter_var_array(), and other filter functions, use the second argument to identify which filter to apply.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Unknown filter with ID
	:og:description: filter_var_array(), and other filter functions, use the second argument to identify which filter to apply
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/unknown-filter-with-id.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Unknown filter with ID
	:twitter:description: Unknown filter with ID: filter_var_array(), and other filter functions, use the second argument to identify which filter to apply
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/unknown-filter-with-id.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/unknown-filter-with-id.html","name":"Unknown filter with ID","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 15 Mar 2025 08:12:35 +0000","dateModified":"Sat, 15 Mar 2025 08:12:35 +0000","description":"filter_var_array(), and other filter functions, use the second argument to identify which filter to apply","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/unknown-filter-with-id.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
filter_var_array(), and other filter functions, use the second argument to identify which filter to apply. They are usually provided as constants, such as ``FILTER_SANITIZE_STRING``. There are a limited, although long, set of such constants, and not all integer values are used. This is the case for ``-1``.

Example
_______

.. code-block:: php

   <?php
   
   var_dump(filter_var_array(array(=>), 128));
   
   ?>


Literal Examples
****************
+ Unknown filter with ID -1
+ Unknown filter with ID 128

Solutions
_________

+ Use a valid constant to specify the filter.
+ Do not use literal integers, but constants.

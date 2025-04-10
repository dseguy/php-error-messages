.. _contains-an-invalid-curl-option:

contains an invalid cURL option
-------------------------------
 
.. meta::
	:description:
		contains an invalid cURL option: ``curl_setopt()`` uses a cURL option as second parameter.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: contains an invalid cURL option
	:og:description: ``curl_setopt()`` uses a cURL option as second parameter
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/contains-an-invalid-curl-option.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: contains an invalid cURL option
	:twitter:description: contains an invalid cURL option: ``curl_setopt()`` uses a cURL option as second parameter
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/contains-an-invalid-curl-option.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/contains-an-invalid-curl-option.html","name":"contains an invalid cURL option","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 10 Apr 2025 20:35:23 +0000","dateModified":"Thu, 10 Apr 2025 20:35:23 +0000","description":"``curl_setopt()`` uses a cURL option as second parameter","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/contains-an-invalid-curl-option.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
``curl_setopt()`` uses a cURL option as second parameter. These options are PHP native constants, and use the prefix ``CURLOPT_``, which resolve to an integer.

It is possible to use the equivalent integer to set a cURL option, for example via a variable. The value of this variable must be checked to be a valid cURL constant before usage.

Using another type instead of a cURL constant is reported as an error of type.

Example
_______

.. code-block:: php

   <?php
   
   $ch = curl_init(http://www.example.com/);
   $fp = fopen(example_homepage.txt, w);
   
   curl_setopt($ch, 12332, $fp);
   curl_setopt($ch, 'abc', $fp);
   
   ?>

Solutions
_________

+ Use the ``CURLOPT_*`` constant.
+ Check that the intended value may be resolved as a ``CURLOPT_*`` constant (``CURLOPT_APPEND`` === 50, so 50 may be used; etc.).

Related Error Messages
______________________

+ :ref:`must-be-of-type-%s,-%s-given`

See Also
________

+ `cURL Predefined Constants <https://www.php.net/manual/en/curl.constants.php>`_

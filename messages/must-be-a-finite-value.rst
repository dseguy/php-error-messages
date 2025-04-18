.. _must-be-a-finite-value:

must be a finite value
----------------------
 
.. meta::
	:description:
		must be a finite value: This error is raised when a parameter was provided with an infinite value.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: must be a finite value
	:og:description: This error is raised when a parameter was provided with an infinite value
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/must-be-a-finite-value.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: must be a finite value
	:twitter:description: must be a finite value: This error is raised when a parameter was provided with an infinite value
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/must-be-a-finite-value.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/must-be-a-finite-value.html","name":"must be a finite value","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 23 Feb 2025 14:14:28 +0000","dateModified":"Sun, 23 Feb 2025 14:14:28 +0000","description":"This error is raised when a parameter was provided with an infinite value","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/must-be-a-finite-value.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
This error is raised when a parameter was provided with an infinite value. 

Infinite values are generated by maths functions such as ``atan`` or ``log``, and also with the ``INF`` and ``NAN`` constants. Infinite values are considered to be typed ``float``.

For example, ``stream_socket_client()`` and  ``stream_socket_accept()`` require a ``$timeout`` parameter, and it is tempting, but not valid, to provide ``INF``.

Example
_______

.. code-block:: php

   <?php
   
   $fp = stream_socket_client(tcp://www.example.com:80, $errno, $errstr, INF);
   
   ?>

Solutions
_________

+ Use a very large, but finite float value, such as ``PHP_FLOAT_MAX``, which will be valid until the end of the universe, even in nanoseconds.

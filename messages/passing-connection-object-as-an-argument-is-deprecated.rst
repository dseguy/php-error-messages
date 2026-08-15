.. _passing-connection-object-as-an-argument-is-deprecated:

Passing connection object as an argument is deprecated
------------------------------------------------------
 
.. meta::
	:description:
		Passing connection object as an argument is deprecated: ``mysqli_get_client_info()`` reports the version of the underlying MySQL client library that PHP was compiled/linked against.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Passing connection object as an argument is deprecated
	:og:description: ``mysqli_get_client_info()`` reports the version of the underlying MySQL client library that PHP was compiled/linked against
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/passing-connection-object-as-an-argument-is-deprecated.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Passing connection object as an argument is deprecated
	:twitter:description: Passing connection object as an argument is deprecated: ``mysqli_get_client_info()`` reports the version of the underlying MySQL client library that PHP was compiled/linked against
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/passing-connection-object-as-an-argument-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/passing-connection-object-as-an-argument-is-deprecated.html","name":"Passing connection object as an argument is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 11 Aug 2026 20:55:19 +0000","dateModified":"Tue, 11 Aug 2026 20:55:19 +0000","description":"``mysqli_get_client_info()`` reports the version of the underlying MySQL client library that PHP was compiled\/linked against","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/passing-connection-object-as-an-argument-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
``mysqli_get_client_info()`` reports the version of the underlying MySQL client library that PHP was compiled/linked against. This information is a property of the client library itself, not of any particular connection, so the function never actually needed a connection argument, even though its procedural signature historically accepted one for consistency with other ``mysqli_*`` functions.

Passing a connection object to this function has no effect on the result, and is deprecated as of PHP 8.1.0 to make that clear.

Example
_______

.. code-block:: php

   <?php
   
   $mysqli = mysqli_connect('localhost', 'user', 'password');
   
   // The connection argument is ignored by this function.
   echo mysqli_get_client_info($mysqli);
   
   ?>

Solutions
_________

+ Call ``mysqli_get_client_info()`` without arguments, e.g. ``mysqli_get_client_info()``.
+ When using the object-oriented API, use ``mysqli_get_client_info()`` (not a method call), since the client info is not connection-specific.

Related Error Messages
______________________

+ :ref:`automatic-fetching-of-postgresql-connection-is-deprecated`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See `mysqli_get_client_info <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/mysqli_get_client_info.html>`_.

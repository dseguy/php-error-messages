.. _the-predefined-locally-scoped-\$http_response_header-variable-is-deprecated,:

The predefined locally scoped $http_response_header variable is deprecated, call http_get_last_response_headers() instead
-------------------------------------------------------------------------------------------------------------------------
 
.. meta::
	:description:
		The predefined locally scoped $http_response_header variable is deprecated, call http_get_last_response_headers() instead: The PHP variable ``$http_response_header`` is automagically created after a call to a remote resource.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: The predefined locally scoped $http_response_header variable is deprecated, call http_get_last_response_headers() instead
	:og:description: The PHP variable ``$http_response_header`` is automagically created after a call to a remote resource
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/the-predefined-locally-scoped-%24http_response_header-variable-is-deprecated%2C.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: The predefined locally scoped $http_response_header variable is deprecated, call http_get_last_response_headers() instead
	:twitter:description: The predefined locally scoped $http_response_header variable is deprecated, call http_get_last_response_headers() instead: The PHP variable ``$http_response_header`` is automagically created after a call to a remote resource
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/the-predefined-locally-scoped-$http_response_header-variable-is-deprecated,.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/the-predefined-locally-scoped-$http_response_header-variable-is-deprecated,.html","name":"The predefined locally scoped $http_response_header variable is deprecated, call http_get_last_response_headers() instead","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sat, 25 Oct 2025 08:51:06 +0000","dateModified":"Sat, 25 Oct 2025 08:51:06 +0000","description":"The PHP variable ``$http_response_header`` is automagically created after a call to a remote resource","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/the-predefined-locally-scoped-$http_response_header-variable-is-deprecated,.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The PHP variable ``$http_response_header`` is automagically created after a call to a remote resource. It contains the returned headers, for further analysis. This variable is deprecated since PHP 8.5, and will disappear in PHP 9.0. It should be replaced with a call to http_get_last_response_headers().

Example
_______

.. code-block:: php

   <?php
   
     file_get_contents(https://www.php.net/);
     var_dump($http_response_header); // variable is populated in the local scope
   
   ?>

Solutions
_________

+ Call ``http_get_last_response_headers()`` instead of relying on the variable.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See `http_response_header <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/http_response_header.html>`_.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See `http_response_header <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/http_response_header.html>`_.

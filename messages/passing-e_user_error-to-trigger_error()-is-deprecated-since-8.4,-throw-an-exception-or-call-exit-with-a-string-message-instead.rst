.. _passing-e_user_error-to-trigger_error()-is-deprecated-since-8.4,-throw-an-exception-or-call-exit-with-a-string-message-instead:

Passing E_USER_ERROR to trigger_error() is deprecated since 8.4, throw an exception or call exit with a string message instead
------------------------------------------------------------------------------------------------------------------------------
 
.. meta::
	:description:
		Passing E_USER_ERROR to trigger_error() is deprecated since 8.4, throw an exception or call exit with a string message instead: The error level ``E_USER_ERROR`` is deprecated since PHP 8.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Passing E_USER_ERROR to trigger_error() is deprecated since 8.4, throw an exception or call exit with a string message instead
	:og:description: The error level ``E_USER_ERROR`` is deprecated since PHP 8
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/passing-e_user_error-to-trigger_error%28%29-is-deprecated-since-8.4%2C-throw-an-exception-or-call-exit-with-a-string-message-instead.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Passing E_USER_ERROR to trigger_error() is deprecated since 8.4, throw an exception or call exit with a string message instead
	:twitter:description: Passing E_USER_ERROR to trigger_error() is deprecated since 8.4, throw an exception or call exit with a string message instead: The error level ``E_USER_ERROR`` is deprecated since PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/passing-e_user_error-to-trigger_error()-is-deprecated-since-8.4,-throw-an-exception-or-call-exit-with-a-string-message-instead.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/passing-e_user_error-to-trigger_error()-is-deprecated-since-8.4,-throw-an-exception-or-call-exit-with-a-string-message-instead.html","name":"Passing E_USER_ERROR to trigger_error() is deprecated since 8.4, throw an exception or call exit with a string message instead","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 18 Mar 2025 20:50:50 +0000","dateModified":"Tue, 18 Mar 2025 20:50:50 +0000","description":"The error level ``E_USER_ERROR`` is deprecated since PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/passing-e_user_error-to-trigger_error()-is-deprecated-since-8.4,-throw-an-exception-or-call-exit-with-a-string-message-instead.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The error level ``E_USER_ERROR`` is deprecated since PHP 8.4. It should be replaced with a thrown exceptions. The other levels, ``E_USER_NOTICE`` and ``E_USER_WARNING`` are still available.

Example
_______

.. code-block:: php

   <?php
   
   trigger_error('message', E_USER_ERROR);
   
   ?>

Solutions
_________

+ Throw an execption.

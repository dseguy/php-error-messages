.. _maximum-execution-time-of-%d-second%s-exceeded:

Maximum execution time of %d second%s exceeded
----------------------------------------------
 
.. meta::
	:description:
		Maximum execution time of %d second%s exceeded: This error indicates that the application has been running for longer than an acceptable amount of time: by default, 30 seconds.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Maximum execution time of %d second%s exceeded
	:og:description: This error indicates that the application has been running for longer than an acceptable amount of time: by default, 30 seconds
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/maximum-execution-time-of-%25d-second%25s-exceeded.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Maximum execution time of %d second%s exceeded
	:twitter:description: Maximum execution time of %d second%s exceeded: This error indicates that the application has been running for longer than an acceptable amount of time: by default, 30 seconds
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/maximum-execution-time-of-%d-second%s-exceeded.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/maximum-execution-time-of-%d-second%s-exceeded.html","name":"Maximum execution time of %d second%s exceeded","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 24 Mar 2025 17:29:58 +0000","dateModified":"Mon, 24 Mar 2025 17:29:58 +0000","description":"This error indicates that the application has been running for longer than an acceptable amount of time: by default, 30 seconds","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/maximum-execution-time-of-%d-second%s-exceeded.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
This error indicates that the application has been running for longer than an acceptable amount of time: by default, 30 seconds. 

To avoid working indefinitely on a task, PHP cancels its execution.

It is common to set this duration to low levels, so as to keep execution time short. In a production environement, any such error should be investigated, and refactored.

Example
_______

.. code-block:: php

   <?php
   
   // an infinite loop that will break beyond max execution time, eventually
   for(;;) {}
   
   ?>


Literal Examples
****************
+ Maximum execution time of 30 seconds exceeded

Solutions
_________

+ Write faster PHP code.
+ Write lighter PHP code.
+ Update the configuration directive max_execution_time for the whole application.
+ Update the configuration directive max_execution_time for a part of the application.

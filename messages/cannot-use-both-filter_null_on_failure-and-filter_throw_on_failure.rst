.. _cannot-use-both-filter_null_on_failure-and-filter_throw_on_failure:

cannot use both FILTER_NULL_ON_FAILURE and FILTER_THROW_ON_FAILURE
------------------------------------------------------------------
 
.. meta::
	:description:
		cannot use both FILTER_NULL_ON_FAILURE and FILTER_THROW_ON_FAILURE: There are two options for the filter extension to handle errors: either return null, or throw an exception.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: cannot use both FILTER_NULL_ON_FAILURE and FILTER_THROW_ON_FAILURE
	:og:description: There are two options for the filter extension to handle errors: either return null, or throw an exception
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-use-both-filter_null_on_failure-and-filter_throw_on_failure.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: cannot use both FILTER_NULL_ON_FAILURE and FILTER_THROW_ON_FAILURE
	:twitter:description: cannot use both FILTER_NULL_ON_FAILURE and FILTER_THROW_ON_FAILURE: There are two options for the filter extension to handle errors: either return null, or throw an exception
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-both-filter_null_on_failure-and-filter_throw_on_failure.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-both-filter_null_on_failure-and-filter_throw_on_failure.html","name":"cannot use both FILTER_NULL_ON_FAILURE and FILTER_THROW_ON_FAILURE","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 01 Feb 2026 17:36:47 +0000","dateModified":"Sun, 01 Feb 2026 17:36:47 +0000","description":"There are two options for the filter extension to handle errors: either return null, or throw an exception","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-use-both-filter_null_on_failure-and-filter_throw_on_failure.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
There are two options for the filter extension to handle errors: either return null, or throw an exception. They are mutually exclusive, and can't be used at the same time.

Example
_______

.. code-block:: php

   <?php
   
       // combining constants with |
       filter_var( value: 'bob@example.com', 
                   filter: FILTER_VALIDATE_EMAIL, 
                   options: FILTER_NULL_ON_FAILURE | FILTER_THROW_ON_FAILURE,
                   );
   
       // combining constants with +
       filter_var( value: 'bob@example.com', 
                   filter: FILTER_VALIDATE_EMAIL, 
                   options: FILTER_NULL_ON_FAILURE + FILTER_THROW_ON_FAILURE,
                   );
   
   
       // FILTER_NULL_ON_FAILURE + FILTER_THROW_ON_FAILURE = 402653184
       filter_var( value: 'bob@example.com', 
                   filter: FILTER_VALIDATE_EMAIL, 
                   options: 402653184,
                   );
   
   ?>

Solutions
_________

+ Use only one of the two constants.
+ When providing the options as an integer, make sure the bytes 27 and 28 are not set at the same time.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.

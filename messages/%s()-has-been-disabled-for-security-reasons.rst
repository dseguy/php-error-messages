.. _%s()-has-been-disabled-for-security-reasons:

%s() has been disabled for security reasons
-------------------------------------------
 
.. meta::
	:description:
		%s() has been disabled for security reasons: The function mentionned in the message was disabled with the ``disable_functions`` directive.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: %s() has been disabled for security reasons
	:og:description: The function mentionned in the message was disabled with the ``disable_functions`` directive
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/%25s%28%29-has-been-disabled-for-security-reasons.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: %s() has been disabled for security reasons
	:twitter:description: %s() has been disabled for security reasons: The function mentionned in the message was disabled with the ``disable_functions`` directive
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/%s()-has-been-disabled-for-security-reasons.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/%s()-has-been-disabled-for-security-reasons.html","name":"%s() has been disabled for security reasons","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 15 Jan 2025 15:30:08 +0000","dateModified":"Wed, 15 Jan 2025 15:30:08 +0000","description":"The function mentionned in the message was disabled with the ``disable_functions`` directive","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/%s()-has-been-disabled-for-security-reasons.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The function mentionned in the message was disabled with the ``disable_functions`` directive. It is not possible to use it, nor to redefine it.

Example
_______

.. code-block:: php

   <?php
   
   shell_exec('ls -la');
   
   ?>


Literal Examples
****************
+ shell_exec() has been disabled for security reasons

Solutions
_________

+ Remove the function from the ``disable_functions`` directive.
+ Find another function with a similar feature.


In more recent PHP versions, this error message is now :ref:`call-to-undefined-function-%s()`.

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

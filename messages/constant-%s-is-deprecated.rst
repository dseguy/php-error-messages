.. _constant-%s-is-deprecated:

Constant %s is deprecated
-------------------------
 
.. meta::
	:description:
		Constant %s is deprecated: This error is emitted when a global constant is supported in the current PHP engine, but will be removed in a future version.
		:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
		:og:type: article
		:og:title: Constant %s is deprecated
		:og:description: This error is emitted when a global constant is supported in the current PHP engine, but will be removed in a future version
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/constant-%25s-is-deprecated.html
	    :og:locale: en
		:twitter:card: summary_large_image
		:twitter:site: @exakat
		:twitter:title: Constant %s is deprecated
		:twitter:description: Constant %s is deprecated: This error is emitted when a global constant is supported in the current PHP engine, but will be removed in a future version
		:twitter:creator: @exakat
		:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

Description
___________
 
This error is emitted when a global constant is supported in the current PHP engine, but will be removed in a future version.

The error is emitted every time the constant is used: it may be for its actual intend, or anywhere else.

Example
_______

.. code-block:: php

   <?php
   
   error_reporting(E_STRICT);
   
   ?>


Literal Examples
****************
+ Constant E_STRICT is deprecated

Solutions
_________

+ Stop using that global constant.
+ Find the replacement for this global constant: it might be another constant, or a different command entirely.

Related Error Messages
______________________

+ :ref:`constant-%s::%s-is-deprecated`

.. _undefined-array-key:

Undefined array key
-------------------
 
.. meta::
	:description:
		Undefined array key: This notice is emitted when an offset (string or integer) is being used before being defined.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Undefined array key
	:og:description: This notice is emitted when an offset (string or integer) is being used before being defined
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/undefined-array-key.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Undefined array key
	:twitter:description: Undefined array key: This notice is emitted when an offset (string or integer) is being used before being defined
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

Description
___________
 
This notice is emitted when an offset (string or integer) is being used before being defined. In a word, the elemenent at this offset is not created yet, so PHP creates it on the fly, as NULL, then uses it. 

Example
_______

.. code-block:: php

   <?php
   
   echo [1,2,3][4];
   
   ?>

Solutions
_________

+ Test the existence of the offset before usage.
+ Gives the offset a default value before usage.

Related Error Messages
______________________

+ :ref:`undefined-variable`
+ :ref:`is-an-invalid-offset`


In previous PHP versions, this error message used to be :ref:`undefined-offset`.

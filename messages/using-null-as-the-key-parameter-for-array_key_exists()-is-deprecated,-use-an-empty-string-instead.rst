.. _using-null-as-the-key-parameter-for-array_key_exists()-is-deprecated,-use-an-empty-string-instead:

Using null as the key parameter for array_key_exists() is deprecated, use an empty string instead
-------------------------------------------------------------------------------------------------
 
.. meta::
	:description:
		Using null as the key parameter for array_key_exists() is deprecated, use an empty string instead: ``null`` cannot be used as an array index anymore, since PHP 8.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Using null as the key parameter for array_key_exists() is deprecated, use an empty string instead
	:og:description: ``null`` cannot be used as an array index anymore, since PHP 8
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/using-null-as-the-key-parameter-for-array_key_exists%28%29-is-deprecated%2C-use-an-empty-string-instead.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Using null as the key parameter for array_key_exists() is deprecated, use an empty string instead
	:twitter:description: Using null as the key parameter for array_key_exists() is deprecated, use an empty string instead: ``null`` cannot be used as an array index anymore, since PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/using-null-as-the-key-parameter-for-array_key_exists()-is-deprecated,-use-an-empty-string-instead.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/using-null-as-the-key-parameter-for-array_key_exists()-is-deprecated,-use-an-empty-string-instead.html","name":"Using null as the key parameter for array_key_exists() is deprecated, use an empty string instead","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 16 Nov 2025 19:47:36 +0000","dateModified":"Sun, 16 Nov 2025 19:47:36 +0000","description":"``null`` cannot be used as an array index anymore, since PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/using-null-as-the-key-parameter-for-array_key_exists()-is-deprecated,-use-an-empty-string-instead.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
``null`` cannot be used as an array index anymore, since PHP 8.5. It is deprecated. As such, there is no point anymore to in passing such values to the first argument of array_key_exists(), and this is also deprecated.

Example
_______

.. code-block:: php

   <?php
   
   $array = [null => 1];
   var_dump(array_key_exists(null, $array));
   
   ?>

Solutions
_________

+ Use the coalesce operator ``??`` to turn the ``null`` into another value, such as empty string.
+ Replace the ``null`` value by the empty string.

Related Error Messages
______________________

+ :ref:`using-null-as-an-array-offset-is-deprecated,-use-an-empty-string-instead`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See `NullAsArrayOffset <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/NullAsArrayOffset.html>`_, `NullWithArrayKeyExists <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/NullWithArrayKeyExists.html>`_.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See `NullAsArrayOffset <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/NullAsArrayOffset.html>`_, `NullWithArrayKeyExists <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/NullWithArrayKeyExists.html>`_.

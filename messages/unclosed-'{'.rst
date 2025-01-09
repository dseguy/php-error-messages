.. _unclosed-'{':

Unclosed '{'
------------
 
	.. meta::
		:description:
			Unclosed '{': This error is related to the PHP short tags.

		:og:type: article
		:og:title: Unclosed &#039;{&#039;
		:og:description: This error is related to the PHP short tags
		:og:url: https://php-errors.readthedocs.io/en/latest/messages/unclosed-%27%7B%27.html

Description
___________
 
This error is related to the PHP short tags. In the heart of the ``B`` method, the PHP tag is closed, then opened again. That second opening is using the PHP short tags. When this directive is disabled, it makes the rest of the text after the closing tag literal, and it is not parsed anymore into PHP code. Since the closing brackets are there, PHP reports they are missing. 

Example
_______

.. code-block:: php

   <?php
   
   class A
   {
   	public function B()
   	{
   		?>C<?
   	}
   
   }

Solutions
_________

+ Make the short open tag a full ``<?php``.
+ Activate the short open tag directive ``<?php``.

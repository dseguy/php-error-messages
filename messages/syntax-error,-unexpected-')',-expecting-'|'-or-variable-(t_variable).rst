.. _syntax-error,-unexpected-')',-expecting-'|'-or-variable-(t_variable):

syntax error, unexpected ')', expecting '|' or variable (T_VARIABLE)
--------------------------------------------------------------------
 
.. meta::
	:description:
		syntax error, unexpected ')', expecting '|' or variable (T_VARIABLE): Until PHP 8.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: syntax error, unexpected &#039;)&#039;, expecting &#039;|&#039; or variable (T_VARIABLE)
	:og:description: Until PHP 8
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/syntax-error%2C-unexpected-%27%29%27%2C-expecting-%27%7C%27-or-variable-%28t_variable%29.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: syntax error, unexpected ')', expecting '|' or variable (T_VARIABLE)
	:twitter:description: syntax error, unexpected ')', expecting '|' or variable (T_VARIABLE): Until PHP 8
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-')',-expecting-'|'-or-variable-(t_variable).html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-')',-expecting-'|'-or-variable-(t_variable).html","name":"syntax error, unexpected ')', expecting '|' or variable (T_VARIABLE)","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 25 Dec 2024 11:02:55 +0000","dateModified":"Wed, 25 Dec 2024 11:02:55 +0000","description":"Until PHP 8","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/syntax-error,-unexpected-')',-expecting-'|'-or-variable-(t_variable).html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Until PHP 8.0, exceptions always had to be named, with a variable. 

Here, the error message is signaling that it expected another exception to catch, separated from the first one by a ``|``, or a variable name. 

Example
_______

.. code-block:: php

   <?php
   
   try {
       
   } catch (E) {}
   
   ?>

Solutions
_________

+ Add a variable name to the catch clause.
+ Add another exception to catch, and then a name to the catch clause.
+ Upgrade to PHP 8.0 or more recent.

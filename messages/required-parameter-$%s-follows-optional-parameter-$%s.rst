.. _required-parameter-\$%s-follows-optional-parameter-\$%s:

Required parameter $%s follows optional parameter $%s
-----------------------------------------------------
 
.. meta::
	:description:
		Required parameter $%s follows optional parameter $%s: An optional parameter has a default value, while a required parameter doesn&#039;t.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Required parameter $%s follows optional parameter $%s
	:og:description: An optional parameter has a default value, while a required parameter doesn&#039;t
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/required-parameter-%24%25s-follows-optional-parameter-%24%25s.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Required parameter $%s follows optional parameter $%s
	:twitter:description: Required parameter $%s follows optional parameter $%s: An optional parameter has a default value, while a required parameter doesn't
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/required-parameter-$%s-follows-optional-parameter-$%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/required-parameter-$%s-follows-optional-parameter-$%s.html","name":"Required parameter $%s follows optional parameter $%s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 25 Nov 2024 22:30:40 +0000","dateModified":"Mon, 25 Nov 2024 22:30:40 +0000","description":"An optional parameter has a default value, while a required parameter doesn't","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/required-parameter-$%s-follows-optional-parameter-$%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
An optional parameter has a default value, while a required parameter doesn't. In a method signature, PHP recommends to set the required parameters first, then the optional parameter. 

When this is not the case, PHP is unable to understand if an argument has to be assigned to a parameter, or if it can be skipped, and assigned to the next required. When this happens, any required parameter makes previously defined parameter also required. 


Example
_______

.. code-block:: php

   <?php
   	
   function foo($a = 1, $b) {}
   	
   ?>


Literal Examples
****************
+ Required parameter $b follows optional parameter $b

Solutions
_________

+ Remove the default value of the early optional parameter.
+ Add a default value of the late required parameter.


In more recent PHP versions, this error message is now :ref:`optional-parameter-$%s-declared-before-required-parameter-$%s-is-implicitly-treated-as-a-required-parameter`.

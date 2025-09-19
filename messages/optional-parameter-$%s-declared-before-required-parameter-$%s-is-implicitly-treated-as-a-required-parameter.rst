.. _optional-parameter-\$%s-declared-before-required-parameter-\$%s-is-implicitly-treated-as-a-required-parameter:

Optional parameter %s declared before required parameter %s is implicitly treated as a required parameter
---------------------------------------------------------------------------------------------------------
 
.. meta::
	:description:
		Optional parameter %s declared before required parameter %s is implicitly treated as a required parameter: An optional parameter has a default value, while a required parameter doesn&#039;t.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Optional parameter %s declared before required parameter %s is implicitly treated as a required parameter
	:og:description: An optional parameter has a default value, while a required parameter doesn&#039;t
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/optional-parameter-%24%25s-declared-before-required-parameter-%24%25s-is-implicitly-treated-as-a-required-parameter.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Optional parameter %s declared before required parameter %s is implicitly treated as a required parameter
	:twitter:description: Optional parameter %s declared before required parameter %s is implicitly treated as a required parameter: An optional parameter has a default value, while a required parameter doesn't
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/optional-parameter-$%s-declared-before-required-parameter-$%s-is-implicitly-treated-as-a-required-parameter.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/optional-parameter-$%s-declared-before-required-parameter-$%s-is-implicitly-treated-as-a-required-parameter.html","name":"Optional parameter %s declared before required parameter %s is implicitly treated as a required parameter","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 19 Sep 2025 19:30:40 +0000","dateModified":"Fri, 19 Sep 2025 19:30:40 +0000","description":"An optional parameter has a default value, while a required parameter doesn't","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/optional-parameter-$%s-declared-before-required-parameter-$%s-is-implicitly-treated-as-a-required-parameter.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

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
+ Optional parameter $a declared before required parameter $b is implicitly treated as a required parameter

Solutions
_________

+ Remove the default value of the early optional parameter.
+ Add a default value of the late required parameter.


In previous PHP versions, this error message used to be :ref:`required-parameter-$%s-follows-optional-parameter-$%s`.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See `none <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/none.html>`_.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See `none <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/none.html>`_.

Static Analysis
_______________

This error may be tracked down with the following static analysis rules: `Functions/WrongOptionalParameter <https://exakat.readthedocs.io/en/latest/Reference/Rules/Functions/WrongOptionalParameter.html>`_.

.. _cannot-use-lexical-variable-%s-as-a-parameter-name:

Cannot use lexical variable %s as a parameter name
--------------------------------------------------
 
.. meta::
	:description:
		Cannot use lexical variable %s as a parameter name: It is not possible to use a parameter and import a variable of the same name.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Cannot use lexical variable %s as a parameter name
	:og:description: It is not possible to use a parameter and import a variable of the same name
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-use-lexical-variable-%25s-as-a-parameter-name.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Cannot use lexical variable %s as a parameter name
	:twitter:description: Cannot use lexical variable %s as a parameter name: It is not possible to use a parameter and import a variable of the same name
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-lexical-variable-%s-as-a-parameter-name.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-use-lexical-variable-%s-as-a-parameter-name.html","name":"Cannot use lexical variable %s as a parameter name","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Wed, 04 Dec 2024 17:45:39 +0000","dateModified":"Wed, 04 Dec 2024 17:45:39 +0000","description":"It is not possible to use a parameter and import a variable of the same name","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-use-lexical-variable-%s-as-a-parameter-name.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
It is not possible to use a parameter and import a variable of the same name. This would result in a naming conflict, and a data overwrite. All names should be distinct.

Example
_______

.. code-block:: php

   <?php
   
   function ($a) use ($a) {}; 
   
   ?>


Literal Examples
****************
+ Cannot use lexical variable $x as a parameter name

Solutions
_________

+ Rename the variable in the use clause.
+ Rename the parameter in the function clause.

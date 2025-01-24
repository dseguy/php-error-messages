.. _property-%s-does-not-exist:

Property %s does not exist
--------------------------
 
.. meta::
	:description:
		Property %s does not exist: This error happens when the Reflection API fails at getting the description of a non-existent property.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Property %s does not exist
	:og:description: This error happens when the Reflection API fails at getting the description of a non-existent property
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/property-%25s-does-not-exist.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Property %s does not exist
	:twitter:description: Property %s does not exist: This error happens when the Reflection API fails at getting the description of a non-existent property
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/property-%s-does-not-exist.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/property-%s-does-not-exist.html","name":"Property %s does not exist","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 17 Jan 2025 09:00:51 +0000","dateModified":"Fri, 17 Jan 2025 09:00:51 +0000","description":"This error happens when the Reflection API fails at getting the description of a non-existent property","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/property-%s-does-not-exist.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
This error happens when the Reflection API fails at getting the description of a non-existent property. The name of the property should be checked before using the ``getProperty`` method.

Example
_______

.. code-block:: php

   <?php
       $class = new ReflectionClass('ReflectionClass');
       $property = $class->getProperty('unkown');
       var_dump($property);
   ?>


Literal Examples
****************
+ Property unknown does not exist

Solutions
_________

+ Check that the property exists before using ``getProperty``.

Related Error Messages
______________________

+ :ref:`undefined-property-%s::$%s`


In more recent PHP versions, this error message is now :ref:`property-%s::$%s-does-not-exist`.

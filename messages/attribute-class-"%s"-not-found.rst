.. _attribute-class-"%s"-not-found:

Attribute class "%s" not found
------------------------------
 
.. meta::
	:description:
		Attribute class "%s" not found: This error reports that a class was not found.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Attribute class &quot;%s&quot; not found
	:og:description: This error reports that a class was not found
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/attribute-class-%22%25s%22-not-found.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Attribute class "%s" not found
	:twitter:description: Attribute class "%s" not found: This error reports that a class was not found
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/attribute-class-\"%s\"-not-found.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/attribute-class-\"%s\"-not-found.html","name":"Attribute class \"%s\" not found","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"This error reports that a class was not found","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/attribute-class-\"%s\"-not-found.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
This error reports that a class was not found. This is also focusing on attribute classes. 

Class are reported as not found when they are used, so this error message is displayed when the attribute is actually used in the code, by calling the ``getInstance`` reflection. An attribute might exists without its underlying class, as long as it is not instanciated.

Example
_______

.. code-block:: php

   <?php
   
   #[X] 
   function f() { }
   
   $ref = new \ReflectionFunction('\f');
   
   try {
       $ref->getAttributes()[0]->newInstance();
   } catch (\Error $e) {
       var_dump($e->getMessage());
   }
   ?>


Literal Examples
****************
+ Attribute class "Deprecated" not found

Solutions
_________

+ Check spelling and namespace for that class.
+ Create the associated class.
+ Avoid using getInstance() on that attribute.

Related Error Messages
______________________

+ :ref:`class-"%s"-not-found`
+ :ref:`interface-"%s"-not-found`

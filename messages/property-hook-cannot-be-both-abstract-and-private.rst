.. _property-hook-cannot-be-both-abstract-and-private:

Property hook cannot be both abstract and private
-------------------------------------------------
 
.. meta::
	:description:
		Property hook cannot be both abstract and private: Property hook may be private, as in only available to current class, or abstract, as in always redefined in a child class, but not both at the same time.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Property hook cannot be both abstract and private
	:og:description: Property hook may be private, as in only available to current class, or abstract, as in always redefined in a child class, but not both at the same time
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/property-hook-cannot-be-both-abstract-and-private.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Property hook cannot be both abstract and private
	:twitter:description: Property hook cannot be both abstract and private: Property hook may be private, as in only available to current class, or abstract, as in always redefined in a child class, but not both at the same time
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/property-hook-cannot-be-both-abstract-and-private.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/property-hook-cannot-be-both-abstract-and-private.html","name":"Property hook cannot be both abstract and private","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"Property hook may be private, as in only available to current class, or abstract, as in always redefined in a child class, but not both at the same time","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/property-hook-cannot-be-both-abstract-and-private.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
Property hook may be private, as in only available to current class, or abstract, as in always redefined in a child class, but not both at the same time. 

It is the same as for methods.

Example
_______

.. code-block:: php

   <?php
   
   class X {
       private abstract $property { get; }
   }
   
   ?>

Solutions
_________

+ Make the method protected or public.
+ Remove the abstract keyword.

.. _property-hook-cannot-be-both-final-and-private:

Property hook cannot be both final and private
----------------------------------------------
 
.. meta::
	:description:
		Property hook cannot be both final and private: When a property is final, it cannot be overridden in a child class.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Property hook cannot be both final and private
	:og:description: When a property is final, it cannot be overridden in a child class
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/property-hook-cannot-be-both-final-and-private.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Property hook cannot be both final and private
	:twitter:description: Property hook cannot be both final and private: When a property is final, it cannot be overridden in a child class
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/property-hook-cannot-be-both-final-and-private.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/property-hook-cannot-be-both-final-and-private.html","name":"Property hook cannot be both final and private","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"When a property is final, it cannot be overridden in a child class","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/property-hook-cannot-be-both-final-and-private.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
When a property is final, it cannot be overridden in a child class; when a class is private, it is only available in the current class. 

Hence, a property cannot be final and private at the same time. 

In this situation, the property may be final, due to the property hooks. A property without hooks cannot be final.

Example
_______

.. code-block:: php

   <?php
   
   class X {
   	private $p {
   		final get => 2;
   		set => $this->p = $value;
   	}
   }
   
   ?>

Solutions
_________

+ Remove the hooks, and use the magic methods __get/__set.
+ Remove the final keyword.
+ Remove the private keyword and use protected or public.

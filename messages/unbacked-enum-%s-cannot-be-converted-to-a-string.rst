.. _unbacked-enum-%s-cannot-be-converted-to-a-string:

Unbacked enum %s cannot be converted to a string
------------------------------------------------
 
.. meta::
	:description:
		Unbacked enum %s cannot be converted to a string: http_build_query() function convert an array of strings to their URL encoded version.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Unbacked enum %s cannot be converted to a string
	:og:description: http_build_query() function convert an array of strings to their URL encoded version
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/unbacked-enum-%25s-cannot-be-converted-to-a-string.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Unbacked enum %s cannot be converted to a string
	:twitter:description: Unbacked enum %s cannot be converted to a string: http_build_query() function convert an array of strings to their URL encoded version
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/unbacked-enum-%s-cannot-be-converted-to-a-string.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/unbacked-enum-%s-cannot-be-converted-to-a-string.html","name":"Unbacked enum %s cannot be converted to a string","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"http_build_query() function convert an array of strings to their URL encoded version","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/unbacked-enum-%s-cannot-be-converted-to-a-string.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
http_build_query() function convert an array of strings to their URL encoded version. When encountering an enumeration, it makes it work with string and integer enumerations, but not with the unbacked enumerations.

Example
_______

.. code-block:: php

   <?php
   
   enum E {
       case A;
   }
   
   try {
       echo http_build_query(['e' => E::A]);
   } catch (ValueError $e) {
       echo $e->getMessage(), \n;
   }
   
   ?>

Solutions
_________

+ Add a type to the enumeration, ``string`` or ``int``. Then, add values to the cases.
+ Convert the enumeration cases into strings before using them with http_build_query().

See Also
________

+ `http_build_query <https://www.php.net/manual/en/function.http-build-query.php>`_

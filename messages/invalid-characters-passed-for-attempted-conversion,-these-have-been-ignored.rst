.. _invalid-characters-passed-for-attempted-conversion,-these-have-been-ignored:

Invalid characters passed for attempted conversion, these have been ignored
---------------------------------------------------------------------------
 
.. meta::
	:description:
		Invalid characters passed for attempted conversion, these have been ignored: This error is emitted when a character outside the range of validity is used.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Invalid characters passed for attempted conversion, these have been ignored
	:og:description: This error is emitted when a character outside the range of validity is used
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/invalid-characters-passed-for-attempted-conversion%2C-these-have-been-ignored.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Invalid characters passed for attempted conversion, these have been ignored
	:twitter:description: Invalid characters passed for attempted conversion, these have been ignored: This error is emitted when a character outside the range of validity is used
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/invalid-characters-passed-for-attempted-conversion,-these-have-been-ignored.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/invalid-characters-passed-for-attempted-conversion,-these-have-been-ignored.html","name":"Invalid characters passed for attempted conversion, these have been ignored","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 24 Mar 2025 11:06:00 +0000","dateModified":"Mon, 24 Mar 2025 11:06:00 +0000","description":"This error is emitted when a character outside the range of validity is used","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/invalid-characters-passed-for-attempted-conversion,-these-have-been-ignored.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
This error is emitted when a character outside the range of validity is used. 

In the example above, the ``octdec()`` function converts a string from octal to decimal. Octals are written with figures from 0 to 8. In this case, 9 is excluded. 

The same error is emitted with the other maths bases : for example, using 'a' in a decimal, or 'X' in a hexadecimal, etc.

Example
_______

.. code-block:: php

   <?php
   
   // 9 is not an octal and can't be converted
   $decimal = octdec(342391);
   
   // same as above, but the 9 is hidden with the octal notation (starts with 0)
   $decimal = octdec(01234567);
   
   ?>

Solutions
_________

+ Check that the characters are in the correct range before attempting the conversion.

.. _cannot-be-lc_all:

cannot be LC_ALL
----------------
 
.. meta::
	:description:
		cannot be LC_ALL: The 3rd argument ($category) of dcgettext() and the 5th argument ($category) of dcngettext() cannot be LC_ALL.
	:og:image: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: cannot be LC_ALL
	:og:description: The 3rd argument ($category) of dcgettext() and the 5th argument ($category) of dcngettext() cannot be LC_ALL
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/cannot-be-lc_all.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: cannot be LC_ALL
	:twitter:description: cannot be LC_ALL: The 3rd argument ($category) of dcgettext() and the 5th argument ($category) of dcngettext() cannot be LC_ALL
	:twitter:creator: @exakat
	:twitter:image:src: https://php-changed-behaviors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-be-lc_all.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/cannot-be-lc_all.html","name":"cannot be LC_ALL","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 28 Jan 2025 11:32:50 +0000","dateModified":"Tue, 28 Jan 2025 11:32:50 +0000","description":"The 3rd argument ($category) of dcgettext() and the 5th argument ($category) of dcngettext() cannot be LC_ALL","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/cannot-be-lc_all.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The 3rd argument ($category) of dcgettext() and the 5th argument ($category) of dcngettext() cannot be LC_ALL.

Example
_______

.. code-block:: php

   <?php
   
   dcgettext('a', 'item', LC_ALL);
   dcngettext('b', 'item', 'item2', 1, LC_ALL);
   
   ?>

Solutions
_________

+ Use one of the valid categories: LC_CTYPE, LC_NUMERIC, LC_TIME, LC_COLLATE, LC_MONETARY, LC_MESSAGES and LC_ALL.

See Also
________

+ `dcgettext <https://www.php.net/manual/en/function.dcgettext.php>`_
+ `dcngettext <https://www.php.net/manual/en/function.dcngettext.php>`_

.. _only-basic-entities-substitution-is-supported-for-multi-byte-encodings-other-than-utf-8;-functionality-is-equivalent-to-htmlspecialchars:

Only basic entities substitution is supported for multi-byte encodings other than UTF-8; functionality is equivalent to htmlspecialchars
----------------------------------------------------------------------------------------------------------------------------------------
 
.. meta::
	:description:
		Only basic entities substitution is supported for multi-byte encodings other than UTF-8; functionality is equivalent to htmlspecialchars: When passing a valid encoding to htmlentities(), but that is not supported, a warning is displayed, and an empty string is returned.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Only basic entities substitution is supported for multi-byte encodings other than UTF-8; functionality is equivalent to htmlspecialchars
	:og:description: When passing a valid encoding to htmlentities(), but that is not supported, a warning is displayed, and an empty string is returned
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/only-basic-entities-substitution-is-supported-for-multi-byte-encodings-other-than-utf-8%3B-functionality-is-equivalent-to-htmlspecialchars.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Only basic entities substitution is supported for multi-byte encodings other than UTF-8; functionality is equivalent to htmlspecialchars
	:twitter:description: Only basic entities substitution is supported for multi-byte encodings other than UTF-8; functionality is equivalent to htmlspecialchars: When passing a valid encoding to htmlentities(), but that is not supported, a warning is displayed, and an empty string is returned
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/only-basic-entities-substitution-is-supported-for-multi-byte-encodings-other-than-utf-8;-functionality-is-equivalent-to-htmlspecialchars.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/only-basic-entities-substitution-is-supported-for-multi-byte-encodings-other-than-utf-8;-functionality-is-equivalent-to-htmlspecialchars.html","name":"Only basic entities substitution is supported for multi-byte encodings other than UTF-8; functionality is equivalent to htmlspecialchars","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 10 Apr 2026 08:45:21 +0000","dateModified":"Fri, 10 Apr 2026 08:45:21 +0000","description":"When passing a valid encoding to htmlentities(), but that is not supported, a warning is displayed, and an empty string is returned","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/only-basic-entities-substitution-is-supported-for-multi-byte-encodings-other-than-utf-8;-functionality-is-equivalent-to-htmlspecialchars.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
When passing a valid encoding to htmlentities(), but that is not supported, a warning is displayed, and an empty string is returned. This contrasts with the behavior when the encoding is not recognized, where PHP defaults to UTF-8, and returns something non empty.

Example
_______

.. code-block:: php

   <?php
   
       var_dump( htmlentities("Café & 'quotes' and € euro", ENT_QUOTES, 'Big5') );
       // '', empty string
   
   ?>

Solutions
_________

+ Check that the used encoding is supported.

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.

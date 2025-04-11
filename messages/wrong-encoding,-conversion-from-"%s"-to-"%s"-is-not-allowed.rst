.. _wrong-encoding,-conversion-from-"%s"-to-"%s"-is-not-allowed:

Wrong encoding, conversion from "%s" to "%s" is not allowed
-----------------------------------------------------------
 
.. meta::
	:description:
		Wrong encoding, conversion from "%s" to "%s" is not allowed: This message reports that the origin or the destination encoding is not supported on this server.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Wrong encoding, conversion from &quot;%s&quot; to &quot;%s&quot; is not allowed
	:og:description: This message reports that the origin or the destination encoding is not supported on this server
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/wrong-encoding%2C-conversion-from-%22%25s%22-to-%22%25s%22-is-not-allowed.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Wrong encoding, conversion from "%s" to "%s" is not allowed
	:twitter:description: Wrong encoding, conversion from "%s" to "%s" is not allowed: This message reports that the origin or the destination encoding is not supported on this server
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/wrong-encoding,-conversion-from-\"%s\"-to-\"%s\"-is-not-allowed.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/wrong-encoding,-conversion-from-\"%s\"-to-\"%s\"-is-not-allowed.html","name":"Wrong encoding, conversion from \"%s\" to \"%s\" is not allowed","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Fri, 21 Feb 2025 18:53:43 +0000","dateModified":"Fri, 21 Feb 2025 18:53:43 +0000","description":"This message reports that the origin or the destination encoding is not supported on this server","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/wrong-encoding,-conversion-from-\"%s\"-to-\"%s\"-is-not-allowed.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
This message reports that the origin or the destination encoding is not supported on this server. It might be a typo in the encoding name, or an uninstalled encoding on the system.

Example
_______

.. code-block:: php

   <?php
   
   $string = iconv('utf-8', 'not-an-encoding', $source);
   
   ?>

Solutions
_________

+ Check the names of the encodings for typos.
+ Check the installed encodings on the system.
+ Check the encodings actually exist.

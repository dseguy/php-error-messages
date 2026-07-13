.. _unknown-digest-algorithm:-%s:

Unknown digest algorithm: %s
----------------------------
 
.. meta::
	:description:
		Unknown digest algorithm: %s: The digest algorithm name passed to a hash function is not recognized by PHP&#039;s Hash extension.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Unknown digest algorithm: %s
	:og:description: The digest algorithm name passed to a hash function is not recognized by PHP&#039;s Hash extension
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/unknown-digest-algorithm%3A-%25s.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Unknown digest algorithm: %s
	:twitter:description: Unknown digest algorithm: %s: The digest algorithm name passed to a hash function is not recognized by PHP's Hash extension
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/unknown-digest-algorithm:-%s.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/unknown-digest-algorithm:-%s.html","name":"Unknown digest algorithm: %s","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Mon, 13 Jul 2026 16:18:52 +0000","dateModified":"Mon, 13 Jul 2026 16:18:52 +0000","description":"The digest algorithm name passed to a hash function is not recognized by PHP's Hash extension","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/unknown-digest-algorithm:-%s.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
The digest algorithm name passed to a hash function is not recognized by PHP's Hash extension.

The hash(), hash_file(), and hash_hmac() functions rely on a registry of supported algorithms. When an algorithm name is not found in that registry, this warning is emitted and the function returns false.

The list of available algorithms depends on the extensions loaded at runtime. Algorithms may be added or removed depending on the PHP version and compiled extensions.

Algorithms are case-insensitive, but misspellings will still produce this error.

Example
_______

.. code-block:: php

   <?php
   
   // hash() with a valid algorithm works
   hash('sha256', 'my data');
   
   // hash() with an unknown algorithm triggers the warning
   hash('unknown_algo', 'my data');
   
   // hash_file() also triggers it
   hash_file('bad_algo', '/tmp/file.txt');
   
   // hash_hmac() too
   hash_hmac('invalid', 'my data', 'secret');
   
   ?>


Literal Examples
****************
+ Unknown digest algorithm: blowfish
+ Unknown digest algorithm: tiger
+ Unknown digest algorithm: sha3-224

Solutions
_________

+ Check available algorithms with hash_algos() before using one.
+ Use one of the standard algorithms: md5, sha1, sha256, sha512, sha3-256.
+ Verify the algorithm is available by checking in_array($algo, hash_algos()).
+ Install or enable the required extension that provides the algorithm (e.g. hash with GOST support).

See Also
________

+ `hash_algos <https://www.php.net/manual/en/function.hash-algos.php>`_
+ `hash <https://www.php.net/manual/en/function.hash.php>`_
+ `hash_file <https://www.php.net/manual/en/function.hash-file.php>`_
+ `hash_hmac <https://www.php.net/manual/en/function.hash-hmac.php>`_

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See ` <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/.html>`_.

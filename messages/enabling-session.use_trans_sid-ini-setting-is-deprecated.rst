.. _enabling-session.use_trans_sid-ini-setting-is-deprecated:

Enabling session.use_trans_sid INI setting is deprecated
--------------------------------------------------------
 
.. meta::
	:description:
		Enabling session.use_trans_sid INI setting is deprecated: ``session.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Enabling session.use_trans_sid INI setting is deprecated
	:og:description: ``session
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/enabling-session.use_trans_sid-ini-setting-is-deprecated.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Enabling session.use_trans_sid INI setting is deprecated
	:twitter:description: Enabling session.use_trans_sid INI setting is deprecated: ``session
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/enabling-session.use_trans_sid-ini-setting-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/enabling-session.use_trans_sid-ini-setting-is-deprecated.html","name":"Enabling session.use_trans_sid INI setting is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Sun, 23 Feb 2025 14:14:42 +0000","dateModified":"Sun, 23 Feb 2025 14:14:42 +0000","description":"``session","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/enabling-session.use_trans_sid-ini-setting-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
``session.use_trans_sid`` is marked for deprecation. When that directive will be removed, the feature will also be removed. Trans ID are session ID that are propagated via ``GET`` (in the URL) and ``POST`` (in the HTTP headers).

Example
_______

.. code-block:: php

   <?php
   
   if (!ini_get('session.use_trans_sid')) {
       die('it is recommended to not use trans id for sessions.');
   }
   
   ?>

Solutions
_________

+ Set ``session.use_trans_sid`` to off in php.ini.
+ Remove usage of  ini_get() with ``session.use_trans_sid`` in the code.
+ Remove usage of  ini_set() with ``session.use_trans_sid`` in the code.

Related Error Messages
______________________

+ :ref:`disabling-session.use_only_cookies-ini-setting-is-deprecated`

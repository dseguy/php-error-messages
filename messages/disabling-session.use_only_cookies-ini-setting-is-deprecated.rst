.. _disabling-session.use_only_cookies-ini-setting-is-deprecated:

Disabling session.use_only_cookies INI setting is deprecated
------------------------------------------------------------
 
.. meta::
	:description:
		Disabling session.use_only_cookies INI setting is deprecated: ``session.
	:og:image: https://php-errors.readthedocs.io/en/latest/_static/logo.png
	:og:type: article
	:og:title: Disabling session.use_only_cookies INI setting is deprecated
	:og:description: ``session
	:og:url: https://php-errors.readthedocs.io/en/latest/messages/disabling-session.use_only_cookies-ini-setting-is-deprecated.html
	:og:locale: en
	:twitter:card: summary_large_image
	:twitter:site: @exakat
	:twitter:title: Disabling session.use_only_cookies INI setting is deprecated
	:twitter:description: Disabling session.use_only_cookies INI setting is deprecated: ``session
	:twitter:creator: @exakat
	:twitter:image:src: https://php-errors.readthedocs.io/en/latest/_static/logo.png

.. raw:: html

	<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/disabling-session.use_only_cookies-ini-setting-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/tips\/disabling-session.use_only_cookies-ini-setting-is-deprecated.html","name":"Disabling session.use_only_cookies INI setting is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Thu, 18 Sep 2025 04:54:20 +0000","dateModified":"Thu, 18 Sep 2025 04:54:20 +0000","description":"``session","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-tips.readthedocs.io\/en\/latest\/tips\/disabling-session.use_only_cookies-ini-setting-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

Description
___________
 
``session.use_only_cookies`` is marked for deprecation. When that directive will be removed, the feature will be set to always on.

Example
_______

.. code-block:: php

   <?php
   
   if (!ini_get('session.use_only_cookies')) {
       die('it is recommended to only use cookies for sessions.');
   }
   
   ?>

Solutions
_________

+ Set ``session.use_only_cookies`` to on in php.ini.
+ Remove usage of  ini_get() with ``session.use_only_cookies`` in the code.
+ Remove usage of  ini_set() with ``session.use_only_cookies`` in the code.

Related Error Messages
______________________

+ :ref:`enabling-session.use_trans_sid-ini-setting-is-deprecated`

Changed Behavior
________________

This error may appear following an evolution in behavior, in previous versions. See `none <https://php-changed-behaviors.readthedocs.io/en/latest/behavior/none.html>`_.

Static Analysis
_______________

This error may be tracked down with the following static analysis rules: `none <https://exakat.readthedocs.io/en/latest/Reference/Rules/none.html>`_.

# Usage of session.trans_sid_tags INI setting is deprecated

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/usage-of-session.trans_sid_tags-ini-setting-is-deprecated.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/usage-of-session.trans_sid_tags-ini-setting-is-deprecated.html","name":"Usage of session.trans_sid_tags INI setting is deprecated","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-09-24T07:07:55+00:00","dateModified":"2026-09-24T07:07:55+00:00","description":"``session","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/usage-of-session.trans_sid_tags-ini-setting-is-deprecated.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`session.trans_sid_tags` lists which HTML tag/attribute pairs (e.g. `a=href`, `form=`) PHP rewrites to inject the session ID when trans sid (`session.use_trans_sid`) output rewriting is active. Trans sid -- propagating the session ID through the URL and hidden form fields instead of only a cookie -- is a legacy mechanism being phased out because it leaks session IDs into logs, the Referer header, and shared/bookmarked links.

As of PHP 8.4, setting `session.trans_sid_tags` to anything other than its default value (`a=href,area=href,frame=src,form=`) emits this deprecation notice, as part of a broader deprecation of GET/POST (URL-based) session propagation ahead of its removal in PHP 9.0.

## Example

```php
<?php

// Changing it away from its default list of tags triggers the
// deprecation as soon as it's applied.
ini_set('session.trans_sid_tags', 'a=href');

?>
```

## Literal Examples
+ ini_set(): Usage of session.trans_sid_tags INI setting is deprecated

## Alternatives
+ Leave session.trans_sid_tags at its default and keep session.use_trans_sid disabled (its own default), relying on cookies only.
+ If trans sid is still required for a specific legacy integration, treat the whole feature -- not just this setting -- as something to migrate away from before PHP 9.0.

## Related error messages
+ [usage-of-session.trans_sid_hosts-ini-setting-is-deprecated](usage-of-session.trans\_sid\_hosts-ini-setting-is-deprecated.html)
+ [enabling-session.use_trans_sid-ini-setting-is-deprecated](enabling-session.use\_trans\_sid-ini-setting-is-deprecated.html)

## Related error messages
+ [session.configuration manual](https://www.php.net/manual/en/session.configuration.php)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()
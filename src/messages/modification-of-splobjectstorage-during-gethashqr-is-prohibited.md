# Modification of SplObjectStorage during getHash() is prohibited

<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/modification-of-splobjectstorage-during-gethashqr-is-prohibited.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/modification-of-splobjectstorage-during-gethashqr-is-prohibited.html","name":"Modification of SplObjectStorage during getHash() is prohibited","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"2026-08-15T17:29:36+02:00","dateModified":"2026-08-15T17:29:36+02:00","description":"``SplObjectStorage`` internals are not reentrant during hashing","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/modification-of-splobjectstorage-during-gethashqr-is-prohibited.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>
## Description
`SplObjectStorage` internals are not reentrant during hashing.

## Example

```php
<?php

class WatchfulStorage extends SplObjectStorage {
    public SplObjectStorage $sideStorage;
    public function getHash(object $object): string {
        $this->sideStorage->offsetSet(new stdClass());
        return spl_object_hash($object);
    }
}

$watch = new WatchfulStorage();
$watch->sideStorage = new SplObjectStorage();

try {
    $watch->offsetSet(new stdClass());
    echo "offsetSet succeeded, sideStorage count=".count($watch->sideStorage)."\n";
} catch (\Error $e) {
    echo "Error: ".$e->getMessage()."\n";
}

?>
```

## Alternatives
+ Do not change the object during hashing. Change it with another method call.

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[splObjectStorageGetHashMutation86](splObjectStorageGetHashMutation86)
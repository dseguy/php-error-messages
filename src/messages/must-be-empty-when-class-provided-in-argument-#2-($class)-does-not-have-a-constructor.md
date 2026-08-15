# must be empty when class provided in argument #2 ($class) does not have a constructor

## Description
The class referenced in the PDO::fetchAll method does not have a constructor. No argument will be handed to it, so there is no need to pass that argument.
<script type="application/ld+json">{"@context":"https:\/\/schema.org","@graph":[{"@type":"WebPage","@id":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-empty-when-class-provided-in-argument-#2-($class)-does-not-have-a-constructor.html","url":"https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-empty-when-class-provided-in-argument-#2-($class)-does-not-have-a-constructor.html","name":"must be empty when class provided in argument #2 ($class) does not have a constructor","isPartOf":{"@id":"https:\/\/www.exakat.io\/"},"datePublished":"Tue, 31 Mar 2026 09:10:46 +0000","dateModified":"Tue, 31 Mar 2026 09:10:46 +0000","description":"The class referenced in the PDO::fetchAll method does not have a constructor","inLanguage":"en-US","potentialAction":[{"@type":"ReadAction","target":["https:\/\/php-errors.readthedocs.io\/en\/latest\/messages\/must-be-empty-when-class-provided-in-argument-#2-($class)-does-not-have-a-constructor.html"]}]},{"@type":"WebSite","@id":"https:\/\/www.exakat.io\/","url":"https:\/\/www.exakat.io\/","name":"Exakat","description":"Smart PHP static analysis","inLanguage":"en-US"}]}</script>

## Example

```php
<?php

class X
{
    public $id;
    protected $val;
    private $val2;
}

$stmt->execute(); // STMT is a PDO statement
try {
    var_dump($stmt->fetchAll(PDO::FETCH_CLASS, X::class, [0]));
} catch (\Throwable $e) {
    echo $e::class, ': ', $e->getMessage(), \PHP_EOL;
}

?>
```

## Alternatives
+ Omit the third argument.
+ Use an empty array for the third argument.
+ Use a null value for the third argument.

## Related error messages
+ [must-be-empty-when-class-provided-in-argument-#1-($class)-does-not-have-a-constructor](asdf)

# Changed Behavior
This error may appear following an evolution in behavior, in previous versions. See 
[]()
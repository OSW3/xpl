# xtrim

## Description

```php
xtrim(string $separator, string $string, int $limit = PHP_INT_MAX): array
```

Explode string and trim both.

## Parameters

- **separator**
    The boundary string.

- **string**
    The input string.

- **limit**
    If limit is set and positive, the returned array will contain a maximum of limit elements with the last element containing the rest of string.

    see [https://www.php.net/manual/en/function.explode.php](https://www.php.net/manual/en/function.explode.php)

## Return values

Returns an array of trim strings created by splitting the string parameter on boundaries formed by the separator.

## Examples

### Example #1

```php 
$string = "Bananas,    Apples     ,    Coconuts";
xtrim(",", $string);

// Array
// (
//     [0] => Bananas
//     [1] => Apples
//     [2] => Coconuts
// )
```
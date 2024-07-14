# redirect

## Description

```php
redirect(string $destination[, bool $exit=true]): void
```

Execute a simple redirection.

## Parameters

- **destination**
    The destination URL.

- **exit**
    If true, PHP will be stoped just after the redirection.

## Return values
    No value

## Examples

### Example #1 - redirect and stop PHP execution

```php 
redirect("https://www.site.com");
```

### Example #2 - redirect and continue PHP execution

```php 
redirect("https://www.site.com", false);
```
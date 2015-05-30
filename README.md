HttpExceptions
==============

`HttpException` and its subclasses provide exceptions corresponding to HTTP
error status codes. The most common are included, but you can create exceptions
for other status codes by using (or subclassing) `HttpException` and providing 
the reason phrase as the `$message` and the status code as the `$code`.

This package provides the following exception classes in the 
`WellRESTed\HttpExceptions` namespace.

| Exception                             | Code | Message                           |
| ------------------------------------- | ---- | --------------------------------- |
| HttpException                         |  500 | "Internal Server Error"           |
| BadRequestException                   |  400 | "Bad Request"                     |
| UnauthorizedException                 |  401 | "Unauthorized"                    |
| ForbiddenException                    |  403 | "Forbidden"                       |
| NotFoundException                     |  404 | "Not Found"                       |
| MethodNotAllowedException             |  405 | "Method Not Allowed"              |
| NotAcceptableException                |  406 | "Not Acceptable                   | 
| ConflictException                     |  409 | "Conflict"                        |
| GoneException                         |  410 | "Gone"                            |
| LengthRequiredException               |  411 | "Length Required"                 |
| PreconditionFailedException           |  412 | "Precondition Failed"             |
| RequestEntityTooLargeException        |  413 | "Request Entity Too Large"        |
| UnsupportedMediaTypeException         |  415 | "Unsupported Media Type"          |
| RequestedRangeNotSatisfiableException |  416 | "Requested Range Not Satisfiable" |
| ExpectationFailedException            |  417 | "Expectation Failed"              |

Basic Usage
-----------

Throw an exception.

```php
throw new \WellRESTed\HttpExceptions\UnauthorizedException(); 
```

Throw a custom exception, providing a status code.

```php
throw new \WellRESTed\HttpExceptions\HttpException(
    "HTTP Version Not Supported", 505); 
```

Catch an exception and output an HTML response.

```php
try {
    // ... 
} catch (\WellRESTed\HttpExceptions\HttpException $e) {
    http_response_code($e->getCode());
    header("Content-type: text/html");
    print "<h1>" . $e->getCode()  . " " . $e->getMessage() . "</h1>";
}
```

Or, if you're using [WellRESTed](https://github.com/wellrestedphp/wellrested):

```php
try {
    // ... 
} catch (\WellRESTed\HttpExceptions\HttpException $e) {
    $response = $response
        ->withStatus($e->getCode())
        ->withHeader("Content-type", "text/html")
        ->withBody(new \WellRESTed\Message\Stream(
            "<h1>" . $e->getCode()  . " " . $e->getMessage() . "</h1>"));
}
```

Install
-------

Add `wellrested/http-exceptions` to your composer.json 

```json
{
    "require": {
        "wellrested/http-exceptions": "^1.0"
    }
}
```

Copyright and License
---------------------
Copyright © 2015 by PJ Dietz
Licensed under the [MIT license](http://opensource.org/licenses/MIT)

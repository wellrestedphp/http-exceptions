HttpExceptions
==============

`HttpException` and its subclasses provides exceptions that correspond to HTTP
error status codes. The most common are included, but you may create
additional subclasses if needed by subclassing `HttpException` and providing the
status code as the exception's `$code` member and status code + reason phrase
as the exception's `$message`.

Provided exception classes with `$code` and `$message` are:

| Exception                 | Code | Message                     |
| ------------------------- | ---- | --------------------------- |
| HttpException             |  500 | "500 Internal Server Error" |
| BadRequestException       |  400 | "400 Bad Request"           |
| UnauthorizedException     |  401 | "401 Unauthorized"          |
| ForbiddenException        |  403 | "403 Forbidden"             |
| NotFoundException         |  404 | "404 Not Found"             |
| MethodNotAllowedException |  405 | "405 Method Not Allowed"    |
| ConflictException         |  409 | "409 Conflict"              |
| GoneException             |  410 | "410 Gone"                  |

```php

try {
    // ... 
} catch (\WellRESTed\HttpExceptions\HttpException $e) {
    $response = $response
        ->withStatus($e->getCode())
        ->withBody(new \WellRESTed\Message\Stream($e->getMessage()));
}

```

Copyright and License
---------------------
Copyright © 2015 by PJ Dietz
Licensed under the [MIT license](http://opensource.org/licenses/MIT)

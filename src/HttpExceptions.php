<?php

/**
 * HttpException and its subclasses provide exceptions corresponding to HTTP
 * error status codes. The most common are included, but you can create
 * exceptions for other status codes by using (or subclassing) HttpException
 * and providing the reason phrase as the $message and the status code as the
 * $code.
 *
 * @author PJ Dietz <pjdietz@gmail.com>
 * @copyright Copyright 2015 by PJ Dietz
 * @license MIT
 */

namespace WellRESTed\HttpExceptions;

use Exception;

/**
 * Base exception for HTTP-related errors. Also represents a 500 Internal Server error.
 */
class HttpException extends Exception
{
    /** @var int HTTP Status Code */
    protected $code = 500;
    /** @var string Reason Phrase */
    protected $message = "Internal Server Error";
}

/**
 * Represents a 400 Bad Request error.
 */
class BadRequestException extends HttpException
{
    protected $code = 400;
    protected $message = "Bad Request";
}

/**
 * Represents a 401 Unauthorized error.
 */
class UnauthorizedException extends HttpException
{
    protected $code = 401;
    protected $message = "Unauthorized";
}

/**
 * Represents a 403 Forbidden error.
 */
class ForbiddenException extends HttpException
{
    protected $code = 403;
    protected $message = "Forbidden";
}

/**
 * Represents a 404 Not Found error.
 */
class NotFoundException extends HttpException
{
    protected $code = 404;
    protected $message = "Not Found";
}

/**
 * Represents a 405 Method Not Allowed error.
 */
class MethodNotAllowedException extends HttpException
{
    protected $code = 405;
    protected $message = "Method Not Allowed";
}

/**
 * Represents a 406 Not Acceptable error.
 */
class NotAcceptableException extends HttpException
{
    protected $code = 406;
    protected $message = "Not Acceptable";
}

/**
 * Represents a 409 Conflict error.
 */
class ConflictException extends HttpException
{
    protected $code = 409;
    protected $message = "Conflict";
}

/**
 * Represents a 410 Gone error.
 */
class GoneException extends HttpException
{
    protected $code = 410;
    protected $message = "Gone";
}

/**
 * Represents a 411 Length Required error.
 */
class LengthRequiredException extends HttpException
{
    protected $code = 411;
    protected $message = "Length Required";
}

/**
 * Represents a 412 Precondition Failed error.
 */
class PreconditionFailedException extends HttpException
{
    protected $code = 412;
    protected $message = "Precondition Failed";
}

/**
 * Represents a 413 Request Entity Too Large error.
 */
class RequestEntityTooLargeException extends HttpException
{
    protected $code = 413;
    protected $message = "Request Entity Too Large";
}

/**
 * Represents a 415 Unsupported Media Type error.
 */
class UnsupportedMediaTypeException extends HttpException
{
    protected $code = 415;
    protected $message = "Unsupported Media Type";
}

/**
 * Represents a 416 Requested Range Not Satisfiable error.
 */
class RequestedRangeNotSatisfiableException extends HttpException
{
    protected $code = 416;
    protected $message = "Requested Range Not Satisfiable";
}

/**
 * Represents a 417 Expectation Failed error.
 */
class ExpectationFailedException extends HttpException
{
    protected $code = 417;
    protected $message = "Expectation Failed";
}

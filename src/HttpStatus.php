<?php
namespace CharithaPrabhashwara\HttpLib;

/**
 * #### HTTP Status Codes Library
 * ##### Provides constants for all standard HTTP status codes.
 * ###### Author: Charitha Prabhashwara
 * ###### Date: 2023-10-01
 * ###### Documentation: [https://link-url-here.org](https://link-url-here.org)
 * 
 * This class defines constants for HTTP status codes as defined in the HTTP/1.1 standard and other relevant specifications.
 * Each constant is documented with its corresponding status code, description, and usage.
 * 
 * ### Usage Example:
 * ```php
 * use CharithaPrabhashwara\HttpLib\HttpStatus;
 * 
 * echo HttpStatus::OK; // Outputs: 200
 * ```
 */
class HttpStatus{
    // 1xx Informational responses

    /**
     * #### The HTTP 100 Continue.
     * ##### Informational Status Code
     * ###### Readmore ([Wikipedia](https://link-url-here.org)) 
     * ###### Author: Charitha Prabhashwara | Date: 2023-10-01 | Documentation: [https://link-url-here.org](https://link-url-here.org)
     * 
     * 100 Continue means the server has received the request headers, and the client should now send the
     * request body (e.g., in a POST request). It's used when the client includes the Expect: 100-continue header,
     * allowing the server to validate headers before the client sends a potentially large body.
     */
    public const CONTINUE = 100;

    /**
     * #### The HTTP 101 Switching Protocols.
     * ##### Informational Status Code
     * ###### Readmore ([Wikipedia](https://link-url-here.org))
     * ###### Author: Charitha Prabhashwara | Date: 2023-10-01 | Documentation: [https://link-url-here.org](https://link-url-here.org)
     * 
     * 101 Switching Protocols indicates that the server is switching protocols as requested by the client.
     * This is typically used in WebSocket connections or when the client requests an upgrade to a different protocol.
     * 
     */
    public const SWITCHING_PROTOCOLS = 101;

    /**
    * #### The HTTP 102 Processing.
    * ##### Informational Status Code
    * ###### Readmore ([Wikipedia](https://link-url-here.org))
    * ###### Author: Charitha Prabhashwara | Date: 2025-04-20 | Documentation: [https://link-url-here.org](https://link-url-here.org)
    *
    * 102 Processing indicates that the server has received and is processing the request, but no response is available yet.
    */
    public const PROCESSING = 102;

    /**
    * #### The HTTP 103 Early Hints.
    * ##### Informational Status Code
    * ###### Readmore ([Wikipedia](https://link-url-here.org))
    * ###### Author: Charitha Prabhashwara | Date: 2025-04-20 | Documentation: [https://link-url-here.org](https://link-url-here.org)
    * 
    * 103 Early Hints is primarily intended to be used with the Link header to allow the user agent to start preloading resources while the server prepares a response.
    */
    public const EARLY_HINTS = 103;
    
    // Successful responses
    
    /**
     * #### The HTTP 200 OK.
     * ##### Successful Status Code
     * ###### Readmore ([Wikipedia](https://link-url-here.org))
     * ###### Author: Charitha Prabhashwara | Date: 2023-10-01 | Documentation: [https://link-url-here.org](https://link-url-here.org)
     * 
     * 200 OK indicates that the request has succeeded.
     */
    public const OK= 200;

    /**
     * #### The HTTP 201 Created.
     * ##### Successful Status Code
     * ###### Readmore ([Wikipedia](https://link-url-here.org))
     * ###### Author: Charitha Prabhashwara | Date: 2023-10-01 | Documentation: [https://link-url-here.org](https://link-url-here.org)
     * 
     * 201 Created indicates that the request has been fulfilled and has resulted in one or more new resources being created.
     */
    public const CREATED = 201;

    /**
     * #### The HTTP 202 Accepted.
     * ##### Successful Status Code
     * ###### Readmore ([Wikipedia](https://link-url-here.org))
     * ###### Author: Charitha Prabhashwara | Date: 2023-10-01 | Documentation: [https://link-url-here.org](https://link-url-here.org)
     * 
     * 202 Accepted indicates that the request has been accepted for processing, but the processing has not been completed.
     */
    public const Accepted = 202;


    /**
     * #### The HTTP 203 Non-Authoritative Information.
     * ##### Successful Status Code
     * ###### Readmore ([Wikipedia](https://link-url-here.org))
     * ###### Author: Charitha Prabhashwara | Date: 2023-10-01 | Documentation: [https://link-url-here.org](https://link-url-here.org)
     * 
     * 203 Non-Authoritative Information indicates that the request was successful but the enclosed payload has been modified from that of the origin server's 200 OK response.
     */
    public const NON_AUTHORITATIVE_INFORMATION = 203;

    /**
     * #### The HTTP 204 No Content.
     * ##### Successful Status Code
     * ###### Readmore ([Wikipedia](https://link-url-here.org))
     * ###### Author: Charitha Prabhashwara | Date: 2023-10-01 | Documentation: [https://link-url-here.org](https://link-url-here.org)
     * 
     * 204 No Content indicates that the server successfully processed the request and is not returning any content.
     */
    public const NO_CONTENT= 204;

    /**
     * #### The HTTP 205 Reset Content.
     * ##### Successful Status Code
     * ###### Readmore ([Wikipedia](https://link-url-here.org))
     * ###### Author: Charitha Prabhashwara | Date: 2023-10-01 | Documentation: [https://link-url-here.org](https://link-url-here.org)
     * 
     * 205 Reset Content tells the client to reset the document view, such as clearing a form for input.
     */
    public const RESET_CONTENT = 205;

    /**
     * #### The HTTP 206 Partial Content.
     * ##### Successful Status Code
     * ###### Readmore ([Wikipedia](https://link-url-here.org))
     * ###### Author: Charitha Prabhashwara | Date: 2023-10-01 | Documentation: [https://link-url-here.org](https://link-url-here.org)
     * 
     * 206 Partial Content is used when the server is delivering only part of the resource due to a range header sent by the client.
     */
    public const PARTIAL_CONTENT= 206;

    /**
     * #### The HTTP 207 Multi-Status.
     * ##### Successful Status Code
     * ###### Readmore ([Wikipedia](https://link-url-here.org))
     * ###### Author: Charitha Prabhashwara | Date: 2023-10-01 | Documentation: [https://link-url-here.org](https://link-url-here.org)
     * 
     * 207 Multi-Status provides status for multiple independent operations.
     */
    public const MULTI_STATUS = 207;

    /**
     * #### The HTTP 208 Already Reported.
     * ##### Successful Status Code
     * ###### Readmore ([Wikipedia](https://link-url-here.org))
     * ###### Author: Charitha Prabhashwara | Date: 2023-10-01 | Documentation: [https://link-url-here.org](https://link-url-here.org)
     * 
     * 208 Already Reported indicates that the members of a DAV binding have already been enumerated in a previous reply to this request, and are not being included again.
     */
    public const ALREADY_REPORTED = 208;

    /**
     * #### The HTTP 226 IM Used.
     * ##### Successful Status Code
     * ###### Readmore ([Wikipedia](https://link-url-here.org))
     * ###### Author: Charitha Prabhashwara | Date: 2023-10-01 | Documentation: [https://link-url-here.org](https://link-url-here.org)
     * 
     * 226 IM Used indicates that the server has fulfilled a GET request for the resource, and the response is a representation of the result of one or more instance-manipulations applied to the current instance.
     */
    public const IM_USED = 226;

    //Redirrection messages

    /**
     * #### The HTTP 300 Multiple Choices.
     * ##### Redirection Status Code
     * ###### Readmore ([Wikipedia](https://link-url-here.org))
     * ###### Author: Charitha Prabhashwara | Date: 2023-10-01 | Documentation: [https://link-url-here.org](https://link-url-here.org)
     * 
     * 300 Multiple Choices indicates that the request has more than one possible response. The user-agent or user should choose one of them.
     */
    public const MULTIPLE_CHOICES = 300;

    /**
     * #### The HTTP 301 Moved Permanently.
     * ##### Redirection Status Code
     * ###### Readmore ([Wikipedia](https://link-url-here.org))
     * ###### Author: Charitha Prabhashwara | Date: 2023-10-01 | Documentation: [https://link-url-here.org](https://link-url-here.org)
     * 
     * 301 Moved Permanently indicates that the resource has been permanently moved to a new URL.
     */
    public const MOVED_PERMANENTLY = 301;

    /**
     * #### The HTTP 302 Found.
     * ##### Redirection Status Code
     * ###### Readmore ([Wikipedia](https://link-url-here.org))
     * ###### Author: Charitha Prabhashwara | Date: 2023-10-01 | Documentation: [https://link-url-here.org](https://link-url-here.org)
     * 
     * 302 Found indicates that the resource is temporarily located at a different URL.
     */
    public const FOUND = 302;

    /**
     * #### The HTTP 303 See Other.
     * ##### Redirection Status Code
     * ###### Readmore ([Wikipedia](https://link-url-here.org))
     * ###### Author: Charitha Prabhashwara | Date: 2023-10-01 | Documentation: [https://link-url-here.org](https://link-url-here.org)
     * 
     * 303 See Other indicates that the response to the request can be found under another URI using a GET method.
     */
    public const SEE_OTHER = 303;

    /**
     * #### The HTTP 304 Not Modified.
     * ##### Redirection Status Code
     * ###### Readmore ([Wikipedia](https://link-url-here.org))
     * ###### Author: Charitha Prabhashwara | Date: 2023-10-01 | Documentation: [https://link-url-here.org](https://link-url-here.org)
     * 
     * 304 Not Modified indicates that the resource has not been modified since the version specified by the request headers.
     */
    public const NOT_MODIFIED = 304;

    /**
     * #### The HTTP 305 Use Proxy.
     * ##### Redirection Status Code
     * ###### Readmore ([Wikipedia](https://link-url-here.org))
     * ###### Author: Charitha Prabhashwara | Date: 2023-10-01 | Documentation: [https://link-url-here.org](https://link-url-here.org)
     * 
     * 305 Use Proxy indicates that the requested resource must be accessed through the proxy given by the location field.
     */
    public const USE_PROXY = 305;

    /**
     * #### The HTTP 306 Switch Proxy.
     * ##### Redirection Status Code (Deprecated)
     * ###### Readmore ([Wikipedia](https://link-url-here.org))
     * ###### Author: Charitha Prabhashwara | Date: 2023-10-01 | Documentation: [https://link-url-here.org](https://link-url-here.org)
     * 
     * 306 Switch Proxy is no longer used and is reserved for future use. It was previously used to indicate that
     * subsequent requests should use the specified proxy.
     * 
     * @deprecated This status code is deprecated and should not be used.
     */
    public const SWITCH_PROXY = 306;

    /**
     * #### The HTTP 307 Temporary Redirect.
     * ##### Redirection Status Code
     * ###### Readmore ([Wikipedia](https://link-url-here.org))
     * ###### Author: Charitha Prabhashwara | Date: 2023-10-01 | Documentation: [https://link-url-here.org](https://link-url-here.org)
     * 
     * 307 Temporary Redirect indicates that the resource is temporarily located at a different URI, but the request method should not change.
     */
    public const TEMPORARY_REDIRECT = 307;

    /**
     * #### The HTTP 308 Permanent Redirect.
     * ##### Redirection Status Code
     * ###### Readmore ([Wikipedia](https://link-url-here.org))
     * ###### Author: Charitha Prabhashwara | Date: 2023-10-01 | Documentation: [https://link-url-here.org](https://link-url-here.org)
     * 
     * 308 Permanent Redirect indicates that the resource is permanently located at a different URI, and the request method should not change.
     */
    public const PERMANENT_REDIRECT = 308;

    // Client error responses

    /**
     * #### The HTTP 400 Bad Request.
     * ##### Client Error Status Code
     * ###### Readmore ([Wikipedia](https://link-url-here.org))
     * ###### Author: Charitha Prabhashwara | Date: 2023-10-01 | Documentation: [https://link-url-here.org](https://link-url-here.org)
     * 
     * 400 Bad Request indicates that the server cannot or will not process the request due to a client error.
     */
    public const BAD_REQUEST = 400;

    /**
     * #### The HTTP 401 Unauthorized.
     * ##### Client Error Status Code
     * ###### Readmore ([Wikipedia](https://link-url-here.org))
     * ###### Author: Charitha Prabhashwara | Date: 2023-10-01 | Documentation: [https://link-url-here.org](https://link-url-here.org)
     * 
     * 401 Unauthorized indicates that the request requires user authentication.
     */
    public const UNAUTHORIZED = 401;
    
    /**
     * #### The HTTP 402 Payment Required.
     * ##### Client Error Status Code
     * ###### Readmore ([Wikipedia](https://link-url-here.org))
     * ###### Author: Charitha Prabhashwara | Date: 2023-10-01 | Documentation: [https://link-url-here.org](https://link-url-here.org)
     * 
     * 402 Payment Required is reserved for future use and is not widely used.
     */
    public const PAYMENT_REQUIRED = 402;

    /**
     * #### The HTTP 403 Forbidden.
     * ##### Client Error Status Code
     * ###### Readmore ([Wikipedia](https://link-url-here.org))
     * ###### Author: Charitha Prabhashwara | Date: 2023-10-01 | Documentation: [https://link-url-here.org](https://link-url-here.org)
     * 
     * 403 Forbidden indicates that the server understands the request but refuses to authorize it.
     */
    public const FORBIDDEN = 403;

    /**
     * #### The HTTP 404 Not Found.
     * ##### Client Error Status Code
     * ###### Readmore ([Wikipedia](https://link-url-here.org))
     * ###### Author: Charitha Prabhashwara | Date: 2023-10-01 | Documentation: [https://link-url-here.org](https://link-url-here.org)
     * 
     * 404 Not Found indicates that the server cannot find the requested resource.
     */
    public const NOT_FOUND = 404;

    /**
     * #### The HTTP 405 Method Not Allowed.
     * ##### Client Error Status Code
     * ###### Readmore ([Wikipedia](https://link-url-here.org))
     * ###### Author: Charitha Prabhashwara | Date: 2023-10-01 | Documentation: [https://link-url-here.org](https://link-url-here.org)
     * 
     * 405 Method Not Allowed indicates that the request method is known by the server but is not supported by the target resource.
     */
    public const METHOD_NOT_ALLOWED = 405;

    /**
     * #### The HTTP 406 Not Acceptable.
     * ##### Client Error Status Code
     * ###### Readmore ([Wikipedia](https://link-url-here.org))
     * ###### Author: Charitha Prabhashwara | Date: 2023-10-01 | Documentation: [https://link-url-here.org](https://link-url-here.org)
     * 
     * 406 Not Acceptable indicates that the server cannot produce a response matching the list of acceptable values defined in the request's proactive content negotiation headers.
     */
    public const NOT_ACCEPTABLE = 406;

    /**
     * #### The HTTP 407 Proxy Authentication Required.
     * ##### Client Error Status Code
     * ###### Readmore ([Wikipedia](https://link-url-here.org))
     * ###### Author: Charitha Prabhashwara | Date: 2023-10-01 | Documentation: [https://link-url-here.org](https://link-url-here.org)
     * 
     * 407 Proxy Authentication Required indicates that the client must first authenticate itself with the proxy.
     */
    public const PROXY_AUTHENTICATION_REQUIRED = 407;

    /**
     * #### The HTTP 408 Request Timeout.
     * ##### Client Error Status Code
     * ###### Readmore ([Wikipedia](https://link-url-here.org))
     * ###### Author: Charitha Prabhashwara | Date: 2023-10-01 | Documentation: [https://link-url-here.org](https://link-url-here.org)
     * 
     * 408 Request Timeout indicates that the server did not receive a complete request message within the time that it was prepared to wait.
     */
    public const REQUEST_TIMEOUT = 408;

    /**
     * #### The HTTP 409 Conflict.
     * ##### Client Error Status Code
     * ###### Readmore ([Wikipedia](https://link-url-here.org))
     * ###### Author: Charitha Prabhashwara | Date: 2023-10-01 | Documentation: [https://link-url-here.org](https://link-url-here.org)
     * 
     * 409 Conflict indicates that the request could not be completed due to a conflict with the current state of the target resource.
     */
    public const CONFLICT = 409;

    /**
     * #### The HTTP 410 Gone.
     * ##### Client Error Status Code
     * ###### Readmore ([Wikipedia](https://link-url-here.org))
     * ###### Author: Charitha Prabhashwara | Date: 2023-10-01 | Documentation: [https://link-url-here.org](https://link-url-here.org)
     * 
     * 410 Gone indicates that the target resource is no longer available at the origin server and that this condition is likely to be permanent.
     */
    public const GONE = 410;

    /**
     * #### The HTTP 411 Length Required.
     * ##### Client Error Status Code
     * ###### Readmore ([Wikipedia](https://link-url-here.org))
     * ###### Author: Charitha Prabhashwara | Date: 2023-10-01 | Documentation: [https://link-url-here.org](https://link-url-here.org)
     * 
     * 411 Length Required indicates that the server refuses to accept the request without a defined Content-Length header.
     */
    public const LENGTH_REQUIRED = 411;

    /**
     * #### The HTTP 412 Precondition Failed.
     * ##### Client Error Status Code
     * ###### Readmore ([Wikipedia](https://link-url-here.org))
     * ###### Author: Charitha Prabhashwara | Date: 2023-10-01 | Documentation: [https://link-url-here.org](https://link-url-here.org)
     * 
     * 413 Payload Too Large indicates that the request payload is larger than the server is willing or able to process.
     * This may occur when a client uploads a file that exceeds server-defined limits.
     */
    public const PRECONDITION_FAILED = 412;

    /**
     * #### The HTTP 413 Payload Too Large.
     * ##### Client Error Status Code
     * ###### Readmore ([Wikipedia](https://link-url-here.org))
     * ###### Author: Charitha Prabhashwara | Date: 2023-10-01 | Documentation: [https://link-url-here.org](https://link-url-here.org)
     * 
     * 413 Payload Too Large indicates that the request payload is larger than the server is willing or able to process.
     */
    public const PAYLOAD_TOO_LARGE = 413;//recheck
    public const REQUEST_URI_TOO_LONG = 414;//recheck
    public const URI_TOO_LONG= 414;//recheck
    public const UNSUPPORTED_MEDIA_TYPE = 415;
    public const REQUESTED_RANGE_NOT_SATISFIABLE = 416;//recheck
    public const RANGE_NOT_SATISFIABLE = 416;//recheck
    public const EXPECTATION_FAILED = 417;
    public const IM_A_TEAPOT = 418;
    public const MISDIRECTED_REQUEST = 421;
    public const UNPROCESSABLE_ENTITY = 422;//recheck
    public const UNPROCESSABLE_CONTENT = 422;//recheck
    public const LOCKED = 423;
    public const FAILED_DEPENDENCY = 424;
    public const TOO_EARLY = 425;
    public const UPGRADE_REQUIRED = 426;
    public const PRECONDITION_REQUIRED = 428;
    public const TOO_MANY_REQUESTS = 429;
    public const REQUEST_HEADER_FIELDS_TOO_LARGE = 431;
    public const UNAVAILABLE_FOR_LEGAL_REASONS = 451;

    // Server error responses
    public const INTERNAL_SERVER_ERROR = 500;
    public const NOT_IMPLEMENTED = 501;
    public const BAD_GATEWAY = 502;
    public const SERVICE_UNAVAILABLE = 503;
    public const GATEWAY_TIMEOUT = 504;
    public const HTTP_VERSION_NOT_SUPPORTED = 505;
    public const VARIANT_ALSO_NEGOTIATES = 506;
    public const INSUFFICIENT_STORAGE = 507;
    public const LOOP_DETECTED = 508;
    public const NOT_EXTENDED = 510;
    public const NETWORK_AUTHENTICATION_REQUIRED = 511;
    public const NETWORK_CONNECT_TIMEOUT_ERROR = 599;
    public const UNKNOWN = 0;
    public const UNKNOWN_ERROR = 0;
    public const UNKNOWN_STATUS = 0;
    public const UNKNOWN_HTTP_STATUS = 0;
    public const UNKNOWN_HTTP_ERROR = 0;
    public const UNKNOWN_HTTP_RESPONSE = 0;
    public const UNKNOWN_HTTP_RESPONSE_CODE = 0;
    public const UNKNOWN_HTTP_RESPONSE_STATUS = 0;
    public const UNKNOWN_HTTP_RESPONSE_STATUS_CODE = 0;


}
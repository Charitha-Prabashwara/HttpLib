<?php
namespace CharithaPrabhashwara\HttpLib;

/**
 * #### HTTP Status Codes Library
 * ##### Provides constants for all standard HTTP status codes.
 * 
 * **Author**: Charitha Prabhashwara  
 * **Date**: 2023-10-01  
 * **Documentation**: [https://link-url-here.org](https://link-url-here.org)
 * 
 * This class defines constants for HTTP status codes as specified in the HTTP/1.1 standard and other relevant HTTP-related specifications.
 * Each constant is documented with its corresponding status code, a brief description, and typical usage scenarios.
 * 
 * The library covers a wide range of HTTP status codes, including:
 * - **Informational** (1xx)
 * - **Successful** (2xx)
 * - **Redirection** (3xx)
 * - **Client Error** (4xx)
 * - **Server Error** (5xx)
 * 
 * Each status code is mapped to a class constant, allowing for easy and consistent reference throughout the application.
 * 
 * ### Usage Example:
 * ```php
 * use CharithaPrabhashwara\HttpLib\HttpStatus;
 * 
 * echo HttpStatus::OK; // Outputs: 200
 * ```
 * 
 * The class is designed to make it easier for developers to work with standard HTTP status codes in PHP applications,
 * ensuring that they can handle responses effectively and accurately.
 * 
 * #### Note:
 * - This library includes the most commonly used HTTP status codes. For custom status codes or extended use cases, 
 *   developers can extend or modify the constants as needed.
 */
class HttpStatus{
    // 1xx Informational responses

   /**
     * HTTP 100 Continue
     *
     * Informational Status Code (1xx)
     *
     * Indicates that the initial part of the request has been received and the client should proceed
     * with sending the request body. This status code is typically used in conjunction with the
     * `Expect: 100-continue` header, allowing the server to validate the request headers before the client
     * sends a potentially large payload (e.g., in a POST or PUT request).
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/100
     * @see https://en.wikipedia.org/wiki/List_of_HTTP_status_codes#1xx_Informational_responses
     *
     * @author Charitha Prabhashwara
     * @date 2024-04-21
     */
    public const CONTINUE = 100;

    /**
     * HTTP 101 Switching Protocols
     *
     * Informational Status Code (1xx)
     *
     * Indicates that the server understands and is willing to comply with the client's request to switch protocols,
     * as sent in the `Upgrade` header. This status code is commonly used during the initial handshake phase of
     * WebSocket connections or when upgrading from HTTP/1.1 to HTTP/2 or another protocol.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/101
     * @see https://en.wikipedia.org/wiki/List_of_HTTP_status_codes#1xx_Informational_responses
     *
     * @author Charitha Prabhashwara
     * @date 2024-04-21
     */
    public const SWITCHING_PROTOCOLS = 101;

    /**
     * HTTP 102 Processing
     *
     * Informational Status Code (1xx)
     *
     * Indicates that the server has received and is processing the request, but no response is available yet.
     * This status code is primarily used with WebDAV requests to avoid client timeouts when a request may take
     * a long time to complete.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/102
     * @see https://en.wikipedia.org/wiki/List_of_HTTP_status_codes#1xx_Informational_responses
     *
     * @author Charitha Prabhashwara
     * @date 2025-04-21
     */
    public const PROCESSING = 102;

    /**
     * HTTP 103 Early Hints
     *
     * Informational Status Code (1xx)
     *
     * Indicates that the server is likely to send a final response, and the client can begin preloading resources
     * specified in the `Link` header. This status code is primarily used to improve perceived performance by
     * allowing the browser to start fetching assets (e.g., CSS, JS) before the full response is ready.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/103
     * @see https://en.wikipedia.org/wiki/List_of_HTTP_status_codes#1xx_Informational_responses
     *
     * @author Charitha Prabhashwara
     * @date 2025-04-20
     */
    public const EARLY_HINTS = 103;
    
    // Successful responses
    
    /**
     * HTTP 200 OK
     *
     * Successful Status Code (2xx)
     *
     * Indicates that the request has succeeded. The meaning of the success depends on the HTTP method:
     * - GET: the resource has been fetched and is transmitted in the response.
     * - POST: the resource has been created or updated.
     * - DELETE/PUT: the operation was successful.
     *
     * This is the most commonly used HTTP status code.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/200
     * @see https://en.wikipedia.org/wiki/List_of_HTTP_status_codes#2xx_Success
     *
     * @author Charitha Prabhashwara
     * @date 2025-04-21
     */
    public const OK= 200;

    /**
     * HTTP 201 Created
     *
     * Successful Status Code (2xx)
     *
     * Indicates that the request has been fulfilled and has resulted in one or more new resources being created.
     * This status code is typically returned in response to POST or PUT requests when a new resource has been successfully created.
     * A `Location` header is often included in the response to indicate the URI of the newly created resource.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/201
     * @see https://en.wikipedia.org/wiki/List_of_HTTP_status_codes#2xx_Success
     *
     * @author Charitha Prabhashwara
     * @date 2025-04-21
     */
    public const CREATED = 201;

    /**
     * HTTP 202 Accepted
     *
     * Successful Status Code (2xx)
     *
     * Indicates that the request has been accepted for processing, but the processing has not been completed.
     * This status code is typically used for asynchronous operations. The request might be acted upon in the future,
     * and the final outcome may be delivered via a separate process or callback.
     *
     * No guarantee is given that the request will be completed successfully.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/202
     * @see https://en.wikipedia.org/wiki/List_of_HTTP_status_codes#2xx_Success
     *
     * @author Charitha Prabhashwara
     * @date 2025-04-21
     */
    public const Accepted = 202;


    /**
     * HTTP 203 Non-Authoritative Information
     *
     * Successful Status Code (2xx)
     *
     * Indicates that the request was successful, but the enclosed payload has been modified by a transforming proxy
     * from that of the origin server’s `200 OK` response. This status is typically used in environments with
     * intermediary caches or filters that alter the response content before delivering it to the client.
     *
     * The information may be slightly different from the original source, but the request itself succeeded.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/203
     * @see https://en.wikipedia.org/wiki/List_of_HTTP_status_codes#2xx_Success
     *
     * @author Charitha Prabhashwara
     * @date 2025-04-21
     */
    public const NON_AUTHORITATIVE_INFORMATION = 203;

    /**
     * HTTP 204 No Content
     *
     * Successful Status Code (2xx)
     *
     * Indicates that the server successfully processed the request, but is not returning any content. 
     * This status code is often used in response to a successful DELETE request or a PUT request where no additional content 
     * needs to be returned. It implies that the client does not need to navigate away from the current page.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/204
     * @see https://en.wikipedia.org/wiki/List_of_HTTP_status_codes#2xx_Success
     *
     * @author Charitha Prabhashwara
     * @date 2025-04-21
     */
    public const NO_CONTENT= 204;

    /**
     * HTTP 205 Reset Content
     *
     * Successful Status Code (2xx)
     *
     * Indicates that the server has successfully processed the request, but the client should reset the document view. 
     * This is typically used to instruct the client to clear forms or reset the user interface to a clean state 
     * after successfully processing a request (e.g., after submitting a form).
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/205
     * @see https://en.wikipedia.org/wiki/List_of_HTTP_status_codes#2xx_Success
     *
     * @author Charitha Prabhashwara
     * @date 2025-04-21
     */
    public const RESET_CONTENT = 205;

    /**
     * HTTP 206 Partial Content
     *
     * Successful Status Code (2xx)
     *
     * Indicates that the server is delivering only a part of the resource, as requested by the client using a 
     * `Range` header. This status code is commonly used for resuming interrupted downloads or for serving 
     * portions of large files, such as video streaming or when only a specific byte range of a file is requested.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/206
     * @see https://en.wikipedia.org/wiki/List_of_HTTP_status_codes#2xx_Success
     *
     * @author Charitha Prabhashwara
     * @date 2025-04-21
     */
    public const PARTIAL_CONTENT= 206;

    /**
     * HTTP 207 Multi-Status
     *
     * Successful Status Code (2xx)
     *
     * Indicates that the server has processed multiple independent operations and is providing status information 
     * for each operation. This status code is commonly used in **WebDAV** and other multi-resource operations where 
     * multiple items are updated or retrieved in a single request.
     *
     * The response body typically contains a detailed list of status codes for each individual operation.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/207
     * @see https://en.wikipedia.org/wiki/List_of_HTTP_status_codes#2xx_Success
     *
     * @author Charitha Prabhashwara
     * @date 2025-04-21
     */
    public const MULTI_STATUS = 207;

    /**
     * HTTP 208 Already Reported
     *
     * Successful Status Code (2xx)
     *
     * Indicates that the members of a DAV binding have already been enumerated in a previous response to this request,
     * and are not being included again. This status code is used within a `207 Multi-Status` response to avoid repeatedly
     * listing the same internal members of a collection in WebDAV operations.
     *
     * It helps reduce redundancy in complex multi-resource responses.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/208
     * @see https://en.wikipedia.org/wiki/List_of_HTTP_status_codes#2xx_Success
     *
     * @author Charitha Prabhashwara
     * @date 2025-04-21
     */
    public const ALREADY_REPORTED = 208;

    /**
     * HTTP 226 IM Used
     *
     * Successful Status Code (2xx)
     *
     * Indicates that the server has fulfilled a `GET` request for the resource, and the response reflects one or more
     * instance-manipulations applied to the current instance. This status code is part of the HTTP Delta encoding extension,
     * allowing clients to request and receive only the changes (deltas) rather than the entire resource.
     *
     * It improves efficiency by reducing bandwidth when partial updates are sufficient.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/226
     * @see https://en.wikipedia.org/wiki/List_of_HTTP_status_codes#2xx_Success
     *
     * @author Charitha Prabhashwara
     * @date 2025-04-21
     */
    public const IM_USED = 226;

    //Redirrection messages

    /**
     * HTTP 300 Multiple Choices
     *
     * Redirection Status Code (3xx)
     *
     * Indicates that the request has more than one possible response, and the user agent or user should select one of them.
     * This status code is typically used when there are multiple representations of a resource (e.g., different formats or languages),
     * and the server provides a list of available options in the response.
     *
     * Automatic selection is possible if the server includes a preferred choice or if the client has specific preferences.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/300
     * @see https://en.wikipedia.org/wiki/List_of_HTTP_status_codes#3xx_Redirection
     *
     * @author Charitha Prabhashwara
     * @date 2025-04-21
     */
    public const MULTIPLE_CHOICES = 300;

    /**
     * HTTP 301 Moved Permanently
     *
     * Redirection Status Code (3xx)
     *
     * Indicates that the requested resource has been permanently moved to a new URL, which is provided in the `Location` header.
     * Search engines and clients should update their references to use the new URL in future requests.
     *
     * This status code is commonly used for SEO-friendly redirects, domain changes, or URL restructuring.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/301
     * @see https://en.wikipedia.org/wiki/List_of_HTTP_status_codes#3xx_Redirection
     *
     * @author Charitha Prabhashwara
     * @date 2025-04-21
     */
    public const MOVED_PERMANENTLY = 301;

    /**
     * HTTP 302 Found
     *
     * Redirection Status Code (3xx)
     *
     * Indicates that the requested resource is temporarily located at a different URI, as specified in the `Location` header.
     * Since the redirection is temporary, clients should continue to use the original request URI for future requests.
     *
     * Although originally intended for `GET` and `POST`, many user agents mistakenly changed the request method to `GET` during redirection.
     * For strict behavior, consider using `307 Temporary Redirect` instead.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/302
     * @see https://en.wikipedia.org/wiki/List_of_HTTP_status_codes#3xx_Redirection
     *
     * @author Charitha Prabhashwara
     * @date 2025-04-21
     */
    public const FOUND = 302;

    /**
     * HTTP 303 See Other
     *
     * Redirection Status Code (3xx)
     *
     * Indicates that the response to the request can be found under another URI using a `GET` method, 
     * regardless of the original request method.
     *
     * This status is typically used to redirect after a `POST` request to a confirmation page or different resource.
     * It ensures that the subsequent request is a `GET`, which is safe and idempotent.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/303
     * @see https://en.wikipedia.org/wiki/List_of_HTTP_status_codes#303
     *
     * @author Charitha Prabhashwara
     * @date 2025-04-21
     */
    public const SEE_OTHER = 303;

    /**
     * The HTTP 304 Not Modified.
     * 
     * Redirection Status Code (3xx)
     * 
     * 304 Not Modified indicates that the resource has not been modified since the version specified by the request headers, 
     * such as `If-Modified-Since` or `If-None-Match`.
     * 
     * This status allows for efficient caching by informing the client that the cached version is still valid, 
     * eliminating the need for the server to resend the full resource.
     * 
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/304
     * @see https://en.wikipedia.org/wiki/List_of_HTTP_status_codes#304
     * 
     * @author Charitha Prabhashwara
     * @date 2025-04-21
     */
    public const NOT_MODIFIED = 304;

    /**
     * The HTTP 305 Use Proxy.
     * 
     * RRedirection Status Code (3xx)
     * 
     * 305 Use Proxy indicates that the requested resource must be accessed through the proxy specified by the `Location` header.
     * This status code is used to inform the client that it must use a proxy server to access the requested resource. 
     * The `Location` header provides the URI of the proxy to be used.
     * 
     * This status code was once part of the HTTP specification but has been deprecated and is no longer widely used. 
     * Modern web services prefer other methods, like direct client-to-server communication, for better security and flexibility.
     * 
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/305
     * @see https://en.wikipedia.org/wiki/List_of_HTTP_status_codes#305
     * 
     * @author Charitha Prabhashwara
     * @date 2025-04-21
     */
    public const USE_PROXY = 305;

    /**
     * The HTTP 306 Switch Proxy.
     * Redirection Status Code (Deprecated)
     * 
     * 306 Switch Proxy is no longer used and is reserved for future use. It was previously used to indicate that
     * subsequent requests should use the specified proxy server. However, this status code has been removed from the HTTP/1.1 specification.
     * 
     * The usage of this status code is now deprecated, and modern web applications and protocols no longer rely on it.
     * It's recommended to use other redirection status codes that are currently valid and widely supported.
     * 
     * @deprecated This status code is deprecated and should not be used.
     * 
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/306
     * @see https://en.wikipedia.org/wiki/List_of_HTTP_status_codes#306
     * 
     * @author Charitha Prabhashwara
     * @date 2025-04-21
     */
    public const SWITCH_PROXY = 306;

    /**
     * The HTTP 307 Temporary Redirect.
     * 
     * Redirection Status Code (3xx)
     * 
     * 307 Temporary Redirect indicates that the resource is temporarily located at a different URI, but the request method should not change. 
     * This means that if the client sent a `POST` request, the subsequent redirected request should also be a `POST`. 
     * The status code ensures that the client continues to use the original method, unlike the `302 Found`, which might change the method to `GET` in some cases.
     * 
     * This status is useful when a resource has been temporarily moved, but the client should continue to use the same HTTP method when accessing the new URI.
     * 
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/307
     * @see https://en.wikipedia.org/wiki/List_of_HTTP_status_codes#307
     * 
     * @author Charitha Prabhashwara
     * @date 2025-04-21
     */
    public const TEMPORARY_REDIRECT = 307;

    /**
     * The HTTP 308 Permanent Redirect.
     * 
     * Redirection Status Code (3xx)
     * 
     * 308 Permanent Redirect indicates that the resource is permanently located at a different URI, and the request method should not change. 
     * This status code is similar to the 301 Moved Permanently status, but with the added requirement that the method used in the original request (e.g., `POST`, `PUT`) must be preserved during the redirection.
     * 
     * Unlike a `302 Found` or `307 Temporary Redirect`, which may allow the request method to change to `GET` during redirection, a `308 Permanent Redirect` ensures that the client continues using the same HTTP method.
     * 
     * This status code is useful when a resource is permanently moved to a new location, and you want to ensure that the client maintains the same method and request body during the redirection.
     * 
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/308
     * @see https://en.wikipedia.org/wiki/List_of_HTTP_status_codes#308
     * 
     * @author Charitha Prabhashwara
     * @date 2025-04-21
     */
    public const PERMANENT_REDIRECT = 308;

    /**
     * The HTTP 400 Bad Request.
     * 
     * Client Error Status Code (4xx)
     * 
     * 400 Bad Request indicates that the server cannot or will not process the request due to a client error. This could occur for various reasons, such as malformed syntax, invalid request message framing, or deceptive request routing.
     * 
     * Common causes of a **400 Bad Request** include sending invalid data in the request, missing required parameters, or the server being unable to understand the request due to incorrect encoding or format. This status code suggests that the client should modify the request before resending it.
     * 
     * It’s important for clients to provide the correct information and format when making requests to avoid encountering this error.
     * 
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/400
     * @see https://en.wikipedia.org/wiki/List_of_HTTP_status_codes#400
     * 
     * @author Charitha Prabhashwara
     * @date 2025-04-21
     */
    public const BAD_REQUEST = 400;

    /**
     * The HTTP 401 Unauthorized.
     * 
     * Client Error Status Code (4xx)
     * 
     * 401 Unauthorized indicates that the request requires user authentication. This status is returned when the client makes a request to a resource that requires authentication but fails to provide valid credentials or any credentials at all.
     * 
     * A **401 Unauthorized** response typically occurs when an API or web service requires an authentication token (e.g., API key, OAuth token) or user credentials (e.g., username and password). If the client fails to provide the required authentication, the server responds with a **401** status.
     * 
     * In most cases, this error is accompanied by a `WWW-Authenticate` header that indicates the authentication method(s) required for access.
     * 
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/401
     * @see https://en.wikipedia.org/wiki/List_of_HTTP_status_codes#401
     * 
     * @author Charitha Prabhashwara
     * @date 2025-04-21
     */
    public const UNAUTHORIZED = 401;
    
    /**
     * The HTTP 402 Payment Required.
     * Client Error Status Code (4xx)
     * 
     * 402 Payment Required is reserved for future use and is not widely used. It was originally intended to be used for digital payment systems, where access to a resource would be denied until the user made a payment. 
     * However, this status code has not been widely implemented or adopted in practice.
     * 
     * While it is defined in the HTTP/1.1 specification, **402 Payment Required** remains unimplemented and is primarily left as a placeholder for future potential use cases, particularly in the context of web-based payment models or subscription-based services.
     * 
     * As of now, it is not commonly encountered, and other status codes, such as **403 Forbidden**, are generally used for handling access denial in situations where payment is required.
     * 
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/402
     * @see https://en.wikipedia.org/wiki/List_of_HTTP_status_codes#402
     * 
     * @author Charitha Prabhashwara
     * @date 2025-04-21
     */
    public const PAYMENT_REQUIRED = 402;

    /**
     * The HTTP 403 Forbidden.
     * Client Error Status Code (4xx)
     * 
     * 403 Forbidden indicates that the server understands the request but refuses to authorize it. This status code occurs when the server is explicitly denying access to the resource, regardless of authentication credentials.
     * 
     * A **403 Forbidden** error often happens when a user or system has valid credentials but does not have the necessary permissions to access the requested resource. This may be due to a lack of access rights, IP filtering, or other server-side authorization policies.
     * 
     * Unlike a **401 Unauthorized** error, which typically indicates missing or invalid credentials, a **403 Forbidden** error signifies that the credentials provided are valid, but access is still not allowed.
     * 
     * Common causes include trying to access a restricted area, insufficient user permissions, or administrative controls on the server.
     * 
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/403
     * @see https://en.wikipedia.org/wiki/List_of_HTTP_status_codes#403
     * 
     * @author Charitha Prabhashwara
     * @date 2025-04-21
     */
    public const FORBIDDEN = 403;

    /**
     * The HTTP 404 Not Found.
     * Client Error Status Code (4xx)
     * 
     * 404 Not Found indicates that the server cannot find the requested resource. This is one of the most common HTTP errors and generally means that the URL or path the client is trying to access does not exist on the server.
     * 
     * A **404 Not Found** error can occur for several reasons, such as:
     * - A broken or incorrect URL entered by the user.
     * - A resource that has been deleted or moved without proper redirection.
     * - A misspelled URL or incorrect link.
     * 
     * Unlike other client errors like **400 Bad Request** or **403 Forbidden**, the **404 Not Found** error specifically points to the non-existence of the resource on the server, regardless of the client’s authentication or request validity.
     * 
     * It is a standard response when the server is unable to locate the resource that matches the request URI, and typically, web servers will display a custom error page indicating that the resource could not be found.
     * 
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/404
     * @see https://en.wikipedia.org/wiki/List_of_HTTP_status_codes#404
     * 
     * @author Charitha Prabhashwara
     * @date 2025-04-21
     */
    public const NOT_FOUND = 404;

    /**
     * The HTTP 405 Method Not Allowed.
     * Client Error Status Code (4xx)
     * 
     * 405 Method Not Allowed indicates that the request method is known by the server but is not supported by the target resource. This error typically occurs when the client uses an HTTP method (such as `GET`, `POST`, `PUT`, `DELETE`, etc.) that the server recognizes but does not support for the requested resource.
     * 
     * For example, if a server is set to allow only `GET` requests for a particular resource and the client sends a `POST` request, the server will respond with a **405 Method Not Allowed** error.
     * 
     * This status code is also often accompanied by an `Allow` header, which lists the allowed methods for the requested resource. The client can then modify the request to use one of the allowed methods.
     * 
     * It's important to note that the **405** error does not imply that the request was malformed, but rather that the method itself is not supported for the given resource.
     * 
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/405
     * @see https://en.wikipedia.org/wiki/List_of_HTTP_status_codes#405
     * 
     * @author Charitha Prabhashwara
     * @date 2025-04-21
     */
    public const METHOD_NOT_ALLOWED = 405;

    /**
     * The HTTP 406 Not Acceptable.
     * Client Error Status Code (4xx)
     * 
     * 406 Not Acceptable indicates that the server cannot produce a response matching the list of acceptable values defined in the request's proactive content negotiation headers. This error occurs when the client’s request specifies criteria for the type of response it can accept, such as specific content types, encodings, or character sets, but the server cannot fulfill the request based on those conditions.
     * 
     * A common example of this error occurs when a client sends a request with the `Accept` header that lists content types the server is unable to provide. For instance, if the client requests a response in `application/json` but the server can only provide `text/html`, it will return a **406 Not Acceptable** error.
     * 
     * The server should include the `Content-Type` or other relevant headers in its response to help the client understand why the requested content is not available in the desired format.
     * 
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/406
     * @see https://en.wikipedia.org/wiki/List_of_HTTP_status_codes#406
     * 
     * @author Charitha Prabhashwara
     * @date 2025-04-21
     */
    public const NOT_ACCEPTABLE = 406;

    /**
     * The HTTP 407 Proxy Authentication Required.
     * Client Error Status Code (4xx)
     * 
     * 407 Proxy Authentication Required indicates that the client must first authenticate itself with the proxy before accessing the requested resource. This error occurs when the client is trying to access a resource through a proxy server that requires authentication, but the client has not provided the necessary credentials.
     * 
     * The **407 Proxy Authentication Required** status code is similar to the **401 Unauthorized** error, but it specifically applies to proxy servers rather than the origin server. When the client encounters this error, the response typically includes a `Proxy-Authenticate` header, which specifies the authentication method(s) required to access the resource.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/407
     * @see https://en.wikipedia.org/wiki/List_of_HTTP_status_codes#407
     * 
     * @author Charitha Prabhashwara
     * @date 2025-04-21
     */
    public const PROXY_AUTHENTICATION_REQUIRED = 407;


    /**
     * The HTTP 408 Request Timeout.
     * Client Error Status Code (4xx)
     * 
     * 408 Request Timeout indicates that the server did not receive a complete request message within the time that it was prepared to wait. This error typically occurs when the client’s request takes too long to send, often due to network issues or if the client’s connection is too slow. 
     * 
     * The **408 Request Timeout** error is the server's way of informing the client that it has waited long enough for the request, but no valid or complete request was received within the timeout period.
     * 
     * 
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/408
     * @see https://en.wikipedia.org/wiki/List_of_HTTP_status_codes#408
     * 
     * @author Charitha Prabhashwara
     * @date 2025-04-21
     */
    public const REQUEST_TIMEOUT = 408;

    /**
     * HTTP 409 Conflict
     * 
     * Client Error Status Code (4xx)
     * 
     * The 409 Conflict status indicates that the request could not be completed due to a conflict with 
     * the current state of the target resource. This often happens when there is a conflict between 
     * the data the client is submitting and the data already stored on the server.
     * 
     * This error is typically encountered when attempting to modify a resource that has been 
     * concurrently modified by another party, resulting in conflicting changes.
     * 
     * @see <a href="https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/409">MDN Web Docs</a>
     * @see <a href="https://en.wikipedia.org/wiki/List_of_HTTP_status_codes#409">Wikipedia: HTTP status codes</a>
     * 
     * @author Charitha Prabhashwara
     * @date 2025-04-21
     */
    public const CONFLICT = 409;

    /**
     * The HTTP 410 Gone.
     * Client Error Status Code (4xx)
     * 
     * 410 Gone indicates that the target resource is no longer available at the origin server and that this condition is likely to be permanent. Unlike a **404 Not Found** error, which indicates that the resource may be temporarily unavailable, a **410 Gone** error suggests that the resource has been intentionally removed and will not be coming back.
     * 
     * This status code is typically used when a resource has been permanently removed from a server, and the client should not expect to find it at the same URL in the future.
     * 
     * Common reasons for receiving a **410 Gone** status include:
     * - The resource has been permanently deleted by the server.
     * - The content has been retired or replaced by another version, and the previous resource will not return.
     * 
     * The **410 Gone** status can be helpful for search engines and crawlers, signaling that a resource should be permanently removed from their index.
     * 
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/410
     * @see https://en.wikipedia.org/wiki/List_of_HTTP_status_codes#410
     * 
     * @author Charitha Prabhashwara
     * @date 2025-04-21
     */
    public const GONE = 410;

    /**
     * The HTTP 411 Length Required.
     * Client Error Status Code (4xx)
     * 
     * 411 Length Required indicates that the server refuses to accept the request without a defined `Content-Length` header. This status code occurs when the server requires the client to specify the size of the request body, but the client fails to provide it. The `Content-Length` header is essential for the server to know how much data to expect in the request body.
     * 
     * This error is most commonly encountered when sending `POST` or `PUT` requests, where the body of the request contains data that the server needs to process. The server expects a `Content-Length` header to indicate how large the body is, but if the header is missing, the server will respond with a **411 Length Required** error.
     * 
     * Common causes of this error include:
     * - The client fails to include a `Content-Length` header in the request.
     * - The client does not properly calculate the size of the request body.
     * 
     * To resolve this error, the client must include the correct `Content-Length` header in the request, indicating the size of the request body.
     * 
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/411
     * @see https://en.wikipedia.org/wiki/List_of_HTTP_status_codes#411
     * 
     * @author Charitha Prabhashwaras
     * @date 2025-04-21
     */
    public const LENGTH_REQUIRED = 411;

    /**
     * The HTTP 412 Precondition Failed.
     * Client Error Status Code (4xx)
     * 
     * 412 Precondition Failed indicates that one or more conditions in the request header fields were evaluated as false when applied to the current resource. This status code is commonly associated with the `If-None-Match`, `If-Modified-Since`, or `If-Unmodified-Since` headers, which allow clients to make conditional requests.
     * 
     * If the server evaluates one of these conditions and finds it to be false, it will respond with a **412 Precondition Failed** error, indicating that the requested operation cannot be performed because the condition failed.
     * 
     * Common causes of this error include:
     * - The `If-None-Match` or `If-Modified-Since` headers do not match the current resource state.
     * - The `If-Unmodified-Since` condition fails when trying to modify a resource that has been changed since the provided date.
     * 
     * To resolve this error, the client should verify the conditions specified in the request headers and ensure that they match the current resource state on the server.
     * 
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/412
     * @see https://en.wikipedia.org/wiki/List_of_HTTP_status_codes#412
     * 
     * @author Charitha Prabhashwara
     * @date 2025-04-21
     */
    public const PRECONDITION_FAILED = 412;

    /**
     * The HTTP 413 Payload Too Large.
     * Client Error Status Code (4xx)
     * 
     * 413 Payload Too Large indicates that the request payload is larger than the server is willing or able to process. This error typically occurs when a client sends a request with a large body (e.g., uploading a large file or sending excessive data) that exceeds the server’s preconfigured size limits.
     * 
     * The server may impose a size limit on request bodies to prevent overload or ensure that resources are used efficiently. If the client attempts to send data that exceeds this limit, the server responds with a **413 Payload Too Large** error.
     * 
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/413
     * @see https://en.wikipedia.org/wiki/List_of_HTTP_status_codes#413
     * 
     * @author Charitha Prabhashwara
     * @date 2025-04-21
     */
    public const PAYLOAD_TOO_LARGE = 413;

    /**
     * HTTP 414 URI Too Long
     *
     * Client Error Status Code (4xx)
     *
     * Indicates that the URI provided in the request is too long for the server to process.
     * 
     * This error is triggered when a client sends a URL that exceeds the server's maximum allowable URI length.
     * This may occur when a `GET` request includes an excessively long query string or path.
     * 
     * 
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/414
     * @see https://en.wikipedia.org/wiki/List_of_HTTP_status_codes#414
     * 
     * @author Charitha Prabhashwara
     * @date 2025-04-21
     */
    public const URI_TOO_LONG= 414;

    /**
     * HTTP 415 Unsupported Media Type
     *
     * Client Error Status Code (4xx)
     *
     * Indicates that the server refuses to process the request because the media type of the request
     * is not supported by the server for the target resource.
     * 
     * This typically occurs when the `Content-Type` of the request is not supported by the server.
     * 
     * 
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/415
     * @see https://en.wikipedia.org/wiki/List_of_HTTP_status_codes#415
     * 
     * @author Charitha Prabhashwara
     * @date 2025-04-21
     */
    public const UNSUPPORTED_MEDIA_TYPE = 415;

    /**
     * HTTP 416 Requested Range Not Satisfiable
     *
     * Client Error Status Code (4xx)
     *
     * Indicates that the server cannot fulfill the partial range request made by the client.
     * This typically happens when the client requests a range that is outside the size of the resource.
     *
     * 
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/416
     * @see https://en.wikipedia.org/wiki/List_of_HTTP_status_codes#416
     * 
     * @author Charitha Prabhashwara
     * @date 2025-04-21
     */
    public const REQUESTED_RANGE_NOT_SATISFIABLE = 416;

    /**
     * HTTP 417 Expectation Failed
     *
     * Client Error Status Code (4xx)
     *
     * Indicates that the server cannot meet the expectations specified in the `Expect` header of the request.
     * This status code is typically returned when a client sends an `Expect` header with an expectation that the server cannot fulfill.
     *
     * 
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/417
     * @see https://en.wikipedia.org/wiki/List_of_HTTP_status_codes#417
     * 
     * @author Charitha Prabhashwara
     * @date 2025-04-21
     */
    public const EXPECTATION_FAILED = 417;

    /**
     * HTTP 421 Misdirected Request
     *
     * Client Error Status Code (4xx)
     *
     * Indicates that the request was directed to a server that is not able to produce a response.
     * This status is used when the request was sent to the wrong server, either due to misconfiguration or routing issues.
     * The server should not respond with this status if it is unable to determine the correct server.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/421
     * @see https://en.wikipedia.org/wiki/List_of_HTTP_status_codes#421
     * 
     * @author Charitha Prabhashwara
     * @date 2025-04-21
     */
    public const MISDIRECTED_REQUEST = 421;

    /**
     * HTTP 422 Unprocessable Entity
     *
     * Client Error Status Code (4xx)
     *
     * Indicates that the server understands the request content type (e.g., JSON, XML) and the syntax is correct, 
     * but the server was unable to process the contained instructions. This typically happens when the request is 
     * well-formed but contains semantic errors or is invalid in its specific context.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/422
     * @see https://en.wikipedia.org/wiki/List_of_HTTP_status_codes#422
     * 
     * @author Charitha Prabhashwara
     * @date 2025-04-21
     */
    public const UNPROCESSABLE_ENTITY = 422;
    
    /**
     * HTTP 423 Locked
     *
     * Client Error Status Code (4xx)
     *
     * Indicates that the resource that is being accessed is currently locked and cannot be modified. 
     * This status is typically used when the resource is locked for editing or is in a state that prevents modification 
     * until the lock is released.
     *
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/423
     * @see https://en.wikipedia.org/wiki/List_of_HTTP_status_codes#423
     * 
     * @author Charitha Prabhashwara
     * @date 2025-04-21
     */
    public const LOCKED = 423;

    /**
     * HTTP 424 Failed Dependency
     *
     * Client Error Status Code (4xx)
     *
     * Indicates that the request failed due to a dependency on another request that failed. This is commonly used 
     * in systems where operations depend on the successful completion of previous requests.
     *
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/424
     * @see https://en.wikipedia.org/wiki/List_of_HTTP_status_codes#424
     * 
     * @author Charitha Prabhashwara
     * @date 2025-04-21
     */
    public const FAILED_DEPENDENCY = 424;

    /**
     * HTTP 425 Too Early
     *
     * Client Error Status Code (4xx)
     *
     * Indicates that the server is unwilling to risk processing a request that might be replayed. 
     * This status is primarily used with early data in TLS (0-RTT), where replay attacks could occur.
     *
     * It informs the client to retry the request, but not until it is safe to do so without using early data.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/425
     * @see https://en.wikipedia.org/wiki/List_of_HTTP_status_codes#425
     * 
     * @author Charitha Prabhashwara
     * @date 2025-04-21
     */
    public const TOO_EARLY = 425;

    /**
     * HTTP 426 Upgrade Required
     *
     * Client Error Status Code (4xx)
     *
     * Indicates that the server refuses to perform the request using the current protocol. 
     * The client should switch to a different protocol as specified in the `Upgrade` header field.
     *
     * This status is typically used to enforce the use of a more secure or capable protocol (e.g., upgrading from HTTP/1.1 to HTTP/2).
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/426
     * @see https://en.wikipedia.org/wiki/List_of_HTTP_status_codes#426
     * 
     * @author Charitha Prabhashwara
     * @date 2025-04-21
     */
    public const UPGRADE_REQUIRED = 426;

    /**
     * HTTP 428 Precondition Required
     *
     * Client Error Status Code (4xx)
     *
     * Indicates that the origin server requires the request to be conditional. 
     * This is typically used to prevent the 'lost update' problem, where a client accidentally overwrites changes made by others.
     *
     * The client should include precondition headers such as `If-Match` or `If-Unmodified-Since` in the request.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/428
     * @see https://en.wikipedia.org/wiki/List_of_HTTP_status_codes#428
     * 
     * @author Charitha Prabhashwara
     * @date 2025-04-21
     */
    public const PRECONDITION_REQUIRED = 428;

    /**
     * HTTP 429 Too Many Requests
     *
     * Client Error Status Code (4xx)
     *
     * Indicates that the user has sent too many requests in a given amount of time ("rate limiting"). 
     * The server may include a `Retry-After` header to indicate when to retry the request.
     *
     * This status is typically used to control abusive or excessive usage of an API or service.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/429
     * @see https://en.wikipedia.org/wiki/List_of_HTTP_status_codes#429
     * 
     * @author Charitha Prabhashwara
     * @date 2025-04-21
     */
    public const TOO_MANY_REQUESTS = 429;

    /**
     * HTTP 431 Request Header Fields Too Large
     *
     * Client Error Status Code (4xx)
     *
     * Indicates that the server is unwilling to process the request because one or more header fields are too large. 
     * This can apply to the size of a single header field or the combined size of all headers.
     *
     * The client may reduce the size of the request headers and try again.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/431
     * @see https://en.wikipedia.org/wiki/List_of_HTTP_status_codes#431
     * 
     * @author Charitha Prabhashwara
     * @date 2025-04-21
     */
    public const REQUEST_HEADER_FIELDS_TOO_LARGE = 431;

    /**
     * HTTP 451 Unavailable For Legal Reasons
     *
     * Client Error Status Code (4xx)
     *
     * Indicates that the server is denying access to the resource as a consequence of a legal demand, such as censorship laws or court orders.
     *
     * This status code is used when the server is legally prohibited from providing access to the requested content.
     *
     * @see https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/451
     * @see https://en.wikipedia.org/wiki/List_of_HTTP_status_codes#451
     * 
     * @author Charitha Prabhashwara
     * @date 2025-04-21
     */
    public const UNAVAILABLE_FOR_LEGAL_REASONS = 451;

    // Server error responses

    /**
     * HTTP 500 Internal Server Error
     * 
     * Server Error Status Code
     * 
     * The 500 Internal Server Error status indicates that the server has encountered an unexpected condition
     * that prevented it from fulfilling the request. This is a generic error message when the server does not
     * have a more specific message to describe the issue.
     * 
     * This error typically occurs due to a server misconfiguration, an issue with server-side code, 
     * or a temporary glitch. It suggests that the server is unable to perform the requested action, but the 
     * issue lies on the server's side and not with the client’s request.
     * 
     * @see <a href="https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/500">MDN Web Docs</a>
     * @see <a href="https://en.wikipedia.org/wiki/List_of_HTTP_status_codes#500">Wikipedia: HTTP status codes</a>
     * 
     * @author Charitha Prabhashwara
     * @date 2025-04-21
     */
    public const INTERNAL_SERVER_ERROR = 500;

    /**
     * HTTP 501 Not Implemented
     * 
     * Server Error Status Code
     * 
     * The 501 Not Implemented status indicates that the server does not support the functionality required 
     * to fulfill the request. This error occurs when the server either does not recognize the request method 
     * or is incapable of supporting it. Essentially, it means that the server cannot process the request due to 
     * missing functionality.
     * 
     * The 501 status code is commonly seen when a requested HTTP method (like `PUT`, `DELETE`, etc.) is not 
     * supported by the server or if the server does not implement a required feature for the request to be processed.
     * 
     * @see <a href="https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/501">MDN Web Docs</a>
     * @see <a href="https://en.wikipedia.org/wiki/List_of_HTTP_status_codes#501">Wikipedia: HTTP status codes</a>
     * 
     * @author Charitha Prabhashwara
     * @date 2025-04-21
     */
    public const NOT_IMPLEMENTED = 501;

    /**
     * HTTP 502 Bad Gateway
     * 
     * Server Error Status Code
     * 
     * The 502 Bad Gateway status indicates that the server, while acting as a gateway or proxy, 
     * received an invalid response from an upstream server it accessed in order to fulfill the request. 
     * This typically occurs when the server is unable to get a valid response from another server 
     * it relies on for processing the request.
     * 
     * 
     * @see <a href="https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/502">MDN Web Docs</a>
     * @see <a href="https://en.wikipedia.org/wiki/List_of_HTTP_status_codes#502">Wikipedia: HTTP status codes</a>
     * 
     * @author Charitha Prabhashwara
     * @date 2025-04-21
     */
    public const BAD_GATEWAY = 502;

    /**
     * HTTP 503 Service Unavailable
     * 
     * Server Error Status Code
     * 
     * The 503 Service Unavailable status code indicates that the server is currently unable to handle 
     * the request due to a temporary overload or scheduled maintenance. This error is typically a temporary 
     * condition that can be resolved after some time. It suggests that the server is temporarily unavailable 
     * and the client should try again later.
     * 
     * The 503 status code may include a `Retry-After` header indicating when the client should retry the request.
     * 
     * @see <a href="https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/503">MDN Web Docs</a>
     * @see <a href="https://en.wikipedia.org/wiki/List_of_HTTP_status_codes#503">Wikipedia: HTTP status codes</a>
     * 
     * @author Charitha Prabhashwara
     * @date 2025-04-21
     */
    public const SERVICE_UNAVAILABLE = 503;

    /**
     * HTTP 504 Gateway Timeout
     * 
     * Server Error Status Code
     * 
     * The 504 Gateway Timeout status code indicates that the server, while acting as a gateway or proxy, 
     * did not receive a timely response from an upstream server or other auxiliary server it needed in 
     * order to complete the request. This typically occurs when a server is acting as a gateway or proxy 
     * and is waiting for a response from another server, but that server fails to respond within the 
     * allocated time frame.
     * 
     * The 504 status is often temporary, and retrying the request after a brief wait might resolve the issue.
     * 
     * @see <a href="https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/504">MDN Web Docs</a>
     * @see <a href="https://en.wikipedia.org/wiki/List_of_HTTP_status_codes#504">Wikipedia: HTTP status codes</a>
     * 
     * @author Charitha Prabhashwara
     * @date 2025-04-21
     */
    public const GATEWAY_TIMEOUT = 504;

    /**
     * HTTP 505 HTTP Version Not Supported
     * 
     * Server Error Status Code
     * 
     * The 505 HTTP Version Not Supported status code indicates that the server does not support 
     * the HTTP protocol version that was used in the client's request. This error occurs when the client 
     * sends a request using an HTTP version that the server cannot process or does not recognize.
     * 
     * This status code is typically seen when the client sends a request using an older or unsupported 
     * version of the HTTP protocol, such as an outdated version that the server no longer supports.
     * 
     * @see <a href="https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/505">MDN Web Docs</a>
     * @see <a href="https://en.wikipedia.org/wiki/List_of_HTTP_status_codes#505">Wikipedia: HTTP status codes</a>
     * 
     * @author Charitha Prabhashwara
     * @date 2025-04-21
     */
    public const HTTP_VERSION_NOT_SUPPORTED = 505;

    /**
     * HTTP 506 Variant Also Negotiates
     * 
     * Server Error Status Code
     * 
     * The 506 Variant Also Negotiates status code indicates that the server encountered an internal 
     * configuration error while attempting to select a variant of the requested resource. This status 
     * is typically returned when content negotiation fails due to misconfiguration on the server.
     * 
     * This error occurs when the server is configured to perform content negotiation (selecting the 
     * appropriate variant of a resource based on factors like language, encoding, etc.), but a server-side 
     * error prevents the proper variant from being selected, leading to a failure in the negotiation process.
     * 
     * @see <a href="https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/506">MDN Web Docs</a>
     * @see <a href="https://en.wikipedia.org/wiki/List_of_HTTP_status_codes#506">Wikipedia: HTTP status codes</a>
     * 
     * @author Charitha Prabhashwara
     * @date 2025-04-21
     */
    public const VARIANT_ALSO_NEGOTIATES = 506;

    /**
     * HTTP 507 Insufficient Storage
     * 
     * Server Error Status Code
     * 
     * The 507 Insufficient Storage status code indicates that the server is unable to store the 
     * representation needed to complete the request. This error typically occurs when the server is 
     * running out of space or does not have enough storage capacity to process the request.
     * 
     * The 507 error is usually related to a lack of available storage on the server, and it may 
     * occur in scenarios where the server cannot fulfill a request due to storage limitations, such 
     * as when attempting to upload files or store data on the server.
     * 
     * @see <a href="https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/507">MDN Web Docs</a>
     * @see <a href="https://en.wikipedia.org/wiki/List_of_HTTP_status_codes#507">Wikipedia: HTTP status codes</a>
     * 
     * @author Charitha Prabhashwara
     * @date 2025-04-21
     */
    public const INSUFFICIENT_STORAGE = 507;

    /**
     * HTTP 508 Loop Detected
     * 
     * Server Error Status Code
     * 
     * The 508 Loop Detected status code indicates that the server has detected an infinite loop while 
     * processing a request. This error typically occurs in situations where a resource is configured 
     * in such a way that it results in a circular reference or recursive loop.
     * 
     * The most common scenario for a 508 error arises in systems that perform resource redirection 
     * (such as web servers or proxies) where a resource redirects to another, which in turn redirects 
     * back to the original resource, creating an endless loop. 
     * 
     * @see <a href="https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/508">MDN Web Docs</a>
     * @see <a href="https://en.wikipedia.org/wiki/List_of_HTTP_status_codes#508">Wikipedia: HTTP status codes</a>
     * 
     * @author Charitha Prabhashwara
     * @date 2025-04-21
     */
    public const LOOP_DETECTED = 508;

    /**
     * HTTP 510 Not Extended
     * 
     * Server Error Status Code
     * 
     * The 510 Not Extended status code indicates that the server requires further extensions to fulfill 
     * the request. This error occurs when the server cannot process the request because the client has 
     * not provided the necessary extensions, or the server requires additional information that has not 
     * been supplied.
     * 
     * This status code is typically returned when the request lacks necessary extensions or capabilities 
     * required by the server to handle the request, such as certain headers or protocol features.
     * 
     * @see <a href="https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/510">MDN Web Docs</a>
     * @see <a href="https://en.wikipedia.org/wiki/List_of_HTTP_status_codes#510">Wikipedia: HTTP status codes</a>
     * 
     * @author Charitha Prabhashwara
     * @date 2025-04-21
     */
    public const NOT_EXTENDED = 510;

    /**
     * HTTP 511 Network Authentication Required
     * 
     * Server Error Status Code
     * 
     * The 511 Network Authentication Required status code indicates that the client needs to authenticate 
     * to gain network access. This error is typically used by proxy servers that require authentication 
     * before granting access to the network or the requested resource.
     * 
     * This status code is often seen in situations where a client needs to log in to a network (e.g., a 
     * Wi-Fi hotspot or a captive portal) before it can access the internet or a specific service.
     * 
     * @see <a href="https://developer.mozilla.org/en-US/docs/Web/HTTP/Status/511">MDN Web Docs</a>
     * @see <a href="https://en.wikipedia.org/wiki/List_of_HTTP_status_codes#511">Wikipedia: HTTP status codes</a>
     * 
     * @author Charitha Prabhashwara
     * @date 2025-04-21
     */
    public const NETWORK_AUTHENTICATION_REQUIRED = 511;

    /**
     * HTTP 599 Network Connect Timeout Error
     * 
     * Server Error Status Code
     * 
     * The 599 Network Connect Timeout Error is a non-standard HTTP status code used to indicate that 
     * a network connection timed out while attempting to connect to the server. This error occurs when 
     * the client was unable to establish a connection to the server within a predefined timeout period.
     * 
     * It is not an official HTTP status code but is used by some proxies or servers to indicate a 
     * network-level timeout when the server or proxy could not establish a connection to the upstream 
     * server or service within the specified time limit.
     * 
     * @see <a href="https://en.wikipedia.org/wiki/List_of_HTTP_status_codes#599">Wikipedia: HTTP status codes (599)</a>
     * 
     * @author Charitha Prabhashwara
     * @date 2025-04-21
     */
    public const NETWORK_CONNECT_TIMEOUT_ERROR = 599;

    /**
     * HTTP 0 Unknown
     * 
     * General Status Code
     * 
     * The 0 status code is typically used to represent an unknown or undefined error state, and it 
     * is not part of the official HTTP status code specification. The status code 0 is often encountered 
     * in situations where an error occurs, but the server or client is unable to classify or specify the 
     * exact issue.
     * 
     * This status code is sometimes used by network clients or services that encounter an unknown error 
     * condition or are unable to retrieve a valid HTTP status code from a server. The code may indicate 
     * that a failure occurred at the network or transport level, but the specifics of the failure are unknown.
     * 
     * @see <a href="https://developer.mozilla.org/en-US/docs/Web/HTTP/Status">MDN Web Docs (General Status Codes)</a>
     * 
     * @author Charitha Prabhashwara
     * @date 2025-04-21
     */
    public const UNKNOWN = 0;



}
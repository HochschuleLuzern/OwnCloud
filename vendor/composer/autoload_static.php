<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit0152201323dcfa5a9528401bd3b4ab7a
{
    public static $files = array (
        '7b11c4dc42b3b3023073cb14e519683c' => __DIR__ . '/..' . '/ralouphie/getallheaders/src/getallheaders.php',
        'c964ee0ededf28c96ebd9db5099ef910' => __DIR__ . '/..' . '/guzzlehttp/promises/src/functions_include.php',
        'a0edc8309cc5e1d60e3047b5df6b7052' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/functions_include.php',
        '37a3dc5111fe8f707ab4c132ef1dbc62' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/functions_include.php',
    );

    public static $prefixLengthsPsr4 = array (
        's' => 
        array (
            'srag\\RemovePluginDataConfirm\\OwnCloud\\' => 38,
            'srag\\Plugins\\OwnCloud\\' => 22,
            'srag\\LibrariesNamespaceChanger\\' => 31,
            'srag\\DIC\\OwnCloud\\' => 18,
        ),
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
            'Psr\\Http\\Client\\' => 16,
        ),
        'L' => 
        array (
            'League\\OAuth2\\Client\\' => 21,
        ),
        'G' => 
        array (
            'GuzzleHttp\\Psr7\\' => 16,
            'GuzzleHttp\\Promise\\' => 19,
            'GuzzleHttp\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'srag\\RemovePluginDataConfirm\\OwnCloud\\' => 
        array (
            0 => __DIR__ . '/..' . '/srag/removeplugindataconfirm/src',
        ),
        'srag\\Plugins\\OwnCloud\\' => 
        array (
            0 => __DIR__ . '/../..' . '/src',
        ),
        'srag\\LibrariesNamespaceChanger\\' => 
        array (
            0 => __DIR__ . '/..' . '/srag/librariesnamespacechanger/src',
        ),
        'srag\\DIC\\OwnCloud\\' => 
        array (
            0 => __DIR__ . '/..' . '/srag/dic/src',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Psr\\Http\\Client\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-client/src',
        ),
        'League\\OAuth2\\Client\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/oauth2-client/src',
        ),
        'GuzzleHttp\\Psr7\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/psr7/src',
        ),
        'GuzzleHttp\\Promise\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/promises/src',
        ),
        'GuzzleHttp\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/guzzle/src',
        ),
    );

    public static $classMap = array (
        'DAVClient' => __DIR__ . '/../..' . '/classes/Client/DAVClient/DAVClient.php',
        'GuzzleHttp\\Client' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Client.php',
        'GuzzleHttp\\ClientInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/ClientInterface.php',
        'GuzzleHttp\\ClientTrait' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/ClientTrait.php',
        'GuzzleHttp\\Cookie\\CookieJar' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Cookie/CookieJar.php',
        'GuzzleHttp\\Cookie\\CookieJarInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Cookie/CookieJarInterface.php',
        'GuzzleHttp\\Cookie\\FileCookieJar' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Cookie/FileCookieJar.php',
        'GuzzleHttp\\Cookie\\SessionCookieJar' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Cookie/SessionCookieJar.php',
        'GuzzleHttp\\Cookie\\SetCookie' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Cookie/SetCookie.php',
        'GuzzleHttp\\Exception\\BadResponseException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/BadResponseException.php',
        'GuzzleHttp\\Exception\\ClientException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/ClientException.php',
        'GuzzleHttp\\Exception\\ConnectException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/ConnectException.php',
        'GuzzleHttp\\Exception\\GuzzleException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/GuzzleException.php',
        'GuzzleHttp\\Exception\\InvalidArgumentException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/InvalidArgumentException.php',
        'GuzzleHttp\\Exception\\RequestException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/RequestException.php',
        'GuzzleHttp\\Exception\\ServerException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/ServerException.php',
        'GuzzleHttp\\Exception\\TooManyRedirectsException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/TooManyRedirectsException.php',
        'GuzzleHttp\\Exception\\TransferException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/TransferException.php',
        'GuzzleHttp\\HandlerStack' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/HandlerStack.php',
        'GuzzleHttp\\Handler\\CurlFactory' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/CurlFactory.php',
        'GuzzleHttp\\Handler\\CurlFactoryInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/CurlFactoryInterface.php',
        'GuzzleHttp\\Handler\\CurlHandler' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/CurlHandler.php',
        'GuzzleHttp\\Handler\\CurlMultiHandler' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/CurlMultiHandler.php',
        'GuzzleHttp\\Handler\\EasyHandle' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/EasyHandle.php',
        'GuzzleHttp\\Handler\\MockHandler' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/MockHandler.php',
        'GuzzleHttp\\Handler\\Proxy' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/Proxy.php',
        'GuzzleHttp\\Handler\\StreamHandler' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/StreamHandler.php',
        'GuzzleHttp\\MessageFormatter' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/MessageFormatter.php',
        'GuzzleHttp\\Middleware' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Middleware.php',
        'GuzzleHttp\\Pool' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Pool.php',
        'GuzzleHttp\\PrepareBodyMiddleware' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/PrepareBodyMiddleware.php',
        'GuzzleHttp\\Promise\\AggregateException' => __DIR__ . '/..' . '/guzzlehttp/promises/src/AggregateException.php',
        'GuzzleHttp\\Promise\\CancellationException' => __DIR__ . '/..' . '/guzzlehttp/promises/src/CancellationException.php',
        'GuzzleHttp\\Promise\\Coroutine' => __DIR__ . '/..' . '/guzzlehttp/promises/src/Coroutine.php',
        'GuzzleHttp\\Promise\\EachPromise' => __DIR__ . '/..' . '/guzzlehttp/promises/src/EachPromise.php',
        'GuzzleHttp\\Promise\\FulfilledPromise' => __DIR__ . '/..' . '/guzzlehttp/promises/src/FulfilledPromise.php',
        'GuzzleHttp\\Promise\\Promise' => __DIR__ . '/..' . '/guzzlehttp/promises/src/Promise.php',
        'GuzzleHttp\\Promise\\PromiseInterface' => __DIR__ . '/..' . '/guzzlehttp/promises/src/PromiseInterface.php',
        'GuzzleHttp\\Promise\\PromisorInterface' => __DIR__ . '/..' . '/guzzlehttp/promises/src/PromisorInterface.php',
        'GuzzleHttp\\Promise\\RejectedPromise' => __DIR__ . '/..' . '/guzzlehttp/promises/src/RejectedPromise.php',
        'GuzzleHttp\\Promise\\RejectionException' => __DIR__ . '/..' . '/guzzlehttp/promises/src/RejectionException.php',
        'GuzzleHttp\\Promise\\TaskQueue' => __DIR__ . '/..' . '/guzzlehttp/promises/src/TaskQueue.php',
        'GuzzleHttp\\Promise\\TaskQueueInterface' => __DIR__ . '/..' . '/guzzlehttp/promises/src/TaskQueueInterface.php',
        'GuzzleHttp\\Psr7\\AppendStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/AppendStream.php',
        'GuzzleHttp\\Psr7\\BufferStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/BufferStream.php',
        'GuzzleHttp\\Psr7\\CachingStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/CachingStream.php',
        'GuzzleHttp\\Psr7\\DroppingStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/DroppingStream.php',
        'GuzzleHttp\\Psr7\\FnStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/FnStream.php',
        'GuzzleHttp\\Psr7\\InflateStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/InflateStream.php',
        'GuzzleHttp\\Psr7\\LazyOpenStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/LazyOpenStream.php',
        'GuzzleHttp\\Psr7\\LimitStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/LimitStream.php',
        'GuzzleHttp\\Psr7\\MessageTrait' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/MessageTrait.php',
        'GuzzleHttp\\Psr7\\MultipartStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/MultipartStream.php',
        'GuzzleHttp\\Psr7\\NoSeekStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/NoSeekStream.php',
        'GuzzleHttp\\Psr7\\PumpStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/PumpStream.php',
        'GuzzleHttp\\Psr7\\Request' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Request.php',
        'GuzzleHttp\\Psr7\\Response' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Response.php',
        'GuzzleHttp\\Psr7\\Rfc7230' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Rfc7230.php',
        'GuzzleHttp\\Psr7\\ServerRequest' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/ServerRequest.php',
        'GuzzleHttp\\Psr7\\Stream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Stream.php',
        'GuzzleHttp\\Psr7\\StreamDecoratorTrait' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/StreamDecoratorTrait.php',
        'GuzzleHttp\\Psr7\\StreamWrapper' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/StreamWrapper.php',
        'GuzzleHttp\\Psr7\\UploadedFile' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/UploadedFile.php',
        'GuzzleHttp\\Psr7\\Uri' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Uri.php',
        'GuzzleHttp\\Psr7\\UriNormalizer' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/UriNormalizer.php',
        'GuzzleHttp\\Psr7\\UriResolver' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/UriResolver.php',
        'GuzzleHttp\\RedirectMiddleware' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/RedirectMiddleware.php',
        'GuzzleHttp\\RequestOptions' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/RequestOptions.php',
        'GuzzleHttp\\RetryMiddleware' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/RetryMiddleware.php',
        'GuzzleHttp\\TransferStats' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/TransferStats.php',
        'GuzzleHttp\\Utils' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Utils.php',
        'League\\OAuth2\\Client\\Grant\\AbstractGrant' => __DIR__ . '/..' . '/league/oauth2-client/src/Grant/AbstractGrant.php',
        'League\\OAuth2\\Client\\Grant\\AuthorizationCode' => __DIR__ . '/..' . '/league/oauth2-client/src/Grant/AuthorizationCode.php',
        'League\\OAuth2\\Client\\Grant\\ClientCredentials' => __DIR__ . '/..' . '/league/oauth2-client/src/Grant/ClientCredentials.php',
        'League\\OAuth2\\Client\\Grant\\Exception\\InvalidGrantException' => __DIR__ . '/..' . '/league/oauth2-client/src/Grant/Exception/InvalidGrantException.php',
        'League\\OAuth2\\Client\\Grant\\GrantFactory' => __DIR__ . '/..' . '/league/oauth2-client/src/Grant/GrantFactory.php',
        'League\\OAuth2\\Client\\Grant\\Password' => __DIR__ . '/..' . '/league/oauth2-client/src/Grant/Password.php',
        'League\\OAuth2\\Client\\Grant\\RefreshToken' => __DIR__ . '/..' . '/league/oauth2-client/src/Grant/RefreshToken.php',
        'League\\OAuth2\\Client\\OptionProvider\\HttpBasicAuthOptionProvider' => __DIR__ . '/..' . '/league/oauth2-client/src/OptionProvider/HttpBasicAuthOptionProvider.php',
        'League\\OAuth2\\Client\\OptionProvider\\OptionProviderInterface' => __DIR__ . '/..' . '/league/oauth2-client/src/OptionProvider/OptionProviderInterface.php',
        'League\\OAuth2\\Client\\OptionProvider\\PostAuthOptionProvider' => __DIR__ . '/..' . '/league/oauth2-client/src/OptionProvider/PostAuthOptionProvider.php',
        'League\\OAuth2\\Client\\Provider\\AbstractProvider' => __DIR__ . '/..' . '/league/oauth2-client/src/Provider/AbstractProvider.php',
        'League\\OAuth2\\Client\\Provider\\Exception\\IdentityProviderException' => __DIR__ . '/..' . '/league/oauth2-client/src/Provider/Exception/IdentityProviderException.php',
        'League\\OAuth2\\Client\\Provider\\GenericProvider' => __DIR__ . '/..' . '/league/oauth2-client/src/Provider/GenericProvider.php',
        'League\\OAuth2\\Client\\Provider\\GenericResourceOwner' => __DIR__ . '/..' . '/league/oauth2-client/src/Provider/GenericResourceOwner.php',
        'League\\OAuth2\\Client\\Provider\\ResourceOwnerInterface' => __DIR__ . '/..' . '/league/oauth2-client/src/Provider/ResourceOwnerInterface.php',
        'League\\OAuth2\\Client\\Token\\AccessToken' => __DIR__ . '/..' . '/league/oauth2-client/src/Token/AccessToken.php',
        'League\\OAuth2\\Client\\Token\\AccessTokenInterface' => __DIR__ . '/..' . '/league/oauth2-client/src/Token/AccessTokenInterface.php',
        'League\\OAuth2\\Client\\Token\\ResourceOwnerAccessTokenInterface' => __DIR__ . '/..' . '/league/oauth2-client/src/Token/ResourceOwnerAccessTokenInterface.php',
        'League\\OAuth2\\Client\\Tool\\ArrayAccessorTrait' => __DIR__ . '/..' . '/league/oauth2-client/src/Tool/ArrayAccessorTrait.php',
        'League\\OAuth2\\Client\\Tool\\BearerAuthorizationTrait' => __DIR__ . '/..' . '/league/oauth2-client/src/Tool/BearerAuthorizationTrait.php',
        'League\\OAuth2\\Client\\Tool\\GuardedPropertyTrait' => __DIR__ . '/..' . '/league/oauth2-client/src/Tool/GuardedPropertyTrait.php',
        'League\\OAuth2\\Client\\Tool\\MacAuthorizationTrait' => __DIR__ . '/..' . '/league/oauth2-client/src/Tool/MacAuthorizationTrait.php',
        'League\\OAuth2\\Client\\Tool\\ProviderRedirectTrait' => __DIR__ . '/..' . '/league/oauth2-client/src/Tool/ProviderRedirectTrait.php',
        'League\\OAuth2\\Client\\Tool\\QueryBuilderTrait' => __DIR__ . '/..' . '/league/oauth2-client/src/Tool/QueryBuilderTrait.php',
        'League\\OAuth2\\Client\\Tool\\RequestFactory' => __DIR__ . '/..' . '/league/oauth2-client/src/Tool/RequestFactory.php',
        'League\\OAuth2\\Client\\Tool\\RequiredParameterTrait' => __DIR__ . '/..' . '/league/oauth2-client/src/Tool/RequiredParameterTrait.php',
        'OAuth2Provider' => __DIR__ . '/../..' . '/classes/Auth/Provider/class.OAuth2Provider.php',
        'Psr\\Http\\Client\\ClientExceptionInterface' => __DIR__ . '/..' . '/psr/http-client/src/ClientExceptionInterface.php',
        'Psr\\Http\\Client\\ClientInterface' => __DIR__ . '/..' . '/psr/http-client/src/ClientInterface.php',
        'Psr\\Http\\Client\\NetworkExceptionInterface' => __DIR__ . '/..' . '/psr/http-client/src/NetworkExceptionInterface.php',
        'Psr\\Http\\Client\\RequestExceptionInterface' => __DIR__ . '/..' . '/psr/http-client/src/RequestExceptionInterface.php',
        'Psr\\Http\\Message\\MessageInterface' => __DIR__ . '/..' . '/psr/http-message/src/MessageInterface.php',
        'Psr\\Http\\Message\\RequestInterface' => __DIR__ . '/..' . '/psr/http-message/src/RequestInterface.php',
        'Psr\\Http\\Message\\ResponseInterface' => __DIR__ . '/..' . '/psr/http-message/src/ResponseInterface.php',
        'Psr\\Http\\Message\\ServerRequestInterface' => __DIR__ . '/..' . '/psr/http-message/src/ServerRequestInterface.php',
        'Psr\\Http\\Message\\StreamInterface' => __DIR__ . '/..' . '/psr/http-message/src/StreamInterface.php',
        'Psr\\Http\\Message\\UploadedFileInterface' => __DIR__ . '/..' . '/psr/http-message/src/UploadedFileInterface.php',
        'Psr\\Http\\Message\\UriInterface' => __DIR__ . '/..' . '/psr/http-message/src/UriInterface.php',
        'ilOwnCloud' => __DIR__ . '/../..' . '/classes/class.ilOwnCloud.php',
        'ilOwnCloudActionListGUI' => __DIR__ . '/../..' . '/classes/class.ilOwnCloudActionListGUI.php',
        'ilOwnCloudConfigGUI' => __DIR__ . '/../..' . '/classes/class.ilOwnCloudConfigGUI.php',
        'ilOwnCloudCreationGUI' => __DIR__ . '/../..' . '/classes/class.ilOwnCloudCreationGUI.php',
        'ilOwnCloudPlugin' => __DIR__ . '/../..' . '/classes/class.ilOwnCloudPlugin.php',
        'ilOwnCloudService' => __DIR__ . '/../..' . '/classes/class.ilOwnCloudService.php',
        'ilOwnCloudSettingsGUI' => __DIR__ . '/../..' . '/classes/class.ilOwnCloudSettingsGUI.php',
        'ownclApp' => __DIR__ . '/../..' . '/classes/App/class.ownclApp.php',
        'ownclAuth' => __DIR__ . '/../..' . '/classes/Auth/class.ownclAuth.php',
        'ownclAuthBasic' => __DIR__ . '/../..' . '/classes/Auth/class.ownclAuthBasic.php',
        'ownclAuthOAuth2' => __DIR__ . '/../..' . '/classes/Auth/class.ownclAuthOAuth2.php',
        'ownclClient' => __DIR__ . '/../..' . '/classes/Client/class.ownclClient.php',
        'ownclConfig' => __DIR__ . '/../..' . '/classes/class.ownclConfig.php',
        'ownclFile' => __DIR__ . '/../..' . '/classes/Client/Item/class.ownclFile.php',
        'ownclFolder' => __DIR__ . '/../..' . '/classes/Client/Item/class.ownclFolder.php',
        'ownclItem' => __DIR__ . '/../..' . '/classes/Client/Item/class.ownclItem.php',
        'ownclItemCache' => __DIR__ . '/../..' . '/classes/Client/Item/class.ownclItemCache.php',
        'ownclItemFactory' => __DIR__ . '/../..' . '/classes/Client/Item/class.ownclItemFactory.php',
        'ownclLog' => __DIR__ . '/../..' . '/classes/class.ownclLog.php',
        'ownclOAuth2UserToken' => __DIR__ . '/../..' . '/classes/Auth/Token/class.ownclOAuth2UserToken.php',
        'ownclRESTClient' => __DIR__ . '/../..' . '/classes/Client/RESTClient/ownclRESTClient.php',
        'ownclShare' => __DIR__ . '/../..' . '/classes/Client/Item/class.ownclShare.php',
        'ownclShareAPI' => __DIR__ . '/../..' . '/classes/Client/RESTClient/ownclShareAPI.php',
        'ownclTree' => __DIR__ . '/../..' . '/classes/class.ownclTree.php',
        'ownclTreeGUI' => __DIR__ . '/../..' . '/classes/class.ownclTreeGUI.php',
        'srag\\DIC\\OwnCloud\\DICStatic' => __DIR__ . '/..' . '/srag/dic/src/DICStatic.php',
        'srag\\DIC\\OwnCloud\\DICStaticInterface' => __DIR__ . '/..' . '/srag/dic/src/DICStaticInterface.php',
        'srag\\DIC\\OwnCloud\\DICTrait' => __DIR__ . '/..' . '/srag/dic/src/DICTrait.php',
        'srag\\DIC\\OwnCloud\\DIC\\AbstractDIC' => __DIR__ . '/..' . '/srag/dic/src/DIC/AbstractDIC.php',
        'srag\\DIC\\OwnCloud\\DIC\\DICInterface' => __DIR__ . '/..' . '/srag/dic/src/DIC/DICInterface.php',
        'srag\\DIC\\OwnCloud\\DIC\\Implementation\\ILIAS54DIC' => __DIR__ . '/..' . '/srag/dic/src/DIC/Implementation/ILIAS54DIC.php',
        'srag\\DIC\\OwnCloud\\DIC\\Implementation\\ILIAS60DIC' => __DIR__ . '/..' . '/srag/dic/src/DIC/Implementation/ILIAS60DIC.php',
        'srag\\DIC\\OwnCloud\\Database\\AbstractILIASDatabaseDetector' => __DIR__ . '/..' . '/srag/dic/src/Database/AbstractILIASDatabaseDetector.php',
        'srag\\DIC\\OwnCloud\\Database\\DatabaseDetector' => __DIR__ . '/..' . '/srag/dic/src/Database/DatabaseDetector.php',
        'srag\\DIC\\OwnCloud\\Database\\DatabaseInterface' => __DIR__ . '/..' . '/srag/dic/src/Database/DatabaseInterface.php',
        'srag\\DIC\\OwnCloud\\Database\\PdoContextHelper' => __DIR__ . '/..' . '/srag/dic/src/Database/PdoContextHelper.php',
        'srag\\DIC\\OwnCloud\\Database\\PdoStatementContextHelper' => __DIR__ . '/..' . '/srag/dic/src/Database/PdoStatementContextHelper.php',
        'srag\\DIC\\OwnCloud\\Exception\\DICException' => __DIR__ . '/..' . '/srag/dic/src/Exception/DICException.php',
        'srag\\DIC\\OwnCloud\\Loader\\AbstractLoaderDetector' => __DIR__ . '/..' . '/srag/dic/src/Loader/AbstractLoaderDetector.php',
        'srag\\DIC\\OwnCloud\\Output\\Output' => __DIR__ . '/..' . '/srag/dic/src/Output/Output.php',
        'srag\\DIC\\OwnCloud\\Output\\OutputInterface' => __DIR__ . '/..' . '/srag/dic/src/Output/OutputInterface.php',
        'srag\\DIC\\OwnCloud\\PHPVersionChecker' => __DIR__ . '/..' . '/srag/dic/src/PHPVersionChecker.php',
        'srag\\DIC\\OwnCloud\\Plugin\\Plugin' => __DIR__ . '/..' . '/srag/dic/src/Plugin/Plugin.php',
        'srag\\DIC\\OwnCloud\\Plugin\\PluginInterface' => __DIR__ . '/..' . '/srag/dic/src/Plugin/PluginInterface.php',
        'srag\\DIC\\OwnCloud\\Plugin\\Pluginable' => __DIR__ . '/..' . '/srag/dic/src/Plugin/Pluginable.php',
        'srag\\DIC\\OwnCloud\\Util\\LibraryLanguageInstaller' => __DIR__ . '/..' . '/srag/dic/src/Util/LibraryLanguageInstaller.php',
        'srag\\DIC\\OwnCloud\\Version\\Version' => __DIR__ . '/..' . '/srag/dic/src/Version/Version.php',
        'srag\\DIC\\OwnCloud\\Version\\VersionInterface' => __DIR__ . '/..' . '/srag/dic/src/Version/VersionInterface.php',
        'srag\\LibrariesNamespaceChanger\\GeneratePluginPhpAndXml' => __DIR__ . '/..' . '/srag/librariesnamespacechanger/src/GeneratePluginPhpAndXml.php',
        'srag\\LibrariesNamespaceChanger\\LibrariesNamespaceChanger' => __DIR__ . '/..' . '/srag/librariesnamespacechanger/src/LibrariesNamespaceChanger.php',
        'srag\\LibrariesNamespaceChanger\\PHP72Backport' => __DIR__ . '/..' . '/srag/librariesnamespacechanger/src/PHP72Backport.php',
        'srag\\LibrariesNamespaceChanger\\PHP7Backport' => __DIR__ . '/..' . '/srag/librariesnamespacechanger/src/PHP7Backport.php',
        'srag\\LibrariesNamespaceChanger\\RemovePHP72Backport' => __DIR__ . '/..' . '/srag/librariesnamespacechanger/src/RemovePHP72Backport.php',
        'srag\\LibrariesNamespaceChanger\\UpdatePluginReadme' => __DIR__ . '/..' . '/srag/librariesnamespacechanger/src/UpdatePluginReadme.php',
        'srag\\RemovePluginDataConfirm\\OwnCloud\\BasePluginUninstallTrait' => __DIR__ . '/..' . '/srag/removeplugindataconfirm/src/BasePluginUninstallTrait.php',
        'srag\\RemovePluginDataConfirm\\OwnCloud\\PluginUninstallTrait' => __DIR__ . '/..' . '/srag/removeplugindataconfirm/src/PluginUninstallTrait.php',
        'srag\\RemovePluginDataConfirm\\OwnCloud\\RemovePluginDataConfirmCtrl' => __DIR__ . '/..' . '/srag/removeplugindataconfirm/src/class.RemovePluginDataConfirmCtrl.php',
        'srag\\RemovePluginDataConfirm\\OwnCloud\\RepositoryObjectPluginUninstallTrait' => __DIR__ . '/..' . '/srag/removeplugindataconfirm/src/RepositoryObjectPluginUninstallTrait.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit0152201323dcfa5a9528401bd3b4ab7a::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit0152201323dcfa5a9528401bd3b4ab7a::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit0152201323dcfa5a9528401bd3b4ab7a::$classMap;

        }, null, ClassLoader::class);
    }
}

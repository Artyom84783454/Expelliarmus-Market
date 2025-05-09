<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit77db04012d716555db3744faddb147c1
{
    public static $prefixLengthsPsr4 = array (
        'M' => 
        array (
            'Modules\\Manager\\Database\\Seeders\\' => 33,
            'Modules\\Manager\\Database\\Factories\\' => 35,
            'Modules\\Manager\\' => 16,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Modules\\Manager\\Database\\Seeders\\' => 
        array (
            0 => __DIR__ . '/../..' . '/database/seeders',
        ),
        'Modules\\Manager\\Database\\Factories\\' => 
        array (
            0 => __DIR__ . '/../..' . '/database/factories',
        ),
        'Modules\\Manager\\' => 
        array (
            0 => __DIR__ . '/../..' . '/app',
        ),
    );

    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Modules\\Manager\\Database\\Seeders\\ManagerDatabaseSeeder' => __DIR__ . '/../..' . '/database/seeders/ManagerDatabaseSeeder.php',
        'Modules\\Manager\\Database\\Seeders\\ManagerSeeder' => __DIR__ . '/../..' . '/database/seeders/ManagerSeeder.php',
        'Modules\\Manager\\Events\\ManagerCreated' => __DIR__ . '/../..' . '/app/Events/ManagerCreated.php',
        'Modules\\Manager\\Http\\Actions\\GetManagersPaginatedAction' => __DIR__ . '/../..' . '/app/Http/Actions/GetManagersPaginatedAction.php',
        'Modules\\Manager\\Http\\Controllers\\Auth\\ManagerAuthController' => __DIR__ . '/../..' . '/app/Http/Controllers/Auth/ManagerAuthController.php',
        'Modules\\Manager\\Http\\Controllers\\RetrieveManagersController' => __DIR__ . '/../..' . '/app/Http/Controllers/RetrieveManagersController.php',
        'Modules\\Manager\\Http\\Dto\\ManagerRegisterDto' => __DIR__ . '/../..' . '/app/Http/Dto/ManagerRegisterDto.php',
        'Modules\\Manager\\Http\\Middleware\\AuthManagerMiddleware' => __DIR__ . '/../..' . '/app/Http/Middleware/AuthManagerMiddleware.php',
        'Modules\\Manager\\Http\\Middleware\\GuestManagerMiddleware' => __DIR__ . '/../..' . '/app/Http/Middleware/GuestManagerMiddleware.php',
        'Modules\\Manager\\Http\\Requests\\ManagerLoginRequest' => __DIR__ . '/../..' . '/app/Http/Requests/ManagerLoginRequest.php',
        'Modules\\Manager\\Http\\Requests\\ManagerRegisterRequest' => __DIR__ . '/../..' . '/app/Http/Requests/ManagerRegisterRequest.php',
        'Modules\\Manager\\Http\\Resources\\ManagerResource' => __DIR__ . '/../..' . '/app/Http/Resources/ManagerResource.php',
        'Modules\\Manager\\Interfaces\\ManagerAuthRepositoryInterface' => __DIR__ . '/../..' . '/app/Interfaces/ManagerAuthRepositoryInterface.php',
        'Modules\\Manager\\Listeners\\SendNotificationToNewManager' => __DIR__ . '/../..' . '/app/Listeners/SendNotificationToNewManager.php',
        'Modules\\Manager\\Models\\Manager' => __DIR__ . '/../..' . '/app/Models/Manager.php',
        'Modules\\Manager\\Notifications\\ManagerCreatedNotification' => __DIR__ . '/../..' . '/app/Notifications/ManagerCreatedNotification.php',
        'Modules\\Manager\\Observers\\ManagerObserver' => __DIR__ . '/../..' . '/app/Observers/ManagerObserver.php',
        'Modules\\Manager\\Policies\\ManagerPolicy' => __DIR__ . '/../..' . '/app/Policies/ManagerPolicy.php',
        'Modules\\Manager\\Providers\\AuthServiceProvider' => __DIR__ . '/../..' . '/app/Providers/AuthServiceProvider.php',
        'Modules\\Manager\\Providers\\EventServiceProvider' => __DIR__ . '/../..' . '/app/Providers/EventServiceProvider.php',
        'Modules\\Manager\\Providers\\ManagerServiceProvider' => __DIR__ . '/../..' . '/app/Providers/ManagerServiceProvider.php',
        'Modules\\Manager\\Providers\\RouteServiceProvider' => __DIR__ . '/../..' . '/app/Providers/RouteServiceProvider.php',
        'Modules\\Manager\\Repositories\\ManagerAuthRepository' => __DIR__ . '/../..' . '/app/Repositories/ManagerAuthRepository.php',
        'Modules\\Manager\\Services\\ManagerAuthService' => __DIR__ . '/../..' . '/app/Services/ManagerAuthService.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit77db04012d716555db3744faddb147c1::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit77db04012d716555db3744faddb147c1::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit77db04012d716555db3744faddb147c1::$classMap;

        }, null, ClassLoader::class);
    }
}

<?php

use App\Providers\AliasServiceProvider;

return [
    App\Providers\AliasServiceProvider::class,
    App\Providers\AppServiceProvider::class,
    Milon\Barcode\BarcodeServiceProvider::class,
    AliasServiceProvider::class,
];

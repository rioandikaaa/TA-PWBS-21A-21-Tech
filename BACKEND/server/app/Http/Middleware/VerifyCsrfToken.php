<?php

// app/Http/Middleware/VerifyCsrfToken.php

// app/Http/Middleware/VerifyCsrfToken.php

namespace App\Http\Middleware;

use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken as Middleware;

class VerifyCsrfToken extends Middleware
{
    /**
     * The URIs that should be excluded from CSRF verification.
     *
     * @var array<int, string>
     */
    protected $except = [
        '/data_anak/destroy/*',
        '/data_anak/store',
        '/data_anak/update/*',
        '/data_anak',
    ];
}

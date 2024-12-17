<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Paths
    |--------------------------------------------------------------------------
    |
    | Define qué rutas o endpoints estarán sujetas a las políticas de CORS.
    | El comodín '*' permite aplicar CORS a todas las rutas.
    |
    */

    'paths' => ['api/*', 'sanctum/csrf-cookie'],  // Aplica CORS a las rutas de la API y la cookie de Sanctum

    /*
    |--------------------------------------------------------------------------
    | Allowed Methods
    |--------------------------------------------------------------------------
    |
    | Especifica qué métodos HTTP están permitidos en solicitudes CORS.
    | Puedes usar '*' para permitir todos los métodos.
    |
    */

    'allowed_methods' => ['*'],  // Permite todos los métodos (GET, POST, PUT, DELETE, etc.)

    /*
    |--------------------------------------------------------------------------
    | Allowed Origins
    |--------------------------------------------------------------------------
    |
    | Define qué orígenes pueden realizar solicitudes a la aplicación. 
    | '*' permite todos los orígenes. Para mayor seguridad, puedes especificar un dominio.
    |
    */
    //'allowed_origins' => ['http://localhost:5173'],  // Permitir solicitudes desde http://localhost:8080
    'allowed_origins' => ['*'],  // Permitir cualquier origen
    'allowed_origins_patterns' => [],
    'allowed_headers' => ['*'],  // Permitir todos los headers
    'exposed_headers' => [],
    'max_age' => 0,
    'supports_credentials' => true,


    /*
    |--------------------------------------------------------------------------
    | Allowed Origins Patterns
    |--------------------------------------------------------------------------
    |
    | Puedes especificar patrones de origen usando expresiones regulares.
    |
    */

    'allowed_origins_patterns' => [],

    /*
    |--------------------------------------------------------------------------
    | Allowed Headers
    |--------------------------------------------------------------------------
    |
    | Define qué encabezados HTTP están permitidos en las solicitudes.
    | Puedes usar '*' para permitir todos los encabezados.
    |
    */

    'allowed_headers' => ['*'],  // Permitir todos los headers

    /*
    |--------------------------------------------------------------------------
    | Exposed Headers
    |--------------------------------------------------------------------------
    |
    | Define qué encabezados pueden exponerse al navegador del cliente.
    |
    */

    'exposed_headers' => [],

    /*
    |--------------------------------------------------------------------------
    | Max Age
    |--------------------------------------------------------------------------
    |
    | Define el tiempo que los navegadores deben almacenar en caché la respuesta
    | a una solicitud preflight en segundos.
    |
    */

    'max_age' => 0,

    /*
    |--------------------------------------------------------------------------
    | Supports Credentials
    |--------------------------------------------------------------------------
    |
    | Indica si las credenciales como cookies o autenticación HTTP se pueden enviar en las solicitudes.
    |
    */

    'supports_credentials' => false,

];

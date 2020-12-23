#### JWT plugin for laravel
is maybe the simplest JWT plugin
#### Installation
composer require lyue/laravel-jwt
#### config
```$xslt
php artisan vendor:publish
```
and choose the lyue/laravel-jwt,it will create a config file jwt.php in config path
```$xslt
 //provider
 Lyue\LaravelJwt\JwtProvider::class
 //facade
 'Jwt' => \Lyue\LaravelJwt\JwtFacade::class
```
set it into provider and facade of config/app.php
#### Example
get a token
```$xslt
$payload = [
    'user_id'=>123,
    'iss'=>'www.baidu.com'
];
 $token = \Jwt::getToken($payload);
```

check token
```$xslt
\Jwt::verifyToken($token);
```
get payload

```$xslt
$payload = \Jwt::getPayload();
```
get payload by key
```$xslt
$user_id = \Jwt::getPayload('user_id');
```
you can set key=>value as session
```$xslt
 \Jwt::set('username',$username);
 var_dump(\Jwt::get('username'));
```

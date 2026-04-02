![Screenshot](assets/laravel.svg)
<img src="assets/logo-white.png" alt="Logo" width="150">
# Laravel X (formerly Twitter)

A Laravel package providing a simple and elegant wrapper around [Abraham\TwitterOAuth](https://github.com/abraham/twitteroauth), allowing seamless integration with the X (formerly Twitter) API in Laravel applications.

---

## 📦 Installation

Install the package via Composer:

```bash
composer require nawaf/laravel-x
```
The package will automatically register the service provider and facade.
## ⚙️ Configuration

Publish the configuration file using Artisan:
```bash
php artisan vendor:publish --provider="Nawaf\LaravelX\XServiceProvider"
```

This will create a config/x.php file. Then, add your X (Twitter) API credentials in your **.env** file:

```dotenv
CONSUMER_KEY=your_consumer_key
CONSUMER_SECRET=your_consumer_secret
ACCESS_TOKEN=your_access_token
ACCESS_TOKEN_SECRET=your_access_token_secret
```

## 🚀 Usage
You can use the X facade to access any method provided by the underlying TwitterOAuth library:

```php

// Example: posting a tweet
$response = X::post('statuses/update', ['status' => 'Hello X!']);

// Example: fetching your timeline
$tweets = X::get('statuses/home_timeline');
```
Or, inject the service directly:
```php
use Nawaf\LaravelX\X;

public function __construct(X $x)
{
    $this->x = $x;
}

public function index()
{
    $tweets = $this->x->get('statuses/home_timeline');
    return $tweets;
}
```
Any method called on the X facade or service will be forwarded to the underlying [TwitterOAuth](https://github.com/abraham/twitteroauth) connection.

## 📝 Methods

Since this package wraps ```Abraham\TwitterOAuth```, you can use any of its methods, for example:
* ```get($endpoint, $parameters = [])```
* ```post($endpoint, $parameters = [])```
* ```upload($endpoint, $parameters = [])```
* 
```OAuth2/``` methods if needed

Refer to the [TwitterOAuth documentation](https://twitteroauth.com/)
for full details.

## 🤝 Contribution
We welcome all contributions to improve the project. You can open an Issue or submit a Pull Request.


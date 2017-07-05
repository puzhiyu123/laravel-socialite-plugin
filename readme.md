<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>


```
// Below are comments added by Zhiyu (George) Pu, to read documentations from Laravel, please go further below.

```

## About This Project
Laravel Socialite is one of the powerful tool Laravel framework provide that enable developer to modify their Laravel apps to provide login services with social networks such as Facebook, Google, or Twitter. It is a refreshing service with convenient settings for set up.

I have concluded this socialite-plugin only for reference, it is plugined with Facebook, Google and Twitter and are tested on my own server. Before use this file, be sure to change your environment settings (.env file) so that the environment would be the same as my side. The environment samples are follows:

```env

// Facebook Settings
FACEBOOK_CLIENT_ID= yoursampleFacebook_key
FACEBOOK_CLIENT_SECRET= yoursampleFacebookClient_Secret

// Google Settings
GOOGLE_CLIENT_ID= yoursampleGoogle_key
GOOGLE_CLIENT_SECRET= yoursampleGoogleClient_Secret

// Twitter Settings
TWITTER_CLIENT_ID= yoursampleTwitter_key
TWITTER_CLIENT_SECRET= yoursampleTwitterClient_Secret

/* (optional) Database Settings
   I added Database settings here for example, please 
   reference your own settings. :)  */
   
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE= yourDatabaseName
DB_USERNAME=root
DB_PASSWORD= yourDatabasePassword

```

After setting this straight, you could reference my previous commits for details.

I will keep commenting on every of my commits for detailed procedures and I will also keep this ReadMe file active.

For full documentation, please visit: 
```
http://www.georgepu.com/laravel-social.html
```

Thanks.

Zhiyu (George) Pu


```
// Below are the start of the official Laravel Documentation
```

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, yet powerful, providing tools needed for large, robust applications. A superb combination of simplicity, elegance, and innovation give you tools you need to build any application with which you are tasked.

## Learning Laravel

Laravel has the most extensive and thorough documentation and video tutorial library of any modern web application framework. The [Laravel documentation](https://laravel.com/docs) is thorough, complete, and makes it a breeze to get started learning the framework.

If you're not in the mood to read, [Laracasts](https://laracasts.com) contains over 900 video tutorials on a range of topics including Laravel, modern PHP, unit testing, JavaScript, and more. Boost the skill level of yourself and your entire team by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for helping fund on-going Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](http://patreon.com/taylorotwell):

- **[Vehikl](http://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[British Software Development](https://www.britishsoftware.co)**
- **[Styde](https://styde.net)**
- [Fragrantica](https://www.fragrantica.com)
- [SOFTonSOFA](https://softonsofa.com/)

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](http://laravel.com/docs/contributions).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell at taylor@laravel.com. All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT).

# oxonvib

I almost developed it using wappchat app carcase and viber bot API. What i tried doing was integrating bot API to use it as a chat. Did not work well for me but maybe it is possible. Almost finished also..  What Viber recently wrote for me is this:


"The REST API is the API we provide that allows configuring a bot and sending/receiving various types of messages from the bot to users.
We do not provide official documentation or instructions regarding integration with 3rd-party platforms. To inquire further about integration with the platforms you mentioned, we suggest you review their documentation, or contact their customer support" So they suggest using their providers if i'm right.. :))

## Installation

Please check the official laravel installation guide for server requirements before you start. [Official Documentation](https://laravel.com/docs/5.6/installation#installation)

//
PHP ≥ 7.3.0
Laravel = 5.6


Clone the project repository by running the command below if you use SSH

```
git clone git@github.com:boyziusas/oxonvib.git
```

If you use https, use this instead

```
git clone https://github.com/boyziusas/oxonvib.git
```

Switch to the repo folder

```
cd wapp-chat
```

Install all the dependencies using composer

```
composer install
```

Copy the example env file and make the required changes in the .env file

```
cp .env.example .env
```

Generate a new application key

```
php artisan key:generate
```

Don't forget to run node commands

```
npm install && npm run dev
```

Start the local development server

```
php artisan serve
```

You can now access the server at http://127.0.0.1:8000

**Used command list**

```
git clone git@github.com:boyziusas/oxonvib.git
cd wapp-chat
composer install
cp .env.example .env
php artisan key:generate
npm install
npm run dev
php artisan serve 
```

# BBlist

This application is for all of the parents out there with a newborn (on the way).
It is a basically a babylist but the addition is that you are not tied down to one webshop. We give the liberty to buy from as many shops as you like. That way you can get the perfect gifts for your child.


## Features

**As users (with an account)**

- Make as many babylists as you like, one per child should be enough *wink*
- Personalize your list with a photo of your child
- Add as many products from our shop to your list of choice
- See who and what your family has bought for your child
- Each list has a password chosen by you so that no strangers can access your list
- Your lists will have a unique URL-link attached to it so that your friends and family can acces your list easily
- Get update mails when products are being bought


**As contributors (without an account)**

- Access lists via a personal URL-link that you will get from the parents
- Lists will be accessible by a password provided by the parents
- Choose from the products available on the overview of the list
- See which products are still available and which are already bought
- Leave a personal message to the parents when paying
- Receive a confirmation mail when your order is placed


## Deployment

When you want to deploy this application locally, you will have to keep these steps in mind:

- Clone this repository
- `composer install`
- `npm install`
- fill in the .env file, especially: APP_KEY, everything around the database (DB_...), everything around the mail (MAIL_...) and MOLLIE_KEY:
    - APP_KEY: https://www.educba.com/laravel-key-generate/ for more info
    - database: I am working with mysql
    - MOLLIE_KEY:  https://www.mollie.com/be for more info

- Don't forget to make a database on your own
- If you've create a database then you can do `php artisan migrate`
- `php artisan serve` and watch the magic happen


## Author

Bjorn Van Hoorde

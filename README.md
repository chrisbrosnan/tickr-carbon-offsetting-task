## Tickr Carbon Offsetting Challenge

Built on Laravel, this provides an API endpoint for fetching a subscription schedule for Carbon Offsetting Membership.

## How to Run

Download this repository

`git clone git@github.com:chrisbrosnan/tickr-carbon-offsetting-task.git`

Ensure composer is installed on your machine and "cd" to the repository. Then run the following commands. 

1. Install dependencies

`composer install`

2. Set permissions on storage and bootstrap/cache folders

`chmod 766 -R bootstrap/cache storage`

3. Run application

`php artisan serve`

## Obstacles and How I Would Fix Them

### For start dates on last day of month

Where the start date of a membership is on the last day of the month, on the following months where that date is not present and there are fewer days, instead the date for the subscription on those months will revert to the 1st/2nd/3rd. To overcome this I would normally use Carbon (https://carbon.nesbot.com/#gettingstarted), a PHP API extension for the DateTime class that can run as a Laravel dependency. I could not set this up on my localhost but I would have used this to change the date to the last day of the month on the months where it would instead roll over to the next. I attempted to use the DateTime class and using date change functions but in Laravel this was caused some other issues. Given more time I would have resolved these issues by using Carbon on a server where I could install new dependencies. 
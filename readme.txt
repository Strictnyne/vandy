## Vandy Github 
Test project.

## Installation
1. Clone the repo
2. Go to the root directory and run composer install
3. Rename .env.example file to .env
4. Change the credentials for your database connection in the appropriate section.
    1. Make sure to also change the APP_URL
5. In the root of the directory run the command php artisan key:generate
6. In the same directory run the command php artisan migrate
7. Create the following cron job to the URL on your localhost /repo/download 
    1. i.e. */15 * * * * curl http://localhost/repo/download
    
Note: The the cron job should run and populate the database tables for the first time
as soon as crontab runs. After that it'll run every 15 minutes to update the current entries.
On the start of building the project with "php artisan" do this command line:
php artisan migrate --seed

If the uploaded photo is not setted in a profile photo place run this command line:
php artisan storage:link

Make sure the public/storage folder is deleted, otherwise the profile photo will not work

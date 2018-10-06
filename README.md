# Unda

This is a web social application which allows users to upload clips for their friends.

When cloning the project
1. Make a database called "unda" in MySql
2. In .env set:
APP_NAME='Unda'

DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=unda
DB_USERNAME=root
DB_PASSWORD='123'

3. Run:
php artisan migrate
composer update
php artisan storage:link

4. Follow this guide
https://github.com/adaptlearning/adapt_authoring/wiki/Installing-FFmpeg
to install ffmpeg

5. Set FFMPEG_BINARIES and FFPROBE_BINARIES in .env

6. In your php.ini file set the max post and max file sizes to a large number, eg above 50mb

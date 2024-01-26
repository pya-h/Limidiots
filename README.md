## Limit Project

# PHP Laravel

-   Landing website for a newbie crypto group.

-   Consists of home/about/roadmap and portfolio pages for displaying NFTs.

-   Implemented an admin panel using Laravel Backpack on /submax

-   Models: User/NFT/Message

-   Contact us section messages will be saved in messages table in database.

# Note:

-   Uploadig is configured for localhost run.

# Config Live Version [CPANEL]:

<ol>
    <li>Config your database credintials in .env file</li> 
    <li>Open config/filesystems.php</li>
    <li>Change disks['public']['root'] to storage_path('app/public')</li> 
    <li>Now avatar and NFT image uploads will store in /storage/app/public/nfts & /storage/app/public/avatars</li> 
    <li>Move /public folder contents to /public_html folder of the cpanel host</li>
    <li>Move others php files to your desired named folder [such as DESIRED_DIR; This will be used in next step]; do not put them in /public_html  !</li>
    <li>Change all require routes in index.php as: <br>&nbsp;&nbsp;&nbsp;&nbsp; require_once __DIR__ '/../DESIRED_DIR/[Require Actual PATH]'</li>
    <li>Create a symlink to upload folder with 'ln -s ~/DESIRED_DIR/storage/app/public/ ~/public_html/storage</li>
    <li>Open terminal cd to your DESIRED folder and run composer and database migrations commands, such as:<br />
        <ul>
            <li>composer install</li>
            <li>php artisan config:cache</li>
            <li>php artisan storage:link</li>
            <li> ... </li>
            <li>php artisan migrate</li>
        </ul>
    </li>
    <li>Enjoy!</li>

</ol>

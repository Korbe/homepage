<?php
namespace Deployer;

require 'recipe/laravel.php';

// Config

set('repository', 'https://github.com/Korbe/homepage.git');

add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

// Hosts

host('XXX.XXX.XXX.XXX')
    ->set('remote_user', 'deployer')
    ->set('deploy_path', '~/Korbitsch');

// Hooks

after('deploy:failed', 'deploy:unlock');

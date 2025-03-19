<?php
namespace Deployer;

require 'recipe/laravel.php';

// Config

set('repository', 'https://github.com/Korbe/homepage.git');

add('shared_files', []);
add('shared_dirs', []);
add('writable_dirs', []);

// Hosts

host('217.154.67.144')
    ->set('ssh_multiplexing', false)
    ->set('remote_user', 'deployer')
    ->set('deploy_path', '/var/www/korbitsch.at');

// Hooks
task('npm-install', function () {
    cd('{{release_path}}');
    run('npm install');
});

task('npm-build', function () {
    cd('{{release_path}}');
    run('npm run build');
});

// after('deploy:update_code', 'npm-install');
// after('npm-install', 'npm-build');

after('deploy:setup', 'deploy:unlock');
after('deploy:failed', 'deploy:unlock');

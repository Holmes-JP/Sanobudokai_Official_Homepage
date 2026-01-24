<?php
namespace Deployer;

require 'recipe/common.php';

// Project name
set('application', 'sanobudokai');

// Project repository
set('repository', 'https://github.com/Holmes-JP/Sanobudokai_Official_Homepage.git');

// [Optional] Allocate tty for git clone. Default value is false.
set('git_tty', false);

// Shared files/dirs between deploys
set('shared_files', []);
set('shared_dirs', []);

// Writable dirs by web server
set('writable_dirs', []);

// Number of releases to keep
set('keep_releases', 3);

// Disable composer (this project doesn't use composer dependencies)
set('composer_action', 'none');

// SSH multiplexing for faster connections
set('ssh_multiplexing', true);

// Web root path (where the site should be accessible)
set('web_root', '/home/sanobudokai/pub');

// Host configuration
host('production')
    ->setHostname('sanobudokai.lsv.jp')
    ->setPort(43292)
    ->setRemoteUser('sanobudokai')
    ->setIdentityFile('C:/Users/hooma/.ssh/id_rsa')
    ->setDeployPath('/home/sanobudokai/deploy')
    ->set('branch', 'main+01');

// Tasks

// Disable default composer task
task('deploy:vendors', function () {
    // Skip - no composer dependencies
});

// Create symlink from web_root to current release
task('deploy:symlink_webroot', function () {
    $webRoot = get('web_root');
    $deployPath = get('deploy_path');

    // Backup existing pub directory if it exists and is not a symlink
    if (test("[ -d $webRoot ] && [ ! -L $webRoot ]")) {
        run("mv $webRoot {$webRoot}_backup_$(date +%Y%m%d%H%M%S)");
    }

    // Remove existing symlink if present
    if (test("[ -L $webRoot ]")) {
        run("rm $webRoot");
    }

    // Create symlink from pub to current release
    run("ln -s $deployPath/current $webRoot");
});

// Main deploy task
task('deploy', [
    'deploy:prepare',
    'deploy:vendors',
    'deploy:publish',
    'deploy:symlink_webroot',
]);

// [Optional] If deploy fails, automatically unlock
after('deploy:failed', 'deploy:unlock');

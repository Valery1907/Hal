<?php
namespace Deployer;

require 'recipe/cakephp.php';

// Project name
set('application', 'Halici');

// Project repository
set('repository', 'git@github.com:Valery1907/halici.git');

// [Optional] Allocate tty for git clone. Default value is false
set('git_tty', true); 

// Shared files/dirs between deploys 
add('shared_files', []);
add('shared_dirs', []);

// Writable dirs by web server 
add('writable_dirs', []);


// Hosts
host('ssh.gestringen.project.host')
->set('deploy_path', '~/{{application}}');
// ->set('remote_user', 'valera19079@gmail.com@a-zdl1nu');
// Tasks

task('build', function () {
    run('cd {{release_path}} && build');
});

// [Optional] if deploy fails automatically unlock.
after('deploy:failed', 'deploy:unlock');


set :gateway, "milesdavis@66.228.50.112:30000"
set :branch, "master"
set :remote, "origin"
set :application, "woodshedr"
set :repository,  "ssh://#{gateway}/opt/gitrepo/#{application}.git"
set :scm, :git
set :deploy_via, :copy
set :user, "milesdavis"
set :use_sudo, false
default_run_options[:pty] = true
set :ssh_options, {:forward_agent => true, :port => 30000}
set :keep_releases, 5

desc "Run on staging server" 
task :production do 
	role :web, "milesdavis@66.228.50.112:30000"
	role :app, "milesdavis@66.228.50.112:30000"
	set :deploy_to, "/var/www/public/#{application}"
	set :current_path, "#{deploy_to}/current"
	set :releases_path, "#{deploy_to}/releases"
	set :shared_path, "#{deploy_to}/shared"
	set :branch, "master"
end

# Deploy the project
namespace:deploy do
    task:start do
    end
    task:stop do
    end
    task:finalize_update do
        sudo "chmod -R g+w #{releases_path}"
    end

    task :update do
        transaction do
            update_code # built-in function
            composer_install
            prepare_artisan
            symlink # built-in function
            migrate
        end
    end

    desc "Run Artisan migrate task."
    task :migrate do
        run "php #{releases_path}/#{release_name}/artisan migrate"
    end

    task :composer_install do
        transaction do
            run "cd #{releases_path}/#{release_name} && php /usr/local/bin/composer/composer.phar install --no-dev --quiet"
        end
    end

    task :prepare_artisan do
        transaction do
            run "chmod u+x #{releases_path}/#{release_name}/artisan"
        end
    end

    task:restart do
        transaction do
            run "chmod -R g+w #{releases_path}/#{release_name}"
            run "chmod -R 777 #{current_path}/app/storage/cache"
            run "chmod -R 777 #{current_path}/app/storage/logs"
            run "chmod -R 777 #{current_path}/app/storage/meta"
            run "chmod -R 777 #{current_path}/app/storage/sessions"
            run "chmod -R 777 #{current_path}/app/storage/views"
        end
    end

    after "deploy:restart" do
    	#add any tasks in here that you want to run after the project is deployed
    	#run "chmod 0777 #{shared_path}"
    	run "ln -nfs #{shared_path}/shared #{current_path}/shared"
    	run "rm -rf #{current_path}/config.rb #{current_path}/_migrations #{current_path}/_notes #{current_path}/.git* #{current_path}/Capfile #{current_path}/*.txt #{current_path}/Gemfile* #{current_path}/REVISION #{current_path}/spec #{current_path}/config #{current_path}/public/assets/sass"
    	run "date > #{current_path}/public/version.txt"
    end
end
set :stage, :production
set :deploy_to, -> { "/home/hi9072/public_html/live" }
set :tmp_dir, "/home/hi9072/tmp"

#deploy certain branch: cap staging deploy BRANCH=branch_name
#http://stackoverflow.com/a/9068104/6157905
set :branch, ENV['BRANCH'] if ENV['BRANCH']

# Simple Role Syntax
# ==================
#role :app, %w{deploy@example.com}
#role :web, %w{deploy@example.com}
#role :db,  %w{deploy@example.com}

# Extended Server Syntax
# ======================
server '65.39.182.53', user: 'root', port: 2456, password: '0EyMceEpad', roles: %w{web app db}

# you can set custom ssh options
# it's possible to pass any option but you need to keep in mind that net/ssh understand limited list of options
# you can see them in [net/ssh documentation](http://net-ssh.github.io/net-ssh/classes/Net/SSH.html#method-c-start)
# set it globally
#  set :ssh_options, {
#    keys: %w(~/.ssh/id_rsa),
#    forward_agent: false,
#    auth_methods: %w(password)
#  }

fetch(:default_env).merge!(wp_env: :production)

SSHKit.config.command_map[:bash] = "/usr/bin"
SSHKit.config.command_map[:composer] = "php -d allow_url_fopen=on /home/hi9072/composer.phar"


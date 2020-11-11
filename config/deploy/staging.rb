set :stage, :development
set :deploy_to, -> { "/home/eao6ba2vfn0b/public_html/nataliehopson" }
set :tmp_dir, "/home/eao6ba2vfn0b/tmp"

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
server '107.180.4.64', user: 'eao6ba2vfn0b', port: 22, password: 'H@wks36dan', roles: %w{web app db}

# you can set custom ssh options
# it's possible to pass any option but you need to keep in mind that net/ssh understand limited list of options
# you can see them in [net/ssh documentation](http://net-ssh.github.io/net-ssh/classes/Net/SSH.html#method-c-start)
# set it globally
#  set :ssh_options, {
#    keys: %w(~/.ssh/id_rsa),
#    forward_agent: false,
#    auth_methods: %w(password)
#  }

fetch(:default_env).merge!(wp_env: :development)

SSHKit.config.command_map[:bash] = "/usr/bin"
SSHKit.config.command_map[:composer] = "/usr/local/bin/php /home/eao6ba2vfn0b/composer.phar"


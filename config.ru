require 'rack'
require 'rack-legacy'

abs_root = Dir.getwd + '/build'

use Rack::Legacy::Php, abs_root
use Rack::Static, :urls => [''], :root => 'build', :index => 'index.html'
run Rack::File.new abs_root 

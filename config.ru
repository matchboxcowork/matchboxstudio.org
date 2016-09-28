require 'rack'
require 'rack-legacy'
require 'rack-rewrite'

abs_root = Dir.getwd + '/build'

use Rack::Rewrite do
    # Rewrite a URL whose final path component has no extension to be a directory.
    r301  %r{(.*/[^\./]+)$}, '$1/'
end
use Rack::Legacy::Php, abs_root
use Rack::Static, :urls => [''], :root => 'build', :index => 'index.html'
run Rack::File.new abs_root 

require 'rack'
require 'rack-legacy'

use Rack::ShowExceptions
use Rack::Legacy::Php
use Rack::Static, :urls => [""], :root => '.', :index => 'index.html'
run Rack::File.new Dir.getwd

require 'guard'
require 'guard/commander' # see https://github.com/guard/guard/issues/793

task :build do
    Guard.setup
    Guard.run_all group: :mbx
end

task :default => [:build]

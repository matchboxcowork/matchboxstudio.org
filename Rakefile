require 'guard'
require 'guard/commander' # see https://github.com/guard/guard/issues/793

task :build do
    Guard.setup
    mbx_build = Guard::Group.new(:mbx_build)
    Guard.run_all groups: [mbx_build]
end

task :default => [:build]

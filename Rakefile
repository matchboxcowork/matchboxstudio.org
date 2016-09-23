require 'guard'
require 'guard/commander' # see https://github.com/guard/guard/issues/793

task :build do
    # Run all guard build tasks
    Guard.setup
    mbx_build = Guard::Group.new(:mbx_build)
    Guard.run_all groups: [mbx_build]
end

task :clean do
    FileUtils.rm_rf "build"
end

task :default => [:build]

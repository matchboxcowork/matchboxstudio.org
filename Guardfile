# More info at https://github.com/guard/guard#readme
require './haml_extensions'

# Build steps for matchboxstudio.org. To run these build steps from the shell,
# run `bundle exec rake`.
group :mbx do
    guard :haml do
        # watch all .haml files in the root directory
        watch /^[^\/]+\.haml/
    end
end

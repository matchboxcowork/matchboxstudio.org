# More info at https://github.com/guard/guard#readme
require './haml_extensions'
require 'pry'

# Build steps for matchboxstudio.org. To run these build steps from the shell,
# run `bundle exec rake`.
group :mbx_build do
    guard :haml do
        # watch all .haml files in the *root directory only*
        watch %r{^[^/]+\.haml}
    end
end

# Guards for interactive development use. They are not needed to build the
# site, but they are helpful in keeping things up to date while editing source.
group :mbx do
    guard :haml do
        # Watch all .haml files in partials. When one of them changes, detect
        # which .haml files in the root directory include them, and recompile
        # those.
        watch(%r{^partials/.+\.haml}) do |matches|
            Dir.glob('*.haml').select do |filename|
                File.foreach(filename).any? { |line| line[matches[0]] }
            end
        end
    end

    # Note: we do not serve livereload.js -- install the LiveReload Chrome
    # extension to have your browser automatically reload when something gets
    # re-built.
    guard :livereload do
        # page template changes
        watch /\.(html|php)$/

        # style changes
        watch /\.css$/
    end

    guard :rack do
        watch 'config.ru'
    end
end

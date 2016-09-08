# vim: filetype=ruby

# More info at https://github.com/guard/guard#readme
require './haml_extensions'

def watch_static dir
    guard 'remote-sync', source: dir, destionation: 'build/#{dir}',
        exclude_from: nil, cli: '--color', progress: false,
        sync_on_start: true do
            watch(dir)
        end
end

# Build steps for matchboxstudio.org. To run these build steps from the shell,
# run `bin/rake`.
group :mbx_build do
    guard :haml, output: 'build', run_at_start: true do
        # Watch .haml files not in `partials/` (they only get referenced from
        # within other templates)
        watch %r{^(?!partials/).+\.haml}
    end

    guard :sass, output: 'assets/css' do
        watch %r{sass/(.+\.s[ac]ss)}
    end

    ['assets', 'admin', 'config', 'favicon.ico'].each do |dir|
        guard 'remote-sync', source: dir, destination: "build",
            exclude_from: nil, cli: '--color', progress: false,
            sync_on_start: true, dry_run: false do
                watch %r{^#{dir}.*}
            end
    end
end

# Guards for interactive development use.
group :mbx do
    guard :haml, output: 'build' do
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
        watch %r{assets/.+\.(html|php)$}

        # style changes
        watch %r{assets/.+\.css$}
    end

    guard :rack, port: 9292 do
        watch 'config.ru'
    end
end

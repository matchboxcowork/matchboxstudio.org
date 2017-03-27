# vim: filetype=ruby

# More info at https://github.com/guard/guard#readme
require './haml_extensions'

# Run a shell command, and log it's invocation.
def run cmd
    Guard::UI.info cmd
    system cmd
end

# Returns a list of haml files in the root of the repository that contain
# `matching`.
def toplevel_haml matching
  Dir.glob('*.haml').select do |filename|
    File.foreach(filename).any? { |line| line[matching] }
  end
end

# Build steps for matchboxstudio.org. To run these build steps from the shell,
# run `bin/rake`.
group :mbx_build do
    guard :haml, output: 'build', run_at_start: true do
        # Watch .haml files not in `partials` or `vendor`.
        watch %r{^(?!partials/|vendor/).+\.haml}
    end

    guard :sass, output: 'build/assets/css' do
        watch %r{^sass/(.+\.s[ac]ss)}
    end

    # Concatenate all js files within js_src.
    guard :shell, all_on_start: true do
        watch(%r{js_src/.*\.js}) { run "cat js_src/*.js > build/assets/js/mbx.concat.js" }
    end

    # Copy public files to the build directory. At buildtime, a similar
    # procedure is done inside Rakefile
    SYNC_DIRS = %w{assets admin config favicon.ico}
    sync_all = proc { SYNC_DIRS.each { |d| run "rsync -LricP #{d} build" } }
    sync_changes = proc { |_,_,changes| changes.each { |f| run "rsync -LicR #{f} build" } }
    guard :yield, {
        start: sync_all,
        run_all: sync_all,
        run_on_additions: sync_changes,
        run_on_modifications: sync_changes,
        run_on_removals: proc { |_,_,changes| changes.each { |f| run "rm build/#{f}" } }
    } do
        SYNC_DIRS.each { |d| watch(/^#{d}.*/) }
    end
end

# Guards for interactive development use.
group :mbx do
    guard :haml, output: 'build' do
        # Watch all .haml files in partials. When one of them changes, detect
        # which .haml files in the root directory include them, and recompile
        # those.
        watch(%r{^partials/.+\.haml}) { |m| toplevel_haml m[0] }

        # Recompile sponsors partial when the list changes.
        watch(%r{^partials/sponsors.yaml}) { toplevel_haml("partials/sponsors.haml") }
    end
    
    # Note: we do not serve livereload.js -- install the LiveReload Chrome
    # extension to have your browser automatically reload when something gets
    # re-built.
    guard :livereload do
        watch %r{^build/.*}
    end

    guard :rack, port: 9292 do
        watch 'config.ru'
    end
end

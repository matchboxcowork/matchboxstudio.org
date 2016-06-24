
require 'haml'

# Extensions to the Haml template language. See documentation at
# http://haml.info. Originally written by Elliott Williams for MatchBOX.
module Haml
    module Filters

        # Syntactic sugar to render php code in HTML output. Use it like this:
        # 
        # :php
        #   php_call_here();
        #   echo('woooo')
        module PHP
            include Base

            def render(text)
                "<?php\n  %s\n?>" % text.rstrip.gsub("\n", "\n  ")
            end
        end
    end

    module Helpers

        # Partial include function to render one haml template inside
        # another. Use it like this:
        # 
        # = include('./path/to/template.html')
        def include(path)
            contents = File.read(path)
            Haml::Engine.new(contents).render
        end
    end
end

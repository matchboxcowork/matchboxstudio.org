# matchboxstudio.org

Table of contents:

1. [Setting up a dev environment](#setting-up-a-dev-environment)
2. [Using the build tools](#using-the-build-tools)
3. [Changes workflow](#changes-workflow)

## Setting up a dev environment

You will need [Ruby][rb] 2.3 or greater, and an \*AMP stack. At MatchBOX, we
use Nginx 1.8 , MySQL 5.7, and PHP 5.5 (via php-fpm) as of 28 June 2016. You
will need a unix-like shell to work in.

Aside: I recommend [DigitalOcean][do] if you plan to work from Windows, or if
you would rather not install a server stack on your local machine. If you're
new to configuring Linux servers, they've put together an excellent
[guide][do-guide].

1. Clone this repository and `cd` into it.
2. Run `bundle install` to load the project's Ruby dependencies. If you don't
   have a `bundle` command, install [Bundler][b] by running `gem install
   bundler`.
3. Configure your web server to serve from the repository's root directory.
3. Create a database `mbx`:
    
    ```sql CREATE DATABASE mbx CHARACTER SET=utf8 COLLATE=utf8_general_ci; ```
    
4. Load the [MBX table schema][sql] into your database:
    
    ```sh mysql mbx < /path/to/schema_20160614.sql ```
    
5. (Optional, but recommended:) Install [MailCatcher][mc]. This tool acts as a
   fake SMTP server and allows you to see email that the application would have
   sent---great for debugging email forms.
5. Update the configuration file at `config/dev.php` to match your setup.
   You'll almost definitely need to adjust these variables:

    - `mysql_username`: On a fresh MySQL server, this is often `root` with no
      password
    - `smtp_port`: `1025` if you're using MailCatcher, `25` if you're using a
      system-wide SMTP server.
    
That's it. See the below section for instructions on our build tools.

[rb]: https://www.ruby-lang.org/en/ [b]: http://bundler.io [sql]:
https://github.com/matchboxcowork/dev/blob/master/schema_20160614.sql [mc]:
https://mailcatcher.me [do]: https://www.digitalocean.com [do-guide]:
https://www.digitalocean.com/community/tutorials/initial-server-setup-with-ubuntu-14-04

## Using the build tools

As you work on haml page templates, you'll need to recompile them to html and
php. There are two ways to do this:

1. Use [Rake][rake] by running `bin/rake`. This will compile all haml templates
once and exit.
2. Use [Guard][guard] by running `bin/guard`. This will launch a process that
watches the dynamic assets in the repository and recompiles them as they are
edited, which is ideal when you're developing. Better yet, install a
[LiveReload][lr] browser extension to have the page automatically reload when
assets get recompiled!

[rake]: https://github.com/ruby/rake [guard]: http://guardgem.org [lr]:
http://livereload.com/extensions#installing-sections

I recommend keeping guard running as you work, and running rake once before
committing.

## Changes workflow (drafted by @elliottwilliams, feel free to revise/discuss)

1. Create an issue for your change (even if we discussed it in person). The
issue list is where we'll track who is doing what, when.
2. Assign yourself to the issue.
3. Clone the master branch to an issue branch. This enables you to work without
breaking things for other devs. For example, if the issue is "#12: Add more
glitter" you'd do something like:
    
    ```sh $ git checkout master $ git checkout -b 12_glitter ```
    
3. Do your work.
4. When finished, merge your branch back to master, following these guidelines:

    - **Don't bother creating a pull request.** Since we are a small team and
      we don't have a dedicated lead developer, I don't think there is a need
      to do formal code review. This might change in the future.
    - **Create a merge commit.** Use `--no-ff` when your `git merge` back to
      master, and enter a commit message describing the feature/bug you worked
      on. End your commit message with "(closes #n)" where `n` is the issue
      number for your change. This will [close the issue
      automatically](https://help.github.com/articles/closing-issues-via-commit-messages/)!

5. Finally, pull any revisions down to the production server to deploy.

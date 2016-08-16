# matchboxstudio.org

Table of contents:

1. [Setting up a dev environment](#setting-up-a-dev-environment)
2. [Using the build tools](#using-the-build-tools)
3. [Changes workflow](#changes-workflow)

## Setting up a dev environment

You will need [Ruby][rb] 2.3 or greater, PHP 5.5 or greater, and a unix-like
shell to work in.

1. Clone this repository and `cd` into it.

2. Run `bundle install` to load the project's Ruby dependencies. If you don't
   have a `bundle` command, install [Bundler][b] by running `gem install
   bundler`.

3. Copy the default database to a copy that you can edit. This sqlite database
   follows the same schema as the MySQL database on our production server, so
   it is suitable for doing most development work in.

         cp dev_db.default.sqlite3 dev_db.sqlite3

      If you'd like to set up your own database elsewhere, consider using our
      [schema file][sql].
    
4. Install [MailCatcher][mc]. This tool acts as a fake SMTP server and allows
   you to see email that the application would have sent---great for debugging
   email forms.

5. Review the configuration file at `config/dev.php`. By default, it looks for
   a sqlite database called `dev_db.sqlite3` in the root of the repository.
   It's also configured to send email from MailCatcher's default port, `1025`.

6. Start the development server by running `bin/guard`.

Get to work! See the [below section](#using-the-build-tools) for instructions
on our build tools, and make sure you review our [changes
workflow](#changes-workflow) before submitting changes to the website.
    
[rb]: https://www.ruby-lang.org/en/
[b]: http://bundler.io
[sql]: https://github.com/matchboxcowork/dev/blob/master/schema_20160614.sql
[mc]: https://mailcatcher.me

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

[rake]: https://github.com/ruby/rake 
[guard]: http://guardgem.org 
[lr]: http://livereload.com/extensions#installing-sections

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

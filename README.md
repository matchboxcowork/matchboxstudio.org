# matchboxstudio.org

## Changes workflow
(drafted by @elliottwilliams, feel free to revise/discuss)

1. Create an issue for your change (even if we discussed it in person). The issue list is where we'll track who is doing what, when.
2. Assign yourself to the issue.
3. Clone the master branch to an issue branch. This enables you to work without breaking things for other devs. For example, if the issue is "#12: Add more glitter" you'd do something like:
    
    ```sh
    $ git checkout master
    $ git checkout -b 12_glitter
    ```
    
4. When finished, merge your branch back to master. **Skip creating a pull request.** Since we are a small team and we don't have a dedicated lead developer, I don't think there is a need to do formal code review. This might change in the future.

  Tip: In the commit message of your final commit (or your merge commit), put "closes #n" somewhere in the message, where 'n' is the issue number. This will [close the issue automatically](https://help.github.com/articles/closing-issues-via-commit-messages/)!

5. Finally, pull any revisions down to the production server to deploy.

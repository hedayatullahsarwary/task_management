# Laravel 8 Drag & Drop [Task Management]

This is the repository for the "Laravel 8 Drag & Drop" . Please feel free to expand however you wish.

## Recommended Additions

1. Install XAMPP, Composer, NPM(Node Package Manager)
2. After that unzip the [task_mangement] project inside htdocs.
3. Create a MySQL database by the name of [task_mangement].
4. Inside task_mangement project open CMD and run (php artisan serve).
5. Open your browser and run [https://127.0.0.1:8000]


## Cloning task_mangement from GitHub
1. On GitHub.com, navigate to the main page of the repository.
2. Above the list of files, click  Code.
3. To clone the repository using HTTPS, under "Clone with HTTPS", click . To clone the repository using an SSH key, including a certificate issued by your organization's SSH certificate authority, click Use SSH, then click . To clone a repository using GitHub CLI, click Use GitHub CLI, then click .
4. Open Git Bash.
5. Change the current working directory to the location where you want the cloned directory.
6. Type 'git clone', and then paste the URL you copied earlier.
    $ git clone https://github.com/YOUR-USERNAME/YOUR-REPOSITORY
    
7. Press Enter to create your local clone.
    $ git clone https://github.com/YOUR-USERNAME/YOUR-REPOSITORY
    > Cloning into `Spoon-Knife`...
    > remote: Counting objects: 10, done.
    > remote: Compressing objects: 100% (8/8), done.
    > remove: Total 10 (delta 1), reused 10 (delta 1)
    > Unpacking objects: 100% (10/10), done.

8. After that, go to your project folder and open Git Bash.
9. Run 'composer install'.
10. Then run 'cp .env.example .env'
11. Open '.env' file and configure your database name, username and password.
12. Then run 'php artisan key:generate'
13. Run 'php artisan serve'.

# Upgrade Log
## Upgrading From Laravel 6.x to 7.x
1. `sudo rm -rfv vendor/`
    - To remove downloaded dependencies, execute this inside app base dir;\
2. `sudo rm -rfv composer.lock`
    - To remove previously locked versions of the composer dependencies
3. **Updating Dependencies:**
    - Follow all instructions from the documentation to the dot in renaming your required dependencies as specified by the Laravel Framework. Click & Follow the link Below: [https://laravel.com/docs/7.x/upgrade](https://laravel.com/docs/7.x/upgrade)
    - run `composer upgrade`
    - there is an error that came from the updating depencies in composer and this is how you solve that error:
        1. In `App\Exceptions\Handler`:
            - add `Use Throwable;`,
            - change methods to accept instances of `Throwable` instead of `Exceptions` as follows:
                - `public function report(Throwable $exception);`,
                - `public function render($request, Throwable $exception);`,
        2. In `config\session.php`:
            - `'secure' => env('SESSION_SECURE_COOKIE', null)`,
        3. Then run:
            - `sudo rm -rfv vendor/`
            - `sudo rm -rfv composer.lock`
            - `composer upgrade`



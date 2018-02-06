## convert roman numerals example with PSR-4 composer autoload 
  
PSR-4 Autoloader implementation based on example from [PHP-FIG](https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-4-autoloader-examples.md/)

##### folder structure

    .
    ├── bin                  # phpspec path
    ├── src                  # source files
    ├── phpspec              # phpspec tests 
    ├── composer.json        # Composer file
    ├── composer.lock        
    ├── index.php            # Index file that we call source files
    ├── phpspec.yml          # phpspec configuration 
    ├── .gitignore
    └── README.me
    
#### installation

`git clone https://github.com/onurkayaio/phpspec.git` <br>
`cd phpspec` <br>
`composer install`

#### run tests

call `bin/phpspec run` in folder.

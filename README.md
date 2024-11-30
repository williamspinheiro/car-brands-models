# Car Brands and Models Laravel Package

This package provides an easy way to manage car brands and models within a Laravel application. It includes migrations and seeders to populate the car brands and models tables with known data.

## Installation

### 1. Add the package to your Laravel project

You can install this package into your Laravel project easily via Composer.

1. Install the package using Composer:

    ```bash
    composer require car/brands-models
    ```

This will download and install the latest stable version of the package directly from Packagist.

### 2. Publish Migrations and Seeders

After the package is installed, you can publish the migrations and seeders to your Laravel project.

#### Publish Everything at Once:
To publish both migrations and seeders in one command, run:
    
    php artisan vendor:publish --provider="Car\BrandsModels\BrandsModelsServiceProvider"

This will copy the migrations and seeders to your Laravel project's `database/migrations` and `database/seeders` directories

#### Publish Migrations:

If you prefer to publish only the migrations, you can run:
    
    php artisan vendor:publish --provider="Car\BrandsModels\BrandsModelsServiceProvider" --tag="car-brands-models-migrations"

This will copy the migrations for the `car_brands` and `car_models` tables to the `database/migrations` directory.

#### Publish Seeders:

To publish only the seeders, run:

    php artisan vendor:publish --provider="Car\BrandsModels\BrandsModelsServiceProvider" --tag="car-brands-models-seeders"

This will copy the seeders for populating the tables with car brands and models to the `database/seeders` directory.

#### Note:

In some cases, you may need to use the `--force` option if there are restrictions preventing the files from being published, such as permission issues or conflicts. The `--force` flag ensures the files are copied successfully.


    php artisan vendor:publish --provider="Car\BrandsModels\BrandsModelsServiceProvider" --tag="car-brands-models-migrations" --force
    php artisan vendor:publish --provider="Car\BrandsModels\BrandsModelsServiceProvider" --tag="car-brands-models-seeders" --force

### 3. Run Migrations and Seeders

Once the migrations and seeders are published, execute the following commands to create the tables and populate them with data:

1. Run the migrations:

    ```bash
    php artisan migrate
    ```

2. Run the seeders:

    ```bash
    php artisan db:seed --class="CarBrandsSeeder"
    php artisan db:seed --class="CarModelsSeeder"
    ```

### 4. Usage

Once the package is installed, you can use the `car_brands` and `car_models` tables in your Laravel application. You can interact with these tables through Eloquent models or directly in your controllers, repositories, or services.

### 5. Development Notes

If you encounter any issues or have suggestions for improving the package, feel free to open an issue or a pull request on the [GitHub repository](https://github.com/williamspinheiro/car-brands-models)
.

### 6. License

This package is open-source software licensed under the [MIT license](https://opensource.org/licenses/MIT)
.
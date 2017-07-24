# TEST-APP
This is a test app written with the different **Lyra** classes. You can use it as a template for your works with Lyra.

# Installation
Just clone this repository and then run the composer.

```lang=bash
git clone https://github.com/uniwue-rz/lyra-app-test.git
cd lyra-app-test
composer install
```

# Running
to run it go to the application directory and run the following:

```lang=bash
php bin/main.php
```

# Structure
This application follows the same principe as `Symfony`. Every needed dependency can be declared in `services`. The configuration parameters should be in `parameters` file. The application creates a `container` and this `container` can be used to get different resources throughout the application.

# Licence
See LICENSE file

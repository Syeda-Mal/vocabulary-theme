# vocabulary-theme

WordPress Theme implementation of the Vocabulary design system
([creativecommons/vocabulary](https://github.com/creativecommons/vocabulary))


## Docker containers

The [`docker-compose.yml`](docker-comose.yml) file defines the following
containers:

1. vocabtheme-wordpress-web
2. vocabtheme-wordpress-db
3. vocabtheme-composer
4. vocabtheme-phpmyadmin
5. vocabtheme-wpcli


## Setup

1. Create the `.env` file:
    ```shell
    cp .env.example .env
    ```
2. Update `.env` to set set desired (`WP_VERSION`, `WP_MOD_TYPE`,
   `WP_MOD_NAME`, etc.)
3. Build/start Docker:
    ```shell
    docker compose up
    ```
4. Wait for build and initilization to complete
5. Install WordPress initially through the GUI. (TODO: Script help here)

Plugin/Theme dev work should be done withing the `/src` directory.

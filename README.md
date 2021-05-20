# BLog Sample

This is blog project sample include below list

- roles and permission
- image uploading
- Eloquent: Relationships
  - One To Many
  - Many To Many
  - Polymorphic Relationships

## Dependencies and Plugins

- [spatie/laravel-permission](https://github.com/spatie/laravel-permission)
- [AdminLTE3](https://adminlte.io/themes/v3/)

## Installation

- git clone
- composer install
- cp .env.example .env
- php artisan key:generate
- setup database in .env
- php artisan migrate --seed
- php artisan serve

The site will run localhost:8000

## Default Users

```cmd
// Admin User
username - admin@admin.com
password - password

// Author User
username - author@author.com
password - password

// Normal User
username - user@user.com
password - password
```

## License

MIT

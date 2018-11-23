This is a Cms_Framework_Seed package that provides calendar management facility for cms_framework_seed framework.

## Installation

Begin by installing this package through Composer. Edit your project's `composer.json` file to require `cms_framework_seed/calendar`.

    "cms_framework_seed/calendar": "dev-master"

Next, update Composer from the Terminal:

    composer update

Once this operation completes execute below cammnds in command line to finalize installation.

```php
Cms_Framework_Seed\Calendar\Providers\CalendarServiceProvider::class,

```

And also add it to alias

```php
'Calendar'  => Cms_Framework_Seed\Calendar\Facades\Calendar::class,
```

Use the below commands for publishing

Migration and seeds

    php artisan vendor:publish --provider="Cms_Framework_Seed\Calendar\Providers\CalendarServiceProvider" --tag="migrations"

    php artisan vendor:publish --provider="Cms_Framework_Seed\Calendar\Providers\CalendarServiceProvider" --tag="seeds"

Configuration

    php artisan vendor:publish --provider="Cms_Framework_Seed\Calendar\Providers\CalendarServiceProvider" --tag="config"

Language files

    php artisan vendor:publish --provider="Cms_Framework_Seed\Calendar\Providers\CalendarServiceProvider" --tag="lang"

View files

    php artisan vendor:publish --provider="Cms_Framework_Seed\Calendar\Providers\CalendarServiceProvider" --tag="views"

Public folders

    php artisan vendor:publish --provider="Cms_Framework_Seed\Calendar\Providers\CalendarServiceProvider" --tag="public"


## Usage


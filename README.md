
# Firebase easy REST API wrapper for Laravel

[![Latest Stable Version](https://poser.pugx.org/ucha19871/fb/v/stable)](https://packagist.org/packages/ucha19871/fb) 
[![Total Downloads](https://poser.pugx.org/ucha19871/fb/downloads)](https://packagist.org/packages/ucha19871/fb) 
[![License](https://poser.pugx.org/ucha19871/fb/license)](https://packagist.org/packages/ucha19871/fb) 

### Installation

```bash
composer require ucha19871/fb
```
After installing composer package, add the ServiceProvider to the providers array in `config/app.php`

```php
Ucha19871\FB\FBServiceProvider::class,
```

Add this to your aliases for shorter code:

```php
'FB' => Ucha19871\FB\Facades\FBFacades::class,
```

Insert the config settings in `config/services.php` like this:

```php
    'firebase' => [
        'database_url' => 'https://PROJECT.firebaseio.com',
        'secret' => 'KB2xZjJgAvmPROJECT8ykNrT6f2emuuaxJTr9',
    ]
```

> You can get Firebase `secret` token like so:
> - click on the gear icon in you Firebase Console
> - Click Project settings
> - Click on the Service Account tab
> - Click on the Database Secrets link in the inner left-nav
> - Hover over the non-displayed secret and click Show

# Usage

```php
$data = ['key' => 'data' , 'key1' => 'data1']
FB::set('/test/',$data); 

FB::get('/test/',['print'=> 'pretty']);

FB::push('/test/',$data); 

FB::update('/test/',['key1' => 'Updating data by key']); 

FB::delete('/test/'); 
```

----
For more options see firebase REST [documentation](https://firebase.google.com/docs/database/rest/start) 







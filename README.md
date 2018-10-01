# Plain text field for Laravel Nova

This field lets you to show non-editable field in update form.
I use this only when creating is disabled for resource so feel free to make a Pull Request.

## Installation

Via composer:

```bash
composer require digitalazgroup/nova-plain-text-field
```

## Usage

```php
use Digitalazgroup\PlainText\PlainText;

public function fields(Request $request)
{
    return [
        PlainText::make('Area');
    ];
}
```

#### Index view

![index view](https://github.com/digitalazgroup/nova-plain-text-field/master/docs/index.png 'Index view')

#### Details view

![details view](https://github.com/digitalazgroup/nova-plain-text-field/master/docs/show.png 'Details view')

#### Update view

![update view](https://github.com/digitalazgroup/nova-plain-text-field/master/docs/edit.png 'Update view')

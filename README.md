# Custom Field Method for [Kirby](https://getkirby.com/docs/developer-guide/kirbytext/tags): convertKirbytags()

Converts any [kirbytag](https://getkirby.com/docs/developer-guide/kirbytext/tags) of a field. Unlike the `kirbytext()` or the `kt()` method, `convertKirbytags()` does not parse Mardown.

## Example

```
$field->convertKirbytags()

## Setup

``git clone https://github.com/TimOetting/convertKirbytags.git site/plugins/convertKirbytags``
From the root of your kirby install.

Alternatively you can download the zip file, unzip it's contents into site/plugins/convertKirbytags.
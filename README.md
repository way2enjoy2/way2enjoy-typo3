# TYPO3 Extension way2Enjoy
Image compression for all pngs and jpgs uploaded to the backend (using the way2enjoy API)

## What does it do?
It's a small extension, that hooks (using signals) into the TYPO3 file upload and compresses every jpg or png uploaded to the backend using the tinify API: https://way2enjoy.com/developers

This API can reduce up to 80% of the file size of your images, which will increase your page speed. Without loosing quality.

## Installation via composer
1. Get extension way2Enjoy: `composer require way2Enjoy2/way2Enjoy-typo3`
2. Active extension (using extension manager or commandline)

#### _Installation via extension manager_
Installing the extension via extension manager is possible but as way2Enjoy requires the [way2enjoy/way2enjoy](https://packagist.org/packages/way2enjoy/way2enjoy) library you will have to take care of installing this package manually.

## Configuration
1. Create an API key* at https://way2enjoy.com/developers
2. Enter the API key* in the extension configuration
3. Include the static TypoScript. It disables compression while on application context "Development" - so you wont loose compressions during development and testing
4. Have a nice day :)

<span style="font-size: 80%">_*Note that the way2enjoy API is limited to 500 compressions per month.
If you need more, there is a payed version which can be activated in your dashboard (where you got your API key)_</span>

## Setup for already existing projects
This extension contains an extbase command which runs through all files storages and compresses 100 images in it on each run. Depending on the size of this images this takes a while.

Make sure to have an updated index. TYPO3 comes with an index updater as a scheduler task called "File Abstraction Layer: Update storage index (scheduler)".

Also be aware that the way2enjoy API is limited to 500 free compressions (see note above). So on huge websites it will be reached quickly.

## Contribution
Bugs and feature requests are welcome. Feel free to create an [issue](https://github.com/way2enjoy2/way2Enjoy-typo3/issues) and i'll have a look at it as soon as possible.

Code improvements are also highly appreciated, as I'm a young developer and sure there is stuff to optimize.


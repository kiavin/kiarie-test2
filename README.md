<h1>
       <a href="https://www.buymeacoffee.com/kiarie" title="Buy me a coffee" ><img src="https://cdn.buymeacoffee.com/buttons/v2/default-yellow.png" height="60" alt="kiavin" /></a>
</h1>
# Mailer Module Integration Guide

This guide outlines the steps to integrate the Mailer module into your project.

### Step 1: Remove the Mailing Module

Ensure the removal of the existing mailing module from your project.

### Step 2: Installation

You can install the Mailer module via Composer by adding the following line to your project's `composer.json` file:
           ```php
            "require": {
                            "kiavin/mailer": "dev-main"
                        }
           ```

Then, run `composer update` to install the package.

### Step 3: Import Module in Controller

In your controller where you intend to use the mailer functionality, add the following line to import the `contactForm` class:
            ```**use kiarie\mailer\contactForm;**```


### Step 4: Configuration

Ensure that your mailer component in the `web.php` configuration file is correctly configured to work with the Mailer module.

### Verification

After completing the above steps, your mailer module should be successfully integrated and ready to use.




1. remove the mailing module we created
2. add the package via composer or add it into your "require     section in composer.json file --> "kiavin/mailer": "dev-main".
3.in your controller add "use kiarie\mailer\contactForm;"
4.make sure your mailer component in web.php is correctly configured
it should work hopefully :)

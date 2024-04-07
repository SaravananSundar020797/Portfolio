const mix = require('laravel-mix')


mix.js("resources/js/app.js", "public/js")
    .sass("resources/sass/app.scss", "public/css")

    //Yummy Project

    .sass(
        "resources/sass/yummyProject/6pages/homepage.scss",
        "public/css/yummyProject/homepage.css",
    )
    .sass("resources/sass/myportfolio/6pages/homepage.scss",
        "public/css/myportfolio/homepage.css")

    .js("resources/js/yummyProject/homePage.js", "public/js/yummyProject")
    .js("resources/js/yummyProject/bootstrap.js", "public/js/yummyProject")
    .js("resources/js/myportfolio/homePage.js", "public/js/myportfolio")
    .js("resources/js/myportfolio/bootstrap.js", "public/js/myportfolio")


<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class App extends Controller
{
    protected $acf = true;
    use Partials\HeaderImage;
    use Partials\Experience;
    use Partials\GlobalSite;
    use Partials\Footer;
    use Partials\Header;
    use Partials\Careers;
    use Partials\Posts;
}
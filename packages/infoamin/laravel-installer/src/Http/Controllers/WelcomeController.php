<?php

namespace Infoamin\Installer\Http\Controllers;

use App\Http\Controllers\Controller;
use AppController;

class WelcomeController extends Controller
{
    /**
     * Display the installer welcome page.
     *
     * @return \Illuminate\View\View
     */
    public function welcome()
    {
        return view('packages.installer.welcome');
    }

}

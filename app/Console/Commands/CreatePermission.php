<?php

namespace App\Console\Commands;

use App\Models\Permission;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Route;

class CreatePermission extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:permission';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Get all the route name from web.php';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $route = Route::getRoutes();
        foreach($route as $route)
        {
            if($route->getName())
            {
                Permission::updateOrCreate([
                    'name'=>str_replace("."," ",$route->getName()),
                    'slug'=>$route->getName(),
                ]);
            }
        }
        echo "Permission store successfully";
    }
}

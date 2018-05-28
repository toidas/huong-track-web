<?php

namespace App\Providers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\ServiceProvider;

class CustomValidationServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        Validator::extend('update', function ($attribute, $value, $parameters) {
            $table = $parameters[0];
            $column = $parameters[1];
            $id = $parameters[2];
            $data = DB::table($table)->where($column, '=', $value)->where('id', '!=', $id)->first();
            return $data == null;
        }, ':attribute đã tồn tại.');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('permissions')->delete();

        \DB::table('permissions')->insert(array (
            0 =>
            array (
                'id' => 1,
                'name' => 'App\\Http\\Controllers\\Api\\UserController@index',
                'controller_path' => 'App\\Http\\Controllers\\Api\\UserController',
                'controller_name' => 'UserController',
                'method_name' => 'index',
            ),
            1 =>
            array (
                'id' => 2,
                'name' => 'App\\Http\\Controllers\\Api\\UserController@store',
                'controller_path' => 'App\\Http\\Controllers\\Api\\UserController',
                'controller_name' => 'UserController',
                'method_name' => 'store',
            ),
            2 =>
            array (
                'id' => 3,
                'name' => 'App\\Http\\Controllers\\Api\\UserController@detail',
                'controller_path' => 'App\\Http\\Controllers\\Api\\UserController',
                'controller_name' => 'UserController',
                'method_name' => 'detail',
            ),
            3 =>
            array (
                'id' => 4,
                'name' => 'App\\Http\\Controllers\\Api\\UserController@update',
                'controller_path' => 'App\\Http\\Controllers\\Api\\UserController',
                'controller_name' => 'UserController',
                'method_name' => 'update',
            ),
            4 =>
            array (
                'id' => 5,
                'name' => 'App\\Http\\Controllers\\Api\\UserController@updatePassword',
                'controller_path' => 'App\\Http\\Controllers\\Api\\UserController',
                'controller_name' => 'UserController',
                'method_name' => 'updatePassword',
            ),
            5 =>
            array (
                'id' => 6,
                'name' => 'App\\Http\\Controllers\\Api\\UserController@destroy',
                'controller_path' => 'App\\Http\\Controllers\\Api\\UserController',
                'controller_name' => 'UserController',
                'method_name' => 'destroy',
            ),
            6 =>
            array (
                'id' => 7,
                'name' => 'App\\Http\\Controllers\\Api\\RoleController@index',
                'controller_path' => 'App\\Http\\Controllers\\Api\\RoleController',
                'controller_name' => 'RoleController',
                'method_name' => 'index',
            ),
            7 =>
            array (
                'id' => 8,
                'name' => 'App\\Http\\Controllers\\Api\\RoleController@store',
                'controller_path' => 'App\\Http\\Controllers\\Api\\RoleController',
                'controller_name' => 'RoleController',
                'method_name' => 'store',
            ),
            8 =>
            array (
                'id' => 9,
                'name' => 'App\\Http\\Controllers\\Api\\RoleController@detail',
                'controller_path' => 'App\\Http\\Controllers\\Api\\RoleController',
                'controller_name' => 'RoleController',
                'method_name' => 'detail',
            ),
            9 =>
            array (
                'id' => 10,
                'name' => 'App\\Http\\Controllers\\Api\\RoleController@update',
                'controller_path' => 'App\\Http\\Controllers\\Api\\RoleController',
                'controller_name' => 'RoleController',
                'method_name' => 'update',
            ),
            10 =>
            array (
                'id' => 11,
                'name' => 'App\\Http\\Controllers\\Api\\RoleController@destroy',
                'controller_path' => 'App\\Http\\Controllers\\Api\\RoleController',
                'controller_name' => 'RoleController',
                'method_name' => 'destroy',
            ),
            11 =>
            array (
                'id' => 12,
                'name' => 'App\\Http\\Controllers\\Api\\MailTemplateController@index',
                'controller_path' => 'App\\Http\\Controllers\\Api\\MailTemplateController',
                'controller_name' => 'MailTemplateController',
                'method_name' => 'index',
            ),
            12 =>
            array (
                'id' => 13,
                'name' => 'App\\Http\\Controllers\\Api\\MailTemplateController@store',
                'controller_path' => 'App\\Http\\Controllers\\Api\\MailTemplateController',
                'controller_name' => 'MailTemplateController',
                'method_name' => 'store',
            ),
            13 =>
            array (
                'id' => 14,
                'name' => 'App\\Http\\Controllers\\Api\\MailTemplateController@detail',
                'controller_path' => 'App\\Http\\Controllers\\Api\\MailTemplateController',
                'controller_name' => 'MailTemplateController',
                'method_name' => 'detail',
            ),
            14 =>
            array (
                'id' => 15,
                'name' => 'App\\Http\\Controllers\\Api\\MailTemplateController@update',
                'controller_path' => 'App\\Http\\Controllers\\Api\\MailTemplateController',
                'controller_name' => 'MailTemplateController',
                'method_name' => 'update',
            ),
            15 =>
            array (
                'id' => 16,
                'name' => 'App\\Http\\Controllers\\Api\\MailTemplateController@destroy',
                'controller_path' => 'App\\Http\\Controllers\\Api\\MailTemplateController',
                'controller_name' => 'MailTemplateController',
                'method_name' => 'destroy',
            ),
            16 =>
            array (
                'id' => 22,
                'name' => 'App\\Http\\Controllers\\Api\\PreferenceController@index',
                'controller_path' => 'App\\Http\\Controllers\\Api\\PreferenceController',
                'controller_name' => 'PreferenceController',
                'method_name' => 'index',
            ),
            17 =>
            array (
                'id' => 23,
                'name' => 'App\\Http\\Controllers\\Api\\EmailConfigurationController@index',
                'controller_path' => 'App\\Http\\Controllers\\Api\\EmailConfigurationController',
                'controller_name' => 'EmailConfigurationController',
                'method_name' => 'index',
            ),
            18 =>
            array (
                'id' => 24,
                'name' => 'App\\Http\\Controllers\\Api\\CompanySettingController@index',
                'controller_path' => 'App\\Http\\Controllers\\Api\\CompanySettingController',
                'controller_name' => 'CompanySettingController',
                'method_name' => 'index',
            ),
            19 =>
            array (
                'id' => 28,
                'name' => 'App\\Http\\Controllers\\Api\\CurrencyController@index',
                'controller_path' => 'App\\Http\\Controllers\\Api\\CurrencyController',
                'controller_name' => 'CurrencyController',
                'method_name' => 'index',
            ),
            20 =>
            array (
                'id' => 29,
                'name' => 'App\\Http\\Controllers\\Api\\CurrencyController@store',
                'controller_path' => 'App\\Http\\Controllers\\Api\\CurrencyController',
                'controller_name' => 'CurrencyController',
                'method_name' => 'store',
            ),
            21 =>
            array (
                'id' => 30,
                'name' => 'App\\Http\\Controllers\\Api\\CurrencyController@update',
                'controller_path' => 'App\\Http\\Controllers\\Api\\CurrencyController',
                'controller_name' => 'CurrencyController',
                'method_name' => 'update',
            ),
            22 =>
            array (
                'id' => 31,
                'name' => 'App\\Http\\Controllers\\Api\\CurrencyController@detail',
                'controller_path' => 'App\\Http\\Controllers\\Api\\CurrencyController',
                'controller_name' => 'CurrencyController',
                'method_name' => 'detail',
            ),
            23 =>
            array (
                'id' => 32,
                'name' => 'App\\Http\\Controllers\\Api\\CurrencyController@destroy',
                'controller_path' => 'App\\Http\\Controllers\\Api\\CurrencyController',
                'controller_name' => 'CurrencyController',
                'method_name' => 'destroy',
            ),
            24 =>
            array (
                'id' => 57,
                'name' => 'App\\Http\\Controllers\\Api\\BrandController@index',
                'controller_path' => 'App\\Http\\Controllers\\Api\\BrandController',
                'controller_name' => 'BrandController',
                'method_name' => 'index',
            ),
            25 =>
            array (
                'id' => 58,
                'name' => 'App\\Http\\Controllers\\Api\\BrandController@store',
                'controller_path' => 'App\\Http\\Controllers\\Api\\BrandController',
                'controller_name' => 'BrandController',
                'method_name' => 'store',
            ),
            26 =>
            array (
                'id' => 59,
                'name' => 'App\\Http\\Controllers\\Api\\BrandController@update',
                'controller_path' => 'App\\Http\\Controllers\\Api\\BrandController',
                'controller_name' => 'BrandController',
                'method_name' => 'update',
            ),
            27 =>
            array (
                'id' => 60,
                'name' => 'App\\Http\\Controllers\\Api\\BrandController@detail',
                'controller_path' => 'App\\Http\\Controllers\\Api\\BrandController',
                'controller_name' => 'BrandController',
                'method_name' => 'detail',
            ),
            28 =>
            array (
                'id' => 61,
                'name' => 'App\\Http\\Controllers\\Api\\BrandController@destroy',
                'controller_path' => 'App\\Http\\Controllers\\Api\\BrandController',
                'controller_name' => 'BrandController',
                'method_name' => 'destroy',
            ),
            29 =>
            array (
                'id' => 62,
                'name' => 'App\\Http\\Controllers\\Api\\VendorController@index',
                'controller_path' => 'App\\Http\\Controllers\\Api\\VendorController',
                'controller_name' => 'VendorController',
                'method_name' => 'index',
            ),
            30 =>
            array (
                'id' => 63,
                'name' => 'App\\Http\\Controllers\\Api\\VendorController@store',
                'controller_path' => 'App\\Http\\Controllers\\Api\\VendorController',
                'controller_name' => 'VendorController',
                'method_name' => 'store',
            ),
            31 =>
            array (
                'id' => 64,
                'name' => 'App\\Http\\Controllers\\Api\\VendorController@update',
                'controller_path' => 'App\\Http\\Controllers\\Api\\VendorController',
                'controller_name' => 'VendorController',
                'method_name' => 'update',
            ),
            32 =>
            array (
                'id' => 65,
                'name' => 'App\\Http\\Controllers\\Api\\VendorController@detail',
                'controller_path' => 'App\\Http\\Controllers\\Api\\VendorController',
                'controller_name' => 'VendorController',
                'method_name' => 'detail',
            ),
            33 =>
            array (
                'id' => 66,
                'name' => 'App\\Http\\Controllers\\Api\\VendorController@destroy',
                'controller_path' => 'App\\Http\\Controllers\\Api\\VendorController',
                'controller_name' => 'VendorController',
                'method_name' => 'destroy',
            ),
            34 =>
            array (
                'id' => 72,
                'name' => 'App\\Http\\Controllers\\LoginController@showLoginForm',
                'controller_path' => 'App\\Http\\Controllers\\LoginController',
                'controller_name' => 'LoginController',
                'method_name' => 'showLoginForm',
            ),
            35 =>
            array (
                'id' => 73,
                'name' => 'App\\Http\\Controllers\\LoginController@showLoginForm',
                'controller_path' => 'App\\Http\\Controllers\\LoginController',
                'controller_name' => 'LoginController',
                'method_name' => 'showLoginForm',
            ),
            36 =>
            array (
                'id' => 74,
                'name' => 'App\\Http\\Controllers\\LoginController@authenticate',
                'controller_path' => 'App\\Http\\Controllers\\LoginController',
                'controller_name' => 'LoginController',
                'method_name' => 'authenticate',
            ),
            37 =>
            array (
                'id' => 76,
                'name' => 'App\\Http\\Controllers\\LoginController@logout',
                'controller_path' => 'App\\Http\\Controllers\\LoginController',
                'controller_name' => 'LoginController',
                'method_name' => 'logout',
            ),
            38 =>
            array (
                'id' => 77,
                'name' => 'App\\Http\\Controllers\\DashboardController@index',
                'controller_path' => 'App\\Http\\Controllers\\DashboardController',
                'controller_name' => 'DashboardController',
                'method_name' => 'index',
            ),
            39 =>
            array (
                'id' => 78,
                'name' => 'App\\Http\\Controllers\\RoleController@index',
                'controller_path' => 'App\\Http\\Controllers\\RoleController',
                'controller_name' => 'RoleController',
                'method_name' => 'index',
            ),
            40 =>
            array (
                'id' => 79,
                'name' => 'App\\Http\\Controllers\\RoleController@create',
                'controller_path' => 'App\\Http\\Controllers\\RoleController',
                'controller_name' => 'RoleController',
                'method_name' => 'create',
            ),
            41 =>
            array (
                'id' => 80,
                'name' => 'App\\Http\\Controllers\\RoleController@store',
                'controller_path' => 'App\\Http\\Controllers\\RoleController',
                'controller_name' => 'RoleController',
                'method_name' => 'store',
            ),
            42 =>
            array (
                'id' => 81,
                'name' => 'App\\Http\\Controllers\\RoleController@edit',
                'controller_path' => 'App\\Http\\Controllers\\RoleController',
                'controller_name' => 'RoleController',
                'method_name' => 'edit',
            ),
            43 =>
            array (
                'id' => 82,
                'name' => 'App\\Http\\Controllers\\RoleController@update',
                'controller_path' => 'App\\Http\\Controllers\\RoleController',
                'controller_name' => 'RoleController',
                'method_name' => 'update',
            ),
            44 =>
            array (
                'id' => 83,
                'name' => 'App\\Http\\Controllers\\RoleController@destroy',
                'controller_path' => 'App\\Http\\Controllers\\RoleController',
                'controller_name' => 'RoleController',
                'method_name' => 'destroy',
            ),
            45 =>
            array (
                'id' => 84,
                'name' => 'App\\Http\\Controllers\\PermissionRoleController@index',
                'controller_path' => 'App\\Http\\Controllers\\PermissionRoleController',
                'controller_name' => 'PermissionRoleController',
                'method_name' => 'index',
            ),
            46 =>
            array (
                'id' => 85,
                'name' => 'App\\Http\\Controllers\\PermissionRoleController@generatePermission',
                'controller_path' => 'App\\Http\\Controllers\\PermissionRoleController',
                'controller_name' => 'PermissionRoleController',
                'method_name' => 'generatePermission',
            ),
            47 =>
            array (
                'id' => 86,
                'name' => 'App\\Http\\Controllers\\PermissionRoleController@assignPermission',
                'controller_path' => 'App\\Http\\Controllers\\PermissionRoleController',
                'controller_name' => 'PermissionRoleController',
                'method_name' => 'assignPermission',
            ),
            48 =>
            array (
                'id' => 87,
                'name' => 'App\\Http\\Controllers\\UserController@index',
                'controller_path' => 'App\\Http\\Controllers\\UserController',
                'controller_name' => 'UserController',
                'method_name' => 'index',
            ),
            49 =>
            array (
                'id' => 88,
                'name' => 'App\\Http\\Controllers\\UserController@create',
                'controller_path' => 'App\\Http\\Controllers\\UserController',
                'controller_name' => 'UserController',
                'method_name' => 'create',
            ),
            50 =>
            array (
                'id' => 89,
                'name' => 'App\\Http\\Controllers\\UserController@store',
                'controller_path' => 'App\\Http\\Controllers\\UserController',
                'controller_name' => 'UserController',
                'method_name' => 'store',
            ),
            51 =>
            array (
                'id' => 90,
                'name' => 'App\\Http\\Controllers\\UserController@edit',
                'controller_path' => 'App\\Http\\Controllers\\UserController',
                'controller_name' => 'UserController',
                'method_name' => 'edit',
            ),
            52 =>
            array (
                'id' => 91,
                'name' => 'App\\Http\\Controllers\\UserController@updatePassword',
                'controller_path' => 'App\\Http\\Controllers\\UserController',
                'controller_name' => 'UserController',
                'method_name' => 'updatePassword',
            ),
            53 =>
            array (
                'id' => 92,
                'name' => 'App\\Http\\Controllers\\UserController@update',
                'controller_path' => 'App\\Http\\Controllers\\UserController',
                'controller_name' => 'UserController',
                'method_name' => 'update',
            ),
            54 =>
            array (
                'id' => 93,
                'name' => 'App\\Http\\Controllers\\UserController@destroy',
                'controller_path' => 'App\\Http\\Controllers\\UserController',
                'controller_name' => 'UserController',
                'method_name' => 'destroy',
            ),
            55 =>
            array (
                'id' => 94,
                'name' => 'App\\Http\\Controllers\\UserController@import',
                'controller_path' => 'App\\Http\\Controllers\\UserController',
                'controller_name' => 'UserController',
                'method_name' => 'import',
            ),
            56 =>
            array (
                'id' => 95,
                'name' => 'App\\Http\\Controllers\\UserController@pdf',
                'controller_path' => 'App\\Http\\Controllers\\UserController',
                'controller_name' => 'UserController',
                'method_name' => 'pdf',
            ),
            57 =>
            array (
                'id' => 96,
                'name' => 'App\\Http\\Controllers\\UserController@csv',
                'controller_path' => 'App\\Http\\Controllers\\UserController',
                'controller_name' => 'UserController',
                'method_name' => 'csv',
            ),
            58 =>
            array (
                'id' => 97,
                'name' => 'App\\Http\\Controllers\\ProductController@index',
                'controller_path' => 'App\\Http\\Controllers\\ProductController',
                'controller_name' => 'ProductController',
                'method_name' => 'index',
            ),
            59 =>
            array (
                'id' => 100,
                'name' => 'App\\Http\\Controllers\\ProductController@edit',
                'controller_path' => 'App\\Http\\Controllers\\ProductController',
                'controller_name' => 'ProductController',
                'method_name' => 'edit',
            ),
            60 =>
            array (
                'id' => 106,
                'name' => 'App\\Http\\Controllers\\VendorController@index',
                'controller_path' => 'App\\Http\\Controllers\\VendorController',
                'controller_name' => 'VendorController',
                'method_name' => 'index',
            ),
            61 =>
            array (
                'id' => 107,
                'name' => 'App\\Http\\Controllers\\VendorController@create',
                'controller_path' => 'App\\Http\\Controllers\\VendorController',
                'controller_name' => 'VendorController',
                'method_name' => 'create',
            ),
            62 =>
            array (
                'id' => 108,
                'name' => 'App\\Http\\Controllers\\VendorController@store',
                'controller_path' => 'App\\Http\\Controllers\\VendorController',
                'controller_name' => 'VendorController',
                'method_name' => 'store',
            ),
            63 =>
            array (
                'id' => 109,
                'name' => 'App\\Http\\Controllers\\VendorController@edit',
                'controller_path' => 'App\\Http\\Controllers\\VendorController',
                'controller_name' => 'VendorController',
                'method_name' => 'edit',
            ),
            64 =>
            array (
                'id' => 110,
                'name' => 'App\\Http\\Controllers\\VendorController@update',
                'controller_path' => 'App\\Http\\Controllers\\VendorController',
                'controller_name' => 'VendorController',
                'method_name' => 'update',
            ),
            65 =>
            array (
                'id' => 111,
                'name' => 'App\\Http\\Controllers\\VendorController@destroy',
                'controller_path' => 'App\\Http\\Controllers\\VendorController',
                'controller_name' => 'VendorController',
                'method_name' => 'destroy',
            ),
            66 =>
            array (
                'id' => 112,
                'name' => 'App\\Http\\Controllers\\VendorController@import',
                'controller_path' => 'App\\Http\\Controllers\\VendorController',
                'controller_name' => 'VendorController',
                'method_name' => 'import',
            ),
            67 =>
            array (
                'id' => 113,
                'name' => 'App\\Http\\Controllers\\VendorController@pdf',
                'controller_path' => 'App\\Http\\Controllers\\VendorController',
                'controller_name' => 'VendorController',
                'method_name' => 'pdf',
            ),
            68 =>
            array (
                'id' => 114,
                'name' => 'App\\Http\\Controllers\\VendorController@csv',
                'controller_path' => 'App\\Http\\Controllers\\VendorController',
                'controller_name' => 'VendorController',
                'method_name' => 'csv',
            ),
            69 =>
            array (
                'id' => 115,
                'name' => 'App\\Http\\Controllers\\BrandController@index',
                'controller_path' => 'App\\Http\\Controllers\\BrandController',
                'controller_name' => 'BrandController',
                'method_name' => 'index',
            ),
            70 =>
            array (
                'id' => 116,
                'name' => 'App\\Http\\Controllers\\BrandController@create',
                'controller_path' => 'App\\Http\\Controllers\\BrandController',
                'controller_name' => 'BrandController',
                'method_name' => 'create',
            ),
            71 =>
            array (
                'id' => 117,
                'name' => 'App\\Http\\Controllers\\BrandController@store',
                'controller_path' => 'App\\Http\\Controllers\\BrandController',
                'controller_name' => 'BrandController',
                'method_name' => 'store',
            ),
            72 =>
            array (
                'id' => 118,
                'name' => 'App\\Http\\Controllers\\BrandController@edit',
                'controller_path' => 'App\\Http\\Controllers\\BrandController',
                'controller_name' => 'BrandController',
                'method_name' => 'edit',
            ),
            73 =>
            array (
                'id' => 119,
                'name' => 'App\\Http\\Controllers\\BrandController@update',
                'controller_path' => 'App\\Http\\Controllers\\BrandController',
                'controller_name' => 'BrandController',
                'method_name' => 'update',
            ),
            74 =>
            array (
                'id' => 120,
                'name' => 'App\\Http\\Controllers\\BrandController@destroy',
                'controller_path' => 'App\\Http\\Controllers\\BrandController',
                'controller_name' => 'BrandController',
                'method_name' => 'destroy',
            ),
            75 =>
            array (
                'id' => 121,
                'name' => 'App\\Http\\Controllers\\BrandController@pdf',
                'controller_path' => 'App\\Http\\Controllers\\BrandController',
                'controller_name' => 'BrandController',
                'method_name' => 'pdf',
            ),
            76 =>
            array (
                'id' => 122,
                'name' => 'App\\Http\\Controllers\\BrandController@csv',
                'controller_path' => 'App\\Http\\Controllers\\BrandController',
                'controller_name' => 'BrandController',
                'method_name' => 'csv',
            ),
            77 =>
            array (
                'id' => 123,
                'name' => 'App\\Http\\Controllers\\AttributeController@index',
                'controller_path' => 'App\\Http\\Controllers\\AttributeController',
                'controller_name' => 'AttributeController',
                'method_name' => 'index',
            ),
            78 =>
            array (
                'id' => 124,
                'name' => 'App\\Http\\Controllers\\AttributeController@create',
                'controller_path' => 'App\\Http\\Controllers\\AttributeController',
                'controller_name' => 'AttributeController',
                'method_name' => 'create',
            ),
            79 =>
            array (
                'id' => 125,
                'name' => 'App\\Http\\Controllers\\AttributeController@store',
                'controller_path' => 'App\\Http\\Controllers\\AttributeController',
                'controller_name' => 'AttributeController',
                'method_name' => 'store',
            ),
            80 =>
            array (
                'id' => 126,
                'name' => 'App\\Http\\Controllers\\AttributeController@edit',
                'controller_path' => 'App\\Http\\Controllers\\AttributeController',
                'controller_name' => 'AttributeController',
                'method_name' => 'edit',
            ),
            81 =>
            array (
                'id' => 127,
                'name' => 'App\\Http\\Controllers\\AttributeController@getAttribute',
                'controller_path' => 'App\\Http\\Controllers\\AttributeController',
                'controller_name' => 'AttributeController',
                'method_name' => 'getAttribute',
            ),
            82 =>
            array (
                'id' => 128,
                'name' => 'App\\Http\\Controllers\\AttributeController@update',
                'controller_path' => 'App\\Http\\Controllers\\AttributeController',
                'controller_name' => 'AttributeController',
                'method_name' => 'update',
            ),
            83 =>
            array (
                'id' => 129,
                'name' => 'App\\Http\\Controllers\\AttributeController@destroy',
                'controller_path' => 'App\\Http\\Controllers\\AttributeController',
                'controller_name' => 'AttributeController',
                'method_name' => 'destroy',
            ),
            84 =>
            array (
                'id' => 130,
                'name' => 'App\\Http\\Controllers\\AttributeController@pdf',
                'controller_path' => 'App\\Http\\Controllers\\AttributeController',
                'controller_name' => 'AttributeController',
                'method_name' => 'pdf',
            ),
            85 =>
            array (
                'id' => 131,
                'name' => 'App\\Http\\Controllers\\AttributeController@csv',
                'controller_path' => 'App\\Http\\Controllers\\AttributeController',
                'controller_name' => 'AttributeController',
                'method_name' => 'csv',
            ),
            86 =>
            array (
                'id' => 132,
                'name' => 'App\\Http\\Controllers\\AttributeGroupController@index',
                'controller_path' => 'App\\Http\\Controllers\\AttributeGroupController',
                'controller_name' => 'AttributeGroupController',
                'method_name' => 'index',
            ),
            87 =>
            array (
                'id' => 133,
                'name' => 'App\\Http\\Controllers\\AttributeGroupController@create',
                'controller_path' => 'App\\Http\\Controllers\\AttributeGroupController',
                'controller_name' => 'AttributeGroupController',
                'method_name' => 'create',
            ),
            88 =>
            array (
                'id' => 134,
                'name' => 'App\\Http\\Controllers\\AttributeGroupController@store',
                'controller_path' => 'App\\Http\\Controllers\\AttributeGroupController',
                'controller_name' => 'AttributeGroupController',
                'method_name' => 'store',
            ),
            89 =>
            array (
                'id' => 135,
                'name' => 'App\\Http\\Controllers\\AttributeGroupController@edit',
                'controller_path' => 'App\\Http\\Controllers\\AttributeGroupController',
                'controller_name' => 'AttributeGroupController',
                'method_name' => 'edit',
            ),
            90 =>
            array (
                'id' => 136,
                'name' => 'App\\Http\\Controllers\\AttributeGroupController@update',
                'controller_path' => 'App\\Http\\Controllers\\AttributeGroupController',
                'controller_name' => 'AttributeGroupController',
                'method_name' => 'update',
            ),
            91 =>
            array (
                'id' => 137,
                'name' => 'App\\Http\\Controllers\\AttributeGroupController@destroy',
                'controller_path' => 'App\\Http\\Controllers\\AttributeGroupController',
                'controller_name' => 'AttributeGroupController',
                'method_name' => 'destroy',
            ),
            92 =>
            array (
                'id' => 138,
                'name' => 'App\\Http\\Controllers\\AttributeGroupController@pdf',
                'controller_path' => 'App\\Http\\Controllers\\AttributeGroupController',
                'controller_name' => 'AttributeGroupController',
                'method_name' => 'pdf',
            ),
            93 =>
            array (
                'id' => 139,
                'name' => 'App\\Http\\Controllers\\AttributeGroupController@csv',
                'controller_path' => 'App\\Http\\Controllers\\AttributeGroupController',
                'controller_name' => 'AttributeGroupController',
                'method_name' => 'csv',
            ),
            94 =>
            array (
                'id' => 149,
                'name' => 'App\\Http\\Controllers\\CategoryController@index',
                'controller_path' => 'App\\Http\\Controllers\\CategoryController',
                'controller_name' => 'CategoryController',
                'method_name' => 'index',
            ),
            95 =>
            array (
                'id' => 150,
                'name' => 'App\\Http\\Controllers\\CategoryController@store',
                'controller_path' => 'App\\Http\\Controllers\\CategoryController',
                'controller_name' => 'CategoryController',
                'method_name' => 'store',
            ),
            96 =>
            array (
                'id' => 151,
                'name' => 'App\\Http\\Controllers\\CategoryController@getData',
                'controller_path' => 'App\\Http\\Controllers\\CategoryController',
                'controller_name' => 'CategoryController',
                'method_name' => 'getData',
            ),
            97 =>
            array (
                'id' => 152,
                'name' => 'App\\Http\\Controllers\\CategoryController@getParentData',
                'controller_path' => 'App\\Http\\Controllers\\CategoryController',
                'controller_name' => 'CategoryController',
                'method_name' => 'getParentData',
            ),
            98 =>
            array (
                'id' => 153,
                'name' => 'App\\Http\\Controllers\\CategoryController@moveNode',
                'controller_path' => 'App\\Http\\Controllers\\CategoryController',
                'controller_name' => 'CategoryController',
                'method_name' => 'moveNode',
            ),
            99 =>
            array (
                'id' => 154,
                'name' => 'App\\Http\\Controllers\\CategoryController@edit',
                'controller_path' => 'App\\Http\\Controllers\\CategoryController',
                'controller_name' => 'CategoryController',
                'method_name' => 'edit',
            ),
            100 =>
            array (
                'id' => 155,
                'name' => 'App\\Http\\Controllers\\CategoryController@update',
                'controller_path' => 'App\\Http\\Controllers\\CategoryController',
                'controller_name' => 'CategoryController',
                'method_name' => 'update',
            ),
            101 =>
            array (
                'id' => 156,
                'name' => 'App\\Http\\Controllers\\CategoryController@destroy',
                'controller_path' => 'App\\Http\\Controllers\\CategoryController',
                'controller_name' => 'CategoryController',
                'method_name' => 'destroy',
            ),
            102 =>
            array (
                'id' => 157,
                'name' => 'App\\Http\\Controllers\\MailTemplateController@index',
                'controller_path' => 'App\\Http\\Controllers\\MailTemplateController',
                'controller_name' => 'MailTemplateController',
                'method_name' => 'index',
            ),
            103 =>
            array (
                'id' => 158,
                'name' => 'App\\Http\\Controllers\\MailTemplateController@create',
                'controller_path' => 'App\\Http\\Controllers\\MailTemplateController',
                'controller_name' => 'MailTemplateController',
                'method_name' => 'create',
            ),
            104 =>
            array (
                'id' => 159,
                'name' => 'App\\Http\\Controllers\\MailTemplateController@store',
                'controller_path' => 'App\\Http\\Controllers\\MailTemplateController',
                'controller_name' => 'MailTemplateController',
                'method_name' => 'store',
            ),
            105 =>
            array (
                'id' => 160,
                'name' => 'App\\Http\\Controllers\\MailTemplateController@edit',
                'controller_path' => 'App\\Http\\Controllers\\MailTemplateController',
                'controller_name' => 'MailTemplateController',
                'method_name' => 'edit',
            ),
            106 =>
            array (
                'id' => 161,
                'name' => 'App\\Http\\Controllers\\MailTemplateController@update',
                'controller_path' => 'App\\Http\\Controllers\\MailTemplateController',
                'controller_name' => 'MailTemplateController',
                'method_name' => 'update',
            ),
            107 =>
            array (
                'id' => 162,
                'name' => 'App\\Http\\Controllers\\MailTemplateController@destroy',
                'controller_path' => 'App\\Http\\Controllers\\MailTemplateController',
                'controller_name' => 'MailTemplateController',
                'method_name' => 'destroy',
            ),
            108 =>
            array (
                'id' => 169,
                'name' => 'App\\Http\\Controllers\\PreferenceController@index',
                'controller_path' => 'App\\Http\\Controllers\\PreferenceController',
                'controller_name' => 'PreferenceController',
                'method_name' => 'index',
            ),
            109 =>
            array (
                'id' => 171,
                'name' => 'App\\Http\\Controllers\\EmailConfigurationController@index',
                'controller_path' => 'App\\Http\\Controllers\\EmailConfigurationController',
                'controller_name' => 'EmailConfigurationController',
                'method_name' => 'index',
            ),
            110 =>
            array (
                'id' => 172,
                'name' => 'App\\Http\\Controllers\\CompanySettingController@index',
                'controller_path' => 'App\\Http\\Controllers\\CompanySettingController',
                'controller_name' => 'CompanySettingController',
                'method_name' => 'index',
            ),
            111 =>
            array (
                'id' => 175,
                'name' => 'App\\Http\\Controllers\\LanguageController@translation',
                'controller_path' => 'App\\Http\\Controllers\\LanguageController',
                'controller_name' => 'LanguageController',
                'method_name' => 'translation',
            ),
            112 =>
            array (
                'id' => 176,
                'name' => 'App\\Http\\Controllers\\LanguageController@index',
                'controller_path' => 'App\\Http\\Controllers\\LanguageController',
                'controller_name' => 'LanguageController',
                'method_name' => 'index',
            ),
            113 =>
            array (
                'id' => 177,
                'name' => 'App\\Http\\Controllers\\LanguageController@store',
                'controller_path' => 'App\\Http\\Controllers\\LanguageController',
                'controller_name' => 'LanguageController',
                'method_name' => 'store',
            ),
            114 =>
            array (
                'id' => 178,
                'name' => 'App\\Http\\Controllers\\LanguageController@edit',
                'controller_path' => 'App\\Http\\Controllers\\LanguageController',
                'controller_name' => 'LanguageController',
                'method_name' => 'edit',
            ),
            115 =>
            array (
                'id' => 179,
                'name' => 'App\\Http\\Controllers\\LanguageController@update',
                'controller_path' => 'App\\Http\\Controllers\\LanguageController',
                'controller_name' => 'LanguageController',
                'method_name' => 'update',
            ),
            116 =>
            array (
                'id' => 180,
                'name' => 'App\\Http\\Controllers\\LanguageController@delete',
                'controller_path' => 'App\\Http\\Controllers\\LanguageController',
                'controller_name' => 'LanguageController',
                'method_name' => 'delete',
            ),
            117 =>
            array (
                'id' => 181,
                'name' => 'App\\Http\\Controllers\\LanguageController@translationStore',
                'controller_path' => 'App\\Http\\Controllers\\LanguageController',
                'controller_name' => 'LanguageController',
                'method_name' => 'translationStore',
            ),
            118 =>
            array (
                'id' => 182,
                'name' => 'App\\Http\\Controllers\\CurrencyController@index',
                'controller_path' => 'App\\Http\\Controllers\\CurrencyController',
                'controller_name' => 'CurrencyController',
                'method_name' => 'index',
            ),
            119 =>
            array (
                'id' => 183,
                'name' => 'App\\Http\\Controllers\\CurrencyController@store',
                'controller_path' => 'App\\Http\\Controllers\\CurrencyController',
                'controller_name' => 'CurrencyController',
                'method_name' => 'store',
            ),
            120 =>
            array (
                'id' => 184,
                'name' => 'App\\Http\\Controllers\\CurrencyController@edit',
                'controller_path' => 'App\\Http\\Controllers\\CurrencyController',
                'controller_name' => 'CurrencyController',
                'method_name' => 'edit',
            ),
            121 =>
            array (
                'id' => 185,
                'name' => 'App\\Http\\Controllers\\CurrencyController@update',
                'controller_path' => 'App\\Http\\Controllers\\CurrencyController',
                'controller_name' => 'CurrencyController',
                'method_name' => 'update',
            ),
            122 =>
            array (
                'id' => 186,
                'name' => 'App\\Http\\Controllers\\CurrencyController@destroy',
                'controller_path' => 'App\\Http\\Controllers\\CurrencyController',
                'controller_name' => 'CurrencyController',
                'method_name' => 'destroy',
            ),
            123 =>
            array (
                'id' => 187,
                'name' => 'App\\Http\\Controllers\\CurrencyController@validCurrencyName',
                'controller_path' => 'App\\Http\\Controllers\\CurrencyController',
                'controller_name' => 'CurrencyController',
                'method_name' => 'validCurrencyName',
            ),
            124 =>
            array (
                'id' => 233,
                'name' => 'App\\Http\\Controllers\\FilesController@downloadAttachment',
                'controller_path' => 'App\\Http\\Controllers\\FilesController',
                'controller_name' => 'FilesController',
                'method_name' => 'downloadAttachment',
            ),
            125 =>
            array (
                'id' => 234,
                'name' => 'App\\Http\\Controllers\\DashboardController@switchLanguage',
                'controller_path' => 'App\\Http\\Controllers\\DashboardController',
                'controller_name' => 'DashboardController',
                'method_name' => 'switchLanguage',
            ),
            126 =>
            array (
                'id' => 254,
                'name' => 'App\\Http\\Controllers\\Vendor\\DashboardController@index',
                'controller_path' => 'App\\Http\\Controllers\\Vendor\\DashboardController',
                'controller_name' => 'DashboardController',
                'method_name' => 'index',
            ),
            127 =>
            array (
                'id' => 255,
                'name' => '\\Laravel\\Passport\\Http\\Controllers\\AuthorizationController@authorize',
                'controller_path' => '\\Laravel\\Passport\\Http\\Controllers\\AuthorizationController',
                'controller_name' => 'AuthorizationController',
                'method_name' => 'authorize',
            ),
            128 =>
            array (
                'id' => 256,
                'name' => '\\Laravel\\Passport\\Http\\Controllers\\ApproveAuthorizationController@approve',
                'controller_path' => '\\Laravel\\Passport\\Http\\Controllers\\ApproveAuthorizationController',
                'controller_name' => 'ApproveAuthorizationController',
                'method_name' => 'approve',
            ),
            129 =>
            array (
                'id' => 257,
                'name' => '\\Laravel\\Passport\\Http\\Controllers\\DenyAuthorizationController@deny',
                'controller_path' => '\\Laravel\\Passport\\Http\\Controllers\\DenyAuthorizationController',
                'controller_name' => 'DenyAuthorizationController',
                'method_name' => 'deny',
            ),
            130 =>
            array (
                'id' => 258,
                'name' => '\\Laravel\\Passport\\Http\\Controllers\\AccessTokenController@issueToken',
                'controller_path' => '\\Laravel\\Passport\\Http\\Controllers\\AccessTokenController',
                'controller_name' => 'AccessTokenController',
                'method_name' => 'issueToken',
            ),
            131 =>
            array (
                'id' => 259,
                'name' => '\\Laravel\\Passport\\Http\\Controllers\\AuthorizedAccessTokenController@forUser',
                'controller_path' => '\\Laravel\\Passport\\Http\\Controllers\\AuthorizedAccessTokenController',
                'controller_name' => 'AuthorizedAccessTokenController',
                'method_name' => 'forUser',
            ),
            132 =>
            array (
                'id' => 260,
                'name' => '\\Laravel\\Passport\\Http\\Controllers\\AuthorizedAccessTokenController@destroy',
                'controller_path' => '\\Laravel\\Passport\\Http\\Controllers\\AuthorizedAccessTokenController',
                'controller_name' => 'AuthorizedAccessTokenController',
                'method_name' => 'destroy',
            ),
            133 =>
            array (
                'id' => 261,
                'name' => '\\Laravel\\Passport\\Http\\Controllers\\TransientTokenController@refresh',
                'controller_path' => '\\Laravel\\Passport\\Http\\Controllers\\TransientTokenController',
                'controller_name' => 'TransientTokenController',
                'method_name' => 'refresh',
            ),
            134 =>
            array (
                'id' => 262,
                'name' => '\\Laravel\\Passport\\Http\\Controllers\\ClientController@forUser',
                'controller_path' => '\\Laravel\\Passport\\Http\\Controllers\\ClientController',
                'controller_name' => 'ClientController',
                'method_name' => 'forUser',
            ),
            135 =>
            array (
                'id' => 263,
                'name' => '\\Laravel\\Passport\\Http\\Controllers\\ClientController@store',
                'controller_path' => '\\Laravel\\Passport\\Http\\Controllers\\ClientController',
                'controller_name' => 'ClientController',
                'method_name' => 'store',
            ),
            136 =>
            array (
                'id' => 264,
                'name' => '\\Laravel\\Passport\\Http\\Controllers\\ClientController@update',
                'controller_path' => '\\Laravel\\Passport\\Http\\Controllers\\ClientController',
                'controller_name' => 'ClientController',
                'method_name' => 'update',
            ),
            137 =>
            array (
                'id' => 265,
                'name' => '\\Laravel\\Passport\\Http\\Controllers\\ClientController@destroy',
                'controller_path' => '\\Laravel\\Passport\\Http\\Controllers\\ClientController',
                'controller_name' => 'ClientController',
                'method_name' => 'destroy',
            ),
            138 =>
            array (
                'id' => 266,
                'name' => '\\Laravel\\Passport\\Http\\Controllers\\ScopeController@all',
                'controller_path' => '\\Laravel\\Passport\\Http\\Controllers\\ScopeController',
                'controller_name' => 'ScopeController',
                'method_name' => 'all',
            ),
            139 =>
            array (
                'id' => 267,
                'name' => '\\Laravel\\Passport\\Http\\Controllers\\PersonalAccessTokenController@forUser',
                'controller_path' => '\\Laravel\\Passport\\Http\\Controllers\\PersonalAccessTokenController',
                'controller_name' => 'PersonalAccessTokenController',
                'method_name' => 'forUser',
            ),
            140 =>
            array (
                'id' => 268,
                'name' => '\\Laravel\\Passport\\Http\\Controllers\\PersonalAccessTokenController@store',
                'controller_path' => '\\Laravel\\Passport\\Http\\Controllers\\PersonalAccessTokenController',
                'controller_name' => 'PersonalAccessTokenController',
                'method_name' => 'store',
            ),
            141 =>
            array (
                'id' => 269,
                'name' => '\\Laravel\\Passport\\Http\\Controllers\\PersonalAccessTokenController@destroy',
                'controller_path' => '\\Laravel\\Passport\\Http\\Controllers\\PersonalAccessTokenController',
                'controller_name' => 'PersonalAccessTokenController',
                'method_name' => 'destroy',
            ),
            142 =>
            array (
                'id' => 271,
                'name' => 'App\\Http\\Controllers\\Api\\AuthController@login',
                'controller_path' => 'App\\Http\\Controllers\\Api\\AuthController',
                'controller_name' => 'AuthController',
                'method_name' => 'login',
            ),
            143 =>
            array (
                'id' => 272,
                'name' => 'App\\Http\\Controllers\\Api\\AuthController@logout',
                'controller_path' => 'App\\Http\\Controllers\\Api\\AuthController',
                'controller_name' => 'AuthController',
                'method_name' => 'logout',
            ),
            144 =>
            array (
                'id' => 278,
                'name' => 'App\\Http\\Controllers\\LoginController@showResetForm',
                'controller_path' => 'App\\Http\\Controllers\\LoginController',
                'controller_name' => 'LoginController',
                'method_name' => 'showResetForm',
            ),
            145 =>
            array (
                'id' => 279,
                'name' => 'App\\Http\\Controllers\\LoginController@setPassword',
                'controller_path' => 'App\\Http\\Controllers\\LoginController',
                'controller_name' => 'LoginController',
                'method_name' => 'setPassword',
            ),
            146 =>
            array (
                'id' => 280,
                'name' => 'App\\Http\\Controllers\\LoginController@sendResetLinkEmail',
                'controller_path' => 'App\\Http\\Controllers\\LoginController',
                'controller_name' => 'LoginController',
                'method_name' => 'sendResetLinkEmail',
            ),
            147 =>
            array (
                'id' => 281,
                'name' => 'App\\Http\\Controllers\\LoginController@reset',
                'controller_path' => 'App\\Http\\Controllers\\LoginController',
                'controller_name' => 'LoginController',
                'method_name' => 'reset',
            ),
            148 =>
            array (
                'id' => 282,
                'name' => 'App\\Http\\Controllers\\UserController@verification',
                'controller_path' => 'App\\Http\\Controllers\\UserController',
                'controller_name' => 'UserController',
                'method_name' => 'verification',
            ),
            149 =>
            array (
                'id' => 283,
                'name' => 'App\\Http\\Controllers\\UserController@updateProfile',
                'controller_path' => 'App\\Http\\Controllers\\UserController',
                'controller_name' => 'UserController',
                'method_name' => 'updateProfile',
            ),
            150 =>
            array (
                'id' => 284,
                'name' => 'App\\Http\\Controllers\\UserController@profile',
                'controller_path' => 'App\\Http\\Controllers\\UserController',
                'controller_name' => 'UserController',
                'method_name' => 'profile',
            ),
            151 =>
            array (
                'id' => 285,
                'name' => 'App\\Http\\Controllers\\UserController@updateProfilePassword',
                'controller_path' => 'App\\Http\\Controllers\\UserController',
                'controller_name' => 'UserController',
                'method_name' => 'updateProfilePassword',
            ),
            152 =>
            array (
                'id' => 286,
                'name' => 'App\\Http\\Controllers\\ProductController@view',
                'controller_path' => 'App\\Http\\Controllers\\ProductController',
                'controller_name' => 'ProductController',
                'method_name' => 'view',
            ),
            153 =>
            array (
                'id' => 291,
                'name' => 'App\\Http\\Controllers\\FilesController@isValidFileSize',
                'controller_path' => 'App\\Http\\Controllers\\FilesController',
                'controller_name' => 'FilesController',
                'method_name' => 'isValidFileSize',
            ),
            154 =>
            array (
                'id' => 292,
                'name' => 'App\\Http\\Controllers\\Vendor\\VendorController@profile',
                'controller_path' => 'App\\Http\\Controllers\\Vendor\\VendorController',
                'controller_name' => 'VendorController',
                'method_name' => 'profile',
            ),
            155 =>
            array (
                'id' => 293,
                'name' => 'App\\Http\\Controllers\\Vendor\\VendorController@update',
                'controller_path' => 'App\\Http\\Controllers\\Vendor\\VendorController',
                'controller_name' => 'VendorController',
                'method_name' => 'update',
            ),
            156 =>
            array (
                'id' => 294,
                'name' => 'App\\Http\\Controllers\\Vendor\\VendorController@updatePassword',
                'controller_path' => 'App\\Http\\Controllers\\Vendor\\VendorController',
                'controller_name' => 'VendorController',
                'method_name' => 'updatePassword',
            ),
            157 =>
            array (
                'id' => 295,
                'name' => 'App\\Http\\Controllers\\Vendor\\VendorController@logout',
                'controller_path' => 'App\\Http\\Controllers\\Vendor\\VendorController',
                'controller_name' => 'VendorController',
                'method_name' => 'logout',
            ),
            158 =>
            array (
                'id' => 310,
                'name' => 'App\\Http\\Controllers\\Api\\AuthController@sendResetLinkEmail',
                'controller_path' => 'App\\Http\\Controllers\\Api\\AuthController',
                'controller_name' => 'AuthController',
                'method_name' => 'sendResetLinkEmail',
            ),
            159 =>
            array (
                'id' => 311,
                'name' => 'App\\Http\\Controllers\\Api\\AuthController@setPassword',
                'controller_path' => 'App\\Http\\Controllers\\Api\\AuthController',
                'controller_name' => 'AuthController',
                'method_name' => 'setPassword',
            ),
            160 =>
            array (
                'id' => 314,
                'name' => 'App\\Http\\Controllers\\ReviewController@index',
                'controller_path' => 'App\\Http\\Controllers\\ReviewController',
                'controller_name' => 'ReviewController',
                'method_name' => 'index',
            ),
            161 =>
            array (
                'id' => 315,
                'name' => 'App\\Http\\Controllers\\ReviewController@edit',
                'controller_path' => 'App\\Http\\Controllers\\ReviewController',
                'controller_name' => 'ReviewController',
                'method_name' => 'edit',
            ),
            162 =>
            array (
                'id' => 316,
                'name' => 'App\\Http\\Controllers\\ReviewController@view',
                'controller_path' => 'App\\Http\\Controllers\\ReviewController',
                'controller_name' => 'ReviewController',
                'method_name' => 'view',
            ),
            163 =>
            array (
                'id' => 317,
                'name' => 'App\\Http\\Controllers\\ReviewController@update',
                'controller_path' => 'App\\Http\\Controllers\\ReviewController',
                'controller_name' => 'ReviewController',
                'method_name' => 'update',
            ),
            164 =>
            array (
                'id' => 318,
                'name' => 'App\\Http\\Controllers\\ReviewController@destroy',
                'controller_path' => 'App\\Http\\Controllers\\ReviewController',
                'controller_name' => 'ReviewController',
                'method_name' => 'destroy',
            ),
            165 =>
            array (
                'id' => 319,
                'name' => 'App\\Http\\Controllers\\ReviewController@pdf',
                'controller_path' => 'App\\Http\\Controllers\\ReviewController',
                'controller_name' => 'ReviewController',
                'method_name' => 'pdf',
            ),
            166 =>
            array (
                'id' => 320,
                'name' => 'App\\Http\\Controllers\\ReviewController@csv',
                'controller_path' => 'App\\Http\\Controllers\\ReviewController',
                'controller_name' => 'ReviewController',
                'method_name' => 'csv',
            ),
            167 =>
            array (
                'id' => 321,
                'name' => 'App\\Http\\Controllers\\SsoController@index',
                'controller_path' => 'App\\Http\\Controllers\\SsoController',
                'controller_name' => 'SsoController',
                'method_name' => 'index',
            ),
            168 =>
            array (
                'id' => 322,
                'name' => 'App\\Http\\Controllers\\MaintenanceModeController@enable',
                'controller_path' => 'App\\Http\\Controllers\\MaintenanceModeController',
                'controller_name' => 'MaintenanceModeController',
                'method_name' => 'enable',
            ),
            169 =>
            array (
                'id' => 323,
                'name' => 'App\\Http\\Controllers\\Site\\SiteController@index',
                'controller_path' => 'App\\Http\\Controllers\\Site\\SiteController',
                'controller_name' => 'SiteController',
                'method_name' => 'index',
            ),
            170 =>
            array (
                'id' => 324,
                'name' => 'App\\Http\\Controllers\\Site\\LoginController@login',
                'controller_path' => 'App\\Http\\Controllers\\Site\\LoginController',
                'controller_name' => 'LoginController',
                'method_name' => 'login',
            ),
            171 =>
            array (
                'id' => 325,
                'name' => 'App\\Http\\Controllers\\Site\\LoginController@authenticate',
                'controller_path' => 'App\\Http\\Controllers\\Site\\LoginController',
                'controller_name' => 'LoginController',
                'method_name' => 'authenticate',
            ),
            172 =>
            array (
                'id' => 326,
                'name' => 'App\\Http\\Controllers\\Site\\LoginController@verification',
                'controller_path' => 'App\\Http\\Controllers\\Site\\LoginController',
                'controller_name' => 'LoginController',
                'method_name' => 'verification',
            ),
            173 =>
            array (
                'id' => 328,
                'name' => 'App\\Http\\Controllers\\Site\\LoginController@signUp',
                'controller_path' => 'App\\Http\\Controllers\\Site\\LoginController',
                'controller_name' => 'LoginController',
                'method_name' => 'signUp',
            ),
            174 =>
            array (
                'id' => 329,
                'name' => 'App\\Http\\Controllers\\Site\\LoginController@logout',
                'controller_path' => 'App\\Http\\Controllers\\Site\\LoginController',
                'controller_name' => 'LoginController',
                'method_name' => 'logout',
            ),
            175 =>
            array (
                'id' => 330,
                'name' => 'App\\Http\\Controllers\\Site\\LoginController@redirectToGoogle',
                'controller_path' => 'App\\Http\\Controllers\\Site\\LoginController',
                'controller_name' => 'LoginController',
                'method_name' => 'redirectToGoogle',
            ),
            176 =>
            array (
                'id' => 331,
                'name' => 'App\\Http\\Controllers\\Site\\LoginController@handelGoogleCallback',
                'controller_path' => 'App\\Http\\Controllers\\Site\\LoginController',
                'controller_name' => 'LoginController',
                'method_name' => 'handelGoogleCallback',
            ),
            177 =>
            array (
                'id' => 332,
                'name' => 'App\\Http\\Controllers\\Site\\LoginController@redirectToFacebook',
                'controller_path' => 'App\\Http\\Controllers\\Site\\LoginController',
                'controller_name' => 'LoginController',
                'method_name' => 'redirectToFacebook',
            ),
            178 =>
            array (
                'id' => 333,
                'name' => 'App\\Http\\Controllers\\Site\\LoginController@handelFacebookCallback',
                'controller_path' => 'App\\Http\\Controllers\\Site\\LoginController',
                'controller_name' => 'LoginController',
                'method_name' => 'handelFacebookCallback',
            ),
            179 =>
            array (
                'id' => 334,
                'name' => 'App\\Http\\Controllers\\Site\\SiteController@productDetails',
                'controller_path' => 'App\\Http\\Controllers\\Site\\SiteController',
                'controller_name' => 'SiteController',
                'method_name' => 'productDetails',
            ),
            180 =>
            array (
                'id' => 335,
                'name' => 'App\\Http\\Controllers\\Site\\SiteController@reviewStore',
                'controller_path' => 'App\\Http\\Controllers\\Site\\SiteController',
                'controller_name' => 'SiteController',
                'method_name' => 'reviewStore',
            ),
            181 =>
            array (
                'id' => 336,
                'name' => 'App\\Http\\Controllers\\Site\\DashboardController@index',
                'controller_path' => 'App\\Http\\Controllers\\Site\\DashboardController',
                'controller_name' => 'DashboardController',
                'method_name' => 'index',
            ),
            182 =>
            array (
                'id' => 342,
                'name' => 'Modules\\Coupon\\Http\\Controllers\\Api\\CouponController@index',
                'controller_path' => 'Modules\\Coupon\\Http\\Controllers\\Api\\CouponController',
                'controller_name' => 'CouponController',
                'method_name' => 'index',
            ),
            183 =>
            array (
                'id' => 343,
                'name' => 'Modules\\Coupon\\Http\\Controllers\\Api\\CouponController@store',
                'controller_path' => 'Modules\\Coupon\\Http\\Controllers\\Api\\CouponController',
                'controller_name' => 'CouponController',
                'method_name' => 'store',
            ),
            184 =>
            array (
                'id' => 344,
                'name' => 'Modules\\Coupon\\Http\\Controllers\\Api\\CouponController@update',
                'controller_path' => 'Modules\\Coupon\\Http\\Controllers\\Api\\CouponController',
                'controller_name' => 'CouponController',
                'method_name' => 'update',
            ),
            185 =>
            array (
                'id' => 345,
                'name' => 'Modules\\Coupon\\Http\\Controllers\\Api\\CouponController@detail',
                'controller_path' => 'Modules\\Coupon\\Http\\Controllers\\Api\\CouponController',
                'controller_name' => 'CouponController',
                'method_name' => 'detail',
            ),
            186 =>
            array (
                'id' => 346,
                'name' => 'Modules\\Coupon\\Http\\Controllers\\Api\\CouponController@destroy',
                'controller_path' => 'Modules\\Coupon\\Http\\Controllers\\Api\\CouponController',
                'controller_name' => 'CouponController',
                'method_name' => 'destroy',
            ),
            187 =>
            array (
                'id' => 347,
                'name' => 'Modules\\Coupon\\Http\\Controllers\\CouponController@index',
                'controller_path' => 'Modules\\Coupon\\Http\\Controllers\\CouponController',
                'controller_name' => 'CouponController',
                'method_name' => 'index',
            ),
            188 =>
            array (
                'id' => 348,
                'name' => 'Modules\\Coupon\\Http\\Controllers\\CouponController@create',
                'controller_path' => 'Modules\\Coupon\\Http\\Controllers\\CouponController',
                'controller_name' => 'CouponController',
                'method_name' => 'create',
            ),
            189 =>
            array (
                'id' => 349,
                'name' => 'Modules\\Coupon\\Http\\Controllers\\CouponController@store',
                'controller_path' => 'Modules\\Coupon\\Http\\Controllers\\CouponController',
                'controller_name' => 'CouponController',
                'method_name' => 'store',
            ),
            190 =>
            array (
                'id' => 350,
                'name' => 'Modules\\Coupon\\Http\\Controllers\\CouponController@edit',
                'controller_path' => 'Modules\\Coupon\\Http\\Controllers\\CouponController',
                'controller_name' => 'CouponController',
                'method_name' => 'edit',
            ),
            191 =>
            array (
                'id' => 351,
                'name' => 'Modules\\Coupon\\Http\\Controllers\\CouponController@update',
                'controller_path' => 'Modules\\Coupon\\Http\\Controllers\\CouponController',
                'controller_name' => 'CouponController',
                'method_name' => 'update',
            ),
            192 =>
            array (
                'id' => 352,
                'name' => 'Modules\\Coupon\\Http\\Controllers\\CouponController@destroy',
                'controller_path' => 'Modules\\Coupon\\Http\\Controllers\\CouponController',
                'controller_name' => 'CouponController',
                'method_name' => 'destroy',
            ),
            193 =>
            array (
                'id' => 357,
                'name' => 'Modules\\Coupon\\Http\\Controllers\\CouponRedeemController@index',
                'controller_path' => 'Modules\\Coupon\\Http\\Controllers\\CouponRedeemController',
                'controller_name' => 'CouponRedeemController',
                'method_name' => 'index',
            ),
            194 =>
            array (
                'id' => 358,
                'name' => 'Modules\\Coupon\\Http\\Controllers\\CouponRedeemController@pdf',
                'controller_path' => 'Modules\\Coupon\\Http\\Controllers\\CouponRedeemController',
                'controller_name' => 'CouponRedeemController',
                'method_name' => 'pdf',
            ),
            195 =>
            array (
                'id' => 359,
                'name' => 'Modules\\Coupon\\Http\\Controllers\\CouponRedeemController@csv',
                'controller_path' => 'Modules\\Coupon\\Http\\Controllers\\CouponRedeemController',
                'controller_name' => 'CouponRedeemController',
                'method_name' => 'csv',
            ),
            196 =>
            array (
                'id' => 388,
                'name' => 'App\\Http\\Controllers\\Site\\UserController@edit',
                'controller_path' => 'App\\Http\\Controllers\\Site\\UserController',
                'controller_name' => 'UserController',
                'method_name' => 'edit',
            ),
            197 =>
            array (
                'id' => 389,
                'name' => 'App\\Http\\Controllers\\Site\\UserController@update',
                'controller_path' => 'App\\Http\\Controllers\\Site\\UserController',
                'controller_name' => 'UserController',
                'method_name' => 'update',
            ),
            198 =>
            array (
                'id' => 390,
                'name' => 'App\\Http\\Controllers\\Site\\UserController@editPassword',
                'controller_path' => 'App\\Http\\Controllers\\Site\\UserController',
                'controller_name' => 'UserController',
                'method_name' => 'editPassword',
            ),
            199 =>
            array (
                'id' => 391,
                'name' => 'App\\Http\\Controllers\\Site\\UserController@updatePassword',
                'controller_path' => 'App\\Http\\Controllers\\Site\\UserController',
                'controller_name' => 'UserController',
                'method_name' => 'updatePassword',
            ),
            200 =>
            array (
                'id' => 392,
                'name' => 'App\\Http\\Controllers\\Site\\UserController@setting',
                'controller_path' => 'App\\Http\\Controllers\\Site\\UserController',
                'controller_name' => 'UserController',
                'method_name' => 'setting',
            ),
            201 =>
            array (
                'id' => 393,
                'name' => 'App\\Http\\Controllers\\Site\\UserController@destroy',
                'controller_path' => 'App\\Http\\Controllers\\Site\\UserController',
                'controller_name' => 'UserController',
                'method_name' => 'destroy',
            ),
            202 =>
            array (
                'id' => 394,
                'name' => 'App\\Http\\Controllers\\Site\\WishlistController@index',
                'controller_path' => 'App\\Http\\Controllers\\Site\\WishlistController',
                'controller_name' => 'WishlistController',
                'method_name' => 'index',
            ),
            203 =>
            array (
                'id' => 395,
                'name' => 'App\\Http\\Controllers\\Site\\WishlistController@store',
                'controller_path' => 'App\\Http\\Controllers\\Site\\WishlistController',
                'controller_name' => 'WishlistController',
                'method_name' => 'store',
            ),
            204 =>
            array (
                'id' => 396,
                'name' => 'App\\Http\\Controllers\\Site\\WishlistController@destroy',
                'controller_path' => 'App\\Http\\Controllers\\Site\\WishlistController',
                'controller_name' => 'WishlistController',
                'method_name' => 'destroy',
            ),
            205 =>
            array (
                'id' => 397,
                'name' => 'App\\Http\\Controllers\\Site\\AddressController@index',
                'controller_path' => 'App\\Http\\Controllers\\Site\\AddressController',
                'controller_name' => 'AddressController',
                'method_name' => 'index',
            ),
            206 =>
            array (
                'id' => 398,
                'name' => 'App\\Http\\Controllers\\Site\\AddressController@create',
                'controller_path' => 'App\\Http\\Controllers\\Site\\AddressController',
                'controller_name' => 'AddressController',
                'method_name' => 'create',
            ),
            207 =>
            array (
                'id' => 399,
                'name' => 'App\\Http\\Controllers\\Site\\AddressController@store',
                'controller_path' => 'App\\Http\\Controllers\\Site\\AddressController',
                'controller_name' => 'AddressController',
                'method_name' => 'store',
            ),
            208 =>
            array (
                'id' => 400,
                'name' => 'App\\Http\\Controllers\\Site\\AddressController@edit',
                'controller_path' => 'App\\Http\\Controllers\\Site\\AddressController',
                'controller_name' => 'AddressController',
                'method_name' => 'edit',
            ),
            209 =>
            array (
                'id' => 401,
                'name' => 'App\\Http\\Controllers\\Site\\AddressController@update',
                'controller_path' => 'App\\Http\\Controllers\\Site\\AddressController',
                'controller_name' => 'AddressController',
                'method_name' => 'update',
            ),
            210 =>
            array (
                'id' => 402,
                'name' => 'App\\Http\\Controllers\\Site\\AddressController@destroy',
                'controller_path' => 'App\\Http\\Controllers\\Site\\AddressController',
                'controller_name' => 'AddressController',
                'method_name' => 'destroy',
            ),
            211 =>
            array (
                'id' => 403,
                'name' => 'App\\Http\\Controllers\\Site\\ReviewController@index',
                'controller_path' => 'App\\Http\\Controllers\\Site\\ReviewController',
                'controller_name' => 'ReviewController',
                'method_name' => 'index',
            ),
            212 =>
            array (
                'id' => 404,
                'name' => 'App\\Http\\Controllers\\Site\\CartController@index',
                'controller_path' => 'App\\Http\\Controllers\\Site\\CartController',
                'controller_name' => 'CartController',
                'method_name' => 'index',
            ),
            213 =>
            array (
                'id' => 405,
                'name' => 'App\\Http\\Controllers\\Site\\CartController@store',
                'controller_path' => 'App\\Http\\Controllers\\Site\\CartController',
                'controller_name' => 'CartController',
                'method_name' => 'store',
            ),
            214 =>
            array (
                'id' => 406,
                'name' => 'App\\Http\\Controllers\\Site\\CartController@reduceQuantity',
                'controller_path' => 'App\\Http\\Controllers\\Site\\CartController',
                'controller_name' => 'CartController',
                'method_name' => 'reduceQuantity',
            ),
            215 =>
            array (
                'id' => 407,
                'name' => 'App\\Http\\Controllers\\Site\\CartController@destroy',
                'controller_path' => 'App\\Http\\Controllers\\Site\\CartController',
                'controller_name' => 'CartController',
                'method_name' => 'destroy',
            ),
            216 =>
            array (
                'id' => 408,
                'name' => 'App\\Http\\Controllers\\Site\\OrderController@index',
                'controller_path' => 'App\\Http\\Controllers\\Site\\OrderController',
                'controller_name' => 'OrderController',
                'method_name' => 'index',
            ),
            217 =>
            array (
                'id' => 410,
                'name' => 'App\\Http\\Controllers\\Site\\CartController@destroySelected',
                'controller_path' => 'App\\Http\\Controllers\\Site\\CartController',
                'controller_name' => 'CartController',
                'method_name' => 'destroySelected',
            ),
            218 =>
            array (
                'id' => 411,
                'name' => 'App\\Http\\Controllers\\Site\\CartController@storeSelected',
                'controller_path' => 'App\\Http\\Controllers\\Site\\CartController',
                'controller_name' => 'CartController',
                'method_name' => 'storeSelected',
            ),
            219 =>
            array (
                'id' => 412,
                'name' => 'App\\Http\\Controllers\\Site\\CartController@checkCoupon',
                'controller_path' => 'App\\Http\\Controllers\\Site\\CartController',
                'controller_name' => 'CartController',
                'method_name' => 'checkCoupon',
            ),
            220 =>
            array (
                'id' => 413,
                'name' => 'Modules\\Shipping\\Http\\Controllers\\ShippingController@index',
                'controller_path' => 'Modules\\Shipping\\Http\\Controllers\\ShippingController',
                'controller_name' => 'ShippingController',
                'method_name' => 'index',
            ),
            221 =>
            array (
                'id' => 415,
                'name' => 'Modules\\Shipping\\Http\\Controllers\\ShippingController@store',
                'controller_path' => 'Modules\\Shipping\\Http\\Controllers\\ShippingController',
                'controller_name' => 'ShippingController',
                'method_name' => 'store',
            ),
            222 =>
            array (
                'id' => 419,
                'name' => 'App\\Http\\Controllers\\Site\\DashboardController@switchLanguage',
                'controller_path' => 'App\\Http\\Controllers\\Site\\DashboardController',
                'controller_name' => 'DashboardController',
                'method_name' => 'switchLanguage',
            ),
            223 =>
            array (
                'id' => 420,
                'name' => 'App\\Http\\Controllers\\Site\\OrderController@orderDetails',
                'controller_path' => 'App\\Http\\Controllers\\Site\\OrderController',
                'controller_name' => 'OrderController',
                'method_name' => 'orderDetails',
            ),
            224 =>
            array (
                'id' => 421,
                'name' => 'App\\Http\\Controllers\\Vendor\\ProductController@index',
                'controller_path' => 'App\\Http\\Controllers\\Vendor\\ProductController',
                'controller_name' => 'ProductController',
                'method_name' => 'index',
            ),
            225 =>
            array (
                'id' => 428,
                'name' => 'Modules\\Blog\\Http\\Controllers\\BlogCategoryController@index',
                'controller_path' => 'Modules\\Blog\\Http\\Controllers\\BlogCategoryController',
                'controller_name' => 'BlogCategoryController',
                'method_name' => 'index',
            ),
            226 =>
            array (
                'id' => 431,
                'name' => 'Modules\\Blog\\Http\\Controllers\\BlogCategoryController@delete',
                'controller_path' => 'Modules\\Blog\\Http\\Controllers\\BlogCategoryController',
                'controller_name' => 'BlogCategoryController',
                'method_name' => 'delete',
            ),
            227 =>
            array (
                'id' => 432,
                'name' => 'Modules\\Blog\\Http\\Controllers\\BlogController@index',
                'controller_path' => 'Modules\\Blog\\Http\\Controllers\\BlogController',
                'controller_name' => 'BlogController',
                'method_name' => 'index',
            ),
            228 =>
            array (
                'id' => 433,
                'name' => 'Modules\\Blog\\Http\\Controllers\\BlogController@create',
                'controller_path' => 'Modules\\Blog\\Http\\Controllers\\BlogController',
                'controller_name' => 'BlogController',
                'method_name' => 'create',
            ),
            229 =>
            array (
                'id' => 434,
                'name' => 'Modules\\Blog\\Http\\Controllers\\BlogController@edit',
                'controller_path' => 'Modules\\Blog\\Http\\Controllers\\BlogController',
                'controller_name' => 'BlogController',
                'method_name' => 'edit',
            ),
            230 =>
            array (
                'id' => 435,
                'name' => 'Modules\\Blog\\Http\\Controllers\\BlogController@delete',
                'controller_path' => 'Modules\\Blog\\Http\\Controllers\\BlogController',
                'controller_name' => 'BlogController',
                'method_name' => 'delete',
            ),
            231 =>
            array (
                'id' => 444,
                'name' => 'Modules\\CMS\\Http\\Controllers\\CMSController@index',
                'controller_path' => 'Modules\\CMS\\Http\\Controllers\\CMSController',
                'controller_name' => 'CMSController',
                'method_name' => 'index',
            ),
            232 =>
            array (
                'id' => 445,
                'name' => 'Modules\\CMS\\Http\\Controllers\\CMSController@create',
                'controller_path' => 'Modules\\CMS\\Http\\Controllers\\CMSController',
                'controller_name' => 'CMSController',
                'method_name' => 'create',
            ),
            233 =>
            array (
                'id' => 446,
                'name' => 'Modules\\CMS\\Http\\Controllers\\CMSController@edit',
                'controller_path' => 'Modules\\CMS\\Http\\Controllers\\CMSController',
                'controller_name' => 'CMSController',
                'method_name' => 'edit',
            ),
            234 =>
            array (
                'id' => 447,
                'name' => 'Modules\\CMS\\Http\\Controllers\\CMSController@delete',
                'controller_path' => 'Modules\\CMS\\Http\\Controllers\\CMSController',
                'controller_name' => 'CMSController',
                'method_name' => 'delete',
            ),
            235 =>
            array (
                'id' => 453,
                'name' => 'App\\Http\\Controllers\\Vendor\\ReviewController@index',
                'controller_path' => 'App\\Http\\Controllers\\Vendor\\ReviewController',
                'controller_name' => 'ReviewController',
                'method_name' => 'index',
            ),
            236 =>
            array (
                'id' => 454,
                'name' => 'App\\Http\\Controllers\\Vendor\\ReviewController@edit',
                'controller_path' => 'App\\Http\\Controllers\\Vendor\\ReviewController',
                'controller_name' => 'ReviewController',
                'method_name' => 'edit',
            ),
            237 =>
            array (
                'id' => 455,
                'name' => 'App\\Http\\Controllers\\Vendor\\ReviewController@view',
                'controller_path' => 'App\\Http\\Controllers\\Vendor\\ReviewController',
                'controller_name' => 'ReviewController',
                'method_name' => 'view',
            ),
            238 =>
            array (
                'id' => 456,
                'name' => 'App\\Http\\Controllers\\Vendor\\ReviewController@update',
                'controller_path' => 'App\\Http\\Controllers\\Vendor\\ReviewController',
                'controller_name' => 'ReviewController',
                'method_name' => 'update',
            ),
            239 =>
            array (
                'id' => 457,
                'name' => 'App\\Http\\Controllers\\Vendor\\ReviewController@destroy',
                'controller_path' => 'App\\Http\\Controllers\\Vendor\\ReviewController',
                'controller_name' => 'ReviewController',
                'method_name' => 'destroy',
            ),
            240 =>
            array (
                'id' => 458,
                'name' => 'App\\Http\\Controllers\\Vendor\\ReviewController@pdf',
                'controller_path' => 'App\\Http\\Controllers\\Vendor\\ReviewController',
                'controller_name' => 'ReviewController',
                'method_name' => 'pdf',
            ),
            241 =>
            array (
                'id' => 459,
                'name' => 'App\\Http\\Controllers\\Vendor\\ReviewController@csv',
                'controller_path' => 'App\\Http\\Controllers\\Vendor\\ReviewController',
                'controller_name' => 'ReviewController',
                'method_name' => 'csv',
            ),
            242 =>
            array (
                'id' => 460,
                'name' => 'App\\Http\\Controllers\\Site\\SiteController@fetch',
                'controller_path' => 'App\\Http\\Controllers\\Site\\SiteController',
                'controller_name' => 'SiteController',
                'method_name' => 'fetch',
            ),
            243 =>
            array (
                'id' => 461,
                'name' => 'App\\Http\\Controllers\\Site\\OrderController@store',
                'controller_path' => 'App\\Http\\Controllers\\Site\\OrderController',
                'controller_name' => 'OrderController',
                'method_name' => 'store',
            ),
            244 =>
            array (
                'id' => 462,
                'name' => 'App\\Http\\Controllers\\Site\\OrderController@confirmation',
                'controller_path' => 'App\\Http\\Controllers\\Site\\OrderController',
                'controller_name' => 'OrderController',
                'method_name' => 'confirmation',
            ),
            245 =>
            array (
                'id' => 463,
                'name' => 'App\\Http\\Controllers\\Site\\OrderController@checkOut',
                'controller_path' => 'App\\Http\\Controllers\\Site\\OrderController',
                'controller_name' => 'OrderController',
                'method_name' => 'checkOut',
            ),
            246 =>
            array (
                'id' => 464,
                'name' => 'App\\Http\\Controllers\\Site\\SiteController@updateReview',
                'controller_path' => 'App\\Http\\Controllers\\Site\\SiteController',
                'controller_name' => 'SiteController',
                'method_name' => 'updateReview',
            ),
            247 =>
            array (
                'id' => 465,
                'name' => 'App\\Http\\Controllers\\Site\\SiteController@deleteReview',
                'controller_path' => 'App\\Http\\Controllers\\Site\\SiteController',
                'controller_name' => 'SiteController',
                'method_name' => 'deleteReview',
            ),
            248 =>
            array (
                'id' => 466,
                'name' => 'App\\Http\\Controllers\\Site\\SiteController@filterReview',
                'controller_path' => 'App\\Http\\Controllers\\Site\\SiteController',
                'controller_name' => 'SiteController',
                'method_name' => 'filterReview',
            ),
            249 =>
            array (
                'id' => 467,
                'name' => 'App\\Http\\Controllers\\Site\\SiteController@blogDetails',
                'controller_path' => 'App\\Http\\Controllers\\Site\\SiteController',
                'controller_name' => 'SiteController',
                'method_name' => 'blogDetails',
            ),
            250 =>
            array (
                'id' => 468,
                'name' => 'App\\Http\\Controllers\\Site\\SiteController@blogCategory',
                'controller_path' => 'App\\Http\\Controllers\\Site\\SiteController',
                'controller_name' => 'SiteController',
                'method_name' => 'blogCategory',
            ),
            251 =>
            array (
                'id' => 469,
                'name' => 'App\\Http\\Controllers\\Site\\SiteController@page',
                'controller_path' => 'App\\Http\\Controllers\\Site\\SiteController',
                'controller_name' => 'SiteController',
                'method_name' => 'page',
            ),
            252 =>
            array (
                'id' => 471,
                'name' => 'App\\Http\\Controllers\\Site\\CartController@destroyAll',
                'controller_path' => 'App\\Http\\Controllers\\Site\\CartController',
                'controller_name' => 'CartController',
                'method_name' => 'destroyAll',
            ),
            253 =>
            array (
                'id' => 473,
                'name' => 'App\\Http\\Controllers\\Site\\SiteController@search',
                'controller_path' => 'App\\Http\\Controllers\\Site\\SiteController',
                'controller_name' => 'SiteController',
                'method_name' => 'search',
            ),
            254 =>
            array (
                'id' => 474,
                'name' => 'App\\Http\\Controllers\\Site\\CompareController@index',
                'controller_path' => 'App\\Http\\Controllers\\Site\\CompareController',
                'controller_name' => 'CompareController',
                'method_name' => 'index',
            ),
            255 =>
            array (
                'id' => 475,
                'name' => 'App\\Http\\Controllers\\Site\\CompareController@store',
                'controller_path' => 'App\\Http\\Controllers\\Site\\CompareController',
                'controller_name' => 'CompareController',
                'method_name' => 'store',
            ),
            256 =>
            array (
                'id' => 476,
                'name' => 'App\\Http\\Controllers\\Site\\CompareController@destroy',
                'controller_path' => 'App\\Http\\Controllers\\Site\\CompareController',
                'controller_name' => 'CompareController',
                'method_name' => 'destroy',
            ),
            257 =>
            array (
                'id' => 477,
                'name' => 'Modules\\Blog\\Http\\Controllers\\BlogCategoryController@store',
                'controller_path' => 'Modules\\Blog\\Http\\Controllers\\BlogCategoryController',
                'controller_name' => 'BlogCategoryController',
                'method_name' => 'store',
            ),
            258 =>
            array (
                'id' => 478,
                'name' => 'Modules\\Blog\\Http\\Controllers\\BlogCategoryController@update',
                'controller_path' => 'Modules\\Blog\\Http\\Controllers\\BlogCategoryController',
                'controller_name' => 'BlogCategoryController',
                'method_name' => 'update',
            ),
            259 =>
            array (
                'id' => 479,
                'name' => 'Modules\\Blog\\Http\\Controllers\\BlogController@store',
                'controller_path' => 'Modules\\Blog\\Http\\Controllers\\BlogController',
                'controller_name' => 'BlogController',
                'method_name' => 'store',
            ),
            260 =>
            array (
                'id' => 480,
                'name' => 'Modules\\Blog\\Http\\Controllers\\BlogController@update',
                'controller_path' => 'Modules\\Blog\\Http\\Controllers\\BlogController',
                'controller_name' => 'BlogController',
                'method_name' => 'update',
            ),
            261 =>
            array (
                'id' => 481,
                'name' => 'Modules\\CMS\\Http\\Controllers\\CMSController@store',
                'controller_path' => 'Modules\\CMS\\Http\\Controllers\\CMSController',
                'controller_name' => 'CMSController',
                'method_name' => 'store',
            ),
            262 =>
            array (
                'id' => 482,
                'name' => 'Modules\\CMS\\Http\\Controllers\\CMSController@update',
                'controller_path' => 'Modules\\CMS\\Http\\Controllers\\CMSController',
                'controller_name' => 'CMSController',
                'method_name' => 'update',
            ),
            263 =>
            array (
                'id' => 488,
                'name' => 'Modules\\MenuBuilder\\Http\\Controllers\\MenuBuilderController@index',
                'controller_path' => 'Modules\\MenuBuilder\\Http\\Controllers\\MenuBuilderController',
                'controller_name' => 'MenuBuilderController',
                'method_name' => 'index',
            ),
            264 =>
            array (
                'id' => 489,
                'name' => 'Modules\\MenuBuilder\\Http\\Controllers\\MenuController@createNewMenu',
                'controller_path' => 'Modules\\MenuBuilder\\Http\\Controllers\\MenuController',
                'controller_name' => 'MenuController',
                'method_name' => 'createNewMenu',
            ),
            265 =>
            array (
                'id' => 490,
                'name' => 'Modules\\MenuBuilder\\Http\\Controllers\\MenuController@delete',
                'controller_path' => 'Modules\\MenuBuilder\\Http\\Controllers\\MenuController',
                'controller_name' => 'MenuController',
                'method_name' => 'delete',
            ),
            266 =>
            array (
                'id' => 491,
                'name' => 'Modules\\MenuBuilder\\Http\\Controllers\\MenuController@addCustomMenu',
                'controller_path' => 'Modules\\MenuBuilder\\Http\\Controllers\\MenuController',
                'controller_name' => 'MenuController',
                'method_name' => 'addCustomMenu',
            ),
            267 =>
            array (
                'id' => 492,
                'name' => 'Modules\\MenuBuilder\\Http\\Controllers\\MenuController@update',
                'controller_path' => 'Modules\\MenuBuilder\\Http\\Controllers\\MenuController',
                'controller_name' => 'MenuController',
                'method_name' => 'update',
            ),
            268 =>
            array (
                'id' => 493,
                'name' => 'Modules\\MenuBuilder\\Http\\Controllers\\MenuController@generateMenuControl',
                'controller_path' => 'Modules\\MenuBuilder\\Http\\Controllers\\MenuController',
                'controller_name' => 'MenuController',
                'method_name' => 'generateMenuControl',
            ),
            269 =>
            array (
                'id' => 494,
                'name' => 'Modules\\MenuBuilder\\Http\\Controllers\\MenuController@deleteMenu',
                'controller_path' => 'Modules\\MenuBuilder\\Http\\Controllers\\MenuController',
                'controller_name' => 'MenuController',
                'method_name' => 'deleteMenu',
            ),
            270 =>
            array (
                'id' => 496,
                'name' => 'App\\Http\\Controllers\\Api\\User\\UserController@profile',
                'controller_path' => 'App\\Http\\Controllers\\Api\\User\\UserController',
                'controller_name' => 'UserController',
                'method_name' => 'profile',
            ),
            271 =>
            array (
                'id' => 497,
                'name' => 'App\\Http\\Controllers\\Api\\User\\UserController@update',
                'controller_path' => 'App\\Http\\Controllers\\Api\\User\\UserController',
                'controller_name' => 'UserController',
                'method_name' => 'update',
            ),
            272 =>
            array (
                'id' => 498,
                'name' => 'App\\Http\\Controllers\\Api\\User\\UserController@updatePassword',
                'controller_path' => 'App\\Http\\Controllers\\Api\\User\\UserController',
                'controller_name' => 'UserController',
                'method_name' => 'updatePassword',
            ),
            273 =>
            array (
                'id' => 499,
                'name' => 'App\\Http\\Controllers\\Api\\User\\UserController@destroy',
                'controller_path' => 'App\\Http\\Controllers\\Api\\User\\UserController',
                'controller_name' => 'UserController',
                'method_name' => 'destroy',
            ),
            274 =>
            array (
                'id' => 500,
                'name' => '\\App\\Http\\Controllers\\Api\\AuthController@login',
                'controller_path' => '\\App\\Http\\Controllers\\Api\\AuthController',
                'controller_name' => 'AuthController',
                'method_name' => 'login',
            ),
            275 =>
            array (
                'id' => 501,
                'name' => 'App\\Http\\Controllers\\Api\\User\\WishlistController@index',
                'controller_path' => 'App\\Http\\Controllers\\Api\\User\\WishlistController',
                'controller_name' => 'WishlistController',
                'method_name' => 'index',
            ),
            276 =>
            array (
                'id' => 502,
                'name' => 'App\\Http\\Controllers\\Api\\User\\WishlistController@destroy',
                'controller_path' => 'App\\Http\\Controllers\\Api\\User\\WishlistController',
                'controller_name' => 'WishlistController',
                'method_name' => 'destroy',
            ),
            277 =>
            array (
                'id' => 503,
                'name' => 'App\\Http\\Controllers\\Api\\User\\ReviewController@index',
                'controller_path' => 'App\\Http\\Controllers\\Api\\User\\ReviewController',
                'controller_name' => 'ReviewController',
                'method_name' => 'index',
            ),
            278 =>
            array (
                'id' => 504,
                'name' => '\\App\\Http\\Controllers\\Api\\AuthController@sendResetLinkEmail',
                'controller_path' => '\\App\\Http\\Controllers\\Api\\AuthController',
                'controller_name' => 'AuthController',
                'method_name' => 'sendResetLinkEmail',
            ),
            279 =>
            array (
                'id' => 505,
                'name' => '\\App\\Http\\Controllers\\Api\\AuthController@setPassword',
                'controller_path' => '\\App\\Http\\Controllers\\Api\\AuthController',
                'controller_name' => 'AuthController',
                'method_name' => 'setPassword',
            ),
            280 =>
            array (
                'id' => 508,
                'name' => 'App\\Http\\Controllers\\Api\\User\\AddressController@addresses',
                'controller_path' => 'App\\Http\\Controllers\\Api\\User\\AddressController',
                'controller_name' => 'AddressController',
                'method_name' => 'addresses',
            ),
            281 =>
            array (
                'id' => 509,
                'name' => 'App\\Http\\Controllers\\Api\\User\\AddressController@storeAddress',
                'controller_path' => 'App\\Http\\Controllers\\Api\\User\\AddressController',
                'controller_name' => 'AddressController',
                'method_name' => 'storeAddress',
            ),
            282 =>
            array (
                'id' => 510,
                'name' => 'App\\Http\\Controllers\\Api\\User\\AddressController@updateAddress',
                'controller_path' => 'App\\Http\\Controllers\\Api\\User\\AddressController',
                'controller_name' => 'AddressController',
                'method_name' => 'updateAddress',
            ),
            283 =>
            array (
                'id' => 511,
                'name' => 'App\\Http\\Controllers\\Api\\User\\AddressController@destroyAddress',
                'controller_path' => 'App\\Http\\Controllers\\Api\\User\\AddressController',
                'controller_name' => 'AddressController',
                'method_name' => 'destroyAddress',
            ),
            284 =>
            array (
                'id' => 512,
                'name' => 'App\\Http\\Controllers\\Api\\User\\OrderController@index',
                'controller_path' => 'App\\Http\\Controllers\\Api\\User\\OrderController',
                'controller_name' => 'OrderController',
                'method_name' => 'index',
            ),
            285 =>
            array (
                'id' => 514,
                'name' => 'App\\Http\\Controllers\\Api\\User\\OrderController@details',
                'controller_path' => 'App\\Http\\Controllers\\Api\\User\\OrderController',
                'controller_name' => 'OrderController',
                'method_name' => 'details',
            ),
            286 =>
            array (
                'id' => 515,
                'name' => '\\App\\Http\\Controllers\\Api\\AuthController@logout',
                'controller_path' => '\\App\\Http\\Controllers\\Api\\AuthController',
                'controller_name' => 'AuthController',
                'method_name' => 'logout',
            ),
            287 =>
            array (
                'id' => 516,
                'name' => 'App\\Http\\Controllers\\Api\\ProductController@index',
                'controller_path' => 'App\\Http\\Controllers\\Api\\ProductController',
                'controller_name' => 'ProductController',
                'method_name' => 'index',
            ),
            288 =>
            array (
                'id' => 519,
                'name' => 'App\\Http\\Controllers\\Api\\ProductController@search',
                'controller_path' => 'App\\Http\\Controllers\\Api\\ProductController',
                'controller_name' => 'ProductController',
                'method_name' => 'search',
            ),
            289 =>
            array (
                'id' => 520,
                'name' => 'App\\Http\\Controllers\\Api\\ProductController@detail',
                'controller_path' => 'App\\Http\\Controllers\\Api\\ProductController',
                'controller_name' => 'ProductController',
                'method_name' => 'detail',
            ),
            290 =>
            array (
                'id' => 524,
                'name' => 'App\\Http\\Controllers\\Api\\CategoryController@index',
                'controller_path' => 'App\\Http\\Controllers\\Api\\CategoryController',
                'controller_name' => 'CategoryController',
                'method_name' => 'index',
            ),
            291 =>
            array (
                'id' => 525,
                'name' => 'App\\Http\\Controllers\\Api\\CategoryController@store',
                'controller_path' => 'App\\Http\\Controllers\\Api\\CategoryController',
                'controller_name' => 'CategoryController',
                'method_name' => 'store',
            ),
            292 =>
            array (
                'id' => 526,
                'name' => 'App\\Http\\Controllers\\Api\\CategoryController@update',
                'controller_path' => 'App\\Http\\Controllers\\Api\\CategoryController',
                'controller_name' => 'CategoryController',
                'method_name' => 'update',
            ),
            293 =>
            array (
                'id' => 527,
                'name' => 'App\\Http\\Controllers\\Api\\CategoryController@detail',
                'controller_path' => 'App\\Http\\Controllers\\Api\\CategoryController',
                'controller_name' => 'CategoryController',
                'method_name' => 'detail',
            ),
            294 =>
            array (
                'id' => 528,
                'name' => 'App\\Http\\Controllers\\Api\\CategoryController@destroy',
                'controller_path' => 'App\\Http\\Controllers\\Api\\CategoryController',
                'controller_name' => 'CategoryController',
                'method_name' => 'destroy',
            ),
            295 =>
            array (
                'id' => 529,
                'name' => 'App\\Http\\Controllers\\Api\\User\\CategoryController@index',
                'controller_path' => 'App\\Http\\Controllers\\Api\\User\\CategoryController',
                'controller_name' => 'CategoryController',
                'method_name' => 'index',
            ),
            296 =>
            array (
                'id' => 531,
                'name' => 'App\\Http\\Controllers\\Api\\User\\BrandController@index',
                'controller_path' => 'App\\Http\\Controllers\\Api\\User\\BrandController',
                'controller_name' => 'BrandController',
                'method_name' => 'index',
            ),
            297 =>
            array (
                'id' => 532,
                'name' => 'App\\Http\\Controllers\\OrderStatusController@index',
                'controller_path' => 'App\\Http\\Controllers\\OrderStatusController',
                'controller_name' => 'OrderStatusController',
                'method_name' => 'index',
            ),
            298 =>
            array (
                'id' => 533,
                'name' => 'App\\Http\\Controllers\\OrderStatusController@store',
                'controller_path' => 'App\\Http\\Controllers\\OrderStatusController',
                'controller_name' => 'OrderStatusController',
                'method_name' => 'store',
            ),
            299 =>
            array (
                'id' => 534,
                'name' => 'App\\Http\\Controllers\\OrderStatusController@edit',
                'controller_path' => 'App\\Http\\Controllers\\OrderStatusController',
                'controller_name' => 'OrderStatusController',
                'method_name' => 'edit',
            ),
            300 =>
            array (
                'id' => 535,
                'name' => 'App\\Http\\Controllers\\OrderStatusController@update',
                'controller_path' => 'App\\Http\\Controllers\\OrderStatusController',
                'controller_name' => 'OrderStatusController',
                'method_name' => 'update',
            ),
            301 =>
            array (
                'id' => 536,
                'name' => 'App\\Http\\Controllers\\OrderStatusController@destroy',
                'controller_path' => 'App\\Http\\Controllers\\OrderStatusController',
                'controller_name' => 'OrderStatusController',
                'method_name' => 'destroy',
            ),
            302 =>
            array (
                'id' => 548,
                'name' => 'App\\Http\\Controllers\\AdminOrderController@index',
                'controller_path' => 'App\\Http\\Controllers\\AdminOrderController',
                'controller_name' => 'AdminOrderController',
                'method_name' => 'index',
            ),
            303 =>
            array (
                'id' => 549,
                'name' => 'App\\Http\\Controllers\\AdminOrderController@view',
                'controller_path' => 'App\\Http\\Controllers\\AdminOrderController',
                'controller_name' => 'AdminOrderController',
                'method_name' => 'view',
            ),
            304 =>
            array (
                'id' => 550,
                'name' => 'App\\Http\\Controllers\\AdminOrderController@changeStatus',
                'controller_path' => 'App\\Http\\Controllers\\AdminOrderController',
                'controller_name' => 'AdminOrderController',
                'method_name' => 'changeStatus',
            ),
            305 =>
            array (
                'id' => 551,
                'name' => 'App\\Http\\Controllers\\AdminOrderController@destroy',
                'controller_path' => 'App\\Http\\Controllers\\AdminOrderController',
                'controller_name' => 'AdminOrderController',
                'method_name' => 'destroy',
            ),
            306 =>
            array (
                'id' => 552,
                'name' => 'App\\Http\\Controllers\\AdminOrderController@pdf',
                'controller_path' => 'App\\Http\\Controllers\\AdminOrderController',
                'controller_name' => 'AdminOrderController',
                'method_name' => 'pdf',
            ),
            307 =>
            array (
                'id' => 553,
                'name' => 'App\\Http\\Controllers\\AdminOrderController@csv',
                'controller_path' => 'App\\Http\\Controllers\\AdminOrderController',
                'controller_name' => 'AdminOrderController',
                'method_name' => 'csv',
            ),
            308 =>
            array (
                'id' => 554,
                'name' => 'App\\Http\\Controllers\\Vendor\\VendorOrderController@index',
                'controller_path' => 'App\\Http\\Controllers\\Vendor\\VendorOrderController',
                'controller_name' => 'VendorOrderController',
                'method_name' => 'index',
            ),
            309 =>
            array (
                'id' => 555,
                'name' => 'App\\Http\\Controllers\\Vendor\\VendorOrderController@view',
                'controller_path' => 'App\\Http\\Controllers\\Vendor\\VendorOrderController',
                'controller_name' => 'VendorOrderController',
                'method_name' => 'view',
            ),
            310 =>
            array (
                'id' => 556,
                'name' => 'App\\Http\\Controllers\\Vendor\\VendorOrderController@changeStatus',
                'controller_path' => 'App\\Http\\Controllers\\Vendor\\VendorOrderController',
                'controller_name' => 'VendorOrderController',
                'method_name' => 'changeStatus',
            ),
            311 =>
            array (
                'id' => 557,
                'name' => 'App\\Http\\Controllers\\Vendor\\VendorOrderController@pdf',
                'controller_path' => 'App\\Http\\Controllers\\Vendor\\VendorOrderController',
                'controller_name' => 'VendorOrderController',
                'method_name' => 'pdf',
            ),
            312 =>
            array (
                'id' => 558,
                'name' => 'App\\Http\\Controllers\\Vendor\\VendorOrderController@csv',
                'controller_path' => 'App\\Http\\Controllers\\Vendor\\VendorOrderController',
                'controller_name' => 'VendorOrderController',
                'method_name' => 'csv',
            ),
            313 =>
            array (
                'id' => 561,
                'name' => 'App\\Http\\Controllers\\AdminOrderController@invoicePrint',
                'controller_path' => 'App\\Http\\Controllers\\AdminOrderController',
                'controller_name' => 'AdminOrderController',
                'method_name' => 'invoicePrint',
            ),
            314 =>
            array (
                'id' => 562,
                'name' => 'App\\Http\\Controllers\\Vendor\\VendorOrderController@invoicePrint',
                'controller_path' => 'App\\Http\\Controllers\\Vendor\\VendorOrderController',
                'controller_name' => 'VendorOrderController',
                'method_name' => 'invoicePrint',
            ),
            315 =>
            array (
                'id' => 563,
                'name' => 'App\\Http\\Controllers\\Site\\SellerController@index',
                'controller_path' => 'App\\Http\\Controllers\\Site\\SellerController',
                'controller_name' => 'SellerController',
                'method_name' => 'index',
            ),
            316 =>
            array (
                'id' => 565,
                'name' => 'App\\Http\\Controllers\\Site\\DashboardController@removeWelcome',
                'controller_path' => 'App\\Http\\Controllers\\Site\\DashboardController',
                'controller_name' => 'DashboardController',
                'method_name' => 'removeWelcome',
            ),
            317 =>
            array (
                'id' => 566,
                'name' => 'App\\Http\\Controllers\\Site\\OrderController@track',
                'controller_path' => 'App\\Http\\Controllers\\Site\\OrderController',
                'controller_name' => 'OrderController',
                'method_name' => 'track',
            ),
            318 =>
            array (
                'id' => 568,
                'name' => 'App\\Http\\Controllers\\UserController@wallet',
                'controller_path' => 'App\\Http\\Controllers\\UserController',
                'controller_name' => 'UserController',
                'method_name' => 'wallet',
            ),
            319 =>
            array (
                'id' => 569,
                'name' => 'Modules\\Commission\\Http\\Controllers\\CommissionController@index',
                'controller_path' => 'Modules\\Commission\\Http\\Controllers\\CommissionController',
                'controller_name' => 'CommissionController',
                'method_name' => 'index',
            ),
            320 =>
            array (
                'id' => 570,
                'name' => 'Modules\\Commission\\Http\\Controllers\\CommissionController@store',
                'controller_path' => 'Modules\\Commission\\Http\\Controllers\\CommissionController',
                'controller_name' => 'CommissionController',
                'method_name' => 'store',
            ),
            321 =>
            array (
                'id' => 571,
                'name' => 'App\\Http\\Controllers\\Site\\SellerController@index',
                'controller_path' => 'App\\Http\\Controllers\\Site\\SellerController',
                'controller_name' => 'SellerController',
                'method_name' => 'index',
            ),
            322 =>
            array (
                'id' => 573,
                'name' => 'App\\Http\\Controllers\\Site\\DashboardController@removeWelcome',
                'controller_path' => 'App\\Http\\Controllers\\Site\\DashboardController',
                'controller_name' => 'DashboardController',
                'method_name' => 'removeWelcome',
            ),
            323 =>
            array (
                'id' => 574,
                'name' => 'App\\Http\\Controllers\\AddonsMangerController@index',
                'controller_path' => 'App\\Http\\Controllers\\AddonsMangerController',
                'controller_name' => 'AddonsMangerController',
                'method_name' => 'index',
            ),
            324 =>
            array (
                'id' => 577,
                'name' => 'Modules\\Razorpay\\Http\\Controllers\\RazorpayController@store',
                'controller_path' => 'Modules\\Razorpay\\Http\\Controllers\\RazorpayController',
                'controller_name' => 'RazorpayController',
                'method_name' => 'store',
            ),
            325 =>
            array (
                'id' => 578,
                'name' => 'Modules\\Paystack\\Http\\Controllers\\PaystackController@store',
                'controller_path' => 'Modules\\Paystack\\Http\\Controllers\\PaystackController',
                'controller_name' => 'PaystackController',
                'method_name' => 'store',
            ),
            326 =>
            array (
                'id' => 579,
                'name' => 'Modules\\Paypal\\Http\\Controllers\\PaypalController@store',
                'controller_path' => 'Modules\\Paypal\\Http\\Controllers\\PaypalController',
                'controller_name' => 'PaypalController',
                'method_name' => 'store',
            ),
            327 =>
            array (
                'id' => 580,
                'name' => 'Modules\\Instamojo\\Http\\Controllers\\InstamojoController@store',
                'controller_path' => 'Modules\\Instamojo\\Http\\Controllers\\InstamojoController',
                'controller_name' => 'InstamojoController',
                'method_name' => 'store',
            ),
            328 =>
            array (
                'id' => 583,
                'name' => 'Modules\\Gateway\\Http\\Controllers\\GatewayController@paymentGateways',
                'controller_path' => 'Modules\\Gateway\\Http\\Controllers\\GatewayController',
                'controller_name' => 'GatewayController',
                'method_name' => 'paymentGateways',
            ),
            329 =>
            array (
                'id' => 584,
                'name' => 'Modules\\Gateway\\Http\\Controllers\\GatewayController@pay',
                'controller_path' => 'Modules\\Gateway\\Http\\Controllers\\GatewayController',
                'controller_name' => 'GatewayController',
                'method_name' => 'pay',
            ),
            330 =>
            array (
                'id' => 585,
                'name' => 'Modules\\Gateway\\Http\\Controllers\\GatewayController@makePayment',
                'controller_path' => 'Modules\\Gateway\\Http\\Controllers\\GatewayController',
                'controller_name' => 'GatewayController',
                'method_name' => 'makePayment',
            ),
            331 =>
            array (
                'id' => 586,
                'name' => 'Modules\\Gateway\\Http\\Controllers\\GatewayController@paymentCallback',
                'controller_path' => 'Modules\\Gateway\\Http\\Controllers\\GatewayController',
                'controller_name' => 'GatewayController',
                'method_name' => 'paymentCallback',
            ),
            332 =>
            array (
                'id' => 587,
                'name' => 'Modules\\Gateway\\Http\\Controllers\\GatewayController@paymentCancelled',
                'controller_path' => 'Modules\\Gateway\\Http\\Controllers\\GatewayController',
                'controller_name' => 'GatewayController',
                'method_name' => 'paymentCancelled',
            ),
            333 =>
            array (
                'id' => 588,
                'name' => 'Modules\\Gateway\\Http\\Controllers\\GatewayController@paymentHook',
                'controller_path' => 'Modules\\Gateway\\Http\\Controllers\\GatewayController',
                'controller_name' => 'GatewayController',
                'method_name' => 'paymentHook',
            ),
            334 =>
            array (
                'id' => 589,
                'name' => 'Modules\\Gateway\\Http\\Controllers\\GatewayController@enableModule',
                'controller_path' => 'Modules\\Gateway\\Http\\Controllers\\GatewayController',
                'controller_name' => 'GatewayController',
                'method_name' => 'enableModule',
            ),
            335 =>
            array (
                'id' => 590,
                'name' => 'Modules\\Gateway\\Http\\Controllers\\GatewayController@disableModule',
                'controller_path' => 'Modules\\Gateway\\Http\\Controllers\\GatewayController',
                'controller_name' => 'GatewayController',
                'method_name' => 'disableModule',
            ),
            336 =>
            array (
                'id' => 591,
                'name' => 'Modules\\Coinpayment\\Http\\Controllers\\CoinpaymentController@store',
                'controller_path' => 'Modules\\Coinpayment\\Http\\Controllers\\CoinpaymentController',
                'controller_name' => 'CoinpaymentController',
                'method_name' => 'store',
            ),
            337 =>
            array (
                'id' => 592,
                'name' => 'Modules\\Coinbase\\Http\\Controllers\\CoinbaseController@store',
                'controller_path' => 'Modules\\Coinbase\\Http\\Controllers\\CoinbaseController',
                'controller_name' => 'CoinbaseController',
                'method_name' => 'store',
            ),
            338 =>
            array (
                'id' => 593,
                'name' => 'Modules\\CMS\\Http\\Controllers\\ThemeOptionController@list',
                'controller_path' => 'Modules\\CMS\\Http\\Controllers\\ThemeOptionController',
                'controller_name' => 'ThemeOptionController',
                'method_name' => 'list',
            ),
            339 =>
            array (
                'id' => 594,
                'name' => 'Modules\\CMS\\Http\\Controllers\\ThemeOptionController@store',
                'controller_path' => 'Modules\\CMS\\Http\\Controllers\\ThemeOptionController',
                'controller_name' => 'ThemeOptionController',
                'method_name' => 'store',
            ),
            340 =>
            array (
                'id' => 595,
                'name' => 'Modules\\Stripe\\Http\\Controllers\\StripeController@store',
                'controller_path' => 'Modules\\Stripe\\Http\\Controllers\\StripeController',
                'controller_name' => 'StripeController',
                'method_name' => 'store',
            ),
            341 =>
            array (
                'id' => 597,
                'name' => 'Modules\\Refund\\Http\\Controllers\\RefundController@index',
                'controller_path' => 'Modules\\Refund\\Http\\Controllers\\RefundController',
                'controller_name' => 'RefundController',
                'method_name' => 'index',
            ),
            342 =>
            array (
                'id' => 598,
                'name' => 'Modules\\Refund\\Http\\Controllers\\RefundController@edit',
                'controller_path' => 'Modules\\Refund\\Http\\Controllers\\RefundController',
                'controller_name' => 'RefundController',
                'method_name' => 'edit',
            ),
            343 =>
            array (
                'id' => 599,
                'name' => 'Modules\\Refund\\Http\\Controllers\\RefundController@update',
                'controller_path' => 'Modules\\Refund\\Http\\Controllers\\RefundController',
                'controller_name' => 'RefundController',
                'method_name' => 'update',
            ),
            344 =>
            array (
                'id' => 600,
                'name' => 'App\\Http\\Controllers\\TransactionController@index',
                'controller_path' => 'App\\Http\\Controllers\\TransactionController',
                'controller_name' => 'TransactionController',
                'method_name' => 'index',
            ),
            345 =>
            array (
                'id' => 601,
                'name' => 'App\\Http\\Controllers\\TransactionController@edit',
                'controller_path' => 'App\\Http\\Controllers\\TransactionController',
                'controller_name' => 'TransactionController',
                'method_name' => 'edit',
            ),
            346 =>
            array (
                'id' => 602,
                'name' => 'App\\Http\\Controllers\\TransactionController@update',
                'controller_path' => 'App\\Http\\Controllers\\TransactionController',
                'controller_name' => 'TransactionController',
                'method_name' => 'update',
            ),
            347 =>
            array (
                'id' => 603,
                'name' => 'App\\Http\\Controllers\\TransactionController@pdf',
                'controller_path' => 'App\\Http\\Controllers\\TransactionController',
                'controller_name' => 'TransactionController',
                'method_name' => 'pdf',
            ),
            348 =>
            array (
                'id' => 604,
                'name' => 'App\\Http\\Controllers\\TransactionController@csv',
                'controller_path' => 'App\\Http\\Controllers\\TransactionController',
                'controller_name' => 'TransactionController',
                'method_name' => 'csv',
            ),
            349 =>
            array (
                'id' => 605,
                'name' => 'App\\Http\\Controllers\\WithdrawalController@index',
                'controller_path' => 'App\\Http\\Controllers\\WithdrawalController',
                'controller_name' => 'WithdrawalController',
                'method_name' => 'index',
            ),
            350 =>
            array (
                'id' => 606,
                'name' => 'App\\Http\\Controllers\\WithdrawalController@update',
                'controller_path' => 'App\\Http\\Controllers\\WithdrawalController',
                'controller_name' => 'WithdrawalController',
                'method_name' => 'update',
            ),
            351 =>
            array (
                'id' => 613,
                'name' => 'Modules\\Refund\\Http\\Controllers\\RefundController@pdf',
                'controller_path' => 'Modules\\Refund\\Http\\Controllers\\RefundController',
                'controller_name' => 'RefundController',
                'method_name' => 'pdf',
            ),
            352 =>
            array (
                'id' => 614,
                'name' => 'Modules\\Refund\\Http\\Controllers\\RefundController@csv',
                'controller_path' => 'Modules\\Refund\\Http\\Controllers\\RefundController',
                'controller_name' => 'RefundController',
                'method_name' => 'csv',
            ),
            353 =>
            array (
                'id' => 620,
                'name' => 'App\\Http\\Controllers\\WithdrawalController@edit',
                'controller_path' => 'App\\Http\\Controllers\\WithdrawalController',
                'controller_name' => 'WithdrawalController',
                'method_name' => 'edit',
            ),
            354 =>
            array (
                'id' => 621,
                'name' => 'App\\Http\\Controllers\\WithdrawalController@pdf',
                'controller_path' => 'App\\Http\\Controllers\\WithdrawalController',
                'controller_name' => 'WithdrawalController',
                'method_name' => 'pdf',
            ),
            355 =>
            array (
                'id' => 622,
                'name' => 'App\\Http\\Controllers\\WithdrawalController@csv',
                'controller_path' => 'App\\Http\\Controllers\\WithdrawalController',
                'controller_name' => 'WithdrawalController',
                'method_name' => 'csv',
            ),
            356 =>
            array (
                'id' => 625,
                'name' => 'Modules\\Popup\\Http\\Controllers\\PopupController@index',
                'controller_path' => 'Modules\\Popup\\Http\\Controllers\\PopupController',
                'controller_name' => 'PopupController',
                'method_name' => 'index',
            ),
            357 =>
            array (
                'id' => 626,
                'name' => 'Modules\\Popup\\Http\\Controllers\\PopupController@create',
                'controller_path' => 'Modules\\Popup\\Http\\Controllers\\PopupController',
                'controller_name' => 'PopupController',
                'method_name' => 'create',
            ),
            358 =>
            array (
                'id' => 627,
                'name' => 'Modules\\Popup\\Http\\Controllers\\PopupController@store',
                'controller_path' => 'Modules\\Popup\\Http\\Controllers\\PopupController',
                'controller_name' => 'PopupController',
                'method_name' => 'store',
            ),
            359 =>
            array (
                'id' => 628,
                'name' => 'Modules\\Popup\\Http\\Controllers\\PopupController@show',
                'controller_path' => 'Modules\\Popup\\Http\\Controllers\\PopupController',
                'controller_name' => 'PopupController',
                'method_name' => 'show',
            ),
            360 =>
            array (
                'id' => 629,
                'name' => 'Modules\\Popup\\Http\\Controllers\\PopupController@edit',
                'controller_path' => 'Modules\\Popup\\Http\\Controllers\\PopupController',
                'controller_name' => 'PopupController',
                'method_name' => 'edit',
            ),
            361 =>
            array (
                'id' => 630,
                'name' => 'Modules\\Popup\\Http\\Controllers\\PopupController@update',
                'controller_path' => 'Modules\\Popup\\Http\\Controllers\\PopupController',
                'controller_name' => 'PopupController',
                'method_name' => 'update',
            ),
            362 =>
            array (
                'id' => 631,
                'name' => 'Modules\\Popup\\Http\\Controllers\\PopupController@destroy',
                'controller_path' => 'Modules\\Popup\\Http\\Controllers\\PopupController',
                'controller_name' => 'PopupController',
                'method_name' => 'destroy',
            ),
            363 =>
            array (
                'id' => 632,
                'name' => 'App\\Http\\Controllers\\Api\\User\\OrderController@store',
                'controller_path' => 'App\\Http\\Controllers\\Api\\User\\OrderController',
                'controller_name' => 'OrderController',
                'method_name' => 'store',
            ),
            364 =>
            array (
                'id' => 633,
                'name' => 'App\\Http\\Controllers\\Api\\User\\OrderController@checkoutPayment',
                'controller_path' => 'App\\Http\\Controllers\\Api\\User\\OrderController',
                'controller_name' => 'OrderController',
                'method_name' => 'checkoutPayment',
            ),
            365 =>
            array (
                'id' => 634,
                'name' => 'App\\Http\\Controllers\\Api\\User\\OrderController@checkOut',
                'controller_path' => 'App\\Http\\Controllers\\Api\\User\\OrderController',
                'controller_name' => 'OrderController',
                'method_name' => 'checkOut',
            ),
            366 =>
            array (
                'id' => 635,
                'name' => 'App\\Http\\Controllers\\Api\\User\\CartController@index',
                'controller_path' => 'App\\Http\\Controllers\\Api\\User\\CartController',
                'controller_name' => 'CartController',
                'method_name' => 'index',
            ),
            367 =>
            array (
                'id' => 636,
                'name' => 'App\\Http\\Controllers\\Api\\User\\CartController@store',
                'controller_path' => 'App\\Http\\Controllers\\Api\\User\\CartController',
                'controller_name' => 'CartController',
                'method_name' => 'store',
            ),
            368 =>
            array (
                'id' => 637,
                'name' => 'App\\Http\\Controllers\\Api\\User\\CartController@reduceQuantity',
                'controller_path' => 'App\\Http\\Controllers\\Api\\User\\CartController',
                'controller_name' => 'CartController',
                'method_name' => 'reduceQuantity',
            ),
            369 =>
            array (
                'id' => 638,
                'name' => 'App\\Http\\Controllers\\Api\\User\\CartController@destroy',
                'controller_path' => 'App\\Http\\Controllers\\Api\\User\\CartController',
                'controller_name' => 'CartController',
                'method_name' => 'destroy',
            ),
            370 =>
            array (
                'id' => 639,
                'name' => 'App\\Http\\Controllers\\Api\\User\\CartController@destroySelected',
                'controller_path' => 'App\\Http\\Controllers\\Api\\User\\CartController',
                'controller_name' => 'CartController',
                'method_name' => 'destroySelected',
            ),
            371 =>
            array (
                'id' => 640,
                'name' => 'App\\Http\\Controllers\\Api\\User\\CartController@storeSelected',
                'controller_path' => 'App\\Http\\Controllers\\Api\\User\\CartController',
                'controller_name' => 'CartController',
                'method_name' => 'storeSelected',
            ),
            372 =>
            array (
                'id' => 641,
                'name' => 'App\\Http\\Controllers\\Api\\User\\CartController@destroyAll',
                'controller_path' => 'App\\Http\\Controllers\\Api\\User\\CartController',
                'controller_name' => 'CartController',
                'method_name' => 'destroyAll',
            ),
            373 =>
            array (
                'id' => 642,
                'name' => 'App\\Http\\Controllers\\Api\\User\\CartController@checkCoupon',
                'controller_path' => 'App\\Http\\Controllers\\Api\\User\\CartController',
                'controller_name' => 'CartController',
                'method_name' => 'checkCoupon',
            ),
            374 =>
            array (
                'id' => 643,
                'name' => 'App\\Http\\Controllers\\Site\\OrderController@orderPaid',
                'controller_path' => 'App\\Http\\Controllers\\Site\\OrderController',
                'controller_name' => 'OrderController',
                'method_name' => 'orderPaid',
            ),
            375 =>
            array (
                'id' => 644,
                'name' => 'App\\Http\\Controllers\\Site\\SiteController@brandProducts',
                'controller_path' => 'App\\Http\\Controllers\\Site\\SiteController',
                'controller_name' => 'SiteController',
                'method_name' => 'brandProducts',
            ),
            376 =>
            array (
                'id' => 646,
                'name' => 'Modules\\Coinbase\\Http\\Controllers\\CoinbaseController@edit',
                'controller_path' => 'Modules\\Coinbase\\Http\\Controllers\\CoinbaseController',
                'controller_name' => 'CoinbaseController',
                'method_name' => 'edit',
            ),
            377 =>
            array (
                'id' => 647,
                'name' => 'Modules\\Coinpayment\\Http\\Controllers\\CoinpaymentController@edit',
                'controller_path' => 'Modules\\Coinpayment\\Http\\Controllers\\CoinpaymentController',
                'controller_name' => 'CoinpaymentController',
                'method_name' => 'edit',
            ),
            378 =>
            array (
                'id' => 657,
                'name' => 'Modules\\Instamojo\\Http\\Controllers\\InstamojoController@edit',
                'controller_path' => 'Modules\\Instamojo\\Http\\Controllers\\InstamojoController',
                'controller_name' => 'InstamojoController',
                'method_name' => 'edit',
            ),
            379 =>
            array (
                'id' => 658,
                'name' => 'Modules\\Paypal\\Http\\Controllers\\PaypalController@edit',
                'controller_path' => 'Modules\\Paypal\\Http\\Controllers\\PaypalController',
                'controller_name' => 'PaypalController',
                'method_name' => 'edit',
            ),
            380 =>
            array (
                'id' => 659,
                'name' => 'Modules\\Paystack\\Http\\Controllers\\PaystackController@edit',
                'controller_path' => 'Modules\\Paystack\\Http\\Controllers\\PaystackController',
                'controller_name' => 'PaystackController',
                'method_name' => 'edit',
            ),
            381 =>
            array (
                'id' => 660,
                'name' => 'Modules\\Razorpay\\Http\\Controllers\\RazorpayController@edit',
                'controller_path' => 'Modules\\Razorpay\\Http\\Controllers\\RazorpayController',
                'controller_name' => 'RazorpayController',
                'method_name' => 'edit',
            ),
            382 =>
            array (
                'id' => 661,
                'name' => 'Modules\\Stripe\\Http\\Controllers\\StripeController@edit',
                'controller_path' => 'Modules\\Stripe\\Http\\Controllers\\StripeController',
                'controller_name' => 'StripeController',
                'method_name' => 'edit',
            ),
            383 =>
            array (
                'id' => 662,
                'name' => 'Modules\\Popup\\Http\\Controllers\\PopupController@pdf',
                'controller_path' => 'Modules\\Popup\\Http\\Controllers\\PopupController',
                'controller_name' => 'PopupController',
                'method_name' => 'pdf',
            ),
            384 =>
            array (
                'id' => 663,
                'name' => 'Modules\\Popup\\Http\\Controllers\\PopupController@csv',
                'controller_path' => 'Modules\\Popup\\Http\\Controllers\\PopupController',
                'controller_name' => 'PopupController',
                'method_name' => 'csv',
            ),
            385 =>
            array (
                'id' => 679,
                'name' => 'App\\Http\\Controllers\\Api\\User\\CartController@getStock',
                'controller_path' => 'App\\Http\\Controllers\\Api\\User\\CartController',
                'controller_name' => 'CartController',
                'method_name' => 'getStock',
            ),
            386 =>
            array (
                'id' => 680,
                'name' => 'App\\Http\\Controllers\\PreferenceController@password',
                'controller_path' => 'App\\Http\\Controllers\\PreferenceController',
                'controller_name' => 'PreferenceController',
                'method_name' => 'password',
            ),
            387 =>
            array (
                'id' => 681,
                'name' => 'App\\Http\\Controllers\\Site\\LoginController@showResetForm',
                'controller_path' => 'App\\Http\\Controllers\\Site\\LoginController',
                'controller_name' => 'LoginController',
                'method_name' => 'showResetForm',
            ),
            388 =>
            array (
                'id' => 682,
                'name' => 'App\\Http\\Controllers\\Site\\LoginController@setPassword',
                'controller_path' => 'App\\Http\\Controllers\\Site\\LoginController',
                'controller_name' => 'LoginController',
                'method_name' => 'setPassword',
            ),
            389 =>
            array (
                'id' => 683,
                'name' => 'App\\Http\\Controllers\\Site\\LoginController@sendResetLinkEmail',
                'controller_path' => 'App\\Http\\Controllers\\Site\\LoginController',
                'controller_name' => 'LoginController',
                'method_name' => 'sendResetLinkEmail',
            ),
            390 =>
            array (
                'id' => 685,
                'name' => 'App\\Http\\Controllers\\Site\\AddressController@checkDefault',
                'controller_path' => 'App\\Http\\Controllers\\Site\\AddressController',
                'controller_name' => 'AddressController',
                'method_name' => 'checkDefault',
            ),
            391 =>
            array (
                'id' => 686,
                'name' => '\\App\\Http\\Controllers\\Api\\AuthController@signUp',
                'controller_path' => '\\App\\Http\\Controllers\\Api\\AuthController',
                'controller_name' => 'AuthController',
                'method_name' => 'signUp',
            ),
            392 =>
            array (
                'id' => 687,
                'name' => 'App\\Http\\Controllers\\Site\\SiteController@quickView',
                'controller_path' => 'App\\Http\\Controllers\\Site\\SiteController',
                'controller_name' => 'SiteController',
                'method_name' => 'quickView',
            ),
            393 =>
            array (
                'id' => 690,
                'name' => 'Modules\\MediaManager\\Http\\Controllers\\MediaManagerController@create',
                'controller_path' => 'Modules\\MediaManager\\Http\\Controllers\\MediaManagerController',
                'controller_name' => 'MediaManagerController',
                'method_name' => 'create',
            ),
            394 =>
            array (
                'id' => 691,
                'name' => 'Modules\\MediaManager\\Http\\Controllers\\MediaManagerController@store',
                'controller_path' => 'Modules\\MediaManager\\Http\\Controllers\\MediaManagerController',
                'controller_name' => 'MediaManagerController',
                'method_name' => 'store',
            ),
            395 =>
            array (
                'id' => 692,
                'name' => 'Modules\\MediaManager\\Http\\Controllers\\MediaManagerController@upload',
                'controller_path' => 'Modules\\MediaManager\\Http\\Controllers\\MediaManagerController',
                'controller_name' => 'MediaManagerController',
                'method_name' => 'upload',
            ),
            396 =>
            array (
                'id' => 693,
                'name' => 'Modules\\MediaManager\\Http\\Controllers\\MediaManagerController@uploadedFiles',
                'controller_path' => 'Modules\\MediaManager\\Http\\Controllers\\MediaManagerController',
                'controller_name' => 'MediaManagerController',
                'method_name' => 'uploadedFiles',
            ),
            397 =>
            array (
                'id' => 694,
                'name' => 'Modules\\MediaManager\\Http\\Controllers\\MediaManagerController@sortFiles',
                'controller_path' => 'Modules\\MediaManager\\Http\\Controllers\\MediaManagerController',
                'controller_name' => 'MediaManagerController',
                'method_name' => 'sortFiles',
            ),
            398 =>
            array (
                'id' => 695,
                'name' => 'Modules\\MediaManager\\Http\\Controllers\\MediaManagerController@paginateFiles',
                'controller_path' => 'Modules\\MediaManager\\Http\\Controllers\\MediaManagerController',
                'controller_name' => 'MediaManagerController',
                'method_name' => 'paginateFiles',
            ),
            399 =>
            array (
                'id' => 696,
                'name' => 'Modules\\MediaManager\\Http\\Controllers\\MediaManagerController@download',
                'controller_path' => 'Modules\\MediaManager\\Http\\Controllers\\MediaManagerController',
                'controller_name' => 'MediaManagerController',
                'method_name' => 'download',
            ),
            400 =>
            array (
                'id' => 698,
                'name' => 'Modules\\MediaManager\\Http\\Controllers\\MediaManagerController@paginateData',
                'controller_path' => 'Modules\\MediaManager\\Http\\Controllers\\MediaManagerController',
                'controller_name' => 'MediaManagerController',
                'method_name' => 'paginateData',
            ),
            401 =>
            array (
                'id' => 699,
                'name' => 'Modules\\Report\\Http\\Controllers\\ReportController@index',
                'controller_path' => 'Modules\\Report\\Http\\Controllers\\ReportController',
                'controller_name' => 'ReportController',
                'method_name' => 'index',
            ),
            402 =>
            array (
                'id' => 700,
                'name' => 'App\\Http\\Controllers\\Api\\CountryController@index',
                'controller_path' => 'App\\Http\\Controllers\\Api\\CountryController',
                'controller_name' => 'CountryController',
                'method_name' => 'index',
            ),
            403 =>
            array (
                'id' => 703,
                'name' => 'App\\Http\\Controllers\\Site\\AddressController@makeDefault',
                'controller_path' => 'App\\Http\\Controllers\\Site\\AddressController',
                'controller_name' => 'AddressController',
                'method_name' => 'makeDefault',
            ),
            404 =>
            array (
                'id' => 704,
                'name' => 'App\\Http\\Controllers\\Site\\ReviewController@destroy',
                'controller_path' => 'App\\Http\\Controllers\\Site\\ReviewController',
                'controller_name' => 'ReviewController',
                'method_name' => 'destroy',
            ),
            405 =>
            array (
                'id' => 741,
                'name' => 'Modules\\Newsletter\\Http\\Controllers\\SubscriberController@index',
                'controller_path' => 'Modules\\Newsletter\\Http\\Controllers\\SubscriberController',
                'controller_name' => 'SubscriberController',
                'method_name' => 'index',
            ),
            406 =>
            array (
                'id' => 742,
                'name' => 'Modules\\Newsletter\\Http\\Controllers\\SubscriberController@edit',
                'controller_path' => 'Modules\\Newsletter\\Http\\Controllers\\SubscriberController',
                'controller_name' => 'SubscriberController',
                'method_name' => 'edit',
            ),
            407 =>
            array (
                'id' => 743,
                'name' => 'Modules\\Newsletter\\Http\\Controllers\\SubscriberController@update',
                'controller_path' => 'Modules\\Newsletter\\Http\\Controllers\\SubscriberController',
                'controller_name' => 'SubscriberController',
                'method_name' => 'update',
            ),
            408 =>
            array (
                'id' => 744,
                'name' => 'Modules\\Newsletter\\Http\\Controllers\\SubscriberController@destroy',
                'controller_path' => 'Modules\\Newsletter\\Http\\Controllers\\SubscriberController',
                'controller_name' => 'SubscriberController',
                'method_name' => 'destroy',
            ),
            409 =>
            array (
                'id' => 745,
                'name' => 'Modules\\Newsletter\\Http\\Controllers\\SubscriberController@pdf',
                'controller_path' => 'Modules\\Newsletter\\Http\\Controllers\\SubscriberController',
                'controller_name' => 'SubscriberController',
                'method_name' => 'pdf',
            ),
            410 =>
            array (
                'id' => 746,
                'name' => 'Modules\\Newsletter\\Http\\Controllers\\SubscriberController@csv',
                'controller_path' => 'Modules\\Newsletter\\Http\\Controllers\\SubscriberController',
                'controller_name' => 'SubscriberController',
                'method_name' => 'csv',
            ),
            411 =>
            array (
                'id' => 747,
                'name' => 'Modules\\Newsletter\\Http\\Controllers\\SubscriberController@store',
                'controller_path' => 'Modules\\Newsletter\\Http\\Controllers\\SubscriberController',
                'controller_name' => 'SubscriberController',
                'method_name' => 'store',
            ),
            412 =>
            array (
                'id' => 750,
                'name' => 'App\\Http\\Controllers\\DashboardController@getUserData',
                'controller_path' => 'App\\Http\\Controllers\\DashboardController',
                'controller_name' => 'DashboardController',
                'method_name' => 'getUserData',
            ),
            413 =>
            array (
                'id' => 751,
                'name' => 'App\\Http\\Controllers\\DashboardController@getProductData',
                'controller_path' => 'App\\Http\\Controllers\\DashboardController',
                'controller_name' => 'DashboardController',
                'method_name' => 'getProductData',
            ),
            414 =>
            array (
                'id' => 752,
                'name' => 'App\\Http\\Controllers\\DashboardController@mostSoldProducts',
                'controller_path' => 'App\\Http\\Controllers\\DashboardController',
                'controller_name' => 'DashboardController',
                'method_name' => 'mostSoldProducts',
            ),
            415 =>
            array (
                'id' => 753,
                'name' => 'App\\Http\\Controllers\\DashboardController@mostActiveUsers',
                'controller_path' => 'App\\Http\\Controllers\\DashboardController',
                'controller_name' => 'DashboardController',
                'method_name' => 'mostActiveUsers',
            ),
            416 =>
            array (
                'id' => 754,
                'name' => 'App\\Http\\Controllers\\DashboardController@vendorStats',
                'controller_path' => 'App\\Http\\Controllers\\DashboardController',
                'controller_name' => 'DashboardController',
                'method_name' => 'vendorStats',
            ),
            417 =>
            array (
                'id' => 755,
                'name' => 'App\\Http\\Controllers\\DashboardController@salesOfTheMonth',
                'controller_path' => 'App\\Http\\Controllers\\DashboardController',
                'controller_name' => 'DashboardController',
                'method_name' => 'salesOfTheMonth',
            ),
            418 =>
            array (
                'id' => 758,
                'name' => 'App\\Http\\Controllers\\Vendor\\ProductController@edit',
                'controller_path' => 'App\\Http\\Controllers\\Vendor\\ProductController',
                'controller_name' => 'ProductController',
                'method_name' => 'edit',
            ),
            419 =>
            array (
                'id' => 760,
                'name' => 'App\\Http\\Controllers\\Vendor\\ProductController@search',
                'controller_path' => 'App\\Http\\Controllers\\Vendor\\ProductController',
                'controller_name' => 'ProductController',
                'method_name' => 'search',
            ),
            420 =>
            array (
                'id' => 766,
                'name' => 'App\\Http\\Controllers\\Vendor\\WithdrawalController@index',
                'controller_path' => 'App\\Http\\Controllers\\Vendor\\WithdrawalController',
                'controller_name' => 'WithdrawalController',
                'method_name' => 'index',
            ),
            421 =>
            array (
                'id' => 767,
                'name' => 'App\\Http\\Controllers\\Vendor\\WithdrawalController@setting',
                'controller_path' => 'App\\Http\\Controllers\\Vendor\\WithdrawalController',
                'controller_name' => 'WithdrawalController',
                'method_name' => 'setting',
            ),
            422 =>
            array (
                'id' => 768,
                'name' => 'App\\Http\\Controllers\\Vendor\\WithdrawalController@withdraw',
                'controller_path' => 'App\\Http\\Controllers\\Vendor\\WithdrawalController',
                'controller_name' => 'WithdrawalController',
                'method_name' => 'withdraw',
            ),
            423 =>
            array (
                'id' => 769,
                'name' => 'App\\Http\\Controllers\\Vendor\\WithdrawalController@pdf',
                'controller_path' => 'App\\Http\\Controllers\\Vendor\\WithdrawalController',
                'controller_name' => 'WithdrawalController',
                'method_name' => 'pdf',
            ),
            424 =>
            array (
                'id' => 770,
                'name' => 'App\\Http\\Controllers\\Vendor\\WithdrawalController@csv',
                'controller_path' => 'App\\Http\\Controllers\\Vendor\\WithdrawalController',
                'controller_name' => 'WithdrawalController',
                'method_name' => 'csv',
            ),
            425 =>
            array (
                'id' => 771,
                'name' => 'App\\Http\\Controllers\\Vendor\\DashboardController@getUserData',
                'controller_path' => 'App\\Http\\Controllers\\Vendor\\DashboardController',
                'controller_name' => 'DashboardController',
                'method_name' => 'getUserData',
            ),
            426 =>
            array (
                'id' => 772,
                'name' => 'App\\Http\\Controllers\\Vendor\\DashboardController@getProductData',
                'controller_path' => 'App\\Http\\Controllers\\Vendor\\DashboardController',
                'controller_name' => 'DashboardController',
                'method_name' => 'getProductData',
            ),
            427 =>
            array (
                'id' => 773,
                'name' => 'App\\Http\\Controllers\\Vendor\\DashboardController@mostSoldProducts',
                'controller_path' => 'App\\Http\\Controllers\\Vendor\\DashboardController',
                'controller_name' => 'DashboardController',
                'method_name' => 'mostSoldProducts',
            ),
            428 =>
            array (
                'id' => 774,
                'name' => 'App\\Http\\Controllers\\Vendor\\DashboardController@mostActiveUsers',
                'controller_path' => 'App\\Http\\Controllers\\Vendor\\DashboardController',
                'controller_name' => 'DashboardController',
                'method_name' => 'mostActiveUsers',
            ),
            429 =>
            array (
                'id' => 775,
                'name' => 'App\\Http\\Controllers\\Vendor\\DashboardController@vendorStats',
                'controller_path' => 'App\\Http\\Controllers\\Vendor\\DashboardController',
                'controller_name' => 'DashboardController',
                'method_name' => 'vendorStats',
            ),
            430 =>
            array (
                'id' => 776,
                'name' => 'App\\Http\\Controllers\\Vendor\\DashboardController@salesOfTheMonth',
                'controller_path' => 'App\\Http\\Controllers\\Vendor\\DashboardController',
                'controller_name' => 'DashboardController',
                'method_name' => 'salesOfTheMonth',
            ),
            431 =>
            array (
                'id' => 777,
                'name' => 'App\\Http\\Controllers\\Site\\SellerController@vendorProfile',
                'controller_path' => 'App\\Http\\Controllers\\Site\\SellerController',
                'controller_name' => 'SellerController',
                'method_name' => 'vendorProfile',
            ),
            432 =>
            array (
                'id' => 780,
                'name' => 'Modules\\CMS\\Http\\Controllers\\BuilderController@edit',
                'controller_path' => 'Modules\\CMS\\Http\\Controllers\\BuilderController',
                'controller_name' => 'BuilderController',
                'method_name' => 'edit',
            ),
            433 =>
            array (
                'id' => 781,
                'name' => 'Modules\\CMS\\Http\\Controllers\\BuilderController@editElement',
                'controller_path' => 'Modules\\CMS\\Http\\Controllers\\BuilderController',
                'controller_name' => 'BuilderController',
                'method_name' => 'editElement',
            ),
            434 =>
            array (
                'id' => 782,
                'name' => 'Modules\\CMS\\Http\\Controllers\\BuilderController@updateComponent',
                'controller_path' => 'Modules\\CMS\\Http\\Controllers\\BuilderController',
                'controller_name' => 'BuilderController',
                'method_name' => 'updateComponent',
            ),
            435 =>
            array (
                'id' => 783,
                'name' => 'Modules\\CMS\\Http\\Controllers\\BuilderController@deleteComponent',
                'controller_path' => 'Modules\\CMS\\Http\\Controllers\\BuilderController',
                'controller_name' => 'BuilderController',
                'method_name' => 'deleteComponent',
            ),
            436 =>
            array (
                'id' => 785,
                'name' => 'Modules\\Coupon\\Http\\Controllers\\CouponController@downloadPdf',
                'controller_path' => 'Modules\\Coupon\\Http\\Controllers\\CouponController',
                'controller_name' => 'CouponController',
                'method_name' => 'downloadPdf',
            ),
            437 =>
            array (
                'id' => 786,
                'name' => 'Modules\\Coupon\\Http\\Controllers\\CouponController@downloadCsv',
                'controller_path' => 'Modules\\Coupon\\Http\\Controllers\\CouponController',
                'controller_name' => 'CouponController',
                'method_name' => 'downloadCsv',
            ),
            438 =>
            array (
                'id' => 787,
                'name' => 'Modules\\Coupon\\Http\\Controllers\\CouponController@getShopByVendor',
                'controller_path' => 'Modules\\Coupon\\Http\\Controllers\\CouponController',
                'controller_name' => 'CouponController',
                'method_name' => 'getShopByVendor',
            ),
            439 =>
            array (
                'id' => 788,
                'name' => 'Modules\\Coupon\\Http\\Controllers\\CouponController@getCouponProduct',
                'controller_path' => 'Modules\\Coupon\\Http\\Controllers\\CouponController',
                'controller_name' => 'CouponController',
                'method_name' => 'getCouponProduct',
            ),
            440 =>
            array (
                'id' => 789,
                'name' => 'Modules\\Coupon\\Http\\Controllers\\Vendor\\CouponController@index',
                'controller_path' => 'Modules\\Coupon\\Http\\Controllers\\Vendor\\CouponController',
                'controller_name' => 'CouponController',
                'method_name' => 'index',
            ),
            441 =>
            array (
                'id' => 790,
                'name' => 'Modules\\Coupon\\Http\\Controllers\\Vendor\\CouponController@create',
                'controller_path' => 'Modules\\Coupon\\Http\\Controllers\\Vendor\\CouponController',
                'controller_name' => 'CouponController',
                'method_name' => 'create',
            ),
            442 =>
            array (
                'id' => 791,
                'name' => 'Modules\\Coupon\\Http\\Controllers\\Vendor\\CouponController@store',
                'controller_path' => 'Modules\\Coupon\\Http\\Controllers\\Vendor\\CouponController',
                'controller_name' => 'CouponController',
                'method_name' => 'store',
            ),
            443 =>
            array (
                'id' => 792,
                'name' => 'Modules\\Coupon\\Http\\Controllers\\Vendor\\CouponController@edit',
                'controller_path' => 'Modules\\Coupon\\Http\\Controllers\\Vendor\\CouponController',
                'controller_name' => 'CouponController',
                'method_name' => 'edit',
            ),
            444 =>
            array (
                'id' => 793,
                'name' => 'Modules\\Coupon\\Http\\Controllers\\Vendor\\CouponController@update',
                'controller_path' => 'Modules\\Coupon\\Http\\Controllers\\Vendor\\CouponController',
                'controller_name' => 'CouponController',
                'method_name' => 'update',
            ),
            445 =>
            array (
                'id' => 794,
                'name' => 'Modules\\Coupon\\Http\\Controllers\\Vendor\\CouponController@destroy',
                'controller_path' => 'Modules\\Coupon\\Http\\Controllers\\Vendor\\CouponController',
                'controller_name' => 'CouponController',
                'method_name' => 'destroy',
            ),
            446 =>
            array (
                'id' => 795,
                'name' => 'Modules\\Coupon\\Http\\Controllers\\Vendor\\CouponController@pdf',
                'controller_path' => 'Modules\\Coupon\\Http\\Controllers\\Vendor\\CouponController',
                'controller_name' => 'CouponController',
                'method_name' => 'pdf',
            ),
            447 =>
            array (
                'id' => 796,
                'name' => 'Modules\\Coupon\\Http\\Controllers\\Vendor\\CouponController@csv',
                'controller_path' => 'Modules\\Coupon\\Http\\Controllers\\Vendor\\CouponController',
                'controller_name' => 'CouponController',
                'method_name' => 'csv',
            ),
            448 =>
            array (
                'id' => 798,
                'name' => 'Modules\\Refund\\Http\\Controllers\\Api\\User\\RefundController@index',
                'controller_path' => 'Modules\\Refund\\Http\\Controllers\\Api\\User\\RefundController',
                'controller_name' => 'RefundController',
                'method_name' => 'index',
            ),
            449 =>
            array (
                'id' => 800,
                'name' => 'Modules\\Refund\\Http\\Controllers\\Site\\RefundController@index',
                'controller_path' => 'Modules\\Refund\\Http\\Controllers\\Site\\RefundController',
                'controller_name' => 'RefundController',
                'method_name' => 'index',
            ),
            450 =>
            array (
                'id' => 801,
                'name' => 'Modules\\Refund\\Http\\Controllers\\Site\\RefundController@createRequest',
                'controller_path' => 'Modules\\Refund\\Http\\Controllers\\Site\\RefundController',
                'controller_name' => 'RefundController',
                'method_name' => 'createRequest',
            ),
            451 =>
            array (
                'id' => 802,
                'name' => 'Modules\\Refund\\Http\\Controllers\\Site\\RefundController@refund',
                'controller_path' => 'Modules\\Refund\\Http\\Controllers\\Site\\RefundController',
                'controller_name' => 'RefundController',
                'method_name' => 'refund',
            ),
            452 =>
            array (
                'id' => 803,
                'name' => 'Modules\\Refund\\Http\\Controllers\\Vendor\\RefundController@index',
                'controller_path' => 'Modules\\Refund\\Http\\Controllers\\Vendor\\RefundController',
                'controller_name' => 'RefundController',
                'method_name' => 'index',
            ),
            453 =>
            array (
                'id' => 804,
                'name' => 'Modules\\Refund\\Http\\Controllers\\Vendor\\RefundController@edit',
                'controller_path' => 'Modules\\Refund\\Http\\Controllers\\Vendor\\RefundController',
                'controller_name' => 'RefundController',
                'method_name' => 'edit',
            ),
            454 =>
            array (
                'id' => 805,
                'name' => 'Modules\\Refund\\Http\\Controllers\\Vendor\\RefundController@update',
                'controller_path' => 'Modules\\Refund\\Http\\Controllers\\Vendor\\RefundController',
                'controller_name' => 'RefundController',
                'method_name' => 'update',
            ),
            455 =>
            array (
                'id' => 806,
                'name' => 'Modules\\Refund\\Http\\Controllers\\Vendor\\RefundController@pdf',
                'controller_path' => 'Modules\\Refund\\Http\\Controllers\\Vendor\\RefundController',
                'controller_name' => 'RefundController',
                'method_name' => 'pdf',
            ),
            456 =>
            array (
                'id' => 807,
                'name' => 'Modules\\Refund\\Http\\Controllers\\Vendor\\RefundController@csv',
                'controller_path' => 'Modules\\Refund\\Http\\Controllers\\Vendor\\RefundController',
                'controller_name' => 'RefundController',
                'method_name' => 'csv',
            ),
            457 =>
            array (
                'id' => 821,
                'name' => 'App\\Http\\Controllers\\Vendor\\VendorTransactionController@index',
                'controller_path' => 'App\\Http\\Controllers\\Vendor\\VendorTransactionController',
                'controller_name' => 'VendorTransactionController',
                'method_name' => 'index',
            ),
            458 =>
            array (
                'id' => 822,
                'name' => 'App\\Http\\Controllers\\Vendor\\VendorTransactionController@pdf',
                'controller_path' => 'App\\Http\\Controllers\\Vendor\\VendorTransactionController',
                'controller_name' => 'VendorTransactionController',
                'method_name' => 'pdf',
            ),
            459 =>
            array (
                'id' => 823,
                'name' => 'App\\Http\\Controllers\\Vendor\\VendorTransactionController@csv',
                'controller_path' => 'App\\Http\\Controllers\\Vendor\\VendorTransactionController',
                'controller_name' => 'VendorTransactionController',
                'method_name' => 'csv',
            ),
            460 =>
            array (
                'id' => 824,
                'name' => 'App\\Http\\Controllers\\Api\\AuthController@verifyEmail',
                'controller_path' => 'App\\Http\\Controllers\\Api\\AuthController',
                'controller_name' => 'AuthController',
                'method_name' => 'verifyEmail',
            ),
            461 =>
            array (
                'id' => 825,
                'name' => 'App\\Http\\Controllers\\Api\\User\\CategoryController@subCategory',
                'controller_path' => 'App\\Http\\Controllers\\Api\\User\\CategoryController',
                'controller_name' => 'CategoryController',
                'method_name' => 'subCategory',
            ),
            462 =>
            array (
                'id' => 826,
                'name' => 'App\\Http\\Controllers\\Api\\User\\ProductController@search',
                'controller_path' => 'App\\Http\\Controllers\\Api\\User\\ProductController',
                'controller_name' => 'ProductController',
                'method_name' => 'search',
            ),
            463 =>
            array (
                'id' => 827,
                'name' => 'App\\Http\\Controllers\\Api\\User\\ProductController@recentSearch',
                'controller_path' => 'App\\Http\\Controllers\\Api\\User\\ProductController',
                'controller_name' => 'ProductController',
                'method_name' => 'recentSearch',
            ),
            464 =>
            array (
                'id' => 828,
                'name' => 'App\\Http\\Controllers\\LoginController@resetOtp',
                'controller_path' => 'App\\Http\\Controllers\\LoginController',
                'controller_name' => 'LoginController',
                'method_name' => 'resetOtp',
            ),
            465 =>
            array (
                'id' => 829,
                'name' => 'App\\Http\\Controllers\\LoginController@impersonate',
                'controller_path' => 'App\\Http\\Controllers\\LoginController',
                'controller_name' => 'LoginController',
                'method_name' => 'impersonate',
            ),
            466 =>
            array (
                'id' => 830,
                'name' => 'App\\Http\\Controllers\\LoginController@cancelImpersonate',
                'controller_path' => 'App\\Http\\Controllers\\LoginController',
                'controller_name' => 'LoginController',
                'method_name' => 'cancelImpersonate',
            ),
            467 =>
            array (
                'id' => 831,
                'name' => 'App\\Http\\Controllers\\AdminOrderController@update',
                'controller_path' => 'App\\Http\\Controllers\\AdminOrderController',
                'controller_name' => 'AdminOrderController',
                'method_name' => 'update',
            ),
            468 =>
            array (
                'id' => 832,
                'name' => 'App\\Http\\Controllers\\EmailController@emailVerifySetting',
                'controller_path' => 'App\\Http\\Controllers\\EmailController',
                'controller_name' => 'EmailController',
                'method_name' => 'emailVerifySetting',
            ),
            469 =>
            array (
                'id' => 833,
                'name' => 'App\\Http\\Controllers\\Site\\LoginController@checkEmailExistence',
                'controller_path' => 'App\\Http\\Controllers\\Site\\LoginController',
                'controller_name' => 'LoginController',
                'method_name' => 'checkEmailExistence',
            ),
            470 =>
            array (
                'id' => 834,
                'name' => 'App\\Http\\Controllers\\Site\\LoginController@resetOtp',
                'controller_path' => 'App\\Http\\Controllers\\Site\\LoginController',
                'controller_name' => 'LoginController',
                'method_name' => 'resetOtp',
            ),
            471 =>
            array (
                'id' => 835,
                'name' => 'App\\Http\\Controllers\\Site\\UserController@removeImage',
                'controller_path' => 'App\\Http\\Controllers\\Site\\UserController',
                'controller_name' => 'UserController',
                'method_name' => 'removeImage',
            ),
            472 =>
            array (
                'id' => 836,
                'name' => 'Modules\\CMS\\Http\\Controllers\\CMSController@home',
                'controller_path' => 'Modules\\CMS\\Http\\Controllers\\CMSController',
                'controller_name' => 'CMSController',
                'method_name' => 'home',
            ),
            473 =>
            array (
                'id' => 837,
                'name' => 'Modules\\Refund\\Http\\Controllers\\Site\\RefundController@refundDetails',
                'controller_path' => 'Modules\\Refund\\Http\\Controllers\\Site\\RefundController',
                'controller_name' => 'RefundController',
                'method_name' => 'refundDetails',
            ),
            474 =>
            array (
                'id' => 838,
                'name' => 'Modules\\FormBuilder\\Http\\Controllers\\FormController@index',
                'controller_path' => 'Modules\\FormBuilder\\Http\\Controllers\\FormController',
                'controller_name' => 'FormController',
                'method_name' => 'index',
            ),
            475 =>
            array (
                'id' => 839,
                'name' => 'Modules\\FormBuilder\\Http\\Controllers\\RenderFormController@render',
                'controller_path' => 'Modules\\FormBuilder\\Http\\Controllers\\RenderFormController',
                'controller_name' => 'RenderFormController',
                'method_name' => 'render',
            ),
            476 =>
            array (
                'id' => 840,
                'name' => 'Modules\\FormBuilder\\Http\\Controllers\\RenderFormController@submit',
                'controller_path' => 'Modules\\FormBuilder\\Http\\Controllers\\RenderFormController',
                'controller_name' => 'RenderFormController',
                'method_name' => 'submit',
            ),
            477 =>
            array (
                'id' => 841,
                'name' => 'Modules\\FormBuilder\\Http\\Controllers\\RenderFormController@feedback',
                'controller_path' => 'Modules\\FormBuilder\\Http\\Controllers\\RenderFormController',
                'controller_name' => 'RenderFormController',
                'method_name' => 'feedback',
            ),
            478 =>
            array (
                'id' => 842,
                'name' => 'Modules\\FormBuilder\\Http\\Controllers\\MySubmissionController@index',
                'controller_path' => 'Modules\\FormBuilder\\Http\\Controllers\\MySubmissionController',
                'controller_name' => 'MySubmissionController',
                'method_name' => 'index',
            ),
            479 =>
            array (
                'id' => 843,
                'name' => 'Modules\\FormBuilder\\Http\\Controllers\\MySubmissionController@create',
                'controller_path' => 'Modules\\FormBuilder\\Http\\Controllers\\MySubmissionController',
                'controller_name' => 'MySubmissionController',
                'method_name' => 'create',
            ),
            480 =>
            array (
                'id' => 844,
                'name' => 'Modules\\FormBuilder\\Http\\Controllers\\MySubmissionController@store',
                'controller_path' => 'Modules\\FormBuilder\\Http\\Controllers\\MySubmissionController',
                'controller_name' => 'MySubmissionController',
                'method_name' => 'store',
            ),
            481 =>
            array (
                'id' => 845,
                'name' => 'Modules\\FormBuilder\\Http\\Controllers\\MySubmissionController@show',
                'controller_path' => 'Modules\\FormBuilder\\Http\\Controllers\\MySubmissionController',
                'controller_name' => 'MySubmissionController',
                'method_name' => 'show',
            ),
            482 =>
            array (
                'id' => 846,
                'name' => 'Modules\\FormBuilder\\Http\\Controllers\\MySubmissionController@edit',
                'controller_path' => 'Modules\\FormBuilder\\Http\\Controllers\\MySubmissionController',
                'controller_name' => 'MySubmissionController',
                'method_name' => 'edit',
            ),
            483 =>
            array (
                'id' => 847,
                'name' => 'Modules\\FormBuilder\\Http\\Controllers\\MySubmissionController@update',
                'controller_path' => 'Modules\\FormBuilder\\Http\\Controllers\\MySubmissionController',
                'controller_name' => 'MySubmissionController',
                'method_name' => 'update',
            ),
            484 =>
            array (
                'id' => 848,
                'name' => 'Modules\\FormBuilder\\Http\\Controllers\\MySubmissionController@destroy',
                'controller_path' => 'Modules\\FormBuilder\\Http\\Controllers\\MySubmissionController',
                'controller_name' => 'MySubmissionController',
                'method_name' => 'destroy',
            ),
            485 =>
            array (
                'id' => 849,
                'name' => 'Modules\\FormBuilder\\Http\\Controllers\\SubmissionController@index',
                'controller_path' => 'Modules\\FormBuilder\\Http\\Controllers\\SubmissionController',
                'controller_name' => 'SubmissionController',
                'method_name' => 'index',
            ),
            486 =>
            array (
                'id' => 850,
                'name' => 'Modules\\FormBuilder\\Http\\Controllers\\SubmissionController@index',
                'controller_path' => 'Modules\\FormBuilder\\Http\\Controllers\\SubmissionController',
                'controller_name' => 'SubmissionController',
                'method_name' => 'index',
            ),
            487 =>
            array (
                'id' => 851,
                'name' => 'Modules\\FormBuilder\\Http\\Controllers\\SubmissionController@create',
                'controller_path' => 'Modules\\FormBuilder\\Http\\Controllers\\SubmissionController',
                'controller_name' => 'SubmissionController',
                'method_name' => 'create',
            ),
            488 =>
            array (
                'id' => 852,
                'name' => 'Modules\\FormBuilder\\Http\\Controllers\\SubmissionController@store',
                'controller_path' => 'Modules\\FormBuilder\\Http\\Controllers\\SubmissionController',
                'controller_name' => 'SubmissionController',
                'method_name' => 'store',
            ),
            489 =>
            array (
                'id' => 853,
                'name' => 'Modules\\FormBuilder\\Http\\Controllers\\SubmissionController@show',
                'controller_path' => 'Modules\\FormBuilder\\Http\\Controllers\\SubmissionController',
                'controller_name' => 'SubmissionController',
                'method_name' => 'show',
            ),
            490 =>
            array (
                'id' => 854,
                'name' => 'Modules\\FormBuilder\\Http\\Controllers\\SubmissionController@edit',
                'controller_path' => 'Modules\\FormBuilder\\Http\\Controllers\\SubmissionController',
                'controller_name' => 'SubmissionController',
                'method_name' => 'edit',
            ),
            491 =>
            array (
                'id' => 855,
                'name' => 'Modules\\FormBuilder\\Http\\Controllers\\SubmissionController@update',
                'controller_path' => 'Modules\\FormBuilder\\Http\\Controllers\\SubmissionController',
                'controller_name' => 'SubmissionController',
                'method_name' => 'update',
            ),
            492 =>
            array (
                'id' => 856,
                'name' => 'Modules\\FormBuilder\\Http\\Controllers\\SubmissionController@destroy',
                'controller_path' => 'Modules\\FormBuilder\\Http\\Controllers\\SubmissionController',
                'controller_name' => 'SubmissionController',
                'method_name' => 'destroy',
            ),
            493 =>
            array (
                'id' => 857,
                'name' => 'Modules\\FormBuilder\\Http\\Controllers\\FormController@index',
                'controller_path' => 'Modules\\FormBuilder\\Http\\Controllers\\FormController',
                'controller_name' => 'FormController',
                'method_name' => 'index',
            ),
            494 =>
            array (
                'id' => 858,
                'name' => 'Modules\\FormBuilder\\Http\\Controllers\\FormController@create',
                'controller_path' => 'Modules\\FormBuilder\\Http\\Controllers\\FormController',
                'controller_name' => 'FormController',
                'method_name' => 'create',
            ),
            495 =>
            array (
                'id' => 859,
                'name' => 'Modules\\FormBuilder\\Http\\Controllers\\FormController@store',
                'controller_path' => 'Modules\\FormBuilder\\Http\\Controllers\\FormController',
                'controller_name' => 'FormController',
                'method_name' => 'store',
            ),
            496 =>
            array (
                'id' => 860,
                'name' => 'Modules\\FormBuilder\\Http\\Controllers\\FormController@show',
                'controller_path' => 'Modules\\FormBuilder\\Http\\Controllers\\FormController',
                'controller_name' => 'FormController',
                'method_name' => 'show',
            ),
            497 =>
            array (
                'id' => 861,
                'name' => 'Modules\\FormBuilder\\Http\\Controllers\\FormController@edit',
                'controller_path' => 'Modules\\FormBuilder\\Http\\Controllers\\FormController',
                'controller_name' => 'FormController',
                'method_name' => 'edit',
            ),
            498 =>
            array (
                'id' => 862,
                'name' => 'Modules\\FormBuilder\\Http\\Controllers\\FormController@update',
                'controller_path' => 'Modules\\FormBuilder\\Http\\Controllers\\FormController',
                'controller_name' => 'FormController',
                'method_name' => 'update',
            ),
            499 =>
            array (
                'id' => 863,
                'name' => 'Modules\\FormBuilder\\Http\\Controllers\\FormController@destroy',
                'controller_path' => 'Modules\\FormBuilder\\Http\\Controllers\\FormController',
                'controller_name' => 'FormController',
                'method_name' => 'destroy',
            ),
        ));
        \DB::table('permissions')->insert(array (
            0 =>
            array (
                'id' => 864,
                'name' => 'Modules\\FormBuilder\\Http\\Controllers\\KycController@index',
                'controller_path' => 'Modules\\FormBuilder\\Http\\Controllers\\KycController',
                'controller_name' => 'KycController',
                'method_name' => 'index',
            ),
            1 =>
            array (
                'id' => 865,
                'name' => 'Modules\\FormBuilder\\Http\\Controllers\\KycController@edit',
                'controller_path' => 'Modules\\FormBuilder\\Http\\Controllers\\KycController',
                'controller_name' => 'KycController',
                'method_name' => 'edit',
            ),
            2 =>
            array (
                'id' => 866,
                'name' => 'Modules\\FormBuilder\\Http\\Controllers\\KycController@update',
                'controller_path' => 'Modules\\FormBuilder\\Http\\Controllers\\KycController',
                'controller_name' => 'KycController',
                'method_name' => 'update',
            ),
            3 =>
            array (
                'id' => 867,
                'name' => 'Modules\\FormBuilder\\Http\\Controllers\\KycController@editSubmission',
                'controller_path' => 'Modules\\FormBuilder\\Http\\Controllers\\KycController',
                'controller_name' => 'KycController',
                'method_name' => 'editSubmission',
            ),
            4 =>
            array (
                'id' => 868,
                'name' => 'Modules\\FormBuilder\\Http\\Controllers\\KycController@editSubmission',
                'controller_path' => 'Modules\\FormBuilder\\Http\\Controllers\\KycController',
                'controller_name' => 'KycController',
                'method_name' => 'editSubmission',
            ),
            5 =>
            array (
                'id' => 869,
                'name' => 'Modules\\FormBuilder\\Http\\Controllers\\KycController@viewSubmission',
                'controller_path' => 'Modules\\FormBuilder\\Http\\Controllers\\KycController',
                'controller_name' => 'KycController',
                'method_name' => 'viewSubmission',
            ),
            6 =>
            array (
                'id' => 870,
                'name' => 'Modules\\FormBuilder\\Http\\Controllers\\KycController@submissionDelete',
                'controller_path' => 'Modules\\FormBuilder\\Http\\Controllers\\KycController',
                'controller_name' => 'KycController',
                'method_name' => 'submissionDelete',
            ),
            7 =>
            array (
                'id' => 874,
                'name' => 'App\\Http\\Controllers\\Api\\User\\UserController@topSeller',
                'controller_path' => 'App\\Http\\Controllers\\Api\\User\\UserController',
                'controller_name' => 'UserController',
                'method_name' => 'topSeller',
            ),
            8 =>
            array (
                'id' => 876,
                'name' => '\\App\\Http\\Controllers\\Api\\AuthController@registerOrLoginUser',
                'controller_path' => '\\App\\Http\\Controllers\\Api\\AuthController',
                'controller_name' => 'AuthController',
                'method_name' => 'registerOrLoginUser',
            ),
            9 =>
            array (
                'id' => 877,
                'name' => 'App\\Http\\Controllers\\Site\\SiteController@allBlogs',
                'controller_path' => 'App\\Http\\Controllers\\Site\\SiteController',
                'controller_name' => 'SiteController',
                'method_name' => 'allBlogs',
            ),
            10 =>
            array (
                'id' => 878,
                'name' => 'App\\Http\\Controllers\\Site\\SiteController@blogSearch',
                'controller_path' => 'App\\Http\\Controllers\\Site\\SiteController',
                'controller_name' => 'SiteController',
                'method_name' => 'blogSearch',
            ),
            11 =>
            array (
                'id' => 879,
                'name' => 'App\\Http\\Controllers\\Site\\OrderController@orderManage',
                'controller_path' => 'App\\Http\\Controllers\\Site\\OrderController',
                'controller_name' => 'OrderController',
                'method_name' => 'orderManage',
            ),
            12 =>
            array (
                'id' => 880,
                'name' => 'Modules\\CMS\\Http\\Controllers\\CMSController@createHomepage',
                'controller_path' => 'Modules\\CMS\\Http\\Controllers\\CMSController',
                'controller_name' => 'CMSController',
                'method_name' => 'createHomepage',
            ),
            13 =>
            array (
                'id' => 881,
                'name' => 'Modules\\CMS\\Http\\Controllers\\CMSController@editHome',
                'controller_path' => 'Modules\\CMS\\Http\\Controllers\\CMSController',
                'controller_name' => 'CMSController',
                'method_name' => 'editHome',
            ),
            14 =>
            array (
                'id' => 883,
                'name' => 'Modules\\Refund\\Http\\Controllers\\Site\\RefundController@getProducts',
                'controller_path' => 'Modules\\Refund\\Http\\Controllers\\Site\\RefundController',
                'controller_name' => 'RefundController',
                'method_name' => 'getProducts',
            ),
            15 =>
            array (
                'id' => 884,
                'name' => 'Modules\\Refund\\Http\\Controllers\\Site\\RefundProcessController@process',
                'controller_path' => 'Modules\\Refund\\Http\\Controllers\\Site\\RefundProcessController',
                'controller_name' => 'RefundProcessController',
                'method_name' => 'process',
            ),
            16 =>
            array (
                'id' => 885,
                'name' => 'Modules\\Refund\\Http\\Controllers\\Vendor\\RefundProcessController@process',
                'controller_path' => 'Modules\\Refund\\Http\\Controllers\\Vendor\\RefundProcessController',
                'controller_name' => 'RefundProcessController',
                'method_name' => 'process',
            ),
            17 =>
            array (
                'id' => 886,
                'name' => 'App\\Http\\Controllers\\Site\\beASellerController@beSeller',
                'controller_path' => 'App\\Http\\Controllers\\Site\\beASellerController',
                'controller_name' => 'beASellerController',
                'method_name' => 'beSeller',
            ),
            18 =>
            array (
                'id' => 887,
                'name' => 'Modules\\CMS\\Http\\Controllers\\SlideController@create',
                'controller_path' => 'Modules\\CMS\\Http\\Controllers\\SlideController',
                'controller_name' => 'SlideController',
                'method_name' => 'create',
            ),
            19 =>
            array (
                'id' => 888,
                'name' => 'Modules\\CMS\\Http\\Controllers\\SlideController@store',
                'controller_path' => 'Modules\\CMS\\Http\\Controllers\\SlideController',
                'controller_name' => 'SlideController',
                'method_name' => 'store',
            ),
            20 =>
            array (
                'id' => 889,
                'name' => 'Modules\\CMS\\Http\\Controllers\\SlideController@edit',
                'controller_path' => 'Modules\\CMS\\Http\\Controllers\\SlideController',
                'controller_name' => 'SlideController',
                'method_name' => 'edit',
            ),
            21 =>
            array (
                'id' => 890,
                'name' => 'Modules\\CMS\\Http\\Controllers\\SlideController@update',
                'controller_path' => 'Modules\\CMS\\Http\\Controllers\\SlideController',
                'controller_name' => 'SlideController',
                'method_name' => 'update',
            ),
            22 =>
            array (
                'id' => 891,
                'name' => 'Modules\\CMS\\Http\\Controllers\\SlideController@delete',
                'controller_path' => 'Modules\\CMS\\Http\\Controllers\\SlideController',
                'controller_name' => 'SlideController',
                'method_name' => 'delete',
            ),
            23 =>
            array (
                'id' => 892,
                'name' => 'Modules\\CMS\\Http\\Controllers\\SliderController@index',
                'controller_path' => 'Modules\\CMS\\Http\\Controllers\\SliderController',
                'controller_name' => 'SliderController',
                'method_name' => 'index',
            ),
            24 =>
            array (
                'id' => 893,
                'name' => 'Modules\\CMS\\Http\\Controllers\\SliderController@store',
                'controller_path' => 'Modules\\CMS\\Http\\Controllers\\SliderController',
                'controller_name' => 'SliderController',
                'method_name' => 'store',
            ),
            25 =>
            array (
                'id' => 894,
                'name' => 'Modules\\CMS\\Http\\Controllers\\SliderController@update',
                'controller_path' => 'Modules\\CMS\\Http\\Controllers\\SliderController',
                'controller_name' => 'SliderController',
                'method_name' => 'update',
            ),
            26 =>
            array (
                'id' => 895,
                'name' => 'Modules\\CMS\\Http\\Controllers\\SliderController@delete',
                'controller_path' => 'Modules\\CMS\\Http\\Controllers\\SliderController',
                'controller_name' => 'SliderController',
                'method_name' => 'delete',
            ),
            27 =>
            array (
                'id' => 897,
                'name' => '\\App\\Http\\Controllers\\Api\\AuthController@checkOtp',
                'controller_path' => '\\App\\Http\\Controllers\\Api\\AuthController',
                'controller_name' => 'AuthController',
                'method_name' => 'checkOtp',
            ),
            28 =>
            array (
                'id' => 898,
                'name' => 'App\\Http\\Controllers\\ProductSettingController@general',
                'controller_path' => 'App\\Http\\Controllers\\ProductSettingController',
                'controller_name' => 'ProductSettingController',
                'method_name' => 'general',
            ),
            29 =>
            array (
                'id' => 899,
                'name' => 'App\\Http\\Controllers\\ProductSettingController@inventory',
                'controller_path' => 'App\\Http\\Controllers\\ProductSettingController',
                'controller_name' => 'ProductSettingController',
                'method_name' => 'inventory',
            ),
            30 =>
            array (
                'id' => 900,
                'name' => 'App\\Http\\Controllers\\ProductSettingController@vendor',
                'controller_path' => 'App\\Http\\Controllers\\ProductSettingController',
                'controller_name' => 'ProductSettingController',
                'method_name' => 'vendor',
            ),
            31 =>
            array (
                'id' => 901,
                'name' => 'App\\Http\\Controllers\\Api\\Vendor\\ApiVendorProductController@index',
                'controller_path' => 'App\\Http\\Controllers\\Api\\Vendor\\ApiVendorProductController',
                'controller_name' => 'ApiVendorProductController',
                'method_name' => 'index',
            ),
            32 =>
            array (
                'id' => 902,
                'name' => 'App\\Http\\Controllers\\Api\\Vendor\\ApiVendorProductController@store',
                'controller_path' => 'App\\Http\\Controllers\\Api\\Vendor\\ApiVendorProductController',
                'controller_name' => 'ApiVendorProductController',
                'method_name' => 'store',
            ),
            33 =>
            array (
                'id' => 903,
                'name' => 'App\\Http\\Controllers\\Api\\Vendor\\ApiVendorProductController@update',
                'controller_path' => 'App\\Http\\Controllers\\Api\\Vendor\\ApiVendorProductController',
                'controller_name' => 'ApiVendorProductController',
                'method_name' => 'update',
            ),
            34 =>
            array (
                'id' => 904,
                'name' => 'App\\Http\\Controllers\\Api\\Vendor\\ApiVendorProductController@search',
                'controller_path' => 'App\\Http\\Controllers\\Api\\Vendor\\ApiVendorProductController',
                'controller_name' => 'ApiVendorProductController',
                'method_name' => 'search',
            ),
            35 =>
            array (
                'id' => 905,
                'name' => 'App\\Http\\Controllers\\Api\\Vendor\\ApiVendorProductController@detail',
                'controller_path' => 'App\\Http\\Controllers\\Api\\Vendor\\ApiVendorProductController',
                'controller_name' => 'ApiVendorProductController',
                'method_name' => 'detail',
            ),
            36 =>
            array (
                'id' => 906,
                'name' => 'App\\Http\\Controllers\\Api\\Vendor\\ApiVendorProductController@updateRelatedProduct',
                'controller_path' => 'App\\Http\\Controllers\\Api\\Vendor\\ApiVendorProductController',
                'controller_name' => 'ApiVendorProductController',
                'method_name' => 'updateRelatedProduct',
            ),
            37 =>
            array (
                'id' => 907,
                'name' => 'App\\Http\\Controllers\\Api\\Vendor\\ApiVendorProductController@destroy',
                'controller_path' => 'App\\Http\\Controllers\\Api\\Vendor\\ApiVendorProductController',
                'controller_name' => 'ApiVendorProductController',
                'method_name' => 'destroy',
            ),
            38 =>
            array (
                'id' => 908,
                'name' => 'App\\Http\\Controllers\\DashboardController@vendorStatsType',
                'controller_path' => 'App\\Http\\Controllers\\DashboardController',
                'controller_name' => 'DashboardController',
                'method_name' => 'vendorStatsType',
            ),
            39 =>
            array (
                'id' => 909,
                'name' => 'App\\Http\\Controllers\\DashboardController@vendorReq',
                'controller_path' => 'App\\Http\\Controllers\\DashboardController',
                'controller_name' => 'DashboardController',
                'method_name' => 'vendorReq',
            ),
            40 =>
            array (
                'id' => 910,
                'name' => 'App\\Http\\Controllers\\DashboardController@changeStatus',
                'controller_path' => 'App\\Http\\Controllers\\DashboardController',
                'controller_name' => 'DashboardController',
                'method_name' => 'changeStatus',
            ),
            41 =>
            array (
                'id' => 911,
                'name' => 'App\\Http\\Controllers\\Site\\LoginController@emailSignup',
                'controller_path' => 'App\\Http\\Controllers\\Site\\LoginController',
                'controller_name' => 'LoginController',
                'method_name' => 'emailSignup',
            ),
            42 =>
            array (
                'id' => 912,
                'name' => 'App\\Http\\Controllers\\Site\\LoginController@emailStore',
                'controller_path' => 'App\\Http\\Controllers\\Site\\LoginController',
                'controller_name' => 'LoginController',
                'method_name' => 'emailStore',
            ),
            43 =>
            array (
                'id' => 913,
                'name' => 'App\\Http\\Controllers\\Site\\LoginController@verificationOtp',
                'controller_path' => 'App\\Http\\Controllers\\Site\\LoginController',
                'controller_name' => 'LoginController',
                'method_name' => 'verificationOtp',
            ),
            44 =>
            array (
                'id' => 915,
                'name' => 'App\\Http\\Controllers\\Site\\beASellerController@sellerRegistration',
                'controller_path' => 'App\\Http\\Controllers\\Site\\beASellerController',
                'controller_name' => 'beASellerController',
                'method_name' => 'sellerRegistration',
            ),
            45 =>
            array (
                'id' => 916,
                'name' => 'App\\Http\\Controllers\\Site\\SiteController@coupon',
                'controller_path' => 'App\\Http\\Controllers\\Site\\SiteController',
                'controller_name' => 'SiteController',
                'method_name' => 'coupon',
            ),
            46 =>
            array (
                'id' => 917,
                'name' => 'Modules\\CashOnDelivery\\Http\\Controllers\\CashOnDeliveryController@store',
                'controller_path' => 'Modules\\CashOnDelivery\\Http\\Controllers\\CashOnDeliveryController',
                'controller_name' => 'CashOnDeliveryController',
                'method_name' => 'store',
            ),
            47 =>
            array (
                'id' => 918,
                'name' => 'Modules\\CashOnDelivery\\Http\\Controllers\\CashOnDeliveryController@edit',
                'controller_path' => 'Modules\\CashOnDelivery\\Http\\Controllers\\CashOnDeliveryController',
                'controller_name' => 'CashOnDeliveryController',
                'method_name' => 'edit',
            ),
            48 =>
            array (
                'id' => 919,
                'name' => 'Modules\\MediaManager\\Http\\Controllers\\MediaManagerController@deleteImage',
                'controller_path' => 'Modules\\MediaManager\\Http\\Controllers\\MediaManagerController',
                'controller_name' => 'MediaManagerController',
                'method_name' => 'deleteImage',
            ),
            49 =>
            array (
                'id' => 936,
                'name' => 'Modules\\GeoLocale\\Http\\Controllers\\GeoLocaleController@index',
                'controller_path' => 'Modules\\GeoLocale\\Http\\Controllers\\GeoLocaleController',
                'controller_name' => 'GeoLocaleController',
                'method_name' => 'index',
            ),
            50 =>
            array (
                'id' => 937,
                'name' => 'Modules\\GeoLocale\\Http\\Controllers\\CountryController@index',
                'controller_path' => 'Modules\\GeoLocale\\Http\\Controllers\\CountryController',
                'controller_name' => 'CountryController',
                'method_name' => 'index',
            ),
            51 =>
            array (
                'id' => 938,
                'name' => 'Modules\\GeoLocale\\Http\\Controllers\\CountryController@show',
                'controller_path' => 'Modules\\GeoLocale\\Http\\Controllers\\CountryController',
                'controller_name' => 'CountryController',
                'method_name' => 'show',
            ),
            52 =>
            array (
                'id' => 939,
                'name' => 'Modules\\GeoLocale\\Http\\Controllers\\CountryController@store',
                'controller_path' => 'Modules\\GeoLocale\\Http\\Controllers\\CountryController',
                'controller_name' => 'CountryController',
                'method_name' => 'store',
            ),
            53 =>
            array (
                'id' => 940,
                'name' => 'Modules\\GeoLocale\\Http\\Controllers\\CountryController@update',
                'controller_path' => 'Modules\\GeoLocale\\Http\\Controllers\\CountryController',
                'controller_name' => 'CountryController',
                'method_name' => 'update',
            ),
            54 =>
            array (
                'id' => 941,
                'name' => 'Modules\\GeoLocale\\Http\\Controllers\\CountryController@destroy',
                'controller_path' => 'Modules\\GeoLocale\\Http\\Controllers\\CountryController',
                'controller_name' => 'CountryController',
                'method_name' => 'destroy',
            ),
            55 =>
            array (
                'id' => 942,
                'name' => 'Modules\\GeoLocale\\Http\\Controllers\\StateController@index',
                'controller_path' => 'Modules\\GeoLocale\\Http\\Controllers\\StateController',
                'controller_name' => 'StateController',
                'method_name' => 'index',
            ),
            56 =>
            array (
                'id' => 943,
                'name' => 'Modules\\GeoLocale\\Http\\Controllers\\StateController@show',
                'controller_path' => 'Modules\\GeoLocale\\Http\\Controllers\\StateController',
                'controller_name' => 'StateController',
                'method_name' => 'show',
            ),
            57 =>
            array (
                'id' => 944,
                'name' => 'Modules\\GeoLocale\\Http\\Controllers\\StateController@getCountryStates',
                'controller_path' => 'Modules\\GeoLocale\\Http\\Controllers\\StateController',
                'controller_name' => 'StateController',
                'method_name' => 'getCountryStates',
            ),
            58 =>
            array (
                'id' => 945,
                'name' => 'Modules\\GeoLocale\\Http\\Controllers\\StateController@store',
                'controller_path' => 'Modules\\GeoLocale\\Http\\Controllers\\StateController',
                'controller_name' => 'StateController',
                'method_name' => 'store',
            ),
            59 =>
            array (
                'id' => 946,
                'name' => 'Modules\\GeoLocale\\Http\\Controllers\\StateController@update',
                'controller_path' => 'Modules\\GeoLocale\\Http\\Controllers\\StateController',
                'controller_name' => 'StateController',
                'method_name' => 'update',
            ),
            60 =>
            array (
                'id' => 947,
                'name' => 'Modules\\GeoLocale\\Http\\Controllers\\StateController@destroy',
                'controller_path' => 'Modules\\GeoLocale\\Http\\Controllers\\StateController',
                'controller_name' => 'StateController',
                'method_name' => 'destroy',
            ),
            61 =>
            array (
                'id' => 948,
                'name' => 'Modules\\GeoLocale\\Http\\Controllers\\CityController@getCountryCities',
                'controller_path' => 'Modules\\GeoLocale\\Http\\Controllers\\CityController',
                'controller_name' => 'CityController',
                'method_name' => 'getCountryCities',
            ),
            62 =>
            array (
                'id' => 949,
                'name' => 'Modules\\GeoLocale\\Http\\Controllers\\CityController@getStateCities',
                'controller_path' => 'Modules\\GeoLocale\\Http\\Controllers\\CityController',
                'controller_name' => 'CityController',
                'method_name' => 'getStateCities',
            ),
            63 =>
            array (
                'id' => 950,
                'name' => 'Modules\\GeoLocale\\Http\\Controllers\\CityController@store',
                'controller_path' => 'Modules\\GeoLocale\\Http\\Controllers\\CityController',
                'controller_name' => 'CityController',
                'method_name' => 'store',
            ),
            64 =>
            array (
                'id' => 951,
                'name' => 'Modules\\GeoLocale\\Http\\Controllers\\CityController@update',
                'controller_path' => 'Modules\\GeoLocale\\Http\\Controllers\\CityController',
                'controller_name' => 'CityController',
                'method_name' => 'update',
            ),
            65 =>
            array (
                'id' => 952,
                'name' => 'Modules\\GeoLocale\\Http\\Controllers\\CityController@destroy',
                'controller_path' => 'Modules\\GeoLocale\\Http\\Controllers\\CityController',
                'controller_name' => 'CityController',
                'method_name' => 'destroy',
            ),
            66 =>
            array (
                'id' => 953,
                'name' => 'Modules\\Tax\\Http\\Controllers\\TaxClassController@index',
                'controller_path' => 'Modules\\Tax\\Http\\Controllers\\TaxClassController',
                'controller_name' => 'TaxClassController',
                'method_name' => 'index',
            ),
            67 =>
            array (
                'id' => 954,
                'name' => 'Modules\\Tax\\Http\\Controllers\\TaxClassController@store',
                'controller_path' => 'Modules\\Tax\\Http\\Controllers\\TaxClassController',
                'controller_name' => 'TaxClassController',
                'method_name' => 'store',
            ),
            68 =>
            array (
                'id' => 955,
                'name' => 'Modules\\Tax\\Http\\Controllers\\TaxClassController@update',
                'controller_path' => 'Modules\\Tax\\Http\\Controllers\\TaxClassController',
                'controller_name' => 'TaxClassController',
                'method_name' => 'update',
            ),
            69 =>
            array (
                'id' => 956,
                'name' => 'Modules\\Tax\\Http\\Controllers\\TaxClassController@destroy',
                'controller_path' => 'Modules\\Tax\\Http\\Controllers\\TaxClassController',
                'controller_name' => 'TaxClassController',
                'method_name' => 'destroy',
            ),
            70 =>
            array (
                'id' => 957,
                'name' => 'Modules\\Tax\\Http\\Controllers\\TaxClassController@setting',
                'controller_path' => 'Modules\\Tax\\Http\\Controllers\\TaxClassController',
                'controller_name' => 'TaxClassController',
                'method_name' => 'setting',
            ),
            71 =>
            array (
                'id' => 958,
                'name' => 'Modules\\Tax\\Http\\Controllers\\TaxRateController@update',
                'controller_path' => 'Modules\\Tax\\Http\\Controllers\\TaxRateController',
                'controller_name' => 'TaxRateController',
                'method_name' => 'update',
            ),
            72 =>
            array (
                'id' => 998,
                'name' => 'App\\Http\\Controllers\\Api\\User\\ReviewController@store',
                'controller_path' => 'App\\Http\\Controllers\\Api\\User\\ReviewController',
                'controller_name' => 'ReviewController',
                'method_name' => 'store',
            ),
            73 =>
            array (
                'id' => 1001,
                'name' => 'App\\Http\\Controllers\\Api\\User\\ReviewController@update',
                'controller_path' => 'App\\Http\\Controllers\\Api\\User\\ReviewController',
                'controller_name' => 'ReviewController',
                'method_name' => 'update',
            ),
            74 =>
            array (
                'id' => 1002,
                'name' => 'App\\Http\\Controllers\\Api\\User\\ReviewController@deleteFile',
                'controller_path' => 'App\\Http\\Controllers\\Api\\User\\ReviewController',
                'controller_name' => 'ReviewController',
                'method_name' => 'deleteFile',
            ),
            75 =>
            array (
                'id' => 1004,
                'name' => 'Modules\\Refund\\Http\\Controllers\\Api\\User\\RefundController@getReason',
                'controller_path' => 'Modules\\Refund\\Http\\Controllers\\Api\\User\\RefundController',
                'controller_name' => 'RefundController',
                'method_name' => 'getReason',
            ),
            76 =>
            array (
                'id' => 1005,
                'name' => 'Modules\\Refund\\Http\\Controllers\\Api\\User\\RefundController@store',
                'controller_path' => 'Modules\\Refund\\Http\\Controllers\\Api\\User\\RefundController',
                'controller_name' => 'RefundController',
                'method_name' => 'store',
            ),
            77 =>
            array (
                'id' => 1006,
                'name' => 'Modules\\Refund\\Http\\Controllers\\Api\\User\\RefundController@details',
                'controller_path' => 'Modules\\Refund\\Http\\Controllers\\Api\\User\\RefundController',
                'controller_name' => 'RefundController',
                'method_name' => 'details',
            ),
            78 =>
            array (
                'id' => 1007,
                'name' => 'Modules\\Refund\\Http\\Controllers\\Api\\User\\RefundController@storeMessage',
                'controller_path' => 'Modules\\Refund\\Http\\Controllers\\Api\\User\\RefundController',
                'controller_name' => 'RefundController',
                'method_name' => 'storeMessage',
            ),
            79 =>
            array (
                'id' => 1008,
                'name' => 'Modules\\Shipping\\Http\\Controllers\\ShippingController@storeClass',
                'controller_path' => 'Modules\\Shipping\\Http\\Controllers\\ShippingController',
                'controller_name' => 'ShippingController',
                'method_name' => 'storeClass',
            ),
            80 =>
            array (
                'id' => 1009,
                'name' => 'Modules\\Shipping\\Http\\Controllers\\ShippingController@storeSetting',
                'controller_path' => 'Modules\\Shipping\\Http\\Controllers\\ShippingController',
                'controller_name' => 'ShippingController',
                'method_name' => 'storeSetting',
            ),
            81 =>
            array (
                'id' => 1010,
                'name' => 'App\\Http\\Controllers\\Site\\LoginController@verifyByOtp',
                'controller_path' => 'App\\Http\\Controllers\\Site\\LoginController',
                'controller_name' => 'LoginController',
                'method_name' => 'verifyByOtp',
            ),
            82 =>
            array (
                'id' => 1011,
                'name' => 'App\\Http\\Controllers\\Site\\LoginController@resendUserVerificationCode',
                'controller_path' => 'App\\Http\\Controllers\\Site\\LoginController',
                'controller_name' => 'LoginController',
                'method_name' => 'resendUserVerificationCode',
            ),
            83 =>
            array (
                'id' => 1012,
                'name' => 'App\\Http\\Controllers\\Site\\RegisteredSellerController@showSignUpForm',
                'controller_path' => 'App\\Http\\Controllers\\Site\\RegisteredSellerController',
                'controller_name' => 'RegisteredSellerController',
                'method_name' => 'showSignUpForm',
            ),
            84 =>
            array (
                'id' => 1013,
                'name' => 'App\\Http\\Controllers\\Site\\RegisteredSellerController@signUp',
                'controller_path' => 'App\\Http\\Controllers\\Site\\RegisteredSellerController',
                'controller_name' => 'RegisteredSellerController',
                'method_name' => 'signUp',
            ),
            85 =>
            array (
                'id' => 1014,
                'name' => 'App\\Http\\Controllers\\Site\\RegisteredSellerController@otpForm',
                'controller_path' => 'App\\Http\\Controllers\\Site\\RegisteredSellerController',
                'controller_name' => 'RegisteredSellerController',
                'method_name' => 'otpForm',
            ),
            86 =>
            array (
                'id' => 1015,
                'name' => 'App\\Http\\Controllers\\Site\\RegisteredSellerController@verification',
                'controller_path' => 'App\\Http\\Controllers\\Site\\RegisteredSellerController',
                'controller_name' => 'RegisteredSellerController',
                'method_name' => 'verification',
            ),
            87 =>
            array (
                'id' => 1016,
                'name' => 'App\\Http\\Controllers\\Site\\RegisteredSellerController@otpVerification',
                'controller_path' => 'App\\Http\\Controllers\\Site\\RegisteredSellerController',
                'controller_name' => 'RegisteredSellerController',
                'method_name' => 'otpVerification',
            ),
            88 =>
            array (
                'id' => 1017,
                'name' => 'App\\Http\\Controllers\\Site\\LoginController@validMail',
                'controller_path' => 'App\\Http\\Controllers\\Site\\LoginController',
                'controller_name' => 'LoginController',
                'method_name' => 'validMail',
            ),
            89 =>
            array (
                'id' => 1020,
                'name' => 'Modules\\Popup\\Http\\Controllers\\PopupController@mail',
                'controller_path' => 'Modules\\Popup\\Http\\Controllers\\PopupController',
                'controller_name' => 'PopupController',
                'method_name' => 'mail',
            ),
            90 =>
            array (
                'id' => 1021,
                'name' => 'Modules\\Shipping\\Http\\Controllers\\Api\\ShippingZoneController@index',
                'controller_path' => 'Modules\\Shipping\\Http\\Controllers\\Api\\ShippingZoneController',
                'controller_name' => 'ShippingZoneController',
                'method_name' => 'index',
            ),
            91 =>
            array (
                'id' => 1022,
                'name' => 'Modules\\Shipping\\Http\\Controllers\\Api\\ShippingZoneController@store',
                'controller_path' => 'Modules\\Shipping\\Http\\Controllers\\Api\\ShippingZoneController',
                'controller_name' => 'ShippingZoneController',
                'method_name' => 'store',
            ),
            92 =>
            array (
                'id' => 1023,
                'name' => 'Modules\\Shipping\\Http\\Controllers\\Api\\ShippingZoneController@detail',
                'controller_path' => 'Modules\\Shipping\\Http\\Controllers\\Api\\ShippingZoneController',
                'controller_name' => 'ShippingZoneController',
                'method_name' => 'detail',
            ),
            93 =>
            array (
                'id' => 1024,
                'name' => 'Modules\\Shipping\\Http\\Controllers\\Api\\ShippingZoneController@update',
                'controller_path' => 'Modules\\Shipping\\Http\\Controllers\\Api\\ShippingZoneController',
                'controller_name' => 'ShippingZoneController',
                'method_name' => 'update',
            ),
            94 =>
            array (
                'id' => 1025,
                'name' => 'Modules\\Shipping\\Http\\Controllers\\Api\\ShippingZoneController@destroy',
                'controller_path' => 'Modules\\Shipping\\Http\\Controllers\\Api\\ShippingZoneController',
                'controller_name' => 'ShippingZoneController',
                'method_name' => 'destroy',
            ),
            95 =>
            array (
                'id' => 1026,
                'name' => 'Modules\\Shipping\\Http\\Controllers\\Api\\ShippingClassController@index',
                'controller_path' => 'Modules\\Shipping\\Http\\Controllers\\Api\\ShippingClassController',
                'controller_name' => 'ShippingClassController',
                'method_name' => 'index',
            ),
            96 =>
            array (
                'id' => 1027,
                'name' => 'Modules\\Shipping\\Http\\Controllers\\Api\\ShippingClassController@store',
                'controller_path' => 'Modules\\Shipping\\Http\\Controllers\\Api\\ShippingClassController',
                'controller_name' => 'ShippingClassController',
                'method_name' => 'store',
            ),
            97 =>
            array (
                'id' => 1028,
                'name' => 'Modules\\Shipping\\Http\\Controllers\\Api\\ShippingClassController@detail',
                'controller_path' => 'Modules\\Shipping\\Http\\Controllers\\Api\\ShippingClassController',
                'controller_name' => 'ShippingClassController',
                'method_name' => 'detail',
            ),
            98 =>
            array (
                'id' => 1029,
                'name' => 'Modules\\Shipping\\Http\\Controllers\\Api\\ShippingClassController@update',
                'controller_path' => 'Modules\\Shipping\\Http\\Controllers\\Api\\ShippingClassController',
                'controller_name' => 'ShippingClassController',
                'method_name' => 'update',
            ),
            99 =>
            array (
                'id' => 1030,
                'name' => 'Modules\\Shipping\\Http\\Controllers\\Api\\ShippingClassController@destroy',
                'controller_path' => 'Modules\\Shipping\\Http\\Controllers\\Api\\ShippingClassController',
                'controller_name' => 'ShippingClassController',
                'method_name' => 'destroy',
            ),
            100 =>
            array (
                'id' => 1031,
                'name' => 'Modules\\Shipping\\Http\\Controllers\\Api\\ShippingMethodController@index',
                'controller_path' => 'Modules\\Shipping\\Http\\Controllers\\Api\\ShippingMethodController',
                'controller_name' => 'ShippingMethodController',
                'method_name' => 'index',
            ),
            101 =>
            array (
                'id' => 1032,
                'name' => 'Modules\\Shipping\\Http\\Controllers\\Api\\ShippingMethodController@detail',
                'controller_path' => 'Modules\\Shipping\\Http\\Controllers\\Api\\ShippingMethodController',
                'controller_name' => 'ShippingMethodController',
                'method_name' => 'detail',
            ),
            102 =>
            array (
                'id' => 1033,
                'name' => 'Modules\\Shipping\\Http\\Controllers\\Api\\ShippingZoneGeolocaleController@index',
                'controller_path' => 'Modules\\Shipping\\Http\\Controllers\\Api\\ShippingZoneGeolocaleController',
                'controller_name' => 'ShippingZoneGeolocaleController',
                'method_name' => 'index',
            ),
            103 =>
            array (
                'id' => 1034,
                'name' => 'Modules\\Shipping\\Http\\Controllers\\Api\\ShippingZoneGeolocaleController@store',
                'controller_path' => 'Modules\\Shipping\\Http\\Controllers\\Api\\ShippingZoneGeolocaleController',
                'controller_name' => 'ShippingZoneGeolocaleController',
                'method_name' => 'store',
            ),
            104 =>
            array (
                'id' => 1035,
                'name' => 'Modules\\Shipping\\Http\\Controllers\\Api\\ShippingZoneGeolocaleController@detail',
                'controller_path' => 'Modules\\Shipping\\Http\\Controllers\\Api\\ShippingZoneGeolocaleController',
                'controller_name' => 'ShippingZoneGeolocaleController',
                'method_name' => 'detail',
            ),
            105 =>
            array (
                'id' => 1036,
                'name' => 'Modules\\Shipping\\Http\\Controllers\\Api\\ShippingZoneGeolocaleController@update',
                'controller_path' => 'Modules\\Shipping\\Http\\Controllers\\Api\\ShippingZoneGeolocaleController',
                'controller_name' => 'ShippingZoneGeolocaleController',
                'method_name' => 'update',
            ),
            106 =>
            array (
                'id' => 1037,
                'name' => 'Modules\\Shipping\\Http\\Controllers\\Api\\ShippingZoneGeolocaleController@destroy',
                'controller_path' => 'Modules\\Shipping\\Http\\Controllers\\Api\\ShippingZoneGeolocaleController',
                'controller_name' => 'ShippingZoneGeolocaleController',
                'method_name' => 'destroy',
            ),
            107 =>
            array (
                'id' => 1038,
                'name' => 'Modules\\Shipping\\Http\\Controllers\\Api\\ShippingZoneClassController@index',
                'controller_path' => 'Modules\\Shipping\\Http\\Controllers\\Api\\ShippingZoneClassController',
                'controller_name' => 'ShippingZoneClassController',
                'method_name' => 'index',
            ),
            108 =>
            array (
                'id' => 1039,
                'name' => 'Modules\\Shipping\\Http\\Controllers\\Api\\ShippingZoneClassController@store',
                'controller_path' => 'Modules\\Shipping\\Http\\Controllers\\Api\\ShippingZoneClassController',
                'controller_name' => 'ShippingZoneClassController',
                'method_name' => 'store',
            ),
            109 =>
            array (
                'id' => 1040,
                'name' => 'Modules\\Shipping\\Http\\Controllers\\Api\\ShippingZoneClassController@detail',
                'controller_path' => 'Modules\\Shipping\\Http\\Controllers\\Api\\ShippingZoneClassController',
                'controller_name' => 'ShippingZoneClassController',
                'method_name' => 'detail',
            ),
            110 =>
            array (
                'id' => 1041,
                'name' => 'Modules\\Shipping\\Http\\Controllers\\Api\\ShippingZoneClassController@update',
                'controller_path' => 'Modules\\Shipping\\Http\\Controllers\\Api\\ShippingZoneClassController',
                'controller_name' => 'ShippingZoneClassController',
                'method_name' => 'update',
            ),
            111 =>
            array (
                'id' => 1042,
                'name' => 'Modules\\Shipping\\Http\\Controllers\\Api\\ShippingZoneClassController@destroy',
                'controller_path' => 'Modules\\Shipping\\Http\\Controllers\\Api\\ShippingZoneClassController',
                'controller_name' => 'ShippingZoneClassController',
                'method_name' => 'destroy',
            ),
            112 =>
            array (
                'id' => 1043,
                'name' => 'Modules\\Shipping\\Http\\Controllers\\Api\\ShippingZoneMethodController@index',
                'controller_path' => 'Modules\\Shipping\\Http\\Controllers\\Api\\ShippingZoneMethodController',
                'controller_name' => 'ShippingZoneMethodController',
                'method_name' => 'index',
            ),
            113 =>
            array (
                'id' => 1044,
                'name' => 'Modules\\Shipping\\Http\\Controllers\\Api\\ShippingZoneMethodController@store',
                'controller_path' => 'Modules\\Shipping\\Http\\Controllers\\Api\\ShippingZoneMethodController',
                'controller_name' => 'ShippingZoneMethodController',
                'method_name' => 'store',
            ),
            114 =>
            array (
                'id' => 1045,
                'name' => 'Modules\\Shipping\\Http\\Controllers\\Api\\ShippingZoneMethodController@detail',
                'controller_path' => 'Modules\\Shipping\\Http\\Controllers\\Api\\ShippingZoneMethodController',
                'controller_name' => 'ShippingZoneMethodController',
                'method_name' => 'detail',
            ),
            115 =>
            array (
                'id' => 1046,
                'name' => 'Modules\\Shipping\\Http\\Controllers\\Api\\ShippingZoneMethodController@update',
                'controller_path' => 'Modules\\Shipping\\Http\\Controllers\\Api\\ShippingZoneMethodController',
                'controller_name' => 'ShippingZoneMethodController',
                'method_name' => 'update',
            ),
            116 =>
            array (
                'id' => 1047,
                'name' => 'Modules\\Shipping\\Http\\Controllers\\Api\\ShippingZoneMethodController@destroy',
                'controller_path' => 'Modules\\Shipping\\Http\\Controllers\\Api\\ShippingZoneMethodController',
                'controller_name' => 'ShippingZoneMethodController',
                'method_name' => 'destroy',
            ),
            117 =>
            array (
                'id' => 1048,
                'name' => 'Modules\\Tax\\Http\\Controllers\\Api\\TaxClassController@index',
                'controller_path' => 'Modules\\Tax\\Http\\Controllers\\Api\\TaxClassController',
                'controller_name' => 'TaxClassController',
                'method_name' => 'index',
            ),
            118 =>
            array (
                'id' => 1049,
                'name' => 'Modules\\Tax\\Http\\Controllers\\Api\\TaxClassController@store',
                'controller_path' => 'Modules\\Tax\\Http\\Controllers\\Api\\TaxClassController',
                'controller_name' => 'TaxClassController',
                'method_name' => 'store',
            ),
            119 =>
            array (
                'id' => 1050,
                'name' => 'Modules\\Tax\\Http\\Controllers\\Api\\TaxClassController@destroy',
                'controller_path' => 'Modules\\Tax\\Http\\Controllers\\Api\\TaxClassController',
                'controller_name' => 'TaxClassController',
                'method_name' => 'destroy',
            ),
            120 =>
            array (
                'id' => 1051,
                'name' => 'Modules\\Tax\\Http\\Controllers\\Api\\TaxRateController@index',
                'controller_path' => 'Modules\\Tax\\Http\\Controllers\\Api\\TaxRateController',
                'controller_name' => 'TaxRateController',
                'method_name' => 'index',
            ),
            121 =>
            array (
                'id' => 1052,
                'name' => 'Modules\\Tax\\Http\\Controllers\\Api\\TaxRateController@store',
                'controller_path' => 'Modules\\Tax\\Http\\Controllers\\Api\\TaxRateController',
                'controller_name' => 'TaxRateController',
                'method_name' => 'store',
            ),
            122 =>
            array (
                'id' => 1053,
                'name' => 'Modules\\Tax\\Http\\Controllers\\Api\\TaxRateController@detail',
                'controller_path' => 'Modules\\Tax\\Http\\Controllers\\Api\\TaxRateController',
                'controller_name' => 'TaxRateController',
                'method_name' => 'detail',
            ),
            123 =>
            array (
                'id' => 1054,
                'name' => 'Modules\\Tax\\Http\\Controllers\\Api\\TaxRateController@update',
                'controller_path' => 'Modules\\Tax\\Http\\Controllers\\Api\\TaxRateController',
                'controller_name' => 'TaxRateController',
                'method_name' => 'update',
            ),
            124 =>
            array (
                'id' => 1055,
                'name' => 'Modules\\Tax\\Http\\Controllers\\Api\\TaxRateController@destroy',
                'controller_path' => 'Modules\\Tax\\Http\\Controllers\\Api\\TaxRateController',
                'controller_name' => 'TaxRateController',
                'method_name' => 'destroy',
            ),
            125 =>
            array (
                'id' => 1058,
                'name' => 'Modules\\Ticket\\Http\\Controllers\\ChatController@getConversations',
                'controller_path' => 'Modules\\Ticket\\Http\\Controllers\\ChatController',
                'controller_name' => 'ChatController',
                'method_name' => 'getConversations',
            ),
            126 =>
            array (
                'id' => 1059,
                'name' => 'Modules\\Ticket\\Http\\Controllers\\ChatController@sendProductDetails',
                'controller_path' => 'Modules\\Ticket\\Http\\Controllers\\ChatController',
                'controller_name' => 'ChatController',
                'method_name' => 'sendProductDetails',
            ),
            127 =>
            array (
                'id' => 1060,
                'name' => 'Modules\\Ticket\\Http\\Controllers\\ChatController@contact-list',
                'controller_path' => 'Modules\\Ticket\\Http\\Controllers\\ChatController',
                'controller_name' => 'ChatController',
                'method_name' => 'contact-list',
            ),
            128 =>
            array (
                'id' => 1061,
                'name' => 'Modules\\Ticket\\Http\\Controllers\\ChatController@storeMessage',
                'controller_path' => 'Modules\\Ticket\\Http\\Controllers\\ChatController',
                'controller_name' => 'ChatController',
                'method_name' => 'storeMessage',
            ),
            129 =>
            array (
                'id' => 1062,
                'name' => 'Modules\\Ticket\\Http\\Controllers\\ChatController@createChat',
                'controller_path' => 'Modules\\Ticket\\Http\\Controllers\\ChatController',
                'controller_name' => 'ChatController',
                'method_name' => 'createChat',
            ),
            130 =>
            array (
                'id' => 1063,
                'name' => 'Modules\\Ticket\\Http\\Controllers\\ChatController@inboxRefresh',
                'controller_path' => 'Modules\\Ticket\\Http\\Controllers\\ChatController',
                'controller_name' => 'ChatController',
                'method_name' => 'inboxRefresh',
            ),
            131 =>
            array (
                'id' => 1064,
                'name' => 'Modules\\Ticket\\Http\\Controllers\\TicketController@index',
                'controller_path' => 'Modules\\Ticket\\Http\\Controllers\\TicketController',
                'controller_name' => 'TicketController',
                'method_name' => 'index',
            ),
            132 =>
            array (
                'id' => 1065,
                'name' => 'Modules\\Ticket\\Http\\Controllers\\TicketController@store',
                'controller_path' => 'Modules\\Ticket\\Http\\Controllers\\TicketController',
                'controller_name' => 'TicketController',
                'method_name' => 'store',
            ),
            133 =>
            array (
                'id' => 1066,
                'name' => 'Modules\\Ticket\\Http\\Controllers\\TicketController@view',
                'controller_path' => 'Modules\\Ticket\\Http\\Controllers\\TicketController',
                'controller_name' => 'TicketController',
                'method_name' => 'view',
            ),
            134 =>
            array (
                'id' => 1067,
                'name' => 'Modules\\Ticket\\Http\\Controllers\\TicketController@replyStore',
                'controller_path' => 'Modules\\Ticket\\Http\\Controllers\\TicketController',
                'controller_name' => 'TicketController',
                'method_name' => 'replyStore',
            ),
            135 =>
            array (
                'id' => 1068,
                'name' => 'Modules\\Ticket\\Http\\Controllers\\TicketController@edit',
                'controller_path' => 'Modules\\Ticket\\Http\\Controllers\\TicketController',
                'controller_name' => 'TicketController',
                'method_name' => 'edit',
            ),
            136 =>
            array (
                'id' => 1069,
                'name' => 'Modules\\Ticket\\Http\\Controllers\\TicketController@update',
                'controller_path' => 'Modules\\Ticket\\Http\\Controllers\\TicketController',
                'controller_name' => 'TicketController',
                'method_name' => 'update',
            ),
            137 =>
            array (
                'id' => 1070,
                'name' => 'Modules\\Ticket\\Http\\Controllers\\TicketController@pdf',
                'controller_path' => 'Modules\\Ticket\\Http\\Controllers\\TicketController',
                'controller_name' => 'TicketController',
                'method_name' => 'pdf',
            ),
            138 =>
            array (
                'id' => 1071,
                'name' => 'Modules\\Ticket\\Http\\Controllers\\TicketController@delete',
                'controller_path' => 'Modules\\Ticket\\Http\\Controllers\\TicketController',
                'controller_name' => 'TicketController',
                'method_name' => 'delete',
            ),
            139 =>
            array (
                'id' => 1072,
                'name' => 'Modules\\Ticket\\Http\\Controllers\\TicketController@add',
                'controller_path' => 'Modules\\Ticket\\Http\\Controllers\\TicketController',
                'controller_name' => 'TicketController',
                'method_name' => 'add',
            ),
            140 =>
            array (
                'id' => 1073,
                'name' => 'Modules\\Ticket\\Http\\Controllers\\TicketController@changePriority',
                'controller_path' => 'Modules\\Ticket\\Http\\Controllers\\TicketController',
                'controller_name' => 'TicketController',
                'method_name' => 'changePriority',
            ),
            141 =>
            array (
                'id' => 1074,
                'name' => 'Modules\\Ticket\\Http\\Controllers\\TicketController@changeAssignee',
                'controller_path' => 'Modules\\Ticket\\Http\\Controllers\\TicketController',
                'controller_name' => 'TicketController',
                'method_name' => 'changeAssignee',
            ),
            142 =>
            array (
                'id' => 1075,
                'name' => 'Modules\\Ticket\\Http\\Controllers\\TicketController@updateReply',
                'controller_path' => 'Modules\\Ticket\\Http\\Controllers\\TicketController',
                'controller_name' => 'TicketController',
                'method_name' => 'updateReply',
            ),
            143 =>
            array (
                'id' => 1076,
                'name' => 'Modules\\Ticket\\Http\\Controllers\\CannedController@messages',
                'controller_path' => 'Modules\\Ticket\\Http\\Controllers\\CannedController',
                'controller_name' => 'CannedController',
                'method_name' => 'messages',
            ),
            144 =>
            array (
                'id' => 1077,
                'name' => 'Modules\\Ticket\\Http\\Controllers\\CannedController@storeMessage',
                'controller_path' => 'Modules\\Ticket\\Http\\Controllers\\CannedController',
                'controller_name' => 'CannedController',
                'method_name' => 'storeMessage',
            ),
            145 =>
            array (
                'id' => 1078,
                'name' => 'Modules\\Ticket\\Http\\Controllers\\CannedController@search',
                'controller_path' => 'Modules\\Ticket\\Http\\Controllers\\CannedController',
                'controller_name' => 'CannedController',
                'method_name' => 'search',
            ),
            146 =>
            array (
                'id' => 1079,
                'name' => 'Modules\\Ticket\\Http\\Controllers\\CannedController@editMessage',
                'controller_path' => 'Modules\\Ticket\\Http\\Controllers\\CannedController',
                'controller_name' => 'CannedController',
                'method_name' => 'editMessage',
            ),
            147 =>
            array (
                'id' => 1080,
                'name' => 'Modules\\Ticket\\Http\\Controllers\\CannedController@updateMessage',
                'controller_path' => 'Modules\\Ticket\\Http\\Controllers\\CannedController',
                'controller_name' => 'CannedController',
                'method_name' => 'updateMessage',
            ),
            148 =>
            array (
                'id' => 1081,
                'name' => 'Modules\\Ticket\\Http\\Controllers\\CannedController@destroyMessage',
                'controller_path' => 'Modules\\Ticket\\Http\\Controllers\\CannedController',
                'controller_name' => 'CannedController',
                'method_name' => 'destroyMessage',
            ),
            149 =>
            array (
                'id' => 1082,
                'name' => 'Modules\\Ticket\\Http\\Controllers\\CannedController@links',
                'controller_path' => 'Modules\\Ticket\\Http\\Controllers\\CannedController',
                'controller_name' => 'CannedController',
                'method_name' => 'links',
            ),
            150 =>
            array (
                'id' => 1083,
                'name' => 'Modules\\Ticket\\Http\\Controllers\\CannedController@storeLink',
                'controller_path' => 'Modules\\Ticket\\Http\\Controllers\\CannedController',
                'controller_name' => 'CannedController',
                'method_name' => 'storeLink',
            ),
            151 =>
            array (
                'id' => 1084,
                'name' => 'Modules\\Ticket\\Http\\Controllers\\CannedController@editLink',
                'controller_path' => 'Modules\\Ticket\\Http\\Controllers\\CannedController',
                'controller_name' => 'CannedController',
                'method_name' => 'editLink',
            ),
            152 =>
            array (
                'id' => 1085,
                'name' => 'Modules\\Ticket\\Http\\Controllers\\CannedController@updateLink',
                'controller_path' => 'Modules\\Ticket\\Http\\Controllers\\CannedController',
                'controller_name' => 'CannedController',
                'method_name' => 'updateLink',
            ),
            153 =>
            array (
                'id' => 1086,
                'name' => 'Modules\\Ticket\\Http\\Controllers\\CannedController@destroyLink',
                'controller_path' => 'Modules\\Ticket\\Http\\Controllers\\CannedController',
                'controller_name' => 'CannedController',
                'method_name' => 'destroyLink',
            ),
            154 =>
            array (
                'id' => 1087,
                'name' => 'Modules\\Ticket\\Http\\Controllers\\Vendor\\TicketController@index',
                'controller_path' => 'Modules\\Ticket\\Http\\Controllers\\Vendor\\TicketController',
                'controller_name' => 'TicketController',
                'method_name' => 'index',
            ),
            155 =>
            array (
                'id' => 1088,
                'name' => 'Modules\\Ticket\\Http\\Controllers\\Vendor\\TicketController@create',
                'controller_path' => 'Modules\\Ticket\\Http\\Controllers\\Vendor\\TicketController',
                'controller_name' => 'TicketController',
                'method_name' => 'create',
            ),
            156 =>
            array (
                'id' => 1089,
                'name' => 'Modules\\Ticket\\Http\\Controllers\\Vendor\\TicketController@store',
                'controller_path' => 'Modules\\Ticket\\Http\\Controllers\\Vendor\\TicketController',
                'controller_name' => 'TicketController',
                'method_name' => 'store',
            ),
            157 =>
            array (
                'id' => 1090,
                'name' => 'Modules\\Ticket\\Http\\Controllers\\Vendor\\TicketController@view',
                'controller_path' => 'Modules\\Ticket\\Http\\Controllers\\Vendor\\TicketController',
                'controller_name' => 'TicketController',
                'method_name' => 'view',
            ),
            158 =>
            array (
                'id' => 1091,
                'name' => 'Modules\\Ticket\\Http\\Controllers\\Vendor\\TicketController@update',
                'controller_path' => 'Modules\\Ticket\\Http\\Controllers\\Vendor\\TicketController',
                'controller_name' => 'TicketController',
                'method_name' => 'update',
            ),
            159 =>
            array (
                'id' => 1092,
                'name' => 'Modules\\Ticket\\Http\\Controllers\\Vendor\\TicketController@replyStore',
                'controller_path' => 'Modules\\Ticket\\Http\\Controllers\\Vendor\\TicketController',
                'controller_name' => 'TicketController',
                'method_name' => 'replyStore',
            ),
            160 =>
            array (
                'id' => 1093,
                'name' => 'Modules\\Ticket\\Http\\Controllers\\Vendor\\TicketController@changeStatus',
                'controller_path' => 'Modules\\Ticket\\Http\\Controllers\\Vendor\\TicketController',
                'controller_name' => 'TicketController',
                'method_name' => 'changeStatus',
            ),
            161 =>
            array (
                'id' => 1094,
                'name' => 'Modules\\Ticket\\Http\\Controllers\\Vendor\\TicketController@pdf',
                'controller_path' => 'Modules\\Ticket\\Http\\Controllers\\Vendor\\TicketController',
                'controller_name' => 'TicketController',
                'method_name' => 'pdf',
            ),
            162 =>
            array (
                'id' => 1100,
                'name' => 'App\\Http\\Controllers\\Api\\ProductController@deleteProduct',
                'controller_path' => 'App\\Http\\Controllers\\Api\\ProductController',
                'controller_name' => 'ProductController',
                'method_name' => 'deleteProduct',
            ),
            163 =>
            array (
                'id' => 1101,
                'name' => 'App\\Http\\Controllers\\Api\\PreferenceController@preference',
                'controller_path' => 'App\\Http\\Controllers\\Api\\PreferenceController',
                'controller_name' => 'PreferenceController',
                'method_name' => 'preference',
            ),
            164 =>
            array (
                'id' => 1102,
                'name' => 'App\\Http\\Controllers\\Api\\User\\ProductController@productDetails',
                'controller_path' => 'App\\Http\\Controllers\\Api\\User\\ProductController',
                'controller_name' => 'ProductController',
                'method_name' => 'productDetails',
            ),
            165 =>
            array (
                'id' => 1103,
                'name' => 'App\\Http\\Controllers\\ProductController@createProduct',
                'controller_path' => 'App\\Http\\Controllers\\ProductController',
                'controller_name' => 'ProductController',
                'method_name' => 'createProduct',
            ),
            166 =>
            array (
                'id' => 1104,
                'name' => 'App\\Http\\Controllers\\ProductController@editProductAction',
                'controller_path' => 'App\\Http\\Controllers\\ProductController',
                'controller_name' => 'ProductController',
                'method_name' => 'editProductAction',
            ),
            167 =>
            array (
                'id' => 1105,
                'name' => 'App\\Http\\Controllers\\ProductController@deleteProduct',
                'controller_path' => 'App\\Http\\Controllers\\ProductController',
                'controller_name' => 'ProductController',
                'method_name' => 'deleteProduct',
            ),
            168 =>
            array (
                'id' => 1106,
                'name' => 'App\\Http\\Controllers\\ProductController@forceDeleteProduct',
                'controller_path' => 'App\\Http\\Controllers\\ProductController',
                'controller_name' => 'ProductController',
                'method_name' => 'forceDeleteProduct',
            ),
            169 =>
            array (
                'id' => 1107,
                'name' => 'App\\Http\\Controllers\\ProductController@findProductAjaxQuery',
                'controller_path' => 'App\\Http\\Controllers\\ProductController',
                'controller_name' => 'ProductController',
                'method_name' => 'findProductAjaxQuery',
            ),
            170 =>
            array (
                'id' => 1108,
                'name' => 'App\\Http\\Controllers\\ProductController@findTagsAjaxQuery',
                'controller_path' => 'App\\Http\\Controllers\\ProductController',
                'controller_name' => 'ProductController',
                'method_name' => 'findTagsAjaxQuery',
            ),
            171 =>
            array (
                'id' => 1109,
                'name' => 'App\\Http\\Controllers\\ProductController@productJson',
                'controller_path' => 'App\\Http\\Controllers\\ProductController',
                'controller_name' => 'ProductController',
                'method_name' => 'productJson',
            ),
            172 =>
            array (
                'id' => 1110,
                'name' => 'App\\Http\\Controllers\\Vendor\\ProductController@createProduct',
                'controller_path' => 'App\\Http\\Controllers\\Vendor\\ProductController',
                'controller_name' => 'ProductController',
                'method_name' => 'createProduct',
            ),
            173 =>
            array (
                'id' => 1111,
                'name' => 'App\\Http\\Controllers\\Vendor\\ProductController@editProductAction',
                'controller_path' => 'App\\Http\\Controllers\\Vendor\\ProductController',
                'controller_name' => 'ProductController',
                'method_name' => 'editProductAction',
            ),
            174 =>
            array (
                'id' => 1112,
                'name' => 'App\\Http\\Controllers\\Vendor\\ProductController@deleteProduct',
                'controller_path' => 'App\\Http\\Controllers\\Vendor\\ProductController',
                'controller_name' => 'ProductController',
                'method_name' => 'deleteProduct',
            ),
            175 =>
            array (
                'id' => 1113,
                'name' => 'App\\Http\\Controllers\\Vendor\\ProductController@forceDeleteProduct',
                'controller_path' => 'App\\Http\\Controllers\\Vendor\\ProductController',
                'controller_name' => 'ProductController',
                'method_name' => 'forceDeleteProduct',
            ),
            176 =>
            array (
                'id' => 1114,
                'name' => 'App\\Http\\Controllers\\Site\\CartController@selectShipping',
                'controller_path' => 'App\\Http\\Controllers\\Site\\CartController',
                'controller_name' => 'CartController',
                'method_name' => 'selectShipping',
            ),
            177 =>
            array (
                'id' => 1115,
                'name' => 'App\\Http\\Controllers\\Site\\OrderController@getShippingTax',
                'controller_path' => 'App\\Http\\Controllers\\Site\\OrderController',
                'controller_name' => 'OrderController',
                'method_name' => 'getShippingTax',
            ),
            178 =>
            array (
                'id' => 1116,
                'name' => 'Modules\\Coupon\\Http\\Controllers\\Vendor\\CouponController@item',
                'controller_path' => 'Modules\\Coupon\\Http\\Controllers\\Vendor\\CouponController',
                'controller_name' => 'CouponController',
                'method_name' => 'item',
            ),
            179 =>
            array (
                'id' => 1117,
                'name' => 'Modules\\Ticket\\Http\\Controllers\\TicketController@changeStatus',
                'controller_path' => 'Modules\\Ticket\\Http\\Controllers\\TicketController',
                'controller_name' => 'TicketController',
                'method_name' => 'changeStatus',
            ),
            180 =>
            array (
                'id' => 1120,
                'name' => 'Modules\\MediaManager\\Http\\Controllers\\Vendor\\MediaManagerController@upload',
                'controller_path' => 'Modules\\MediaManager\\Http\\Controllers\\Vendor\\MediaManagerController',
                'controller_name' => 'MediaManagerController',
                'method_name' => 'upload',
            ),
            181 =>
            array (
                'id' => 1122,
                'name' => 'Modules\\MediaManager\\Http\\Controllers\\Vendor\\MediaManagerController@sortFiles',
                'controller_path' => 'Modules\\MediaManager\\Http\\Controllers\\Vendor\\MediaManagerController',
                'controller_name' => 'MediaManagerController',
                'method_name' => 'sortFiles',
            ),
            182 =>
            array (
                'id' => 1126,
                'name' => 'Modules\\MediaManager\\Http\\Controllers\\Vendor\\MediaManagerController@paginateData',
                'controller_path' => 'Modules\\MediaManager\\Http\\Controllers\\Vendor\\MediaManagerController',
                'controller_name' => 'MediaManagerController',
                'method_name' => 'paginateData',
            ),
            183 =>
            array (
                'id' => 1128,
                'name' => 'App\\Http\\Controllers\\Vendor\\ProductController@findProductAjaxQuery',
                'controller_path' => 'App\\Http\\Controllers\\Vendor\\ProductController',
                'controller_name' => 'ProductController',
                'method_name' => 'findProductAjaxQuery',
            ),
            184 =>
            array (
                'id' => 1129,
                'name' => 'App\\Http\\Controllers\\Vendor\\ProductController@findTagsAjaxQuery',
                'controller_path' => 'App\\Http\\Controllers\\Vendor\\ProductController',
                'controller_name' => 'ProductController',
                'method_name' => 'findTagsAjaxQuery',
            ),
            185 =>
            array (
                'id' => 1135,
                'name' => 'Modules\\Ticket\\Http\\Controllers\\TicketController@csv',
                'controller_path' => 'Modules\\Ticket\\Http\\Controllers\\TicketController',
                'controller_name' => 'TicketController',
                'method_name' => 'csv',
            ),
            186 =>
            array (
                'id' => 1136,
                'name' => 'Modules\\Ticket\\Http\\Controllers\\Vendor\\TicketController@csv',
                'controller_path' => 'Modules\\Ticket\\Http\\Controllers\\Vendor\\TicketController',
                'controller_name' => 'TicketController',
                'method_name' => 'csv',
            ),
            187 =>
            array (
                'id' => 1137,
                'name' => 'App\\Http\\Controllers\\Site\\SellerController@searchReview',
                'controller_path' => 'App\\Http\\Controllers\\Site\\SellerController',
                'controller_name' => 'SellerController',
                'method_name' => 'searchReview',
            ),
            188 =>
            array (
                'id' => 1138,
                'name' => 'App\\Http\\Controllers\\Site\\RegisteredSellerController@showRequestForm',
                'controller_path' => 'App\\Http\\Controllers\\Site\\RegisteredSellerController',
                'controller_name' => 'RegisteredSellerController',
                'method_name' => 'showRequestForm',
            ),
            189 =>
            array (
                'id' => 1139,
                'name' => 'App\\Http\\Controllers\\Site\\RegisteredSellerController@sellerRequestStore',
                'controller_path' => 'App\\Http\\Controllers\\Site\\RegisteredSellerController',
                'controller_name' => 'RegisteredSellerController',
                'method_name' => 'sellerRequestStore',
            ),
            190 =>
            array (
                'id' => 1140,
                'name' => 'Modules\\CMS\\Http\\Controllers\\Api\\SliderController@index',
                'controller_path' => 'Modules\\CMS\\Http\\Controllers\\Api\\SliderController',
                'controller_name' => 'SliderController',
                'method_name' => 'index',
            ),
            191 =>
            array (
                'id' => 1141,
                'name' => 'Modules\\GeoLocale\\Http\\Controllers\\Api\\User\\CountryController@index',
                'controller_path' => 'Modules\\GeoLocale\\Http\\Controllers\\Api\\User\\CountryController',
                'controller_name' => 'CountryController',
                'method_name' => 'index',
            ),
            192 =>
            array (
                'id' => 1142,
                'name' => 'Modules\\GeoLocale\\Http\\Controllers\\Api\\User\\CountryController@show',
                'controller_path' => 'Modules\\GeoLocale\\Http\\Controllers\\Api\\User\\CountryController',
                'controller_name' => 'CountryController',
                'method_name' => 'show',
            ),
            193 =>
            array (
                'id' => 1143,
                'name' => 'Modules\\GeoLocale\\Http\\Controllers\\Api\\User\\CountryController@store',
                'controller_path' => 'Modules\\GeoLocale\\Http\\Controllers\\Api\\User\\CountryController',
                'controller_name' => 'CountryController',
                'method_name' => 'store',
            ),
            194 =>
            array (
                'id' => 1144,
                'name' => 'Modules\\GeoLocale\\Http\\Controllers\\Api\\User\\CountryController@update',
                'controller_path' => 'Modules\\GeoLocale\\Http\\Controllers\\Api\\User\\CountryController',
                'controller_name' => 'CountryController',
                'method_name' => 'update',
            ),
            195 =>
            array (
                'id' => 1145,
                'name' => 'Modules\\GeoLocale\\Http\\Controllers\\Api\\User\\CountryController@destroy',
                'controller_path' => 'Modules\\GeoLocale\\Http\\Controllers\\Api\\User\\CountryController',
                'controller_name' => 'CountryController',
                'method_name' => 'destroy',
            ),
            196 =>
            array (
                'id' => 1146,
                'name' => 'Modules\\GeoLocale\\Http\\Controllers\\Api\\User\\StateController@index',
                'controller_path' => 'Modules\\GeoLocale\\Http\\Controllers\\Api\\User\\StateController',
                'controller_name' => 'StateController',
                'method_name' => 'index',
            ),
            197 =>
            array (
                'id' => 1147,
                'name' => 'Modules\\GeoLocale\\Http\\Controllers\\Api\\User\\StateController@show',
                'controller_path' => 'Modules\\GeoLocale\\Http\\Controllers\\Api\\User\\StateController',
                'controller_name' => 'StateController',
                'method_name' => 'show',
            ),
            198 =>
            array (
                'id' => 1148,
                'name' => 'Modules\\GeoLocale\\Http\\Controllers\\Api\\User\\StateController@getCountryStates',
                'controller_path' => 'Modules\\GeoLocale\\Http\\Controllers\\Api\\User\\StateController',
                'controller_name' => 'StateController',
                'method_name' => 'getCountryStates',
            ),
            199 =>
            array (
                'id' => 1149,
                'name' => 'Modules\\GeoLocale\\Http\\Controllers\\Api\\User\\StateController@store',
                'controller_path' => 'Modules\\GeoLocale\\Http\\Controllers\\Api\\User\\StateController',
                'controller_name' => 'StateController',
                'method_name' => 'store',
            ),
            200 =>
            array (
                'id' => 1150,
                'name' => 'Modules\\GeoLocale\\Http\\Controllers\\Api\\User\\StateController@update',
                'controller_path' => 'Modules\\GeoLocale\\Http\\Controllers\\Api\\User\\StateController',
                'controller_name' => 'StateController',
                'method_name' => 'update',
            ),
            201 =>
            array (
                'id' => 1151,
                'name' => 'Modules\\GeoLocale\\Http\\Controllers\\Api\\User\\StateController@destroy',
                'controller_path' => 'Modules\\GeoLocale\\Http\\Controllers\\Api\\User\\StateController',
                'controller_name' => 'StateController',
                'method_name' => 'destroy',
            ),
            202 =>
            array (
                'id' => 1152,
                'name' => 'Modules\\GeoLocale\\Http\\Controllers\\Api\\User\\CityController@getCountryCities',
                'controller_path' => 'Modules\\GeoLocale\\Http\\Controllers\\Api\\User\\CityController',
                'controller_name' => 'CityController',
                'method_name' => 'getCountryCities',
            ),
            203 =>
            array (
                'id' => 1153,
                'name' => 'Modules\\GeoLocale\\Http\\Controllers\\Api\\User\\CityController@getStateCities',
                'controller_path' => 'Modules\\GeoLocale\\Http\\Controllers\\Api\\User\\CityController',
                'controller_name' => 'CityController',
                'method_name' => 'getStateCities',
            ),
            204 =>
            array (
                'id' => 1154,
                'name' => 'Modules\\GeoLocale\\Http\\Controllers\\Api\\User\\CityController@store',
                'controller_path' => 'Modules\\GeoLocale\\Http\\Controllers\\Api\\User\\CityController',
                'controller_name' => 'CityController',
                'method_name' => 'store',
            ),
            205 =>
            array (
                'id' => 1155,
                'name' => 'Modules\\GeoLocale\\Http\\Controllers\\Api\\User\\CityController@update',
                'controller_path' => 'Modules\\GeoLocale\\Http\\Controllers\\Api\\User\\CityController',
                'controller_name' => 'CityController',
                'method_name' => 'update',
            ),
            206 =>
            array (
                'id' => 1156,
                'name' => 'Modules\\GeoLocale\\Http\\Controllers\\Api\\User\\CityController@destroy',
                'controller_path' => 'Modules\\GeoLocale\\Http\\Controllers\\Api\\User\\CityController',
                'controller_name' => 'CityController',
                'method_name' => 'destroy',
            ),
            207 =>
            array (
                'id' => 1157,
                'name' => 'App\\Http\\Controllers\\Api\\User\\ReviewController@productReview',
                'controller_path' => 'App\\Http\\Controllers\\Api\\User\\ReviewController',
                'controller_name' => 'ReviewController',
                'method_name' => 'productReview',
            ),
            208 =>
            array (
                'id' => 1158,
                'name' => 'Modules\\Ticket\\Http\\Controllers\\Vendor\\FilesController@downloadAttachment',
                'controller_path' => 'Modules\\Ticket\\Http\\Controllers\\Vendor\\FilesController',
                'controller_name' => 'FilesController',
                'method_name' => 'downloadAttachment',
            ),
            209 =>
            array (
                'id' => 1161,
                'name' => 'FilesController@uploadEventAttachments',
                'controller_path' => 'FilesController',
                'controller_name' => 'FilesController',
                'method_name' => 'uploadEventAttachments',
            ),
            210 =>
            array (
                'id' => 1162,
                'name' => 'FilesController@deleteEventAttachment',
                'controller_path' => 'FilesController',
                'controller_name' => 'FilesController',
                'method_name' => 'deleteEventAttachment',
            ),
            211 =>
            array (
                'id' => 1163,
                'name' => 'App\\Http\\Controllers\\Api\\User\\CartController@selectShipping',
                'controller_path' => 'App\\Http\\Controllers\\Api\\User\\CartController',
                'controller_name' => 'CartController',
                'method_name' => 'selectShipping',
            ),
            212 =>
            array (
                'id' => 1164,
                'name' => 'App\\Http\\Controllers\\Site\\OrderController@payment',
                'controller_path' => 'App\\Http\\Controllers\\Site\\OrderController',
                'controller_name' => 'OrderController',
                'method_name' => 'payment',
            ),
            213 =>
            array (
                'id' => 1165,
                'name' => 'App\\Http\\Controllers\\Site\\SiteController@getComponentProduct',
                'controller_path' => 'App\\Http\\Controllers\\Site\\SiteController',
                'controller_name' => 'SiteController',
                'method_name' => 'getComponentProduct',
            ),
            214 =>
            array (
                'id' => 1166,
                'name' => 'Modules\\CMS\\Http\\Controllers\\BuilderController@updateAllComponents',
                'controller_path' => 'Modules\\CMS\\Http\\Controllers\\BuilderController',
                'controller_name' => 'BuilderController',
                'method_name' => 'updateAllComponents',
            ),
            215 =>
            array (
                'id' => 1167,
                'name' => 'Modules\\Refund\\Http\\Controllers\\Api\\User\\RefundController@getMessage',
                'controller_path' => 'Modules\\Refund\\Http\\Controllers\\Api\\User\\RefundController',
                'controller_name' => 'RefundController',
                'method_name' => 'getMessage',
            ),
            216 =>
            array (
                'id' => 1168,
                'name' => 'Infoamin\\Installer\\Http\\Controllers\\WelcomeController@welcome',
                'controller_path' => 'Infoamin\\Installer\\Http\\Controllers\\WelcomeController',
                'controller_name' => 'WelcomeController',
                'method_name' => 'welcome',
            ),
            217 =>
            array (
                'id' => 1169,
                'name' => 'Infoamin\\Installer\\Http\\Controllers\\DatabaseController@create',
                'controller_path' => 'Infoamin\\Installer\\Http\\Controllers\\DatabaseController',
                'controller_name' => 'DatabaseController',
                'method_name' => 'create',
            ),
            218 =>
            array (
                'id' => 1170,
                'name' => 'Infoamin\\Installer\\Http\\Controllers\\RequirementsController@requirements',
                'controller_path' => 'Infoamin\\Installer\\Http\\Controllers\\RequirementsController',
                'controller_name' => 'RequirementsController',
                'method_name' => 'requirements',
            ),
            219 =>
            array (
                'id' => 1171,
                'name' => 'Infoamin\\Installer\\Http\\Controllers\\PermissionsController@checkPermissions',
                'controller_path' => 'Infoamin\\Installer\\Http\\Controllers\\PermissionsController',
                'controller_name' => 'PermissionsController',
                'method_name' => 'checkPermissions',
            ),
            220 =>
            array (
                'id' => 1172,
                'name' => 'Infoamin\\Installer\\Http\\Controllers\\DatabaseController@seedMigrate',
                'controller_path' => 'Infoamin\\Installer\\Http\\Controllers\\DatabaseController',
                'controller_name' => 'DatabaseController',
                'method_name' => 'seedMigrate',
            ),
            221 =>
            array (
                'id' => 1173,
                'name' => 'Infoamin\\Installer\\Http\\Controllers\\PermissionsController@verifyPurchaseCode',
                'controller_path' => 'Infoamin\\Installer\\Http\\Controllers\\PermissionsController',
                'controller_name' => 'PermissionsController',
                'method_name' => 'verifyPurchaseCode',
            ),
            222 =>
            array (
                'id' => 1174,
                'name' => 'Infoamin\\Installer\\Http\\Controllers\\DatabaseController@store',
                'controller_path' => 'Infoamin\\Installer\\Http\\Controllers\\DatabaseController',
                'controller_name' => 'DatabaseController',
                'method_name' => 'store',
            ),
            223 =>
            array (
                'id' => 1175,
                'name' => 'Infoamin\\Installer\\Http\\Controllers\\UserController@createUser',
                'controller_path' => 'Infoamin\\Installer\\Http\\Controllers\\UserController',
                'controller_name' => 'UserController',
                'method_name' => 'createUser',
            ),
            224 =>
            array (
                'id' => 1176,
                'name' => 'Infoamin\\Installer\\Http\\Controllers\\UserController@storeUser',
                'controller_path' => 'Infoamin\\Installer\\Http\\Controllers\\UserController',
                'controller_name' => 'UserController',
                'method_name' => 'storeUser',
            ),
            225 =>
            array (
                'id' => 1177,
                'name' => 'Infoamin\\Installer\\Http\\Controllers\\FinalController@finish',
                'controller_path' => 'Infoamin\\Installer\\Http\\Controllers\\FinalController',
                'controller_name' => 'FinalController',
                'method_name' => 'finish',
            ),
            226 =>
            array (
                'id' => 1178,
                'name' => 'Infoamin\\Installer\\Http\\Controllers\\PermissionsController@clearCache',
                'controller_path' => 'Infoamin\\Installer\\Http\\Controllers\\PermissionsController',
                'controller_name' => 'PermissionsController',
                'method_name' => 'clearCache',
            ),
            227 =>
            array (
                'id' => 1179,
                'name' => 'App\\Http\\Controllers\\Api\\User\\WishlistController@store',
                'controller_path' => 'App\\Http\\Controllers\\Api\\User\\WishlistController',
                'controller_name' => 'WishlistController',
                'method_name' => 'store',
            ),
            228 =>
            array (
                'id' => 1180,
                'name' => 'App\\Http\\Controllers\\Api\\User\\OrderStatusController@index',
                'controller_path' => 'App\\Http\\Controllers\\Api\\User\\OrderStatusController',
                'controller_name' => 'OrderStatusController',
                'method_name' => 'index',
            ),
            229 =>
            array (
                'id' => 1181,
                'name' => 'App\\Http\\Controllers\\Site\\OrderController@invoicePrint',
                'controller_path' => 'App\\Http\\Controllers\\Site\\OrderController',
                'controller_name' => 'OrderController',
                'method_name' => 'invoicePrint',
            ),
            230 =>
            array (
                'id' => 1182,
                'name' => 'Modules\\Newsletter\\Http\\Controllers\\SubscriberController@unsubscribe',
                'controller_path' => 'Modules\\Newsletter\\Http\\Controllers\\SubscriberController',
                'controller_name' => 'SubscriberController',
                'method_name' => 'unsubscribe',
            ),
            231 =>
            array (
                'id' => 1183,
                'name' => 'Modules\\CMS\\Http\\Controllers\\CMSController@quickUpdate',
                'controller_path' => 'Modules\\CMS\\Http\\Controllers\\CMSController',
                'controller_name' => 'CMSController',
                'method_name' => 'quickUpdate',
            ),
            232 =>
            array (
                'id' => 1185,
                'name' => 'App\\Http\\Controllers\\Api\\User\\CartController@deleteCoupon',
                'controller_path' => 'App\\Http\\Controllers\\Api\\User\\CartController',
                'controller_name' => 'CartController',
                'method_name' => 'deleteCoupon',
            ),
            233 =>
            array (
                'id' => 1186,
                'name' => 'App\\Http\\Controllers\\Api\\User\\OrderController@trackOrder',
                'controller_path' => 'App\\Http\\Controllers\\Api\\User\\OrderController',
                'controller_name' => 'OrderController',
                'method_name' => 'trackOrder',
            ),
            234 =>
            array (
                'id' => 1187,
                'name' => 'App\\Http\\Controllers\\Site\\CartController@deleteCoupon',
                'controller_path' => 'App\\Http\\Controllers\\Site\\CartController',
                'controller_name' => 'CartController',
                'method_name' => 'deleteCoupon',
            ),
            235 =>
            array (
                'id' => 1188,
                'name' => 'App\\Http\\Controllers\\Site\\SiteController@getShipping',
                'controller_path' => 'App\\Http\\Controllers\\Site\\SiteController',
                'controller_name' => 'SiteController',
                'method_name' => 'getShipping',
            ),
            236 =>
            array (
                'id' => 1189,
                'name' => 'Modules\\Addons\\Http\\Controllers\\AddonsController@upload',
                'controller_path' => 'Modules\\Addons\\Http\\Controllers\\AddonsController',
                'controller_name' => 'AddonsController',
                'method_name' => 'upload',
            ),
            237 =>
            array (
                'id' => 1190,
                'name' => 'Modules\\Addons\\Http\\Controllers\\AddonsController@switchStatus',
                'controller_path' => 'Modules\\Addons\\Http\\Controllers\\AddonsController',
                'controller_name' => 'AddonsController',
                'method_name' => 'switchStatus',
            ),
            238 =>
            array (
                'id' => 1191,
                'name' => 'Modules\\FormBuilder\\Http\\Controllers\\Vendor\\KycController@userKycForm',
                'controller_path' => 'Modules\\FormBuilder\\Http\\Controllers\\Vendor\\KycController',
                'controller_name' => 'KycController',
                'method_name' => 'userKycForm',
            ),
            239 =>
            array (
                'id' => 1192,
                'name' => 'Modules\\FormBuilder\\Http\\Controllers\\Vendor\\KycController@userKycSubmit',
                'controller_path' => 'Modules\\FormBuilder\\Http\\Controllers\\Vendor\\KycController',
                'controller_name' => 'KycController',
                'method_name' => 'userKycSubmit',
            ),
            240 =>
            array (
                'id' => 1193,
                'name' => 'Modules\\FormBuilder\\Http\\Controllers\\Vendor\\KycController@userKycUpdateSubmission',
                'controller_path' => 'Modules\\FormBuilder\\Http\\Controllers\\Vendor\\KycController',
                'controller_name' => 'KycController',
                'method_name' => 'userKycUpdateSubmission',
            ),
            241 =>
            array (
                'id' => 1194,
                'name' => 'App\\Http\\Controllers\\UserController@findUser',
                'controller_path' => 'App\\Http\\Controllers\\UserController',
                'controller_name' => 'UserController',
                'method_name' => 'findUser',
            ),
            242 =>
            array (
                'id' => 1195,
                'name' => 'App\\Http\\Controllers\\VendorController@findVendor',
                'controller_path' => 'App\\Http\\Controllers\\VendorController',
                'controller_name' => 'VendorController',
                'method_name' => 'findVendor',
            ),
            243 =>
            array (
                'id' => 1196,
                'name' => 'App\\Http\\Controllers\\Site\\SiteController@getSearchData',
                'controller_path' => 'App\\Http\\Controllers\\Site\\SiteController',
                'controller_name' => 'SiteController',
                'method_name' => 'getSearchData',
            ),
            244 =>
            array (
                'id' => 1198,
                'name' => 'App\\Http\\Controllers\\Api\\User\\UserController@wallet',
                'controller_path' => 'App\\Http\\Controllers\\Api\\User\\UserController',
                'controller_name' => 'UserController',
                'method_name' => 'wallet',
            ),
            245 =>
            array (
                'id' => 1200,
                'name' => 'Modules\\Coupon\\Http\\Controllers\\CouponController@getOldProducts',
                'controller_path' => 'Modules\\Coupon\\Http\\Controllers\\CouponController',
                'controller_name' => 'CouponController',
                'method_name' => 'getOldProducts',
            ),
            246 =>
            array (
                'id' => 1201,
                'name' => 'Modules\\Coupon\\Http\\Controllers\\CouponController@getOldVendor',
                'controller_path' => 'Modules\\Coupon\\Http\\Controllers\\CouponController',
                'controller_name' => 'CouponController',
                'method_name' => 'getOldVendor',
            ),
            247 =>
            array (
                'id' => 1202,
                'name' => 'App\\Http\\Controllers\\Api\\User\\ProductController@relatedProducts',
                'controller_path' => 'App\\Http\\Controllers\\Api\\User\\ProductController',
                'controller_name' => 'ProductController',
                'method_name' => 'relatedProducts',
            ),
            248 =>
            array (
                'id' => 1203,
                'name' => 'App\\Http\\Controllers\\Api\\User\\ProductController@categorizedProduct',
                'controller_path' => 'App\\Http\\Controllers\\Api\\User\\ProductController',
                'controller_name' => 'ProductController',
                'method_name' => 'categorizedProduct',
            ),
            249 =>
            array (
                'id' => 1204,
                'name' => 'App\\Http\\Controllers\\Api\\User\\CartController@addAll',
                'controller_path' => 'App\\Http\\Controllers\\Api\\User\\CartController',
                'controller_name' => 'CartController',
                'method_name' => 'addAll',
            ),
            250 =>
            array (
                'id' => 1205,
                'name' => 'App\\Http\\Controllers\\Vendor\\VendorController@updateVendor',
                'controller_path' => 'App\\Http\\Controllers\\Vendor\\VendorController',
                'controller_name' => 'VendorController',
                'method_name' => 'updateVendor',
            ),
            251 =>
            array (
                'id' => 1206,
                'name' => 'App\\Http\\Controllers\\Vendor\\VendorOrderController@storeNote',
                'controller_path' => 'App\\Http\\Controllers\\Vendor\\VendorOrderController',
                'controller_name' => 'VendorOrderController',
                'method_name' => 'storeNote',
            ),
            252 =>
            array (
                'id' => 1207,
                'name' => 'Modules\\PageBuilder\\Http\\Controllers\\PageBuilderController@index',
                'controller_path' => 'Modules\\PageBuilder\\Http\\Controllers\\PageBuilderController',
                'controller_name' => 'PageBuilderController',
                'method_name' => 'index',
            ),
            253 =>
            array (
                'id' => 1208,
                'name' => 'Modules\\PageBuilder\\Http\\Controllers\\PageBuilderController@store',
                'controller_path' => 'Modules\\PageBuilder\\Http\\Controllers\\PageBuilderController',
                'controller_name' => 'PageBuilderController',
                'method_name' => 'store',
            ),
            254 =>
            array (
                'id' => 1209,
                'name' => 'Modules\\PageBuilder\\Http\\Controllers\\PageBuilderController@storeImage',
                'controller_path' => 'Modules\\PageBuilder\\Http\\Controllers\\PageBuilderController',
                'controller_name' => 'PageBuilderController',
                'method_name' => 'storeImage',
            ),
            255 =>
            array (
                'id' => 1210,
                'name' => 'Modules\\Recaptcha\\Http\\Controllers\\RecaptchaController@edit',
                'controller_path' => 'Modules\\Recaptcha\\Http\\Controllers\\RecaptchaController',
                'controller_name' => 'RecaptchaController',
                'method_name' => 'edit',
            ),
            256 =>
            array (
                'id' => 1211,
                'name' => 'Modules\\Recaptcha\\Http\\Controllers\\RecaptchaController@store',
                'controller_path' => 'Modules\\Recaptcha\\Http\\Controllers\\RecaptchaController',
                'controller_name' => 'RecaptchaController',
                'method_name' => 'store',
            ),
            257 =>
            array (
                'id' => 1212,
                'name' => 'App\\Http\\Controllers\\Vendor\\VendorOrderController@orderAction',
                'controller_path' => 'App\\Http\\Controllers\\Vendor\\VendorOrderController',
                'controller_name' => 'VendorOrderController',
                'method_name' => 'orderAction',
            ),
            258 =>
            array (
                'id' => 1213,
                'name' => 'App\\Http\\Controllers\\OrderSettingController@index',
                'controller_path' => 'App\\Http\\Controllers\\OrderSettingController',
                'controller_name' => 'OrderSettingController',
                'method_name' => 'index',
            ),
            259 =>
            array (
                'id' => 1214,
                'name' => 'App\\Http\\Controllers\\AccountSettingController@index',
                'controller_path' => 'App\\Http\\Controllers\\AccountSettingController',
                'controller_name' => 'AccountSettingController',
                'method_name' => 'index',
            ),
            260 =>
            array (
                'id' => 1215,
                'name' => 'Modules\\Gateway\\Http\\Controllers\\GatewayController@paymentConfirmation',
                'controller_path' => 'Modules\\Gateway\\Http\\Controllers\\GatewayController',
                'controller_name' => 'GatewayController',
                'method_name' => 'paymentConfirmation',
            ),
            261 =>
            array (
                'id' => 1216,
                'name' => 'Modules\\Gateway\\Http\\Controllers\\GatewayController@paymentFailed',
                'controller_path' => 'Modules\\Gateway\\Http\\Controllers\\GatewayController',
                'controller_name' => 'GatewayController',
                'method_name' => 'paymentFailed',
            ),
            262 =>
            array (
                'id' => 1217,
                'name' => 'Modules\\Report\\Http\\Controllers\\Vendor\\ReportController@index',
                'controller_path' => 'Modules\\Report\\Http\\Controllers\\Vendor\\ReportController',
                'controller_name' => 'ReportController',
                'method_name' => 'index',
            ),
            263 =>
            array (
                'id' => 1218,
                'name' => 'App\\Http\\Controllers\\UserController@allUserActivity',
                'controller_path' => 'App\\Http\\Controllers\\UserController',
                'controller_name' => 'UserController',
                'method_name' => 'allUserActivity',
            ),
            264 =>
            array (
                'id' => 1219,
                'name' => 'App\\Http\\Controllers\\UserController@deleteUserActivity',
                'controller_path' => 'App\\Http\\Controllers\\UserController',
                'controller_name' => 'UserController',
                'method_name' => 'deleteUserActivity',
            ),
            265 =>
            array (
                'id' => 1231,
                'name' => 'App\\Http\\Controllers\\Site\\UserController@activity',
                'controller_path' => 'App\\Http\\Controllers\\Site\\UserController',
                'controller_name' => 'UserController',
                'method_name' => 'activity',
            ),
            266 =>
            array (
                'id' => 1232,
                'name' => 'App\\Http\\Controllers\\Site\\DownloadController@index',
                'controller_path' => 'App\\Http\\Controllers\\Site\\DownloadController',
                'controller_name' => 'DownloadController',
                'method_name' => 'index',
            ),
            267 =>
            array (
                'id' => 1233,
                'name' => 'App\\Http\\Controllers\\Vendor\\ProductController@findDownloadProducts',
                'controller_path' => 'App\\Http\\Controllers\\Vendor\\ProductController',
                'controller_name' => 'ProductController',
                'method_name' => 'findDownloadProducts',
            ),
            268 =>
            array (
                'id' => 1234,
                'name' => 'App\\Http\\Controllers\\Vendor\\VendorOrderController@grantAccess',
                'controller_path' => 'App\\Http\\Controllers\\Vendor\\VendorOrderController',
                'controller_name' => 'VendorOrderController',
                'method_name' => 'grantAccess',
            ),
            269 =>
            array (
                'id' => 1235,
                'name' => 'App\\Http\\Controllers\\ProductController@findDownloadProducts',
                'controller_path' => 'App\\Http\\Controllers\\ProductController',
                'controller_name' => 'ProductController',
                'method_name' => 'findDownloadProducts',
            ),
            270 =>
            array (
                'id' => 1236,
                'name' => 'App\\Http\\Controllers\\AdminOrderController@grantAccess',
                'controller_path' => 'App\\Http\\Controllers\\AdminOrderController',
                'controller_name' => 'AdminOrderController',
                'method_name' => 'grantAccess',
            ),
            271 =>
            array (
                'id' => 1237,
                'name' => 'App\\Http\\Controllers\\ImportController@index',
                'controller_path' => 'App\\Http\\Controllers\\ImportController',
                'controller_name' => 'ImportController',
                'method_name' => 'index',
            ),
            272 =>
            array (
                'id' => 1238,
                'name' => 'App\\Http\\Controllers\\ImportController@productImport',
                'controller_path' => 'App\\Http\\Controllers\\ImportController',
                'controller_name' => 'ImportController',
                'method_name' => 'productImport',
            ),
            273 =>
            array (
                'id' => 1239,
                'name' => 'App\\Http\\Controllers\\CurrencyController@findCurrencyAjaxQuery',
                'controller_path' => 'App\\Http\\Controllers\\CurrencyController',
                'controller_name' => 'CurrencyController',
                'method_name' => 'findCurrencyAjaxQuery',
            ),
            274 =>
            array (
                'id' => 1240,
                'name' => 'App\\Http\\Controllers\\Vendor\\VendorController@loginActivity',
                'controller_path' => 'App\\Http\\Controllers\\Vendor\\VendorController',
                'controller_name' => 'VendorController',
                'method_name' => 'loginActivity',
            ),
            275 =>
            array (
                'id' => 1241,
                'name' => 'App\\Http\\Controllers\\Site\\RegisteredSellerController@resendVerificationCode',
                'controller_path' => 'App\\Http\\Controllers\\Site\\RegisteredSellerController',
                'controller_name' => 'RegisteredSellerController',
                'method_name' => 'resendVerificationCode',
            ),
            276 =>
            array (
                'id' => 1242,
                'name' => 'App\\Http\\Controllers\\Site\\SiteController@download',
                'controller_path' => 'App\\Http\\Controllers\\Site\\SiteController',
                'controller_name' => 'SiteController',
                'method_name' => 'download',
            ),
            277 =>
            array (
                'id' => 1243,
                'name' => 'Modules\\CMS\\Http\\Controllers\\ThemeOptionController@layoutStore',
                'controller_path' => 'Modules\\CMS\\Http\\Controllers\\ThemeOptionController',
                'controller_name' => 'ThemeOptionController',
                'method_name' => 'layoutStore',
            ),
            278 =>
            array (
                'id' => 1244,
                'name' => 'Modules\\CMS\\Http\\Controllers\\ThemeOptionController@storePrimaryColor',
                'controller_path' => 'Modules\\CMS\\Http\\Controllers\\ThemeOptionController',
                'controller_name' => 'ThemeOptionController',
                'method_name' => 'storePrimaryColor',
            ),
            279 =>
            array (
                'id' => 1245,
                'name' => 'Modules\\CMS\\Http\\Controllers\\ThemeOptionController@layoutUpdate',
                'controller_path' => 'Modules\\CMS\\Http\\Controllers\\ThemeOptionController',
                'controller_name' => 'ThemeOptionController',
                'method_name' => 'layoutUpdate',
            ),
            280 =>
            array (
                'id' => 1246,
                'name' => 'Modules\\CMS\\Http\\Controllers\\ThemeOptionController@layoutDelete',
                'controller_path' => 'Modules\\CMS\\Http\\Controllers\\ThemeOptionController',
                'controller_name' => 'ThemeOptionController',
                'method_name' => 'layoutDelete',
            ),
            281 =>
            array (
                'id' => 1247,
                'name' => 'Modules\\CMS\\Http\\Controllers\\BuilderController@ajaxResourceFetch',
                'controller_path' => 'Modules\\CMS\\Http\\Controllers\\BuilderController',
                'controller_name' => 'BuilderController',
                'method_name' => 'ajaxResourceFetch',
            ),
            282 =>
            array (
                'id' => 1248,
                'name' => 'Modules\\Flutterwave\\Http\\Controllers\\FlutterwaveController@store',
                'controller_path' => 'Modules\\Flutterwave\\Http\\Controllers\\FlutterwaveController',
                'controller_name' => 'FlutterwaveController',
                'method_name' => 'store',
            ),
            283 =>
            array (
                'id' => 1249,
                'name' => 'Modules\\Flutterwave\\Http\\Controllers\\FlutterwaveController@edit',
                'controller_path' => 'Modules\\Flutterwave\\Http\\Controllers\\FlutterwaveController',
                'controller_name' => 'FlutterwaveController',
                'method_name' => 'edit',
            ),
            284 =>
            array (
                'id' => 1250,
                'name' => 'Modules\\SslCommerz\\Http\\Controllers\\SslCommerzController@store',
                'controller_path' => 'Modules\\SslCommerz\\Http\\Controllers\\SslCommerzController',
                'controller_name' => 'SslCommerzController',
                'method_name' => 'store',
            ),
            285 =>
            array (
                'id' => 1251,
                'name' => 'Modules\\SslCommerz\\Http\\Controllers\\SslCommerzController@edit',
                'controller_path' => 'Modules\\SslCommerz\\Http\\Controllers\\SslCommerzController',
                'controller_name' => 'SslCommerzController',
                'method_name' => 'edit',
            ),
            286 =>
            array (
                'id' => 1252,
                'name' => 'Modules\\Ticket\\Http\\Controllers\\ChatController@initiateChatWithVendor',
                'controller_path' => 'Modules\\Ticket\\Http\\Controllers\\ChatController',
                'controller_name' => 'ChatController',
                'method_name' => 'initiateChatWithVendor',
            ),
            287 =>
            array (
                'id' => 1253,
                'name' => 'App\\Http\\Controllers\\Vendor\\ImportController@productImport',
                'controller_path' => 'App\\Http\\Controllers\\Vendor\\ImportController',
                'controller_name' => 'ImportController',
                'method_name' => 'productImport',
            ),
            288 =>
            array (
                'id' => 1254,
                'name' => 'Modules\\GeoLocale\\Http\\Controllers\\CountryController@search',
                'controller_path' => 'Modules\\GeoLocale\\Http\\Controllers\\CountryController',
                'controller_name' => 'CountryController',
                'method_name' => 'search',
            ),
            289 =>
            array (
                'id' => 1255,
                'name' => 'Modules\\GeoLocale\\Http\\Controllers\\StateController@search',
                'controller_path' => 'Modules\\GeoLocale\\Http\\Controllers\\StateController',
                'controller_name' => 'StateController',
                'method_name' => 'search',
            ),
            290 =>
            array (
                'id' => 1256,
                'name' => 'App\\Http\\Controllers\\Api\\User\\OrderController@getShippingTax',
                'controller_path' => 'App\\Http\\Controllers\\Api\\User\\OrderController',
                'controller_name' => 'OrderController',
                'method_name' => 'getShippingTax',
            ),
            291 =>
            array (
                'id' => 1257,
                'name' => 'App\\Http\\Controllers\\Api\\User\\CartController@getSelected',
                'controller_path' => 'App\\Http\\Controllers\\Api\\User\\CartController',
                'controller_name' => 'CartController',
                'method_name' => 'getSelected',
            ),
            292 =>
            array (
                'id' => 1258,
                'name' => 'App\\Http\\Controllers\\BatchController@destroy',
                'controller_path' => 'App\\Http\\Controllers\\BatchController',
                'controller_name' => 'BatchController',
                'method_name' => 'destroy',
            ),
            293 =>
            array(
                'id' => 1259,
                'name' => 'App\\Http\\Controllers\\SystemInfoController@index',
                'controller_path' => 'App\\Http\\Controllers\\SystemInfoController',
                'controller_name' => 'SystemInfoController',
                'method_name' => 'index',
            )
        ));


    }
}

<?php

namespace Modules\MenuBuilder\Database\Seeders;

use Illuminate\Database\Seeder;

class AdminMenusTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('admin_menus')->delete();

        \DB::table('admin_menus')->insert(array (
            0 =>
            array (
                'id' => 7,
                'name' => 'All Users',
                'slug' => 'user-list',
                'url' => 'user/list',
                'permission' => '{"permission":"App\\\\Http\\\\Controllers\\\\UserController@index", "route_name":["users.index", "users.create", "users.edit", "users.pdf", "users.csv", "users.verify", "users.profile"], "menu_level":"1"}',
                'is_default' => 0,
            ),
            1 =>
            array (
                'id' => 8,
                'name' => 'All Products',
                'slug' => 'products',
                'url' => 'products',
                'permission' => '{"permission":"App\\\\Http\\\\Controllers\\\\ProductController@index", "route_name":["product.index", "product.create", "product.edit", "product.pdf", "product.csv"], "menu_level":"1"}',
                'is_default' => 0,
            ),
            2 =>
            array (
                'id' => 9,
                'name' => 'brand',
                'slug' => 'brands',
                'url' => 'brands',
                'permission' => '{"permission":"App\\\\Http\\\\Controllers\\\\BrandController@index", "route_name":["brands.index", "brands.create", "brands.edit", "brands.pdf", "brands.csv"], "menu_level":"1"}',
                'is_default' => 0,
            ),
            3 =>
            array (
                'id' => 10,
                'name' => 'Categories',
                'slug' => 'categories',
                'url' => 'categories',
                'permission' => '{"permission":"App\\\\Http\\\\Controllers\\\\CategoryController@index", "route_name":["categories.index"], "menu_level":"1"}',
                'is_default' => 0,
            ),
            4 =>
            array (
                'id' => 11,
                'name' => 'Attributes',
                'slug' => 'attributes',
                'url' => 'attributes',
                'permission' => '{"permission":"App\\\\Http\\\\Controllers\\\\AttributeController@index", "route_name":["attribute.index", "attribute.create", "attribute.edit", "attribute.pdf", "attribute.csv"], "menu_level":"1"}',
                'is_default' => 0,
            ),
            5 =>
            array (
                'id' => 12,
                'name' => 'Attribute Groups',
                'slug' => 'attribute-groups',
                'url' => 'attribute-groups',
                'permission' => '{"permission":"App\\\\Http\\\\Controllers\\\\AttributeGroupController@index", "route_name":["attributeGroup.index", "attributeGroup.create", "attributeGroup.edit", "attributeGroup.pdf", "attributeGroup.csv"], "menu_level":"1"}',
                'is_default' => 0,
            ),
            6 =>
            array (
                'id' => 14,
                'name' => 'Reviews',
                'slug' => 'reviews',
                'url' => 'reviews',
                'permission' => '{"permission":"App\\\\Http\\\\Controllers\\\\ReviewController@index", "route_name":["review.index", "review.view", "review.edit", "review.pdf", "review.csv"], "menu_level":"1"}',
                'is_default' => 0,
            ),
            7 =>
            array (
                'id' => 18,
                'name' => 'All vendors',
                'slug' => 'admin-vendors',
                'url' => 'vendors',
                'permission' => '{"permission":"App\\\\Http\\\\Controllers\\\\Api\\\\VendorController@index", "route_name":["vendors.index", "vendors.create", "vendors.edit", "vendors.pdf", "vendors.csv", "vendors.import"], "menu_level":"1"}',
                'is_default' => 0,
            ),
            8 =>
            array (
                'id' => 19,
                'name' => 'Addons',
                'slug' => 'addons',
                'url' => 'addons',
                'permission' => '{"permission":"Modules\\\\Addons\\\\Http\\\\Controllers\\\\AddonsController@index", "route_name":["addon.index", "addon.switch-status", "addon.remove", "addon.upload"], "menu_level":"1"}',
                'is_default' => 1,
            ),
            9 =>
            array (
                'id' => 20,
                'name' => 'Menu Builder',
                'slug' => 'menu-builder',
                'url' => 'menu-builder',
                'permission' => '{"permission":"Modules\\\\MenuBuilder\\\\Http\\\\Controllers\\\\MenuBuilderController@index","route_name":["menu.index"], "menu_level":"1"}',
                'is_default' => 1,
            ),
            10 =>
            array (
                'id' => 22,
                'name' => 'General Settings',
                'slug' => 'general-settings',
                'url' => 'emailConfiguration',
                'permission' => '{"permission":"App\\\\Http\\\\Controllers\\\\EmailConfigurationController@index","route_name":["emailConfigurations.index", "maintenance.enable", "language.translation", "language.index", "currency.convert", "sso.index", "orderStatues.index"], "menu_level":"1"}',
                'is_default' => 1,
            ),
            11 =>
            array (
                'id' => 23,
                'name' => 'Finance',
                'slug' => 'finance',
                'url' => 'currencies',
                'permission' => '{"permission":"App\\\\Http\\\\Controllers\\\\CurrencyController@index","route_name":["currency.index","validCurrencyName", "paymentTerm.index", "paymentTerm.edit", "tax.index", "tax.edit"], "menu_level":"1"}',
                'is_default' => 1,
            ),
            12 =>
            array (
                'id' => 29,
                'name' => 'Cache Clear',
                'slug' => 'cache-clear',
                'url' => 'clear-cache',
                'permission' => '{"permission":"App\\\\Http\\\\Controllers\\\\DashboardController@index", "route_name":["dashboard"], "menu_level":"1"}',
                'is_default' => 1,
            ),
            13 =>
            array (
                'id' => 30,
                'name' => 'Dashboard',
                'slug' => 'user-dashboard',
                'url' => 'dashboard',
                'permission' => '{"permission":"App\\\\Http\\\\Controllers\\\\Site\\\\DashboardController@index", "route_name":["site.dashboard"], "menu_level":"2"}',
                'is_default' => 1,
            ),
            14 =>
            array (
                'id' => 31,
                'name' => 'Orders',
                'slug' => 'orders',
                'url' => 'orders',
                'permission' => '{"permission":"App\\\\Http\\\\Controllers\\\\Site\\\\OrderController@index", "route_name":["site.order"], "menu_level":"2"}',
                'is_default' => 1,
            ),
            15 =>
            array (
                'id' => 32,
                'name' => 'Wishlist',
                'slug' => 'wishlist',
                'url' => 'wishlists',
                'permission' => '{"permission":"App\\\\Http\\\\Controllers\\\\Site\\\\WishlistController@index", "route_name":["site.wishlist"], "menu_level":"2"}',
                'is_default' => 1,
            ),
            16 =>
            array (
                'id' => 33,
                'name' => 'Review',
                'slug' => 'review',
                'url' => 'reviews',
                'permission' => '{"permission":"App\\\\Http\\\\Controllers\\\\Site\\\\ReviewController@index", "route_name":["site.review"], "menu_level":"2"}',
                'is_default' => 1,
            ),
            17 =>
            array (
                'id' => 34,
                'name' => 'My Profile',
                'slug' => 'user-profile',
                'url' => 'profile',
                'permission' => '{"permission":"App\\\\Http\\\\Controllers\\\\UserController@index", "route_name":["site.userProfile", "site.userProfileEditPassword"], "menu_level":"2"}',
                'is_default' => 1,
            ),
            18 =>
            array (
                'id' => 35,
                'name' => 'Address Books',
                'slug' => 'address-books',
                'url' => 'addresses',
                'permission' => '{"permission":"App\\\\Http\\\\Controllers\\\\Site\\\\AddressController@index", "route_name":["site.address", "site.addressCreate", "site.addressEdit"], "menu_level":"2"}',
                'is_default' => 1,
            ),
            19 =>
            array (
                'id' => 36,
                'name' => 'Settings',
                'slug' => 'settings',
                'url' => 'setting',
                'permission' => '{"permission":"App\\\\Http\\\\Controllers\\\\Site\\\\AddressController@index", "route_name":["site.userSetting"], "menu_level":"2"}',
                'is_default' => 1,
            ),
            20 =>
            array (
                'id' => 37,
                'name' => 'Logout',
                'slug' => 'logout',
                'url' => 'logout',
                'permission' => '{"permission":"App\\\\Http\\\\Controllers\\\\Site\\\\LoginController@logout", "route_name":["site.logout"], "menu_level":"2"}',
                'is_default' => 1,
            ),
            21 =>
            array (
                'id' => 38,
                'name' => 'Dashboard',
                'slug' => 'vendor-dashboard',
                'url' => 'dashboard',
                'permission' => '{"permission":"App\\\\Http\\\\Controllers\\\\VendorController@index", "route_name":["vendor-dashboard"], "menu_level":"3"}',
                'is_default' => 1,
            ),
            22 =>
            array (
                'id' => 40,
                'name' => 'Review',
                'slug' => 'review',
                'url' => 'reviews',
                'permission' => '{"permission":"App\\\\Http\\\\Controllers\\\\Vendor\\\\ReviewController@index", "route_name":["vendor.reviews", "vendor.reviewEdit", "vendor.reviewView", "vendor.reviewUpdate", "vendor.reviewDestroy", "vendor.reviewPdf", "vendor.reviewCsv"], "menu_level":"3"}',
                'is_default' => 1,
            ),
            23 =>
            array (
                'id' => 43,
                'name' => 'All Orders',
                'slug' => 'all-orders',
                'url' => 'orders',
                'permission' => '{"permission":"App\\\\Http\\\\Controllers\\\\AdminOrderController@index", "route_name":["order.index", "order.view", "order.pdf", "order.csv"], "menu_level":"1"}',
                'is_default' => 1,
            ),
            24 =>
            array (
                'id' => 44,
                'name' => 'Orders',
                'slug' => 'vendor-orders',
                'url' => 'orders',
                'permission' => '{"permission":"App\\\\Http\\\\Controllers\\\\Vendor\\\\VendorOrderController@index", "route_name":["vendorOrder.index", "vendorOrder.view", "vendorOrder.pdf", "vendorOrder.csv"], "menu_level":"3"}',
                'is_default' => 1,
            ),
            25 =>
            array (
                'id' => 45,
                'name' => 'Commission',
                'slug' => 'commission',
                'url' => 'commission',
                'permission' => '{"permission":"Modules\\\\Commission\\\\Http\\\\Controllers\\\\CommissionController@index", "route_name":["commission.index"], "menu_level":"1"}',
                'is_default' => 1,
            ),
            26 =>
            array (
                'id' => 46,
                'name' => 'Transactions',
                'slug' => 'vendor-transactions',
                'url' => 'transactions',
                'permission' => '{"permission":"App\\\\Http\\\\Controllers\\\\Vendor\\\\VendorTransactionController@index", "route_name":["vendorTransaction.index", "vendorTransaction.pdf", "vendorTransaction.csv"], "menu_lavel":"3"}',
                'is_default' => 1,
            ),
            27 =>
            array (
                'id' => 63,
                'name' => 'Transactions',
                'slug' => 'admin-transaction',
                'url' => 'transactions',
                'permission' => '{"permission":"App\\\\Http\\\\Controllers\\\\TransactionController@index", "route_name":["transaction.index"], "menu_level":"1"}',
                'is_default' => 1,
            ),
            28 =>
            array (
                'id' => 64,
                'name' => 'Withdrawals',
                'slug' => 'admin-withdrawals',
                'url' => 'withdrawals',
                'permission' => '{"permission":"App\\\\Http\\\\Controllers\\\\WithdrawalController@index", "route_name":["withdrawal.index"], "menu_level":"1"}',
                'is_default' => 1,
            ),
            29 =>
            array (
                'id' => 65,
                'name' => 'Products',
                'slug' => 'product-setting',
                'url' => 'product-setting',
                'permission' => '{"permission":"App\\\\Http\\\\Controllers\\\\ProductSettingController@general", "route_name":["product.setting.general"], "menu_level":"1"}',
                'is_default' => 1,
            ),
            30 =>
            array (
                'id' => 66,
                'name' => 'Withdrawals',
                'slug' => 'vendor-withdrawals',
                'url' => 'withdrawals',
                'permission' => '{"permission":"App\\\\Http\\\\Controllers\\\\Vendor\\\\WithdrawalController@index", "route_name":["vendorWithdrawal.index"], "menu_level":"3"}',
                'is_default' => 1,
            ),
            31 =>
            array (
                'id' => 67,
                'name' => 'Transactions',
                'slug' => 'vendor-transaction',
                'url' => 'transactions',
                'permission' => '{"permission":"App\\\\Http\\\\Controllers\\\\Vendor\\\\VendorTransactionController@index", "route_name":["vendorTransaction.index"], "menu_level":"3"}',
                'is_default' => 1,
            ),
            32 =>
            array (
                'id' => 68,
                'name' => 'Be a seller',
                'slug' => 'Be-a-seller',
                'url' => 'seller/request-form',
                'permission' => '{"permission":"App\\\\Http\\\\Controllers\\\\Site\\\\RegisteredSellerController@showRequestForm", "route_name":["site.seller.request-form"], "menu_level":"2"}',
                'is_default' => 1,
            ),
            33 =>
            array (
                'id' => 69,
                'name' => 'Blog Category',
                'slug' => 'blog-category',
                'url' => 'blog/category/list',
                'permission' => '{"permission":"Modules\\\\Blog\\\\Http\\\\Controllers\\\\BlogCategoryController@index", "route_name":["blog.category.index"], "menu_level":"1"}',
                'is_default' => 1,
            ),
            34 =>
            array (
                'id' => 70,
                'name' => 'Blog',
                'slug' => 'blog',
                'url' => 'blogs',
                'permission' => '{"permission":"Modules\\\\Blog\\\\Http\\\\Controllers\\\\BlogController@index", "route_name":["blog.index", "blog.create", "blog.edit"], "menu_level":"1"}',
                'is_default' => 1,
            ),
            35 =>
            array (
                'id' => 71,
                'name' => 'Pages',
                'slug' => 'page',
                'url' => 'page/list',
                'permission' => '{"permission":"Modules\\\\CMS\\\\Http\\\\Controllers\\\\CMSController@index", "route_name":["page.index", "page.create", "page.edit"], "menu_level":"1"}',
                'is_default' => 1,
            ),
            36 =>
            array (
                'id' => 72,
                'name' => 'Appearance',
                'slug' => 'appearance',
                'url' => 'theme/list',
                'permission' => '{"permission":"Module\\\\CMS\\\\Http\\\\Controllers\\\\ThemeOptionController@list", "route_name":["theme.index", "theme.store"], "menu_level":"1"}',
                'is_default' => 1,
            ),
            37 =>
            array (
                'id' => 73,
                'name' => 'Slider',
                'slug' => 'slider',
                'url' => 'sliders',
                'permission' => '{"permission":"Modules\\\\CMS\\\\Http\\\\Controllers\\\\SliderController@index", "route_name":["slider.index"], "menu_level":"1"}',
                'is_default' => 1,
            ),
            38 =>
            array (
                'id' => 74,
                'name' => 'Coupons',
                'slug' => 'coupons',
                'url' => 'coupons',
                'permission' => '{"permission":"Modules\\\\Coupon\\\\Http\\\\Controllers\\\\CouponController@index", "route_name":["coupon.index"], "menu_level":"1"}',
                'is_default' => 1,
            ),
            39 =>
            array (
                'id' => 76,
                'name' => 'Refunds',
                'slug' => 'admin-refund-requests',
                'url' => 'refund-requests',
                'permission' => '{"permission":"Modules\\\\Refund\\\\Http\\\\Controllers\\\\RefundController@index","route_name":["refund.index"], "menu_level":"1"}',
                'is_default' => 1,
            ),
            40 =>
            array (
                'id' => 77,
                'name' => 'Download',
                'slug' => 'download',
                'url' => 'downloads',
                'permission' => '{"permission":"App\\\\Http\\\\Controllers\\\\Site\\\\DownloadController@index","route_name":["site.download"],"menu_level":"2"}',
                'is_default' => 1,
            ),
            41 =>
            array (
                'id' => 79,
                'name' => 'Shipping',
                'slug' => 'shipping',
                'url' => 'shippings',
                'permission' => '{"permission":"Modules\\\\Shipping\\\\Http\\\\Controllers\\\\ShippingController@index", "route_name":["shipping.index"], "menu_level":"1"}',
                'is_default' => 1,
            ),
            42 =>
            array (
                'id' => 80,
                'name' => 'Media Manager',
                'slug' => 'media-manager',
                'url' => 'uploaded-files',
                'permission' => '{"permission":"Modules\\\\MediaManager\\\\Http\\\\Controllers\\\\MediaManagerController@uploadedFiles", "route_name":["mediaManager.create", "mediaManager.upload", "mediaManager.uploadedFiles", "mediaManager.sortFiles", "mediaManager.paginateFiles", "mediaManager.download", "mediaManager.maxId"], "menu_level":"1"}',
                'is_default' => 1,
            ),
            43 =>
            array (
                'id' => 81,
                'name' => 'Geo Locale',
                'slug' => 'geo-locale',
                'url' => 'geolocale',
                'permission' => '{"permission":"Modules\\\\GeoLocale\\\\Http\\\\Controllers\\\\GeoLocaleController@index", "route_name":["geolocale.index"], "menu_level":"1"}',
                'is_default' => 1,
            ),
            44 =>
            array (
                'id' => 83,
                'name' => 'Subscribers',
                'slug' => 'subscriber',
                'url' => 'subscribers',
                'permission' => '{"permission":"Modules\\\\Newsletter\\\\Http\\\\Controllers\\\\SubscriberController@index", "route_name":["subscriber.index"], "menu_level":"1"}',
                'is_default' => 1,
            ),
            45 =>
            array (
                'id' => 85,
                'name' => 'All Submissions',
                'slug' => 'submissions',
                'url' => 'forms/submissions',
                'permission' => '{"permission":"Modules\\\\FormBuilder\\\\Http\\\\Controllers\\\\SubmissionController@index", "route_name":["formbuilder::submissions.all"], "menu_level":"1"}',
                'is_default' => 1,
            ),
            46 =>
            array (
                'id' => 87,
                'name' => 'Reports',
                'slug' => 'reports',
                'url' => 'reports',
                'permission' => '{"permission":"Modules\\\\Report\\\\Http\\\\Controllers\\\\ReportController@index", "route_name":["reports"], "menu_level":"1"}',
                'is_default' => 1,
            ),
            47 =>
            array (
                'id' => 91,
                'name' => 'Products',
                'slug' => 'vendor-products',
                'url' => 'products',
                'permission' => '{"permission":"App\\\\Http\\\\Controllers\\\\Vendor\\\\ProductController@index","route_name":["vendor.products","vendor.product.view","vendor.product.related","vendor.product.search","vendor.product.update","vendor.product.edit", "vendor.product.store", "vendor.product.create", "vendor.product.import", "vendor.itemCsv", "vendor.itemPdf", "vendor.itemDestroy", "vendor.items"], "menu_level":"3"}',
                'is_default' => 0,
            ),
            48 =>
            array (
                'id' => 92,
                'name' => 'Dashboard',
                'slug' => 'dashboard',
                'url' => 'dashboard',
                'permission' => '{"permission":"App\\\\Http\\\\Controllers\\\\DashboardController@index", "route_name":["dashboard"], "menu_level":"1"}',
                'is_default' => 1,
            ),
            49 =>
            array (
                'id' => 93,
                'name' => 'Add User',
                'slug' => 'add-user',
                'url' => 'user/create',
                'permission' => '{"permission":"App\\\\Http\\\\Controllers\\\\UserController@index", "route_name":["users.index", "users.create", "users.edit", "users.pdf", "users.csv", "users.verify", "users.profile"], "menu_level":"1"}',
                'is_default' => 1,
            ),
            50 =>
            array (
                'id' => 94,
                'name' => 'Customers',
                'slug' => 'customers',
                'url' => 'user/customer?role=3',
                'permission' => '{"permission":"App\\\\Http\\\\Controllers\\\\UserController@index", "route_name":["users.customer", "users.create", "users.edit", "users.pdf", "users.csv", "users.verify", "users.profile"], "menu_level":"1"}',
                'is_default' => 1,
            ),
            51 =>
            array (
                'id' => 95,
                'name' => 'Login Activities',
                'slug' => 'user-activity',
                'url' => 'user/activity',
                'permission' => '{"permission":"App\\\\Http\\\\Controllers\\\\UserController@index","route_name":["users.activity"], "menu_level":"1"}',
                'is_default' => 1,
            ),
            52 =>
            array (
                'id' => 96,
                'name' => 'Add Product',
                'slug' => 'add-product',
                'url' => 'product/create',
                'permission' => '{"permission":"App\\\\Http\\\\Controllers\\\\ProductController@createProduct","route_name":["product.create"], "menu_level":"1"}',
                'is_default' => 1,
            ),
            53 =>
            array (
                'id' => 97,
                'name' => 'All Product',
                'slug' => 'all-product',
                'url' => 'products',
                'permission' => '{"permission":"App\\\\Http\\\\Controllers\\\\ProductController@index","route_name":["product.index","product.edit","product.pdf","product.csv"], "menu_level":"1"}',
                'is_default' => 1,
            ),
            54 =>
            array (
                'id' => 98,
                'name' => 'Pending Product',
                'slug' => 'pending-product',
                'url' => 'pending/products?status=Pending Review',
                'permission' => '{"permission":"App\\\\Http\\\\Controllers\\\\ProductController@index","route_name":["product.pending"], "menu_level":"1"}',
                'is_default' => 1,
            ),
            55 =>
            array (
                'id' => 99,
                'name' => 'Add Vendor',
                'slug' => 'vendor-create',
                'url' => 'vendors/create',
                'permission' => '{"permission":"App\\\\Http\\\\Controllers\\\\VendorController@create","route_name":["vendors.create"], "menu_level":"1"}',
                'is_default' => 1,
            ),
            56 =>
            array (
                'id' => 100,
                'name' => 'Add Post',
                'slug' => 'blog-create',
                'url' => 'blog/create',
                'permission' => '{"permission":"Modules\\\\Blog\\\\Http\\\\Controllers\\\\BlogController@create", "route_name":["blog.create"], "menu_level":"1"}',
                'is_default' => 1,
            ),
            57 =>
            array (
                'id' => 101,
                'name' => 'All Posts',
                'slug' => 'blogs',
                'url' => 'blogs',
                'permission' => '{"permission":"Modules\\\\Blog\\\\Http\\\\Controllers\\\\BlogController@index", "route_name":["blog.index", "blog.edit"], "menu_level":"1"}',
                'is_default' => 1,
            ),
            58 =>
            array (
                'id' => 102,
                'name' => 'All Posts',
                'slug' => 'blog-category',
                'url' => 'blog/category/list',
                'permission' => '{"permission":"Modules\\\\Blog\\\\Http\\\\Controllers\\\\BlogCategoryController@index", "route_name":["blog.category.index"], "menu_level":"1"}',
                'is_default' => 1,
            ),
            59 =>
            array (
                'id' => 103,
                'name' => 'Add coupon',
                'slug' => 'add-coupon',
                'url' => 'coupon/create',
                'permission' => '{"permission":"Modules\\\\Coupon\\\\Http\\\\Controllers\\\\CouponController@create","route_name":["coupon.create"], "menu_level":"1"}',
                'is_default' => 1,
            ),
            60 =>
            array (
                'id' => 104,
                'name' => 'All Coupons',
                'slug' => 'all-coupon',
                'url' => 'coupons',
                'permission' => '{"permission":"Modules\\\\Coupon\\\\Http\\\\Controllers\\\\CouponController@index","route_name":["coupon.index","coupon.edit","coupon.pdf","coupon.csv","coupon.shop","coupon.item"], "menu_level":"1"}',
                'is_default' => 1,
            ),
            61 =>
            array (
                'id' => 105,
                'name' => 'Coupon Redeems',
                'slug' => 'coupon-redeems',
                'url' => 'coupon-redeems',
                'permission' => '{"permission":"Modules\\\\Coupon\\\\Http\\\\Controllers\\\\CouponRedeemController@index","route_name":["couponRedeem.index"], "menu_level":"1"}',
                'is_default' => 1,
            ),
            62 =>
            array (
                'id' => 106,
                'name' => 'Add Popup',
                'slug' => 'popup-create',
                'url' => 'popup/create',
                'permission' => '{"permission":"Modules\\\\Popup\\\\Http\\\\Controllers\\\\PopupController@create", "route_name":["popup.create"], "menu_level":"1"}',
                'is_default' => 1,
            ),
            63 =>
            array (
                'id' => 107,
                'name' => 'All popups',
                'slug' => 'popups',
                'url' => 'popups',
                'permission' => '{"permission":"Modules\\\\Popup\\\\Http\\\\Controllers\\\\PopupController@index", "route_name":["popup.index", "popup.show", "popup.store", "popup.edit", "popup.update", "popup.delete"], "menu_level":"1"}',
                'is_default' => 1,
            ),
            64 =>
            array (
                'id' => 108,
                'name' => 'All Subscribers',
                'slug' => 'All-Subscribers',
                'url' => 'subscribers',
                'permission' => '{"permission":"Modules\\\\Newsletter\\\\Http\\\\Controllers\\\\SubscriberController@index","route_name":["subscriber.index","subscriber.edit","subscriber.update","subscriber.pdf","subscriber.csv"], "menu_level":"1"}',
                'is_default' => 1,
            ),
            65 =>
            array (
                'id' => 109,
                'name' => 'Menus',
                'slug' => 'menu-builder',
                'url' => 'menu-builder',
                'permission' => '{"permission":"Modules\\\\MenuBuilder\\\\Http\\\\Controllers\\\\MenuBuilderController@index","route_name":["menu.index"], "menu_level":"1"}',
                'is_default' => 1,
            ),
            66 =>
            array (
                'id' => 110,
                'name' => 'Accounts',
                'slug' => 'account-setting',
                'url' => 'account-setting',
                'permission' => '{"permission":"App\\\\Http\\\\Controllers\\\\AccountSettingController@index","route_name":["account.setting.option", "sso.index", "emailVerifySetting", "preferences.password", "permissionRoles.index", "roles.index", "roles.create", "roles.edit"], "menu_level":"1"}',
                'is_default' => 1,
            ),
            67 =>
            array (
                'id' => 111,
                'name' => 'Emails',
                'slug' => 'email-setting',
                'url' => 'email-setting',
                'permission' => '{"permission":"App\\\\Http\\\\Controllers\\\\EmailConfigurationController@index","route_name":["emailConfigurations.index", "emailTemplates.index", "emailTemplates.create", "emailTemplates.edit"], "menu_level":"1"}',
                'is_default' => 1,
            ),
            68 =>
            array (
                'id' => 112,
                'name' => 'Subscribers',
                'slug' => 'subscriber',
                'url' => 'subscribers',
                'permission' => '{"permission":"Modules\\\\Newsletter\\\\Http\\\\Controllers\\\\SubscriberController@index", "route_name":["subscriber.index"], "menu_level":"1"}',
                'is_default' => 1,
            ),
            69 =>
            array (
                'id' => 113,
                'name' => 'Popup',
                'slug' => 'popups',
                'url' => 'popups',
                'permission' => '{"permission":"Modules\\\\Popup\\\\Http\\\\Controllers\\\\PopupController@index", "route_name":["popup.index"], "menu_level":"1"}',
                'is_default' => 1,
            ),
            70 =>
            array (
                'id' => 114,
                'name' => 'Blog Category',
                'slug' => 'blog-category',
                'url' => 'blog/category/list',
                'permission' => '{"permission":"Modules\\\\Blog\\\\Http\\\\Controllers\\\\BlogCategoryController@index", "route_name":["blog.category.index"], "menu_level":"1"}',
                'is_default' => 1,
            ),
            71 =>
            array (
                'id' => 115,
                'name' => 'Blog',
                'slug' => 'blog',
                'url' => 'blogs',
                'permission' => '{"permission":"Modules\\\\Blog\\\\Http\\\\Controllers\\\\BlogController@index", "route_name":["blog.index", "blog.create", "blog.edit"], "menu_level":"1"}',
                'is_default' => 1,
            ),
            72 =>
            array (
                'id' => 116,
                'name' => 'Pages',
                'slug' => 'page',
                'url' => 'page/list',
                'permission' => '{"permission":"Modules\\\\CMS\\\\Http\\\\Controllers\\\\CMSController@index", "route_name":["page.index", "page.create", "page.edit"], "menu_level":"1"}',
                'is_default' => 1,
            ),
            73 =>
            array (
                'id' => 117,
                'name' => 'Appearance',
                'slug' => 'appearance',
                'url' => 'theme/list',
                'permission' => '{"permission":"Module\\\\CMS\\\\Http\\\\Controllers\\\\ThemeOptionController@list", "route_name":["theme.index", "theme.store"], "menu_level":"1"}',
                'is_default' => 1,
            ),
            74 =>
            array (
                'id' => 118,
                'name' => 'All Slider',
                'slug' => 'slider',
                'url' => 'sliders',
                'permission' => '{"permission":"Modules\\\\CMS\\\\Http\\\\Controllers\\\\SliderController@index", "route_name":["slider.index"], "menu_level":"1"}',
                'is_default' => 1,
            ),
            75 =>
            array (
                'id' => 119,
                'name' => 'Home pages',
                'slug' => 'home-pages',
                'url' => 'page/home/list',
                'permission' => '{"permission":"Modules\\\\CMS\\\\Http\\\\Controllers\\\\CMSController@index", "route_name":["page.home", "builder.edit"], "menu_level":"1"}',
                'is_default' => 1,
            ),
            76 =>
            array (
                'id' => 120,
                'name' => 'Coupons',
                'slug' => 'coupons',
                'url' => 'coupons',
                'permission' => '{"permission":"Modules\\\\Coupon\\\\Http\\\\Controllers\\\\CouponController@index", "route_name":["coupon.index"], "menu_level":"1"}',
                'is_default' => 1,
            ),
            77 =>
            array (
                'id' => 121,
                'name' => 'Coupons',
                'slug' => 'vendor-coupons',
                'url' => 'coupons',
                'permission' => '{"permission":"Modules\\\\Coupon\\\\Http\\\\Controllers\\\\Vendor\\\\CouponController@index", "route_name":["vendor.coupons"], "menu_level":"3"}',
                'is_default' => 1,
            ),
            78 =>
            array (
                'id' => 122,
                'name' => 'Refunds',
                'slug' => 'admin-refund-requests',
                'url' => 'refund-requests',
                'permission' => '{"permission":"Modules\\\\Refund\\\\Http\\\\Controllers\\\\RefundController@index","route_name":["refund.index"], "menu_level":"1"}',
                'is_default' => 1,
            ),
            79 =>
            array (
                'id' => 123,
                'name' => 'Refunds',
                'slug' => 'vendor-refund-requests',
                'url' => 'refund-requests',
                'permission' => '{"permission":"Modules\\\\Refund\\\\Http\\\\Controllers\\\\Vendor\\\\RefundController@index","route_name":["vendor.refund.index"], "menu_level":"3"}',
                'is_default' => 1,
            ),
            80 =>
            array (
                'id' => 124,
                'name' => 'Refund',
                'slug' => 'user-refund-request',
                'url' => 'refund-request',
                'permission' => '{"permission":"Modules\\\\Refund\\\\Http\\\\Controllers\\\\Site\\\\RefundController@index","route_name":["site.refundRequest"], "menu_level":"2"}',
                'is_default' => 1,
            ),
            81 =>
            array (
                'id' => 125,
                'name' => 'Shipping',
                'slug' => 'shipping',
                'url' => 'shippings',
                'permission' => '{"permission":"Modules\\\\Shipping\\\\Http\\\\Controllers\\\\ShippingController@index", "route_name":["shipping.index"], "menu_level":"1"}',
                'is_default' => 1,
            ),
            82 =>
            array (
                'id' => 126,
                'name' => 'Media Manager',
                'slug' => 'media-manager',
                'url' => 'uploaded-files',
                'permission' => '{"permission":"Modules\\\\MediaManager\\\\Http\\\\Controllers\\\\MediaManagerController@uploadedFiles", "route_name":["mediaManager.create", "mediaManager.upload", "mediaManager.uploadedFiles", "mediaManager.sortFiles", "mediaManager.paginateFiles", "mediaManager.download", "mediaManager.maxId"], "menu_level":"1"}',
                'is_default' => 1,
            ),
            83 =>
            array (
                'id' => 127,
                'name' => 'Geo Locale',
                'slug' => 'geo-locale',
                'url' => 'geolocale',
                'permission' => '{"permission":"Modules\\\\GeoLocale\\\\Http\\\\Controllers\\\\GeoLocaleController@index", "route_name":["geolocale.index"], "menu_level":"1"}',
                'is_default' => 1,
            ),
            84 =>
            array (
                'id' => 128,
                'name' => 'Tax',
                'slug' => 'tax',
                'url' => 'taxes',
                'permission' => '{"permission":"Modules\\\\Tax\\\\Http\\\\Controllers\\\\TaxClassController@index", "route_name":["tax.index"], "menu_level":"1"}',
                'is_default' => 1,
            ),
            85 =>
            array (
                'id' => 129,
                'name' => 'Tickets',
                'slug' => 'Ticket',
                'url' => 'ticket/list',
                'permission' => '{"permission":"Modules\\\\Ticket\\\\Http\\\\Controllers\\\\TicketController@index", "route_name":["admin.tickets", "admin.threadReply", "admin.threadEdit", "admin.threadPdf", "admin.threadCsv", "admin.threadAdd", "admin.changePriority"], "menu_level":"1"}',
                'is_default' => 1,
            ),
            86 =>
            array (
                'id' => 130,
                'name' => 'Add Ticket',
                'slug' => 'add-ticket',
                'url' => 'ticket/add',
                'permission' => '{"permission":"Modules\\\\Ticket\\\\Http\\\\Controllers\\\\TicketController@index", "route_name":["admin.threadAdd"], "menu_level":"1"}',
                'is_default' => 1,
            ),
            87 =>
            array (
                'id' => 131,
                'name' => 'All Ticket',
                'slug' => 'all-ticket',
                'url' => 'ticket/list',
                'permission' => '{"permission":"Modules\\\\Ticket\\\\Http\\\\Controllers\\\\TicketController@index", "route_name":["admin.tickets"], "menu_level":"1"}',
                'is_default' => 1,
            ),
            88 =>
            array (
                'id' => 132,
                'name' => 'Tickets',
                'slug' => 'vendor-ticket',
                'url' => 'ticket/list',
                'permission' => '{"permission":"Modules\\\\Ticket\\\\Http\\\\Controllers\\\\Vendor\\\\TicketController@index", "route_name":["vendor.threads", "vendor.threadAdd", "vendor.threadReply", "vendor.threadPdf", "vendor.threadCsv"], "menu_level":"3"}',
                'is_default' => 1,
            ),
            89 =>
            array (
                'id' => 133,
                'name' => 'All Forms',
                'slug' => 'forms',
                'url' => 'forms',
                'permission' => '{"permission":"Modules\\\\FormBuilder\\\\Http\\\\Controllers\\\\FormController@index", "route_name":["formbuilder::forms.index"], "menu_level":"1"}',
                'is_default' => 1,
            ),
            90 =>
            array (
                'id' => 134,
                'name' => 'All Submissions',
                'slug' => 'submissions',
                'url' => 'forms/submissions',
                'permission' => '{"permission":"Modules\\\\FormBuilder\\\\Http\\\\Controllers\\\\SubmissionController@index", "route_name":["formbuilder::submissions.all"], "menu_level":"1"}',
                'is_default' => 1,
            ),
            91 =>
            array (
                'id' => 135,
                'name' => 'Kyc',
                'slug' => 'kyc-form',
                'url' => 'forms/kyc-form',
                'permission' => '{"permission":"Modules\\\\FormBuilder\\\\Http\\\\Controllers\\\\KycController@index", "route_name":["formbuilder::kyc.index"], "menu_level":"1"}',
                'is_default' => 1,
            ),
            92 =>
            array (
                'id' => 136,
                'name' => 'Kyc',
                'slug' => 'vendor-kyc-form',
                'url' => 'vendor/kyc',
                'permission' => '{"permission":"Modules\\\\FormBuilder\\\\Http\\\\Controllers\\\\Vendor\\\\KycController@index", "route_name":["formbuilder::kyc.show"], "menu_level":"3"}',
                'is_default' => 1,
            ),
            93 =>
            array (
                'id' => 137,
                'name' => 'Reports',
                'slug' => 'reports',
                'url' => 'reports',
                'permission' => '{"permission":"Modules\\\\Report\\\\Http\\\\Controllers\\\\ReportController@index", "route_name":["reports"], "menu_level":"1"}',
                'is_default' => 1,
            ),
            94 =>
            array (
                'id' => 138,
                'name' => 'Reports',
                'slug' => 'vendor-report',
                'url' => 'reports',
                'permission' => '{"permission":"Modules\\\\Report\\\\Http\\\\Controllers\\\\Vendor\\\\ReportController@index", "route_name":["vendor.reports"], "menu_level":"3"}',
                'is_default' => 1,
            ),
            95 =>
            array (
                'id' => 139,
                'name' => 'Products Import',
                'slug' => 'products-import',
                'url' => 'imports',
                'permission' => '{"permission":"App\\\\Http\\\\Controllers\\\\ImportController@index", "route_name":["epz.import.products", "epz.imports"], "menu_level":"1"}',
                'is_default' => 0,
            ),
            96 =>
            array (
                'id' => 140,
                'name' => 'Users Import',
                'slug' => 'users-import',
                'url' => 'imports',
                'permission' => '{"permission":"App\\\\Http\\\\Controllers\\\\ImportController@index", "route_name":["epz.import.products", "epz.imports"], "menu_level":"1"}',
                'is_default' => 0,
            ),
            97 =>
            array (
                'id' => 141,
                'name' => 'Products Import',
                'slug' => 'products-import',
                'url' => 'import/products',
                'permission' => '{"permission":"App\\\\Http\\\\Controllers\\\\Vendor\\\\ImportController@productImport", "route_name":["vendor.epz.import.products"], "menu_level":"3"}',
                'is_default' => 0,
            ),
        ));


    }
}

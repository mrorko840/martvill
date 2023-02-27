<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductsMetaTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('products_meta')->delete();
        
        \DB::table('products_meta')->insert(array (
            0 => 
            array (
                'id' => 1480,
                'product_id' => 1141,
                'type' => 'array',
                'key' => 'meta_image',
                'value' => '["20221116/80e9b0d199208d79df3869c1c248acc7.png","20221116/d8be4961fc58751888180bf34a778088.png","20221116/dc3ecec9d2406223f5045339e668ae3d.png"]',
            ),
            1 => 
            array (
                'id' => 1481,
                'product_id' => 1141,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            2 => 
            array (
                'id' => 1482,
                'product_id' => 1141,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            3 => 
            array (
                'id' => 1483,
                'product_id' => 1141,
                'type' => 'array',
                'key' => 'meta_external_product',
                'value' => '{"url":"","text":""}',
            ),
            4 => 
            array (
                'id' => 1484,
                'product_id' => 1141,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            5 => 
            array (
                'id' => 1485,
                'product_id' => 1141,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            6 => 
            array (
                'id' => 1486,
                'product_id' => 1141,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            7 => 
            array (
                'id' => 1487,
                'product_id' => 1141,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => '',
            ),
            8 => 
            array (
                'id' => 1488,
                'product_id' => 1141,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            9 => 
            array (
                'id' => 1489,
                'product_id' => 1141,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            10 => 
            array (
                'id' => 1490,
                'product_id' => 1141,
                'type' => 'string',
                'key' => 'meta_hide_stock',
                'value' => '0',
            ),
            11 => 
            array (
                'id' => 1491,
                'product_id' => 1141,
                'type' => 'string',
                'key' => 'meta_stock_status',
                'value' => 'In Stock',
            ),
            12 => 
            array (
                'id' => 1492,
                'product_id' => 1141,
                'type' => 'string',
                'key' => 'meta_individual_sale',
                'value' => '0',
            ),
            13 => 
            array (
                'id' => 1493,
                'product_id' => 1141,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            14 => 
            array (
                'id' => 1494,
                'product_id' => 1141,
                'type' => 'string',
                'key' => 'meta_cash_on_delivery',
                'value' => '1',
            ),
            15 => 
            array (
                'id' => 1495,
                'product_id' => 1141,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '0.439',
            ),
            16 => 
            array (
                'id' => 1496,
                'product_id' => 1141,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            17 => 
            array (
                'id' => 1497,
                'product_id' => 1141,
                'type' => 'string',
                'key' => 'meta_warranty_type',
                'value' => 'No Warranty',
            ),
            18 => 
            array (
                'id' => 1498,
                'product_id' => 1141,
                'type' => 'string',
                'key' => 'meta_warranty_period',
                'value' => '',
            ),
            19 => 
            array (
                'id' => 1499,
                'product_id' => 1141,
                'type' => 'string',
                'key' => 'meta_warranty_policy',
                'value' => '',
            ),
            20 => 
            array (
                'id' => 1500,
                'product_id' => 1141,
                'type' => 'string',
                'key' => 'meta_purchase_note',
                'value' => '',
            ),
            21 => 
            array (
                'id' => 1501,
                'product_id' => 1141,
                'type' => 'string',
                'key' => 'meta_estimated_delivery',
                'value' => '7',
            ),
            22 => 
            array (
                'id' => 1502,
                'product_id' => 1141,
                'type' => 'string',
                'key' => 'meta_enable_reviews',
                'value' => '1',
            ),
            23 => 
            array (
                'id' => 1503,
                'product_id' => 1141,
                'type' => 'array',
                'key' => 'meta_seo',
                'value' => '{"title":"Women Solid Jacket Thick Short Hoodies Sweatshirt Kangaroo Long Sleeve Sweatshirt","description":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur aliquet quam id dui posuere blandit. Curabitur aliquet quam id dui posuere blandit. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.","image":"20221116/80e9b0d199208d79df3869c1c248acc7.png"}',
            ),
            24 => 
            array (
                'id' => 1504,
                'product_id' => 1141,
                'type' => 'array',
                'key' => 'meta_video_files',
                'value' => '[]',
            ),
            25 => 
            array (
                'id' => 1505,
                'product_id' => 1141,
                'type' => 'array',
                'key' => 'meta_video_url',
                'value' => '[]',
            ),
            26 => 
            array (
                'id' => 1506,
                'product_id' => 1142,
                'type' => 'array',
                'key' => 'meta_image',
                'value' => '["20221116/89f985fd1fb8a6591caed23273d0046c.jpg","20221116/151424cd2adfcb8c20a8f444d0732ee8.jpg","20221116/313d19c284cc9f024d7e6292e770e0e2.jpg"]',
            ),
            27 => 
            array (
                'id' => 1507,
                'product_id' => 1142,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            28 => 
            array (
                'id' => 1508,
                'product_id' => 1142,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            29 => 
            array (
                'id' => 1509,
                'product_id' => 1142,
                'type' => 'array',
                'key' => 'meta_external_product',
                'value' => '{"url":"","text":""}',
            ),
            30 => 
            array (
                'id' => 1510,
                'product_id' => 1142,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            31 => 
            array (
                'id' => 1511,
                'product_id' => 1142,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            32 => 
            array (
                'id' => 1512,
                'product_id' => 1142,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            33 => 
            array (
                'id' => 1513,
                'product_id' => 1142,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            34 => 
            array (
                'id' => 1514,
                'product_id' => 1142,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            35 => 
            array (
                'id' => 1515,
                'product_id' => 1142,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            36 => 
            array (
                'id' => 1516,
                'product_id' => 1142,
                'type' => 'string',
                'key' => 'meta_hide_stock',
                'value' => '0',
            ),
            37 => 
            array (
                'id' => 1517,
                'product_id' => 1142,
                'type' => 'string',
                'key' => 'meta_stock_status',
                'value' => 'In Stock',
            ),
            38 => 
            array (
                'id' => 1518,
                'product_id' => 1142,
                'type' => 'string',
                'key' => 'meta_individual_sale',
                'value' => '0',
            ),
            39 => 
            array (
                'id' => 1519,
                'product_id' => 1142,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            40 => 
            array (
                'id' => 1520,
                'product_id' => 1142,
                'type' => 'string',
                'key' => 'meta_cash_on_delivery',
                'value' => '1',
            ),
            41 => 
            array (
                'id' => 1521,
                'product_id' => 1142,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '0.378',
            ),
            42 => 
            array (
                'id' => 1522,
                'product_id' => 1142,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            43 => 
            array (
                'id' => 1523,
                'product_id' => 1142,
                'type' => 'string',
                'key' => 'meta_warranty_type',
                'value' => 'No Warranty',
            ),
            44 => 
            array (
                'id' => 1524,
                'product_id' => 1142,
                'type' => 'string',
                'key' => 'meta_warranty_period',
                'value' => '',
            ),
            45 => 
            array (
                'id' => 1525,
                'product_id' => 1142,
                'type' => 'string',
                'key' => 'meta_warranty_policy',
                'value' => '',
            ),
            46 => 
            array (
                'id' => 1526,
                'product_id' => 1142,
                'type' => 'string',
                'key' => 'meta_purchase_note',
                'value' => '',
            ),
            47 => 
            array (
                'id' => 1527,
                'product_id' => 1142,
                'type' => 'string',
                'key' => 'meta_estimated_delivery',
                'value' => '7',
            ),
            48 => 
            array (
                'id' => 1528,
                'product_id' => 1142,
                'type' => 'string',
                'key' => 'meta_enable_reviews',
                'value' => '1',
            ),
            49 => 
            array (
                'id' => 1529,
                'product_id' => 1142,
                'type' => 'array',
                'key' => 'meta_seo',
                'value' => '{"title":"Women Dress Weave Sleeveless Strapless Diamonds Slim Sling Formal","description":"Curabitur aliquet quam id dui posuere blandit. Cras ultricies ligula sed magna dictum porta. Nulla quis lorem ut libero malesuada feugiat. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Lorem ipsum dolor sit amet, consectetur adipiscing elit.","image":"20221116/89f985fd1fb8a6591caed23273d0046c.jpg"}',
            ),
            50 => 
            array (
                'id' => 1530,
                'product_id' => 1142,
                'type' => 'array',
                'key' => 'meta_video_files',
                'value' => '[]',
            ),
            51 => 
            array (
                'id' => 1531,
                'product_id' => 1142,
                'type' => 'array',
                'key' => 'meta_video_url',
                'value' => '[]',
            ),
            52 => 
            array (
                'id' => 1532,
                'product_id' => 1143,
                'type' => 'array',
                'key' => 'meta_image',
                'value' => '["20221116/333e70339c86361d61ea7dc2d5497d09.png","20221116/d88525f61f2a10b68b30cc13b24b18c1.jpg","20221116/9faffed73bd4c60e3ade0a8fd7311a78.jpg","20221116/2c21d3637144e137fb364ecb9bedaeab.jpg","20221116/862c541768fde4c00286165736e7842e.jpg","20221116/39491453c1e23216ec2a0737c7f52bb9.jpg"]',
            ),
            53 => 
            array (
                'id' => 1533,
                'product_id' => 1143,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            54 => 
            array (
                'id' => 1534,
                'product_id' => 1143,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            55 => 
            array (
                'id' => 1535,
                'product_id' => 1143,
                'type' => 'array',
                'key' => 'meta_external_product',
                'value' => '{"url":"","text":""}',
            ),
            56 => 
            array (
                'id' => 1536,
                'product_id' => 1143,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            57 => 
            array (
                'id' => 1537,
                'product_id' => 1143,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            58 => 
            array (
                'id' => 1538,
                'product_id' => 1143,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            59 => 
            array (
                'id' => 1539,
                'product_id' => 1143,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => '',
            ),
            60 => 
            array (
                'id' => 1540,
                'product_id' => 1143,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            61 => 
            array (
                'id' => 1541,
                'product_id' => 1143,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            62 => 
            array (
                'id' => 1542,
                'product_id' => 1143,
                'type' => 'string',
                'key' => 'meta_hide_stock',
                'value' => '0',
            ),
            63 => 
            array (
                'id' => 1543,
                'product_id' => 1143,
                'type' => 'string',
                'key' => 'meta_stock_status',
                'value' => 'In Stock',
            ),
            64 => 
            array (
                'id' => 1544,
                'product_id' => 1143,
                'type' => 'string',
                'key' => 'meta_individual_sale',
                'value' => '0',
            ),
            65 => 
            array (
                'id' => 1545,
                'product_id' => 1143,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            66 => 
            array (
                'id' => 1546,
                'product_id' => 1143,
                'type' => 'string',
                'key' => 'meta_cash_on_delivery',
                'value' => '1',
            ),
            67 => 
            array (
                'id' => 1547,
                'product_id' => 1143,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '0.192',
            ),
            68 => 
            array (
                'id' => 1548,
                'product_id' => 1143,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            69 => 
            array (
                'id' => 1549,
                'product_id' => 1143,
                'type' => 'string',
                'key' => 'meta_warranty_type',
                'value' => 'No Warranty',
            ),
            70 => 
            array (
                'id' => 1550,
                'product_id' => 1143,
                'type' => 'string',
                'key' => 'meta_warranty_period',
                'value' => '',
            ),
            71 => 
            array (
                'id' => 1551,
                'product_id' => 1143,
                'type' => 'string',
                'key' => 'meta_warranty_policy',
                'value' => '',
            ),
            72 => 
            array (
                'id' => 1552,
                'product_id' => 1143,
                'type' => 'string',
                'key' => 'meta_purchase_note',
                'value' => '',
            ),
            73 => 
            array (
                'id' => 1553,
                'product_id' => 1143,
                'type' => 'string',
                'key' => 'meta_estimated_delivery',
                'value' => '7',
            ),
            74 => 
            array (
                'id' => 1554,
                'product_id' => 1143,
                'type' => 'string',
                'key' => 'meta_enable_reviews',
                'value' => '1',
            ),
            75 => 
            array (
                'id' => 1555,
                'product_id' => 1143,
                'type' => 'array',
                'key' => 'meta_seo',
                'value' => '{"title":"Women Chiffon Solid Pure Basic Soft Red Blouses Tops Summer Top Casual Loose Short Sleeve","description":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sollicitudin molestie malesuada. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.","image":"20221116/333e70339c86361d61ea7dc2d5497d09.png"}',
            ),
            76 => 
            array (
                'id' => 1556,
                'product_id' => 1143,
                'type' => 'array',
                'key' => 'meta_video_files',
                'value' => '[]',
            ),
            77 => 
            array (
                'id' => 1557,
                'product_id' => 1143,
                'type' => 'array',
                'key' => 'meta_video_url',
                'value' => '[]',
            ),
            78 => 
            array (
                'id' => 1558,
                'product_id' => 1144,
                'type' => 'array',
                'key' => 'meta_image',
                'value' => '["20221116/1f6a7f963c45fdf2697c4395d2d987ee.png","20221116/970d6e8b2e0d034418d7197168221218.PNG","20221116/4a1b06dd9b139659fb2ed2d8b08365be.PNG","20221116/15d29e911d327529118a2f354ddb557d.PNG","20221116/0b02718dd8afafb4da8edef07ac833db.PNG"]',
            ),
            79 => 
            array (
                'id' => 1559,
                'product_id' => 1144,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            80 => 
            array (
                'id' => 1560,
                'product_id' => 1144,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            81 => 
            array (
                'id' => 1561,
                'product_id' => 1144,
                'type' => 'array',
                'key' => 'meta_external_product',
                'value' => '{"url":"","text":""}',
            ),
            82 => 
            array (
                'id' => 1562,
                'product_id' => 1144,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            83 => 
            array (
                'id' => 1563,
                'product_id' => 1144,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            84 => 
            array (
                'id' => 1564,
                'product_id' => 1144,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            85 => 
            array (
                'id' => 1565,
                'product_id' => 1144,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => '',
            ),
            86 => 
            array (
                'id' => 1566,
                'product_id' => 1144,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            87 => 
            array (
                'id' => 1567,
                'product_id' => 1144,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            88 => 
            array (
                'id' => 1568,
                'product_id' => 1144,
                'type' => 'string',
                'key' => 'meta_hide_stock',
                'value' => '0',
            ),
            89 => 
            array (
                'id' => 1569,
                'product_id' => 1144,
                'type' => 'string',
                'key' => 'meta_stock_status',
                'value' => 'In Stock',
            ),
            90 => 
            array (
                'id' => 1570,
                'product_id' => 1144,
                'type' => 'string',
                'key' => 'meta_individual_sale',
                'value' => '0',
            ),
            91 => 
            array (
                'id' => 1571,
                'product_id' => 1144,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            92 => 
            array (
                'id' => 1572,
                'product_id' => 1144,
                'type' => 'string',
                'key' => 'meta_cash_on_delivery',
                'value' => '1',
            ),
            93 => 
            array (
                'id' => 1573,
                'product_id' => 1144,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '0.237',
            ),
            94 => 
            array (
                'id' => 1574,
                'product_id' => 1144,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            95 => 
            array (
                'id' => 1575,
                'product_id' => 1144,
                'type' => 'string',
                'key' => 'meta_warranty_type',
                'value' => 'No Warranty',
            ),
            96 => 
            array (
                'id' => 1576,
                'product_id' => 1144,
                'type' => 'string',
                'key' => 'meta_warranty_period',
                'value' => '',
            ),
            97 => 
            array (
                'id' => 1577,
                'product_id' => 1144,
                'type' => 'string',
                'key' => 'meta_warranty_policy',
                'value' => '',
            ),
            98 => 
            array (
                'id' => 1578,
                'product_id' => 1144,
                'type' => 'string',
                'key' => 'meta_purchase_note',
                'value' => '',
            ),
            99 => 
            array (
                'id' => 1579,
                'product_id' => 1144,
                'type' => 'string',
                'key' => 'meta_estimated_delivery',
                'value' => '7',
            ),
            100 => 
            array (
                'id' => 1580,
                'product_id' => 1144,
                'type' => 'string',
                'key' => 'meta_enable_reviews',
                'value' => '1',
            ),
            101 => 
            array (
                'id' => 1581,
                'product_id' => 1144,
                'type' => 'array',
                'key' => 'meta_seo',
                'value' => '{"title":"Woman Korean O-neck Knitted Pullovers Thick Autumn Winter Candy Color Loose Hoodies Solid Womens Clothing","description":"Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Nulla porttitor accumsan tincidunt. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Pellentesque in ipsum id orci porta dapibus.","image":"20221116/1f6a7f963c45fdf2697c4395d2d987ee.png"}',
            ),
            102 => 
            array (
                'id' => 1582,
                'product_id' => 1144,
                'type' => 'array',
                'key' => 'meta_video_files',
                'value' => '[]',
            ),
            103 => 
            array (
                'id' => 1583,
                'product_id' => 1144,
                'type' => 'array',
                'key' => 'meta_video_url',
                'value' => '[]',
            ),
            104 => 
            array (
                'id' => 1584,
                'product_id' => 1145,
                'type' => 'array',
                'key' => 'meta_image',
                'value' => '["20221116/cba16a8447201689120bc7d39c2a3cc0.jpg","20221116/27fabac9a6e3c6ab8f81c414acc5a1b5.jpg","20221116/2fbbf87e374ab44d3d43e4d9143b9b87.jpg"]',
            ),
            105 => 
            array (
                'id' => 1585,
                'product_id' => 1145,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            106 => 
            array (
                'id' => 1586,
                'product_id' => 1145,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            107 => 
            array (
                'id' => 1587,
                'product_id' => 1145,
                'type' => 'array',
                'key' => 'meta_external_product',
                'value' => '{"url":"","text":""}',
            ),
            108 => 
            array (
                'id' => 1588,
                'product_id' => 1145,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            109 => 
            array (
                'id' => 1589,
                'product_id' => 1145,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            110 => 
            array (
                'id' => 1590,
                'product_id' => 1145,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            111 => 
            array (
                'id' => 1591,
                'product_id' => 1145,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => '',
            ),
            112 => 
            array (
                'id' => 1592,
                'product_id' => 1145,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            113 => 
            array (
                'id' => 1593,
                'product_id' => 1145,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            114 => 
            array (
                'id' => 1594,
                'product_id' => 1145,
                'type' => 'string',
                'key' => 'meta_hide_stock',
                'value' => '0',
            ),
            115 => 
            array (
                'id' => 1595,
                'product_id' => 1145,
                'type' => 'string',
                'key' => 'meta_stock_status',
                'value' => 'In Stock',
            ),
            116 => 
            array (
                'id' => 1596,
                'product_id' => 1145,
                'type' => 'string',
                'key' => 'meta_individual_sale',
                'value' => '0',
            ),
            117 => 
            array (
                'id' => 1597,
                'product_id' => 1145,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            118 => 
            array (
                'id' => 1598,
                'product_id' => 1145,
                'type' => 'string',
                'key' => 'meta_cash_on_delivery',
                'value' => '1',
            ),
            119 => 
            array (
                'id' => 1599,
                'product_id' => 1145,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '0.237',
            ),
            120 => 
            array (
                'id' => 1600,
                'product_id' => 1145,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            121 => 
            array (
                'id' => 1601,
                'product_id' => 1145,
                'type' => 'string',
                'key' => 'meta_warranty_type',
                'value' => 'No Warranty',
            ),
            122 => 
            array (
                'id' => 1602,
                'product_id' => 1145,
                'type' => 'string',
                'key' => 'meta_warranty_period',
                'value' => '',
            ),
            123 => 
            array (
                'id' => 1603,
                'product_id' => 1145,
                'type' => 'string',
                'key' => 'meta_warranty_policy',
                'value' => '',
            ),
            124 => 
            array (
                'id' => 1604,
                'product_id' => 1145,
                'type' => 'string',
                'key' => 'meta_purchase_note',
                'value' => '',
            ),
            125 => 
            array (
                'id' => 1605,
                'product_id' => 1145,
                'type' => 'string',
                'key' => 'meta_estimated_delivery',
                'value' => '7',
            ),
            126 => 
            array (
                'id' => 1606,
                'product_id' => 1145,
                'type' => 'string',
                'key' => 'meta_enable_reviews',
                'value' => '1',
            ),
            127 => 
            array (
                'id' => 1607,
                'product_id' => 1145,
                'type' => 'array',
                'key' => 'meta_seo',
                'value' => '{"title":"Winter New Baby Retro Thicken Plus Fleece Embroidery Wheat","description":"Proin eget tortor risus. Vivamus suscipit tortor eget felis porttitor volutpat. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Donec sollicitudin molestie malesuada.","image":"20221116/cba16a8447201689120bc7d39c2a3cc0.jpg"}',
            ),
            128 => 
            array (
                'id' => 1608,
                'product_id' => 1145,
                'type' => 'array',
                'key' => 'meta_video_files',
                'value' => '[]',
            ),
            129 => 
            array (
                'id' => 1609,
                'product_id' => 1145,
                'type' => 'array',
                'key' => 'meta_video_url',
                'value' => '[]',
            ),
            130 => 
            array (
                'id' => 1610,
                'product_id' => 1146,
                'type' => 'array',
                'key' => 'meta_image',
                'value' => '["20221116/c06f58d02e8f56491a84a3467fc7d2d5.png","20221116/62c02178575b62bc052e3e04faed7b7a.png","20221116/41e08cd219ae9a5315e7ee1e3c09eb66.png","20221116/db0834262a141bd35649d8b5dee355d8.png"]',
            ),
            131 => 
            array (
                'id' => 1611,
                'product_id' => 1146,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            132 => 
            array (
                'id' => 1612,
                'product_id' => 1146,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            133 => 
            array (
                'id' => 1613,
                'product_id' => 1146,
                'type' => 'array',
                'key' => 'meta_external_product',
                'value' => '{"url":"","text":""}',
            ),
            134 => 
            array (
                'id' => 1614,
                'product_id' => 1146,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            135 => 
            array (
                'id' => 1615,
                'product_id' => 1146,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            136 => 
            array (
                'id' => 1616,
                'product_id' => 1146,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            137 => 
            array (
                'id' => 1617,
                'product_id' => 1146,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => '',
            ),
            138 => 
            array (
                'id' => 1618,
                'product_id' => 1146,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            139 => 
            array (
                'id' => 1619,
                'product_id' => 1146,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            140 => 
            array (
                'id' => 1620,
                'product_id' => 1146,
                'type' => 'string',
                'key' => 'meta_hide_stock',
                'value' => '0',
            ),
            141 => 
            array (
                'id' => 1621,
                'product_id' => 1146,
                'type' => 'string',
                'key' => 'meta_stock_status',
                'value' => 'In Stock',
            ),
            142 => 
            array (
                'id' => 1622,
                'product_id' => 1146,
                'type' => 'string',
                'key' => 'meta_individual_sale',
                'value' => '0',
            ),
            143 => 
            array (
                'id' => 1623,
                'product_id' => 1146,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            144 => 
            array (
                'id' => 1624,
                'product_id' => 1146,
                'type' => 'string',
                'key' => 'meta_cash_on_delivery',
                'value' => '1',
            ),
            145 => 
            array (
                'id' => 1625,
                'product_id' => 1146,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '0.318',
            ),
            146 => 
            array (
                'id' => 1626,
                'product_id' => 1146,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            147 => 
            array (
                'id' => 1627,
                'product_id' => 1146,
                'type' => 'string',
                'key' => 'meta_warranty_type',
                'value' => 'No Warranty',
            ),
            148 => 
            array (
                'id' => 1628,
                'product_id' => 1146,
                'type' => 'string',
                'key' => 'meta_warranty_period',
                'value' => '',
            ),
            149 => 
            array (
                'id' => 1629,
                'product_id' => 1146,
                'type' => 'string',
                'key' => 'meta_warranty_policy',
                'value' => '',
            ),
            150 => 
            array (
                'id' => 1630,
                'product_id' => 1146,
                'type' => 'string',
                'key' => 'meta_purchase_note',
                'value' => '',
            ),
            151 => 
            array (
                'id' => 1631,
                'product_id' => 1146,
                'type' => 'string',
                'key' => 'meta_estimated_delivery',
                'value' => '7',
            ),
            152 => 
            array (
                'id' => 1632,
                'product_id' => 1146,
                'type' => 'string',
                'key' => 'meta_enable_reviews',
                'value' => '1',
            ),
            153 => 
            array (
                'id' => 1633,
                'product_id' => 1146,
                'type' => 'array',
                'key' => 'meta_seo',
                'value' => '{"title":"Two Piece Set Tracksuit Women Top+Pant Suits Hoodie Sweatshirt With Pockets","description":"Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Cras ultricies ligula sed magna dictum porta. Sed porttitor lectus nibh. Donec rutrum congue leo eget malesuada. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.","image":"20221116/c06f58d02e8f56491a84a3467fc7d2d5.png"}',
            ),
            154 => 
            array (
                'id' => 1634,
                'product_id' => 1146,
                'type' => 'array',
                'key' => 'meta_video_files',
                'value' => '[]',
            ),
            155 => 
            array (
                'id' => 1635,
                'product_id' => 1146,
                'type' => 'array',
                'key' => 'meta_video_url',
                'value' => '["https:\\/\\/player.vimeo.com\\/video\\/330420305?h=0c269f7e82&color=f7f7f7&title=0&byline=0&portrait=0"]',
            ),
            156 => 
            array (
                'id' => 1636,
                'product_id' => 1147,
                'type' => 'array',
                'key' => 'meta_image',
                'value' => '["20221116/9a0f7b551a14b40abbb4d6c330feedd9.jpg","20221116/22008cbc2db861e19f2788ffde364ea9.jpg","20221116/d4f97b603be255fe3854e3b7d7980c47.jpg","20221116/e67ae001c862e4f8e2cb3eb2c500f35b.jpg","20221116/6b31906332e193e981bd2669fd2cc5c1.jpg"]',
            ),
            157 => 
            array (
                'id' => 1637,
                'product_id' => 1147,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            158 => 
            array (
                'id' => 1638,
                'product_id' => 1147,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            159 => 
            array (
                'id' => 1639,
                'product_id' => 1147,
                'type' => 'array',
                'key' => 'meta_external_product',
                'value' => '{"url":"","text":""}',
            ),
            160 => 
            array (
                'id' => 1640,
                'product_id' => 1147,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            161 => 
            array (
                'id' => 1641,
                'product_id' => 1147,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            162 => 
            array (
                'id' => 1642,
                'product_id' => 1147,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            163 => 
            array (
                'id' => 1643,
                'product_id' => 1147,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            164 => 
            array (
                'id' => 1644,
                'product_id' => 1147,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            165 => 
            array (
                'id' => 1645,
                'product_id' => 1147,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            166 => 
            array (
                'id' => 1646,
                'product_id' => 1147,
                'type' => 'string',
                'key' => 'meta_hide_stock',
                'value' => '0',
            ),
            167 => 
            array (
                'id' => 1647,
                'product_id' => 1147,
                'type' => 'string',
                'key' => 'meta_stock_status',
                'value' => 'In Stock',
            ),
            168 => 
            array (
                'id' => 1648,
                'product_id' => 1147,
                'type' => 'string',
                'key' => 'meta_individual_sale',
                'value' => '0',
            ),
            169 => 
            array (
                'id' => 1649,
                'product_id' => 1147,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            170 => 
            array (
                'id' => 1650,
                'product_id' => 1147,
                'type' => 'string',
                'key' => 'meta_cash_on_delivery',
                'value' => '1',
            ),
            171 => 
            array (
                'id' => 1651,
                'product_id' => 1147,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '0.237',
            ),
            172 => 
            array (
                'id' => 1652,
                'product_id' => 1147,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            173 => 
            array (
                'id' => 1653,
                'product_id' => 1147,
                'type' => 'string',
                'key' => 'meta_warranty_type',
                'value' => 'No Warranty',
            ),
            174 => 
            array (
                'id' => 1654,
                'product_id' => 1147,
                'type' => 'string',
                'key' => 'meta_warranty_period',
                'value' => '',
            ),
            175 => 
            array (
                'id' => 1655,
                'product_id' => 1147,
                'type' => 'string',
                'key' => 'meta_warranty_policy',
                'value' => '',
            ),
            176 => 
            array (
                'id' => 1656,
                'product_id' => 1147,
                'type' => 'string',
                'key' => 'meta_purchase_note',
                'value' => '',
            ),
            177 => 
            array (
                'id' => 1657,
                'product_id' => 1147,
                'type' => 'string',
                'key' => 'meta_estimated_delivery',
                'value' => '7',
            ),
            178 => 
            array (
                'id' => 1658,
                'product_id' => 1147,
                'type' => 'string',
                'key' => 'meta_enable_reviews',
                'value' => '1',
            ),
            179 => 
            array (
                'id' => 1659,
                'product_id' => 1147,
                'type' => 'array',
                'key' => 'meta_seo',
                'value' => '{"title":"Summer thin loose cartoon printed short-sleeved shirt","description":"Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Nulla porttitor accumsan tincidunt. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.","image":"20221116/9a0f7b551a14b40abbb4d6c330feedd9.jpg"}',
            ),
            180 => 
            array (
                'id' => 1660,
                'product_id' => 1147,
                'type' => 'array',
                'key' => 'meta_video_files',
                'value' => '[]',
            ),
            181 => 
            array (
                'id' => 1661,
                'product_id' => 1147,
                'type' => 'array',
                'key' => 'meta_video_url',
                'value' => '["https:\\/\\/player.vimeo.com\\/video\\/330420305?h=0c269f7e82&color=f7f7f7&title=0&byline=0&portrait=0"]',
            ),
            182 => 
            array (
                'id' => 1662,
                'product_id' => 1148,
                'type' => 'array',
                'key' => 'meta_image',
                'value' => '["20221116/9bb2d571c26fe0a58b9659aa0c7b263a.jpg","20221116/0afb2cf13cc211bed62dc96ebec80148.jpg","20221116/69b2374fc9f15df44cd820af5da34eb3.jpg","20221116/4d123f6c3ad266ef10c436d577a9c273.jpg"]',
            ),
            183 => 
            array (
                'id' => 1663,
                'product_id' => 1148,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            184 => 
            array (
                'id' => 1664,
                'product_id' => 1148,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            185 => 
            array (
                'id' => 1665,
                'product_id' => 1148,
                'type' => 'array',
                'key' => 'meta_external_product',
                'value' => '{"url":"","text":""}',
            ),
            186 => 
            array (
                'id' => 1666,
                'product_id' => 1148,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            187 => 
            array (
                'id' => 1667,
                'product_id' => 1148,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            188 => 
            array (
                'id' => 1668,
                'product_id' => 1148,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            189 => 
            array (
                'id' => 1669,
                'product_id' => 1148,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => '',
            ),
            190 => 
            array (
                'id' => 1670,
                'product_id' => 1148,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            191 => 
            array (
                'id' => 1671,
                'product_id' => 1148,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            192 => 
            array (
                'id' => 1672,
                'product_id' => 1148,
                'type' => 'string',
                'key' => 'meta_hide_stock',
                'value' => '0',
            ),
            193 => 
            array (
                'id' => 1673,
                'product_id' => 1148,
                'type' => 'string',
                'key' => 'meta_stock_status',
                'value' => 'In Stock',
            ),
            194 => 
            array (
                'id' => 1674,
                'product_id' => 1148,
                'type' => 'string',
                'key' => 'meta_individual_sale',
                'value' => '0',
            ),
            195 => 
            array (
                'id' => 1675,
                'product_id' => 1148,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            196 => 
            array (
                'id' => 1676,
                'product_id' => 1148,
                'type' => 'string',
                'key' => 'meta_cash_on_delivery',
                'value' => '1',
            ),
            197 => 
            array (
                'id' => 1677,
                'product_id' => 1148,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '0.254',
            ),
            198 => 
            array (
                'id' => 1678,
                'product_id' => 1148,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            199 => 
            array (
                'id' => 1679,
                'product_id' => 1148,
                'type' => 'string',
                'key' => 'meta_warranty_type',
                'value' => 'No Warranty',
            ),
            200 => 
            array (
                'id' => 1680,
                'product_id' => 1148,
                'type' => 'string',
                'key' => 'meta_warranty_period',
                'value' => '',
            ),
            201 => 
            array (
                'id' => 1681,
                'product_id' => 1148,
                'type' => 'string',
                'key' => 'meta_warranty_policy',
                'value' => '',
            ),
            202 => 
            array (
                'id' => 1682,
                'product_id' => 1148,
                'type' => 'string',
                'key' => 'meta_purchase_note',
                'value' => '',
            ),
            203 => 
            array (
                'id' => 1683,
                'product_id' => 1148,
                'type' => 'string',
                'key' => 'meta_estimated_delivery',
                'value' => '7',
            ),
            204 => 
            array (
                'id' => 1684,
                'product_id' => 1148,
                'type' => 'string',
                'key' => 'meta_enable_reviews',
                'value' => '1',
            ),
            205 => 
            array (
                'id' => 1685,
                'product_id' => 1148,
                'type' => 'array',
                'key' => 'meta_seo',
                'value' => '{"title":"Summer New Women T-Shirts Harajuku Kawaii Cute animal Flamingo Printing","description":"Cras ultricies ligula sed magna dictum porta. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Pellentesque in ipsum id orci porta dapibus. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Nulla porttitor accumsan tincidunt.","image":"20221116/9bb2d571c26fe0a58b9659aa0c7b263a.jpg"}',
            ),
            206 => 
            array (
                'id' => 1686,
                'product_id' => 1148,
                'type' => 'array',
                'key' => 'meta_video_files',
                'value' => '[]',
            ),
            207 => 
            array (
                'id' => 1687,
                'product_id' => 1148,
                'type' => 'array',
                'key' => 'meta_video_url',
                'value' => '[]',
            ),
            208 => 
            array (
                'id' => 1699,
                'product_id' => 1149,
                'type' => 'array',
                'key' => 'meta_image',
                'value' => '["20221116/8c8429f6579a8b6457e37ec1b4b6922d.jpg","20221116/563e1857ef81b9db6fbea967657b5777.jpg"]',
            ),
            209 => 
            array (
                'id' => 1700,
                'product_id' => 1149,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            210 => 
            array (
                'id' => 1701,
                'product_id' => 1149,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            211 => 
            array (
                'id' => 1702,
                'product_id' => 1149,
                'type' => 'array',
                'key' => 'meta_external_product',
                'value' => '{"url":"","text":""}',
            ),
            212 => 
            array (
                'id' => 1703,
                'product_id' => 1149,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            213 => 
            array (
                'id' => 1704,
                'product_id' => 1149,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            214 => 
            array (
                'id' => 1705,
                'product_id' => 1149,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            215 => 
            array (
                'id' => 1706,
                'product_id' => 1149,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => '',
            ),
            216 => 
            array (
                'id' => 1707,
                'product_id' => 1149,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            217 => 
            array (
                'id' => 1708,
                'product_id' => 1149,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            218 => 
            array (
                'id' => 1709,
                'product_id' => 1149,
                'type' => 'string',
                'key' => 'meta_hide_stock',
                'value' => '0',
            ),
            219 => 
            array (
                'id' => 1710,
                'product_id' => 1149,
                'type' => 'string',
                'key' => 'meta_stock_status',
                'value' => 'In Stock',
            ),
            220 => 
            array (
                'id' => 1711,
                'product_id' => 1149,
                'type' => 'string',
                'key' => 'meta_individual_sale',
                'value' => '0',
            ),
            221 => 
            array (
                'id' => 1712,
                'product_id' => 1149,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            222 => 
            array (
                'id' => 1713,
                'product_id' => 1149,
                'type' => 'string',
                'key' => 'meta_cash_on_delivery',
                'value' => '1',
            ),
            223 => 
            array (
                'id' => 1714,
                'product_id' => 1149,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '0.367',
            ),
            224 => 
            array (
                'id' => 1715,
                'product_id' => 1149,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            225 => 
            array (
                'id' => 1716,
                'product_id' => 1149,
                'type' => 'string',
                'key' => 'meta_warranty_type',
                'value' => 'No Warranty',
            ),
            226 => 
            array (
                'id' => 1717,
                'product_id' => 1149,
                'type' => 'string',
                'key' => 'meta_warranty_period',
                'value' => '',
            ),
            227 => 
            array (
                'id' => 1718,
                'product_id' => 1149,
                'type' => 'string',
                'key' => 'meta_warranty_policy',
                'value' => '',
            ),
            228 => 
            array (
                'id' => 1719,
                'product_id' => 1149,
                'type' => 'string',
                'key' => 'meta_purchase_note',
                'value' => '',
            ),
            229 => 
            array (
                'id' => 1720,
                'product_id' => 1149,
                'type' => 'string',
                'key' => 'meta_estimated_delivery',
                'value' => '7',
            ),
            230 => 
            array (
                'id' => 1721,
                'product_id' => 1149,
                'type' => 'string',
                'key' => 'meta_enable_reviews',
                'value' => '1',
            ),
            231 => 
            array (
                'id' => 1722,
                'product_id' => 1149,
                'type' => 'array',
                'key' => 'meta_seo',
                'value' => '{"title":"Summer New Fashion Geometry Pattern Printed Elegant High-Grade Loose Plus Size Women\'s Dress","description":"Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Donec rutrum congue leo eget malesuada. Cras ultricies ligula sed magna dictum porta. Cras ultricies ligula sed magna dictum porta. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.","image":"20221116/8c8429f6579a8b6457e37ec1b4b6922d.jpg"}',
            ),
            232 => 
            array (
                'id' => 1723,
                'product_id' => 1149,
                'type' => 'array',
                'key' => 'meta_video_files',
                'value' => '[]',
            ),
            233 => 
            array (
                'id' => 1724,
                'product_id' => 1149,
                'type' => 'array',
                'key' => 'meta_video_url',
                'value' => '[]',
            ),
            234 => 
            array (
                'id' => 1725,
                'product_id' => 1150,
                'type' => 'array',
                'key' => 'meta_image',
                'value' => '["20221116/b03197acfd099238ac63580fba9b70b7.jpg","20221116/56b34ba41ad2593211a5929d115c55bd.jpg"]',
            ),
            235 => 
            array (
                'id' => 1726,
                'product_id' => 1150,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            236 => 
            array (
                'id' => 1727,
                'product_id' => 1150,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            237 => 
            array (
                'id' => 1728,
                'product_id' => 1150,
                'type' => 'array',
                'key' => 'meta_external_product',
                'value' => '{"url":"","text":""}',
            ),
            238 => 
            array (
                'id' => 1729,
                'product_id' => 1150,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            239 => 
            array (
                'id' => 1730,
                'product_id' => 1150,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            240 => 
            array (
                'id' => 1731,
                'product_id' => 1150,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            241 => 
            array (
                'id' => 1732,
                'product_id' => 1150,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => '',
            ),
            242 => 
            array (
                'id' => 1733,
                'product_id' => 1150,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            243 => 
            array (
                'id' => 1734,
                'product_id' => 1150,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            244 => 
            array (
                'id' => 1735,
                'product_id' => 1150,
                'type' => 'string',
                'key' => 'meta_hide_stock',
                'value' => '0',
            ),
            245 => 
            array (
                'id' => 1736,
                'product_id' => 1150,
                'type' => 'string',
                'key' => 'meta_stock_status',
                'value' => 'In Stock',
            ),
            246 => 
            array (
                'id' => 1737,
                'product_id' => 1150,
                'type' => 'string',
                'key' => 'meta_individual_sale',
                'value' => '0',
            ),
            247 => 
            array (
                'id' => 1738,
                'product_id' => 1150,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            248 => 
            array (
                'id' => 1739,
                'product_id' => 1150,
                'type' => 'string',
                'key' => 'meta_cash_on_delivery',
                'value' => '1',
            ),
            249 => 
            array (
                'id' => 1740,
                'product_id' => 1150,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '0.279',
            ),
            250 => 
            array (
                'id' => 1741,
                'product_id' => 1150,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            251 => 
            array (
                'id' => 1742,
                'product_id' => 1150,
                'type' => 'string',
                'key' => 'meta_warranty_type',
                'value' => 'No Warranty',
            ),
            252 => 
            array (
                'id' => 1743,
                'product_id' => 1150,
                'type' => 'string',
                'key' => 'meta_warranty_period',
                'value' => '',
            ),
            253 => 
            array (
                'id' => 1744,
                'product_id' => 1150,
                'type' => 'string',
                'key' => 'meta_warranty_policy',
                'value' => '',
            ),
            254 => 
            array (
                'id' => 1745,
                'product_id' => 1150,
                'type' => 'string',
                'key' => 'meta_purchase_note',
                'value' => '',
            ),
            255 => 
            array (
                'id' => 1746,
                'product_id' => 1150,
                'type' => 'string',
                'key' => 'meta_estimated_delivery',
                'value' => '7',
            ),
            256 => 
            array (
                'id' => 1747,
                'product_id' => 1150,
                'type' => 'string',
                'key' => 'meta_enable_reviews',
                'value' => '1',
            ),
            257 => 
            array (
                'id' => 1748,
                'product_id' => 1150,
                'type' => 'array',
                'key' => 'meta_seo',
                'value' => '{"title":"Red T-Shirt Print Men and Women Short-sleeved Sport Fashion Clothing","description":"Quisque velit nisi, pretium ut lacinia in, elementum id enim. Donec sollicitudin molestie malesuada. Nulla quis lorem ut libero malesuada feugiat. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vivamus suscipit tortor eget felis porttitor volutpat.","image":"20221116/b03197acfd099238ac63580fba9b70b7.jpg"}',
            ),
            258 => 
            array (
                'id' => 1749,
                'product_id' => 1150,
                'type' => 'array',
                'key' => 'meta_video_files',
                'value' => '[]',
            ),
            259 => 
            array (
                'id' => 1750,
                'product_id' => 1150,
                'type' => 'array',
                'key' => 'meta_video_url',
                'value' => '[]',
            ),
            260 => 
            array (
                'id' => 1751,
                'product_id' => 1151,
                'type' => 'array',
                'key' => 'meta_image',
                'value' => '["20221116/e1205e4765f1470292e06e32d8454d87.png","20221116/279aff06f4ddf233e04901fa0cf424f9.png","20221116/d0df98cbd1c93b123e133c03fe00b457.png","20221116/f2750799c62d016f7e94fa5e34711f39.png","20221116/519bec79ff6641dc86aeb86ca399162a.png"]',
            ),
            261 => 
            array (
                'id' => 1752,
                'product_id' => 1151,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            262 => 
            array (
                'id' => 1753,
                'product_id' => 1151,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            263 => 
            array (
                'id' => 1754,
                'product_id' => 1151,
                'type' => 'array',
                'key' => 'meta_external_product',
                'value' => '{"url":"","text":""}',
            ),
            264 => 
            array (
                'id' => 1755,
                'product_id' => 1151,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            265 => 
            array (
                'id' => 1756,
                'product_id' => 1151,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            266 => 
            array (
                'id' => 1757,
                'product_id' => 1151,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            267 => 
            array (
                'id' => 1758,
                'product_id' => 1151,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            268 => 
            array (
                'id' => 1759,
                'product_id' => 1151,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            269 => 
            array (
                'id' => 1760,
                'product_id' => 1151,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            270 => 
            array (
                'id' => 1761,
                'product_id' => 1151,
                'type' => 'string',
                'key' => 'meta_hide_stock',
                'value' => '0',
            ),
            271 => 
            array (
                'id' => 1762,
                'product_id' => 1151,
                'type' => 'string',
                'key' => 'meta_stock_status',
                'value' => 'In Stock',
            ),
            272 => 
            array (
                'id' => 1763,
                'product_id' => 1151,
                'type' => 'string',
                'key' => 'meta_individual_sale',
                'value' => '0',
            ),
            273 => 
            array (
                'id' => 1764,
                'product_id' => 1151,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            274 => 
            array (
                'id' => 1765,
                'product_id' => 1151,
                'type' => 'string',
                'key' => 'meta_cash_on_delivery',
                'value' => '1',
            ),
            275 => 
            array (
                'id' => 1766,
                'product_id' => 1151,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '0.389',
            ),
            276 => 
            array (
                'id' => 1767,
                'product_id' => 1151,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            277 => 
            array (
                'id' => 1768,
                'product_id' => 1151,
                'type' => 'string',
                'key' => 'meta_warranty_type',
                'value' => 'No Warranty',
            ),
            278 => 
            array (
                'id' => 1769,
                'product_id' => 1151,
                'type' => 'string',
                'key' => 'meta_warranty_period',
                'value' => '',
            ),
            279 => 
            array (
                'id' => 1770,
                'product_id' => 1151,
                'type' => 'string',
                'key' => 'meta_warranty_policy',
                'value' => '',
            ),
            280 => 
            array (
                'id' => 1771,
                'product_id' => 1151,
                'type' => 'string',
                'key' => 'meta_purchase_note',
                'value' => '',
            ),
            281 => 
            array (
                'id' => 1772,
                'product_id' => 1151,
                'type' => 'string',
                'key' => 'meta_estimated_delivery',
                'value' => '7',
            ),
            282 => 
            array (
                'id' => 1773,
                'product_id' => 1151,
                'type' => 'string',
                'key' => 'meta_enable_reviews',
                'value' => '1',
            ),
            283 => 
            array (
                'id' => 1774,
                'product_id' => 1151,
                'type' => 'array',
                'key' => 'meta_seo',
                'value' => '{"title":"Newborn Baby Boys Girls Fall Outfits Long Sleeve Plaid Pattern Pullover Tops and Pants Spring Clothes Set","description":"Nulla quis lorem ut libero malesuada feugiat. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Pellentesque in ipsum id orci porta dapibus. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Nulla quis lorem ut libero malesuada feugiat.","image":"20221116/e1205e4765f1470292e06e32d8454d87.png"}',
            ),
            284 => 
            array (
                'id' => 1775,
                'product_id' => 1151,
                'type' => 'array',
                'key' => 'meta_video_files',
                'value' => '[]',
            ),
            285 => 
            array (
                'id' => 1776,
                'product_id' => 1151,
                'type' => 'array',
                'key' => 'meta_video_url',
                'value' => '[]',
            ),
            286 => 
            array (
                'id' => 1777,
                'product_id' => 1152,
                'type' => 'array',
                'key' => 'meta_image',
                'value' => '["20221116/87b34dc86a2bcc9e7f0b1e332344611d.jpg","20221116/e383b5566488e7e1dc90a9353ca06f15.jpg"]',
            ),
            287 => 
            array (
                'id' => 1778,
                'product_id' => 1152,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            288 => 
            array (
                'id' => 1779,
                'product_id' => 1152,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            289 => 
            array (
                'id' => 1780,
                'product_id' => 1152,
                'type' => 'array',
                'key' => 'meta_external_product',
                'value' => '{"url":"","text":""}',
            ),
            290 => 
            array (
                'id' => 1781,
                'product_id' => 1152,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            291 => 
            array (
                'id' => 1782,
                'product_id' => 1152,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            292 => 
            array (
                'id' => 1783,
                'product_id' => 1152,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            293 => 
            array (
                'id' => 1784,
                'product_id' => 1152,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => '',
            ),
            294 => 
            array (
                'id' => 1785,
                'product_id' => 1152,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            295 => 
            array (
                'id' => 1786,
                'product_id' => 1152,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            296 => 
            array (
                'id' => 1787,
                'product_id' => 1152,
                'type' => 'string',
                'key' => 'meta_hide_stock',
                'value' => '0',
            ),
            297 => 
            array (
                'id' => 1788,
                'product_id' => 1152,
                'type' => 'string',
                'key' => 'meta_stock_status',
                'value' => 'In Stock',
            ),
            298 => 
            array (
                'id' => 1789,
                'product_id' => 1152,
                'type' => 'string',
                'key' => 'meta_individual_sale',
                'value' => '0',
            ),
            299 => 
            array (
                'id' => 1790,
                'product_id' => 1152,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            300 => 
            array (
                'id' => 1791,
                'product_id' => 1152,
                'type' => 'string',
                'key' => 'meta_cash_on_delivery',
                'value' => '1',
            ),
            301 => 
            array (
                'id' => 1792,
                'product_id' => 1152,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '0.357',
            ),
            302 => 
            array (
                'id' => 1793,
                'product_id' => 1152,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            303 => 
            array (
                'id' => 1794,
                'product_id' => 1152,
                'type' => 'string',
                'key' => 'meta_warranty_type',
                'value' => 'No Warranty',
            ),
            304 => 
            array (
                'id' => 1795,
                'product_id' => 1152,
                'type' => 'string',
                'key' => 'meta_warranty_period',
                'value' => '',
            ),
            305 => 
            array (
                'id' => 1796,
                'product_id' => 1152,
                'type' => 'string',
                'key' => 'meta_warranty_policy',
                'value' => '',
            ),
            306 => 
            array (
                'id' => 1797,
                'product_id' => 1152,
                'type' => 'string',
                'key' => 'meta_purchase_note',
                'value' => '',
            ),
            307 => 
            array (
                'id' => 1798,
                'product_id' => 1152,
                'type' => 'string',
                'key' => 'meta_estimated_delivery',
                'value' => '7',
            ),
            308 => 
            array (
                'id' => 1799,
                'product_id' => 1152,
                'type' => 'string',
                'key' => 'meta_enable_reviews',
                'value' => '1',
            ),
            309 => 
            array (
                'id' => 1800,
                'product_id' => 1152,
                'type' => 'array',
                'key' => 'meta_seo',
                'value' => '{"title":"Miyake Pleated Women New Fashion Printed Loose","description":"Vivamus suscipit tortor eget felis porttitor volutpat. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lorem ipsum dolor sit amet, consectetur adipiscing elit.","image":"20221116/87b34dc86a2bcc9e7f0b1e332344611d.jpg"}',
            ),
            310 => 
            array (
                'id' => 1801,
                'product_id' => 1152,
                'type' => 'array',
                'key' => 'meta_video_files',
                'value' => '[]',
            ),
            311 => 
            array (
                'id' => 1802,
                'product_id' => 1152,
                'type' => 'array',
                'key' => 'meta_video_url',
                'value' => '[]',
            ),
            312 => 
            array (
                'id' => 1803,
                'product_id' => 1153,
                'type' => 'array',
                'key' => 'meta_image',
                'value' => '["20221116/ff019ee0f768d6f4d8c6cbda5e40975a.png","20221116/d7e3660f31975781e984e9538e375cfd.png"]',
            ),
            313 => 
            array (
                'id' => 1804,
                'product_id' => 1153,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            314 => 
            array (
                'id' => 1805,
                'product_id' => 1153,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            315 => 
            array (
                'id' => 1806,
                'product_id' => 1153,
                'type' => 'array',
                'key' => 'meta_external_product',
                'value' => '{"url":"","text":""}',
            ),
            316 => 
            array (
                'id' => 1807,
                'product_id' => 1153,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            317 => 
            array (
                'id' => 1808,
                'product_id' => 1153,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            318 => 
            array (
                'id' => 1809,
                'product_id' => 1153,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            319 => 
            array (
                'id' => 1810,
                'product_id' => 1153,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            320 => 
            array (
                'id' => 1811,
                'product_id' => 1153,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            321 => 
            array (
                'id' => 1812,
                'product_id' => 1153,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            322 => 
            array (
                'id' => 1813,
                'product_id' => 1153,
                'type' => 'string',
                'key' => 'meta_hide_stock',
                'value' => '0',
            ),
            323 => 
            array (
                'id' => 1814,
                'product_id' => 1153,
                'type' => 'string',
                'key' => 'meta_stock_status',
                'value' => 'In Stock',
            ),
            324 => 
            array (
                'id' => 1815,
                'product_id' => 1153,
                'type' => 'string',
                'key' => 'meta_individual_sale',
                'value' => '0',
            ),
            325 => 
            array (
                'id' => 1816,
                'product_id' => 1153,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            326 => 
            array (
                'id' => 1817,
                'product_id' => 1153,
                'type' => 'string',
                'key' => 'meta_cash_on_delivery',
                'value' => '1',
            ),
            327 => 
            array (
                'id' => 1818,
                'product_id' => 1153,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '0.597',
            ),
            328 => 
            array (
                'id' => 1819,
                'product_id' => 1153,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            329 => 
            array (
                'id' => 1820,
                'product_id' => 1153,
                'type' => 'string',
                'key' => 'meta_warranty_type',
                'value' => 'No Warranty',
            ),
            330 => 
            array (
                'id' => 1821,
                'product_id' => 1153,
                'type' => 'string',
                'key' => 'meta_warranty_period',
                'value' => '',
            ),
            331 => 
            array (
                'id' => 1822,
                'product_id' => 1153,
                'type' => 'string',
                'key' => 'meta_warranty_policy',
                'value' => '',
            ),
            332 => 
            array (
                'id' => 1823,
                'product_id' => 1153,
                'type' => 'string',
                'key' => 'meta_purchase_note',
                'value' => '',
            ),
            333 => 
            array (
                'id' => 1824,
                'product_id' => 1153,
                'type' => 'string',
                'key' => 'meta_estimated_delivery',
                'value' => '7',
            ),
            334 => 
            array (
                'id' => 1825,
                'product_id' => 1153,
                'type' => 'string',
                'key' => 'meta_enable_reviews',
                'value' => '1',
            ),
            335 => 
            array (
                'id' => 1826,
                'product_id' => 1153,
                'type' => 'array',
                'key' => 'meta_seo',
                'value' => '{"title":"Kids Toddler Girls Cotton Coat Belt Collar Long Sleeve Zipper Outwear Jacket Fall Clothes","description":"Nulla porttitor accumsan tincidunt. Sed porttitor lectus nibh. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Sed porttitor lectus nibh. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.","image":"20221116/ff019ee0f768d6f4d8c6cbda5e40975a.png"}',
            ),
            336 => 
            array (
                'id' => 1827,
                'product_id' => 1153,
                'type' => 'array',
                'key' => 'meta_video_files',
                'value' => '[]',
            ),
            337 => 
            array (
                'id' => 1828,
                'product_id' => 1153,
                'type' => 'array',
                'key' => 'meta_video_url',
                'value' => '[]',
            ),
            338 => 
            array (
                'id' => 1829,
                'product_id' => 1154,
                'type' => 'array',
                'key' => 'meta_image',
                'value' => '["20221116/40770770531549c2d35c8e0a42e29fd0.jpg","20221116/e2d247c262c31a643649b635817514d5.jpg","20221116/2e7365431d01b4d53e5bc69909a4ad53.jpg"]',
            ),
            339 => 
            array (
                'id' => 1830,
                'product_id' => 1154,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            340 => 
            array (
                'id' => 1831,
                'product_id' => 1154,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            341 => 
            array (
                'id' => 1832,
                'product_id' => 1154,
                'type' => 'array',
                'key' => 'meta_external_product',
                'value' => '{"url":"","text":""}',
            ),
            342 => 
            array (
                'id' => 1833,
                'product_id' => 1154,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            343 => 
            array (
                'id' => 1834,
                'product_id' => 1154,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            344 => 
            array (
                'id' => 1835,
                'product_id' => 1154,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            345 => 
            array (
                'id' => 1836,
                'product_id' => 1154,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => '',
            ),
            346 => 
            array (
                'id' => 1837,
                'product_id' => 1154,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            347 => 
            array (
                'id' => 1838,
                'product_id' => 1154,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            348 => 
            array (
                'id' => 1839,
                'product_id' => 1154,
                'type' => 'string',
                'key' => 'meta_hide_stock',
                'value' => '0',
            ),
            349 => 
            array (
                'id' => 1840,
                'product_id' => 1154,
                'type' => 'string',
                'key' => 'meta_stock_status',
                'value' => 'In Stock',
            ),
            350 => 
            array (
                'id' => 1841,
                'product_id' => 1154,
                'type' => 'string',
                'key' => 'meta_individual_sale',
                'value' => '0',
            ),
            351 => 
            array (
                'id' => 1842,
                'product_id' => 1154,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            352 => 
            array (
                'id' => 1843,
                'product_id' => 1154,
                'type' => 'string',
                'key' => 'meta_cash_on_delivery',
                'value' => '1',
            ),
            353 => 
            array (
                'id' => 1844,
                'product_id' => 1154,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '0.398',
            ),
            354 => 
            array (
                'id' => 1845,
                'product_id' => 1154,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            355 => 
            array (
                'id' => 1846,
                'product_id' => 1154,
                'type' => 'string',
                'key' => 'meta_warranty_type',
                'value' => 'No Warranty',
            ),
            356 => 
            array (
                'id' => 1847,
                'product_id' => 1154,
                'type' => 'string',
                'key' => 'meta_warranty_period',
                'value' => '',
            ),
            357 => 
            array (
                'id' => 1848,
                'product_id' => 1154,
                'type' => 'string',
                'key' => 'meta_warranty_policy',
                'value' => '',
            ),
            358 => 
            array (
                'id' => 1849,
                'product_id' => 1154,
                'type' => 'string',
                'key' => 'meta_purchase_note',
                'value' => '',
            ),
            359 => 
            array (
                'id' => 1850,
                'product_id' => 1154,
                'type' => 'string',
                'key' => 'meta_estimated_delivery',
                'value' => '7',
            ),
            360 => 
            array (
                'id' => 1851,
                'product_id' => 1154,
                'type' => 'string',
                'key' => 'meta_enable_reviews',
                'value' => '1',
            ),
            361 => 
            array (
                'id' => 1852,
                'product_id' => 1154,
                'type' => 'array',
                'key' => 'meta_seo',
                'value' => '{"title":"Kids Plaid Princess Pettiskirt Teenager Girl Skirt For School Plaid Skirts","description":"Proin eget tortor risus. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vivamus suscipit tortor eget felis porttitor volutpat. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Cras ultricies ligula sed magna dictum porta.","image":"20221116/40770770531549c2d35c8e0a42e29fd0.jpg"}',
            ),
            362 => 
            array (
                'id' => 1853,
                'product_id' => 1154,
                'type' => 'array',
                'key' => 'meta_video_files',
                'value' => '[]',
            ),
            363 => 
            array (
                'id' => 1854,
                'product_id' => 1154,
                'type' => 'array',
                'key' => 'meta_video_url',
                'value' => '[]',
            ),
            364 => 
            array (
                'id' => 1855,
                'product_id' => 1155,
                'type' => 'array',
                'key' => 'meta_image',
                'value' => '["20221116/6d2dfa5aea81240a429d89d73ce6d977.jpg","20221116/752a1b3dddf5cd9c0cb4889a9f42d694.jpg","20221116/cc675f3ab0fcbb746ed9fceae22acba6.jpg","20221116/a1f1db319339cc3ee9d89008433d8133.jpg"]',
            ),
            365 => 
            array (
                'id' => 1856,
                'product_id' => 1155,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            366 => 
            array (
                'id' => 1857,
                'product_id' => 1155,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            367 => 
            array (
                'id' => 1858,
                'product_id' => 1155,
                'type' => 'array',
                'key' => 'meta_external_product',
                'value' => '{"url":"","text":""}',
            ),
            368 => 
            array (
                'id' => 1859,
                'product_id' => 1155,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            369 => 
            array (
                'id' => 1860,
                'product_id' => 1155,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            370 => 
            array (
                'id' => 1861,
                'product_id' => 1155,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            371 => 
            array (
                'id' => 1862,
                'product_id' => 1155,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => '',
            ),
            372 => 
            array (
                'id' => 1863,
                'product_id' => 1155,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            373 => 
            array (
                'id' => 1864,
                'product_id' => 1155,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            374 => 
            array (
                'id' => 1865,
                'product_id' => 1155,
                'type' => 'string',
                'key' => 'meta_hide_stock',
                'value' => '0',
            ),
            375 => 
            array (
                'id' => 1866,
                'product_id' => 1155,
                'type' => 'string',
                'key' => 'meta_stock_status',
                'value' => 'In Stock',
            ),
            376 => 
            array (
                'id' => 1867,
                'product_id' => 1155,
                'type' => 'string',
                'key' => 'meta_individual_sale',
                'value' => '0',
            ),
            377 => 
            array (
                'id' => 1868,
                'product_id' => 1155,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            378 => 
            array (
                'id' => 1869,
                'product_id' => 1155,
                'type' => 'string',
                'key' => 'meta_cash_on_delivery',
                'value' => '1',
            ),
            379 => 
            array (
                'id' => 1870,
                'product_id' => 1155,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '0.398',
            ),
            380 => 
            array (
                'id' => 1871,
                'product_id' => 1155,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            381 => 
            array (
                'id' => 1872,
                'product_id' => 1155,
                'type' => 'string',
                'key' => 'meta_warranty_type',
                'value' => 'No Warranty',
            ),
            382 => 
            array (
                'id' => 1873,
                'product_id' => 1155,
                'type' => 'string',
                'key' => 'meta_warranty_period',
                'value' => '',
            ),
            383 => 
            array (
                'id' => 1874,
                'product_id' => 1155,
                'type' => 'string',
                'key' => 'meta_warranty_policy',
                'value' => '',
            ),
            384 => 
            array (
                'id' => 1875,
                'product_id' => 1155,
                'type' => 'string',
                'key' => 'meta_purchase_note',
                'value' => '',
            ),
            385 => 
            array (
                'id' => 1876,
                'product_id' => 1155,
                'type' => 'string',
                'key' => 'meta_estimated_delivery',
                'value' => '7',
            ),
            386 => 
            array (
                'id' => 1877,
                'product_id' => 1155,
                'type' => 'string',
                'key' => 'meta_enable_reviews',
                'value' => '1',
            ),
            387 => 
            array (
                'id' => 1878,
                'product_id' => 1155,
                'type' => 'array',
                'key' => 'meta_seo',
                'value' => '{"title":"Cotton Newborn Baby Long Sleeve Romper Jumpsuits Outfits Boy Toddler Handsome","description":"Proin eget tortor risus. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Vivamus suscipit tortor eget felis porttitor volutpat.","image":"20221116/6d2dfa5aea81240a429d89d73ce6d977.jpg"}',
            ),
            388 => 
            array (
                'id' => 1879,
                'product_id' => 1155,
                'type' => 'array',
                'key' => 'meta_video_files',
                'value' => '[]',
            ),
            389 => 
            array (
                'id' => 1880,
                'product_id' => 1155,
                'type' => 'array',
                'key' => 'meta_video_url',
                'value' => '[]',
            ),
            390 => 
            array (
                'id' => 1881,
                'product_id' => 1156,
                'type' => 'array',
                'key' => 'meta_image',
                'value' => '["20221116/f1e675ef1ffb3b061b589586922667f1.jpg","20221116/d304e38b901606e13589d71f9ca08a54.jpg","20221116/5ca5998a74e37d21087d59cb9f3cc404.jpg","20221116/119dd8bdcde7e42a505ffe41e14a6ffb.jpg","20221116/0e961d96e26709c29fc191b4c3298584.jpg"]',
            ),
            391 => 
            array (
                'id' => 1882,
                'product_id' => 1156,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            392 => 
            array (
                'id' => 1883,
                'product_id' => 1156,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            393 => 
            array (
                'id' => 1884,
                'product_id' => 1156,
                'type' => 'array',
                'key' => 'meta_external_product',
                'value' => '{"url":"","text":""}',
            ),
            394 => 
            array (
                'id' => 1885,
                'product_id' => 1156,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            395 => 
            array (
                'id' => 1886,
                'product_id' => 1156,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            396 => 
            array (
                'id' => 1887,
                'product_id' => 1156,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            397 => 
            array (
                'id' => 1888,
                'product_id' => 1156,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => '',
            ),
            398 => 
            array (
                'id' => 1889,
                'product_id' => 1156,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            399 => 
            array (
                'id' => 1890,
                'product_id' => 1156,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            400 => 
            array (
                'id' => 1891,
                'product_id' => 1156,
                'type' => 'string',
                'key' => 'meta_hide_stock',
                'value' => '0',
            ),
            401 => 
            array (
                'id' => 1892,
                'product_id' => 1156,
                'type' => 'string',
                'key' => 'meta_stock_status',
                'value' => 'In Stock',
            ),
            402 => 
            array (
                'id' => 1893,
                'product_id' => 1156,
                'type' => 'string',
                'key' => 'meta_individual_sale',
                'value' => '0',
            ),
            403 => 
            array (
                'id' => 1894,
                'product_id' => 1156,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            404 => 
            array (
                'id' => 1895,
                'product_id' => 1156,
                'type' => 'string',
                'key' => 'meta_cash_on_delivery',
                'value' => '1',
            ),
            405 => 
            array (
                'id' => 1896,
                'product_id' => 1156,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '0.345',
            ),
            406 => 
            array (
                'id' => 1897,
                'product_id' => 1156,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            407 => 
            array (
                'id' => 1898,
                'product_id' => 1156,
                'type' => 'string',
                'key' => 'meta_warranty_type',
                'value' => 'Brand Warranty',
            ),
            408 => 
            array (
                'id' => 1899,
                'product_id' => 1156,
                'type' => 'string',
                'key' => 'meta_warranty_period',
                'value' => '6 months',
            ),
            409 => 
            array (
                'id' => 1900,
                'product_id' => 1156,
                'type' => 'string',
                'key' => 'meta_warranty_policy',
                'value' => 'Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Curabitur aliquet quam id dui posuere blandit.',
            ),
            410 => 
            array (
                'id' => 1901,
                'product_id' => 1156,
                'type' => 'string',
                'key' => 'meta_purchase_note',
                'value' => '',
            ),
            411 => 
            array (
                'id' => 1902,
                'product_id' => 1156,
                'type' => 'string',
                'key' => 'meta_estimated_delivery',
                'value' => '7',
            ),
            412 => 
            array (
                'id' => 1903,
                'product_id' => 1156,
                'type' => 'string',
                'key' => 'meta_enable_reviews',
                'value' => '1',
            ),
            413 => 
            array (
                'id' => 1904,
                'product_id' => 1156,
                'type' => 'array',
                'key' => 'meta_seo',
                'value' => '{"title":"Boys Shirts Classic Casual Plaid Flannel Children shirts","description":"Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Donec sollicitudin molestie malesuada. Nulla porttitor accumsan tincidunt. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Cras ultricies ligula sed magna dictum porta.","image":"20221116/f1e675ef1ffb3b061b589586922667f1.jpg"}',
            ),
            414 => 
            array (
                'id' => 1905,
                'product_id' => 1156,
                'type' => 'array',
                'key' => 'meta_video_files',
                'value' => '[]',
            ),
            415 => 
            array (
                'id' => 1906,
                'product_id' => 1156,
                'type' => 'array',
                'key' => 'meta_video_url',
                'value' => '[]',
            ),
            416 => 
            array (
                'id' => 1907,
                'product_id' => 1157,
                'type' => 'array',
                'key' => 'meta_image',
                'value' => '["20221116/bb3ac55cb77b45694f720dd714a00b8e.jpg","20221116/7248d958055c2e000bf39a69083afd54.jpg"]',
            ),
            417 => 
            array (
                'id' => 1908,
                'product_id' => 1157,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            418 => 
            array (
                'id' => 1909,
                'product_id' => 1157,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            419 => 
            array (
                'id' => 1910,
                'product_id' => 1157,
                'type' => 'array',
                'key' => 'meta_external_product',
                'value' => '{"url":"","text":""}',
            ),
            420 => 
            array (
                'id' => 1911,
                'product_id' => 1157,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            421 => 
            array (
                'id' => 1912,
                'product_id' => 1157,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            422 => 
            array (
                'id' => 1913,
                'product_id' => 1157,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            423 => 
            array (
                'id' => 1914,
                'product_id' => 1157,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            424 => 
            array (
                'id' => 1915,
                'product_id' => 1157,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            425 => 
            array (
                'id' => 1916,
                'product_id' => 1157,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            426 => 
            array (
                'id' => 1917,
                'product_id' => 1157,
                'type' => 'string',
                'key' => 'meta_hide_stock',
                'value' => '0',
            ),
            427 => 
            array (
                'id' => 1918,
                'product_id' => 1157,
                'type' => 'string',
                'key' => 'meta_stock_status',
                'value' => 'In Stock',
            ),
            428 => 
            array (
                'id' => 1919,
                'product_id' => 1157,
                'type' => 'string',
                'key' => 'meta_individual_sale',
                'value' => '0',
            ),
            429 => 
            array (
                'id' => 1920,
                'product_id' => 1157,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            430 => 
            array (
                'id' => 1921,
                'product_id' => 1157,
                'type' => 'string',
                'key' => 'meta_cash_on_delivery',
                'value' => '1',
            ),
            431 => 
            array (
                'id' => 1922,
                'product_id' => 1157,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '0.337',
            ),
            432 => 
            array (
                'id' => 1923,
                'product_id' => 1157,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            433 => 
            array (
                'id' => 1924,
                'product_id' => 1157,
                'type' => 'string',
                'key' => 'meta_warranty_type',
                'value' => 'Seller Warranty',
            ),
            434 => 
            array (
                'id' => 1925,
                'product_id' => 1157,
                'type' => 'string',
                'key' => 'meta_warranty_period',
                'value' => '6 months',
            ),
            435 => 
            array (
                'id' => 1926,
                'product_id' => 1157,
                'type' => 'string',
                'key' => 'meta_warranty_policy',
                'value' => 'Cras ultricies ligula sed magna dictum porta. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.',
            ),
            436 => 
            array (
                'id' => 1927,
                'product_id' => 1157,
                'type' => 'string',
                'key' => 'meta_purchase_note',
                'value' => '',
            ),
            437 => 
            array (
                'id' => 1928,
                'product_id' => 1157,
                'type' => 'string',
                'key' => 'meta_estimated_delivery',
                'value' => '7',
            ),
            438 => 
            array (
                'id' => 1929,
                'product_id' => 1157,
                'type' => 'string',
                'key' => 'meta_enable_reviews',
                'value' => '1',
            ),
            439 => 
            array (
                'id' => 1930,
                'product_id' => 1157,
                'type' => 'array',
                'key' => 'meta_seo',
                'value' => '{"title":"Wireless Game Controller for Switch Pro Lite Olde Gamepad Joystick for PC Game Controller","description":"Pellentesque in ipsum id orci porta dapibus. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Nulla quis lorem ut libero malesuada feugiat. Nulla porttitor accumsan tincidunt. Lorem ipsum dolor sit amet, consectetur adipiscing elit.","image":"20221116/bb3ac55cb77b45694f720dd714a00b8e.jpg"}',
            ),
            440 => 
            array (
                'id' => 1931,
                'product_id' => 1157,
                'type' => 'array',
                'key' => 'meta_video_files',
                'value' => '[]',
            ),
            441 => 
            array (
                'id' => 1932,
                'product_id' => 1157,
                'type' => 'array',
                'key' => 'meta_video_url',
                'value' => '[]',
            ),
            442 => 
            array (
                'id' => 1933,
                'product_id' => 1158,
                'type' => 'array',
                'key' => 'meta_image',
                'value' => '["20221116/42765fec080996cc9b652e30a0cfa9e2.jpg","20221116/20904e9821f6aaba7d92612740d7c762.jpg","20221116/b5959ab067829723bc123f37e5fc4f9b.jpg"]',
            ),
            443 => 
            array (
                'id' => 1934,
                'product_id' => 1158,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            444 => 
            array (
                'id' => 1935,
                'product_id' => 1158,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            445 => 
            array (
                'id' => 1936,
                'product_id' => 1158,
                'type' => 'array',
                'key' => 'meta_external_product',
                'value' => '{"url":"","text":""}',
            ),
            446 => 
            array (
                'id' => 1937,
                'product_id' => 1158,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            447 => 
            array (
                'id' => 1938,
                'product_id' => 1158,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            448 => 
            array (
                'id' => 1939,
                'product_id' => 1158,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            449 => 
            array (
                'id' => 1940,
                'product_id' => 1158,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            450 => 
            array (
                'id' => 1941,
                'product_id' => 1158,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            451 => 
            array (
                'id' => 1942,
                'product_id' => 1158,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            452 => 
            array (
                'id' => 1943,
                'product_id' => 1158,
                'type' => 'string',
                'key' => 'meta_hide_stock',
                'value' => '0',
            ),
            453 => 
            array (
                'id' => 1944,
                'product_id' => 1158,
                'type' => 'string',
                'key' => 'meta_stock_status',
                'value' => 'In Stock',
            ),
            454 => 
            array (
                'id' => 1945,
                'product_id' => 1158,
                'type' => 'string',
                'key' => 'meta_individual_sale',
                'value' => '0',
            ),
            455 => 
            array (
                'id' => 1946,
                'product_id' => 1158,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            456 => 
            array (
                'id' => 1947,
                'product_id' => 1158,
                'type' => 'string',
                'key' => 'meta_cash_on_delivery',
                'value' => '1',
            ),
            457 => 
            array (
                'id' => 1948,
                'product_id' => 1158,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '0.360',
            ),
            458 => 
            array (
                'id' => 1949,
                'product_id' => 1158,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            459 => 
            array (
                'id' => 1950,
                'product_id' => 1158,
                'type' => 'string',
                'key' => 'meta_warranty_type',
                'value' => 'No Warranty',
            ),
            460 => 
            array (
                'id' => 1951,
                'product_id' => 1158,
                'type' => 'string',
                'key' => 'meta_warranty_period',
                'value' => '',
            ),
            461 => 
            array (
                'id' => 1952,
                'product_id' => 1158,
                'type' => 'string',
                'key' => 'meta_warranty_policy',
                'value' => '',
            ),
            462 => 
            array (
                'id' => 1953,
                'product_id' => 1158,
                'type' => 'string',
                'key' => 'meta_purchase_note',
                'value' => '',
            ),
            463 => 
            array (
                'id' => 1954,
                'product_id' => 1158,
                'type' => 'string',
                'key' => 'meta_estimated_delivery',
                'value' => '7',
            ),
            464 => 
            array (
                'id' => 1955,
                'product_id' => 1158,
                'type' => 'string',
                'key' => 'meta_enable_reviews',
                'value' => '1',
            ),
            465 => 
            array (
                'id' => 1956,
                'product_id' => 1158,
                'type' => 'array',
                'key' => 'meta_seo',
                'value' => '{"title":"Romantic Tarot Cards High Quality Read Fate Game For Personal Use Board E-Guidebook","description":"Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Nulla porttitor accumsan tincidunt. Cras ultricies ligula sed magna dictum porta. Vivamus suscipit tortor eget felis porttitor volutpat. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.","image":"20221116/42765fec080996cc9b652e30a0cfa9e2.jpg"}',
            ),
            466 => 
            array (
                'id' => 1957,
                'product_id' => 1158,
                'type' => 'array',
                'key' => 'meta_video_files',
                'value' => '[]',
            ),
            467 => 
            array (
                'id' => 1958,
                'product_id' => 1158,
                'type' => 'array',
                'key' => 'meta_video_url',
                'value' => '["https:\\/\\/player.vimeo.com\\/video\\/330420305?h=0c269f7e82&color=f7f7f7&title=0&byline=0&portrait=0"]',
            ),
            468 => 
            array (
                'id' => 1959,
                'product_id' => 1159,
                'type' => 'array',
                'key' => 'meta_image',
                'value' => '["20221116/c078112af00e32211f50e533635c20ec.jpg","20221116/ec6ce8550047520c8a9aa50fbde95330.jpg","20221116/71c033ca5beae9e9cc9b0e3964fb217d.jpg"]',
            ),
            469 => 
            array (
                'id' => 1960,
                'product_id' => 1159,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            470 => 
            array (
                'id' => 1961,
                'product_id' => 1159,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            471 => 
            array (
                'id' => 1962,
                'product_id' => 1159,
                'type' => 'array',
                'key' => 'meta_external_product',
                'value' => '{"url":"","text":""}',
            ),
            472 => 
            array (
                'id' => 1963,
                'product_id' => 1159,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            473 => 
            array (
                'id' => 1964,
                'product_id' => 1159,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            474 => 
            array (
                'id' => 1965,
                'product_id' => 1159,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            475 => 
            array (
                'id' => 1966,
                'product_id' => 1159,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            476 => 
            array (
                'id' => 1967,
                'product_id' => 1159,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            477 => 
            array (
                'id' => 1968,
                'product_id' => 1159,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '',
            ),
            478 => 
            array (
                'id' => 1969,
                'product_id' => 1159,
                'type' => 'string',
                'key' => 'meta_hide_stock',
                'value' => '0',
            ),
            479 => 
            array (
                'id' => 1970,
                'product_id' => 1159,
                'type' => 'string',
                'key' => 'meta_stock_status',
                'value' => 'In Stock',
            ),
            480 => 
            array (
                'id' => 1971,
                'product_id' => 1159,
                'type' => 'string',
                'key' => 'meta_individual_sale',
                'value' => '0',
            ),
            481 => 
            array (
                'id' => 1972,
                'product_id' => 1159,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            482 => 
            array (
                'id' => 1973,
                'product_id' => 1159,
                'type' => 'string',
                'key' => 'meta_cash_on_delivery',
                'value' => '1',
            ),
            483 => 
            array (
                'id' => 1974,
                'product_id' => 1159,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '0.370',
            ),
            484 => 
            array (
                'id' => 1975,
                'product_id' => 1159,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            485 => 
            array (
                'id' => 1976,
                'product_id' => 1159,
                'type' => 'string',
                'key' => 'meta_warranty_type',
                'value' => 'No Warranty',
            ),
            486 => 
            array (
                'id' => 1977,
                'product_id' => 1159,
                'type' => 'string',
                'key' => 'meta_warranty_period',
                'value' => '',
            ),
            487 => 
            array (
                'id' => 1978,
                'product_id' => 1159,
                'type' => 'string',
                'key' => 'meta_warranty_policy',
                'value' => '',
            ),
            488 => 
            array (
                'id' => 1979,
                'product_id' => 1159,
                'type' => 'string',
                'key' => 'meta_purchase_note',
                'value' => '',
            ),
            489 => 
            array (
                'id' => 1980,
                'product_id' => 1159,
                'type' => 'string',
                'key' => 'meta_estimated_delivery',
                'value' => '7',
            ),
            490 => 
            array (
                'id' => 1981,
                'product_id' => 1159,
                'type' => 'string',
                'key' => 'meta_enable_reviews',
                'value' => '1',
            ),
            491 => 
            array (
                'id' => 1982,
                'product_id' => 1159,
                'type' => 'array',
                'key' => 'meta_seo',
                'value' => '{"title":"The Wildwood Tarot Holographic Tarot Deck Table Card Game For Adults Fate Divination","description":"Vivamus suscipit tortor eget felis porttitor volutpat. Proin eget tortor risus. Donec sollicitudin molestie malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.","image":"20221116/c078112af00e32211f50e533635c20ec.jpg"}',
            ),
            492 => 
            array (
                'id' => 1983,
                'product_id' => 1159,
                'type' => 'array',
                'key' => 'meta_video_files',
                'value' => '[]',
            ),
            493 => 
            array (
                'id' => 1984,
                'product_id' => 1159,
                'type' => 'array',
                'key' => 'meta_video_url',
                'value' => '["https:\\/\\/player.vimeo.com\\/video\\/330420305?h=0c269f7e82&color=f7f7f7&title=0&byline=0&portrait=0"]',
            ),
            494 => 
            array (
                'id' => 1985,
                'product_id' => 1160,
                'type' => 'array',
                'key' => 'meta_image',
                'value' => '["20221116/d7c1a7b4d32ee46154aed56430763bb5.JPG"]',
            ),
            495 => 
            array (
                'id' => 1986,
                'product_id' => 1160,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            496 => 
            array (
                'id' => 1987,
                'product_id' => 1160,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            497 => 
            array (
                'id' => 1988,
                'product_id' => 1160,
                'type' => 'array',
                'key' => 'meta_external_product',
                'value' => '{"url":"","text":""}',
            ),
            498 => 
            array (
                'id' => 1989,
                'product_id' => 1160,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            499 => 
            array (
                'id' => 1990,
                'product_id' => 1160,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
        ));
        \DB::table('products_meta')->insert(array (
            0 => 
            array (
                'id' => 1991,
                'product_id' => 1160,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            1 => 
            array (
                'id' => 1992,
                'product_id' => 1160,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            2 => 
            array (
                'id' => 1993,
                'product_id' => 1160,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            3 => 
            array (
                'id' => 1994,
                'product_id' => 1160,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            4 => 
            array (
                'id' => 1995,
                'product_id' => 1160,
                'type' => 'string',
                'key' => 'meta_hide_stock',
                'value' => '0',
            ),
            5 => 
            array (
                'id' => 1996,
                'product_id' => 1160,
                'type' => 'string',
                'key' => 'meta_stock_status',
                'value' => 'In Stock',
            ),
            6 => 
            array (
                'id' => 1997,
                'product_id' => 1160,
                'type' => 'string',
                'key' => 'meta_individual_sale',
                'value' => '0',
            ),
            7 => 
            array (
                'id' => 1998,
                'product_id' => 1160,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            8 => 
            array (
                'id' => 1999,
                'product_id' => 1160,
                'type' => 'string',
                'key' => 'meta_cash_on_delivery',
                'value' => '1',
            ),
            9 => 
            array (
                'id' => 2000,
                'product_id' => 1160,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '0.570',
            ),
            10 => 
            array (
                'id' => 2001,
                'product_id' => 1160,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            11 => 
            array (
                'id' => 2002,
                'product_id' => 1160,
                'type' => 'string',
                'key' => 'meta_warranty_type',
                'value' => 'Brand Warranty',
            ),
            12 => 
            array (
                'id' => 2003,
                'product_id' => 1160,
                'type' => 'string',
                'key' => 'meta_warranty_period',
                'value' => '1 year',
            ),
            13 => 
            array (
                'id' => 2004,
                'product_id' => 1160,
                'type' => 'string',
                'key' => 'meta_warranty_policy',
                'value' => 'Sed porttitor lectus nibh. Nulla porttitor accumsan tincidunt.',
            ),
            14 => 
            array (
                'id' => 2005,
                'product_id' => 1160,
                'type' => 'string',
                'key' => 'meta_purchase_note',
                'value' => '',
            ),
            15 => 
            array (
                'id' => 2006,
                'product_id' => 1160,
                'type' => 'string',
                'key' => 'meta_estimated_delivery',
                'value' => '7',
            ),
            16 => 
            array (
                'id' => 2007,
                'product_id' => 1160,
                'type' => 'string',
                'key' => 'meta_enable_reviews',
                'value' => '1',
            ),
            17 => 
            array (
                'id' => 2008,
                'product_id' => 1160,
                'type' => 'array',
                'key' => 'meta_seo',
                'value' => '{"title":"Casual Waterproof Women Bags School Backpack For Teenagers Girls Travel Backbag Nylon Mochilas Female Small Bookbag Kawaii Bag","description":"Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Sed porttitor lectus nibh. Vivamus suscipit tortor eget felis porttitor volutpat. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.","image":"20221116/d7c1a7b4d32ee46154aed56430763bb5.JPG"}',
            ),
            18 => 
            array (
                'id' => 2009,
                'product_id' => 1160,
                'type' => 'array',
                'key' => 'meta_video_files',
                'value' => '[]',
            ),
            19 => 
            array (
                'id' => 2010,
                'product_id' => 1160,
                'type' => 'array',
                'key' => 'meta_video_url',
                'value' => '[]',
            ),
            20 => 
            array (
                'id' => 2011,
                'product_id' => 1161,
                'type' => 'array',
                'key' => 'meta_image',
                'value' => '["20221116/0b643f20f9f2b8f89666d14532f71d9b.jpg","20221116/831ee5dc5b46e3d1adef99004d19ac18.jpg","20221116/c40f91c0d7962a3fb9a6a208e3f2ab96.jpg","20221116/4bbfc03d96630ac35e8b46334cf73ebe.jpg"]',
            ),
            21 => 
            array (
                'id' => 2012,
                'product_id' => 1161,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            22 => 
            array (
                'id' => 2013,
                'product_id' => 1161,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            23 => 
            array (
                'id' => 2014,
                'product_id' => 1161,
                'type' => 'array',
                'key' => 'meta_external_product',
                'value' => '{"url":"","text":""}',
            ),
            24 => 
            array (
                'id' => 2015,
                'product_id' => 1161,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            25 => 
            array (
                'id' => 2016,
                'product_id' => 1161,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            26 => 
            array (
                'id' => 2017,
                'product_id' => 1161,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            27 => 
            array (
                'id' => 2018,
                'product_id' => 1161,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => '',
            ),
            28 => 
            array (
                'id' => 2019,
                'product_id' => 1161,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            29 => 
            array (
                'id' => 2020,
                'product_id' => 1161,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            30 => 
            array (
                'id' => 2021,
                'product_id' => 1161,
                'type' => 'string',
                'key' => 'meta_hide_stock',
                'value' => '0',
            ),
            31 => 
            array (
                'id' => 2022,
                'product_id' => 1161,
                'type' => 'string',
                'key' => 'meta_stock_status',
                'value' => 'In Stock',
            ),
            32 => 
            array (
                'id' => 2023,
                'product_id' => 1161,
                'type' => 'string',
                'key' => 'meta_individual_sale',
                'value' => '0',
            ),
            33 => 
            array (
                'id' => 2024,
                'product_id' => 1161,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            34 => 
            array (
                'id' => 2025,
                'product_id' => 1161,
                'type' => 'string',
                'key' => 'meta_cash_on_delivery',
                'value' => '1',
            ),
            35 => 
            array (
                'id' => 2026,
                'product_id' => 1161,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '0.25',
            ),
            36 => 
            array (
                'id' => 2027,
                'product_id' => 1161,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            37 => 
            array (
                'id' => 2028,
                'product_id' => 1161,
                'type' => 'string',
                'key' => 'meta_warranty_type',
                'value' => 'Seller Warranty',
            ),
            38 => 
            array (
                'id' => 2029,
                'product_id' => 1161,
                'type' => 'string',
                'key' => 'meta_warranty_period',
                'value' => '6 months',
            ),
            39 => 
            array (
                'id' => 2030,
                'product_id' => 1161,
                'type' => 'string',
                'key' => 'meta_warranty_policy',
                'value' => 'Vivamus suscipit tortor eget felis porttitor volutpat. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.',
            ),
            40 => 
            array (
                'id' => 2031,
                'product_id' => 1161,
                'type' => 'string',
                'key' => 'meta_purchase_note',
                'value' => '',
            ),
            41 => 
            array (
                'id' => 2032,
                'product_id' => 1161,
                'type' => 'string',
                'key' => 'meta_estimated_delivery',
                'value' => '7',
            ),
            42 => 
            array (
                'id' => 2033,
                'product_id' => 1161,
                'type' => 'string',
                'key' => 'meta_enable_reviews',
                'value' => '1',
            ),
            43 => 
            array (
                'id' => 2034,
                'product_id' => 1161,
                'type' => 'array',
                'key' => 'meta_seo',
                'value' => '{"title":"Girls Cute Clutches New Fashion Solid Color Leather Coin Purses Women Hasp Small Wallets Mini Change Purse Lady Pocket Bags","description":"Curabitur aliquet quam id dui posuere blandit. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Pellentesque in ipsum id orci porta dapibus.","image":"20221116/0b643f20f9f2b8f89666d14532f71d9b.jpg"}',
            ),
            44 => 
            array (
                'id' => 2035,
                'product_id' => 1161,
                'type' => 'array',
                'key' => 'meta_video_files',
                'value' => '[]',
            ),
            45 => 
            array (
                'id' => 2036,
                'product_id' => 1161,
                'type' => 'array',
                'key' => 'meta_video_url',
                'value' => '[]',
            ),
            46 => 
            array (
                'id' => 2037,
                'product_id' => 1162,
                'type' => 'array',
                'key' => 'meta_image',
                'value' => '["20221116/d365206b7141f86c43ac3a71e4485ae8.jpg","20221116/290c384c80db20617d19384a06f75a46.jpg","20221116/0b04fa1b12a727e75c0309c5d13983f2.jpg","20221116/a239ee44938ad9f40976097d381ef57f.jpg"]',
            ),
            47 => 
            array (
                'id' => 2038,
                'product_id' => 1162,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            48 => 
            array (
                'id' => 2039,
                'product_id' => 1162,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            49 => 
            array (
                'id' => 2040,
                'product_id' => 1162,
                'type' => 'array',
                'key' => 'meta_external_product',
                'value' => '{"url":"","text":""}',
            ),
            50 => 
            array (
                'id' => 2041,
                'product_id' => 1162,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            51 => 
            array (
                'id' => 2042,
                'product_id' => 1162,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            52 => 
            array (
                'id' => 2043,
                'product_id' => 1162,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            53 => 
            array (
                'id' => 2044,
                'product_id' => 1162,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => '',
            ),
            54 => 
            array (
                'id' => 2045,
                'product_id' => 1162,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            55 => 
            array (
                'id' => 2046,
                'product_id' => 1162,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            56 => 
            array (
                'id' => 2047,
                'product_id' => 1162,
                'type' => 'string',
                'key' => 'meta_hide_stock',
                'value' => '0',
            ),
            57 => 
            array (
                'id' => 2048,
                'product_id' => 1162,
                'type' => 'string',
                'key' => 'meta_stock_status',
                'value' => 'In Stock',
            ),
            58 => 
            array (
                'id' => 2049,
                'product_id' => 1162,
                'type' => 'string',
                'key' => 'meta_individual_sale',
                'value' => '0',
            ),
            59 => 
            array (
                'id' => 2050,
                'product_id' => 1162,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            60 => 
            array (
                'id' => 2051,
                'product_id' => 1162,
                'type' => 'string',
                'key' => 'meta_cash_on_delivery',
                'value' => '1',
            ),
            61 => 
            array (
                'id' => 2052,
                'product_id' => 1162,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '0.27',
            ),
            62 => 
            array (
                'id' => 2053,
                'product_id' => 1162,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            63 => 
            array (
                'id' => 2054,
                'product_id' => 1162,
                'type' => 'string',
                'key' => 'meta_warranty_type',
                'value' => 'Seller Warranty',
            ),
            64 => 
            array (
                'id' => 2055,
                'product_id' => 1162,
                'type' => 'string',
                'key' => 'meta_warranty_period',
                'value' => '6 months',
            ),
            65 => 
            array (
                'id' => 2056,
                'product_id' => 1162,
                'type' => 'string',
                'key' => 'meta_warranty_policy',
                'value' => 'Nulla porttitor accumsan tincidunt. Nulla porttitor accumsan tincidunt.',
            ),
            66 => 
            array (
                'id' => 2057,
                'product_id' => 1162,
                'type' => 'string',
                'key' => 'meta_purchase_note',
                'value' => '',
            ),
            67 => 
            array (
                'id' => 2058,
                'product_id' => 1162,
                'type' => 'string',
                'key' => 'meta_estimated_delivery',
                'value' => '7',
            ),
            68 => 
            array (
                'id' => 2059,
                'product_id' => 1162,
                'type' => 'string',
                'key' => 'meta_enable_reviews',
                'value' => '1',
            ),
            69 => 
            array (
                'id' => 2060,
                'product_id' => 1162,
                'type' => 'array',
                'key' => 'meta_seo',
                'value' => '{"title":"Women Chain Small Shoulder Bags Fashion Pu Leather Silk Scarf Crossbody Bags","description":"Curabitur aliquet quam id dui posuere blandit. Donec rutrum congue leo eget malesuada. Sed porttitor lectus nibh. Pellentesque in ipsum id orci porta dapibus. Cras ultricies ligula sed magna dictum porta.","image":"20221116/d365206b7141f86c43ac3a71e4485ae8.jpg"}',
            ),
            70 => 
            array (
                'id' => 2061,
                'product_id' => 1162,
                'type' => 'array',
                'key' => 'meta_video_files',
                'value' => '[]',
            ),
            71 => 
            array (
                'id' => 2062,
                'product_id' => 1162,
                'type' => 'array',
                'key' => 'meta_video_url',
                'value' => '[]',
            ),
            72 => 
            array (
                'id' => 2063,
                'product_id' => 1163,
                'type' => 'array',
                'key' => 'meta_image',
                'value' => '["20221116/71f49acb55e0ecffc8d0758b32ccadca.jpg","20221116/433b192deb31c1979cf854465981a492.jpg","20221116/86852cdd6e64a72700577c427c3be4d8.jpg"]',
            ),
            73 => 
            array (
                'id' => 2064,
                'product_id' => 1163,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            74 => 
            array (
                'id' => 2065,
                'product_id' => 1163,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            75 => 
            array (
                'id' => 2066,
                'product_id' => 1163,
                'type' => 'array',
                'key' => 'meta_external_product',
                'value' => '{"url":"","text":""}',
            ),
            76 => 
            array (
                'id' => 2067,
                'product_id' => 1163,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            77 => 
            array (
                'id' => 2068,
                'product_id' => 1163,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            78 => 
            array (
                'id' => 2069,
                'product_id' => 1163,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            79 => 
            array (
                'id' => 2070,
                'product_id' => 1163,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => '',
            ),
            80 => 
            array (
                'id' => 2071,
                'product_id' => 1163,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            81 => 
            array (
                'id' => 2072,
                'product_id' => 1163,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            82 => 
            array (
                'id' => 2073,
                'product_id' => 1163,
                'type' => 'string',
                'key' => 'meta_hide_stock',
                'value' => '0',
            ),
            83 => 
            array (
                'id' => 2074,
                'product_id' => 1163,
                'type' => 'string',
                'key' => 'meta_stock_status',
                'value' => 'In Stock',
            ),
            84 => 
            array (
                'id' => 2075,
                'product_id' => 1163,
                'type' => 'string',
                'key' => 'meta_individual_sale',
                'value' => '0',
            ),
            85 => 
            array (
                'id' => 2076,
                'product_id' => 1163,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            86 => 
            array (
                'id' => 2077,
                'product_id' => 1163,
                'type' => 'string',
                'key' => 'meta_cash_on_delivery',
                'value' => '1',
            ),
            87 => 
            array (
                'id' => 2078,
                'product_id' => 1163,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '1.200',
            ),
            88 => 
            array (
                'id' => 2079,
                'product_id' => 1163,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            89 => 
            array (
                'id' => 2080,
                'product_id' => 1163,
                'type' => 'string',
                'key' => 'meta_warranty_type',
                'value' => 'Brand Warranty',
            ),
            90 => 
            array (
                'id' => 2081,
                'product_id' => 1163,
                'type' => 'string',
                'key' => 'meta_warranty_period',
                'value' => '1 year',
            ),
            91 => 
            array (
                'id' => 2082,
                'product_id' => 1163,
                'type' => 'string',
                'key' => 'meta_warranty_policy',
                'value' => 'Donec rutrum congue leo eget malesuada. Pellentesque in ipsum id orci porta dapibus.',
            ),
            92 => 
            array (
                'id' => 2083,
                'product_id' => 1163,
                'type' => 'string',
                'key' => 'meta_purchase_note',
                'value' => '',
            ),
            93 => 
            array (
                'id' => 2084,
                'product_id' => 1163,
                'type' => 'string',
                'key' => 'meta_estimated_delivery',
                'value' => '7',
            ),
            94 => 
            array (
                'id' => 2085,
                'product_id' => 1163,
                'type' => 'string',
                'key' => 'meta_enable_reviews',
                'value' => '1',
            ),
            95 => 
            array (
                'id' => 2086,
                'product_id' => 1163,
                'type' => 'array',
                'key' => 'meta_seo',
                'value' => '{"title":"Men Travel Bag Large Capacity Waterproof Storage Bag Bathroom Toiletries Organizer Multifunctional","description":"Sed porttitor lectus nibh. Sed porttitor lectus nibh. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur aliquet quam id dui posuere blandit.","image":"20221116/71f49acb55e0ecffc8d0758b32ccadca.jpg"}',
            ),
            96 => 
            array (
                'id' => 2087,
                'product_id' => 1163,
                'type' => 'array',
                'key' => 'meta_video_files',
                'value' => '[]',
            ),
            97 => 
            array (
                'id' => 2088,
                'product_id' => 1163,
                'type' => 'array',
                'key' => 'meta_video_url',
                'value' => '[]',
            ),
            98 => 
            array (
                'id' => 2089,
                'product_id' => 1164,
                'type' => 'array',
                'key' => 'meta_image',
                'value' => '["20221116/c176b9613137502216b6bcf2af6ec971.jpg","20221116/5a7a4b5d82398aebce973cbf14f418fa.jpg","20221116/cf0f3ca1068d989088a76b306476031d.jpg","20221116/ec39765aa60cd5e6e28bfa5ed5d48d58.jpg","20221116/c65508ea6c70eb20b06892e00e8b5313.jpg"]',
            ),
            99 => 
            array (
                'id' => 2090,
                'product_id' => 1164,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            100 => 
            array (
                'id' => 2091,
                'product_id' => 1164,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            101 => 
            array (
                'id' => 2092,
                'product_id' => 1164,
                'type' => 'array',
                'key' => 'meta_external_product',
                'value' => '{"url":"","text":""}',
            ),
            102 => 
            array (
                'id' => 2093,
                'product_id' => 1164,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            103 => 
            array (
                'id' => 2094,
                'product_id' => 1164,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            104 => 
            array (
                'id' => 2095,
                'product_id' => 1164,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            105 => 
            array (
                'id' => 2096,
                'product_id' => 1164,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => '',
            ),
            106 => 
            array (
                'id' => 2097,
                'product_id' => 1164,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            107 => 
            array (
                'id' => 2098,
                'product_id' => 1164,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            108 => 
            array (
                'id' => 2099,
                'product_id' => 1164,
                'type' => 'string',
                'key' => 'meta_hide_stock',
                'value' => '0',
            ),
            109 => 
            array (
                'id' => 2100,
                'product_id' => 1164,
                'type' => 'string',
                'key' => 'meta_stock_status',
                'value' => 'In Stock',
            ),
            110 => 
            array (
                'id' => 2101,
                'product_id' => 1164,
                'type' => 'string',
                'key' => 'meta_individual_sale',
                'value' => '0',
            ),
            111 => 
            array (
                'id' => 2102,
                'product_id' => 1164,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            112 => 
            array (
                'id' => 2103,
                'product_id' => 1164,
                'type' => 'string',
                'key' => 'meta_cash_on_delivery',
                'value' => '1',
            ),
            113 => 
            array (
                'id' => 2104,
                'product_id' => 1164,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            114 => 
            array (
                'id' => 2105,
                'product_id' => 1164,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            115 => 
            array (
                'id' => 2106,
                'product_id' => 1164,
                'type' => 'string',
                'key' => 'meta_warranty_type',
                'value' => 'No Warranty',
            ),
            116 => 
            array (
                'id' => 2107,
                'product_id' => 1164,
                'type' => 'string',
                'key' => 'meta_warranty_period',
                'value' => '',
            ),
            117 => 
            array (
                'id' => 2108,
                'product_id' => 1164,
                'type' => 'string',
                'key' => 'meta_warranty_policy',
                'value' => '',
            ),
            118 => 
            array (
                'id' => 2109,
                'product_id' => 1164,
                'type' => 'string',
                'key' => 'meta_purchase_note',
                'value' => '',
            ),
            119 => 
            array (
                'id' => 2110,
                'product_id' => 1164,
                'type' => 'string',
                'key' => 'meta_estimated_delivery',
                'value' => '7',
            ),
            120 => 
            array (
                'id' => 2111,
                'product_id' => 1164,
                'type' => 'string',
                'key' => 'meta_enable_reviews',
                'value' => '1',
            ),
            121 => 
            array (
                'id' => 2112,
                'product_id' => 1164,
                'type' => 'array',
                'key' => 'meta_seo',
                'value' => '{"title":"Napkin Sanitary Pad Pouch Women Girl Cute Towel Storage Bag Coin Purse Lipstick Headphone Case","description":"Vivamus suscipit tortor eget felis porttitor volutpat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Proin eget tortor risus. Quisque velit nisi, pretium ut lacinia in, elementum id enim.","image":"20221116/c176b9613137502216b6bcf2af6ec971.jpg"}',
            ),
            122 => 
            array (
                'id' => 2113,
                'product_id' => 1164,
                'type' => 'array',
                'key' => 'meta_video_files',
                'value' => '[]',
            ),
            123 => 
            array (
                'id' => 2114,
                'product_id' => 1164,
                'type' => 'array',
                'key' => 'meta_video_url',
                'value' => '[]',
            ),
            124 => 
            array (
                'id' => 2115,
                'product_id' => 1165,
                'type' => 'array',
                'key' => 'meta_image',
                'value' => '["20221116/b0c479b93f2cbbaefe1fd71e92038e61.jpg"]',
            ),
            125 => 
            array (
                'id' => 2116,
                'product_id' => 1165,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            126 => 
            array (
                'id' => 2117,
                'product_id' => 1165,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            127 => 
            array (
                'id' => 2118,
                'product_id' => 1165,
                'type' => 'array',
                'key' => 'meta_external_product',
                'value' => '{"url":"","text":""}',
            ),
            128 => 
            array (
                'id' => 2119,
                'product_id' => 1165,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            129 => 
            array (
                'id' => 2120,
                'product_id' => 1165,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            130 => 
            array (
                'id' => 2121,
                'product_id' => 1165,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            131 => 
            array (
                'id' => 2122,
                'product_id' => 1165,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            132 => 
            array (
                'id' => 2123,
                'product_id' => 1165,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            133 => 
            array (
                'id' => 2124,
                'product_id' => 1165,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            134 => 
            array (
                'id' => 2125,
                'product_id' => 1165,
                'type' => 'string',
                'key' => 'meta_hide_stock',
                'value' => '0',
            ),
            135 => 
            array (
                'id' => 2126,
                'product_id' => 1165,
                'type' => 'string',
                'key' => 'meta_stock_status',
                'value' => 'In Stock',
            ),
            136 => 
            array (
                'id' => 2127,
                'product_id' => 1165,
                'type' => 'string',
                'key' => 'meta_individual_sale',
                'value' => '0',
            ),
            137 => 
            array (
                'id' => 2128,
                'product_id' => 1165,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            138 => 
            array (
                'id' => 2129,
                'product_id' => 1165,
                'type' => 'string',
                'key' => 'meta_cash_on_delivery',
                'value' => '1',
            ),
            139 => 
            array (
                'id' => 2130,
                'product_id' => 1165,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '0.450',
            ),
            140 => 
            array (
                'id' => 2131,
                'product_id' => 1165,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            141 => 
            array (
                'id' => 2132,
                'product_id' => 1165,
                'type' => 'string',
                'key' => 'meta_warranty_type',
                'value' => 'Brand Warranty',
            ),
            142 => 
            array (
                'id' => 2133,
                'product_id' => 1165,
                'type' => 'string',
                'key' => 'meta_warranty_period',
                'value' => '2 years',
            ),
            143 => 
            array (
                'id' => 2134,
                'product_id' => 1165,
                'type' => 'string',
                'key' => 'meta_warranty_policy',
                'value' => 'Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Vivamus suscipit tortor eget felis porttitor volutpat.',
            ),
            144 => 
            array (
                'id' => 2135,
                'product_id' => 1165,
                'type' => 'string',
                'key' => 'meta_purchase_note',
                'value' => '',
            ),
            145 => 
            array (
                'id' => 2136,
                'product_id' => 1165,
                'type' => 'string',
                'key' => 'meta_estimated_delivery',
                'value' => '7',
            ),
            146 => 
            array (
                'id' => 2137,
                'product_id' => 1165,
                'type' => 'string',
                'key' => 'meta_enable_reviews',
                'value' => '1',
            ),
            147 => 
            array (
                'id' => 2138,
                'product_id' => 1165,
                'type' => 'array',
                'key' => 'meta_seo',
                'value' => '{"title":"Cute Cartoon Women\'s Kids Lunch Bags Waterproof Insulated Picnic Foods Storage Container Handbag","description":"Sed porttitor lectus nibh. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Cras ultricies ligula sed magna dictum porta. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.","image":"20221116/b0c479b93f2cbbaefe1fd71e92038e61.jpg"}',
            ),
            148 => 
            array (
                'id' => 2139,
                'product_id' => 1165,
                'type' => 'array',
                'key' => 'meta_video_files',
                'value' => '[]',
            ),
            149 => 
            array (
                'id' => 2140,
                'product_id' => 1165,
                'type' => 'array',
                'key' => 'meta_video_url',
                'value' => '[]',
            ),
            150 => 
            array (
                'id' => 2141,
                'product_id' => 1166,
                'type' => 'array',
                'key' => 'meta_image',
                'value' => '["20221116/3cf1bee122398adba31ef000e5fac6c0.jpg","20221116/ebd6ad65191e7bc92e6a68dc09a6c8ef.jpg","20221116/7bd866eb6f3cc24c203e68e0940e6d43.jpg"]',
            ),
            151 => 
            array (
                'id' => 2142,
                'product_id' => 1166,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            152 => 
            array (
                'id' => 2143,
                'product_id' => 1166,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            153 => 
            array (
                'id' => 2144,
                'product_id' => 1166,
                'type' => 'array',
                'key' => 'meta_external_product',
                'value' => '{"url":"","text":""}',
            ),
            154 => 
            array (
                'id' => 2145,
                'product_id' => 1166,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            155 => 
            array (
                'id' => 2146,
                'product_id' => 1166,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            156 => 
            array (
                'id' => 2147,
                'product_id' => 1166,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            157 => 
            array (
                'id' => 2148,
                'product_id' => 1166,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => '',
            ),
            158 => 
            array (
                'id' => 2149,
                'product_id' => 1166,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            159 => 
            array (
                'id' => 2150,
                'product_id' => 1166,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            160 => 
            array (
                'id' => 2151,
                'product_id' => 1166,
                'type' => 'string',
                'key' => 'meta_hide_stock',
                'value' => '0',
            ),
            161 => 
            array (
                'id' => 2152,
                'product_id' => 1166,
                'type' => 'string',
                'key' => 'meta_stock_status',
                'value' => 'In Stock',
            ),
            162 => 
            array (
                'id' => 2153,
                'product_id' => 1166,
                'type' => 'string',
                'key' => 'meta_individual_sale',
                'value' => '0',
            ),
            163 => 
            array (
                'id' => 2154,
                'product_id' => 1166,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            164 => 
            array (
                'id' => 2155,
                'product_id' => 1166,
                'type' => 'string',
                'key' => 'meta_cash_on_delivery',
                'value' => '1',
            ),
            165 => 
            array (
                'id' => 2156,
                'product_id' => 1166,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '0.500',
            ),
            166 => 
            array (
                'id' => 2157,
                'product_id' => 1166,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            167 => 
            array (
                'id' => 2158,
                'product_id' => 1166,
                'type' => 'string',
                'key' => 'meta_warranty_type',
                'value' => 'Brand Warranty',
            ),
            168 => 
            array (
                'id' => 2159,
                'product_id' => 1166,
                'type' => 'string',
                'key' => 'meta_warranty_period',
                'value' => '1 year',
            ),
            169 => 
            array (
                'id' => 2160,
                'product_id' => 1166,
                'type' => 'string',
                'key' => 'meta_warranty_policy',
                'value' => 'Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Donec sollicitudin molestie malesuada.',
            ),
            170 => 
            array (
                'id' => 2161,
                'product_id' => 1166,
                'type' => 'string',
                'key' => 'meta_purchase_note',
                'value' => '',
            ),
            171 => 
            array (
                'id' => 2162,
                'product_id' => 1166,
                'type' => 'string',
                'key' => 'meta_estimated_delivery',
                'value' => '7',
            ),
            172 => 
            array (
                'id' => 2163,
                'product_id' => 1166,
                'type' => 'string',
                'key' => 'meta_enable_reviews',
                'value' => '1',
            ),
            173 => 
            array (
                'id' => 2164,
                'product_id' => 1166,
                'type' => 'array',
                'key' => 'meta_seo',
                'value' => '{"title":"Cartoon Fish School Bag Student Fashion Schoolbag Girls Lovely Backpack","description":"Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Nulla porttitor accumsan tincidunt. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.","image":"20221116/3cf1bee122398adba31ef000e5fac6c0.jpg"}',
            ),
            174 => 
            array (
                'id' => 2165,
                'product_id' => 1166,
                'type' => 'array',
                'key' => 'meta_video_files',
                'value' => '[]',
            ),
            175 => 
            array (
                'id' => 2166,
                'product_id' => 1166,
                'type' => 'array',
                'key' => 'meta_video_url',
                'value' => '[]',
            ),
            176 => 
            array (
                'id' => 2167,
                'product_id' => 1167,
                'type' => 'array',
                'key' => 'meta_image',
                'value' => '["20221116/e754335b63ccf0181856969a8397b461.jpg"]',
            ),
            177 => 
            array (
                'id' => 2168,
                'product_id' => 1167,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            178 => 
            array (
                'id' => 2169,
                'product_id' => 1167,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            179 => 
            array (
                'id' => 2170,
                'product_id' => 1167,
                'type' => 'array',
                'key' => 'meta_external_product',
                'value' => '{"url":"","text":""}',
            ),
            180 => 
            array (
                'id' => 2171,
                'product_id' => 1167,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            181 => 
            array (
                'id' => 2172,
                'product_id' => 1167,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            182 => 
            array (
                'id' => 2173,
                'product_id' => 1167,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            183 => 
            array (
                'id' => 2174,
                'product_id' => 1167,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => '',
            ),
            184 => 
            array (
                'id' => 2175,
                'product_id' => 1167,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            185 => 
            array (
                'id' => 2176,
                'product_id' => 1167,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            186 => 
            array (
                'id' => 2177,
                'product_id' => 1167,
                'type' => 'string',
                'key' => 'meta_hide_stock',
                'value' => '0',
            ),
            187 => 
            array (
                'id' => 2178,
                'product_id' => 1167,
                'type' => 'string',
                'key' => 'meta_stock_status',
                'value' => 'In Stock',
            ),
            188 => 
            array (
                'id' => 2179,
                'product_id' => 1167,
                'type' => 'string',
                'key' => 'meta_individual_sale',
                'value' => '0',
            ),
            189 => 
            array (
                'id' => 2180,
                'product_id' => 1167,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            190 => 
            array (
                'id' => 2181,
                'product_id' => 1167,
                'type' => 'string',
                'key' => 'meta_cash_on_delivery',
                'value' => '1',
            ),
            191 => 
            array (
                'id' => 2182,
                'product_id' => 1167,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '0.020',
            ),
            192 => 
            array (
                'id' => 2183,
                'product_id' => 1167,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            193 => 
            array (
                'id' => 2184,
                'product_id' => 1167,
                'type' => 'string',
                'key' => 'meta_warranty_type',
                'value' => 'No Warranty',
            ),
            194 => 
            array (
                'id' => 2185,
                'product_id' => 1167,
                'type' => 'string',
                'key' => 'meta_warranty_period',
                'value' => '',
            ),
            195 => 
            array (
                'id' => 2186,
                'product_id' => 1167,
                'type' => 'string',
                'key' => 'meta_warranty_policy',
                'value' => '',
            ),
            196 => 
            array (
                'id' => 2187,
                'product_id' => 1167,
                'type' => 'string',
                'key' => 'meta_purchase_note',
                'value' => '',
            ),
            197 => 
            array (
                'id' => 2188,
                'product_id' => 1167,
                'type' => 'string',
                'key' => 'meta_estimated_delivery',
                'value' => '7',
            ),
            198 => 
            array (
                'id' => 2189,
                'product_id' => 1167,
                'type' => 'string',
                'key' => 'meta_enable_reviews',
                'value' => '1',
            ),
            199 => 
            array (
                'id' => 2190,
                'product_id' => 1167,
                'type' => 'array',
                'key' => 'meta_seo',
                'value' => '{"title":"New Pet Dogs Polo Shirt Summer Cool Dogs Clothes Soft Chihuahua For Puppy","description":"Donec sollicitudin molestie malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Lorem ipsum dolor sit amet, consectetur adipiscing elit.","image":"20221116/e754335b63ccf0181856969a8397b461.jpg"}',
            ),
            200 => 
            array (
                'id' => 2191,
                'product_id' => 1167,
                'type' => 'array',
                'key' => 'meta_video_files',
                'value' => '[]',
            ),
            201 => 
            array (
                'id' => 2192,
                'product_id' => 1167,
                'type' => 'array',
                'key' => 'meta_video_url',
                'value' => '[]',
            ),
            202 => 
            array (
                'id' => 2193,
                'product_id' => 1168,
                'type' => 'array',
                'key' => 'meta_image',
                'value' => '["20221116/d6521f45b60ae362a6855c4fa753435a.jpg","20221116/86a07d1d3ce4665a879d874fb73ccb55.jpg","20221116/3dd4cec2bc7cb8e84532e817fa31ccc5.jpg"]',
            ),
            203 => 
            array (
                'id' => 2194,
                'product_id' => 1168,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            204 => 
            array (
                'id' => 2195,
                'product_id' => 1168,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            205 => 
            array (
                'id' => 2196,
                'product_id' => 1168,
                'type' => 'array',
                'key' => 'meta_external_product',
                'value' => '{"url":"","text":""}',
            ),
            206 => 
            array (
                'id' => 2197,
                'product_id' => 1168,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            207 => 
            array (
                'id' => 2198,
                'product_id' => 1168,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            208 => 
            array (
                'id' => 2199,
                'product_id' => 1168,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            209 => 
            array (
                'id' => 2200,
                'product_id' => 1168,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            210 => 
            array (
                'id' => 2201,
                'product_id' => 1168,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            211 => 
            array (
                'id' => 2202,
                'product_id' => 1168,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            212 => 
            array (
                'id' => 2203,
                'product_id' => 1168,
                'type' => 'string',
                'key' => 'meta_hide_stock',
                'value' => '0',
            ),
            213 => 
            array (
                'id' => 2204,
                'product_id' => 1168,
                'type' => 'string',
                'key' => 'meta_stock_status',
                'value' => 'In Stock',
            ),
            214 => 
            array (
                'id' => 2205,
                'product_id' => 1168,
                'type' => 'string',
                'key' => 'meta_individual_sale',
                'value' => '0',
            ),
            215 => 
            array (
                'id' => 2206,
                'product_id' => 1168,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            216 => 
            array (
                'id' => 2207,
                'product_id' => 1168,
                'type' => 'string',
                'key' => 'meta_cash_on_delivery',
                'value' => '1',
            ),
            217 => 
            array (
                'id' => 2208,
                'product_id' => 1168,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '0.036',
            ),
            218 => 
            array (
                'id' => 2209,
                'product_id' => 1168,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            219 => 
            array (
                'id' => 2210,
                'product_id' => 1168,
                'type' => 'string',
                'key' => 'meta_warranty_type',
                'value' => 'No Warranty',
            ),
            220 => 
            array (
                'id' => 2211,
                'product_id' => 1168,
                'type' => 'string',
                'key' => 'meta_warranty_period',
                'value' => '',
            ),
            221 => 
            array (
                'id' => 2212,
                'product_id' => 1168,
                'type' => 'string',
                'key' => 'meta_warranty_policy',
                'value' => '',
            ),
            222 => 
            array (
                'id' => 2213,
                'product_id' => 1168,
                'type' => 'string',
                'key' => 'meta_purchase_note',
                'value' => '',
            ),
            223 => 
            array (
                'id' => 2214,
                'product_id' => 1168,
                'type' => 'string',
                'key' => 'meta_estimated_delivery',
                'value' => '7',
            ),
            224 => 
            array (
                'id' => 2215,
                'product_id' => 1168,
                'type' => 'string',
                'key' => 'meta_enable_reviews',
                'value' => '1',
            ),
            225 => 
            array (
                'id' => 2216,
                'product_id' => 1168,
                'type' => 'array',
                'key' => 'meta_seo',
                'value' => '{"title":"Lightweight Baby Carriers With Adjustable Shoulder Strap For Infants Toddlers Multifunctional And Simple Front Hug Portable","description":"Nulla quis lorem ut libero malesuada feugiat. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Sed porttitor lectus nibh. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Cras ultricies ligula sed magna dictum porta.","image":"20221116/d6521f45b60ae362a6855c4fa753435a.jpg"}',
            ),
            226 => 
            array (
                'id' => 2217,
                'product_id' => 1168,
                'type' => 'array',
                'key' => 'meta_video_files',
                'value' => '[]',
            ),
            227 => 
            array (
                'id' => 2218,
                'product_id' => 1168,
                'type' => 'array',
                'key' => 'meta_video_url',
                'value' => '[]',
            ),
            228 => 
            array (
                'id' => 2219,
                'product_id' => 1169,
                'type' => 'array',
                'key' => 'meta_image',
                'value' => '["20221116/370f76928fac200f28f1e86b2086a1a7.jpg"]',
            ),
            229 => 
            array (
                'id' => 2220,
                'product_id' => 1169,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            230 => 
            array (
                'id' => 2221,
                'product_id' => 1169,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            231 => 
            array (
                'id' => 2222,
                'product_id' => 1169,
                'type' => 'array',
                'key' => 'meta_external_product',
                'value' => '{"url":"","text":""}',
            ),
            232 => 
            array (
                'id' => 2223,
                'product_id' => 1169,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            233 => 
            array (
                'id' => 2224,
                'product_id' => 1169,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            234 => 
            array (
                'id' => 2225,
                'product_id' => 1169,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            235 => 
            array (
                'id' => 2226,
                'product_id' => 1169,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => '',
            ),
            236 => 
            array (
                'id' => 2227,
                'product_id' => 1169,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            237 => 
            array (
                'id' => 2228,
                'product_id' => 1169,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            238 => 
            array (
                'id' => 2229,
                'product_id' => 1169,
                'type' => 'string',
                'key' => 'meta_hide_stock',
                'value' => '0',
            ),
            239 => 
            array (
                'id' => 2230,
                'product_id' => 1169,
                'type' => 'string',
                'key' => 'meta_stock_status',
                'value' => 'In Stock',
            ),
            240 => 
            array (
                'id' => 2231,
                'product_id' => 1169,
                'type' => 'string',
                'key' => 'meta_individual_sale',
                'value' => '0',
            ),
            241 => 
            array (
                'id' => 2232,
                'product_id' => 1169,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            242 => 
            array (
                'id' => 2233,
                'product_id' => 1169,
                'type' => 'string',
                'key' => 'meta_cash_on_delivery',
                'value' => '1',
            ),
            243 => 
            array (
                'id' => 2234,
                'product_id' => 1169,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '0.025',
            ),
            244 => 
            array (
                'id' => 2235,
                'product_id' => 1169,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            245 => 
            array (
                'id' => 2236,
                'product_id' => 1169,
                'type' => 'string',
                'key' => 'meta_warranty_type',
                'value' => 'Seller Warranty',
            ),
            246 => 
            array (
                'id' => 2237,
                'product_id' => 1169,
                'type' => 'string',
                'key' => 'meta_warranty_period',
                'value' => '3 months',
            ),
            247 => 
            array (
                'id' => 2238,
                'product_id' => 1169,
                'type' => 'string',
                'key' => 'meta_warranty_policy',
                'value' => 'Quisque velit nisi, pretium ut lacinia in, elementum id enim. Pellentesque in ipsum id orci porta dapibus.',
            ),
            248 => 
            array (
                'id' => 2239,
                'product_id' => 1169,
                'type' => 'string',
                'key' => 'meta_purchase_note',
                'value' => '',
            ),
            249 => 
            array (
                'id' => 2240,
                'product_id' => 1169,
                'type' => 'string',
                'key' => 'meta_estimated_delivery',
                'value' => '7',
            ),
            250 => 
            array (
                'id' => 2241,
                'product_id' => 1169,
                'type' => 'string',
                'key' => 'meta_enable_reviews',
                'value' => '1',
            ),
            251 => 
            array (
                'id' => 2242,
                'product_id' => 1169,
                'type' => 'array',
                'key' => 'meta_seo',
                'value' => '{"title":"Snap Button Bracelet Bangle Elastic Metal Beaded Snap Bracelet Fit","description":"Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Proin eget tortor risus. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Nulla quis lorem ut libero malesuada feugiat.","image":"20221116/370f76928fac200f28f1e86b2086a1a7.jpg"}',
            ),
            252 => 
            array (
                'id' => 2243,
                'product_id' => 1169,
                'type' => 'array',
                'key' => 'meta_video_files',
                'value' => '[]',
            ),
            253 => 
            array (
                'id' => 2244,
                'product_id' => 1169,
                'type' => 'array',
                'key' => 'meta_video_url',
                'value' => '[]',
            ),
            254 => 
            array (
                'id' => 2245,
                'product_id' => 1170,
                'type' => 'array',
                'key' => 'meta_image',
                'value' => '["20221116/15d36032f586fe8439c9af57b6dc9fcd.jpg","20221116/a17e3269255472cfe26daf77272dc77e.jpg","20221116/536358df3e2048f3921ef494cd33488d.jpg"]',
            ),
            255 => 
            array (
                'id' => 2246,
                'product_id' => 1170,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            256 => 
            array (
                'id' => 2247,
                'product_id' => 1170,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            257 => 
            array (
                'id' => 2248,
                'product_id' => 1170,
                'type' => 'array',
                'key' => 'meta_external_product',
                'value' => '{"url":"","text":""}',
            ),
            258 => 
            array (
                'id' => 2249,
                'product_id' => 1170,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            259 => 
            array (
                'id' => 2250,
                'product_id' => 1170,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            260 => 
            array (
                'id' => 2251,
                'product_id' => 1170,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            261 => 
            array (
                'id' => 2252,
                'product_id' => 1170,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            262 => 
            array (
                'id' => 2253,
                'product_id' => 1170,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            263 => 
            array (
                'id' => 2254,
                'product_id' => 1170,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            264 => 
            array (
                'id' => 2255,
                'product_id' => 1170,
                'type' => 'string',
                'key' => 'meta_hide_stock',
                'value' => '0',
            ),
            265 => 
            array (
                'id' => 2256,
                'product_id' => 1170,
                'type' => 'string',
                'key' => 'meta_stock_status',
                'value' => 'In Stock',
            ),
            266 => 
            array (
                'id' => 2257,
                'product_id' => 1170,
                'type' => 'string',
                'key' => 'meta_individual_sale',
                'value' => '0',
            ),
            267 => 
            array (
                'id' => 2258,
                'product_id' => 1170,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            268 => 
            array (
                'id' => 2259,
                'product_id' => 1170,
                'type' => 'string',
                'key' => 'meta_cash_on_delivery',
                'value' => '1',
            ),
            269 => 
            array (
                'id' => 2260,
                'product_id' => 1170,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '0.036',
            ),
            270 => 
            array (
                'id' => 2261,
                'product_id' => 1170,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            271 => 
            array (
                'id' => 2262,
                'product_id' => 1170,
                'type' => 'string',
                'key' => 'meta_warranty_type',
                'value' => 'No Warranty',
            ),
            272 => 
            array (
                'id' => 2263,
                'product_id' => 1170,
                'type' => 'string',
                'key' => 'meta_warranty_period',
                'value' => '',
            ),
            273 => 
            array (
                'id' => 2264,
                'product_id' => 1170,
                'type' => 'string',
                'key' => 'meta_warranty_policy',
                'value' => '',
            ),
            274 => 
            array (
                'id' => 2265,
                'product_id' => 1170,
                'type' => 'string',
                'key' => 'meta_purchase_note',
                'value' => '',
            ),
            275 => 
            array (
                'id' => 2266,
                'product_id' => 1170,
                'type' => 'string',
                'key' => 'meta_estimated_delivery',
                'value' => '7',
            ),
            276 => 
            array (
                'id' => 2267,
                'product_id' => 1170,
                'type' => 'string',
                'key' => 'meta_enable_reviews',
                'value' => '1',
            ),
            277 => 
            array (
                'id' => 2268,
                'product_id' => 1170,
                'type' => 'array',
                'key' => 'meta_seo',
                'value' => '{"title":"Wireless Wrist Strap With Metal Bowl In Hand Blue Antistatic Cordless Antistatic Bracelet","description":"Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Donec rutrum congue leo eget malesuada. Curabitur aliquet quam id dui posuere blandit. Nulla quis lorem ut libero malesuada feugiat. Proin eget tortor risus.","image":"20221116/15d36032f586fe8439c9af57b6dc9fcd.jpg"}',
            ),
            278 => 
            array (
                'id' => 2269,
                'product_id' => 1170,
                'type' => 'array',
                'key' => 'meta_video_files',
                'value' => '[]',
            ),
            279 => 
            array (
                'id' => 2270,
                'product_id' => 1170,
                'type' => 'array',
                'key' => 'meta_video_url',
                'value' => '["https:\\/\\/player.vimeo.com\\/video\\/330420305?h=0c269f7e82&color=f7f7f7&title=0&byline=0&portrait=0"]',
            ),
            280 => 
            array (
                'id' => 2271,
                'product_id' => 1171,
                'type' => 'array',
                'key' => 'meta_image',
                'value' => '["20221116/da1041f0dd09e05b8a75781ee4e5d753.jpg","20221116/2452833d7ad98237a43a413ad83f2759.jpg","20221116/584e86cd650fb12dd969a08de6528585.jpg"]',
            ),
            281 => 
            array (
                'id' => 2272,
                'product_id' => 1171,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            282 => 
            array (
                'id' => 2273,
                'product_id' => 1171,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            283 => 
            array (
                'id' => 2274,
                'product_id' => 1171,
                'type' => 'array',
                'key' => 'meta_external_product',
                'value' => '{"url":"","text":""}',
            ),
            284 => 
            array (
                'id' => 2275,
                'product_id' => 1171,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            285 => 
            array (
                'id' => 2276,
                'product_id' => 1171,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            286 => 
            array (
                'id' => 2277,
                'product_id' => 1171,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            287 => 
            array (
                'id' => 2278,
                'product_id' => 1171,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            288 => 
            array (
                'id' => 2279,
                'product_id' => 1171,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            289 => 
            array (
                'id' => 2280,
                'product_id' => 1171,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            290 => 
            array (
                'id' => 2281,
                'product_id' => 1171,
                'type' => 'string',
                'key' => 'meta_hide_stock',
                'value' => '0',
            ),
            291 => 
            array (
                'id' => 2282,
                'product_id' => 1171,
                'type' => 'string',
                'key' => 'meta_stock_status',
                'value' => 'In Stock',
            ),
            292 => 
            array (
                'id' => 2283,
                'product_id' => 1171,
                'type' => 'string',
                'key' => 'meta_individual_sale',
                'value' => '0',
            ),
            293 => 
            array (
                'id' => 2284,
                'product_id' => 1171,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            294 => 
            array (
                'id' => 2285,
                'product_id' => 1171,
                'type' => 'string',
                'key' => 'meta_cash_on_delivery',
                'value' => '0',
            ),
            295 => 
            array (
                'id' => 2286,
                'product_id' => 1171,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            296 => 
            array (
                'id' => 2287,
                'product_id' => 1171,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            297 => 
            array (
                'id' => 2288,
                'product_id' => 1171,
                'type' => 'string',
                'key' => 'meta_warranty_type',
                'value' => 'No Warranty',
            ),
            298 => 
            array (
                'id' => 2289,
                'product_id' => 1171,
                'type' => 'string',
                'key' => 'meta_warranty_period',
                'value' => '',
            ),
            299 => 
            array (
                'id' => 2290,
                'product_id' => 1171,
                'type' => 'string',
                'key' => 'meta_warranty_policy',
                'value' => '',
            ),
            300 => 
            array (
                'id' => 2291,
                'product_id' => 1171,
                'type' => 'string',
                'key' => 'meta_purchase_note',
                'value' => '',
            ),
            301 => 
            array (
                'id' => 2292,
                'product_id' => 1171,
                'type' => 'string',
                'key' => 'meta_estimated_delivery',
                'value' => '15',
            ),
            302 => 
            array (
                'id' => 2293,
                'product_id' => 1171,
                'type' => 'string',
                'key' => 'meta_enable_reviews',
                'value' => '1',
            ),
            303 => 
            array (
                'id' => 2294,
                'product_id' => 1171,
                'type' => 'array',
                'key' => 'meta_seo',
                'value' => '{"title":"Christmas Truck Silicone Beads DIY Focus Bead BPA Free Infant Chewable Dummy Necklace Pacifier","description":"Curabitur aliquet quam id dui posuere blandit. Vivamus suscipit tortor eget felis porttitor volutpat. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Lorem ipsum dolor sit amet, consectetur adipiscing elit.","image":"20221116/da1041f0dd09e05b8a75781ee4e5d753.jpg"}',
            ),
            304 => 
            array (
                'id' => 2295,
                'product_id' => 1171,
                'type' => 'array',
                'key' => 'meta_video_files',
                'value' => '[]',
            ),
            305 => 
            array (
                'id' => 2296,
                'product_id' => 1171,
                'type' => 'array',
                'key' => 'meta_video_url',
                'value' => '["https:\\/\\/player.vimeo.com\\/video\\/330420305?h=0c269f7e82&color=f7f7f7&title=0&byline=0&portrait=0"]',
            ),
            306 => 
            array (
                'id' => 2297,
                'product_id' => 1172,
                'type' => 'array',
                'key' => 'meta_image',
                'value' => '["20221116/ba35eed70959b6000252f7fe9b440b72.jpg","20221116/f67a728eb33fcc3d2d884e142ceb6ef6.jpg"]',
            ),
            307 => 
            array (
                'id' => 2298,
                'product_id' => 1172,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            308 => 
            array (
                'id' => 2299,
                'product_id' => 1172,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            309 => 
            array (
                'id' => 2300,
                'product_id' => 1172,
                'type' => 'array',
                'key' => 'meta_external_product',
                'value' => '{"url":"","text":""}',
            ),
            310 => 
            array (
                'id' => 2301,
                'product_id' => 1172,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            311 => 
            array (
                'id' => 2302,
                'product_id' => 1172,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            312 => 
            array (
                'id' => 2303,
                'product_id' => 1172,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            313 => 
            array (
                'id' => 2304,
                'product_id' => 1172,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            314 => 
            array (
                'id' => 2305,
                'product_id' => 1172,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            315 => 
            array (
                'id' => 2306,
                'product_id' => 1172,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            316 => 
            array (
                'id' => 2307,
                'product_id' => 1172,
                'type' => 'string',
                'key' => 'meta_hide_stock',
                'value' => '0',
            ),
            317 => 
            array (
                'id' => 2308,
                'product_id' => 1172,
                'type' => 'string',
                'key' => 'meta_stock_status',
                'value' => 'In Stock',
            ),
            318 => 
            array (
                'id' => 2309,
                'product_id' => 1172,
                'type' => 'string',
                'key' => 'meta_individual_sale',
                'value' => '0',
            ),
            319 => 
            array (
                'id' => 2310,
                'product_id' => 1172,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            320 => 
            array (
                'id' => 2311,
                'product_id' => 1172,
                'type' => 'string',
                'key' => 'meta_cash_on_delivery',
                'value' => '0',
            ),
            321 => 
            array (
                'id' => 2312,
                'product_id' => 1172,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            322 => 
            array (
                'id' => 2313,
                'product_id' => 1172,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            323 => 
            array (
                'id' => 2314,
                'product_id' => 1172,
                'type' => 'string',
                'key' => 'meta_warranty_type',
                'value' => 'No Warranty',
            ),
            324 => 
            array (
                'id' => 2315,
                'product_id' => 1172,
                'type' => 'string',
                'key' => 'meta_warranty_period',
                'value' => '',
            ),
            325 => 
            array (
                'id' => 2316,
                'product_id' => 1172,
                'type' => 'string',
                'key' => 'meta_warranty_policy',
                'value' => '',
            ),
            326 => 
            array (
                'id' => 2317,
                'product_id' => 1172,
                'type' => 'string',
                'key' => 'meta_purchase_note',
                'value' => '',
            ),
            327 => 
            array (
                'id' => 2318,
                'product_id' => 1172,
                'type' => 'string',
                'key' => 'meta_estimated_delivery',
                'value' => '15',
            ),
            328 => 
            array (
                'id' => 2319,
                'product_id' => 1172,
                'type' => 'string',
                'key' => 'meta_enable_reviews',
                'value' => '1',
            ),
            329 => 
            array (
                'id' => 2320,
                'product_id' => 1172,
                'type' => 'array',
                'key' => 'meta_seo',
                'value' => '{"title":"Gift Boxes for ring or bracelet without logo fit drop shipping Jewelry Package","description":"Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Donec rutrum congue leo eget malesuada. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.","image":"20221116/ba35eed70959b6000252f7fe9b440b72.jpg"}',
            ),
            330 => 
            array (
                'id' => 2321,
                'product_id' => 1172,
                'type' => 'array',
                'key' => 'meta_video_files',
                'value' => '[]',
            ),
            331 => 
            array (
                'id' => 2322,
                'product_id' => 1172,
                'type' => 'array',
                'key' => 'meta_video_url',
                'value' => '[]',
            ),
            332 => 
            array (
                'id' => 2323,
                'product_id' => 1173,
                'type' => 'array',
                'key' => 'meta_image',
                'value' => '["20221116/eee9bfdc90877d251ec67f766bd802c9.jpg","20221116/8c67a9dbf6551bd22b08188f63344f52.jpg","20221116/f7aac2e7f5d4697e6df1f5e0ba7858ed.jpg"]',
            ),
            333 => 
            array (
                'id' => 2324,
                'product_id' => 1173,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            334 => 
            array (
                'id' => 2325,
                'product_id' => 1173,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            335 => 
            array (
                'id' => 2326,
                'product_id' => 1173,
                'type' => 'array',
                'key' => 'meta_external_product',
                'value' => '{"url":"","text":""}',
            ),
            336 => 
            array (
                'id' => 2327,
                'product_id' => 1173,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            337 => 
            array (
                'id' => 2328,
                'product_id' => 1173,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            338 => 
            array (
                'id' => 2329,
                'product_id' => 1173,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            339 => 
            array (
                'id' => 2330,
                'product_id' => 1173,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => '',
            ),
            340 => 
            array (
                'id' => 2331,
                'product_id' => 1173,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            341 => 
            array (
                'id' => 2332,
                'product_id' => 1173,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            342 => 
            array (
                'id' => 2333,
                'product_id' => 1173,
                'type' => 'string',
                'key' => 'meta_hide_stock',
                'value' => '0',
            ),
            343 => 
            array (
                'id' => 2334,
                'product_id' => 1173,
                'type' => 'string',
                'key' => 'meta_stock_status',
                'value' => 'In Stock',
            ),
            344 => 
            array (
                'id' => 2335,
                'product_id' => 1173,
                'type' => 'string',
                'key' => 'meta_individual_sale',
                'value' => '0',
            ),
            345 => 
            array (
                'id' => 2336,
                'product_id' => 1173,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            346 => 
            array (
                'id' => 2337,
                'product_id' => 1173,
                'type' => 'string',
                'key' => 'meta_cash_on_delivery',
                'value' => '1',
            ),
            347 => 
            array (
                'id' => 2338,
                'product_id' => 1173,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            348 => 
            array (
                'id' => 2339,
                'product_id' => 1173,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            349 => 
            array (
                'id' => 2340,
                'product_id' => 1173,
                'type' => 'string',
                'key' => 'meta_warranty_type',
                'value' => 'No Warranty',
            ),
            350 => 
            array (
                'id' => 2341,
                'product_id' => 1173,
                'type' => 'string',
                'key' => 'meta_warranty_period',
                'value' => '',
            ),
            351 => 
            array (
                'id' => 2342,
                'product_id' => 1173,
                'type' => 'string',
                'key' => 'meta_warranty_policy',
                'value' => '',
            ),
            352 => 
            array (
                'id' => 2343,
                'product_id' => 1173,
                'type' => 'string',
                'key' => 'meta_purchase_note',
                'value' => '',
            ),
            353 => 
            array (
                'id' => 2344,
                'product_id' => 1173,
                'type' => 'string',
                'key' => 'meta_estimated_delivery',
                'value' => '15',
            ),
            354 => 
            array (
                'id' => 2345,
                'product_id' => 1173,
                'type' => 'string',
                'key' => 'meta_enable_reviews',
                'value' => '1',
            ),
            355 => 
            array (
                'id' => 2346,
                'product_id' => 1173,
                'type' => 'array',
                'key' => 'meta_seo',
                'value' => '{"title":"Velvet Jewelry Organizer Gift Small Bag Touching Plush Drawstring Packaging Storage","description":"Pellentesque in ipsum id orci porta dapibus. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Donec rutrum congue leo eget malesuada. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.","image":"20221116/eee9bfdc90877d251ec67f766bd802c9.jpg"}',
            ),
            356 => 
            array (
                'id' => 2347,
                'product_id' => 1173,
                'type' => 'array',
                'key' => 'meta_video_files',
                'value' => '[]',
            ),
            357 => 
            array (
                'id' => 2348,
                'product_id' => 1173,
                'type' => 'array',
                'key' => 'meta_video_url',
                'value' => '[]',
            ),
            358 => 
            array (
                'id' => 2349,
                'product_id' => 1174,
                'type' => 'array',
                'key' => 'meta_image',
                'value' => '["20221116/83d73390ba88a6390101c4d7a8766822.jpg","20221116/3d418353e7b238849c8675a20649caca.jpg","20221116/caa6ea61874ae4f54ee9cd5d0525147b.jpg","20221116/04f5788e13d4737267f1eb8a2ae7552f.jpg"]',
            ),
            359 => 
            array (
                'id' => 2350,
                'product_id' => 1174,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            360 => 
            array (
                'id' => 2351,
                'product_id' => 1174,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            361 => 
            array (
                'id' => 2352,
                'product_id' => 1174,
                'type' => 'array',
                'key' => 'meta_external_product',
                'value' => '{"url":"","text":""}',
            ),
            362 => 
            array (
                'id' => 2353,
                'product_id' => 1174,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            363 => 
            array (
                'id' => 2354,
                'product_id' => 1174,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            364 => 
            array (
                'id' => 2355,
                'product_id' => 1174,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            365 => 
            array (
                'id' => 2356,
                'product_id' => 1174,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            366 => 
            array (
                'id' => 2357,
                'product_id' => 1174,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            367 => 
            array (
                'id' => 2358,
                'product_id' => 1174,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            368 => 
            array (
                'id' => 2359,
                'product_id' => 1174,
                'type' => 'string',
                'key' => 'meta_hide_stock',
                'value' => '0',
            ),
            369 => 
            array (
                'id' => 2360,
                'product_id' => 1174,
                'type' => 'string',
                'key' => 'meta_stock_status',
                'value' => 'In Stock',
            ),
            370 => 
            array (
                'id' => 2361,
                'product_id' => 1174,
                'type' => 'string',
                'key' => 'meta_individual_sale',
                'value' => '0',
            ),
            371 => 
            array (
                'id' => 2362,
                'product_id' => 1174,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            372 => 
            array (
                'id' => 2363,
                'product_id' => 1174,
                'type' => 'string',
                'key' => 'meta_cash_on_delivery',
                'value' => '1',
            ),
            373 => 
            array (
                'id' => 2364,
                'product_id' => 1174,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '0.036',
            ),
            374 => 
            array (
                'id' => 2365,
                'product_id' => 1174,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            375 => 
            array (
                'id' => 2366,
                'product_id' => 1174,
                'type' => 'string',
                'key' => 'meta_warranty_type',
                'value' => 'No Warranty',
            ),
            376 => 
            array (
                'id' => 2367,
                'product_id' => 1174,
                'type' => 'string',
                'key' => 'meta_warranty_period',
                'value' => '',
            ),
            377 => 
            array (
                'id' => 2368,
                'product_id' => 1174,
                'type' => 'string',
                'key' => 'meta_warranty_policy',
                'value' => '',
            ),
            378 => 
            array (
                'id' => 2369,
                'product_id' => 1174,
                'type' => 'string',
                'key' => 'meta_purchase_note',
                'value' => '',
            ),
            379 => 
            array (
                'id' => 2370,
                'product_id' => 1174,
                'type' => 'string',
                'key' => 'meta_estimated_delivery',
                'value' => '7',
            ),
            380 => 
            array (
                'id' => 2371,
                'product_id' => 1174,
                'type' => 'string',
                'key' => 'meta_enable_reviews',
                'value' => '1',
            ),
            381 => 
            array (
                'id' => 2372,
                'product_id' => 1174,
                'type' => 'array',
                'key' => 'meta_seo',
                'value' => '{"title":"USB 2.0 Type A Female To Male Extension Extender Cable","description":"Nulla quis lorem ut libero malesuada feugiat. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Pellentesque in ipsum id orci porta dapibus.","image":"20221116/83d73390ba88a6390101c4d7a8766822.jpg"}',
            ),
            382 => 
            array (
                'id' => 2373,
                'product_id' => 1174,
                'type' => 'array',
                'key' => 'meta_video_files',
                'value' => '[]',
            ),
            383 => 
            array (
                'id' => 2374,
                'product_id' => 1174,
                'type' => 'array',
                'key' => 'meta_video_url',
                'value' => '[]',
            ),
            384 => 
            array (
                'id' => 2375,
                'product_id' => 1175,
                'type' => 'array',
                'key' => 'meta_image',
                'value' => '["20221116/3c313278885be29855a556b5e27e1aea.jpg","20221116/0c38cb55c64d092f786bdf803468e133.jpg","20221116/6c2e5da60065189b2f5650ac05dc224f.jpg","20221116/9526c3d8c62977c8330ecb6a7aa2182f.jpg"]',
            ),
            385 => 
            array (
                'id' => 2376,
                'product_id' => 1175,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            386 => 
            array (
                'id' => 2377,
                'product_id' => 1175,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            387 => 
            array (
                'id' => 2378,
                'product_id' => 1175,
                'type' => 'array',
                'key' => 'meta_external_product',
                'value' => '{"url":"","text":""}',
            ),
            388 => 
            array (
                'id' => 2379,
                'product_id' => 1175,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            389 => 
            array (
                'id' => 2380,
                'product_id' => 1175,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            390 => 
            array (
                'id' => 2381,
                'product_id' => 1175,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            391 => 
            array (
                'id' => 2382,
                'product_id' => 1175,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => '',
            ),
            392 => 
            array (
                'id' => 2383,
                'product_id' => 1175,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            393 => 
            array (
                'id' => 2384,
                'product_id' => 1175,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            394 => 
            array (
                'id' => 2385,
                'product_id' => 1175,
                'type' => 'string',
                'key' => 'meta_hide_stock',
                'value' => '0',
            ),
            395 => 
            array (
                'id' => 2386,
                'product_id' => 1175,
                'type' => 'string',
                'key' => 'meta_stock_status',
                'value' => 'In Stock',
            ),
            396 => 
            array (
                'id' => 2387,
                'product_id' => 1175,
                'type' => 'string',
                'key' => 'meta_individual_sale',
                'value' => '0',
            ),
            397 => 
            array (
                'id' => 2388,
                'product_id' => 1175,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            398 => 
            array (
                'id' => 2389,
                'product_id' => 1175,
                'type' => 'string',
                'key' => 'meta_cash_on_delivery',
                'value' => '1',
            ),
            399 => 
            array (
                'id' => 2390,
                'product_id' => 1175,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '0.030',
            ),
            400 => 
            array (
                'id' => 2391,
                'product_id' => 1175,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            401 => 
            array (
                'id' => 2392,
                'product_id' => 1175,
                'type' => 'string',
                'key' => 'meta_warranty_type',
                'value' => 'No Warranty',
            ),
            402 => 
            array (
                'id' => 2393,
                'product_id' => 1175,
                'type' => 'string',
                'key' => 'meta_warranty_period',
                'value' => '',
            ),
            403 => 
            array (
                'id' => 2394,
                'product_id' => 1175,
                'type' => 'string',
                'key' => 'meta_warranty_policy',
                'value' => '',
            ),
            404 => 
            array (
                'id' => 2395,
                'product_id' => 1175,
                'type' => 'string',
                'key' => 'meta_purchase_note',
                'value' => '',
            ),
            405 => 
            array (
                'id' => 2396,
                'product_id' => 1175,
                'type' => 'string',
                'key' => 'meta_estimated_delivery',
                'value' => '7',
            ),
            406 => 
            array (
                'id' => 2397,
                'product_id' => 1175,
                'type' => 'string',
                'key' => 'meta_enable_reviews',
                'value' => '1',
            ),
            407 => 
            array (
                'id' => 2398,
                'product_id' => 1175,
                'type' => 'array',
                'key' => 'meta_seo',
                'value' => '{"title":"USB Type C Cable 2 IN 1 Fast Charging Cord Data Sync Charger Line Speed Transfer","description":"Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.","image":"20221116/3c313278885be29855a556b5e27e1aea.jpg"}',
            ),
            408 => 
            array (
                'id' => 2399,
                'product_id' => 1175,
                'type' => 'array',
                'key' => 'meta_video_files',
                'value' => '[]',
            ),
            409 => 
            array (
                'id' => 2400,
                'product_id' => 1175,
                'type' => 'array',
                'key' => 'meta_video_url',
                'value' => '[]',
            ),
            410 => 
            array (
                'id' => 2401,
                'product_id' => 1176,
                'type' => 'array',
                'key' => 'meta_image',
                'value' => '["20221116/23c4d1b84785337722f69736b86ff959.jpg","20221116/8ab8e217f11a4ebdd04e6a6fe83f5c3a.jpg"]',
            ),
            411 => 
            array (
                'id' => 2402,
                'product_id' => 1176,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            412 => 
            array (
                'id' => 2403,
                'product_id' => 1176,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            413 => 
            array (
                'id' => 2404,
                'product_id' => 1176,
                'type' => 'array',
                'key' => 'meta_external_product',
                'value' => '{"url":"","text":""}',
            ),
            414 => 
            array (
                'id' => 2405,
                'product_id' => 1176,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            415 => 
            array (
                'id' => 2406,
                'product_id' => 1176,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            416 => 
            array (
                'id' => 2407,
                'product_id' => 1176,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            417 => 
            array (
                'id' => 2408,
                'product_id' => 1176,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            418 => 
            array (
                'id' => 2409,
                'product_id' => 1176,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            419 => 
            array (
                'id' => 2410,
                'product_id' => 1176,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            420 => 
            array (
                'id' => 2411,
                'product_id' => 1176,
                'type' => 'string',
                'key' => 'meta_hide_stock',
                'value' => '0',
            ),
            421 => 
            array (
                'id' => 2412,
                'product_id' => 1176,
                'type' => 'string',
                'key' => 'meta_stock_status',
                'value' => 'In Stock',
            ),
            422 => 
            array (
                'id' => 2413,
                'product_id' => 1176,
                'type' => 'string',
                'key' => 'meta_individual_sale',
                'value' => '0',
            ),
            423 => 
            array (
                'id' => 2414,
                'product_id' => 1176,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            424 => 
            array (
                'id' => 2415,
                'product_id' => 1176,
                'type' => 'string',
                'key' => 'meta_cash_on_delivery',
                'value' => '1',
            ),
            425 => 
            array (
                'id' => 2416,
                'product_id' => 1176,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '0.036',
            ),
            426 => 
            array (
                'id' => 2417,
                'product_id' => 1176,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            427 => 
            array (
                'id' => 2418,
                'product_id' => 1176,
                'type' => 'string',
                'key' => 'meta_warranty_type',
                'value' => 'No Warranty',
            ),
            428 => 
            array (
                'id' => 2419,
                'product_id' => 1176,
                'type' => 'string',
                'key' => 'meta_warranty_period',
                'value' => '',
            ),
            429 => 
            array (
                'id' => 2420,
                'product_id' => 1176,
                'type' => 'string',
                'key' => 'meta_warranty_policy',
                'value' => '',
            ),
            430 => 
            array (
                'id' => 2421,
                'product_id' => 1176,
                'type' => 'string',
                'key' => 'meta_purchase_note',
                'value' => '',
            ),
            431 => 
            array (
                'id' => 2422,
                'product_id' => 1176,
                'type' => 'string',
                'key' => 'meta_estimated_delivery',
                'value' => '7',
            ),
            432 => 
            array (
                'id' => 2423,
                'product_id' => 1176,
                'type' => 'string',
                'key' => 'meta_enable_reviews',
                'value' => '1',
            ),
            433 => 
            array (
                'id' => 2424,
                'product_id' => 1176,
                'type' => 'array',
                'key' => 'meta_seo',
                'value' => '{"title":"USB 3.0 Type A Female to A Female Connector Adapter AF to AF Coupler FF Gender Changer Extender Converter","description":"Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur aliquet quam id dui posuere blandit. Pellentesque in ipsum id orci porta dapibus. Proin eget tortor risus.","image":"20221116/23c4d1b84785337722f69736b86ff959.jpg"}',
            ),
            434 => 
            array (
                'id' => 2425,
                'product_id' => 1176,
                'type' => 'array',
                'key' => 'meta_video_files',
                'value' => '[]',
            ),
            435 => 
            array (
                'id' => 2426,
                'product_id' => 1176,
                'type' => 'array',
                'key' => 'meta_video_url',
                'value' => '[]',
            ),
            436 => 
            array (
                'id' => 2427,
                'product_id' => 1177,
                'type' => 'array',
                'key' => 'meta_image',
                'value' => '["20221116/12720eafbfded74f716406f2caa75ae4.jpg","20221116/cb6939c8a8bfa4d249654a4c6d45aa55.jpg"]',
            ),
            437 => 
            array (
                'id' => 2428,
                'product_id' => 1177,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            438 => 
            array (
                'id' => 2429,
                'product_id' => 1177,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            439 => 
            array (
                'id' => 2430,
                'product_id' => 1177,
                'type' => 'array',
                'key' => 'meta_external_product',
                'value' => '{"url":"","text":""}',
            ),
            440 => 
            array (
                'id' => 2431,
                'product_id' => 1177,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            441 => 
            array (
                'id' => 2432,
                'product_id' => 1177,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            442 => 
            array (
                'id' => 2433,
                'product_id' => 1177,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            443 => 
            array (
                'id' => 2434,
                'product_id' => 1177,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => '',
            ),
            444 => 
            array (
                'id' => 2435,
                'product_id' => 1177,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            445 => 
            array (
                'id' => 2436,
                'product_id' => 1177,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            446 => 
            array (
                'id' => 2437,
                'product_id' => 1177,
                'type' => 'string',
                'key' => 'meta_hide_stock',
                'value' => '0',
            ),
            447 => 
            array (
                'id' => 2438,
                'product_id' => 1177,
                'type' => 'string',
                'key' => 'meta_stock_status',
                'value' => 'In Stock',
            ),
            448 => 
            array (
                'id' => 2439,
                'product_id' => 1177,
                'type' => 'string',
                'key' => 'meta_individual_sale',
                'value' => '0',
            ),
            449 => 
            array (
                'id' => 2440,
                'product_id' => 1177,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            450 => 
            array (
                'id' => 2441,
                'product_id' => 1177,
                'type' => 'string',
                'key' => 'meta_cash_on_delivery',
                'value' => '1',
            ),
            451 => 
            array (
                'id' => 2442,
                'product_id' => 1177,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            452 => 
            array (
                'id' => 2443,
                'product_id' => 1177,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            453 => 
            array (
                'id' => 2444,
                'product_id' => 1177,
                'type' => 'string',
                'key' => 'meta_warranty_type',
                'value' => 'No Warranty',
            ),
            454 => 
            array (
                'id' => 2445,
                'product_id' => 1177,
                'type' => 'string',
                'key' => 'meta_warranty_period',
                'value' => '',
            ),
            455 => 
            array (
                'id' => 2446,
                'product_id' => 1177,
                'type' => 'string',
                'key' => 'meta_warranty_policy',
                'value' => '',
            ),
            456 => 
            array (
                'id' => 2447,
                'product_id' => 1177,
                'type' => 'string',
                'key' => 'meta_purchase_note',
                'value' => '',
            ),
            457 => 
            array (
                'id' => 2448,
                'product_id' => 1177,
                'type' => 'string',
                'key' => 'meta_estimated_delivery',
                'value' => '7',
            ),
            458 => 
            array (
                'id' => 2449,
                'product_id' => 1177,
                'type' => 'string',
                'key' => 'meta_enable_reviews',
                'value' => '1',
            ),
            459 => 
            array (
                'id' => 2450,
                'product_id' => 1177,
                'type' => 'array',
                'key' => 'meta_seo',
                'value' => '{"title":"USB Cable With Switch ONOFF Cable Extension Toggle For USB Lamp USB Fan Power Supply Line Durable","description":"Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Sed porttitor lectus nibh. Curabitur aliquet quam id dui posuere blandit. Sed porttitor lectus nibh.","image":"20221116/12720eafbfded74f716406f2caa75ae4.jpg"}',
            ),
            460 => 
            array (
                'id' => 2451,
                'product_id' => 1177,
                'type' => 'array',
                'key' => 'meta_video_files',
                'value' => '[]',
            ),
            461 => 
            array (
                'id' => 2452,
                'product_id' => 1177,
                'type' => 'array',
                'key' => 'meta_video_url',
                'value' => '[]',
            ),
            462 => 
            array (
                'id' => 2453,
                'product_id' => 1178,
                'type' => 'array',
                'key' => 'meta_image',
                'value' => '["20221116/2c6dcb0b6953482cd03b7dd6e754c51d.jpg","20221116/a8f3205751d743e0e08988429e1b86e7.jpg","20221116/5215d50c53b4b827e313fc525e52562a.jpg"]',
            ),
            463 => 
            array (
                'id' => 2454,
                'product_id' => 1178,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            464 => 
            array (
                'id' => 2455,
                'product_id' => 1178,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            465 => 
            array (
                'id' => 2456,
                'product_id' => 1178,
                'type' => 'array',
                'key' => 'meta_external_product',
                'value' => '{"url":"","text":""}',
            ),
            466 => 
            array (
                'id' => 2457,
                'product_id' => 1178,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            467 => 
            array (
                'id' => 2458,
                'product_id' => 1178,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            468 => 
            array (
                'id' => 2459,
                'product_id' => 1178,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            469 => 
            array (
                'id' => 2460,
                'product_id' => 1178,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => '',
            ),
            470 => 
            array (
                'id' => 2461,
                'product_id' => 1178,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            471 => 
            array (
                'id' => 2462,
                'product_id' => 1178,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            472 => 
            array (
                'id' => 2463,
                'product_id' => 1178,
                'type' => 'string',
                'key' => 'meta_hide_stock',
                'value' => '0',
            ),
            473 => 
            array (
                'id' => 2464,
                'product_id' => 1178,
                'type' => 'string',
                'key' => 'meta_stock_status',
                'value' => 'In Stock',
            ),
            474 => 
            array (
                'id' => 2465,
                'product_id' => 1178,
                'type' => 'string',
                'key' => 'meta_individual_sale',
                'value' => '0',
            ),
            475 => 
            array (
                'id' => 2466,
                'product_id' => 1178,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            476 => 
            array (
                'id' => 2467,
                'product_id' => 1178,
                'type' => 'string',
                'key' => 'meta_cash_on_delivery',
                'value' => '1',
            ),
            477 => 
            array (
                'id' => 2468,
                'product_id' => 1178,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            478 => 
            array (
                'id' => 2469,
                'product_id' => 1178,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            479 => 
            array (
                'id' => 2470,
                'product_id' => 1178,
                'type' => 'string',
                'key' => 'meta_warranty_type',
                'value' => 'Brand Warranty',
            ),
            480 => 
            array (
                'id' => 2471,
                'product_id' => 1178,
                'type' => 'string',
                'key' => 'meta_warranty_period',
                'value' => '6 months',
            ),
            481 => 
            array (
                'id' => 2472,
                'product_id' => 1178,
                'type' => 'string',
                'key' => 'meta_warranty_policy',
                'value' => 'Quisque velit nisi, pretium ut lacinia in, elementum id enim. Sed porttitor lectus nibh.',
            ),
            482 => 
            array (
                'id' => 2473,
                'product_id' => 1178,
                'type' => 'string',
                'key' => 'meta_purchase_note',
                'value' => '',
            ),
            483 => 
            array (
                'id' => 2474,
                'product_id' => 1178,
                'type' => 'string',
                'key' => 'meta_estimated_delivery',
                'value' => '7',
            ),
            484 => 
            array (
                'id' => 2475,
                'product_id' => 1178,
                'type' => 'string',
                'key' => 'meta_enable_reviews',
                'value' => '1',
            ),
            485 => 
            array (
                'id' => 2476,
                'product_id' => 1178,
                'type' => 'array',
                'key' => 'meta_seo',
                'value' => '{"title":"Smart Bracelet Sports Bracelet D13 Color Screen Bracelet Sports Pedometer Bluetooth Reminder Heart Rate Blood Pressure","description":"Donec sollicitudin molestie malesuada. Cras ultricies ligula sed magna dictum porta. Donec rutrum congue leo eget malesuada. Nulla porttitor accumsan tincidunt. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.","image":"20221116/2c6dcb0b6953482cd03b7dd6e754c51d.jpg"}',
            ),
            486 => 
            array (
                'id' => 2477,
                'product_id' => 1178,
                'type' => 'array',
                'key' => 'meta_video_files',
                'value' => '[]',
            ),
            487 => 
            array (
                'id' => 2478,
                'product_id' => 1178,
                'type' => 'array',
                'key' => 'meta_video_url',
                'value' => '[]',
            ),
            488 => 
            array (
                'id' => 2479,
                'product_id' => 1179,
                'type' => 'array',
                'key' => 'meta_image',
                'value' => '["20221116/682e61992be05b11e77a5a94e4aa9bc4.jpg","20221116/37e7c239a34e249fcc333662743194d0.jpg","20221116/539708ae11d94dbca0770e4da809b253.jpg","20221116/dc04c86a127d1967056f11dad17bbb1d.jpg"]',
            ),
            489 => 
            array (
                'id' => 2480,
                'product_id' => 1179,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            490 => 
            array (
                'id' => 2481,
                'product_id' => 1179,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            491 => 
            array (
                'id' => 2482,
                'product_id' => 1179,
                'type' => 'array',
                'key' => 'meta_external_product',
                'value' => '{"url":"","text":""}',
            ),
            492 => 
            array (
                'id' => 2483,
                'product_id' => 1179,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            493 => 
            array (
                'id' => 2484,
                'product_id' => 1179,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            494 => 
            array (
                'id' => 2485,
                'product_id' => 1179,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            495 => 
            array (
                'id' => 2486,
                'product_id' => 1179,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => '',
            ),
            496 => 
            array (
                'id' => 2487,
                'product_id' => 1179,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            497 => 
            array (
                'id' => 2488,
                'product_id' => 1179,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            498 => 
            array (
                'id' => 2489,
                'product_id' => 1179,
                'type' => 'string',
                'key' => 'meta_hide_stock',
                'value' => '0',
            ),
            499 => 
            array (
                'id' => 2490,
                'product_id' => 1179,
                'type' => 'string',
                'key' => 'meta_stock_status',
                'value' => 'In Stock',
            ),
        ));
        \DB::table('products_meta')->insert(array (
            0 => 
            array (
                'id' => 2491,
                'product_id' => 1179,
                'type' => 'string',
                'key' => 'meta_individual_sale',
                'value' => '0',
            ),
            1 => 
            array (
                'id' => 2492,
                'product_id' => 1179,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            2 => 
            array (
                'id' => 2493,
                'product_id' => 1179,
                'type' => 'string',
                'key' => 'meta_cash_on_delivery',
                'value' => '1',
            ),
            3 => 
            array (
                'id' => 2494,
                'product_id' => 1179,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '0.090',
            ),
            4 => 
            array (
                'id' => 2495,
                'product_id' => 1179,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"5","width":"2","height":"6"}',
            ),
            5 => 
            array (
                'id' => 2496,
                'product_id' => 1179,
                'type' => 'string',
                'key' => 'meta_warranty_type',
                'value' => 'No Warranty',
            ),
            6 => 
            array (
                'id' => 2497,
                'product_id' => 1179,
                'type' => 'string',
                'key' => 'meta_warranty_period',
                'value' => '',
            ),
            7 => 
            array (
                'id' => 2498,
                'product_id' => 1179,
                'type' => 'string',
                'key' => 'meta_warranty_policy',
                'value' => '',
            ),
            8 => 
            array (
                'id' => 2499,
                'product_id' => 1179,
                'type' => 'string',
                'key' => 'meta_purchase_note',
                'value' => '',
            ),
            9 => 
            array (
                'id' => 2500,
                'product_id' => 1179,
                'type' => 'string',
                'key' => 'meta_estimated_delivery',
                'value' => '7',
            ),
            10 => 
            array (
                'id' => 2501,
                'product_id' => 1179,
                'type' => 'string',
                'key' => 'meta_enable_reviews',
                'value' => '1',
            ),
            11 => 
            array (
                'id' => 2502,
                'product_id' => 1179,
                'type' => 'array',
                'key' => 'meta_seo',
                'value' => '{"title":"Tumbler Dinosaur Egg Multi-colors Virtual Cyber Digital Pet Game Toy Tamagotchis Digital Electronic E-Pet","description":"Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Donec sollicitudin molestie malesuada. Nulla quis lorem ut libero malesuada feugiat. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Donec sollicitudin molestie malesuada.","image":"20221116/682e61992be05b11e77a5a94e4aa9bc4.jpg"}',
            ),
            12 => 
            array (
                'id' => 2503,
                'product_id' => 1179,
                'type' => 'array',
                'key' => 'meta_video_files',
                'value' => '[]',
            ),
            13 => 
            array (
                'id' => 2504,
                'product_id' => 1179,
                'type' => 'array',
                'key' => 'meta_video_url',
                'value' => '[]',
            ),
            14 => 
            array (
                'id' => 2505,
                'product_id' => 1180,
                'type' => 'array',
                'key' => 'meta_image',
                'value' => '["20221116/12a3bfa2188bc16c1bbabbe2c69553ff.jpg","20221116/b99d3148de455940d1d4ac4a943f1e88.jpg","20221116/be6e9408affa6ce6a6da8a19c99a92aa.jpg","20221116/4709673eec4646705e96c8e4de30dff5.jpg"]',
            ),
            15 => 
            array (
                'id' => 2506,
                'product_id' => 1180,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            16 => 
            array (
                'id' => 2507,
                'product_id' => 1180,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            17 => 
            array (
                'id' => 2508,
                'product_id' => 1180,
                'type' => 'array',
                'key' => 'meta_external_product',
                'value' => '{"url":"","text":""}',
            ),
            18 => 
            array (
                'id' => 2509,
                'product_id' => 1180,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            19 => 
            array (
                'id' => 2510,
                'product_id' => 1180,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            20 => 
            array (
                'id' => 2511,
                'product_id' => 1180,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            21 => 
            array (
                'id' => 2512,
                'product_id' => 1180,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => '',
            ),
            22 => 
            array (
                'id' => 2513,
                'product_id' => 1180,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            23 => 
            array (
                'id' => 2514,
                'product_id' => 1180,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            24 => 
            array (
                'id' => 2515,
                'product_id' => 1180,
                'type' => 'string',
                'key' => 'meta_hide_stock',
                'value' => '0',
            ),
            25 => 
            array (
                'id' => 2516,
                'product_id' => 1180,
                'type' => 'string',
                'key' => 'meta_stock_status',
                'value' => 'In Stock',
            ),
            26 => 
            array (
                'id' => 2517,
                'product_id' => 1180,
                'type' => 'string',
                'key' => 'meta_individual_sale',
                'value' => '0',
            ),
            27 => 
            array (
                'id' => 2518,
                'product_id' => 1180,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            28 => 
            array (
                'id' => 2519,
                'product_id' => 1180,
                'type' => 'string',
                'key' => 'meta_cash_on_delivery',
                'value' => '1',
            ),
            29 => 
            array (
                'id' => 2520,
                'product_id' => 1180,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '0.037',
            ),
            30 => 
            array (
                'id' => 2521,
                'product_id' => 1180,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"48","width":"36","height":"12"}',
            ),
            31 => 
            array (
                'id' => 2522,
                'product_id' => 1180,
                'type' => 'string',
                'key' => 'meta_warranty_type',
                'value' => 'No Warranty',
            ),
            32 => 
            array (
                'id' => 2523,
                'product_id' => 1180,
                'type' => 'string',
                'key' => 'meta_warranty_period',
                'value' => '',
            ),
            33 => 
            array (
                'id' => 2524,
                'product_id' => 1180,
                'type' => 'string',
                'key' => 'meta_warranty_policy',
                'value' => '',
            ),
            34 => 
            array (
                'id' => 2525,
                'product_id' => 1180,
                'type' => 'string',
                'key' => 'meta_purchase_note',
                'value' => '',
            ),
            35 => 
            array (
                'id' => 2526,
                'product_id' => 1180,
                'type' => 'string',
                'key' => 'meta_estimated_delivery',
                'value' => '7',
            ),
            36 => 
            array (
                'id' => 2527,
                'product_id' => 1180,
                'type' => 'string',
                'key' => 'meta_enable_reviews',
                'value' => '1',
            ),
            37 => 
            array (
                'id' => 2528,
                'product_id' => 1180,
                'type' => 'array',
                'key' => 'meta_seo',
                'value' => '{"title":"Smartwatch Men Support 118 Sports Women Smart Watch","description":"Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Nulla porttitor accumsan tincidunt. Sed porttitor lectus nibh. Sed porttitor lectus nibh.","image":"20221116/12a3bfa2188bc16c1bbabbe2c69553ff.jpg"}',
            ),
            38 => 
            array (
                'id' => 2529,
                'product_id' => 1180,
                'type' => 'array',
                'key' => 'meta_video_files',
                'value' => '[]',
            ),
            39 => 
            array (
                'id' => 2530,
                'product_id' => 1180,
                'type' => 'array',
                'key' => 'meta_video_url',
                'value' => '[]',
            ),
            40 => 
            array (
                'id' => 2531,
                'product_id' => 1181,
                'type' => 'array',
                'key' => 'meta_image',
                'value' => '["20221116/f0851afdf3e11c911cf6f2202adb68d8.jpg","20221116/2a0a8309baa254d6b9c21389cbe0e799.jpg"]',
            ),
            41 => 
            array (
                'id' => 2532,
                'product_id' => 1181,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            42 => 
            array (
                'id' => 2533,
                'product_id' => 1181,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            43 => 
            array (
                'id' => 2534,
                'product_id' => 1181,
                'type' => 'array',
                'key' => 'meta_external_product',
                'value' => '{"url":"","text":""}',
            ),
            44 => 
            array (
                'id' => 2535,
                'product_id' => 1181,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            45 => 
            array (
                'id' => 2536,
                'product_id' => 1181,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            46 => 
            array (
                'id' => 2537,
                'product_id' => 1181,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            47 => 
            array (
                'id' => 2538,
                'product_id' => 1181,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            48 => 
            array (
                'id' => 2539,
                'product_id' => 1181,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            49 => 
            array (
                'id' => 2540,
                'product_id' => 1181,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            50 => 
            array (
                'id' => 2541,
                'product_id' => 1181,
                'type' => 'string',
                'key' => 'meta_hide_stock',
                'value' => '0',
            ),
            51 => 
            array (
                'id' => 2542,
                'product_id' => 1181,
                'type' => 'string',
                'key' => 'meta_stock_status',
                'value' => 'In Stock',
            ),
            52 => 
            array (
                'id' => 2543,
                'product_id' => 1181,
                'type' => 'string',
                'key' => 'meta_individual_sale',
                'value' => '0',
            ),
            53 => 
            array (
                'id' => 2544,
                'product_id' => 1181,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            54 => 
            array (
                'id' => 2545,
                'product_id' => 1181,
                'type' => 'string',
                'key' => 'meta_cash_on_delivery',
                'value' => '1',
            ),
            55 => 
            array (
                'id' => 2546,
                'product_id' => 1181,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            56 => 
            array (
                'id' => 2547,
                'product_id' => 1181,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            57 => 
            array (
                'id' => 2548,
                'product_id' => 1181,
                'type' => 'string',
                'key' => 'meta_warranty_type',
                'value' => 'Brand Warranty',
            ),
            58 => 
            array (
                'id' => 2549,
                'product_id' => 1181,
                'type' => 'string',
                'key' => 'meta_warranty_period',
                'value' => '3 years',
            ),
            59 => 
            array (
                'id' => 2550,
                'product_id' => 1181,
                'type' => 'string',
                'key' => 'meta_warranty_policy',
                'value' => '',
            ),
            60 => 
            array (
                'id' => 2551,
                'product_id' => 1181,
                'type' => 'string',
                'key' => 'meta_purchase_note',
                'value' => '',
            ),
            61 => 
            array (
                'id' => 2552,
                'product_id' => 1181,
                'type' => 'string',
                'key' => 'meta_estimated_delivery',
                'value' => '7',
            ),
            62 => 
            array (
                'id' => 2553,
                'product_id' => 1181,
                'type' => 'string',
                'key' => 'meta_enable_reviews',
                'value' => '1',
            ),
            63 => 
            array (
                'id' => 2554,
                'product_id' => 1181,
                'type' => 'array',
                'key' => 'meta_seo',
                'value' => '{"title":"GK3V Mini PC Intel Celeron J4125N5105 8GB DDR4 128GB256GB Windows 10 Pro Gaming Computer, 4K 60Hz HDMI VGA","description":"Nulla porttitor accumsan tincidunt. Pellentesque in ipsum id orci porta dapibus. Nulla quis lorem ut libero malesuada feugiat. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Proin eget tortor risus.","image":"20221116/f0851afdf3e11c911cf6f2202adb68d8.jpg"}',
            ),
            64 => 
            array (
                'id' => 2555,
                'product_id' => 1181,
                'type' => 'array',
                'key' => 'meta_video_files',
                'value' => '[]',
            ),
            65 => 
            array (
                'id' => 2556,
                'product_id' => 1181,
                'type' => 'array',
                'key' => 'meta_video_url',
                'value' => '[]',
            ),
            66 => 
            array (
                'id' => 2557,
                'product_id' => 1182,
                'type' => 'array',
                'key' => 'meta_image',
                'value' => '["20221116/31e679efa10c38424385f024b4da4a37.jpg","20221116/5f0e01e0e4e042d076271f0f07aba751.jpg","20221116/b290bcbc6a0e890c72bc97bcff37c302.jpg"]',
            ),
            67 => 
            array (
                'id' => 2558,
                'product_id' => 1182,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            68 => 
            array (
                'id' => 2559,
                'product_id' => 1182,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            69 => 
            array (
                'id' => 2560,
                'product_id' => 1182,
                'type' => 'array',
                'key' => 'meta_external_product',
                'value' => '{"url":"","text":""}',
            ),
            70 => 
            array (
                'id' => 2561,
                'product_id' => 1182,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            71 => 
            array (
                'id' => 2562,
                'product_id' => 1182,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            72 => 
            array (
                'id' => 2563,
                'product_id' => 1182,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            73 => 
            array (
                'id' => 2564,
                'product_id' => 1182,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => '',
            ),
            74 => 
            array (
                'id' => 2565,
                'product_id' => 1182,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            75 => 
            array (
                'id' => 2566,
                'product_id' => 1182,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            76 => 
            array (
                'id' => 2567,
                'product_id' => 1182,
                'type' => 'string',
                'key' => 'meta_hide_stock',
                'value' => '0',
            ),
            77 => 
            array (
                'id' => 2568,
                'product_id' => 1182,
                'type' => 'string',
                'key' => 'meta_stock_status',
                'value' => 'In Stock',
            ),
            78 => 
            array (
                'id' => 2569,
                'product_id' => 1182,
                'type' => 'string',
                'key' => 'meta_individual_sale',
                'value' => '0',
            ),
            79 => 
            array (
                'id' => 2570,
                'product_id' => 1182,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            80 => 
            array (
                'id' => 2571,
                'product_id' => 1182,
                'type' => 'string',
                'key' => 'meta_cash_on_delivery',
                'value' => '1',
            ),
            81 => 
            array (
                'id' => 2572,
                'product_id' => 1182,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '0.400',
            ),
            82 => 
            array (
                'id' => 2573,
                'product_id' => 1182,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"107","width":"40","height":"14"}',
            ),
            83 => 
            array (
                'id' => 2574,
                'product_id' => 1182,
                'type' => 'string',
                'key' => 'meta_warranty_type',
                'value' => 'Brand Warranty',
            ),
            84 => 
            array (
                'id' => 2575,
                'product_id' => 1182,
                'type' => 'string',
                'key' => 'meta_warranty_period',
                'value' => '3 years',
            ),
            85 => 
            array (
                'id' => 2576,
                'product_id' => 1182,
                'type' => 'string',
                'key' => 'meta_warranty_policy',
                'value' => 'Vivamus suscipit tortor eget felis porttitor volutpat. Vivamus suscipit tortor eget felis porttitor volutpat.',
            ),
            86 => 
            array (
                'id' => 2577,
                'product_id' => 1182,
                'type' => 'string',
                'key' => 'meta_purchase_note',
                'value' => '',
            ),
            87 => 
            array (
                'id' => 2578,
                'product_id' => 1182,
                'type' => 'string',
                'key' => 'meta_estimated_delivery',
                'value' => '7',
            ),
            88 => 
            array (
                'id' => 2579,
                'product_id' => 1182,
                'type' => 'string',
                'key' => 'meta_enable_reviews',
                'value' => '1',
            ),
            89 => 
            array (
                'id' => 2580,
                'product_id' => 1182,
                'type' => 'array',
                'key' => 'meta_seo',
                'value' => '{"title":"NVME Case Aluminum M2 to USB 3.1 Gen 2 10Gbps PCIe Type C SSD M.2 Enclosure Portable Box","description":"Donec rutrum congue leo eget malesuada. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Donec rutrum congue leo eget malesuada. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.","image":"20221116/31e679efa10c38424385f024b4da4a37.jpg"}',
            ),
            90 => 
            array (
                'id' => 2581,
                'product_id' => 1182,
                'type' => 'array',
                'key' => 'meta_video_files',
                'value' => '[]',
            ),
            91 => 
            array (
                'id' => 2582,
                'product_id' => 1182,
                'type' => 'array',
                'key' => 'meta_video_url',
                'value' => '["https:\\/\\/player.vimeo.com\\/video\\/330420305?h=0c269f7e82&color=f7f7f7&title=0&byline=0&portrait=0"]',
            ),
            92 => 
            array (
                'id' => 2583,
                'product_id' => 1183,
                'type' => 'array',
                'key' => 'meta_image',
                'value' => '["20221116/8e4f7f9cffd21f3f267147d2cf3e79b1.jpg"]',
            ),
            93 => 
            array (
                'id' => 2584,
                'product_id' => 1183,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            94 => 
            array (
                'id' => 2585,
                'product_id' => 1183,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            95 => 
            array (
                'id' => 2586,
                'product_id' => 1183,
                'type' => 'array',
                'key' => 'meta_external_product',
                'value' => '{"url":"","text":""}',
            ),
            96 => 
            array (
                'id' => 2587,
                'product_id' => 1183,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            97 => 
            array (
                'id' => 2588,
                'product_id' => 1183,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            98 => 
            array (
                'id' => 2589,
                'product_id' => 1183,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            99 => 
            array (
                'id' => 2590,
                'product_id' => 1183,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            100 => 
            array (
                'id' => 2591,
                'product_id' => 1183,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            101 => 
            array (
                'id' => 2592,
                'product_id' => 1183,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            102 => 
            array (
                'id' => 2593,
                'product_id' => 1183,
                'type' => 'string',
                'key' => 'meta_hide_stock',
                'value' => '0',
            ),
            103 => 
            array (
                'id' => 2594,
                'product_id' => 1183,
                'type' => 'string',
                'key' => 'meta_stock_status',
                'value' => 'In Stock',
            ),
            104 => 
            array (
                'id' => 2595,
                'product_id' => 1183,
                'type' => 'string',
                'key' => 'meta_individual_sale',
                'value' => '0',
            ),
            105 => 
            array (
                'id' => 2596,
                'product_id' => 1183,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            106 => 
            array (
                'id' => 2597,
                'product_id' => 1183,
                'type' => 'string',
                'key' => 'meta_cash_on_delivery',
                'value' => '1',
            ),
            107 => 
            array (
                'id' => 2598,
                'product_id' => 1183,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '0.09',
            ),
            108 => 
            array (
                'id' => 2599,
                'product_id' => 1183,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"58","width":"17","height":"7"}',
            ),
            109 => 
            array (
                'id' => 2600,
                'product_id' => 1183,
                'type' => 'string',
                'key' => 'meta_warranty_type',
                'value' => 'Brand Warranty',
            ),
            110 => 
            array (
                'id' => 2601,
                'product_id' => 1183,
                'type' => 'string',
                'key' => 'meta_warranty_period',
                'value' => 'Lifetime',
            ),
            111 => 
            array (
                'id' => 2602,
                'product_id' => 1183,
                'type' => 'string',
                'key' => 'meta_warranty_policy',
                'value' => 'Pellentesque in ipsum id orci porta dapibus. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.',
            ),
            112 => 
            array (
                'id' => 2603,
                'product_id' => 1183,
                'type' => 'string',
                'key' => 'meta_purchase_note',
                'value' => '',
            ),
            113 => 
            array (
                'id' => 2604,
                'product_id' => 1183,
                'type' => 'string',
                'key' => 'meta_estimated_delivery',
                'value' => '7',
            ),
            114 => 
            array (
                'id' => 2605,
                'product_id' => 1183,
                'type' => 'string',
                'key' => 'meta_enable_reviews',
                'value' => '1',
            ),
            115 => 
            array (
                'id' => 2606,
                'product_id' => 1183,
                'type' => 'array',
                'key' => 'meta_seo',
                'value' => '{"title":"USB 2.0 Flash Pen Drive 32GB 16GB 64GB 128GB Squid Game Cle Usb Memorys Cards","description":"Sed porttitor lectus nibh. Proin eget tortor risus. Curabitur aliquet quam id dui posuere blandit. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.","image":"20221116/8e4f7f9cffd21f3f267147d2cf3e79b1.jpg"}',
            ),
            116 => 
            array (
                'id' => 2607,
                'product_id' => 1183,
                'type' => 'array',
                'key' => 'meta_video_files',
                'value' => '[]',
            ),
            117 => 
            array (
                'id' => 2608,
                'product_id' => 1183,
                'type' => 'array',
                'key' => 'meta_video_url',
                'value' => '["https:\\/\\/player.vimeo.com\\/video\\/330420305?h=0c269f7e82&color=f7f7f7&title=0&byline=0&portrait=0"]',
            ),
            118 => 
            array (
                'id' => 2609,
                'product_id' => 1184,
                'type' => 'array',
                'key' => 'meta_image',
                'value' => '["20221116/1fbd86ffd210e250d46cce02433b5f5a.jpg","20221116/10ec4be90e74462efad15f3f79076b62.jpg"]',
            ),
            119 => 
            array (
                'id' => 2610,
                'product_id' => 1184,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            120 => 
            array (
                'id' => 2611,
                'product_id' => 1184,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            121 => 
            array (
                'id' => 2612,
                'product_id' => 1184,
                'type' => 'array',
                'key' => 'meta_external_product',
                'value' => '{"url":"","text":""}',
            ),
            122 => 
            array (
                'id' => 2613,
                'product_id' => 1184,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            123 => 
            array (
                'id' => 2614,
                'product_id' => 1184,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            124 => 
            array (
                'id' => 2615,
                'product_id' => 1184,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            125 => 
            array (
                'id' => 2616,
                'product_id' => 1184,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            126 => 
            array (
                'id' => 2617,
                'product_id' => 1184,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            127 => 
            array (
                'id' => 2618,
                'product_id' => 1184,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            128 => 
            array (
                'id' => 2619,
                'product_id' => 1184,
                'type' => 'string',
                'key' => 'meta_hide_stock',
                'value' => '0',
            ),
            129 => 
            array (
                'id' => 2620,
                'product_id' => 1184,
                'type' => 'string',
                'key' => 'meta_stock_status',
                'value' => 'In Stock',
            ),
            130 => 
            array (
                'id' => 2621,
                'product_id' => 1184,
                'type' => 'string',
                'key' => 'meta_individual_sale',
                'value' => '0',
            ),
            131 => 
            array (
                'id' => 2622,
                'product_id' => 1184,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            132 => 
            array (
                'id' => 2623,
                'product_id' => 1184,
                'type' => 'string',
                'key' => 'meta_cash_on_delivery',
                'value' => '1',
            ),
            133 => 
            array (
                'id' => 2624,
                'product_id' => 1184,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            134 => 
            array (
                'id' => 2625,
                'product_id' => 1184,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            135 => 
            array (
                'id' => 2626,
                'product_id' => 1184,
                'type' => 'string',
                'key' => 'meta_warranty_type',
                'value' => 'No Warranty',
            ),
            136 => 
            array (
                'id' => 2627,
                'product_id' => 1184,
                'type' => 'string',
                'key' => 'meta_warranty_period',
                'value' => '',
            ),
            137 => 
            array (
                'id' => 2628,
                'product_id' => 1184,
                'type' => 'string',
                'key' => 'meta_warranty_policy',
                'value' => '',
            ),
            138 => 
            array (
                'id' => 2629,
                'product_id' => 1184,
                'type' => 'string',
                'key' => 'meta_purchase_note',
                'value' => '',
            ),
            139 => 
            array (
                'id' => 2630,
                'product_id' => 1184,
                'type' => 'string',
                'key' => 'meta_estimated_delivery',
                'value' => '7',
            ),
            140 => 
            array (
                'id' => 2631,
                'product_id' => 1184,
                'type' => 'string',
                'key' => 'meta_enable_reviews',
                'value' => '1',
            ),
            141 => 
            array (
                'id' => 2632,
                'product_id' => 1184,
                'type' => 'array',
                'key' => 'meta_seo',
                'value' => '{"title":"Portable USB male-to-female interface data cable, retractable data synchronization charger cable for Android","description":"Proin eget tortor risus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Donec rutrum congue leo eget malesuada. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.","image":"20221116/1fbd86ffd210e250d46cce02433b5f5a.jpg"}',
            ),
            142 => 
            array (
                'id' => 2633,
                'product_id' => 1184,
                'type' => 'array',
                'key' => 'meta_video_files',
                'value' => '[]',
            ),
            143 => 
            array (
                'id' => 2634,
                'product_id' => 1184,
                'type' => 'array',
                'key' => 'meta_video_url',
                'value' => '[]',
            ),
            144 => 
            array (
                'id' => 2635,
                'product_id' => 1185,
                'type' => 'array',
                'key' => 'meta_image',
                'value' => '["20221116/fa07c364ad08b1923ede92071f798345.jpg","20221116/2d5ed2e57112efcfc843776788a92e2d.jpg"]',
            ),
            145 => 
            array (
                'id' => 2636,
                'product_id' => 1185,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            146 => 
            array (
                'id' => 2637,
                'product_id' => 1185,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            147 => 
            array (
                'id' => 2638,
                'product_id' => 1185,
                'type' => 'array',
                'key' => 'meta_external_product',
                'value' => '{"url":"","text":""}',
            ),
            148 => 
            array (
                'id' => 2639,
                'product_id' => 1185,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            149 => 
            array (
                'id' => 2640,
                'product_id' => 1185,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            150 => 
            array (
                'id' => 2641,
                'product_id' => 1185,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            151 => 
            array (
                'id' => 2642,
                'product_id' => 1185,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            152 => 
            array (
                'id' => 2643,
                'product_id' => 1185,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            153 => 
            array (
                'id' => 2644,
                'product_id' => 1185,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            154 => 
            array (
                'id' => 2645,
                'product_id' => 1185,
                'type' => 'string',
                'key' => 'meta_hide_stock',
                'value' => '0',
            ),
            155 => 
            array (
                'id' => 2646,
                'product_id' => 1185,
                'type' => 'string',
                'key' => 'meta_stock_status',
                'value' => 'In Stock',
            ),
            156 => 
            array (
                'id' => 2647,
                'product_id' => 1185,
                'type' => 'string',
                'key' => 'meta_individual_sale',
                'value' => '0',
            ),
            157 => 
            array (
                'id' => 2648,
                'product_id' => 1185,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            158 => 
            array (
                'id' => 2649,
                'product_id' => 1185,
                'type' => 'string',
                'key' => 'meta_cash_on_delivery',
                'value' => '1',
            ),
            159 => 
            array (
                'id' => 2650,
                'product_id' => 1185,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            160 => 
            array (
                'id' => 2651,
                'product_id' => 1185,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            161 => 
            array (
                'id' => 2652,
                'product_id' => 1185,
                'type' => 'string',
                'key' => 'meta_warranty_type',
                'value' => 'Brand Warranty',
            ),
            162 => 
            array (
                'id' => 2653,
                'product_id' => 1185,
                'type' => 'string',
                'key' => 'meta_warranty_period',
                'value' => '3 years',
            ),
            163 => 
            array (
                'id' => 2654,
                'product_id' => 1185,
                'type' => 'string',
                'key' => 'meta_warranty_policy',
                'value' => 'Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.',
            ),
            164 => 
            array (
                'id' => 2655,
                'product_id' => 1185,
                'type' => 'string',
                'key' => 'meta_purchase_note',
                'value' => '',
            ),
            165 => 
            array (
                'id' => 2656,
                'product_id' => 1185,
                'type' => 'string',
                'key' => 'meta_estimated_delivery',
                'value' => '7',
            ),
            166 => 
            array (
                'id' => 2657,
                'product_id' => 1185,
                'type' => 'string',
                'key' => 'meta_enable_reviews',
                'value' => '1',
            ),
            167 => 
            array (
                'id' => 2658,
                'product_id' => 1185,
                'type' => 'array',
                'key' => 'meta_seo',
                'value' => '{"title":"Cartoon Camera Children\'s Camera 240W Pixel Mini Camera Toy Camera","description":"Sed porttitor lectus nibh. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Curabitur aliquet quam id dui posuere blandit.","image":"20221116/fa07c364ad08b1923ede92071f798345.jpg"}',
            ),
            168 => 
            array (
                'id' => 2659,
                'product_id' => 1185,
                'type' => 'array',
                'key' => 'meta_video_files',
                'value' => '[]',
            ),
            169 => 
            array (
                'id' => 2660,
                'product_id' => 1185,
                'type' => 'array',
                'key' => 'meta_video_url',
                'value' => '[]',
            ),
            170 => 
            array (
                'id' => 2661,
                'product_id' => 1186,
                'type' => 'array',
                'key' => 'meta_image',
                'value' => '["20221116/79e421bbcb090394f511aa53c47bd6b7.jpg","20221116/7de7dd441ea5a71a0e73635a8e6fe7da.jpg","20221116/0b023fa29dbf7e236f9aa1ed011ebb92.jpg","20221116/1613dcb74adf575d1ccd3eb35b958019.jpg","20221116/920a60aa5244194dae430dc8b8b758fb.jpg","20221116/a9ff70f7c6b5d8e03f71bb375772e449.jpg"]',
            ),
            171 => 
            array (
                'id' => 2662,
                'product_id' => 1186,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            172 => 
            array (
                'id' => 2663,
                'product_id' => 1186,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            173 => 
            array (
                'id' => 2664,
                'product_id' => 1186,
                'type' => 'array',
                'key' => 'meta_external_product',
                'value' => '{"url":"","text":""}',
            ),
            174 => 
            array (
                'id' => 2665,
                'product_id' => 1186,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            175 => 
            array (
                'id' => 2666,
                'product_id' => 1186,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            176 => 
            array (
                'id' => 2667,
                'product_id' => 1186,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            177 => 
            array (
                'id' => 2668,
                'product_id' => 1186,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => '',
            ),
            178 => 
            array (
                'id' => 2669,
                'product_id' => 1186,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            179 => 
            array (
                'id' => 2670,
                'product_id' => 1186,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '',
            ),
            180 => 
            array (
                'id' => 2671,
                'product_id' => 1186,
                'type' => 'string',
                'key' => 'meta_hide_stock',
                'value' => '0',
            ),
            181 => 
            array (
                'id' => 2672,
                'product_id' => 1186,
                'type' => 'string',
                'key' => 'meta_stock_status',
                'value' => 'In Stock',
            ),
            182 => 
            array (
                'id' => 2673,
                'product_id' => 1186,
                'type' => 'string',
                'key' => 'meta_individual_sale',
                'value' => '0',
            ),
            183 => 
            array (
                'id' => 2674,
                'product_id' => 1186,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            184 => 
            array (
                'id' => 2675,
                'product_id' => 1186,
                'type' => 'string',
                'key' => 'meta_cash_on_delivery',
                'value' => '1',
            ),
            185 => 
            array (
                'id' => 2676,
                'product_id' => 1186,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '0.400',
            ),
            186 => 
            array (
                'id' => 2677,
                'product_id' => 1186,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            187 => 
            array (
                'id' => 2678,
                'product_id' => 1186,
                'type' => 'string',
                'key' => 'meta_warranty_type',
                'value' => 'Brand Warranty',
            ),
            188 => 
            array (
                'id' => 2679,
                'product_id' => 1186,
                'type' => 'string',
                'key' => 'meta_warranty_period',
                'value' => '1 year',
            ),
            189 => 
            array (
                'id' => 2680,
                'product_id' => 1186,
                'type' => 'string',
                'key' => 'meta_warranty_policy',
                'value' => 'Proin eget tortor risus. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.',
            ),
            190 => 
            array (
                'id' => 2681,
                'product_id' => 1186,
                'type' => 'string',
                'key' => 'meta_purchase_note',
                'value' => '',
            ),
            191 => 
            array (
                'id' => 2682,
                'product_id' => 1186,
                'type' => 'string',
                'key' => 'meta_estimated_delivery',
                'value' => '7',
            ),
            192 => 
            array (
                'id' => 2683,
                'product_id' => 1186,
                'type' => 'string',
                'key' => 'meta_enable_reviews',
                'value' => '1',
            ),
            193 => 
            array (
                'id' => 2684,
                'product_id' => 1186,
                'type' => 'array',
                'key' => 'meta_seo',
                'value' => '{"title":"Anti-Drop AirPods1 2 Silicone Bluetooth Compatible Earphone Cover Air Pods","description":"Quisque velit nisi, pretium ut lacinia in, elementum id enim. Curabitur aliquet quam id dui posuere blandit. Nulla quis lorem ut libero malesuada feugiat. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Proin eget tortor risus.","image":"20221116/79e421bbcb090394f511aa53c47bd6b7.jpg"}',
            ),
            194 => 
            array (
                'id' => 2685,
                'product_id' => 1186,
                'type' => 'array',
                'key' => 'meta_video_files',
                'value' => '[]',
            ),
            195 => 
            array (
                'id' => 2686,
                'product_id' => 1186,
                'type' => 'array',
                'key' => 'meta_video_url',
                'value' => '[]',
            ),
            196 => 
            array (
                'id' => 2687,
                'product_id' => 1187,
                'type' => 'array',
                'key' => 'meta_image',
                'value' => '["20221120/139e75ab56c02c8e35cac98c4f6ea812.jpg"]',
            ),
            197 => 
            array (
                'id' => 2688,
                'product_id' => 1187,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            198 => 
            array (
                'id' => 2689,
                'product_id' => 1187,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            199 => 
            array (
                'id' => 2690,
                'product_id' => 1187,
                'type' => 'array',
                'key' => 'meta_external_product',
                'value' => '{"url":"","text":""}',
            ),
            200 => 
            array (
                'id' => 2691,
                'product_id' => 1187,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            201 => 
            array (
                'id' => 2692,
                'product_id' => 1187,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            202 => 
            array (
                'id' => 2693,
                'product_id' => 1187,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            203 => 
            array (
                'id' => 2694,
                'product_id' => 1187,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => '',
            ),
            204 => 
            array (
                'id' => 2695,
                'product_id' => 1187,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            205 => 
            array (
                'id' => 2696,
                'product_id' => 1187,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            206 => 
            array (
                'id' => 2697,
                'product_id' => 1187,
                'type' => 'string',
                'key' => 'meta_hide_stock',
                'value' => '0',
            ),
            207 => 
            array (
                'id' => 2698,
                'product_id' => 1187,
                'type' => 'string',
                'key' => 'meta_stock_status',
                'value' => 'In Stock',
            ),
            208 => 
            array (
                'id' => 2699,
                'product_id' => 1187,
                'type' => 'string',
                'key' => 'meta_individual_sale',
                'value' => '0',
            ),
            209 => 
            array (
                'id' => 2700,
                'product_id' => 1187,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            210 => 
            array (
                'id' => 2701,
                'product_id' => 1187,
                'type' => 'string',
                'key' => 'meta_cash_on_delivery',
                'value' => '1',
            ),
            211 => 
            array (
                'id' => 2702,
                'product_id' => 1187,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            212 => 
            array (
                'id' => 2703,
                'product_id' => 1187,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            213 => 
            array (
                'id' => 2704,
                'product_id' => 1187,
                'type' => 'string',
                'key' => 'meta_warranty_type',
                'value' => 'No Warranty',
            ),
            214 => 
            array (
                'id' => 2705,
                'product_id' => 1187,
                'type' => 'string',
                'key' => 'meta_warranty_period',
                'value' => '',
            ),
            215 => 
            array (
                'id' => 2706,
                'product_id' => 1187,
                'type' => 'string',
                'key' => 'meta_warranty_policy',
                'value' => '',
            ),
            216 => 
            array (
                'id' => 2707,
                'product_id' => 1187,
                'type' => 'string',
                'key' => 'meta_purchase_note',
                'value' => '',
            ),
            217 => 
            array (
                'id' => 2708,
                'product_id' => 1187,
                'type' => 'string',
                'key' => 'meta_estimated_delivery',
                'value' => '7',
            ),
            218 => 
            array (
                'id' => 2709,
                'product_id' => 1187,
                'type' => 'string',
                'key' => 'meta_enable_reviews',
                'value' => '1',
            ),
            219 => 
            array (
                'id' => 2710,
                'product_id' => 1187,
                'type' => 'array',
                'key' => 'meta_seo',
                'value' => '{"title":"Asymmetric design top","description":"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed porttitor lectus nibh. Donec sollicitudin molestie malesuada. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Proin eget tortor risus. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Cras ultricies ligula sed magna dictum porta. Proin eget tortor risus. Sed porttitor lectus nibh. Pellentesque in ipsum id orci porta dapibus.","image":"20221120/139e75ab56c02c8e35cac98c4f6ea812.jpg"}',
            ),
            220 => 
            array (
                'id' => 2711,
                'product_id' => 1187,
                'type' => 'array',
                'key' => 'meta_video_files',
                'value' => '[]',
            ),
            221 => 
            array (
                'id' => 2712,
                'product_id' => 1187,
                'type' => 'array',
                'key' => 'meta_video_url',
                'value' => '[]',
            ),
            222 => 
            array (
                'id' => 2739,
                'product_id' => 1188,
                'type' => 'array',
                'key' => 'meta_image',
                'value' => '["20221120/3854797b37a51099c22f45952459d8fd.jpg","20221120/fff6730c097bce46a0e88303e17aad82.jpg"]',
            ),
            223 => 
            array (
                'id' => 2740,
                'product_id' => 1188,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            224 => 
            array (
                'id' => 2741,
                'product_id' => 1188,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            225 => 
            array (
                'id' => 2742,
                'product_id' => 1188,
                'type' => 'array',
                'key' => 'meta_external_product',
                'value' => '{"url":"","text":""}',
            ),
            226 => 
            array (
                'id' => 2743,
                'product_id' => 1188,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            227 => 
            array (
                'id' => 2744,
                'product_id' => 1188,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            228 => 
            array (
                'id' => 2745,
                'product_id' => 1188,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            229 => 
            array (
                'id' => 2746,
                'product_id' => 1188,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => '',
            ),
            230 => 
            array (
                'id' => 2747,
                'product_id' => 1188,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            231 => 
            array (
                'id' => 2748,
                'product_id' => 1188,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            232 => 
            array (
                'id' => 2749,
                'product_id' => 1188,
                'type' => 'string',
                'key' => 'meta_hide_stock',
                'value' => '0',
            ),
            233 => 
            array (
                'id' => 2750,
                'product_id' => 1188,
                'type' => 'string',
                'key' => 'meta_stock_status',
                'value' => 'In Stock',
            ),
            234 => 
            array (
                'id' => 2751,
                'product_id' => 1188,
                'type' => 'string',
                'key' => 'meta_individual_sale',
                'value' => '0',
            ),
            235 => 
            array (
                'id' => 2752,
                'product_id' => 1188,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            236 => 
            array (
                'id' => 2753,
                'product_id' => 1188,
                'type' => 'string',
                'key' => 'meta_cash_on_delivery',
                'value' => '0',
            ),
            237 => 
            array (
                'id' => 2754,
                'product_id' => 1188,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            238 => 
            array (
                'id' => 2755,
                'product_id' => 1188,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            239 => 
            array (
                'id' => 2756,
                'product_id' => 1188,
                'type' => 'string',
                'key' => 'meta_warranty_type',
                'value' => 'No Warranty',
            ),
            240 => 
            array (
                'id' => 2757,
                'product_id' => 1188,
                'type' => 'string',
                'key' => 'meta_warranty_period',
                'value' => '',
            ),
            241 => 
            array (
                'id' => 2758,
                'product_id' => 1188,
                'type' => 'string',
                'key' => 'meta_warranty_policy',
                'value' => '',
            ),
            242 => 
            array (
                'id' => 2759,
                'product_id' => 1188,
                'type' => 'string',
                'key' => 'meta_purchase_note',
                'value' => '',
            ),
            243 => 
            array (
                'id' => 2760,
                'product_id' => 1188,
                'type' => 'string',
                'key' => 'meta_estimated_delivery',
                'value' => '7',
            ),
            244 => 
            array (
                'id' => 2761,
                'product_id' => 1188,
                'type' => 'string',
                'key' => 'meta_enable_reviews',
                'value' => '1',
            ),
            245 => 
            array (
                'id' => 2762,
                'product_id' => 1188,
                'type' => 'array',
                'key' => 'meta_seo',
                'value' => '{"title":"Asymmetric neckline blouse","description":"Pellentesque in ipsum id orci porta dapibus. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Proin eget tortor risus. Pellentesque in ipsum id orci porta dapibus. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.","image":"20221120/3854797b37a51099c22f45952459d8fd.jpg"}',
            ),
            246 => 
            array (
                'id' => 2763,
                'product_id' => 1188,
                'type' => 'array',
                'key' => 'meta_video_files',
                'value' => '[]',
            ),
            247 => 
            array (
                'id' => 2764,
                'product_id' => 1188,
                'type' => 'array',
                'key' => 'meta_video_url',
                'value' => '[]',
            ),
            248 => 
            array (
                'id' => 2765,
                'product_id' => 1189,
                'type' => 'array',
                'key' => 'meta_image',
                'value' => '["20221120/8dbc149374c1046c5177438df2a021c7.jpg"]',
            ),
            249 => 
            array (
                'id' => 2766,
                'product_id' => 1189,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            250 => 
            array (
                'id' => 2767,
                'product_id' => 1189,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            251 => 
            array (
                'id' => 2768,
                'product_id' => 1189,
                'type' => 'array',
                'key' => 'meta_external_product',
                'value' => '{"url":"","text":""}',
            ),
            252 => 
            array (
                'id' => 2769,
                'product_id' => 1189,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            253 => 
            array (
                'id' => 2770,
                'product_id' => 1189,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            254 => 
            array (
                'id' => 2771,
                'product_id' => 1189,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            255 => 
            array (
                'id' => 2772,
                'product_id' => 1189,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            256 => 
            array (
                'id' => 2773,
                'product_id' => 1189,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            257 => 
            array (
                'id' => 2774,
                'product_id' => 1189,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            258 => 
            array (
                'id' => 2775,
                'product_id' => 1189,
                'type' => 'string',
                'key' => 'meta_hide_stock',
                'value' => '0',
            ),
            259 => 
            array (
                'id' => 2776,
                'product_id' => 1189,
                'type' => 'string',
                'key' => 'meta_stock_status',
                'value' => 'In Stock',
            ),
            260 => 
            array (
                'id' => 2777,
                'product_id' => 1189,
                'type' => 'string',
                'key' => 'meta_individual_sale',
                'value' => '0',
            ),
            261 => 
            array (
                'id' => 2778,
                'product_id' => 1189,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            262 => 
            array (
                'id' => 2779,
                'product_id' => 1189,
                'type' => 'string',
                'key' => 'meta_cash_on_delivery',
                'value' => '1',
            ),
            263 => 
            array (
                'id' => 2780,
                'product_id' => 1189,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '0.27',
            ),
            264 => 
            array (
                'id' => 2781,
                'product_id' => 1189,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            265 => 
            array (
                'id' => 2782,
                'product_id' => 1189,
                'type' => 'string',
                'key' => 'meta_warranty_type',
                'value' => 'No Warranty',
            ),
            266 => 
            array (
                'id' => 2783,
                'product_id' => 1189,
                'type' => 'string',
                'key' => 'meta_warranty_period',
                'value' => '',
            ),
            267 => 
            array (
                'id' => 2784,
                'product_id' => 1189,
                'type' => 'string',
                'key' => 'meta_warranty_policy',
                'value' => '',
            ),
            268 => 
            array (
                'id' => 2785,
                'product_id' => 1189,
                'type' => 'string',
                'key' => 'meta_purchase_note',
                'value' => '',
            ),
            269 => 
            array (
                'id' => 2786,
                'product_id' => 1189,
                'type' => 'string',
                'key' => 'meta_estimated_delivery',
                'value' => '7',
            ),
            270 => 
            array (
                'id' => 2787,
                'product_id' => 1189,
                'type' => 'string',
                'key' => 'meta_enable_reviews',
                'value' => '1',
            ),
            271 => 
            array (
                'id' => 2788,
                'product_id' => 1189,
                'type' => 'array',
                'key' => 'meta_seo',
                'value' => '{"title":"Asymmetric neckline blouse full","description":"Cras ultricies ligula sed magna dictum porta. Nulla porttitor accumsan tincidunt. Proin eget tortor risus. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Curabitur aliquet quam id dui posuere blandit.","image":"20221120/8dbc149374c1046c5177438df2a021c7.jpg"}',
            ),
            272 => 
            array (
                'id' => 2789,
                'product_id' => 1189,
                'type' => 'array',
                'key' => 'meta_video_files',
                'value' => '[]',
            ),
            273 => 
            array (
                'id' => 2790,
                'product_id' => 1189,
                'type' => 'array',
                'key' => 'meta_video_url',
                'value' => '[]',
            ),
            274 => 
            array (
                'id' => 2791,
                'product_id' => 1190,
                'type' => 'array',
                'key' => 'meta_image',
                'value' => '["20221120/8abb4d2f7a254c2d3331ef7fd0511415.jpg","20221120/cf6a91666a7fb0f5bca5752f12f98143.jpg"]',
            ),
            275 => 
            array (
                'id' => 2792,
                'product_id' => 1190,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            276 => 
            array (
                'id' => 2793,
                'product_id' => 1190,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            277 => 
            array (
                'id' => 2794,
                'product_id' => 1190,
                'type' => 'array',
                'key' => 'meta_external_product',
                'value' => '{"url":"","text":""}',
            ),
            278 => 
            array (
                'id' => 2795,
                'product_id' => 1190,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            279 => 
            array (
                'id' => 2796,
                'product_id' => 1190,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            280 => 
            array (
                'id' => 2797,
                'product_id' => 1190,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            281 => 
            array (
                'id' => 2798,
                'product_id' => 1190,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => '',
            ),
            282 => 
            array (
                'id' => 2799,
                'product_id' => 1190,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            283 => 
            array (
                'id' => 2800,
                'product_id' => 1190,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            284 => 
            array (
                'id' => 2801,
                'product_id' => 1190,
                'type' => 'string',
                'key' => 'meta_hide_stock',
                'value' => '0',
            ),
            285 => 
            array (
                'id' => 2802,
                'product_id' => 1190,
                'type' => 'string',
                'key' => 'meta_stock_status',
                'value' => 'In Stock',
            ),
            286 => 
            array (
                'id' => 2803,
                'product_id' => 1190,
                'type' => 'string',
                'key' => 'meta_individual_sale',
                'value' => '0',
            ),
            287 => 
            array (
                'id' => 2804,
                'product_id' => 1190,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            288 => 
            array (
                'id' => 2805,
                'product_id' => 1190,
                'type' => 'string',
                'key' => 'meta_cash_on_delivery',
                'value' => '1',
            ),
            289 => 
            array (
                'id' => 2806,
                'product_id' => 1190,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '0.27',
            ),
            290 => 
            array (
                'id' => 2807,
                'product_id' => 1190,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            291 => 
            array (
                'id' => 2808,
                'product_id' => 1190,
                'type' => 'string',
                'key' => 'meta_warranty_type',
                'value' => 'No Warranty',
            ),
            292 => 
            array (
                'id' => 2809,
                'product_id' => 1190,
                'type' => 'string',
                'key' => 'meta_warranty_period',
                'value' => '',
            ),
            293 => 
            array (
                'id' => 2810,
                'product_id' => 1190,
                'type' => 'string',
                'key' => 'meta_warranty_policy',
                'value' => '',
            ),
            294 => 
            array (
                'id' => 2811,
                'product_id' => 1190,
                'type' => 'string',
                'key' => 'meta_purchase_note',
                'value' => '',
            ),
            295 => 
            array (
                'id' => 2812,
                'product_id' => 1190,
                'type' => 'string',
                'key' => 'meta_estimated_delivery',
                'value' => '7',
            ),
            296 => 
            array (
                'id' => 2813,
                'product_id' => 1190,
                'type' => 'string',
                'key' => 'meta_enable_reviews',
                'value' => '1',
            ),
            297 => 
            array (
                'id' => 2814,
                'product_id' => 1190,
                'type' => 'array',
                'key' => 'meta_seo',
                'value' => '{"title":"Cord textured dress","description":"Curabitur aliquet quam id dui posuere blandit. Curabitur aliquet quam id dui posuere blandit. Donec rutrum congue leo eget malesuada. Sed porttitor lectus nibh. Curabitur aliquet quam id dui posuere blandit.","image":"20221120/8abb4d2f7a254c2d3331ef7fd0511415.jpg"}',
            ),
            298 => 
            array (
                'id' => 2815,
                'product_id' => 1190,
                'type' => 'array',
                'key' => 'meta_video_files',
                'value' => '[]',
            ),
            299 => 
            array (
                'id' => 2816,
                'product_id' => 1190,
                'type' => 'array',
                'key' => 'meta_video_url',
                'value' => '[]',
            ),
            300 => 
            array (
                'id' => 2817,
                'product_id' => 1191,
                'type' => 'array',
                'key' => 'meta_image',
                'value' => '["20221120/1af11c4b3c9b6d0e2806c144d80626ce.jpg"]',
            ),
            301 => 
            array (
                'id' => 2818,
                'product_id' => 1191,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            302 => 
            array (
                'id' => 2819,
                'product_id' => 1191,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            303 => 
            array (
                'id' => 2820,
                'product_id' => 1191,
                'type' => 'array',
                'key' => 'meta_external_product',
                'value' => '{"url":"","text":""}',
            ),
            304 => 
            array (
                'id' => 2821,
                'product_id' => 1191,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            305 => 
            array (
                'id' => 2822,
                'product_id' => 1191,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            306 => 
            array (
                'id' => 2823,
                'product_id' => 1191,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            307 => 
            array (
                'id' => 2824,
                'product_id' => 1191,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            308 => 
            array (
                'id' => 2825,
                'product_id' => 1191,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            309 => 
            array (
                'id' => 2826,
                'product_id' => 1191,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            310 => 
            array (
                'id' => 2827,
                'product_id' => 1191,
                'type' => 'string',
                'key' => 'meta_hide_stock',
                'value' => '0',
            ),
            311 => 
            array (
                'id' => 2828,
                'product_id' => 1191,
                'type' => 'string',
                'key' => 'meta_stock_status',
                'value' => 'In Stock',
            ),
            312 => 
            array (
                'id' => 2829,
                'product_id' => 1191,
                'type' => 'string',
                'key' => 'meta_individual_sale',
                'value' => '0',
            ),
            313 => 
            array (
                'id' => 2830,
                'product_id' => 1191,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            314 => 
            array (
                'id' => 2831,
                'product_id' => 1191,
                'type' => 'string',
                'key' => 'meta_cash_on_delivery',
                'value' => '1',
            ),
            315 => 
            array (
                'id' => 2832,
                'product_id' => 1191,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '0.25',
            ),
            316 => 
            array (
                'id' => 2833,
                'product_id' => 1191,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            317 => 
            array (
                'id' => 2834,
                'product_id' => 1191,
                'type' => 'string',
                'key' => 'meta_warranty_type',
                'value' => 'No Warranty',
            ),
            318 => 
            array (
                'id' => 2835,
                'product_id' => 1191,
                'type' => 'string',
                'key' => 'meta_warranty_period',
                'value' => '',
            ),
            319 => 
            array (
                'id' => 2836,
                'product_id' => 1191,
                'type' => 'string',
                'key' => 'meta_warranty_policy',
                'value' => '',
            ),
            320 => 
            array (
                'id' => 2837,
                'product_id' => 1191,
                'type' => 'string',
                'key' => 'meta_purchase_note',
                'value' => '',
            ),
            321 => 
            array (
                'id' => 2838,
                'product_id' => 1191,
                'type' => 'string',
                'key' => 'meta_estimated_delivery',
                'value' => '7',
            ),
            322 => 
            array (
                'id' => 2839,
                'product_id' => 1191,
                'type' => 'string',
                'key' => 'meta_enable_reviews',
                'value' => '1',
            ),
            323 => 
            array (
                'id' => 2840,
                'product_id' => 1191,
                'type' => 'array',
                'key' => 'meta_seo',
                'value' => '{"title":"Cord textured dress top","description":"Proin eget tortor risus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Donec sollicitudin molestie malesuada. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.","image":"20221120/1af11c4b3c9b6d0e2806c144d80626ce.jpg"}',
            ),
            324 => 
            array (
                'id' => 2841,
                'product_id' => 1191,
                'type' => 'array',
                'key' => 'meta_video_files',
                'value' => '[]',
            ),
            325 => 
            array (
                'id' => 2842,
                'product_id' => 1191,
                'type' => 'array',
                'key' => 'meta_video_url',
                'value' => '["https:\\/\\/player.vimeo.com\\/video\\/330420305?h=0c269f7e82&color=f7f7f7&title=0&byline=0&portrait=0"]',
            ),
            326 => 
            array (
                'id' => 2843,
                'product_id' => 1192,
                'type' => 'array',
                'key' => 'meta_image',
                'value' => '["20221120/a2d7b299220cc0defef58fc76b7fa838.jpg","20221120/d265842eff83d6f419b0ca1582f87da8.jpg"]',
            ),
            327 => 
            array (
                'id' => 2844,
                'product_id' => 1192,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            328 => 
            array (
                'id' => 2845,
                'product_id' => 1192,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            329 => 
            array (
                'id' => 2846,
                'product_id' => 1192,
                'type' => 'array',
                'key' => 'meta_external_product',
                'value' => '{"url":"","text":""}',
            ),
            330 => 
            array (
                'id' => 2847,
                'product_id' => 1192,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            331 => 
            array (
                'id' => 2848,
                'product_id' => 1192,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            332 => 
            array (
                'id' => 2849,
                'product_id' => 1192,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            333 => 
            array (
                'id' => 2850,
                'product_id' => 1192,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => '',
            ),
            334 => 
            array (
                'id' => 2851,
                'product_id' => 1192,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            335 => 
            array (
                'id' => 2852,
                'product_id' => 1192,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            336 => 
            array (
                'id' => 2853,
                'product_id' => 1192,
                'type' => 'string',
                'key' => 'meta_hide_stock',
                'value' => '0',
            ),
            337 => 
            array (
                'id' => 2854,
                'product_id' => 1192,
                'type' => 'string',
                'key' => 'meta_stock_status',
                'value' => 'In Stock',
            ),
            338 => 
            array (
                'id' => 2855,
                'product_id' => 1192,
                'type' => 'string',
                'key' => 'meta_individual_sale',
                'value' => '0',
            ),
            339 => 
            array (
                'id' => 2856,
                'product_id' => 1192,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            340 => 
            array (
                'id' => 2857,
                'product_id' => 1192,
                'type' => 'string',
                'key' => 'meta_cash_on_delivery',
                'value' => '1',
            ),
            341 => 
            array (
                'id' => 2858,
                'product_id' => 1192,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '0.25',
            ),
            342 => 
            array (
                'id' => 2859,
                'product_id' => 1192,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            343 => 
            array (
                'id' => 2860,
                'product_id' => 1192,
                'type' => 'string',
                'key' => 'meta_warranty_type',
                'value' => 'No Warranty',
            ),
            344 => 
            array (
                'id' => 2861,
                'product_id' => 1192,
                'type' => 'string',
                'key' => 'meta_warranty_period',
                'value' => '',
            ),
            345 => 
            array (
                'id' => 2862,
                'product_id' => 1192,
                'type' => 'string',
                'key' => 'meta_warranty_policy',
                'value' => '',
            ),
            346 => 
            array (
                'id' => 2863,
                'product_id' => 1192,
                'type' => 'string',
                'key' => 'meta_purchase_note',
                'value' => '',
            ),
            347 => 
            array (
                'id' => 2864,
                'product_id' => 1192,
                'type' => 'string',
                'key' => 'meta_estimated_delivery',
                'value' => '7',
            ),
            348 => 
            array (
                'id' => 2865,
                'product_id' => 1192,
                'type' => 'string',
                'key' => 'meta_enable_reviews',
                'value' => '1',
            ),
            349 => 
            array (
                'id' => 2866,
                'product_id' => 1192,
                'type' => 'array',
                'key' => 'meta_seo',
                'value' => '{"title":"Crepe fitted suit jacket","description":"Sed porttitor lectus nibh. Donec rutrum congue leo eget malesuada. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Curabitur aliquet quam id dui posuere blandit. Nulla quis lorem ut libero malesuada feugiat.","image":"20221120/a2d7b299220cc0defef58fc76b7fa838.jpg"}',
            ),
            350 => 
            array (
                'id' => 2867,
                'product_id' => 1192,
                'type' => 'array',
                'key' => 'meta_video_files',
                'value' => '[]',
            ),
            351 => 
            array (
                'id' => 2868,
                'product_id' => 1192,
                'type' => 'array',
                'key' => 'meta_video_url',
                'value' => '[]',
            ),
            352 => 
            array (
                'id' => 2869,
                'product_id' => 1193,
                'type' => 'array',
                'key' => 'meta_image',
                'value' => '["20221120/789ce2f39acd5aa9686c8c548017a973.jpg"]',
            ),
            353 => 
            array (
                'id' => 2870,
                'product_id' => 1193,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            354 => 
            array (
                'id' => 2871,
                'product_id' => 1193,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            355 => 
            array (
                'id' => 2872,
                'product_id' => 1193,
                'type' => 'array',
                'key' => 'meta_external_product',
                'value' => '{"url":"","text":""}',
            ),
            356 => 
            array (
                'id' => 2873,
                'product_id' => 1193,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            357 => 
            array (
                'id' => 2874,
                'product_id' => 1193,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            358 => 
            array (
                'id' => 2875,
                'product_id' => 1193,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            359 => 
            array (
                'id' => 2876,
                'product_id' => 1193,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            360 => 
            array (
                'id' => 2877,
                'product_id' => 1193,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            361 => 
            array (
                'id' => 2878,
                'product_id' => 1193,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            362 => 
            array (
                'id' => 2879,
                'product_id' => 1193,
                'type' => 'string',
                'key' => 'meta_hide_stock',
                'value' => '0',
            ),
            363 => 
            array (
                'id' => 2880,
                'product_id' => 1193,
                'type' => 'string',
                'key' => 'meta_stock_status',
                'value' => 'In Stock',
            ),
            364 => 
            array (
                'id' => 2881,
                'product_id' => 1193,
                'type' => 'string',
                'key' => 'meta_individual_sale',
                'value' => '0',
            ),
            365 => 
            array (
                'id' => 2882,
                'product_id' => 1193,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            366 => 
            array (
                'id' => 2883,
                'product_id' => 1193,
                'type' => 'string',
                'key' => 'meta_cash_on_delivery',
                'value' => '1',
            ),
            367 => 
            array (
                'id' => 2884,
                'product_id' => 1193,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '0.35',
            ),
            368 => 
            array (
                'id' => 2885,
                'product_id' => 1193,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            369 => 
            array (
                'id' => 2886,
                'product_id' => 1193,
                'type' => 'string',
                'key' => 'meta_warranty_type',
                'value' => 'No Warranty',
            ),
            370 => 
            array (
                'id' => 2887,
                'product_id' => 1193,
                'type' => 'string',
                'key' => 'meta_warranty_period',
                'value' => '',
            ),
            371 => 
            array (
                'id' => 2888,
                'product_id' => 1193,
                'type' => 'string',
                'key' => 'meta_warranty_policy',
                'value' => '',
            ),
            372 => 
            array (
                'id' => 2889,
                'product_id' => 1193,
                'type' => 'string',
                'key' => 'meta_purchase_note',
                'value' => '',
            ),
            373 => 
            array (
                'id' => 2890,
                'product_id' => 1193,
                'type' => 'string',
                'key' => 'meta_estimated_delivery',
                'value' => '7',
            ),
            374 => 
            array (
                'id' => 2891,
                'product_id' => 1193,
                'type' => 'string',
                'key' => 'meta_enable_reviews',
                'value' => '1',
            ),
            375 => 
            array (
                'id' => 2892,
                'product_id' => 1193,
                'type' => 'array',
                'key' => 'meta_seo',
                'value' => '{"title":"Flared long dress","description":"Quisque velit nisi, pretium ut lacinia in, elementum id enim. Proin eget tortor risus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.","image":"20221120/789ce2f39acd5aa9686c8c548017a973.jpg"}',
            ),
            376 => 
            array (
                'id' => 2893,
                'product_id' => 1193,
                'type' => 'array',
                'key' => 'meta_video_files',
                'value' => '[]',
            ),
            377 => 
            array (
                'id' => 2894,
                'product_id' => 1193,
                'type' => 'array',
                'key' => 'meta_video_url',
                'value' => '[]',
            ),
            378 => 
            array (
                'id' => 2895,
                'product_id' => 1194,
                'type' => 'array',
                'key' => 'meta_image',
                'value' => '["20221120/13d2c440f58a73a30cb67b19202a83e2.jpg","20221120/aecae02fb3f920630d153e57f086cd39.jpg"]',
            ),
            379 => 
            array (
                'id' => 2896,
                'product_id' => 1194,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            380 => 
            array (
                'id' => 2897,
                'product_id' => 1194,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            381 => 
            array (
                'id' => 2898,
                'product_id' => 1194,
                'type' => 'array',
                'key' => 'meta_external_product',
                'value' => '{"url":"","text":""}',
            ),
            382 => 
            array (
                'id' => 2899,
                'product_id' => 1194,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            383 => 
            array (
                'id' => 2900,
                'product_id' => 1194,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            384 => 
            array (
                'id' => 2901,
                'product_id' => 1194,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            385 => 
            array (
                'id' => 2902,
                'product_id' => 1194,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            386 => 
            array (
                'id' => 2903,
                'product_id' => 1194,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            387 => 
            array (
                'id' => 2904,
                'product_id' => 1194,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            388 => 
            array (
                'id' => 2905,
                'product_id' => 1194,
                'type' => 'string',
                'key' => 'meta_hide_stock',
                'value' => '0',
            ),
            389 => 
            array (
                'id' => 2906,
                'product_id' => 1194,
                'type' => 'string',
                'key' => 'meta_stock_status',
                'value' => 'In Stock',
            ),
            390 => 
            array (
                'id' => 2907,
                'product_id' => 1194,
                'type' => 'string',
                'key' => 'meta_individual_sale',
                'value' => '0',
            ),
            391 => 
            array (
                'id' => 2908,
                'product_id' => 1194,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            392 => 
            array (
                'id' => 2909,
                'product_id' => 1194,
                'type' => 'string',
                'key' => 'meta_cash_on_delivery',
                'value' => '1',
            ),
            393 => 
            array (
                'id' => 2910,
                'product_id' => 1194,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '0.30',
            ),
            394 => 
            array (
                'id' => 2911,
                'product_id' => 1194,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            395 => 
            array (
                'id' => 2912,
                'product_id' => 1194,
                'type' => 'string',
                'key' => 'meta_warranty_type',
                'value' => 'No Warranty',
            ),
            396 => 
            array (
                'id' => 2913,
                'product_id' => 1194,
                'type' => 'string',
                'key' => 'meta_warranty_period',
                'value' => '',
            ),
            397 => 
            array (
                'id' => 2914,
                'product_id' => 1194,
                'type' => 'string',
                'key' => 'meta_warranty_policy',
                'value' => '',
            ),
            398 => 
            array (
                'id' => 2915,
                'product_id' => 1194,
                'type' => 'string',
                'key' => 'meta_purchase_note',
                'value' => '',
            ),
            399 => 
            array (
                'id' => 2916,
                'product_id' => 1194,
                'type' => 'string',
                'key' => 'meta_estimated_delivery',
                'value' => '7',
            ),
            400 => 
            array (
                'id' => 2917,
                'product_id' => 1194,
                'type' => 'string',
                'key' => 'meta_enable_reviews',
                'value' => '1',
            ),
            401 => 
            array (
                'id' => 2918,
                'product_id' => 1194,
                'type' => 'array',
                'key' => 'meta_seo',
                'value' => '{"title":"Flowy ruffled dress","description":"Nulla porttitor accumsan tincidunt. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Nulla quis lorem ut libero malesuada feugiat. Nulla quis lorem ut libero malesuada feugiat.","image":"20221120/13d2c440f58a73a30cb67b19202a83e2.jpg"}',
            ),
            402 => 
            array (
                'id' => 2919,
                'product_id' => 1194,
                'type' => 'array',
                'key' => 'meta_video_files',
                'value' => '[]',
            ),
            403 => 
            array (
                'id' => 2920,
                'product_id' => 1194,
                'type' => 'array',
                'key' => 'meta_video_url',
                'value' => '[]',
            ),
            404 => 
            array (
                'id' => 2921,
                'product_id' => 1195,
                'type' => 'array',
                'key' => 'meta_image',
                'value' => '["20221120/c5e80747d70af0aeecfc904425518436.jpg"]',
            ),
            405 => 
            array (
                'id' => 2922,
                'product_id' => 1195,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            406 => 
            array (
                'id' => 2923,
                'product_id' => 1195,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            407 => 
            array (
                'id' => 2924,
                'product_id' => 1195,
                'type' => 'array',
                'key' => 'meta_external_product',
                'value' => '{"url":"","text":""}',
            ),
            408 => 
            array (
                'id' => 2925,
                'product_id' => 1195,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            409 => 
            array (
                'id' => 2926,
                'product_id' => 1195,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            410 => 
            array (
                'id' => 2927,
                'product_id' => 1195,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            411 => 
            array (
                'id' => 2928,
                'product_id' => 1195,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            412 => 
            array (
                'id' => 2929,
                'product_id' => 1195,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            413 => 
            array (
                'id' => 2930,
                'product_id' => 1195,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '',
            ),
            414 => 
            array (
                'id' => 2931,
                'product_id' => 1195,
                'type' => 'string',
                'key' => 'meta_hide_stock',
                'value' => '0',
            ),
            415 => 
            array (
                'id' => 2932,
                'product_id' => 1195,
                'type' => 'string',
                'key' => 'meta_stock_status',
                'value' => 'In Stock',
            ),
            416 => 
            array (
                'id' => 2933,
                'product_id' => 1195,
                'type' => 'string',
                'key' => 'meta_individual_sale',
                'value' => '0',
            ),
            417 => 
            array (
                'id' => 2934,
                'product_id' => 1195,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            418 => 
            array (
                'id' => 2935,
                'product_id' => 1195,
                'type' => 'string',
                'key' => 'meta_cash_on_delivery',
                'value' => '1',
            ),
            419 => 
            array (
                'id' => 2936,
                'product_id' => 1195,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '0.35',
            ),
            420 => 
            array (
                'id' => 2937,
                'product_id' => 1195,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            421 => 
            array (
                'id' => 2938,
                'product_id' => 1195,
                'type' => 'string',
                'key' => 'meta_warranty_type',
                'value' => 'No Warranty',
            ),
            422 => 
            array (
                'id' => 2939,
                'product_id' => 1195,
                'type' => 'string',
                'key' => 'meta_warranty_period',
                'value' => '',
            ),
            423 => 
            array (
                'id' => 2940,
                'product_id' => 1195,
                'type' => 'string',
                'key' => 'meta_warranty_policy',
                'value' => '',
            ),
            424 => 
            array (
                'id' => 2941,
                'product_id' => 1195,
                'type' => 'string',
                'key' => 'meta_purchase_note',
                'value' => '',
            ),
            425 => 
            array (
                'id' => 2942,
                'product_id' => 1195,
                'type' => 'string',
                'key' => 'meta_estimated_delivery',
                'value' => '7',
            ),
            426 => 
            array (
                'id' => 2943,
                'product_id' => 1195,
                'type' => 'string',
                'key' => 'meta_enable_reviews',
                'value' => '1',
            ),
            427 => 
            array (
                'id' => 2944,
                'product_id' => 1195,
                'type' => 'array',
                'key' => 'meta_seo',
                'value' => '{"title":"Heel leather sandals","description":"Donec sollicitudin molestie malesuada. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Cras ultricies ligula sed magna dictum porta. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.","image":"20221120/c5e80747d70af0aeecfc904425518436.jpg"}',
            ),
            428 => 
            array (
                'id' => 2945,
                'product_id' => 1195,
                'type' => 'array',
                'key' => 'meta_video_files',
                'value' => '[]',
            ),
            429 => 
            array (
                'id' => 2946,
                'product_id' => 1195,
                'type' => 'array',
                'key' => 'meta_video_url',
                'value' => '["https:\\/\\/player.vimeo.com\\/video\\/330420305?h=0c269f7e82&color=f7f7f7&title=0&byline=0&portrait=0"]',
            ),
            430 => 
            array (
                'id' => 2947,
                'product_id' => 1196,
                'type' => 'array',
                'key' => 'meta_image',
                'value' => '["20221120/bbf4ee60755bd736492ebe29b856ccd2.jpg"]',
            ),
            431 => 
            array (
                'id' => 2948,
                'product_id' => 1196,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            432 => 
            array (
                'id' => 2949,
                'product_id' => 1196,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            433 => 
            array (
                'id' => 2950,
                'product_id' => 1196,
                'type' => 'array',
                'key' => 'meta_external_product',
                'value' => '{"url":"","text":""}',
            ),
            434 => 
            array (
                'id' => 2951,
                'product_id' => 1196,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            435 => 
            array (
                'id' => 2952,
                'product_id' => 1196,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            436 => 
            array (
                'id' => 2953,
                'product_id' => 1196,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            437 => 
            array (
                'id' => 2954,
                'product_id' => 1196,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => '',
            ),
            438 => 
            array (
                'id' => 2955,
                'product_id' => 1196,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            439 => 
            array (
                'id' => 2956,
                'product_id' => 1196,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '',
            ),
            440 => 
            array (
                'id' => 2957,
                'product_id' => 1196,
                'type' => 'string',
                'key' => 'meta_hide_stock',
                'value' => '0',
            ),
            441 => 
            array (
                'id' => 2958,
                'product_id' => 1196,
                'type' => 'string',
                'key' => 'meta_stock_status',
                'value' => 'In Stock',
            ),
            442 => 
            array (
                'id' => 2959,
                'product_id' => 1196,
                'type' => 'string',
                'key' => 'meta_individual_sale',
                'value' => '0',
            ),
            443 => 
            array (
                'id' => 2960,
                'product_id' => 1196,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            444 => 
            array (
                'id' => 2961,
                'product_id' => 1196,
                'type' => 'string',
                'key' => 'meta_cash_on_delivery',
                'value' => '1',
            ),
            445 => 
            array (
                'id' => 2962,
                'product_id' => 1196,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '0.25',
            ),
            446 => 
            array (
                'id' => 2963,
                'product_id' => 1196,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            447 => 
            array (
                'id' => 2964,
                'product_id' => 1196,
                'type' => 'string',
                'key' => 'meta_warranty_type',
                'value' => 'No Warranty',
            ),
            448 => 
            array (
                'id' => 2965,
                'product_id' => 1196,
                'type' => 'string',
                'key' => 'meta_warranty_period',
                'value' => '',
            ),
            449 => 
            array (
                'id' => 2966,
                'product_id' => 1196,
                'type' => 'string',
                'key' => 'meta_warranty_policy',
                'value' => '',
            ),
            450 => 
            array (
                'id' => 2967,
                'product_id' => 1196,
                'type' => 'string',
                'key' => 'meta_purchase_note',
                'value' => '',
            ),
            451 => 
            array (
                'id' => 2968,
                'product_id' => 1196,
                'type' => 'string',
                'key' => 'meta_estimated_delivery',
                'value' => '7',
            ),
            452 => 
            array (
                'id' => 2969,
                'product_id' => 1196,
                'type' => 'string',
                'key' => 'meta_enable_reviews',
                'value' => '1',
            ),
            453 => 
            array (
                'id' => 2970,
                'product_id' => 1196,
                'type' => 'array',
                'key' => 'meta_seo',
                'value' => '{"title":"Modal-blend suit blazer","description":"Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Proin eget tortor risus. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Donec rutrum congue leo eget malesuada. Donec rutrum congue leo eget malesuada.","image":"20221120/bbf4ee60755bd736492ebe29b856ccd2.jpg"}',
            ),
            454 => 
            array (
                'id' => 2971,
                'product_id' => 1196,
                'type' => 'array',
                'key' => 'meta_video_files',
                'value' => '[]',
            ),
            455 => 
            array (
                'id' => 2972,
                'product_id' => 1196,
                'type' => 'array',
                'key' => 'meta_video_url',
                'value' => '[]',
            ),
            456 => 
            array (
                'id' => 2973,
                'product_id' => 1197,
                'type' => 'array',
                'key' => 'meta_image',
                'value' => '["20221120/b6bb7855098d58bbcca91fc46f553dda.jpg"]',
            ),
            457 => 
            array (
                'id' => 2974,
                'product_id' => 1197,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            458 => 
            array (
                'id' => 2975,
                'product_id' => 1197,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            459 => 
            array (
                'id' => 2976,
                'product_id' => 1197,
                'type' => 'array',
                'key' => 'meta_external_product',
                'value' => '{"url":"","text":""}',
            ),
            460 => 
            array (
                'id' => 2977,
                'product_id' => 1197,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            461 => 
            array (
                'id' => 2978,
                'product_id' => 1197,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            462 => 
            array (
                'id' => 2979,
                'product_id' => 1197,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            463 => 
            array (
                'id' => 2980,
                'product_id' => 1197,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            464 => 
            array (
                'id' => 2981,
                'product_id' => 1197,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            465 => 
            array (
                'id' => 2982,
                'product_id' => 1197,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '',
            ),
            466 => 
            array (
                'id' => 2983,
                'product_id' => 1197,
                'type' => 'string',
                'key' => 'meta_hide_stock',
                'value' => '0',
            ),
            467 => 
            array (
                'id' => 2984,
                'product_id' => 1197,
                'type' => 'string',
                'key' => 'meta_stock_status',
                'value' => 'In Stock',
            ),
            468 => 
            array (
                'id' => 2985,
                'product_id' => 1197,
                'type' => 'string',
                'key' => 'meta_individual_sale',
                'value' => '0',
            ),
            469 => 
            array (
                'id' => 2986,
                'product_id' => 1197,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            470 => 
            array (
                'id' => 2987,
                'product_id' => 1197,
                'type' => 'string',
                'key' => 'meta_cash_on_delivery',
                'value' => '1',
            ),
            471 => 
            array (
                'id' => 2988,
                'product_id' => 1197,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '0.3',
            ),
            472 => 
            array (
                'id' => 2989,
                'product_id' => 1197,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            473 => 
            array (
                'id' => 2990,
                'product_id' => 1197,
                'type' => 'string',
                'key' => 'meta_warranty_type',
                'value' => 'No Warranty',
            ),
            474 => 
            array (
                'id' => 2991,
                'product_id' => 1197,
                'type' => 'string',
                'key' => 'meta_warranty_period',
                'value' => '',
            ),
            475 => 
            array (
                'id' => 2992,
                'product_id' => 1197,
                'type' => 'string',
                'key' => 'meta_warranty_policy',
                'value' => '',
            ),
            476 => 
            array (
                'id' => 2993,
                'product_id' => 1197,
                'type' => 'string',
                'key' => 'meta_purchase_note',
                'value' => '',
            ),
            477 => 
            array (
                'id' => 2994,
                'product_id' => 1197,
                'type' => 'string',
                'key' => 'meta_estimated_delivery',
                'value' => '7',
            ),
            478 => 
            array (
                'id' => 2995,
                'product_id' => 1197,
                'type' => 'string',
                'key' => 'meta_enable_reviews',
                'value' => '1',
            ),
            479 => 
            array (
                'id' => 2996,
                'product_id' => 1197,
                'type' => 'array',
                'key' => 'meta_seo',
                'value' => '{"title":"Paperbag denim shorts","description":"Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Donec rutrum congue leo eget malesuada. Sed porttitor lectus nibh.","image":"20221120/b6bb7855098d58bbcca91fc46f553dda.jpg"}',
            ),
            480 => 
            array (
                'id' => 2997,
                'product_id' => 1197,
                'type' => 'array',
                'key' => 'meta_video_files',
                'value' => '[]',
            ),
            481 => 
            array (
                'id' => 2998,
                'product_id' => 1197,
                'type' => 'array',
                'key' => 'meta_video_url',
                'value' => '[]',
            ),
            482 => 
            array (
                'id' => 2999,
                'product_id' => 1198,
                'type' => 'array',
                'key' => 'meta_image',
                'value' => '["20221120/f3ae89350bf98da81d50be2886499091.jpg"]',
            ),
            483 => 
            array (
                'id' => 3000,
                'product_id' => 1198,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            484 => 
            array (
                'id' => 3001,
                'product_id' => 1198,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            485 => 
            array (
                'id' => 3002,
                'product_id' => 1198,
                'type' => 'array',
                'key' => 'meta_external_product',
                'value' => '{"url":"","text":""}',
            ),
            486 => 
            array (
                'id' => 3003,
                'product_id' => 1198,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            487 => 
            array (
                'id' => 3004,
                'product_id' => 1198,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            488 => 
            array (
                'id' => 3005,
                'product_id' => 1198,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            489 => 
            array (
                'id' => 3006,
                'product_id' => 1198,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            490 => 
            array (
                'id' => 3007,
                'product_id' => 1198,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            491 => 
            array (
                'id' => 3008,
                'product_id' => 1198,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '',
            ),
            492 => 
            array (
                'id' => 3009,
                'product_id' => 1198,
                'type' => 'string',
                'key' => 'meta_hide_stock',
                'value' => '0',
            ),
            493 => 
            array (
                'id' => 3010,
                'product_id' => 1198,
                'type' => 'string',
                'key' => 'meta_stock_status',
                'value' => 'In Stock',
            ),
            494 => 
            array (
                'id' => 3011,
                'product_id' => 1198,
                'type' => 'string',
                'key' => 'meta_individual_sale',
                'value' => '0',
            ),
            495 => 
            array (
                'id' => 3012,
                'product_id' => 1198,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            496 => 
            array (
                'id' => 3013,
                'product_id' => 1198,
                'type' => 'string',
                'key' => 'meta_cash_on_delivery',
                'value' => '1',
            ),
            497 => 
            array (
                'id' => 3014,
                'product_id' => 1198,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '0.3',
            ),
            498 => 
            array (
                'id' => 3015,
                'product_id' => 1198,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            499 => 
            array (
                'id' => 3016,
                'product_id' => 1198,
                'type' => 'string',
                'key' => 'meta_warranty_type',
                'value' => 'No Warranty',
            ),
        ));
        \DB::table('products_meta')->insert(array (
            0 => 
            array (
                'id' => 3017,
                'product_id' => 1198,
                'type' => 'string',
                'key' => 'meta_warranty_period',
                'value' => '',
            ),
            1 => 
            array (
                'id' => 3018,
                'product_id' => 1198,
                'type' => 'string',
                'key' => 'meta_warranty_policy',
                'value' => '',
            ),
            2 => 
            array (
                'id' => 3019,
                'product_id' => 1198,
                'type' => 'string',
                'key' => 'meta_purchase_note',
                'value' => '',
            ),
            3 => 
            array (
                'id' => 3020,
                'product_id' => 1198,
                'type' => 'string',
                'key' => 'meta_estimated_delivery',
                'value' => '7',
            ),
            4 => 
            array (
                'id' => 3021,
                'product_id' => 1198,
                'type' => 'string',
                'key' => 'meta_enable_reviews',
                'value' => '1',
            ),
            5 => 
            array (
                'id' => 3022,
                'product_id' => 1198,
                'type' => 'array',
                'key' => 'meta_seo',
                'value' => '{"title":"white fachion full","description":"Proin eget tortor risus. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Proin eget tortor risus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Donec sollicitudin molestie malesuada.","image":"20221120/f3ae89350bf98da81d50be2886499091.jpg"}',
            ),
            6 => 
            array (
                'id' => 3023,
                'product_id' => 1198,
                'type' => 'array',
                'key' => 'meta_video_files',
                'value' => '[]',
            ),
            7 => 
            array (
                'id' => 3024,
                'product_id' => 1198,
                'type' => 'array',
                'key' => 'meta_video_url',
                'value' => '[]',
            ),
            8 => 
            array (
                'id' => 3025,
                'product_id' => 1199,
                'type' => 'array',
                'key' => 'meta_image',
                'value' => '["20221120/abc930448a9f08de458b70e58e9f894e.jpg"]',
            ),
            9 => 
            array (
                'id' => 3026,
                'product_id' => 1199,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            10 => 
            array (
                'id' => 3027,
                'product_id' => 1199,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            11 => 
            array (
                'id' => 3028,
                'product_id' => 1199,
                'type' => 'array',
                'key' => 'meta_external_product',
                'value' => '{"url":"","text":""}',
            ),
            12 => 
            array (
                'id' => 3029,
                'product_id' => 1199,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            13 => 
            array (
                'id' => 3030,
                'product_id' => 1199,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            14 => 
            array (
                'id' => 3031,
                'product_id' => 1199,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            15 => 
            array (
                'id' => 3032,
                'product_id' => 1199,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            16 => 
            array (
                'id' => 3033,
                'product_id' => 1199,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            17 => 
            array (
                'id' => 3034,
                'product_id' => 1199,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '',
            ),
            18 => 
            array (
                'id' => 3035,
                'product_id' => 1199,
                'type' => 'string',
                'key' => 'meta_hide_stock',
                'value' => '0',
            ),
            19 => 
            array (
                'id' => 3036,
                'product_id' => 1199,
                'type' => 'string',
                'key' => 'meta_stock_status',
                'value' => 'In Stock',
            ),
            20 => 
            array (
                'id' => 3037,
                'product_id' => 1199,
                'type' => 'string',
                'key' => 'meta_individual_sale',
                'value' => '0',
            ),
            21 => 
            array (
                'id' => 3038,
                'product_id' => 1199,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            22 => 
            array (
                'id' => 3039,
                'product_id' => 1199,
                'type' => 'string',
                'key' => 'meta_cash_on_delivery',
                'value' => '1',
            ),
            23 => 
            array (
                'id' => 3040,
                'product_id' => 1199,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '0.5',
            ),
            24 => 
            array (
                'id' => 3041,
                'product_id' => 1199,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            25 => 
            array (
                'id' => 3042,
                'product_id' => 1199,
                'type' => 'string',
                'key' => 'meta_warranty_type',
                'value' => 'No Warranty',
            ),
            26 => 
            array (
                'id' => 3043,
                'product_id' => 1199,
                'type' => 'string',
                'key' => 'meta_warranty_period',
                'value' => '',
            ),
            27 => 
            array (
                'id' => 3044,
                'product_id' => 1199,
                'type' => 'string',
                'key' => 'meta_warranty_policy',
                'value' => '',
            ),
            28 => 
            array (
                'id' => 3045,
                'product_id' => 1199,
                'type' => 'string',
                'key' => 'meta_purchase_note',
                'value' => '',
            ),
            29 => 
            array (
                'id' => 3046,
                'product_id' => 1199,
                'type' => 'string',
                'key' => 'meta_estimated_delivery',
                'value' => '7',
            ),
            30 => 
            array (
                'id' => 3047,
                'product_id' => 1199,
                'type' => 'string',
                'key' => 'meta_enable_reviews',
                'value' => '1',
            ),
            31 => 
            array (
                'id' => 3048,
                'product_id' => 1199,
                'type' => 'array',
                'key' => 'meta_seo',
                'value' => '{"title":"Waist straight Slouchy jeans","description":"Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur aliquet quam id dui posuere blandit. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla porttitor accumsan tincidunt. Vivamus suscipit tortor eget felis porttitor volutpat.","image":"20221120/abc930448a9f08de458b70e58e9f894e.jpg"}',
            ),
            32 => 
            array (
                'id' => 3049,
                'product_id' => 1199,
                'type' => 'array',
                'key' => 'meta_video_files',
                'value' => '[]',
            ),
            33 => 
            array (
                'id' => 3050,
                'product_id' => 1199,
                'type' => 'array',
                'key' => 'meta_video_url',
                'value' => '[]',
            ),
            34 => 
            array (
                'id' => 3051,
                'product_id' => 1200,
                'type' => 'array',
                'key' => 'meta_image',
                'value' => '["20221123/3e2bd32693086adee813af0977d00ede.jpg"]',
            ),
            35 => 
            array (
                'id' => 3052,
                'product_id' => 1200,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            36 => 
            array (
                'id' => 3053,
                'product_id' => 1200,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            37 => 
            array (
                'id' => 3054,
                'product_id' => 1200,
                'type' => 'array',
                'key' => 'meta_external_product',
                'value' => '{"url":"","text":""}',
            ),
            38 => 
            array (
                'id' => 3055,
                'product_id' => 1200,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            39 => 
            array (
                'id' => 3056,
                'product_id' => 1200,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            40 => 
            array (
                'id' => 3057,
                'product_id' => 1200,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            41 => 
            array (
                'id' => 3058,
                'product_id' => 1200,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            42 => 
            array (
                'id' => 3059,
                'product_id' => 1200,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            43 => 
            array (
                'id' => 3060,
                'product_id' => 1200,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '',
            ),
            44 => 
            array (
                'id' => 3061,
                'product_id' => 1200,
                'type' => 'string',
                'key' => 'meta_hide_stock',
                'value' => '0',
            ),
            45 => 
            array (
                'id' => 3062,
                'product_id' => 1200,
                'type' => 'string',
                'key' => 'meta_stock_status',
                'value' => 'In Stock',
            ),
            46 => 
            array (
                'id' => 3063,
                'product_id' => 1200,
                'type' => 'string',
                'key' => 'meta_individual_sale',
                'value' => '0',
            ),
            47 => 
            array (
                'id' => 3064,
                'product_id' => 1200,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'heavy',
            ),
            48 => 
            array (
                'id' => 3065,
                'product_id' => 1200,
                'type' => 'string',
                'key' => 'meta_cash_on_delivery',
                'value' => '1',
            ),
            49 => 
            array (
                'id' => 3066,
                'product_id' => 1200,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '13',
            ),
            50 => 
            array (
                'id' => 3067,
                'product_id' => 1200,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            51 => 
            array (
                'id' => 3068,
                'product_id' => 1200,
                'type' => 'string',
                'key' => 'meta_warranty_type',
                'value' => 'Brand Warranty',
            ),
            52 => 
            array (
                'id' => 3069,
                'product_id' => 1200,
                'type' => 'string',
                'key' => 'meta_warranty_period',
                'value' => '10 years',
            ),
            53 => 
            array (
                'id' => 3070,
                'product_id' => 1200,
                'type' => 'string',
                'key' => 'meta_warranty_policy',
                'value' => 'Pellentesque in ipsum id orci porta dapibus. Pellentesque in ipsum id orci porta dapibus.',
            ),
            54 => 
            array (
                'id' => 3071,
                'product_id' => 1200,
                'type' => 'string',
                'key' => 'meta_purchase_note',
                'value' => '',
            ),
            55 => 
            array (
                'id' => 3072,
                'product_id' => 1200,
                'type' => 'string',
                'key' => 'meta_estimated_delivery',
                'value' => '25',
            ),
            56 => 
            array (
                'id' => 3073,
                'product_id' => 1200,
                'type' => 'string',
                'key' => 'meta_enable_reviews',
                'value' => '1',
            ),
            57 => 
            array (
                'id' => 3074,
                'product_id' => 1200,
                'type' => 'array',
                'key' => 'meta_seo',
                'value' => '{"title":"Pillow Chair with Arm Moveable","description":"Nulla quis lorem ut libero malesuada feugiat. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Donec sollicitudin molestie malesuada. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.","image":"20221123/3e2bd32693086adee813af0977d00ede.jpg"}',
            ),
            58 => 
            array (
                'id' => 3075,
                'product_id' => 1200,
                'type' => 'array',
                'key' => 'meta_video_files',
                'value' => '[]',
            ),
            59 => 
            array (
                'id' => 3076,
                'product_id' => 1200,
                'type' => 'array',
                'key' => 'meta_video_url',
                'value' => '[]',
            ),
            60 => 
            array (
                'id' => 3077,
                'product_id' => 1201,
                'type' => 'array',
                'key' => 'meta_image',
                'value' => '["20221123/6b2f904f2fafb2b96388290860425dd0.jpg"]',
            ),
            61 => 
            array (
                'id' => 3078,
                'product_id' => 1201,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            62 => 
            array (
                'id' => 3079,
                'product_id' => 1201,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            63 => 
            array (
                'id' => 3080,
                'product_id' => 1201,
                'type' => 'array',
                'key' => 'meta_external_product',
                'value' => '{"url":"","text":""}',
            ),
            64 => 
            array (
                'id' => 3081,
                'product_id' => 1201,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            65 => 
            array (
                'id' => 3082,
                'product_id' => 1201,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            66 => 
            array (
                'id' => 3083,
                'product_id' => 1201,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            67 => 
            array (
                'id' => 3084,
                'product_id' => 1201,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            68 => 
            array (
                'id' => 3085,
                'product_id' => 1201,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            69 => 
            array (
                'id' => 3086,
                'product_id' => 1201,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            70 => 
            array (
                'id' => 3087,
                'product_id' => 1201,
                'type' => 'string',
                'key' => 'meta_hide_stock',
                'value' => '0',
            ),
            71 => 
            array (
                'id' => 3088,
                'product_id' => 1201,
                'type' => 'string',
                'key' => 'meta_stock_status',
                'value' => 'In Stock',
            ),
            72 => 
            array (
                'id' => 3089,
                'product_id' => 1201,
                'type' => 'string',
                'key' => 'meta_individual_sale',
                'value' => '0',
            ),
            73 => 
            array (
                'id' => 3090,
                'product_id' => 1201,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'heavy',
            ),
            74 => 
            array (
                'id' => 3091,
                'product_id' => 1201,
                'type' => 'string',
                'key' => 'meta_cash_on_delivery',
                'value' => '1',
            ),
            75 => 
            array (
                'id' => 3092,
                'product_id' => 1201,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '12',
            ),
            76 => 
            array (
                'id' => 3093,
                'product_id' => 1201,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            77 => 
            array (
                'id' => 3094,
                'product_id' => 1201,
                'type' => 'string',
                'key' => 'meta_warranty_type',
                'value' => 'Brand Warranty',
            ),
            78 => 
            array (
                'id' => 3095,
                'product_id' => 1201,
                'type' => 'string',
                'key' => 'meta_warranty_period',
                'value' => '7 years',
            ),
            79 => 
            array (
                'id' => 3096,
                'product_id' => 1201,
                'type' => 'string',
                'key' => 'meta_warranty_policy',
                'value' => 'Cras ultricies ligula sed magna dictum porta. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi.',
            ),
            80 => 
            array (
                'id' => 3097,
                'product_id' => 1201,
                'type' => 'string',
                'key' => 'meta_purchase_note',
                'value' => '',
            ),
            81 => 
            array (
                'id' => 3098,
                'product_id' => 1201,
                'type' => 'string',
                'key' => 'meta_estimated_delivery',
                'value' => '25',
            ),
            82 => 
            array (
                'id' => 3099,
                'product_id' => 1201,
                'type' => 'string',
                'key' => 'meta_enable_reviews',
                'value' => '1',
            ),
            83 => 
            array (
                'id' => 3100,
                'product_id' => 1201,
                'type' => 'array',
                'key' => 'meta_seo',
                'value' => '{"title":"Pillow Chair without Arm","description":"Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Donec sollicitudin molestie malesuada. Pellentesque in ipsum id orci porta dapibus. Cras ultricies ligula sed magna dictum porta.","image":"20221123/6b2f904f2fafb2b96388290860425dd0.jpg"}',
            ),
            84 => 
            array (
                'id' => 3101,
                'product_id' => 1201,
                'type' => 'array',
                'key' => 'meta_video_files',
                'value' => '[]',
            ),
            85 => 
            array (
                'id' => 3102,
                'product_id' => 1201,
                'type' => 'array',
                'key' => 'meta_video_url',
                'value' => '[]',
            ),
            86 => 
            array (
                'id' => 3103,
                'product_id' => 1202,
                'type' => 'array',
                'key' => 'meta_image',
                'value' => '["20221123/026b90fc64033306bc721aae8f2fd6c4.jpg"]',
            ),
            87 => 
            array (
                'id' => 3104,
                'product_id' => 1202,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            88 => 
            array (
                'id' => 3105,
                'product_id' => 1202,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            89 => 
            array (
                'id' => 3106,
                'product_id' => 1202,
                'type' => 'array',
                'key' => 'meta_external_product',
                'value' => '{"url":"","text":""}',
            ),
            90 => 
            array (
                'id' => 3107,
                'product_id' => 1202,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            91 => 
            array (
                'id' => 3108,
                'product_id' => 1202,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            92 => 
            array (
                'id' => 3109,
                'product_id' => 1202,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            93 => 
            array (
                'id' => 3110,
                'product_id' => 1202,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => '',
            ),
            94 => 
            array (
                'id' => 3111,
                'product_id' => 1202,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            95 => 
            array (
                'id' => 3112,
                'product_id' => 1202,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            96 => 
            array (
                'id' => 3113,
                'product_id' => 1202,
                'type' => 'string',
                'key' => 'meta_hide_stock',
                'value' => '0',
            ),
            97 => 
            array (
                'id' => 3114,
                'product_id' => 1202,
                'type' => 'string',
                'key' => 'meta_stock_status',
                'value' => 'In Stock',
            ),
            98 => 
            array (
                'id' => 3115,
                'product_id' => 1202,
                'type' => 'string',
                'key' => 'meta_individual_sale',
                'value' => '0',
            ),
            99 => 
            array (
                'id' => 3116,
                'product_id' => 1202,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'heavy',
            ),
            100 => 
            array (
                'id' => 3117,
                'product_id' => 1202,
                'type' => 'string',
                'key' => 'meta_cash_on_delivery',
                'value' => '1',
            ),
            101 => 
            array (
                'id' => 3118,
                'product_id' => 1202,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '15',
            ),
            102 => 
            array (
                'id' => 3119,
                'product_id' => 1202,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            103 => 
            array (
                'id' => 3120,
                'product_id' => 1202,
                'type' => 'string',
                'key' => 'meta_warranty_type',
                'value' => 'Seller Warranty',
            ),
            104 => 
            array (
                'id' => 3121,
                'product_id' => 1202,
                'type' => 'string',
                'key' => 'meta_warranty_period',
                'value' => '7 years',
            ),
            105 => 
            array (
                'id' => 3122,
                'product_id' => 1202,
                'type' => 'string',
                'key' => 'meta_warranty_policy',
                'value' => 'Vivamus suscipit tortor eget felis porttitor volutpat. Sed porttitor lectus nibh.',
            ),
            106 => 
            array (
                'id' => 3123,
                'product_id' => 1202,
                'type' => 'string',
                'key' => 'meta_purchase_note',
                'value' => '',
            ),
            107 => 
            array (
                'id' => 3124,
                'product_id' => 1202,
                'type' => 'string',
                'key' => 'meta_estimated_delivery',
                'value' => '25',
            ),
            108 => 
            array (
                'id' => 3125,
                'product_id' => 1202,
                'type' => 'string',
                'key' => 'meta_enable_reviews',
                'value' => '1',
            ),
            109 => 
            array (
                'id' => 3126,
                'product_id' => 1202,
                'type' => 'array',
                'key' => 'meta_seo',
                'value' => '{"title":"Legs Modern Design Pillow Chair","description":"Vivamus suscipit tortor eget felis porttitor volutpat. Donec rutrum congue leo eget malesuada. Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Pellentesque in ipsum id orci porta dapibus. Sed porttitor lectus nibh.","image":"20221123/026b90fc64033306bc721aae8f2fd6c4.jpg"}',
            ),
            110 => 
            array (
                'id' => 3127,
                'product_id' => 1202,
                'type' => 'array',
                'key' => 'meta_video_files',
                'value' => '[]',
            ),
            111 => 
            array (
                'id' => 3128,
                'product_id' => 1202,
                'type' => 'array',
                'key' => 'meta_video_url',
                'value' => '[]',
            ),
            112 => 
            array (
                'id' => 3129,
                'product_id' => 1203,
                'type' => 'array',
                'key' => 'meta_image',
                'value' => '["20221123/f8256ae374c1432ad6b8ac1e81fde25e.jpg"]',
            ),
            113 => 
            array (
                'id' => 3130,
                'product_id' => 1203,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            114 => 
            array (
                'id' => 3131,
                'product_id' => 1203,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            115 => 
            array (
                'id' => 3132,
                'product_id' => 1203,
                'type' => 'array',
                'key' => 'meta_external_product',
                'value' => '{"url":"","text":""}',
            ),
            116 => 
            array (
                'id' => 3133,
                'product_id' => 1203,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            117 => 
            array (
                'id' => 3134,
                'product_id' => 1203,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            118 => 
            array (
                'id' => 3135,
                'product_id' => 1203,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            119 => 
            array (
                'id' => 3136,
                'product_id' => 1203,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => '',
            ),
            120 => 
            array (
                'id' => 3137,
                'product_id' => 1203,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            121 => 
            array (
                'id' => 3138,
                'product_id' => 1203,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            122 => 
            array (
                'id' => 3139,
                'product_id' => 1203,
                'type' => 'string',
                'key' => 'meta_hide_stock',
                'value' => '0',
            ),
            123 => 
            array (
                'id' => 3140,
                'product_id' => 1203,
                'type' => 'string',
                'key' => 'meta_stock_status',
                'value' => 'In Stock',
            ),
            124 => 
            array (
                'id' => 3141,
                'product_id' => 1203,
                'type' => 'string',
                'key' => 'meta_individual_sale',
                'value' => '0',
            ),
            125 => 
            array (
                'id' => 3142,
                'product_id' => 1203,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'heavy',
            ),
            126 => 
            array (
                'id' => 3143,
                'product_id' => 1203,
                'type' => 'string',
                'key' => 'meta_cash_on_delivery',
                'value' => '1',
            ),
            127 => 
            array (
                'id' => 3144,
                'product_id' => 1203,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '12',
            ),
            128 => 
            array (
                'id' => 3145,
                'product_id' => 1203,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            129 => 
            array (
                'id' => 3146,
                'product_id' => 1203,
                'type' => 'string',
                'key' => 'meta_warranty_type',
                'value' => 'Seller Warranty',
            ),
            130 => 
            array (
                'id' => 3147,
                'product_id' => 1203,
                'type' => 'string',
                'key' => 'meta_warranty_period',
                'value' => '7 months',
            ),
            131 => 
            array (
                'id' => 3148,
                'product_id' => 1203,
                'type' => 'string',
                'key' => 'meta_warranty_policy',
                'value' => '',
            ),
            132 => 
            array (
                'id' => 3149,
                'product_id' => 1203,
                'type' => 'string',
                'key' => 'meta_purchase_note',
                'value' => '',
            ),
            133 => 
            array (
                'id' => 3150,
                'product_id' => 1203,
                'type' => 'string',
                'key' => 'meta_estimated_delivery',
                'value' => '15',
            ),
            134 => 
            array (
                'id' => 3151,
                'product_id' => 1203,
                'type' => 'string',
                'key' => 'meta_enable_reviews',
                'value' => '1',
            ),
            135 => 
            array (
                'id' => 3152,
                'product_id' => 1203,
                'type' => 'array',
                'key' => 'meta_seo',
                'value' => '{"title":"Modern Design Four Legs Chair withou Arms","description":"Donec sollicitudin molestie malesuada. Pellentesque in ipsum id orci porta dapibus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Sed porttitor lectus nibh.","image":"20221123/f8256ae374c1432ad6b8ac1e81fde25e.jpg"}',
            ),
            136 => 
            array (
                'id' => 3153,
                'product_id' => 1203,
                'type' => 'array',
                'key' => 'meta_video_files',
                'value' => '[]',
            ),
            137 => 
            array (
                'id' => 3154,
                'product_id' => 1203,
                'type' => 'array',
                'key' => 'meta_video_url',
                'value' => '[]',
            ),
            138 => 
            array (
                'id' => 3155,
                'product_id' => 1204,
                'type' => 'array',
                'key' => 'meta_image',
                'value' => '["20221123/c3a40267142cdf69026abdffc1c50df6.jpg"]',
            ),
            139 => 
            array (
                'id' => 3156,
                'product_id' => 1204,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            140 => 
            array (
                'id' => 3157,
                'product_id' => 1204,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            141 => 
            array (
                'id' => 3158,
                'product_id' => 1204,
                'type' => 'array',
                'key' => 'meta_external_product',
                'value' => '{"url":"","text":""}',
            ),
            142 => 
            array (
                'id' => 3159,
                'product_id' => 1204,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            143 => 
            array (
                'id' => 3160,
                'product_id' => 1204,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            144 => 
            array (
                'id' => 3161,
                'product_id' => 1204,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            145 => 
            array (
                'id' => 3162,
                'product_id' => 1204,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            146 => 
            array (
                'id' => 3163,
                'product_id' => 1204,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            147 => 
            array (
                'id' => 3164,
                'product_id' => 1204,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            148 => 
            array (
                'id' => 3165,
                'product_id' => 1204,
                'type' => 'string',
                'key' => 'meta_hide_stock',
                'value' => '0',
            ),
            149 => 
            array (
                'id' => 3166,
                'product_id' => 1204,
                'type' => 'string',
                'key' => 'meta_stock_status',
                'value' => 'In Stock',
            ),
            150 => 
            array (
                'id' => 3167,
                'product_id' => 1204,
                'type' => 'string',
                'key' => 'meta_individual_sale',
                'value' => '0',
            ),
            151 => 
            array (
                'id' => 3168,
                'product_id' => 1204,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'heavy',
            ),
            152 => 
            array (
                'id' => 3169,
                'product_id' => 1204,
                'type' => 'string',
                'key' => 'meta_cash_on_delivery',
                'value' => '1',
            ),
            153 => 
            array (
                'id' => 3170,
                'product_id' => 1204,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '7',
            ),
            154 => 
            array (
                'id' => 3171,
                'product_id' => 1204,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            155 => 
            array (
                'id' => 3172,
                'product_id' => 1204,
                'type' => 'string',
                'key' => 'meta_warranty_type',
                'value' => 'Brand Warranty',
            ),
            156 => 
            array (
                'id' => 3173,
                'product_id' => 1204,
                'type' => 'string',
                'key' => 'meta_warranty_period',
                'value' => '5 years',
            ),
            157 => 
            array (
                'id' => 3174,
                'product_id' => 1204,
                'type' => 'string',
                'key' => 'meta_warranty_policy',
                'value' => 'Proin eget tortor risus. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.',
            ),
            158 => 
            array (
                'id' => 3175,
                'product_id' => 1204,
                'type' => 'string',
                'key' => 'meta_purchase_note',
                'value' => '',
            ),
            159 => 
            array (
                'id' => 3176,
                'product_id' => 1204,
                'type' => 'string',
                'key' => 'meta_estimated_delivery',
                'value' => '20',
            ),
            160 => 
            array (
                'id' => 3177,
                'product_id' => 1204,
                'type' => 'string',
                'key' => 'meta_enable_reviews',
                'value' => '1',
            ),
            161 => 
            array (
                'id' => 3178,
                'product_id' => 1204,
                'type' => 'array',
                'key' => 'meta_seo',
                'value' => '{"title":"Modern Designer Chair Isolated White Background Furniture Set 3D Render","description":"Vivamus suscipit tortor eget felis porttitor volutpat. Vivamus suscipit tortor eget felis porttitor volutpat. Pellentesque in ipsum id orci porta dapibus.","image":"20221123/c3a40267142cdf69026abdffc1c50df6.jpg"}',
            ),
            162 => 
            array (
                'id' => 3179,
                'product_id' => 1204,
                'type' => 'array',
                'key' => 'meta_video_files',
                'value' => '[]',
            ),
            163 => 
            array (
                'id' => 3180,
                'product_id' => 1204,
                'type' => 'array',
                'key' => 'meta_video_url',
                'value' => '["https:\\/\\/player.vimeo.com\\/video\\/330420305?h=0c269f7e82&color=f7f7f7&title=0&byline=0&portrait=0"]',
            ),
            164 => 
            array (
                'id' => 3181,
                'product_id' => 1205,
                'type' => 'array',
                'key' => 'meta_image',
                'value' => '["20221123/8455776f6791cd5479bb9a88c829876c.png"]',
            ),
            165 => 
            array (
                'id' => 3182,
                'product_id' => 1205,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            166 => 
            array (
                'id' => 3183,
                'product_id' => 1205,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            167 => 
            array (
                'id' => 3184,
                'product_id' => 1205,
                'type' => 'array',
                'key' => 'meta_external_product',
                'value' => '{"url":"","text":""}',
            ),
            168 => 
            array (
                'id' => 3185,
                'product_id' => 1205,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            169 => 
            array (
                'id' => 3186,
                'product_id' => 1205,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            170 => 
            array (
                'id' => 3187,
                'product_id' => 1205,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            171 => 
            array (
                'id' => 3188,
                'product_id' => 1205,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            172 => 
            array (
                'id' => 3189,
                'product_id' => 1205,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            173 => 
            array (
                'id' => 3190,
                'product_id' => 1205,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            174 => 
            array (
                'id' => 3191,
                'product_id' => 1205,
                'type' => 'string',
                'key' => 'meta_hide_stock',
                'value' => '0',
            ),
            175 => 
            array (
                'id' => 3192,
                'product_id' => 1205,
                'type' => 'string',
                'key' => 'meta_stock_status',
                'value' => 'In Stock',
            ),
            176 => 
            array (
                'id' => 3193,
                'product_id' => 1205,
                'type' => 'string',
                'key' => 'meta_individual_sale',
                'value' => '0',
            ),
            177 => 
            array (
                'id' => 3194,
                'product_id' => 1205,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'heavy',
            ),
            178 => 
            array (
                'id' => 3195,
                'product_id' => 1205,
                'type' => 'string',
                'key' => 'meta_cash_on_delivery',
                'value' => '1',
            ),
            179 => 
            array (
                'id' => 3196,
                'product_id' => 1205,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            180 => 
            array (
                'id' => 3197,
                'product_id' => 1205,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            181 => 
            array (
                'id' => 3198,
                'product_id' => 1205,
                'type' => 'string',
                'key' => 'meta_warranty_type',
                'value' => 'Brand Warranty',
            ),
            182 => 
            array (
                'id' => 3199,
                'product_id' => 1205,
                'type' => 'string',
                'key' => 'meta_warranty_period',
                'value' => '5 years',
            ),
            183 => 
            array (
                'id' => 3200,
                'product_id' => 1205,
                'type' => 'string',
                'key' => 'meta_warranty_policy',
                'value' => 'Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.',
            ),
            184 => 
            array (
                'id' => 3201,
                'product_id' => 1205,
                'type' => 'string',
                'key' => 'meta_purchase_note',
                'value' => '',
            ),
            185 => 
            array (
                'id' => 3202,
                'product_id' => 1205,
                'type' => 'string',
                'key' => 'meta_estimated_delivery',
                'value' => '15',
            ),
            186 => 
            array (
                'id' => 3203,
                'product_id' => 1205,
                'type' => 'string',
                'key' => 'meta_enable_reviews',
                'value' => '1',
            ),
            187 => 
            array (
                'id' => 3204,
                'product_id' => 1205,
                'type' => 'array',
                'key' => 'meta_seo',
                'value' => '{"title":"One Seat Pillow Yellow Sufa","description":"Nulla quis lorem ut libero malesuada feugiat. Curabitur aliquet quam id dui posuere blandit.","image":"20221123/8455776f6791cd5479bb9a88c829876c.png"}',
            ),
            188 => 
            array (
                'id' => 3205,
                'product_id' => 1205,
                'type' => 'array',
                'key' => 'meta_video_files',
                'value' => '[]',
            ),
            189 => 
            array (
                'id' => 3206,
                'product_id' => 1205,
                'type' => 'array',
                'key' => 'meta_video_url',
                'value' => '["https:\\/\\/player.vimeo.com\\/video\\/330420305?h=0c269f7e82&color=f7f7f7&title=0&byline=0&portrait=0"]',
            ),
            190 => 
            array (
                'id' => 3364,
                'product_id' => 1205,
                'type' => 'array',
                'key' => 'attributes',
                'value' => '{"color":{"name":"Color","position":"0","key":"color","value":["186"],"visibility":"1","variation":"0","attribute_id":"26"},"material":{"name":"Material","position":"1","key":"material","value":["Wood"],"visibility":"1","variation":"0","attribute_id":""},"seatingcapacity":{"name":"Seating Capacity","position":"2","key":"seatingcapacity","value":["Single"],"visibility":"1","variation":"0","attribute_id":""}}',
            ),
            191 => 
            array (
                'id' => 3444,
                'product_id' => 1204,
                'type' => 'array',
                'key' => 'attributes',
                'value' => '{"color":{"name":"Color","position":"0","key":"color","value":["186"],"visibility":"1","variation":"0","attribute_id":"26"},"material":{"name":"Material","position":"1","key":"material","value":["Wood"],"visibility":"1","variation":"0","attribute_id":""},"seatingcapacity":{"name":"Seating Capacity","position":"2","key":"seatingcapacity","value":["Single"],"visibility":"1","variation":"0","attribute_id":""}}',
            ),
            192 => 
            array (
                'id' => 3524,
                'product_id' => 1203,
                'type' => 'array',
                'key' => 'attributes',
                'value' => '{"color":{"name":"Color","position":"0","key":"color","value":["186"],"visibility":"1","variation":"0","attribute_id":"26"},"material":{"name":"Material","position":"1","key":"material","value":["Wood"],"visibility":"1","variation":"0","attribute_id":""},"seatingcapacity":{"name":"Seating Capacity","position":"2","key":"seatingcapacity","value":["Single"],"visibility":"1","variation":"0","attribute_id":""}}',
            ),
            193 => 
            array (
                'id' => 3552,
                'product_id' => 1202,
                'type' => 'array',
                'key' => 'attributes',
                'value' => '{"color":{"name":"Color","position":"0","key":"color","value":["186"],"visibility":"1","variation":"0","attribute_id":"26"},"material":{"name":"Material","position":"1","key":"material","value":["Wood"],"visibility":"1","variation":"0","attribute_id":""},"seatingcapacity":{"name":"Seating Capacity","position":"2","key":"seatingcapacity","value":["Single"],"visibility":"1","variation":"0","attribute_id":""}}',
            ),
            194 => 
            array (
                'id' => 3580,
                'product_id' => 1201,
                'type' => 'array',
                'key' => 'attributes',
                'value' => '{"color":{"name":"Color","position":"0","key":"color","value":["186"],"visibility":"1","variation":"0","attribute_id":"26"},"material":{"name":"Material","position":"1","key":"material","value":["Wood"],"visibility":"1","variation":"0","attribute_id":""},"seatingcapacity":{"name":"Seating Capacity","position":"2","key":"seatingcapacity","value":["Single"],"visibility":"1","variation":"0","attribute_id":""}}',
            ),
            195 => 
            array (
                'id' => 3634,
                'product_id' => 1200,
                'type' => 'array',
                'key' => 'attributes',
                'value' => '{"color":{"name":"Color","position":"0","key":"color","value":["186"],"visibility":"1","variation":"0","attribute_id":"26"},"material":{"name":"Material","position":"1","key":"material","value":["Wood"],"visibility":"1","variation":"0","attribute_id":""},"seatingcapacity":{"name":"Seating Capacity","position":"2","key":"seatingcapacity","value":["Single"],"visibility":"1","variation":"0","attribute_id":""}}',
            ),
            196 => 
            array (
                'id' => 3636,
                'product_id' => 1199,
                'type' => 'array',
                'key' => 'attributes',
                'value' => '{"color":{"name":"Color","position":"0","key":"color","value":["186"],"visibility":"1","variation":"0","attribute_id":"26"},"material":{"name":"Material","position":"1","key":"material","value":["Cotton"],"visibility":"1","variation":"0","attribute_id":""},"size":{"name":"Size","position":"2","key":"size","value":["S","M","L"],"visibility":"1","variation":"0","attribute_id":""}}',
            ),
            197 => 
            array (
                'id' => 3690,
                'product_id' => 1198,
                'type' => 'array',
                'key' => 'attributes',
                'value' => '{"color":{"name":"Color","position":"0","key":"color","value":["186"],"visibility":"1","variation":"0","attribute_id":"26"},"material":{"name":"Material","position":"1","key":"material","value":["Cotton"],"visibility":"1","variation":"0","attribute_id":""},"size":{"name":"Size","position":"2","key":"size","value":["S","M","L"],"visibility":"1","variation":"0","attribute_id":""}}',
            ),
            198 => 
            array (
                'id' => 3795,
                'product_id' => 1197,
                'type' => 'array',
                'key' => 'attributes',
                'value' => '{"color":{"name":"Color","position":"0","key":"color","value":["186"],"visibility":"1","variation":"0","attribute_id":"26"},"material":{"name":"Material","position":"1","key":"material","value":["Cotton"],"visibility":"1","variation":"0","attribute_id":""},"size":{"name":"Size","position":"2","key":"size","value":["S","M","L"],"visibility":"1","variation":"0","attribute_id":""}}',
            ),
            199 => 
            array (
                'id' => 3875,
                'product_id' => 1196,
                'type' => 'array',
                'key' => 'attributes',
                'value' => '{"color":{"name":"Color","position":"0","key":"color","value":["186"],"visibility":"1","variation":"0","attribute_id":"26"},"material":{"name":"Material","position":"1","key":"material","value":["Cotton"],"visibility":"1","variation":"0","attribute_id":""},"size":{"name":"Size","position":"2","key":"size","value":["S","M","L"],"visibility":"1","variation":"0","attribute_id":""}}',
            ),
            200 => 
            array (
                'id' => 3903,
                'product_id' => 1195,
                'type' => 'array',
                'key' => 'attributes',
                'value' => '{"color":{"name":"Color","position":"0","key":"color","value":["186"],"visibility":"1","variation":"0","attribute_id":"26"},"material":{"name":"Material","position":"1","key":"material","value":["Cotton"],"visibility":"1","variation":"0","attribute_id":""},"size":{"name":"Size","position":"2","key":"size","value":["S","M","L"],"visibility":"1","variation":"0","attribute_id":""}}',
            ),
            201 => 
            array (
                'id' => 3931,
                'product_id' => 1194,
                'type' => 'array',
                'key' => 'attributes',
                'value' => '{"color":{"name":"Color","position":"0","key":"color","value":["187","188"],"visibility":"1","variation":"1","attribute_id":"26"},"material":{"name":"Material","position":"1","key":"material","value":["Cotton"],"visibility":"1","variation":"0","attribute_id":""},"size":{"name":"Size","position":"2","key":"size","value":["S","M","L"],"visibility":"1","variation":"1","attribute_id":""}}',
            ),
            202 => 
            array (
                'id' => 3958,
                'product_id' => 1206,
                'type' => 'null',
                'key' => 'attribute_color',
                'value' => '187',
            ),
            203 => 
            array (
                'id' => 3959,
                'product_id' => 1206,
                'type' => 'null',
                'key' => 'attribute_size',
                'value' => 'S',
            ),
            204 => 
            array (
                'id' => 3960,
                'product_id' => 1207,
                'type' => 'null',
                'key' => 'attribute_color',
                'value' => '187',
            ),
            205 => 
            array (
                'id' => 3961,
                'product_id' => 1207,
                'type' => 'null',
                'key' => 'attribute_size',
                'value' => 'M',
            ),
            206 => 
            array (
                'id' => 3962,
                'product_id' => 1208,
                'type' => 'null',
                'key' => 'attribute_color',
                'value' => '187',
            ),
            207 => 
            array (
                'id' => 3963,
                'product_id' => 1208,
                'type' => 'null',
                'key' => 'attribute_size',
                'value' => 'L',
            ),
            208 => 
            array (
                'id' => 3964,
                'product_id' => 1209,
                'type' => 'null',
                'key' => 'attribute_color',
                'value' => '188',
            ),
            209 => 
            array (
                'id' => 3965,
                'product_id' => 1209,
                'type' => 'null',
                'key' => 'attribute_size',
                'value' => 'S',
            ),
            210 => 
            array (
                'id' => 3966,
                'product_id' => 1210,
                'type' => 'null',
                'key' => 'attribute_color',
                'value' => '188',
            ),
            211 => 
            array (
                'id' => 3967,
                'product_id' => 1210,
                'type' => 'null',
                'key' => 'attribute_size',
                'value' => 'M',
            ),
            212 => 
            array (
                'id' => 3968,
                'product_id' => 1211,
                'type' => 'null',
                'key' => 'attribute_color',
                'value' => '188',
            ),
            213 => 
            array (
                'id' => 3969,
                'product_id' => 1211,
                'type' => 'null',
                'key' => 'attribute_size',
                'value' => 'L',
            ),
            214 => 
            array (
                'id' => 3970,
                'product_id' => 1206,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221120/aecae02fb3f920630d153e57f086cd39.jpg',
            ),
            215 => 
            array (
                'id' => 3971,
                'product_id' => 1206,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            216 => 
            array (
                'id' => 3972,
                'product_id' => 1206,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            217 => 
            array (
                'id' => 3973,
                'product_id' => 1206,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            218 => 
            array (
                'id' => 3974,
                'product_id' => 1206,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            219 => 
            array (
                'id' => 3975,
                'product_id' => 1206,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '0.30',
            ),
            220 => 
            array (
                'id' => 3976,
                'product_id' => 1206,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            221 => 
            array (
                'id' => 3977,
                'product_id' => 1206,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            222 => 
            array (
                'id' => 3978,
                'product_id' => 1206,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            223 => 
            array (
                'id' => 3979,
                'product_id' => 1206,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            224 => 
            array (
                'id' => 3980,
                'product_id' => 1206,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            225 => 
            array (
                'id' => 3981,
                'product_id' => 1206,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            226 => 
            array (
                'id' => 3982,
                'product_id' => 1206,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '0',
            ),
            227 => 
            array (
                'id' => 3983,
                'product_id' => 1207,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221120/aecae02fb3f920630d153e57f086cd39.jpg',
            ),
            228 => 
            array (
                'id' => 3984,
                'product_id' => 1207,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            229 => 
            array (
                'id' => 3985,
                'product_id' => 1207,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            230 => 
            array (
                'id' => 3986,
                'product_id' => 1207,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            231 => 
            array (
                'id' => 3987,
                'product_id' => 1207,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            232 => 
            array (
                'id' => 3988,
                'product_id' => 1207,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '0.30',
            ),
            233 => 
            array (
                'id' => 3989,
                'product_id' => 1207,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            234 => 
            array (
                'id' => 3990,
                'product_id' => 1207,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            235 => 
            array (
                'id' => 3991,
                'product_id' => 1207,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            236 => 
            array (
                'id' => 3992,
                'product_id' => 1207,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            237 => 
            array (
                'id' => 3993,
                'product_id' => 1207,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            238 => 
            array (
                'id' => 3994,
                'product_id' => 1207,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            239 => 
            array (
                'id' => 3995,
                'product_id' => 1207,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '1',
            ),
            240 => 
            array (
                'id' => 3996,
                'product_id' => 1208,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221120/aecae02fb3f920630d153e57f086cd39.jpg',
            ),
            241 => 
            array (
                'id' => 3997,
                'product_id' => 1208,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            242 => 
            array (
                'id' => 3998,
                'product_id' => 1208,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            243 => 
            array (
                'id' => 3999,
                'product_id' => 1208,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            244 => 
            array (
                'id' => 4000,
                'product_id' => 1208,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            245 => 
            array (
                'id' => 4001,
                'product_id' => 1208,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '0.30',
            ),
            246 => 
            array (
                'id' => 4002,
                'product_id' => 1208,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            247 => 
            array (
                'id' => 4003,
                'product_id' => 1208,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            248 => 
            array (
                'id' => 4004,
                'product_id' => 1208,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            249 => 
            array (
                'id' => 4005,
                'product_id' => 1208,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            250 => 
            array (
                'id' => 4006,
                'product_id' => 1208,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            251 => 
            array (
                'id' => 4007,
                'product_id' => 1208,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            252 => 
            array (
                'id' => 4008,
                'product_id' => 1208,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '2',
            ),
            253 => 
            array (
                'id' => 4009,
                'product_id' => 1209,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221120/13d2c440f58a73a30cb67b19202a83e2.jpg',
            ),
            254 => 
            array (
                'id' => 4010,
                'product_id' => 1209,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            255 => 
            array (
                'id' => 4011,
                'product_id' => 1209,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            256 => 
            array (
                'id' => 4012,
                'product_id' => 1209,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            257 => 
            array (
                'id' => 4013,
                'product_id' => 1209,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            258 => 
            array (
                'id' => 4014,
                'product_id' => 1209,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '0.30',
            ),
            259 => 
            array (
                'id' => 4015,
                'product_id' => 1209,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            260 => 
            array (
                'id' => 4016,
                'product_id' => 1209,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            261 => 
            array (
                'id' => 4017,
                'product_id' => 1209,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            262 => 
            array (
                'id' => 4018,
                'product_id' => 1209,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            263 => 
            array (
                'id' => 4019,
                'product_id' => 1209,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            264 => 
            array (
                'id' => 4020,
                'product_id' => 1209,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            265 => 
            array (
                'id' => 4021,
                'product_id' => 1209,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '3',
            ),
            266 => 
            array (
                'id' => 4022,
                'product_id' => 1210,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221120/13d2c440f58a73a30cb67b19202a83e2.jpg',
            ),
            267 => 
            array (
                'id' => 4023,
                'product_id' => 1210,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            268 => 
            array (
                'id' => 4024,
                'product_id' => 1210,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            269 => 
            array (
                'id' => 4025,
                'product_id' => 1210,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            270 => 
            array (
                'id' => 4026,
                'product_id' => 1210,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            271 => 
            array (
                'id' => 4027,
                'product_id' => 1210,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '0.30',
            ),
            272 => 
            array (
                'id' => 4028,
                'product_id' => 1210,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            273 => 
            array (
                'id' => 4029,
                'product_id' => 1210,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            274 => 
            array (
                'id' => 4030,
                'product_id' => 1210,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            275 => 
            array (
                'id' => 4031,
                'product_id' => 1210,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            276 => 
            array (
                'id' => 4032,
                'product_id' => 1210,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            277 => 
            array (
                'id' => 4033,
                'product_id' => 1210,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            278 => 
            array (
                'id' => 4034,
                'product_id' => 1210,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '4',
            ),
            279 => 
            array (
                'id' => 4035,
                'product_id' => 1211,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221120/13d2c440f58a73a30cb67b19202a83e2.jpg',
            ),
            280 => 
            array (
                'id' => 4036,
                'product_id' => 1211,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            281 => 
            array (
                'id' => 4037,
                'product_id' => 1211,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            282 => 
            array (
                'id' => 4038,
                'product_id' => 1211,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            283 => 
            array (
                'id' => 4039,
                'product_id' => 1211,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            284 => 
            array (
                'id' => 4040,
                'product_id' => 1211,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '0.30',
            ),
            285 => 
            array (
                'id' => 4041,
                'product_id' => 1211,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            286 => 
            array (
                'id' => 4042,
                'product_id' => 1211,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            287 => 
            array (
                'id' => 4043,
                'product_id' => 1211,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            288 => 
            array (
                'id' => 4044,
                'product_id' => 1211,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            289 => 
            array (
                'id' => 4045,
                'product_id' => 1211,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            290 => 
            array (
                'id' => 4046,
                'product_id' => 1211,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            291 => 
            array (
                'id' => 4047,
                'product_id' => 1211,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '5',
            ),
            292 => 
            array (
                'id' => 4048,
                'product_id' => 1194,
                'type' => 'array',
                'key' => 'default_attributes',
                'value' => '{"color":"","size":""}',
            ),
            293 => 
            array (
                'id' => 4088,
                'product_id' => 1206,
                'type' => 'string',
                'key' => 'meta_scheduled_sale',
                'value' => '0',
            ),
            294 => 
            array (
                'id' => 4089,
                'product_id' => 1207,
                'type' => 'string',
                'key' => 'meta_scheduled_sale',
                'value' => '0',
            ),
            295 => 
            array (
                'id' => 4090,
                'product_id' => 1208,
                'type' => 'string',
                'key' => 'meta_scheduled_sale',
                'value' => '0',
            ),
            296 => 
            array (
                'id' => 4091,
                'product_id' => 1209,
                'type' => 'string',
                'key' => 'meta_scheduled_sale',
                'value' => '0',
            ),
            297 => 
            array (
                'id' => 4092,
                'product_id' => 1210,
                'type' => 'string',
                'key' => 'meta_scheduled_sale',
                'value' => '0',
            ),
            298 => 
            array (
                'id' => 4093,
                'product_id' => 1211,
                'type' => 'string',
                'key' => 'meta_scheduled_sale',
                'value' => '0',
            ),
            299 => 
            array (
                'id' => 4296,
                'product_id' => 1193,
                'type' => 'array',
                'key' => 'attributes',
                'value' => '{"color":{"name":"Color","position":"0","key":"color","value":["186"],"visibility":"1","variation":"0","attribute_id":"26"},"material":{"name":"Material","position":"1","key":"material","value":["Cotton"],"visibility":"1","variation":"0","attribute_id":""},"size":{"name":"Size","position":"2","key":"size","value":["S","M","L"],"visibility":"1","variation":"0","attribute_id":""}}',
            ),
            300 => 
            array (
                'id' => 4350,
                'product_id' => 1192,
                'type' => 'array',
                'key' => 'attributes',
                'value' => '{"color":{"name":"Color","position":"0","key":"color","value":["25","27"],"visibility":"1","variation":"1","attribute_id":"26"},"material":{"name":"Material","position":"1","key":"material","value":["Cotton"],"visibility":"1","variation":"0","attribute_id":""},"size":{"name":"Size","position":"2","key":"size","value":["S","M","L"],"visibility":"1","variation":"1","attribute_id":""}}',
            ),
            301 => 
            array (
                'id' => 4355,
                'product_id' => 1215,
                'type' => 'null',
                'key' => 'attribute_color',
                'value' => '25',
            ),
            302 => 
            array (
                'id' => 4356,
                'product_id' => 1215,
                'type' => 'null',
                'key' => 'attribute_size',
                'value' => 'S',
            ),
            303 => 
            array (
                'id' => 4357,
                'product_id' => 1216,
                'type' => 'null',
                'key' => 'attribute_color',
                'value' => '25',
            ),
            304 => 
            array (
                'id' => 4358,
                'product_id' => 1216,
                'type' => 'null',
                'key' => 'attribute_size',
                'value' => 'M',
            ),
            305 => 
            array (
                'id' => 4359,
                'product_id' => 1217,
                'type' => 'null',
                'key' => 'attribute_color',
                'value' => '25',
            ),
            306 => 
            array (
                'id' => 4360,
                'product_id' => 1217,
                'type' => 'null',
                'key' => 'attribute_size',
                'value' => 'L',
            ),
            307 => 
            array (
                'id' => 4361,
                'product_id' => 1218,
                'type' => 'null',
                'key' => 'attribute_color',
                'value' => '27',
            ),
            308 => 
            array (
                'id' => 4362,
                'product_id' => 1218,
                'type' => 'null',
                'key' => 'attribute_size',
                'value' => 'S',
            ),
            309 => 
            array (
                'id' => 4363,
                'product_id' => 1219,
                'type' => 'null',
                'key' => 'attribute_color',
                'value' => '27',
            ),
            310 => 
            array (
                'id' => 4364,
                'product_id' => 1219,
                'type' => 'null',
                'key' => 'attribute_size',
                'value' => 'M',
            ),
            311 => 
            array (
                'id' => 4365,
                'product_id' => 1220,
                'type' => 'null',
                'key' => 'attribute_color',
                'value' => '27',
            ),
            312 => 
            array (
                'id' => 4366,
                'product_id' => 1220,
                'type' => 'null',
                'key' => 'attribute_size',
                'value' => 'L',
            ),
            313 => 
            array (
                'id' => 4367,
                'product_id' => 1215,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221120/a2d7b299220cc0defef58fc76b7fa838.jpg',
            ),
            314 => 
            array (
                'id' => 4368,
                'product_id' => 1215,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            315 => 
            array (
                'id' => 4369,
                'product_id' => 1215,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            316 => 
            array (
                'id' => 4370,
                'product_id' => 1215,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            317 => 
            array (
                'id' => 4371,
                'product_id' => 1215,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            318 => 
            array (
                'id' => 4372,
                'product_id' => 1215,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '0.25',
            ),
            319 => 
            array (
                'id' => 4373,
                'product_id' => 1215,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            320 => 
            array (
                'id' => 4374,
                'product_id' => 1215,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            321 => 
            array (
                'id' => 4375,
                'product_id' => 1215,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            322 => 
            array (
                'id' => 4376,
                'product_id' => 1215,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            323 => 
            array (
                'id' => 4377,
                'product_id' => 1215,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            324 => 
            array (
                'id' => 4378,
                'product_id' => 1215,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            325 => 
            array (
                'id' => 4379,
                'product_id' => 1215,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '0',
            ),
            326 => 
            array (
                'id' => 4380,
                'product_id' => 1216,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221120/a2d7b299220cc0defef58fc76b7fa838.jpg',
            ),
            327 => 
            array (
                'id' => 4381,
                'product_id' => 1216,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            328 => 
            array (
                'id' => 4382,
                'product_id' => 1216,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            329 => 
            array (
                'id' => 4383,
                'product_id' => 1216,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            330 => 
            array (
                'id' => 4384,
                'product_id' => 1216,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            331 => 
            array (
                'id' => 4385,
                'product_id' => 1216,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '0.25',
            ),
            332 => 
            array (
                'id' => 4386,
                'product_id' => 1216,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            333 => 
            array (
                'id' => 4387,
                'product_id' => 1216,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            334 => 
            array (
                'id' => 4388,
                'product_id' => 1216,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            335 => 
            array (
                'id' => 4389,
                'product_id' => 1216,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            336 => 
            array (
                'id' => 4390,
                'product_id' => 1216,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            337 => 
            array (
                'id' => 4391,
                'product_id' => 1216,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            338 => 
            array (
                'id' => 4392,
                'product_id' => 1216,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '1',
            ),
            339 => 
            array (
                'id' => 4393,
                'product_id' => 1217,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221120/a2d7b299220cc0defef58fc76b7fa838.jpg',
            ),
            340 => 
            array (
                'id' => 4394,
                'product_id' => 1217,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            341 => 
            array (
                'id' => 4395,
                'product_id' => 1217,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            342 => 
            array (
                'id' => 4396,
                'product_id' => 1217,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            343 => 
            array (
                'id' => 4397,
                'product_id' => 1217,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            344 => 
            array (
                'id' => 4398,
                'product_id' => 1217,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '0.25',
            ),
            345 => 
            array (
                'id' => 4399,
                'product_id' => 1217,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            346 => 
            array (
                'id' => 4400,
                'product_id' => 1217,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            347 => 
            array (
                'id' => 4401,
                'product_id' => 1217,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            348 => 
            array (
                'id' => 4402,
                'product_id' => 1217,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            349 => 
            array (
                'id' => 4403,
                'product_id' => 1217,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            350 => 
            array (
                'id' => 4404,
                'product_id' => 1217,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            351 => 
            array (
                'id' => 4405,
                'product_id' => 1217,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '2',
            ),
            352 => 
            array (
                'id' => 4406,
                'product_id' => 1218,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221120/d265842eff83d6f419b0ca1582f87da8.jpg',
            ),
            353 => 
            array (
                'id' => 4407,
                'product_id' => 1218,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            354 => 
            array (
                'id' => 4408,
                'product_id' => 1218,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            355 => 
            array (
                'id' => 4409,
                'product_id' => 1218,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            356 => 
            array (
                'id' => 4410,
                'product_id' => 1218,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            357 => 
            array (
                'id' => 4411,
                'product_id' => 1218,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '0.25',
            ),
            358 => 
            array (
                'id' => 4412,
                'product_id' => 1218,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            359 => 
            array (
                'id' => 4413,
                'product_id' => 1218,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            360 => 
            array (
                'id' => 4414,
                'product_id' => 1218,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            361 => 
            array (
                'id' => 4415,
                'product_id' => 1218,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            362 => 
            array (
                'id' => 4416,
                'product_id' => 1218,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            363 => 
            array (
                'id' => 4417,
                'product_id' => 1218,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            364 => 
            array (
                'id' => 4418,
                'product_id' => 1218,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '3',
            ),
            365 => 
            array (
                'id' => 4419,
                'product_id' => 1219,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221120/d265842eff83d6f419b0ca1582f87da8.jpg',
            ),
            366 => 
            array (
                'id' => 4420,
                'product_id' => 1219,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            367 => 
            array (
                'id' => 4421,
                'product_id' => 1219,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            368 => 
            array (
                'id' => 4422,
                'product_id' => 1219,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            369 => 
            array (
                'id' => 4423,
                'product_id' => 1219,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            370 => 
            array (
                'id' => 4424,
                'product_id' => 1219,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '0.25',
            ),
            371 => 
            array (
                'id' => 4425,
                'product_id' => 1219,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            372 => 
            array (
                'id' => 4426,
                'product_id' => 1219,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            373 => 
            array (
                'id' => 4427,
                'product_id' => 1219,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            374 => 
            array (
                'id' => 4428,
                'product_id' => 1219,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            375 => 
            array (
                'id' => 4429,
                'product_id' => 1219,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            376 => 
            array (
                'id' => 4430,
                'product_id' => 1219,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            377 => 
            array (
                'id' => 4431,
                'product_id' => 1219,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '4',
            ),
            378 => 
            array (
                'id' => 4432,
                'product_id' => 1220,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221120/d265842eff83d6f419b0ca1582f87da8.jpg',
            ),
            379 => 
            array (
                'id' => 4433,
                'product_id' => 1220,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            380 => 
            array (
                'id' => 4434,
                'product_id' => 1220,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            381 => 
            array (
                'id' => 4435,
                'product_id' => 1220,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            382 => 
            array (
                'id' => 4436,
                'product_id' => 1220,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            383 => 
            array (
                'id' => 4437,
                'product_id' => 1220,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '0.25',
            ),
            384 => 
            array (
                'id' => 4438,
                'product_id' => 1220,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            385 => 
            array (
                'id' => 4439,
                'product_id' => 1220,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            386 => 
            array (
                'id' => 4440,
                'product_id' => 1220,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            387 => 
            array (
                'id' => 4441,
                'product_id' => 1220,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            388 => 
            array (
                'id' => 4442,
                'product_id' => 1220,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            389 => 
            array (
                'id' => 4443,
                'product_id' => 1220,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            390 => 
            array (
                'id' => 4444,
                'product_id' => 1220,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '5',
            ),
            391 => 
            array (
                'id' => 4445,
                'product_id' => 1192,
                'type' => 'array',
                'key' => 'default_attributes',
                'value' => '{"color":"","size":""}',
            ),
            392 => 
            array (
                'id' => 4484,
                'product_id' => 1191,
                'type' => 'array',
                'key' => 'attributes',
                'value' => '{"color":{"name":"Color","position":"0","key":"color","value":["186"],"visibility":"1","variation":"0","attribute_id":"26"},"material":{"name":"Material","position":"1","key":"material","value":["Cotton"],"visibility":"1","variation":"0","attribute_id":""},"size":{"name":"Size","position":"2","key":"size","value":["S","M","L"],"visibility":"1","variation":"0","attribute_id":""}}',
            ),
            393 => 
            array (
                'id' => 4512,
                'product_id' => 1215,
                'type' => 'string',
                'key' => 'meta_scheduled_sale',
                'value' => '0',
            ),
            394 => 
            array (
                'id' => 4513,
                'product_id' => 1216,
                'type' => 'string',
                'key' => 'meta_scheduled_sale',
                'value' => '0',
            ),
            395 => 
            array (
                'id' => 4514,
                'product_id' => 1217,
                'type' => 'string',
                'key' => 'meta_scheduled_sale',
                'value' => '0',
            ),
            396 => 
            array (
                'id' => 4515,
                'product_id' => 1218,
                'type' => 'string',
                'key' => 'meta_scheduled_sale',
                'value' => '0',
            ),
            397 => 
            array (
                'id' => 4516,
                'product_id' => 1219,
                'type' => 'string',
                'key' => 'meta_scheduled_sale',
                'value' => '0',
            ),
            398 => 
            array (
                'id' => 4517,
                'product_id' => 1220,
                'type' => 'string',
                'key' => 'meta_scheduled_sale',
                'value' => '0',
            ),
            399 => 
            array (
                'id' => 4609,
                'product_id' => 1190,
                'type' => 'array',
                'key' => 'attributes',
                'value' => '{"color":{"name":"Color","position":"0","key":"color","value":["189","190"],"visibility":"1","variation":"1","attribute_id":"26"},"material":{"name":"Material","position":"1","key":"material","value":["Cotton"],"visibility":"1","variation":"0","attribute_id":""},"size":{"name":"Size","position":"2","key":"size","value":["S","M","L"],"visibility":"1","variation":"1","attribute_id":""}}',
            ),
            400 => 
            array (
                'id' => 4611,
                'product_id' => 1221,
                'type' => 'null',
                'key' => 'attribute_color',
                'value' => '189',
            ),
            401 => 
            array (
                'id' => 4612,
                'product_id' => 1221,
                'type' => 'null',
                'key' => 'attribute_size',
                'value' => 'S',
            ),
            402 => 
            array (
                'id' => 4613,
                'product_id' => 1222,
                'type' => 'null',
                'key' => 'attribute_color',
                'value' => '189',
            ),
            403 => 
            array (
                'id' => 4614,
                'product_id' => 1222,
                'type' => 'null',
                'key' => 'attribute_size',
                'value' => 'M',
            ),
            404 => 
            array (
                'id' => 4615,
                'product_id' => 1223,
                'type' => 'null',
                'key' => 'attribute_color',
                'value' => '189',
            ),
            405 => 
            array (
                'id' => 4616,
                'product_id' => 1223,
                'type' => 'null',
                'key' => 'attribute_size',
                'value' => 'L',
            ),
            406 => 
            array (
                'id' => 4617,
                'product_id' => 1224,
                'type' => 'null',
                'key' => 'attribute_color',
                'value' => '190',
            ),
            407 => 
            array (
                'id' => 4618,
                'product_id' => 1224,
                'type' => 'null',
                'key' => 'attribute_size',
                'value' => 'S',
            ),
            408 => 
            array (
                'id' => 4619,
                'product_id' => 1225,
                'type' => 'null',
                'key' => 'attribute_color',
                'value' => '190',
            ),
            409 => 
            array (
                'id' => 4620,
                'product_id' => 1225,
                'type' => 'null',
                'key' => 'attribute_size',
                'value' => 'M',
            ),
            410 => 
            array (
                'id' => 4621,
                'product_id' => 1226,
                'type' => 'null',
                'key' => 'attribute_color',
                'value' => '190',
            ),
            411 => 
            array (
                'id' => 4622,
                'product_id' => 1226,
                'type' => 'null',
                'key' => 'attribute_size',
                'value' => 'L',
            ),
            412 => 
            array (
                'id' => 4623,
                'product_id' => 1221,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221120/8abb4d2f7a254c2d3331ef7fd0511415.jpg',
            ),
            413 => 
            array (
                'id' => 4624,
                'product_id' => 1221,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            414 => 
            array (
                'id' => 4625,
                'product_id' => 1221,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            415 => 
            array (
                'id' => 4626,
                'product_id' => 1221,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            416 => 
            array (
                'id' => 4627,
                'product_id' => 1221,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            417 => 
            array (
                'id' => 4628,
                'product_id' => 1221,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '0.27',
            ),
            418 => 
            array (
                'id' => 4629,
                'product_id' => 1221,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            419 => 
            array (
                'id' => 4630,
                'product_id' => 1221,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            420 => 
            array (
                'id' => 4631,
                'product_id' => 1221,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            421 => 
            array (
                'id' => 4632,
                'product_id' => 1221,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            422 => 
            array (
                'id' => 4633,
                'product_id' => 1221,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            423 => 
            array (
                'id' => 4634,
                'product_id' => 1221,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            424 => 
            array (
                'id' => 4635,
                'product_id' => 1221,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '0',
            ),
            425 => 
            array (
                'id' => 4636,
                'product_id' => 1222,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221120/8abb4d2f7a254c2d3331ef7fd0511415.jpg',
            ),
            426 => 
            array (
                'id' => 4637,
                'product_id' => 1222,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            427 => 
            array (
                'id' => 4638,
                'product_id' => 1222,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            428 => 
            array (
                'id' => 4639,
                'product_id' => 1222,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            429 => 
            array (
                'id' => 4640,
                'product_id' => 1222,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            430 => 
            array (
                'id' => 4641,
                'product_id' => 1222,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '0.27',
            ),
            431 => 
            array (
                'id' => 4642,
                'product_id' => 1222,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            432 => 
            array (
                'id' => 4643,
                'product_id' => 1222,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            433 => 
            array (
                'id' => 4644,
                'product_id' => 1222,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            434 => 
            array (
                'id' => 4645,
                'product_id' => 1222,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            435 => 
            array (
                'id' => 4646,
                'product_id' => 1222,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            436 => 
            array (
                'id' => 4647,
                'product_id' => 1222,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            437 => 
            array (
                'id' => 4648,
                'product_id' => 1222,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '1',
            ),
            438 => 
            array (
                'id' => 4649,
                'product_id' => 1223,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221120/8abb4d2f7a254c2d3331ef7fd0511415.jpg',
            ),
            439 => 
            array (
                'id' => 4650,
                'product_id' => 1223,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            440 => 
            array (
                'id' => 4651,
                'product_id' => 1223,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            441 => 
            array (
                'id' => 4652,
                'product_id' => 1223,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            442 => 
            array (
                'id' => 4653,
                'product_id' => 1223,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            443 => 
            array (
                'id' => 4654,
                'product_id' => 1223,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '0.27',
            ),
            444 => 
            array (
                'id' => 4655,
                'product_id' => 1223,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            445 => 
            array (
                'id' => 4656,
                'product_id' => 1223,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            446 => 
            array (
                'id' => 4657,
                'product_id' => 1223,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            447 => 
            array (
                'id' => 4658,
                'product_id' => 1223,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            448 => 
            array (
                'id' => 4659,
                'product_id' => 1223,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            449 => 
            array (
                'id' => 4660,
                'product_id' => 1223,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            450 => 
            array (
                'id' => 4661,
                'product_id' => 1223,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '2',
            ),
            451 => 
            array (
                'id' => 4662,
                'product_id' => 1224,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221120/cf6a91666a7fb0f5bca5752f12f98143.jpg',
            ),
            452 => 
            array (
                'id' => 4663,
                'product_id' => 1224,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            453 => 
            array (
                'id' => 4664,
                'product_id' => 1224,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            454 => 
            array (
                'id' => 4665,
                'product_id' => 1224,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            455 => 
            array (
                'id' => 4666,
                'product_id' => 1224,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            456 => 
            array (
                'id' => 4667,
                'product_id' => 1224,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '0.27',
            ),
            457 => 
            array (
                'id' => 4668,
                'product_id' => 1224,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            458 => 
            array (
                'id' => 4669,
                'product_id' => 1224,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            459 => 
            array (
                'id' => 4670,
                'product_id' => 1224,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            460 => 
            array (
                'id' => 4671,
                'product_id' => 1224,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            461 => 
            array (
                'id' => 4672,
                'product_id' => 1224,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            462 => 
            array (
                'id' => 4673,
                'product_id' => 1224,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            463 => 
            array (
                'id' => 4674,
                'product_id' => 1224,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '3',
            ),
            464 => 
            array (
                'id' => 4675,
                'product_id' => 1225,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221120/cf6a91666a7fb0f5bca5752f12f98143.jpg',
            ),
            465 => 
            array (
                'id' => 4676,
                'product_id' => 1225,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            466 => 
            array (
                'id' => 4677,
                'product_id' => 1225,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            467 => 
            array (
                'id' => 4678,
                'product_id' => 1225,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            468 => 
            array (
                'id' => 4679,
                'product_id' => 1225,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            469 => 
            array (
                'id' => 4680,
                'product_id' => 1225,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '0.27',
            ),
            470 => 
            array (
                'id' => 4681,
                'product_id' => 1225,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            471 => 
            array (
                'id' => 4682,
                'product_id' => 1225,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            472 => 
            array (
                'id' => 4683,
                'product_id' => 1225,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            473 => 
            array (
                'id' => 4684,
                'product_id' => 1225,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            474 => 
            array (
                'id' => 4685,
                'product_id' => 1225,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            475 => 
            array (
                'id' => 4686,
                'product_id' => 1225,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            476 => 
            array (
                'id' => 4687,
                'product_id' => 1225,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '4',
            ),
            477 => 
            array (
                'id' => 4688,
                'product_id' => 1226,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221120/cf6a91666a7fb0f5bca5752f12f98143.jpg',
            ),
            478 => 
            array (
                'id' => 4689,
                'product_id' => 1226,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            479 => 
            array (
                'id' => 4690,
                'product_id' => 1226,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            480 => 
            array (
                'id' => 4691,
                'product_id' => 1226,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            481 => 
            array (
                'id' => 4692,
                'product_id' => 1226,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            482 => 
            array (
                'id' => 4693,
                'product_id' => 1226,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '0.27',
            ),
            483 => 
            array (
                'id' => 4694,
                'product_id' => 1226,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            484 => 
            array (
                'id' => 4695,
                'product_id' => 1226,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            485 => 
            array (
                'id' => 4696,
                'product_id' => 1226,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            486 => 
            array (
                'id' => 4697,
                'product_id' => 1226,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            487 => 
            array (
                'id' => 4698,
                'product_id' => 1226,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            488 => 
            array (
                'id' => 4699,
                'product_id' => 1226,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            489 => 
            array (
                'id' => 4700,
                'product_id' => 1226,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '5',
            ),
            490 => 
            array (
                'id' => 4701,
                'product_id' => 1190,
                'type' => 'array',
                'key' => 'default_attributes',
                'value' => '{"color":"","size":""}',
            ),
            491 => 
            array (
                'id' => 4740,
                'product_id' => 1189,
                'type' => 'array',
                'key' => 'attributes',
                'value' => '{"color":{"name":"Color","position":"0","key":"color","value":["186"],"visibility":"1","variation":"0","attribute_id":"26"},"material":{"name":"Material","position":"1","key":"material","value":["Cotton"],"visibility":"1","variation":"0","attribute_id":""},"size":{"name":"Size","position":"2","key":"size","value":["S","M","L"],"visibility":"1","variation":"0","attribute_id":""}}',
            ),
            492 => 
            array (
                'id' => 4769,
                'product_id' => 1188,
                'type' => 'array',
                'key' => 'attributes',
                'value' => '{"color":{"name":"Color","position":"0","key":"color","value":["191","192"],"visibility":"1","variation":"1","attribute_id":"26"},"material":{"name":"Material","position":"1","key":"material","value":["Cotton"],"visibility":"1","variation":"0","attribute_id":""},"size":{"name":"Size","position":"2","key":"size","value":["S","M","L"],"visibility":"1","variation":"1","attribute_id":""}}',
            ),
            493 => 
            array (
                'id' => 4770,
                'product_id' => 1227,
                'type' => 'null',
                'key' => 'attribute_color',
                'value' => '191',
            ),
            494 => 
            array (
                'id' => 4771,
                'product_id' => 1227,
                'type' => 'null',
                'key' => 'attribute_size',
                'value' => 'S',
            ),
            495 => 
            array (
                'id' => 4772,
                'product_id' => 1228,
                'type' => 'null',
                'key' => 'attribute_color',
                'value' => '191',
            ),
            496 => 
            array (
                'id' => 4773,
                'product_id' => 1228,
                'type' => 'null',
                'key' => 'attribute_size',
                'value' => 'M',
            ),
            497 => 
            array (
                'id' => 4774,
                'product_id' => 1229,
                'type' => 'null',
                'key' => 'attribute_color',
                'value' => '191',
            ),
            498 => 
            array (
                'id' => 4775,
                'product_id' => 1229,
                'type' => 'null',
                'key' => 'attribute_size',
                'value' => 'L',
            ),
            499 => 
            array (
                'id' => 4776,
                'product_id' => 1230,
                'type' => 'null',
                'key' => 'attribute_color',
                'value' => '192',
            ),
        ));
        \DB::table('products_meta')->insert(array (
            0 => 
            array (
                'id' => 4777,
                'product_id' => 1230,
                'type' => 'null',
                'key' => 'attribute_size',
                'value' => 'S',
            ),
            1 => 
            array (
                'id' => 4778,
                'product_id' => 1231,
                'type' => 'null',
                'key' => 'attribute_color',
                'value' => '192',
            ),
            2 => 
            array (
                'id' => 4779,
                'product_id' => 1231,
                'type' => 'null',
                'key' => 'attribute_size',
                'value' => 'M',
            ),
            3 => 
            array (
                'id' => 4780,
                'product_id' => 1232,
                'type' => 'null',
                'key' => 'attribute_color',
                'value' => '192',
            ),
            4 => 
            array (
                'id' => 4781,
                'product_id' => 1232,
                'type' => 'null',
                'key' => 'attribute_size',
                'value' => 'L',
            ),
            5 => 
            array (
                'id' => 4808,
                'product_id' => 1227,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221120/3854797b37a51099c22f45952459d8fd.jpg',
            ),
            6 => 
            array (
                'id' => 4809,
                'product_id' => 1227,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            7 => 
            array (
                'id' => 4810,
                'product_id' => 1227,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            8 => 
            array (
                'id' => 4811,
                'product_id' => 1227,
                'type' => 'string',
                'key' => 'meta_scheduled_sale',
                'value' => '0',
            ),
            9 => 
            array (
                'id' => 4812,
                'product_id' => 1227,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            10 => 
            array (
                'id' => 4813,
                'product_id' => 1227,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            11 => 
            array (
                'id' => 4814,
                'product_id' => 1227,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            12 => 
            array (
                'id' => 4815,
                'product_id' => 1227,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            13 => 
            array (
                'id' => 4816,
                'product_id' => 1227,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            14 => 
            array (
                'id' => 4817,
                'product_id' => 1227,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            15 => 
            array (
                'id' => 4818,
                'product_id' => 1227,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            16 => 
            array (
                'id' => 4819,
                'product_id' => 1227,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            17 => 
            array (
                'id' => 4820,
                'product_id' => 1227,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            18 => 
            array (
                'id' => 4821,
                'product_id' => 1227,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '0',
            ),
            19 => 
            array (
                'id' => 4822,
                'product_id' => 1228,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221120/3854797b37a51099c22f45952459d8fd.jpg',
            ),
            20 => 
            array (
                'id' => 4823,
                'product_id' => 1228,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            21 => 
            array (
                'id' => 4824,
                'product_id' => 1228,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            22 => 
            array (
                'id' => 4825,
                'product_id' => 1228,
                'type' => 'string',
                'key' => 'meta_scheduled_sale',
                'value' => '0',
            ),
            23 => 
            array (
                'id' => 4826,
                'product_id' => 1228,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            24 => 
            array (
                'id' => 4827,
                'product_id' => 1228,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            25 => 
            array (
                'id' => 4828,
                'product_id' => 1228,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            26 => 
            array (
                'id' => 4829,
                'product_id' => 1228,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            27 => 
            array (
                'id' => 4830,
                'product_id' => 1228,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            28 => 
            array (
                'id' => 4831,
                'product_id' => 1228,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            29 => 
            array (
                'id' => 4832,
                'product_id' => 1228,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            30 => 
            array (
                'id' => 4833,
                'product_id' => 1228,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            31 => 
            array (
                'id' => 4834,
                'product_id' => 1228,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            32 => 
            array (
                'id' => 4835,
                'product_id' => 1228,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '1',
            ),
            33 => 
            array (
                'id' => 4836,
                'product_id' => 1229,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221120/3854797b37a51099c22f45952459d8fd.jpg',
            ),
            34 => 
            array (
                'id' => 4837,
                'product_id' => 1229,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            35 => 
            array (
                'id' => 4838,
                'product_id' => 1229,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            36 => 
            array (
                'id' => 4839,
                'product_id' => 1229,
                'type' => 'string',
                'key' => 'meta_scheduled_sale',
                'value' => '0',
            ),
            37 => 
            array (
                'id' => 4840,
                'product_id' => 1229,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            38 => 
            array (
                'id' => 4841,
                'product_id' => 1229,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            39 => 
            array (
                'id' => 4842,
                'product_id' => 1229,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            40 => 
            array (
                'id' => 4843,
                'product_id' => 1229,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            41 => 
            array (
                'id' => 4844,
                'product_id' => 1229,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            42 => 
            array (
                'id' => 4845,
                'product_id' => 1229,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            43 => 
            array (
                'id' => 4846,
                'product_id' => 1229,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            44 => 
            array (
                'id' => 4847,
                'product_id' => 1229,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            45 => 
            array (
                'id' => 4848,
                'product_id' => 1229,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            46 => 
            array (
                'id' => 4849,
                'product_id' => 1229,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '2',
            ),
            47 => 
            array (
                'id' => 4850,
                'product_id' => 1230,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221120/fff6730c097bce46a0e88303e17aad82.jpg',
            ),
            48 => 
            array (
                'id' => 4851,
                'product_id' => 1230,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            49 => 
            array (
                'id' => 4852,
                'product_id' => 1230,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            50 => 
            array (
                'id' => 4853,
                'product_id' => 1230,
                'type' => 'string',
                'key' => 'meta_scheduled_sale',
                'value' => '0',
            ),
            51 => 
            array (
                'id' => 4854,
                'product_id' => 1230,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            52 => 
            array (
                'id' => 4855,
                'product_id' => 1230,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            53 => 
            array (
                'id' => 4856,
                'product_id' => 1230,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            54 => 
            array (
                'id' => 4857,
                'product_id' => 1230,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            55 => 
            array (
                'id' => 4858,
                'product_id' => 1230,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            56 => 
            array (
                'id' => 4859,
                'product_id' => 1230,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            57 => 
            array (
                'id' => 4860,
                'product_id' => 1230,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            58 => 
            array (
                'id' => 4861,
                'product_id' => 1230,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            59 => 
            array (
                'id' => 4862,
                'product_id' => 1230,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            60 => 
            array (
                'id' => 4863,
                'product_id' => 1230,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '3',
            ),
            61 => 
            array (
                'id' => 4864,
                'product_id' => 1231,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221120/fff6730c097bce46a0e88303e17aad82.jpg',
            ),
            62 => 
            array (
                'id' => 4865,
                'product_id' => 1231,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            63 => 
            array (
                'id' => 4866,
                'product_id' => 1231,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            64 => 
            array (
                'id' => 4867,
                'product_id' => 1231,
                'type' => 'string',
                'key' => 'meta_scheduled_sale',
                'value' => '0',
            ),
            65 => 
            array (
                'id' => 4868,
                'product_id' => 1231,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            66 => 
            array (
                'id' => 4869,
                'product_id' => 1231,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            67 => 
            array (
                'id' => 4870,
                'product_id' => 1231,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            68 => 
            array (
                'id' => 4871,
                'product_id' => 1231,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            69 => 
            array (
                'id' => 4872,
                'product_id' => 1231,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            70 => 
            array (
                'id' => 4873,
                'product_id' => 1231,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            71 => 
            array (
                'id' => 4874,
                'product_id' => 1231,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            72 => 
            array (
                'id' => 4875,
                'product_id' => 1231,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            73 => 
            array (
                'id' => 4876,
                'product_id' => 1231,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            74 => 
            array (
                'id' => 4877,
                'product_id' => 1231,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '4',
            ),
            75 => 
            array (
                'id' => 4878,
                'product_id' => 1232,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221120/fff6730c097bce46a0e88303e17aad82.jpg',
            ),
            76 => 
            array (
                'id' => 4879,
                'product_id' => 1232,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            77 => 
            array (
                'id' => 4880,
                'product_id' => 1232,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            78 => 
            array (
                'id' => 4881,
                'product_id' => 1232,
                'type' => 'string',
                'key' => 'meta_scheduled_sale',
                'value' => '0',
            ),
            79 => 
            array (
                'id' => 4882,
                'product_id' => 1232,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            80 => 
            array (
                'id' => 4883,
                'product_id' => 1232,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            81 => 
            array (
                'id' => 4884,
                'product_id' => 1232,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            82 => 
            array (
                'id' => 4885,
                'product_id' => 1232,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            83 => 
            array (
                'id' => 4886,
                'product_id' => 1232,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            84 => 
            array (
                'id' => 4887,
                'product_id' => 1232,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            85 => 
            array (
                'id' => 4888,
                'product_id' => 1232,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            86 => 
            array (
                'id' => 4889,
                'product_id' => 1232,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            87 => 
            array (
                'id' => 4890,
                'product_id' => 1232,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            88 => 
            array (
                'id' => 4891,
                'product_id' => 1232,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '5',
            ),
            89 => 
            array (
                'id' => 4892,
                'product_id' => 1188,
                'type' => 'array',
                'key' => 'default_attributes',
                'value' => '{"color":"","size":""}',
            ),
            90 => 
            array (
                'id' => 4906,
                'product_id' => 1187,
                'type' => 'array',
                'key' => 'attributes',
                'value' => '{"color":{"name":"Color","position":"0","key":"color","value":["193"],"visibility":"1","variation":"0","attribute_id":"26"},"material":{"name":"Material","position":"1","key":"material","value":["Cotton"],"visibility":"1","variation":"0","attribute_id":""},"size":{"name":"Size","position":"2","key":"size","value":["S","M","L"],"visibility":"1","variation":"1","attribute_id":""}}',
            ),
            91 => 
            array (
                'id' => 4907,
                'product_id' => 1233,
                'type' => 'null',
                'key' => 'attribute_size',
                'value' => 'S',
            ),
            92 => 
            array (
                'id' => 4908,
                'product_id' => 1234,
                'type' => 'null',
                'key' => 'attribute_size',
                'value' => 'M',
            ),
            93 => 
            array (
                'id' => 4909,
                'product_id' => 1235,
                'type' => 'null',
                'key' => 'attribute_size',
                'value' => 'L',
            ),
            94 => 
            array (
                'id' => 4910,
                'product_id' => 1233,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221120/139e75ab56c02c8e35cac98c4f6ea812.jpg',
            ),
            95 => 
            array (
                'id' => 4911,
                'product_id' => 1233,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            96 => 
            array (
                'id' => 4912,
                'product_id' => 1233,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            97 => 
            array (
                'id' => 4913,
                'product_id' => 1233,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            98 => 
            array (
                'id' => 4914,
                'product_id' => 1233,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            99 => 
            array (
                'id' => 4915,
                'product_id' => 1233,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            100 => 
            array (
                'id' => 4916,
                'product_id' => 1233,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            101 => 
            array (
                'id' => 4917,
                'product_id' => 1233,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            102 => 
            array (
                'id' => 4918,
                'product_id' => 1233,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            103 => 
            array (
                'id' => 4919,
                'product_id' => 1233,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            104 => 
            array (
                'id' => 4920,
                'product_id' => 1233,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            105 => 
            array (
                'id' => 4921,
                'product_id' => 1233,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            106 => 
            array (
                'id' => 4922,
                'product_id' => 1233,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '0',
            ),
            107 => 
            array (
                'id' => 4923,
                'product_id' => 1234,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221120/139e75ab56c02c8e35cac98c4f6ea812.jpg',
            ),
            108 => 
            array (
                'id' => 4924,
                'product_id' => 1234,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            109 => 
            array (
                'id' => 4925,
                'product_id' => 1234,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            110 => 
            array (
                'id' => 4926,
                'product_id' => 1234,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            111 => 
            array (
                'id' => 4927,
                'product_id' => 1234,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            112 => 
            array (
                'id' => 4928,
                'product_id' => 1234,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            113 => 
            array (
                'id' => 4929,
                'product_id' => 1234,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            114 => 
            array (
                'id' => 4930,
                'product_id' => 1234,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            115 => 
            array (
                'id' => 4931,
                'product_id' => 1234,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            116 => 
            array (
                'id' => 4932,
                'product_id' => 1234,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            117 => 
            array (
                'id' => 4933,
                'product_id' => 1234,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            118 => 
            array (
                'id' => 4934,
                'product_id' => 1234,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            119 => 
            array (
                'id' => 4935,
                'product_id' => 1234,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '1',
            ),
            120 => 
            array (
                'id' => 4936,
                'product_id' => 1235,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221120/139e75ab56c02c8e35cac98c4f6ea812.jpg',
            ),
            121 => 
            array (
                'id' => 4937,
                'product_id' => 1235,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            122 => 
            array (
                'id' => 4938,
                'product_id' => 1235,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            123 => 
            array (
                'id' => 4939,
                'product_id' => 1235,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            124 => 
            array (
                'id' => 4940,
                'product_id' => 1235,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            125 => 
            array (
                'id' => 4941,
                'product_id' => 1235,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            126 => 
            array (
                'id' => 4942,
                'product_id' => 1235,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            127 => 
            array (
                'id' => 4943,
                'product_id' => 1235,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            128 => 
            array (
                'id' => 4944,
                'product_id' => 1235,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            129 => 
            array (
                'id' => 4945,
                'product_id' => 1235,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            130 => 
            array (
                'id' => 4946,
                'product_id' => 1235,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            131 => 
            array (
                'id' => 4947,
                'product_id' => 1235,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            132 => 
            array (
                'id' => 4948,
                'product_id' => 1235,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '2',
            ),
            133 => 
            array (
                'id' => 4949,
                'product_id' => 1187,
                'type' => 'array',
                'key' => 'default_attributes',
                'value' => '{"size":""}',
            ),
            134 => 
            array (
                'id' => 5003,
                'product_id' => 1186,
                'type' => 'array',
                'key' => 'attributes',
                'value' => '{"color":{"name":"Color","position":"0","key":"color","value":["24","193","27","194"],"visibility":"1","variation":"1","attribute_id":"26"},"impedance":{"name":"Impedance","position":"1","key":"impedance","value":["32 \\u2126"],"visibility":"1","variation":"0","attribute_id":""},"poweroutput":{"name":"Power Output","position":"2","key":"poweroutput","value":["Headphone Battery Capacity: 40mAh","Charging Box Battery Capacity: 300mAh"],"visibility":"1","variation":"0","attribute_id":""},"connectiontype":{"name":"Connection Type","position":"3","key":"connectiontype","value":["Bluetooth Version: V5.0"],"visibility":"1","variation":"0","attribute_id":""},"duration":{"name":"Duration","position":"4","key":"duration","value":["12h long battery life","with charging box"],"visibility":"1","variation":"0","attribute_id":""}}',
            ),
            135 => 
            array (
                'id' => 5004,
                'product_id' => 1236,
                'type' => 'null',
                'key' => 'attribute_color',
                'value' => '24',
            ),
            136 => 
            array (
                'id' => 5005,
                'product_id' => 1237,
                'type' => 'null',
                'key' => 'attribute_color',
                'value' => '193',
            ),
            137 => 
            array (
                'id' => 5006,
                'product_id' => 1238,
                'type' => 'null',
                'key' => 'attribute_color',
                'value' => '27',
            ),
            138 => 
            array (
                'id' => 5007,
                'product_id' => 1239,
                'type' => 'null',
                'key' => 'attribute_color',
                'value' => '194',
            ),
            139 => 
            array (
                'id' => 5008,
                'product_id' => 1236,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221116/1613dcb74adf575d1ccd3eb35b958019.jpg',
            ),
            140 => 
            array (
                'id' => 5009,
                'product_id' => 1236,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            141 => 
            array (
                'id' => 5010,
                'product_id' => 1236,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            142 => 
            array (
                'id' => 5011,
                'product_id' => 1236,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            143 => 
            array (
                'id' => 5012,
                'product_id' => 1236,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            144 => 
            array (
                'id' => 5013,
                'product_id' => 1236,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            145 => 
            array (
                'id' => 5014,
                'product_id' => 1236,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            146 => 
            array (
                'id' => 5015,
                'product_id' => 1236,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            147 => 
            array (
                'id' => 5016,
                'product_id' => 1236,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            148 => 
            array (
                'id' => 5017,
                'product_id' => 1236,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            149 => 
            array (
                'id' => 5018,
                'product_id' => 1236,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            150 => 
            array (
                'id' => 5019,
                'product_id' => 1236,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            151 => 
            array (
                'id' => 5020,
                'product_id' => 1236,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '0',
            ),
            152 => 
            array (
                'id' => 5021,
                'product_id' => 1237,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221116/a9ff70f7c6b5d8e03f71bb375772e449.jpg',
            ),
            153 => 
            array (
                'id' => 5022,
                'product_id' => 1237,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            154 => 
            array (
                'id' => 5023,
                'product_id' => 1237,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            155 => 
            array (
                'id' => 5024,
                'product_id' => 1237,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            156 => 
            array (
                'id' => 5025,
                'product_id' => 1237,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            157 => 
            array (
                'id' => 5026,
                'product_id' => 1237,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            158 => 
            array (
                'id' => 5027,
                'product_id' => 1237,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            159 => 
            array (
                'id' => 5028,
                'product_id' => 1237,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            160 => 
            array (
                'id' => 5029,
                'product_id' => 1237,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            161 => 
            array (
                'id' => 5030,
                'product_id' => 1237,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            162 => 
            array (
                'id' => 5031,
                'product_id' => 1237,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            163 => 
            array (
                'id' => 5032,
                'product_id' => 1237,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            164 => 
            array (
                'id' => 5033,
                'product_id' => 1237,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '1',
            ),
            165 => 
            array (
                'id' => 5034,
                'product_id' => 1238,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221116/0b023fa29dbf7e236f9aa1ed011ebb92.jpg',
            ),
            166 => 
            array (
                'id' => 5035,
                'product_id' => 1238,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            167 => 
            array (
                'id' => 5036,
                'product_id' => 1238,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            168 => 
            array (
                'id' => 5037,
                'product_id' => 1238,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            169 => 
            array (
                'id' => 5038,
                'product_id' => 1238,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            170 => 
            array (
                'id' => 5039,
                'product_id' => 1238,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            171 => 
            array (
                'id' => 5040,
                'product_id' => 1238,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            172 => 
            array (
                'id' => 5041,
                'product_id' => 1238,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            173 => 
            array (
                'id' => 5042,
                'product_id' => 1238,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            174 => 
            array (
                'id' => 5043,
                'product_id' => 1238,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            175 => 
            array (
                'id' => 5044,
                'product_id' => 1238,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            176 => 
            array (
                'id' => 5045,
                'product_id' => 1238,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            177 => 
            array (
                'id' => 5046,
                'product_id' => 1238,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '2',
            ),
            178 => 
            array (
                'id' => 5047,
                'product_id' => 1239,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221116/7de7dd441ea5a71a0e73635a8e6fe7da.jpg',
            ),
            179 => 
            array (
                'id' => 5048,
                'product_id' => 1239,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            180 => 
            array (
                'id' => 5049,
                'product_id' => 1239,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            181 => 
            array (
                'id' => 5050,
                'product_id' => 1239,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            182 => 
            array (
                'id' => 5051,
                'product_id' => 1239,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            183 => 
            array (
                'id' => 5052,
                'product_id' => 1239,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            184 => 
            array (
                'id' => 5053,
                'product_id' => 1239,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            185 => 
            array (
                'id' => 5054,
                'product_id' => 1239,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            186 => 
            array (
                'id' => 5055,
                'product_id' => 1239,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            187 => 
            array (
                'id' => 5056,
                'product_id' => 1239,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            188 => 
            array (
                'id' => 5057,
                'product_id' => 1239,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            189 => 
            array (
                'id' => 5058,
                'product_id' => 1239,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            190 => 
            array (
                'id' => 5059,
                'product_id' => 1239,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '3',
            ),
            191 => 
            array (
                'id' => 5060,
                'product_id' => 1186,
                'type' => 'array',
                'key' => 'default_attributes',
                'value' => '{"color":""}',
            ),
            192 => 
            array (
                'id' => 5065,
                'product_id' => 1236,
                'type' => 'string',
                'key' => 'meta_scheduled_sale',
                'value' => '0',
            ),
            193 => 
            array (
                'id' => 5066,
                'product_id' => 1237,
                'type' => 'string',
                'key' => 'meta_scheduled_sale',
                'value' => '0',
            ),
            194 => 
            array (
                'id' => 5067,
                'product_id' => 1238,
                'type' => 'string',
                'key' => 'meta_scheduled_sale',
                'value' => '0',
            ),
            195 => 
            array (
                'id' => 5068,
                'product_id' => 1239,
                'type' => 'string',
                'key' => 'meta_scheduled_sale',
                'value' => '0',
            ),
            196 => 
            array (
                'id' => 5153,
                'product_id' => 1185,
                'type' => 'array',
                'key' => 'attributes',
                'value' => '{"modelname":{"name":"Model Name","position":"0","key":"modelname","value":["195"],"visibility":"1","variation":"0","attribute_id":"30"},"cameratype":{"name":"Camera Type","position":"1","key":"cameratype","value":["DSLR"],"visibility":"1","variation":"0","attribute_id":""},"imagesensor":{"name":"Image Sensor","position":"2","key":"imagesensor","value":["18.0 MP"],"visibility":"1","variation":"0","attribute_id":""},"autofocus":{"name":"Auto Focus","position":"3","key":"autofocus","value":["Automatic and manual selection","AI focus one-shot"],"visibility":"1","variation":"0","attribute_id":""},"iso":{"name":"ISO","position":"4","key":"iso","value":["Auto 100-6400"],"visibility":"1","variation":"0","attribute_id":""},"shutter":{"name":"Shutter","position":"5","key":"shutter","value":["30-1\\/4000 sec"],"visibility":"1","variation":"0","attribute_id":""},"storage":{"name":"Storage","position":"6","key":"storage","value":["SD","SDHC or SDXC Card"],"visibility":"1","variation":"0","attribute_id":""},"power":{"name":"Power","position":"7","key":"power","value":["1 x Rechargeable Li-ion Battery LP-E8"],"visibility":"1","variation":"0","attribute_id":""}}',
            ),
            197 => 
            array (
                'id' => 5207,
                'product_id' => 1184,
                'type' => 'array',
                'key' => 'attributes',
                'value' => '{"modelname":{"name":"Model Name","position":"0","key":"modelname","value":["196"],"visibility":"1","variation":"0","attribute_id":"30"},"type":{"name":"Type","position":"1","key":"type","value":["197"],"visibility":"1","variation":"0","attribute_id":"292"},"length":{"name":"Length","position":"2","key":"length","value":["3 Meter"],"visibility":"1","variation":"0","attribute_id":""},"color":{"name":"Color","position":"3","key":"color","value":["26"],"visibility":"1","variation":"0","attribute_id":"26"}}',
            ),
            198 => 
            array (
                'id' => 5209,
                'product_id' => 1183,
                'type' => 'array',
                'key' => 'attributes',
            'value' => '{"capacity":{"name":"Capacity","position":"0","key":"capacity","value":["32 GB"],"visibility":"1","variation":"0","attribute_id":""},"connectivity":{"name":"Connectivity","position":"1","key":"connectivity","value":["USB 3.1 Gen1 (USB 3.0)"],"visibility":"1","variation":"0","attribute_id":""},"color":{"name":"Color","position":"2","key":"color","value":["26"],"visibility":"0","variation":"0","attribute_id":"26"}}',
            ),
            199 => 
            array (
                'id' => 5263,
                'product_id' => 1182,
                'type' => 'array',
                'key' => 'attributes',
            'value' => '{"modelname":{"name":"Model Name","position":"0","key":"modelname","value":["198"],"visibility":"1","variation":"0","attribute_id":"30"},"type":{"name":"Type","position":"1","key":"type","value":["199"],"visibility":"1","variation":"0","attribute_id":"292"},"interface(s)":{"name":"Interface(s)","position":"2","key":"interface(s)","value":["PCI-E, USB Type-C"],"visibility":"1","variation":"0","attribute_id":""},"transferrate":{"name":"Transfer Rate","position":"3","key":"transferrate","value":["10 Gbps"],"visibility":"1","variation":"0","attribute_id":""},"inputs":{"name":"Inputs","position":"4","key":"inputs","value":["PCI-E"],"visibility":"1","variation":"0","attribute_id":""},"outputports":{"name":"Output Ports","position":"5","key":"outputports","value":["USB Type-C"],"visibility":"1","variation":"0","attribute_id":""},"compatibledrivetype":{"name":"Compatible Drive Type","position":"6","key":"compatibledrivetype","value":["NVMe M.2"],"visibility":"1","variation":"0","attribute_id":""},"datacable":{"name":"Data Cable","position":"7","key":"datacable","value":["0.49 Ft USB Type-A to Type-C"],"visibility":"1","variation":"0","attribute_id":""},"storage":{"name":"Storage","position":"8","key":"storage","value":["200","201"],"visibility":"0","variation":"1","attribute_id":"28"}}',
            ),
            200 => 
            array (
                'id' => 5264,
                'product_id' => 1240,
                'type' => 'null',
                'key' => 'attribute_storage',
                'value' => '200',
            ),
            201 => 
            array (
                'id' => 5265,
                'product_id' => 1241,
                'type' => 'null',
                'key' => 'attribute_storage',
                'value' => '201',
            ),
            202 => 
            array (
                'id' => 5266,
                'product_id' => 1240,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221116/31e679efa10c38424385f024b4da4a37.jpg',
            ),
            203 => 
            array (
                'id' => 5267,
                'product_id' => 1240,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            204 => 
            array (
                'id' => 5268,
                'product_id' => 1240,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            205 => 
            array (
                'id' => 5269,
                'product_id' => 1240,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            206 => 
            array (
                'id' => 5270,
                'product_id' => 1240,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            207 => 
            array (
                'id' => 5271,
                'product_id' => 1240,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            208 => 
            array (
                'id' => 5272,
                'product_id' => 1240,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            209 => 
            array (
                'id' => 5273,
                'product_id' => 1240,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            210 => 
            array (
                'id' => 5274,
                'product_id' => 1240,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            211 => 
            array (
                'id' => 5275,
                'product_id' => 1240,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            212 => 
            array (
                'id' => 5276,
                'product_id' => 1240,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            213 => 
            array (
                'id' => 5277,
                'product_id' => 1240,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            214 => 
            array (
                'id' => 5278,
                'product_id' => 1240,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '0',
            ),
            215 => 
            array (
                'id' => 5279,
                'product_id' => 1241,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221116/b290bcbc6a0e890c72bc97bcff37c302.jpg',
            ),
            216 => 
            array (
                'id' => 5280,
                'product_id' => 1241,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            217 => 
            array (
                'id' => 5281,
                'product_id' => 1241,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            218 => 
            array (
                'id' => 5282,
                'product_id' => 1241,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            219 => 
            array (
                'id' => 5283,
                'product_id' => 1241,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            220 => 
            array (
                'id' => 5284,
                'product_id' => 1241,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            221 => 
            array (
                'id' => 5285,
                'product_id' => 1241,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            222 => 
            array (
                'id' => 5286,
                'product_id' => 1241,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            223 => 
            array (
                'id' => 5287,
                'product_id' => 1241,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            224 => 
            array (
                'id' => 5288,
                'product_id' => 1241,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            225 => 
            array (
                'id' => 5289,
                'product_id' => 1241,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            226 => 
            array (
                'id' => 5290,
                'product_id' => 1241,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            227 => 
            array (
                'id' => 5291,
                'product_id' => 1241,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '1',
            ),
            228 => 
            array (
                'id' => 5292,
                'product_id' => 1182,
                'type' => 'array',
                'key' => 'default_attributes',
                'value' => '{"storage":""}',
            ),
            229 => 
            array (
                'id' => 5348,
                'product_id' => 1181,
                'type' => 'array',
                'key' => 'attributes',
            'value' => '{"processor":{"name":"Processor","position":"0","key":"processor","value":["Intel Atom x5-Z8350 Processor (1.44 GHz To 1.92 GHz, Cache 2MB )"],"visibility":"1","variation":"0","attribute_id":""},"ram":{"name":"RAM","position":"1","key":"ram","value":["202"],"visibility":"1","variation":"0","attribute_id":"27"},"graphicscard":{"name":"Graphics Card","position":"2","key":"graphicscard","value":["Intel HD Integrated Graphics"],"visibility":"1","variation":"0","attribute_id":""},"powersupply":{"name":"Power Supply","position":"3","key":"powersupply","value":["18 W Power adapter"],"visibility":"1","variation":"0","attribute_id":""},"storage":{"name":"Storage","position":"4","key":"storage","value":["203"],"visibility":"1","variation":"0","attribute_id":"28"},"network&wirelessconnectivity":{"name":"Network & Wireless Connectivity","position":"5","key":"network&wirelessconnectivity","value":["802.11 a\\/b\\/g\\/n\\/ac , Bluetooth V4.1","Side I\\/O Ports:","1 x Micro USB (For Power Only)","1 x USB 3.0","1 x USB 2.0","1 x Audio Jack(s) (Mic\\/Headphone Combo)"],"visibility":"1","variation":"0","attribute_id":""},"operatingsystem":{"name":"Operating System","position":"6","key":"operatingsystem","value":["204"],"visibility":"1","variation":"0","attribute_id":"36"}}',
            ),
            230 => 
            array (
                'id' => 5428,
                'product_id' => 1180,
                'type' => 'array',
                'key' => 'attributes',
                'value' => '{"display":{"name":"Display","position":"0","key":"display","value":["1.4 inch TFT Screen"],"visibility":"1","variation":"0","attribute_id":""},"connectivity":{"name":"Connectivity","position":"1","key":"connectivity","value":["Bluetooth V5.0"],"visibility":"1","variation":"0","attribute_id":""},"battery":{"name":"Battery","position":"2","key":"battery","value":["205","207"],"visibility":"1","variation":"0","attribute_id":"376"},"material":{"name":"Material","position":"3","key":"material","value":["ABS"],"visibility":"1","variation":"0","attribute_id":""},"specialfeatures":{"name":"SpecialFeatures","position":"4","key":"specialfeatures","value":["Sport modes:\\r\\nJogging \\/ Fast walking \\/ Biking \\/ Climbing \\/ Spinning \\/ Yoga \\/ Indoor running \\/ Integrated training \\/ Gymnastics \\/ Basketball \\/ Football \\/ Rowing"],"visibility":"1","variation":"0","attribute_id":""},"color":{"name":"Color","position":"5","key":"color","value":["24","26","27"],"visibility":"0","variation":"1","attribute_id":"26"}}',
            ),
            231 => 
            array (
                'id' => 5429,
                'product_id' => 1242,
                'type' => 'null',
                'key' => 'attribute_color',
                'value' => '24',
            ),
            232 => 
            array (
                'id' => 5430,
                'product_id' => 1243,
                'type' => 'null',
                'key' => 'attribute_color',
                'value' => '26',
            ),
            233 => 
            array (
                'id' => 5431,
                'product_id' => 1244,
                'type' => 'null',
                'key' => 'attribute_color',
                'value' => '27',
            ),
            234 => 
            array (
                'id' => 5432,
                'product_id' => 1242,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221116/b99d3148de455940d1d4ac4a943f1e88.jpg',
            ),
            235 => 
            array (
                'id' => 5433,
                'product_id' => 1242,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            236 => 
            array (
                'id' => 5434,
                'product_id' => 1242,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            237 => 
            array (
                'id' => 5435,
                'product_id' => 1242,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            238 => 
            array (
                'id' => 5436,
                'product_id' => 1242,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            239 => 
            array (
                'id' => 5437,
                'product_id' => 1242,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            240 => 
            array (
                'id' => 5438,
                'product_id' => 1242,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            241 => 
            array (
                'id' => 5439,
                'product_id' => 1242,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            242 => 
            array (
                'id' => 5440,
                'product_id' => 1242,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            243 => 
            array (
                'id' => 5441,
                'product_id' => 1242,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            244 => 
            array (
                'id' => 5442,
                'product_id' => 1242,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            245 => 
            array (
                'id' => 5443,
                'product_id' => 1242,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            246 => 
            array (
                'id' => 5444,
                'product_id' => 1242,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '0',
            ),
            247 => 
            array (
                'id' => 5445,
                'product_id' => 1243,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221116/4709673eec4646705e96c8e4de30dff5.jpg',
            ),
            248 => 
            array (
                'id' => 5446,
                'product_id' => 1243,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            249 => 
            array (
                'id' => 5447,
                'product_id' => 1243,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            250 => 
            array (
                'id' => 5448,
                'product_id' => 1243,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            251 => 
            array (
                'id' => 5449,
                'product_id' => 1243,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            252 => 
            array (
                'id' => 5450,
                'product_id' => 1243,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            253 => 
            array (
                'id' => 5451,
                'product_id' => 1243,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            254 => 
            array (
                'id' => 5452,
                'product_id' => 1243,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'no-class',
            ),
            255 => 
            array (
                'id' => 5453,
                'product_id' => 1243,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            256 => 
            array (
                'id' => 5454,
                'product_id' => 1243,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            257 => 
            array (
                'id' => 5455,
                'product_id' => 1243,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            258 => 
            array (
                'id' => 5456,
                'product_id' => 1243,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            259 => 
            array (
                'id' => 5457,
                'product_id' => 1243,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '1',
            ),
            260 => 
            array (
                'id' => 5458,
                'product_id' => 1244,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221116/be6e9408affa6ce6a6da8a19c99a92aa.jpg',
            ),
            261 => 
            array (
                'id' => 5459,
                'product_id' => 1244,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            262 => 
            array (
                'id' => 5460,
                'product_id' => 1244,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            263 => 
            array (
                'id' => 5461,
                'product_id' => 1244,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            264 => 
            array (
                'id' => 5462,
                'product_id' => 1244,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            265 => 
            array (
                'id' => 5463,
                'product_id' => 1244,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            266 => 
            array (
                'id' => 5464,
                'product_id' => 1244,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            267 => 
            array (
                'id' => 5465,
                'product_id' => 1244,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            268 => 
            array (
                'id' => 5466,
                'product_id' => 1244,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            269 => 
            array (
                'id' => 5467,
                'product_id' => 1244,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            270 => 
            array (
                'id' => 5468,
                'product_id' => 1244,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            271 => 
            array (
                'id' => 5469,
                'product_id' => 1244,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            272 => 
            array (
                'id' => 5470,
                'product_id' => 1244,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '2',
            ),
            273 => 
            array (
                'id' => 5471,
                'product_id' => 1180,
                'type' => 'array',
                'key' => 'default_attributes',
                'value' => '{"color":""}',
            ),
            274 => 
            array (
                'id' => 5476,
                'product_id' => 1179,
                'type' => 'array',
                'key' => 'attributes',
                'value' => '{"modelnumber":{"name":"Model Number","position":"0","key":"modelnumber","value":["208"],"visibility":"1","variation":"0","attribute_id":"29"},"feature":{"name":"Feature","position":"1","key":"feature","value":["Tamagotchi pet toy"],"visibility":"1","variation":"0","attribute_id":""},"material":{"name":"Material","position":"2","key":"material","value":["Plastic"],"visibility":"1","variation":"0","attribute_id":""},"battery":{"name":"Battery","position":"3","key":"battery","value":["209"],"visibility":"1","variation":"0","attribute_id":"376"},"color":{"name":"Color","position":"4","key":"color","value":["188","27","210","211"],"visibility":"1","variation":"1","attribute_id":"26"}}',
            ),
            275 => 
            array (
                'id' => 5503,
                'product_id' => 1245,
                'type' => 'null',
                'key' => 'attribute_color',
                'value' => '188',
            ),
            276 => 
            array (
                'id' => 5505,
                'product_id' => 1247,
                'type' => 'null',
                'key' => 'attribute_color',
                'value' => '210',
            ),
            277 => 
            array (
                'id' => 5506,
                'product_id' => 1248,
                'type' => 'null',
                'key' => 'attribute_color',
                'value' => '211',
            ),
            278 => 
            array (
                'id' => 5533,
                'product_id' => 1245,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221116/539708ae11d94dbca0770e4da809b253.jpg',
            ),
            279 => 
            array (
                'id' => 5534,
                'product_id' => 1245,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            280 => 
            array (
                'id' => 5535,
                'product_id' => 1245,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            281 => 
            array (
                'id' => 5536,
                'product_id' => 1245,
                'type' => 'string',
                'key' => 'meta_scheduled_sale',
                'value' => '0',
            ),
            282 => 
            array (
                'id' => 5537,
                'product_id' => 1245,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            283 => 
            array (
                'id' => 5538,
                'product_id' => 1245,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            284 => 
            array (
                'id' => 5539,
                'product_id' => 1245,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            285 => 
            array (
                'id' => 5540,
                'product_id' => 1245,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            286 => 
            array (
                'id' => 5541,
                'product_id' => 1245,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'no-class',
            ),
            287 => 
            array (
                'id' => 5542,
                'product_id' => 1245,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            288 => 
            array (
                'id' => 5543,
                'product_id' => 1245,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            289 => 
            array (
                'id' => 5544,
                'product_id' => 1245,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            290 => 
            array (
                'id' => 5545,
                'product_id' => 1245,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            291 => 
            array (
                'id' => 5546,
                'product_id' => 1245,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '0',
            ),
            292 => 
            array (
                'id' => 5547,
                'product_id' => 1247,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221116/682e61992be05b11e77a5a94e4aa9bc4.jpg',
            ),
            293 => 
            array (
                'id' => 5548,
                'product_id' => 1247,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            294 => 
            array (
                'id' => 5549,
                'product_id' => 1247,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            295 => 
            array (
                'id' => 5550,
                'product_id' => 1247,
                'type' => 'string',
                'key' => 'meta_scheduled_sale',
                'value' => '0',
            ),
            296 => 
            array (
                'id' => 5551,
                'product_id' => 1247,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            297 => 
            array (
                'id' => 5552,
                'product_id' => 1247,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            298 => 
            array (
                'id' => 5553,
                'product_id' => 1247,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            299 => 
            array (
                'id' => 5554,
                'product_id' => 1247,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            300 => 
            array (
                'id' => 5555,
                'product_id' => 1247,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'no-class',
            ),
            301 => 
            array (
                'id' => 5556,
                'product_id' => 1247,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            302 => 
            array (
                'id' => 5557,
                'product_id' => 1247,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            303 => 
            array (
                'id' => 5558,
                'product_id' => 1247,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            304 => 
            array (
                'id' => 5559,
                'product_id' => 1247,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            305 => 
            array (
                'id' => 5560,
                'product_id' => 1247,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '1',
            ),
            306 => 
            array (
                'id' => 5561,
                'product_id' => 1248,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221116/dc04c86a127d1967056f11dad17bbb1d.jpg',
            ),
            307 => 
            array (
                'id' => 5562,
                'product_id' => 1248,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            308 => 
            array (
                'id' => 5563,
                'product_id' => 1248,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            309 => 
            array (
                'id' => 5564,
                'product_id' => 1248,
                'type' => 'string',
                'key' => 'meta_scheduled_sale',
                'value' => '0',
            ),
            310 => 
            array (
                'id' => 5565,
                'product_id' => 1248,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            311 => 
            array (
                'id' => 5566,
                'product_id' => 1248,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            312 => 
            array (
                'id' => 5567,
                'product_id' => 1248,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            313 => 
            array (
                'id' => 5568,
                'product_id' => 1248,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            314 => 
            array (
                'id' => 5569,
                'product_id' => 1248,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'no-class',
            ),
            315 => 
            array (
                'id' => 5570,
                'product_id' => 1248,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            316 => 
            array (
                'id' => 5571,
                'product_id' => 1248,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            317 => 
            array (
                'id' => 5572,
                'product_id' => 1248,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            318 => 
            array (
                'id' => 5573,
                'product_id' => 1248,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            319 => 
            array (
                'id' => 5574,
                'product_id' => 1248,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '2',
            ),
            320 => 
            array (
                'id' => 5575,
                'product_id' => 1179,
                'type' => 'array',
                'key' => 'default_attributes',
                'value' => '{"color":""}',
            ),
            321 => 
            array (
                'id' => 5730,
                'product_id' => 1178,
                'type' => 'array',
                'key' => 'attributes',
                'value' => '{"displaysize":{"name":"Display Size","position":"0","key":"displaysize","value":["212"],"visibility":"1","variation":"0","attribute_id":"33"},"displaytype":{"name":"Display Type","position":"1","key":"displaytype","value":["213"],"visibility":"1","variation":"0","attribute_id":"35"},"storage":{"name":"Storage","position":"2","key":"storage","value":["214"],"visibility":"1","variation":"0","attribute_id":"28"},"battery":{"name":"Battery","position":"3","key":"battery","value":["205","207"],"visibility":"1","variation":"0","attribute_id":"376"},"os":{"name":"OS","position":"4","key":"os","value":["Android 5.0 and above. IOS 10.0 and above"],"visibility":"1","variation":"0","attribute_id":""},"color":{"name":"Color","position":"5","key":"color","value":["24","190","26"],"visibility":"1","variation":"1","attribute_id":"26"}}',
            ),
            322 => 
            array (
                'id' => 5731,
                'product_id' => 1249,
                'type' => 'null',
                'key' => 'attribute_color',
                'value' => '24',
            ),
            323 => 
            array (
                'id' => 5732,
                'product_id' => 1250,
                'type' => 'null',
                'key' => 'attribute_color',
                'value' => '190',
            ),
            324 => 
            array (
                'id' => 5733,
                'product_id' => 1251,
                'type' => 'null',
                'key' => 'attribute_color',
                'value' => '26',
            ),
            325 => 
            array (
                'id' => 5734,
                'product_id' => 1249,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221116/2c6dcb0b6953482cd03b7dd6e754c51d.jpg',
            ),
            326 => 
            array (
                'id' => 5735,
                'product_id' => 1249,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            327 => 
            array (
                'id' => 5736,
                'product_id' => 1249,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            328 => 
            array (
                'id' => 5737,
                'product_id' => 1249,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            329 => 
            array (
                'id' => 5738,
                'product_id' => 1249,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            330 => 
            array (
                'id' => 5739,
                'product_id' => 1249,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            331 => 
            array (
                'id' => 5740,
                'product_id' => 1249,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            332 => 
            array (
                'id' => 5741,
                'product_id' => 1249,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            333 => 
            array (
                'id' => 5742,
                'product_id' => 1249,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            334 => 
            array (
                'id' => 5743,
                'product_id' => 1249,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            335 => 
            array (
                'id' => 5744,
                'product_id' => 1249,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            336 => 
            array (
                'id' => 5745,
                'product_id' => 1249,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            337 => 
            array (
                'id' => 5746,
                'product_id' => 1249,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '0',
            ),
            338 => 
            array (
                'id' => 5747,
                'product_id' => 1250,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221116/5215d50c53b4b827e313fc525e52562a.jpg',
            ),
            339 => 
            array (
                'id' => 5748,
                'product_id' => 1250,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            340 => 
            array (
                'id' => 5749,
                'product_id' => 1250,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            341 => 
            array (
                'id' => 5750,
                'product_id' => 1250,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            342 => 
            array (
                'id' => 5751,
                'product_id' => 1250,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            343 => 
            array (
                'id' => 5752,
                'product_id' => 1250,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            344 => 
            array (
                'id' => 5753,
                'product_id' => 1250,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            345 => 
            array (
                'id' => 5754,
                'product_id' => 1250,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            346 => 
            array (
                'id' => 5755,
                'product_id' => 1250,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            347 => 
            array (
                'id' => 5756,
                'product_id' => 1250,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            348 => 
            array (
                'id' => 5757,
                'product_id' => 1250,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            349 => 
            array (
                'id' => 5758,
                'product_id' => 1250,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            350 => 
            array (
                'id' => 5759,
                'product_id' => 1250,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '1',
            ),
            351 => 
            array (
                'id' => 5760,
                'product_id' => 1251,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221116/a8f3205751d743e0e08988429e1b86e7.jpg',
            ),
            352 => 
            array (
                'id' => 5761,
                'product_id' => 1251,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            353 => 
            array (
                'id' => 5762,
                'product_id' => 1251,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            354 => 
            array (
                'id' => 5763,
                'product_id' => 1251,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            355 => 
            array (
                'id' => 5764,
                'product_id' => 1251,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            356 => 
            array (
                'id' => 5765,
                'product_id' => 1251,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            357 => 
            array (
                'id' => 5766,
                'product_id' => 1251,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            358 => 
            array (
                'id' => 5767,
                'product_id' => 1251,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            359 => 
            array (
                'id' => 5768,
                'product_id' => 1251,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            360 => 
            array (
                'id' => 5769,
                'product_id' => 1251,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            361 => 
            array (
                'id' => 5770,
                'product_id' => 1251,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            362 => 
            array (
                'id' => 5771,
                'product_id' => 1251,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            363 => 
            array (
                'id' => 5772,
                'product_id' => 1251,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '2',
            ),
            364 => 
            array (
                'id' => 5773,
                'product_id' => 1178,
                'type' => 'array',
                'key' => 'default_attributes',
                'value' => '{"color":""}',
            ),
            365 => 
            array (
                'id' => 5777,
                'product_id' => 1249,
                'type' => 'string',
                'key' => 'meta_scheduled_sale',
                'value' => '0',
            ),
            366 => 
            array (
                'id' => 5778,
                'product_id' => 1250,
                'type' => 'string',
                'key' => 'meta_scheduled_sale',
                'value' => '0',
            ),
            367 => 
            array (
                'id' => 5779,
                'product_id' => 1251,
                'type' => 'string',
                'key' => 'meta_scheduled_sale',
                'value' => '0',
            ),
            368 => 
            array (
                'id' => 6015,
                'product_id' => 1177,
                'type' => 'array',
                'key' => 'attributes',
                'value' => '{"color":{"name":"Color","position":"0","key":"color","value":["211","26"],"visibility":"1","variation":"0","attribute_id":"26"},"lenght":{"name":"Lenght","position":"1","key":"lenght","value":["Approx. 30 cm"],"visibility":"1","variation":"0","attribute_id":""},"modelnumber":{"name":"Model Number","position":"2","key":"modelnumber","value":["215"],"visibility":"1","variation":"0","attribute_id":"29"}}',
            ),
            369 => 
            array (
                'id' => 6095,
                'product_id' => 1176,
                'type' => 'array',
                'key' => 'attributes',
                'value' => '{"type":{"name":"Type","position":"1","key":"type","value":["216"],"visibility":"1","variation":"0","attribute_id":"292"},"color":{"name":"Color","position":"2","key":"color","value":["24","26"],"visibility":"1","variation":"0","attribute_id":"26"}}',
            ),
            370 => 
            array (
                'id' => 6202,
                'product_id' => 1175,
                'type' => 'array',
                'key' => 'attributes',
                'value' => '{"color":{"name":"Color","position":"0","key":"color","value":["24","211","26"],"visibility":"0","variation":"1","attribute_id":"26"},"type":{"name":"Type","position":"1","key":"type","value":["216"],"visibility":"1","variation":"0","attribute_id":"292"}}',
            ),
            371 => 
            array (
                'id' => 6203,
                'product_id' => 1252,
                'type' => 'null',
                'key' => 'attribute_color',
                'value' => '24',
            ),
            372 => 
            array (
                'id' => 6204,
                'product_id' => 1253,
                'type' => 'null',
                'key' => 'attribute_color',
                'value' => '211',
            ),
            373 => 
            array (
                'id' => 6205,
                'product_id' => 1254,
                'type' => 'null',
                'key' => 'attribute_color',
                'value' => '26',
            ),
            374 => 
            array (
                'id' => 6206,
                'product_id' => 1252,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            375 => 
            array (
                'id' => 6207,
                'product_id' => 1252,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            376 => 
            array (
                'id' => 6208,
                'product_id' => 1252,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            377 => 
            array (
                'id' => 6209,
                'product_id' => 1252,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '',
            ),
            378 => 
            array (
                'id' => 6210,
                'product_id' => 1252,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '5',
            ),
            379 => 
            array (
                'id' => 6211,
                'product_id' => 1252,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            380 => 
            array (
                'id' => 6212,
                'product_id' => 1252,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'no-class',
            ),
            381 => 
            array (
                'id' => 6213,
                'product_id' => 1252,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            382 => 
            array (
                'id' => 6214,
                'product_id' => 1252,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            383 => 
            array (
                'id' => 6215,
                'product_id' => 1252,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            384 => 
            array (
                'id' => 6216,
                'product_id' => 1252,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221116/3c313278885be29855a556b5e27e1aea.jpg',
            ),
            385 => 
            array (
                'id' => 6217,
                'product_id' => 1252,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            386 => 
            array (
                'id' => 6218,
                'product_id' => 1252,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '0',
            ),
            387 => 
            array (
                'id' => 6219,
                'product_id' => 1253,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            388 => 
            array (
                'id' => 6220,
                'product_id' => 1253,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            389 => 
            array (
                'id' => 6221,
                'product_id' => 1253,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            390 => 
            array (
                'id' => 6222,
                'product_id' => 1253,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            391 => 
            array (
                'id' => 6223,
                'product_id' => 1253,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            392 => 
            array (
                'id' => 6224,
                'product_id' => 1253,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            393 => 
            array (
                'id' => 6225,
                'product_id' => 1253,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            394 => 
            array (
                'id' => 6226,
                'product_id' => 1253,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            395 => 
            array (
                'id' => 6227,
                'product_id' => 1253,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            396 => 
            array (
                'id' => 6228,
                'product_id' => 1253,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            397 => 
            array (
                'id' => 6229,
                'product_id' => 1253,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221116/9526c3d8c62977c8330ecb6a7aa2182f.jpg',
            ),
            398 => 
            array (
                'id' => 6230,
                'product_id' => 1253,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            399 => 
            array (
                'id' => 6231,
                'product_id' => 1253,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '1',
            ),
            400 => 
            array (
                'id' => 6232,
                'product_id' => 1254,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            401 => 
            array (
                'id' => 6233,
                'product_id' => 1254,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            402 => 
            array (
                'id' => 6234,
                'product_id' => 1254,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            403 => 
            array (
                'id' => 6235,
                'product_id' => 1254,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            404 => 
            array (
                'id' => 6236,
                'product_id' => 1254,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            405 => 
            array (
                'id' => 6237,
                'product_id' => 1254,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            406 => 
            array (
                'id' => 6238,
                'product_id' => 1254,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            407 => 
            array (
                'id' => 6239,
                'product_id' => 1254,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            408 => 
            array (
                'id' => 6240,
                'product_id' => 1254,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            409 => 
            array (
                'id' => 6241,
                'product_id' => 1254,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            410 => 
            array (
                'id' => 6242,
                'product_id' => 1254,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221116/6c2e5da60065189b2f5650ac05dc224f.jpg',
            ),
            411 => 
            array (
                'id' => 6243,
                'product_id' => 1254,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            412 => 
            array (
                'id' => 6244,
                'product_id' => 1254,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '2',
            ),
            413 => 
            array (
                'id' => 6245,
                'product_id' => 1175,
                'type' => 'array',
                'key' => 'default_attributes',
                'value' => '{"color":""}',
            ),
            414 => 
            array (
                'id' => 6249,
                'product_id' => 1252,
                'type' => 'string',
                'key' => 'meta_scheduled_sale',
                'value' => '0',
            ),
            415 => 
            array (
                'id' => 6250,
                'product_id' => 1253,
                'type' => 'string',
                'key' => 'meta_scheduled_sale',
                'value' => '0',
            ),
            416 => 
            array (
                'id' => 6251,
                'product_id' => 1254,
                'type' => 'string',
                'key' => 'meta_scheduled_sale',
                'value' => '0',
            ),
            417 => 
            array (
                'id' => 6400,
                'product_id' => 1174,
                'type' => 'array',
                'key' => 'attributes',
                'value' => '{"color":{"name":"Color","position":"0","key":"color","value":["24"],"visibility":"1","variation":"0","attribute_id":"26"},"material":{"name":"Material","position":"1","key":"material","value":["Braided + Aluminum"],"visibility":"1","variation":"0","attribute_id":""}}',
            ),
            418 => 
            array (
                'id' => 6402,
                'product_id' => 1173,
                'type' => 'array',
                'key' => 'attributes',
                'value' => '{"color":{"name":"Color","position":"0","key":"color","value":["24","194"],"visibility":"0","variation":"1","attribute_id":"26"}}',
            ),
            419 => 
            array (
                'id' => 6403,
                'product_id' => 1255,
                'type' => 'null',
                'key' => 'attribute_color',
                'value' => '24',
            ),
            420 => 
            array (
                'id' => 6404,
                'product_id' => 1256,
                'type' => 'null',
                'key' => 'attribute_color',
                'value' => '194',
            ),
            421 => 
            array (
                'id' => 6405,
                'product_id' => 1255,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221116/f7aac2e7f5d4697e6df1f5e0ba7858ed.jpg',
            ),
            422 => 
            array (
                'id' => 6406,
                'product_id' => 1255,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            423 => 
            array (
                'id' => 6407,
                'product_id' => 1255,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            424 => 
            array (
                'id' => 6408,
                'product_id' => 1255,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            425 => 
            array (
                'id' => 6409,
                'product_id' => 1255,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            426 => 
            array (
                'id' => 6410,
                'product_id' => 1255,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            427 => 
            array (
                'id' => 6411,
                'product_id' => 1255,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            428 => 
            array (
                'id' => 6412,
                'product_id' => 1255,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            429 => 
            array (
                'id' => 6413,
                'product_id' => 1255,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            430 => 
            array (
                'id' => 6414,
                'product_id' => 1255,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            431 => 
            array (
                'id' => 6415,
                'product_id' => 1255,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            432 => 
            array (
                'id' => 6416,
                'product_id' => 1255,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            433 => 
            array (
                'id' => 6417,
                'product_id' => 1255,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '0',
            ),
            434 => 
            array (
                'id' => 6418,
                'product_id' => 1256,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221116/8c67a9dbf6551bd22b08188f63344f52.jpg',
            ),
            435 => 
            array (
                'id' => 6419,
                'product_id' => 1256,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            436 => 
            array (
                'id' => 6420,
                'product_id' => 1256,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            437 => 
            array (
                'id' => 6421,
                'product_id' => 1256,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            438 => 
            array (
                'id' => 6422,
                'product_id' => 1256,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            439 => 
            array (
                'id' => 6423,
                'product_id' => 1256,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            440 => 
            array (
                'id' => 6424,
                'product_id' => 1256,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            441 => 
            array (
                'id' => 6425,
                'product_id' => 1256,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            442 => 
            array (
                'id' => 6426,
                'product_id' => 1256,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            443 => 
            array (
                'id' => 6427,
                'product_id' => 1256,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            444 => 
            array (
                'id' => 6428,
                'product_id' => 1256,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            445 => 
            array (
                'id' => 6429,
                'product_id' => 1256,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            446 => 
            array (
                'id' => 6430,
                'product_id' => 1256,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '1',
            ),
            447 => 
            array (
                'id' => 6431,
                'product_id' => 1173,
                'type' => 'array',
                'key' => 'default_attributes',
                'value' => '{"color":""}',
            ),
            448 => 
            array (
                'id' => 6460,
                'product_id' => 1255,
                'type' => 'string',
                'key' => 'meta_scheduled_sale',
                'value' => '0',
            ),
            449 => 
            array (
                'id' => 6461,
                'product_id' => 1256,
                'type' => 'string',
                'key' => 'meta_scheduled_sale',
                'value' => '0',
            ),
            450 => 
            array (
                'id' => 6649,
                'product_id' => 1170,
                'type' => 'array',
                'key' => 'attributes',
                'value' => '{"color":{"name":"Color","position":"0","key":"color","value":["24"],"visibility":"1","variation":"0","attribute_id":"26"}}',
            ),
            451 => 
            array (
                'id' => 6678,
                'product_id' => 1169,
                'type' => 'array',
                'key' => 'attributes',
                'value' => '{"color":{"name":"Color","position":"0","key":"color","value":["186"],"visibility":"1","variation":"0","attribute_id":"26"},"type":{"name":"Type","position":"1","key":"type","value":["217"],"visibility":"1","variation":"0","attribute_id":"292"}}',
            ),
            452 => 
            array (
                'id' => 6706,
                'product_id' => 1168,
                'type' => 'array',
                'key' => 'attributes',
                'value' => '{"color":{"name":"Color","position":"0","key":"color","value":["186"],"visibility":"1","variation":"0","attribute_id":"26"}}',
            ),
            453 => 
            array (
                'id' => 6759,
                'product_id' => 1167,
                'type' => 'array',
                'key' => 'attributes',
                'value' => '{"color":{"name":"Color","position":"0","key":"color","value":["186"],"visibility":"1","variation":"0","attribute_id":"26"}}',
            ),
            454 => 
            array (
                'id' => 6787,
                'product_id' => 1166,
                'type' => 'array',
                'key' => 'attributes',
                'value' => '{"color":{"name":"Color","position":"0","key":"color","value":["24","193"],"visibility":"1","variation":"1","attribute_id":"26"},"material":{"name":"Material","position":"1","key":"material","value":["Nylon"],"visibility":"1","variation":"0","attribute_id":""}}',
            ),
            455 => 
            array (
                'id' => 6788,
                'product_id' => 1257,
                'type' => 'null',
                'key' => 'attribute_color',
                'value' => '24',
            ),
            456 => 
            array (
                'id' => 6789,
                'product_id' => 1258,
                'type' => 'null',
                'key' => 'attribute_color',
                'value' => '193',
            ),
            457 => 
            array (
                'id' => 6790,
                'product_id' => 1257,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221116/ebd6ad65191e7bc92e6a68dc09a6c8ef.jpg',
            ),
            458 => 
            array (
                'id' => 6791,
                'product_id' => 1257,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            459 => 
            array (
                'id' => 6792,
                'product_id' => 1257,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            460 => 
            array (
                'id' => 6793,
                'product_id' => 1257,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            461 => 
            array (
                'id' => 6794,
                'product_id' => 1257,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            462 => 
            array (
                'id' => 6795,
                'product_id' => 1257,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            463 => 
            array (
                'id' => 6796,
                'product_id' => 1257,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            464 => 
            array (
                'id' => 6797,
                'product_id' => 1257,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            465 => 
            array (
                'id' => 6798,
                'product_id' => 1257,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            466 => 
            array (
                'id' => 6799,
                'product_id' => 1257,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            467 => 
            array (
                'id' => 6800,
                'product_id' => 1257,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            468 => 
            array (
                'id' => 6801,
                'product_id' => 1257,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            469 => 
            array (
                'id' => 6802,
                'product_id' => 1257,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '0',
            ),
            470 => 
            array (
                'id' => 6803,
                'product_id' => 1258,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221116/7bd866eb6f3cc24c203e68e0940e6d43.jpg',
            ),
            471 => 
            array (
                'id' => 6804,
                'product_id' => 1258,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            472 => 
            array (
                'id' => 6805,
                'product_id' => 1258,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            473 => 
            array (
                'id' => 6806,
                'product_id' => 1258,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            474 => 
            array (
                'id' => 6807,
                'product_id' => 1258,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            475 => 
            array (
                'id' => 6808,
                'product_id' => 1258,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            476 => 
            array (
                'id' => 6809,
                'product_id' => 1258,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            477 => 
            array (
                'id' => 6810,
                'product_id' => 1258,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            478 => 
            array (
                'id' => 6811,
                'product_id' => 1258,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            479 => 
            array (
                'id' => 6812,
                'product_id' => 1258,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            480 => 
            array (
                'id' => 6813,
                'product_id' => 1258,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            481 => 
            array (
                'id' => 6814,
                'product_id' => 1258,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            482 => 
            array (
                'id' => 6815,
                'product_id' => 1258,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '1',
            ),
            483 => 
            array (
                'id' => 6816,
                'product_id' => 1166,
                'type' => 'array',
                'key' => 'default_attributes',
                'value' => '{"color":""}',
            ),
            484 => 
            array (
                'id' => 6871,
                'product_id' => 1165,
                'type' => 'array',
                'key' => 'attributes',
                'value' => '{"material":{"name":"Material","position":"0","key":"material","value":["Nylon"],"visibility":"1","variation":"0","attribute_id":""},"capacity":{"name":"Capacity","position":"1","key":"capacity","value":["5kg"],"visibility":"1","variation":"0","attribute_id":""}}',
            ),
            485 => 
            array (
                'id' => 6926,
                'product_id' => 1164,
                'type' => 'array',
                'key' => 'attributes',
                'value' => '{"color":{"name":"Color","position":"0","key":"color","value":["183","193","25","26"],"visibility":"1","variation":"1","attribute_id":"26"},"material":{"name":"Material","position":"1","key":"material","value":["Fabric"],"visibility":"1","variation":"0","attribute_id":""}}',
            ),
            486 => 
            array (
                'id' => 6927,
                'product_id' => 1259,
                'type' => 'null',
                'key' => 'attribute_color',
                'value' => '183',
            ),
            487 => 
            array (
                'id' => 6928,
                'product_id' => 1260,
                'type' => 'null',
                'key' => 'attribute_color',
                'value' => '193',
            ),
            488 => 
            array (
                'id' => 6929,
                'product_id' => 1261,
                'type' => 'null',
                'key' => 'attribute_color',
                'value' => '25',
            ),
            489 => 
            array (
                'id' => 6930,
                'product_id' => 1262,
                'type' => 'null',
                'key' => 'attribute_color',
                'value' => '26',
            ),
            490 => 
            array (
                'id' => 6931,
                'product_id' => 1259,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221116/cf0f3ca1068d989088a76b306476031d.jpg',
            ),
            491 => 
            array (
                'id' => 6932,
                'product_id' => 1259,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            492 => 
            array (
                'id' => 6933,
                'product_id' => 1259,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            493 => 
            array (
                'id' => 6934,
                'product_id' => 1259,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            494 => 
            array (
                'id' => 6935,
                'product_id' => 1259,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            495 => 
            array (
                'id' => 6936,
                'product_id' => 1259,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            496 => 
            array (
                'id' => 6937,
                'product_id' => 1259,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            497 => 
            array (
                'id' => 6938,
                'product_id' => 1259,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            498 => 
            array (
                'id' => 6939,
                'product_id' => 1259,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            499 => 
            array (
                'id' => 6940,
                'product_id' => 1259,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
        ));
        \DB::table('products_meta')->insert(array (
            0 => 
            array (
                'id' => 6941,
                'product_id' => 1259,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            1 => 
            array (
                'id' => 6942,
                'product_id' => 1259,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            2 => 
            array (
                'id' => 6943,
                'product_id' => 1259,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '0',
            ),
            3 => 
            array (
                'id' => 6944,
                'product_id' => 1260,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221116/5a7a4b5d82398aebce973cbf14f418fa.jpg',
            ),
            4 => 
            array (
                'id' => 6945,
                'product_id' => 1260,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            5 => 
            array (
                'id' => 6946,
                'product_id' => 1260,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            6 => 
            array (
                'id' => 6947,
                'product_id' => 1260,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            7 => 
            array (
                'id' => 6948,
                'product_id' => 1260,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '',
            ),
            8 => 
            array (
                'id' => 6949,
                'product_id' => 1260,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            9 => 
            array (
                'id' => 6950,
                'product_id' => 1260,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            10 => 
            array (
                'id' => 6951,
                'product_id' => 1260,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            11 => 
            array (
                'id' => 6952,
                'product_id' => 1260,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            12 => 
            array (
                'id' => 6953,
                'product_id' => 1260,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            13 => 
            array (
                'id' => 6954,
                'product_id' => 1260,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            14 => 
            array (
                'id' => 6955,
                'product_id' => 1260,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            15 => 
            array (
                'id' => 6956,
                'product_id' => 1260,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '1',
            ),
            16 => 
            array (
                'id' => 6957,
                'product_id' => 1261,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221116/c65508ea6c70eb20b06892e00e8b5313.jpg',
            ),
            17 => 
            array (
                'id' => 6958,
                'product_id' => 1261,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            18 => 
            array (
                'id' => 6959,
                'product_id' => 1261,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            19 => 
            array (
                'id' => 6960,
                'product_id' => 1261,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            20 => 
            array (
                'id' => 6961,
                'product_id' => 1261,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            21 => 
            array (
                'id' => 6962,
                'product_id' => 1261,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            22 => 
            array (
                'id' => 6963,
                'product_id' => 1261,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            23 => 
            array (
                'id' => 6964,
                'product_id' => 1261,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            24 => 
            array (
                'id' => 6965,
                'product_id' => 1261,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            25 => 
            array (
                'id' => 6966,
                'product_id' => 1261,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            26 => 
            array (
                'id' => 6967,
                'product_id' => 1261,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            27 => 
            array (
                'id' => 6968,
                'product_id' => 1261,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            28 => 
            array (
                'id' => 6969,
                'product_id' => 1261,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '2',
            ),
            29 => 
            array (
                'id' => 6970,
                'product_id' => 1262,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221116/ec39765aa60cd5e6e28bfa5ed5d48d58.jpg',
            ),
            30 => 
            array (
                'id' => 6971,
                'product_id' => 1262,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            31 => 
            array (
                'id' => 6972,
                'product_id' => 1262,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            32 => 
            array (
                'id' => 6973,
                'product_id' => 1262,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            33 => 
            array (
                'id' => 6974,
                'product_id' => 1262,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            34 => 
            array (
                'id' => 6975,
                'product_id' => 1262,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            35 => 
            array (
                'id' => 6976,
                'product_id' => 1262,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            36 => 
            array (
                'id' => 6977,
                'product_id' => 1262,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            37 => 
            array (
                'id' => 6978,
                'product_id' => 1262,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            38 => 
            array (
                'id' => 6979,
                'product_id' => 1262,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            39 => 
            array (
                'id' => 6980,
                'product_id' => 1262,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            40 => 
            array (
                'id' => 6981,
                'product_id' => 1262,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            41 => 
            array (
                'id' => 6982,
                'product_id' => 1262,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '3',
            ),
            42 => 
            array (
                'id' => 6983,
                'product_id' => 1164,
                'type' => 'array',
                'key' => 'default_attributes',
                'value' => '{"color":""}',
            ),
            43 => 
            array (
                'id' => 6988,
                'product_id' => 1259,
                'type' => 'string',
                'key' => 'meta_scheduled_sale',
                'value' => '0',
            ),
            44 => 
            array (
                'id' => 6989,
                'product_id' => 1260,
                'type' => 'string',
                'key' => 'meta_scheduled_sale',
                'value' => '0',
            ),
            45 => 
            array (
                'id' => 6990,
                'product_id' => 1261,
                'type' => 'string',
                'key' => 'meta_scheduled_sale',
                'value' => '0',
            ),
            46 => 
            array (
                'id' => 6991,
                'product_id' => 1262,
                'type' => 'string',
                'key' => 'meta_scheduled_sale',
                'value' => '0',
            ),
            47 => 
            array (
                'id' => 7180,
                'product_id' => 1163,
                'type' => 'array',
                'key' => 'attributes',
                'value' => '{"color":{"name":"Color","position":"0","key":"color","value":["24","26","27"],"visibility":"1","variation":"1","attribute_id":"26"},"material":{"name":"Material","position":"1","key":"material","value":["Nylon"],"visibility":"1","variation":"0","attribute_id":""}}',
            ),
            48 => 
            array (
                'id' => 7207,
                'product_id' => 1263,
                'type' => 'null',
                'key' => 'attribute_color',
                'value' => '24',
            ),
            49 => 
            array (
                'id' => 7208,
                'product_id' => 1264,
                'type' => 'null',
                'key' => 'attribute_color',
                'value' => '26',
            ),
            50 => 
            array (
                'id' => 7209,
                'product_id' => 1265,
                'type' => 'null',
                'key' => 'attribute_color',
                'value' => '27',
            ),
            51 => 
            array (
                'id' => 7210,
                'product_id' => 1263,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221116/71f49acb55e0ecffc8d0758b32ccadca.jpg',
            ),
            52 => 
            array (
                'id' => 7211,
                'product_id' => 1263,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            53 => 
            array (
                'id' => 7212,
                'product_id' => 1263,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            54 => 
            array (
                'id' => 7213,
                'product_id' => 1263,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            55 => 
            array (
                'id' => 7214,
                'product_id' => 1263,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '1',
            ),
            56 => 
            array (
                'id' => 7215,
                'product_id' => 1263,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '1',
            ),
            57 => 
            array (
                'id' => 7216,
                'product_id' => 1263,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            58 => 
            array (
                'id' => 7217,
                'product_id' => 1263,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            59 => 
            array (
                'id' => 7218,
                'product_id' => 1263,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            60 => 
            array (
                'id' => 7219,
                'product_id' => 1263,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            61 => 
            array (
                'id' => 7220,
                'product_id' => 1263,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            62 => 
            array (
                'id' => 7221,
                'product_id' => 1263,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            63 => 
            array (
                'id' => 7222,
                'product_id' => 1263,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '0',
            ),
            64 => 
            array (
                'id' => 7223,
                'product_id' => 1264,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221116/86852cdd6e64a72700577c427c3be4d8.jpg',
            ),
            65 => 
            array (
                'id' => 7224,
                'product_id' => 1264,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            66 => 
            array (
                'id' => 7225,
                'product_id' => 1264,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            67 => 
            array (
                'id' => 7226,
                'product_id' => 1264,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            68 => 
            array (
                'id' => 7227,
                'product_id' => 1264,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            69 => 
            array (
                'id' => 7228,
                'product_id' => 1264,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '1.200',
            ),
            70 => 
            array (
                'id' => 7229,
                'product_id' => 1264,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            71 => 
            array (
                'id' => 7230,
                'product_id' => 1264,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            72 => 
            array (
                'id' => 7231,
                'product_id' => 1264,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            73 => 
            array (
                'id' => 7232,
                'product_id' => 1264,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            74 => 
            array (
                'id' => 7233,
                'product_id' => 1264,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            75 => 
            array (
                'id' => 7234,
                'product_id' => 1264,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            76 => 
            array (
                'id' => 7235,
                'product_id' => 1264,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '1',
            ),
            77 => 
            array (
                'id' => 7236,
                'product_id' => 1265,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221116/433b192deb31c1979cf854465981a492.jpg',
            ),
            78 => 
            array (
                'id' => 7237,
                'product_id' => 1265,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            79 => 
            array (
                'id' => 7238,
                'product_id' => 1265,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            80 => 
            array (
                'id' => 7239,
                'product_id' => 1265,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            81 => 
            array (
                'id' => 7240,
                'product_id' => 1265,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            82 => 
            array (
                'id' => 7241,
                'product_id' => 1265,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '1',
            ),
            83 => 
            array (
                'id' => 7242,
                'product_id' => 1265,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            84 => 
            array (
                'id' => 7243,
                'product_id' => 1265,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            85 => 
            array (
                'id' => 7244,
                'product_id' => 1265,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            86 => 
            array (
                'id' => 7245,
                'product_id' => 1265,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            87 => 
            array (
                'id' => 7246,
                'product_id' => 1265,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            88 => 
            array (
                'id' => 7247,
                'product_id' => 1265,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            89 => 
            array (
                'id' => 7248,
                'product_id' => 1265,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '2',
            ),
            90 => 
            array (
                'id' => 7249,
                'product_id' => 1163,
                'type' => 'array',
                'key' => 'default_attributes',
                'value' => '{"color":""}',
            ),
            91 => 
            array (
                'id' => 7306,
                'product_id' => 1162,
                'type' => 'array',
                'key' => 'attributes',
                'value' => '{"color":{"name":"Color","position":"0","key":"color","value":["24","194","211","26"],"visibility":"1","variation":"1","attribute_id":"26"},"material":{"name":"Material","position":"1","key":"material","value":["Pu Leather"],"visibility":"1","variation":"0","attribute_id":""}}',
            ),
            92 => 
            array (
                'id' => 7307,
                'product_id' => 1266,
                'type' => 'null',
                'key' => 'attribute_color',
                'value' => '24',
            ),
            93 => 
            array (
                'id' => 7308,
                'product_id' => 1267,
                'type' => 'null',
                'key' => 'attribute_color',
                'value' => '194',
            ),
            94 => 
            array (
                'id' => 7309,
                'product_id' => 1268,
                'type' => 'null',
                'key' => 'attribute_color',
                'value' => '211',
            ),
            95 => 
            array (
                'id' => 7310,
                'product_id' => 1269,
                'type' => 'null',
                'key' => 'attribute_color',
                'value' => '26',
            ),
            96 => 
            array (
                'id' => 7311,
                'product_id' => 1266,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221116/a239ee44938ad9f40976097d381ef57f.jpg',
            ),
            97 => 
            array (
                'id' => 7312,
                'product_id' => 1266,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            98 => 
            array (
                'id' => 7313,
                'product_id' => 1266,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            99 => 
            array (
                'id' => 7314,
                'product_id' => 1266,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            100 => 
            array (
                'id' => 7315,
                'product_id' => 1266,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            101 => 
            array (
                'id' => 7316,
                'product_id' => 1266,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            102 => 
            array (
                'id' => 7317,
                'product_id' => 1266,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            103 => 
            array (
                'id' => 7318,
                'product_id' => 1266,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            104 => 
            array (
                'id' => 7319,
                'product_id' => 1266,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            105 => 
            array (
                'id' => 7320,
                'product_id' => 1266,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            106 => 
            array (
                'id' => 7321,
                'product_id' => 1266,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            107 => 
            array (
                'id' => 7322,
                'product_id' => 1266,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            108 => 
            array (
                'id' => 7323,
                'product_id' => 1266,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '0',
            ),
            109 => 
            array (
                'id' => 7324,
                'product_id' => 1267,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221116/d365206b7141f86c43ac3a71e4485ae8.jpg',
            ),
            110 => 
            array (
                'id' => 7325,
                'product_id' => 1267,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            111 => 
            array (
                'id' => 7326,
                'product_id' => 1267,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            112 => 
            array (
                'id' => 7327,
                'product_id' => 1267,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            113 => 
            array (
                'id' => 7328,
                'product_id' => 1267,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            114 => 
            array (
                'id' => 7329,
                'product_id' => 1267,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            115 => 
            array (
                'id' => 7330,
                'product_id' => 1267,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            116 => 
            array (
                'id' => 7331,
                'product_id' => 1267,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            117 => 
            array (
                'id' => 7332,
                'product_id' => 1267,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            118 => 
            array (
                'id' => 7333,
                'product_id' => 1267,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            119 => 
            array (
                'id' => 7334,
                'product_id' => 1267,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            120 => 
            array (
                'id' => 7335,
                'product_id' => 1267,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            121 => 
            array (
                'id' => 7336,
                'product_id' => 1267,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '1',
            ),
            122 => 
            array (
                'id' => 7337,
                'product_id' => 1268,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221116/0b04fa1b12a727e75c0309c5d13983f2.jpg',
            ),
            123 => 
            array (
                'id' => 7338,
                'product_id' => 1268,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            124 => 
            array (
                'id' => 7339,
                'product_id' => 1268,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            125 => 
            array (
                'id' => 7340,
                'product_id' => 1268,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            126 => 
            array (
                'id' => 7341,
                'product_id' => 1268,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            127 => 
            array (
                'id' => 7342,
                'product_id' => 1268,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            128 => 
            array (
                'id' => 7343,
                'product_id' => 1268,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            129 => 
            array (
                'id' => 7344,
                'product_id' => 1268,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            130 => 
            array (
                'id' => 7345,
                'product_id' => 1268,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            131 => 
            array (
                'id' => 7346,
                'product_id' => 1268,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            132 => 
            array (
                'id' => 7347,
                'product_id' => 1268,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            133 => 
            array (
                'id' => 7348,
                'product_id' => 1268,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            134 => 
            array (
                'id' => 7349,
                'product_id' => 1268,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '2',
            ),
            135 => 
            array (
                'id' => 7350,
                'product_id' => 1269,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221116/290c384c80db20617d19384a06f75a46.jpg',
            ),
            136 => 
            array (
                'id' => 7351,
                'product_id' => 1269,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            137 => 
            array (
                'id' => 7352,
                'product_id' => 1269,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            138 => 
            array (
                'id' => 7353,
                'product_id' => 1269,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            139 => 
            array (
                'id' => 7354,
                'product_id' => 1269,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            140 => 
            array (
                'id' => 7355,
                'product_id' => 1269,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            141 => 
            array (
                'id' => 7356,
                'product_id' => 1269,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            142 => 
            array (
                'id' => 7357,
                'product_id' => 1269,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            143 => 
            array (
                'id' => 7358,
                'product_id' => 1269,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            144 => 
            array (
                'id' => 7359,
                'product_id' => 1269,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            145 => 
            array (
                'id' => 7360,
                'product_id' => 1269,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            146 => 
            array (
                'id' => 7361,
                'product_id' => 1269,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            147 => 
            array (
                'id' => 7362,
                'product_id' => 1269,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '3',
            ),
            148 => 
            array (
                'id' => 7363,
                'product_id' => 1162,
                'type' => 'array',
                'key' => 'default_attributes',
                'value' => '{"color":""}',
            ),
            149 => 
            array (
                'id' => 7395,
                'product_id' => 1161,
                'type' => 'array',
                'key' => 'attributes',
                'value' => '{"color":{"name":"Color","position":"0","key":"color","value":["24","27","218","219"],"visibility":"1","variation":"1","attribute_id":"26"},"material":{"name":"Material","position":"1","key":"material","value":["Pu Leather"],"visibility":"1","variation":"0","attribute_id":""}}',
            ),
            150 => 
            array (
                'id' => 7396,
                'product_id' => 1270,
                'type' => 'null',
                'key' => 'attribute_color',
                'value' => '24',
            ),
            151 => 
            array (
                'id' => 7397,
                'product_id' => 1271,
                'type' => 'null',
                'key' => 'attribute_color',
                'value' => '27',
            ),
            152 => 
            array (
                'id' => 7398,
                'product_id' => 1272,
                'type' => 'null',
                'key' => 'attribute_color',
                'value' => '218',
            ),
            153 => 
            array (
                'id' => 7399,
                'product_id' => 1273,
                'type' => 'null',
                'key' => 'attribute_color',
                'value' => '219',
            ),
            154 => 
            array (
                'id' => 7400,
                'product_id' => 1270,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221116/4bbfc03d96630ac35e8b46334cf73ebe.jpg',
            ),
            155 => 
            array (
                'id' => 7401,
                'product_id' => 1270,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            156 => 
            array (
                'id' => 7402,
                'product_id' => 1270,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            157 => 
            array (
                'id' => 7403,
                'product_id' => 1270,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            158 => 
            array (
                'id' => 7404,
                'product_id' => 1270,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            159 => 
            array (
                'id' => 7405,
                'product_id' => 1270,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            160 => 
            array (
                'id' => 7406,
                'product_id' => 1270,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            161 => 
            array (
                'id' => 7407,
                'product_id' => 1270,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            162 => 
            array (
                'id' => 7408,
                'product_id' => 1270,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            163 => 
            array (
                'id' => 7409,
                'product_id' => 1270,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            164 => 
            array (
                'id' => 7410,
                'product_id' => 1270,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            165 => 
            array (
                'id' => 7411,
                'product_id' => 1270,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            166 => 
            array (
                'id' => 7412,
                'product_id' => 1270,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '0',
            ),
            167 => 
            array (
                'id' => 7413,
                'product_id' => 1271,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221116/c40f91c0d7962a3fb9a6a208e3f2ab96.jpg',
            ),
            168 => 
            array (
                'id' => 7414,
                'product_id' => 1271,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            169 => 
            array (
                'id' => 7415,
                'product_id' => 1271,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            170 => 
            array (
                'id' => 7416,
                'product_id' => 1271,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            171 => 
            array (
                'id' => 7417,
                'product_id' => 1271,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            172 => 
            array (
                'id' => 7418,
                'product_id' => 1271,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            173 => 
            array (
                'id' => 7419,
                'product_id' => 1271,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            174 => 
            array (
                'id' => 7420,
                'product_id' => 1271,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            175 => 
            array (
                'id' => 7421,
                'product_id' => 1271,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            176 => 
            array (
                'id' => 7422,
                'product_id' => 1271,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            177 => 
            array (
                'id' => 7423,
                'product_id' => 1271,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            178 => 
            array (
                'id' => 7424,
                'product_id' => 1271,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            179 => 
            array (
                'id' => 7425,
                'product_id' => 1271,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '1',
            ),
            180 => 
            array (
                'id' => 7426,
                'product_id' => 1272,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221116/0b643f20f9f2b8f89666d14532f71d9b.jpg',
            ),
            181 => 
            array (
                'id' => 7427,
                'product_id' => 1272,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            182 => 
            array (
                'id' => 7428,
                'product_id' => 1272,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            183 => 
            array (
                'id' => 7429,
                'product_id' => 1272,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            184 => 
            array (
                'id' => 7430,
                'product_id' => 1272,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            185 => 
            array (
                'id' => 7431,
                'product_id' => 1272,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            186 => 
            array (
                'id' => 7432,
                'product_id' => 1272,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            187 => 
            array (
                'id' => 7433,
                'product_id' => 1272,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            188 => 
            array (
                'id' => 7434,
                'product_id' => 1272,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            189 => 
            array (
                'id' => 7435,
                'product_id' => 1272,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            190 => 
            array (
                'id' => 7436,
                'product_id' => 1272,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            191 => 
            array (
                'id' => 7437,
                'product_id' => 1272,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            192 => 
            array (
                'id' => 7438,
                'product_id' => 1272,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '2',
            ),
            193 => 
            array (
                'id' => 7439,
                'product_id' => 1273,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221116/831ee5dc5b46e3d1adef99004d19ac18.jpg',
            ),
            194 => 
            array (
                'id' => 7440,
                'product_id' => 1273,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            195 => 
            array (
                'id' => 7441,
                'product_id' => 1273,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            196 => 
            array (
                'id' => 7442,
                'product_id' => 1273,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            197 => 
            array (
                'id' => 7443,
                'product_id' => 1273,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            198 => 
            array (
                'id' => 7444,
                'product_id' => 1273,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            199 => 
            array (
                'id' => 7445,
                'product_id' => 1273,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            200 => 
            array (
                'id' => 7446,
                'product_id' => 1273,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            201 => 
            array (
                'id' => 7447,
                'product_id' => 1273,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            202 => 
            array (
                'id' => 7448,
                'product_id' => 1273,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            203 => 
            array (
                'id' => 7449,
                'product_id' => 1273,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            204 => 
            array (
                'id' => 7450,
                'product_id' => 1273,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            205 => 
            array (
                'id' => 7451,
                'product_id' => 1273,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '3',
            ),
            206 => 
            array (
                'id' => 7452,
                'product_id' => 1161,
                'type' => 'array',
                'key' => 'default_attributes',
                'value' => '{"color":""}',
            ),
            207 => 
            array (
                'id' => 7510,
                'product_id' => 1160,
                'type' => 'array',
                'key' => 'attributes',
                'value' => '{"color":{"name":"Color","position":"0","key":"color","value":["186"],"visibility":"1","variation":"0","attribute_id":"26"}}',
            ),
            208 => 
            array (
                'id' => 7538,
                'product_id' => 1159,
                'type' => 'array',
                'key' => 'attributes',
                'value' => '{"cardtype":{"name":"Card Type","position":"0","key":"cardtype","value":["TAROT"],"visibility":"1","variation":"0","attribute_id":""},"numberofsheets":{"name":"Number of Sheets","position":"1","key":"numberofsheets","value":["78Pcs\\/Box"],"visibility":"1","variation":"0","attribute_id":""}}',
            ),
            209 => 
            array (
                'id' => 7618,
                'product_id' => 1158,
                'type' => 'array',
                'key' => 'attributes',
                'value' => '{"material":{"name":"Material","position":"0","key":"material","value":["Paper"],"visibility":"1","variation":"0","attribute_id":""},"type":{"name":"Type","position":"1","key":"type","value":["ORACLE CARD TAROT CARD"],"visibility":"0","variation":"0","attribute_id":""}}',
            ),
            210 => 
            array (
                'id' => 7672,
                'product_id' => 1157,
                'type' => 'array',
                'key' => 'attributes',
                'value' => '{"brand":{"name":"Brand","position":"0","key":"brand","value":["220"],"visibility":"1","variation":"0","attribute_id":"341"},"color":{"name":"Color","position":"1","key":"color","value":["27"],"visibility":"1","variation":"0","attribute_id":"26"},"features":{"name":"Features","position":"2","key":"features","value":["with RGB Breathing LED, Enhanced Switch Pro Controller, Wireless Switch Controller"],"visibility":"1","variation":"0","attribute_id":""}}',
            ),
            211 => 
            array (
                'id' => 7752,
                'product_id' => 1156,
                'type' => 'array',
                'key' => 'attributes',
                'value' => '{"color":{"name":"Color","position":"0","key":"color","value":["24","219","188","25","221"],"visibility":"1","variation":"1","attribute_id":"26"},"material":{"name":"Material","position":"1","key":"material","value":["Cotton"],"visibility":"1","variation":"0","attribute_id":""}}',
            ),
            212 => 
            array (
                'id' => 7753,
                'product_id' => 1274,
                'type' => 'null',
                'key' => 'attribute_color',
                'value' => '24',
            ),
            213 => 
            array (
                'id' => 7754,
                'product_id' => 1275,
                'type' => 'null',
                'key' => 'attribute_color',
                'value' => '219',
            ),
            214 => 
            array (
                'id' => 7755,
                'product_id' => 1276,
                'type' => 'null',
                'key' => 'attribute_color',
                'value' => '188',
            ),
            215 => 
            array (
                'id' => 7756,
                'product_id' => 1277,
                'type' => 'null',
                'key' => 'attribute_color',
                'value' => '25',
            ),
            216 => 
            array (
                'id' => 7757,
                'product_id' => 1278,
                'type' => 'null',
                'key' => 'attribute_color',
                'value' => '221',
            ),
            217 => 
            array (
                'id' => 7758,
                'product_id' => 1274,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221116/d304e38b901606e13589d71f9ca08a54.jpg',
            ),
            218 => 
            array (
                'id' => 7759,
                'product_id' => 1274,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            219 => 
            array (
                'id' => 7760,
                'product_id' => 1274,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            220 => 
            array (
                'id' => 7761,
                'product_id' => 1274,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            221 => 
            array (
                'id' => 7762,
                'product_id' => 1274,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            222 => 
            array (
                'id' => 7763,
                'product_id' => 1274,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            223 => 
            array (
                'id' => 7764,
                'product_id' => 1274,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            224 => 
            array (
                'id' => 7765,
                'product_id' => 1274,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            225 => 
            array (
                'id' => 7766,
                'product_id' => 1274,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            226 => 
            array (
                'id' => 7767,
                'product_id' => 1274,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            227 => 
            array (
                'id' => 7768,
                'product_id' => 1274,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            228 => 
            array (
                'id' => 7769,
                'product_id' => 1274,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            229 => 
            array (
                'id' => 7770,
                'product_id' => 1274,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '0',
            ),
            230 => 
            array (
                'id' => 7771,
                'product_id' => 1275,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221116/119dd8bdcde7e42a505ffe41e14a6ffb.jpg',
            ),
            231 => 
            array (
                'id' => 7772,
                'product_id' => 1275,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            232 => 
            array (
                'id' => 7773,
                'product_id' => 1275,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            233 => 
            array (
                'id' => 7774,
                'product_id' => 1275,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            234 => 
            array (
                'id' => 7775,
                'product_id' => 1275,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            235 => 
            array (
                'id' => 7776,
                'product_id' => 1275,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            236 => 
            array (
                'id' => 7777,
                'product_id' => 1275,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            237 => 
            array (
                'id' => 7778,
                'product_id' => 1275,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            238 => 
            array (
                'id' => 7779,
                'product_id' => 1275,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            239 => 
            array (
                'id' => 7780,
                'product_id' => 1275,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            240 => 
            array (
                'id' => 7781,
                'product_id' => 1275,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            241 => 
            array (
                'id' => 7782,
                'product_id' => 1275,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            242 => 
            array (
                'id' => 7783,
                'product_id' => 1275,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '1',
            ),
            243 => 
            array (
                'id' => 7784,
                'product_id' => 1276,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221116/5ca5998a74e37d21087d59cb9f3cc404.jpg',
            ),
            244 => 
            array (
                'id' => 7785,
                'product_id' => 1276,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            245 => 
            array (
                'id' => 7786,
                'product_id' => 1276,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            246 => 
            array (
                'id' => 7787,
                'product_id' => 1276,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            247 => 
            array (
                'id' => 7788,
                'product_id' => 1276,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            248 => 
            array (
                'id' => 7789,
                'product_id' => 1276,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            249 => 
            array (
                'id' => 7790,
                'product_id' => 1276,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            250 => 
            array (
                'id' => 7791,
                'product_id' => 1276,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            251 => 
            array (
                'id' => 7792,
                'product_id' => 1276,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            252 => 
            array (
                'id' => 7793,
                'product_id' => 1276,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            253 => 
            array (
                'id' => 7794,
                'product_id' => 1276,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            254 => 
            array (
                'id' => 7795,
                'product_id' => 1276,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            255 => 
            array (
                'id' => 7796,
                'product_id' => 1276,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '2',
            ),
            256 => 
            array (
                'id' => 7797,
                'product_id' => 1277,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221116/0e961d96e26709c29fc191b4c3298584.jpg',
            ),
            257 => 
            array (
                'id' => 7798,
                'product_id' => 1277,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            258 => 
            array (
                'id' => 7799,
                'product_id' => 1277,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            259 => 
            array (
                'id' => 7800,
                'product_id' => 1277,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            260 => 
            array (
                'id' => 7801,
                'product_id' => 1277,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '',
            ),
            261 => 
            array (
                'id' => 7802,
                'product_id' => 1277,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            262 => 
            array (
                'id' => 7803,
                'product_id' => 1277,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            263 => 
            array (
                'id' => 7804,
                'product_id' => 1277,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            264 => 
            array (
                'id' => 7805,
                'product_id' => 1277,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            265 => 
            array (
                'id' => 7806,
                'product_id' => 1277,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            266 => 
            array (
                'id' => 7807,
                'product_id' => 1277,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            267 => 
            array (
                'id' => 7808,
                'product_id' => 1277,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            268 => 
            array (
                'id' => 7809,
                'product_id' => 1277,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '3',
            ),
            269 => 
            array (
                'id' => 7810,
                'product_id' => 1278,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221116/f1e675ef1ffb3b061b589586922667f1.jpg',
            ),
            270 => 
            array (
                'id' => 7811,
                'product_id' => 1278,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            271 => 
            array (
                'id' => 7812,
                'product_id' => 1278,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            272 => 
            array (
                'id' => 7813,
                'product_id' => 1278,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            273 => 
            array (
                'id' => 7814,
                'product_id' => 1278,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            274 => 
            array (
                'id' => 7815,
                'product_id' => 1278,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            275 => 
            array (
                'id' => 7816,
                'product_id' => 1278,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            276 => 
            array (
                'id' => 7817,
                'product_id' => 1278,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            277 => 
            array (
                'id' => 7818,
                'product_id' => 1278,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            278 => 
            array (
                'id' => 7819,
                'product_id' => 1278,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            279 => 
            array (
                'id' => 7820,
                'product_id' => 1278,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            280 => 
            array (
                'id' => 7821,
                'product_id' => 1278,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            281 => 
            array (
                'id' => 7822,
                'product_id' => 1278,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '4',
            ),
            282 => 
            array (
                'id' => 7823,
                'product_id' => 1156,
                'type' => 'array',
                'key' => 'default_attributes',
                'value' => '{"color":""}',
            ),
            283 => 
            array (
                'id' => 7882,
                'product_id' => 1155,
                'type' => 'array',
                'key' => 'attributes',
                'value' => '{"color":{"name":"Color","position":"0","key":"color","value":["24","25","26","27"],"visibility":"1","variation":"1","attribute_id":"26"},"material":{"name":"Material","position":"1","key":"material","value":["Cotton"],"visibility":"1","variation":"0","attribute_id":""}}',
            ),
            284 => 
            array (
                'id' => 7883,
                'product_id' => 1279,
                'type' => 'null',
                'key' => 'attribute_color',
                'value' => '24',
            ),
            285 => 
            array (
                'id' => 7884,
                'product_id' => 1280,
                'type' => 'null',
                'key' => 'attribute_color',
                'value' => '25',
            ),
            286 => 
            array (
                'id' => 7885,
                'product_id' => 1281,
                'type' => 'null',
                'key' => 'attribute_color',
                'value' => '26',
            ),
            287 => 
            array (
                'id' => 7886,
                'product_id' => 1282,
                'type' => 'null',
                'key' => 'attribute_color',
                'value' => '27',
            ),
            288 => 
            array (
                'id' => 7887,
                'product_id' => 1279,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221116/752a1b3dddf5cd9c0cb4889a9f42d694.jpg',
            ),
            289 => 
            array (
                'id' => 7888,
                'product_id' => 1279,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            290 => 
            array (
                'id' => 7889,
                'product_id' => 1279,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            291 => 
            array (
                'id' => 7890,
                'product_id' => 1279,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            292 => 
            array (
                'id' => 7891,
                'product_id' => 1279,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            293 => 
            array (
                'id' => 7892,
                'product_id' => 1279,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            294 => 
            array (
                'id' => 7893,
                'product_id' => 1279,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            295 => 
            array (
                'id' => 7894,
                'product_id' => 1279,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            296 => 
            array (
                'id' => 7895,
                'product_id' => 1279,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            297 => 
            array (
                'id' => 7896,
                'product_id' => 1279,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            298 => 
            array (
                'id' => 7897,
                'product_id' => 1279,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            299 => 
            array (
                'id' => 7898,
                'product_id' => 1279,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            300 => 
            array (
                'id' => 7899,
                'product_id' => 1279,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '0',
            ),
            301 => 
            array (
                'id' => 7900,
                'product_id' => 1280,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221116/6d2dfa5aea81240a429d89d73ce6d977.jpg',
            ),
            302 => 
            array (
                'id' => 7901,
                'product_id' => 1280,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            303 => 
            array (
                'id' => 7902,
                'product_id' => 1280,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            304 => 
            array (
                'id' => 7903,
                'product_id' => 1280,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            305 => 
            array (
                'id' => 7904,
                'product_id' => 1280,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            306 => 
            array (
                'id' => 7905,
                'product_id' => 1280,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            307 => 
            array (
                'id' => 7906,
                'product_id' => 1280,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            308 => 
            array (
                'id' => 7907,
                'product_id' => 1280,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            309 => 
            array (
                'id' => 7908,
                'product_id' => 1280,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            310 => 
            array (
                'id' => 7909,
                'product_id' => 1280,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            311 => 
            array (
                'id' => 7910,
                'product_id' => 1280,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            312 => 
            array (
                'id' => 7911,
                'product_id' => 1280,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            313 => 
            array (
                'id' => 7912,
                'product_id' => 1280,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '1',
            ),
            314 => 
            array (
                'id' => 7913,
                'product_id' => 1281,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221116/cc675f3ab0fcbb746ed9fceae22acba6.jpg',
            ),
            315 => 
            array (
                'id' => 7914,
                'product_id' => 1281,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            316 => 
            array (
                'id' => 7915,
                'product_id' => 1281,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            317 => 
            array (
                'id' => 7916,
                'product_id' => 1281,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            318 => 
            array (
                'id' => 7917,
                'product_id' => 1281,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            319 => 
            array (
                'id' => 7918,
                'product_id' => 1281,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            320 => 
            array (
                'id' => 7919,
                'product_id' => 1281,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            321 => 
            array (
                'id' => 7920,
                'product_id' => 1281,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            322 => 
            array (
                'id' => 7921,
                'product_id' => 1281,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            323 => 
            array (
                'id' => 7922,
                'product_id' => 1281,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            324 => 
            array (
                'id' => 7923,
                'product_id' => 1281,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            325 => 
            array (
                'id' => 7924,
                'product_id' => 1281,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            326 => 
            array (
                'id' => 7925,
                'product_id' => 1281,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '2',
            ),
            327 => 
            array (
                'id' => 7926,
                'product_id' => 1282,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221116/a1f1db319339cc3ee9d89008433d8133.jpg',
            ),
            328 => 
            array (
                'id' => 7927,
                'product_id' => 1282,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            329 => 
            array (
                'id' => 7928,
                'product_id' => 1282,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            330 => 
            array (
                'id' => 7929,
                'product_id' => 1282,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            331 => 
            array (
                'id' => 7930,
                'product_id' => 1282,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            332 => 
            array (
                'id' => 7931,
                'product_id' => 1282,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            333 => 
            array (
                'id' => 7932,
                'product_id' => 1282,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            334 => 
            array (
                'id' => 7933,
                'product_id' => 1282,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            335 => 
            array (
                'id' => 7934,
                'product_id' => 1282,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            336 => 
            array (
                'id' => 7935,
                'product_id' => 1282,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            337 => 
            array (
                'id' => 7936,
                'product_id' => 1282,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            338 => 
            array (
                'id' => 7937,
                'product_id' => 1282,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            339 => 
            array (
                'id' => 7938,
                'product_id' => 1282,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '3',
            ),
            340 => 
            array (
                'id' => 7939,
                'product_id' => 1155,
                'type' => 'array',
                'key' => 'default_attributes',
                'value' => '{"color":""}',
            ),
            341 => 
            array (
                'id' => 7971,
                'product_id' => 1154,
                'type' => 'array',
                'key' => 'attributes',
                'value' => '{"color":{"name":"Color","position":"0","key":"color","value":["183","25","26"],"visibility":"1","variation":"1","attribute_id":"26"},"material":{"name":"Material","position":"1","key":"material","value":["Cotton"],"visibility":"1","variation":"0","attribute_id":""}}',
            ),
            342 => 
            array (
                'id' => 7972,
                'product_id' => 1283,
                'type' => 'null',
                'key' => 'attribute_color',
                'value' => '183',
            ),
            343 => 
            array (
                'id' => 7973,
                'product_id' => 1284,
                'type' => 'null',
                'key' => 'attribute_color',
                'value' => '25',
            ),
            344 => 
            array (
                'id' => 7974,
                'product_id' => 1285,
                'type' => 'null',
                'key' => 'attribute_color',
                'value' => '26',
            ),
            345 => 
            array (
                'id' => 7975,
                'product_id' => 1283,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221116/e2d247c262c31a643649b635817514d5.jpg',
            ),
            346 => 
            array (
                'id' => 7976,
                'product_id' => 1283,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            347 => 
            array (
                'id' => 7977,
                'product_id' => 1283,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            348 => 
            array (
                'id' => 7978,
                'product_id' => 1283,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            349 => 
            array (
                'id' => 7979,
                'product_id' => 1283,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            350 => 
            array (
                'id' => 7980,
                'product_id' => 1283,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            351 => 
            array (
                'id' => 7981,
                'product_id' => 1283,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            352 => 
            array (
                'id' => 7982,
                'product_id' => 1283,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            353 => 
            array (
                'id' => 7983,
                'product_id' => 1283,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            354 => 
            array (
                'id' => 7984,
                'product_id' => 1283,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            355 => 
            array (
                'id' => 7985,
                'product_id' => 1283,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            356 => 
            array (
                'id' => 7986,
                'product_id' => 1283,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            357 => 
            array (
                'id' => 7987,
                'product_id' => 1283,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '0',
            ),
            358 => 
            array (
                'id' => 7988,
                'product_id' => 1284,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221116/2e7365431d01b4d53e5bc69909a4ad53.jpg',
            ),
            359 => 
            array (
                'id' => 7989,
                'product_id' => 1284,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            360 => 
            array (
                'id' => 7990,
                'product_id' => 1284,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            361 => 
            array (
                'id' => 7991,
                'product_id' => 1284,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            362 => 
            array (
                'id' => 7992,
                'product_id' => 1284,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            363 => 
            array (
                'id' => 7993,
                'product_id' => 1284,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            364 => 
            array (
                'id' => 7994,
                'product_id' => 1284,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            365 => 
            array (
                'id' => 7995,
                'product_id' => 1284,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            366 => 
            array (
                'id' => 7996,
                'product_id' => 1284,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            367 => 
            array (
                'id' => 7997,
                'product_id' => 1284,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            368 => 
            array (
                'id' => 7998,
                'product_id' => 1284,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            369 => 
            array (
                'id' => 7999,
                'product_id' => 1284,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            370 => 
            array (
                'id' => 8000,
                'product_id' => 1284,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '1',
            ),
            371 => 
            array (
                'id' => 8001,
                'product_id' => 1285,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221116/40770770531549c2d35c8e0a42e29fd0.jpg',
            ),
            372 => 
            array (
                'id' => 8002,
                'product_id' => 1285,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            373 => 
            array (
                'id' => 8003,
                'product_id' => 1285,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            374 => 
            array (
                'id' => 8004,
                'product_id' => 1285,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            375 => 
            array (
                'id' => 8005,
                'product_id' => 1285,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            376 => 
            array (
                'id' => 8006,
                'product_id' => 1285,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            377 => 
            array (
                'id' => 8007,
                'product_id' => 1285,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            378 => 
            array (
                'id' => 8008,
                'product_id' => 1285,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            379 => 
            array (
                'id' => 8009,
                'product_id' => 1285,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            380 => 
            array (
                'id' => 8010,
                'product_id' => 1285,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            381 => 
            array (
                'id' => 8011,
                'product_id' => 1285,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            382 => 
            array (
                'id' => 8012,
                'product_id' => 1285,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            383 => 
            array (
                'id' => 8013,
                'product_id' => 1285,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '2',
            ),
            384 => 
            array (
                'id' => 8014,
                'product_id' => 1154,
                'type' => 'array',
                'key' => 'default_attributes',
                'value' => '{"color":""}',
            ),
            385 => 
            array (
                'id' => 8045,
                'product_id' => 1153,
                'type' => 'array',
                'key' => 'attributes',
                'value' => '{"material":{"name":"Material","position":"0","key":"material","value":["Cotton"],"visibility":"1","variation":"0","attribute_id":""}}',
            ),
            386 => 
            array (
                'id' => 8125,
                'product_id' => 1152,
                'type' => 'array',
                'key' => 'attributes',
                'value' => '{"color":{"name":"Color","position":"0","key":"color","value":["24","219"],"visibility":"1","variation":"1","attribute_id":"26"},"size":{"name":"Size","position":"1","key":"size","value":["S","M","L"],"visibility":"1","variation":"1","attribute_id":""}}',
            ),
            387 => 
            array (
                'id' => 8126,
                'product_id' => 1286,
                'type' => 'null',
                'key' => 'attribute_color',
                'value' => '24',
            ),
            388 => 
            array (
                'id' => 8127,
                'product_id' => 1286,
                'type' => 'null',
                'key' => 'attribute_size',
                'value' => 'S',
            ),
            389 => 
            array (
                'id' => 8128,
                'product_id' => 1287,
                'type' => 'null',
                'key' => 'attribute_color',
                'value' => '24',
            ),
            390 => 
            array (
                'id' => 8129,
                'product_id' => 1287,
                'type' => 'null',
                'key' => 'attribute_size',
                'value' => 'M',
            ),
            391 => 
            array (
                'id' => 8130,
                'product_id' => 1288,
                'type' => 'null',
                'key' => 'attribute_color',
                'value' => '24',
            ),
            392 => 
            array (
                'id' => 8131,
                'product_id' => 1288,
                'type' => 'null',
                'key' => 'attribute_size',
                'value' => 'L',
            ),
            393 => 
            array (
                'id' => 8132,
                'product_id' => 1289,
                'type' => 'null',
                'key' => 'attribute_color',
                'value' => '219',
            ),
            394 => 
            array (
                'id' => 8133,
                'product_id' => 1289,
                'type' => 'null',
                'key' => 'attribute_size',
                'value' => 'S',
            ),
            395 => 
            array (
                'id' => 8134,
                'product_id' => 1290,
                'type' => 'null',
                'key' => 'attribute_color',
                'value' => '219',
            ),
            396 => 
            array (
                'id' => 8135,
                'product_id' => 1290,
                'type' => 'null',
                'key' => 'attribute_size',
                'value' => 'M',
            ),
            397 => 
            array (
                'id' => 8136,
                'product_id' => 1291,
                'type' => 'null',
                'key' => 'attribute_color',
                'value' => '219',
            ),
            398 => 
            array (
                'id' => 8137,
                'product_id' => 1291,
                'type' => 'null',
                'key' => 'attribute_size',
                'value' => 'L',
            ),
            399 => 
            array (
                'id' => 8138,
                'product_id' => 1286,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221116/87b34dc86a2bcc9e7f0b1e332344611d.jpg',
            ),
            400 => 
            array (
                'id' => 8139,
                'product_id' => 1286,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            401 => 
            array (
                'id' => 8140,
                'product_id' => 1286,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            402 => 
            array (
                'id' => 8141,
                'product_id' => 1286,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            403 => 
            array (
                'id' => 8142,
                'product_id' => 1286,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            404 => 
            array (
                'id' => 8143,
                'product_id' => 1286,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            405 => 
            array (
                'id' => 8144,
                'product_id' => 1286,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            406 => 
            array (
                'id' => 8145,
                'product_id' => 1286,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            407 => 
            array (
                'id' => 8146,
                'product_id' => 1286,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            408 => 
            array (
                'id' => 8147,
                'product_id' => 1286,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            409 => 
            array (
                'id' => 8148,
                'product_id' => 1286,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            410 => 
            array (
                'id' => 8149,
                'product_id' => 1286,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            411 => 
            array (
                'id' => 8150,
                'product_id' => 1286,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '0',
            ),
            412 => 
            array (
                'id' => 8151,
                'product_id' => 1287,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221116/87b34dc86a2bcc9e7f0b1e332344611d.jpg',
            ),
            413 => 
            array (
                'id' => 8152,
                'product_id' => 1287,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            414 => 
            array (
                'id' => 8153,
                'product_id' => 1287,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            415 => 
            array (
                'id' => 8154,
                'product_id' => 1287,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            416 => 
            array (
                'id' => 8155,
                'product_id' => 1287,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            417 => 
            array (
                'id' => 8156,
                'product_id' => 1287,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            418 => 
            array (
                'id' => 8157,
                'product_id' => 1287,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            419 => 
            array (
                'id' => 8158,
                'product_id' => 1287,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            420 => 
            array (
                'id' => 8159,
                'product_id' => 1287,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            421 => 
            array (
                'id' => 8160,
                'product_id' => 1287,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            422 => 
            array (
                'id' => 8161,
                'product_id' => 1287,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            423 => 
            array (
                'id' => 8162,
                'product_id' => 1287,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            424 => 
            array (
                'id' => 8163,
                'product_id' => 1287,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '1',
            ),
            425 => 
            array (
                'id' => 8164,
                'product_id' => 1288,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221116/87b34dc86a2bcc9e7f0b1e332344611d.jpg',
            ),
            426 => 
            array (
                'id' => 8165,
                'product_id' => 1288,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            427 => 
            array (
                'id' => 8166,
                'product_id' => 1288,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            428 => 
            array (
                'id' => 8167,
                'product_id' => 1288,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            429 => 
            array (
                'id' => 8168,
                'product_id' => 1288,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            430 => 
            array (
                'id' => 8169,
                'product_id' => 1288,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            431 => 
            array (
                'id' => 8170,
                'product_id' => 1288,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            432 => 
            array (
                'id' => 8171,
                'product_id' => 1288,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            433 => 
            array (
                'id' => 8172,
                'product_id' => 1288,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            434 => 
            array (
                'id' => 8173,
                'product_id' => 1288,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            435 => 
            array (
                'id' => 8174,
                'product_id' => 1288,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            436 => 
            array (
                'id' => 8175,
                'product_id' => 1288,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            437 => 
            array (
                'id' => 8176,
                'product_id' => 1288,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '2',
            ),
            438 => 
            array (
                'id' => 8177,
                'product_id' => 1289,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221116/e383b5566488e7e1dc90a9353ca06f15.jpg',
            ),
            439 => 
            array (
                'id' => 8178,
                'product_id' => 1289,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            440 => 
            array (
                'id' => 8179,
                'product_id' => 1289,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            441 => 
            array (
                'id' => 8180,
                'product_id' => 1289,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            442 => 
            array (
                'id' => 8181,
                'product_id' => 1289,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            443 => 
            array (
                'id' => 8182,
                'product_id' => 1289,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            444 => 
            array (
                'id' => 8183,
                'product_id' => 1289,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            445 => 
            array (
                'id' => 8184,
                'product_id' => 1289,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            446 => 
            array (
                'id' => 8185,
                'product_id' => 1289,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            447 => 
            array (
                'id' => 8186,
                'product_id' => 1289,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            448 => 
            array (
                'id' => 8187,
                'product_id' => 1289,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            449 => 
            array (
                'id' => 8188,
                'product_id' => 1289,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            450 => 
            array (
                'id' => 8189,
                'product_id' => 1289,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '3',
            ),
            451 => 
            array (
                'id' => 8190,
                'product_id' => 1290,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221116/e383b5566488e7e1dc90a9353ca06f15.jpg',
            ),
            452 => 
            array (
                'id' => 8191,
                'product_id' => 1290,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            453 => 
            array (
                'id' => 8192,
                'product_id' => 1290,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            454 => 
            array (
                'id' => 8193,
                'product_id' => 1290,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            455 => 
            array (
                'id' => 8194,
                'product_id' => 1290,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            456 => 
            array (
                'id' => 8195,
                'product_id' => 1290,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            457 => 
            array (
                'id' => 8196,
                'product_id' => 1290,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            458 => 
            array (
                'id' => 8197,
                'product_id' => 1290,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            459 => 
            array (
                'id' => 8198,
                'product_id' => 1290,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            460 => 
            array (
                'id' => 8199,
                'product_id' => 1290,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            461 => 
            array (
                'id' => 8200,
                'product_id' => 1290,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            462 => 
            array (
                'id' => 8201,
                'product_id' => 1290,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            463 => 
            array (
                'id' => 8202,
                'product_id' => 1290,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '4',
            ),
            464 => 
            array (
                'id' => 8203,
                'product_id' => 1291,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221116/e383b5566488e7e1dc90a9353ca06f15.jpg',
            ),
            465 => 
            array (
                'id' => 8204,
                'product_id' => 1291,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            466 => 
            array (
                'id' => 8205,
                'product_id' => 1291,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            467 => 
            array (
                'id' => 8206,
                'product_id' => 1291,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            468 => 
            array (
                'id' => 8207,
                'product_id' => 1291,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            469 => 
            array (
                'id' => 8208,
                'product_id' => 1291,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            470 => 
            array (
                'id' => 8209,
                'product_id' => 1291,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            471 => 
            array (
                'id' => 8210,
                'product_id' => 1291,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            472 => 
            array (
                'id' => 8211,
                'product_id' => 1291,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            473 => 
            array (
                'id' => 8212,
                'product_id' => 1291,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            474 => 
            array (
                'id' => 8213,
                'product_id' => 1291,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            475 => 
            array (
                'id' => 8214,
                'product_id' => 1291,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            476 => 
            array (
                'id' => 8215,
                'product_id' => 1291,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '5',
            ),
            477 => 
            array (
                'id' => 8216,
                'product_id' => 1152,
                'type' => 'array',
                'key' => 'default_attributes',
                'value' => '{"color":"","size":""}',
            ),
            478 => 
            array (
                'id' => 8229,
                'product_id' => 1286,
                'type' => 'string',
                'key' => 'meta_scheduled_sale',
                'value' => '0',
            ),
            479 => 
            array (
                'id' => 8230,
                'product_id' => 1287,
                'type' => 'string',
                'key' => 'meta_scheduled_sale',
                'value' => '0',
            ),
            480 => 
            array (
                'id' => 8231,
                'product_id' => 1288,
                'type' => 'string',
                'key' => 'meta_scheduled_sale',
                'value' => '0',
            ),
            481 => 
            array (
                'id' => 8232,
                'product_id' => 1289,
                'type' => 'string',
                'key' => 'meta_scheduled_sale',
                'value' => '0',
            ),
            482 => 
            array (
                'id' => 8233,
                'product_id' => 1290,
                'type' => 'string',
                'key' => 'meta_scheduled_sale',
                'value' => '0',
            ),
            483 => 
            array (
                'id' => 8234,
                'product_id' => 1291,
                'type' => 'string',
                'key' => 'meta_scheduled_sale',
                'value' => '0',
            ),
            484 => 
            array (
                'id' => 8327,
                'product_id' => 1151,
                'type' => 'array',
                'key' => 'attributes',
                'value' => '{"color":{"name":"Color","position":"0","key":"color","value":["211"],"visibility":"1","variation":"0","attribute_id":"26"},"material":{"name":"Material","position":"1","key":"material","value":["Cotton"],"visibility":"1","variation":"0","attribute_id":""}}',
            ),
            485 => 
            array (
                'id' => 8433,
                'product_id' => 1150,
                'type' => 'array',
                'key' => 'attributes',
                'value' => '{"color":{"name":"Color","position":"0","key":"color","value":["193"],"visibility":"1","variation":"0","attribute_id":"26"},"material":{"name":"Material","position":"1","key":"material","value":["Cotton"],"visibility":"1","variation":"0","attribute_id":""},"size":{"name":"Size","position":"2","key":"size","value":["M","L"],"visibility":"1","variation":"1","attribute_id":""}}',
            ),
            486 => 
            array (
                'id' => 8434,
                'product_id' => 1292,
                'type' => 'null',
                'key' => 'attribute_size',
                'value' => 'M',
            ),
            487 => 
            array (
                'id' => 8435,
                'product_id' => 1293,
                'type' => 'null',
                'key' => 'attribute_size',
                'value' => 'L',
            ),
            488 => 
            array (
                'id' => 8436,
                'product_id' => 1292,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221116/b03197acfd099238ac63580fba9b70b7.jpg',
            ),
            489 => 
            array (
                'id' => 8437,
                'product_id' => 1292,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            490 => 
            array (
                'id' => 8438,
                'product_id' => 1292,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            491 => 
            array (
                'id' => 8439,
                'product_id' => 1292,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            492 => 
            array (
                'id' => 8440,
                'product_id' => 1292,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            493 => 
            array (
                'id' => 8441,
                'product_id' => 1292,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            494 => 
            array (
                'id' => 8442,
                'product_id' => 1292,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            495 => 
            array (
                'id' => 8443,
                'product_id' => 1292,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            496 => 
            array (
                'id' => 8444,
                'product_id' => 1292,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            497 => 
            array (
                'id' => 8445,
                'product_id' => 1292,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            498 => 
            array (
                'id' => 8446,
                'product_id' => 1292,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            499 => 
            array (
                'id' => 8447,
                'product_id' => 1292,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
        ));
        \DB::table('products_meta')->insert(array (
            0 => 
            array (
                'id' => 8448,
                'product_id' => 1292,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '0',
            ),
            1 => 
            array (
                'id' => 8449,
                'product_id' => 1293,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221116/56b34ba41ad2593211a5929d115c55bd.jpg',
            ),
            2 => 
            array (
                'id' => 8450,
                'product_id' => 1293,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            3 => 
            array (
                'id' => 8451,
                'product_id' => 1293,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            4 => 
            array (
                'id' => 8452,
                'product_id' => 1293,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            5 => 
            array (
                'id' => 8453,
                'product_id' => 1293,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            6 => 
            array (
                'id' => 8454,
                'product_id' => 1293,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            7 => 
            array (
                'id' => 8455,
                'product_id' => 1293,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            8 => 
            array (
                'id' => 8456,
                'product_id' => 1293,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            9 => 
            array (
                'id' => 8457,
                'product_id' => 1293,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            10 => 
            array (
                'id' => 8458,
                'product_id' => 1293,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            11 => 
            array (
                'id' => 8459,
                'product_id' => 1293,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            12 => 
            array (
                'id' => 8460,
                'product_id' => 1293,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            13 => 
            array (
                'id' => 8461,
                'product_id' => 1293,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '1',
            ),
            14 => 
            array (
                'id' => 8462,
                'product_id' => 1150,
                'type' => 'array',
                'key' => 'default_attributes',
                'value' => '{"size":""}',
            ),
            15 => 
            array (
                'id' => 8465,
                'product_id' => 1292,
                'type' => 'string',
                'key' => 'meta_scheduled_sale',
                'value' => '0',
            ),
            16 => 
            array (
                'id' => 8466,
                'product_id' => 1293,
                'type' => 'string',
                'key' => 'meta_scheduled_sale',
                'value' => '0',
            ),
            17 => 
            array (
                'id' => 8519,
                'product_id' => 1149,
                'type' => 'array',
                'key' => 'attributes',
                'value' => '{"color":{"name":"Color","position":"0","key":"color","value":["190","218"],"visibility":"1","variation":"1","attribute_id":"26"},"material":{"name":"Material","position":"1","key":"material","value":["Cotton"],"visibility":"1","variation":"0","attribute_id":""}}',
            ),
            18 => 
            array (
                'id' => 8520,
                'product_id' => 1294,
                'type' => 'null',
                'key' => 'attribute_color',
                'value' => '190',
            ),
            19 => 
            array (
                'id' => 8521,
                'product_id' => 1295,
                'type' => 'null',
                'key' => 'attribute_color',
                'value' => '218',
            ),
            20 => 
            array (
                'id' => 8522,
                'product_id' => 1294,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221116/563e1857ef81b9db6fbea967657b5777.jpg',
            ),
            21 => 
            array (
                'id' => 8523,
                'product_id' => 1294,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            22 => 
            array (
                'id' => 8524,
                'product_id' => 1294,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            23 => 
            array (
                'id' => 8525,
                'product_id' => 1294,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            24 => 
            array (
                'id' => 8526,
                'product_id' => 1294,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            25 => 
            array (
                'id' => 8527,
                'product_id' => 1294,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            26 => 
            array (
                'id' => 8528,
                'product_id' => 1294,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            27 => 
            array (
                'id' => 8529,
                'product_id' => 1294,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            28 => 
            array (
                'id' => 8530,
                'product_id' => 1294,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            29 => 
            array (
                'id' => 8531,
                'product_id' => 1294,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            30 => 
            array (
                'id' => 8532,
                'product_id' => 1294,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            31 => 
            array (
                'id' => 8533,
                'product_id' => 1294,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            32 => 
            array (
                'id' => 8534,
                'product_id' => 1294,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '0',
            ),
            33 => 
            array (
                'id' => 8535,
                'product_id' => 1295,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221116/8c8429f6579a8b6457e37ec1b4b6922d.jpg',
            ),
            34 => 
            array (
                'id' => 8536,
                'product_id' => 1295,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            35 => 
            array (
                'id' => 8537,
                'product_id' => 1295,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            36 => 
            array (
                'id' => 8538,
                'product_id' => 1295,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            37 => 
            array (
                'id' => 8539,
                'product_id' => 1295,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            38 => 
            array (
                'id' => 8540,
                'product_id' => 1295,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            39 => 
            array (
                'id' => 8541,
                'product_id' => 1295,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            40 => 
            array (
                'id' => 8542,
                'product_id' => 1295,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            41 => 
            array (
                'id' => 8543,
                'product_id' => 1295,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            42 => 
            array (
                'id' => 8544,
                'product_id' => 1295,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            43 => 
            array (
                'id' => 8545,
                'product_id' => 1295,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            44 => 
            array (
                'id' => 8546,
                'product_id' => 1295,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            45 => 
            array (
                'id' => 8547,
                'product_id' => 1295,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '1',
            ),
            46 => 
            array (
                'id' => 8548,
                'product_id' => 1149,
                'type' => 'array',
                'key' => 'default_attributes',
                'value' => '{"color":""}',
            ),
            47 => 
            array (
                'id' => 8604,
                'product_id' => 1148,
                'type' => 'array',
                'key' => 'attributes',
                'value' => '{"color":{"name":"Color","position":"0","key":"color","value":["24","194","188","193"],"visibility":"1","variation":"1","attribute_id":"26"},"material":{"name":"Material","position":"1","key":"material","value":["Cotton"],"visibility":"1","variation":"0","attribute_id":""}}',
            ),
            48 => 
            array (
                'id' => 8605,
                'product_id' => 1296,
                'type' => 'null',
                'key' => 'attribute_color',
                'value' => '24',
            ),
            49 => 
            array (
                'id' => 8606,
                'product_id' => 1297,
                'type' => 'null',
                'key' => 'attribute_color',
                'value' => '194',
            ),
            50 => 
            array (
                'id' => 8607,
                'product_id' => 1298,
                'type' => 'null',
                'key' => 'attribute_color',
                'value' => '188',
            ),
            51 => 
            array (
                'id' => 8608,
                'product_id' => 1299,
                'type' => 'null',
                'key' => 'attribute_color',
                'value' => '193',
            ),
            52 => 
            array (
                'id' => 8609,
                'product_id' => 1296,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221116/9bb2d571c26fe0a58b9659aa0c7b263a.jpg',
            ),
            53 => 
            array (
                'id' => 8610,
                'product_id' => 1296,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            54 => 
            array (
                'id' => 8611,
                'product_id' => 1296,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            55 => 
            array (
                'id' => 8612,
                'product_id' => 1296,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            56 => 
            array (
                'id' => 8613,
                'product_id' => 1296,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            57 => 
            array (
                'id' => 8614,
                'product_id' => 1296,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            58 => 
            array (
                'id' => 8615,
                'product_id' => 1296,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            59 => 
            array (
                'id' => 8616,
                'product_id' => 1296,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            60 => 
            array (
                'id' => 8617,
                'product_id' => 1296,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            61 => 
            array (
                'id' => 8618,
                'product_id' => 1296,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            62 => 
            array (
                'id' => 8619,
                'product_id' => 1296,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            63 => 
            array (
                'id' => 8620,
                'product_id' => 1296,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            64 => 
            array (
                'id' => 8621,
                'product_id' => 1296,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '0',
            ),
            65 => 
            array (
                'id' => 8622,
                'product_id' => 1297,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221116/0afb2cf13cc211bed62dc96ebec80148.jpg',
            ),
            66 => 
            array (
                'id' => 8623,
                'product_id' => 1297,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            67 => 
            array (
                'id' => 8624,
                'product_id' => 1297,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            68 => 
            array (
                'id' => 8625,
                'product_id' => 1297,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            69 => 
            array (
                'id' => 8626,
                'product_id' => 1297,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            70 => 
            array (
                'id' => 8627,
                'product_id' => 1297,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            71 => 
            array (
                'id' => 8628,
                'product_id' => 1297,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            72 => 
            array (
                'id' => 8629,
                'product_id' => 1297,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            73 => 
            array (
                'id' => 8630,
                'product_id' => 1297,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            74 => 
            array (
                'id' => 8631,
                'product_id' => 1297,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            75 => 
            array (
                'id' => 8632,
                'product_id' => 1297,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            76 => 
            array (
                'id' => 8633,
                'product_id' => 1297,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            77 => 
            array (
                'id' => 8634,
                'product_id' => 1297,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '1',
            ),
            78 => 
            array (
                'id' => 8635,
                'product_id' => 1298,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221116/69b2374fc9f15df44cd820af5da34eb3.jpg',
            ),
            79 => 
            array (
                'id' => 8636,
                'product_id' => 1298,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            80 => 
            array (
                'id' => 8637,
                'product_id' => 1298,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            81 => 
            array (
                'id' => 8638,
                'product_id' => 1298,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            82 => 
            array (
                'id' => 8639,
                'product_id' => 1298,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            83 => 
            array (
                'id' => 8640,
                'product_id' => 1298,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            84 => 
            array (
                'id' => 8641,
                'product_id' => 1298,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            85 => 
            array (
                'id' => 8642,
                'product_id' => 1298,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            86 => 
            array (
                'id' => 8643,
                'product_id' => 1298,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            87 => 
            array (
                'id' => 8644,
                'product_id' => 1298,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            88 => 
            array (
                'id' => 8645,
                'product_id' => 1298,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            89 => 
            array (
                'id' => 8646,
                'product_id' => 1298,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            90 => 
            array (
                'id' => 8647,
                'product_id' => 1298,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '2',
            ),
            91 => 
            array (
                'id' => 8648,
                'product_id' => 1299,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221116/4d123f6c3ad266ef10c436d577a9c273.jpg',
            ),
            92 => 
            array (
                'id' => 8649,
                'product_id' => 1299,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            93 => 
            array (
                'id' => 8650,
                'product_id' => 1299,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            94 => 
            array (
                'id' => 8651,
                'product_id' => 1299,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            95 => 
            array (
                'id' => 8652,
                'product_id' => 1299,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            96 => 
            array (
                'id' => 8653,
                'product_id' => 1299,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            97 => 
            array (
                'id' => 8654,
                'product_id' => 1299,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            98 => 
            array (
                'id' => 8655,
                'product_id' => 1299,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            99 => 
            array (
                'id' => 8656,
                'product_id' => 1299,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            100 => 
            array (
                'id' => 8657,
                'product_id' => 1299,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            101 => 
            array (
                'id' => 8658,
                'product_id' => 1299,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            102 => 
            array (
                'id' => 8659,
                'product_id' => 1299,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            103 => 
            array (
                'id' => 8660,
                'product_id' => 1299,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '3',
            ),
            104 => 
            array (
                'id' => 8661,
                'product_id' => 1148,
                'type' => 'array',
                'key' => 'default_attributes',
                'value' => '{"color":""}',
            ),
            105 => 
            array (
                'id' => 8667,
                'product_id' => 1147,
                'type' => 'array',
                'key' => 'attributes',
                'value' => '{"material":{"name":"Material","position":"0","key":"material","value":["Cotton"],"visibility":"1","variation":"0","attribute_id":""},"color":{"name":"Color","position":"1","key":"color","value":["211"],"visibility":"1","variation":"0","attribute_id":"26"}}',
            ),
            106 => 
            array (
                'id' => 8721,
                'product_id' => 1146,
                'type' => 'array',
                'key' => 'attributes',
                'value' => '{"color":{"name":"Color","position":"0","key":"color","value":["24","25"],"visibility":"1","variation":"1","attribute_id":"26"},"material":{"name":"Material","position":"1","key":"material","value":["Cotton"],"visibility":"1","variation":"0","attribute_id":""}}',
            ),
            107 => 
            array (
                'id' => 8722,
                'product_id' => 1300,
                'type' => 'null',
                'key' => 'attribute_color',
                'value' => '24',
            ),
            108 => 
            array (
                'id' => 8723,
                'product_id' => 1301,
                'type' => 'null',
                'key' => 'attribute_color',
                'value' => '25',
            ),
            109 => 
            array (
                'id' => 8750,
                'product_id' => 1300,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221116/62c02178575b62bc052e3e04faed7b7a.png',
            ),
            110 => 
            array (
                'id' => 8751,
                'product_id' => 1300,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            111 => 
            array (
                'id' => 8752,
                'product_id' => 1300,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            112 => 
            array (
                'id' => 8753,
                'product_id' => 1300,
                'type' => 'string',
                'key' => 'meta_scheduled_sale',
                'value' => '0',
            ),
            113 => 
            array (
                'id' => 8754,
                'product_id' => 1300,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            114 => 
            array (
                'id' => 8755,
                'product_id' => 1300,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            115 => 
            array (
                'id' => 8756,
                'product_id' => 1300,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            116 => 
            array (
                'id' => 8757,
                'product_id' => 1300,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            117 => 
            array (
                'id' => 8758,
                'product_id' => 1300,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            118 => 
            array (
                'id' => 8759,
                'product_id' => 1300,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            119 => 
            array (
                'id' => 8760,
                'product_id' => 1300,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            120 => 
            array (
                'id' => 8761,
                'product_id' => 1300,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            121 => 
            array (
                'id' => 8762,
                'product_id' => 1300,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            122 => 
            array (
                'id' => 8763,
                'product_id' => 1300,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '0',
            ),
            123 => 
            array (
                'id' => 8764,
                'product_id' => 1301,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221116/41e08cd219ae9a5315e7ee1e3c09eb66.png',
            ),
            124 => 
            array (
                'id' => 8765,
                'product_id' => 1301,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            125 => 
            array (
                'id' => 8766,
                'product_id' => 1301,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            126 => 
            array (
                'id' => 8767,
                'product_id' => 1301,
                'type' => 'string',
                'key' => 'meta_scheduled_sale',
                'value' => '0',
            ),
            127 => 
            array (
                'id' => 8768,
                'product_id' => 1301,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            128 => 
            array (
                'id' => 8769,
                'product_id' => 1301,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            129 => 
            array (
                'id' => 8770,
                'product_id' => 1301,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            130 => 
            array (
                'id' => 8771,
                'product_id' => 1301,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            131 => 
            array (
                'id' => 8772,
                'product_id' => 1301,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            132 => 
            array (
                'id' => 8773,
                'product_id' => 1301,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            133 => 
            array (
                'id' => 8774,
                'product_id' => 1301,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            134 => 
            array (
                'id' => 8775,
                'product_id' => 1301,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            135 => 
            array (
                'id' => 8776,
                'product_id' => 1301,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            136 => 
            array (
                'id' => 8777,
                'product_id' => 1301,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '1',
            ),
            137 => 
            array (
                'id' => 8778,
                'product_id' => 1146,
                'type' => 'array',
                'key' => 'default_attributes',
                'value' => '{"color":""}',
            ),
            138 => 
            array (
                'id' => 8808,
                'product_id' => 1145,
                'type' => 'array',
                'key' => 'attributes',
                'value' => '{"color":{"name":"Color","position":"0","key":"color","value":["188","25"],"visibility":"1","variation":"1","attribute_id":"26"},"material":{"name":"Material","position":"1","key":"material","value":["Cotton"],"visibility":"1","variation":"0","attribute_id":""}}',
            ),
            139 => 
            array (
                'id' => 8809,
                'product_id' => 1302,
                'type' => 'null',
                'key' => 'attribute_color',
                'value' => '188',
            ),
            140 => 
            array (
                'id' => 8810,
                'product_id' => 1303,
                'type' => 'null',
                'key' => 'attribute_color',
                'value' => '25',
            ),
            141 => 
            array (
                'id' => 8811,
                'product_id' => 1302,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221116/27fabac9a6e3c6ab8f81c414acc5a1b5.jpg',
            ),
            142 => 
            array (
                'id' => 8812,
                'product_id' => 1302,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            143 => 
            array (
                'id' => 8813,
                'product_id' => 1302,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            144 => 
            array (
                'id' => 8814,
                'product_id' => 1302,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            145 => 
            array (
                'id' => 8815,
                'product_id' => 1302,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            146 => 
            array (
                'id' => 8816,
                'product_id' => 1302,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            147 => 
            array (
                'id' => 8817,
                'product_id' => 1302,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            148 => 
            array (
                'id' => 8818,
                'product_id' => 1302,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            149 => 
            array (
                'id' => 8819,
                'product_id' => 1302,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            150 => 
            array (
                'id' => 8820,
                'product_id' => 1302,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            151 => 
            array (
                'id' => 8821,
                'product_id' => 1302,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            152 => 
            array (
                'id' => 8822,
                'product_id' => 1302,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            153 => 
            array (
                'id' => 8823,
                'product_id' => 1302,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '0',
            ),
            154 => 
            array (
                'id' => 8824,
                'product_id' => 1303,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221116/2fbbf87e374ab44d3d43e4d9143b9b87.jpg',
            ),
            155 => 
            array (
                'id' => 8825,
                'product_id' => 1303,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            156 => 
            array (
                'id' => 8826,
                'product_id' => 1303,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            157 => 
            array (
                'id' => 8827,
                'product_id' => 1303,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            158 => 
            array (
                'id' => 8828,
                'product_id' => 1303,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            159 => 
            array (
                'id' => 8829,
                'product_id' => 1303,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            160 => 
            array (
                'id' => 8830,
                'product_id' => 1303,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            161 => 
            array (
                'id' => 8831,
                'product_id' => 1303,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            162 => 
            array (
                'id' => 8832,
                'product_id' => 1303,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            163 => 
            array (
                'id' => 8833,
                'product_id' => 1303,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            164 => 
            array (
                'id' => 8834,
                'product_id' => 1303,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            165 => 
            array (
                'id' => 8835,
                'product_id' => 1303,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            166 => 
            array (
                'id' => 8836,
                'product_id' => 1303,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '1',
            ),
            167 => 
            array (
                'id' => 8837,
                'product_id' => 1145,
                'type' => 'array',
                'key' => 'default_attributes',
                'value' => '{"color":""}',
            ),
            168 => 
            array (
                'id' => 8919,
                'product_id' => 1144,
                'type' => 'array',
                'key' => 'attributes',
                'value' => '{"material":{"name":"Material","position":"0","key":"material","value":[],"visibility":"1","variation":"0","attribute_id":""},"color":{"name":"Color","position":"1","key":"color","value":["193","211","25","26","27"],"visibility":"1","variation":"1","attribute_id":"26"}}',
            ),
            169 => 
            array (
                'id' => 8920,
                'product_id' => 1304,
                'type' => 'null',
                'key' => 'attribute_color',
                'value' => '193',
            ),
            170 => 
            array (
                'id' => 8921,
                'product_id' => 1305,
                'type' => 'null',
                'key' => 'attribute_color',
                'value' => '211',
            ),
            171 => 
            array (
                'id' => 8922,
                'product_id' => 1306,
                'type' => 'null',
                'key' => 'attribute_color',
                'value' => '25',
            ),
            172 => 
            array (
                'id' => 8923,
                'product_id' => 1307,
                'type' => 'null',
                'key' => 'attribute_color',
                'value' => '26',
            ),
            173 => 
            array (
                'id' => 8924,
                'product_id' => 1308,
                'type' => 'null',
                'key' => 'attribute_color',
                'value' => '27',
            ),
            174 => 
            array (
                'id' => 8925,
                'product_id' => 1304,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221116/970d6e8b2e0d034418d7197168221218.PNG',
            ),
            175 => 
            array (
                'id' => 8926,
                'product_id' => 1304,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            176 => 
            array (
                'id' => 8927,
                'product_id' => 1304,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            177 => 
            array (
                'id' => 8928,
                'product_id' => 1304,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            178 => 
            array (
                'id' => 8929,
                'product_id' => 1304,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            179 => 
            array (
                'id' => 8930,
                'product_id' => 1304,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            180 => 
            array (
                'id' => 8931,
                'product_id' => 1304,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            181 => 
            array (
                'id' => 8932,
                'product_id' => 1304,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            182 => 
            array (
                'id' => 8933,
                'product_id' => 1304,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            183 => 
            array (
                'id' => 8934,
                'product_id' => 1304,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            184 => 
            array (
                'id' => 8935,
                'product_id' => 1304,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            185 => 
            array (
                'id' => 8936,
                'product_id' => 1304,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            186 => 
            array (
                'id' => 8937,
                'product_id' => 1304,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '0',
            ),
            187 => 
            array (
                'id' => 8938,
                'product_id' => 1305,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221116/0b02718dd8afafb4da8edef07ac833db.PNG',
            ),
            188 => 
            array (
                'id' => 8939,
                'product_id' => 1305,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            189 => 
            array (
                'id' => 8940,
                'product_id' => 1305,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            190 => 
            array (
                'id' => 8941,
                'product_id' => 1305,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            191 => 
            array (
                'id' => 8942,
                'product_id' => 1305,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            192 => 
            array (
                'id' => 8943,
                'product_id' => 1305,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            193 => 
            array (
                'id' => 8944,
                'product_id' => 1305,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            194 => 
            array (
                'id' => 8945,
                'product_id' => 1305,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            195 => 
            array (
                'id' => 8946,
                'product_id' => 1305,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            196 => 
            array (
                'id' => 8947,
                'product_id' => 1305,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            197 => 
            array (
                'id' => 8948,
                'product_id' => 1305,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            198 => 
            array (
                'id' => 8949,
                'product_id' => 1305,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            199 => 
            array (
                'id' => 8950,
                'product_id' => 1305,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '1',
            ),
            200 => 
            array (
                'id' => 8951,
                'product_id' => 1306,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221116/4a1b06dd9b139659fb2ed2d8b08365be.PNG',
            ),
            201 => 
            array (
                'id' => 8952,
                'product_id' => 1306,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            202 => 
            array (
                'id' => 8953,
                'product_id' => 1306,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            203 => 
            array (
                'id' => 8954,
                'product_id' => 1306,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            204 => 
            array (
                'id' => 8955,
                'product_id' => 1306,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            205 => 
            array (
                'id' => 8956,
                'product_id' => 1306,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            206 => 
            array (
                'id' => 8957,
                'product_id' => 1306,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            207 => 
            array (
                'id' => 8958,
                'product_id' => 1306,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            208 => 
            array (
                'id' => 8959,
                'product_id' => 1306,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            209 => 
            array (
                'id' => 8960,
                'product_id' => 1306,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            210 => 
            array (
                'id' => 8961,
                'product_id' => 1306,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            211 => 
            array (
                'id' => 8962,
                'product_id' => 1306,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            212 => 
            array (
                'id' => 8963,
                'product_id' => 1306,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '2',
            ),
            213 => 
            array (
                'id' => 8964,
                'product_id' => 1307,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221116/15d29e911d327529118a2f354ddb557d.PNG',
            ),
            214 => 
            array (
                'id' => 8965,
                'product_id' => 1307,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            215 => 
            array (
                'id' => 8966,
                'product_id' => 1307,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            216 => 
            array (
                'id' => 8967,
                'product_id' => 1307,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            217 => 
            array (
                'id' => 8968,
                'product_id' => 1307,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            218 => 
            array (
                'id' => 8969,
                'product_id' => 1307,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            219 => 
            array (
                'id' => 8970,
                'product_id' => 1307,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            220 => 
            array (
                'id' => 8971,
                'product_id' => 1307,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            221 => 
            array (
                'id' => 8972,
                'product_id' => 1307,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            222 => 
            array (
                'id' => 8973,
                'product_id' => 1307,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            223 => 
            array (
                'id' => 8974,
                'product_id' => 1307,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            224 => 
            array (
                'id' => 8975,
                'product_id' => 1307,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            225 => 
            array (
                'id' => 8976,
                'product_id' => 1307,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '3',
            ),
            226 => 
            array (
                'id' => 8977,
                'product_id' => 1308,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221116/1f6a7f963c45fdf2697c4395d2d987ee.png',
            ),
            227 => 
            array (
                'id' => 8978,
                'product_id' => 1308,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            228 => 
            array (
                'id' => 8979,
                'product_id' => 1308,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            229 => 
            array (
                'id' => 8980,
                'product_id' => 1308,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            230 => 
            array (
                'id' => 8981,
                'product_id' => 1308,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            231 => 
            array (
                'id' => 8982,
                'product_id' => 1308,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            232 => 
            array (
                'id' => 8983,
                'product_id' => 1308,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            233 => 
            array (
                'id' => 8984,
                'product_id' => 1308,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            234 => 
            array (
                'id' => 8985,
                'product_id' => 1308,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            235 => 
            array (
                'id' => 8986,
                'product_id' => 1308,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            236 => 
            array (
                'id' => 8987,
                'product_id' => 1308,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            237 => 
            array (
                'id' => 8988,
                'product_id' => 1308,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            238 => 
            array (
                'id' => 8989,
                'product_id' => 1308,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '4',
            ),
            239 => 
            array (
                'id' => 8990,
                'product_id' => 1144,
                'type' => 'array',
                'key' => 'default_attributes',
                'value' => '{"color":""}',
            ),
            240 => 
            array (
                'id' => 8996,
                'product_id' => 1304,
                'type' => 'string',
                'key' => 'meta_scheduled_sale',
                'value' => '0',
            ),
            241 => 
            array (
                'id' => 8997,
                'product_id' => 1305,
                'type' => 'string',
                'key' => 'meta_scheduled_sale',
                'value' => '0',
            ),
            242 => 
            array (
                'id' => 8998,
                'product_id' => 1306,
                'type' => 'string',
                'key' => 'meta_scheduled_sale',
                'value' => '0',
            ),
            243 => 
            array (
                'id' => 8999,
                'product_id' => 1307,
                'type' => 'string',
                'key' => 'meta_scheduled_sale',
                'value' => '0',
            ),
            244 => 
            array (
                'id' => 9000,
                'product_id' => 1308,
                'type' => 'string',
                'key' => 'meta_scheduled_sale',
                'value' => '0',
            ),
            245 => 
            array (
                'id' => 9267,
                'product_id' => 1143,
                'type' => 'array',
                'key' => 'attributes',
                'value' => '{"color":{"name":"Color","position":"0","key":"color","value":["192","211","222","223","224","225"],"visibility":"1","variation":"1","attribute_id":"26"},"material":{"name":"Material","position":"1","key":"material","value":["Cotton"],"visibility":"1","variation":"0","attribute_id":""},"size":{"name":"Size","position":"2","key":"size","value":["M","L"],"visibility":"1","variation":"1","attribute_id":""}}',
            ),
            246 => 
            array (
                'id' => 9268,
                'product_id' => 1309,
                'type' => 'null',
                'key' => 'attribute_color',
                'value' => '192',
            ),
            247 => 
            array (
                'id' => 9269,
                'product_id' => 1309,
                'type' => 'null',
                'key' => 'attribute_size',
                'value' => 'M',
            ),
            248 => 
            array (
                'id' => 9270,
                'product_id' => 1310,
                'type' => 'null',
                'key' => 'attribute_color',
                'value' => '192',
            ),
            249 => 
            array (
                'id' => 9271,
                'product_id' => 1310,
                'type' => 'null',
                'key' => 'attribute_size',
                'value' => 'L',
            ),
            250 => 
            array (
                'id' => 9272,
                'product_id' => 1311,
                'type' => 'null',
                'key' => 'attribute_color',
                'value' => '211',
            ),
            251 => 
            array (
                'id' => 9273,
                'product_id' => 1311,
                'type' => 'null',
                'key' => 'attribute_size',
                'value' => 'M',
            ),
            252 => 
            array (
                'id' => 9274,
                'product_id' => 1312,
                'type' => 'null',
                'key' => 'attribute_color',
                'value' => '211',
            ),
            253 => 
            array (
                'id' => 9275,
                'product_id' => 1312,
                'type' => 'null',
                'key' => 'attribute_size',
                'value' => 'L',
            ),
            254 => 
            array (
                'id' => 9276,
                'product_id' => 1313,
                'type' => 'null',
                'key' => 'attribute_color',
                'value' => '222',
            ),
            255 => 
            array (
                'id' => 9277,
                'product_id' => 1313,
                'type' => 'null',
                'key' => 'attribute_size',
                'value' => 'M',
            ),
            256 => 
            array (
                'id' => 9278,
                'product_id' => 1314,
                'type' => 'null',
                'key' => 'attribute_color',
                'value' => '222',
            ),
            257 => 
            array (
                'id' => 9279,
                'product_id' => 1314,
                'type' => 'null',
                'key' => 'attribute_size',
                'value' => 'L',
            ),
            258 => 
            array (
                'id' => 9280,
                'product_id' => 1315,
                'type' => 'null',
                'key' => 'attribute_color',
                'value' => '223',
            ),
            259 => 
            array (
                'id' => 9281,
                'product_id' => 1315,
                'type' => 'null',
                'key' => 'attribute_size',
                'value' => 'M',
            ),
            260 => 
            array (
                'id' => 9282,
                'product_id' => 1316,
                'type' => 'null',
                'key' => 'attribute_color',
                'value' => '223',
            ),
            261 => 
            array (
                'id' => 9283,
                'product_id' => 1316,
                'type' => 'null',
                'key' => 'attribute_size',
                'value' => 'L',
            ),
            262 => 
            array (
                'id' => 9284,
                'product_id' => 1317,
                'type' => 'null',
                'key' => 'attribute_color',
                'value' => '224',
            ),
            263 => 
            array (
                'id' => 9285,
                'product_id' => 1317,
                'type' => 'null',
                'key' => 'attribute_size',
                'value' => 'M',
            ),
            264 => 
            array (
                'id' => 9286,
                'product_id' => 1318,
                'type' => 'null',
                'key' => 'attribute_color',
                'value' => '224',
            ),
            265 => 
            array (
                'id' => 9287,
                'product_id' => 1318,
                'type' => 'null',
                'key' => 'attribute_size',
                'value' => 'L',
            ),
            266 => 
            array (
                'id' => 9288,
                'product_id' => 1319,
                'type' => 'null',
                'key' => 'attribute_color',
                'value' => '225',
            ),
            267 => 
            array (
                'id' => 9289,
                'product_id' => 1319,
                'type' => 'null',
                'key' => 'attribute_size',
                'value' => 'M',
            ),
            268 => 
            array (
                'id' => 9290,
                'product_id' => 1320,
                'type' => 'null',
                'key' => 'attribute_color',
                'value' => '225',
            ),
            269 => 
            array (
                'id' => 9291,
                'product_id' => 1320,
                'type' => 'null',
                'key' => 'attribute_size',
                'value' => 'L',
            ),
            270 => 
            array (
                'id' => 9292,
                'product_id' => 1309,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            271 => 
            array (
                'id' => 9293,
                'product_id' => 1309,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            272 => 
            array (
                'id' => 9294,
                'product_id' => 1309,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            273 => 
            array (
                'id' => 9295,
                'product_id' => 1309,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            274 => 
            array (
                'id' => 9296,
                'product_id' => 1309,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            275 => 
            array (
                'id' => 9297,
                'product_id' => 1309,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            276 => 
            array (
                'id' => 9298,
                'product_id' => 1309,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            277 => 
            array (
                'id' => 9299,
                'product_id' => 1309,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            278 => 
            array (
                'id' => 9300,
                'product_id' => 1309,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            279 => 
            array (
                'id' => 9301,
                'product_id' => 1309,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            280 => 
            array (
                'id' => 9302,
                'product_id' => 1309,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            281 => 
            array (
                'id' => 9303,
                'product_id' => 1309,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221116/39491453c1e23216ec2a0737c7f52bb9.jpg',
            ),
            282 => 
            array (
                'id' => 9304,
                'product_id' => 1309,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '0',
            ),
            283 => 
            array (
                'id' => 9305,
                'product_id' => 1310,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            284 => 
            array (
                'id' => 9306,
                'product_id' => 1310,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            285 => 
            array (
                'id' => 9307,
                'product_id' => 1310,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            286 => 
            array (
                'id' => 9308,
                'product_id' => 1310,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            287 => 
            array (
                'id' => 9309,
                'product_id' => 1310,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            288 => 
            array (
                'id' => 9310,
                'product_id' => 1310,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            289 => 
            array (
                'id' => 9311,
                'product_id' => 1310,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            290 => 
            array (
                'id' => 9312,
                'product_id' => 1310,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            291 => 
            array (
                'id' => 9313,
                'product_id' => 1310,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            292 => 
            array (
                'id' => 9314,
                'product_id' => 1310,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            293 => 
            array (
                'id' => 9315,
                'product_id' => 1310,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            294 => 
            array (
                'id' => 9316,
                'product_id' => 1310,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221116/39491453c1e23216ec2a0737c7f52bb9.jpg',
            ),
            295 => 
            array (
                'id' => 9317,
                'product_id' => 1310,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '1',
            ),
            296 => 
            array (
                'id' => 9318,
                'product_id' => 1311,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            297 => 
            array (
                'id' => 9319,
                'product_id' => 1311,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            298 => 
            array (
                'id' => 9320,
                'product_id' => 1311,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            299 => 
            array (
                'id' => 9321,
                'product_id' => 1311,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            300 => 
            array (
                'id' => 9322,
                'product_id' => 1311,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            301 => 
            array (
                'id' => 9323,
                'product_id' => 1311,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            302 => 
            array (
                'id' => 9324,
                'product_id' => 1311,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            303 => 
            array (
                'id' => 9325,
                'product_id' => 1311,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            304 => 
            array (
                'id' => 9326,
                'product_id' => 1311,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            305 => 
            array (
                'id' => 9327,
                'product_id' => 1311,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            306 => 
            array (
                'id' => 9328,
                'product_id' => 1311,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            307 => 
            array (
                'id' => 9329,
                'product_id' => 1311,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221116/2c21d3637144e137fb364ecb9bedaeab.jpg',
            ),
            308 => 
            array (
                'id' => 9330,
                'product_id' => 1311,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '2',
            ),
            309 => 
            array (
                'id' => 9331,
                'product_id' => 1312,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            310 => 
            array (
                'id' => 9332,
                'product_id' => 1312,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            311 => 
            array (
                'id' => 9333,
                'product_id' => 1312,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            312 => 
            array (
                'id' => 9334,
                'product_id' => 1312,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            313 => 
            array (
                'id' => 9335,
                'product_id' => 1312,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            314 => 
            array (
                'id' => 9336,
                'product_id' => 1312,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            315 => 
            array (
                'id' => 9337,
                'product_id' => 1312,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            316 => 
            array (
                'id' => 9338,
                'product_id' => 1312,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            317 => 
            array (
                'id' => 9339,
                'product_id' => 1312,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            318 => 
            array (
                'id' => 9340,
                'product_id' => 1312,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            319 => 
            array (
                'id' => 9341,
                'product_id' => 1312,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            320 => 
            array (
                'id' => 9342,
                'product_id' => 1312,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221116/2c21d3637144e137fb364ecb9bedaeab.jpg',
            ),
            321 => 
            array (
                'id' => 9343,
                'product_id' => 1312,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '3',
            ),
            322 => 
            array (
                'id' => 9344,
                'product_id' => 1313,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            323 => 
            array (
                'id' => 9345,
                'product_id' => 1313,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            324 => 
            array (
                'id' => 9346,
                'product_id' => 1313,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            325 => 
            array (
                'id' => 9347,
                'product_id' => 1313,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            326 => 
            array (
                'id' => 9348,
                'product_id' => 1313,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            327 => 
            array (
                'id' => 9349,
                'product_id' => 1313,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            328 => 
            array (
                'id' => 9350,
                'product_id' => 1313,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            329 => 
            array (
                'id' => 9351,
                'product_id' => 1313,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            330 => 
            array (
                'id' => 9352,
                'product_id' => 1313,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            331 => 
            array (
                'id' => 9353,
                'product_id' => 1313,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            332 => 
            array (
                'id' => 9354,
                'product_id' => 1313,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            333 => 
            array (
                'id' => 9355,
                'product_id' => 1313,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221116/333e70339c86361d61ea7dc2d5497d09.png',
            ),
            334 => 
            array (
                'id' => 9356,
                'product_id' => 1313,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '4',
            ),
            335 => 
            array (
                'id' => 9357,
                'product_id' => 1314,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            336 => 
            array (
                'id' => 9358,
                'product_id' => 1314,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            337 => 
            array (
                'id' => 9359,
                'product_id' => 1314,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            338 => 
            array (
                'id' => 9360,
                'product_id' => 1314,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            339 => 
            array (
                'id' => 9361,
                'product_id' => 1314,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            340 => 
            array (
                'id' => 9362,
                'product_id' => 1314,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            341 => 
            array (
                'id' => 9363,
                'product_id' => 1314,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            342 => 
            array (
                'id' => 9364,
                'product_id' => 1314,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            343 => 
            array (
                'id' => 9365,
                'product_id' => 1314,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            344 => 
            array (
                'id' => 9366,
                'product_id' => 1314,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            345 => 
            array (
                'id' => 9367,
                'product_id' => 1314,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            346 => 
            array (
                'id' => 9368,
                'product_id' => 1314,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221116/333e70339c86361d61ea7dc2d5497d09.png',
            ),
            347 => 
            array (
                'id' => 9369,
                'product_id' => 1314,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '5',
            ),
            348 => 
            array (
                'id' => 9370,
                'product_id' => 1315,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            349 => 
            array (
                'id' => 9371,
                'product_id' => 1315,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            350 => 
            array (
                'id' => 9372,
                'product_id' => 1315,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            351 => 
            array (
                'id' => 9373,
                'product_id' => 1315,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            352 => 
            array (
                'id' => 9374,
                'product_id' => 1315,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            353 => 
            array (
                'id' => 9375,
                'product_id' => 1315,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            354 => 
            array (
                'id' => 9376,
                'product_id' => 1315,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            355 => 
            array (
                'id' => 9377,
                'product_id' => 1315,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            356 => 
            array (
                'id' => 9378,
                'product_id' => 1315,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            357 => 
            array (
                'id' => 9379,
                'product_id' => 1315,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            358 => 
            array (
                'id' => 9380,
                'product_id' => 1315,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            359 => 
            array (
                'id' => 9381,
                'product_id' => 1315,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221116/862c541768fde4c00286165736e7842e.jpg',
            ),
            360 => 
            array (
                'id' => 9382,
                'product_id' => 1315,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '6',
            ),
            361 => 
            array (
                'id' => 9383,
                'product_id' => 1316,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            362 => 
            array (
                'id' => 9384,
                'product_id' => 1316,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            363 => 
            array (
                'id' => 9385,
                'product_id' => 1316,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            364 => 
            array (
                'id' => 9386,
                'product_id' => 1316,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            365 => 
            array (
                'id' => 9387,
                'product_id' => 1316,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            366 => 
            array (
                'id' => 9388,
                'product_id' => 1316,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            367 => 
            array (
                'id' => 9389,
                'product_id' => 1316,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            368 => 
            array (
                'id' => 9390,
                'product_id' => 1316,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            369 => 
            array (
                'id' => 9391,
                'product_id' => 1316,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            370 => 
            array (
                'id' => 9392,
                'product_id' => 1316,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            371 => 
            array (
                'id' => 9393,
                'product_id' => 1316,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            372 => 
            array (
                'id' => 9394,
                'product_id' => 1316,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221116/862c541768fde4c00286165736e7842e.jpg',
            ),
            373 => 
            array (
                'id' => 9395,
                'product_id' => 1316,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '7',
            ),
            374 => 
            array (
                'id' => 9396,
                'product_id' => 1317,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            375 => 
            array (
                'id' => 9397,
                'product_id' => 1317,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            376 => 
            array (
                'id' => 9398,
                'product_id' => 1317,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            377 => 
            array (
                'id' => 9399,
                'product_id' => 1317,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            378 => 
            array (
                'id' => 9400,
                'product_id' => 1317,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            379 => 
            array (
                'id' => 9401,
                'product_id' => 1317,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            380 => 
            array (
                'id' => 9402,
                'product_id' => 1317,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            381 => 
            array (
                'id' => 9403,
                'product_id' => 1317,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            382 => 
            array (
                'id' => 9404,
                'product_id' => 1317,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            383 => 
            array (
                'id' => 9405,
                'product_id' => 1317,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            384 => 
            array (
                'id' => 9406,
                'product_id' => 1317,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            385 => 
            array (
                'id' => 9407,
                'product_id' => 1317,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221116/d88525f61f2a10b68b30cc13b24b18c1.jpg',
            ),
            386 => 
            array (
                'id' => 9408,
                'product_id' => 1317,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '8',
            ),
            387 => 
            array (
                'id' => 9409,
                'product_id' => 1318,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            388 => 
            array (
                'id' => 9410,
                'product_id' => 1318,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            389 => 
            array (
                'id' => 9411,
                'product_id' => 1318,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            390 => 
            array (
                'id' => 9412,
                'product_id' => 1318,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            391 => 
            array (
                'id' => 9413,
                'product_id' => 1318,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            392 => 
            array (
                'id' => 9414,
                'product_id' => 1318,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            393 => 
            array (
                'id' => 9415,
                'product_id' => 1318,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            394 => 
            array (
                'id' => 9416,
                'product_id' => 1318,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            395 => 
            array (
                'id' => 9417,
                'product_id' => 1318,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            396 => 
            array (
                'id' => 9418,
                'product_id' => 1318,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            397 => 
            array (
                'id' => 9419,
                'product_id' => 1318,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            398 => 
            array (
                'id' => 9420,
                'product_id' => 1318,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221116/d88525f61f2a10b68b30cc13b24b18c1.jpg',
            ),
            399 => 
            array (
                'id' => 9421,
                'product_id' => 1318,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '9',
            ),
            400 => 
            array (
                'id' => 9422,
                'product_id' => 1319,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            401 => 
            array (
                'id' => 9423,
                'product_id' => 1319,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            402 => 
            array (
                'id' => 9424,
                'product_id' => 1319,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            403 => 
            array (
                'id' => 9425,
                'product_id' => 1319,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            404 => 
            array (
                'id' => 9426,
                'product_id' => 1319,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            405 => 
            array (
                'id' => 9427,
                'product_id' => 1319,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            406 => 
            array (
                'id' => 9428,
                'product_id' => 1319,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            407 => 
            array (
                'id' => 9429,
                'product_id' => 1319,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            408 => 
            array (
                'id' => 9430,
                'product_id' => 1319,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            409 => 
            array (
                'id' => 9431,
                'product_id' => 1319,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            410 => 
            array (
                'id' => 9432,
                'product_id' => 1319,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            411 => 
            array (
                'id' => 9433,
                'product_id' => 1319,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221116/9faffed73bd4c60e3ade0a8fd7311a78.jpg',
            ),
            412 => 
            array (
                'id' => 9434,
                'product_id' => 1319,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '10',
            ),
            413 => 
            array (
                'id' => 9435,
                'product_id' => 1320,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            414 => 
            array (
                'id' => 9436,
                'product_id' => 1320,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            415 => 
            array (
                'id' => 9437,
                'product_id' => 1320,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            416 => 
            array (
                'id' => 9438,
                'product_id' => 1320,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            417 => 
            array (
                'id' => 9439,
                'product_id' => 1320,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            418 => 
            array (
                'id' => 9440,
                'product_id' => 1320,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            419 => 
            array (
                'id' => 9441,
                'product_id' => 1320,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            420 => 
            array (
                'id' => 9442,
                'product_id' => 1320,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            421 => 
            array (
                'id' => 9443,
                'product_id' => 1320,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            422 => 
            array (
                'id' => 9444,
                'product_id' => 1320,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            423 => 
            array (
                'id' => 9445,
                'product_id' => 1320,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            424 => 
            array (
                'id' => 9446,
                'product_id' => 1320,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221116/9faffed73bd4c60e3ade0a8fd7311a78.jpg',
            ),
            425 => 
            array (
                'id' => 9447,
                'product_id' => 1320,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '11',
            ),
            426 => 
            array (
                'id' => 9448,
                'product_id' => 1143,
                'type' => 'array',
                'key' => 'default_attributes',
                'value' => '{"color":"","size":""}',
            ),
            427 => 
            array (
                'id' => 9473,
                'product_id' => 1309,
                'type' => 'string',
                'key' => 'meta_scheduled_sale',
                'value' => '0',
            ),
            428 => 
            array (
                'id' => 9474,
                'product_id' => 1310,
                'type' => 'string',
                'key' => 'meta_scheduled_sale',
                'value' => '0',
            ),
            429 => 
            array (
                'id' => 9475,
                'product_id' => 1311,
                'type' => 'string',
                'key' => 'meta_scheduled_sale',
                'value' => '0',
            ),
            430 => 
            array (
                'id' => 9476,
                'product_id' => 1312,
                'type' => 'string',
                'key' => 'meta_scheduled_sale',
                'value' => '0',
            ),
            431 => 
            array (
                'id' => 9477,
                'product_id' => 1313,
                'type' => 'string',
                'key' => 'meta_scheduled_sale',
                'value' => '0',
            ),
            432 => 
            array (
                'id' => 9478,
                'product_id' => 1314,
                'type' => 'string',
                'key' => 'meta_scheduled_sale',
                'value' => '0',
            ),
            433 => 
            array (
                'id' => 9479,
                'product_id' => 1315,
                'type' => 'string',
                'key' => 'meta_scheduled_sale',
                'value' => '0',
            ),
            434 => 
            array (
                'id' => 9480,
                'product_id' => 1316,
                'type' => 'string',
                'key' => 'meta_scheduled_sale',
                'value' => '0',
            ),
            435 => 
            array (
                'id' => 9481,
                'product_id' => 1317,
                'type' => 'string',
                'key' => 'meta_scheduled_sale',
                'value' => '0',
            ),
            436 => 
            array (
                'id' => 9482,
                'product_id' => 1318,
                'type' => 'string',
                'key' => 'meta_scheduled_sale',
                'value' => '0',
            ),
            437 => 
            array (
                'id' => 9483,
                'product_id' => 1319,
                'type' => 'string',
                'key' => 'meta_scheduled_sale',
                'value' => '0',
            ),
            438 => 
            array (
                'id' => 9484,
                'product_id' => 1320,
                'type' => 'string',
                'key' => 'meta_scheduled_sale',
                'value' => '0',
            ),
            439 => 
            array (
                'id' => 9667,
                'product_id' => 1142,
                'type' => 'array',
                'key' => 'attributes',
                'value' => '{"material":{"name":"Material","position":"0","key":"material","value":["Cotton"],"visibility":"1","variation":"0","attribute_id":""},"color":{"name":"Color","position":"1","key":"color","value":["211"],"visibility":"1","variation":"0","attribute_id":"26"}}',
            ),
            440 => 
            array (
                'id' => 9721,
                'product_id' => 1141,
                'type' => 'array',
                'key' => 'attributes',
                'value' => '{"color":{"name":"Color","position":"0","key":"color","value":["24","25"],"visibility":"1","variation":"1","attribute_id":"26"},"size":{"name":"Size","position":"1","key":"size","value":["S","M","L"],"visibility":"1","variation":"1","attribute_id":""},"material":{"name":"Material","position":"2","key":"material","value":["Cotton"],"visibility":"1","variation":"0","attribute_id":""}}',
            ),
            441 => 
            array (
                'id' => 9722,
                'product_id' => 1321,
                'type' => 'null',
                'key' => 'attribute_color',
                'value' => '24',
            ),
            442 => 
            array (
                'id' => 9723,
                'product_id' => 1321,
                'type' => 'null',
                'key' => 'attribute_size',
                'value' => 'S',
            ),
            443 => 
            array (
                'id' => 9724,
                'product_id' => 1322,
                'type' => 'null',
                'key' => 'attribute_color',
                'value' => '24',
            ),
            444 => 
            array (
                'id' => 9725,
                'product_id' => 1322,
                'type' => 'null',
                'key' => 'attribute_size',
                'value' => 'M',
            ),
            445 => 
            array (
                'id' => 9726,
                'product_id' => 1323,
                'type' => 'null',
                'key' => 'attribute_color',
                'value' => '24',
            ),
            446 => 
            array (
                'id' => 9727,
                'product_id' => 1323,
                'type' => 'null',
                'key' => 'attribute_size',
                'value' => 'L',
            ),
            447 => 
            array (
                'id' => 9728,
                'product_id' => 1324,
                'type' => 'null',
                'key' => 'attribute_color',
                'value' => '25',
            ),
            448 => 
            array (
                'id' => 9729,
                'product_id' => 1324,
                'type' => 'null',
                'key' => 'attribute_size',
                'value' => 'S',
            ),
            449 => 
            array (
                'id' => 9730,
                'product_id' => 1325,
                'type' => 'null',
                'key' => 'attribute_color',
                'value' => '25',
            ),
            450 => 
            array (
                'id' => 9731,
                'product_id' => 1325,
                'type' => 'null',
                'key' => 'attribute_size',
                'value' => 'M',
            ),
            451 => 
            array (
                'id' => 9732,
                'product_id' => 1326,
                'type' => 'null',
                'key' => 'attribute_color',
                'value' => '25',
            ),
            452 => 
            array (
                'id' => 9733,
                'product_id' => 1326,
                'type' => 'null',
                'key' => 'attribute_size',
                'value' => 'L',
            ),
            453 => 
            array (
                'id' => 9734,
                'product_id' => 1321,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221116/d8be4961fc58751888180bf34a778088.png',
            ),
            454 => 
            array (
                'id' => 9735,
                'product_id' => 1321,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            455 => 
            array (
                'id' => 9736,
                'product_id' => 1321,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            456 => 
            array (
                'id' => 9737,
                'product_id' => 1321,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            457 => 
            array (
                'id' => 9738,
                'product_id' => 1321,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            458 => 
            array (
                'id' => 9739,
                'product_id' => 1321,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            459 => 
            array (
                'id' => 9740,
                'product_id' => 1321,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            460 => 
            array (
                'id' => 9741,
                'product_id' => 1321,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            461 => 
            array (
                'id' => 9742,
                'product_id' => 1321,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            462 => 
            array (
                'id' => 9743,
                'product_id' => 1321,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            463 => 
            array (
                'id' => 9744,
                'product_id' => 1321,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            464 => 
            array (
                'id' => 9745,
                'product_id' => 1321,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            465 => 
            array (
                'id' => 9746,
                'product_id' => 1321,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '0',
            ),
            466 => 
            array (
                'id' => 9747,
                'product_id' => 1322,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221116/d8be4961fc58751888180bf34a778088.png',
            ),
            467 => 
            array (
                'id' => 9748,
                'product_id' => 1322,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            468 => 
            array (
                'id' => 9749,
                'product_id' => 1322,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            469 => 
            array (
                'id' => 9750,
                'product_id' => 1322,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            470 => 
            array (
                'id' => 9751,
                'product_id' => 1322,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            471 => 
            array (
                'id' => 9752,
                'product_id' => 1322,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            472 => 
            array (
                'id' => 9753,
                'product_id' => 1322,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            473 => 
            array (
                'id' => 9754,
                'product_id' => 1322,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            474 => 
            array (
                'id' => 9755,
                'product_id' => 1322,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            475 => 
            array (
                'id' => 9756,
                'product_id' => 1322,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            476 => 
            array (
                'id' => 9757,
                'product_id' => 1322,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            477 => 
            array (
                'id' => 9758,
                'product_id' => 1322,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            478 => 
            array (
                'id' => 9759,
                'product_id' => 1322,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '1',
            ),
            479 => 
            array (
                'id' => 9760,
                'product_id' => 1323,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221116/d8be4961fc58751888180bf34a778088.png',
            ),
            480 => 
            array (
                'id' => 9761,
                'product_id' => 1323,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            481 => 
            array (
                'id' => 9762,
                'product_id' => 1323,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            482 => 
            array (
                'id' => 9763,
                'product_id' => 1323,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            483 => 
            array (
                'id' => 9764,
                'product_id' => 1323,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            484 => 
            array (
                'id' => 9765,
                'product_id' => 1323,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            485 => 
            array (
                'id' => 9766,
                'product_id' => 1323,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            486 => 
            array (
                'id' => 9767,
                'product_id' => 1323,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            487 => 
            array (
                'id' => 9768,
                'product_id' => 1323,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            488 => 
            array (
                'id' => 9769,
                'product_id' => 1323,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            489 => 
            array (
                'id' => 9770,
                'product_id' => 1323,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            490 => 
            array (
                'id' => 9771,
                'product_id' => 1323,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            491 => 
            array (
                'id' => 9772,
                'product_id' => 1323,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '2',
            ),
            492 => 
            array (
                'id' => 9773,
                'product_id' => 1324,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221116/dc3ecec9d2406223f5045339e668ae3d.png',
            ),
            493 => 
            array (
                'id' => 9774,
                'product_id' => 1324,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            494 => 
            array (
                'id' => 9775,
                'product_id' => 1324,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            495 => 
            array (
                'id' => 9776,
                'product_id' => 1324,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            496 => 
            array (
                'id' => 9777,
                'product_id' => 1324,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            497 => 
            array (
                'id' => 9778,
                'product_id' => 1324,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            498 => 
            array (
                'id' => 9779,
                'product_id' => 1324,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            499 => 
            array (
                'id' => 9780,
                'product_id' => 1324,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
        ));
        \DB::table('products_meta')->insert(array (
            0 => 
            array (
                'id' => 9781,
                'product_id' => 1324,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            1 => 
            array (
                'id' => 9782,
                'product_id' => 1324,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            2 => 
            array (
                'id' => 9783,
                'product_id' => 1324,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            3 => 
            array (
                'id' => 9784,
                'product_id' => 1324,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            4 => 
            array (
                'id' => 9785,
                'product_id' => 1324,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '3',
            ),
            5 => 
            array (
                'id' => 9786,
                'product_id' => 1325,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221116/dc3ecec9d2406223f5045339e668ae3d.png',
            ),
            6 => 
            array (
                'id' => 9787,
                'product_id' => 1325,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            7 => 
            array (
                'id' => 9788,
                'product_id' => 1325,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            8 => 
            array (
                'id' => 9789,
                'product_id' => 1325,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            9 => 
            array (
                'id' => 9790,
                'product_id' => 1325,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            10 => 
            array (
                'id' => 9791,
                'product_id' => 1325,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            11 => 
            array (
                'id' => 9792,
                'product_id' => 1325,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            12 => 
            array (
                'id' => 9793,
                'product_id' => 1325,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            13 => 
            array (
                'id' => 9794,
                'product_id' => 1325,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            14 => 
            array (
                'id' => 9795,
                'product_id' => 1325,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            15 => 
            array (
                'id' => 9796,
                'product_id' => 1325,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            16 => 
            array (
                'id' => 9797,
                'product_id' => 1325,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            17 => 
            array (
                'id' => 9798,
                'product_id' => 1325,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '4',
            ),
            18 => 
            array (
                'id' => 9799,
                'product_id' => 1326,
                'type' => 'string',
                'key' => 'meta_image',
                'value' => '20221116/dc3ecec9d2406223f5045339e668ae3d.png',
            ),
            19 => 
            array (
                'id' => 9800,
                'product_id' => 1326,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            20 => 
            array (
                'id' => 9801,
                'product_id' => 1326,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            21 => 
            array (
                'id' => 9802,
                'product_id' => 1326,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            22 => 
            array (
                'id' => 9803,
                'product_id' => 1326,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '5',
            ),
            23 => 
            array (
                'id' => 9804,
                'product_id' => 1326,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            24 => 
            array (
                'id' => 9805,
                'product_id' => 1326,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            25 => 
            array (
                'id' => 9806,
                'product_id' => 1326,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => 'light',
            ),
            26 => 
            array (
                'id' => 9807,
                'product_id' => 1326,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => 'standard',
            ),
            27 => 
            array (
                'id' => 9808,
                'product_id' => 1326,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            28 => 
            array (
                'id' => 9809,
                'product_id' => 1326,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            29 => 
            array (
                'id' => 9810,
                'product_id' => 1326,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            30 => 
            array (
                'id' => 9811,
                'product_id' => 1326,
                'type' => NULL,
                'key' => 'variable_order',
                'value' => '5',
            ),
            31 => 
            array (
                'id' => 9812,
                'product_id' => 1141,
                'type' => 'array',
                'key' => 'default_attributes',
                'value' => '{"color":"","size":""}',
            ),
            32 => 
            array (
                'id' => 9813,
                'product_id' => 1140,
                'type' => 'array',
                'key' => 'meta_image',
                'value' => '["20221129/12188c61b8ef38c7dedc52e4cb70739b.jpg"]',
            ),
            33 => 
            array (
                'id' => 9814,
                'product_id' => 1140,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            34 => 
            array (
                'id' => 9815,
                'product_id' => 1140,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            35 => 
            array (
                'id' => 9816,
                'product_id' => 1140,
                'type' => 'array',
                'key' => 'meta_external_product',
                'value' => '{"url":"https:\\/\\/codecanyon.net\\/user\\/techvillage1\\/portfolio","text":"BUY NOW"}',
            ),
            36 => 
            array (
                'id' => 9817,
                'product_id' => 1140,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            37 => 
            array (
                'id' => 9818,
                'product_id' => 1140,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            38 => 
            array (
                'id' => 9819,
                'product_id' => 1140,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            39 => 
            array (
                'id' => 9820,
                'product_id' => 1140,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => '',
            ),
            40 => 
            array (
                'id' => 9821,
                'product_id' => 1140,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            41 => 
            array (
                'id' => 9822,
                'product_id' => 1140,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '',
            ),
            42 => 
            array (
                'id' => 9823,
                'product_id' => 1140,
                'type' => 'string',
                'key' => 'meta_hide_stock',
                'value' => '0',
            ),
            43 => 
            array (
                'id' => 9824,
                'product_id' => 1140,
                'type' => 'string',
                'key' => 'meta_stock_status',
                'value' => 'In Stock',
            ),
            44 => 
            array (
                'id' => 9825,
                'product_id' => 1140,
                'type' => 'string',
                'key' => 'meta_individual_sale',
                'value' => '0',
            ),
            45 => 
            array (
                'id' => 9826,
                'product_id' => 1140,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => '',
            ),
            46 => 
            array (
                'id' => 9827,
                'product_id' => 1140,
                'type' => 'string',
                'key' => 'meta_cash_on_delivery',
                'value' => '0',
            ),
            47 => 
            array (
                'id' => 9828,
                'product_id' => 1140,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            48 => 
            array (
                'id' => 9829,
                'product_id' => 1140,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            49 => 
            array (
                'id' => 9830,
                'product_id' => 1140,
                'type' => 'string',
                'key' => 'meta_warranty_type',
                'value' => 'Seller Warranty',
            ),
            50 => 
            array (
                'id' => 9831,
                'product_id' => 1140,
                'type' => 'string',
                'key' => 'meta_warranty_period',
                'value' => '6 months',
            ),
            51 => 
            array (
                'id' => 9832,
                'product_id' => 1140,
                'type' => 'string',
                'key' => 'meta_warranty_policy',
                'value' => 'Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Sed porttitor lectus nibh. Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.',
            ),
            52 => 
            array (
                'id' => 9833,
                'product_id' => 1140,
                'type' => 'string',
                'key' => 'meta_purchase_note',
                'value' => '',
            ),
            53 => 
            array (
                'id' => 9834,
                'product_id' => 1140,
                'type' => 'string',
                'key' => 'meta_estimated_delivery',
                'value' => '',
            ),
            54 => 
            array (
                'id' => 9835,
                'product_id' => 1140,
                'type' => 'string',
                'key' => 'meta_enable_reviews',
                'value' => '1',
            ),
            55 => 
            array (
                'id' => 9836,
                'product_id' => 1140,
                'type' => 'array',
                'key' => 'meta_seo',
                'value' => '{"title":"MartVill - An ecommerce platform to sell everything","description":"Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Sed porttitor lectus nibh. Sed porttitor lectus nibh.","image":"20221129/12188c61b8ef38c7dedc52e4cb70739b.jpg"}',
            ),
            56 => 
            array (
                'id' => 9837,
                'product_id' => 1140,
                'type' => 'array',
                'key' => 'meta_video_files',
                'value' => '[]',
            ),
            57 => 
            array (
                'id' => 9838,
                'product_id' => 1140,
                'type' => 'array',
                'key' => 'meta_video_url',
                'value' => '[]',
            ),
            58 => 
            array (
                'id' => 9865,
                'product_id' => 1139,
                'type' => 'array',
                'key' => 'meta_image',
                'value' => '["20221129/e7bf0e48ef030f688794f19fce42e580.jpg"]',
            ),
            59 => 
            array (
                'id' => 9866,
                'product_id' => 1139,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            60 => 
            array (
                'id' => 9867,
                'product_id' => 1139,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            61 => 
            array (
                'id' => 9868,
                'product_id' => 1139,
                'type' => 'array',
                'key' => 'meta_external_product',
                'value' => '{"url":"https:\\/\\/codecanyon.net\\/item\\/cryptinvest-wallet-growth-investment-addon\\/40526686","text":"BUY NOW"}',
            ),
            62 => 
            array (
                'id' => 9869,
                'product_id' => 1139,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            63 => 
            array (
                'id' => 9870,
                'product_id' => 1139,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            64 => 
            array (
                'id' => 9871,
                'product_id' => 1139,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            65 => 
            array (
                'id' => 9872,
                'product_id' => 1139,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => '',
            ),
            66 => 
            array (
                'id' => 9873,
                'product_id' => 1139,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            67 => 
            array (
                'id' => 9874,
                'product_id' => 1139,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '',
            ),
            68 => 
            array (
                'id' => 9875,
                'product_id' => 1139,
                'type' => 'string',
                'key' => 'meta_hide_stock',
                'value' => '0',
            ),
            69 => 
            array (
                'id' => 9876,
                'product_id' => 1139,
                'type' => 'string',
                'key' => 'meta_stock_status',
                'value' => 'In Stock',
            ),
            70 => 
            array (
                'id' => 9877,
                'product_id' => 1139,
                'type' => 'string',
                'key' => 'meta_individual_sale',
                'value' => '0',
            ),
            71 => 
            array (
                'id' => 9878,
                'product_id' => 1139,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => '',
            ),
            72 => 
            array (
                'id' => 9879,
                'product_id' => 1139,
                'type' => 'string',
                'key' => 'meta_cash_on_delivery',
                'value' => '0',
            ),
            73 => 
            array (
                'id' => 9880,
                'product_id' => 1139,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            74 => 
            array (
                'id' => 9881,
                'product_id' => 1139,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            75 => 
            array (
                'id' => 9882,
                'product_id' => 1139,
                'type' => 'string',
                'key' => 'meta_warranty_type',
                'value' => 'Seller Warranty',
            ),
            76 => 
            array (
                'id' => 9883,
                'product_id' => 1139,
                'type' => 'string',
                'key' => 'meta_warranty_period',
                'value' => '2 months',
            ),
            77 => 
            array (
                'id' => 9884,
                'product_id' => 1139,
                'type' => 'string',
                'key' => 'meta_warranty_policy',
                'value' => '',
            ),
            78 => 
            array (
                'id' => 9885,
                'product_id' => 1139,
                'type' => 'string',
                'key' => 'meta_purchase_note',
                'value' => '',
            ),
            79 => 
            array (
                'id' => 9886,
                'product_id' => 1139,
                'type' => 'string',
                'key' => 'meta_estimated_delivery',
                'value' => '',
            ),
            80 => 
            array (
                'id' => 9887,
                'product_id' => 1139,
                'type' => 'string',
                'key' => 'meta_enable_reviews',
                'value' => '1',
            ),
            81 => 
            array (
                'id' => 9888,
                'product_id' => 1139,
                'type' => 'array',
                'key' => 'meta_seo',
                'value' => '{"title":"CryptInvest - Wallet Growth Investment Addon","description":"","image":"20221129/e7bf0e48ef030f688794f19fce42e580.jpg"}',
            ),
            82 => 
            array (
                'id' => 9889,
                'product_id' => 1139,
                'type' => 'array',
                'key' => 'meta_video_files',
                'value' => '[]',
            ),
            83 => 
            array (
                'id' => 9890,
                'product_id' => 1139,
                'type' => 'array',
                'key' => 'meta_video_url',
                'value' => '[]',
            ),
            84 => 
            array (
                'id' => 9969,
                'product_id' => 1138,
                'type' => 'array',
                'key' => 'meta_image',
                'value' => '["20221129/440dc1db6a1f4109cbda978e95588b83.jpg"]',
            ),
            85 => 
            array (
                'id' => 9970,
                'product_id' => 1138,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            86 => 
            array (
                'id' => 9971,
                'product_id' => 1138,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            87 => 
            array (
                'id' => 9972,
                'product_id' => 1138,
                'type' => 'array',
                'key' => 'meta_external_product',
                'value' => '{"url":"https:\\/\\/codecanyon.net\\/item\\/vrent-vacation-rental-marketplace\\/19418596","text":"BUY NOW"}',
            ),
            88 => 
            array (
                'id' => 9973,
                'product_id' => 1138,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            89 => 
            array (
                'id' => 9974,
                'product_id' => 1138,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            90 => 
            array (
                'id' => 9975,
                'product_id' => 1138,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            91 => 
            array (
                'id' => 9976,
                'product_id' => 1138,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => '',
            ),
            92 => 
            array (
                'id' => 9977,
                'product_id' => 1138,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            93 => 
            array (
                'id' => 9978,
                'product_id' => 1138,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '',
            ),
            94 => 
            array (
                'id' => 9979,
                'product_id' => 1138,
                'type' => 'string',
                'key' => 'meta_hide_stock',
                'value' => '0',
            ),
            95 => 
            array (
                'id' => 9980,
                'product_id' => 1138,
                'type' => 'string',
                'key' => 'meta_stock_status',
                'value' => 'In Stock',
            ),
            96 => 
            array (
                'id' => 9981,
                'product_id' => 1138,
                'type' => 'string',
                'key' => 'meta_individual_sale',
                'value' => '0',
            ),
            97 => 
            array (
                'id' => 9982,
                'product_id' => 1138,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => '',
            ),
            98 => 
            array (
                'id' => 9983,
                'product_id' => 1138,
                'type' => 'string',
                'key' => 'meta_cash_on_delivery',
                'value' => '0',
            ),
            99 => 
            array (
                'id' => 9984,
                'product_id' => 1138,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            100 => 
            array (
                'id' => 9985,
                'product_id' => 1138,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            101 => 
            array (
                'id' => 9986,
                'product_id' => 1138,
                'type' => 'string',
                'key' => 'meta_warranty_type',
                'value' => 'Seller Warranty',
            ),
            102 => 
            array (
                'id' => 9987,
                'product_id' => 1138,
                'type' => 'string',
                'key' => 'meta_warranty_period',
                'value' => '6 months',
            ),
            103 => 
            array (
                'id' => 9988,
                'product_id' => 1138,
                'type' => 'string',
                'key' => 'meta_warranty_policy',
                'value' => 'Donec rutrum congue leo eget malesuada. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.',
            ),
            104 => 
            array (
                'id' => 9989,
                'product_id' => 1138,
                'type' => 'string',
                'key' => 'meta_purchase_note',
                'value' => '',
            ),
            105 => 
            array (
                'id' => 9990,
                'product_id' => 1138,
                'type' => 'string',
                'key' => 'meta_estimated_delivery',
                'value' => '',
            ),
            106 => 
            array (
                'id' => 9991,
                'product_id' => 1138,
                'type' => 'string',
                'key' => 'meta_enable_reviews',
                'value' => '1',
            ),
            107 => 
            array (
                'id' => 9992,
                'product_id' => 1138,
                'type' => 'array',
                'key' => 'meta_seo',
                'value' => '{"title":"vRent - Vacation Rental Marketplace","description":"Donec rutrum congue leo eget malesuada. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.","image":"20221129/440dc1db6a1f4109cbda978e95588b83.jpg"}',
            ),
            108 => 
            array (
                'id' => 9993,
                'product_id' => 1138,
                'type' => 'array',
                'key' => 'meta_video_files',
                'value' => '[]',
            ),
            109 => 
            array (
                'id' => 9994,
                'product_id' => 1138,
                'type' => 'array',
                'key' => 'meta_video_url',
                'value' => '[]',
            ),
            110 => 
            array (
                'id' => 10073,
                'product_id' => 1137,
                'type' => 'array',
                'key' => 'meta_image',
                'value' => '["20221129/659a1abaf5aa9f57f209e3009f7402a0.jpg"]',
            ),
            111 => 
            array (
                'id' => 10074,
                'product_id' => 1137,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '1',
            ),
            112 => 
            array (
                'id' => 10075,
                'product_id' => 1137,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '1',
            ),
            113 => 
            array (
                'id' => 10076,
                'product_id' => 1137,
                'type' => 'array',
                'key' => 'meta_external_product',
                'value' => '{"url":"","text":""}',
            ),
            114 => 
            array (
                'id' => 10077,
                'product_id' => 1137,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[{"name":"Aug_25_-_White_And_Green_Envelope_01 1.jpg","id":"1097","url":"http:\\/\\/localhost\\/laravel\\/public\\\\uploads\\\\20221129/659a1abaf5aa9f57f209e3009f7402a0.jpg"}]',
            ),
            115 => 
            array (
                'id' => 10078,
                'product_id' => 1137,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '5',
            ),
            116 => 
            array (
                'id' => 10079,
                'product_id' => 1137,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '10',
            ),
            117 => 
            array (
                'id' => 10080,
                'product_id' => 1137,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => '',
            ),
            118 => 
            array (
                'id' => 10081,
                'product_id' => 1137,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            119 => 
            array (
                'id' => 10082,
                'product_id' => 1137,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '',
            ),
            120 => 
            array (
                'id' => 10083,
                'product_id' => 1137,
                'type' => 'string',
                'key' => 'meta_hide_stock',
                'value' => '0',
            ),
            121 => 
            array (
                'id' => 10084,
                'product_id' => 1137,
                'type' => 'string',
                'key' => 'meta_stock_status',
                'value' => 'In Stock',
            ),
            122 => 
            array (
                'id' => 10085,
                'product_id' => 1137,
                'type' => 'string',
                'key' => 'meta_individual_sale',
                'value' => '1',
            ),
            123 => 
            array (
                'id' => 10086,
                'product_id' => 1137,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => '',
            ),
            124 => 
            array (
                'id' => 10087,
                'product_id' => 1137,
                'type' => 'string',
                'key' => 'meta_cash_on_delivery',
                'value' => '0',
            ),
            125 => 
            array (
                'id' => 10088,
                'product_id' => 1137,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            126 => 
            array (
                'id' => 10089,
                'product_id' => 1137,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            127 => 
            array (
                'id' => 10090,
                'product_id' => 1137,
                'type' => 'string',
                'key' => 'meta_warranty_type',
                'value' => 'Seller Warranty',
            ),
            128 => 
            array (
                'id' => 10091,
                'product_id' => 1137,
                'type' => 'string',
                'key' => 'meta_warranty_period',
                'value' => '6 months',
            ),
            129 => 
            array (
                'id' => 10092,
                'product_id' => 1137,
                'type' => 'string',
                'key' => 'meta_warranty_policy',
                'value' => '',
            ),
            130 => 
            array (
                'id' => 10093,
                'product_id' => 1137,
                'type' => 'string',
                'key' => 'meta_purchase_note',
                'value' => '',
            ),
            131 => 
            array (
                'id' => 10094,
                'product_id' => 1137,
                'type' => 'string',
                'key' => 'meta_estimated_delivery',
                'value' => '',
            ),
            132 => 
            array (
                'id' => 10095,
                'product_id' => 1137,
                'type' => 'string',
                'key' => 'meta_enable_reviews',
                'value' => '1',
            ),
            133 => 
            array (
                'id' => 10096,
                'product_id' => 1137,
                'type' => 'array',
                'key' => 'meta_seo',
                'value' => '{"title":"Branding PSD Mockups For Your Business","description":"","image":"20221129/659a1abaf5aa9f57f209e3009f7402a0.jpg"}',
            ),
            134 => 
            array (
                'id' => 10097,
                'product_id' => 1137,
                'type' => 'array',
                'key' => 'meta_video_files',
                'value' => '[]',
            ),
            135 => 
            array (
                'id' => 10098,
                'product_id' => 1137,
                'type' => 'array',
                'key' => 'meta_video_url',
                'value' => '[]',
            ),
            136 => 
            array (
                'id' => 10125,
                'product_id' => 1136,
                'type' => 'array',
                'key' => 'meta_image',
                'value' => '["20221129/b4f5f5ed6d126d2bb57b4b82ea0939d9.jpg"]',
            ),
            137 => 
            array (
                'id' => 10126,
                'product_id' => 1136,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '1',
            ),
            138 => 
            array (
                'id' => 10127,
                'product_id' => 1136,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '1',
            ),
            139 => 
            array (
                'id' => 10128,
                'product_id' => 1136,
                'type' => 'array',
                'key' => 'meta_external_product',
                'value' => '{"url":"","text":""}',
            ),
            140 => 
            array (
                'id' => 10129,
                'product_id' => 1136,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[{"name":"Group 95163.jpg","id":"1098","url":"http:\\/\\/localhost\\/laravel\\/public\\\\uploads\\\\20221129/b4f5f5ed6d126d2bb57b4b82ea0939d9.jpg"}]',
            ),
            141 => 
            array (
                'id' => 10130,
                'product_id' => 1136,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '2',
            ),
            142 => 
            array (
                'id' => 10131,
                'product_id' => 1136,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '30',
            ),
            143 => 
            array (
                'id' => 10132,
                'product_id' => 1136,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => '',
            ),
            144 => 
            array (
                'id' => 10133,
                'product_id' => 1136,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            145 => 
            array (
                'id' => 10134,
                'product_id' => 1136,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '',
            ),
            146 => 
            array (
                'id' => 10135,
                'product_id' => 1136,
                'type' => 'string',
                'key' => 'meta_hide_stock',
                'value' => '0',
            ),
            147 => 
            array (
                'id' => 10136,
                'product_id' => 1136,
                'type' => 'string',
                'key' => 'meta_stock_status',
                'value' => 'In Stock',
            ),
            148 => 
            array (
                'id' => 10137,
                'product_id' => 1136,
                'type' => 'string',
                'key' => 'meta_individual_sale',
                'value' => '1',
            ),
            149 => 
            array (
                'id' => 10138,
                'product_id' => 1136,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => '',
            ),
            150 => 
            array (
                'id' => 10139,
                'product_id' => 1136,
                'type' => 'string',
                'key' => 'meta_cash_on_delivery',
                'value' => '0',
            ),
            151 => 
            array (
                'id' => 10140,
                'product_id' => 1136,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            152 => 
            array (
                'id' => 10141,
                'product_id' => 1136,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            153 => 
            array (
                'id' => 10142,
                'product_id' => 1136,
                'type' => 'string',
                'key' => 'meta_warranty_type',
                'value' => 'Seller Warranty',
            ),
            154 => 
            array (
                'id' => 10143,
                'product_id' => 1136,
                'type' => 'string',
                'key' => 'meta_warranty_period',
                'value' => '1 month',
            ),
            155 => 
            array (
                'id' => 10144,
                'product_id' => 1136,
                'type' => 'string',
                'key' => 'meta_warranty_policy',
                'value' => '',
            ),
            156 => 
            array (
                'id' => 10145,
                'product_id' => 1136,
                'type' => 'string',
                'key' => 'meta_purchase_note',
                'value' => '',
            ),
            157 => 
            array (
                'id' => 10146,
                'product_id' => 1136,
                'type' => 'string',
                'key' => 'meta_estimated_delivery',
                'value' => '',
            ),
            158 => 
            array (
                'id' => 10147,
                'product_id' => 1136,
                'type' => 'string',
                'key' => 'meta_enable_reviews',
                'value' => '1',
            ),
            159 => 
            array (
                'id' => 10148,
                'product_id' => 1136,
                'type' => 'array',
                'key' => 'meta_seo',
                'value' => '{"title":"Illustration Set - Office Break Fun","description":"","image":"20221129/b4f5f5ed6d126d2bb57b4b82ea0939d9.jpg"}',
            ),
            160 => 
            array (
                'id' => 10149,
                'product_id' => 1136,
                'type' => 'array',
                'key' => 'meta_video_files',
                'value' => '[]',
            ),
            161 => 
            array (
                'id' => 10150,
                'product_id' => 1136,
                'type' => 'array',
                'key' => 'meta_video_url',
                'value' => '["https:\\/\\/player.vimeo.com\\/video\\/330420305?h=0c269f7e82&color=f7f7f7&title=0&byline=0&portrait=0"]',
            ),
            162 => 
            array (
                'id' => 10177,
                'product_id' => 1135,
                'type' => 'array',
                'key' => 'meta_image',
                'value' => '["20221129/e3412a5eaa185058ae457ecbc7c827b8.jpg"]',
            ),
            163 => 
            array (
                'id' => 10178,
                'product_id' => 1135,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '1',
            ),
            164 => 
            array (
                'id' => 10179,
                'product_id' => 1135,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '1',
            ),
            165 => 
            array (
                'id' => 10180,
                'product_id' => 1135,
                'type' => 'array',
                'key' => 'meta_external_product',
                'value' => '{"url":"","text":""}',
            ),
            166 => 
            array (
                'id' => 10181,
                'product_id' => 1135,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[{"name":"Group 95162.jpg","id":"1099","url":"http:\\/\\/localhost\\/laravel\\/public\\\\uploads\\\\20221129/e3412a5eaa185058ae457ecbc7c827b8.jpg"}]',
            ),
            167 => 
            array (
                'id' => 10182,
                'product_id' => 1135,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            168 => 
            array (
                'id' => 10183,
                'product_id' => 1135,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            169 => 
            array (
                'id' => 10184,
                'product_id' => 1135,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => '',
            ),
            170 => 
            array (
                'id' => 10185,
                'product_id' => 1135,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            171 => 
            array (
                'id' => 10186,
                'product_id' => 1135,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '',
            ),
            172 => 
            array (
                'id' => 10187,
                'product_id' => 1135,
                'type' => 'string',
                'key' => 'meta_hide_stock',
                'value' => '0',
            ),
            173 => 
            array (
                'id' => 10188,
                'product_id' => 1135,
                'type' => 'string',
                'key' => 'meta_stock_status',
                'value' => 'In Stock',
            ),
            174 => 
            array (
                'id' => 10189,
                'product_id' => 1135,
                'type' => 'string',
                'key' => 'meta_individual_sale',
                'value' => '1',
            ),
            175 => 
            array (
                'id' => 10190,
                'product_id' => 1135,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => '',
            ),
            176 => 
            array (
                'id' => 10191,
                'product_id' => 1135,
                'type' => 'string',
                'key' => 'meta_cash_on_delivery',
                'value' => '0',
            ),
            177 => 
            array (
                'id' => 10192,
                'product_id' => 1135,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            178 => 
            array (
                'id' => 10193,
                'product_id' => 1135,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            179 => 
            array (
                'id' => 10194,
                'product_id' => 1135,
                'type' => 'string',
                'key' => 'meta_warranty_type',
                'value' => 'Seller Warranty',
            ),
            180 => 
            array (
                'id' => 10195,
                'product_id' => 1135,
                'type' => 'string',
                'key' => 'meta_warranty_period',
                'value' => '2 months',
            ),
            181 => 
            array (
                'id' => 10196,
                'product_id' => 1135,
                'type' => 'string',
                'key' => 'meta_warranty_policy',
                'value' => '',
            ),
            182 => 
            array (
                'id' => 10197,
                'product_id' => 1135,
                'type' => 'string',
                'key' => 'meta_purchase_note',
                'value' => '',
            ),
            183 => 
            array (
                'id' => 10198,
                'product_id' => 1135,
                'type' => 'string',
                'key' => 'meta_estimated_delivery',
                'value' => '',
            ),
            184 => 
            array (
                'id' => 10199,
                'product_id' => 1135,
                'type' => 'string',
                'key' => 'meta_enable_reviews',
                'value' => '1',
            ),
            185 => 
            array (
                'id' => 10200,
                'product_id' => 1135,
                'type' => 'array',
                'key' => 'meta_seo',
            'value' => '{"title":"Video Promo - How To Promote Your Business (2 min)","description":"","image":"20221129/e3412a5eaa185058ae457ecbc7c827b8.jpg"}',
            ),
            186 => 
            array (
                'id' => 10201,
                'product_id' => 1135,
                'type' => 'array',
                'key' => 'meta_video_files',
                'value' => '[]',
            ),
            187 => 
            array (
                'id' => 10202,
                'product_id' => 1135,
                'type' => 'array',
                'key' => 'meta_video_url',
                'value' => '["https:\\/\\/player.vimeo.com\\/video\\/330420305?h=0c269f7e82&color=f7f7f7&title=0&byline=0&portrait=0"]',
            ),
            188 => 
            array (
                'id' => 10203,
                'product_id' => 1130,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            189 => 
            array (
                'id' => 10204,
                'product_id' => 1130,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            190 => 
            array (
                'id' => 10205,
                'product_id' => 1130,
                'type' => 'array',
                'key' => 'meta_external_product',
                'value' => '{"url":"","text":""}',
            ),
            191 => 
            array (
                'id' => 10206,
                'product_id' => 1130,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            192 => 
            array (
                'id' => 10207,
                'product_id' => 1130,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            193 => 
            array (
                'id' => 10208,
                'product_id' => 1130,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            194 => 
            array (
                'id' => 10209,
                'product_id' => 1130,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => '',
            ),
            195 => 
            array (
                'id' => 10210,
                'product_id' => 1130,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            196 => 
            array (
                'id' => 10211,
                'product_id' => 1130,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '',
            ),
            197 => 
            array (
                'id' => 10212,
                'product_id' => 1130,
                'type' => 'string',
                'key' => 'meta_hide_stock',
                'value' => '0',
            ),
            198 => 
            array (
                'id' => 10213,
                'product_id' => 1130,
                'type' => 'string',
                'key' => 'meta_stock_status',
                'value' => 'In Stock',
            ),
            199 => 
            array (
                'id' => 10214,
                'product_id' => 1130,
                'type' => 'string',
                'key' => 'meta_individual_sale',
                'value' => '0',
            ),
            200 => 
            array (
                'id' => 10215,
                'product_id' => 1130,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => '',
            ),
            201 => 
            array (
                'id' => 10216,
                'product_id' => 1130,
                'type' => 'string',
                'key' => 'meta_cash_on_delivery',
                'value' => '0',
            ),
            202 => 
            array (
                'id' => 10217,
                'product_id' => 1130,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            203 => 
            array (
                'id' => 10218,
                'product_id' => 1130,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            204 => 
            array (
                'id' => 10219,
                'product_id' => 1130,
                'type' => 'string',
                'key' => 'meta_warranty_type',
                'value' => 'No Warranty',
            ),
            205 => 
            array (
                'id' => 10220,
                'product_id' => 1130,
                'type' => 'string',
                'key' => 'meta_warranty_period',
                'value' => '',
            ),
            206 => 
            array (
                'id' => 10221,
                'product_id' => 1130,
                'type' => 'string',
                'key' => 'meta_warranty_policy',
                'value' => '',
            ),
            207 => 
            array (
                'id' => 10222,
                'product_id' => 1130,
                'type' => 'string',
                'key' => 'meta_purchase_note',
                'value' => '',
            ),
            208 => 
            array (
                'id' => 10223,
                'product_id' => 1130,
                'type' => 'string',
                'key' => 'meta_estimated_delivery',
                'value' => '',
            ),
            209 => 
            array (
                'id' => 10224,
                'product_id' => 1130,
                'type' => 'string',
                'key' => 'meta_enable_reviews',
                'value' => '1',
            ),
            210 => 
            array (
                'id' => 10225,
                'product_id' => 1130,
                'type' => 'array',
                'key' => 'meta_seo',
                'value' => '{"title":"Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.","description":"Proin eget tortor risus. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Quisque velit nisi, pretium ut lacinia in, elementum id enim.","image":"20221123/f8256ae374c1432ad6b8ac1e81fde25e.jpg"}',
            ),
            211 => 
            array (
                'id' => 10226,
                'product_id' => 1130,
                'type' => 'array',
                'key' => 'meta_video_files',
                'value' => '[]',
            ),
            212 => 
            array (
                'id' => 10227,
                'product_id' => 1130,
                'type' => 'array',
                'key' => 'meta_image',
                'value' => '["20221123/f8256ae374c1432ad6b8ac1e81fde25e.jpg","20221123/c3a40267142cdf69026abdffc1c50df6.jpg","20221123/8455776f6791cd5479bb9a88c829876c.png"]',
            ),
            213 => 
            array (
                'id' => 10228,
                'product_id' => 1130,
                'type' => 'array',
                'key' => 'meta_video_url',
                'value' => '[]',
            ),
            214 => 
            array (
                'id' => 10229,
                'product_id' => 1130,
                'type' => 'array',
                'key' => 'meta_grouped_products',
                'value' => '["1203","1204","1205"]',
            ),
            215 => 
            array (
                'id' => 10320,
                'product_id' => 1131,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            216 => 
            array (
                'id' => 10321,
                'product_id' => 1131,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            217 => 
            array (
                'id' => 10322,
                'product_id' => 1131,
                'type' => 'array',
                'key' => 'meta_external_product',
                'value' => '{"url":"","text":""}',
            ),
            218 => 
            array (
                'id' => 10323,
                'product_id' => 1131,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            219 => 
            array (
                'id' => 10324,
                'product_id' => 1131,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            220 => 
            array (
                'id' => 10325,
                'product_id' => 1131,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            221 => 
            array (
                'id' => 10326,
                'product_id' => 1131,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => '',
            ),
            222 => 
            array (
                'id' => 10327,
                'product_id' => 1131,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            223 => 
            array (
                'id' => 10328,
                'product_id' => 1131,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '',
            ),
            224 => 
            array (
                'id' => 10329,
                'product_id' => 1131,
                'type' => 'string',
                'key' => 'meta_hide_stock',
                'value' => '0',
            ),
            225 => 
            array (
                'id' => 10330,
                'product_id' => 1131,
                'type' => 'string',
                'key' => 'meta_stock_status',
                'value' => 'In Stock',
            ),
            226 => 
            array (
                'id' => 10331,
                'product_id' => 1131,
                'type' => 'string',
                'key' => 'meta_individual_sale',
                'value' => '0',
            ),
            227 => 
            array (
                'id' => 10332,
                'product_id' => 1131,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => '',
            ),
            228 => 
            array (
                'id' => 10333,
                'product_id' => 1131,
                'type' => 'string',
                'key' => 'meta_cash_on_delivery',
                'value' => '0',
            ),
            229 => 
            array (
                'id' => 10334,
                'product_id' => 1131,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            230 => 
            array (
                'id' => 10335,
                'product_id' => 1131,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            231 => 
            array (
                'id' => 10336,
                'product_id' => 1131,
                'type' => 'string',
                'key' => 'meta_warranty_type',
                'value' => 'No Warranty',
            ),
            232 => 
            array (
                'id' => 10337,
                'product_id' => 1131,
                'type' => 'string',
                'key' => 'meta_warranty_period',
                'value' => '',
            ),
            233 => 
            array (
                'id' => 10338,
                'product_id' => 1131,
                'type' => 'string',
                'key' => 'meta_warranty_policy',
                'value' => '',
            ),
            234 => 
            array (
                'id' => 10339,
                'product_id' => 1131,
                'type' => 'string',
                'key' => 'meta_purchase_note',
                'value' => '',
            ),
            235 => 
            array (
                'id' => 10340,
                'product_id' => 1131,
                'type' => 'string',
                'key' => 'meta_estimated_delivery',
                'value' => '',
            ),
            236 => 
            array (
                'id' => 10341,
                'product_id' => 1131,
                'type' => 'string',
                'key' => 'meta_enable_reviews',
                'value' => '1',
            ),
            237 => 
            array (
                'id' => 10342,
                'product_id' => 1131,
                'type' => 'array',
                'key' => 'meta_seo',
                'value' => '{"title":"Pellentesque in ipsum id orci porta dapibus.","description":"Pellentesque in ipsum id orci porta dapibus. Sed porttitor lectus nibh. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem."}',
            ),
            238 => 
            array (
                'id' => 10343,
                'product_id' => 1131,
                'type' => 'array',
                'key' => 'meta_video_files',
                'value' => '[]',
            ),
            239 => 
            array (
                'id' => 10344,
                'product_id' => 1131,
                'type' => 'array',
                'key' => 'meta_image',
                'value' => '["20221120/abc930448a9f08de458b70e58e9f894e.jpg","20221120/13d2c440f58a73a30cb67b19202a83e2.jpg","20221116/0b04fa1b12a727e75c0309c5d13983f2.jpg"]',
            ),
            240 => 
            array (
                'id' => 10345,
                'product_id' => 1131,
                'type' => 'array',
                'key' => 'meta_video_url',
                'value' => '[]',
            ),
            241 => 
            array (
                'id' => 10373,
                'product_id' => 1131,
                'type' => 'array',
                'key' => 'meta_grouped_products',
                'value' => '["1199","1188","1162"]',
            ),
            242 => 
            array (
                'id' => 10403,
                'product_id' => 1132,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            243 => 
            array (
                'id' => 10404,
                'product_id' => 1132,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            244 => 
            array (
                'id' => 10405,
                'product_id' => 1132,
                'type' => 'array',
                'key' => 'meta_external_product',
                'value' => '{"url":"","text":""}',
            ),
            245 => 
            array (
                'id' => 10406,
                'product_id' => 1132,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            246 => 
            array (
                'id' => 10407,
                'product_id' => 1132,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            247 => 
            array (
                'id' => 10408,
                'product_id' => 1132,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            248 => 
            array (
                'id' => 10409,
                'product_id' => 1132,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => '',
            ),
            249 => 
            array (
                'id' => 10410,
                'product_id' => 1132,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            250 => 
            array (
                'id' => 10411,
                'product_id' => 1132,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '',
            ),
            251 => 
            array (
                'id' => 10412,
                'product_id' => 1132,
                'type' => 'string',
                'key' => 'meta_hide_stock',
                'value' => '0',
            ),
            252 => 
            array (
                'id' => 10413,
                'product_id' => 1132,
                'type' => 'string',
                'key' => 'meta_stock_status',
                'value' => 'In Stock',
            ),
            253 => 
            array (
                'id' => 10414,
                'product_id' => 1132,
                'type' => 'string',
                'key' => 'meta_individual_sale',
                'value' => '0',
            ),
            254 => 
            array (
                'id' => 10415,
                'product_id' => 1132,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => '',
            ),
            255 => 
            array (
                'id' => 10416,
                'product_id' => 1132,
                'type' => 'string',
                'key' => 'meta_cash_on_delivery',
                'value' => '0',
            ),
            256 => 
            array (
                'id' => 10417,
                'product_id' => 1132,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            257 => 
            array (
                'id' => 10418,
                'product_id' => 1132,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            258 => 
            array (
                'id' => 10419,
                'product_id' => 1132,
                'type' => 'string',
                'key' => 'meta_warranty_type',
                'value' => 'No Warranty',
            ),
            259 => 
            array (
                'id' => 10420,
                'product_id' => 1132,
                'type' => 'string',
                'key' => 'meta_warranty_period',
                'value' => '',
            ),
            260 => 
            array (
                'id' => 10421,
                'product_id' => 1132,
                'type' => 'string',
                'key' => 'meta_warranty_policy',
                'value' => '',
            ),
            261 => 
            array (
                'id' => 10422,
                'product_id' => 1132,
                'type' => 'string',
                'key' => 'meta_purchase_note',
                'value' => '',
            ),
            262 => 
            array (
                'id' => 10423,
                'product_id' => 1132,
                'type' => 'string',
                'key' => 'meta_estimated_delivery',
                'value' => '',
            ),
            263 => 
            array (
                'id' => 10424,
                'product_id' => 1132,
                'type' => 'string',
                'key' => 'meta_enable_reviews',
                'value' => '1',
            ),
            264 => 
            array (
                'id' => 10425,
                'product_id' => 1132,
                'type' => 'array',
                'key' => 'meta_seo',
                'value' => '{"title":"Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.","description":"Sed porttitor lectus nibh. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus."}',
            ),
            265 => 
            array (
                'id' => 10426,
                'product_id' => 1132,
                'type' => 'array',
                'key' => 'meta_video_files',
                'value' => '[]',
            ),
            266 => 
            array (
                'id' => 10427,
                'product_id' => 1132,
                'type' => 'array',
                'key' => 'meta_image',
                'value' => '["20221116/b03197acfd099238ac63580fba9b70b7.jpg","20221116/0e961d96e26709c29fc191b4c3298584.jpg","20221116/be6e9408affa6ce6a6da8a19c99a92aa.jpg"]',
            ),
            267 => 
            array (
                'id' => 10428,
                'product_id' => 1132,
                'type' => 'array',
                'key' => 'meta_video_url',
                'value' => '[]',
            ),
            268 => 
            array (
                'id' => 10430,
                'product_id' => 1132,
                'type' => 'array',
                'key' => 'meta_grouped_products',
                'value' => '["1156","1150","1178"]',
            ),
            269 => 
            array (
                'id' => 10460,
                'product_id' => 1133,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            270 => 
            array (
                'id' => 10461,
                'product_id' => 1133,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            271 => 
            array (
                'id' => 10462,
                'product_id' => 1133,
                'type' => 'array',
                'key' => 'meta_external_product',
                'value' => '{"url":"","text":""}',
            ),
            272 => 
            array (
                'id' => 10463,
                'product_id' => 1133,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            273 => 
            array (
                'id' => 10464,
                'product_id' => 1133,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            274 => 
            array (
                'id' => 10465,
                'product_id' => 1133,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            275 => 
            array (
                'id' => 10466,
                'product_id' => 1133,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => '',
            ),
            276 => 
            array (
                'id' => 10467,
                'product_id' => 1133,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            277 => 
            array (
                'id' => 10468,
                'product_id' => 1133,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '',
            ),
            278 => 
            array (
                'id' => 10469,
                'product_id' => 1133,
                'type' => 'string',
                'key' => 'meta_hide_stock',
                'value' => '0',
            ),
            279 => 
            array (
                'id' => 10470,
                'product_id' => 1133,
                'type' => 'string',
                'key' => 'meta_stock_status',
                'value' => 'In Stock',
            ),
            280 => 
            array (
                'id' => 10471,
                'product_id' => 1133,
                'type' => 'string',
                'key' => 'meta_individual_sale',
                'value' => '0',
            ),
            281 => 
            array (
                'id' => 10472,
                'product_id' => 1133,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => '',
            ),
            282 => 
            array (
                'id' => 10473,
                'product_id' => 1133,
                'type' => 'string',
                'key' => 'meta_cash_on_delivery',
                'value' => '0',
            ),
            283 => 
            array (
                'id' => 10474,
                'product_id' => 1133,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            284 => 
            array (
                'id' => 10475,
                'product_id' => 1133,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            285 => 
            array (
                'id' => 10476,
                'product_id' => 1133,
                'type' => 'string',
                'key' => 'meta_warranty_type',
                'value' => 'No Warranty',
            ),
            286 => 
            array (
                'id' => 10477,
                'product_id' => 1133,
                'type' => 'string',
                'key' => 'meta_warranty_period',
                'value' => '',
            ),
            287 => 
            array (
                'id' => 10478,
                'product_id' => 1133,
                'type' => 'string',
                'key' => 'meta_warranty_policy',
                'value' => '',
            ),
            288 => 
            array (
                'id' => 10479,
                'product_id' => 1133,
                'type' => 'string',
                'key' => 'meta_purchase_note',
                'value' => '',
            ),
            289 => 
            array (
                'id' => 10480,
                'product_id' => 1133,
                'type' => 'string',
                'key' => 'meta_estimated_delivery',
                'value' => '',
            ),
            290 => 
            array (
                'id' => 10481,
                'product_id' => 1133,
                'type' => 'string',
                'key' => 'meta_enable_reviews',
                'value' => '1',
            ),
            291 => 
            array (
                'id' => 10482,
                'product_id' => 1133,
                'type' => 'array',
                'key' => 'meta_seo',
                'value' => '{"title":"Nulla porttitor accumsan tincidunt.","description":"Donec sollicitudin molestie malesuada. Proin eget tortor risus. Pellentesque in ipsum id orci porta dapibus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula."}',
            ),
            292 => 
            array (
                'id' => 10483,
                'product_id' => 1133,
                'type' => 'array',
                'key' => 'meta_video_files',
                'value' => '[]',
            ),
            293 => 
            array (
                'id' => 10484,
                'product_id' => 1133,
                'type' => 'array',
                'key' => 'meta_image',
                'value' => '["20221116/79e421bbcb090394f511aa53c47bd6b7.jpg","20221116/8e4f7f9cffd21f3f267147d2cf3e79b1.jpg","20221116/b290bcbc6a0e890c72bc97bcff37c302.jpg"]',
            ),
            294 => 
            array (
                'id' => 10485,
                'product_id' => 1133,
                'type' => 'array',
                'key' => 'meta_video_url',
                'value' => '["https:\\/\\/player.vimeo.com\\/video\\/330420305?h=0c269f7e82&color=f7f7f7&title=0&byline=0&portrait=0"]',
            ),
            295 => 
            array (
                'id' => 10487,
                'product_id' => 1133,
                'type' => 'array',
                'key' => 'meta_grouped_products',
                'value' => '["1186","1183","1182"]',
            ),
            296 => 
            array (
                'id' => 10488,
                'product_id' => 1134,
                'type' => 'string',
                'key' => 'meta_virtual',
                'value' => '0',
            ),
            297 => 
            array (
                'id' => 10489,
                'product_id' => 1134,
                'type' => 'string',
                'key' => 'meta_downloadable',
                'value' => '0',
            ),
            298 => 
            array (
                'id' => 10490,
                'product_id' => 1134,
                'type' => 'array',
                'key' => 'meta_external_product',
                'value' => '{"url":"","text":""}',
            ),
            299 => 
            array (
                'id' => 10491,
                'product_id' => 1134,
                'type' => 'array',
                'key' => 'meta_downloadable_files',
                'value' => '[]',
            ),
            300 => 
            array (
                'id' => 10492,
                'product_id' => 1134,
                'type' => 'string',
                'key' => 'meta_download_limit',
                'value' => '',
            ),
            301 => 
            array (
                'id' => 10493,
                'product_id' => 1134,
                'type' => 'string',
                'key' => 'meta_download_expiry',
                'value' => '',
            ),
            302 => 
            array (
                'id' => 10494,
                'product_id' => 1134,
                'type' => 'string',
                'key' => 'meta_tax_classes',
                'value' => '',
            ),
            303 => 
            array (
                'id' => 10495,
                'product_id' => 1134,
                'type' => 'string',
                'key' => 'meta_backorder',
                'value' => '0',
            ),
            304 => 
            array (
                'id' => 10496,
                'product_id' => 1134,
                'type' => 'string',
                'key' => 'meta_stock_threshold',
                'value' => '',
            ),
            305 => 
            array (
                'id' => 10497,
                'product_id' => 1134,
                'type' => 'string',
                'key' => 'meta_hide_stock',
                'value' => '0',
            ),
            306 => 
            array (
                'id' => 10498,
                'product_id' => 1134,
                'type' => 'string',
                'key' => 'meta_stock_status',
                'value' => 'In Stock',
            ),
            307 => 
            array (
                'id' => 10499,
                'product_id' => 1134,
                'type' => 'string',
                'key' => 'meta_individual_sale',
                'value' => '0',
            ),
            308 => 
            array (
                'id' => 10500,
                'product_id' => 1134,
                'type' => 'string',
                'key' => 'meta_shipping_id',
                'value' => '',
            ),
            309 => 
            array (
                'id' => 10501,
                'product_id' => 1134,
                'type' => 'string',
                'key' => 'meta_cash_on_delivery',
                'value' => '0',
            ),
            310 => 
            array (
                'id' => 10502,
                'product_id' => 1134,
                'type' => 'string',
                'key' => 'meta_weight',
                'value' => '',
            ),
            311 => 
            array (
                'id' => 10503,
                'product_id' => 1134,
                'type' => 'array',
                'key' => 'meta_dimension',
                'value' => '{"length":"","width":"","height":""}',
            ),
            312 => 
            array (
                'id' => 10504,
                'product_id' => 1134,
                'type' => 'string',
                'key' => 'meta_warranty_type',
                'value' => 'No Warranty',
            ),
            313 => 
            array (
                'id' => 10505,
                'product_id' => 1134,
                'type' => 'string',
                'key' => 'meta_warranty_period',
                'value' => '',
            ),
            314 => 
            array (
                'id' => 10506,
                'product_id' => 1134,
                'type' => 'string',
                'key' => 'meta_warranty_policy',
                'value' => '',
            ),
            315 => 
            array (
                'id' => 10507,
                'product_id' => 1134,
                'type' => 'string',
                'key' => 'meta_purchase_note',
                'value' => '',
            ),
            316 => 
            array (
                'id' => 10508,
                'product_id' => 1134,
                'type' => 'string',
                'key' => 'meta_estimated_delivery',
                'value' => '',
            ),
            317 => 
            array (
                'id' => 10509,
                'product_id' => 1134,
                'type' => 'string',
                'key' => 'meta_enable_reviews',
                'value' => '1',
            ),
            318 => 
            array (
                'id' => 10510,
                'product_id' => 1134,
                'type' => 'array',
                'key' => 'meta_seo',
                'value' => '{"title":"Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.","description":"Cras ultricies ligula sed magna dictum porta. Nulla porttitor accumsan tincidunt. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Cras ultricies ligula sed magna dictum porta. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a."}',
            ),
            319 => 
            array (
                'id' => 10511,
                'product_id' => 1134,
                'type' => 'array',
                'key' => 'meta_video_files',
                'value' => '[]',
            ),
            320 => 
            array (
                'id' => 10512,
                'product_id' => 1134,
                'type' => 'array',
                'key' => 'meta_image',
                'value' => '["20221116/c06f58d02e8f56491a84a3467fc7d2d5.png","20221116/d4f97b603be255fe3854e3b7d7980c47.jpg","20221116/1f6a7f963c45fdf2697c4395d2d987ee.png","20221116/0b02718dd8afafb4da8edef07ac833db.PNG","20221116/62c02178575b62bc052e3e04faed7b7a.png"]',
            ),
            321 => 
            array (
                'id' => 10513,
                'product_id' => 1134,
                'type' => 'array',
                'key' => 'meta_video_url',
                'value' => '[]',
            ),
            322 => 
            array (
                'id' => 10514,
                'product_id' => 1134,
                'type' => 'array',
                'key' => 'meta_grouped_products',
                'value' => '["1147","1144","1146"]',
            ),
        ));
        
        
    }
}
<?php

namespace Modules\Popup\Database\Seeders;

use Illuminate\Database\Seeder;

class PopupsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {

        \DB::table('popups')->delete();

        \DB::table('popups')->insert(array (
            0 =>
            array (
                'id' => 14,
                'name' => 'Subscribe',
                'type' => 'Subscribed',
                'show_time' => 20,
                'page_link' => 'Product Details',
                'login_enabled' => 0,
                'show_again' => NULL,
                'param' => '{"background":"Image","position":"Center","width":"600","height":"400","popup_bg_color":"#000000","text":{"text1":{"text":"Hoichoi","text_color":"#ffffff","text_size":"36","text_margin_left":"30","text_margin_top":"40","text_font_weight":"bold","text_margin_right":null,"text_margin_bottom":null,"text_alignment":"left"},"text2":{"text":"Annual subscription","text_color":"#dedede","text_size":"28","text_margin_left":"30","text_margin_top":"1","text_font_weight":"normal","text_margin_right":null,"text_margin_bottom":null,"text_alignment":"left"},"text3":{"text":"Flat 25% OFF","text_color":"#ffffff","text_size":"40","text_margin_left":"30","text_margin_top":"10","text_font_weight":"bold","text_margin_right":null,"text_margin_bottom":null,"text_alignment":"left"},"text4":{"text":"On Bengali movies and original web series","text_color":"#e0dcdc","text_size":"16","text_margin_left":"30","text_margin_top":"10","text_font_weight":"bold","text_margin_right":null,"text_margin_bottom":null,"text_alignment":"left"}},"subscription_email_placeholder":"Enter your email","subscription_button_name":"Send","subscription_button_text_color":"#ffffff","subscription_button_bg_color":"#008ebd","subscription_button_hover_text_color":"#000000","subscription_button_hover_bg_color":"#ffffff","subscription_button_margin_left":"30","subscription_margin_top":"40","subscription_margin_right":null,"subscription_margin_bottom":null}',
                'start_date' => '2022-07-27',
                'end_date' => '2022-07-30',
                'status' => 'Active',
            ),
            1 =>
            array (
                'id' => 15,
                'name' => 'Email',
                'type' => 'Send mail',
                'show_time' => 30,
                'page_link' => 'Cart',
                'login_enabled' => 0,
                'show_again' => NULL,
                'param' => '{"background":"Color","position":"Center","width":"500","height":"350","popup_bg_color":"#cfcfcf","text":{"text1":{"text":"Get summer ready","text_color":"#000000","text_size":"30","text_margin_left":null,"text_margin_top":"10","text_font_weight":"bold","text_margin_right":null,"text_margin_bottom":null,"text_alignment":"center"},"text2":{"text":"with","text_color":"#2e2d2d","text_size":"18","text_margin_left":null,"text_margin_top":null,"text_font_weight":"normal","text_margin_right":null,"text_margin_bottom":null,"text_alignment":"center"},"text3":{"text":"60%","text_color":"#067cc6","text_size":"50","text_margin_left":null,"text_margin_top":"10","text_font_weight":"italic","text_margin_right":null,"text_margin_bottom":null,"text_alignment":"center"},"text4":{"text":"OFF","text_color":"#1b4de4","text_size":"40","text_margin_left":null,"text_margin_top":null,"text_font_weight":"bold","text_margin_right":null,"text_margin_bottom":null,"text_alignment":"center"},"text5":{"text":null,"text_color":"#000000","text_size":null,"text_margin_left":null,"text_margin_top":null,"text_font_weight":"normal","text_margin_right":null,"text_margin_bottom":null,"text_alignment":"left"},"text6":{"text":"To get coupon code","text_color":"#000000","text_size":"26","text_margin_left":null,"text_margin_top":"10","text_font_weight":"bold","text_margin_right":null,"text_margin_bottom":null,"text_alignment":"center"}},"email_placeholder":"Enter your email","email_button_name":"SEND","email_button_text_color":"#f7f7f7","email_button_bg_color":"#291f1f","email_button_hover_text_color":"#000000","email_button_hover_bg_color":"#ffffff","email_button_margin_left":"60","email_margin_top":"10","email_margin_right":null,"email_margin_bottom":null,"email_content":"Here is your coupon code: HAPPYNEWYEAR"}',
                'start_date' => '2022-07-27',
                'end_date' => '2022-07-30',
                'status' => 'Active',
            ),
            2 =>
            array (
                'id' => 16,
                'name' => 'Page link',
                'type' => 'Another page link',
                'show_time' => 30,
                'page_link' => 'Confirm Order',
                'login_enabled' => 0,
                'show_again' => NULL,
                'param' => '{"background":"Image","position":"Center","width":"600","height":"400","popup_bg_color":"#000000","text":{"text1":{"text":null,"text_color":"#000000","text_size":null,"text_margin_left":null,"text_margin_top":null,"text_font_weight":"normal","text_margin_right":null,"text_margin_bottom":null,"text_alignment":"center"}},"button_title":"Catch This Offer","button_link":"https:\\/\\/www.google.com","button_text_color":"#ffffff","button_bg_color":"#0000ff","button_hover_text_color":"#000000","button_hover_bg_color":"#ffffff","button_margin_left":"230","button_margin_top":"300","button_margin_right":null,"button_margin_bottom":null}',
                'start_date' => '2022-07-27',
                'end_date' => '2022-07-29',
                'status' => 'Active',
            ),
            3 =>
            array (
                'id' => 17,
                'name' => 'Cookie 2',
                'type' => '',
                'show_time' => 33,
                'page_link' => 'Home',
                'login_enabled' => 0,
                'show_again' => NULL,
                'param' => '{"position":"Bottom Left","background":"Color","popup_bg_color":"#4b0202","width":"380","height":"200","text":{"text1":{"text":"Cookies.","text_color":"#ffffff","text_size":"32","text_font_weight":"bold","text_margin_left":"20","text_margin_top":"20","text_margin_right":null,"text_margin_bottom":null,"text_alignment":"left"},"text2":{"text":"By using this website, you automatically accept that we use cookies","text_color":"#ffffff","text_size":"18","text_font_weight":"normal","text_margin_left":"20","text_margin_top":null,"text_margin_right":null,"text_margin_bottom":null,"text_alignment":"left"}},"button_title":"Ok. I Understood","button_link":null,"button_text_color":"#ffffff","button_bg_color":"#0512c2","button_hover_text_color":"#000000","button_hover_bg_color":"#000000","button_margin_left":"20","button_margin_top":"20","button_margin_right":null,"button_margin_bottom":null}',
                'start_date' => '2022-07-27',
                'end_date' => '2022-07-30',
                'status' => 'Active',
            ),
        ));
    }
}

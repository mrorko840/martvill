<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BrandsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('brands')->delete();
        
        \DB::table('brands')->insert(array (
            0 => 
            array (
                'id' => 1,
                'vendor_id' => 1,
                'name' => 'Apple',
                'description' => 'These are the top brands of tablet computers – the best-selling tablet brands that make the best tablets but sometimes have premium prices.',
                'status' => 'Active',
            ),
            1 => 
            array (
                'id' => 2,
                'vendor_id' => 1,
                'name' => 'Samsung',
                'description' => 'A giant South Korean conglomerate that is involved in a vast range of manufacturing.',
                'status' => 'Active',
            ),
            2 => 
            array (
                'id' => 3,
                'vendor_id' => 1,
                'name' => 'Huawei',
                'description' => 'A giant Chinese company based in Shenzen that makes a wide range of telecommunications devices. It has 170,000 employees, a whopping 76,000 of which are in Research and Development.',
                'status' => 'Active',
            ),
            3 => 
            array (
                'id' => 4,
                'vendor_id' => 1,
                'name' => 'Whirlpool',
                'description' => 'According to Yale Appliance statistics, Whirlpool was determined to be the most reliable household appliance brand.',
                'status' => 'Active',
            ),
            4 => 
            array (
                'id' => 5,
                'vendor_id' => 1,
                'name' => 'LG Brand',
                'description' => 'If you’re mostly familiar with their electronics, you might not think of LG as an appliance manufacturer.',
                'status' => 'Active',
            ),
            5 => 
            array (
                'id' => 6,
                'vendor_id' => 1,
                'name' => 'Frigidaire',
                'description' => 'According to the community survey website Ranker, consumers have Frigidaire ranked as the best appliance brand by a wide margin.',
                'status' => 'Active',
            ),
            6 => 
            array (
                'id' => 7,
                'vendor_id' => 1,
                'name' => 'Reeses',
                'description' => NULL,
                'status' => 'Active',
            ),
            7 => 
            array (
                'id' => 8,
                'vendor_id' => 1,
                'name' => 'Realme',
                'description' => NULL,
                'status' => 'Active',
            ),
            8 => 
            array (
                'id' => 9,
                'vendor_id' => 1,
                'name' => 'HP Laptop',
                'description' => NULL,
                'status' => 'Active',
            ),
            9 => 
            array (
                'id' => 10,
                'vendor_id' => 1,
                'name' => 'Lever Ayush',
                'description' => 'Lever ayush is formulated with 5000 years of Ayurvedic wisdom to solve modern day beauty problems. We have carefully curated a range of beauty products made with recipes prescribed in the ancient Granthas to help solve your modern day beauty problems.',
                'status' => 'Active',
            ),
            10 => 
            array (
                'id' => 11,
                'vendor_id' => 1,
                'name' => 'Lux',
                'description' => 'Since 1925, Lux has been serving women who take pride and pleasure in their beauty. We offer them not just quality beauty soaps at an affordable price but also an unapologetic expression of beauty and femininity, built around pleasure and modern glamour.',
                'status' => 'Active',
            ),
            11 => 
            array (
                'id' => 12,
                'vendor_id' => 1,
                'name' => 'Veet',
                'description' => 'Veet, formerly called Neet and Immac, is a Canadian brand of chemical depilatory products manufactured by the British company Reckitt. Hair removal cream, gel, mousse, and wax products are produced under this brand, with differing variants being sold internationally.',
                'status' => 'Active',
            ),
            12 => 
            array (
                'id' => 13,
                'vendor_id' => 1,
                'name' => 'Umidigi',
            'description' => 'Umidigi (formerly known as UMI) is a Chinese smartphone manufacturer based in Shenzhen City that produces budget Android smartphones, smartwatches, and other mobile electronics.',
                'status' => 'Active',
            ),
            13 => 
            array (
                'id' => 14,
                'vendor_id' => 1,
                'name' => 'Aarong',
                'description' => 'Aarong is the top lifestyle retailer in Bangladesh operating under BRAC, a non-profit NGO. The word Aarong means ‘village fair’ and it was formed to uphold native culture, heritage, crafts and styles to empower rural artisans. Usually, they made a co-operative group, train up poor villagers especially women and collect their crafts to merchandise. Though the style and design are unique the price is a little bit higher.',
                'status' => 'Active',
            ),
            14 => 
            array (
                'id' => 15,
                'vendor_id' => 1,
                'name' => 'Cats Eye',
                'description' => 'Cats Eye is one of the leading fashion houses of Bangladesh. It is popular for unique and trendsetting fashion. It is the pioneer in design for men’s clothing in Bangladesh.',
                'status' => 'Active',
            ),
            15 => 
            array (
                'id' => 16,
                'vendor_id' => 1,
                'name' => 'Richman',
                'description' => 'It is popular for men’s wear. Lubnan Trade Consortium Ltd is the mother company of Richman. You will find various lifestyle products under Richman brand. “Committed to Quality” is our only success story, where we stand. Starting from Richman at Bashundhara City Shopping mall, fashion-forwarded formal & casual Menswear in addition makes us different in the market. Currently Lubnan Trade Consortium ltd. is making all kinds of ethnic wear, casual wear, formal wear, ladies wear & kids wear under brand name LUBNAN, RICHMAN & INFINITY.',
                'status' => 'Active',
            ),
            16 => 
            array (
                'id' => 17,
                'vendor_id' => 1,
                'name' => 'NogorPolli',
            'description' => 'NogorPolli (নগর পল্লী) is Apparel & Clothing store. Mostly focus high quality and unique design T-Shirt, Polo T-Shirt, Design & Formal Shirt, Panjabi, Sweater for Young & Fashionable products. NogorPolli (নগর পল্লী) Offers the best quality wholesale t-shirts with Free Shipping.',
                'status' => 'Active',
            ),
            17 => 
            array (
                'id' => 18,
                'vendor_id' => 1,
                'name' => 'Yellow',
                'description' => 'Yellow is a Bangladesh-based fashion brand and clothing retailer owned by Beximco. Yellow is the recent trends among young, so it is the trendiest fashion brand from Bangladesh, is mostly distinguished by its true international quality designs and fabrics. It is sister concern of Beximco.',
                'status' => 'Active',
            ),
            18 => 
            array (
                'id' => 19,
                'vendor_id' => 1,
                'name' => 'Ecstasy',
                'description' => 'Ecstasy is a famous Bangladeshi fashion house. Its dress is very popular among the youths for its modern design. As a result, Ecstasy has quickly become one of the nation’s largest fashion retailers.',
                'status' => 'Active',
            ),
            19 => 
            array (
                'id' => 20,
                'vendor_id' => 1,
                'name' => 'Freeland',
                'description' => 'Freeland came to the fashion scenario on 2003 in Bangladesh bringing a total new sense of design and style for the young generation. Freeland has the vision to set the benchmark of youth fashion that expresses freedom, joy and passion- with the innovative design ideas, use of colors and quality of elements. As a brand, Freeland already established itself as an emblem of youthful passion that resonated with the very spirit of Bangladeshi young generation that are making positive changes everywhere. The core brand messages Freeland conveys are Freedom, Change and Adventure. Official Fan Page for Freeland. Retail fashion chain stores across the country ‘Bangladesh’, promoting itself to be the most popular domestic brand.',
                'status' => 'Active',
            ),
            20 => 
            array (
                'id' => 21,
                'vendor_id' => 1,
                'name' => 'DorjiBari',
                'description' => 'Dorjibari is a renowned fashion house in Bangladesh. It has become one of the leading manufacturers & exporters high fashion apparel & accessories for Men, Women & Kids. All our plants leveraging on cutting-edge technology that holds to the highest quality parameters while also being environment friendly. To ensure quality & service first. We created fusion among east and western culture and set a new trend among teenager. We have such a diverse product and varieties to customers across age groups, occasions and styles.',
                'status' => 'Active',
            ),
            21 => 
            array (
                'id' => 22,
                'vendor_id' => 1,
                'name' => 'LeReve',
                'description' => 'Le Reve is fashion for everyone for every occasion. Synonymous with grace and effortless style, Le Reve offers value fashion for Men, Women, Kids. Le Reve presents a complete wardrobe of uniquely crafted Ethnic Wear, Casuals, Edgy Denims, & Accessories inspired from the most contemporary fashion trends across the globe in an exciting mix of silhouettes, colors & styles. Le Reve is part of REVE Tex Ltd, one of the members of REVE family. Le Reve is fashion for everyone for every occasion. Synonymous with grace and effortless style, Le Reve offers value fashion for Men, Women, & kids.',
                'status' => 'Active',
            ),
            22 => 
            array (
                'id' => 23,
                'vendor_id' => 1,
                'name' => 'KayKraft',
                'description' => 'Kay Kraft is a leading brand in the fashion industry of Bangladesh. It is a retailer and wholesaler of Bangladeshi Fashion Wear for Women, Men, and Kids. Kay Kraft is a retailer and wholesaler of fashion wear, fashion accessories, home textiles, handicraft and hand loom based products of Bangladesh. The initiative was primarily targeted to the young demography of Dhaka city and within a short span of time became popular among middle class young professionals and students.',
                'status' => 'Active',
            ),
            23 => 
            array (
                'id' => 24,
                'vendor_id' => 1,
                'name' => 'Anjan\'s',
                'description' => 'Anjan’s is a famous Bangladeshi fashion house. So, Anjan’s contribution is not only in the making fashion line rather has also arranged work arena among the poor village women. These prime causes Anjan’s clicked in the generals as well as fashionable customers. Besides male, female and babies garments Anjan’s making also home textiles and handicrafts that marketing run only on Anjan’s showrooms. In the line on Bangladesh fashion design Anjan’s wing reached over the mass peoples',
                'status' => 'Active',
            ),
            24 => 
            array (
                'id' => 25,
                'vendor_id' => 1,
                'name' => 'Rang',
                'description' => 'Rang is another top leading fashion house in Bangladesh. It is an exclusive fashion brand to patronize local hand-loom and handicraft industry. The word of rang means enlightens something by color. Their main motto is to make visible our traditional heritage by colorful painting on clothing. Rang has a keen interest to do an experiment by fabrics and colors while developing fashion products for consumers.',
                'status' => 'Active',
            ),
            25 => 
            array (
                'id' => 26,
                'vendor_id' => 1,
                'name' => 'Easy Fashion',
                'description' => 'These prime causes EASY’s clicked in the generals as well as fashionable customers. Besides young & fashionable products EASY’s making College & University Students based fashionable products that marketing run only on EASY’s showrooms. Most popular men fashion clothing in Easy fashion ltd Bangladesh. Popular fashion house in Bangladesh',
                'status' => 'Active',
            ),
            26 => 
            array (
                'id' => 27,
                'vendor_id' => 1,
                'name' => 'SadaKalo',
                'description' => 'Sadakalo means black and white. Sadakalo brand established to deliver something special with the combination of two monochrome colors “Black and White”. Sadakalo has proved that aesthetic fashion wearer can be made with the help of only two colors. One is black and another is white. Their main motto is to produce fascinated fashion goods for consumers by matching black and white color. Sadakalo Is A Unique Clothing Brand',
                'status' => 'Active',
            ),
            27 => 
            array (
                'id' => 28,
                'vendor_id' => 1,
                'name' => 'TexMart',
                'description' => 'Texmart is one of the top fashion retail brand in Bangladesh. Fashionable clothing & accessories for style men, women & kid.',
                'status' => 'Active',
            ),
            28 => 
            array (
                'id' => 29,
                'vendor_id' => 1,
                'name' => 'Smartex',
                'description' => 'Fashion clothing for men, women and children. Comfortable, affordable, trendy designs make us the no.1 brand in Bangladesh. Like our page to stay updated on latest products and offers. Our mission is to spread fashion to all sectors of Banlgadesh at an affordable rate. Quality Clothes and impressive designs comparatively efficient production with the strength of Fast Retailing, we set our goal to become the number one fashion brand for clothing in Bangladesh. We have various products of various designs for various trends. Our main motto is to supply the best product to the people who needs the best in right price. Thus we regularly adds new products in our existing line to stay updated with the trends where we committed to give the best service to our customers through Quality.',
                'status' => 'Active',
            ),
            29 => 
            array (
                'id' => 30,
                'vendor_id' => 1,
                'name' => 'Trendz',
                'description' => 'TRENDZ started its voyage, keeping in mind the changing trends of the fashion industry. It is the store which puts the customers’ needs before its own and keeps pace with the buzzing fashion planet. It began its journey with the first outlet in Bashundhara City on 14th October, 2004. Its mother company is Babylon Group. Now TRENDZ have 8 outlets in Bangladesh. Wanna stand out? Well now you know where to go! With the most happening trends of today’s fashion world, edged up by our very own traditional style, Trendz collection is an absolute stunner!',
                'status' => 'Active',
            ),
            30 => 
            array (
                'id' => 31,
                'vendor_id' => 1,
                'name' => 'Sailor',
                'description' => 'Sailor is a lifestyle brand based in Bangladesh and a sister concern of Epyllion Group. Sailor will make the fashion enthusiastic more colourful for men & women. Fashionable men & women like sailor clothing.',
                'status' => 'Active',
            ),
            31 => 
            array (
                'id' => 32,
                'vendor_id' => 1,
                'name' => 'Xiaomi',
                'description' => 'The company largely sells its phones via flash sales in India. Xiaomi\'s latest mobile launch is the Redmi Note 11 Pro 5G.',
                'status' => 'Active',
            ),
            32 => 
            array (
                'id' => 33,
                'vendor_id' => 1,
                'name' => 'OPPO',
                'description' => 'OPPO, a mobile phone brand enjoyed by young people around the world, specializes in designing innovative mobile photography technology.',
                'status' => 'Active',
            ),
            33 => 
            array (
                'id' => 34,
                'vendor_id' => 1,
                'name' => 'Vivo',
                'description' => 'Headquartered in Dongguan, Vivo is a Chinese electronics brand founded by Shen Wei in 2009. Owned by BBK Electronics, Vivo designs and sells smartphones, software and phone accessories.',
                'status' => 'Active',
            ),
            34 => 
            array (
                'id' => 35,
                'vendor_id' => 1,
                'name' => 'Infinix',
                'description' => 'Infinix Mobile is a Hong Kong-based smartphone company founded in 2013 by Transsion Holdings.',
                'status' => 'Active',
            ),
            35 => 
            array (
                'id' => 36,
                'vendor_id' => 1,
                'name' => 'Motorola',
                'description' => 'Motorola Mobility LLC, marketed as Motorola, is an American consumer electronics and telecommunications company, and a subsidiary of Chinese multinational technology company Lenovo.',
                'status' => 'Active',
            ),
            36 => 
            array (
                'id' => 37,
                'vendor_id' => 1,
                'name' => 'Tecno',
                'description' => 'TECNO is a premium smartphone and AIoT devices brand from TRANSSION Holdings.',
                'status' => 'Active',
            ),
            37 => 
            array (
                'id' => 38,
                'vendor_id' => 1,
                'name' => 'Walton',
                'description' => NULL,
                'status' => 'Active',
            ),
            38 => 
            array (
                'id' => 39,
                'vendor_id' => 1,
                'name' => 'Nokia',
                'description' => 'Nokia Corporation is a Finnish multinational telecommunications, information technology, and consumer electronics company, founded in 1865. Nokia\'s main headquarters are in Espoo, Finland, in the greater Helsinki metropolitan area, but the company\'s actual roots are in the Tampere region of Pirkanmaa',
                'status' => 'Active',
            ),
            39 => 
            array (
                'id' => 40,
                'vendor_id' => NULL,
                'name' => 'Nike',
                'description' => 'It is a sports brand',
                'status' => 'Active',
            ),
            40 => 
            array (
                'id' => 41,
                'vendor_id' => NULL,
                'name' => 'Addidas',
                'description' => 'It is a sports brand',
                'status' => 'Active',
            ),
            41 => 
            array (
                'id' => 42,
                'vendor_id' => 1,
                'name' => 'Asus',
                'description' => 'ASUSTek Computer Inc. is a Taiwanese multinational computer and phone hardware and electronics company headquartered in Beitou District, Taipei, Taiwan.',
                'status' => 'Active',
            ),
            42 => 
            array (
                'id' => 43,
                'vendor_id' => 1,
                'name' => 'Dell',
                'description' => 'Dell is an American company that develops, sells, repairs, and supports computers and related products and services, and is owned by its parent company of Dell Technologies.',
                'status' => 'Active',
            ),
            43 => 
            array (
                'id' => 44,
                'vendor_id' => 1,
                'name' => 'Lenovo',
                'description' => 'Lenovo Group Limited, often shortened to Lenovo  is a Chinese multinational technology company specializing in designing, manufacturing, and marketing consumer electronics, personal computers, software, business solutions, and related services.',
                'status' => 'Active',
            ),
            44 => 
            array (
                'id' => 45,
                'vendor_id' => 1,
                'name' => 'Acer',
                'description' => 'Acer is a Taiwanese multinational company that is in the hardware and electronics business.',
                'status' => 'Active',
            ),
            45 => 
            array (
                'id' => 46,
                'vendor_id' => 1,
                'name' => 'Canon',
                'description' => 'Canon Inc is a Japanese multinational corporation headquartered in Ōta, Tokyo, Japan, specializing in optical, imaging, and industrial products.',
                'status' => 'Active',
            ),
            46 => 
            array (
                'id' => 47,
                'vendor_id' => 1,
                'name' => 'Fujifilm',
                'description' => 'FUJIFILM Corporation, trading as Fujifilm, or simply Fuji, is a Japanese multinational conglomerate headquartered in Tokyo, Japan, operating in the realms of photography, optics, office and medical electronics, biotechnology, and chemicals.',
                'status' => 'Active',
            ),
            47 => 
            array (
                'id' => 48,
                'vendor_id' => 1,
                'name' => 'Sony',
                'description' => 'Sony Group Corporation, commonly known as Sony and stylized as SONY, is a Japanese multinational conglomerate corporation headquartered in Kōnan, Minato, Tokyo, Japan',
                'status' => 'Active',
            ),
            48 => 
            array (
                'id' => 49,
                'vendor_id' => 1,
                'name' => 'SJCAM',
            'description' => 'SJCAM (HK) Limited and its sister company, Shenzhen HongFeng Century Technology Limited is a leading sports camera manufacturer based in Shenzhen, China and the sole owner of the SJCAMHD.com and SJCAM Trademarks.',
                'status' => 'Active',
            ),
            49 => 
            array (
                'id' => 50,
                'vendor_id' => NULL,
                'name' => 'Nima',
                'description' => 'Nima is a world class Japanese brand',
                'status' => 'Active',
            ),
        ));
        
        
    }
}
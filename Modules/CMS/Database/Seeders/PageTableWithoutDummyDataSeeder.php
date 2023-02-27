<?php

namespace Modules\CMS\Database\Seeders;

use Illuminate\Database\Seeder;

class PageTableWithoutDummyDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        \DB::table('pages')->delete();

        \DB::table('pages')->insert(array(
            0 =>
            array(
                'id' => 1,
                'name' => 'About',
                'slug' => 'about-us',
                'css' => '* { box-sizing: border-box; } body {margin: 0;}*{box-sizing:border-box;}body{margin:0;}.gjs-row{display:table;padding:10px;}.gjs-cell{width:8%;display:table-cell;height:75px;}#iz2a{color:black;}#iw9ry{padding:0 0 0 0;flex-wrap:nowrap;display:flex;}#itap3{width:62%;position:relative;height:auto;}#ixkh6{height:auto;flex-direction:column;flex-wrap:wrap;justify-content:center;width:38%;}#i673i{padding:0 0 0 0;display:block;}#iwp5o{display:flex;align-items:center;justify-content:center;width:100%;position:relative;flex-direction:column;height:auto;}#inm3k{padding:0 0 0 0;margin:0 0 0 0;}#icj1c{padding:10px;margin:10px 0 0 0;display:flex;}#i6tjd{margin:0 0 0 0;justify-content:center;}#i3zjj{border:1px solid rgba(0,0,0,0.2);transition:all 0.2s ease;width:25%;height:auto;}.bg-white{background-color:#ffffff;}#i9o82{padding:10px;}#iklic{color:black;width:50px;height:50px;}.flex.justify-content-center.flex-column{justify-content:center;}.flex.justify-content-center.align-items-center.flex-column{align-items:center;}#id88a{padding:10px;}#i3zjj:hover{box-shadow:0 0 0 0 black;}#ilqa9{color:black;width:50px;height:50px;}#i1bru{padding:10px;}#iml5s{padding:10px;}#is6a2{border:1px solid rgba(0,0,0,0.2);transition:all 0.2s ease;width:25%;height:auto;}#is6a2:hover{box-shadow:0 0 0 0 black;}#il22o{color:black;width:50px;height:50px;}#i9pgs{padding:10px;}#ixnr2{padding:10px;}#i1ztk{border:1px solid rgba(0,0,0,0.2);transition:all 0.2s ease;width:25%;height:auto;}#i1ztk:hover{box-shadow:0 0 0 0 black;}#ie2gr{color:black;width:50px;height:50px;}#isn2k{padding:10px;}#iy3as{padding:10px;}#ikoa1{border:1px solid rgba(0,0,0,0.2);transition:all 0.2s ease;width:25%;height:auto;}#ikoa1:hover{box-shadow:0 0 0 0 black;}#ind2f{color:#ff9c00;}#iwgo6{color:#ff9c00;}#ixys4{text-align:center;}.text-gray-12{color:#2c2c2c;}#id6ahw{padding:10px;}.border-t.border-gray-2{max-width:475px;}. xl\\:mt-7.text-gray-12.roboto-medium. xl\\:text-lg.leading-6.font-medium{max-width:538px;}.mt-5.text-gray-10.roboto-medium.font-medium. xl\\:text-sm.leading-6{max-width:535px;}.ml-4.lg\\:ml-4.xl\\:ml-32. xl\\:ml-64. xl\\:ml-92{display:flex;width:auto;}.ml-4.lg\\:ml-4.xl\\:ml-32. xl\\:ml-64. xl\\:ml-92.w-full{justify-content:flex-start;flex-wrap:wrap;}#i824ij{color:black;}#idahgs{color:black;}#ikxo83{color:black;}.h-50p.w-58p.object-contain.top-130p.left-103p{position:absolute;}. xl\\:top-263p.h-53p.w-58p.object-contain.right-28{position:absolute;}.w-50p.h-58p.object-contain.top-491p.left-225p{position:absolute;}.mt-84p.text-gray-12.roboto-bold.font-bold{font-size:18px;line-height:23px;}.w-1\\/2{border:0 solid #898989;}.w-1\\/2.text-15p.roboto-medium{font-weight:500;border:0 solid black;}.w-1\\/2.text-15.roboto-medium.text-gray-10. xl\\:px-16{line-height:25px;}#i2z8r6{display:flex;}.-mt-16{display:flex;}.bg-white.card-shadow.round-sm.px-4.flex.h-auto.justify-content-center.align-items-center.flex-column.gap-5.py-6{max-width:274px;width:274px;}#il43b{color:#898989;}.roboto-medium.font-medium. xl\\:text-sm.text-gray-10.leading-22p{padding:0 0 60px 0;color:#898989;}#ibur2{color:#898989;}.roboto-medium.font-medium. xl\\:text-sm.leading-22p{padding:0 0 60px 0;color:#898989;}#iw7vol{padding:10px;}#ib5fiv{color:#2c2c2c;line-height:38px;font-size:22px;font-weight:500;}.bg-gray-26{height:522px;}#i7ww12{padding:10px;color:#2c2c2c;}.text-base.leading-5.dm-sans{font-weight:500;}#i6w3eb{color:black;}#i94hy1{color:black;}#iaz1qr{color:black;}#ic2i2b{color:black;}#iniflh{color:black;}#ijkqti{color:black;}.flex{background-image:none;background-repeat:repeat;background-position:left top;background-attachment:scroll;background-size:auto;}#idtv9i{display:flex;justify-content:space-between;}#iqhvfb{background-repeat:no-repeat;background-position:center center;background-attachment:scroll;background-size:auto;}#i5drou{display:flex;width:55%;justify-content:space-between;}#io4pk6{color:black;max-width:50%;}#igkngu{color:black;margin:160px 0 0 0;}.h-5p.bg-yellow-1.-mt-3{width:156px;}#invpzq{width:45%;}.uppercase.dm-bold.font-bold{font-size:18px;font-weight:700;line-height:23px;}.uppercase.dm-bold.font-bold. xl\\:text-lg{color:#2c2c2c;}#ie080v{line-height:34px;}#i311aj{display:flex;}#ijtdjk{color:#ff9c00;font-weight:700;}.pl-1{color:#2c2c2c;font-weight:700;}#iiok04{color:#898989;}#ia5m3m{justify-content:space-between;}#i99ltn{color:#2c2c2c;}#iyxi{font-size:42px;}.dm-bold{font-size:26px;margin:15px 0 0 0;font-weight:700;}.dm-bold.uppercase{font-weight:700;}.md\\:justify-start.justify-center.flex{color:#2c2c2c;}#iu0yo8{color:#2c2c2c;}#idw021{color:#2c2c2c;}.h-5p.bg-yellow-1.-mt-3.mx-auto{width:112px;}#ionpuc{display:flex;justify-content:center;}#iwwa24{color:#ff9c00;}#ig9324{color:#2c2c2c;}.mx-auto.text-center{display:flex;justify-content:center;}. xl\\:text-lg.font-bold.dm-bold.text-gray-12.leading-22p{line-height:22px;font-size:18px;}.pr-1{color:#2c2c2c;}.flex.process-goto.relative.lg\\:mt-30p.md\\:mt-15p.mt-30p.text-base.px-50p.h-46p.justify-center.text-center.rounded-sm.items-center.bg-yellow-1.dm-bold.font-bold{font-size:16px;font-weight:700;line-height:21px;}#i1xb89{font-size:15px;line-height:25px;font-weight:500;color:#898989;}#iql38g{color:black;}#iq53hu{color:black;}#inu4as{color:black;}#iuhjgm{justify-content:center;}#ivtl94{justify-content:center;}#izke46{justify-content:center;}#i0caj1{color:black;height:191px;}#i94nnj{color:black;height:456px;}.mt-5.rounded-lg.mx-auto{height:456px;}.mx-4.lg\\:mx-4.xl\\:mx-32. xl\\:mx-64. xl\\:mx-92.text-center.mt-20{font-size:22px;line-height:29px;color:#2c2c2c;font-weight:500;}.mr-2{color:#2c2c2c;}.top-263p.h-53p.w-58p.object-contain.right-28{position:absolute;}#imtb59{width:131px;}.mt-48{width:45%;}@media (max-width: 768px){.gjs-cell{width:100%;display:block;}}',
                'description' => '<body id="if3o"><div id="iw9ry" class="gjs-row ml-4 lg:ml-4 xl:ml-32 2xl:ml-64 3xl:ml-92"><div id="ixkh6" class="gjs-cell"><div id="i4wkol"><nav aria-label="Breadcrumb" id="imem" class="text-gray-600 3xl:text-sm mb-3-5 mt-50p"><ol class="list-none p-0 flex flex-wrap md:inline-flex text-xs md:text-sm roboto-medium font-medium text-gray-10 leading-5"><li class="flex items-center"><svg width="13" height="15" viewBox="0 0 13 15" fill="none" xmlns="http://www.w3.org/2000/svg" class="-mt-1 mr-2"><path fill-rule="evenodd" clip-rule="evenodd" d="M5.35643 1.89407C4.93608 2.1717 4.43485 2.59943 3.69438 3.23412L2.916 3.9013C2.0595 4.63545 1.82512 4.85827 1.69934 5.13174C1.57357 5.4052 1.55692 5.72817 1.55692 6.85625V10.1569C1.55692 10.9127 1.55857 11.4013 1.60698 11.7613C1.65237 12.099 1.72565 12.2048 1.7849 12.264C1.84416 12.3233 1.94997 12.3966 2.28759 12.442C2.64759 12.4904 3.13619 12.492 3.89206 12.492H8.56233C9.31819 12.492 9.80679 12.4904 10.1668 12.442C10.5044 12.3966 10.6102 12.3233 10.6695 12.264C10.7287 12.2048 10.802 12.099 10.8474 11.7613C10.8958 11.4013 10.8975 10.9127 10.8975 10.1569V6.85625C10.8975 5.72817 10.8808 5.4052 10.755 5.13174C10.6293 4.85827 10.3949 4.63545 9.53838 3.9013L8.76 3.23412C8.01953 2.59943 7.5183 2.1717 7.09795 1.89407C6.69581 1.62848 6.44872 1.55676 6.22719 1.55676C6.00566 1.55676 5.75857 1.62848 5.35643 1.89407ZM4.49849 0.595063C5.03749 0.239073 5.5849 0 6.22719 0C6.86948 0 7.41689 0.239073 7.95589 0.595063C8.4674 0.932894 9.04235 1.42573 9.7353 2.01972L10.5515 2.71933C10.5892 2.75162 10.6264 2.78347 10.6632 2.81492C11.3564 3.40806 11.8831 3.85873 12.1694 4.48124C12.4557 5.10375 12.4551 5.79693 12.4543 6.70926C12.4543 6.75764 12.4542 6.80662 12.4542 6.85625L12.4542 10.2081C12.4543 10.8981 12.4543 11.4927 12.3903 11.9688C12.3217 12.479 12.167 12.9681 11.7703 13.3648C11.3736 13.7615 10.8845 13.9162 10.3742 13.9848C9.89812 14.0488 9.30358 14.0488 8.61355 14.0488H3.84083C3.1508 14.0488 2.55626 14.0488 2.08015 13.9848C1.56991 13.9162 1.08082 13.7615 0.68411 13.3648C0.2874 12.9681 0.132701 12.479 0.064101 11.9688C9.07021e-05 11.4927 0.000124017 10.8981 0.000162803 10.2081L0.000164659 6.85625C0.000164659 6.80662 0.000122439 6.75763 8.07765e-05 6.70926C-0.000705247 5.79693 -0.00130245 5.10374 0.285011 4.48124C0.571324 3.85873 1.09802 3.40806 1.79122 2.81492C1.82798 2.78347 1.8652 2.75162 1.90288 2.71933L2.68126 2.05215C2.69391 2.0413 2.70652 2.03049 2.71909 2.01972C3.41204 1.42573 3.98698 0.932893 4.49849 0.595063Z" fill="#898989"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M3.50293 9.37853C3.50293 8.51876 4.19991 7.82178 5.05969 7.82178H7.39482C8.25459 7.82178 8.95158 8.51876 8.95158 9.37853V13.2704C8.95158 13.7003 8.60309 14.0488 8.1732 14.0488C7.74331 14.0488 7.39482 13.7003 7.39482 13.2704V9.37853H5.05969V13.2704C5.05969 13.7003 4.71119 14.0488 4.28131 14.0488C3.85142 14.0488 3.50293 13.7003 3.50293 13.2704V9.37853Z" fill="#898989"></path></svg><a href="javascript:void(0)">Home</a><p class="px-4">/
                </p></li><li class="flex items-center text-gray-12"><a href="javascript:void(0)">About Us</a></li></ol></nav></div><p id="iyxi" class="dm-bold uppercase"><span id="i70fog" class="text-gray-12">About </span><span id="ind2f">MARTVILL</span></p><section class="bdg-sect"><p id="idw3s" class="text-gray-12 dm-regular font-normal 3xl:text-lg pl-5p pb-6 text-sm">A revolution in the e-commerce industry since 2022.<br/>
                The best online shopping experience.</p><div id="id6ahw" class="border-t border-gray-2"></div><p id="iy3h" class="3xl:mt-7 text-gray-12 roboto-medium 3xl:text-lg leading-6 font-medium text-sm mt-3">Martvill Multivendor E-Commerce gives you a chance to quickly and easily find the product you want and have it delivered to your home in no time, wherever you are, giving you the best online shopping experience.</p><p id="in4jra" class="mt-5 text-gray-10 roboto-medium font-medium 3xl:text-sm leading-6 text-xs"><br/>
                Collective experience of our team members and the years we have spent in the business allowed us to develop a vast network of suppliers, ensuring that our customers will always find what they are looking for. This also means that we are<br/>
                able to offer great prices, which are constantly being up-dated and follow the<br/>
                shifts in the market.<br/><br/>
                Our affordability, fast and reliable delivery and the fact that you will always be able to find the product that you are looking for in our offer, have made us stand out in the market, but they are simply symptoms of our dedication to what we we are doing<br/>
                and our desire to constantly keep improving.<br/></p></section><section class="bdg-sect"></section></div><div id="itap3" class="gjs-cell"><img id="iz2a" src="../public/uploads/20221023/dd326c71b2a82a9648147e04807b91d9.jpg" class="w-full 3xl:h-690p object-contain h-auto mt-1p"/><img id="idahgs" src="../public/uploads/20221023/b044a39009ee314f1acff53343429022.png" class="h-50p w-58p object-contain top-130p left-103p"/><img id="ikxo83" src="../public/uploads/20221023/1f0fb1ee921c463d4757efbc8dd98a69.png" class="h-53p w-58p object-contain right-28 top-263p"/><img id="i824ij" src="../public/uploads/20221023/68f648ec43d5a9e5002cf8b72ee9f0dc.png" class="w-50p h-58p object-contain top-491p left-225p"/></div></div><div id="i673i" class="gjs-row"><div id="iwp5o" class="gjs-cell"><div id="inm3k"><p id="i7tr5" class="mt-84p text-gray-12 roboto-bold font-bold">OUR SPECIALITIES</p><div id="iqiow2" class="h-5p bg-yellow-1 -mt-3"></div></div><div id="icj1c" class="dm-bold uppercase text-2xl"><p id="ia42l">REASONS YOU SHOULD SHOP FROM</p><span id="iwgo6" class="pl-1">MARTVILL</span></div><p id="ixys4" class="w-1/2 text-15 roboto-medium text-gray-10 3xl:px-16 mb-125p">Collective experience of our team members and the years we have spent in the business allowed us to develop a vast network of suppliers, ensuring that our customers will always find what they are looking for.</p><div id="i6tjd" class="gjs-row bg-gray-26"><div id="i2z8r6" class="-mt-16 space-x-5 mx-4 lg:mx-4 xl:mx-32 2xl:mx-64 3xl:mx-92"><div id="i3zjj" class="gjs-cell rounded-lg bg-white"><img id="iklic" src="../public/uploads/20221023/e89eb4b2bbcdd836c8ad8652b66007ad.png" class="m-auto mt-10"/><div id="i9o82" class="text-center mt-6"><p id="i0kgl" class="dm-bold font-bold 3xl:text-lg leading-22p text-gray-12 text-base">Over 1+ Million<br/>
                Regular Customers</p></div><div id="id88a" class="text-center"><p id="il43b" class="roboto-medium font-medium 3xl:text-sm leading-22p text-xs">We have thousands of orders daily from all around the world</p></div></div><div id="ikoa1" class="gjs-cell rounded-lg bg-white"><img src="../public/uploads/20221023/e6e4462aa3fe59341ab24cfd2b27138c.png" id="ie2gr" class="m-auto mt-10"/><div id="isn2k" class="text-center mt-6"><p id="isgwy" class="3xl:text-lg font-bold text-gray-12 leading-22p dm-bold text-base">Regulars<br/>
                Offers &amp; Discounts</p></div><div id="iy3as" class="text-center"><p id="izoka" class="roboto-medium font-medium 3xl:text-sm leading-22p text-xs">We are in collaboration with among<br/>
                the finest brands all around the world</p></div></div><div id="i1ztk" class="gjs-cell rounded-lg bg-white"><img src="../public/uploads/20221023/3e57b0ba98149f2efad21559619dd907.png" id="il22o" class="m-auto mt-10"/><div id="i9pgs" class="text-center mt-6"><p id="ikyyz" class="3xl:text-lg font-bold dm-bold text-gray-12 leading-22p text-base">International<br/>
                Brands</p></div><div id="ixnr2" class="text-center"><p id="ibur2" class="roboto-medium font-medium 3xl:text-sm leading-22p text-xs">Our tools are designed based on the best e-commerce experience for both sellers and customers.</p></div></div><div id="is6a2" class="gjs-cell rounded-lg bg-white"><img src="../public/uploads/20221023/08099ace02ba37e041fd6ee2d80fedbd.png" id="ilqa9" class="m-auto mt-10"/><div id="i1bru" class="text-center mt-6"><p id="ik4en" class="dm-bold font-bold 3xl:text-lg leading-22p text-gray-12 text-base">Worldwide<br/>
                Free Shipping</p></div><div id="iml5s" class="text-center"><p id="irmpib" class="roboto-medium font-medium 3xl:text-sm leading-22p text-xs">You receive your product on time regarless of your location.<br/>
                Conditions applied.</p></div></div></div><div id="izjri8" class="3xl:mx-92 2xl:mx-64 xl:mx-32 lg:mx-4 mx-4"><div id="iw7vol" class="text-center"><p id="ib5fiv" class="dm-sans mt-24">A team of highly dedicated professionals giving you the<br/>
                best online shopping experience</p><div id="i7ww12" class="text-base leading-5 dm-sans"><p id="ix18h6">Check out the video below to learn more</p></div></div></div><div id="isnb9s"></div></div></div></div><section id="ia0rix" class="text-gray-600 body-font"><div id="iapri2" class="grid grid-cols-6 3xl:mx-92 2xl:mx-64 xl:mx-32 mx-4 mt-24"><img id="iaz1qr" src="../public/uploads/20221107/3fa5a5377a6b9e29cefd1d4b98c5d4ac.png" class="m-auto"/><img id="ijkqti" src="../public/uploads/20221107/5888c7a26a62ee10fe84b84c71040be2.png" class="m-auto"/><img id="iniflh" src="../public/uploads/20221107/098e77ff7f3c2e30744173339bc59f79.png" class="m-auto"/><img id="i94hy1" src="../public/uploads/20221107/2fee49fc8d7015087033817ba0e8652a.png" class="m-auto"/><img id="ic2i2b" src="../public/uploads/20221107/f690d3b6a6d4ff3132ea63bbec084576.png" class="m-auto"/><img id="i6w3eb" src="../public/uploads/20221107/61c22bf29805ead0515ee9f3a25fe423.png" class="m-auto"/></div><div id="iqhvfb" class="mx-4 lg:mx-4 xl:mx-32 2xl:mx-64 3xl:mx-92"><div id="idtv9i"><div id="invpzq" class="mt-48"><div id="idl5un" class="dm-bold font-bold uppercase mt-40"><p id="i99ltn">Join us today</p></div><div id="imtb59" class="h-5p bg-yellow-1 -mt-3"></div><div id="ie080v" class="dm-sans mt-4 3xl:text-2xl"><p id="idw021" class="3xl:text-26 text-xl dm-sans font-medium-">TRUSTED BY MILLIONS  FROM</p></div><div id="i311aj" class="3xl:text-40 3xl:leading-52p text-3xl"><div id="ijtdjk"><p id="if8zxw">ALL AROUND</p></div><div id="icrus1" class="pl-1"><p id="iilwha">THE WORLD!</p></div></div><div id="iiok04" class="roboto-medium 3xl:text-base mt-4 font-medium text-xs"><p id="ivre0f">Our dedicated team works with among the best courier services in the world making sure your product is delivered safe and on time.</p></div><div id="iuhb5m"><div id="i5drpk" class="md:justify-start justify-center flex"><a href="#" class="flex process-goto relative lg:mt-30p md:mt-15p mt-30p text-base px-50p h-46p justify-center text-center rounded-sm items-center bg-yellow-1 dm-bold font-bold"><span class="mr-2">Join Martvill</span><svg xmlns="http://www.w3.org/2000/svg" width="13" height="8" viewBox="0 0 13 8" fill="none" class="ml-2-5 relative"><path fill-rule="evenodd" clip-rule="evenodd" d="M8.92948 0L7.75346 1.20177L9.66016 3.15022H1.68894C1.22968 3.15022 0.857371 3.53068 0.857371 4C0.857371 4.46932 1.22968 4.84978 1.68894 4.84978H9.66016L7.75346 6.79823L8.92948 8L12.8438 4L8.92948 0Z" fill="#2C2C2C"></path></svg></a></div></div></div><div id="i5drou"><img id="igkngu" src="../public/uploads/20221108/ccb67e86dc5d6f19d397dc8f1267b572.png"/><img id="io4pk6" src="../public/uploads/20221108/3f73cb299d19c3c11f5f7d92595efab5.png" class="rounded-lg"/></div></div><div id="ia5m3m"></div></div><div id="ih6m9b" class="text-center mx-4 lg:mx-4 xl:mx-32 2xl:mx-64 3xl:mx-92"><div id="ilkobe" class="dm-bold font-bold uppercase mt-40"><p id="iu0yo8">WORLDWIDE</p></div><div id="iy51in" class="h-5p bg-yellow-1 -mt-3 mx-auto"></div><div id="ionpuc" class="dm-bold"><div id="ii8tnt" class="pr-1"><p>AROUND</p></div><div id="iwwa24"><p>MARTVILL</p><p> </p></div><div id="ig9324"><p>, WHAT MAKES US DIFFERENT</p></div></div><div id="i1xb89" class="roboto-medium px-24"><p id="iaujdi">We have been in the business for quite a while now, and in that time we have not only managed to make close relationships with numerous suppliers all over the world, but also recognized what people need. This means that we are always able to offer all the latest products, great prices, reliable service, fast service and premium customer support.</p></div><div id="iuhjgm" class="grid grid-cols-3 gap-5 mt-12"><img id="iql38g" src="../public/uploads/20221108/c986fe071b7e25f4b47f4f0baff8aace.png" class="mx-auto h-full"/><div id="ivtl94"><img id="iq53hu" src="../public/uploads/20221108/af797af08d0215d5bdc177a2daf2ec2e.png" class="mx-auto"/><img id="inu4as" src="../public/uploads/20221108/b3e1d94f80452656f64823e35f5f7195.png" class="mt-5 mx-auto"/></div><div id="izke46"><img id="i0caj1" src="../public/uploads/20221108/afa834353adb5b10a753ac2e749a2eca.png"/><img id="i94nnj" src="../public/uploads/20221108/cd8aeaddd2fd7721626e5c0a2edb942c.png" class="rounded-lg mt-5"/></div></div></div><p id="ia0rij" class="mx-4 lg:mx-4 xl:mx-32 2xl:mx-64 3xl:mx-92 text-center mt-20 dm-sans">Have any queries? Give us a shoutout or come visit us for a cup of coffee.</p><div class="justify-center flex mb-20 mt-3"><a href="#" class="flex process-goto relative lg:mt-30p md:mt-15p mt-30p text-base px-50p h-46p justify-center text-center rounded-sm items-center bg-yellow-1 dm-bold font-bold"><span class="mr-2">Get in Touch</span><svg xmlns="http://www.w3.org/2000/svg" width="13" height="8" viewBox="0 0 13 8" fill="none" class="ml-2-5 relative"><path fill-rule="evenodd" clip-rule="evenodd" d="M8.92948 0L7.75346 1.20177L9.66016 3.15022H1.68894C1.22968 3.15022 0.857371 3.53068 0.857371 4C0.857371 4.46932 1.22968 4.84978 1.68894 4.84978H9.66016L7.75346 6.79823L8.92948 8L12.8438 4L8.92948 0Z" fill="#2C2C2C"></path></svg></a></div></section></body>',
                'meta_title' => 'About us',
                'meta_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum dapibus venenatis turpis vel vulputate. Donec in lacinia arcu. Aenean sapien magna, eleifend at gravida in, luctus a quam.',
                'status' => 'Active',
                'type' => 'page',
                'layout' => 'default',
                'default' => 0,
            ),
            1 =>
            array(
                'id' => 2,
                'name' => 'Privacy Policy',
                'slug' => 'privacy-policy',
                'css' => '* { box-sizing: border-box; } body {margin: 0;}*{box-sizing:border-box;}body{margin:0;}.gjs-row{display:table;padding:10px;width:100%;}.gjs-cell{width:8%;display:table-cell;height:75px;}#i2kh{background-image:url(\'../public/uploads/20220831/4aa551e593f7e3c1c0bb63b626738eb2.png\');background-repeat:no-repeat;background-position:center center;background-attachment:scroll;background-size:cover;padding:100px 0 100px 0;background-color:rgba(168,168,168,0.68);}#i8zi{padding:0 0 0 0;color:#ffc000;text-align:center;font-size:36px;font-weight:700;}#ijw7{background-color:rgba(61,61,61,0.74);padding:30px 0 30px 0;}#ippp{padding:10px;text-align:center;color:#ffffff;}#ie4vj{padding:10px 10% 10px 10%;}#ikqgf{padding:10px;}#iped7{padding:10px;}@media (max-width: 768px){.gjs-cell{width:100%;display:block;}}',
                'description' => '<body><div id="i2kh" class="gjs-row"><div id="ijw7" class="gjs-cell"><div id="i8zi"><p>Privacy Policy</p></div><div id="ippp"><p>Last updated: October 24, 2022</p></div></div></div><div id="ie4vj" class="gjs-row"><div class="gjs-cell" id="igz6v"><div id="ikqgf"><p id="ibnry"></p></div><section class="bdg-sect"></section><div id="imrej"><ul class="list-disc"></ul></div><div id="iped7"><p><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000">Nulla quis lorem ut libero malesuada feugiat. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Vivamus suscipit tortor eget felis porttitor volutpat.</span></span></span></p>

                <p>&nbsp;</p>

                <p><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000">Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.</span></span></span><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000">Cras ultricies ligula sed magna dictum porta. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Sed porttitor lectus nibh.&nbsp;</span></span></span><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000">Donec rutrum congue leo eget malesuada. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Nulla porttitor accumsan tincidunt. Vivamus suscipit tortor eget felis porttitor volutpat.</span></span></span></p>

                <p>&nbsp;</p>

                <ul style="margin-left:40px">
                <li style="list-style-type:disc"><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000">Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</span></span></span></li>
                <li style="list-style-type:disc"><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000">Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</span></span></span></li>
                <li style="list-style-type:disc"><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000">Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.</span></span></span></li>
                <li style="list-style-type:disc"><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000">Pellentesque in ipsum id orci porta dapibus.</span></span></span></li>
                <li style="list-style-type:disc"><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000">Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.</span></span></span></li>
                </ul>

                <p>&nbsp;</p>

                <p><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000">Donec rutrum congue leo eget malesuada. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Nulla porttitor accumsan tincidunt. Vivamus suscipit tortor eget felis porttitor volutpat.</span></span></span></p>

                <p>&nbsp;</p>

                <ul style="margin-left:40px">
                <li style="list-style-type:disc"><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000">Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</span></span></span></li>
                <li style="list-style-type:disc"><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000">Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</span></span></span></li>
                <li style="list-style-type:disc"><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000">Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.</span></span></span></li>
                <li style="list-style-type:disc"><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000">Pellentesque in ipsum id orci porta dapibus.</span></span></span></li>
                <li style="list-style-type:disc"><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000">Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.</span></span></span></li>
                </ul>

                <p>&nbsp;</p>

                <p><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000">Sed porttitor lectus nibh. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim.</span></span></span><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000">Nulla quis lorem ut libero malesuada feugiat. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Vivamus suscipit tortor eget felis porttitor volutpat.</span></span></span></p>

                <p>&nbsp;</p>
                </div></div></div></body>',
                'meta_title' => 'Vestibulum dapibus venenatis turpis vel vulputate.',
                'meta_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum dapibus venenatis turpis vel vulputate. Donec in lacinia arcu. Aenean sapien magna, eleifend at gravida in, luctus a quam.',
                'status' => 'Active',
                'type' => 'page',
                'layout' => 'default',
                'default' => 0,
            ),
            2 =>
            array(
                'id' => 3,
                'name' => 'Refund Policy',
                'slug' => 'refund-policy',
                'css' => '* { box-sizing: border-box; } body {margin: 0;}.gjs-row{display:table;padding:10px;width:100%;}.gjs-cell{width:8%;display:table-cell;height:75px;}#ifbs{padding:10px;text-align:center;}#idhn{height:auto;width:100%;}#ik3p{padding:10px;margin:0 10% 0 10%;text-align:justify;}@media (max-width: 768px){.gjs-cell{width:100%;display:block;}}',
                'description' => '<body id="ie1f"><div class="gjs-row" id="il39"><div class="gjs-cell" id="iis9"><div id="ifbs"><h1><span style="font-size:60px">Refund policy</span></h1>

                <p>Welcome to the martvill marketplace</p>
                </div></div></div><div id="ik3p"><p><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000">Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.</span></span></span></p>

                <p><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000">Cras ultricies ligula sed magna dictum porta. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Sed porttitor lectus nibh.</span></span></span></p>

                <p><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000">Donec rutrum congue leo eget malesuada. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Nulla porttitor accumsan tincidunt. Vivamus suscipit tortor eget felis porttitor volutpat.</span></span></span></p>

                <p>&nbsp;</p>

                <ul style="margin-left:40px">
                <li style="list-style-type:disc"><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000">Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</span></span></span></li>
                <li style="list-style-type:disc"><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000">Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</span></span></span></li>
                <li style="list-style-type:disc"><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000">Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.</span></span></span></li>
                <li style="list-style-type:disc"><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000">Pellentesque in ipsum id orci porta dapibus.</span></span></span></li>
                <li style="list-style-type:disc"><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000">Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.</span></span></span></li>
                </ul>

                <p>&nbsp;</p>

                <p><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000">Sed porttitor lectus nibh. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim.</span></span></span><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000">Nulla quis lorem ut libero malesuada feugiat. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Vivamus suscipit tortor eget felis porttitor volutpat.&nbsp;</span></span></span><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000">Donec rutrum congue leo eget malesuada. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Nulla porttitor accumsan tincidunt. Vivamus suscipit tortor eget felis porttitor volutpat.</span></span></span></p>

                <p>&nbsp;</p>

                <ul style="margin-left:40px">
                <li style="list-style-type:disc"><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000">Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</span></span></span></li>
                <li style="list-style-type:disc"><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000">Curabitur non nulla sit amet nisl tempus convallis quis ac lectus.</span></span></span></li>
                <li style="list-style-type:disc"><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000">Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus.</span></span></span></li>
                <li style="list-style-type:disc"><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000">Pellentesque in ipsum id orci porta dapibus.</span></span></span></li>
                <li style="list-style-type:disc"><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000">Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem.</span></span></span></li>
                </ul>

                <p>&nbsp;</p>

                <p><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000">Sed porttitor lectus nibh. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim.</span></span></span></p>

                <p>&nbsp;</p>
                </div><div class="gjs-row" id="id09"><div class="gjs-cell" id="idhn"></div></div></body>',
                'meta_title' => NULL,
                'meta_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum dapibus venenatis turpis vel vulputate. Donec in lacinia arcu. Aenean sapien magna, eleifend at gravida in, luctus a quam.',
                'status' => 'Active',
                'type' => 'page',
                'layout' => 'default',
                'default' => 0,
            ),
            3 =>
            array(
                'id' => 4,
                'name' => 'Digital Payments',
                'slug' => 'digital-payments',
                'css' => '* { box-sizing: border-box; } body {margin: 0;}.gjs-row{display:table;padding:10px;width:100%;}.gjs-cell{width:8%;display:table-cell;height:75px;}#i4hu{height:150px;width:100%;text-align:center;}#i48o{padding:10px;height:150px;}#i96a{padding:10px 10% 10px 10%;}#ivba{width:100%;height:auto;}#ie0e{padding:10px 10% 10px 10%;text-align:justify;}@media (max-width: 768px){.gjs-cell{width:100%;display:block;}}',
                'description' => '<body id="iqzh"><div class="gjs-row" id="idi5"><div class="gjs-cell" id="i4hu"><div id="i48o"><h5><span style="font-size:60px">Digital Payments</span></h5>

                <p>Welcome to the martvill marketplace</p>
                </div></div></div><div class="gjs-row" id="i96a"><div class="gjs-cell" id="ivba"></div></div><div id="ie0e"><p><span style="font-size:20px">Welcome to Martvill Multi Market.</span></p>

                <p>&nbsp;</p>

                <p><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000">Nulla quis lorem ut libero malesuada feugiat. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Vivamus suscipit tortor eget felis porttitor volutpat.&nbsp;</span></span></span><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000">Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.</span></span></span><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000">Cras ultricies ligula sed magna dictum porta. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Sed porttitor lectus nibh</span></span></span></p>

                <p>&nbsp;</p>

                <p><span style="font-size:20px">Martvill websites</span></p>

                <p>&nbsp;</p>

                <p><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000">Nulla quis lorem ut libero malesuada feugiat. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Vivamus suscipit tortor eget felis porttitor volutpat.&nbsp;</span></span></span><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000">Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.</span></span></span></p>

                <p><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000">Cras ultricies ligula sed magna dictum porta. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Sed porttitor lectus nibh.</span></span></span></p>

                <p>&nbsp;</p>

                <p><span style="font-size:22px">How browsing and vendor works?</span></p>

                <p>&nbsp;</p>

                <p><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000">Sed porttitor lectus nibh. Quisque velit nisi, pretium ut lacinia in, elementum id enim. Nulla porttitor accumsan tincidunt. Quisque velit nisi, pretium ut lacinia in, elementum id enim.&nbsp;</span></span></span><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000">Nulla quis lorem ut libero malesuada feugiat. Vivamus magna justo, lacinia eget consectetur sed, convallis at tellus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula. Vivamus suscipit tortor eget felis porttitor volutpat.</span></span></span></p>

                <p>&nbsp;</p>

                <p><span style="font-size:22px">Becoming an vendor</span></p>

                <p><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000">Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.</span></span></span></p>

                <p><span style="font-size:11pt"><span style="font-family:Arial"><span style="color:#000000">Cras ultricies ligula sed magna dictum porta. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur non nulla sit amet nisl tempus convallis quis ac lectus. Sed porttitor lectus nibh.</span></span></span></p>

                <p>&nbsp;</p>
                </div></body>',
                'meta_title' => 'Cras maximus pretium finibus.',
                'meta_description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum dapibus venenatis turpis vel vulputate. Donec in lacinia arcu. Aenean sapien magna, eleifend at gravida in, luctus a quam.',
                'status' => 'Active',
                'type' => 'page',
                'layout' => 'default',
                'default' => 0,
            ),
            4 =>
            array(
                'id' => 5,
                'name' => 'Home',
                'slug' => 'home-1',
                'css' => NULL,
                'description' => NULL,
                'meta_title' => 'Martvill - A super multivendor ecommerce platform.',
                'meta_description' => 'Martvill is a complete eCommerce shopping platform for multiple vendors to sell their products online to customers. You can choose Martvill if you have planned to buy a Multi-vendor eCommerce site.',
                'status' => 'Active',
                'type' => 'home',
                'layout' => 'default',
                'default' => 1,
            ),
            5 =>
            array(
                'id' => 6,
                'name' => 'Groceries',
                'slug' => 'home-7',
                'css' => NULL,
                'description' => NULL,
                'meta_title' => NULL,
                'meta_description' => NULL,
                'status' => 'Active',
                'type' => 'home',
                'layout' => 'groceries',
                'default' => 0,
            ),
            6 =>
            array(
                'id' => 7,
                'name' => 'Fashion',
                'slug' => 'home-8',
                'css' => NULL,
                'description' => NULL,
                'meta_title' => NULL,
                'meta_description' => NULL,
                'status' => 'Active',
                'type' => 'home',
                'layout' => 'fashion',
                'default' => 0,
            ),
            7 =>
            array(
                'id' => 8,
                'name' => 'Mixed',
                'slug' => 'home-9',
                'css' => NULL,
                'description' => NULL,
                'meta_title' => NULL,
                'meta_description' => NULL,
                'status' => 'Active',
                'type' => 'home',
                'layout' => 'mixed',
                'default' => 0,
            ),
            8 =>
            array(
                'id' => 9,
                'name' => 'Contact Us',
                'slug' => 'contact-us',
                'css' => '* { box-sizing: border-box; } body {margin: 0;}*{box-sizing:border-box;}body{margin:0;}#ie3j{justify-content:space-between;}#i77dl{border-radius:12px 12px 12px 12px;width:200.85%;height:99.94%;display:block;}#ifk9{margin:20px 0 50px 0;}#iv0vc{font-size:42px;font-weight:700;display:flex;line-height:55px;margin:14px 0 0 0;}#iia7g{color:#2c2c2c;}.pl-1{color:#ff9c00;}#iwjhg{font-size:18px;line-height:27px;color:#2c2c2c;margin:5px 0 0 0;}#iegke{background-color:#f4f4f4;border-radius:12px 12px 12px 12px;padding:32px 0 32px 32px;margin:36px 0 0 0;}#ivthu{font-size:18px;line-height:23px;color:#2c2c2c;font-weight:700;}#iyxqs{display:flex;}#i5xny{width:2px;height:23px;background-color:#fcca19;margin:0 8px 0 0;}#i9udb{margin:15px 0 0 0;font-size:16px;line-height:26px;color:#898989;font-weight:500;}#iwe8p{display:flex;margin:26px 0 0 0;}#i8b9g{display:flex;margin:26px 0 0 0;}#izb5k{color:black;background-color:#fcca19;padding:12px 12px 12px 12px;border-radius:4px 4px 4px 4px;margin:0 18px 0 0;}#ih8cs{font-size:16px;line-height:25px;color:#2c2c2c;font-weight:500;}#ifd56{display:flex;margin:30px 0 0 0;}#i4nzf{padding:12px 12px 12px 12px;background-color:#fcca19;margin:0 18px 0 0;border-radius:4px 4px 4px 4px;}#i6op6{font-size:16px;line-height:24px;font-weight:500;color:#2c2c2c;display:flex;}#iy44j{padding:12px 12px 12px 12px;background-color:#fcca19;border-radius:4px 4px 4px 4px;margin:0 18px 0 0;}#i3emb{font-size:16px;line-height:24px;font-weight:500;color:#2c2c2c;display:flex;}#ieftr{width:2px;height:23px;background-color:#fcca19;margin:0 8px 0 0;}#ispie{display:flex;}#ig3w7{font-size:18px;line-height:23px;font-weight:700;color:#2c2c2c;}#i3d0h{color:black;}#i6l6k{color:black;}#i1oew{color:black;}#i0c3t{color:black;}#iwh9j{color:black;}#i3h7a{color:black;}',
                'description' => '<body><div id="ifk9"><div id="ie3j" class="grid grid-cols-3 ml-4 lg:ml-4 xl:ml-32 2xl:ml-64 3xl:ml-92 gap-5"><div id="i5jk"><div id="i6n37"><div class="mt-20"><nav aria-label="Breadcrumb" class="text-gray-600 text-sm"><ol class="list-none p-0 flex flex-wrap md:inline-flex text-xs md:text-sm roboto-medium font-medium text-gray-10 leading-5"><li class="flex items-center"><svg width="13" height="15" viewBox="0 0 13 15" fill="none" xmlns="http://www.w3.org/2000/svg" class="-mt-1 mr-2"><path fill-rule="evenodd" clip-rule="evenodd" d="M5.35643 1.89407C4.93608 2.1717 4.43485 2.59943 3.69438 3.23412L2.916 3.9013C2.0595 4.63545 1.82512 4.85827 1.69934 5.13174C1.57357 5.4052 1.55692 5.72817 1.55692 6.85625V10.1569C1.55692 10.9127 1.55857 11.4013 1.60698 11.7613C1.65237 12.099 1.72565 12.2048 1.7849 12.264C1.84416 12.3233 1.94997 12.3966 2.28759 12.442C2.64759 12.4904 3.13619 12.492 3.89206 12.492H8.56233C9.31819 12.492 9.80679 12.4904 10.1668 12.442C10.5044 12.3966 10.6102 12.3233 10.6695 12.264C10.7287 12.2048 10.802 12.099 10.8474 11.7613C10.8958 11.4013 10.8975 10.9127 10.8975 10.1569V6.85625C10.8975 5.72817 10.8808 5.4052 10.755 5.13174C10.6293 4.85827 10.3949 4.63545 9.53838 3.9013L8.76 3.23412C8.01953 2.59943 7.5183 2.1717 7.09795 1.89407C6.69581 1.62848 6.44872 1.55676 6.22719 1.55676C6.00566 1.55676 5.75857 1.62848 5.35643 1.89407ZM4.49849 0.595063C5.03749 0.239073 5.5849 0 6.22719 0C6.86948 0 7.41689 0.239073 7.95589 0.595063C8.4674 0.932894 9.04235 1.42573 9.7353 2.01972L10.5515 2.71933C10.5892 2.75162 10.6264 2.78347 10.6632 2.81492C11.3564 3.40806 11.8831 3.85873 12.1694 4.48124C12.4557 5.10375 12.4551 5.79693 12.4543 6.70926C12.4543 6.75764 12.4542 6.80662 12.4542 6.85625L12.4542 10.2081C12.4543 10.8981 12.4543 11.4927 12.3903 11.9688C12.3217 12.479 12.167 12.9681 11.7703 13.3648C11.3736 13.7615 10.8845 13.9162 10.3742 13.9848C9.89812 14.0488 9.30358 14.0488 8.61355 14.0488H3.84083C3.1508 14.0488 2.55626 14.0488 2.08015 13.9848C1.56991 13.9162 1.08082 13.7615 0.68411 13.3648C0.2874 12.9681 0.132701 12.479 0.064101 11.9688C9.07021e-05 11.4927 0.000124017 10.8981 0.000162803 10.2081L0.000164659 6.85625C0.000164659 6.80662 0.000122439 6.75763 8.07765e-05 6.70926C-0.000705247 5.79693 -0.00130245 5.10374 0.285011 4.48124C0.571324 3.85873 1.09802 3.40806 1.79122 2.81492C1.82798 2.78347 1.8652 2.75162 1.90288 2.71933L2.68126 2.05215C2.69391 2.0413 2.70652 2.03049 2.71909 2.01972C3.41204 1.42573 3.98698 0.932893 4.49849 0.595063Z" fill="#898989"></path><path fill-rule="evenodd" clip-rule="evenodd" d="M3.50293 9.37853C3.50293 8.51876 4.19991 7.82178 5.05969 7.82178H7.39482C8.25459 7.82178 8.95158 8.51876 8.95158 9.37853V13.2704C8.95158 13.7003 8.60309 14.0488 8.1732 14.0488C7.74331 14.0488 7.39482 13.7003 7.39482 13.2704V9.37853H5.05969V13.2704C5.05969 13.7003 4.71119 14.0488 4.28131 14.0488C3.85142 14.0488 3.50293 13.7003 3.50293 13.2704V9.37853Z" fill="#898989"></path></svg><a href=".." id="il2mk">Home</a><p class="px-2">/</p></li><li><a href="javascript:void(0)" aria-current="page" class="text-gray-12">Contact Us</a></li></ol></nav></div><div id="iv0vc" class="dm-bold"><div id="iia7g"><p>GET IN</p></div><div id="ieeak" class="pl-1"><p>TOUCH</p></div></div><div id="iwwrv"></div></div><div id="iwjhg" class="dm-regular"><p>If you have any queries, concerns or suggestions,<br/>
                please contact us.</p></div><div id="i6uxw"><div id="iegke"><div id="iyxqs"><div id="i5xny"></div><div id="ivthu" class="dm-bold"><p>HEADQUARTERS</p></div></div><div id="i9udb" class="dm-sans"><p>Our team of professionals are live 24/7 and are<br/>
                ready to help you get to your query.</p></div><div id="iyptk"><div id="ifd56"><div id="i8jf9"><img src="../public/uploads/20221114/84214fc7d8147f994367bad5e360fb05.png" id="izb5k"/></div><div id="i093w"></div><div id="ih8cs" class="dm-sans"><p>184 Main Rd E, St Albans, San Francisco,<br/>
                United States of America.</p></div></div></div><div id="iqfkw"><div id="i8b9g"><div id="ip87f"></div><div id="i7yhb"><img id="i4nzf" src="../public/uploads/20221114/d3d95c9685b6785cdaabc5ea207175af.png"/></div><div id="i6op6" class="dm-sans items-center"><p>+46 963 350 1945, +46 746 346 84663</p></div></div></div><div id="i0bic"><div id="iwe8p"><div id="ikkkq"></div><div id="i5le6"><img id="iy44j" src="../public/uploads/20221114/82f880076d18bafc3bdb1fdd7988f547.png"/></div><div id="i3emb" class="items-center"><p>support@martvill.com</p></div></div></div><div id="ispie" class="mt-14"><div id="ieftr"></div><div id="ig3w7" class="dm-bold uppercase"><p>follow us on</p></div></div><div id="ige2g" class="grid grid-cols-8 items-center mt-5"><img id="i0c3t" src="../public/uploads/20221114/4212b4d6425b622bf5391387b5446cea.png"/><img id="i1oew" src="../public/uploads/20221114/b4bf139f125acf287becce5bbb4c96f6.png"/><img id="i3d0h" src="../public/uploads/20221114/d509d72e02f0391123fc304d8b4fae99.png"/><img id="i6l6k" src="../public/uploads/20221114/cf2e05536d870bf7dd728006ec4f0293.png"/><img id="i3h7a" src="../public/uploads/20221114/c9d20e7377473a90fdcb58637f74c458.png"/><img id="iwh9j" src="../public/uploads/20221114/fff0c6e58139ddbfc3c8ff2980db1b1e.png"/></div></div></div></div><div id="id0k"><img id="i77dl" src="../public/uploads/20221114/2e782eb90a0f43efbcd964050fbd8929.png"/></div></div></div></body>',
                'meta_title' => '',
                'meta_description' => '',
                'status' => 'Active',
                'type' => 'page',
                'layout' => 'default',
                'default' => 0,
            ),
            9 =>
            array(
                'id' => 10,
                'name' => 'Fashion V2',
                'slug' => 'home-5',
                'css' => NULL,
                'description' => NULL,
                'meta_title' => NULL,
                'meta_description' => NULL,
                'status' => 'Active',
                'type' => 'home',
                'layout' => 'fashion_v2',
                'default' => 0,
            ),
            10 =>
            array(
                'id' => 11,
                'name' => 'Fashion V3',
                'slug' => 'home-2',
                'css' => NULL,
                'description' => NULL,
                'meta_title' => NULL,
                'meta_description' => NULL,
                'status' => 'Active',
                'type' => 'home',
                'layout' => 'fashion_v3',
                'default' => 0,
            ),
            11 =>
            array(
                'id' => 12,
                'name' => 'Furniture',
                'slug' => 'home-3',
                'css' => NULL,
                'description' => NULL,
                'meta_title' => NULL,
                'meta_description' => NULL,
                'status' => 'Active',
                'type' => 'home',
                'layout' => 'furniture',
                'default' => 0,
            ),
            12 =>
            array(
                'id' => 13,
                'name' => 'Fashion V4',
                'slug' => 'home-4',
                'css' => NULL,
                'description' => NULL,
                'meta_title' => NULL,
                'meta_description' => NULL,
                'status' => 'Active',
                'type' => 'home',
                'layout' => 'fashion_v4',
                'default' => 0,
            ),
            13 =>
            array(
                'id' => 14,
                'name' => 'Digital',
                'slug' => 'home-6',
                'css' => NULL,
                'description' => NULL,
                'meta_title' => NULL,
                'meta_description' => NULL,
                'status' => 'Active',
                'type' => 'home',
                'layout' => 'digital',
                'default' => 0,
            ),
        ));
    }
}

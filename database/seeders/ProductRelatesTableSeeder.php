<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductRelatesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('product_relates')->delete();
        
        \DB::table('product_relates')->insert(array (
            0 => 
            array (
                'product_id' => 1205,
                'related_product_id' => 1203,
            ),
            1 => 
            array (
                'product_id' => 1205,
                'related_product_id' => 1202,
            ),
            2 => 
            array (
                'product_id' => 1205,
                'related_product_id' => 1200,
            ),
            3 => 
            array (
                'product_id' => 1204,
                'related_product_id' => 1205,
            ),
            4 => 
            array (
                'product_id' => 1204,
                'related_product_id' => 1200,
            ),
            5 => 
            array (
                'product_id' => 1204,
                'related_product_id' => 1202,
            ),
            6 => 
            array (
                'product_id' => 1203,
                'related_product_id' => 1201,
            ),
            7 => 
            array (
                'product_id' => 1203,
                'related_product_id' => 1204,
            ),
            8 => 
            array (
                'product_id' => 1203,
                'related_product_id' => 1202,
            ),
            9 => 
            array (
                'product_id' => 1202,
                'related_product_id' => 1201,
            ),
            10 => 
            array (
                'product_id' => 1202,
                'related_product_id' => 1205,
            ),
            11 => 
            array (
                'product_id' => 1202,
                'related_product_id' => 1204,
            ),
            12 => 
            array (
                'product_id' => 1201,
                'related_product_id' => 1200,
            ),
            13 => 
            array (
                'product_id' => 1201,
                'related_product_id' => 1205,
            ),
            14 => 
            array (
                'product_id' => 1201,
                'related_product_id' => 1203,
            ),
            15 => 
            array (
                'product_id' => 1200,
                'related_product_id' => 1201,
            ),
            16 => 
            array (
                'product_id' => 1200,
                'related_product_id' => 1205,
            ),
            17 => 
            array (
                'product_id' => 1200,
                'related_product_id' => 1202,
            ),
            18 => 
            array (
                'product_id' => 1199,
                'related_product_id' => 1198,
            ),
            19 => 
            array (
                'product_id' => 1199,
                'related_product_id' => 1194,
            ),
            20 => 
            array (
                'product_id' => 1199,
                'related_product_id' => 1191,
            ),
            21 => 
            array (
                'product_id' => 1198,
                'related_product_id' => 1199,
            ),
            22 => 
            array (
                'product_id' => 1198,
                'related_product_id' => 1189,
            ),
            23 => 
            array (
                'product_id' => 1198,
                'related_product_id' => 1192,
            ),
            24 => 
            array (
                'product_id' => 1197,
                'related_product_id' => 1199,
            ),
            25 => 
            array (
                'product_id' => 1197,
                'related_product_id' => 1189,
            ),
            26 => 
            array (
                'product_id' => 1197,
                'related_product_id' => 1195,
            ),
            27 => 
            array (
                'product_id' => 1196,
                'related_product_id' => 1193,
            ),
            28 => 
            array (
                'product_id' => 1196,
                'related_product_id' => 1195,
            ),
            29 => 
            array (
                'product_id' => 1196,
                'related_product_id' => 1188,
            ),
            30 => 
            array (
                'product_id' => 1195,
                'related_product_id' => 1187,
            ),
            31 => 
            array (
                'product_id' => 1195,
                'related_product_id' => 1192,
            ),
            32 => 
            array (
                'product_id' => 1195,
                'related_product_id' => 1196,
            ),
            33 => 
            array (
                'product_id' => 1194,
                'related_product_id' => 1195,
            ),
            34 => 
            array (
                'product_id' => 1194,
                'related_product_id' => 1193,
            ),
            35 => 
            array (
                'product_id' => 1194,
                'related_product_id' => 1188,
            ),
            36 => 
            array (
                'product_id' => 1193,
                'related_product_id' => 1194,
            ),
            37 => 
            array (
                'product_id' => 1193,
                'related_product_id' => 1198,
            ),
            38 => 
            array (
                'product_id' => 1193,
                'related_product_id' => 1189,
            ),
            39 => 
            array (
                'product_id' => 1192,
                'related_product_id' => 1191,
            ),
            40 => 
            array (
                'product_id' => 1192,
                'related_product_id' => 1187,
            ),
            41 => 
            array (
                'product_id' => 1192,
                'related_product_id' => 1195,
            ),
            42 => 
            array (
                'product_id' => 1191,
                'related_product_id' => 1193,
            ),
            43 => 
            array (
                'product_id' => 1191,
                'related_product_id' => 1199,
            ),
            44 => 
            array (
                'product_id' => 1191,
                'related_product_id' => 1198,
            ),
            45 => 
            array (
                'product_id' => 1190,
                'related_product_id' => 1197,
            ),
            46 => 
            array (
                'product_id' => 1190,
                'related_product_id' => 1195,
            ),
            47 => 
            array (
                'product_id' => 1190,
                'related_product_id' => 1199,
            ),
            48 => 
            array (
                'product_id' => 1189,
                'related_product_id' => 1191,
            ),
            49 => 
            array (
                'product_id' => 1189,
                'related_product_id' => 1187,
            ),
            50 => 
            array (
                'product_id' => 1189,
                'related_product_id' => 1197,
            ),
            51 => 
            array (
                'product_id' => 1188,
                'related_product_id' => 1198,
            ),
            52 => 
            array (
                'product_id' => 1188,
                'related_product_id' => 1195,
            ),
            53 => 
            array (
                'product_id' => 1188,
                'related_product_id' => 1189,
            ),
            54 => 
            array (
                'product_id' => 1187,
                'related_product_id' => 1192,
            ),
            55 => 
            array (
                'product_id' => 1187,
                'related_product_id' => 1195,
            ),
            56 => 
            array (
                'product_id' => 1187,
                'related_product_id' => 1193,
            ),
            57 => 
            array (
                'product_id' => 1186,
                'related_product_id' => 1178,
            ),
            58 => 
            array (
                'product_id' => 1186,
                'related_product_id' => 1170,
            ),
            59 => 
            array (
                'product_id' => 1186,
                'related_product_id' => 1182,
            ),
            60 => 
            array (
                'product_id' => 1185,
                'related_product_id' => 1174,
            ),
            61 => 
            array (
                'product_id' => 1185,
                'related_product_id' => 1175,
            ),
            62 => 
            array (
                'product_id' => 1185,
                'related_product_id' => 1176,
            ),
            63 => 
            array (
                'product_id' => 1184,
                'related_product_id' => 1176,
            ),
            64 => 
            array (
                'product_id' => 1184,
                'related_product_id' => 1175,
            ),
            65 => 
            array (
                'product_id' => 1184,
                'related_product_id' => 1174,
            ),
            66 => 
            array (
                'product_id' => 1183,
                'related_product_id' => 1182,
            ),
            67 => 
            array (
                'product_id' => 1183,
                'related_product_id' => 1179,
            ),
            68 => 
            array (
                'product_id' => 1183,
                'related_product_id' => 1181,
            ),
            69 => 
            array (
                'product_id' => 1182,
                'related_product_id' => 1183,
            ),
            70 => 
            array (
                'product_id' => 1182,
                'related_product_id' => 1181,
            ),
            71 => 
            array (
                'product_id' => 1182,
                'related_product_id' => 1172,
            ),
            72 => 
            array (
                'product_id' => 1181,
                'related_product_id' => 1183,
            ),
            73 => 
            array (
                'product_id' => 1181,
                'related_product_id' => 1182,
            ),
            74 => 
            array (
                'product_id' => 1181,
                'related_product_id' => 1175,
            ),
            75 => 
            array (
                'product_id' => 1180,
                'related_product_id' => 1170,
            ),
            76 => 
            array (
                'product_id' => 1180,
                'related_product_id' => 1186,
            ),
            77 => 
            array (
                'product_id' => 1180,
                'related_product_id' => 1177,
            ),
            78 => 
            array (
                'product_id' => 1179,
                'related_product_id' => 1183,
            ),
            79 => 
            array (
                'product_id' => 1179,
                'related_product_id' => 1176,
            ),
            80 => 
            array (
                'product_id' => 1179,
                'related_product_id' => 1171,
            ),
            81 => 
            array (
                'product_id' => 1178,
                'related_product_id' => 1180,
            ),
            82 => 
            array (
                'product_id' => 1178,
                'related_product_id' => 1181,
            ),
            83 => 
            array (
                'product_id' => 1178,
                'related_product_id' => 1172,
            ),
            84 => 
            array (
                'product_id' => 1177,
                'related_product_id' => 1184,
            ),
            85 => 
            array (
                'product_id' => 1177,
                'related_product_id' => 1174,
            ),
            86 => 
            array (
                'product_id' => 1177,
                'related_product_id' => 1175,
            ),
            87 => 
            array (
                'product_id' => 1176,
                'related_product_id' => 1177,
            ),
            88 => 
            array (
                'product_id' => 1176,
                'related_product_id' => 1174,
            ),
            89 => 
            array (
                'product_id' => 1176,
                'related_product_id' => 1175,
            ),
            90 => 
            array (
                'product_id' => 1175,
                'related_product_id' => 1174,
            ),
            91 => 
            array (
                'product_id' => 1175,
                'related_product_id' => 1177,
            ),
            92 => 
            array (
                'product_id' => 1175,
                'related_product_id' => 1184,
            ),
            93 => 
            array (
                'product_id' => 1174,
                'related_product_id' => 1177,
            ),
            94 => 
            array (
                'product_id' => 1174,
                'related_product_id' => 1175,
            ),
            95 => 
            array (
                'product_id' => 1174,
                'related_product_id' => 1184,
            ),
            96 => 
            array (
                'product_id' => 1173,
                'related_product_id' => 1172,
            ),
            97 => 
            array (
                'product_id' => 1173,
                'related_product_id' => 1171,
            ),
            98 => 
            array (
                'product_id' => 1173,
                'related_product_id' => 1183,
            ),
            99 => 
            array (
                'product_id' => 1172,
                'related_product_id' => 1173,
            ),
            100 => 
            array (
                'product_id' => 1172,
                'related_product_id' => 1179,
            ),
            101 => 
            array (
                'product_id' => 1172,
                'related_product_id' => 1181,
            ),
            102 => 
            array (
                'product_id' => 1171,
                'related_product_id' => 1172,
            ),
            103 => 
            array (
                'product_id' => 1171,
                'related_product_id' => 1173,
            ),
            104 => 
            array (
                'product_id' => 1171,
                'related_product_id' => 1179,
            ),
            105 => 
            array (
                'product_id' => 1170,
                'related_product_id' => 1175,
            ),
            106 => 
            array (
                'product_id' => 1170,
                'related_product_id' => 1177,
            ),
            107 => 
            array (
                'product_id' => 1170,
                'related_product_id' => 1169,
            ),
            108 => 
            array (
                'product_id' => 1169,
                'related_product_id' => 1183,
            ),
            109 => 
            array (
                'product_id' => 1169,
                'related_product_id' => 1180,
            ),
            110 => 
            array (
                'product_id' => 1169,
                'related_product_id' => 1170,
            ),
            111 => 
            array (
                'product_id' => 1168,
                'related_product_id' => 1165,
            ),
            112 => 
            array (
                'product_id' => 1168,
                'related_product_id' => 1166,
            ),
            113 => 
            array (
                'product_id' => 1168,
                'related_product_id' => 1164,
            ),
            114 => 
            array (
                'product_id' => 1167,
                'related_product_id' => 1168,
            ),
            115 => 
            array (
                'product_id' => 1167,
                'related_product_id' => 1164,
            ),
            116 => 
            array (
                'product_id' => 1167,
                'related_product_id' => 1165,
            ),
            117 => 
            array (
                'product_id' => 1166,
                'related_product_id' => 1168,
            ),
            118 => 
            array (
                'product_id' => 1166,
                'related_product_id' => 1163,
            ),
            119 => 
            array (
                'product_id' => 1166,
                'related_product_id' => 1161,
            ),
            120 => 
            array (
                'product_id' => 1165,
                'related_product_id' => 1160,
            ),
            121 => 
            array (
                'product_id' => 1165,
                'related_product_id' => 1161,
            ),
            122 => 
            array (
                'product_id' => 1165,
                'related_product_id' => 1162,
            ),
            123 => 
            array (
                'product_id' => 1164,
                'related_product_id' => 1163,
            ),
            124 => 
            array (
                'product_id' => 1164,
                'related_product_id' => 1166,
            ),
            125 => 
            array (
                'product_id' => 1164,
                'related_product_id' => 1168,
            ),
            126 => 
            array (
                'product_id' => 1163,
                'related_product_id' => 1165,
            ),
            127 => 
            array (
                'product_id' => 1163,
                'related_product_id' => 1161,
            ),
            128 => 
            array (
                'product_id' => 1163,
                'related_product_id' => 1166,
            ),
            129 => 
            array (
                'product_id' => 1162,
                'related_product_id' => 1161,
            ),
            130 => 
            array (
                'product_id' => 1162,
                'related_product_id' => 1160,
            ),
            131 => 
            array (
                'product_id' => 1162,
                'related_product_id' => 1166,
            ),
            132 => 
            array (
                'product_id' => 1161,
                'related_product_id' => 1162,
            ),
            133 => 
            array (
                'product_id' => 1161,
                'related_product_id' => 1160,
            ),
            134 => 
            array (
                'product_id' => 1161,
                'related_product_id' => 1165,
            ),
            135 => 
            array (
                'product_id' => 1160,
                'related_product_id' => 1166,
            ),
            136 => 
            array (
                'product_id' => 1160,
                'related_product_id' => 1165,
            ),
            137 => 
            array (
                'product_id' => 1160,
                'related_product_id' => 1162,
            ),
            138 => 
            array (
                'product_id' => 1159,
                'related_product_id' => 1158,
            ),
            139 => 
            array (
                'product_id' => 1159,
                'related_product_id' => 1166,
            ),
            140 => 
            array (
                'product_id' => 1159,
                'related_product_id' => 1165,
            ),
            141 => 
            array (
                'product_id' => 1158,
                'related_product_id' => 1159,
            ),
            142 => 
            array (
                'product_id' => 1158,
                'related_product_id' => 1166,
            ),
            143 => 
            array (
                'product_id' => 1158,
                'related_product_id' => 1165,
            ),
            144 => 
            array (
                'product_id' => 1157,
                'related_product_id' => 1170,
            ),
            145 => 
            array (
                'product_id' => 1157,
                'related_product_id' => 1177,
            ),
            146 => 
            array (
                'product_id' => 1157,
                'related_product_id' => 1181,
            ),
            147 => 
            array (
                'product_id' => 1156,
                'related_product_id' => 1152,
            ),
            148 => 
            array (
                'product_id' => 1156,
                'related_product_id' => 1150,
            ),
            149 => 
            array (
                'product_id' => 1156,
                'related_product_id' => 1147,
            ),
            150 => 
            array (
                'product_id' => 1155,
                'related_product_id' => 1166,
            ),
            151 => 
            array (
                'product_id' => 1155,
                'related_product_id' => 1154,
            ),
            152 => 
            array (
                'product_id' => 1155,
                'related_product_id' => 1153,
            ),
            153 => 
            array (
                'product_id' => 1154,
                'related_product_id' => 1153,
            ),
            154 => 
            array (
                'product_id' => 1154,
                'related_product_id' => 1155,
            ),
            155 => 
            array (
                'product_id' => 1154,
                'related_product_id' => 1166,
            ),
            156 => 
            array (
                'product_id' => 1153,
                'related_product_id' => 1154,
            ),
            157 => 
            array (
                'product_id' => 1153,
                'related_product_id' => 1155,
            ),
            158 => 
            array (
                'product_id' => 1153,
                'related_product_id' => 1165,
            ),
            159 => 
            array (
                'product_id' => 1152,
                'related_product_id' => 1189,
            ),
            160 => 
            array (
                'product_id' => 1152,
                'related_product_id' => 1191,
            ),
            161 => 
            array (
                'product_id' => 1152,
                'related_product_id' => 1147,
            ),
            162 => 
            array (
                'product_id' => 1151,
                'related_product_id' => 1155,
            ),
            163 => 
            array (
                'product_id' => 1151,
                'related_product_id' => 1154,
            ),
            164 => 
            array (
                'product_id' => 1151,
                'related_product_id' => 1153,
            ),
            165 => 
            array (
                'product_id' => 1150,
                'related_product_id' => 1156,
            ),
            166 => 
            array (
                'product_id' => 1150,
                'related_product_id' => 1189,
            ),
            167 => 
            array (
                'product_id' => 1150,
                'related_product_id' => 1191,
            ),
            168 => 
            array (
                'product_id' => 1149,
                'related_product_id' => 1142,
            ),
            169 => 
            array (
                'product_id' => 1149,
                'related_product_id' => 1147,
            ),
            170 => 
            array (
                'product_id' => 1149,
                'related_product_id' => 1152,
            ),
            171 => 
            array (
                'product_id' => 1148,
                'related_product_id' => 1150,
            ),
            172 => 
            array (
                'product_id' => 1148,
                'related_product_id' => 1187,
            ),
            173 => 
            array (
                'product_id' => 1148,
                'related_product_id' => 1196,
            ),
            174 => 
            array (
                'product_id' => 1147,
                'related_product_id' => 1148,
            ),
            175 => 
            array (
                'product_id' => 1147,
                'related_product_id' => 1152,
            ),
            176 => 
            array (
                'product_id' => 1147,
                'related_product_id' => 1156,
            ),
            177 => 
            array (
                'product_id' => 1146,
                'related_product_id' => 1144,
            ),
            178 => 
            array (
                'product_id' => 1146,
                'related_product_id' => 1141,
            ),
            179 => 
            array (
                'product_id' => 1146,
                'related_product_id' => 1153,
            ),
            180 => 
            array (
                'product_id' => 1145,
                'related_product_id' => 1151,
            ),
            181 => 
            array (
                'product_id' => 1145,
                'related_product_id' => 1155,
            ),
            182 => 
            array (
                'product_id' => 1145,
                'related_product_id' => 1141,
            ),
            183 => 
            array (
                'product_id' => 1144,
                'related_product_id' => 1141,
            ),
            184 => 
            array (
                'product_id' => 1144,
                'related_product_id' => 1146,
            ),
            185 => 
            array (
                'product_id' => 1144,
                'related_product_id' => 1153,
            ),
            186 => 
            array (
                'product_id' => 1143,
                'related_product_id' => 1147,
            ),
            187 => 
            array (
                'product_id' => 1143,
                'related_product_id' => 1152,
            ),
            188 => 
            array (
                'product_id' => 1143,
                'related_product_id' => 1188,
            ),
            189 => 
            array (
                'product_id' => 1142,
                'related_product_id' => 1143,
            ),
            190 => 
            array (
                'product_id' => 1142,
                'related_product_id' => 1150,
            ),
            191 => 
            array (
                'product_id' => 1142,
                'related_product_id' => 1147,
            ),
            192 => 
            array (
                'product_id' => 1141,
                'related_product_id' => 1144,
            ),
            193 => 
            array (
                'product_id' => 1141,
                'related_product_id' => 1146,
            ),
            194 => 
            array (
                'product_id' => 1141,
                'related_product_id' => 1152,
            ),
            195 => 
            array (
                'product_id' => 1140,
                'related_product_id' => 1139,
            ),
            196 => 
            array (
                'product_id' => 1139,
                'related_product_id' => 1140,
            ),
            197 => 
            array (
                'product_id' => 1138,
                'related_product_id' => 1140,
            ),
            198 => 
            array (
                'product_id' => 1138,
                'related_product_id' => 1139,
            ),
            199 => 
            array (
                'product_id' => 1137,
                'related_product_id' => 1140,
            ),
            200 => 
            array (
                'product_id' => 1137,
                'related_product_id' => 1139,
            ),
            201 => 
            array (
                'product_id' => 1137,
                'related_product_id' => 1138,
            ),
            202 => 
            array (
                'product_id' => 1136,
                'related_product_id' => 1137,
            ),
            203 => 
            array (
                'product_id' => 1136,
                'related_product_id' => 1139,
            ),
            204 => 
            array (
                'product_id' => 1136,
                'related_product_id' => 1138,
            ),
            205 => 
            array (
                'product_id' => 1135,
                'related_product_id' => 1137,
            ),
            206 => 
            array (
                'product_id' => 1135,
                'related_product_id' => 1136,
            ),
            207 => 
            array (
                'product_id' => 1135,
                'related_product_id' => 1139,
            ),
            208 => 
            array (
                'product_id' => 1140,
                'related_product_id' => 1138,
            ),
            209 => 
            array (
                'product_id' => 1140,
                'related_product_id' => 1137,
            ),
            210 => 
            array (
                'product_id' => 1139,
                'related_product_id' => 1138,
            ),
            211 => 
            array (
                'product_id' => 1139,
                'related_product_id' => 1139,
            ),
            212 => 
            array (
                'product_id' => 1138,
                'related_product_id' => 1137,
            ),
            213 => 
            array (
                'product_id' => 1130,
                'related_product_id' => 1200,
            ),
            214 => 
            array (
                'product_id' => 1130,
                'related_product_id' => 1202,
            ),
            215 => 
            array (
                'product_id' => 1130,
                'related_product_id' => 1201,
            ),
            216 => 
            array (
                'product_id' => 1131,
                'related_product_id' => 1158,
            ),
            217 => 
            array (
                'product_id' => 1131,
                'related_product_id' => 1192,
            ),
            218 => 
            array (
                'product_id' => 1131,
                'related_product_id' => 1142,
            ),
            219 => 
            array (
                'product_id' => 1132,
                'related_product_id' => 1199,
            ),
            220 => 
            array (
                'product_id' => 1132,
                'related_product_id' => 1146,
            ),
            221 => 
            array (
                'product_id' => 1132,
                'related_product_id' => 1147,
            ),
            222 => 
            array (
                'product_id' => 1133,
                'related_product_id' => 1185,
            ),
            223 => 
            array (
                'product_id' => 1133,
                'related_product_id' => 1176,
            ),
            224 => 
            array (
                'product_id' => 1133,
                'related_product_id' => 1184,
            ),
            225 => 
            array (
                'product_id' => 1134,
                'related_product_id' => 1142,
            ),
            226 => 
            array (
                'product_id' => 1134,
                'related_product_id' => 1131,
            ),
            227 => 
            array (
                'product_id' => 1134,
                'related_product_id' => 1149,
            ),
        ));
        
        
    }
}
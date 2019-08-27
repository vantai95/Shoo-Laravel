<?php

use Illuminate\Database\Seeder;

class StatesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('states')->delete();
        
        \DB::table('states')->insert(array (
            0 => 
            array (
                'id' => 1,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 101,
                'name' => 'Andaman and Nicobar Islands',
            ),
            1 => 
            array (
                'id' => 2,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 101,
                'name' => 'Andhra Pradesh',
            ),
            2 => 
            array (
                'id' => 3,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 101,
                'name' => 'Arunachal Pradesh',
            ),
            3 => 
            array (
                'id' => 4,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 101,
                'name' => 'Assam',
            ),
            4 => 
            array (
                'id' => 5,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 101,
                'name' => 'Bihar',
            ),
            5 => 
            array (
                'id' => 6,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 101,
                'name' => 'Chandigarh',
            ),
            6 => 
            array (
                'id' => 7,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 101,
                'name' => 'Chhattisgarh',
            ),
            7 => 
            array (
                'id' => 8,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 101,
                'name' => 'Dadra and Nagar Haveli',
            ),
            8 => 
            array (
                'id' => 9,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 101,
                'name' => 'Daman and Diu',
            ),
            9 => 
            array (
                'id' => 10,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 101,
                'name' => 'Delhi',
            ),
            10 => 
            array (
                'id' => 11,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 101,
                'name' => 'Goa',
            ),
            11 => 
            array (
                'id' => 12,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 101,
                'name' => 'Gujarat',
            ),
            12 => 
            array (
                'id' => 13,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 101,
                'name' => 'Haryana',
            ),
            13 => 
            array (
                'id' => 14,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 101,
                'name' => 'Himachal Pradesh',
            ),
            14 => 
            array (
                'id' => 15,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 101,
                'name' => 'Jammu and Kashmir',
            ),
            15 => 
            array (
                'id' => 16,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 101,
                'name' => 'Jharkhand',
            ),
            16 => 
            array (
                'id' => 17,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 101,
                'name' => 'Karnataka',
            ),
            17 => 
            array (
                'id' => 18,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 101,
                'name' => 'Kenmore',
            ),
            18 => 
            array (
                'id' => 19,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 101,
                'name' => 'Kerala',
            ),
            19 => 
            array (
                'id' => 20,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 101,
                'name' => 'Lakshadweep',
            ),
            20 => 
            array (
                'id' => 21,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 101,
                'name' => 'Madhya Pradesh',
            ),
            21 => 
            array (
                'id' => 22,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 101,
                'name' => 'Maharashtra',
            ),
            22 => 
            array (
                'id' => 23,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 101,
                'name' => 'Manipur',
            ),
            23 => 
            array (
                'id' => 24,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 101,
                'name' => 'Meghalaya',
            ),
            24 => 
            array (
                'id' => 25,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 101,
                'name' => 'Mizoram',
            ),
            25 => 
            array (
                'id' => 26,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 101,
                'name' => 'Nagaland',
            ),
            26 => 
            array (
                'id' => 27,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 101,
                'name' => 'Narora',
            ),
            27 => 
            array (
                'id' => 28,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 101,
                'name' => 'Natwar',
            ),
            28 => 
            array (
                'id' => 29,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 101,
                'name' => 'Odisha',
            ),
            29 => 
            array (
                'id' => 30,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 101,
                'name' => 'Paschim Medinipur',
            ),
            30 => 
            array (
                'id' => 31,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 101,
                'name' => 'Pondicherry',
            ),
            31 => 
            array (
                'id' => 32,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 101,
                'name' => 'Punjab',
            ),
            32 => 
            array (
                'id' => 33,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 101,
                'name' => 'Rajasthan',
            ),
            33 => 
            array (
                'id' => 34,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 101,
                'name' => 'Sikkim',
            ),
            34 => 
            array (
                'id' => 35,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 101,
                'name' => 'Tamil Nadu',
            ),
            35 => 
            array (
                'id' => 36,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 101,
                'name' => 'Telangana',
            ),
            36 => 
            array (
                'id' => 37,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 101,
                'name' => 'Tripura',
            ),
            37 => 
            array (
                'id' => 38,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 101,
                'name' => 'Uttar Pradesh',
            ),
            38 => 
            array (
                'id' => 39,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 101,
                'name' => 'Uttarakhand',
            ),
            39 => 
            array (
                'id' => 40,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 101,
                'name' => 'Vaishali',
            ),
            40 => 
            array (
                'id' => 41,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 101,
                'name' => 'West Bengal',
            ),
            41 => 
            array (
                'id' => 42,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 1,
                'name' => 'Badakhshan',
            ),
            42 => 
            array (
                'id' => 43,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 1,
                'name' => 'Badgis',
            ),
            43 => 
            array (
                'id' => 44,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 1,
                'name' => 'Baglan',
            ),
            44 => 
            array (
                'id' => 45,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 1,
                'name' => 'Balkh',
            ),
            45 => 
            array (
                'id' => 46,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 1,
                'name' => 'Bamiyan',
            ),
            46 => 
            array (
                'id' => 47,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 1,
                'name' => 'Farah',
            ),
            47 => 
            array (
                'id' => 48,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 1,
                'name' => 'Faryab',
            ),
            48 => 
            array (
                'id' => 49,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 1,
                'name' => 'Gawr',
            ),
            49 => 
            array (
                'id' => 50,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 1,
                'name' => 'Gazni',
            ),
            50 => 
            array (
                'id' => 51,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 1,
                'name' => 'Herat',
            ),
            51 => 
            array (
                'id' => 52,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 1,
                'name' => 'Hilmand',
            ),
            52 => 
            array (
                'id' => 53,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 1,
                'name' => 'Jawzjan',
            ),
            53 => 
            array (
                'id' => 54,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 1,
                'name' => 'Kabul',
            ),
            54 => 
            array (
                'id' => 55,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 1,
                'name' => 'Kapisa',
            ),
            55 => 
            array (
                'id' => 56,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 1,
                'name' => 'Khawst',
            ),
            56 => 
            array (
                'id' => 57,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 1,
                'name' => 'Kunar',
            ),
            57 => 
            array (
                'id' => 58,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 1,
                'name' => 'Lagman',
            ),
            58 => 
            array (
                'id' => 59,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 1,
                'name' => 'Lawghar',
            ),
            59 => 
            array (
                'id' => 60,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 1,
                'name' => 'Nangarhar',
            ),
            60 => 
            array (
                'id' => 61,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 1,
                'name' => 'Nimruz',
            ),
            61 => 
            array (
                'id' => 62,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 1,
                'name' => 'Nuristan',
            ),
            62 => 
            array (
                'id' => 63,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 1,
                'name' => 'Paktika',
            ),
            63 => 
            array (
                'id' => 64,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 1,
                'name' => 'Paktiya',
            ),
            64 => 
            array (
                'id' => 65,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 1,
                'name' => 'Parwan',
            ),
            65 => 
            array (
                'id' => 66,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 1,
                'name' => 'Qandahar',
            ),
            66 => 
            array (
                'id' => 67,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 1,
                'name' => 'Qunduz',
            ),
            67 => 
            array (
                'id' => 68,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 1,
                'name' => 'Samangan',
            ),
            68 => 
            array (
                'id' => 69,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 1,
                'name' => 'Sar-e Pul',
            ),
            69 => 
            array (
                'id' => 70,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 1,
                'name' => 'Takhar',
            ),
            70 => 
            array (
                'id' => 71,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 1,
                'name' => 'Uruzgan',
            ),
            71 => 
            array (
                'id' => 72,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 1,
                'name' => 'Wardag',
            ),
            72 => 
            array (
                'id' => 73,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 1,
                'name' => 'Zabul',
            ),
            73 => 
            array (
                'id' => 74,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 2,
                'name' => 'Berat',
            ),
            74 => 
            array (
                'id' => 75,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 2,
                'name' => 'Bulqize',
            ),
            75 => 
            array (
                'id' => 76,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 2,
                'name' => 'Delvine',
            ),
            76 => 
            array (
                'id' => 77,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 2,
                'name' => 'Devoll',
            ),
            77 => 
            array (
                'id' => 78,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 2,
                'name' => 'Dibre',
            ),
            78 => 
            array (
                'id' => 79,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 2,
                'name' => 'Durres',
            ),
            79 => 
            array (
                'id' => 80,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 2,
                'name' => 'Elbasan',
            ),
            80 => 
            array (
                'id' => 81,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 2,
                'name' => 'Fier',
            ),
            81 => 
            array (
                'id' => 82,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 2,
                'name' => 'Gjirokaster',
            ),
            82 => 
            array (
                'id' => 83,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 2,
                'name' => 'Gramsh',
            ),
            83 => 
            array (
                'id' => 84,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 2,
                'name' => 'Has',
            ),
            84 => 
            array (
                'id' => 85,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 2,
                'name' => 'Kavaje',
            ),
            85 => 
            array (
                'id' => 86,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 2,
                'name' => 'Kolonje',
            ),
            86 => 
            array (
                'id' => 87,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 2,
                'name' => 'Korce',
            ),
            87 => 
            array (
                'id' => 88,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 2,
                'name' => 'Kruje',
            ),
            88 => 
            array (
                'id' => 89,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 2,
                'name' => 'Kucove',
            ),
            89 => 
            array (
                'id' => 90,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 2,
                'name' => 'Kukes',
            ),
            90 => 
            array (
                'id' => 91,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 2,
                'name' => 'Kurbin',
            ),
            91 => 
            array (
                'id' => 92,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 2,
                'name' => 'Lezhe',
            ),
            92 => 
            array (
                'id' => 93,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 2,
                'name' => 'Librazhd',
            ),
            93 => 
            array (
                'id' => 94,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 2,
                'name' => 'Lushnje',
            ),
            94 => 
            array (
                'id' => 95,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 2,
                'name' => 'Mallakaster',
            ),
            95 => 
            array (
                'id' => 96,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 2,
                'name' => 'Malsi e Madhe',
            ),
            96 => 
            array (
                'id' => 97,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 2,
                'name' => 'Mat',
            ),
            97 => 
            array (
                'id' => 98,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 2,
                'name' => 'Mirdite',
            ),
            98 => 
            array (
                'id' => 99,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 2,
                'name' => 'Peqin',
            ),
            99 => 
            array (
                'id' => 100,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 2,
                'name' => 'Permet',
            ),
            100 => 
            array (
                'id' => 101,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 2,
                'name' => 'Pogradec',
            ),
            101 => 
            array (
                'id' => 102,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 2,
                'name' => 'Puke',
            ),
            102 => 
            array (
                'id' => 103,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 2,
                'name' => 'Sarande',
            ),
            103 => 
            array (
                'id' => 104,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 2,
                'name' => 'Shkoder',
            ),
            104 => 
            array (
                'id' => 105,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 2,
                'name' => 'Skrapar',
            ),
            105 => 
            array (
                'id' => 106,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 2,
                'name' => 'Tepelene',
            ),
            106 => 
            array (
                'id' => 107,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 2,
                'name' => 'Tirane',
            ),
            107 => 
            array (
                'id' => 108,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 2,
                'name' => 'Tropoje',
            ),
            108 => 
            array (
                'id' => 109,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 2,
                'name' => 'Vlore',
            ),
            109 => 
            array (
                'id' => 110,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 3,
                'name' => '\'Ayn Daflah',
            ),
            110 => 
            array (
                'id' => 111,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 3,
                'name' => '\'Ayn Tamushanat',
            ),
            111 => 
            array (
                'id' => 112,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 3,
                'name' => 'Adrar',
            ),
            112 => 
            array (
                'id' => 113,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 3,
                'name' => 'Algiers',
            ),
            113 => 
            array (
                'id' => 114,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 3,
                'name' => 'Annabah',
            ),
            114 => 
            array (
                'id' => 115,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 3,
                'name' => 'Bashshar',
            ),
            115 => 
            array (
                'id' => 116,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 3,
                'name' => 'Batnah',
            ),
            116 => 
            array (
                'id' => 117,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 3,
                'name' => 'Bijayah',
            ),
            117 => 
            array (
                'id' => 118,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 3,
                'name' => 'Biskrah',
            ),
            118 => 
            array (
                'id' => 119,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 3,
                'name' => 'Blidah',
            ),
            119 => 
            array (
                'id' => 120,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 3,
                'name' => 'Buirah',
            ),
            120 => 
            array (
                'id' => 121,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 3,
                'name' => 'Bumardas',
            ),
            121 => 
            array (
                'id' => 122,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 3,
                'name' => 'Burj Bu Arririj',
            ),
            122 => 
            array (
                'id' => 123,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 3,
                'name' => 'Ghalizan',
            ),
            123 => 
            array (
                'id' => 124,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 3,
                'name' => 'Ghardayah',
            ),
            124 => 
            array (
                'id' => 125,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 3,
                'name' => 'Ilizi',
            ),
            125 => 
            array (
                'id' => 126,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 3,
                'name' => 'Jijili',
            ),
            126 => 
            array (
                'id' => 127,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 3,
                'name' => 'Jilfah',
            ),
            127 => 
            array (
                'id' => 128,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 3,
                'name' => 'Khanshalah',
            ),
            128 => 
            array (
                'id' => 129,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 3,
                'name' => 'Masilah',
            ),
            129 => 
            array (
                'id' => 130,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 3,
                'name' => 'Midyah',
            ),
            130 => 
            array (
                'id' => 131,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 3,
                'name' => 'Milah',
            ),
            131 => 
            array (
                'id' => 132,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 3,
                'name' => 'Muaskar',
            ),
            132 => 
            array (
                'id' => 133,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 3,
                'name' => 'Mustaghanam',
            ),
            133 => 
            array (
                'id' => 134,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 3,
                'name' => 'Naama',
            ),
            134 => 
            array (
                'id' => 135,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 3,
                'name' => 'Oran',
            ),
            135 => 
            array (
                'id' => 136,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 3,
                'name' => 'Ouargla',
            ),
            136 => 
            array (
                'id' => 137,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 3,
                'name' => 'Qalmah',
            ),
            137 => 
            array (
                'id' => 138,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 3,
                'name' => 'Qustantinah',
            ),
            138 => 
            array (
                'id' => 139,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 3,
                'name' => 'Sakikdah',
            ),
            139 => 
            array (
                'id' => 140,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 3,
                'name' => 'Satif',
            ),
            140 => 
            array (
                'id' => 141,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 3,
                'name' => 'Sayda\'',
            ),
            141 => 
            array (
                'id' => 142,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 3,
                'name' => 'Sidi ban-al-\'Abbas',
            ),
            142 => 
            array (
                'id' => 143,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 3,
                'name' => 'Suq Ahras',
            ),
            143 => 
            array (
                'id' => 144,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 3,
                'name' => 'Tamanghasat',
            ),
            144 => 
            array (
                'id' => 145,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 3,
                'name' => 'Tibazah',
            ),
            145 => 
            array (
                'id' => 146,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 3,
                'name' => 'Tibissah',
            ),
            146 => 
            array (
                'id' => 147,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 3,
                'name' => 'Tilimsan',
            ),
            147 => 
            array (
                'id' => 148,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 3,
                'name' => 'Tinduf',
            ),
            148 => 
            array (
                'id' => 149,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 3,
                'name' => 'Tisamsilt',
            ),
            149 => 
            array (
                'id' => 150,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 3,
                'name' => 'Tiyarat',
            ),
            150 => 
            array (
                'id' => 151,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 3,
                'name' => 'Tizi Wazu',
            ),
            151 => 
            array (
                'id' => 152,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 3,
                'name' => 'Umm-al-Bawaghi',
            ),
            152 => 
            array (
                'id' => 153,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 3,
                'name' => 'Wahran',
            ),
            153 => 
            array (
                'id' => 154,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 3,
                'name' => 'Warqla',
            ),
            154 => 
            array (
                'id' => 155,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 3,
                'name' => 'Wilaya d Alger',
            ),
            155 => 
            array (
                'id' => 156,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 3,
                'name' => 'Wilaya de Bejaia',
            ),
            156 => 
            array (
                'id' => 157,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 3,
                'name' => 'Wilaya de Constantine',
            ),
            157 => 
            array (
                'id' => 158,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 3,
                'name' => 'al-Aghwat',
            ),
            158 => 
            array (
                'id' => 159,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 3,
                'name' => 'al-Bayadh',
            ),
            159 => 
            array (
                'id' => 160,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 3,
                'name' => 'al-Jaza\'ir',
            ),
            160 => 
            array (
                'id' => 161,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 3,
                'name' => 'al-Wad',
            ),
            161 => 
            array (
                'id' => 162,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 3,
                'name' => 'ash-Shalif',
            ),
            162 => 
            array (
                'id' => 163,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 3,
                'name' => 'at-Tarif',
            ),
            163 => 
            array (
                'id' => 164,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 4,
                'name' => 'Eastern',
            ),
            164 => 
            array (
                'id' => 165,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 4,
                'name' => 'Manu\'a',
            ),
            165 => 
            array (
                'id' => 166,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 4,
                'name' => 'Swains Island',
            ),
            166 => 
            array (
                'id' => 167,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 4,
                'name' => 'Western',
            ),
            167 => 
            array (
                'id' => 168,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 5,
                'name' => 'Andorra la Vella',
            ),
            168 => 
            array (
                'id' => 169,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 5,
                'name' => 'Canillo',
            ),
            169 => 
            array (
                'id' => 170,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 5,
                'name' => 'Encamp',
            ),
            170 => 
            array (
                'id' => 171,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 5,
                'name' => 'La Massana',
            ),
            171 => 
            array (
                'id' => 172,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 5,
                'name' => 'Les Escaldes',
            ),
            172 => 
            array (
                'id' => 173,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 5,
                'name' => 'Ordino',
            ),
            173 => 
            array (
                'id' => 174,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 5,
                'name' => 'Sant Julia de Loria',
            ),
            174 => 
            array (
                'id' => 175,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 6,
                'name' => 'Bengo',
            ),
            175 => 
            array (
                'id' => 176,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 6,
                'name' => 'Benguela',
            ),
            176 => 
            array (
                'id' => 177,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 6,
                'name' => 'Bie',
            ),
            177 => 
            array (
                'id' => 178,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 6,
                'name' => 'Cabinda',
            ),
            178 => 
            array (
                'id' => 179,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 6,
                'name' => 'Cunene',
            ),
            179 => 
            array (
                'id' => 180,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 6,
                'name' => 'Huambo',
            ),
            180 => 
            array (
                'id' => 181,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 6,
                'name' => 'Huila',
            ),
            181 => 
            array (
                'id' => 182,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 6,
                'name' => 'Kuando-Kubango',
            ),
            182 => 
            array (
                'id' => 183,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 6,
                'name' => 'Kwanza Norte',
            ),
            183 => 
            array (
                'id' => 184,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 6,
                'name' => 'Kwanza Sul',
            ),
            184 => 
            array (
                'id' => 185,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 6,
                'name' => 'Luanda',
            ),
            185 => 
            array (
                'id' => 186,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 6,
                'name' => 'Lunda Norte',
            ),
            186 => 
            array (
                'id' => 187,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 6,
                'name' => 'Lunda Sul',
            ),
            187 => 
            array (
                'id' => 188,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 6,
                'name' => 'Malanje',
            ),
            188 => 
            array (
                'id' => 189,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 6,
                'name' => 'Moxico',
            ),
            189 => 
            array (
                'id' => 190,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 6,
                'name' => 'Namibe',
            ),
            190 => 
            array (
                'id' => 191,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 6,
                'name' => 'Uige',
            ),
            191 => 
            array (
                'id' => 192,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 6,
                'name' => 'Zaire',
            ),
            192 => 
            array (
                'id' => 193,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 7,
                'name' => 'Other Provinces',
            ),
            193 => 
            array (
                'id' => 194,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 8,
                'name' => 'Sector claimed by Argentina/Ch',
            ),
            194 => 
            array (
                'id' => 195,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 8,
                'name' => 'Sector claimed by Argentina/UK',
            ),
            195 => 
            array (
                'id' => 196,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 8,
                'name' => 'Sector claimed by Australia',
            ),
            196 => 
            array (
                'id' => 197,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 8,
                'name' => 'Sector claimed by France',
            ),
            197 => 
            array (
                'id' => 198,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 8,
                'name' => 'Sector claimed by New Zealand',
            ),
            198 => 
            array (
                'id' => 199,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 8,
                'name' => 'Sector claimed by Norway',
            ),
            199 => 
            array (
                'id' => 200,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 8,
                'name' => 'Unclaimed Sector',
            ),
            200 => 
            array (
                'id' => 201,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 9,
                'name' => 'Barbuda',
            ),
            201 => 
            array (
                'id' => 202,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 9,
                'name' => 'Saint George',
            ),
            202 => 
            array (
                'id' => 203,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 9,
                'name' => 'Saint John',
            ),
            203 => 
            array (
                'id' => 204,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 9,
                'name' => 'Saint Mary',
            ),
            204 => 
            array (
                'id' => 205,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 9,
                'name' => 'Saint Paul',
            ),
            205 => 
            array (
                'id' => 206,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 9,
                'name' => 'Saint Peter',
            ),
            206 => 
            array (
                'id' => 207,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 9,
                'name' => 'Saint Philip',
            ),
            207 => 
            array (
                'id' => 208,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 10,
                'name' => 'Buenos Aires',
            ),
            208 => 
            array (
                'id' => 209,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 10,
                'name' => 'Catamarca',
            ),
            209 => 
            array (
                'id' => 210,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 10,
                'name' => 'Chaco',
            ),
            210 => 
            array (
                'id' => 211,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 10,
                'name' => 'Chubut',
            ),
            211 => 
            array (
                'id' => 212,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 10,
                'name' => 'Cordoba',
            ),
            212 => 
            array (
                'id' => 213,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 10,
                'name' => 'Corrientes',
            ),
            213 => 
            array (
                'id' => 214,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 10,
                'name' => 'Distrito Federal',
            ),
            214 => 
            array (
                'id' => 215,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 10,
                'name' => 'Entre Rios',
            ),
            215 => 
            array (
                'id' => 216,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 10,
                'name' => 'Formosa',
            ),
            216 => 
            array (
                'id' => 217,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 10,
                'name' => 'Jujuy',
            ),
            217 => 
            array (
                'id' => 218,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 10,
                'name' => 'La Pampa',
            ),
            218 => 
            array (
                'id' => 219,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 10,
                'name' => 'La Rioja',
            ),
            219 => 
            array (
                'id' => 220,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 10,
                'name' => 'Mendoza',
            ),
            220 => 
            array (
                'id' => 221,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 10,
                'name' => 'Misiones',
            ),
            221 => 
            array (
                'id' => 222,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 10,
                'name' => 'Neuquen',
            ),
            222 => 
            array (
                'id' => 223,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 10,
                'name' => 'Rio Negro',
            ),
            223 => 
            array (
                'id' => 224,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 10,
                'name' => 'Salta',
            ),
            224 => 
            array (
                'id' => 225,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 10,
                'name' => 'San Juan',
            ),
            225 => 
            array (
                'id' => 226,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 10,
                'name' => 'San Luis',
            ),
            226 => 
            array (
                'id' => 227,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 10,
                'name' => 'Santa Cruz',
            ),
            227 => 
            array (
                'id' => 228,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 10,
                'name' => 'Santa Fe',
            ),
            228 => 
            array (
                'id' => 229,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 10,
                'name' => 'Santiago del Estero',
            ),
            229 => 
            array (
                'id' => 230,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 10,
                'name' => 'Tierra del Fuego',
            ),
            230 => 
            array (
                'id' => 231,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 10,
                'name' => 'Tucuman',
            ),
            231 => 
            array (
                'id' => 232,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 11,
                'name' => 'Aragatsotn',
            ),
            232 => 
            array (
                'id' => 233,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 11,
                'name' => 'Ararat',
            ),
            233 => 
            array (
                'id' => 234,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 11,
                'name' => 'Armavir',
            ),
            234 => 
            array (
                'id' => 235,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 11,
                'name' => 'Gegharkunik',
            ),
            235 => 
            array (
                'id' => 236,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 11,
                'name' => 'Kotaik',
            ),
            236 => 
            array (
                'id' => 237,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 11,
                'name' => 'Lori',
            ),
            237 => 
            array (
                'id' => 238,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 11,
                'name' => 'Shirak',
            ),
            238 => 
            array (
                'id' => 239,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 11,
                'name' => 'Stepanakert',
            ),
            239 => 
            array (
                'id' => 240,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 11,
                'name' => 'Syunik',
            ),
            240 => 
            array (
                'id' => 241,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 11,
                'name' => 'Tavush',
            ),
            241 => 
            array (
                'id' => 242,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 11,
                'name' => 'Vayots Dzor',
            ),
            242 => 
            array (
                'id' => 243,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 11,
                'name' => 'Yerevan',
            ),
            243 => 
            array (
                'id' => 244,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 12,
                'name' => 'Aruba',
            ),
            244 => 
            array (
                'id' => 245,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 13,
                'name' => 'Auckland',
            ),
            245 => 
            array (
                'id' => 246,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 13,
                'name' => 'Australian Capital Territory',
            ),
            246 => 
            array (
                'id' => 247,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 13,
                'name' => 'Balgowlah',
            ),
            247 => 
            array (
                'id' => 248,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 13,
                'name' => 'Balmain',
            ),
            248 => 
            array (
                'id' => 249,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 13,
                'name' => 'Bankstown',
            ),
            249 => 
            array (
                'id' => 250,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 13,
                'name' => 'Baulkham Hills',
            ),
            250 => 
            array (
                'id' => 251,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 13,
                'name' => 'Bonnet Bay',
            ),
            251 => 
            array (
                'id' => 252,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 13,
                'name' => 'Camberwell',
            ),
            252 => 
            array (
                'id' => 253,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 13,
                'name' => 'Carole Park',
            ),
            253 => 
            array (
                'id' => 254,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 13,
                'name' => 'Castle Hill',
            ),
            254 => 
            array (
                'id' => 255,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 13,
                'name' => 'Caulfield',
            ),
            255 => 
            array (
                'id' => 256,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 13,
                'name' => 'Chatswood',
            ),
            256 => 
            array (
                'id' => 257,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 13,
                'name' => 'Cheltenham',
            ),
            257 => 
            array (
                'id' => 258,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 13,
                'name' => 'Cherrybrook',
            ),
            258 => 
            array (
                'id' => 259,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 13,
                'name' => 'Clayton',
            ),
            259 => 
            array (
                'id' => 260,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 13,
                'name' => 'Collingwood',
            ),
            260 => 
            array (
                'id' => 261,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 13,
                'name' => 'Frenchs Forest',
            ),
            261 => 
            array (
                'id' => 262,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 13,
                'name' => 'Hawthorn',
            ),
            262 => 
            array (
                'id' => 263,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 13,
                'name' => 'Jannnali',
            ),
            263 => 
            array (
                'id' => 264,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 13,
                'name' => 'Knoxfield',
            ),
            264 => 
            array (
                'id' => 265,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 13,
                'name' => 'Melbourne',
            ),
            265 => 
            array (
                'id' => 266,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 13,
                'name' => 'New South Wales',
            ),
            266 => 
            array (
                'id' => 267,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 13,
                'name' => 'Northern Territory',
            ),
            267 => 
            array (
                'id' => 268,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 13,
                'name' => 'Perth',
            ),
            268 => 
            array (
                'id' => 269,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 13,
                'name' => 'Queensland',
            ),
            269 => 
            array (
                'id' => 270,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 13,
                'name' => 'South Australia',
            ),
            270 => 
            array (
                'id' => 271,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 13,
                'name' => 'Tasmania',
            ),
            271 => 
            array (
                'id' => 272,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 13,
                'name' => 'Templestowe',
            ),
            272 => 
            array (
                'id' => 273,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 13,
                'name' => 'Victoria',
            ),
            273 => 
            array (
                'id' => 274,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 13,
                'name' => 'Werribee south',
            ),
            274 => 
            array (
                'id' => 275,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 13,
                'name' => 'Western Australia',
            ),
            275 => 
            array (
                'id' => 276,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 13,
                'name' => 'Wheeler',
            ),
            276 => 
            array (
                'id' => 277,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 14,
                'name' => 'Bundesland Salzburg',
            ),
            277 => 
            array (
                'id' => 278,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 14,
                'name' => 'Bundesland Steiermark',
            ),
            278 => 
            array (
                'id' => 279,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 14,
                'name' => 'Bundesland Tirol',
            ),
            279 => 
            array (
                'id' => 280,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 14,
                'name' => 'Burgenland',
            ),
            280 => 
            array (
                'id' => 281,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 14,
                'name' => 'Carinthia',
            ),
            281 => 
            array (
                'id' => 282,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 14,
                'name' => 'Karnten',
            ),
            282 => 
            array (
                'id' => 283,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 14,
                'name' => 'Liezen',
            ),
            283 => 
            array (
                'id' => 284,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 14,
                'name' => 'Lower Austria',
            ),
            284 => 
            array (
                'id' => 285,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 14,
                'name' => 'Niederosterreich',
            ),
            285 => 
            array (
                'id' => 286,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 14,
                'name' => 'Oberosterreich',
            ),
            286 => 
            array (
                'id' => 287,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 14,
                'name' => 'Salzburg',
            ),
            287 => 
            array (
                'id' => 288,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 14,
                'name' => 'Schleswig-Holstein',
            ),
            288 => 
            array (
                'id' => 289,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 14,
                'name' => 'Steiermark',
            ),
            289 => 
            array (
                'id' => 290,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 14,
                'name' => 'Styria',
            ),
            290 => 
            array (
                'id' => 291,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 14,
                'name' => 'Tirol',
            ),
            291 => 
            array (
                'id' => 292,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 14,
                'name' => 'Upper Austria',
            ),
            292 => 
            array (
                'id' => 293,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 14,
                'name' => 'Vorarlberg',
            ),
            293 => 
            array (
                'id' => 294,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 14,
                'name' => 'Wien',
            ),
            294 => 
            array (
                'id' => 295,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 15,
                'name' => 'Abseron',
            ),
            295 => 
            array (
                'id' => 296,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 15,
                'name' => 'Baki Sahari',
            ),
            296 => 
            array (
                'id' => 297,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 15,
                'name' => 'Ganca',
            ),
            297 => 
            array (
                'id' => 298,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 15,
                'name' => 'Ganja',
            ),
            298 => 
            array (
                'id' => 299,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 15,
                'name' => 'Kalbacar',
            ),
            299 => 
            array (
                'id' => 300,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 15,
                'name' => 'Lankaran',
            ),
            300 => 
            array (
                'id' => 301,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 15,
                'name' => 'Mil-Qarabax',
            ),
            301 => 
            array (
                'id' => 302,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 15,
                'name' => 'Mugan-Salyan',
            ),
            302 => 
            array (
                'id' => 303,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 15,
                'name' => 'Nagorni-Qarabax',
            ),
            303 => 
            array (
                'id' => 304,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 15,
                'name' => 'Naxcivan',
            ),
            304 => 
            array (
                'id' => 305,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 15,
                'name' => 'Priaraks',
            ),
            305 => 
            array (
                'id' => 306,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 15,
                'name' => 'Qazax',
            ),
            306 => 
            array (
                'id' => 307,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 15,
                'name' => 'Saki',
            ),
            307 => 
            array (
                'id' => 308,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 15,
                'name' => 'Sirvan',
            ),
            308 => 
            array (
                'id' => 309,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 15,
                'name' => 'Xacmaz',
            ),
            309 => 
            array (
                'id' => 310,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 16,
                'name' => 'Abaco',
            ),
            310 => 
            array (
                'id' => 311,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 16,
                'name' => 'Acklins Island',
            ),
            311 => 
            array (
                'id' => 312,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 16,
                'name' => 'Andros',
            ),
            312 => 
            array (
                'id' => 313,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 16,
                'name' => 'Berry Islands',
            ),
            313 => 
            array (
                'id' => 314,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 16,
                'name' => 'Biminis',
            ),
            314 => 
            array (
                'id' => 315,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 16,
                'name' => 'Cat Island',
            ),
            315 => 
            array (
                'id' => 316,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 16,
                'name' => 'Crooked Island',
            ),
            316 => 
            array (
                'id' => 317,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 16,
                'name' => 'Eleuthera',
            ),
            317 => 
            array (
                'id' => 318,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 16,
                'name' => 'Exuma and Cays',
            ),
            318 => 
            array (
                'id' => 319,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 16,
                'name' => 'Grand Bahama',
            ),
            319 => 
            array (
                'id' => 320,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 16,
                'name' => 'Inagua Islands',
            ),
            320 => 
            array (
                'id' => 321,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 16,
                'name' => 'Long Island',
            ),
            321 => 
            array (
                'id' => 322,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 16,
                'name' => 'Mayaguana',
            ),
            322 => 
            array (
                'id' => 323,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 16,
                'name' => 'New Providence',
            ),
            323 => 
            array (
                'id' => 324,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 16,
                'name' => 'Ragged Island',
            ),
            324 => 
            array (
                'id' => 325,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 16,
                'name' => 'Rum Cay',
            ),
            325 => 
            array (
                'id' => 326,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 16,
                'name' => 'San Salvador',
            ),
            326 => 
            array (
                'id' => 327,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 17,
                'name' => '\'Isa',
            ),
            327 => 
            array (
                'id' => 328,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 17,
                'name' => 'Badiyah',
            ),
            328 => 
            array (
                'id' => 329,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 17,
                'name' => 'Hidd',
            ),
            329 => 
            array (
                'id' => 330,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 17,
                'name' => 'Jidd Hafs',
            ),
            330 => 
            array (
                'id' => 331,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 17,
                'name' => 'Mahama',
            ),
            331 => 
            array (
                'id' => 332,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 17,
                'name' => 'Manama',
            ),
            332 => 
            array (
                'id' => 333,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 17,
                'name' => 'Sitrah',
            ),
            333 => 
            array (
                'id' => 334,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 17,
                'name' => 'al-Manamah',
            ),
            334 => 
            array (
                'id' => 335,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 17,
                'name' => 'al-Muharraq',
            ),
            335 => 
            array (
                'id' => 336,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 17,
                'name' => 'ar-Rifa\'a',
            ),
            336 => 
            array (
                'id' => 337,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 18,
                'name' => 'Bagar Hat',
            ),
            337 => 
            array (
                'id' => 338,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 18,
                'name' => 'Bandarban',
            ),
            338 => 
            array (
                'id' => 339,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 18,
                'name' => 'Barguna',
            ),
            339 => 
            array (
                'id' => 340,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 18,
                'name' => 'Barisal',
            ),
            340 => 
            array (
                'id' => 341,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 18,
                'name' => 'Bhola',
            ),
            341 => 
            array (
                'id' => 342,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 18,
                'name' => 'Bogora',
            ),
            342 => 
            array (
                'id' => 343,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 18,
                'name' => 'Brahman Bariya',
            ),
            343 => 
            array (
                'id' => 344,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 18,
                'name' => 'Chandpur',
            ),
            344 => 
            array (
                'id' => 345,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 18,
                'name' => 'Chattagam',
            ),
            345 => 
            array (
                'id' => 346,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 18,
                'name' => 'Chittagong Division',
            ),
            346 => 
            array (
                'id' => 347,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 18,
                'name' => 'Chuadanga',
            ),
            347 => 
            array (
                'id' => 348,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 18,
                'name' => 'Dhaka',
            ),
            348 => 
            array (
                'id' => 349,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 18,
                'name' => 'Dinajpur',
            ),
            349 => 
            array (
                'id' => 350,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 18,
                'name' => 'Faridpur',
            ),
            350 => 
            array (
                'id' => 351,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 18,
                'name' => 'Feni',
            ),
            351 => 
            array (
                'id' => 352,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 18,
                'name' => 'Gaybanda',
            ),
            352 => 
            array (
                'id' => 353,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 18,
                'name' => 'Gazipur',
            ),
            353 => 
            array (
                'id' => 354,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 18,
                'name' => 'Gopalganj',
            ),
            354 => 
            array (
                'id' => 355,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 18,
                'name' => 'Habiganj',
            ),
            355 => 
            array (
                'id' => 356,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 18,
                'name' => 'Jaipur Hat',
            ),
            356 => 
            array (
                'id' => 357,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 18,
                'name' => 'Jamalpur',
            ),
            357 => 
            array (
                'id' => 358,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 18,
                'name' => 'Jessor',
            ),
            358 => 
            array (
                'id' => 359,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 18,
                'name' => 'Jhalakati',
            ),
            359 => 
            array (
                'id' => 360,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 18,
                'name' => 'Jhanaydah',
            ),
            360 => 
            array (
                'id' => 361,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 18,
                'name' => 'Khagrachhari',
            ),
            361 => 
            array (
                'id' => 362,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 18,
                'name' => 'Khulna',
            ),
            362 => 
            array (
                'id' => 363,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 18,
                'name' => 'Kishorganj',
            ),
            363 => 
            array (
                'id' => 364,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 18,
                'name' => 'Koks Bazar',
            ),
            364 => 
            array (
                'id' => 365,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 18,
                'name' => 'Komilla',
            ),
            365 => 
            array (
                'id' => 366,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 18,
                'name' => 'Kurigram',
            ),
            366 => 
            array (
                'id' => 367,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 18,
                'name' => 'Kushtiya',
            ),
            367 => 
            array (
                'id' => 368,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 18,
                'name' => 'Lakshmipur',
            ),
            368 => 
            array (
                'id' => 369,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 18,
                'name' => 'Lalmanir Hat',
            ),
            369 => 
            array (
                'id' => 370,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 18,
                'name' => 'Madaripur',
            ),
            370 => 
            array (
                'id' => 371,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 18,
                'name' => 'Magura',
            ),
            371 => 
            array (
                'id' => 372,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 18,
                'name' => 'Maimansingh',
            ),
            372 => 
            array (
                'id' => 373,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 18,
                'name' => 'Manikganj',
            ),
            373 => 
            array (
                'id' => 374,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 18,
                'name' => 'Maulvi Bazar',
            ),
            374 => 
            array (
                'id' => 375,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 18,
                'name' => 'Meherpur',
            ),
            375 => 
            array (
                'id' => 376,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 18,
                'name' => 'Munshiganj',
            ),
            376 => 
            array (
                'id' => 377,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 18,
                'name' => 'Naral',
            ),
            377 => 
            array (
                'id' => 378,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 18,
                'name' => 'Narayanganj',
            ),
            378 => 
            array (
                'id' => 379,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 18,
                'name' => 'Narsingdi',
            ),
            379 => 
            array (
                'id' => 380,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 18,
                'name' => 'Nator',
            ),
            380 => 
            array (
                'id' => 381,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 18,
                'name' => 'Naugaon',
            ),
            381 => 
            array (
                'id' => 382,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 18,
                'name' => 'Nawabganj',
            ),
            382 => 
            array (
                'id' => 383,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 18,
                'name' => 'Netrakona',
            ),
            383 => 
            array (
                'id' => 384,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 18,
                'name' => 'Nilphamari',
            ),
            384 => 
            array (
                'id' => 385,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 18,
                'name' => 'Noakhali',
            ),
            385 => 
            array (
                'id' => 386,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 18,
                'name' => 'Pabna',
            ),
            386 => 
            array (
                'id' => 387,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 18,
                'name' => 'Panchagarh',
            ),
            387 => 
            array (
                'id' => 388,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 18,
                'name' => 'Patuakhali',
            ),
            388 => 
            array (
                'id' => 389,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 18,
                'name' => 'Pirojpur',
            ),
            389 => 
            array (
                'id' => 390,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 18,
                'name' => 'Rajbari',
            ),
            390 => 
            array (
                'id' => 391,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 18,
                'name' => 'Rajshahi',
            ),
            391 => 
            array (
                'id' => 392,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 18,
                'name' => 'Rangamati',
            ),
            392 => 
            array (
                'id' => 393,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 18,
                'name' => 'Rangpur',
            ),
            393 => 
            array (
                'id' => 394,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 18,
                'name' => 'Satkhira',
            ),
            394 => 
            array (
                'id' => 395,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 18,
                'name' => 'Shariatpur',
            ),
            395 => 
            array (
                'id' => 396,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 18,
                'name' => 'Sherpur',
            ),
            396 => 
            array (
                'id' => 397,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 18,
                'name' => 'Silhat',
            ),
            397 => 
            array (
                'id' => 398,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 18,
                'name' => 'Sirajganj',
            ),
            398 => 
            array (
                'id' => 399,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 18,
                'name' => 'Sunamganj',
            ),
            399 => 
            array (
                'id' => 400,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 18,
                'name' => 'Tangayal',
            ),
            400 => 
            array (
                'id' => 401,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 18,
                'name' => 'Thakurgaon',
            ),
            401 => 
            array (
                'id' => 402,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 19,
                'name' => 'Christ Church',
            ),
            402 => 
            array (
                'id' => 403,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 19,
                'name' => 'Saint Andrew',
            ),
            403 => 
            array (
                'id' => 404,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 19,
                'name' => 'Saint George',
            ),
            404 => 
            array (
                'id' => 405,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 19,
                'name' => 'Saint James',
            ),
            405 => 
            array (
                'id' => 406,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 19,
                'name' => 'Saint John',
            ),
            406 => 
            array (
                'id' => 407,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 19,
                'name' => 'Saint Joseph',
            ),
            407 => 
            array (
                'id' => 408,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 19,
                'name' => 'Saint Lucy',
            ),
            408 => 
            array (
                'id' => 409,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 19,
                'name' => 'Saint Michael',
            ),
            409 => 
            array (
                'id' => 410,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 19,
                'name' => 'Saint Peter',
            ),
            410 => 
            array (
                'id' => 411,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 19,
                'name' => 'Saint Philip',
            ),
            411 => 
            array (
                'id' => 412,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 19,
                'name' => 'Saint Thomas',
            ),
            412 => 
            array (
                'id' => 413,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 20,
                'name' => 'Brest',
            ),
            413 => 
            array (
                'id' => 414,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 20,
                'name' => 'Homjel\'',
            ),
            414 => 
            array (
                'id' => 415,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 20,
                'name' => 'Hrodna',
            ),
            415 => 
            array (
                'id' => 416,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 20,
                'name' => 'Mahiljow',
            ),
            416 => 
            array (
                'id' => 417,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 20,
                'name' => 'Mahilyowskaya Voblasts',
            ),
            417 => 
            array (
                'id' => 418,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 20,
                'name' => 'Minsk',
            ),
            418 => 
            array (
                'id' => 419,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 20,
                'name' => 'Minskaja Voblasts\'',
            ),
            419 => 
            array (
                'id' => 420,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 20,
                'name' => 'Petrik',
            ),
            420 => 
            array (
                'id' => 421,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 20,
                'name' => 'Vicebsk',
            ),
            421 => 
            array (
                'id' => 422,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 21,
                'name' => 'Antwerpen',
            ),
            422 => 
            array (
                'id' => 423,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 21,
                'name' => 'Berchem',
            ),
            423 => 
            array (
                'id' => 424,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 21,
                'name' => 'Brabant',
            ),
            424 => 
            array (
                'id' => 425,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 21,
                'name' => 'Brabant Wallon',
            ),
            425 => 
            array (
                'id' => 426,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 21,
                'name' => 'Brussel',
            ),
            426 => 
            array (
                'id' => 427,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 21,
                'name' => 'East Flanders',
            ),
            427 => 
            array (
                'id' => 428,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 21,
                'name' => 'Hainaut',
            ),
            428 => 
            array (
                'id' => 429,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 21,
                'name' => 'Liege',
            ),
            429 => 
            array (
                'id' => 430,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 21,
                'name' => 'Limburg',
            ),
            430 => 
            array (
                'id' => 431,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 21,
                'name' => 'Luxembourg',
            ),
            431 => 
            array (
                'id' => 432,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 21,
                'name' => 'Namur',
            ),
            432 => 
            array (
                'id' => 433,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 21,
                'name' => 'Ontario',
            ),
            433 => 
            array (
                'id' => 434,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 21,
                'name' => 'Oost-Vlaanderen',
            ),
            434 => 
            array (
                'id' => 435,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 21,
                'name' => 'Provincie Brabant',
            ),
            435 => 
            array (
                'id' => 436,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 21,
                'name' => 'Vlaams-Brabant',
            ),
            436 => 
            array (
                'id' => 437,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 21,
                'name' => 'Wallonne',
            ),
            437 => 
            array (
                'id' => 438,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 21,
                'name' => 'West-Vlaanderen',
            ),
            438 => 
            array (
                'id' => 439,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 22,
                'name' => 'Belize',
            ),
            439 => 
            array (
                'id' => 440,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 22,
                'name' => 'Cayo',
            ),
            440 => 
            array (
                'id' => 441,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 22,
                'name' => 'Corozal',
            ),
            441 => 
            array (
                'id' => 442,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 22,
                'name' => 'Orange Walk',
            ),
            442 => 
            array (
                'id' => 443,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 22,
                'name' => 'Stann Creek',
            ),
            443 => 
            array (
                'id' => 444,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 22,
                'name' => 'Toledo',
            ),
            444 => 
            array (
                'id' => 445,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 23,
                'name' => 'Alibori',
            ),
            445 => 
            array (
                'id' => 446,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 23,
                'name' => 'Atacora',
            ),
            446 => 
            array (
                'id' => 447,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 23,
                'name' => 'Atlantique',
            ),
            447 => 
            array (
                'id' => 448,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 23,
                'name' => 'Borgou',
            ),
            448 => 
            array (
                'id' => 449,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 23,
                'name' => 'Collines',
            ),
            449 => 
            array (
                'id' => 450,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 23,
                'name' => 'Couffo',
            ),
            450 => 
            array (
                'id' => 451,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 23,
                'name' => 'Donga',
            ),
            451 => 
            array (
                'id' => 452,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 23,
                'name' => 'Littoral',
            ),
            452 => 
            array (
                'id' => 453,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 23,
                'name' => 'Mono',
            ),
            453 => 
            array (
                'id' => 454,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 23,
                'name' => 'Oueme',
            ),
            454 => 
            array (
                'id' => 455,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 23,
                'name' => 'Plateau',
            ),
            455 => 
            array (
                'id' => 456,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 23,
                'name' => 'Zou',
            ),
            456 => 
            array (
                'id' => 457,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 24,
                'name' => 'Hamilton',
            ),
            457 => 
            array (
                'id' => 458,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 24,
                'name' => 'Saint George',
            ),
            458 => 
            array (
                'id' => 459,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 25,
                'name' => 'Bumthang',
            ),
            459 => 
            array (
                'id' => 460,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 25,
                'name' => 'Chhukha',
            ),
            460 => 
            array (
                'id' => 461,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 25,
                'name' => 'Chirang',
            ),
            461 => 
            array (
                'id' => 462,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 25,
                'name' => 'Daga',
            ),
            462 => 
            array (
                'id' => 463,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 25,
                'name' => 'Geylegphug',
            ),
            463 => 
            array (
                'id' => 464,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 25,
                'name' => 'Ha',
            ),
            464 => 
            array (
                'id' => 465,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 25,
                'name' => 'Lhuntshi',
            ),
            465 => 
            array (
                'id' => 466,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 25,
                'name' => 'Mongar',
            ),
            466 => 
            array (
                'id' => 467,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 25,
                'name' => 'Pemagatsel',
            ),
            467 => 
            array (
                'id' => 468,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 25,
                'name' => 'Punakha',
            ),
            468 => 
            array (
                'id' => 469,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 25,
                'name' => 'Rinpung',
            ),
            469 => 
            array (
                'id' => 470,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 25,
                'name' => 'Samchi',
            ),
            470 => 
            array (
                'id' => 471,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 25,
                'name' => 'Samdrup Jongkhar',
            ),
            471 => 
            array (
                'id' => 472,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 25,
                'name' => 'Shemgang',
            ),
            472 => 
            array (
                'id' => 473,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 25,
                'name' => 'Tashigang',
            ),
            473 => 
            array (
                'id' => 474,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 25,
                'name' => 'Timphu',
            ),
            474 => 
            array (
                'id' => 475,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 25,
                'name' => 'Tongsa',
            ),
            475 => 
            array (
                'id' => 476,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 25,
                'name' => 'Wangdiphodrang',
            ),
            476 => 
            array (
                'id' => 477,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 26,
                'name' => 'Beni',
            ),
            477 => 
            array (
                'id' => 478,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 26,
                'name' => 'Chuquisaca',
            ),
            478 => 
            array (
                'id' => 479,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 26,
                'name' => 'Cochabamba',
            ),
            479 => 
            array (
                'id' => 480,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 26,
                'name' => 'La Paz',
            ),
            480 => 
            array (
                'id' => 481,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 26,
                'name' => 'Oruro',
            ),
            481 => 
            array (
                'id' => 482,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 26,
                'name' => 'Pando',
            ),
            482 => 
            array (
                'id' => 483,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 26,
                'name' => 'Potosi',
            ),
            483 => 
            array (
                'id' => 484,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 26,
                'name' => 'Santa Cruz',
            ),
            484 => 
            array (
                'id' => 485,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 26,
                'name' => 'Tarija',
            ),
            485 => 
            array (
                'id' => 486,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 27,
                'name' => 'Federacija Bosna i Hercegovina',
            ),
            486 => 
            array (
                'id' => 487,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 27,
                'name' => 'Republika Srpska',
            ),
            487 => 
            array (
                'id' => 488,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 28,
                'name' => 'Central Bobonong',
            ),
            488 => 
            array (
                'id' => 489,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 28,
                'name' => 'Central Boteti',
            ),
            489 => 
            array (
                'id' => 490,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 28,
                'name' => 'Central Mahalapye',
            ),
            490 => 
            array (
                'id' => 491,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 28,
                'name' => 'Central Serowe-Palapye',
            ),
            491 => 
            array (
                'id' => 492,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 28,
                'name' => 'Central Tutume',
            ),
            492 => 
            array (
                'id' => 493,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 28,
                'name' => 'Chobe',
            ),
            493 => 
            array (
                'id' => 494,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 28,
                'name' => 'Francistown',
            ),
            494 => 
            array (
                'id' => 495,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 28,
                'name' => 'Gaborone',
            ),
            495 => 
            array (
                'id' => 496,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 28,
                'name' => 'Ghanzi',
            ),
            496 => 
            array (
                'id' => 497,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 28,
                'name' => 'Jwaneng',
            ),
            497 => 
            array (
                'id' => 498,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 28,
                'name' => 'Kgalagadi North',
            ),
            498 => 
            array (
                'id' => 499,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 28,
                'name' => 'Kgalagadi South',
            ),
            499 => 
            array (
                'id' => 500,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 28,
                'name' => 'Kgatleng',
            ),
        ));
        \DB::table('states')->insert(array (
            0 => 
            array (
                'id' => 501,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 28,
                'name' => 'Kweneng',
            ),
            1 => 
            array (
                'id' => 502,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 28,
                'name' => 'Lobatse',
            ),
            2 => 
            array (
                'id' => 503,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 28,
                'name' => 'Ngamiland',
            ),
            3 => 
            array (
                'id' => 504,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 28,
                'name' => 'Ngwaketse',
            ),
            4 => 
            array (
                'id' => 505,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 28,
                'name' => 'North East',
            ),
            5 => 
            array (
                'id' => 506,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 28,
                'name' => 'Okavango',
            ),
            6 => 
            array (
                'id' => 507,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 28,
                'name' => 'Orapa',
            ),
            7 => 
            array (
                'id' => 508,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 28,
                'name' => 'Selibe Phikwe',
            ),
            8 => 
            array (
                'id' => 509,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 28,
                'name' => 'South East',
            ),
            9 => 
            array (
                'id' => 510,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 28,
                'name' => 'Sowa',
            ),
            10 => 
            array (
                'id' => 511,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 29,
                'name' => 'Bouvet Island',
            ),
            11 => 
            array (
                'id' => 512,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 30,
                'name' => 'Acre',
            ),
            12 => 
            array (
                'id' => 513,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 30,
                'name' => 'Alagoas',
            ),
            13 => 
            array (
                'id' => 514,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 30,
                'name' => 'Amapa',
            ),
            14 => 
            array (
                'id' => 515,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 30,
                'name' => 'Amazonas',
            ),
            15 => 
            array (
                'id' => 516,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 30,
                'name' => 'Bahia',
            ),
            16 => 
            array (
                'id' => 517,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 30,
                'name' => 'Ceara',
            ),
            17 => 
            array (
                'id' => 518,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 30,
                'name' => 'Distrito Federal',
            ),
            18 => 
            array (
                'id' => 519,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 30,
                'name' => 'Espirito Santo',
            ),
            19 => 
            array (
                'id' => 520,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 30,
                'name' => 'Estado de Sao Paulo',
            ),
            20 => 
            array (
                'id' => 521,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 30,
                'name' => 'Goias',
            ),
            21 => 
            array (
                'id' => 522,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 30,
                'name' => 'Maranhao',
            ),
            22 => 
            array (
                'id' => 523,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 30,
                'name' => 'Mato Grosso',
            ),
            23 => 
            array (
                'id' => 524,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 30,
                'name' => 'Mato Grosso do Sul',
            ),
            24 => 
            array (
                'id' => 525,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 30,
                'name' => 'Minas Gerais',
            ),
            25 => 
            array (
                'id' => 526,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 30,
                'name' => 'Para',
            ),
            26 => 
            array (
                'id' => 527,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 30,
                'name' => 'Paraiba',
            ),
            27 => 
            array (
                'id' => 528,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 30,
                'name' => 'Parana',
            ),
            28 => 
            array (
                'id' => 529,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 30,
                'name' => 'Pernambuco',
            ),
            29 => 
            array (
                'id' => 530,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 30,
                'name' => 'Piaui',
            ),
            30 => 
            array (
                'id' => 531,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 30,
                'name' => 'Rio Grande do Norte',
            ),
            31 => 
            array (
                'id' => 532,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 30,
                'name' => 'Rio Grande do Sul',
            ),
            32 => 
            array (
                'id' => 533,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 30,
                'name' => 'Rio de Janeiro',
            ),
            33 => 
            array (
                'id' => 534,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 30,
                'name' => 'Rondonia',
            ),
            34 => 
            array (
                'id' => 535,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 30,
                'name' => 'Roraima',
            ),
            35 => 
            array (
                'id' => 536,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 30,
                'name' => 'Santa Catarina',
            ),
            36 => 
            array (
                'id' => 537,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 30,
                'name' => 'Sao Paulo',
            ),
            37 => 
            array (
                'id' => 538,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 30,
                'name' => 'Sergipe',
            ),
            38 => 
            array (
                'id' => 539,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 30,
                'name' => 'Tocantins',
            ),
            39 => 
            array (
                'id' => 540,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 31,
                'name' => 'British Indian Ocean Territory',
            ),
            40 => 
            array (
                'id' => 541,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 32,
                'name' => 'Belait',
            ),
            41 => 
            array (
                'id' => 542,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 32,
                'name' => 'Brunei-Muara',
            ),
            42 => 
            array (
                'id' => 543,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 32,
                'name' => 'Temburong',
            ),
            43 => 
            array (
                'id' => 544,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 32,
                'name' => 'Tutong',
            ),
            44 => 
            array (
                'id' => 545,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 33,
                'name' => 'Blagoevgrad',
            ),
            45 => 
            array (
                'id' => 546,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 33,
                'name' => 'Burgas',
            ),
            46 => 
            array (
                'id' => 547,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 33,
                'name' => 'Dobrich',
            ),
            47 => 
            array (
                'id' => 548,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 33,
                'name' => 'Gabrovo',
            ),
            48 => 
            array (
                'id' => 549,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 33,
                'name' => 'Haskovo',
            ),
            49 => 
            array (
                'id' => 550,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 33,
                'name' => 'Jambol',
            ),
            50 => 
            array (
                'id' => 551,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 33,
                'name' => 'Kardzhali',
            ),
            51 => 
            array (
                'id' => 552,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 33,
                'name' => 'Kjustendil',
            ),
            52 => 
            array (
                'id' => 553,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 33,
                'name' => 'Lovech',
            ),
            53 => 
            array (
                'id' => 554,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 33,
                'name' => 'Montana',
            ),
            54 => 
            array (
                'id' => 555,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 33,
                'name' => 'Oblast Sofiya-Grad',
            ),
            55 => 
            array (
                'id' => 556,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 33,
                'name' => 'Pazardzhik',
            ),
            56 => 
            array (
                'id' => 557,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 33,
                'name' => 'Pernik',
            ),
            57 => 
            array (
                'id' => 558,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 33,
                'name' => 'Pleven',
            ),
            58 => 
            array (
                'id' => 559,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 33,
                'name' => 'Plovdiv',
            ),
            59 => 
            array (
                'id' => 560,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 33,
                'name' => 'Razgrad',
            ),
            60 => 
            array (
                'id' => 561,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 33,
                'name' => 'Ruse',
            ),
            61 => 
            array (
                'id' => 562,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 33,
                'name' => 'Shumen',
            ),
            62 => 
            array (
                'id' => 563,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 33,
                'name' => 'Silistra',
            ),
            63 => 
            array (
                'id' => 564,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 33,
                'name' => 'Sliven',
            ),
            64 => 
            array (
                'id' => 565,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 33,
                'name' => 'Smoljan',
            ),
            65 => 
            array (
                'id' => 566,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 33,
                'name' => 'Sofija grad',
            ),
            66 => 
            array (
                'id' => 567,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 33,
                'name' => 'Sofijska oblast',
            ),
            67 => 
            array (
                'id' => 568,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 33,
                'name' => 'Stara Zagora',
            ),
            68 => 
            array (
                'id' => 569,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 33,
                'name' => 'Targovishte',
            ),
            69 => 
            array (
                'id' => 570,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 33,
                'name' => 'Varna',
            ),
            70 => 
            array (
                'id' => 571,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 33,
                'name' => 'Veliko Tarnovo',
            ),
            71 => 
            array (
                'id' => 572,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 33,
                'name' => 'Vidin',
            ),
            72 => 
            array (
                'id' => 573,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 33,
                'name' => 'Vraca',
            ),
            73 => 
            array (
                'id' => 574,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 33,
                'name' => 'Yablaniza',
            ),
            74 => 
            array (
                'id' => 575,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 34,
                'name' => 'Bale',
            ),
            75 => 
            array (
                'id' => 576,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 34,
                'name' => 'Bam',
            ),
            76 => 
            array (
                'id' => 577,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 34,
                'name' => 'Bazega',
            ),
            77 => 
            array (
                'id' => 578,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 34,
                'name' => 'Bougouriba',
            ),
            78 => 
            array (
                'id' => 579,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 34,
                'name' => 'Boulgou',
            ),
            79 => 
            array (
                'id' => 580,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 34,
                'name' => 'Boulkiemde',
            ),
            80 => 
            array (
                'id' => 581,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 34,
                'name' => 'Comoe',
            ),
            81 => 
            array (
                'id' => 582,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 34,
                'name' => 'Ganzourgou',
            ),
            82 => 
            array (
                'id' => 583,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 34,
                'name' => 'Gnagna',
            ),
            83 => 
            array (
                'id' => 584,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 34,
                'name' => 'Gourma',
            ),
            84 => 
            array (
                'id' => 585,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 34,
                'name' => 'Houet',
            ),
            85 => 
            array (
                'id' => 586,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 34,
                'name' => 'Ioba',
            ),
            86 => 
            array (
                'id' => 587,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 34,
                'name' => 'Kadiogo',
            ),
            87 => 
            array (
                'id' => 588,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 34,
                'name' => 'Kenedougou',
            ),
            88 => 
            array (
                'id' => 589,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 34,
                'name' => 'Komandjari',
            ),
            89 => 
            array (
                'id' => 590,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 34,
                'name' => 'Kompienga',
            ),
            90 => 
            array (
                'id' => 591,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 34,
                'name' => 'Kossi',
            ),
            91 => 
            array (
                'id' => 592,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 34,
                'name' => 'Kouritenga',
            ),
            92 => 
            array (
                'id' => 593,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 34,
                'name' => 'Kourweogo',
            ),
            93 => 
            array (
                'id' => 594,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 34,
                'name' => 'Leraba',
            ),
            94 => 
            array (
                'id' => 595,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 34,
                'name' => 'Mouhoun',
            ),
            95 => 
            array (
                'id' => 596,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 34,
                'name' => 'Nahouri',
            ),
            96 => 
            array (
                'id' => 597,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 34,
                'name' => 'Namentenga',
            ),
            97 => 
            array (
                'id' => 598,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 34,
                'name' => 'Noumbiel',
            ),
            98 => 
            array (
                'id' => 599,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 34,
                'name' => 'Oubritenga',
            ),
            99 => 
            array (
                'id' => 600,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 34,
                'name' => 'Oudalan',
            ),
            100 => 
            array (
                'id' => 601,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 34,
                'name' => 'Passore',
            ),
            101 => 
            array (
                'id' => 602,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 34,
                'name' => 'Poni',
            ),
            102 => 
            array (
                'id' => 603,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 34,
                'name' => 'Sanguie',
            ),
            103 => 
            array (
                'id' => 604,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 34,
                'name' => 'Sanmatenga',
            ),
            104 => 
            array (
                'id' => 605,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 34,
                'name' => 'Seno',
            ),
            105 => 
            array (
                'id' => 606,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 34,
                'name' => 'Sissili',
            ),
            106 => 
            array (
                'id' => 607,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 34,
                'name' => 'Soum',
            ),
            107 => 
            array (
                'id' => 608,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 34,
                'name' => 'Sourou',
            ),
            108 => 
            array (
                'id' => 609,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 34,
                'name' => 'Tapoa',
            ),
            109 => 
            array (
                'id' => 610,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 34,
                'name' => 'Tuy',
            ),
            110 => 
            array (
                'id' => 611,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 34,
                'name' => 'Yatenga',
            ),
            111 => 
            array (
                'id' => 612,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 34,
                'name' => 'Zondoma',
            ),
            112 => 
            array (
                'id' => 613,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 34,
                'name' => 'Zoundweogo',
            ),
            113 => 
            array (
                'id' => 614,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 35,
                'name' => 'Bubanza',
            ),
            114 => 
            array (
                'id' => 615,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 35,
                'name' => 'Bujumbura',
            ),
            115 => 
            array (
                'id' => 616,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 35,
                'name' => 'Bururi',
            ),
            116 => 
            array (
                'id' => 617,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 35,
                'name' => 'Cankuzo',
            ),
            117 => 
            array (
                'id' => 618,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 35,
                'name' => 'Cibitoke',
            ),
            118 => 
            array (
                'id' => 619,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 35,
                'name' => 'Gitega',
            ),
            119 => 
            array (
                'id' => 620,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 35,
                'name' => 'Karuzi',
            ),
            120 => 
            array (
                'id' => 621,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 35,
                'name' => 'Kayanza',
            ),
            121 => 
            array (
                'id' => 622,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 35,
                'name' => 'Kirundo',
            ),
            122 => 
            array (
                'id' => 623,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 35,
                'name' => 'Makamba',
            ),
            123 => 
            array (
                'id' => 624,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 35,
                'name' => 'Muramvya',
            ),
            124 => 
            array (
                'id' => 625,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 35,
                'name' => 'Muyinga',
            ),
            125 => 
            array (
                'id' => 626,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 35,
                'name' => 'Ngozi',
            ),
            126 => 
            array (
                'id' => 627,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 35,
                'name' => 'Rutana',
            ),
            127 => 
            array (
                'id' => 628,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 35,
                'name' => 'Ruyigi',
            ),
            128 => 
            array (
                'id' => 629,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 36,
                'name' => 'Banteay Mean Chey',
            ),
            129 => 
            array (
                'id' => 630,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 36,
                'name' => 'Bat Dambang',
            ),
            130 => 
            array (
                'id' => 631,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 36,
                'name' => 'Kampong Cham',
            ),
            131 => 
            array (
                'id' => 632,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 36,
                'name' => 'Kampong Chhnang',
            ),
            132 => 
            array (
                'id' => 633,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 36,
                'name' => 'Kampong Spoeu',
            ),
            133 => 
            array (
                'id' => 634,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 36,
                'name' => 'Kampong Thum',
            ),
            134 => 
            array (
                'id' => 635,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 36,
                'name' => 'Kampot',
            ),
            135 => 
            array (
                'id' => 636,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 36,
                'name' => 'Kandal',
            ),
            136 => 
            array (
                'id' => 637,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 36,
                'name' => 'Kaoh Kong',
            ),
            137 => 
            array (
                'id' => 638,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 36,
                'name' => 'Kracheh',
            ),
            138 => 
            array (
                'id' => 639,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 36,
                'name' => 'Krong Kaeb',
            ),
            139 => 
            array (
                'id' => 640,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 36,
                'name' => 'Krong Pailin',
            ),
            140 => 
            array (
                'id' => 641,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 36,
                'name' => 'Krong Preah Sihanouk',
            ),
            141 => 
            array (
                'id' => 642,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 36,
                'name' => 'Mondol Kiri',
            ),
            142 => 
            array (
                'id' => 643,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 36,
                'name' => 'Otdar Mean Chey',
            ),
            143 => 
            array (
                'id' => 644,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 36,
                'name' => 'Phnum Penh',
            ),
            144 => 
            array (
                'id' => 645,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 36,
                'name' => 'Pousat',
            ),
            145 => 
            array (
                'id' => 646,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 36,
                'name' => 'Preah Vihear',
            ),
            146 => 
            array (
                'id' => 647,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 36,
                'name' => 'Prey Veaeng',
            ),
            147 => 
            array (
                'id' => 648,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 36,
                'name' => 'Rotanak Kiri',
            ),
            148 => 
            array (
                'id' => 649,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 36,
                'name' => 'Siem Reab',
            ),
            149 => 
            array (
                'id' => 650,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 36,
                'name' => 'Stueng Traeng',
            ),
            150 => 
            array (
                'id' => 651,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 36,
                'name' => 'Svay Rieng',
            ),
            151 => 
            array (
                'id' => 652,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 36,
                'name' => 'Takaev',
            ),
            152 => 
            array (
                'id' => 653,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 37,
                'name' => 'Adamaoua',
            ),
            153 => 
            array (
                'id' => 654,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 37,
                'name' => 'Centre',
            ),
            154 => 
            array (
                'id' => 655,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 37,
                'name' => 'Est',
            ),
            155 => 
            array (
                'id' => 656,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 37,
                'name' => 'Littoral',
            ),
            156 => 
            array (
                'id' => 657,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 37,
                'name' => 'Nord',
            ),
            157 => 
            array (
                'id' => 658,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 37,
                'name' => 'Nord Extreme',
            ),
            158 => 
            array (
                'id' => 659,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 37,
                'name' => 'Nordouest',
            ),
            159 => 
            array (
                'id' => 660,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 37,
                'name' => 'Ouest',
            ),
            160 => 
            array (
                'id' => 661,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 37,
                'name' => 'Sud',
            ),
            161 => 
            array (
                'id' => 662,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 37,
                'name' => 'Sudouest',
            ),
            162 => 
            array (
                'id' => 663,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 38,
                'name' => 'Alberta',
            ),
            163 => 
            array (
                'id' => 664,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 38,
                'name' => 'British Columbia',
            ),
            164 => 
            array (
                'id' => 665,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 38,
                'name' => 'Manitoba',
            ),
            165 => 
            array (
                'id' => 666,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 38,
                'name' => 'New Brunswick',
            ),
            166 => 
            array (
                'id' => 667,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 38,
                'name' => 'Newfoundland and Labrador',
            ),
            167 => 
            array (
                'id' => 668,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 38,
                'name' => 'Northwest Territories',
            ),
            168 => 
            array (
                'id' => 669,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 38,
                'name' => 'Nova Scotia',
            ),
            169 => 
            array (
                'id' => 670,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 38,
                'name' => 'Nunavut',
            ),
            170 => 
            array (
                'id' => 671,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 38,
                'name' => 'Ontario',
            ),
            171 => 
            array (
                'id' => 672,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 38,
                'name' => 'Prince Edward Island',
            ),
            172 => 
            array (
                'id' => 673,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 38,
                'name' => 'Quebec',
            ),
            173 => 
            array (
                'id' => 674,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 38,
                'name' => 'Saskatchewan',
            ),
            174 => 
            array (
                'id' => 675,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 38,
                'name' => 'Yukon',
            ),
            175 => 
            array (
                'id' => 676,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 39,
                'name' => 'Boavista',
            ),
            176 => 
            array (
                'id' => 677,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 39,
                'name' => 'Brava',
            ),
            177 => 
            array (
                'id' => 678,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 39,
                'name' => 'Fogo',
            ),
            178 => 
            array (
                'id' => 679,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 39,
                'name' => 'Maio',
            ),
            179 => 
            array (
                'id' => 680,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 39,
                'name' => 'Sal',
            ),
            180 => 
            array (
                'id' => 681,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 39,
                'name' => 'Santo Antao',
            ),
            181 => 
            array (
                'id' => 682,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 39,
                'name' => 'Sao Nicolau',
            ),
            182 => 
            array (
                'id' => 683,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 39,
                'name' => 'Sao Tiago',
            ),
            183 => 
            array (
                'id' => 684,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 39,
                'name' => 'Sao Vicente',
            ),
            184 => 
            array (
                'id' => 685,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 40,
                'name' => 'Grand Cayman',
            ),
            185 => 
            array (
                'id' => 686,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 41,
                'name' => 'Bamingui-Bangoran',
            ),
            186 => 
            array (
                'id' => 687,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 41,
                'name' => 'Bangui',
            ),
            187 => 
            array (
                'id' => 688,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 41,
                'name' => 'Basse-Kotto',
            ),
            188 => 
            array (
                'id' => 689,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 41,
                'name' => 'Haut-Mbomou',
            ),
            189 => 
            array (
                'id' => 690,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 41,
                'name' => 'Haute-Kotto',
            ),
            190 => 
            array (
                'id' => 691,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 41,
                'name' => 'Kemo',
            ),
            191 => 
            array (
                'id' => 692,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 41,
                'name' => 'Lobaye',
            ),
            192 => 
            array (
                'id' => 693,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 41,
                'name' => 'Mambere-Kadei',
            ),
            193 => 
            array (
                'id' => 694,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 41,
                'name' => 'Mbomou',
            ),
            194 => 
            array (
                'id' => 695,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 41,
                'name' => 'Nana-Gribizi',
            ),
            195 => 
            array (
                'id' => 696,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 41,
                'name' => 'Nana-Mambere',
            ),
            196 => 
            array (
                'id' => 697,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 41,
                'name' => 'Ombella Mpoko',
            ),
            197 => 
            array (
                'id' => 698,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 41,
                'name' => 'Ouaka',
            ),
            198 => 
            array (
                'id' => 699,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 41,
                'name' => 'Ouham',
            ),
            199 => 
            array (
                'id' => 700,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 41,
                'name' => 'Ouham-Pende',
            ),
            200 => 
            array (
                'id' => 701,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 41,
                'name' => 'Sangha-Mbaere',
            ),
            201 => 
            array (
                'id' => 702,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 41,
                'name' => 'Vakaga',
            ),
            202 => 
            array (
                'id' => 703,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 42,
                'name' => 'Batha',
            ),
            203 => 
            array (
                'id' => 704,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 42,
                'name' => 'Biltine',
            ),
            204 => 
            array (
                'id' => 705,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 42,
                'name' => 'Bourkou-Ennedi-Tibesti',
            ),
            205 => 
            array (
                'id' => 706,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 42,
                'name' => 'Chari-Baguirmi',
            ),
            206 => 
            array (
                'id' => 707,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 42,
                'name' => 'Guera',
            ),
            207 => 
            array (
                'id' => 708,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 42,
                'name' => 'Kanem',
            ),
            208 => 
            array (
                'id' => 709,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 42,
                'name' => 'Lac',
            ),
            209 => 
            array (
                'id' => 710,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 42,
                'name' => 'Logone Occidental',
            ),
            210 => 
            array (
                'id' => 711,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 42,
                'name' => 'Logone Oriental',
            ),
            211 => 
            array (
                'id' => 712,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 42,
                'name' => 'Mayo-Kebbi',
            ),
            212 => 
            array (
                'id' => 713,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 42,
                'name' => 'Moyen-Chari',
            ),
            213 => 
            array (
                'id' => 714,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 42,
                'name' => 'Ouaddai',
            ),
            214 => 
            array (
                'id' => 715,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 42,
                'name' => 'Salamat',
            ),
            215 => 
            array (
                'id' => 716,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 42,
                'name' => 'Tandjile',
            ),
            216 => 
            array (
                'id' => 717,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 43,
                'name' => 'Aisen',
            ),
            217 => 
            array (
                'id' => 718,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 43,
                'name' => 'Antofagasta',
            ),
            218 => 
            array (
                'id' => 719,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 43,
                'name' => 'Araucania',
            ),
            219 => 
            array (
                'id' => 720,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 43,
                'name' => 'Atacama',
            ),
            220 => 
            array (
                'id' => 721,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 43,
                'name' => 'Bio Bio',
            ),
            221 => 
            array (
                'id' => 722,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 43,
                'name' => 'Coquimbo',
            ),
            222 => 
            array (
                'id' => 723,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 43,
                'name' => 'Libertador General Bernardo O\'',
            ),
            223 => 
            array (
                'id' => 724,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 43,
                'name' => 'Los Lagos',
            ),
            224 => 
            array (
                'id' => 725,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 43,
                'name' => 'Magellanes',
            ),
            225 => 
            array (
                'id' => 726,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 43,
                'name' => 'Maule',
            ),
            226 => 
            array (
                'id' => 727,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 43,
                'name' => 'Metropolitana',
            ),
            227 => 
            array (
                'id' => 728,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 43,
                'name' => 'Metropolitana de Santiago',
            ),
            228 => 
            array (
                'id' => 729,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 43,
                'name' => 'Tarapaca',
            ),
            229 => 
            array (
                'id' => 730,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 43,
                'name' => 'Valparaiso',
            ),
            230 => 
            array (
                'id' => 731,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 44,
                'name' => 'Anhui',
            ),
            231 => 
            array (
                'id' => 732,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 44,
                'name' => 'Anhui Province',
            ),
            232 => 
            array (
                'id' => 733,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 44,
                'name' => 'Anhui Sheng',
            ),
            233 => 
            array (
                'id' => 734,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 44,
                'name' => 'Aomen',
            ),
            234 => 
            array (
                'id' => 735,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 44,
                'name' => 'Beijing',
            ),
            235 => 
            array (
                'id' => 736,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 44,
                'name' => 'Beijing Shi',
            ),
            236 => 
            array (
                'id' => 737,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 44,
                'name' => 'Chongqing',
            ),
            237 => 
            array (
                'id' => 738,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 44,
                'name' => 'Fujian',
            ),
            238 => 
            array (
                'id' => 739,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 44,
                'name' => 'Fujian Sheng',
            ),
            239 => 
            array (
                'id' => 740,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 44,
                'name' => 'Gansu',
            ),
            240 => 
            array (
                'id' => 741,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 44,
                'name' => 'Guangdong',
            ),
            241 => 
            array (
                'id' => 742,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 44,
                'name' => 'Guangdong Sheng',
            ),
            242 => 
            array (
                'id' => 743,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 44,
                'name' => 'Guangxi',
            ),
            243 => 
            array (
                'id' => 744,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 44,
                'name' => 'Guizhou',
            ),
            244 => 
            array (
                'id' => 745,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 44,
                'name' => 'Hainan',
            ),
            245 => 
            array (
                'id' => 746,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 44,
                'name' => 'Hebei',
            ),
            246 => 
            array (
                'id' => 747,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 44,
                'name' => 'Heilongjiang',
            ),
            247 => 
            array (
                'id' => 748,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 44,
                'name' => 'Henan',
            ),
            248 => 
            array (
                'id' => 749,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 44,
                'name' => 'Hubei',
            ),
            249 => 
            array (
                'id' => 750,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 44,
                'name' => 'Hunan',
            ),
            250 => 
            array (
                'id' => 751,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 44,
                'name' => 'Jiangsu',
            ),
            251 => 
            array (
                'id' => 752,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 44,
                'name' => 'Jiangsu Sheng',
            ),
            252 => 
            array (
                'id' => 753,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 44,
                'name' => 'Jiangxi',
            ),
            253 => 
            array (
                'id' => 754,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 44,
                'name' => 'Jilin',
            ),
            254 => 
            array (
                'id' => 755,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 44,
                'name' => 'Liaoning',
            ),
            255 => 
            array (
                'id' => 756,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 44,
                'name' => 'Liaoning Sheng',
            ),
            256 => 
            array (
                'id' => 757,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 44,
                'name' => 'Nei Monggol',
            ),
            257 => 
            array (
                'id' => 758,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 44,
                'name' => 'Ningxia Hui',
            ),
            258 => 
            array (
                'id' => 759,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 44,
                'name' => 'Qinghai',
            ),
            259 => 
            array (
                'id' => 760,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 44,
                'name' => 'Shaanxi',
            ),
            260 => 
            array (
                'id' => 761,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 44,
                'name' => 'Shandong',
            ),
            261 => 
            array (
                'id' => 762,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 44,
                'name' => 'Shandong Sheng',
            ),
            262 => 
            array (
                'id' => 763,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 44,
                'name' => 'Shanghai',
            ),
            263 => 
            array (
                'id' => 764,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 44,
                'name' => 'Shanxi',
            ),
            264 => 
            array (
                'id' => 765,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 44,
                'name' => 'Sichuan',
            ),
            265 => 
            array (
                'id' => 766,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 44,
                'name' => 'Tianjin',
            ),
            266 => 
            array (
                'id' => 767,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 44,
                'name' => 'Xianggang',
            ),
            267 => 
            array (
                'id' => 768,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 44,
                'name' => 'Xinjiang',
            ),
            268 => 
            array (
                'id' => 769,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 44,
                'name' => 'Xizang',
            ),
            269 => 
            array (
                'id' => 770,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 44,
                'name' => 'Yunnan',
            ),
            270 => 
            array (
                'id' => 771,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 44,
                'name' => 'Zhejiang',
            ),
            271 => 
            array (
                'id' => 772,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 44,
                'name' => 'Zhejiang Sheng',
            ),
            272 => 
            array (
                'id' => 773,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 45,
                'name' => 'Christmas Island',
            ),
            273 => 
            array (
                'id' => 774,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 46,
            'name' => 'Cocos (Keeling) Islands',
            ),
            274 => 
            array (
                'id' => 775,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 47,
                'name' => 'Amazonas',
            ),
            275 => 
            array (
                'id' => 776,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 47,
                'name' => 'Antioquia',
            ),
            276 => 
            array (
                'id' => 777,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 47,
                'name' => 'Arauca',
            ),
            277 => 
            array (
                'id' => 778,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 47,
                'name' => 'Atlantico',
            ),
            278 => 
            array (
                'id' => 779,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 47,
                'name' => 'Bogota',
            ),
            279 => 
            array (
                'id' => 780,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 47,
                'name' => 'Bolivar',
            ),
            280 => 
            array (
                'id' => 781,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 47,
                'name' => 'Boyaca',
            ),
            281 => 
            array (
                'id' => 782,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 47,
                'name' => 'Caldas',
            ),
            282 => 
            array (
                'id' => 783,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 47,
                'name' => 'Caqueta',
            ),
            283 => 
            array (
                'id' => 784,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 47,
                'name' => 'Casanare',
            ),
            284 => 
            array (
                'id' => 785,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 47,
                'name' => 'Cauca',
            ),
            285 => 
            array (
                'id' => 786,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 47,
                'name' => 'Cesar',
            ),
            286 => 
            array (
                'id' => 787,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 47,
                'name' => 'Choco',
            ),
            287 => 
            array (
                'id' => 788,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 47,
                'name' => 'Cordoba',
            ),
            288 => 
            array (
                'id' => 789,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 47,
                'name' => 'Cundinamarca',
            ),
            289 => 
            array (
                'id' => 790,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 47,
                'name' => 'Guainia',
            ),
            290 => 
            array (
                'id' => 791,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 47,
                'name' => 'Guaviare',
            ),
            291 => 
            array (
                'id' => 792,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 47,
                'name' => 'Huila',
            ),
            292 => 
            array (
                'id' => 793,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 47,
                'name' => 'La Guajira',
            ),
            293 => 
            array (
                'id' => 794,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 47,
                'name' => 'Magdalena',
            ),
            294 => 
            array (
                'id' => 795,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 47,
                'name' => 'Meta',
            ),
            295 => 
            array (
                'id' => 796,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 47,
                'name' => 'Narino',
            ),
            296 => 
            array (
                'id' => 797,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 47,
                'name' => 'Norte de Santander',
            ),
            297 => 
            array (
                'id' => 798,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 47,
                'name' => 'Putumayo',
            ),
            298 => 
            array (
                'id' => 799,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 47,
                'name' => 'Quindio',
            ),
            299 => 
            array (
                'id' => 800,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 47,
                'name' => 'Risaralda',
            ),
            300 => 
            array (
                'id' => 801,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 47,
                'name' => 'San Andres y Providencia',
            ),
            301 => 
            array (
                'id' => 802,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 47,
                'name' => 'Santander',
            ),
            302 => 
            array (
                'id' => 803,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 47,
                'name' => 'Sucre',
            ),
            303 => 
            array (
                'id' => 804,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 47,
                'name' => 'Tolima',
            ),
            304 => 
            array (
                'id' => 805,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 47,
                'name' => 'Valle del Cauca',
            ),
            305 => 
            array (
                'id' => 806,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 47,
                'name' => 'Vaupes',
            ),
            306 => 
            array (
                'id' => 807,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 47,
                'name' => 'Vichada',
            ),
            307 => 
            array (
                'id' => 808,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 48,
                'name' => 'Mwali',
            ),
            308 => 
            array (
                'id' => 809,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 48,
                'name' => 'Njazidja',
            ),
            309 => 
            array (
                'id' => 810,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 48,
                'name' => 'Nzwani',
            ),
            310 => 
            array (
                'id' => 811,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 49,
                'name' => 'Bouenza',
            ),
            311 => 
            array (
                'id' => 812,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 49,
                'name' => 'Brazzaville',
            ),
            312 => 
            array (
                'id' => 813,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 49,
                'name' => 'Cuvette',
            ),
            313 => 
            array (
                'id' => 814,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 49,
                'name' => 'Kouilou',
            ),
            314 => 
            array (
                'id' => 815,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 49,
                'name' => 'Lekoumou',
            ),
            315 => 
            array (
                'id' => 816,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 49,
                'name' => 'Likouala',
            ),
            316 => 
            array (
                'id' => 817,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 49,
                'name' => 'Niari',
            ),
            317 => 
            array (
                'id' => 818,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 49,
                'name' => 'Plateaux',
            ),
            318 => 
            array (
                'id' => 819,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 49,
                'name' => 'Pool',
            ),
            319 => 
            array (
                'id' => 820,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 49,
                'name' => 'Sangha',
            ),
            320 => 
            array (
                'id' => 821,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 50,
                'name' => 'Bandundu',
            ),
            321 => 
            array (
                'id' => 822,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 50,
                'name' => 'Bas-Congo',
            ),
            322 => 
            array (
                'id' => 823,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 50,
                'name' => 'Equateur',
            ),
            323 => 
            array (
                'id' => 824,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 50,
                'name' => 'Haut-Congo',
            ),
            324 => 
            array (
                'id' => 825,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 50,
                'name' => 'Kasai-Occidental',
            ),
            325 => 
            array (
                'id' => 826,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 50,
                'name' => 'Kasai-Oriental',
            ),
            326 => 
            array (
                'id' => 827,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 50,
                'name' => 'Katanga',
            ),
            327 => 
            array (
                'id' => 828,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 50,
                'name' => 'Kinshasa',
            ),
            328 => 
            array (
                'id' => 829,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 50,
                'name' => 'Maniema',
            ),
            329 => 
            array (
                'id' => 830,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 50,
                'name' => 'Nord-Kivu',
            ),
            330 => 
            array (
                'id' => 831,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 50,
                'name' => 'Sud-Kivu',
            ),
            331 => 
            array (
                'id' => 832,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 51,
                'name' => 'Aitutaki',
            ),
            332 => 
            array (
                'id' => 833,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 51,
                'name' => 'Atiu',
            ),
            333 => 
            array (
                'id' => 834,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 51,
                'name' => 'Mangaia',
            ),
            334 => 
            array (
                'id' => 835,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 51,
                'name' => 'Manihiki',
            ),
            335 => 
            array (
                'id' => 836,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 51,
                'name' => 'Mauke',
            ),
            336 => 
            array (
                'id' => 837,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 51,
                'name' => 'Mitiaro',
            ),
            337 => 
            array (
                'id' => 838,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 51,
                'name' => 'Nassau',
            ),
            338 => 
            array (
                'id' => 839,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 51,
                'name' => 'Pukapuka',
            ),
            339 => 
            array (
                'id' => 840,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 51,
                'name' => 'Rakahanga',
            ),
            340 => 
            array (
                'id' => 841,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 51,
                'name' => 'Rarotonga',
            ),
            341 => 
            array (
                'id' => 842,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 51,
                'name' => 'Tongareva',
            ),
            342 => 
            array (
                'id' => 843,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 52,
                'name' => 'Alajuela',
            ),
            343 => 
            array (
                'id' => 844,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 52,
                'name' => 'Cartago',
            ),
            344 => 
            array (
                'id' => 845,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 52,
                'name' => 'Guanacaste',
            ),
            345 => 
            array (
                'id' => 846,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 52,
                'name' => 'Heredia',
            ),
            346 => 
            array (
                'id' => 847,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 52,
                'name' => 'Limon',
            ),
            347 => 
            array (
                'id' => 848,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 52,
                'name' => 'Puntarenas',
            ),
            348 => 
            array (
                'id' => 849,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 52,
                'name' => 'San Jose',
            ),
            349 => 
            array (
                'id' => 850,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 53,
                'name' => 'Abidjan',
            ),
            350 => 
            array (
                'id' => 851,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 53,
                'name' => 'Agneby',
            ),
            351 => 
            array (
                'id' => 852,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 53,
                'name' => 'Bafing',
            ),
            352 => 
            array (
                'id' => 853,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 53,
                'name' => 'Denguele',
            ),
            353 => 
            array (
                'id' => 854,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 53,
                'name' => 'Dix-huit Montagnes',
            ),
            354 => 
            array (
                'id' => 855,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 53,
                'name' => 'Fromager',
            ),
            355 => 
            array (
                'id' => 856,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 53,
                'name' => 'Haut-Sassandra',
            ),
            356 => 
            array (
                'id' => 857,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 53,
                'name' => 'Lacs',
            ),
            357 => 
            array (
                'id' => 858,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 53,
                'name' => 'Lagunes',
            ),
            358 => 
            array (
                'id' => 859,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 53,
                'name' => 'Marahoue',
            ),
            359 => 
            array (
                'id' => 860,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 53,
                'name' => 'Moyen-Cavally',
            ),
            360 => 
            array (
                'id' => 861,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 53,
                'name' => 'Moyen-Comoe',
            ),
            361 => 
            array (
                'id' => 862,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 53,
                'name' => 'N\'zi-Comoe',
            ),
            362 => 
            array (
                'id' => 863,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 53,
                'name' => 'Sassandra',
            ),
            363 => 
            array (
                'id' => 864,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 53,
                'name' => 'Savanes',
            ),
            364 => 
            array (
                'id' => 865,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 53,
                'name' => 'Sud-Bandama',
            ),
            365 => 
            array (
                'id' => 866,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 53,
                'name' => 'Sud-Comoe',
            ),
            366 => 
            array (
                'id' => 867,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 53,
                'name' => 'Vallee du Bandama',
            ),
            367 => 
            array (
                'id' => 868,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 53,
                'name' => 'Worodougou',
            ),
            368 => 
            array (
                'id' => 869,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 53,
                'name' => 'Zanzan',
            ),
            369 => 
            array (
                'id' => 870,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 54,
                'name' => 'Bjelovar-Bilogora',
            ),
            370 => 
            array (
                'id' => 871,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 54,
                'name' => 'Dubrovnik-Neretva',
            ),
            371 => 
            array (
                'id' => 872,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 54,
                'name' => 'Grad Zagreb',
            ),
            372 => 
            array (
                'id' => 873,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 54,
                'name' => 'Istra',
            ),
            373 => 
            array (
                'id' => 874,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 54,
                'name' => 'Karlovac',
            ),
            374 => 
            array (
                'id' => 875,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 54,
                'name' => 'Koprivnica-Krizhevci',
            ),
            375 => 
            array (
                'id' => 876,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 54,
                'name' => 'Krapina-Zagorje',
            ),
            376 => 
            array (
                'id' => 877,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 54,
                'name' => 'Lika-Senj',
            ),
            377 => 
            array (
                'id' => 878,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 54,
                'name' => 'Medhimurje',
            ),
            378 => 
            array (
                'id' => 879,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 54,
                'name' => 'Medimurska Zupanija',
            ),
            379 => 
            array (
                'id' => 880,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 54,
                'name' => 'Osijek-Baranja',
            ),
            380 => 
            array (
                'id' => 881,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 54,
                'name' => 'Osjecko-Baranjska Zupanija',
            ),
            381 => 
            array (
                'id' => 882,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 54,
                'name' => 'Pozhega-Slavonija',
            ),
            382 => 
            array (
                'id' => 883,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 54,
                'name' => 'Primorje-Gorski Kotar',
            ),
            383 => 
            array (
                'id' => 884,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 54,
                'name' => 'Shibenik-Knin',
            ),
            384 => 
            array (
                'id' => 885,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 54,
                'name' => 'Sisak-Moslavina',
            ),
            385 => 
            array (
                'id' => 886,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 54,
                'name' => 'Slavonski Brod-Posavina',
            ),
            386 => 
            array (
                'id' => 887,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 54,
                'name' => 'Split-Dalmacija',
            ),
            387 => 
            array (
                'id' => 888,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 54,
                'name' => 'Varazhdin',
            ),
            388 => 
            array (
                'id' => 889,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 54,
                'name' => 'Virovitica-Podravina',
            ),
            389 => 
            array (
                'id' => 890,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 54,
                'name' => 'Vukovar-Srijem',
            ),
            390 => 
            array (
                'id' => 891,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 54,
                'name' => 'Zadar',
            ),
            391 => 
            array (
                'id' => 892,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 54,
                'name' => 'Zagreb',
            ),
            392 => 
            array (
                'id' => 893,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 55,
                'name' => 'Camaguey',
            ),
            393 => 
            array (
                'id' => 894,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 55,
                'name' => 'Ciego de Avila',
            ),
            394 => 
            array (
                'id' => 895,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 55,
                'name' => 'Cienfuegos',
            ),
            395 => 
            array (
                'id' => 896,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 55,
                'name' => 'Ciudad de la Habana',
            ),
            396 => 
            array (
                'id' => 897,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 55,
                'name' => 'Granma',
            ),
            397 => 
            array (
                'id' => 898,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 55,
                'name' => 'Guantanamo',
            ),
            398 => 
            array (
                'id' => 899,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 55,
                'name' => 'Habana',
            ),
            399 => 
            array (
                'id' => 900,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 55,
                'name' => 'Holguin',
            ),
            400 => 
            array (
                'id' => 901,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 55,
                'name' => 'Isla de la Juventud',
            ),
            401 => 
            array (
                'id' => 902,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 55,
                'name' => 'La Habana',
            ),
            402 => 
            array (
                'id' => 903,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 55,
                'name' => 'Las Tunas',
            ),
            403 => 
            array (
                'id' => 904,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 55,
                'name' => 'Matanzas',
            ),
            404 => 
            array (
                'id' => 905,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 55,
                'name' => 'Pinar del Rio',
            ),
            405 => 
            array (
                'id' => 906,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 55,
                'name' => 'Sancti Spiritus',
            ),
            406 => 
            array (
                'id' => 907,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 55,
                'name' => 'Santiago de Cuba',
            ),
            407 => 
            array (
                'id' => 908,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 55,
                'name' => 'Villa Clara',
            ),
            408 => 
            array (
                'id' => 909,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 56,
                'name' => 'Government controlled area',
            ),
            409 => 
            array (
                'id' => 910,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 56,
                'name' => 'Limassol',
            ),
            410 => 
            array (
                'id' => 911,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 56,
                'name' => 'Nicosia District',
            ),
            411 => 
            array (
                'id' => 912,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 56,
                'name' => 'Paphos',
            ),
            412 => 
            array (
                'id' => 913,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 56,
                'name' => 'Turkish controlled area',
            ),
            413 => 
            array (
                'id' => 914,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 57,
                'name' => 'Central Bohemian',
            ),
            414 => 
            array (
                'id' => 915,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 57,
                'name' => 'Frycovice',
            ),
            415 => 
            array (
                'id' => 916,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 57,
                'name' => 'Jihocesky Kraj',
            ),
            416 => 
            array (
                'id' => 917,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 57,
                'name' => 'Jihochesky',
            ),
            417 => 
            array (
                'id' => 918,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 57,
                'name' => 'Jihomoravsky',
            ),
            418 => 
            array (
                'id' => 919,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 57,
                'name' => 'Karlovarsky',
            ),
            419 => 
            array (
                'id' => 920,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 57,
                'name' => 'Klecany',
            ),
            420 => 
            array (
                'id' => 921,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 57,
                'name' => 'Kralovehradecky',
            ),
            421 => 
            array (
                'id' => 922,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 57,
                'name' => 'Liberecky',
            ),
            422 => 
            array (
                'id' => 923,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 57,
                'name' => 'Lipov',
            ),
            423 => 
            array (
                'id' => 924,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 57,
                'name' => 'Moravskoslezsky',
            ),
            424 => 
            array (
                'id' => 925,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 57,
                'name' => 'Olomoucky',
            ),
            425 => 
            array (
                'id' => 926,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 57,
                'name' => 'Olomoucky Kraj',
            ),
            426 => 
            array (
                'id' => 927,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 57,
                'name' => 'Pardubicky',
            ),
            427 => 
            array (
                'id' => 928,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 57,
                'name' => 'Plzensky',
            ),
            428 => 
            array (
                'id' => 929,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 57,
                'name' => 'Praha',
            ),
            429 => 
            array (
                'id' => 930,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 57,
                'name' => 'Rajhrad',
            ),
            430 => 
            array (
                'id' => 931,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 57,
                'name' => 'Smirice',
            ),
            431 => 
            array (
                'id' => 932,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 57,
                'name' => 'South Moravian',
            ),
            432 => 
            array (
                'id' => 933,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 57,
                'name' => 'Straz nad Nisou',
            ),
            433 => 
            array (
                'id' => 934,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 57,
                'name' => 'Stredochesky',
            ),
            434 => 
            array (
                'id' => 935,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 57,
                'name' => 'Unicov',
            ),
            435 => 
            array (
                'id' => 936,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 57,
                'name' => 'Ustecky',
            ),
            436 => 
            array (
                'id' => 937,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 57,
                'name' => 'Valletta',
            ),
            437 => 
            array (
                'id' => 938,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 57,
                'name' => 'Velesin',
            ),
            438 => 
            array (
                'id' => 939,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 57,
                'name' => 'Vysochina',
            ),
            439 => 
            array (
                'id' => 940,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 57,
                'name' => 'Zlinsky',
            ),
            440 => 
            array (
                'id' => 941,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 58,
                'name' => 'Arhus',
            ),
            441 => 
            array (
                'id' => 942,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 58,
                'name' => 'Bornholm',
            ),
            442 => 
            array (
                'id' => 943,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 58,
                'name' => 'Frederiksborg',
            ),
            443 => 
            array (
                'id' => 944,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 58,
                'name' => 'Fyn',
            ),
            444 => 
            array (
                'id' => 945,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 58,
                'name' => 'Hovedstaden',
            ),
            445 => 
            array (
                'id' => 946,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 58,
                'name' => 'Kobenhavn',
            ),
            446 => 
            array (
                'id' => 947,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 58,
                'name' => 'Kobenhavns Amt',
            ),
            447 => 
            array (
                'id' => 948,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 58,
                'name' => 'Kobenhavns Kommune',
            ),
            448 => 
            array (
                'id' => 949,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 58,
                'name' => 'Nordjylland',
            ),
            449 => 
            array (
                'id' => 950,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 58,
                'name' => 'Ribe',
            ),
            450 => 
            array (
                'id' => 951,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 58,
                'name' => 'Ringkobing',
            ),
            451 => 
            array (
                'id' => 952,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 58,
                'name' => 'Roervig',
            ),
            452 => 
            array (
                'id' => 953,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 58,
                'name' => 'Roskilde',
            ),
            453 => 
            array (
                'id' => 954,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 58,
                'name' => 'Roslev',
            ),
            454 => 
            array (
                'id' => 955,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 58,
                'name' => 'Sjaelland',
            ),
            455 => 
            array (
                'id' => 956,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 58,
                'name' => 'Soeborg',
            ),
            456 => 
            array (
                'id' => 957,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 58,
                'name' => 'Sonderjylland',
            ),
            457 => 
            array (
                'id' => 958,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 58,
                'name' => 'Storstrom',
            ),
            458 => 
            array (
                'id' => 959,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 58,
                'name' => 'Syddanmark',
            ),
            459 => 
            array (
                'id' => 960,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 58,
                'name' => 'Toelloese',
            ),
            460 => 
            array (
                'id' => 961,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 58,
                'name' => 'Vejle',
            ),
            461 => 
            array (
                'id' => 962,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 58,
                'name' => 'Vestsjalland',
            ),
            462 => 
            array (
                'id' => 963,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 58,
                'name' => 'Viborg',
            ),
            463 => 
            array (
                'id' => 964,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 59,
                'name' => '\'Ali Sabih',
            ),
            464 => 
            array (
                'id' => 965,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 59,
                'name' => 'Dikhil',
            ),
            465 => 
            array (
                'id' => 966,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 59,
                'name' => 'Jibuti',
            ),
            466 => 
            array (
                'id' => 967,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 59,
                'name' => 'Tajurah',
            ),
            467 => 
            array (
                'id' => 968,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 59,
                'name' => 'Ubuk',
            ),
            468 => 
            array (
                'id' => 969,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 60,
                'name' => 'Saint Andrew',
            ),
            469 => 
            array (
                'id' => 970,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 60,
                'name' => 'Saint David',
            ),
            470 => 
            array (
                'id' => 971,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 60,
                'name' => 'Saint George',
            ),
            471 => 
            array (
                'id' => 972,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 60,
                'name' => 'Saint John',
            ),
            472 => 
            array (
                'id' => 973,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 60,
                'name' => 'Saint Joseph',
            ),
            473 => 
            array (
                'id' => 974,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 60,
                'name' => 'Saint Luke',
            ),
            474 => 
            array (
                'id' => 975,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 60,
                'name' => 'Saint Mark',
            ),
            475 => 
            array (
                'id' => 976,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 60,
                'name' => 'Saint Patrick',
            ),
            476 => 
            array (
                'id' => 977,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 60,
                'name' => 'Saint Paul',
            ),
            477 => 
            array (
                'id' => 978,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 60,
                'name' => 'Saint Peter',
            ),
            478 => 
            array (
                'id' => 979,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 61,
                'name' => 'Azua',
            ),
            479 => 
            array (
                'id' => 980,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 61,
                'name' => 'Bahoruco',
            ),
            480 => 
            array (
                'id' => 981,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 61,
                'name' => 'Barahona',
            ),
            481 => 
            array (
                'id' => 982,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 61,
                'name' => 'Dajabon',
            ),
            482 => 
            array (
                'id' => 983,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 61,
                'name' => 'Distrito Nacional',
            ),
            483 => 
            array (
                'id' => 984,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 61,
                'name' => 'Duarte',
            ),
            484 => 
            array (
                'id' => 985,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 61,
                'name' => 'El Seybo',
            ),
            485 => 
            array (
                'id' => 986,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 61,
                'name' => 'Elias Pina',
            ),
            486 => 
            array (
                'id' => 987,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 61,
                'name' => 'Espaillat',
            ),
            487 => 
            array (
                'id' => 988,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 61,
                'name' => 'Hato Mayor',
            ),
            488 => 
            array (
                'id' => 989,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 61,
                'name' => 'Independencia',
            ),
            489 => 
            array (
                'id' => 990,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 61,
                'name' => 'La Altagracia',
            ),
            490 => 
            array (
                'id' => 991,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 61,
                'name' => 'La Romana',
            ),
            491 => 
            array (
                'id' => 992,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 61,
                'name' => 'La Vega',
            ),
            492 => 
            array (
                'id' => 993,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 61,
                'name' => 'Maria Trinidad Sanchez',
            ),
            493 => 
            array (
                'id' => 994,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 61,
                'name' => 'Monsenor Nouel',
            ),
            494 => 
            array (
                'id' => 995,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 61,
                'name' => 'Monte Cristi',
            ),
            495 => 
            array (
                'id' => 996,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 61,
                'name' => 'Monte Plata',
            ),
            496 => 
            array (
                'id' => 997,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 61,
                'name' => 'Pedernales',
            ),
            497 => 
            array (
                'id' => 998,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 61,
                'name' => 'Peravia',
            ),
            498 => 
            array (
                'id' => 999,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 61,
                'name' => 'Puerto Plata',
            ),
            499 => 
            array (
                'id' => 1000,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 61,
                'name' => 'Salcedo',
            ),
        ));
        \DB::table('states')->insert(array (
            0 => 
            array (
                'id' => 1001,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 61,
                'name' => 'Samana',
            ),
            1 => 
            array (
                'id' => 1002,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 61,
                'name' => 'San Cristobal',
            ),
            2 => 
            array (
                'id' => 1003,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 61,
                'name' => 'San Juan',
            ),
            3 => 
            array (
                'id' => 1004,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 61,
                'name' => 'San Pedro de Macoris',
            ),
            4 => 
            array (
                'id' => 1005,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 61,
                'name' => 'Sanchez Ramirez',
            ),
            5 => 
            array (
                'id' => 1006,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 61,
                'name' => 'Santiago',
            ),
            6 => 
            array (
                'id' => 1007,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 61,
                'name' => 'Santiago Rodriguez',
            ),
            7 => 
            array (
                'id' => 1008,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 61,
                'name' => 'Valverde',
            ),
            8 => 
            array (
                'id' => 1009,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 62,
                'name' => 'Aileu',
            ),
            9 => 
            array (
                'id' => 1010,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 62,
                'name' => 'Ainaro',
            ),
            10 => 
            array (
                'id' => 1011,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 62,
                'name' => 'Ambeno',
            ),
            11 => 
            array (
                'id' => 1012,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 62,
                'name' => 'Baucau',
            ),
            12 => 
            array (
                'id' => 1013,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 62,
                'name' => 'Bobonaro',
            ),
            13 => 
            array (
                'id' => 1014,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 62,
                'name' => 'Cova Lima',
            ),
            14 => 
            array (
                'id' => 1015,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 62,
                'name' => 'Dili',
            ),
            15 => 
            array (
                'id' => 1016,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 62,
                'name' => 'Ermera',
            ),
            16 => 
            array (
                'id' => 1017,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 62,
                'name' => 'Lautem',
            ),
            17 => 
            array (
                'id' => 1018,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 62,
                'name' => 'Liquica',
            ),
            18 => 
            array (
                'id' => 1019,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 62,
                'name' => 'Manatuto',
            ),
            19 => 
            array (
                'id' => 1020,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 62,
                'name' => 'Manufahi',
            ),
            20 => 
            array (
                'id' => 1021,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 62,
                'name' => 'Viqueque',
            ),
            21 => 
            array (
                'id' => 1022,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 63,
                'name' => 'Azuay',
            ),
            22 => 
            array (
                'id' => 1023,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 63,
                'name' => 'Bolivar',
            ),
            23 => 
            array (
                'id' => 1024,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 63,
                'name' => 'Canar',
            ),
            24 => 
            array (
                'id' => 1025,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 63,
                'name' => 'Carchi',
            ),
            25 => 
            array (
                'id' => 1026,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 63,
                'name' => 'Chimborazo',
            ),
            26 => 
            array (
                'id' => 1027,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 63,
                'name' => 'Cotopaxi',
            ),
            27 => 
            array (
                'id' => 1028,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 63,
                'name' => 'El Oro',
            ),
            28 => 
            array (
                'id' => 1029,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 63,
                'name' => 'Esmeraldas',
            ),
            29 => 
            array (
                'id' => 1030,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 63,
                'name' => 'Galapagos',
            ),
            30 => 
            array (
                'id' => 1031,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 63,
                'name' => 'Guayas',
            ),
            31 => 
            array (
                'id' => 1032,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 63,
                'name' => 'Imbabura',
            ),
            32 => 
            array (
                'id' => 1033,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 63,
                'name' => 'Loja',
            ),
            33 => 
            array (
                'id' => 1034,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 63,
                'name' => 'Los Rios',
            ),
            34 => 
            array (
                'id' => 1035,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 63,
                'name' => 'Manabi',
            ),
            35 => 
            array (
                'id' => 1036,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 63,
                'name' => 'Morona Santiago',
            ),
            36 => 
            array (
                'id' => 1037,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 63,
                'name' => 'Napo',
            ),
            37 => 
            array (
                'id' => 1038,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 63,
                'name' => 'Orellana',
            ),
            38 => 
            array (
                'id' => 1039,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 63,
                'name' => 'Pastaza',
            ),
            39 => 
            array (
                'id' => 1040,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 63,
                'name' => 'Pichincha',
            ),
            40 => 
            array (
                'id' => 1041,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 63,
                'name' => 'Sucumbios',
            ),
            41 => 
            array (
                'id' => 1042,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 63,
                'name' => 'Tungurahua',
            ),
            42 => 
            array (
                'id' => 1043,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 63,
                'name' => 'Zamora Chinchipe',
            ),
            43 => 
            array (
                'id' => 1044,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 64,
                'name' => 'Aswan',
            ),
            44 => 
            array (
                'id' => 1045,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 64,
                'name' => 'Asyut',
            ),
            45 => 
            array (
                'id' => 1046,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 64,
                'name' => 'Bani Suwayf',
            ),
            46 => 
            array (
                'id' => 1047,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 64,
                'name' => 'Bur Sa\'id',
            ),
            47 => 
            array (
                'id' => 1048,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 64,
                'name' => 'Cairo',
            ),
            48 => 
            array (
                'id' => 1049,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 64,
                'name' => 'Dumyat',
            ),
            49 => 
            array (
                'id' => 1050,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 64,
                'name' => 'Kafr-ash-Shaykh',
            ),
            50 => 
            array (
                'id' => 1051,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 64,
                'name' => 'Matruh',
            ),
            51 => 
            array (
                'id' => 1052,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 64,
                'name' => 'Muhafazat ad Daqahliyah',
            ),
            52 => 
            array (
                'id' => 1053,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 64,
                'name' => 'Muhafazat al Fayyum',
            ),
            53 => 
            array (
                'id' => 1054,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 64,
                'name' => 'Muhafazat al Gharbiyah',
            ),
            54 => 
            array (
                'id' => 1055,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 64,
                'name' => 'Muhafazat al Iskandariyah',
            ),
            55 => 
            array (
                'id' => 1056,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 64,
                'name' => 'Muhafazat al Qahirah',
            ),
            56 => 
            array (
                'id' => 1057,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 64,
                'name' => 'Qina',
            ),
            57 => 
            array (
                'id' => 1058,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 64,
                'name' => 'Sawhaj',
            ),
            58 => 
            array (
                'id' => 1059,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 64,
                'name' => 'Sina al-Janubiyah',
            ),
            59 => 
            array (
                'id' => 1060,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 64,
                'name' => 'Sina ash-Shamaliyah',
            ),
            60 => 
            array (
                'id' => 1061,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 64,
                'name' => 'ad-Daqahliyah',
            ),
            61 => 
            array (
                'id' => 1062,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 64,
                'name' => 'al-Bahr-al-Ahmar',
            ),
            62 => 
            array (
                'id' => 1063,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 64,
                'name' => 'al-Buhayrah',
            ),
            63 => 
            array (
                'id' => 1064,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 64,
                'name' => 'al-Fayyum',
            ),
            64 => 
            array (
                'id' => 1065,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 64,
                'name' => 'al-Gharbiyah',
            ),
            65 => 
            array (
                'id' => 1066,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 64,
                'name' => 'al-Iskandariyah',
            ),
            66 => 
            array (
                'id' => 1067,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 64,
                'name' => 'al-Ismailiyah',
            ),
            67 => 
            array (
                'id' => 1068,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 64,
                'name' => 'al-Jizah',
            ),
            68 => 
            array (
                'id' => 1069,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 64,
                'name' => 'al-Minufiyah',
            ),
            69 => 
            array (
                'id' => 1070,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 64,
                'name' => 'al-Minya',
            ),
            70 => 
            array (
                'id' => 1071,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 64,
                'name' => 'al-Qahira',
            ),
            71 => 
            array (
                'id' => 1072,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 64,
                'name' => 'al-Qalyubiyah',
            ),
            72 => 
            array (
                'id' => 1073,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 64,
                'name' => 'al-Uqsur',
            ),
            73 => 
            array (
                'id' => 1074,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 64,
                'name' => 'al-Wadi al-Jadid',
            ),
            74 => 
            array (
                'id' => 1075,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 64,
                'name' => 'as-Suways',
            ),
            75 => 
            array (
                'id' => 1076,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 64,
                'name' => 'ash-Sharqiyah',
            ),
            76 => 
            array (
                'id' => 1077,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 65,
                'name' => 'Ahuachapan',
            ),
            77 => 
            array (
                'id' => 1078,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 65,
                'name' => 'Cabanas',
            ),
            78 => 
            array (
                'id' => 1079,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 65,
                'name' => 'Chalatenango',
            ),
            79 => 
            array (
                'id' => 1080,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 65,
                'name' => 'Cuscatlan',
            ),
            80 => 
            array (
                'id' => 1081,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 65,
                'name' => 'La Libertad',
            ),
            81 => 
            array (
                'id' => 1082,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 65,
                'name' => 'La Paz',
            ),
            82 => 
            array (
                'id' => 1083,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 65,
                'name' => 'La Union',
            ),
            83 => 
            array (
                'id' => 1084,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 65,
                'name' => 'Morazan',
            ),
            84 => 
            array (
                'id' => 1085,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 65,
                'name' => 'San Miguel',
            ),
            85 => 
            array (
                'id' => 1086,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 65,
                'name' => 'San Salvador',
            ),
            86 => 
            array (
                'id' => 1087,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 65,
                'name' => 'San Vicente',
            ),
            87 => 
            array (
                'id' => 1088,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 65,
                'name' => 'Santa Ana',
            ),
            88 => 
            array (
                'id' => 1089,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 65,
                'name' => 'Sonsonate',
            ),
            89 => 
            array (
                'id' => 1090,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 65,
                'name' => 'Usulutan',
            ),
            90 => 
            array (
                'id' => 1091,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 66,
                'name' => 'Annobon',
            ),
            91 => 
            array (
                'id' => 1092,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 66,
                'name' => 'Bioko Norte',
            ),
            92 => 
            array (
                'id' => 1093,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 66,
                'name' => 'Bioko Sur',
            ),
            93 => 
            array (
                'id' => 1094,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 66,
                'name' => 'Centro Sur',
            ),
            94 => 
            array (
                'id' => 1095,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 66,
                'name' => 'Kie-Ntem',
            ),
            95 => 
            array (
                'id' => 1096,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 66,
                'name' => 'Litoral',
            ),
            96 => 
            array (
                'id' => 1097,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 66,
                'name' => 'Wele-Nzas',
            ),
            97 => 
            array (
                'id' => 1098,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 67,
                'name' => 'Anseba',
            ),
            98 => 
            array (
                'id' => 1099,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 67,
                'name' => 'Debub',
            ),
            99 => 
            array (
                'id' => 1100,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 67,
                'name' => 'Debub-Keih-Bahri',
            ),
            100 => 
            array (
                'id' => 1101,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 67,
                'name' => 'Gash-Barka',
            ),
            101 => 
            array (
                'id' => 1102,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 67,
                'name' => 'Maekel',
            ),
            102 => 
            array (
                'id' => 1103,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 67,
                'name' => 'Semien-Keih-Bahri',
            ),
            103 => 
            array (
                'id' => 1104,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 68,
                'name' => 'Harju',
            ),
            104 => 
            array (
                'id' => 1105,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 68,
                'name' => 'Hiiu',
            ),
            105 => 
            array (
                'id' => 1106,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 68,
                'name' => 'Ida-Viru',
            ),
            106 => 
            array (
                'id' => 1107,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 68,
                'name' => 'Jarva',
            ),
            107 => 
            array (
                'id' => 1108,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 68,
                'name' => 'Jogeva',
            ),
            108 => 
            array (
                'id' => 1109,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 68,
                'name' => 'Laane',
            ),
            109 => 
            array (
                'id' => 1110,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 68,
                'name' => 'Laane-Viru',
            ),
            110 => 
            array (
                'id' => 1111,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 68,
                'name' => 'Parnu',
            ),
            111 => 
            array (
                'id' => 1112,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 68,
                'name' => 'Polva',
            ),
            112 => 
            array (
                'id' => 1113,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 68,
                'name' => 'Rapla',
            ),
            113 => 
            array (
                'id' => 1114,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 68,
                'name' => 'Saare',
            ),
            114 => 
            array (
                'id' => 1115,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 68,
                'name' => 'Tartu',
            ),
            115 => 
            array (
                'id' => 1116,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 68,
                'name' => 'Valga',
            ),
            116 => 
            array (
                'id' => 1117,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 68,
                'name' => 'Viljandi',
            ),
            117 => 
            array (
                'id' => 1118,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 68,
                'name' => 'Voru',
            ),
            118 => 
            array (
                'id' => 1119,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 69,
                'name' => 'Addis Abeba',
            ),
            119 => 
            array (
                'id' => 1120,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 69,
                'name' => 'Afar',
            ),
            120 => 
            array (
                'id' => 1121,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 69,
                'name' => 'Amhara',
            ),
            121 => 
            array (
                'id' => 1122,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 69,
                'name' => 'Benishangul',
            ),
            122 => 
            array (
                'id' => 1123,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 69,
                'name' => 'Diredawa',
            ),
            123 => 
            array (
                'id' => 1124,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 69,
                'name' => 'Gambella',
            ),
            124 => 
            array (
                'id' => 1125,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 69,
                'name' => 'Harar',
            ),
            125 => 
            array (
                'id' => 1126,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 69,
                'name' => 'Jigjiga',
            ),
            126 => 
            array (
                'id' => 1127,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 69,
                'name' => 'Mekele',
            ),
            127 => 
            array (
                'id' => 1128,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 69,
                'name' => 'Oromia',
            ),
            128 => 
            array (
                'id' => 1129,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 69,
                'name' => 'Somali',
            ),
            129 => 
            array (
                'id' => 1130,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 69,
                'name' => 'Southern',
            ),
            130 => 
            array (
                'id' => 1131,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 69,
                'name' => 'Tigray',
            ),
            131 => 
            array (
                'id' => 1132,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 70,
                'name' => 'Christmas Island',
            ),
            132 => 
            array (
                'id' => 1133,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 70,
                'name' => 'Cocos Islands',
            ),
            133 => 
            array (
                'id' => 1134,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 70,
                'name' => 'Coral Sea Islands',
            ),
            134 => 
            array (
                'id' => 1135,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 71,
                'name' => 'Falkland Islands',
            ),
            135 => 
            array (
                'id' => 1136,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 71,
                'name' => 'South Georgia',
            ),
            136 => 
            array (
                'id' => 1137,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 72,
                'name' => 'Klaksvik',
            ),
            137 => 
            array (
                'id' => 1138,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 72,
                'name' => 'Nor ara Eysturoy',
            ),
            138 => 
            array (
                'id' => 1139,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 72,
                'name' => 'Nor oy',
            ),
            139 => 
            array (
                'id' => 1140,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 72,
                'name' => 'Sandoy',
            ),
            140 => 
            array (
                'id' => 1141,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 72,
                'name' => 'Streymoy',
            ),
            141 => 
            array (
                'id' => 1142,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 72,
                'name' => 'Su uroy',
            ),
            142 => 
            array (
                'id' => 1143,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 72,
                'name' => 'Sy ra Eysturoy',
            ),
            143 => 
            array (
                'id' => 1144,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 72,
                'name' => 'Torshavn',
            ),
            144 => 
            array (
                'id' => 1145,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 72,
                'name' => 'Vaga',
            ),
            145 => 
            array (
                'id' => 1146,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 73,
                'name' => 'Central',
            ),
            146 => 
            array (
                'id' => 1147,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 73,
                'name' => 'Eastern',
            ),
            147 => 
            array (
                'id' => 1148,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 73,
                'name' => 'Northern',
            ),
            148 => 
            array (
                'id' => 1149,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 73,
                'name' => 'South Pacific',
            ),
            149 => 
            array (
                'id' => 1150,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 73,
                'name' => 'Western',
            ),
            150 => 
            array (
                'id' => 1151,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 74,
                'name' => 'Ahvenanmaa',
            ),
            151 => 
            array (
                'id' => 1152,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 74,
                'name' => 'Etela-Karjala',
            ),
            152 => 
            array (
                'id' => 1153,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 74,
                'name' => 'Etela-Pohjanmaa',
            ),
            153 => 
            array (
                'id' => 1154,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 74,
                'name' => 'Etela-Savo',
            ),
            154 => 
            array (
                'id' => 1155,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 74,
                'name' => 'Etela-Suomen Laani',
            ),
            155 => 
            array (
                'id' => 1156,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 74,
                'name' => 'Ita-Suomen Laani',
            ),
            156 => 
            array (
                'id' => 1157,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 74,
                'name' => 'Ita-Uusimaa',
            ),
            157 => 
            array (
                'id' => 1158,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 74,
                'name' => 'Kainuu',
            ),
            158 => 
            array (
                'id' => 1159,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 74,
                'name' => 'Kanta-Hame',
            ),
            159 => 
            array (
                'id' => 1160,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 74,
                'name' => 'Keski-Pohjanmaa',
            ),
            160 => 
            array (
                'id' => 1161,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 74,
                'name' => 'Keski-Suomi',
            ),
            161 => 
            array (
                'id' => 1162,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 74,
                'name' => 'Kymenlaakso',
            ),
            162 => 
            array (
                'id' => 1163,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 74,
                'name' => 'Lansi-Suomen Laani',
            ),
            163 => 
            array (
                'id' => 1164,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 74,
                'name' => 'Lappi',
            ),
            164 => 
            array (
                'id' => 1165,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 74,
                'name' => 'Northern Savonia',
            ),
            165 => 
            array (
                'id' => 1166,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 74,
                'name' => 'Ostrobothnia',
            ),
            166 => 
            array (
                'id' => 1167,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 74,
                'name' => 'Oulun Laani',
            ),
            167 => 
            array (
                'id' => 1168,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 74,
                'name' => 'Paijat-Hame',
            ),
            168 => 
            array (
                'id' => 1169,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 74,
                'name' => 'Pirkanmaa',
            ),
            169 => 
            array (
                'id' => 1170,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 74,
                'name' => 'Pohjanmaa',
            ),
            170 => 
            array (
                'id' => 1171,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 74,
                'name' => 'Pohjois-Karjala',
            ),
            171 => 
            array (
                'id' => 1172,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 74,
                'name' => 'Pohjois-Pohjanmaa',
            ),
            172 => 
            array (
                'id' => 1173,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 74,
                'name' => 'Pohjois-Savo',
            ),
            173 => 
            array (
                'id' => 1174,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 74,
                'name' => 'Saarijarvi',
            ),
            174 => 
            array (
                'id' => 1175,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 74,
                'name' => 'Satakunta',
            ),
            175 => 
            array (
                'id' => 1176,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 74,
                'name' => 'Southern Savonia',
            ),
            176 => 
            array (
                'id' => 1177,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 74,
                'name' => 'Tavastia Proper',
            ),
            177 => 
            array (
                'id' => 1178,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 74,
                'name' => 'Uleaborgs Lan',
            ),
            178 => 
            array (
                'id' => 1179,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 74,
                'name' => 'Uusimaa',
            ),
            179 => 
            array (
                'id' => 1180,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 74,
                'name' => 'Varsinais-Suomi',
            ),
            180 => 
            array (
                'id' => 1181,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Ain',
            ),
            181 => 
            array (
                'id' => 1182,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Aisne',
            ),
            182 => 
            array (
                'id' => 1183,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Albi Le Sequestre',
            ),
            183 => 
            array (
                'id' => 1184,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Allier',
            ),
            184 => 
            array (
                'id' => 1185,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Alpes-Cote dAzur',
            ),
            185 => 
            array (
                'id' => 1186,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Alpes-Maritimes',
            ),
            186 => 
            array (
                'id' => 1187,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Alpes-de-Haute-Provence',
            ),
            187 => 
            array (
                'id' => 1188,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Alsace',
            ),
            188 => 
            array (
                'id' => 1189,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Aquitaine',
            ),
            189 => 
            array (
                'id' => 1190,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Ardeche',
            ),
            190 => 
            array (
                'id' => 1191,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Ardennes',
            ),
            191 => 
            array (
                'id' => 1192,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Ariege',
            ),
            192 => 
            array (
                'id' => 1193,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Aube',
            ),
            193 => 
            array (
                'id' => 1194,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Aude',
            ),
            194 => 
            array (
                'id' => 1195,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Auvergne',
            ),
            195 => 
            array (
                'id' => 1196,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Aveyron',
            ),
            196 => 
            array (
                'id' => 1197,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Bas-Rhin',
            ),
            197 => 
            array (
                'id' => 1198,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Basse-Normandie',
            ),
            198 => 
            array (
                'id' => 1199,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Bouches-du-Rhone',
            ),
            199 => 
            array (
                'id' => 1200,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Bourgogne',
            ),
            200 => 
            array (
                'id' => 1201,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Bretagne',
            ),
            201 => 
            array (
                'id' => 1202,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Brittany',
            ),
            202 => 
            array (
                'id' => 1203,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Burgundy',
            ),
            203 => 
            array (
                'id' => 1204,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Calvados',
            ),
            204 => 
            array (
                'id' => 1205,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Cantal',
            ),
            205 => 
            array (
                'id' => 1206,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Cedex',
            ),
            206 => 
            array (
                'id' => 1207,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Centre',
            ),
            207 => 
            array (
                'id' => 1208,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Charente',
            ),
            208 => 
            array (
                'id' => 1209,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Charente-Maritime',
            ),
            209 => 
            array (
                'id' => 1210,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Cher',
            ),
            210 => 
            array (
                'id' => 1211,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Correze',
            ),
            211 => 
            array (
                'id' => 1212,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Corse-du-Sud',
            ),
            212 => 
            array (
                'id' => 1213,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Cote-d\'Or',
            ),
            213 => 
            array (
                'id' => 1214,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Cotes-d\'Armor',
            ),
            214 => 
            array (
                'id' => 1215,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Creuse',
            ),
            215 => 
            array (
                'id' => 1216,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Crolles',
            ),
            216 => 
            array (
                'id' => 1217,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Deux-Sevres',
            ),
            217 => 
            array (
                'id' => 1218,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Dordogne',
            ),
            218 => 
            array (
                'id' => 1219,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Doubs',
            ),
            219 => 
            array (
                'id' => 1220,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Drome',
            ),
            220 => 
            array (
                'id' => 1221,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Essonne',
            ),
            221 => 
            array (
                'id' => 1222,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Eure',
            ),
            222 => 
            array (
                'id' => 1223,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Eure-et-Loir',
            ),
            223 => 
            array (
                'id' => 1224,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Feucherolles',
            ),
            224 => 
            array (
                'id' => 1225,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Finistere',
            ),
            225 => 
            array (
                'id' => 1226,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Franche-Comte',
            ),
            226 => 
            array (
                'id' => 1227,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Gard',
            ),
            227 => 
            array (
                'id' => 1228,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Gers',
            ),
            228 => 
            array (
                'id' => 1229,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Gironde',
            ),
            229 => 
            array (
                'id' => 1230,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Haut-Rhin',
            ),
            230 => 
            array (
                'id' => 1231,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Haute-Corse',
            ),
            231 => 
            array (
                'id' => 1232,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Haute-Garonne',
            ),
            232 => 
            array (
                'id' => 1233,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Haute-Loire',
            ),
            233 => 
            array (
                'id' => 1234,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Haute-Marne',
            ),
            234 => 
            array (
                'id' => 1235,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Haute-Saone',
            ),
            235 => 
            array (
                'id' => 1236,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Haute-Savoie',
            ),
            236 => 
            array (
                'id' => 1237,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Haute-Vienne',
            ),
            237 => 
            array (
                'id' => 1238,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Hautes-Alpes',
            ),
            238 => 
            array (
                'id' => 1239,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Hautes-Pyrenees',
            ),
            239 => 
            array (
                'id' => 1240,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Hauts-de-Seine',
            ),
            240 => 
            array (
                'id' => 1241,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Herault',
            ),
            241 => 
            array (
                'id' => 1242,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Ile-de-France',
            ),
            242 => 
            array (
                'id' => 1243,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Ille-et-Vilaine',
            ),
            243 => 
            array (
                'id' => 1244,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Indre',
            ),
            244 => 
            array (
                'id' => 1245,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Indre-et-Loire',
            ),
            245 => 
            array (
                'id' => 1246,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Isere',
            ),
            246 => 
            array (
                'id' => 1247,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Jura',
            ),
            247 => 
            array (
                'id' => 1248,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Klagenfurt',
            ),
            248 => 
            array (
                'id' => 1249,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Landes',
            ),
            249 => 
            array (
                'id' => 1250,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Languedoc-Roussillon',
            ),
            250 => 
            array (
                'id' => 1251,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Larcay',
            ),
            251 => 
            array (
                'id' => 1252,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Le Castellet',
            ),
            252 => 
            array (
                'id' => 1253,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Le Creusot',
            ),
            253 => 
            array (
                'id' => 1254,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Limousin',
            ),
            254 => 
            array (
                'id' => 1255,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Loir-et-Cher',
            ),
            255 => 
            array (
                'id' => 1256,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Loire',
            ),
            256 => 
            array (
                'id' => 1257,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Loire-Atlantique',
            ),
            257 => 
            array (
                'id' => 1258,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Loiret',
            ),
            258 => 
            array (
                'id' => 1259,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Lorraine',
            ),
            259 => 
            array (
                'id' => 1260,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Lot',
            ),
            260 => 
            array (
                'id' => 1261,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Lot-et-Garonne',
            ),
            261 => 
            array (
                'id' => 1262,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Lower Normandy',
            ),
            262 => 
            array (
                'id' => 1263,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Lozere',
            ),
            263 => 
            array (
                'id' => 1264,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Maine-et-Loire',
            ),
            264 => 
            array (
                'id' => 1265,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Manche',
            ),
            265 => 
            array (
                'id' => 1266,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Marne',
            ),
            266 => 
            array (
                'id' => 1267,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Mayenne',
            ),
            267 => 
            array (
                'id' => 1268,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Meurthe-et-Moselle',
            ),
            268 => 
            array (
                'id' => 1269,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Meuse',
            ),
            269 => 
            array (
                'id' => 1270,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Midi-Pyrenees',
            ),
            270 => 
            array (
                'id' => 1271,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Morbihan',
            ),
            271 => 
            array (
                'id' => 1272,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Moselle',
            ),
            272 => 
            array (
                'id' => 1273,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Nievre',
            ),
            273 => 
            array (
                'id' => 1274,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Nord',
            ),
            274 => 
            array (
                'id' => 1275,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Nord-Pas-de-Calais',
            ),
            275 => 
            array (
                'id' => 1276,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Oise',
            ),
            276 => 
            array (
                'id' => 1277,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Orne',
            ),
            277 => 
            array (
                'id' => 1278,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Paris',
            ),
            278 => 
            array (
                'id' => 1279,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Pas-de-Calais',
            ),
            279 => 
            array (
                'id' => 1280,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Pays de la Loire',
            ),
            280 => 
            array (
                'id' => 1281,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Pays-de-la-Loire',
            ),
            281 => 
            array (
                'id' => 1282,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Picardy',
            ),
            282 => 
            array (
                'id' => 1283,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Puy-de-Dome',
            ),
            283 => 
            array (
                'id' => 1284,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Pyrenees-Atlantiques',
            ),
            284 => 
            array (
                'id' => 1285,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Pyrenees-Orientales',
            ),
            285 => 
            array (
                'id' => 1286,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Quelmes',
            ),
            286 => 
            array (
                'id' => 1287,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Rhone',
            ),
            287 => 
            array (
                'id' => 1288,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Rhone-Alpes',
            ),
            288 => 
            array (
                'id' => 1289,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Saint Ouen',
            ),
            289 => 
            array (
                'id' => 1290,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Saint Viatre',
            ),
            290 => 
            array (
                'id' => 1291,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Saone-et-Loire',
            ),
            291 => 
            array (
                'id' => 1292,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Sarthe',
            ),
            292 => 
            array (
                'id' => 1293,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Savoie',
            ),
            293 => 
            array (
                'id' => 1294,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Seine-Maritime',
            ),
            294 => 
            array (
                'id' => 1295,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Seine-Saint-Denis',
            ),
            295 => 
            array (
                'id' => 1296,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Seine-et-Marne',
            ),
            296 => 
            array (
                'id' => 1297,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Somme',
            ),
            297 => 
            array (
                'id' => 1298,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Sophia Antipolis',
            ),
            298 => 
            array (
                'id' => 1299,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Souvans',
            ),
            299 => 
            array (
                'id' => 1300,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Tarn',
            ),
            300 => 
            array (
                'id' => 1301,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Tarn-et-Garonne',
            ),
            301 => 
            array (
                'id' => 1302,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Territoire de Belfort',
            ),
            302 => 
            array (
                'id' => 1303,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Treignac',
            ),
            303 => 
            array (
                'id' => 1304,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Upper Normandy',
            ),
            304 => 
            array (
                'id' => 1305,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Val-d\'Oise',
            ),
            305 => 
            array (
                'id' => 1306,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Val-de-Marne',
            ),
            306 => 
            array (
                'id' => 1307,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Var',
            ),
            307 => 
            array (
                'id' => 1308,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Vaucluse',
            ),
            308 => 
            array (
                'id' => 1309,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Vellise',
            ),
            309 => 
            array (
                'id' => 1310,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Vendee',
            ),
            310 => 
            array (
                'id' => 1311,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Vienne',
            ),
            311 => 
            array (
                'id' => 1312,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Vosges',
            ),
            312 => 
            array (
                'id' => 1313,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Yonne',
            ),
            313 => 
            array (
                'id' => 1314,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 75,
                'name' => 'Yvelines',
            ),
            314 => 
            array (
                'id' => 1315,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 76,
                'name' => 'Cayenne',
            ),
            315 => 
            array (
                'id' => 1316,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 76,
                'name' => 'Saint-Laurent-du-Maroni',
            ),
            316 => 
            array (
                'id' => 1317,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 77,
                'name' => 'Iles du Vent',
            ),
            317 => 
            array (
                'id' => 1318,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 77,
                'name' => 'Iles sous le Vent',
            ),
            318 => 
            array (
                'id' => 1319,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 77,
                'name' => 'Marquesas',
            ),
            319 => 
            array (
                'id' => 1320,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 77,
                'name' => 'Tuamotu',
            ),
            320 => 
            array (
                'id' => 1321,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 77,
                'name' => 'Tubuai',
            ),
            321 => 
            array (
                'id' => 1322,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 78,
                'name' => 'Amsterdam',
            ),
            322 => 
            array (
                'id' => 1323,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 78,
                'name' => 'Crozet Islands',
            ),
            323 => 
            array (
                'id' => 1324,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 78,
                'name' => 'Kerguelen',
            ),
            324 => 
            array (
                'id' => 1325,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 79,
                'name' => 'Estuaire',
            ),
            325 => 
            array (
                'id' => 1326,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 79,
                'name' => 'Haut-Ogooue',
            ),
            326 => 
            array (
                'id' => 1327,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 79,
                'name' => 'Moyen-Ogooue',
            ),
            327 => 
            array (
                'id' => 1328,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 79,
                'name' => 'Ngounie',
            ),
            328 => 
            array (
                'id' => 1329,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 79,
                'name' => 'Nyanga',
            ),
            329 => 
            array (
                'id' => 1330,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 79,
                'name' => 'Ogooue-Ivindo',
            ),
            330 => 
            array (
                'id' => 1331,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 79,
                'name' => 'Ogooue-Lolo',
            ),
            331 => 
            array (
                'id' => 1332,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 79,
                'name' => 'Ogooue-Maritime',
            ),
            332 => 
            array (
                'id' => 1333,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 79,
                'name' => 'Woleu-Ntem',
            ),
            333 => 
            array (
                'id' => 1334,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 80,
                'name' => 'Banjul',
            ),
            334 => 
            array (
                'id' => 1335,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 80,
                'name' => 'Basse',
            ),
            335 => 
            array (
                'id' => 1336,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 80,
                'name' => 'Brikama',
            ),
            336 => 
            array (
                'id' => 1337,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 80,
                'name' => 'Janjanbureh',
            ),
            337 => 
            array (
                'id' => 1338,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 80,
                'name' => 'Kanifing',
            ),
            338 => 
            array (
                'id' => 1339,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 80,
                'name' => 'Kerewan',
            ),
            339 => 
            array (
                'id' => 1340,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 80,
                'name' => 'Kuntaur',
            ),
            340 => 
            array (
                'id' => 1341,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 80,
                'name' => 'Mansakonko',
            ),
            341 => 
            array (
                'id' => 1342,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 81,
                'name' => 'Abhasia',
            ),
            342 => 
            array (
                'id' => 1343,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 81,
                'name' => 'Ajaria',
            ),
            343 => 
            array (
                'id' => 1344,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 81,
                'name' => 'Guria',
            ),
            344 => 
            array (
                'id' => 1345,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 81,
                'name' => 'Imereti',
            ),
            345 => 
            array (
                'id' => 1346,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 81,
                'name' => 'Kaheti',
            ),
            346 => 
            array (
                'id' => 1347,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 81,
                'name' => 'Kvemo Kartli',
            ),
            347 => 
            array (
                'id' => 1348,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 81,
                'name' => 'Mcheta-Mtianeti',
            ),
            348 => 
            array (
                'id' => 1349,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 81,
                'name' => 'Racha',
            ),
            349 => 
            array (
                'id' => 1350,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 81,
                'name' => 'Samagrelo-Zemo Svaneti',
            ),
            350 => 
            array (
                'id' => 1351,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 81,
                'name' => 'Samche-Zhavaheti',
            ),
            351 => 
            array (
                'id' => 1352,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 81,
                'name' => 'Shida Kartli',
            ),
            352 => 
            array (
                'id' => 1353,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 81,
                'name' => 'Tbilisi',
            ),
            353 => 
            array (
                'id' => 1354,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 82,
                'name' => 'Auvergne',
            ),
            354 => 
            array (
                'id' => 1355,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 82,
                'name' => 'Baden-Wurttemberg',
            ),
            355 => 
            array (
                'id' => 1356,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 82,
                'name' => 'Bavaria',
            ),
            356 => 
            array (
                'id' => 1357,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 82,
                'name' => 'Bayern',
            ),
            357 => 
            array (
                'id' => 1358,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 82,
                'name' => 'Beilstein Wurtt',
            ),
            358 => 
            array (
                'id' => 1359,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 82,
                'name' => 'Berlin',
            ),
            359 => 
            array (
                'id' => 1360,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 82,
                'name' => 'Brandenburg',
            ),
            360 => 
            array (
                'id' => 1361,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 82,
                'name' => 'Bremen',
            ),
            361 => 
            array (
                'id' => 1362,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 82,
                'name' => 'Dreisbach',
            ),
            362 => 
            array (
                'id' => 1363,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 82,
                'name' => 'Freistaat Bayern',
            ),
            363 => 
            array (
                'id' => 1364,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 82,
                'name' => 'Hamburg',
            ),
            364 => 
            array (
                'id' => 1365,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 82,
                'name' => 'Hannover',
            ),
            365 => 
            array (
                'id' => 1366,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 82,
                'name' => 'Heroldstatt',
            ),
            366 => 
            array (
                'id' => 1367,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 82,
                'name' => 'Hessen',
            ),
            367 => 
            array (
                'id' => 1368,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 82,
                'name' => 'Kortenberg',
            ),
            368 => 
            array (
                'id' => 1369,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 82,
                'name' => 'Laasdorf',
            ),
            369 => 
            array (
                'id' => 1370,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 82,
                'name' => 'Land Baden-Wurttemberg',
            ),
            370 => 
            array (
                'id' => 1371,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 82,
                'name' => 'Land Bayern',
            ),
            371 => 
            array (
                'id' => 1372,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 82,
                'name' => 'Land Brandenburg',
            ),
            372 => 
            array (
                'id' => 1373,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 82,
                'name' => 'Land Hessen',
            ),
            373 => 
            array (
                'id' => 1374,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 82,
                'name' => 'Land Mecklenburg-Vorpommern',
            ),
            374 => 
            array (
                'id' => 1375,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 82,
                'name' => 'Land Nordrhein-Westfalen',
            ),
            375 => 
            array (
                'id' => 1376,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 82,
                'name' => 'Land Rheinland-Pfalz',
            ),
            376 => 
            array (
                'id' => 1377,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 82,
                'name' => 'Land Sachsen',
            ),
            377 => 
            array (
                'id' => 1378,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 82,
                'name' => 'Land Sachsen-Anhalt',
            ),
            378 => 
            array (
                'id' => 1379,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 82,
                'name' => 'Land Thuringen',
            ),
            379 => 
            array (
                'id' => 1380,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 82,
                'name' => 'Lower Saxony',
            ),
            380 => 
            array (
                'id' => 1381,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 82,
                'name' => 'Mecklenburg-Vorpommern',
            ),
            381 => 
            array (
                'id' => 1382,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 82,
                'name' => 'Mulfingen',
            ),
            382 => 
            array (
                'id' => 1383,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 82,
                'name' => 'Munich',
            ),
            383 => 
            array (
                'id' => 1384,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 82,
                'name' => 'Neubeuern',
            ),
            384 => 
            array (
                'id' => 1385,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 82,
                'name' => 'Niedersachsen',
            ),
            385 => 
            array (
                'id' => 1386,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 82,
                'name' => 'Noord-Holland',
            ),
            386 => 
            array (
                'id' => 1387,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 82,
                'name' => 'Nordrhein-Westfalen',
            ),
            387 => 
            array (
                'id' => 1388,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 82,
                'name' => 'North Rhine-Westphalia',
            ),
            388 => 
            array (
                'id' => 1389,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 82,
                'name' => 'Osterode',
            ),
            389 => 
            array (
                'id' => 1390,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 82,
                'name' => 'Rheinland-Pfalz',
            ),
            390 => 
            array (
                'id' => 1391,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 82,
                'name' => 'Rhineland-Palatinate',
            ),
            391 => 
            array (
                'id' => 1392,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 82,
                'name' => 'Saarland',
            ),
            392 => 
            array (
                'id' => 1393,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 82,
                'name' => 'Sachsen',
            ),
            393 => 
            array (
                'id' => 1394,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 82,
                'name' => 'Sachsen-Anhalt',
            ),
            394 => 
            array (
                'id' => 1395,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 82,
                'name' => 'Saxony',
            ),
            395 => 
            array (
                'id' => 1396,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 82,
                'name' => 'Schleswig-Holstein',
            ),
            396 => 
            array (
                'id' => 1397,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 82,
                'name' => 'Thuringia',
            ),
            397 => 
            array (
                'id' => 1398,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 82,
                'name' => 'Webling',
            ),
            398 => 
            array (
                'id' => 1399,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 82,
                'name' => 'Weinstrabe',
            ),
            399 => 
            array (
                'id' => 1400,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 82,
                'name' => 'schlobborn',
            ),
            400 => 
            array (
                'id' => 1401,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 83,
                'name' => 'Ashanti',
            ),
            401 => 
            array (
                'id' => 1402,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 83,
                'name' => 'Brong-Ahafo',
            ),
            402 => 
            array (
                'id' => 1403,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 83,
                'name' => 'Central',
            ),
            403 => 
            array (
                'id' => 1404,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 83,
                'name' => 'Eastern',
            ),
            404 => 
            array (
                'id' => 1405,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 83,
                'name' => 'Greater Accra',
            ),
            405 => 
            array (
                'id' => 1406,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 83,
                'name' => 'Northern',
            ),
            406 => 
            array (
                'id' => 1407,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 83,
                'name' => 'Upper East',
            ),
            407 => 
            array (
                'id' => 1408,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 83,
                'name' => 'Upper West',
            ),
            408 => 
            array (
                'id' => 1409,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 83,
                'name' => 'Volta',
            ),
            409 => 
            array (
                'id' => 1410,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 83,
                'name' => 'Western',
            ),
            410 => 
            array (
                'id' => 1411,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 84,
                'name' => 'Gibraltar',
            ),
            411 => 
            array (
                'id' => 1412,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 85,
                'name' => 'Acharnes',
            ),
            412 => 
            array (
                'id' => 1413,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 85,
                'name' => 'Ahaia',
            ),
            413 => 
            array (
                'id' => 1414,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 85,
                'name' => 'Aitolia kai Akarnania',
            ),
            414 => 
            array (
                'id' => 1415,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 85,
                'name' => 'Argolis',
            ),
            415 => 
            array (
                'id' => 1416,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 85,
                'name' => 'Arkadia',
            ),
            416 => 
            array (
                'id' => 1417,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 85,
                'name' => 'Arta',
            ),
            417 => 
            array (
                'id' => 1418,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 85,
                'name' => 'Attica',
            ),
            418 => 
            array (
                'id' => 1419,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 85,
                'name' => 'Attiki',
            ),
            419 => 
            array (
                'id' => 1420,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 85,
                'name' => 'Ayion Oros',
            ),
            420 => 
            array (
                'id' => 1421,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 85,
                'name' => 'Crete',
            ),
            421 => 
            array (
                'id' => 1422,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 85,
                'name' => 'Dodekanisos',
            ),
            422 => 
            array (
                'id' => 1423,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 85,
                'name' => 'Drama',
            ),
            423 => 
            array (
                'id' => 1424,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 85,
                'name' => 'Evia',
            ),
            424 => 
            array (
                'id' => 1425,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 85,
                'name' => 'Evritania',
            ),
            425 => 
            array (
                'id' => 1426,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 85,
                'name' => 'Evros',
            ),
            426 => 
            array (
                'id' => 1427,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 85,
                'name' => 'Evvoia',
            ),
            427 => 
            array (
                'id' => 1428,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 85,
                'name' => 'Florina',
            ),
            428 => 
            array (
                'id' => 1429,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 85,
                'name' => 'Fokis',
            ),
            429 => 
            array (
                'id' => 1430,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 85,
                'name' => 'Fthiotis',
            ),
            430 => 
            array (
                'id' => 1431,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 85,
                'name' => 'Grevena',
            ),
            431 => 
            array (
                'id' => 1432,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 85,
                'name' => 'Halandri',
            ),
            432 => 
            array (
                'id' => 1433,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 85,
                'name' => 'Halkidiki',
            ),
            433 => 
            array (
                'id' => 1434,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 85,
                'name' => 'Hania',
            ),
            434 => 
            array (
                'id' => 1435,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 85,
                'name' => 'Heraklion',
            ),
            435 => 
            array (
                'id' => 1436,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 85,
                'name' => 'Hios',
            ),
            436 => 
            array (
                'id' => 1437,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 85,
                'name' => 'Ilia',
            ),
            437 => 
            array (
                'id' => 1438,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 85,
                'name' => 'Imathia',
            ),
            438 => 
            array (
                'id' => 1439,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 85,
                'name' => 'Ioannina',
            ),
            439 => 
            array (
                'id' => 1440,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 85,
                'name' => 'Iraklion',
            ),
            440 => 
            array (
                'id' => 1441,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 85,
                'name' => 'Karditsa',
            ),
            441 => 
            array (
                'id' => 1442,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 85,
                'name' => 'Kastoria',
            ),
            442 => 
            array (
                'id' => 1443,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 85,
                'name' => 'Kavala',
            ),
            443 => 
            array (
                'id' => 1444,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 85,
                'name' => 'Kefallinia',
            ),
            444 => 
            array (
                'id' => 1445,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 85,
                'name' => 'Kerkira',
            ),
            445 => 
            array (
                'id' => 1446,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 85,
                'name' => 'Kiklades',
            ),
            446 => 
            array (
                'id' => 1447,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 85,
                'name' => 'Kilkis',
            ),
            447 => 
            array (
                'id' => 1448,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 85,
                'name' => 'Korinthia',
            ),
            448 => 
            array (
                'id' => 1449,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 85,
                'name' => 'Kozani',
            ),
            449 => 
            array (
                'id' => 1450,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 85,
                'name' => 'Lakonia',
            ),
            450 => 
            array (
                'id' => 1451,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 85,
                'name' => 'Larisa',
            ),
            451 => 
            array (
                'id' => 1452,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 85,
                'name' => 'Lasithi',
            ),
            452 => 
            array (
                'id' => 1453,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 85,
                'name' => 'Lesvos',
            ),
            453 => 
            array (
                'id' => 1454,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 85,
                'name' => 'Levkas',
            ),
            454 => 
            array (
                'id' => 1455,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 85,
                'name' => 'Magnisia',
            ),
            455 => 
            array (
                'id' => 1456,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 85,
                'name' => 'Messinia',
            ),
            456 => 
            array (
                'id' => 1457,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 85,
                'name' => 'Nomos Attikis',
            ),
            457 => 
            array (
                'id' => 1458,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 85,
                'name' => 'Nomos Zakynthou',
            ),
            458 => 
            array (
                'id' => 1459,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 85,
                'name' => 'Pella',
            ),
            459 => 
            array (
                'id' => 1460,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 85,
                'name' => 'Pieria',
            ),
            460 => 
            array (
                'id' => 1461,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 85,
                'name' => 'Piraios',
            ),
            461 => 
            array (
                'id' => 1462,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 85,
                'name' => 'Preveza',
            ),
            462 => 
            array (
                'id' => 1463,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 85,
                'name' => 'Rethimni',
            ),
            463 => 
            array (
                'id' => 1464,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 85,
                'name' => 'Rodopi',
            ),
            464 => 
            array (
                'id' => 1465,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 85,
                'name' => 'Samos',
            ),
            465 => 
            array (
                'id' => 1466,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 85,
                'name' => 'Serrai',
            ),
            466 => 
            array (
                'id' => 1467,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 85,
                'name' => 'Thesprotia',
            ),
            467 => 
            array (
                'id' => 1468,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 85,
                'name' => 'Thessaloniki',
            ),
            468 => 
            array (
                'id' => 1469,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 85,
                'name' => 'Trikala',
            ),
            469 => 
            array (
                'id' => 1470,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 85,
                'name' => 'Voiotia',
            ),
            470 => 
            array (
                'id' => 1471,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 85,
                'name' => 'West Greece',
            ),
            471 => 
            array (
                'id' => 1472,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 85,
                'name' => 'Xanthi',
            ),
            472 => 
            array (
                'id' => 1473,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 85,
                'name' => 'Zakinthos',
            ),
            473 => 
            array (
                'id' => 1474,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 86,
                'name' => 'Aasiaat',
            ),
            474 => 
            array (
                'id' => 1475,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 86,
                'name' => 'Ammassalik',
            ),
            475 => 
            array (
                'id' => 1476,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 86,
                'name' => 'Illoqqortoormiut',
            ),
            476 => 
            array (
                'id' => 1477,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 86,
                'name' => 'Ilulissat',
            ),
            477 => 
            array (
                'id' => 1478,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 86,
                'name' => 'Ivittuut',
            ),
            478 => 
            array (
                'id' => 1479,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 86,
                'name' => 'Kangaatsiaq',
            ),
            479 => 
            array (
                'id' => 1480,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 86,
                'name' => 'Maniitsoq',
            ),
            480 => 
            array (
                'id' => 1481,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 86,
                'name' => 'Nanortalik',
            ),
            481 => 
            array (
                'id' => 1482,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 86,
                'name' => 'Narsaq',
            ),
            482 => 
            array (
                'id' => 1483,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 86,
                'name' => 'Nuuk',
            ),
            483 => 
            array (
                'id' => 1484,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 86,
                'name' => 'Paamiut',
            ),
            484 => 
            array (
                'id' => 1485,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 86,
                'name' => 'Qaanaaq',
            ),
            485 => 
            array (
                'id' => 1486,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 86,
                'name' => 'Qaqortoq',
            ),
            486 => 
            array (
                'id' => 1487,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 86,
                'name' => 'Qasigiannguit',
            ),
            487 => 
            array (
                'id' => 1488,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 86,
                'name' => 'Qeqertarsuaq',
            ),
            488 => 
            array (
                'id' => 1489,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 86,
                'name' => 'Sisimiut',
            ),
            489 => 
            array (
                'id' => 1490,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 86,
                'name' => 'Udenfor kommunal inddeling',
            ),
            490 => 
            array (
                'id' => 1491,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 86,
                'name' => 'Upernavik',
            ),
            491 => 
            array (
                'id' => 1492,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 86,
                'name' => 'Uummannaq',
            ),
            492 => 
            array (
                'id' => 1493,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 87,
                'name' => 'Carriacou-Petite Martinique',
            ),
            493 => 
            array (
                'id' => 1494,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 87,
                'name' => 'Saint Andrew',
            ),
            494 => 
            array (
                'id' => 1495,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 87,
                'name' => 'Saint Davids',
            ),
            495 => 
            array (
                'id' => 1496,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 87,
                'name' => 'Saint George\'s',
            ),
            496 => 
            array (
                'id' => 1497,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 87,
                'name' => 'Saint John',
            ),
            497 => 
            array (
                'id' => 1498,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 87,
                'name' => 'Saint Mark',
            ),
            498 => 
            array (
                'id' => 1499,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 87,
                'name' => 'Saint Patrick',
            ),
            499 => 
            array (
                'id' => 1500,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 88,
                'name' => 'Basse-Terre',
            ),
        ));
        \DB::table('states')->insert(array (
            0 => 
            array (
                'id' => 1501,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 88,
                'name' => 'Grande-Terre',
            ),
            1 => 
            array (
                'id' => 1502,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 88,
                'name' => 'Iles des Saintes',
            ),
            2 => 
            array (
                'id' => 1503,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 88,
                'name' => 'La Desirade',
            ),
            3 => 
            array (
                'id' => 1504,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 88,
                'name' => 'Marie-Galante',
            ),
            4 => 
            array (
                'id' => 1505,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 88,
                'name' => 'Saint Barthelemy',
            ),
            5 => 
            array (
                'id' => 1506,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 88,
                'name' => 'Saint Martin',
            ),
            6 => 
            array (
                'id' => 1507,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 89,
                'name' => 'Agana Heights',
            ),
            7 => 
            array (
                'id' => 1508,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 89,
                'name' => 'Agat',
            ),
            8 => 
            array (
                'id' => 1509,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 89,
                'name' => 'Barrigada',
            ),
            9 => 
            array (
                'id' => 1510,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 89,
                'name' => 'Chalan-Pago-Ordot',
            ),
            10 => 
            array (
                'id' => 1511,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 89,
                'name' => 'Dededo',
            ),
            11 => 
            array (
                'id' => 1512,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 89,
                'name' => 'Hagatna',
            ),
            12 => 
            array (
                'id' => 1513,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 89,
                'name' => 'Inarajan',
            ),
            13 => 
            array (
                'id' => 1514,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 89,
                'name' => 'Mangilao',
            ),
            14 => 
            array (
                'id' => 1515,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 89,
                'name' => 'Merizo',
            ),
            15 => 
            array (
                'id' => 1516,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 89,
                'name' => 'Mongmong-Toto-Maite',
            ),
            16 => 
            array (
                'id' => 1517,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 89,
                'name' => 'Santa Rita',
            ),
            17 => 
            array (
                'id' => 1518,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 89,
                'name' => 'Sinajana',
            ),
            18 => 
            array (
                'id' => 1519,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 89,
                'name' => 'Talofofo',
            ),
            19 => 
            array (
                'id' => 1520,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 89,
                'name' => 'Tamuning',
            ),
            20 => 
            array (
                'id' => 1521,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 89,
                'name' => 'Yigo',
            ),
            21 => 
            array (
                'id' => 1522,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 89,
                'name' => 'Yona',
            ),
            22 => 
            array (
                'id' => 1523,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 90,
                'name' => 'Alta Verapaz',
            ),
            23 => 
            array (
                'id' => 1524,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 90,
                'name' => 'Baja Verapaz',
            ),
            24 => 
            array (
                'id' => 1525,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 90,
                'name' => 'Chimaltenango',
            ),
            25 => 
            array (
                'id' => 1526,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 90,
                'name' => 'Chiquimula',
            ),
            26 => 
            array (
                'id' => 1527,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 90,
                'name' => 'El Progreso',
            ),
            27 => 
            array (
                'id' => 1528,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 90,
                'name' => 'Escuintla',
            ),
            28 => 
            array (
                'id' => 1529,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 90,
                'name' => 'Guatemala',
            ),
            29 => 
            array (
                'id' => 1530,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 90,
                'name' => 'Huehuetenango',
            ),
            30 => 
            array (
                'id' => 1531,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 90,
                'name' => 'Izabal',
            ),
            31 => 
            array (
                'id' => 1532,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 90,
                'name' => 'Jalapa',
            ),
            32 => 
            array (
                'id' => 1533,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 90,
                'name' => 'Jutiapa',
            ),
            33 => 
            array (
                'id' => 1534,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 90,
                'name' => 'Peten',
            ),
            34 => 
            array (
                'id' => 1535,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 90,
                'name' => 'Quezaltenango',
            ),
            35 => 
            array (
                'id' => 1536,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 90,
                'name' => 'Quiche',
            ),
            36 => 
            array (
                'id' => 1537,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 90,
                'name' => 'Retalhuleu',
            ),
            37 => 
            array (
                'id' => 1538,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 90,
                'name' => 'Sacatepequez',
            ),
            38 => 
            array (
                'id' => 1539,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 90,
                'name' => 'San Marcos',
            ),
            39 => 
            array (
                'id' => 1540,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 90,
                'name' => 'Santa Rosa',
            ),
            40 => 
            array (
                'id' => 1541,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 90,
                'name' => 'Solola',
            ),
            41 => 
            array (
                'id' => 1542,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 90,
                'name' => 'Suchitepequez',
            ),
            42 => 
            array (
                'id' => 1543,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 90,
                'name' => 'Totonicapan',
            ),
            43 => 
            array (
                'id' => 1544,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 90,
                'name' => 'Zacapa',
            ),
            44 => 
            array (
                'id' => 1545,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 91,
                'name' => 'Alderney',
            ),
            45 => 
            array (
                'id' => 1546,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 91,
                'name' => 'Castel',
            ),
            46 => 
            array (
                'id' => 1547,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 91,
                'name' => 'Forest',
            ),
            47 => 
            array (
                'id' => 1548,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 91,
                'name' => 'Saint Andrew',
            ),
            48 => 
            array (
                'id' => 1549,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 91,
                'name' => 'Saint Martin',
            ),
            49 => 
            array (
                'id' => 1550,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 91,
                'name' => 'Saint Peter Port',
            ),
            50 => 
            array (
                'id' => 1551,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 91,
                'name' => 'Saint Pierre du Bois',
            ),
            51 => 
            array (
                'id' => 1552,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 91,
                'name' => 'Saint Sampson',
            ),
            52 => 
            array (
                'id' => 1553,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 91,
                'name' => 'Saint Saviour',
            ),
            53 => 
            array (
                'id' => 1554,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 91,
                'name' => 'Sark',
            ),
            54 => 
            array (
                'id' => 1555,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 91,
                'name' => 'Torteval',
            ),
            55 => 
            array (
                'id' => 1556,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 91,
                'name' => 'Vale',
            ),
            56 => 
            array (
                'id' => 1557,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 92,
                'name' => 'Beyla',
            ),
            57 => 
            array (
                'id' => 1558,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 92,
                'name' => 'Boffa',
            ),
            58 => 
            array (
                'id' => 1559,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 92,
                'name' => 'Boke',
            ),
            59 => 
            array (
                'id' => 1560,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 92,
                'name' => 'Conakry',
            ),
            60 => 
            array (
                'id' => 1561,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 92,
                'name' => 'Coyah',
            ),
            61 => 
            array (
                'id' => 1562,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 92,
                'name' => 'Dabola',
            ),
            62 => 
            array (
                'id' => 1563,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 92,
                'name' => 'Dalaba',
            ),
            63 => 
            array (
                'id' => 1564,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 92,
                'name' => 'Dinguiraye',
            ),
            64 => 
            array (
                'id' => 1565,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 92,
                'name' => 'Faranah',
            ),
            65 => 
            array (
                'id' => 1566,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 92,
                'name' => 'Forecariah',
            ),
            66 => 
            array (
                'id' => 1567,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 92,
                'name' => 'Fria',
            ),
            67 => 
            array (
                'id' => 1568,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 92,
                'name' => 'Gaoual',
            ),
            68 => 
            array (
                'id' => 1569,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 92,
                'name' => 'Gueckedou',
            ),
            69 => 
            array (
                'id' => 1570,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 92,
                'name' => 'Kankan',
            ),
            70 => 
            array (
                'id' => 1571,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 92,
                'name' => 'Kerouane',
            ),
            71 => 
            array (
                'id' => 1572,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 92,
                'name' => 'Kindia',
            ),
            72 => 
            array (
                'id' => 1573,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 92,
                'name' => 'Kissidougou',
            ),
            73 => 
            array (
                'id' => 1574,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 92,
                'name' => 'Koubia',
            ),
            74 => 
            array (
                'id' => 1575,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 92,
                'name' => 'Koundara',
            ),
            75 => 
            array (
                'id' => 1576,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 92,
                'name' => 'Kouroussa',
            ),
            76 => 
            array (
                'id' => 1577,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 92,
                'name' => 'Labe',
            ),
            77 => 
            array (
                'id' => 1578,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 92,
                'name' => 'Lola',
            ),
            78 => 
            array (
                'id' => 1579,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 92,
                'name' => 'Macenta',
            ),
            79 => 
            array (
                'id' => 1580,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 92,
                'name' => 'Mali',
            ),
            80 => 
            array (
                'id' => 1581,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 92,
                'name' => 'Mamou',
            ),
            81 => 
            array (
                'id' => 1582,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 92,
                'name' => 'Mandiana',
            ),
            82 => 
            array (
                'id' => 1583,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 92,
                'name' => 'Nzerekore',
            ),
            83 => 
            array (
                'id' => 1584,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 92,
                'name' => 'Pita',
            ),
            84 => 
            array (
                'id' => 1585,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 92,
                'name' => 'Siguiri',
            ),
            85 => 
            array (
                'id' => 1586,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 92,
                'name' => 'Telimele',
            ),
            86 => 
            array (
                'id' => 1587,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 92,
                'name' => 'Tougue',
            ),
            87 => 
            array (
                'id' => 1588,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 92,
                'name' => 'Yomou',
            ),
            88 => 
            array (
                'id' => 1589,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 93,
                'name' => 'Bafata',
            ),
            89 => 
            array (
                'id' => 1590,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 93,
                'name' => 'Bissau',
            ),
            90 => 
            array (
                'id' => 1591,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 93,
                'name' => 'Bolama',
            ),
            91 => 
            array (
                'id' => 1592,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 93,
                'name' => 'Cacheu',
            ),
            92 => 
            array (
                'id' => 1593,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 93,
                'name' => 'Gabu',
            ),
            93 => 
            array (
                'id' => 1594,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 93,
                'name' => 'Oio',
            ),
            94 => 
            array (
                'id' => 1595,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 93,
                'name' => 'Quinara',
            ),
            95 => 
            array (
                'id' => 1596,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 93,
                'name' => 'Tombali',
            ),
            96 => 
            array (
                'id' => 1597,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 94,
                'name' => 'Barima-Waini',
            ),
            97 => 
            array (
                'id' => 1598,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 94,
                'name' => 'Cuyuni-Mazaruni',
            ),
            98 => 
            array (
                'id' => 1599,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 94,
                'name' => 'Demerara-Mahaica',
            ),
            99 => 
            array (
                'id' => 1600,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 94,
                'name' => 'East Berbice-Corentyne',
            ),
            100 => 
            array (
                'id' => 1601,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 94,
                'name' => 'Essequibo Islands-West Demerar',
            ),
            101 => 
            array (
                'id' => 1602,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 94,
                'name' => 'Mahaica-Berbice',
            ),
            102 => 
            array (
                'id' => 1603,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 94,
                'name' => 'Pomeroon-Supenaam',
            ),
            103 => 
            array (
                'id' => 1604,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 94,
                'name' => 'Potaro-Siparuni',
            ),
            104 => 
            array (
                'id' => 1605,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 94,
                'name' => 'Upper Demerara-Berbice',
            ),
            105 => 
            array (
                'id' => 1606,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 94,
                'name' => 'Upper Takutu-Upper Essequibo',
            ),
            106 => 
            array (
                'id' => 1607,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 95,
                'name' => 'Artibonite',
            ),
            107 => 
            array (
                'id' => 1608,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 95,
                'name' => 'Centre',
            ),
            108 => 
            array (
                'id' => 1609,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 95,
                'name' => 'Grand\'Anse',
            ),
            109 => 
            array (
                'id' => 1610,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 95,
                'name' => 'Nord',
            ),
            110 => 
            array (
                'id' => 1611,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 95,
                'name' => 'Nord-Est',
            ),
            111 => 
            array (
                'id' => 1612,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 95,
                'name' => 'Nord-Ouest',
            ),
            112 => 
            array (
                'id' => 1613,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 95,
                'name' => 'Ouest',
            ),
            113 => 
            array (
                'id' => 1614,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 95,
                'name' => 'Sud',
            ),
            114 => 
            array (
                'id' => 1615,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 95,
                'name' => 'Sud-Est',
            ),
            115 => 
            array (
                'id' => 1616,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 96,
                'name' => 'Heard and McDonald Islands',
            ),
            116 => 
            array (
                'id' => 1617,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 97,
                'name' => 'Atlantida',
            ),
            117 => 
            array (
                'id' => 1618,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 97,
                'name' => 'Choluteca',
            ),
            118 => 
            array (
                'id' => 1619,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 97,
                'name' => 'Colon',
            ),
            119 => 
            array (
                'id' => 1620,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 97,
                'name' => 'Comayagua',
            ),
            120 => 
            array (
                'id' => 1621,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 97,
                'name' => 'Copan',
            ),
            121 => 
            array (
                'id' => 1622,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 97,
                'name' => 'Cortes',
            ),
            122 => 
            array (
                'id' => 1623,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 97,
                'name' => 'Distrito Central',
            ),
            123 => 
            array (
                'id' => 1624,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 97,
                'name' => 'El Paraiso',
            ),
            124 => 
            array (
                'id' => 1625,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 97,
                'name' => 'Francisco Morazan',
            ),
            125 => 
            array (
                'id' => 1626,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 97,
                'name' => 'Gracias a Dios',
            ),
            126 => 
            array (
                'id' => 1627,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 97,
                'name' => 'Intibuca',
            ),
            127 => 
            array (
                'id' => 1628,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 97,
                'name' => 'Islas de la Bahia',
            ),
            128 => 
            array (
                'id' => 1629,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 97,
                'name' => 'La Paz',
            ),
            129 => 
            array (
                'id' => 1630,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 97,
                'name' => 'Lempira',
            ),
            130 => 
            array (
                'id' => 1631,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 97,
                'name' => 'Ocotepeque',
            ),
            131 => 
            array (
                'id' => 1632,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 97,
                'name' => 'Olancho',
            ),
            132 => 
            array (
                'id' => 1633,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 97,
                'name' => 'Santa Barbara',
            ),
            133 => 
            array (
                'id' => 1634,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 97,
                'name' => 'Valle',
            ),
            134 => 
            array (
                'id' => 1635,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 97,
                'name' => 'Yoro',
            ),
            135 => 
            array (
                'id' => 1636,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 98,
                'name' => 'Hong Kong',
            ),
            136 => 
            array (
                'id' => 1637,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 99,
                'name' => 'Bacs-Kiskun',
            ),
            137 => 
            array (
                'id' => 1638,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 99,
                'name' => 'Baranya',
            ),
            138 => 
            array (
                'id' => 1639,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 99,
                'name' => 'Bekes',
            ),
            139 => 
            array (
                'id' => 1640,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 99,
                'name' => 'Borsod-Abauj-Zemplen',
            ),
            140 => 
            array (
                'id' => 1641,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 99,
                'name' => 'Budapest',
            ),
            141 => 
            array (
                'id' => 1642,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 99,
                'name' => 'Csongrad',
            ),
            142 => 
            array (
                'id' => 1643,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 99,
                'name' => 'Fejer',
            ),
            143 => 
            array (
                'id' => 1644,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 99,
                'name' => 'Gyor-Moson-Sopron',
            ),
            144 => 
            array (
                'id' => 1645,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 99,
                'name' => 'Hajdu-Bihar',
            ),
            145 => 
            array (
                'id' => 1646,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 99,
                'name' => 'Heves',
            ),
            146 => 
            array (
                'id' => 1647,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 99,
                'name' => 'Jasz-Nagykun-Szolnok',
            ),
            147 => 
            array (
                'id' => 1648,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 99,
                'name' => 'Komarom-Esztergom',
            ),
            148 => 
            array (
                'id' => 1649,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 99,
                'name' => 'Nograd',
            ),
            149 => 
            array (
                'id' => 1650,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 99,
                'name' => 'Pest',
            ),
            150 => 
            array (
                'id' => 1651,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 99,
                'name' => 'Somogy',
            ),
            151 => 
            array (
                'id' => 1652,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 99,
                'name' => 'Szabolcs-Szatmar-Bereg',
            ),
            152 => 
            array (
                'id' => 1653,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 99,
                'name' => 'Tolna',
            ),
            153 => 
            array (
                'id' => 1654,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 99,
                'name' => 'Vas',
            ),
            154 => 
            array (
                'id' => 1655,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 99,
                'name' => 'Veszprem',
            ),
            155 => 
            array (
                'id' => 1656,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 99,
                'name' => 'Zala',
            ),
            156 => 
            array (
                'id' => 1657,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 100,
                'name' => 'Austurland',
            ),
            157 => 
            array (
                'id' => 1658,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 100,
                'name' => 'Gullbringusysla',
            ),
            158 => 
            array (
                'id' => 1659,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 100,
                'name' => 'Hofu borgarsva i',
            ),
            159 => 
            array (
                'id' => 1660,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 100,
                'name' => 'Nor urland eystra',
            ),
            160 => 
            array (
                'id' => 1661,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 100,
                'name' => 'Nor urland vestra',
            ),
            161 => 
            array (
                'id' => 1662,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 100,
                'name' => 'Su urland',
            ),
            162 => 
            array (
                'id' => 1663,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 100,
                'name' => 'Su urnes',
            ),
            163 => 
            array (
                'id' => 1664,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 100,
                'name' => 'Vestfir ir',
            ),
            164 => 
            array (
                'id' => 1665,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 100,
                'name' => 'Vesturland',
            ),
            165 => 
            array (
                'id' => 1666,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 102,
                'name' => 'Aceh',
            ),
            166 => 
            array (
                'id' => 1667,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 102,
                'name' => 'Bali',
            ),
            167 => 
            array (
                'id' => 1668,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 102,
                'name' => 'Bangka-Belitung',
            ),
            168 => 
            array (
                'id' => 1669,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 102,
                'name' => 'Banten',
            ),
            169 => 
            array (
                'id' => 1670,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 102,
                'name' => 'Bengkulu',
            ),
            170 => 
            array (
                'id' => 1671,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 102,
                'name' => 'Gandaria',
            ),
            171 => 
            array (
                'id' => 1672,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 102,
                'name' => 'Gorontalo',
            ),
            172 => 
            array (
                'id' => 1673,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 102,
                'name' => 'Jakarta',
            ),
            173 => 
            array (
                'id' => 1674,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 102,
                'name' => 'Jambi',
            ),
            174 => 
            array (
                'id' => 1675,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 102,
                'name' => 'Jawa Barat',
            ),
            175 => 
            array (
                'id' => 1676,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 102,
                'name' => 'Jawa Tengah',
            ),
            176 => 
            array (
                'id' => 1677,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 102,
                'name' => 'Jawa Timur',
            ),
            177 => 
            array (
                'id' => 1678,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 102,
                'name' => 'Kalimantan Barat',
            ),
            178 => 
            array (
                'id' => 1679,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 102,
                'name' => 'Kalimantan Selatan',
            ),
            179 => 
            array (
                'id' => 1680,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 102,
                'name' => 'Kalimantan Tengah',
            ),
            180 => 
            array (
                'id' => 1681,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 102,
                'name' => 'Kalimantan Timur',
            ),
            181 => 
            array (
                'id' => 1682,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 102,
                'name' => 'Kendal',
            ),
            182 => 
            array (
                'id' => 1683,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 102,
                'name' => 'Lampung',
            ),
            183 => 
            array (
                'id' => 1684,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 102,
                'name' => 'Maluku',
            ),
            184 => 
            array (
                'id' => 1685,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 102,
                'name' => 'Maluku Utara',
            ),
            185 => 
            array (
                'id' => 1686,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 102,
                'name' => 'Nusa Tenggara Barat',
            ),
            186 => 
            array (
                'id' => 1687,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 102,
                'name' => 'Nusa Tenggara Timur',
            ),
            187 => 
            array (
                'id' => 1688,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 102,
                'name' => 'Papua',
            ),
            188 => 
            array (
                'id' => 1689,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 102,
                'name' => 'Riau',
            ),
            189 => 
            array (
                'id' => 1690,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 102,
                'name' => 'Riau Kepulauan',
            ),
            190 => 
            array (
                'id' => 1691,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 102,
                'name' => 'Solo',
            ),
            191 => 
            array (
                'id' => 1692,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 102,
                'name' => 'Sulawesi Selatan',
            ),
            192 => 
            array (
                'id' => 1693,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 102,
                'name' => 'Sulawesi Tengah',
            ),
            193 => 
            array (
                'id' => 1694,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 102,
                'name' => 'Sulawesi Tenggara',
            ),
            194 => 
            array (
                'id' => 1695,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 102,
                'name' => 'Sulawesi Utara',
            ),
            195 => 
            array (
                'id' => 1696,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 102,
                'name' => 'Sumatera Barat',
            ),
            196 => 
            array (
                'id' => 1697,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 102,
                'name' => 'Sumatera Selatan',
            ),
            197 => 
            array (
                'id' => 1698,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 102,
                'name' => 'Sumatera Utara',
            ),
            198 => 
            array (
                'id' => 1699,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 102,
                'name' => 'Yogyakarta',
            ),
            199 => 
            array (
                'id' => 1700,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 103,
                'name' => 'Ardabil',
            ),
            200 => 
            array (
                'id' => 1701,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 103,
                'name' => 'Azarbayjan-e Bakhtari',
            ),
            201 => 
            array (
                'id' => 1702,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 103,
                'name' => 'Azarbayjan-e Khavari',
            ),
            202 => 
            array (
                'id' => 1703,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 103,
                'name' => 'Bushehr',
            ),
            203 => 
            array (
                'id' => 1704,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 103,
                'name' => 'Chahar Mahal-e Bakhtiari',
            ),
            204 => 
            array (
                'id' => 1705,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 103,
                'name' => 'Esfahan',
            ),
            205 => 
            array (
                'id' => 1706,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 103,
                'name' => 'Fars',
            ),
            206 => 
            array (
                'id' => 1707,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 103,
                'name' => 'Gilan',
            ),
            207 => 
            array (
                'id' => 1708,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 103,
                'name' => 'Golestan',
            ),
            208 => 
            array (
                'id' => 1709,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 103,
                'name' => 'Hamadan',
            ),
            209 => 
            array (
                'id' => 1710,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 103,
                'name' => 'Hormozgan',
            ),
            210 => 
            array (
                'id' => 1711,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 103,
                'name' => 'Ilam',
            ),
            211 => 
            array (
                'id' => 1712,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 103,
                'name' => 'Kerman',
            ),
            212 => 
            array (
                'id' => 1713,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 103,
                'name' => 'Kermanshah',
            ),
            213 => 
            array (
                'id' => 1714,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 103,
                'name' => 'Khorasan',
            ),
            214 => 
            array (
                'id' => 1715,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 103,
                'name' => 'Khuzestan',
            ),
            215 => 
            array (
                'id' => 1716,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 103,
                'name' => 'Kohgiluyeh-e Boyerahmad',
            ),
            216 => 
            array (
                'id' => 1717,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 103,
                'name' => 'Kordestan',
            ),
            217 => 
            array (
                'id' => 1718,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 103,
                'name' => 'Lorestan',
            ),
            218 => 
            array (
                'id' => 1719,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 103,
                'name' => 'Markazi',
            ),
            219 => 
            array (
                'id' => 1720,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 103,
                'name' => 'Mazandaran',
            ),
            220 => 
            array (
                'id' => 1721,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 103,
                'name' => 'Ostan-e Esfahan',
            ),
            221 => 
            array (
                'id' => 1722,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 103,
                'name' => 'Qazvin',
            ),
            222 => 
            array (
                'id' => 1723,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 103,
                'name' => 'Qom',
            ),
            223 => 
            array (
                'id' => 1724,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 103,
                'name' => 'Semnan',
            ),
            224 => 
            array (
                'id' => 1725,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 103,
                'name' => 'Sistan-e Baluchestan',
            ),
            225 => 
            array (
                'id' => 1726,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 103,
                'name' => 'Tehran',
            ),
            226 => 
            array (
                'id' => 1727,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 103,
                'name' => 'Yazd',
            ),
            227 => 
            array (
                'id' => 1728,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 103,
                'name' => 'Zanjan',
            ),
            228 => 
            array (
                'id' => 1729,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 104,
                'name' => 'Babil',
            ),
            229 => 
            array (
                'id' => 1730,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 104,
                'name' => 'Baghdad',
            ),
            230 => 
            array (
                'id' => 1731,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 104,
                'name' => 'Dahuk',
            ),
            231 => 
            array (
                'id' => 1732,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 104,
                'name' => 'Dhi Qar',
            ),
            232 => 
            array (
                'id' => 1733,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 104,
                'name' => 'Diyala',
            ),
            233 => 
            array (
                'id' => 1734,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 104,
                'name' => 'Erbil',
            ),
            234 => 
            array (
                'id' => 1735,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 104,
                'name' => 'Irbil',
            ),
            235 => 
            array (
                'id' => 1736,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 104,
                'name' => 'Karbala',
            ),
            236 => 
            array (
                'id' => 1737,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 104,
                'name' => 'Kurdistan',
            ),
            237 => 
            array (
                'id' => 1738,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 104,
                'name' => 'Maysan',
            ),
            238 => 
            array (
                'id' => 1739,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 104,
                'name' => 'Ninawa',
            ),
            239 => 
            array (
                'id' => 1740,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 104,
                'name' => 'Salah-ad-Din',
            ),
            240 => 
            array (
                'id' => 1741,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 104,
                'name' => 'Wasit',
            ),
            241 => 
            array (
                'id' => 1742,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 104,
                'name' => 'al-Anbar',
            ),
            242 => 
            array (
                'id' => 1743,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 104,
                'name' => 'al-Basrah',
            ),
            243 => 
            array (
                'id' => 1744,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 104,
                'name' => 'al-Muthanna',
            ),
            244 => 
            array (
                'id' => 1745,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 104,
                'name' => 'al-Qadisiyah',
            ),
            245 => 
            array (
                'id' => 1746,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 104,
                'name' => 'an-Najaf',
            ),
            246 => 
            array (
                'id' => 1747,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 104,
                'name' => 'as-Sulaymaniyah',
            ),
            247 => 
            array (
                'id' => 1748,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 104,
                'name' => 'at-Ta\'mim',
            ),
            248 => 
            array (
                'id' => 1749,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 105,
                'name' => 'Armagh',
            ),
            249 => 
            array (
                'id' => 1750,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 105,
                'name' => 'Carlow',
            ),
            250 => 
            array (
                'id' => 1751,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 105,
                'name' => 'Cavan',
            ),
            251 => 
            array (
                'id' => 1752,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 105,
                'name' => 'Clare',
            ),
            252 => 
            array (
                'id' => 1753,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 105,
                'name' => 'Cork',
            ),
            253 => 
            array (
                'id' => 1754,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 105,
                'name' => 'Donegal',
            ),
            254 => 
            array (
                'id' => 1755,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 105,
                'name' => 'Dublin',
            ),
            255 => 
            array (
                'id' => 1756,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 105,
                'name' => 'Galway',
            ),
            256 => 
            array (
                'id' => 1757,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 105,
                'name' => 'Kerry',
            ),
            257 => 
            array (
                'id' => 1758,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 105,
                'name' => 'Kildare',
            ),
            258 => 
            array (
                'id' => 1759,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 105,
                'name' => 'Kilkenny',
            ),
            259 => 
            array (
                'id' => 1760,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 105,
                'name' => 'Laois',
            ),
            260 => 
            array (
                'id' => 1761,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 105,
                'name' => 'Leinster',
            ),
            261 => 
            array (
                'id' => 1762,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 105,
                'name' => 'Leitrim',
            ),
            262 => 
            array (
                'id' => 1763,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 105,
                'name' => 'Limerick',
            ),
            263 => 
            array (
                'id' => 1764,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 105,
                'name' => 'Loch Garman',
            ),
            264 => 
            array (
                'id' => 1765,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 105,
                'name' => 'Longford',
            ),
            265 => 
            array (
                'id' => 1766,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 105,
                'name' => 'Louth',
            ),
            266 => 
            array (
                'id' => 1767,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 105,
                'name' => 'Mayo',
            ),
            267 => 
            array (
                'id' => 1768,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 105,
                'name' => 'Meath',
            ),
            268 => 
            array (
                'id' => 1769,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 105,
                'name' => 'Monaghan',
            ),
            269 => 
            array (
                'id' => 1770,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 105,
                'name' => 'Offaly',
            ),
            270 => 
            array (
                'id' => 1771,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 105,
                'name' => 'Roscommon',
            ),
            271 => 
            array (
                'id' => 1772,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 105,
                'name' => 'Sligo',
            ),
            272 => 
            array (
                'id' => 1773,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 105,
                'name' => 'Tipperary North Riding',
            ),
            273 => 
            array (
                'id' => 1774,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 105,
                'name' => 'Tipperary South Riding',
            ),
            274 => 
            array (
                'id' => 1775,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 105,
                'name' => 'Ulster',
            ),
            275 => 
            array (
                'id' => 1776,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 105,
                'name' => 'Waterford',
            ),
            276 => 
            array (
                'id' => 1777,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 105,
                'name' => 'Westmeath',
            ),
            277 => 
            array (
                'id' => 1778,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 105,
                'name' => 'Wexford',
            ),
            278 => 
            array (
                'id' => 1779,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 105,
                'name' => 'Wicklow',
            ),
            279 => 
            array (
                'id' => 1780,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 106,
                'name' => 'Beit Hanania',
            ),
            280 => 
            array (
                'id' => 1781,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 106,
                'name' => 'Ben Gurion Airport',
            ),
            281 => 
            array (
                'id' => 1782,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 106,
                'name' => 'Bethlehem',
            ),
            282 => 
            array (
                'id' => 1783,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 106,
                'name' => 'Caesarea',
            ),
            283 => 
            array (
                'id' => 1784,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 106,
                'name' => 'Centre',
            ),
            284 => 
            array (
                'id' => 1785,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 106,
                'name' => 'Gaza',
            ),
            285 => 
            array (
                'id' => 1786,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 106,
                'name' => 'Hadaron',
            ),
            286 => 
            array (
                'id' => 1787,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 106,
                'name' => 'Haifa District',
            ),
            287 => 
            array (
                'id' => 1788,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 106,
                'name' => 'Hamerkaz',
            ),
            288 => 
            array (
                'id' => 1789,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 106,
                'name' => 'Hazafon',
            ),
            289 => 
            array (
                'id' => 1790,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 106,
                'name' => 'Hebron',
            ),
            290 => 
            array (
                'id' => 1791,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 106,
                'name' => 'Jaffa',
            ),
            291 => 
            array (
                'id' => 1792,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 106,
                'name' => 'Jerusalem',
            ),
            292 => 
            array (
                'id' => 1793,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 106,
                'name' => 'Khefa',
            ),
            293 => 
            array (
                'id' => 1794,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 106,
                'name' => 'Kiryat Yam',
            ),
            294 => 
            array (
                'id' => 1795,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 106,
                'name' => 'Lower Galilee',
            ),
            295 => 
            array (
                'id' => 1796,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 106,
                'name' => 'Qalqilya',
            ),
            296 => 
            array (
                'id' => 1797,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 106,
                'name' => 'Talme Elazar',
            ),
            297 => 
            array (
                'id' => 1798,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 106,
                'name' => 'Tel Aviv',
            ),
            298 => 
            array (
                'id' => 1799,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 106,
                'name' => 'Tsafon',
            ),
            299 => 
            array (
                'id' => 1800,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 106,
                'name' => 'Umm El Fahem',
            ),
            300 => 
            array (
                'id' => 1801,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 106,
                'name' => 'Yerushalayim',
            ),
            301 => 
            array (
                'id' => 1802,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 107,
                'name' => 'Abruzzi',
            ),
            302 => 
            array (
                'id' => 1803,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 107,
                'name' => 'Abruzzo',
            ),
            303 => 
            array (
                'id' => 1804,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 107,
                'name' => 'Agrigento',
            ),
            304 => 
            array (
                'id' => 1805,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 107,
                'name' => 'Alessandria',
            ),
            305 => 
            array (
                'id' => 1806,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 107,
                'name' => 'Ancona',
            ),
            306 => 
            array (
                'id' => 1807,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 107,
                'name' => 'Arezzo',
            ),
            307 => 
            array (
                'id' => 1808,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 107,
                'name' => 'Ascoli Piceno',
            ),
            308 => 
            array (
                'id' => 1809,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 107,
                'name' => 'Asti',
            ),
            309 => 
            array (
                'id' => 1810,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 107,
                'name' => 'Avellino',
            ),
            310 => 
            array (
                'id' => 1811,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 107,
                'name' => 'Bari',
            ),
            311 => 
            array (
                'id' => 1812,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 107,
                'name' => 'Basilicata',
            ),
            312 => 
            array (
                'id' => 1813,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 107,
                'name' => 'Belluno',
            ),
            313 => 
            array (
                'id' => 1814,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 107,
                'name' => 'Benevento',
            ),
            314 => 
            array (
                'id' => 1815,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 107,
                'name' => 'Bergamo',
            ),
            315 => 
            array (
                'id' => 1816,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 107,
                'name' => 'Biella',
            ),
            316 => 
            array (
                'id' => 1817,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 107,
                'name' => 'Bologna',
            ),
            317 => 
            array (
                'id' => 1818,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 107,
                'name' => 'Bolzano',
            ),
            318 => 
            array (
                'id' => 1819,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 107,
                'name' => 'Brescia',
            ),
            319 => 
            array (
                'id' => 1820,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 107,
                'name' => 'Brindisi',
            ),
            320 => 
            array (
                'id' => 1821,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 107,
                'name' => 'Calabria',
            ),
            321 => 
            array (
                'id' => 1822,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 107,
                'name' => 'Campania',
            ),
            322 => 
            array (
                'id' => 1823,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 107,
                'name' => 'Cartoceto',
            ),
            323 => 
            array (
                'id' => 1824,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 107,
                'name' => 'Caserta',
            ),
            324 => 
            array (
                'id' => 1825,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 107,
                'name' => 'Catania',
            ),
            325 => 
            array (
                'id' => 1826,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 107,
                'name' => 'Chieti',
            ),
            326 => 
            array (
                'id' => 1827,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 107,
                'name' => 'Como',
            ),
            327 => 
            array (
                'id' => 1828,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 107,
                'name' => 'Cosenza',
            ),
            328 => 
            array (
                'id' => 1829,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 107,
                'name' => 'Cremona',
            ),
            329 => 
            array (
                'id' => 1830,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 107,
                'name' => 'Cuneo',
            ),
            330 => 
            array (
                'id' => 1831,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 107,
                'name' => 'Emilia-Romagna',
            ),
            331 => 
            array (
                'id' => 1832,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 107,
                'name' => 'Ferrara',
            ),
            332 => 
            array (
                'id' => 1833,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 107,
                'name' => 'Firenze',
            ),
            333 => 
            array (
                'id' => 1834,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 107,
                'name' => 'Florence',
            ),
            334 => 
            array (
                'id' => 1835,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 107,
                'name' => 'Forli-Cesena ',
            ),
            335 => 
            array (
                'id' => 1836,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 107,
                'name' => 'Friuli-Venezia Giulia',
            ),
            336 => 
            array (
                'id' => 1837,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 107,
                'name' => 'Frosinone',
            ),
            337 => 
            array (
                'id' => 1838,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 107,
                'name' => 'Genoa',
            ),
            338 => 
            array (
                'id' => 1839,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 107,
                'name' => 'Gorizia',
            ),
            339 => 
            array (
                'id' => 1840,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 107,
                'name' => 'L\'Aquila',
            ),
            340 => 
            array (
                'id' => 1841,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 107,
                'name' => 'Lazio',
            ),
            341 => 
            array (
                'id' => 1842,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 107,
                'name' => 'Lecce',
            ),
            342 => 
            array (
                'id' => 1843,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 107,
                'name' => 'Lecco',
            ),
            343 => 
            array (
                'id' => 1844,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 107,
                'name' => 'Lecco Province',
            ),
            344 => 
            array (
                'id' => 1845,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 107,
                'name' => 'Liguria',
            ),
            345 => 
            array (
                'id' => 1846,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 107,
                'name' => 'Lodi',
            ),
            346 => 
            array (
                'id' => 1847,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 107,
                'name' => 'Lombardia',
            ),
            347 => 
            array (
                'id' => 1848,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 107,
                'name' => 'Lombardy',
            ),
            348 => 
            array (
                'id' => 1849,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 107,
                'name' => 'Macerata',
            ),
            349 => 
            array (
                'id' => 1850,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 107,
                'name' => 'Mantova',
            ),
            350 => 
            array (
                'id' => 1851,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 107,
                'name' => 'Marche',
            ),
            351 => 
            array (
                'id' => 1852,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 107,
                'name' => 'Messina',
            ),
            352 => 
            array (
                'id' => 1853,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 107,
                'name' => 'Milan',
            ),
            353 => 
            array (
                'id' => 1854,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 107,
                'name' => 'Modena',
            ),
            354 => 
            array (
                'id' => 1855,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 107,
                'name' => 'Molise',
            ),
            355 => 
            array (
                'id' => 1856,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 107,
                'name' => 'Molteno',
            ),
            356 => 
            array (
                'id' => 1857,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 107,
                'name' => 'Montenegro',
            ),
            357 => 
            array (
                'id' => 1858,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 107,
                'name' => 'Monza and Brianza',
            ),
            358 => 
            array (
                'id' => 1859,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 107,
                'name' => 'Naples',
            ),
            359 => 
            array (
                'id' => 1860,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 107,
                'name' => 'Novara',
            ),
            360 => 
            array (
                'id' => 1861,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 107,
                'name' => 'Padova',
            ),
            361 => 
            array (
                'id' => 1862,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 107,
                'name' => 'Parma',
            ),
            362 => 
            array (
                'id' => 1863,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 107,
                'name' => 'Pavia',
            ),
            363 => 
            array (
                'id' => 1864,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 107,
                'name' => 'Perugia',
            ),
            364 => 
            array (
                'id' => 1865,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 107,
                'name' => 'Pesaro-Urbino',
            ),
            365 => 
            array (
                'id' => 1866,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 107,
                'name' => 'Piacenza',
            ),
            366 => 
            array (
                'id' => 1867,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 107,
                'name' => 'Piedmont',
            ),
            367 => 
            array (
                'id' => 1868,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 107,
                'name' => 'Piemonte',
            ),
            368 => 
            array (
                'id' => 1869,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 107,
                'name' => 'Pisa',
            ),
            369 => 
            array (
                'id' => 1870,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 107,
                'name' => 'Pordenone',
            ),
            370 => 
            array (
                'id' => 1871,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 107,
                'name' => 'Potenza',
            ),
            371 => 
            array (
                'id' => 1872,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 107,
                'name' => 'Puglia',
            ),
            372 => 
            array (
                'id' => 1873,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 107,
                'name' => 'Reggio Emilia',
            ),
            373 => 
            array (
                'id' => 1874,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 107,
                'name' => 'Rimini',
            ),
            374 => 
            array (
                'id' => 1875,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 107,
                'name' => 'Roma',
            ),
            375 => 
            array (
                'id' => 1876,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 107,
                'name' => 'Salerno',
            ),
            376 => 
            array (
                'id' => 1877,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 107,
                'name' => 'Sardegna',
            ),
            377 => 
            array (
                'id' => 1878,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 107,
                'name' => 'Sassari',
            ),
            378 => 
            array (
                'id' => 1879,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 107,
                'name' => 'Savona',
            ),
            379 => 
            array (
                'id' => 1880,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 107,
                'name' => 'Sicilia',
            ),
            380 => 
            array (
                'id' => 1881,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 107,
                'name' => 'Siena',
            ),
            381 => 
            array (
                'id' => 1882,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 107,
                'name' => 'Sondrio',
            ),
            382 => 
            array (
                'id' => 1883,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 107,
                'name' => 'South Tyrol',
            ),
            383 => 
            array (
                'id' => 1884,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 107,
                'name' => 'Taranto',
            ),
            384 => 
            array (
                'id' => 1885,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 107,
                'name' => 'Teramo',
            ),
            385 => 
            array (
                'id' => 1886,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 107,
                'name' => 'Torino',
            ),
            386 => 
            array (
                'id' => 1887,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 107,
                'name' => 'Toscana',
            ),
            387 => 
            array (
                'id' => 1888,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 107,
                'name' => 'Trapani',
            ),
            388 => 
            array (
                'id' => 1889,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 107,
                'name' => 'Trentino-Alto Adige',
            ),
            389 => 
            array (
                'id' => 1890,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 107,
                'name' => 'Trento',
            ),
            390 => 
            array (
                'id' => 1891,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 107,
                'name' => 'Treviso',
            ),
            391 => 
            array (
                'id' => 1892,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 107,
                'name' => 'Udine',
            ),
            392 => 
            array (
                'id' => 1893,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 107,
                'name' => 'Umbria',
            ),
            393 => 
            array (
                'id' => 1894,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 107,
                'name' => 'Valle d\'Aosta',
            ),
            394 => 
            array (
                'id' => 1895,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 107,
                'name' => 'Varese',
            ),
            395 => 
            array (
                'id' => 1896,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 107,
                'name' => 'Veneto',
            ),
            396 => 
            array (
                'id' => 1897,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 107,
                'name' => 'Venezia',
            ),
            397 => 
            array (
                'id' => 1898,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 107,
                'name' => 'Verbano-Cusio-Ossola',
            ),
            398 => 
            array (
                'id' => 1899,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 107,
                'name' => 'Vercelli',
            ),
            399 => 
            array (
                'id' => 1900,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 107,
                'name' => 'Verona',
            ),
            400 => 
            array (
                'id' => 1901,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 107,
                'name' => 'Vicenza',
            ),
            401 => 
            array (
                'id' => 1902,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 107,
                'name' => 'Viterbo',
            ),
            402 => 
            array (
                'id' => 1903,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 108,
                'name' => 'Buxoro Viloyati',
            ),
            403 => 
            array (
                'id' => 1904,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 108,
                'name' => 'Clarendon',
            ),
            404 => 
            array (
                'id' => 1905,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 108,
                'name' => 'Hanover',
            ),
            405 => 
            array (
                'id' => 1906,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 108,
                'name' => 'Kingston',
            ),
            406 => 
            array (
                'id' => 1907,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 108,
                'name' => 'Manchester',
            ),
            407 => 
            array (
                'id' => 1908,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 108,
                'name' => 'Portland',
            ),
            408 => 
            array (
                'id' => 1909,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 108,
                'name' => 'Saint Andrews',
            ),
            409 => 
            array (
                'id' => 1910,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 108,
                'name' => 'Saint Ann',
            ),
            410 => 
            array (
                'id' => 1911,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 108,
                'name' => 'Saint Catherine',
            ),
            411 => 
            array (
                'id' => 1912,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 108,
                'name' => 'Saint Elizabeth',
            ),
            412 => 
            array (
                'id' => 1913,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 108,
                'name' => 'Saint James',
            ),
            413 => 
            array (
                'id' => 1914,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 108,
                'name' => 'Saint Mary',
            ),
            414 => 
            array (
                'id' => 1915,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 108,
                'name' => 'Saint Thomas',
            ),
            415 => 
            array (
                'id' => 1916,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 108,
                'name' => 'Trelawney',
            ),
            416 => 
            array (
                'id' => 1917,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 108,
                'name' => 'Westmoreland',
            ),
            417 => 
            array (
                'id' => 1918,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 109,
                'name' => 'Aichi',
            ),
            418 => 
            array (
                'id' => 1919,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 109,
                'name' => 'Akita',
            ),
            419 => 
            array (
                'id' => 1920,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 109,
                'name' => 'Aomori',
            ),
            420 => 
            array (
                'id' => 1921,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 109,
                'name' => 'Chiba',
            ),
            421 => 
            array (
                'id' => 1922,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 109,
                'name' => 'Ehime',
            ),
            422 => 
            array (
                'id' => 1923,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 109,
                'name' => 'Fukui',
            ),
            423 => 
            array (
                'id' => 1924,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 109,
                'name' => 'Fukuoka',
            ),
            424 => 
            array (
                'id' => 1925,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 109,
                'name' => 'Fukushima',
            ),
            425 => 
            array (
                'id' => 1926,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 109,
                'name' => 'Gifu',
            ),
            426 => 
            array (
                'id' => 1927,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 109,
                'name' => 'Gumma',
            ),
            427 => 
            array (
                'id' => 1928,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 109,
                'name' => 'Hiroshima',
            ),
            428 => 
            array (
                'id' => 1929,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 109,
                'name' => 'Hokkaido',
            ),
            429 => 
            array (
                'id' => 1930,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 109,
                'name' => 'Hyogo',
            ),
            430 => 
            array (
                'id' => 1931,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 109,
                'name' => 'Ibaraki',
            ),
            431 => 
            array (
                'id' => 1932,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 109,
                'name' => 'Ishikawa',
            ),
            432 => 
            array (
                'id' => 1933,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 109,
                'name' => 'Iwate',
            ),
            433 => 
            array (
                'id' => 1934,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 109,
                'name' => 'Kagawa',
            ),
            434 => 
            array (
                'id' => 1935,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 109,
                'name' => 'Kagoshima',
            ),
            435 => 
            array (
                'id' => 1936,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 109,
                'name' => 'Kanagawa',
            ),
            436 => 
            array (
                'id' => 1937,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 109,
                'name' => 'Kanto',
            ),
            437 => 
            array (
                'id' => 1938,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 109,
                'name' => 'Kochi',
            ),
            438 => 
            array (
                'id' => 1939,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 109,
                'name' => 'Kumamoto',
            ),
            439 => 
            array (
                'id' => 1940,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 109,
                'name' => 'Kyoto',
            ),
            440 => 
            array (
                'id' => 1941,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 109,
                'name' => 'Mie',
            ),
            441 => 
            array (
                'id' => 1942,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 109,
                'name' => 'Miyagi',
            ),
            442 => 
            array (
                'id' => 1943,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 109,
                'name' => 'Miyazaki',
            ),
            443 => 
            array (
                'id' => 1944,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 109,
                'name' => 'Nagano',
            ),
            444 => 
            array (
                'id' => 1945,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 109,
                'name' => 'Nagasaki',
            ),
            445 => 
            array (
                'id' => 1946,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 109,
                'name' => 'Nara',
            ),
            446 => 
            array (
                'id' => 1947,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 109,
                'name' => 'Niigata',
            ),
            447 => 
            array (
                'id' => 1948,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 109,
                'name' => 'Oita',
            ),
            448 => 
            array (
                'id' => 1949,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 109,
                'name' => 'Okayama',
            ),
            449 => 
            array (
                'id' => 1950,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 109,
                'name' => 'Okinawa',
            ),
            450 => 
            array (
                'id' => 1951,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 109,
                'name' => 'Osaka',
            ),
            451 => 
            array (
                'id' => 1952,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 109,
                'name' => 'Saga',
            ),
            452 => 
            array (
                'id' => 1953,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 109,
                'name' => 'Saitama',
            ),
            453 => 
            array (
                'id' => 1954,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 109,
                'name' => 'Shiga',
            ),
            454 => 
            array (
                'id' => 1955,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 109,
                'name' => 'Shimane',
            ),
            455 => 
            array (
                'id' => 1956,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 109,
                'name' => 'Shizuoka',
            ),
            456 => 
            array (
                'id' => 1957,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 109,
                'name' => 'Tochigi',
            ),
            457 => 
            array (
                'id' => 1958,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 109,
                'name' => 'Tokushima',
            ),
            458 => 
            array (
                'id' => 1959,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 109,
                'name' => 'Tokyo',
            ),
            459 => 
            array (
                'id' => 1960,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 109,
                'name' => 'Tottori',
            ),
            460 => 
            array (
                'id' => 1961,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 109,
                'name' => 'Toyama',
            ),
            461 => 
            array (
                'id' => 1962,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 109,
                'name' => 'Wakayama',
            ),
            462 => 
            array (
                'id' => 1963,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 109,
                'name' => 'Yamagata',
            ),
            463 => 
            array (
                'id' => 1964,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 109,
                'name' => 'Yamaguchi',
            ),
            464 => 
            array (
                'id' => 1965,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 109,
                'name' => 'Yamanashi',
            ),
            465 => 
            array (
                'id' => 1966,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 110,
                'name' => 'Grouville',
            ),
            466 => 
            array (
                'id' => 1967,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 110,
                'name' => 'Saint Brelade',
            ),
            467 => 
            array (
                'id' => 1968,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 110,
                'name' => 'Saint Clement',
            ),
            468 => 
            array (
                'id' => 1969,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 110,
                'name' => 'Saint Helier',
            ),
            469 => 
            array (
                'id' => 1970,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 110,
                'name' => 'Saint John',
            ),
            470 => 
            array (
                'id' => 1971,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 110,
                'name' => 'Saint Lawrence',
            ),
            471 => 
            array (
                'id' => 1972,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 110,
                'name' => 'Saint Martin',
            ),
            472 => 
            array (
                'id' => 1973,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 110,
                'name' => 'Saint Mary',
            ),
            473 => 
            array (
                'id' => 1974,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 110,
                'name' => 'Saint Peter',
            ),
            474 => 
            array (
                'id' => 1975,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 110,
                'name' => 'Saint Saviour',
            ),
            475 => 
            array (
                'id' => 1976,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 110,
                'name' => 'Trinity',
            ),
            476 => 
            array (
                'id' => 1977,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 111,
                'name' => '\'Ajlun',
            ),
            477 => 
            array (
                'id' => 1978,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 111,
                'name' => 'Amman',
            ),
            478 => 
            array (
                'id' => 1979,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 111,
                'name' => 'Irbid',
            ),
            479 => 
            array (
                'id' => 1980,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 111,
                'name' => 'Jarash',
            ),
            480 => 
            array (
                'id' => 1981,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 111,
                'name' => 'Ma\'an',
            ),
            481 => 
            array (
                'id' => 1982,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 111,
                'name' => 'Madaba',
            ),
            482 => 
            array (
                'id' => 1983,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 111,
                'name' => 'al-\'Aqabah',
            ),
            483 => 
            array (
                'id' => 1984,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 111,
                'name' => 'al-Balqa\'',
            ),
            484 => 
            array (
                'id' => 1985,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 111,
                'name' => 'al-Karak',
            ),
            485 => 
            array (
                'id' => 1986,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 111,
                'name' => 'al-Mafraq',
            ),
            486 => 
            array (
                'id' => 1987,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 111,
                'name' => 'at-Tafilah',
            ),
            487 => 
            array (
                'id' => 1988,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 111,
                'name' => 'az-Zarqa\'',
            ),
            488 => 
            array (
                'id' => 1989,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 112,
                'name' => 'Akmecet',
            ),
            489 => 
            array (
                'id' => 1990,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 112,
                'name' => 'Akmola',
            ),
            490 => 
            array (
                'id' => 1991,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 112,
                'name' => 'Aktobe',
            ),
            491 => 
            array (
                'id' => 1992,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 112,
                'name' => 'Almati',
            ),
            492 => 
            array (
                'id' => 1993,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 112,
                'name' => 'Atirau',
            ),
            493 => 
            array (
                'id' => 1994,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 112,
                'name' => 'Batis Kazakstan',
            ),
            494 => 
            array (
                'id' => 1995,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 112,
                'name' => 'Burlinsky Region',
            ),
            495 => 
            array (
                'id' => 1996,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 112,
                'name' => 'Karagandi',
            ),
            496 => 
            array (
                'id' => 1997,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 112,
                'name' => 'Kostanay',
            ),
            497 => 
            array (
                'id' => 1998,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 112,
                'name' => 'Mankistau',
            ),
            498 => 
            array (
                'id' => 1999,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 112,
                'name' => 'Ontustik Kazakstan',
            ),
            499 => 
            array (
                'id' => 2000,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 112,
                'name' => 'Pavlodar',
            ),
        ));
        \DB::table('states')->insert(array (
            0 => 
            array (
                'id' => 2001,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 112,
                'name' => 'Sigis Kazakstan',
            ),
            1 => 
            array (
                'id' => 2002,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 112,
                'name' => 'Soltustik Kazakstan',
            ),
            2 => 
            array (
                'id' => 2003,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 112,
                'name' => 'Taraz',
            ),
            3 => 
            array (
                'id' => 2004,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 113,
                'name' => 'Central',
            ),
            4 => 
            array (
                'id' => 2005,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 113,
                'name' => 'Coast',
            ),
            5 => 
            array (
                'id' => 2006,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 113,
                'name' => 'Eastern',
            ),
            6 => 
            array (
                'id' => 2007,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 113,
                'name' => 'Nairobi',
            ),
            7 => 
            array (
                'id' => 2008,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 113,
                'name' => 'North Eastern',
            ),
            8 => 
            array (
                'id' => 2009,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 113,
                'name' => 'Nyanza',
            ),
            9 => 
            array (
                'id' => 2010,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 113,
                'name' => 'Rift Valley',
            ),
            10 => 
            array (
                'id' => 2011,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 113,
                'name' => 'Western',
            ),
            11 => 
            array (
                'id' => 2012,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 114,
                'name' => 'Abaiang',
            ),
            12 => 
            array (
                'id' => 2013,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 114,
                'name' => 'Abemana',
            ),
            13 => 
            array (
                'id' => 2014,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 114,
                'name' => 'Aranuka',
            ),
            14 => 
            array (
                'id' => 2015,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 114,
                'name' => 'Arorae',
            ),
            15 => 
            array (
                'id' => 2016,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 114,
                'name' => 'Banaba',
            ),
            16 => 
            array (
                'id' => 2017,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 114,
                'name' => 'Beru',
            ),
            17 => 
            array (
                'id' => 2018,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 114,
                'name' => 'Butaritari',
            ),
            18 => 
            array (
                'id' => 2019,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 114,
                'name' => 'Kiritimati',
            ),
            19 => 
            array (
                'id' => 2020,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 114,
                'name' => 'Kuria',
            ),
            20 => 
            array (
                'id' => 2021,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 114,
                'name' => 'Maiana',
            ),
            21 => 
            array (
                'id' => 2022,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 114,
                'name' => 'Makin',
            ),
            22 => 
            array (
                'id' => 2023,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 114,
                'name' => 'Marakei',
            ),
            23 => 
            array (
                'id' => 2024,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 114,
                'name' => 'Nikunau',
            ),
            24 => 
            array (
                'id' => 2025,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 114,
                'name' => 'Nonouti',
            ),
            25 => 
            array (
                'id' => 2026,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 114,
                'name' => 'Onotoa',
            ),
            26 => 
            array (
                'id' => 2027,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 114,
                'name' => 'Phoenix Islands',
            ),
            27 => 
            array (
                'id' => 2028,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 114,
                'name' => 'Tabiteuea North',
            ),
            28 => 
            array (
                'id' => 2029,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 114,
                'name' => 'Tabiteuea South',
            ),
            29 => 
            array (
                'id' => 2030,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 114,
                'name' => 'Tabuaeran',
            ),
            30 => 
            array (
                'id' => 2031,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 114,
                'name' => 'Tamana',
            ),
            31 => 
            array (
                'id' => 2032,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 114,
                'name' => 'Tarawa North',
            ),
            32 => 
            array (
                'id' => 2033,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 114,
                'name' => 'Tarawa South',
            ),
            33 => 
            array (
                'id' => 2034,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 114,
                'name' => 'Teraina',
            ),
            34 => 
            array (
                'id' => 2035,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 115,
                'name' => 'Chagangdo',
            ),
            35 => 
            array (
                'id' => 2036,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 115,
                'name' => 'Hamgyeongbukto',
            ),
            36 => 
            array (
                'id' => 2037,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 115,
                'name' => 'Hamgyeongnamdo',
            ),
            37 => 
            array (
                'id' => 2038,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 115,
                'name' => 'Hwanghaebukto',
            ),
            38 => 
            array (
                'id' => 2039,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 115,
                'name' => 'Hwanghaenamdo',
            ),
            39 => 
            array (
                'id' => 2040,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 115,
                'name' => 'Kaeseong',
            ),
            40 => 
            array (
                'id' => 2041,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 115,
                'name' => 'Kangweon',
            ),
            41 => 
            array (
                'id' => 2042,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 115,
                'name' => 'Nampo',
            ),
            42 => 
            array (
                'id' => 2043,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 115,
                'name' => 'Pyeonganbukto',
            ),
            43 => 
            array (
                'id' => 2044,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 115,
                'name' => 'Pyeongannamdo',
            ),
            44 => 
            array (
                'id' => 2045,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 115,
                'name' => 'Pyeongyang',
            ),
            45 => 
            array (
                'id' => 2046,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 115,
                'name' => 'Yanggang',
            ),
            46 => 
            array (
                'id' => 2047,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 116,
                'name' => 'Busan',
            ),
            47 => 
            array (
                'id' => 2048,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 116,
                'name' => 'Cheju',
            ),
            48 => 
            array (
                'id' => 2049,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 116,
                'name' => 'Chollabuk',
            ),
            49 => 
            array (
                'id' => 2050,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 116,
                'name' => 'Chollanam',
            ),
            50 => 
            array (
                'id' => 2051,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 116,
                'name' => 'Chungbuk',
            ),
            51 => 
            array (
                'id' => 2052,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 116,
                'name' => 'Chungcheongbuk',
            ),
            52 => 
            array (
                'id' => 2053,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 116,
                'name' => 'Chungcheongnam',
            ),
            53 => 
            array (
                'id' => 2054,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 116,
                'name' => 'Chungnam',
            ),
            54 => 
            array (
                'id' => 2055,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 116,
                'name' => 'Daegu',
            ),
            55 => 
            array (
                'id' => 2056,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 116,
                'name' => 'Gangwon-do',
            ),
            56 => 
            array (
                'id' => 2057,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 116,
                'name' => 'Goyang-si',
            ),
            57 => 
            array (
                'id' => 2058,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 116,
                'name' => 'Gyeonggi-do',
            ),
            58 => 
            array (
                'id' => 2059,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 116,
                'name' => 'Gyeongsang ',
            ),
            59 => 
            array (
                'id' => 2060,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 116,
                'name' => 'Gyeongsangnam-do',
            ),
            60 => 
            array (
                'id' => 2061,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 116,
                'name' => 'Incheon',
            ),
            61 => 
            array (
                'id' => 2062,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 116,
                'name' => 'Jeju-Si',
            ),
            62 => 
            array (
                'id' => 2063,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 116,
                'name' => 'Jeonbuk',
            ),
            63 => 
            array (
                'id' => 2064,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 116,
                'name' => 'Kangweon',
            ),
            64 => 
            array (
                'id' => 2065,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 116,
                'name' => 'Kwangju',
            ),
            65 => 
            array (
                'id' => 2066,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 116,
                'name' => 'Kyeonggi',
            ),
            66 => 
            array (
                'id' => 2067,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 116,
                'name' => 'Kyeongsangbuk',
            ),
            67 => 
            array (
                'id' => 2068,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 116,
                'name' => 'Kyeongsangnam',
            ),
            68 => 
            array (
                'id' => 2069,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 116,
                'name' => 'Kyonggi-do',
            ),
            69 => 
            array (
                'id' => 2070,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 116,
                'name' => 'Kyungbuk-Do',
            ),
            70 => 
            array (
                'id' => 2071,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 116,
                'name' => 'Kyunggi-Do',
            ),
            71 => 
            array (
                'id' => 2072,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 116,
                'name' => 'Kyunggi-do',
            ),
            72 => 
            array (
                'id' => 2073,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 116,
                'name' => 'Pusan',
            ),
            73 => 
            array (
                'id' => 2074,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 116,
                'name' => 'Seoul',
            ),
            74 => 
            array (
                'id' => 2075,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 116,
                'name' => 'Sudogwon',
            ),
            75 => 
            array (
                'id' => 2076,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 116,
                'name' => 'Taegu',
            ),
            76 => 
            array (
                'id' => 2077,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 116,
                'name' => 'Taejeon',
            ),
            77 => 
            array (
                'id' => 2078,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 116,
                'name' => 'Taejon-gwangyoksi',
            ),
            78 => 
            array (
                'id' => 2079,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 116,
                'name' => 'Ulsan',
            ),
            79 => 
            array (
                'id' => 2080,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 116,
                'name' => 'Wonju',
            ),
            80 => 
            array (
                'id' => 2081,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 116,
                'name' => 'gwangyoksi',
            ),
            81 => 
            array (
                'id' => 2082,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 117,
                'name' => 'Al Asimah',
            ),
            82 => 
            array (
                'id' => 2083,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 117,
                'name' => 'Hawalli',
            ),
            83 => 
            array (
                'id' => 2084,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 117,
                'name' => 'Mishref',
            ),
            84 => 
            array (
                'id' => 2085,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 117,
                'name' => 'Qadesiya',
            ),
            85 => 
            array (
                'id' => 2086,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 117,
                'name' => 'Safat',
            ),
            86 => 
            array (
                'id' => 2087,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 117,
                'name' => 'Salmiya',
            ),
            87 => 
            array (
                'id' => 2088,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 117,
                'name' => 'al-Ahmadi',
            ),
            88 => 
            array (
                'id' => 2089,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 117,
                'name' => 'al-Farwaniyah',
            ),
            89 => 
            array (
                'id' => 2090,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 117,
                'name' => 'al-Jahra',
            ),
            90 => 
            array (
                'id' => 2091,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 117,
                'name' => 'al-Kuwayt',
            ),
            91 => 
            array (
                'id' => 2092,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 118,
                'name' => 'Batken',
            ),
            92 => 
            array (
                'id' => 2093,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 118,
                'name' => 'Bishkek',
            ),
            93 => 
            array (
                'id' => 2094,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 118,
                'name' => 'Chui',
            ),
            94 => 
            array (
                'id' => 2095,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 118,
                'name' => 'Issyk-Kul',
            ),
            95 => 
            array (
                'id' => 2096,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 118,
                'name' => 'Jalal-Abad',
            ),
            96 => 
            array (
                'id' => 2097,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 118,
                'name' => 'Naryn',
            ),
            97 => 
            array (
                'id' => 2098,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 118,
                'name' => 'Osh',
            ),
            98 => 
            array (
                'id' => 2099,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 118,
                'name' => 'Talas',
            ),
            99 => 
            array (
                'id' => 2100,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 119,
                'name' => 'Attopu',
            ),
            100 => 
            array (
                'id' => 2101,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 119,
                'name' => 'Bokeo',
            ),
            101 => 
            array (
                'id' => 2102,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 119,
                'name' => 'Bolikhamsay',
            ),
            102 => 
            array (
                'id' => 2103,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 119,
                'name' => 'Champasak',
            ),
            103 => 
            array (
                'id' => 2104,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 119,
                'name' => 'Houaphanh',
            ),
            104 => 
            array (
                'id' => 2105,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 119,
                'name' => 'Khammouane',
            ),
            105 => 
            array (
                'id' => 2106,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 119,
                'name' => 'Luang Nam Tha',
            ),
            106 => 
            array (
                'id' => 2107,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 119,
                'name' => 'Luang Prabang',
            ),
            107 => 
            array (
                'id' => 2108,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 119,
                'name' => 'Oudomxay',
            ),
            108 => 
            array (
                'id' => 2109,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 119,
                'name' => 'Phongsaly',
            ),
            109 => 
            array (
                'id' => 2110,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 119,
                'name' => 'Saravan',
            ),
            110 => 
            array (
                'id' => 2111,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 119,
                'name' => 'Savannakhet',
            ),
            111 => 
            array (
                'id' => 2112,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 119,
                'name' => 'Sekong',
            ),
            112 => 
            array (
                'id' => 2113,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 119,
                'name' => 'Viangchan Prefecture',
            ),
            113 => 
            array (
                'id' => 2114,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 119,
                'name' => 'Viangchan Province',
            ),
            114 => 
            array (
                'id' => 2115,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 119,
                'name' => 'Xaignabury',
            ),
            115 => 
            array (
                'id' => 2116,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 119,
                'name' => 'Xiang Khuang',
            ),
            116 => 
            array (
                'id' => 2117,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 120,
                'name' => 'Aizkraukles',
            ),
            117 => 
            array (
                'id' => 2118,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 120,
                'name' => 'Aluksnes',
            ),
            118 => 
            array (
                'id' => 2119,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 120,
                'name' => 'Balvu',
            ),
            119 => 
            array (
                'id' => 2120,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 120,
                'name' => 'Bauskas',
            ),
            120 => 
            array (
                'id' => 2121,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 120,
                'name' => 'Cesu',
            ),
            121 => 
            array (
                'id' => 2122,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 120,
                'name' => 'Daugavpils',
            ),
            122 => 
            array (
                'id' => 2123,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 120,
                'name' => 'Daugavpils City',
            ),
            123 => 
            array (
                'id' => 2124,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 120,
                'name' => 'Dobeles',
            ),
            124 => 
            array (
                'id' => 2125,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 120,
                'name' => 'Gulbenes',
            ),
            125 => 
            array (
                'id' => 2126,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 120,
                'name' => 'Jekabspils',
            ),
            126 => 
            array (
                'id' => 2127,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 120,
                'name' => 'Jelgava',
            ),
            127 => 
            array (
                'id' => 2128,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 120,
                'name' => 'Jelgavas',
            ),
            128 => 
            array (
                'id' => 2129,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 120,
                'name' => 'Jurmala City',
            ),
            129 => 
            array (
                'id' => 2130,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 120,
                'name' => 'Kraslavas',
            ),
            130 => 
            array (
                'id' => 2131,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 120,
                'name' => 'Kuldigas',
            ),
            131 => 
            array (
                'id' => 2132,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 120,
                'name' => 'Liepaja',
            ),
            132 => 
            array (
                'id' => 2133,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 120,
                'name' => 'Liepajas',
            ),
            133 => 
            array (
                'id' => 2134,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 120,
                'name' => 'Limbazhu',
            ),
            134 => 
            array (
                'id' => 2135,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 120,
                'name' => 'Ludzas',
            ),
            135 => 
            array (
                'id' => 2136,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 120,
                'name' => 'Madonas',
            ),
            136 => 
            array (
                'id' => 2137,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 120,
                'name' => 'Ogres',
            ),
            137 => 
            array (
                'id' => 2138,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 120,
                'name' => 'Preilu',
            ),
            138 => 
            array (
                'id' => 2139,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 120,
                'name' => 'Rezekne',
            ),
            139 => 
            array (
                'id' => 2140,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 120,
                'name' => 'Rezeknes',
            ),
            140 => 
            array (
                'id' => 2141,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 120,
                'name' => 'Riga',
            ),
            141 => 
            array (
                'id' => 2142,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 120,
                'name' => 'Rigas',
            ),
            142 => 
            array (
                'id' => 2143,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 120,
                'name' => 'Saldus',
            ),
            143 => 
            array (
                'id' => 2144,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 120,
                'name' => 'Talsu',
            ),
            144 => 
            array (
                'id' => 2145,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 120,
                'name' => 'Tukuma',
            ),
            145 => 
            array (
                'id' => 2146,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 120,
                'name' => 'Valkas',
            ),
            146 => 
            array (
                'id' => 2147,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 120,
                'name' => 'Valmieras',
            ),
            147 => 
            array (
                'id' => 2148,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 120,
                'name' => 'Ventspils',
            ),
            148 => 
            array (
                'id' => 2149,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 120,
                'name' => 'Ventspils City',
            ),
            149 => 
            array (
                'id' => 2150,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 121,
                'name' => 'Beirut',
            ),
            150 => 
            array (
                'id' => 2151,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 121,
                'name' => 'Jabal Lubnan',
            ),
            151 => 
            array (
                'id' => 2152,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 121,
                'name' => 'Mohafazat Liban-Nord',
            ),
            152 => 
            array (
                'id' => 2153,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 121,
                'name' => 'Mohafazat Mont-Liban',
            ),
            153 => 
            array (
                'id' => 2154,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 121,
                'name' => 'Sidon',
            ),
            154 => 
            array (
                'id' => 2155,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 121,
                'name' => 'al-Biqa',
            ),
            155 => 
            array (
                'id' => 2156,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 121,
                'name' => 'al-Janub',
            ),
            156 => 
            array (
                'id' => 2157,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 121,
                'name' => 'an-Nabatiyah',
            ),
            157 => 
            array (
                'id' => 2158,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 121,
                'name' => 'ash-Shamal',
            ),
            158 => 
            array (
                'id' => 2159,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 122,
                'name' => 'Berea',
            ),
            159 => 
            array (
                'id' => 2160,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 122,
                'name' => 'Butha-Buthe',
            ),
            160 => 
            array (
                'id' => 2161,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 122,
                'name' => 'Leribe',
            ),
            161 => 
            array (
                'id' => 2162,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 122,
                'name' => 'Mafeteng',
            ),
            162 => 
            array (
                'id' => 2163,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 122,
                'name' => 'Maseru',
            ),
            163 => 
            array (
                'id' => 2164,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 122,
                'name' => 'Mohale\'s Hoek',
            ),
            164 => 
            array (
                'id' => 2165,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 122,
                'name' => 'Mokhotlong',
            ),
            165 => 
            array (
                'id' => 2166,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 122,
                'name' => 'Qacha\'s Nek',
            ),
            166 => 
            array (
                'id' => 2167,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 122,
                'name' => 'Quthing',
            ),
            167 => 
            array (
                'id' => 2168,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 122,
                'name' => 'Thaba-Tseka',
            ),
            168 => 
            array (
                'id' => 2169,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 123,
                'name' => 'Bomi',
            ),
            169 => 
            array (
                'id' => 2170,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 123,
                'name' => 'Bong',
            ),
            170 => 
            array (
                'id' => 2171,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 123,
                'name' => 'Grand Bassa',
            ),
            171 => 
            array (
                'id' => 2172,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 123,
                'name' => 'Grand Cape Mount',
            ),
            172 => 
            array (
                'id' => 2173,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 123,
                'name' => 'Grand Gedeh',
            ),
            173 => 
            array (
                'id' => 2174,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 123,
                'name' => 'Loffa',
            ),
            174 => 
            array (
                'id' => 2175,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 123,
                'name' => 'Margibi',
            ),
            175 => 
            array (
                'id' => 2176,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 123,
                'name' => 'Maryland and Grand Kru',
            ),
            176 => 
            array (
                'id' => 2177,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 123,
                'name' => 'Montserrado',
            ),
            177 => 
            array (
                'id' => 2178,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 123,
                'name' => 'Nimba',
            ),
            178 => 
            array (
                'id' => 2179,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 123,
                'name' => 'Rivercess',
            ),
            179 => 
            array (
                'id' => 2180,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 123,
                'name' => 'Sinoe',
            ),
            180 => 
            array (
                'id' => 2181,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 124,
                'name' => 'Ajdabiya',
            ),
            181 => 
            array (
                'id' => 2182,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 124,
                'name' => 'Fezzan',
            ),
            182 => 
            array (
                'id' => 2183,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 124,
                'name' => 'Banghazi',
            ),
            183 => 
            array (
                'id' => 2184,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 124,
                'name' => 'Darnah',
            ),
            184 => 
            array (
                'id' => 2185,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 124,
                'name' => 'Ghadamis',
            ),
            185 => 
            array (
                'id' => 2186,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 124,
                'name' => 'Gharyan',
            ),
            186 => 
            array (
                'id' => 2187,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 124,
                'name' => 'Misratah',
            ),
            187 => 
            array (
                'id' => 2188,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 124,
                'name' => 'Murzuq',
            ),
            188 => 
            array (
                'id' => 2189,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 124,
                'name' => 'Sabha',
            ),
            189 => 
            array (
                'id' => 2190,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 124,
                'name' => 'Sawfajjin',
            ),
            190 => 
            array (
                'id' => 2191,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 124,
                'name' => 'Surt',
            ),
            191 => 
            array (
                'id' => 2192,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 124,
                'name' => 'Tarabulus',
            ),
            192 => 
            array (
                'id' => 2193,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 124,
                'name' => 'Tarhunah',
            ),
            193 => 
            array (
                'id' => 2194,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 124,
                'name' => 'Tripolitania',
            ),
            194 => 
            array (
                'id' => 2195,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 124,
                'name' => 'Tubruq',
            ),
            195 => 
            array (
                'id' => 2196,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 124,
                'name' => 'Yafran',
            ),
            196 => 
            array (
                'id' => 2197,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 124,
                'name' => 'Zlitan',
            ),
            197 => 
            array (
                'id' => 2198,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 124,
                'name' => 'al-\'Aziziyah',
            ),
            198 => 
            array (
                'id' => 2199,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 124,
                'name' => 'al-Fatih',
            ),
            199 => 
            array (
                'id' => 2200,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 124,
                'name' => 'al-Jabal al Akhdar',
            ),
            200 => 
            array (
                'id' => 2201,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 124,
                'name' => 'al-Jufrah',
            ),
            201 => 
            array (
                'id' => 2202,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 124,
                'name' => 'al-Khums',
            ),
            202 => 
            array (
                'id' => 2203,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 124,
                'name' => 'al-Kufrah',
            ),
            203 => 
            array (
                'id' => 2204,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 124,
                'name' => 'an-Nuqat al-Khams',
            ),
            204 => 
            array (
                'id' => 2205,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 124,
                'name' => 'ash-Shati\'',
            ),
            205 => 
            array (
                'id' => 2206,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 124,
                'name' => 'az-Zawiyah',
            ),
            206 => 
            array (
                'id' => 2207,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 125,
                'name' => 'Balzers',
            ),
            207 => 
            array (
                'id' => 2208,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 125,
                'name' => 'Eschen',
            ),
            208 => 
            array (
                'id' => 2209,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 125,
                'name' => 'Gamprin',
            ),
            209 => 
            array (
                'id' => 2210,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 125,
                'name' => 'Mauren',
            ),
            210 => 
            array (
                'id' => 2211,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 125,
                'name' => 'Planken',
            ),
            211 => 
            array (
                'id' => 2212,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 125,
                'name' => 'Ruggell',
            ),
            212 => 
            array (
                'id' => 2213,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 125,
                'name' => 'Schaan',
            ),
            213 => 
            array (
                'id' => 2214,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 125,
                'name' => 'Schellenberg',
            ),
            214 => 
            array (
                'id' => 2215,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 125,
                'name' => 'Triesen',
            ),
            215 => 
            array (
                'id' => 2216,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 125,
                'name' => 'Triesenberg',
            ),
            216 => 
            array (
                'id' => 2217,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 125,
                'name' => 'Vaduz',
            ),
            217 => 
            array (
                'id' => 2218,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 126,
                'name' => 'Alytaus',
            ),
            218 => 
            array (
                'id' => 2219,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 126,
                'name' => 'Anyksciai',
            ),
            219 => 
            array (
                'id' => 2220,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 126,
                'name' => 'Kauno',
            ),
            220 => 
            array (
                'id' => 2221,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 126,
                'name' => 'Klaipedos',
            ),
            221 => 
            array (
                'id' => 2222,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 126,
                'name' => 'Marijampoles',
            ),
            222 => 
            array (
                'id' => 2223,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 126,
                'name' => 'Panevezhio',
            ),
            223 => 
            array (
                'id' => 2224,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 126,
                'name' => 'Panevezys',
            ),
            224 => 
            array (
                'id' => 2225,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 126,
                'name' => 'Shiauliu',
            ),
            225 => 
            array (
                'id' => 2226,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 126,
                'name' => 'Taurages',
            ),
            226 => 
            array (
                'id' => 2227,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 126,
                'name' => 'Telshiu',
            ),
            227 => 
            array (
                'id' => 2228,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 126,
                'name' => 'Telsiai',
            ),
            228 => 
            array (
                'id' => 2229,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 126,
                'name' => 'Utenos',
            ),
            229 => 
            array (
                'id' => 2230,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 126,
                'name' => 'Vilniaus',
            ),
            230 => 
            array (
                'id' => 2231,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 127,
                'name' => 'Capellen',
            ),
            231 => 
            array (
                'id' => 2232,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 127,
                'name' => 'Clervaux',
            ),
            232 => 
            array (
                'id' => 2233,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 127,
                'name' => 'Diekirch',
            ),
            233 => 
            array (
                'id' => 2234,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 127,
                'name' => 'Echternach',
            ),
            234 => 
            array (
                'id' => 2235,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 127,
                'name' => 'Esch-sur-Alzette',
            ),
            235 => 
            array (
                'id' => 2236,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 127,
                'name' => 'Grevenmacher',
            ),
            236 => 
            array (
                'id' => 2237,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 127,
                'name' => 'Luxembourg',
            ),
            237 => 
            array (
                'id' => 2238,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 127,
                'name' => 'Mersch',
            ),
            238 => 
            array (
                'id' => 2239,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 127,
                'name' => 'Redange',
            ),
            239 => 
            array (
                'id' => 2240,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 127,
                'name' => 'Remich',
            ),
            240 => 
            array (
                'id' => 2241,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 127,
                'name' => 'Vianden',
            ),
            241 => 
            array (
                'id' => 2242,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 127,
                'name' => 'Wiltz',
            ),
            242 => 
            array (
                'id' => 2243,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 128,
                'name' => 'Macau',
            ),
            243 => 
            array (
                'id' => 2244,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 129,
                'name' => 'Berovo',
            ),
            244 => 
            array (
                'id' => 2245,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 129,
                'name' => 'Bitola',
            ),
            245 => 
            array (
                'id' => 2246,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 129,
                'name' => 'Brod',
            ),
            246 => 
            array (
                'id' => 2247,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 129,
                'name' => 'Debar',
            ),
            247 => 
            array (
                'id' => 2248,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 129,
                'name' => 'Delchevo',
            ),
            248 => 
            array (
                'id' => 2249,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 129,
                'name' => 'Demir Hisar',
            ),
            249 => 
            array (
                'id' => 2250,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 129,
                'name' => 'Gevgelija',
            ),
            250 => 
            array (
                'id' => 2251,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 129,
                'name' => 'Gostivar',
            ),
            251 => 
            array (
                'id' => 2252,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 129,
                'name' => 'Kavadarci',
            ),
            252 => 
            array (
                'id' => 2253,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 129,
                'name' => 'Kichevo',
            ),
            253 => 
            array (
                'id' => 2254,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 129,
                'name' => 'Kochani',
            ),
            254 => 
            array (
                'id' => 2255,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 129,
                'name' => 'Kratovo',
            ),
            255 => 
            array (
                'id' => 2256,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 129,
                'name' => 'Kriva Palanka',
            ),
            256 => 
            array (
                'id' => 2257,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 129,
                'name' => 'Krushevo',
            ),
            257 => 
            array (
                'id' => 2258,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 129,
                'name' => 'Kumanovo',
            ),
            258 => 
            array (
                'id' => 2259,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 129,
                'name' => 'Negotino',
            ),
            259 => 
            array (
                'id' => 2260,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 129,
                'name' => 'Ohrid',
            ),
            260 => 
            array (
                'id' => 2261,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 129,
                'name' => 'Prilep',
            ),
            261 => 
            array (
                'id' => 2262,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 129,
                'name' => 'Probishtip',
            ),
            262 => 
            array (
                'id' => 2263,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 129,
                'name' => 'Radovish',
            ),
            263 => 
            array (
                'id' => 2264,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 129,
                'name' => 'Resen',
            ),
            264 => 
            array (
                'id' => 2265,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 129,
                'name' => 'Shtip',
            ),
            265 => 
            array (
                'id' => 2266,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 129,
                'name' => 'Skopje',
            ),
            266 => 
            array (
                'id' => 2267,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 129,
                'name' => 'Struga',
            ),
            267 => 
            array (
                'id' => 2268,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 129,
                'name' => 'Strumica',
            ),
            268 => 
            array (
                'id' => 2269,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 129,
                'name' => 'Sveti Nikole',
            ),
            269 => 
            array (
                'id' => 2270,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 129,
                'name' => 'Tetovo',
            ),
            270 => 
            array (
                'id' => 2271,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 129,
                'name' => 'Valandovo',
            ),
            271 => 
            array (
                'id' => 2272,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 129,
                'name' => 'Veles',
            ),
            272 => 
            array (
                'id' => 2273,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 129,
                'name' => 'Vinica',
            ),
            273 => 
            array (
                'id' => 2274,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 130,
                'name' => 'Antananarivo',
            ),
            274 => 
            array (
                'id' => 2275,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 130,
                'name' => 'Antsiranana',
            ),
            275 => 
            array (
                'id' => 2276,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 130,
                'name' => 'Fianarantsoa',
            ),
            276 => 
            array (
                'id' => 2277,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 130,
                'name' => 'Mahajanga',
            ),
            277 => 
            array (
                'id' => 2278,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 130,
                'name' => 'Toamasina',
            ),
            278 => 
            array (
                'id' => 2279,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 130,
                'name' => 'Toliary',
            ),
            279 => 
            array (
                'id' => 2280,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 131,
                'name' => 'Balaka',
            ),
            280 => 
            array (
                'id' => 2281,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 131,
                'name' => 'Blantyre City',
            ),
            281 => 
            array (
                'id' => 2282,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 131,
                'name' => 'Chikwawa',
            ),
            282 => 
            array (
                'id' => 2283,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 131,
                'name' => 'Chiradzulu',
            ),
            283 => 
            array (
                'id' => 2284,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 131,
                'name' => 'Chitipa',
            ),
            284 => 
            array (
                'id' => 2285,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 131,
                'name' => 'Dedza',
            ),
            285 => 
            array (
                'id' => 2286,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 131,
                'name' => 'Dowa',
            ),
            286 => 
            array (
                'id' => 2287,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 131,
                'name' => 'Karonga',
            ),
            287 => 
            array (
                'id' => 2288,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 131,
                'name' => 'Kasungu',
            ),
            288 => 
            array (
                'id' => 2289,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 131,
                'name' => 'Lilongwe City',
            ),
            289 => 
            array (
                'id' => 2290,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 131,
                'name' => 'Machinga',
            ),
            290 => 
            array (
                'id' => 2291,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 131,
                'name' => 'Mangochi',
            ),
            291 => 
            array (
                'id' => 2292,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 131,
                'name' => 'Mchinji',
            ),
            292 => 
            array (
                'id' => 2293,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 131,
                'name' => 'Mulanje',
            ),
            293 => 
            array (
                'id' => 2294,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 131,
                'name' => 'Mwanza',
            ),
            294 => 
            array (
                'id' => 2295,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 131,
                'name' => 'Mzimba',
            ),
            295 => 
            array (
                'id' => 2296,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 131,
                'name' => 'Mzuzu City',
            ),
            296 => 
            array (
                'id' => 2297,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 131,
                'name' => 'Nkhata Bay',
            ),
            297 => 
            array (
                'id' => 2298,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 131,
                'name' => 'Nkhotakota',
            ),
            298 => 
            array (
                'id' => 2299,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 131,
                'name' => 'Nsanje',
            ),
            299 => 
            array (
                'id' => 2300,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 131,
                'name' => 'Ntcheu',
            ),
            300 => 
            array (
                'id' => 2301,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 131,
                'name' => 'Ntchisi',
            ),
            301 => 
            array (
                'id' => 2302,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 131,
                'name' => 'Phalombe',
            ),
            302 => 
            array (
                'id' => 2303,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 131,
                'name' => 'Rumphi',
            ),
            303 => 
            array (
                'id' => 2304,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 131,
                'name' => 'Salima',
            ),
            304 => 
            array (
                'id' => 2305,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 131,
                'name' => 'Thyolo',
            ),
            305 => 
            array (
                'id' => 2306,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 131,
                'name' => 'Zomba Municipality',
            ),
            306 => 
            array (
                'id' => 2307,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 132,
                'name' => 'Johor',
            ),
            307 => 
            array (
                'id' => 2308,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 132,
                'name' => 'Kedah',
            ),
            308 => 
            array (
                'id' => 2309,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 132,
                'name' => 'Kelantan',
            ),
            309 => 
            array (
                'id' => 2310,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 132,
                'name' => 'Kuala Lumpur',
            ),
            310 => 
            array (
                'id' => 2311,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 132,
                'name' => 'Labuan',
            ),
            311 => 
            array (
                'id' => 2312,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 132,
                'name' => 'Melaka',
            ),
            312 => 
            array (
                'id' => 2313,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 132,
                'name' => 'Negeri Johor',
            ),
            313 => 
            array (
                'id' => 2314,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 132,
                'name' => 'Negeri Sembilan',
            ),
            314 => 
            array (
                'id' => 2315,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 132,
                'name' => 'Pahang',
            ),
            315 => 
            array (
                'id' => 2316,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 132,
                'name' => 'Penang',
            ),
            316 => 
            array (
                'id' => 2317,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 132,
                'name' => 'Perak',
            ),
            317 => 
            array (
                'id' => 2318,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 132,
                'name' => 'Perlis',
            ),
            318 => 
            array (
                'id' => 2319,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 132,
                'name' => 'Pulau Pinang',
            ),
            319 => 
            array (
                'id' => 2320,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 132,
                'name' => 'Sabah',
            ),
            320 => 
            array (
                'id' => 2321,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 132,
                'name' => 'Sarawak',
            ),
            321 => 
            array (
                'id' => 2322,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 132,
                'name' => 'Selangor',
            ),
            322 => 
            array (
                'id' => 2323,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 132,
                'name' => 'Sembilan',
            ),
            323 => 
            array (
                'id' => 2324,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 132,
                'name' => 'Terengganu',
            ),
            324 => 
            array (
                'id' => 2325,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 133,
                'name' => 'Alif Alif',
            ),
            325 => 
            array (
                'id' => 2326,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 133,
                'name' => 'Alif Dhaal',
            ),
            326 => 
            array (
                'id' => 2327,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 133,
                'name' => 'Baa',
            ),
            327 => 
            array (
                'id' => 2328,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 133,
                'name' => 'Dhaal',
            ),
            328 => 
            array (
                'id' => 2329,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 133,
                'name' => 'Faaf',
            ),
            329 => 
            array (
                'id' => 2330,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 133,
                'name' => 'Gaaf Alif',
            ),
            330 => 
            array (
                'id' => 2331,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 133,
                'name' => 'Gaaf Dhaal',
            ),
            331 => 
            array (
                'id' => 2332,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 133,
                'name' => 'Ghaviyani',
            ),
            332 => 
            array (
                'id' => 2333,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 133,
                'name' => 'Haa Alif',
            ),
            333 => 
            array (
                'id' => 2334,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 133,
                'name' => 'Haa Dhaal',
            ),
            334 => 
            array (
                'id' => 2335,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 133,
                'name' => 'Kaaf',
            ),
            335 => 
            array (
                'id' => 2336,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 133,
                'name' => 'Laam',
            ),
            336 => 
            array (
                'id' => 2337,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 133,
                'name' => 'Lhaviyani',
            ),
            337 => 
            array (
                'id' => 2338,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 133,
                'name' => 'Male',
            ),
            338 => 
            array (
                'id' => 2339,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 133,
                'name' => 'Miim',
            ),
            339 => 
            array (
                'id' => 2340,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 133,
                'name' => 'Nuun',
            ),
            340 => 
            array (
                'id' => 2341,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 133,
                'name' => 'Raa',
            ),
            341 => 
            array (
                'id' => 2342,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 133,
                'name' => 'Shaviyani',
            ),
            342 => 
            array (
                'id' => 2343,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 133,
                'name' => 'Siin',
            ),
            343 => 
            array (
                'id' => 2344,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 133,
                'name' => 'Thaa',
            ),
            344 => 
            array (
                'id' => 2345,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 133,
                'name' => 'Vaav',
            ),
            345 => 
            array (
                'id' => 2346,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 134,
                'name' => 'Bamako',
            ),
            346 => 
            array (
                'id' => 2347,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 134,
                'name' => 'Gao',
            ),
            347 => 
            array (
                'id' => 2348,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 134,
                'name' => 'Kayes',
            ),
            348 => 
            array (
                'id' => 2349,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 134,
                'name' => 'Kidal',
            ),
            349 => 
            array (
                'id' => 2350,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 134,
                'name' => 'Koulikoro',
            ),
            350 => 
            array (
                'id' => 2351,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 134,
                'name' => 'Mopti',
            ),
            351 => 
            array (
                'id' => 2352,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 134,
                'name' => 'Segou',
            ),
            352 => 
            array (
                'id' => 2353,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 134,
                'name' => 'Sikasso',
            ),
            353 => 
            array (
                'id' => 2354,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 134,
                'name' => 'Tombouctou',
            ),
            354 => 
            array (
                'id' => 2355,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 135,
                'name' => 'Gozo and Comino',
            ),
            355 => 
            array (
                'id' => 2356,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 135,
                'name' => 'Inner Harbour',
            ),
            356 => 
            array (
                'id' => 2357,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 135,
                'name' => 'Northern',
            ),
            357 => 
            array (
                'id' => 2358,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 135,
                'name' => 'Outer Harbour',
            ),
            358 => 
            array (
                'id' => 2359,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 135,
                'name' => 'South Eastern',
            ),
            359 => 
            array (
                'id' => 2360,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 135,
                'name' => 'Valletta',
            ),
            360 => 
            array (
                'id' => 2361,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 135,
                'name' => 'Western',
            ),
            361 => 
            array (
                'id' => 2362,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 136,
                'name' => 'Castletown',
            ),
            362 => 
            array (
                'id' => 2363,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 136,
                'name' => 'Douglas',
            ),
            363 => 
            array (
                'id' => 2364,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 136,
                'name' => 'Laxey',
            ),
            364 => 
            array (
                'id' => 2365,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 136,
                'name' => 'Onchan',
            ),
            365 => 
            array (
                'id' => 2366,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 136,
                'name' => 'Peel',
            ),
            366 => 
            array (
                'id' => 2367,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 136,
                'name' => 'Port Erin',
            ),
            367 => 
            array (
                'id' => 2368,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 136,
                'name' => 'Port Saint Mary',
            ),
            368 => 
            array (
                'id' => 2369,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 136,
                'name' => 'Ramsey',
            ),
            369 => 
            array (
                'id' => 2370,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 137,
                'name' => 'Ailinlaplap',
            ),
            370 => 
            array (
                'id' => 2371,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 137,
                'name' => 'Ailuk',
            ),
            371 => 
            array (
                'id' => 2372,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 137,
                'name' => 'Arno',
            ),
            372 => 
            array (
                'id' => 2373,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 137,
                'name' => 'Aur',
            ),
            373 => 
            array (
                'id' => 2374,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 137,
                'name' => 'Bikini',
            ),
            374 => 
            array (
                'id' => 2375,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 137,
                'name' => 'Ebon',
            ),
            375 => 
            array (
                'id' => 2376,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 137,
                'name' => 'Enewetak',
            ),
            376 => 
            array (
                'id' => 2377,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 137,
                'name' => 'Jabat',
            ),
            377 => 
            array (
                'id' => 2378,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 137,
                'name' => 'Jaluit',
            ),
            378 => 
            array (
                'id' => 2379,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 137,
                'name' => 'Kili',
            ),
            379 => 
            array (
                'id' => 2380,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 137,
                'name' => 'Kwajalein',
            ),
            380 => 
            array (
                'id' => 2381,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 137,
                'name' => 'Lae',
            ),
            381 => 
            array (
                'id' => 2382,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 137,
                'name' => 'Lib',
            ),
            382 => 
            array (
                'id' => 2383,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 137,
                'name' => 'Likiep',
            ),
            383 => 
            array (
                'id' => 2384,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 137,
                'name' => 'Majuro',
            ),
            384 => 
            array (
                'id' => 2385,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 137,
                'name' => 'Maloelap',
            ),
            385 => 
            array (
                'id' => 2386,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 137,
                'name' => 'Mejit',
            ),
            386 => 
            array (
                'id' => 2387,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 137,
                'name' => 'Mili',
            ),
            387 => 
            array (
                'id' => 2388,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 137,
                'name' => 'Namorik',
            ),
            388 => 
            array (
                'id' => 2389,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 137,
                'name' => 'Namu',
            ),
            389 => 
            array (
                'id' => 2390,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 137,
                'name' => 'Rongelap',
            ),
            390 => 
            array (
                'id' => 2391,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 137,
                'name' => 'Ujae',
            ),
            391 => 
            array (
                'id' => 2392,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 137,
                'name' => 'Utrik',
            ),
            392 => 
            array (
                'id' => 2393,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 137,
                'name' => 'Wotho',
            ),
            393 => 
            array (
                'id' => 2394,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 137,
                'name' => 'Wotje',
            ),
            394 => 
            array (
                'id' => 2395,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 138,
                'name' => 'Fort-de-France',
            ),
            395 => 
            array (
                'id' => 2396,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 138,
                'name' => 'La Trinite',
            ),
            396 => 
            array (
                'id' => 2397,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 138,
                'name' => 'Le Marin',
            ),
            397 => 
            array (
                'id' => 2398,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 138,
                'name' => 'Saint-Pierre',
            ),
            398 => 
            array (
                'id' => 2399,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 139,
                'name' => 'Adrar',
            ),
            399 => 
            array (
                'id' => 2400,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 139,
                'name' => 'Assaba',
            ),
            400 => 
            array (
                'id' => 2401,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 139,
                'name' => 'Brakna',
            ),
            401 => 
            array (
                'id' => 2402,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 139,
                'name' => 'Dhakhlat Nawadibu',
            ),
            402 => 
            array (
                'id' => 2403,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 139,
                'name' => 'Hudh-al-Gharbi',
            ),
            403 => 
            array (
                'id' => 2404,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 139,
                'name' => 'Hudh-ash-Sharqi',
            ),
            404 => 
            array (
                'id' => 2405,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 139,
                'name' => 'Inshiri',
            ),
            405 => 
            array (
                'id' => 2406,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 139,
                'name' => 'Nawakshut',
            ),
            406 => 
            array (
                'id' => 2407,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 139,
                'name' => 'Qidimagha',
            ),
            407 => 
            array (
                'id' => 2408,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 139,
                'name' => 'Qurqul',
            ),
            408 => 
            array (
                'id' => 2409,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 139,
                'name' => 'Taqant',
            ),
            409 => 
            array (
                'id' => 2410,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 139,
                'name' => 'Tiris Zammur',
            ),
            410 => 
            array (
                'id' => 2411,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 139,
                'name' => 'Trarza',
            ),
            411 => 
            array (
                'id' => 2412,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 140,
                'name' => 'Black River',
            ),
            412 => 
            array (
                'id' => 2413,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 140,
                'name' => 'Eau Coulee',
            ),
            413 => 
            array (
                'id' => 2414,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 140,
                'name' => 'Flacq',
            ),
            414 => 
            array (
                'id' => 2415,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 140,
                'name' => 'Floreal',
            ),
            415 => 
            array (
                'id' => 2416,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 140,
                'name' => 'Grand Port',
            ),
            416 => 
            array (
                'id' => 2417,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 140,
                'name' => 'Moka',
            ),
            417 => 
            array (
                'id' => 2418,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 140,
                'name' => 'Pamplempousses',
            ),
            418 => 
            array (
                'id' => 2419,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 140,
                'name' => 'Plaines Wilhelm',
            ),
            419 => 
            array (
                'id' => 2420,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 140,
                'name' => 'Port Louis',
            ),
            420 => 
            array (
                'id' => 2421,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 140,
                'name' => 'Riviere du Rempart',
            ),
            421 => 
            array (
                'id' => 2422,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 140,
                'name' => 'Rodrigues',
            ),
            422 => 
            array (
                'id' => 2423,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 140,
                'name' => 'Rose Hill',
            ),
            423 => 
            array (
                'id' => 2424,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 140,
                'name' => 'Savanne',
            ),
            424 => 
            array (
                'id' => 2425,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 141,
                'name' => 'Mayotte',
            ),
            425 => 
            array (
                'id' => 2426,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 141,
                'name' => 'Pamanzi',
            ),
            426 => 
            array (
                'id' => 2427,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 142,
                'name' => 'Aguascalientes',
            ),
            427 => 
            array (
                'id' => 2428,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 142,
                'name' => 'Baja California',
            ),
            428 => 
            array (
                'id' => 2429,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 142,
                'name' => 'Baja California Sur',
            ),
            429 => 
            array (
                'id' => 2430,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 142,
                'name' => 'Campeche',
            ),
            430 => 
            array (
                'id' => 2431,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 142,
                'name' => 'Chiapas',
            ),
            431 => 
            array (
                'id' => 2432,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 142,
                'name' => 'Chihuahua',
            ),
            432 => 
            array (
                'id' => 2433,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 142,
                'name' => 'Coahuila',
            ),
            433 => 
            array (
                'id' => 2434,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 142,
                'name' => 'Colima',
            ),
            434 => 
            array (
                'id' => 2435,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 142,
                'name' => 'Distrito Federal',
            ),
            435 => 
            array (
                'id' => 2436,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 142,
                'name' => 'Durango',
            ),
            436 => 
            array (
                'id' => 2437,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 142,
                'name' => 'Estado de Mexico',
            ),
            437 => 
            array (
                'id' => 2438,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 142,
                'name' => 'Guanajuato',
            ),
            438 => 
            array (
                'id' => 2439,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 142,
                'name' => 'Guerrero',
            ),
            439 => 
            array (
                'id' => 2440,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 142,
                'name' => 'Hidalgo',
            ),
            440 => 
            array (
                'id' => 2441,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 142,
                'name' => 'Jalisco',
            ),
            441 => 
            array (
                'id' => 2442,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 142,
                'name' => 'Mexico',
            ),
            442 => 
            array (
                'id' => 2443,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 142,
                'name' => 'Michoacan',
            ),
            443 => 
            array (
                'id' => 2444,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 142,
                'name' => 'Morelos',
            ),
            444 => 
            array (
                'id' => 2445,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 142,
                'name' => 'Nayarit',
            ),
            445 => 
            array (
                'id' => 2446,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 142,
                'name' => 'Nuevo Leon',
            ),
            446 => 
            array (
                'id' => 2447,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 142,
                'name' => 'Oaxaca',
            ),
            447 => 
            array (
                'id' => 2448,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 142,
                'name' => 'Puebla',
            ),
            448 => 
            array (
                'id' => 2449,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 142,
                'name' => 'Queretaro',
            ),
            449 => 
            array (
                'id' => 2450,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 142,
                'name' => 'Quintana Roo',
            ),
            450 => 
            array (
                'id' => 2451,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 142,
                'name' => 'San Luis Potosi',
            ),
            451 => 
            array (
                'id' => 2452,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 142,
                'name' => 'Sinaloa',
            ),
            452 => 
            array (
                'id' => 2453,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 142,
                'name' => 'Sonora',
            ),
            453 => 
            array (
                'id' => 2454,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 142,
                'name' => 'Tabasco',
            ),
            454 => 
            array (
                'id' => 2455,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 142,
                'name' => 'Tamaulipas',
            ),
            455 => 
            array (
                'id' => 2456,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 142,
                'name' => 'Tlaxcala',
            ),
            456 => 
            array (
                'id' => 2457,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 142,
                'name' => 'Veracruz',
            ),
            457 => 
            array (
                'id' => 2458,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 142,
                'name' => 'Yucatan',
            ),
            458 => 
            array (
                'id' => 2459,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 142,
                'name' => 'Zacatecas',
            ),
            459 => 
            array (
                'id' => 2460,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 143,
                'name' => 'Chuuk',
            ),
            460 => 
            array (
                'id' => 2461,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 143,
                'name' => 'Kusaie',
            ),
            461 => 
            array (
                'id' => 2462,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 143,
                'name' => 'Pohnpei',
            ),
            462 => 
            array (
                'id' => 2463,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 143,
                'name' => 'Yap',
            ),
            463 => 
            array (
                'id' => 2464,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 144,
                'name' => 'Balti',
            ),
            464 => 
            array (
                'id' => 2465,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 144,
                'name' => 'Cahul',
            ),
            465 => 
            array (
                'id' => 2466,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 144,
                'name' => 'Chisinau',
            ),
            466 => 
            array (
                'id' => 2467,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 144,
                'name' => 'Chisinau Oras',
            ),
            467 => 
            array (
                'id' => 2468,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 144,
                'name' => 'Edinet',
            ),
            468 => 
            array (
                'id' => 2469,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 144,
                'name' => 'Gagauzia',
            ),
            469 => 
            array (
                'id' => 2470,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 144,
                'name' => 'Lapusna',
            ),
            470 => 
            array (
                'id' => 2471,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 144,
                'name' => 'Orhei',
            ),
            471 => 
            array (
                'id' => 2472,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 144,
                'name' => 'Soroca',
            ),
            472 => 
            array (
                'id' => 2473,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 144,
                'name' => 'Taraclia',
            ),
            473 => 
            array (
                'id' => 2474,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 144,
                'name' => 'Tighina',
            ),
            474 => 
            array (
                'id' => 2475,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 144,
                'name' => 'Transnistria',
            ),
            475 => 
            array (
                'id' => 2476,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 144,
                'name' => 'Ungheni',
            ),
            476 => 
            array (
                'id' => 2477,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 145,
                'name' => 'Fontvieille',
            ),
            477 => 
            array (
                'id' => 2478,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 145,
                'name' => 'La Condamine',
            ),
            478 => 
            array (
                'id' => 2479,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 145,
                'name' => 'Monaco-Ville',
            ),
            479 => 
            array (
                'id' => 2480,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 145,
                'name' => 'Monte Carlo',
            ),
            480 => 
            array (
                'id' => 2481,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 146,
                'name' => 'Arhangaj',
            ),
            481 => 
            array (
                'id' => 2482,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 146,
                'name' => 'Bajan-Olgij',
            ),
            482 => 
            array (
                'id' => 2483,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 146,
                'name' => 'Bajanhongor',
            ),
            483 => 
            array (
                'id' => 2484,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 146,
                'name' => 'Bulgan',
            ),
            484 => 
            array (
                'id' => 2485,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 146,
                'name' => 'Darhan-Uul',
            ),
            485 => 
            array (
                'id' => 2486,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 146,
                'name' => 'Dornod',
            ),
            486 => 
            array (
                'id' => 2487,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 146,
                'name' => 'Dornogovi',
            ),
            487 => 
            array (
                'id' => 2488,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 146,
                'name' => 'Dundgovi',
            ),
            488 => 
            array (
                'id' => 2489,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 146,
                'name' => 'Govi-Altaj',
            ),
            489 => 
            array (
                'id' => 2490,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 146,
                'name' => 'Govisumber',
            ),
            490 => 
            array (
                'id' => 2491,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 146,
                'name' => 'Hentij',
            ),
            491 => 
            array (
                'id' => 2492,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 146,
                'name' => 'Hovd',
            ),
            492 => 
            array (
                'id' => 2493,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 146,
                'name' => 'Hovsgol',
            ),
            493 => 
            array (
                'id' => 2494,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 146,
                'name' => 'Omnogovi',
            ),
            494 => 
            array (
                'id' => 2495,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 146,
                'name' => 'Orhon',
            ),
            495 => 
            array (
                'id' => 2496,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 146,
                'name' => 'Ovorhangaj',
            ),
            496 => 
            array (
                'id' => 2497,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 146,
                'name' => 'Selenge',
            ),
            497 => 
            array (
                'id' => 2498,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 146,
                'name' => 'Suhbaatar',
            ),
            498 => 
            array (
                'id' => 2499,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 146,
                'name' => 'Tov',
            ),
            499 => 
            array (
                'id' => 2500,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 146,
                'name' => 'Ulaanbaatar',
            ),
        ));
        \DB::table('states')->insert(array (
            0 => 
            array (
                'id' => 2501,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 146,
                'name' => 'Uvs',
            ),
            1 => 
            array (
                'id' => 2502,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 146,
                'name' => 'Zavhan',
            ),
            2 => 
            array (
                'id' => 2503,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 147,
                'name' => 'Montserrat',
            ),
            3 => 
            array (
                'id' => 2504,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 148,
                'name' => 'Agadir',
            ),
            4 => 
            array (
                'id' => 2505,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 148,
                'name' => 'Casablanca',
            ),
            5 => 
            array (
                'id' => 2506,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 148,
                'name' => 'Chaouia-Ouardigha',
            ),
            6 => 
            array (
                'id' => 2507,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 148,
                'name' => 'Doukkala-Abda',
            ),
            7 => 
            array (
                'id' => 2508,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 148,
                'name' => 'Fes-Boulemane',
            ),
            8 => 
            array (
                'id' => 2509,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 148,
                'name' => 'Gharb-Chrarda-Beni Hssen',
            ),
            9 => 
            array (
                'id' => 2510,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 148,
                'name' => 'Guelmim',
            ),
            10 => 
            array (
                'id' => 2511,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 148,
                'name' => 'Kenitra',
            ),
            11 => 
            array (
                'id' => 2512,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 148,
                'name' => 'Marrakech-Tensift-Al Haouz',
            ),
            12 => 
            array (
                'id' => 2513,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 148,
                'name' => 'Meknes-Tafilalet',
            ),
            13 => 
            array (
                'id' => 2514,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 148,
                'name' => 'Oriental',
            ),
            14 => 
            array (
                'id' => 2515,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 148,
                'name' => 'Oujda',
            ),
            15 => 
            array (
                'id' => 2516,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 148,
                'name' => 'Province de Tanger',
            ),
            16 => 
            array (
                'id' => 2517,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 148,
                'name' => 'Rabat-Sale-Zammour-Zaer',
            ),
            17 => 
            array (
                'id' => 2518,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 148,
                'name' => 'Sala Al Jadida',
            ),
            18 => 
            array (
                'id' => 2519,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 148,
                'name' => 'Settat',
            ),
            19 => 
            array (
                'id' => 2520,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 148,
                'name' => 'Souss Massa-Draa',
            ),
            20 => 
            array (
                'id' => 2521,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 148,
                'name' => 'Tadla-Azilal',
            ),
            21 => 
            array (
                'id' => 2522,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 148,
                'name' => 'Tangier-Tetouan',
            ),
            22 => 
            array (
                'id' => 2523,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 148,
                'name' => 'Taza-Al Hoceima-Taounate',
            ),
            23 => 
            array (
                'id' => 2524,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 148,
                'name' => 'Wilaya de Casablanca',
            ),
            24 => 
            array (
                'id' => 2525,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 148,
                'name' => 'Wilaya de Rabat-Sale',
            ),
            25 => 
            array (
                'id' => 2526,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 149,
                'name' => 'Cabo Delgado',
            ),
            26 => 
            array (
                'id' => 2527,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 149,
                'name' => 'Gaza',
            ),
            27 => 
            array (
                'id' => 2528,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 149,
                'name' => 'Inhambane',
            ),
            28 => 
            array (
                'id' => 2529,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 149,
                'name' => 'Manica',
            ),
            29 => 
            array (
                'id' => 2530,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 149,
                'name' => 'Maputo',
            ),
            30 => 
            array (
                'id' => 2531,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 149,
                'name' => 'Maputo Provincia',
            ),
            31 => 
            array (
                'id' => 2532,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 149,
                'name' => 'Nampula',
            ),
            32 => 
            array (
                'id' => 2533,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 149,
                'name' => 'Niassa',
            ),
            33 => 
            array (
                'id' => 2534,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 149,
                'name' => 'Sofala',
            ),
            34 => 
            array (
                'id' => 2535,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 149,
                'name' => 'Tete',
            ),
            35 => 
            array (
                'id' => 2536,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 149,
                'name' => 'Zambezia',
            ),
            36 => 
            array (
                'id' => 2537,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 150,
                'name' => 'Ayeyarwady',
            ),
            37 => 
            array (
                'id' => 2538,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 150,
                'name' => 'Bago',
            ),
            38 => 
            array (
                'id' => 2539,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 150,
                'name' => 'Chin',
            ),
            39 => 
            array (
                'id' => 2540,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 150,
                'name' => 'Kachin',
            ),
            40 => 
            array (
                'id' => 2541,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 150,
                'name' => 'Kayah',
            ),
            41 => 
            array (
                'id' => 2542,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 150,
                'name' => 'Kayin',
            ),
            42 => 
            array (
                'id' => 2543,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 150,
                'name' => 'Magway',
            ),
            43 => 
            array (
                'id' => 2544,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 150,
                'name' => 'Mandalay',
            ),
            44 => 
            array (
                'id' => 2545,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 150,
                'name' => 'Mon',
            ),
            45 => 
            array (
                'id' => 2546,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 150,
                'name' => 'Nay Pyi Taw',
            ),
            46 => 
            array (
                'id' => 2547,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 150,
                'name' => 'Rakhine',
            ),
            47 => 
            array (
                'id' => 2548,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 150,
                'name' => 'Sagaing',
            ),
            48 => 
            array (
                'id' => 2549,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 150,
                'name' => 'Shan',
            ),
            49 => 
            array (
                'id' => 2550,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 150,
                'name' => 'Tanintharyi',
            ),
            50 => 
            array (
                'id' => 2551,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 150,
                'name' => 'Yangon',
            ),
            51 => 
            array (
                'id' => 2552,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 151,
                'name' => 'Caprivi',
            ),
            52 => 
            array (
                'id' => 2553,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 151,
                'name' => 'Erongo',
            ),
            53 => 
            array (
                'id' => 2554,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 151,
                'name' => 'Hardap',
            ),
            54 => 
            array (
                'id' => 2555,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 151,
                'name' => 'Karas',
            ),
            55 => 
            array (
                'id' => 2556,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 151,
                'name' => 'Kavango',
            ),
            56 => 
            array (
                'id' => 2557,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 151,
                'name' => 'Khomas',
            ),
            57 => 
            array (
                'id' => 2558,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 151,
                'name' => 'Kunene',
            ),
            58 => 
            array (
                'id' => 2559,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 151,
                'name' => 'Ohangwena',
            ),
            59 => 
            array (
                'id' => 2560,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 151,
                'name' => 'Omaheke',
            ),
            60 => 
            array (
                'id' => 2561,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 151,
                'name' => 'Omusati',
            ),
            61 => 
            array (
                'id' => 2562,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 151,
                'name' => 'Oshana',
            ),
            62 => 
            array (
                'id' => 2563,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 151,
                'name' => 'Oshikoto',
            ),
            63 => 
            array (
                'id' => 2564,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 151,
                'name' => 'Otjozondjupa',
            ),
            64 => 
            array (
                'id' => 2565,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 152,
                'name' => 'Yaren',
            ),
            65 => 
            array (
                'id' => 2566,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 153,
                'name' => 'Bagmati',
            ),
            66 => 
            array (
                'id' => 2567,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 153,
                'name' => 'Bheri',
            ),
            67 => 
            array (
                'id' => 2568,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 153,
                'name' => 'Dhawalagiri',
            ),
            68 => 
            array (
                'id' => 2569,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 153,
                'name' => 'Gandaki',
            ),
            69 => 
            array (
                'id' => 2570,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 153,
                'name' => 'Janakpur',
            ),
            70 => 
            array (
                'id' => 2571,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 153,
                'name' => 'Karnali',
            ),
            71 => 
            array (
                'id' => 2572,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 153,
                'name' => 'Koshi',
            ),
            72 => 
            array (
                'id' => 2573,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 153,
                'name' => 'Lumbini',
            ),
            73 => 
            array (
                'id' => 2574,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 153,
                'name' => 'Mahakali',
            ),
            74 => 
            array (
                'id' => 2575,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 153,
                'name' => 'Mechi',
            ),
            75 => 
            array (
                'id' => 2576,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 153,
                'name' => 'Narayani',
            ),
            76 => 
            array (
                'id' => 2577,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 153,
                'name' => 'Rapti',
            ),
            77 => 
            array (
                'id' => 2578,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 153,
                'name' => 'Sagarmatha',
            ),
            78 => 
            array (
                'id' => 2579,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 153,
                'name' => 'Seti',
            ),
            79 => 
            array (
                'id' => 2580,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 154,
                'name' => 'Bonaire',
            ),
            80 => 
            array (
                'id' => 2581,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 154,
                'name' => 'Curacao',
            ),
            81 => 
            array (
                'id' => 2582,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 154,
                'name' => 'Saba',
            ),
            82 => 
            array (
                'id' => 2583,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 154,
                'name' => 'Sint Eustatius',
            ),
            83 => 
            array (
                'id' => 2584,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 154,
                'name' => 'Sint Maarten',
            ),
            84 => 
            array (
                'id' => 2585,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 155,
                'name' => 'Amsterdam',
            ),
            85 => 
            array (
                'id' => 2586,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 155,
                'name' => 'Benelux',
            ),
            86 => 
            array (
                'id' => 2587,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 155,
                'name' => 'Drenthe',
            ),
            87 => 
            array (
                'id' => 2588,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 155,
                'name' => 'Flevoland',
            ),
            88 => 
            array (
                'id' => 2589,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 155,
                'name' => 'Friesland',
            ),
            89 => 
            array (
                'id' => 2590,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 155,
                'name' => 'Gelderland',
            ),
            90 => 
            array (
                'id' => 2591,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 155,
                'name' => 'Groningen',
            ),
            91 => 
            array (
                'id' => 2592,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 155,
                'name' => 'Limburg',
            ),
            92 => 
            array (
                'id' => 2593,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 155,
                'name' => 'Noord-Brabant',
            ),
            93 => 
            array (
                'id' => 2594,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 155,
                'name' => 'Noord-Holland',
            ),
            94 => 
            array (
                'id' => 2595,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 155,
                'name' => 'Overijssel',
            ),
            95 => 
            array (
                'id' => 2596,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 155,
                'name' => 'South Holland',
            ),
            96 => 
            array (
                'id' => 2597,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 155,
                'name' => 'Utrecht',
            ),
            97 => 
            array (
                'id' => 2598,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 155,
                'name' => 'Zeeland',
            ),
            98 => 
            array (
                'id' => 2599,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 155,
                'name' => 'Zuid-Holland',
            ),
            99 => 
            array (
                'id' => 2600,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 156,
                'name' => 'Iles',
            ),
            100 => 
            array (
                'id' => 2601,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 156,
                'name' => 'Nord',
            ),
            101 => 
            array (
                'id' => 2602,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 156,
                'name' => 'Sud',
            ),
            102 => 
            array (
                'id' => 2603,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 157,
                'name' => 'Area Outside Region',
            ),
            103 => 
            array (
                'id' => 2604,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 157,
                'name' => 'Auckland',
            ),
            104 => 
            array (
                'id' => 2605,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 157,
                'name' => 'Bay of Plenty',
            ),
            105 => 
            array (
                'id' => 2606,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 157,
                'name' => 'Canterbury',
            ),
            106 => 
            array (
                'id' => 2607,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 157,
                'name' => 'Christchurch',
            ),
            107 => 
            array (
                'id' => 2608,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 157,
                'name' => 'Gisborne',
            ),
            108 => 
            array (
                'id' => 2609,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 157,
                'name' => 'Hawke\'s Bay',
            ),
            109 => 
            array (
                'id' => 2610,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 157,
                'name' => 'Manawatu-Wanganui',
            ),
            110 => 
            array (
                'id' => 2611,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 157,
                'name' => 'Marlborough',
            ),
            111 => 
            array (
                'id' => 2612,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 157,
                'name' => 'Nelson',
            ),
            112 => 
            array (
                'id' => 2613,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 157,
                'name' => 'Northland',
            ),
            113 => 
            array (
                'id' => 2614,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 157,
                'name' => 'Otago',
            ),
            114 => 
            array (
                'id' => 2615,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 157,
                'name' => 'Rodney',
            ),
            115 => 
            array (
                'id' => 2616,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 157,
                'name' => 'Southland',
            ),
            116 => 
            array (
                'id' => 2617,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 157,
                'name' => 'Taranaki',
            ),
            117 => 
            array (
                'id' => 2618,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 157,
                'name' => 'Tasman',
            ),
            118 => 
            array (
                'id' => 2619,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 157,
                'name' => 'Waikato',
            ),
            119 => 
            array (
                'id' => 2620,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 157,
                'name' => 'Wellington',
            ),
            120 => 
            array (
                'id' => 2621,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 157,
                'name' => 'West Coast',
            ),
            121 => 
            array (
                'id' => 2622,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 158,
                'name' => 'Atlantico Norte',
            ),
            122 => 
            array (
                'id' => 2623,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 158,
                'name' => 'Atlantico Sur',
            ),
            123 => 
            array (
                'id' => 2624,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 158,
                'name' => 'Boaco',
            ),
            124 => 
            array (
                'id' => 2625,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 158,
                'name' => 'Carazo',
            ),
            125 => 
            array (
                'id' => 2626,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 158,
                'name' => 'Chinandega',
            ),
            126 => 
            array (
                'id' => 2627,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 158,
                'name' => 'Chontales',
            ),
            127 => 
            array (
                'id' => 2628,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 158,
                'name' => 'Esteli',
            ),
            128 => 
            array (
                'id' => 2629,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 158,
                'name' => 'Granada',
            ),
            129 => 
            array (
                'id' => 2630,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 158,
                'name' => 'Jinotega',
            ),
            130 => 
            array (
                'id' => 2631,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 158,
                'name' => 'Leon',
            ),
            131 => 
            array (
                'id' => 2632,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 158,
                'name' => 'Madriz',
            ),
            132 => 
            array (
                'id' => 2633,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 158,
                'name' => 'Managua',
            ),
            133 => 
            array (
                'id' => 2634,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 158,
                'name' => 'Masaya',
            ),
            134 => 
            array (
                'id' => 2635,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 158,
                'name' => 'Matagalpa',
            ),
            135 => 
            array (
                'id' => 2636,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 158,
                'name' => 'Nueva Segovia',
            ),
            136 => 
            array (
                'id' => 2637,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 158,
                'name' => 'Rio San Juan',
            ),
            137 => 
            array (
                'id' => 2638,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 158,
                'name' => 'Rivas',
            ),
            138 => 
            array (
                'id' => 2639,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 159,
                'name' => 'Agadez',
            ),
            139 => 
            array (
                'id' => 2640,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 159,
                'name' => 'Diffa',
            ),
            140 => 
            array (
                'id' => 2641,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 159,
                'name' => 'Dosso',
            ),
            141 => 
            array (
                'id' => 2642,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 159,
                'name' => 'Maradi',
            ),
            142 => 
            array (
                'id' => 2643,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 159,
                'name' => 'Niamey',
            ),
            143 => 
            array (
                'id' => 2644,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 159,
                'name' => 'Tahoua',
            ),
            144 => 
            array (
                'id' => 2645,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 159,
                'name' => 'Tillabery',
            ),
            145 => 
            array (
                'id' => 2646,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 159,
                'name' => 'Zinder',
            ),
            146 => 
            array (
                'id' => 2647,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 160,
                'name' => 'Abia',
            ),
            147 => 
            array (
                'id' => 2648,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 160,
                'name' => 'Abuja Federal Capital Territor',
            ),
            148 => 
            array (
                'id' => 2649,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 160,
                'name' => 'Adamawa',
            ),
            149 => 
            array (
                'id' => 2650,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 160,
                'name' => 'Akwa Ibom',
            ),
            150 => 
            array (
                'id' => 2651,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 160,
                'name' => 'Anambra',
            ),
            151 => 
            array (
                'id' => 2652,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 160,
                'name' => 'Bauchi',
            ),
            152 => 
            array (
                'id' => 2653,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 160,
                'name' => 'Bayelsa',
            ),
            153 => 
            array (
                'id' => 2654,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 160,
                'name' => 'Benue',
            ),
            154 => 
            array (
                'id' => 2655,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 160,
                'name' => 'Borno',
            ),
            155 => 
            array (
                'id' => 2656,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 160,
                'name' => 'Cross River',
            ),
            156 => 
            array (
                'id' => 2657,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 160,
                'name' => 'Delta',
            ),
            157 => 
            array (
                'id' => 2658,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 160,
                'name' => 'Ebonyi',
            ),
            158 => 
            array (
                'id' => 2659,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 160,
                'name' => 'Edo',
            ),
            159 => 
            array (
                'id' => 2660,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 160,
                'name' => 'Ekiti',
            ),
            160 => 
            array (
                'id' => 2661,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 160,
                'name' => 'Enugu',
            ),
            161 => 
            array (
                'id' => 2662,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 160,
                'name' => 'Gombe',
            ),
            162 => 
            array (
                'id' => 2663,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 160,
                'name' => 'Imo',
            ),
            163 => 
            array (
                'id' => 2664,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 160,
                'name' => 'Jigawa',
            ),
            164 => 
            array (
                'id' => 2665,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 160,
                'name' => 'Kaduna',
            ),
            165 => 
            array (
                'id' => 2666,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 160,
                'name' => 'Kano',
            ),
            166 => 
            array (
                'id' => 2667,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 160,
                'name' => 'Katsina',
            ),
            167 => 
            array (
                'id' => 2668,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 160,
                'name' => 'Kebbi',
            ),
            168 => 
            array (
                'id' => 2669,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 160,
                'name' => 'Kogi',
            ),
            169 => 
            array (
                'id' => 2670,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 160,
                'name' => 'Kwara',
            ),
            170 => 
            array (
                'id' => 2671,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 160,
                'name' => 'Lagos',
            ),
            171 => 
            array (
                'id' => 2672,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 160,
                'name' => 'Nassarawa',
            ),
            172 => 
            array (
                'id' => 2673,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 160,
                'name' => 'Niger',
            ),
            173 => 
            array (
                'id' => 2674,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 160,
                'name' => 'Ogun',
            ),
            174 => 
            array (
                'id' => 2675,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 160,
                'name' => 'Ondo',
            ),
            175 => 
            array (
                'id' => 2676,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 160,
                'name' => 'Osun',
            ),
            176 => 
            array (
                'id' => 2677,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 160,
                'name' => 'Oyo',
            ),
            177 => 
            array (
                'id' => 2678,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 160,
                'name' => 'Plateau',
            ),
            178 => 
            array (
                'id' => 2679,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 160,
                'name' => 'Rivers',
            ),
            179 => 
            array (
                'id' => 2680,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 160,
                'name' => 'Sokoto',
            ),
            180 => 
            array (
                'id' => 2681,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 160,
                'name' => 'Taraba',
            ),
            181 => 
            array (
                'id' => 2682,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 160,
                'name' => 'Yobe',
            ),
            182 => 
            array (
                'id' => 2683,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 160,
                'name' => 'Zamfara',
            ),
            183 => 
            array (
                'id' => 2684,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 161,
                'name' => 'Niue',
            ),
            184 => 
            array (
                'id' => 2685,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 162,
                'name' => 'Norfolk Island',
            ),
            185 => 
            array (
                'id' => 2686,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 163,
                'name' => 'Northern Islands',
            ),
            186 => 
            array (
                'id' => 2687,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 163,
                'name' => 'Rota',
            ),
            187 => 
            array (
                'id' => 2688,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 163,
                'name' => 'Saipan',
            ),
            188 => 
            array (
                'id' => 2689,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 163,
                'name' => 'Tinian',
            ),
            189 => 
            array (
                'id' => 2690,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 164,
                'name' => 'Akershus',
            ),
            190 => 
            array (
                'id' => 2691,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 164,
                'name' => 'Aust Agder',
            ),
            191 => 
            array (
                'id' => 2692,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 164,
                'name' => 'Bergen',
            ),
            192 => 
            array (
                'id' => 2693,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 164,
                'name' => 'Buskerud',
            ),
            193 => 
            array (
                'id' => 2694,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 164,
                'name' => 'Finnmark',
            ),
            194 => 
            array (
                'id' => 2695,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 164,
                'name' => 'Hedmark',
            ),
            195 => 
            array (
                'id' => 2696,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 164,
                'name' => 'Hordaland',
            ),
            196 => 
            array (
                'id' => 2697,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 164,
                'name' => 'Moere og Romsdal',
            ),
            197 => 
            array (
                'id' => 2698,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 164,
                'name' => 'Nord Trondelag',
            ),
            198 => 
            array (
                'id' => 2699,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 164,
                'name' => 'Nordland',
            ),
            199 => 
            array (
                'id' => 2700,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 164,
                'name' => 'Oestfold',
            ),
            200 => 
            array (
                'id' => 2701,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 164,
                'name' => 'Oppland',
            ),
            201 => 
            array (
                'id' => 2702,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 164,
                'name' => 'Oslo',
            ),
            202 => 
            array (
                'id' => 2703,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 164,
                'name' => 'Rogaland',
            ),
            203 => 
            array (
                'id' => 2704,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 164,
                'name' => 'Soer Troendelag',
            ),
            204 => 
            array (
                'id' => 2705,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 164,
                'name' => 'Sogn og Fjordane',
            ),
            205 => 
            array (
                'id' => 2706,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 164,
                'name' => 'Stavern',
            ),
            206 => 
            array (
                'id' => 2707,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 164,
                'name' => 'Sykkylven',
            ),
            207 => 
            array (
                'id' => 2708,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 164,
                'name' => 'Telemark',
            ),
            208 => 
            array (
                'id' => 2709,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 164,
                'name' => 'Troms',
            ),
            209 => 
            array (
                'id' => 2710,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 164,
                'name' => 'Vest Agder',
            ),
            210 => 
            array (
                'id' => 2711,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 164,
                'name' => 'Vestfold',
            ),
            211 => 
            array (
                'id' => 2712,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 164,
                'name' => 'ÃƒÂ˜stfold',
            ),
            212 => 
            array (
                'id' => 2713,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 165,
                'name' => 'Al Buraimi',
            ),
            213 => 
            array (
                'id' => 2714,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 165,
                'name' => 'Dhufar',
            ),
            214 => 
            array (
                'id' => 2715,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 165,
                'name' => 'Masqat',
            ),
            215 => 
            array (
                'id' => 2716,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 165,
                'name' => 'Musandam',
            ),
            216 => 
            array (
                'id' => 2717,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 165,
                'name' => 'Rusayl',
            ),
            217 => 
            array (
                'id' => 2718,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 165,
                'name' => 'Wadi Kabir',
            ),
            218 => 
            array (
                'id' => 2719,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 165,
                'name' => 'ad-Dakhiliyah',
            ),
            219 => 
            array (
                'id' => 2720,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 165,
                'name' => 'adh-Dhahirah',
            ),
            220 => 
            array (
                'id' => 2721,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 165,
                'name' => 'al-Batinah',
            ),
            221 => 
            array (
                'id' => 2722,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 165,
                'name' => 'ash-Sharqiyah',
            ),
            222 => 
            array (
                'id' => 2723,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 166,
                'name' => 'Baluchistan',
            ),
            223 => 
            array (
                'id' => 2724,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 166,
                'name' => 'Federal Capital Area',
            ),
            224 => 
            array (
                'id' => 2725,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 166,
                'name' => 'Federally administered Tribal ',
            ),
            225 => 
            array (
                'id' => 2726,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 166,
                'name' => 'North-West Frontier',
            ),
            226 => 
            array (
                'id' => 2727,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 166,
                'name' => 'Northern Areas',
            ),
            227 => 
            array (
                'id' => 2728,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 166,
                'name' => 'Punjab',
            ),
            228 => 
            array (
                'id' => 2729,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 166,
                'name' => 'Sind',
            ),
            229 => 
            array (
                'id' => 2730,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 167,
                'name' => 'Aimeliik',
            ),
            230 => 
            array (
                'id' => 2731,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 167,
                'name' => 'Airai',
            ),
            231 => 
            array (
                'id' => 2732,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 167,
                'name' => 'Angaur',
            ),
            232 => 
            array (
                'id' => 2733,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 167,
                'name' => 'Hatobohei',
            ),
            233 => 
            array (
                'id' => 2734,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 167,
                'name' => 'Kayangel',
            ),
            234 => 
            array (
                'id' => 2735,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 167,
                'name' => 'Koror',
            ),
            235 => 
            array (
                'id' => 2736,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 167,
                'name' => 'Melekeok',
            ),
            236 => 
            array (
                'id' => 2737,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 167,
                'name' => 'Ngaraard',
            ),
            237 => 
            array (
                'id' => 2738,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 167,
                'name' => 'Ngardmau',
            ),
            238 => 
            array (
                'id' => 2739,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 167,
                'name' => 'Ngaremlengui',
            ),
            239 => 
            array (
                'id' => 2740,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 167,
                'name' => 'Ngatpang',
            ),
            240 => 
            array (
                'id' => 2741,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 167,
                'name' => 'Ngchesar',
            ),
            241 => 
            array (
                'id' => 2742,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 167,
                'name' => 'Ngerchelong',
            ),
            242 => 
            array (
                'id' => 2743,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 167,
                'name' => 'Ngiwal',
            ),
            243 => 
            array (
                'id' => 2744,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 167,
                'name' => 'Peleliu',
            ),
            244 => 
            array (
                'id' => 2745,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 167,
                'name' => 'Sonsorol',
            ),
            245 => 
            array (
                'id' => 2746,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 168,
                'name' => 'Ariha',
            ),
            246 => 
            array (
                'id' => 2747,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 168,
                'name' => 'Bayt Lahm',
            ),
            247 => 
            array (
                'id' => 2748,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 168,
                'name' => 'Bethlehem',
            ),
            248 => 
            array (
                'id' => 2749,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 168,
                'name' => 'Dayr-al-Balah',
            ),
            249 => 
            array (
                'id' => 2750,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 168,
                'name' => 'Ghazzah',
            ),
            250 => 
            array (
                'id' => 2751,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 168,
                'name' => 'Ghazzah ash-Shamaliyah',
            ),
            251 => 
            array (
                'id' => 2752,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 168,
                'name' => 'Janin',
            ),
            252 => 
            array (
                'id' => 2753,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 168,
                'name' => 'Khan Yunis',
            ),
            253 => 
            array (
                'id' => 2754,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 168,
                'name' => 'Nabulus',
            ),
            254 => 
            array (
                'id' => 2755,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 168,
                'name' => 'Qalqilyah',
            ),
            255 => 
            array (
                'id' => 2756,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 168,
                'name' => 'Rafah',
            ),
            256 => 
            array (
                'id' => 2757,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 168,
                'name' => 'Ram Allah wal-Birah',
            ),
            257 => 
            array (
                'id' => 2758,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 168,
                'name' => 'Salfit',
            ),
            258 => 
            array (
                'id' => 2759,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 168,
                'name' => 'Tubas',
            ),
            259 => 
            array (
                'id' => 2760,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 168,
                'name' => 'Tulkarm',
            ),
            260 => 
            array (
                'id' => 2761,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 168,
                'name' => 'al-Khalil',
            ),
            261 => 
            array (
                'id' => 2762,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 168,
                'name' => 'al-Quds',
            ),
            262 => 
            array (
                'id' => 2763,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 169,
                'name' => 'Bocas del Toro',
            ),
            263 => 
            array (
                'id' => 2764,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 169,
                'name' => 'Chiriqui',
            ),
            264 => 
            array (
                'id' => 2765,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 169,
                'name' => 'Cocle',
            ),
            265 => 
            array (
                'id' => 2766,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 169,
                'name' => 'Colon',
            ),
            266 => 
            array (
                'id' => 2767,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 169,
                'name' => 'Darien',
            ),
            267 => 
            array (
                'id' => 2768,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 169,
                'name' => 'Embera',
            ),
            268 => 
            array (
                'id' => 2769,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 169,
                'name' => 'Herrera',
            ),
            269 => 
            array (
                'id' => 2770,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 169,
                'name' => 'Kuna Yala',
            ),
            270 => 
            array (
                'id' => 2771,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 169,
                'name' => 'Los Santos',
            ),
            271 => 
            array (
                'id' => 2772,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 169,
                'name' => 'Ngobe Bugle',
            ),
            272 => 
            array (
                'id' => 2773,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 169,
                'name' => 'Panama',
            ),
            273 => 
            array (
                'id' => 2774,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 169,
                'name' => 'Veraguas',
            ),
            274 => 
            array (
                'id' => 2775,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 170,
                'name' => 'East New Britain',
            ),
            275 => 
            array (
                'id' => 2776,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 170,
                'name' => 'East Sepik',
            ),
            276 => 
            array (
                'id' => 2777,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 170,
                'name' => 'Eastern Highlands',
            ),
            277 => 
            array (
                'id' => 2778,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 170,
                'name' => 'Enga',
            ),
            278 => 
            array (
                'id' => 2779,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 170,
                'name' => 'Fly River',
            ),
            279 => 
            array (
                'id' => 2780,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 170,
                'name' => 'Gulf',
            ),
            280 => 
            array (
                'id' => 2781,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 170,
                'name' => 'Madang',
            ),
            281 => 
            array (
                'id' => 2782,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 170,
                'name' => 'Manus',
            ),
            282 => 
            array (
                'id' => 2783,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 170,
                'name' => 'Milne Bay',
            ),
            283 => 
            array (
                'id' => 2784,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 170,
                'name' => 'Morobe',
            ),
            284 => 
            array (
                'id' => 2785,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 170,
                'name' => 'National Capital District',
            ),
            285 => 
            array (
                'id' => 2786,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 170,
                'name' => 'New Ireland',
            ),
            286 => 
            array (
                'id' => 2787,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 170,
                'name' => 'North Solomons',
            ),
            287 => 
            array (
                'id' => 2788,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 170,
                'name' => 'Oro',
            ),
            288 => 
            array (
                'id' => 2789,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 170,
                'name' => 'Sandaun',
            ),
            289 => 
            array (
                'id' => 2790,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 170,
                'name' => 'Simbu',
            ),
            290 => 
            array (
                'id' => 2791,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 170,
                'name' => 'Southern Highlands',
            ),
            291 => 
            array (
                'id' => 2792,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 170,
                'name' => 'West New Britain',
            ),
            292 => 
            array (
                'id' => 2793,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 170,
                'name' => 'Western Highlands',
            ),
            293 => 
            array (
                'id' => 2794,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 171,
                'name' => 'Alto Paraguay',
            ),
            294 => 
            array (
                'id' => 2795,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 171,
                'name' => 'Alto Parana',
            ),
            295 => 
            array (
                'id' => 2796,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 171,
                'name' => 'Amambay',
            ),
            296 => 
            array (
                'id' => 2797,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 171,
                'name' => 'Asuncion',
            ),
            297 => 
            array (
                'id' => 2798,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 171,
                'name' => 'Boqueron',
            ),
            298 => 
            array (
                'id' => 2799,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 171,
                'name' => 'Caaguazu',
            ),
            299 => 
            array (
                'id' => 2800,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 171,
                'name' => 'Caazapa',
            ),
            300 => 
            array (
                'id' => 2801,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 171,
                'name' => 'Canendiyu',
            ),
            301 => 
            array (
                'id' => 2802,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 171,
                'name' => 'Central',
            ),
            302 => 
            array (
                'id' => 2803,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 171,
                'name' => 'Concepcion',
            ),
            303 => 
            array (
                'id' => 2804,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 171,
                'name' => 'Cordillera',
            ),
            304 => 
            array (
                'id' => 2805,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 171,
                'name' => 'Guaira',
            ),
            305 => 
            array (
                'id' => 2806,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 171,
                'name' => 'Itapua',
            ),
            306 => 
            array (
                'id' => 2807,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 171,
                'name' => 'Misiones',
            ),
            307 => 
            array (
                'id' => 2808,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 171,
                'name' => 'Neembucu',
            ),
            308 => 
            array (
                'id' => 2809,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 171,
                'name' => 'Paraguari',
            ),
            309 => 
            array (
                'id' => 2810,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 171,
                'name' => 'Presidente Hayes',
            ),
            310 => 
            array (
                'id' => 2811,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 171,
                'name' => 'San Pedro',
            ),
            311 => 
            array (
                'id' => 2812,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 172,
                'name' => 'Amazonas',
            ),
            312 => 
            array (
                'id' => 2813,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 172,
                'name' => 'Ancash',
            ),
            313 => 
            array (
                'id' => 2814,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 172,
                'name' => 'Apurimac',
            ),
            314 => 
            array (
                'id' => 2815,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 172,
                'name' => 'Arequipa',
            ),
            315 => 
            array (
                'id' => 2816,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 172,
                'name' => 'Ayacucho',
            ),
            316 => 
            array (
                'id' => 2817,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 172,
                'name' => 'Cajamarca',
            ),
            317 => 
            array (
                'id' => 2818,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 172,
                'name' => 'Cusco',
            ),
            318 => 
            array (
                'id' => 2819,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 172,
                'name' => 'Huancavelica',
            ),
            319 => 
            array (
                'id' => 2820,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 172,
                'name' => 'Huanuco',
            ),
            320 => 
            array (
                'id' => 2821,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 172,
                'name' => 'Ica',
            ),
            321 => 
            array (
                'id' => 2822,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 172,
                'name' => 'Junin',
            ),
            322 => 
            array (
                'id' => 2823,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 172,
                'name' => 'La Libertad',
            ),
            323 => 
            array (
                'id' => 2824,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 172,
                'name' => 'Lambayeque',
            ),
            324 => 
            array (
                'id' => 2825,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 172,
                'name' => 'Lima y Callao',
            ),
            325 => 
            array (
                'id' => 2826,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 172,
                'name' => 'Loreto',
            ),
            326 => 
            array (
                'id' => 2827,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 172,
                'name' => 'Madre de Dios',
            ),
            327 => 
            array (
                'id' => 2828,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 172,
                'name' => 'Moquegua',
            ),
            328 => 
            array (
                'id' => 2829,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 172,
                'name' => 'Pasco',
            ),
            329 => 
            array (
                'id' => 2830,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 172,
                'name' => 'Piura',
            ),
            330 => 
            array (
                'id' => 2831,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 172,
                'name' => 'Puno',
            ),
            331 => 
            array (
                'id' => 2832,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 172,
                'name' => 'San Martin',
            ),
            332 => 
            array (
                'id' => 2833,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 172,
                'name' => 'Tacna',
            ),
            333 => 
            array (
                'id' => 2834,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 172,
                'name' => 'Tumbes',
            ),
            334 => 
            array (
                'id' => 2835,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 172,
                'name' => 'Ucayali',
            ),
            335 => 
            array (
                'id' => 2836,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 173,
                'name' => 'Batangas',
            ),
            336 => 
            array (
                'id' => 2837,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 173,
                'name' => 'Bicol',
            ),
            337 => 
            array (
                'id' => 2838,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 173,
                'name' => 'Bulacan',
            ),
            338 => 
            array (
                'id' => 2839,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 173,
                'name' => 'Cagayan',
            ),
            339 => 
            array (
                'id' => 2840,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 173,
                'name' => 'Caraga',
            ),
            340 => 
            array (
                'id' => 2841,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 173,
                'name' => 'Central Luzon',
            ),
            341 => 
            array (
                'id' => 2842,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 173,
                'name' => 'Central Mindanao',
            ),
            342 => 
            array (
                'id' => 2843,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 173,
                'name' => 'Central Visayas',
            ),
            343 => 
            array (
                'id' => 2844,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 173,
                'name' => 'Cordillera',
            ),
            344 => 
            array (
                'id' => 2845,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 173,
                'name' => 'Davao',
            ),
            345 => 
            array (
                'id' => 2846,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 173,
                'name' => 'Eastern Visayas',
            ),
            346 => 
            array (
                'id' => 2847,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 173,
                'name' => 'Greater Metropolitan Area',
            ),
            347 => 
            array (
                'id' => 2848,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 173,
                'name' => 'Ilocos',
            ),
            348 => 
            array (
                'id' => 2849,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 173,
                'name' => 'Laguna',
            ),
            349 => 
            array (
                'id' => 2850,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 173,
                'name' => 'Luzon',
            ),
            350 => 
            array (
                'id' => 2851,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 173,
                'name' => 'Mactan',
            ),
            351 => 
            array (
                'id' => 2852,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 173,
                'name' => 'Metropolitan Manila Area',
            ),
            352 => 
            array (
                'id' => 2853,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 173,
                'name' => 'Muslim Mindanao',
            ),
            353 => 
            array (
                'id' => 2854,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 173,
                'name' => 'Northern Mindanao',
            ),
            354 => 
            array (
                'id' => 2855,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 173,
                'name' => 'Southern Mindanao',
            ),
            355 => 
            array (
                'id' => 2856,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 173,
                'name' => 'Southern Tagalog',
            ),
            356 => 
            array (
                'id' => 2857,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 173,
                'name' => 'Western Mindanao',
            ),
            357 => 
            array (
                'id' => 2858,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 173,
                'name' => 'Western Visayas',
            ),
            358 => 
            array (
                'id' => 2859,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 174,
                'name' => 'Pitcairn Island',
            ),
            359 => 
            array (
                'id' => 2860,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 175,
                'name' => 'Biale Blota',
            ),
            360 => 
            array (
                'id' => 2861,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 175,
                'name' => 'Dobroszyce',
            ),
            361 => 
            array (
                'id' => 2862,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 175,
                'name' => 'Dolnoslaskie',
            ),
            362 => 
            array (
                'id' => 2863,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 175,
                'name' => 'Dziekanow Lesny',
            ),
            363 => 
            array (
                'id' => 2864,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 175,
                'name' => 'Hopowo',
            ),
            364 => 
            array (
                'id' => 2865,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 175,
                'name' => 'Kartuzy',
            ),
            365 => 
            array (
                'id' => 2866,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 175,
                'name' => 'Koscian',
            ),
            366 => 
            array (
                'id' => 2867,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 175,
                'name' => 'Krakow',
            ),
            367 => 
            array (
                'id' => 2868,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 175,
                'name' => 'Kujawsko-Pomorskie',
            ),
            368 => 
            array (
                'id' => 2869,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 175,
                'name' => 'Lodzkie',
            ),
            369 => 
            array (
                'id' => 2870,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 175,
                'name' => 'Lubelskie',
            ),
            370 => 
            array (
                'id' => 2871,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 175,
                'name' => 'Lubuskie',
            ),
            371 => 
            array (
                'id' => 2872,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 175,
                'name' => 'Malomice',
            ),
            372 => 
            array (
                'id' => 2873,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 175,
                'name' => 'Malopolskie',
            ),
            373 => 
            array (
                'id' => 2874,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 175,
                'name' => 'Mazowieckie',
            ),
            374 => 
            array (
                'id' => 2875,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 175,
                'name' => 'Mirkow',
            ),
            375 => 
            array (
                'id' => 2876,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 175,
                'name' => 'Opolskie',
            ),
            376 => 
            array (
                'id' => 2877,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 175,
                'name' => 'Ostrowiec',
            ),
            377 => 
            array (
                'id' => 2878,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 175,
                'name' => 'Podkarpackie',
            ),
            378 => 
            array (
                'id' => 2879,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 175,
                'name' => 'Podlaskie',
            ),
            379 => 
            array (
                'id' => 2880,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 175,
                'name' => 'Polska',
            ),
            380 => 
            array (
                'id' => 2881,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 175,
                'name' => 'Pomorskie',
            ),
            381 => 
            array (
                'id' => 2882,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 175,
                'name' => 'Poznan',
            ),
            382 => 
            array (
                'id' => 2883,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 175,
                'name' => 'Pruszkow',
            ),
            383 => 
            array (
                'id' => 2884,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 175,
                'name' => 'Rymanowska',
            ),
            384 => 
            array (
                'id' => 2885,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 175,
                'name' => 'Rzeszow',
            ),
            385 => 
            array (
                'id' => 2886,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 175,
                'name' => 'Slaskie',
            ),
            386 => 
            array (
                'id' => 2887,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 175,
                'name' => 'Stare Pole',
            ),
            387 => 
            array (
                'id' => 2888,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 175,
                'name' => 'Swietokrzyskie',
            ),
            388 => 
            array (
                'id' => 2889,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 175,
                'name' => 'Warminsko-Mazurskie',
            ),
            389 => 
            array (
                'id' => 2890,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 175,
                'name' => 'Warsaw',
            ),
            390 => 
            array (
                'id' => 2891,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 175,
                'name' => 'Wejherowo',
            ),
            391 => 
            array (
                'id' => 2892,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 175,
                'name' => 'Wielkopolskie',
            ),
            392 => 
            array (
                'id' => 2893,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 175,
                'name' => 'Wroclaw',
            ),
            393 => 
            array (
                'id' => 2894,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 175,
                'name' => 'Zachodnio-Pomorskie',
            ),
            394 => 
            array (
                'id' => 2895,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 175,
                'name' => 'Zukowo',
            ),
            395 => 
            array (
                'id' => 2896,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 176,
                'name' => 'Abrantes',
            ),
            396 => 
            array (
                'id' => 2897,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 176,
                'name' => 'Acores',
            ),
            397 => 
            array (
                'id' => 2898,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 176,
                'name' => 'Alentejo',
            ),
            398 => 
            array (
                'id' => 2899,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 176,
                'name' => 'Algarve',
            ),
            399 => 
            array (
                'id' => 2900,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 176,
                'name' => 'Braga',
            ),
            400 => 
            array (
                'id' => 2901,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 176,
                'name' => 'Centro',
            ),
            401 => 
            array (
                'id' => 2902,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 176,
                'name' => 'Distrito de Leiria',
            ),
            402 => 
            array (
                'id' => 2903,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 176,
                'name' => 'Distrito de Viana do Castelo',
            ),
            403 => 
            array (
                'id' => 2904,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 176,
                'name' => 'Distrito de Vila Real',
            ),
            404 => 
            array (
                'id' => 2905,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 176,
                'name' => 'Distrito do Porto',
            ),
            405 => 
            array (
                'id' => 2906,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 176,
                'name' => 'Lisboa e Vale do Tejo',
            ),
            406 => 
            array (
                'id' => 2907,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 176,
                'name' => 'Madeira',
            ),
            407 => 
            array (
                'id' => 2908,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 176,
                'name' => 'Norte',
            ),
            408 => 
            array (
                'id' => 2909,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 176,
                'name' => 'Paivas',
            ),
            409 => 
            array (
                'id' => 2910,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 177,
                'name' => 'Arecibo',
            ),
            410 => 
            array (
                'id' => 2911,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 177,
                'name' => 'Bayamon',
            ),
            411 => 
            array (
                'id' => 2912,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 177,
                'name' => 'Carolina',
            ),
            412 => 
            array (
                'id' => 2913,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 177,
                'name' => 'Florida',
            ),
            413 => 
            array (
                'id' => 2914,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 177,
                'name' => 'Guayama',
            ),
            414 => 
            array (
                'id' => 2915,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 177,
                'name' => 'Humacao',
            ),
            415 => 
            array (
                'id' => 2916,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 177,
                'name' => 'Mayaguez-Aguadilla',
            ),
            416 => 
            array (
                'id' => 2917,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 177,
                'name' => 'Ponce',
            ),
            417 => 
            array (
                'id' => 2918,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 177,
                'name' => 'Salinas',
            ),
            418 => 
            array (
                'id' => 2919,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 177,
                'name' => 'San Juan',
            ),
            419 => 
            array (
                'id' => 2920,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 178,
                'name' => 'Doha',
            ),
            420 => 
            array (
                'id' => 2921,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 178,
                'name' => 'Jarian-al-Batnah',
            ),
            421 => 
            array (
                'id' => 2922,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 178,
                'name' => 'Umm Salal',
            ),
            422 => 
            array (
                'id' => 2923,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 178,
                'name' => 'ad-Dawhah',
            ),
            423 => 
            array (
                'id' => 2924,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 178,
                'name' => 'al-Ghuwayriyah',
            ),
            424 => 
            array (
                'id' => 2925,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 178,
                'name' => 'al-Jumayliyah',
            ),
            425 => 
            array (
                'id' => 2926,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 178,
                'name' => 'al-Khawr',
            ),
            426 => 
            array (
                'id' => 2927,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 178,
                'name' => 'al-Wakrah',
            ),
            427 => 
            array (
                'id' => 2928,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 178,
                'name' => 'ar-Rayyan',
            ),
            428 => 
            array (
                'id' => 2929,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 178,
                'name' => 'ash-Shamal',
            ),
            429 => 
            array (
                'id' => 2930,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 179,
                'name' => 'Saint-Benoit',
            ),
            430 => 
            array (
                'id' => 2931,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 179,
                'name' => 'Saint-Denis',
            ),
            431 => 
            array (
                'id' => 2932,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 179,
                'name' => 'Saint-Paul',
            ),
            432 => 
            array (
                'id' => 2933,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 179,
                'name' => 'Saint-Pierre',
            ),
            433 => 
            array (
                'id' => 2934,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 180,
                'name' => 'Alba',
            ),
            434 => 
            array (
                'id' => 2935,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 180,
                'name' => 'Arad',
            ),
            435 => 
            array (
                'id' => 2936,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 180,
                'name' => 'Arges',
            ),
            436 => 
            array (
                'id' => 2937,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 180,
                'name' => 'Bacau',
            ),
            437 => 
            array (
                'id' => 2938,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 180,
                'name' => 'Bihor',
            ),
            438 => 
            array (
                'id' => 2939,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 180,
                'name' => 'Bistrita-Nasaud',
            ),
            439 => 
            array (
                'id' => 2940,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 180,
                'name' => 'Botosani',
            ),
            440 => 
            array (
                'id' => 2941,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 180,
                'name' => 'Braila',
            ),
            441 => 
            array (
                'id' => 2942,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 180,
                'name' => 'Brasov',
            ),
            442 => 
            array (
                'id' => 2943,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 180,
                'name' => 'Bucuresti',
            ),
            443 => 
            array (
                'id' => 2944,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 180,
                'name' => 'Buzau',
            ),
            444 => 
            array (
                'id' => 2945,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 180,
                'name' => 'Calarasi',
            ),
            445 => 
            array (
                'id' => 2946,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 180,
                'name' => 'Caras-Severin',
            ),
            446 => 
            array (
                'id' => 2947,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 180,
                'name' => 'Cluj',
            ),
            447 => 
            array (
                'id' => 2948,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 180,
                'name' => 'Constanta',
            ),
            448 => 
            array (
                'id' => 2949,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 180,
                'name' => 'Covasna',
            ),
            449 => 
            array (
                'id' => 2950,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 180,
                'name' => 'Dambovita',
            ),
            450 => 
            array (
                'id' => 2951,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 180,
                'name' => 'Dolj',
            ),
            451 => 
            array (
                'id' => 2952,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 180,
                'name' => 'Galati',
            ),
            452 => 
            array (
                'id' => 2953,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 180,
                'name' => 'Giurgiu',
            ),
            453 => 
            array (
                'id' => 2954,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 180,
                'name' => 'Gorj',
            ),
            454 => 
            array (
                'id' => 2955,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 180,
                'name' => 'Harghita',
            ),
            455 => 
            array (
                'id' => 2956,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 180,
                'name' => 'Hunedoara',
            ),
            456 => 
            array (
                'id' => 2957,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 180,
                'name' => 'Ialomita',
            ),
            457 => 
            array (
                'id' => 2958,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 180,
                'name' => 'Iasi',
            ),
            458 => 
            array (
                'id' => 2959,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 180,
                'name' => 'Ilfov',
            ),
            459 => 
            array (
                'id' => 2960,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 180,
                'name' => 'Maramures',
            ),
            460 => 
            array (
                'id' => 2961,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 180,
                'name' => 'Mehedinti',
            ),
            461 => 
            array (
                'id' => 2962,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 180,
                'name' => 'Mures',
            ),
            462 => 
            array (
                'id' => 2963,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 180,
                'name' => 'Neamt',
            ),
            463 => 
            array (
                'id' => 2964,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 180,
                'name' => 'Olt',
            ),
            464 => 
            array (
                'id' => 2965,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 180,
                'name' => 'Prahova',
            ),
            465 => 
            array (
                'id' => 2966,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 180,
                'name' => 'Salaj',
            ),
            466 => 
            array (
                'id' => 2967,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 180,
                'name' => 'Satu Mare',
            ),
            467 => 
            array (
                'id' => 2968,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 180,
                'name' => 'Sibiu',
            ),
            468 => 
            array (
                'id' => 2969,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 180,
                'name' => 'Sondelor',
            ),
            469 => 
            array (
                'id' => 2970,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 180,
                'name' => 'Suceava',
            ),
            470 => 
            array (
                'id' => 2971,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 180,
                'name' => 'Teleorman',
            ),
            471 => 
            array (
                'id' => 2972,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 180,
                'name' => 'Timis',
            ),
            472 => 
            array (
                'id' => 2973,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 180,
                'name' => 'Tulcea',
            ),
            473 => 
            array (
                'id' => 2974,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 180,
                'name' => 'Valcea',
            ),
            474 => 
            array (
                'id' => 2975,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 180,
                'name' => 'Vaslui',
            ),
            475 => 
            array (
                'id' => 2976,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 180,
                'name' => 'Vrancea',
            ),
            476 => 
            array (
                'id' => 2977,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 181,
                'name' => 'Adygeja',
            ),
            477 => 
            array (
                'id' => 2978,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 181,
                'name' => 'Aga',
            ),
            478 => 
            array (
                'id' => 2979,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 181,
                'name' => 'Alanija',
            ),
            479 => 
            array (
                'id' => 2980,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 181,
                'name' => 'Altaj',
            ),
            480 => 
            array (
                'id' => 2981,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 181,
                'name' => 'Amur',
            ),
            481 => 
            array (
                'id' => 2982,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 181,
                'name' => 'Arhangelsk',
            ),
            482 => 
            array (
                'id' => 2983,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 181,
                'name' => 'Astrahan',
            ),
            483 => 
            array (
                'id' => 2984,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 181,
                'name' => 'Bashkortostan',
            ),
            484 => 
            array (
                'id' => 2985,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 181,
                'name' => 'Belgorod',
            ),
            485 => 
            array (
                'id' => 2986,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 181,
                'name' => 'Brjansk',
            ),
            486 => 
            array (
                'id' => 2987,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 181,
                'name' => 'Burjatija',
            ),
            487 => 
            array (
                'id' => 2988,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 181,
                'name' => 'Chechenija',
            ),
            488 => 
            array (
                'id' => 2989,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 181,
                'name' => 'Cheljabinsk',
            ),
            489 => 
            array (
                'id' => 2990,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 181,
                'name' => 'Chita',
            ),
            490 => 
            array (
                'id' => 2991,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 181,
                'name' => 'Chukotka',
            ),
            491 => 
            array (
                'id' => 2992,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 181,
                'name' => 'Chuvashija',
            ),
            492 => 
            array (
                'id' => 2993,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 181,
                'name' => 'Dagestan',
            ),
            493 => 
            array (
                'id' => 2994,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 181,
                'name' => 'Evenkija',
            ),
            494 => 
            array (
                'id' => 2995,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 181,
                'name' => 'Gorno-Altaj',
            ),
            495 => 
            array (
                'id' => 2996,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 181,
                'name' => 'Habarovsk',
            ),
            496 => 
            array (
                'id' => 2997,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 181,
                'name' => 'Hakasija',
            ),
            497 => 
            array (
                'id' => 2998,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 181,
                'name' => 'Hanty-Mansija',
            ),
            498 => 
            array (
                'id' => 2999,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 181,
                'name' => 'Ingusetija',
            ),
            499 => 
            array (
                'id' => 3000,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 181,
                'name' => 'Irkutsk',
            ),
        ));
        \DB::table('states')->insert(array (
            0 => 
            array (
                'id' => 3001,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 181,
                'name' => 'Ivanovo',
            ),
            1 => 
            array (
                'id' => 3002,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 181,
                'name' => 'Jamalo-Nenets',
            ),
            2 => 
            array (
                'id' => 3003,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 181,
                'name' => 'Jaroslavl',
            ),
            3 => 
            array (
                'id' => 3004,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 181,
                'name' => 'Jevrej',
            ),
            4 => 
            array (
                'id' => 3005,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 181,
                'name' => 'Kabardino-Balkarija',
            ),
            5 => 
            array (
                'id' => 3006,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 181,
                'name' => 'Kaliningrad',
            ),
            6 => 
            array (
                'id' => 3007,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 181,
                'name' => 'Kalmykija',
            ),
            7 => 
            array (
                'id' => 3008,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 181,
                'name' => 'Kaluga',
            ),
            8 => 
            array (
                'id' => 3009,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 181,
                'name' => 'Kamchatka',
            ),
            9 => 
            array (
                'id' => 3010,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 181,
                'name' => 'Karachaj-Cherkessija',
            ),
            10 => 
            array (
                'id' => 3011,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 181,
                'name' => 'Karelija',
            ),
            11 => 
            array (
                'id' => 3012,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 181,
                'name' => 'Kemerovo',
            ),
            12 => 
            array (
                'id' => 3013,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 181,
                'name' => 'Khabarovskiy Kray',
            ),
            13 => 
            array (
                'id' => 3014,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 181,
                'name' => 'Kirov',
            ),
            14 => 
            array (
                'id' => 3015,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 181,
                'name' => 'Komi',
            ),
            15 => 
            array (
                'id' => 3016,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 181,
                'name' => 'Komi-Permjakija',
            ),
            16 => 
            array (
                'id' => 3017,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 181,
                'name' => 'Korjakija',
            ),
            17 => 
            array (
                'id' => 3018,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 181,
                'name' => 'Kostroma',
            ),
            18 => 
            array (
                'id' => 3019,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 181,
                'name' => 'Krasnodar',
            ),
            19 => 
            array (
                'id' => 3020,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 181,
                'name' => 'Krasnojarsk',
            ),
            20 => 
            array (
                'id' => 3021,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 181,
                'name' => 'Krasnoyarskiy Kray',
            ),
            21 => 
            array (
                'id' => 3022,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 181,
                'name' => 'Kurgan',
            ),
            22 => 
            array (
                'id' => 3023,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 181,
                'name' => 'Kursk',
            ),
            23 => 
            array (
                'id' => 3024,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 181,
                'name' => 'Leningrad',
            ),
            24 => 
            array (
                'id' => 3025,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 181,
                'name' => 'Lipeck',
            ),
            25 => 
            array (
                'id' => 3026,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 181,
                'name' => 'Magadan',
            ),
            26 => 
            array (
                'id' => 3027,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 181,
                'name' => 'Marij El',
            ),
            27 => 
            array (
                'id' => 3028,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 181,
                'name' => 'Mordovija',
            ),
            28 => 
            array (
                'id' => 3029,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 181,
                'name' => 'Moscow',
            ),
            29 => 
            array (
                'id' => 3030,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 181,
                'name' => 'Moskovskaja Oblast',
            ),
            30 => 
            array (
                'id' => 3031,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 181,
                'name' => 'Moskovskaya Oblast',
            ),
            31 => 
            array (
                'id' => 3032,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 181,
                'name' => 'Moskva',
            ),
            32 => 
            array (
                'id' => 3033,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 181,
                'name' => 'Murmansk',
            ),
            33 => 
            array (
                'id' => 3034,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 181,
                'name' => 'Nenets',
            ),
            34 => 
            array (
                'id' => 3035,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 181,
                'name' => 'Nizhnij Novgorod',
            ),
            35 => 
            array (
                'id' => 3036,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 181,
                'name' => 'Novgorod',
            ),
            36 => 
            array (
                'id' => 3037,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 181,
                'name' => 'Novokusnezk',
            ),
            37 => 
            array (
                'id' => 3038,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 181,
                'name' => 'Novosibirsk',
            ),
            38 => 
            array (
                'id' => 3039,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 181,
                'name' => 'Omsk',
            ),
            39 => 
            array (
                'id' => 3040,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 181,
                'name' => 'Orenburg',
            ),
            40 => 
            array (
                'id' => 3041,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 181,
                'name' => 'Orjol',
            ),
            41 => 
            array (
                'id' => 3042,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 181,
                'name' => 'Penza',
            ),
            42 => 
            array (
                'id' => 3043,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 181,
                'name' => 'Perm',
            ),
            43 => 
            array (
                'id' => 3044,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 181,
                'name' => 'Primorje',
            ),
            44 => 
            array (
                'id' => 3045,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 181,
                'name' => 'Pskov',
            ),
            45 => 
            array (
                'id' => 3046,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 181,
                'name' => 'Pskovskaya Oblast',
            ),
            46 => 
            array (
                'id' => 3047,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 181,
                'name' => 'Rjazan',
            ),
            47 => 
            array (
                'id' => 3048,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 181,
                'name' => 'Rostov',
            ),
            48 => 
            array (
                'id' => 3049,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 181,
                'name' => 'Saha',
            ),
            49 => 
            array (
                'id' => 3050,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 181,
                'name' => 'Sahalin',
            ),
            50 => 
            array (
                'id' => 3051,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 181,
                'name' => 'Samara',
            ),
            51 => 
            array (
                'id' => 3052,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 181,
                'name' => 'Samarskaya',
            ),
            52 => 
            array (
                'id' => 3053,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 181,
                'name' => 'Sankt-Peterburg',
            ),
            53 => 
            array (
                'id' => 3054,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 181,
                'name' => 'Saratov',
            ),
            54 => 
            array (
                'id' => 3055,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 181,
                'name' => 'Smolensk',
            ),
            55 => 
            array (
                'id' => 3056,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 181,
                'name' => 'Stavropol',
            ),
            56 => 
            array (
                'id' => 3057,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 181,
                'name' => 'Sverdlovsk',
            ),
            57 => 
            array (
                'id' => 3058,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 181,
                'name' => 'Tajmyrija',
            ),
            58 => 
            array (
                'id' => 3059,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 181,
                'name' => 'Tambov',
            ),
            59 => 
            array (
                'id' => 3060,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 181,
                'name' => 'Tatarstan',
            ),
            60 => 
            array (
                'id' => 3061,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 181,
                'name' => 'Tjumen',
            ),
            61 => 
            array (
                'id' => 3062,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 181,
                'name' => 'Tomsk',
            ),
            62 => 
            array (
                'id' => 3063,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 181,
                'name' => 'Tula',
            ),
            63 => 
            array (
                'id' => 3064,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 181,
                'name' => 'Tver',
            ),
            64 => 
            array (
                'id' => 3065,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 181,
                'name' => 'Tyva',
            ),
            65 => 
            array (
                'id' => 3066,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 181,
                'name' => 'Udmurtija',
            ),
            66 => 
            array (
                'id' => 3067,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 181,
                'name' => 'Uljanovsk',
            ),
            67 => 
            array (
                'id' => 3068,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 181,
                'name' => 'Ulyanovskaya Oblast',
            ),
            68 => 
            array (
                'id' => 3069,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 181,
                'name' => 'Ust-Orda',
            ),
            69 => 
            array (
                'id' => 3070,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 181,
                'name' => 'Vladimir',
            ),
            70 => 
            array (
                'id' => 3071,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 181,
                'name' => 'Volgograd',
            ),
            71 => 
            array (
                'id' => 3072,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 181,
                'name' => 'Vologda',
            ),
            72 => 
            array (
                'id' => 3073,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 181,
                'name' => 'Voronezh',
            ),
            73 => 
            array (
                'id' => 3074,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 182,
                'name' => 'Butare',
            ),
            74 => 
            array (
                'id' => 3075,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 182,
                'name' => 'Byumba',
            ),
            75 => 
            array (
                'id' => 3076,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 182,
                'name' => 'Cyangugu',
            ),
            76 => 
            array (
                'id' => 3077,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 182,
                'name' => 'Gikongoro',
            ),
            77 => 
            array (
                'id' => 3078,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 182,
                'name' => 'Gisenyi',
            ),
            78 => 
            array (
                'id' => 3079,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 182,
                'name' => 'Gitarama',
            ),
            79 => 
            array (
                'id' => 3080,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 182,
                'name' => 'Kibungo',
            ),
            80 => 
            array (
                'id' => 3081,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 182,
                'name' => 'Kibuye',
            ),
            81 => 
            array (
                'id' => 3082,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 182,
                'name' => 'Kigali-ngali',
            ),
            82 => 
            array (
                'id' => 3083,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 182,
                'name' => 'Ruhengeri',
            ),
            83 => 
            array (
                'id' => 3084,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 183,
                'name' => 'Ascension',
            ),
            84 => 
            array (
                'id' => 3085,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 183,
                'name' => 'Gough Island',
            ),
            85 => 
            array (
                'id' => 3086,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 183,
                'name' => 'Saint Helena',
            ),
            86 => 
            array (
                'id' => 3087,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 183,
                'name' => 'Tristan da Cunha',
            ),
            87 => 
            array (
                'id' => 3088,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 184,
                'name' => 'Christ Church Nichola Town',
            ),
            88 => 
            array (
                'id' => 3089,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 184,
                'name' => 'Saint Anne Sandy Point',
            ),
            89 => 
            array (
                'id' => 3090,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 184,
                'name' => 'Saint George Basseterre',
            ),
            90 => 
            array (
                'id' => 3091,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 184,
                'name' => 'Saint George Gingerland',
            ),
            91 => 
            array (
                'id' => 3092,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 184,
                'name' => 'Saint James Windward',
            ),
            92 => 
            array (
                'id' => 3093,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 184,
                'name' => 'Saint John Capesterre',
            ),
            93 => 
            array (
                'id' => 3094,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 184,
                'name' => 'Saint John Figtree',
            ),
            94 => 
            array (
                'id' => 3095,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 184,
                'name' => 'Saint Mary Cayon',
            ),
            95 => 
            array (
                'id' => 3096,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 184,
                'name' => 'Saint Paul Capesterre',
            ),
            96 => 
            array (
                'id' => 3097,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 184,
                'name' => 'Saint Paul Charlestown',
            ),
            97 => 
            array (
                'id' => 3098,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 184,
                'name' => 'Saint Peter Basseterre',
            ),
            98 => 
            array (
                'id' => 3099,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 184,
                'name' => 'Saint Thomas Lowland',
            ),
            99 => 
            array (
                'id' => 3100,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 184,
                'name' => 'Saint Thomas Middle Island',
            ),
            100 => 
            array (
                'id' => 3101,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 184,
                'name' => 'Trinity Palmetto Point',
            ),
            101 => 
            array (
                'id' => 3102,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 185,
                'name' => 'Anse-la-Raye',
            ),
            102 => 
            array (
                'id' => 3103,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 185,
                'name' => 'Canaries',
            ),
            103 => 
            array (
                'id' => 3104,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 185,
                'name' => 'Castries',
            ),
            104 => 
            array (
                'id' => 3105,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 185,
                'name' => 'Choiseul',
            ),
            105 => 
            array (
                'id' => 3106,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 185,
                'name' => 'Dennery',
            ),
            106 => 
            array (
                'id' => 3107,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 185,
                'name' => 'Gros Inlet',
            ),
            107 => 
            array (
                'id' => 3108,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 185,
                'name' => 'Laborie',
            ),
            108 => 
            array (
                'id' => 3109,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 185,
                'name' => 'Micoud',
            ),
            109 => 
            array (
                'id' => 3110,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 185,
                'name' => 'Soufriere',
            ),
            110 => 
            array (
                'id' => 3111,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 185,
                'name' => 'Vieux Fort',
            ),
            111 => 
            array (
                'id' => 3112,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 186,
                'name' => 'Miquelon-Langlade',
            ),
            112 => 
            array (
                'id' => 3113,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 186,
                'name' => 'Saint-Pierre',
            ),
            113 => 
            array (
                'id' => 3114,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 187,
                'name' => 'Charlotte',
            ),
            114 => 
            array (
                'id' => 3115,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 187,
                'name' => 'Grenadines',
            ),
            115 => 
            array (
                'id' => 3116,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 187,
                'name' => 'Saint Andrew',
            ),
            116 => 
            array (
                'id' => 3117,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 187,
                'name' => 'Saint David',
            ),
            117 => 
            array (
                'id' => 3118,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 187,
                'name' => 'Saint George',
            ),
            118 => 
            array (
                'id' => 3119,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 187,
                'name' => 'Saint Patrick',
            ),
            119 => 
            array (
                'id' => 3120,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 188,
                'name' => 'A\'ana',
            ),
            120 => 
            array (
                'id' => 3121,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 188,
                'name' => 'Aiga-i-le-Tai',
            ),
            121 => 
            array (
                'id' => 3122,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 188,
                'name' => 'Atua',
            ),
            122 => 
            array (
                'id' => 3123,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 188,
                'name' => 'Fa\'asaleleaga',
            ),
            123 => 
            array (
                'id' => 3124,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 188,
                'name' => 'Gaga\'emauga',
            ),
            124 => 
            array (
                'id' => 3125,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 188,
                'name' => 'Gagaifomauga',
            ),
            125 => 
            array (
                'id' => 3126,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 188,
                'name' => 'Palauli',
            ),
            126 => 
            array (
                'id' => 3127,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 188,
                'name' => 'Satupa\'itea',
            ),
            127 => 
            array (
                'id' => 3128,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 188,
                'name' => 'Tuamasaga',
            ),
            128 => 
            array (
                'id' => 3129,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 188,
                'name' => 'Va\'a-o-Fonoti',
            ),
            129 => 
            array (
                'id' => 3130,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 188,
                'name' => 'Vaisigano',
            ),
            130 => 
            array (
                'id' => 3131,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 189,
                'name' => 'Acquaviva',
            ),
            131 => 
            array (
                'id' => 3132,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 189,
                'name' => 'Borgo Maggiore',
            ),
            132 => 
            array (
                'id' => 3133,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 189,
                'name' => 'Chiesanuova',
            ),
            133 => 
            array (
                'id' => 3134,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 189,
                'name' => 'Domagnano',
            ),
            134 => 
            array (
                'id' => 3135,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 189,
                'name' => 'Faetano',
            ),
            135 => 
            array (
                'id' => 3136,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 189,
                'name' => 'Fiorentino',
            ),
            136 => 
            array (
                'id' => 3137,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 189,
                'name' => 'Montegiardino',
            ),
            137 => 
            array (
                'id' => 3138,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 189,
                'name' => 'San Marino',
            ),
            138 => 
            array (
                'id' => 3139,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 189,
                'name' => 'Serravalle',
            ),
            139 => 
            array (
                'id' => 3140,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 190,
                'name' => 'Agua Grande',
            ),
            140 => 
            array (
                'id' => 3141,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 190,
                'name' => 'Cantagalo',
            ),
            141 => 
            array (
                'id' => 3142,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 190,
                'name' => 'Lemba',
            ),
            142 => 
            array (
                'id' => 3143,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 190,
                'name' => 'Lobata',
            ),
            143 => 
            array (
                'id' => 3144,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 190,
                'name' => 'Me-Zochi',
            ),
            144 => 
            array (
                'id' => 3145,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 190,
                'name' => 'Pague',
            ),
            145 => 
            array (
                'id' => 3146,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 191,
                'name' => 'Al Khobar',
            ),
            146 => 
            array (
                'id' => 3147,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 191,
                'name' => 'Aseer',
            ),
            147 => 
            array (
                'id' => 3148,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 191,
                'name' => 'Ash Sharqiyah',
            ),
            148 => 
            array (
                'id' => 3149,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 191,
                'name' => 'Asir',
            ),
            149 => 
            array (
                'id' => 3150,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 191,
                'name' => 'Central Province',
            ),
            150 => 
            array (
                'id' => 3151,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 191,
                'name' => 'Eastern Province',
            ),
            151 => 
            array (
                'id' => 3152,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 191,
                'name' => 'Ha\'il',
            ),
            152 => 
            array (
                'id' => 3153,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 191,
                'name' => 'Jawf',
            ),
            153 => 
            array (
                'id' => 3154,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 191,
                'name' => 'Jizan',
            ),
            154 => 
            array (
                'id' => 3155,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 191,
                'name' => 'Makkah',
            ),
            155 => 
            array (
                'id' => 3156,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 191,
                'name' => 'Najran',
            ),
            156 => 
            array (
                'id' => 3157,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 191,
                'name' => 'Qasim',
            ),
            157 => 
            array (
                'id' => 3158,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 191,
                'name' => 'Tabuk',
            ),
            158 => 
            array (
                'id' => 3159,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 191,
                'name' => 'Western Province',
            ),
            159 => 
            array (
                'id' => 3160,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 191,
                'name' => 'al-Bahah',
            ),
            160 => 
            array (
                'id' => 3161,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 191,
                'name' => 'al-Hudud-ash-Shamaliyah',
            ),
            161 => 
            array (
                'id' => 3162,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 191,
                'name' => 'al-Madinah',
            ),
            162 => 
            array (
                'id' => 3163,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 191,
                'name' => 'ar-Riyad',
            ),
            163 => 
            array (
                'id' => 3164,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 192,
                'name' => 'Dakar',
            ),
            164 => 
            array (
                'id' => 3165,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 192,
                'name' => 'Diourbel',
            ),
            165 => 
            array (
                'id' => 3166,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 192,
                'name' => 'Fatick',
            ),
            166 => 
            array (
                'id' => 3167,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 192,
                'name' => 'Kaolack',
            ),
            167 => 
            array (
                'id' => 3168,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 192,
                'name' => 'Kolda',
            ),
            168 => 
            array (
                'id' => 3169,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 192,
                'name' => 'Louga',
            ),
            169 => 
            array (
                'id' => 3170,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 192,
                'name' => 'Saint-Louis',
            ),
            170 => 
            array (
                'id' => 3171,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 192,
                'name' => 'Tambacounda',
            ),
            171 => 
            array (
                'id' => 3172,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 192,
                'name' => 'Thies',
            ),
            172 => 
            array (
                'id' => 3173,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 192,
                'name' => 'Ziguinchor',
            ),
            173 => 
            array (
                'id' => 3174,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 193,
                'name' => 'Central Serbia',
            ),
            174 => 
            array (
                'id' => 3175,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 193,
                'name' => 'Kosovo and Metohija',
            ),
            175 => 
            array (
                'id' => 3176,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 193,
                'name' => 'Vojvodina',
            ),
            176 => 
            array (
                'id' => 3177,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 194,
                'name' => 'Anse Boileau',
            ),
            177 => 
            array (
                'id' => 3178,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 194,
                'name' => 'Anse Royale',
            ),
            178 => 
            array (
                'id' => 3179,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 194,
                'name' => 'Cascade',
            ),
            179 => 
            array (
                'id' => 3180,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 194,
                'name' => 'Takamaka',
            ),
            180 => 
            array (
                'id' => 3181,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 194,
                'name' => 'Victoria',
            ),
            181 => 
            array (
                'id' => 3182,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 195,
                'name' => 'Eastern',
            ),
            182 => 
            array (
                'id' => 3183,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 195,
                'name' => 'Northern',
            ),
            183 => 
            array (
                'id' => 3184,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 195,
                'name' => 'Southern',
            ),
            184 => 
            array (
                'id' => 3185,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 195,
                'name' => 'Western',
            ),
            185 => 
            array (
                'id' => 3186,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 196,
                'name' => 'Singapore',
            ),
            186 => 
            array (
                'id' => 3187,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 197,
                'name' => 'Banskobystricky',
            ),
            187 => 
            array (
                'id' => 3188,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 197,
                'name' => 'Bratislavsky',
            ),
            188 => 
            array (
                'id' => 3189,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 197,
                'name' => 'Kosicky',
            ),
            189 => 
            array (
                'id' => 3190,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 197,
                'name' => 'Nitriansky',
            ),
            190 => 
            array (
                'id' => 3191,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 197,
                'name' => 'Presovsky',
            ),
            191 => 
            array (
                'id' => 3192,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 197,
                'name' => 'Trenciansky',
            ),
            192 => 
            array (
                'id' => 3193,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 197,
                'name' => 'Trnavsky',
            ),
            193 => 
            array (
                'id' => 3194,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 197,
                'name' => 'Zilinsky',
            ),
            194 => 
            array (
                'id' => 3195,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 198,
                'name' => 'Benedikt',
            ),
            195 => 
            array (
                'id' => 3196,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 198,
                'name' => 'Gorenjska',
            ),
            196 => 
            array (
                'id' => 3197,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 198,
                'name' => 'Gorishka',
            ),
            197 => 
            array (
                'id' => 3198,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 198,
                'name' => 'Jugovzhodna Slovenija',
            ),
            198 => 
            array (
                'id' => 3199,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 198,
                'name' => 'Koroshka',
            ),
            199 => 
            array (
                'id' => 3200,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 198,
                'name' => 'Notranjsko-krashka',
            ),
            200 => 
            array (
                'id' => 3201,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 198,
                'name' => 'Obalno-krashka',
            ),
            201 => 
            array (
                'id' => 3202,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 198,
                'name' => 'Obcina Domzale',
            ),
            202 => 
            array (
                'id' => 3203,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 198,
                'name' => 'Obcina Vitanje',
            ),
            203 => 
            array (
                'id' => 3204,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 198,
                'name' => 'Osrednjeslovenska',
            ),
            204 => 
            array (
                'id' => 3205,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 198,
                'name' => 'Podravska',
            ),
            205 => 
            array (
                'id' => 3206,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 198,
                'name' => 'Pomurska',
            ),
            206 => 
            array (
                'id' => 3207,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 198,
                'name' => 'Savinjska',
            ),
            207 => 
            array (
                'id' => 3208,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 198,
                'name' => 'Slovenian Littoral',
            ),
            208 => 
            array (
                'id' => 3209,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 198,
                'name' => 'Spodnjeposavska',
            ),
            209 => 
            array (
                'id' => 3210,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 198,
                'name' => 'Zasavska',
            ),
            210 => 
            array (
                'id' => 3211,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 199,
                'name' => 'Pitcairn',
            ),
            211 => 
            array (
                'id' => 3212,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 200,
                'name' => 'Central',
            ),
            212 => 
            array (
                'id' => 3213,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 200,
                'name' => 'Choiseul',
            ),
            213 => 
            array (
                'id' => 3214,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 200,
                'name' => 'Guadalcanal',
            ),
            214 => 
            array (
                'id' => 3215,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 200,
                'name' => 'Isabel',
            ),
            215 => 
            array (
                'id' => 3216,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 200,
                'name' => 'Makira and Ulawa',
            ),
            216 => 
            array (
                'id' => 3217,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 200,
                'name' => 'Malaita',
            ),
            217 => 
            array (
                'id' => 3218,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 200,
                'name' => 'Rennell and Bellona',
            ),
            218 => 
            array (
                'id' => 3219,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 200,
                'name' => 'Temotu',
            ),
            219 => 
            array (
                'id' => 3220,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 200,
                'name' => 'Western',
            ),
            220 => 
            array (
                'id' => 3221,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 201,
                'name' => 'Awdal',
            ),
            221 => 
            array (
                'id' => 3222,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 201,
                'name' => 'Bakol',
            ),
            222 => 
            array (
                'id' => 3223,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 201,
                'name' => 'Banadir',
            ),
            223 => 
            array (
                'id' => 3224,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 201,
                'name' => 'Bari',
            ),
            224 => 
            array (
                'id' => 3225,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 201,
                'name' => 'Bay',
            ),
            225 => 
            array (
                'id' => 3226,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 201,
                'name' => 'Galgudug',
            ),
            226 => 
            array (
                'id' => 3227,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 201,
                'name' => 'Gedo',
            ),
            227 => 
            array (
                'id' => 3228,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 201,
                'name' => 'Hiran',
            ),
            228 => 
            array (
                'id' => 3229,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 201,
                'name' => 'Jubbada Hose',
            ),
            229 => 
            array (
                'id' => 3230,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 201,
                'name' => 'Jubbadha Dexe',
            ),
            230 => 
            array (
                'id' => 3231,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 201,
                'name' => 'Mudug',
            ),
            231 => 
            array (
                'id' => 3232,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 201,
                'name' => 'Nugal',
            ),
            232 => 
            array (
                'id' => 3233,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 201,
                'name' => 'Sanag',
            ),
            233 => 
            array (
                'id' => 3234,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 201,
                'name' => 'Shabellaha Dhexe',
            ),
            234 => 
            array (
                'id' => 3235,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 201,
                'name' => 'Shabellaha Hose',
            ),
            235 => 
            array (
                'id' => 3236,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 201,
                'name' => 'Togdher',
            ),
            236 => 
            array (
                'id' => 3237,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 201,
                'name' => 'Woqoyi Galbed',
            ),
            237 => 
            array (
                'id' => 3238,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 202,
                'name' => 'Eastern Cape',
            ),
            238 => 
            array (
                'id' => 3239,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 202,
                'name' => 'Free State',
            ),
            239 => 
            array (
                'id' => 3240,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 202,
                'name' => 'Gauteng',
            ),
            240 => 
            array (
                'id' => 3241,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 202,
                'name' => 'Kempton Park',
            ),
            241 => 
            array (
                'id' => 3242,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 202,
                'name' => 'Kramerville',
            ),
            242 => 
            array (
                'id' => 3243,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 202,
                'name' => 'KwaZulu Natal',
            ),
            243 => 
            array (
                'id' => 3244,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 202,
                'name' => 'Limpopo',
            ),
            244 => 
            array (
                'id' => 3245,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 202,
                'name' => 'Mpumalanga',
            ),
            245 => 
            array (
                'id' => 3246,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 202,
                'name' => 'North West',
            ),
            246 => 
            array (
                'id' => 3247,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 202,
                'name' => 'Northern Cape',
            ),
            247 => 
            array (
                'id' => 3248,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 202,
                'name' => 'Parow',
            ),
            248 => 
            array (
                'id' => 3249,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 202,
                'name' => 'Table View',
            ),
            249 => 
            array (
                'id' => 3250,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 202,
                'name' => 'Umtentweni',
            ),
            250 => 
            array (
                'id' => 3251,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 202,
                'name' => 'Western Cape',
            ),
            251 => 
            array (
                'id' => 3252,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 203,
                'name' => 'South Georgia',
            ),
            252 => 
            array (
                'id' => 3253,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 204,
                'name' => 'Central Equatoria',
            ),
            253 => 
            array (
                'id' => 3254,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 205,
                'name' => 'A Coruna',
            ),
            254 => 
            array (
                'id' => 3255,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 205,
                'name' => 'Alacant',
            ),
            255 => 
            array (
                'id' => 3256,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 205,
                'name' => 'Alava',
            ),
            256 => 
            array (
                'id' => 3257,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 205,
                'name' => 'Albacete',
            ),
            257 => 
            array (
                'id' => 3258,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 205,
                'name' => 'Almeria',
            ),
            258 => 
            array (
                'id' => 3259,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 205,
                'name' => 'Andalucia',
            ),
            259 => 
            array (
                'id' => 3260,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 205,
                'name' => 'Asturias',
            ),
            260 => 
            array (
                'id' => 3261,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 205,
                'name' => 'Avila',
            ),
            261 => 
            array (
                'id' => 3262,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 205,
                'name' => 'Badajoz',
            ),
            262 => 
            array (
                'id' => 3263,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 205,
                'name' => 'Balears',
            ),
            263 => 
            array (
                'id' => 3264,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 205,
                'name' => 'Barcelona',
            ),
            264 => 
            array (
                'id' => 3265,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 205,
                'name' => 'Bertamirans',
            ),
            265 => 
            array (
                'id' => 3266,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 205,
                'name' => 'Biscay',
            ),
            266 => 
            array (
                'id' => 3267,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 205,
                'name' => 'Burgos',
            ),
            267 => 
            array (
                'id' => 3268,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 205,
                'name' => 'Caceres',
            ),
            268 => 
            array (
                'id' => 3269,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 205,
                'name' => 'Cadiz',
            ),
            269 => 
            array (
                'id' => 3270,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 205,
                'name' => 'Cantabria',
            ),
            270 => 
            array (
                'id' => 3271,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 205,
                'name' => 'Castello',
            ),
            271 => 
            array (
                'id' => 3272,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 205,
                'name' => 'Catalunya',
            ),
            272 => 
            array (
                'id' => 3273,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 205,
                'name' => 'Ceuta',
            ),
            273 => 
            array (
                'id' => 3274,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 205,
                'name' => 'Ciudad Real',
            ),
            274 => 
            array (
                'id' => 3275,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 205,
                'name' => 'Comunidad Autonoma de Canarias',
            ),
            275 => 
            array (
                'id' => 3276,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 205,
                'name' => 'Comunidad Autonoma de Cataluna',
            ),
            276 => 
            array (
                'id' => 3277,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 205,
                'name' => 'Comunidad Autonoma de Galicia',
            ),
            277 => 
            array (
                'id' => 3278,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 205,
                'name' => 'Comunidad Autonoma de las Isla',
            ),
            278 => 
            array (
                'id' => 3279,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 205,
                'name' => 'Comunidad Autonoma del Princip',
            ),
            279 => 
            array (
                'id' => 3280,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 205,
                'name' => 'Comunidad Valenciana',
            ),
            280 => 
            array (
                'id' => 3281,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 205,
                'name' => 'Cordoba',
            ),
            281 => 
            array (
                'id' => 3282,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 205,
                'name' => 'Cuenca',
            ),
            282 => 
            array (
                'id' => 3283,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 205,
                'name' => 'Gipuzkoa',
            ),
            283 => 
            array (
                'id' => 3284,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 205,
                'name' => 'Girona',
            ),
            284 => 
            array (
                'id' => 3285,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 205,
                'name' => 'Granada',
            ),
            285 => 
            array (
                'id' => 3286,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 205,
                'name' => 'Guadalajara',
            ),
            286 => 
            array (
                'id' => 3287,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 205,
                'name' => 'Guipuzcoa',
            ),
            287 => 
            array (
                'id' => 3288,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 205,
                'name' => 'Huelva',
            ),
            288 => 
            array (
                'id' => 3289,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 205,
                'name' => 'Huesca',
            ),
            289 => 
            array (
                'id' => 3290,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 205,
                'name' => 'Jaen',
            ),
            290 => 
            array (
                'id' => 3291,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 205,
                'name' => 'La Rioja',
            ),
            291 => 
            array (
                'id' => 3292,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 205,
                'name' => 'Las Palmas',
            ),
            292 => 
            array (
                'id' => 3293,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 205,
                'name' => 'Leon',
            ),
            293 => 
            array (
                'id' => 3294,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 205,
                'name' => 'Lerida',
            ),
            294 => 
            array (
                'id' => 3295,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 205,
                'name' => 'Lleida',
            ),
            295 => 
            array (
                'id' => 3296,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 205,
                'name' => 'Lugo',
            ),
            296 => 
            array (
                'id' => 3297,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 205,
                'name' => 'Madrid',
            ),
            297 => 
            array (
                'id' => 3298,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 205,
                'name' => 'Malaga',
            ),
            298 => 
            array (
                'id' => 3299,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 205,
                'name' => 'Melilla',
            ),
            299 => 
            array (
                'id' => 3300,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 205,
                'name' => 'Murcia',
            ),
            300 => 
            array (
                'id' => 3301,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 205,
                'name' => 'Navarra',
            ),
            301 => 
            array (
                'id' => 3302,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 205,
                'name' => 'Ourense',
            ),
            302 => 
            array (
                'id' => 3303,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 205,
                'name' => 'Pais Vasco',
            ),
            303 => 
            array (
                'id' => 3304,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 205,
                'name' => 'Palencia',
            ),
            304 => 
            array (
                'id' => 3305,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 205,
                'name' => 'Pontevedra',
            ),
            305 => 
            array (
                'id' => 3306,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 205,
                'name' => 'Salamanca',
            ),
            306 => 
            array (
                'id' => 3307,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 205,
                'name' => 'Santa Cruz de Tenerife',
            ),
            307 => 
            array (
                'id' => 3308,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 205,
                'name' => 'Segovia',
            ),
            308 => 
            array (
                'id' => 3309,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 205,
                'name' => 'Sevilla',
            ),
            309 => 
            array (
                'id' => 3310,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 205,
                'name' => 'Soria',
            ),
            310 => 
            array (
                'id' => 3311,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 205,
                'name' => 'Tarragona',
            ),
            311 => 
            array (
                'id' => 3312,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 205,
                'name' => 'Tenerife',
            ),
            312 => 
            array (
                'id' => 3313,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 205,
                'name' => 'Teruel',
            ),
            313 => 
            array (
                'id' => 3314,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 205,
                'name' => 'Toledo',
            ),
            314 => 
            array (
                'id' => 3315,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 205,
                'name' => 'Valencia',
            ),
            315 => 
            array (
                'id' => 3316,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 205,
                'name' => 'Valladolid',
            ),
            316 => 
            array (
                'id' => 3317,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 205,
                'name' => 'Vizcaya',
            ),
            317 => 
            array (
                'id' => 3318,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 205,
                'name' => 'Zamora',
            ),
            318 => 
            array (
                'id' => 3319,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 205,
                'name' => 'Zaragoza',
            ),
            319 => 
            array (
                'id' => 3320,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 206,
                'name' => 'Amparai',
            ),
            320 => 
            array (
                'id' => 3321,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 206,
                'name' => 'Anuradhapuraya',
            ),
            321 => 
            array (
                'id' => 3322,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 206,
                'name' => 'Badulla',
            ),
            322 => 
            array (
                'id' => 3323,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 206,
                'name' => 'Boralesgamuwa',
            ),
            323 => 
            array (
                'id' => 3324,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 206,
                'name' => 'Colombo',
            ),
            324 => 
            array (
                'id' => 3325,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 206,
                'name' => 'Galla',
            ),
            325 => 
            array (
                'id' => 3326,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 206,
                'name' => 'Gampaha',
            ),
            326 => 
            array (
                'id' => 3327,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 206,
                'name' => 'Hambantota',
            ),
            327 => 
            array (
                'id' => 3328,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 206,
                'name' => 'Kalatura',
            ),
            328 => 
            array (
                'id' => 3329,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 206,
                'name' => 'Kegalla',
            ),
            329 => 
            array (
                'id' => 3330,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 206,
                'name' => 'Kilinochchi',
            ),
            330 => 
            array (
                'id' => 3331,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 206,
                'name' => 'Kurunegala',
            ),
            331 => 
            array (
                'id' => 3332,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 206,
                'name' => 'Madakalpuwa',
            ),
            332 => 
            array (
                'id' => 3333,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 206,
                'name' => 'Maha Nuwara',
            ),
            333 => 
            array (
                'id' => 3334,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 206,
                'name' => 'Malwana',
            ),
            334 => 
            array (
                'id' => 3335,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 206,
                'name' => 'Mannarama',
            ),
            335 => 
            array (
                'id' => 3336,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 206,
                'name' => 'Matale',
            ),
            336 => 
            array (
                'id' => 3337,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 206,
                'name' => 'Matara',
            ),
            337 => 
            array (
                'id' => 3338,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 206,
                'name' => 'Monaragala',
            ),
            338 => 
            array (
                'id' => 3339,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 206,
                'name' => 'Mullaitivu',
            ),
            339 => 
            array (
                'id' => 3340,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 206,
                'name' => 'North Eastern Province',
            ),
            340 => 
            array (
                'id' => 3341,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 206,
                'name' => 'North Western Province',
            ),
            341 => 
            array (
                'id' => 3342,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 206,
                'name' => 'Nuwara Eliya',
            ),
            342 => 
            array (
                'id' => 3343,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 206,
                'name' => 'Polonnaruwa',
            ),
            343 => 
            array (
                'id' => 3344,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 206,
                'name' => 'Puttalama',
            ),
            344 => 
            array (
                'id' => 3345,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 206,
                'name' => 'Ratnapuraya',
            ),
            345 => 
            array (
                'id' => 3346,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 206,
                'name' => 'Southern Province',
            ),
            346 => 
            array (
                'id' => 3347,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 206,
                'name' => 'Tirikunamalaya',
            ),
            347 => 
            array (
                'id' => 3348,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 206,
                'name' => 'Tuscany',
            ),
            348 => 
            array (
                'id' => 3349,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 206,
                'name' => 'Vavuniyawa',
            ),
            349 => 
            array (
                'id' => 3350,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 206,
                'name' => 'Western Province',
            ),
            350 => 
            array (
                'id' => 3351,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 206,
                'name' => 'Yapanaya',
            ),
            351 => 
            array (
                'id' => 3352,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 206,
                'name' => 'kadawatha',
            ),
            352 => 
            array (
                'id' => 3353,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 207,
                'name' => 'A\'ali-an-Nil',
            ),
            353 => 
            array (
                'id' => 3354,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 207,
                'name' => 'Bahr-al-Jabal',
            ),
            354 => 
            array (
                'id' => 3355,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 207,
                'name' => 'Central Equatoria',
            ),
            355 => 
            array (
                'id' => 3356,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 207,
                'name' => 'Gharb Bahr-al-Ghazal',
            ),
            356 => 
            array (
                'id' => 3357,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 207,
                'name' => 'Gharb Darfur',
            ),
            357 => 
            array (
                'id' => 3358,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 207,
                'name' => 'Gharb Kurdufan',
            ),
            358 => 
            array (
                'id' => 3359,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 207,
                'name' => 'Gharb-al-Istiwa\'iyah',
            ),
            359 => 
            array (
                'id' => 3360,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 207,
                'name' => 'Janub Darfur',
            ),
            360 => 
            array (
                'id' => 3361,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 207,
                'name' => 'Janub Kurdufan',
            ),
            361 => 
            array (
                'id' => 3362,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 207,
                'name' => 'Junqali',
            ),
            362 => 
            array (
                'id' => 3363,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 207,
                'name' => 'Kassala',
            ),
            363 => 
            array (
                'id' => 3364,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 207,
                'name' => 'Nahr-an-Nil',
            ),
            364 => 
            array (
                'id' => 3365,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 207,
                'name' => 'Shamal Bahr-al-Ghazal',
            ),
            365 => 
            array (
                'id' => 3366,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 207,
                'name' => 'Shamal Darfur',
            ),
            366 => 
            array (
                'id' => 3367,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 207,
                'name' => 'Shamal Kurdufan',
            ),
            367 => 
            array (
                'id' => 3368,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 207,
                'name' => 'Sharq-al-Istiwa\'iyah',
            ),
            368 => 
            array (
                'id' => 3369,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 207,
                'name' => 'Sinnar',
            ),
            369 => 
            array (
                'id' => 3370,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 207,
                'name' => 'Warab',
            ),
            370 => 
            array (
                'id' => 3371,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 207,
                'name' => 'Wilayat al Khartum',
            ),
            371 => 
            array (
                'id' => 3372,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 207,
                'name' => 'al-Bahr-al-Ahmar',
            ),
            372 => 
            array (
                'id' => 3373,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 207,
                'name' => 'al-Buhayrat',
            ),
            373 => 
            array (
                'id' => 3374,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 207,
                'name' => 'al-Jazirah',
            ),
            374 => 
            array (
                'id' => 3375,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 207,
                'name' => 'al-Khartum',
            ),
            375 => 
            array (
                'id' => 3376,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 207,
                'name' => 'al-Qadarif',
            ),
            376 => 
            array (
                'id' => 3377,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 207,
                'name' => 'al-Wahdah',
            ),
            377 => 
            array (
                'id' => 3378,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 207,
                'name' => 'an-Nil-al-Abyad',
            ),
            378 => 
            array (
                'id' => 3379,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 207,
                'name' => 'an-Nil-al-Azraq',
            ),
            379 => 
            array (
                'id' => 3380,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 207,
                'name' => 'ash-Shamaliyah',
            ),
            380 => 
            array (
                'id' => 3381,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 208,
                'name' => 'Brokopondo',
            ),
            381 => 
            array (
                'id' => 3382,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 208,
                'name' => 'Commewijne',
            ),
            382 => 
            array (
                'id' => 3383,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 208,
                'name' => 'Coronie',
            ),
            383 => 
            array (
                'id' => 3384,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 208,
                'name' => 'Marowijne',
            ),
            384 => 
            array (
                'id' => 3385,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 208,
                'name' => 'Nickerie',
            ),
            385 => 
            array (
                'id' => 3386,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 208,
                'name' => 'Para',
            ),
            386 => 
            array (
                'id' => 3387,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 208,
                'name' => 'Paramaribo',
            ),
            387 => 
            array (
                'id' => 3388,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 208,
                'name' => 'Saramacca',
            ),
            388 => 
            array (
                'id' => 3389,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 208,
                'name' => 'Wanica',
            ),
            389 => 
            array (
                'id' => 3390,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 209,
                'name' => 'Svalbard',
            ),
            390 => 
            array (
                'id' => 3391,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 210,
                'name' => 'Hhohho',
            ),
            391 => 
            array (
                'id' => 3392,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 210,
                'name' => 'Lubombo',
            ),
            392 => 
            array (
                'id' => 3393,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 210,
                'name' => 'Manzini',
            ),
            393 => 
            array (
                'id' => 3394,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 210,
                'name' => 'Shiselweni',
            ),
            394 => 
            array (
                'id' => 3395,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 211,
                'name' => 'Alvsborgs Lan',
            ),
            395 => 
            array (
                'id' => 3396,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 211,
                'name' => 'Angermanland',
            ),
            396 => 
            array (
                'id' => 3397,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 211,
                'name' => 'Blekinge',
            ),
            397 => 
            array (
                'id' => 3398,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 211,
                'name' => 'Bohuslan',
            ),
            398 => 
            array (
                'id' => 3399,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 211,
                'name' => 'Dalarna',
            ),
            399 => 
            array (
                'id' => 3400,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 211,
                'name' => 'Gavleborg',
            ),
            400 => 
            array (
                'id' => 3401,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 211,
                'name' => 'Gaza',
            ),
            401 => 
            array (
                'id' => 3402,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 211,
                'name' => 'Gotland',
            ),
            402 => 
            array (
                'id' => 3403,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 211,
                'name' => 'Halland',
            ),
            403 => 
            array (
                'id' => 3404,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 211,
                'name' => 'Jamtland',
            ),
            404 => 
            array (
                'id' => 3405,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 211,
                'name' => 'Jonkoping',
            ),
            405 => 
            array (
                'id' => 3406,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 211,
                'name' => 'Kalmar',
            ),
            406 => 
            array (
                'id' => 3407,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 211,
                'name' => 'Kristianstads',
            ),
            407 => 
            array (
                'id' => 3408,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 211,
                'name' => 'Kronoberg',
            ),
            408 => 
            array (
                'id' => 3409,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 211,
                'name' => 'Norrbotten',
            ),
            409 => 
            array (
                'id' => 3410,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 211,
                'name' => 'Orebro',
            ),
            410 => 
            array (
                'id' => 3411,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 211,
                'name' => 'Ostergotland',
            ),
            411 => 
            array (
                'id' => 3412,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 211,
                'name' => 'Saltsjo-Boo',
            ),
            412 => 
            array (
                'id' => 3413,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 211,
                'name' => 'Skane',
            ),
            413 => 
            array (
                'id' => 3414,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 211,
                'name' => 'Smaland',
            ),
            414 => 
            array (
                'id' => 3415,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 211,
                'name' => 'Sodermanland',
            ),
            415 => 
            array (
                'id' => 3416,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 211,
                'name' => 'Stockholm',
            ),
            416 => 
            array (
                'id' => 3417,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 211,
                'name' => 'Uppsala',
            ),
            417 => 
            array (
                'id' => 3418,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 211,
                'name' => 'Varmland',
            ),
            418 => 
            array (
                'id' => 3419,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 211,
                'name' => 'Vasterbotten',
            ),
            419 => 
            array (
                'id' => 3420,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 211,
                'name' => 'Vastergotland',
            ),
            420 => 
            array (
                'id' => 3421,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 211,
                'name' => 'Vasternorrland',
            ),
            421 => 
            array (
                'id' => 3422,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 211,
                'name' => 'Vastmanland',
            ),
            422 => 
            array (
                'id' => 3423,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 211,
                'name' => 'Vastra Gotaland',
            ),
            423 => 
            array (
                'id' => 3424,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 212,
                'name' => 'Aargau',
            ),
            424 => 
            array (
                'id' => 3425,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 212,
                'name' => 'Appenzell Inner-Rhoden',
            ),
            425 => 
            array (
                'id' => 3426,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 212,
                'name' => 'Appenzell-Ausser Rhoden',
            ),
            426 => 
            array (
                'id' => 3427,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 212,
                'name' => 'Basel-Landschaft',
            ),
            427 => 
            array (
                'id' => 3428,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 212,
                'name' => 'Basel-Stadt',
            ),
            428 => 
            array (
                'id' => 3429,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 212,
                'name' => 'Bern',
            ),
            429 => 
            array (
                'id' => 3430,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 212,
                'name' => 'Canton Ticino',
            ),
            430 => 
            array (
                'id' => 3431,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 212,
                'name' => 'Fribourg',
            ),
            431 => 
            array (
                'id' => 3432,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 212,
                'name' => 'Geneve',
            ),
            432 => 
            array (
                'id' => 3433,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 212,
                'name' => 'Glarus',
            ),
            433 => 
            array (
                'id' => 3434,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 212,
                'name' => 'Graubunden',
            ),
            434 => 
            array (
                'id' => 3435,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 212,
                'name' => 'Heerbrugg',
            ),
            435 => 
            array (
                'id' => 3436,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 212,
                'name' => 'Jura',
            ),
            436 => 
            array (
                'id' => 3437,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 212,
                'name' => 'Kanton Aargau',
            ),
            437 => 
            array (
                'id' => 3438,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 212,
                'name' => 'Luzern',
            ),
            438 => 
            array (
                'id' => 3439,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 212,
                'name' => 'Morbio Inferiore',
            ),
            439 => 
            array (
                'id' => 3440,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 212,
                'name' => 'Muhen',
            ),
            440 => 
            array (
                'id' => 3441,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 212,
                'name' => 'Neuchatel',
            ),
            441 => 
            array (
                'id' => 3442,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 212,
                'name' => 'Nidwalden',
            ),
            442 => 
            array (
                'id' => 3443,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 212,
                'name' => 'Obwalden',
            ),
            443 => 
            array (
                'id' => 3444,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 212,
                'name' => 'Sankt Gallen',
            ),
            444 => 
            array (
                'id' => 3445,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 212,
                'name' => 'Schaffhausen',
            ),
            445 => 
            array (
                'id' => 3446,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 212,
                'name' => 'Schwyz',
            ),
            446 => 
            array (
                'id' => 3447,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 212,
                'name' => 'Solothurn',
            ),
            447 => 
            array (
                'id' => 3448,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 212,
                'name' => 'Thurgau',
            ),
            448 => 
            array (
                'id' => 3449,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 212,
                'name' => 'Ticino',
            ),
            449 => 
            array (
                'id' => 3450,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 212,
                'name' => 'Uri',
            ),
            450 => 
            array (
                'id' => 3451,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 212,
                'name' => 'Valais',
            ),
            451 => 
            array (
                'id' => 3452,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 212,
                'name' => 'Vaud',
            ),
            452 => 
            array (
                'id' => 3453,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 212,
                'name' => 'Vauffelin',
            ),
            453 => 
            array (
                'id' => 3454,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 212,
                'name' => 'Zug',
            ),
            454 => 
            array (
                'id' => 3455,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 212,
                'name' => 'Zurich',
            ),
            455 => 
            array (
                'id' => 3456,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 213,
                'name' => 'Aleppo',
            ),
            456 => 
            array (
                'id' => 3457,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 213,
                'name' => 'Dar\'a',
            ),
            457 => 
            array (
                'id' => 3458,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 213,
                'name' => 'Dayr-az-Zawr',
            ),
            458 => 
            array (
                'id' => 3459,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 213,
                'name' => 'Dimashq',
            ),
            459 => 
            array (
                'id' => 3460,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 213,
                'name' => 'Halab',
            ),
            460 => 
            array (
                'id' => 3461,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 213,
                'name' => 'Hamah',
            ),
            461 => 
            array (
                'id' => 3462,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 213,
                'name' => 'Hims',
            ),
            462 => 
            array (
                'id' => 3463,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 213,
                'name' => 'Idlib',
            ),
            463 => 
            array (
                'id' => 3464,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 213,
                'name' => 'Madinat Dimashq',
            ),
            464 => 
            array (
                'id' => 3465,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 213,
                'name' => 'Tartus',
            ),
            465 => 
            array (
                'id' => 3466,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 213,
                'name' => 'al-Hasakah',
            ),
            466 => 
            array (
                'id' => 3467,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 213,
                'name' => 'al-Ladhiqiyah',
            ),
            467 => 
            array (
                'id' => 3468,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 213,
                'name' => 'al-Qunaytirah',
            ),
            468 => 
            array (
                'id' => 3469,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 213,
                'name' => 'ar-Raqqah',
            ),
            469 => 
            array (
                'id' => 3470,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 213,
                'name' => 'as-Suwayda',
            ),
            470 => 
            array (
                'id' => 3471,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 214,
                'name' => 'Changhwa',
            ),
            471 => 
            array (
                'id' => 3472,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 214,
                'name' => 'Chiayi Hsien',
            ),
            472 => 
            array (
                'id' => 3473,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 214,
                'name' => 'Chiayi Shih',
            ),
            473 => 
            array (
                'id' => 3474,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 214,
                'name' => 'Eastern Taipei',
            ),
            474 => 
            array (
                'id' => 3475,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 214,
                'name' => 'Hsinchu Hsien',
            ),
            475 => 
            array (
                'id' => 3476,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 214,
                'name' => 'Hsinchu Shih',
            ),
            476 => 
            array (
                'id' => 3477,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 214,
                'name' => 'Hualien',
            ),
            477 => 
            array (
                'id' => 3478,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 214,
                'name' => 'Ilan',
            ),
            478 => 
            array (
                'id' => 3479,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 214,
                'name' => 'Kaohsiung Hsien',
            ),
            479 => 
            array (
                'id' => 3480,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 214,
                'name' => 'Kaohsiung Shih',
            ),
            480 => 
            array (
                'id' => 3481,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 214,
                'name' => 'Keelung Shih',
            ),
            481 => 
            array (
                'id' => 3482,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 214,
                'name' => 'Kinmen',
            ),
            482 => 
            array (
                'id' => 3483,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 214,
                'name' => 'Miaoli',
            ),
            483 => 
            array (
                'id' => 3484,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 214,
                'name' => 'Nantou',
            ),
            484 => 
            array (
                'id' => 3485,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 214,
                'name' => 'Northern Taiwan',
            ),
            485 => 
            array (
                'id' => 3486,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 214,
                'name' => 'Penghu',
            ),
            486 => 
            array (
                'id' => 3487,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 214,
                'name' => 'Pingtung',
            ),
            487 => 
            array (
                'id' => 3488,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 214,
                'name' => 'Taichung',
            ),
            488 => 
            array (
                'id' => 3489,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 214,
                'name' => 'Taichung Hsien',
            ),
            489 => 
            array (
                'id' => 3490,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 214,
                'name' => 'Taichung Shih',
            ),
            490 => 
            array (
                'id' => 3491,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 214,
                'name' => 'Tainan Hsien',
            ),
            491 => 
            array (
                'id' => 3492,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 214,
                'name' => 'Tainan Shih',
            ),
            492 => 
            array (
                'id' => 3493,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 214,
                'name' => 'Taipei Hsien',
            ),
            493 => 
            array (
                'id' => 3494,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 214,
                'name' => 'Taipei Shih / Taipei Hsien',
            ),
            494 => 
            array (
                'id' => 3495,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 214,
                'name' => 'Taitung',
            ),
            495 => 
            array (
                'id' => 3496,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 214,
                'name' => 'Taoyuan',
            ),
            496 => 
            array (
                'id' => 3497,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 214,
                'name' => 'Yilan',
            ),
            497 => 
            array (
                'id' => 3498,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 214,
                'name' => 'Yun-Lin Hsien',
            ),
            498 => 
            array (
                'id' => 3499,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 214,
                'name' => 'Yunlin',
            ),
            499 => 
            array (
                'id' => 3500,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 215,
                'name' => 'Dushanbe',
            ),
        ));
        \DB::table('states')->insert(array (
            0 => 
            array (
                'id' => 3501,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 215,
                'name' => 'Gorno-Badakhshan',
            ),
            1 => 
            array (
                'id' => 3502,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 215,
                'name' => 'Karotegin',
            ),
            2 => 
            array (
                'id' => 3503,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 215,
                'name' => 'Khatlon',
            ),
            3 => 
            array (
                'id' => 3504,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 215,
                'name' => 'Sughd',
            ),
            4 => 
            array (
                'id' => 3505,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 216,
                'name' => 'Arusha',
            ),
            5 => 
            array (
                'id' => 3506,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 216,
                'name' => 'Dar es Salaam',
            ),
            6 => 
            array (
                'id' => 3507,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 216,
                'name' => 'Dodoma',
            ),
            7 => 
            array (
                'id' => 3508,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 216,
                'name' => 'Iringa',
            ),
            8 => 
            array (
                'id' => 3509,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 216,
                'name' => 'Kagera',
            ),
            9 => 
            array (
                'id' => 3510,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 216,
                'name' => 'Kigoma',
            ),
            10 => 
            array (
                'id' => 3511,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 216,
                'name' => 'Kilimanjaro',
            ),
            11 => 
            array (
                'id' => 3512,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 216,
                'name' => 'Lindi',
            ),
            12 => 
            array (
                'id' => 3513,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 216,
                'name' => 'Mara',
            ),
            13 => 
            array (
                'id' => 3514,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 216,
                'name' => 'Mbeya',
            ),
            14 => 
            array (
                'id' => 3515,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 216,
                'name' => 'Morogoro',
            ),
            15 => 
            array (
                'id' => 3516,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 216,
                'name' => 'Mtwara',
            ),
            16 => 
            array (
                'id' => 3517,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 216,
                'name' => 'Mwanza',
            ),
            17 => 
            array (
                'id' => 3518,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 216,
                'name' => 'Pwani',
            ),
            18 => 
            array (
                'id' => 3519,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 216,
                'name' => 'Rukwa',
            ),
            19 => 
            array (
                'id' => 3520,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 216,
                'name' => 'Ruvuma',
            ),
            20 => 
            array (
                'id' => 3521,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 216,
                'name' => 'Shinyanga',
            ),
            21 => 
            array (
                'id' => 3522,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 216,
                'name' => 'Singida',
            ),
            22 => 
            array (
                'id' => 3523,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 216,
                'name' => 'Tabora',
            ),
            23 => 
            array (
                'id' => 3524,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 216,
                'name' => 'Tanga',
            ),
            24 => 
            array (
                'id' => 3525,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 216,
                'name' => 'Zanzibar and Pemba',
            ),
            25 => 
            array (
                'id' => 3526,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 217,
                'name' => 'Amnat Charoen',
            ),
            26 => 
            array (
                'id' => 3527,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 217,
                'name' => 'Ang Thong',
            ),
            27 => 
            array (
                'id' => 3528,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 217,
                'name' => 'Bangkok',
            ),
            28 => 
            array (
                'id' => 3529,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 217,
                'name' => 'Buri Ram',
            ),
            29 => 
            array (
                'id' => 3530,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 217,
                'name' => 'Chachoengsao',
            ),
            30 => 
            array (
                'id' => 3531,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 217,
                'name' => 'Chai Nat',
            ),
            31 => 
            array (
                'id' => 3532,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 217,
                'name' => 'Chaiyaphum',
            ),
            32 => 
            array (
                'id' => 3533,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 217,
                'name' => 'Changwat Chaiyaphum',
            ),
            33 => 
            array (
                'id' => 3534,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 217,
                'name' => 'Chanthaburi',
            ),
            34 => 
            array (
                'id' => 3535,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 217,
                'name' => 'Chiang Mai',
            ),
            35 => 
            array (
                'id' => 3536,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 217,
                'name' => 'Chiang Rai',
            ),
            36 => 
            array (
                'id' => 3537,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 217,
                'name' => 'Chon Buri',
            ),
            37 => 
            array (
                'id' => 3538,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 217,
                'name' => 'Chumphon',
            ),
            38 => 
            array (
                'id' => 3539,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 217,
                'name' => 'Kalasin',
            ),
            39 => 
            array (
                'id' => 3540,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 217,
                'name' => 'Kamphaeng Phet',
            ),
            40 => 
            array (
                'id' => 3541,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 217,
                'name' => 'Kanchanaburi',
            ),
            41 => 
            array (
                'id' => 3542,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 217,
                'name' => 'Khon Kaen',
            ),
            42 => 
            array (
                'id' => 3543,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 217,
                'name' => 'Krabi',
            ),
            43 => 
            array (
                'id' => 3544,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 217,
                'name' => 'Krung Thep',
            ),
            44 => 
            array (
                'id' => 3545,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 217,
                'name' => 'Lampang',
            ),
            45 => 
            array (
                'id' => 3546,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 217,
                'name' => 'Lamphun',
            ),
            46 => 
            array (
                'id' => 3547,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 217,
                'name' => 'Loei',
            ),
            47 => 
            array (
                'id' => 3548,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 217,
                'name' => 'Lop Buri',
            ),
            48 => 
            array (
                'id' => 3549,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 217,
                'name' => 'Mae Hong Son',
            ),
            49 => 
            array (
                'id' => 3550,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 217,
                'name' => 'Maha Sarakham',
            ),
            50 => 
            array (
                'id' => 3551,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 217,
                'name' => 'Mukdahan',
            ),
            51 => 
            array (
                'id' => 3552,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 217,
                'name' => 'Nakhon Nayok',
            ),
            52 => 
            array (
                'id' => 3553,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 217,
                'name' => 'Nakhon Pathom',
            ),
            53 => 
            array (
                'id' => 3554,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 217,
                'name' => 'Nakhon Phanom',
            ),
            54 => 
            array (
                'id' => 3555,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 217,
                'name' => 'Nakhon Ratchasima',
            ),
            55 => 
            array (
                'id' => 3556,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 217,
                'name' => 'Nakhon Sawan',
            ),
            56 => 
            array (
                'id' => 3557,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 217,
                'name' => 'Nakhon Si Thammarat',
            ),
            57 => 
            array (
                'id' => 3558,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 217,
                'name' => 'Nan',
            ),
            58 => 
            array (
                'id' => 3559,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 217,
                'name' => 'Narathiwat',
            ),
            59 => 
            array (
                'id' => 3560,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 217,
                'name' => 'Nong Bua Lam Phu',
            ),
            60 => 
            array (
                'id' => 3561,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 217,
                'name' => 'Nong Khai',
            ),
            61 => 
            array (
                'id' => 3562,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 217,
                'name' => 'Nonthaburi',
            ),
            62 => 
            array (
                'id' => 3563,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 217,
                'name' => 'Pathum Thani',
            ),
            63 => 
            array (
                'id' => 3564,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 217,
                'name' => 'Pattani',
            ),
            64 => 
            array (
                'id' => 3565,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 217,
                'name' => 'Phangnga',
            ),
            65 => 
            array (
                'id' => 3566,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 217,
                'name' => 'Phatthalung',
            ),
            66 => 
            array (
                'id' => 3567,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 217,
                'name' => 'Phayao',
            ),
            67 => 
            array (
                'id' => 3568,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 217,
                'name' => 'Phetchabun',
            ),
            68 => 
            array (
                'id' => 3569,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 217,
                'name' => 'Phetchaburi',
            ),
            69 => 
            array (
                'id' => 3570,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 217,
                'name' => 'Phichit',
            ),
            70 => 
            array (
                'id' => 3571,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 217,
                'name' => 'Phitsanulok',
            ),
            71 => 
            array (
                'id' => 3572,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 217,
                'name' => 'Phra Nakhon Si Ayutthaya',
            ),
            72 => 
            array (
                'id' => 3573,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 217,
                'name' => 'Phrae',
            ),
            73 => 
            array (
                'id' => 3574,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 217,
                'name' => 'Phuket',
            ),
            74 => 
            array (
                'id' => 3575,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 217,
                'name' => 'Prachin Buri',
            ),
            75 => 
            array (
                'id' => 3576,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 217,
                'name' => 'Prachuap Khiri Khan',
            ),
            76 => 
            array (
                'id' => 3577,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 217,
                'name' => 'Ranong',
            ),
            77 => 
            array (
                'id' => 3578,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 217,
                'name' => 'Ratchaburi',
            ),
            78 => 
            array (
                'id' => 3579,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 217,
                'name' => 'Rayong',
            ),
            79 => 
            array (
                'id' => 3580,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 217,
                'name' => 'Roi Et',
            ),
            80 => 
            array (
                'id' => 3581,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 217,
                'name' => 'Sa Kaeo',
            ),
            81 => 
            array (
                'id' => 3582,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 217,
                'name' => 'Sakon Nakhon',
            ),
            82 => 
            array (
                'id' => 3583,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 217,
                'name' => 'Samut Prakan',
            ),
            83 => 
            array (
                'id' => 3584,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 217,
                'name' => 'Samut Sakhon',
            ),
            84 => 
            array (
                'id' => 3585,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 217,
                'name' => 'Samut Songkhran',
            ),
            85 => 
            array (
                'id' => 3586,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 217,
                'name' => 'Saraburi',
            ),
            86 => 
            array (
                'id' => 3587,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 217,
                'name' => 'Satun',
            ),
            87 => 
            array (
                'id' => 3588,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 217,
                'name' => 'Si Sa Ket',
            ),
            88 => 
            array (
                'id' => 3589,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 217,
                'name' => 'Sing Buri',
            ),
            89 => 
            array (
                'id' => 3590,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 217,
                'name' => 'Songkhla',
            ),
            90 => 
            array (
                'id' => 3591,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 217,
                'name' => 'Sukhothai',
            ),
            91 => 
            array (
                'id' => 3592,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 217,
                'name' => 'Suphan Buri',
            ),
            92 => 
            array (
                'id' => 3593,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 217,
                'name' => 'Surat Thani',
            ),
            93 => 
            array (
                'id' => 3594,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 217,
                'name' => 'Surin',
            ),
            94 => 
            array (
                'id' => 3595,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 217,
                'name' => 'Tak',
            ),
            95 => 
            array (
                'id' => 3596,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 217,
                'name' => 'Trang',
            ),
            96 => 
            array (
                'id' => 3597,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 217,
                'name' => 'Trat',
            ),
            97 => 
            array (
                'id' => 3598,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 217,
                'name' => 'Ubon Ratchathani',
            ),
            98 => 
            array (
                'id' => 3599,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 217,
                'name' => 'Udon Thani',
            ),
            99 => 
            array (
                'id' => 3600,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 217,
                'name' => 'Uthai Thani',
            ),
            100 => 
            array (
                'id' => 3601,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 217,
                'name' => 'Uttaradit',
            ),
            101 => 
            array (
                'id' => 3602,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 217,
                'name' => 'Yala',
            ),
            102 => 
            array (
                'id' => 3603,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 217,
                'name' => 'Yasothon',
            ),
            103 => 
            array (
                'id' => 3604,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 218,
                'name' => 'Centre',
            ),
            104 => 
            array (
                'id' => 3605,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 218,
                'name' => 'Kara',
            ),
            105 => 
            array (
                'id' => 3606,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 218,
                'name' => 'Maritime',
            ),
            106 => 
            array (
                'id' => 3607,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 218,
                'name' => 'Plateaux',
            ),
            107 => 
            array (
                'id' => 3608,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 218,
                'name' => 'Savanes',
            ),
            108 => 
            array (
                'id' => 3609,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 219,
                'name' => 'Atafu',
            ),
            109 => 
            array (
                'id' => 3610,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 219,
                'name' => 'Fakaofo',
            ),
            110 => 
            array (
                'id' => 3611,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 219,
                'name' => 'Nukunonu',
            ),
            111 => 
            array (
                'id' => 3612,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 220,
                'name' => 'Eua',
            ),
            112 => 
            array (
                'id' => 3613,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 220,
                'name' => 'Ha\'apai',
            ),
            113 => 
            array (
                'id' => 3614,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 220,
                'name' => 'Niuas',
            ),
            114 => 
            array (
                'id' => 3615,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 220,
                'name' => 'Tongatapu',
            ),
            115 => 
            array (
                'id' => 3616,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 220,
                'name' => 'Vava\'u',
            ),
            116 => 
            array (
                'id' => 3617,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 221,
                'name' => 'Arima-Tunapuna-Piarco',
            ),
            117 => 
            array (
                'id' => 3618,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 221,
                'name' => 'Caroni',
            ),
            118 => 
            array (
                'id' => 3619,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 221,
                'name' => 'Chaguanas',
            ),
            119 => 
            array (
                'id' => 3620,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 221,
                'name' => 'Couva-Tabaquite-Talparo',
            ),
            120 => 
            array (
                'id' => 3621,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 221,
                'name' => 'Diego Martin',
            ),
            121 => 
            array (
                'id' => 3622,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 221,
                'name' => 'Glencoe',
            ),
            122 => 
            array (
                'id' => 3623,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 221,
                'name' => 'Penal Debe',
            ),
            123 => 
            array (
                'id' => 3624,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 221,
                'name' => 'Point Fortin',
            ),
            124 => 
            array (
                'id' => 3625,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 221,
                'name' => 'Port of Spain',
            ),
            125 => 
            array (
                'id' => 3626,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 221,
                'name' => 'Princes Town',
            ),
            126 => 
            array (
                'id' => 3627,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 221,
                'name' => 'Saint George',
            ),
            127 => 
            array (
                'id' => 3628,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 221,
                'name' => 'San Fernando',
            ),
            128 => 
            array (
                'id' => 3629,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 221,
                'name' => 'San Juan',
            ),
            129 => 
            array (
                'id' => 3630,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 221,
                'name' => 'Sangre Grande',
            ),
            130 => 
            array (
                'id' => 3631,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 221,
                'name' => 'Siparia',
            ),
            131 => 
            array (
                'id' => 3632,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 221,
                'name' => 'Tobago',
            ),
            132 => 
            array (
                'id' => 3633,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 222,
                'name' => 'Aryanah',
            ),
            133 => 
            array (
                'id' => 3634,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 222,
                'name' => 'Bajah',
            ),
            134 => 
            array (
                'id' => 3635,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 222,
                'name' => 'Bin \'Arus',
            ),
            135 => 
            array (
                'id' => 3636,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 222,
                'name' => 'Binzart',
            ),
            136 => 
            array (
                'id' => 3637,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 222,
                'name' => 'Gouvernorat de Ariana',
            ),
            137 => 
            array (
                'id' => 3638,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 222,
                'name' => 'Gouvernorat de Nabeul',
            ),
            138 => 
            array (
                'id' => 3639,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 222,
                'name' => 'Gouvernorat de Sousse',
            ),
            139 => 
            array (
                'id' => 3640,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 222,
                'name' => 'Hammamet Yasmine',
            ),
            140 => 
            array (
                'id' => 3641,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 222,
                'name' => 'Jundubah',
            ),
            141 => 
            array (
                'id' => 3642,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 222,
                'name' => 'Madaniyin',
            ),
            142 => 
            array (
                'id' => 3643,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 222,
                'name' => 'Manubah',
            ),
            143 => 
            array (
                'id' => 3644,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 222,
                'name' => 'Monastir',
            ),
            144 => 
            array (
                'id' => 3645,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 222,
                'name' => 'Nabul',
            ),
            145 => 
            array (
                'id' => 3646,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 222,
                'name' => 'Qabis',
            ),
            146 => 
            array (
                'id' => 3647,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 222,
                'name' => 'Qafsah',
            ),
            147 => 
            array (
                'id' => 3648,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 222,
                'name' => 'Qibili',
            ),
            148 => 
            array (
                'id' => 3649,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 222,
                'name' => 'Safaqis',
            ),
            149 => 
            array (
                'id' => 3650,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 222,
                'name' => 'Sfax',
            ),
            150 => 
            array (
                'id' => 3651,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 222,
                'name' => 'Sidi Bu Zayd',
            ),
            151 => 
            array (
                'id' => 3652,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 222,
                'name' => 'Silyanah',
            ),
            152 => 
            array (
                'id' => 3653,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 222,
                'name' => 'Susah',
            ),
            153 => 
            array (
                'id' => 3654,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 222,
                'name' => 'Tatawin',
            ),
            154 => 
            array (
                'id' => 3655,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 222,
                'name' => 'Tawzar',
            ),
            155 => 
            array (
                'id' => 3656,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 222,
                'name' => 'Tunis',
            ),
            156 => 
            array (
                'id' => 3657,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 222,
                'name' => 'Zaghwan',
            ),
            157 => 
            array (
                'id' => 3658,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 222,
                'name' => 'al-Kaf',
            ),
            158 => 
            array (
                'id' => 3659,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 222,
                'name' => 'al-Mahdiyah',
            ),
            159 => 
            array (
                'id' => 3660,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 222,
                'name' => 'al-Munastir',
            ),
            160 => 
            array (
                'id' => 3661,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 222,
                'name' => 'al-Qasrayn',
            ),
            161 => 
            array (
                'id' => 3662,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 222,
                'name' => 'al-Qayrawan',
            ),
            162 => 
            array (
                'id' => 3663,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 223,
                'name' => 'Adana',
            ),
            163 => 
            array (
                'id' => 3664,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 223,
                'name' => 'Adiyaman',
            ),
            164 => 
            array (
                'id' => 3665,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 223,
                'name' => 'Afyon',
            ),
            165 => 
            array (
                'id' => 3666,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 223,
                'name' => 'Agri',
            ),
            166 => 
            array (
                'id' => 3667,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 223,
                'name' => 'Aksaray',
            ),
            167 => 
            array (
                'id' => 3668,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 223,
                'name' => 'Amasya',
            ),
            168 => 
            array (
                'id' => 3669,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 223,
                'name' => 'Ankara',
            ),
            169 => 
            array (
                'id' => 3670,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 223,
                'name' => 'Antalya',
            ),
            170 => 
            array (
                'id' => 3671,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 223,
                'name' => 'Ardahan',
            ),
            171 => 
            array (
                'id' => 3672,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 223,
                'name' => 'Artvin',
            ),
            172 => 
            array (
                'id' => 3673,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 223,
                'name' => 'Aydin',
            ),
            173 => 
            array (
                'id' => 3674,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 223,
                'name' => 'Balikesir',
            ),
            174 => 
            array (
                'id' => 3675,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 223,
                'name' => 'Bartin',
            ),
            175 => 
            array (
                'id' => 3676,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 223,
                'name' => 'Batman',
            ),
            176 => 
            array (
                'id' => 3677,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 223,
                'name' => 'Bayburt',
            ),
            177 => 
            array (
                'id' => 3678,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 223,
                'name' => 'Bilecik',
            ),
            178 => 
            array (
                'id' => 3679,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 223,
                'name' => 'Bingol',
            ),
            179 => 
            array (
                'id' => 3680,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 223,
                'name' => 'Bitlis',
            ),
            180 => 
            array (
                'id' => 3681,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 223,
                'name' => 'Bolu',
            ),
            181 => 
            array (
                'id' => 3682,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 223,
                'name' => 'Burdur',
            ),
            182 => 
            array (
                'id' => 3683,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 223,
                'name' => 'Bursa',
            ),
            183 => 
            array (
                'id' => 3684,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 223,
                'name' => 'Canakkale',
            ),
            184 => 
            array (
                'id' => 3685,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 223,
                'name' => 'Cankiri',
            ),
            185 => 
            array (
                'id' => 3686,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 223,
                'name' => 'Corum',
            ),
            186 => 
            array (
                'id' => 3687,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 223,
                'name' => 'Denizli',
            ),
            187 => 
            array (
                'id' => 3688,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 223,
                'name' => 'Diyarbakir',
            ),
            188 => 
            array (
                'id' => 3689,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 223,
                'name' => 'Duzce',
            ),
            189 => 
            array (
                'id' => 3690,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 223,
                'name' => 'Edirne',
            ),
            190 => 
            array (
                'id' => 3691,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 223,
                'name' => 'Elazig',
            ),
            191 => 
            array (
                'id' => 3692,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 223,
                'name' => 'Erzincan',
            ),
            192 => 
            array (
                'id' => 3693,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 223,
                'name' => 'Erzurum',
            ),
            193 => 
            array (
                'id' => 3694,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 223,
                'name' => 'Eskisehir',
            ),
            194 => 
            array (
                'id' => 3695,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 223,
                'name' => 'Gaziantep',
            ),
            195 => 
            array (
                'id' => 3696,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 223,
                'name' => 'Giresun',
            ),
            196 => 
            array (
                'id' => 3697,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 223,
                'name' => 'Gumushane',
            ),
            197 => 
            array (
                'id' => 3698,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 223,
                'name' => 'Hakkari',
            ),
            198 => 
            array (
                'id' => 3699,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 223,
                'name' => 'Hatay',
            ),
            199 => 
            array (
                'id' => 3700,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 223,
                'name' => 'Icel',
            ),
            200 => 
            array (
                'id' => 3701,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 223,
                'name' => 'Igdir',
            ),
            201 => 
            array (
                'id' => 3702,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 223,
                'name' => 'Isparta',
            ),
            202 => 
            array (
                'id' => 3703,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 223,
                'name' => 'Istanbul',
            ),
            203 => 
            array (
                'id' => 3704,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 223,
                'name' => 'Izmir',
            ),
            204 => 
            array (
                'id' => 3705,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 223,
                'name' => 'Kahramanmaras',
            ),
            205 => 
            array (
                'id' => 3706,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 223,
                'name' => 'Karabuk',
            ),
            206 => 
            array (
                'id' => 3707,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 223,
                'name' => 'Karaman',
            ),
            207 => 
            array (
                'id' => 3708,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 223,
                'name' => 'Kars',
            ),
            208 => 
            array (
                'id' => 3709,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 223,
                'name' => 'Karsiyaka',
            ),
            209 => 
            array (
                'id' => 3710,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 223,
                'name' => 'Kastamonu',
            ),
            210 => 
            array (
                'id' => 3711,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 223,
                'name' => 'Kayseri',
            ),
            211 => 
            array (
                'id' => 3712,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 223,
                'name' => 'Kilis',
            ),
            212 => 
            array (
                'id' => 3713,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 223,
                'name' => 'Kirikkale',
            ),
            213 => 
            array (
                'id' => 3714,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 223,
                'name' => 'Kirklareli',
            ),
            214 => 
            array (
                'id' => 3715,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 223,
                'name' => 'Kirsehir',
            ),
            215 => 
            array (
                'id' => 3716,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 223,
                'name' => 'Kocaeli',
            ),
            216 => 
            array (
                'id' => 3717,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 223,
                'name' => 'Konya',
            ),
            217 => 
            array (
                'id' => 3718,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 223,
                'name' => 'Kutahya',
            ),
            218 => 
            array (
                'id' => 3719,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 223,
                'name' => 'Lefkosa',
            ),
            219 => 
            array (
                'id' => 3720,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 223,
                'name' => 'Malatya',
            ),
            220 => 
            array (
                'id' => 3721,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 223,
                'name' => 'Manisa',
            ),
            221 => 
            array (
                'id' => 3722,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 223,
                'name' => 'Mardin',
            ),
            222 => 
            array (
                'id' => 3723,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 223,
                'name' => 'Mugla',
            ),
            223 => 
            array (
                'id' => 3724,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 223,
                'name' => 'Mus',
            ),
            224 => 
            array (
                'id' => 3725,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 223,
                'name' => 'Nevsehir',
            ),
            225 => 
            array (
                'id' => 3726,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 223,
                'name' => 'Nigde',
            ),
            226 => 
            array (
                'id' => 3727,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 223,
                'name' => 'Ordu',
            ),
            227 => 
            array (
                'id' => 3728,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 223,
                'name' => 'Osmaniye',
            ),
            228 => 
            array (
                'id' => 3729,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 223,
                'name' => 'Rize',
            ),
            229 => 
            array (
                'id' => 3730,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 223,
                'name' => 'Sakarya',
            ),
            230 => 
            array (
                'id' => 3731,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 223,
                'name' => 'Samsun',
            ),
            231 => 
            array (
                'id' => 3732,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 223,
                'name' => 'Sanliurfa',
            ),
            232 => 
            array (
                'id' => 3733,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 223,
                'name' => 'Siirt',
            ),
            233 => 
            array (
                'id' => 3734,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 223,
                'name' => 'Sinop',
            ),
            234 => 
            array (
                'id' => 3735,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 223,
                'name' => 'Sirnak',
            ),
            235 => 
            array (
                'id' => 3736,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 223,
                'name' => 'Sivas',
            ),
            236 => 
            array (
                'id' => 3737,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 223,
                'name' => 'Tekirdag',
            ),
            237 => 
            array (
                'id' => 3738,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 223,
                'name' => 'Tokat',
            ),
            238 => 
            array (
                'id' => 3739,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 223,
                'name' => 'Trabzon',
            ),
            239 => 
            array (
                'id' => 3740,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 223,
                'name' => 'Tunceli',
            ),
            240 => 
            array (
                'id' => 3741,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 223,
                'name' => 'Usak',
            ),
            241 => 
            array (
                'id' => 3742,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 223,
                'name' => 'Van',
            ),
            242 => 
            array (
                'id' => 3743,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 223,
                'name' => 'Yalova',
            ),
            243 => 
            array (
                'id' => 3744,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 223,
                'name' => 'Yozgat',
            ),
            244 => 
            array (
                'id' => 3745,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 223,
                'name' => 'Zonguldak',
            ),
            245 => 
            array (
                'id' => 3746,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 224,
                'name' => 'Ahal',
            ),
            246 => 
            array (
                'id' => 3747,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 224,
                'name' => 'Asgabat',
            ),
            247 => 
            array (
                'id' => 3748,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 224,
                'name' => 'Balkan',
            ),
            248 => 
            array (
                'id' => 3749,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 224,
                'name' => 'Dasoguz',
            ),
            249 => 
            array (
                'id' => 3750,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 224,
                'name' => 'Lebap',
            ),
            250 => 
            array (
                'id' => 3751,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 224,
                'name' => 'Mari',
            ),
            251 => 
            array (
                'id' => 3752,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 225,
                'name' => 'Grand Turk',
            ),
            252 => 
            array (
                'id' => 3753,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 225,
                'name' => 'South Caicos and East Caicos',
            ),
            253 => 
            array (
                'id' => 3754,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 226,
                'name' => 'Funafuti',
            ),
            254 => 
            array (
                'id' => 3755,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 226,
                'name' => 'Nanumanga',
            ),
            255 => 
            array (
                'id' => 3756,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 226,
                'name' => 'Nanumea',
            ),
            256 => 
            array (
                'id' => 3757,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 226,
                'name' => 'Niutao',
            ),
            257 => 
            array (
                'id' => 3758,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 226,
                'name' => 'Nui',
            ),
            258 => 
            array (
                'id' => 3759,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 226,
                'name' => 'Nukufetau',
            ),
            259 => 
            array (
                'id' => 3760,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 226,
                'name' => 'Nukulaelae',
            ),
            260 => 
            array (
                'id' => 3761,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 226,
                'name' => 'Vaitupu',
            ),
            261 => 
            array (
                'id' => 3762,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 227,
                'name' => 'Central',
            ),
            262 => 
            array (
                'id' => 3763,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 227,
                'name' => 'Eastern',
            ),
            263 => 
            array (
                'id' => 3764,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 227,
                'name' => 'Northern',
            ),
            264 => 
            array (
                'id' => 3765,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 227,
                'name' => 'Western',
            ),
            265 => 
            array (
                'id' => 3766,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 228,
                'name' => 'Cherkas\'ka',
            ),
            266 => 
            array (
                'id' => 3767,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 228,
                'name' => 'Chernihivs\'ka',
            ),
            267 => 
            array (
                'id' => 3768,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 228,
                'name' => 'Chernivets\'ka',
            ),
            268 => 
            array (
                'id' => 3769,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 228,
                'name' => 'Crimea',
            ),
            269 => 
            array (
                'id' => 3770,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 228,
                'name' => 'Dnipropetrovska',
            ),
            270 => 
            array (
                'id' => 3771,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 228,
                'name' => 'Donets\'ka',
            ),
            271 => 
            array (
                'id' => 3772,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 228,
                'name' => 'Ivano-Frankivs\'ka',
            ),
            272 => 
            array (
                'id' => 3773,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 228,
                'name' => 'Kharkiv',
            ),
            273 => 
            array (
                'id' => 3774,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 228,
                'name' => 'Kharkov',
            ),
            274 => 
            array (
                'id' => 3775,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 228,
                'name' => 'Khersonska',
            ),
            275 => 
            array (
                'id' => 3776,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 228,
                'name' => 'Khmel\'nyts\'ka',
            ),
            276 => 
            array (
                'id' => 3777,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 228,
                'name' => 'Kirovohrad',
            ),
            277 => 
            array (
                'id' => 3778,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 228,
                'name' => 'Krym',
            ),
            278 => 
            array (
                'id' => 3779,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 228,
                'name' => 'Kyyiv',
            ),
            279 => 
            array (
                'id' => 3780,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 228,
                'name' => 'Kyyivs\'ka',
            ),
            280 => 
            array (
                'id' => 3781,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 228,
                'name' => 'L\'vivs\'ka',
            ),
            281 => 
            array (
                'id' => 3782,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 228,
                'name' => 'Luhans\'ka',
            ),
            282 => 
            array (
                'id' => 3783,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 228,
                'name' => 'Mykolayivs\'ka',
            ),
            283 => 
            array (
                'id' => 3784,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 228,
                'name' => 'Odes\'ka',
            ),
            284 => 
            array (
                'id' => 3785,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 228,
                'name' => 'Odessa',
            ),
            285 => 
            array (
                'id' => 3786,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 228,
                'name' => 'Poltavs\'ka',
            ),
            286 => 
            array (
                'id' => 3787,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 228,
                'name' => 'Rivnens\'ka',
            ),
            287 => 
            array (
                'id' => 3788,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 228,
                'name' => 'Sevastopol\'',
            ),
            288 => 
            array (
                'id' => 3789,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 228,
                'name' => 'Sums\'ka',
            ),
            289 => 
            array (
                'id' => 3790,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 228,
                'name' => 'Ternopil\'s\'ka',
            ),
            290 => 
            array (
                'id' => 3791,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 228,
                'name' => 'Volyns\'ka',
            ),
            291 => 
            array (
                'id' => 3792,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 228,
                'name' => 'Vynnyts\'ka',
            ),
            292 => 
            array (
                'id' => 3793,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 228,
                'name' => 'Zakarpats\'ka',
            ),
            293 => 
            array (
                'id' => 3794,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 228,
                'name' => 'Zaporizhia',
            ),
            294 => 
            array (
                'id' => 3795,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 228,
                'name' => 'Zhytomyrs\'ka',
            ),
            295 => 
            array (
                'id' => 3796,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 229,
                'name' => 'Abu Zabi',
            ),
            296 => 
            array (
                'id' => 3797,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 229,
                'name' => 'Ajman',
            ),
            297 => 
            array (
                'id' => 3798,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 229,
                'name' => 'Dubai',
            ),
            298 => 
            array (
                'id' => 3799,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 229,
                'name' => 'Ras al-Khaymah',
            ),
            299 => 
            array (
                'id' => 3800,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 229,
                'name' => 'Sharjah',
            ),
            300 => 
            array (
                'id' => 3801,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 229,
                'name' => 'Sharjha',
            ),
            301 => 
            array (
                'id' => 3802,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 229,
                'name' => 'Umm al Qaywayn',
            ),
            302 => 
            array (
                'id' => 3803,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 229,
                'name' => 'al-Fujayrah',
            ),
            303 => 
            array (
                'id' => 3804,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 229,
                'name' => 'ash-Shariqah',
            ),
            304 => 
            array (
                'id' => 3805,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'Aberdeen',
            ),
            305 => 
            array (
                'id' => 3806,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'Aberdeenshire',
            ),
            306 => 
            array (
                'id' => 3807,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'Argyll',
            ),
            307 => 
            array (
                'id' => 3808,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'Armagh',
            ),
            308 => 
            array (
                'id' => 3809,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'Bedfordshire',
            ),
            309 => 
            array (
                'id' => 3810,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'Belfast',
            ),
            310 => 
            array (
                'id' => 3811,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'Berkshire',
            ),
            311 => 
            array (
                'id' => 3812,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'Birmingham',
            ),
            312 => 
            array (
                'id' => 3813,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'Brechin',
            ),
            313 => 
            array (
                'id' => 3814,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'Bridgnorth',
            ),
            314 => 
            array (
                'id' => 3815,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'Bristol',
            ),
            315 => 
            array (
                'id' => 3816,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'Buckinghamshire',
            ),
            316 => 
            array (
                'id' => 3817,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'Cambridge',
            ),
            317 => 
            array (
                'id' => 3818,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'Cambridgeshire',
            ),
            318 => 
            array (
                'id' => 3819,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'Channel Islands',
            ),
            319 => 
            array (
                'id' => 3820,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'Cheshire',
            ),
            320 => 
            array (
                'id' => 3821,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'Cleveland',
            ),
            321 => 
            array (
                'id' => 3822,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'Co Fermanagh',
            ),
            322 => 
            array (
                'id' => 3823,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'Conwy',
            ),
            323 => 
            array (
                'id' => 3824,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'Cornwall',
            ),
            324 => 
            array (
                'id' => 3825,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'Coventry',
            ),
            325 => 
            array (
                'id' => 3826,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'Craven Arms',
            ),
            326 => 
            array (
                'id' => 3827,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'Cumbria',
            ),
            327 => 
            array (
                'id' => 3828,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'Denbighshire',
            ),
            328 => 
            array (
                'id' => 3829,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'Derby',
            ),
            329 => 
            array (
                'id' => 3830,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'Derbyshire',
            ),
            330 => 
            array (
                'id' => 3831,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'Devon',
            ),
            331 => 
            array (
                'id' => 3832,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'Dial Code Dungannon',
            ),
            332 => 
            array (
                'id' => 3833,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'Didcot',
            ),
            333 => 
            array (
                'id' => 3834,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'Dorset',
            ),
            334 => 
            array (
                'id' => 3835,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'Dunbartonshire',
            ),
            335 => 
            array (
                'id' => 3836,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'Durham',
            ),
            336 => 
            array (
                'id' => 3837,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'East Dunbartonshire',
            ),
            337 => 
            array (
                'id' => 3838,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'East Lothian',
            ),
            338 => 
            array (
                'id' => 3839,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'East Midlands',
            ),
            339 => 
            array (
                'id' => 3840,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'East Sussex',
            ),
            340 => 
            array (
                'id' => 3841,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'East Yorkshire',
            ),
            341 => 
            array (
                'id' => 3842,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'England',
            ),
            342 => 
            array (
                'id' => 3843,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'Essex',
            ),
            343 => 
            array (
                'id' => 3844,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'Fermanagh',
            ),
            344 => 
            array (
                'id' => 3845,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'Fife',
            ),
            345 => 
            array (
                'id' => 3846,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'Flintshire',
            ),
            346 => 
            array (
                'id' => 3847,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'Fulham',
            ),
            347 => 
            array (
                'id' => 3848,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'Gainsborough',
            ),
            348 => 
            array (
                'id' => 3849,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'Glocestershire',
            ),
            349 => 
            array (
                'id' => 3850,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'Gwent',
            ),
            350 => 
            array (
                'id' => 3851,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'Hampshire',
            ),
            351 => 
            array (
                'id' => 3852,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'Hants',
            ),
            352 => 
            array (
                'id' => 3853,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'Herefordshire',
            ),
            353 => 
            array (
                'id' => 3854,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'Hertfordshire',
            ),
            354 => 
            array (
                'id' => 3855,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'Ireland',
            ),
            355 => 
            array (
                'id' => 3856,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'Isle Of Man',
            ),
            356 => 
            array (
                'id' => 3857,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'Isle of Wight',
            ),
            357 => 
            array (
                'id' => 3858,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'Kenford',
            ),
            358 => 
            array (
                'id' => 3859,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'Kent',
            ),
            359 => 
            array (
                'id' => 3860,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'Kilmarnock',
            ),
            360 => 
            array (
                'id' => 3861,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'Lanarkshire',
            ),
            361 => 
            array (
                'id' => 3862,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'Lancashire',
            ),
            362 => 
            array (
                'id' => 3863,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'Leicestershire',
            ),
            363 => 
            array (
                'id' => 3864,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'Lincolnshire',
            ),
            364 => 
            array (
                'id' => 3865,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'Llanymynech',
            ),
            365 => 
            array (
                'id' => 3866,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'London',
            ),
            366 => 
            array (
                'id' => 3867,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'Ludlow',
            ),
            367 => 
            array (
                'id' => 3868,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'Manchester',
            ),
            368 => 
            array (
                'id' => 3869,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'Mayfair',
            ),
            369 => 
            array (
                'id' => 3870,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'Merseyside',
            ),
            370 => 
            array (
                'id' => 3871,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'Mid Glamorgan',
            ),
            371 => 
            array (
                'id' => 3872,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'Middlesex',
            ),
            372 => 
            array (
                'id' => 3873,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'Mildenhall',
            ),
            373 => 
            array (
                'id' => 3874,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'Monmouthshire',
            ),
            374 => 
            array (
                'id' => 3875,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'Newton Stewart',
            ),
            375 => 
            array (
                'id' => 3876,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'Norfolk',
            ),
            376 => 
            array (
                'id' => 3877,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'North Humberside',
            ),
            377 => 
            array (
                'id' => 3878,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'North Yorkshire',
            ),
            378 => 
            array (
                'id' => 3879,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'Northamptonshire',
            ),
            379 => 
            array (
                'id' => 3880,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'Northants',
            ),
            380 => 
            array (
                'id' => 3881,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'Northern Ireland',
            ),
            381 => 
            array (
                'id' => 3882,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'Northumberland',
            ),
            382 => 
            array (
                'id' => 3883,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'Nottinghamshire',
            ),
            383 => 
            array (
                'id' => 3884,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'Oxford',
            ),
            384 => 
            array (
                'id' => 3885,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'Powys',
            ),
            385 => 
            array (
                'id' => 3886,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'Roos-shire',
            ),
            386 => 
            array (
                'id' => 3887,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'SUSSEX',
            ),
            387 => 
            array (
                'id' => 3888,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'Sark',
            ),
            388 => 
            array (
                'id' => 3889,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'Scotland',
            ),
            389 => 
            array (
                'id' => 3890,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'Scottish Borders',
            ),
            390 => 
            array (
                'id' => 3891,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'Shropshire',
            ),
            391 => 
            array (
                'id' => 3892,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'Somerset',
            ),
            392 => 
            array (
                'id' => 3893,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'South Glamorgan',
            ),
            393 => 
            array (
                'id' => 3894,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'South Wales',
            ),
            394 => 
            array (
                'id' => 3895,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'South Yorkshire',
            ),
            395 => 
            array (
                'id' => 3896,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'Southwell',
            ),
            396 => 
            array (
                'id' => 3897,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'Staffordshire',
            ),
            397 => 
            array (
                'id' => 3898,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'Strabane',
            ),
            398 => 
            array (
                'id' => 3899,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'Suffolk',
            ),
            399 => 
            array (
                'id' => 3900,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'Surrey',
            ),
            400 => 
            array (
                'id' => 3901,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'Sussex',
            ),
            401 => 
            array (
                'id' => 3902,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'Twickenham',
            ),
            402 => 
            array (
                'id' => 3903,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'Tyne and Wear',
            ),
            403 => 
            array (
                'id' => 3904,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'Tyrone',
            ),
            404 => 
            array (
                'id' => 3905,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'Utah',
            ),
            405 => 
            array (
                'id' => 3906,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'Wales',
            ),
            406 => 
            array (
                'id' => 3907,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'Warwickshire',
            ),
            407 => 
            array (
                'id' => 3908,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'West Lothian',
            ),
            408 => 
            array (
                'id' => 3909,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'West Midlands',
            ),
            409 => 
            array (
                'id' => 3910,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'West Sussex',
            ),
            410 => 
            array (
                'id' => 3911,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'West Yorkshire',
            ),
            411 => 
            array (
                'id' => 3912,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'Whissendine',
            ),
            412 => 
            array (
                'id' => 3913,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'Wiltshire',
            ),
            413 => 
            array (
                'id' => 3914,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'Wokingham',
            ),
            414 => 
            array (
                'id' => 3915,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'Worcestershire',
            ),
            415 => 
            array (
                'id' => 3916,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'Wrexham',
            ),
            416 => 
            array (
                'id' => 3917,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'Wurttemberg',
            ),
            417 => 
            array (
                'id' => 3918,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 230,
                'name' => 'Yorkshire',
            ),
            418 => 
            array (
                'id' => 3919,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 231,
                'name' => 'Alabama',
            ),
            419 => 
            array (
                'id' => 3920,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 231,
                'name' => 'Alaska',
            ),
            420 => 
            array (
                'id' => 3921,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 231,
                'name' => 'Arizona',
            ),
            421 => 
            array (
                'id' => 3922,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 231,
                'name' => 'Arkansas',
            ),
            422 => 
            array (
                'id' => 3923,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 231,
                'name' => 'Byram',
            ),
            423 => 
            array (
                'id' => 3924,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 231,
                'name' => 'California',
            ),
            424 => 
            array (
                'id' => 3925,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 231,
                'name' => 'Cokato',
            ),
            425 => 
            array (
                'id' => 3926,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 231,
                'name' => 'Colorado',
            ),
            426 => 
            array (
                'id' => 3927,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 231,
                'name' => 'Connecticut',
            ),
            427 => 
            array (
                'id' => 3928,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 231,
                'name' => 'Delaware',
            ),
            428 => 
            array (
                'id' => 3929,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 231,
                'name' => 'District of Columbia',
            ),
            429 => 
            array (
                'id' => 3930,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 231,
                'name' => 'Florida',
            ),
            430 => 
            array (
                'id' => 3931,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 231,
                'name' => 'Georgia',
            ),
            431 => 
            array (
                'id' => 3932,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 231,
                'name' => 'Hawaii',
            ),
            432 => 
            array (
                'id' => 3933,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 231,
                'name' => 'Idaho',
            ),
            433 => 
            array (
                'id' => 3934,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 231,
                'name' => 'Illinois',
            ),
            434 => 
            array (
                'id' => 3935,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 231,
                'name' => 'Indiana',
            ),
            435 => 
            array (
                'id' => 3936,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 231,
                'name' => 'Iowa',
            ),
            436 => 
            array (
                'id' => 3937,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 231,
                'name' => 'Kansas',
            ),
            437 => 
            array (
                'id' => 3938,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 231,
                'name' => 'Kentucky',
            ),
            438 => 
            array (
                'id' => 3939,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 231,
                'name' => 'Louisiana',
            ),
            439 => 
            array (
                'id' => 3940,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 231,
                'name' => 'Lowa',
            ),
            440 => 
            array (
                'id' => 3941,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 231,
                'name' => 'Maine',
            ),
            441 => 
            array (
                'id' => 3942,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 231,
                'name' => 'Maryland',
            ),
            442 => 
            array (
                'id' => 3943,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 231,
                'name' => 'Massachusetts',
            ),
            443 => 
            array (
                'id' => 3944,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 231,
                'name' => 'Medfield',
            ),
            444 => 
            array (
                'id' => 3945,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 231,
                'name' => 'Michigan',
            ),
            445 => 
            array (
                'id' => 3946,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 231,
                'name' => 'Minnesota',
            ),
            446 => 
            array (
                'id' => 3947,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 231,
                'name' => 'Mississippi',
            ),
            447 => 
            array (
                'id' => 3948,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 231,
                'name' => 'Missouri',
            ),
            448 => 
            array (
                'id' => 3949,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 231,
                'name' => 'Montana',
            ),
            449 => 
            array (
                'id' => 3950,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 231,
                'name' => 'Nebraska',
            ),
            450 => 
            array (
                'id' => 3951,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 231,
                'name' => 'Nevada',
            ),
            451 => 
            array (
                'id' => 3952,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 231,
                'name' => 'New Hampshire',
            ),
            452 => 
            array (
                'id' => 3953,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 231,
                'name' => 'New Jersey',
            ),
            453 => 
            array (
                'id' => 3954,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 231,
                'name' => 'New Jersy',
            ),
            454 => 
            array (
                'id' => 3955,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 231,
                'name' => 'New Mexico',
            ),
            455 => 
            array (
                'id' => 3956,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 231,
                'name' => 'New York',
            ),
            456 => 
            array (
                'id' => 3957,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 231,
                'name' => 'North Carolina',
            ),
            457 => 
            array (
                'id' => 3958,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 231,
                'name' => 'North Dakota',
            ),
            458 => 
            array (
                'id' => 3959,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 231,
                'name' => 'Ohio',
            ),
            459 => 
            array (
                'id' => 3960,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 231,
                'name' => 'Oklahoma',
            ),
            460 => 
            array (
                'id' => 3961,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 231,
                'name' => 'Ontario',
            ),
            461 => 
            array (
                'id' => 3962,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 231,
                'name' => 'Oregon',
            ),
            462 => 
            array (
                'id' => 3963,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 231,
                'name' => 'Pennsylvania',
            ),
            463 => 
            array (
                'id' => 3964,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 231,
                'name' => 'Ramey',
            ),
            464 => 
            array (
                'id' => 3965,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 231,
                'name' => 'Rhode Island',
            ),
            465 => 
            array (
                'id' => 3966,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 231,
                'name' => 'South Carolina',
            ),
            466 => 
            array (
                'id' => 3967,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 231,
                'name' => 'South Dakota',
            ),
            467 => 
            array (
                'id' => 3968,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 231,
                'name' => 'Sublimity',
            ),
            468 => 
            array (
                'id' => 3969,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 231,
                'name' => 'Tennessee',
            ),
            469 => 
            array (
                'id' => 3970,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 231,
                'name' => 'Texas',
            ),
            470 => 
            array (
                'id' => 3971,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 231,
                'name' => 'Trimble',
            ),
            471 => 
            array (
                'id' => 3972,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 231,
                'name' => 'Utah',
            ),
            472 => 
            array (
                'id' => 3973,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 231,
                'name' => 'Vermont',
            ),
            473 => 
            array (
                'id' => 3974,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 231,
                'name' => 'Virginia',
            ),
            474 => 
            array (
                'id' => 3975,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 231,
                'name' => 'Washington',
            ),
            475 => 
            array (
                'id' => 3976,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 231,
                'name' => 'West Virginia',
            ),
            476 => 
            array (
                'id' => 3977,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 231,
                'name' => 'Wisconsin',
            ),
            477 => 
            array (
                'id' => 3978,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 231,
                'name' => 'Wyoming',
            ),
            478 => 
            array (
                'id' => 3979,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 232,
                'name' => 'United States Minor Outlying I',
            ),
            479 => 
            array (
                'id' => 3980,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 233,
                'name' => 'Artigas',
            ),
            480 => 
            array (
                'id' => 3981,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 233,
                'name' => 'Canelones',
            ),
            481 => 
            array (
                'id' => 3982,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 233,
                'name' => 'Cerro Largo',
            ),
            482 => 
            array (
                'id' => 3983,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 233,
                'name' => 'Colonia',
            ),
            483 => 
            array (
                'id' => 3984,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 233,
                'name' => 'Durazno',
            ),
            484 => 
            array (
                'id' => 3985,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 233,
                'name' => 'FLorida',
            ),
            485 => 
            array (
                'id' => 3986,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 233,
                'name' => 'Flores',
            ),
            486 => 
            array (
                'id' => 3987,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 233,
                'name' => 'Lavalleja',
            ),
            487 => 
            array (
                'id' => 3988,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 233,
                'name' => 'Maldonado',
            ),
            488 => 
            array (
                'id' => 3989,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 233,
                'name' => 'Montevideo',
            ),
            489 => 
            array (
                'id' => 3990,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 233,
                'name' => 'Paysandu',
            ),
            490 => 
            array (
                'id' => 3991,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 233,
                'name' => 'Rio Negro',
            ),
            491 => 
            array (
                'id' => 3992,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 233,
                'name' => 'Rivera',
            ),
            492 => 
            array (
                'id' => 3993,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 233,
                'name' => 'Rocha',
            ),
            493 => 
            array (
                'id' => 3994,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 233,
                'name' => 'Salto',
            ),
            494 => 
            array (
                'id' => 3995,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 233,
                'name' => 'San Jose',
            ),
            495 => 
            array (
                'id' => 3996,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 233,
                'name' => 'Soriano',
            ),
            496 => 
            array (
                'id' => 3997,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 233,
                'name' => 'Tacuarembo',
            ),
            497 => 
            array (
                'id' => 3998,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 233,
                'name' => 'Treinta y Tres',
            ),
            498 => 
            array (
                'id' => 3999,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 234,
                'name' => 'Andijon',
            ),
            499 => 
            array (
                'id' => 4000,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 234,
                'name' => 'Buhoro',
            ),
        ));
        \DB::table('states')->insert(array (
            0 => 
            array (
                'id' => 4001,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 234,
                'name' => 'Buxoro Viloyati',
            ),
            1 => 
            array (
                'id' => 4002,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 234,
                'name' => 'Cizah',
            ),
            2 => 
            array (
                'id' => 4003,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 234,
                'name' => 'Fargona',
            ),
            3 => 
            array (
                'id' => 4004,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 234,
                'name' => 'Horazm',
            ),
            4 => 
            array (
                'id' => 4005,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 234,
                'name' => 'Kaskadar',
            ),
            5 => 
            array (
                'id' => 4006,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 234,
                'name' => 'Korakalpogiston',
            ),
            6 => 
            array (
                'id' => 4007,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 234,
                'name' => 'Namangan',
            ),
            7 => 
            array (
                'id' => 4008,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 234,
                'name' => 'Navoi',
            ),
            8 => 
            array (
                'id' => 4009,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 234,
                'name' => 'Samarkand',
            ),
            9 => 
            array (
                'id' => 4010,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 234,
                'name' => 'Sirdare',
            ),
            10 => 
            array (
                'id' => 4011,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 234,
                'name' => 'Surhondar',
            ),
            11 => 
            array (
                'id' => 4012,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 234,
                'name' => 'Toskent',
            ),
            12 => 
            array (
                'id' => 4013,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 235,
                'name' => 'Malampa',
            ),
            13 => 
            array (
                'id' => 4014,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 235,
                'name' => 'Penama',
            ),
            14 => 
            array (
                'id' => 4015,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 235,
                'name' => 'Sanma',
            ),
            15 => 
            array (
                'id' => 4016,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 235,
                'name' => 'Shefa',
            ),
            16 => 
            array (
                'id' => 4017,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 235,
                'name' => 'Tafea',
            ),
            17 => 
            array (
                'id' => 4018,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 235,
                'name' => 'Torba',
            ),
            18 => 
            array (
                'id' => 4019,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 236,
            'name' => 'Vatican City State (Holy See)',
            ),
            19 => 
            array (
                'id' => 4020,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 237,
                'name' => 'Amazonas',
            ),
            20 => 
            array (
                'id' => 4021,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 237,
                'name' => 'Anzoategui',
            ),
            21 => 
            array (
                'id' => 4022,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 237,
                'name' => 'Apure',
            ),
            22 => 
            array (
                'id' => 4023,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 237,
                'name' => 'Aragua',
            ),
            23 => 
            array (
                'id' => 4024,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 237,
                'name' => 'Barinas',
            ),
            24 => 
            array (
                'id' => 4025,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 237,
                'name' => 'Bolivar',
            ),
            25 => 
            array (
                'id' => 4026,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 237,
                'name' => 'Carabobo',
            ),
            26 => 
            array (
                'id' => 4027,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 237,
                'name' => 'Cojedes',
            ),
            27 => 
            array (
                'id' => 4028,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 237,
                'name' => 'Delta Amacuro',
            ),
            28 => 
            array (
                'id' => 4029,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 237,
                'name' => 'Distrito Federal',
            ),
            29 => 
            array (
                'id' => 4030,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 237,
                'name' => 'Falcon',
            ),
            30 => 
            array (
                'id' => 4031,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 237,
                'name' => 'Guarico',
            ),
            31 => 
            array (
                'id' => 4032,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 237,
                'name' => 'Lara',
            ),
            32 => 
            array (
                'id' => 4033,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 237,
                'name' => 'Merida',
            ),
            33 => 
            array (
                'id' => 4034,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 237,
                'name' => 'Miranda',
            ),
            34 => 
            array (
                'id' => 4035,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 237,
                'name' => 'Monagas',
            ),
            35 => 
            array (
                'id' => 4036,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 237,
                'name' => 'Nueva Esparta',
            ),
            36 => 
            array (
                'id' => 4037,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 237,
                'name' => 'Portuguesa',
            ),
            37 => 
            array (
                'id' => 4038,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 237,
                'name' => 'Sucre',
            ),
            38 => 
            array (
                'id' => 4039,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 237,
                'name' => 'Tachira',
            ),
            39 => 
            array (
                'id' => 4040,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 237,
                'name' => 'Trujillo',
            ),
            40 => 
            array (
                'id' => 4041,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 237,
                'name' => 'Vargas',
            ),
            41 => 
            array (
                'id' => 4042,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 237,
                'name' => 'Yaracuy',
            ),
            42 => 
            array (
                'id' => 4043,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 237,
                'name' => 'Zulia',
            ),
            43 => 
            array (
                'id' => 4064,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 239,
                'name' => 'Anegada',
            ),
            44 => 
            array (
                'id' => 4065,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 239,
                'name' => 'Jost van Dyke',
            ),
            45 => 
            array (
                'id' => 4066,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 239,
                'name' => 'Tortola',
            ),
            46 => 
            array (
                'id' => 4067,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 240,
                'name' => 'Saint Croix',
            ),
            47 => 
            array (
                'id' => 4068,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 240,
                'name' => 'Saint John',
            ),
            48 => 
            array (
                'id' => 4069,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 240,
                'name' => 'Saint Thomas',
            ),
            49 => 
            array (
                'id' => 4070,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 241,
                'name' => 'Alo',
            ),
            50 => 
            array (
                'id' => 4071,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 241,
                'name' => 'Singave',
            ),
            51 => 
            array (
                'id' => 4072,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 241,
                'name' => 'Wallis',
            ),
            52 => 
            array (
                'id' => 4073,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 242,
                'name' => 'Bu Jaydur',
            ),
            53 => 
            array (
                'id' => 4074,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 242,
                'name' => 'Wad-adh-Dhahab',
            ),
            54 => 
            array (
                'id' => 4075,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 242,
                'name' => 'al-\'Ayun',
            ),
            55 => 
            array (
                'id' => 4076,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 242,
                'name' => 'as-Samarah',
            ),
            56 => 
            array (
                'id' => 4077,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 243,
                'name' => '\'Adan',
            ),
            57 => 
            array (
                'id' => 4078,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 243,
                'name' => 'Abyan',
            ),
            58 => 
            array (
                'id' => 4079,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 243,
                'name' => 'Dhamar',
            ),
            59 => 
            array (
                'id' => 4080,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 243,
                'name' => 'Hadramaut',
            ),
            60 => 
            array (
                'id' => 4081,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 243,
                'name' => 'Hajjah',
            ),
            61 => 
            array (
                'id' => 4082,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 243,
                'name' => 'Hudaydah',
            ),
            62 => 
            array (
                'id' => 4083,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 243,
                'name' => 'Ibb',
            ),
            63 => 
            array (
                'id' => 4084,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 243,
                'name' => 'Lahij',
            ),
            64 => 
            array (
                'id' => 4085,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 243,
                'name' => 'Ma\'rib',
            ),
            65 => 
            array (
                'id' => 4086,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 243,
                'name' => 'Madinat San\'a',
            ),
            66 => 
            array (
                'id' => 4087,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 243,
                'name' => 'Sa\'dah',
            ),
            67 => 
            array (
                'id' => 4088,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 243,
                'name' => 'Sana',
            ),
            68 => 
            array (
                'id' => 4089,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 243,
                'name' => 'Shabwah',
            ),
            69 => 
            array (
                'id' => 4090,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 243,
                'name' => 'Ta\'izz',
            ),
            70 => 
            array (
                'id' => 4091,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 243,
                'name' => 'al-Bayda',
            ),
            71 => 
            array (
                'id' => 4092,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 243,
                'name' => 'al-Hudaydah',
            ),
            72 => 
            array (
                'id' => 4093,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 243,
                'name' => 'al-Jawf',
            ),
            73 => 
            array (
                'id' => 4094,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 243,
                'name' => 'al-Mahrah',
            ),
            74 => 
            array (
                'id' => 4095,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 243,
                'name' => 'al-Mahwit',
            ),
            75 => 
            array (
                'id' => 4096,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 244,
                'name' => 'Central Serbia',
            ),
            76 => 
            array (
                'id' => 4097,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 244,
                'name' => 'Kosovo and Metohija',
            ),
            77 => 
            array (
                'id' => 4098,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 244,
                'name' => 'Montenegro',
            ),
            78 => 
            array (
                'id' => 4099,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 244,
                'name' => 'Republic of Serbia',
            ),
            79 => 
            array (
                'id' => 4100,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 244,
                'name' => 'Serbia',
            ),
            80 => 
            array (
                'id' => 4101,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 244,
                'name' => 'Vojvodina',
            ),
            81 => 
            array (
                'id' => 4102,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 245,
                'name' => 'Central',
            ),
            82 => 
            array (
                'id' => 4103,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 245,
                'name' => 'Copperbelt',
            ),
            83 => 
            array (
                'id' => 4104,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 245,
                'name' => 'Eastern',
            ),
            84 => 
            array (
                'id' => 4105,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 245,
                'name' => 'Luapala',
            ),
            85 => 
            array (
                'id' => 4106,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 245,
                'name' => 'Lusaka',
            ),
            86 => 
            array (
                'id' => 4107,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 245,
                'name' => 'North-Western',
            ),
            87 => 
            array (
                'id' => 4108,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 245,
                'name' => 'Northern',
            ),
            88 => 
            array (
                'id' => 4109,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 245,
                'name' => 'Southern',
            ),
            89 => 
            array (
                'id' => 4110,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 245,
                'name' => 'Western',
            ),
            90 => 
            array (
                'id' => 4111,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 246,
                'name' => 'Bulawayo',
            ),
            91 => 
            array (
                'id' => 4112,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 246,
                'name' => 'Harare',
            ),
            92 => 
            array (
                'id' => 4113,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 246,
                'name' => 'Manicaland',
            ),
            93 => 
            array (
                'id' => 4114,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 246,
                'name' => 'Mashonaland Central',
            ),
            94 => 
            array (
                'id' => 4115,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 246,
                'name' => 'Mashonaland East',
            ),
            95 => 
            array (
                'id' => 4116,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 246,
                'name' => 'Mashonaland West',
            ),
            96 => 
            array (
                'id' => 4117,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 246,
                'name' => 'Masvingo',
            ),
            97 => 
            array (
                'id' => 4118,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 246,
                'name' => 'Matabeleland North',
            ),
            98 => 
            array (
                'id' => 4119,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 246,
                'name' => 'Matabeleland South',
            ),
            99 => 
            array (
                'id' => 4120,
                'created_at' => NULL,
                'updated_at' => NULL,
                'country_id' => 246,
                'name' => 'Midlands',
            ),
        ));
        
        
    }
}
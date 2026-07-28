<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Port;

class PortSeeder extends Seeder
{
    public function run(): void
    {

        $ports = [

            // Indonesia
[
    'country_id' => 1,
    'port_name' => 'Port of Tanjung Priok',
    'port_code' => 'IDTPP',
    'city' => 'Jakarta',
    'latitude' => -6.104,
    'longitude' => 106.886,
    'status' => 'Active',
    'congestion_level' => 'Medium',
    'description' => 'Pelabuhan terbesar Indonesia.'
],

// Singapore
[
    'country_id' => 2,
    'port_name' => 'Port of Singapore',
    'port_code' => 'SGSIN',
    'city' => 'Singapore',
    'latitude' => 1.264,
    'longitude' => 103.840,
    'status' => 'Active',
    'congestion_level' => 'High',
    'description' => 'Pelabuhan terbesar Singapura.'
],

// Malaysia
[
    'country_id' => 3,
    'port_name' => 'Port Klang',
    'port_code' => 'MYPKG',
    'city' => 'Port Klang',
    'latitude' => 3.000,
    'longitude' => 101.400,
    'status' => 'Active',
    'congestion_level' => 'Medium',
    'description' => 'Pelabuhan terbesar Malaysia.'
],

// China
[
    'country_id' => 4,
    'port_name' => 'Port of Shanghai',
    'port_code' => 'CNSHG',
    'city' => 'Shanghai',
    'latitude' => 31.230,
    'longitude' => 121.491,
    'status' => 'Active',
    'congestion_level' => 'High',
    'description' => 'Pelabuhan terbesar China.'
],

// Japan
[
    'country_id' => 5,
    'port_name' => 'Port of Tokyo',
    'port_code' => 'JPTYO',
    'city' => 'Tokyo',
    'latitude' => 35.630,
    'longitude' => 139.790,
    'status' => 'Active',
    'congestion_level' => 'Low',
    'description' => 'Pelabuhan utama Jepang.'
],

// Thailand
[
    'country_id' => 6,
    'port_name' => 'Port of Laem Chabang',
    'port_code' => 'THLCH',
    'city' => 'Chonburi',
    'latitude' => 13.082,
    'longitude' => 100.883,
    'status' => 'Active',
    'congestion_level' => 'Medium',
    'description' => 'Pelabuhan terbesar Thailand.'
],

// Vietnam
[
    'country_id' => 7,
    'port_name' => 'Port of Hai Phong',
    'port_code' => 'VNHPH',
    'city' => 'Hai Phong',
    'latitude' => 20.864,
    'longitude' => 106.683,
    'status' => 'Active',
    'congestion_level' => 'Medium',
    'description' => 'Pelabuhan terbesar Vietnam.'
],

// South Korea
[
    'country_id' => 8,
    'port_name' => 'Port of Busan',
    'port_code' => 'KRPUS',
    'city' => 'Busan',
    'latitude' => 35.102,
    'longitude' => 129.040,
    'status' => 'Active',
    'congestion_level' => 'High',
    'description' => 'Pelabuhan terbesar Korea Selatan.'
],

// Saudi Arabia
[
    'country_id' => 9,
    'port_name' => 'Jeddah Islamic Port',
    'port_code' => 'SAJED',
    'city' => 'Jeddah',
    'latitude' => 21.485,
    'longitude' => 39.173,
    'status' => 'Active',
    'congestion_level' => 'Medium',
    'description' => 'Pelabuhan utama Arab Saudi.'
],

// Qatar
[
    'country_id' => 10,
    'port_name' => 'Port of Hamad',
    'port_code' => 'QAHMD',
    'city' => 'Doha',
    'latitude' => 25.008,
    'longitude' => 51.617,
    'status' => 'Active',
    'congestion_level' => 'Low',
    'description' => 'Pelabuhan utama Qatar.'
],

// Afghanistan
[
    'country_id' => 11,
    'port_name' => 'Port of Karachi',
    'port_code' => 'PKKHI',
    'city' => 'Karachi',
    'latitude' => 24.847,
    'longitude' => 66.975,
    'status' => 'Active',
    'congestion_level' => 'Medium',
    'description' => 'Afghanistan merupakan negara tanpa laut dan menggunakan Pelabuhan Karachi di Pakistan sebagai pelabuhan utama.'
],

// Åland Islands
[
    'country_id' => 12,
    'port_name' => 'Port of Mariehamn',
    'port_code' => 'AXMHQ',
    'city' => 'Mariehamn',
    'latitude' => 60.097,
    'longitude' => 19.934,
    'status' => 'Active',
    'congestion_level' => 'Low',
    'description' => 'Pelabuhan utama Åland Islands.'
],

// Albania
[
    'country_id' => 13,
    'port_name' => 'Port of Durrës',
    'port_code' => 'ALDRZ',
    'city' => 'Durrës',
    'latitude' => 41.314,
    'longitude' => 19.456,
    'status' => 'Active',
    'congestion_level' => 'Low',
    'description' => 'Pelabuhan terbesar Albania.'
],

// Algeria
[
    'country_id' => 14,
    'port_name' => 'Port of Algiers',
    'port_code' => 'DZALG',
    'city' => 'Algiers',
    'latitude' => 36.776,
    'longitude' => 3.059,
    'status' => 'Active',
    'congestion_level' => 'Medium',
    'description' => 'Pelabuhan utama Aljazair.'
],

// American Samoa
[
    'country_id' => 15,
    'port_name' => 'Port of Pago Pago',
    'port_code' => 'ASPPG',
    'city' => 'Pago Pago',
    'latitude' => -14.279,
    'longitude' => -170.690,
    'status' => 'Active',
    'congestion_level' => 'Low',
    'description' => 'Pelabuhan utama American Samoa.'
],

// Andorra
[
    'country_id' => 16,
    'port_name' => 'No Seaport',
    'port_code' => 'N/A',
    'city' => 'Andorra la Vella',
    'latitude' => 42.506,
    'longitude' => 1.521,
    'status' => 'Closed',
    'congestion_level' => 'Low',
    'description' => 'Andorra tidak memiliki pelabuhan laut.'
],

// Angola
[
    'country_id' => 17,
    'port_name' => 'Port of Luanda',
    'port_code' => 'AOLAD',
    'city' => 'Luanda',
    'latitude' => -8.783,
    'longitude' => 13.234,
    'status' => 'Active',
    'congestion_level' => 'Medium',
    'description' => 'Pelabuhan terbesar Angola.'
],

// Anguilla
[
    'country_id' => 18,
    'port_name' => 'Road Bay Port',
    'port_code' => 'AIRDB',
    'city' => 'The Valley',
    'latitude' => 18.217,
    'longitude' => -63.056,
    'status' => 'Active',
    'congestion_level' => 'Low',
    'description' => 'Pelabuhan utama Anguilla.'
],

// Antarctica
[
    'country_id' => 19,
    'port_name' => 'No Seaport',
    'port_code' => 'N/A',
    'city' => 'Antarctica',
    'latitude' => -82.8628,
    'longitude' => 135.0000,
    'status' => 'Closed',
    'congestion_level' => 'Low',
    'description' => 'Antarktika tidak memiliki pelabuhan komersial permanen.'
],

// Antigua and Barbuda
[
    'country_id' => 20,
    'port_name' => "St. John's Harbour",
    'port_code' => 'AGSJO',
    'city' => "Saint John's",
    'latitude' => 17.120,
    'longitude' => -61.845,
    'status' => 'Active',
    'congestion_level' => 'Low',
    'description' => 'Pelabuhan utama Antigua dan Barbuda.'
],

// Argentina
[
    'country_id' => 21,
    'port_name' => 'Port of Buenos Aires',
    'port_code' => 'ARBUE',
    'city' => 'Buenos Aires',
    'latitude' => -34.603,
    'longitude' => -58.369,
    'status' => 'Active',
    'congestion_level' => 'Medium',
    'description' => 'Pelabuhan terbesar Argentina.'
],

// Armenia
[
    'country_id' => 22,
    'port_name' => 'Port of Poti',
    'port_code' => 'GEPOT',
    'city' => 'Poti',
    'latitude' => 42.147,
    'longitude' => 41.671,
    'status' => 'Active',
    'congestion_level' => 'Low',
    'description' => 'Armenia menggunakan Pelabuhan Poti di Georgia sebagai akses laut utama.'
],

// Aruba
[
    'country_id' => 23,
    'port_name' => 'Port of Oranjestad',
    'port_code' => 'AWORJ',
    'city' => 'Oranjestad',
    'latitude' => 12.520,
    'longitude' => -70.037,
    'status' => 'Active',
    'congestion_level' => 'Low',
    'description' => 'Pelabuhan utama Aruba.'
],

// Australia
[
    'country_id' => 24,
    'port_name' => 'Port of Melbourne',
    'port_code' => 'AUMEL',
    'city' => 'Melbourne',
    'latitude' => -37.814,
    'longitude' => 144.946,
    'status' => 'Active',
    'congestion_level' => 'Medium',
    'description' => 'Pelabuhan terbesar Australia.'
],

// Austria
[
    'country_id' => 25,
    'port_name' => 'Port of Vienna',
    'port_code' => 'ATVIE',
    'city' => 'Vienna',
    'latitude' => 48.210,
    'longitude' => 16.384,
    'status' => 'Active',
    'congestion_level' => 'Low',
    'description' => 'Pelabuhan sungai utama Austria.'
],

// Azerbaijan
[
    'country_id' => 26,
    'port_name' => 'Port of Baku',
    'port_code' => 'AZBAK',
    'city' => 'Baku',
    'latitude' => 40.363,
    'longitude' => 49.850,
    'status' => 'Active',
    'congestion_level' => 'Medium',
    'description' => 'Pelabuhan utama Azerbaijan di Laut Kaspia.'
],

// Bahamas
[
    'country_id' => 27,
    'port_name' => 'Port of Nassau',
    'port_code' => 'BSNAS',
    'city' => 'Nassau',
    'latitude' => 25.079,
    'longitude' => -77.343,
    'status' => 'Active',
    'congestion_level' => 'Low',
    'description' => 'Pelabuhan utama Bahamas.'
],

// Bahrain
[
    'country_id' => 28,
    'port_name' => 'Mina Salman Port',
    'port_code' => 'BHMIN',
    'city' => 'Manama',
    'latitude' => 26.233,
    'longitude' => 50.617,
    'status' => 'Active',
    'congestion_level' => 'Low',
    'description' => 'Pelabuhan utama Bahrain.'
],

// Bangladesh
[
    'country_id' => 29,
    'port_name' => 'Port of Chittagong',
    'port_code' => 'BDCGP',
    'city' => 'Chittagong',
    'latitude' => 22.310,
    'longitude' => 91.800,
    'status' => 'Active',
    'congestion_level' => 'High',
    'description' => 'Pelabuhan terbesar Bangladesh.'
],

// Barbados
[
    'country_id' => 30,
    'port_name' => 'Port of Bridgetown',
    'port_code' => 'BBBGI',
    'city' => 'Bridgetown',
    'latitude' => 13.097,
    'longitude' => -59.618,
    'status' => 'Active',
    'congestion_level' => 'Low',
    'description' => 'Pelabuhan utama Barbados.'
],

// Belarus
[
    'country_id' => 31,
    'port_name' => 'Port of Klaipeda',
    'port_code' => 'LTKLJ',
    'city' => 'Klaipeda',
    'latitude' => 55.706,
    'longitude' => 21.131,
    'status' => 'Active',
    'congestion_level' => 'Low',
    'description' => 'Belarus menggunakan Pelabuhan Klaipeda di Lithuania sebagai akses laut utama.'
],

// Belgium
[
    'country_id' => 32,
    'port_name' => 'Port of Antwerp',
    'port_code' => 'BEANR',
    'city' => 'Antwerp',
    'latitude' => 51.260,
    'longitude' => 4.399,
    'status' => 'Active',
    'congestion_level' => 'Medium',
    'description' => 'Pelabuhan terbesar Belgia.'
],

// Belize
[
    'country_id' => 33,
    'port_name' => 'Port of Belize',
    'port_code' => 'BZBZE',
    'city' => 'Belize City',
    'latitude' => 17.499,
    'longitude' => -88.197,
    'status' => 'Active',
    'congestion_level' => 'Low',
    'description' => 'Pelabuhan utama Belize.'
],

// Benin
[
    'country_id' => 34,
    'port_name' => 'Port of Cotonou',
    'port_code' => 'BJCOO',
    'city' => 'Cotonou',
    'latitude' => 6.357,
    'longitude' => 2.434,
    'status' => 'Active',
    'congestion_level' => 'Medium',
    'description' => 'Pelabuhan terbesar Benin.'
],

// Bermuda
[
    'country_id' => 35,
    'port_name' => 'Port of Hamilton',
    'port_code' => 'BMHAM',
    'city' => 'Hamilton',
    'latitude' => 32.294,
    'longitude' => -64.781,
    'status' => 'Active',
    'congestion_level' => 'Low',
    'description' => 'Pelabuhan utama Bermuda.'
],

// Bhutan
[
    'country_id' => 36,
    'port_name' => 'Port of Kolkata',
    'port_code' => 'INCCU',
    'city' => 'Kolkata',
    'latitude' => 22.546,
    'longitude' => 88.322,
    'status' => 'Active',
    'congestion_level' => 'Medium',
    'description' => 'Bhutan merupakan negara tanpa laut dan menggunakan Pelabuhan Kolkata di India.'
],

// Bolivia
[
    'country_id' => 37,
    'port_name' => 'Port of Arica',
    'port_code' => 'CLARI',
    'city' => 'Arica',
    'latitude' => -18.478,
    'longitude' => -70.321,
    'status' => 'Active',
    'congestion_level' => 'Low',
    'description' => 'Bolivia menggunakan Pelabuhan Arica di Chile sebagai akses laut.'
],

// Bonaire
[
    'country_id' => 38,
    'port_name' => 'Port of Kralendijk',
    'port_code' => 'BQKRA',
    'city' => 'Kralendijk',
    'latitude' => 12.150,
    'longitude' => -68.276,
    'status' => 'Active',
    'congestion_level' => 'Low',
    'description' => 'Pelabuhan utama Bonaire.'
],

// Bosnia and Herzegovina
[
    'country_id' => 39,
    'port_name' => 'Port of Neum',
    'port_code' => 'BANEU',
    'city' => 'Neum',
    'latitude' => 42.923,
    'longitude' => 17.614,
    'status' => 'Active',
    'congestion_level' => 'Low',
    'description' => 'Pelabuhan utama Bosnia dan Herzegovina.'
],

// Botswana
[
    'country_id' => 40,
    'port_name' => 'Port of Durban',
    'port_code' => 'ZADUR',
    'city' => 'Durban',
    'latitude' => -29.871,
    'longitude' => 31.026,
    'status' => 'Active',
    'congestion_level' => 'Medium',
    'description' => 'Botswana menggunakan Pelabuhan Durban di Afrika Selatan.'
],

// Bouvet Island
[
    'country_id' => 41,
    'port_name' => 'No Seaport',
    'port_code' => 'N/A',
    'city' => 'Bouvet Island',
    'latitude' => -54.4208,
    'longitude' => 3.3464,
    'status' => 'Closed',
    'congestion_level' => 'Low',
    'description' => 'Bouvet Island tidak memiliki pelabuhan komersial permanen.'
],

// Brazil
[
    'country_id' => 42,
    'port_name' => 'Port of Santos',
    'port_code' => 'BRSSZ',
    'city' => 'Santos',
    'latitude' => -23.961,
    'longitude' => -46.328,
    'status' => 'Active',
    'congestion_level' => 'High',
    'description' => 'Pelabuhan terbesar Brasil.'
],

// British Indian Ocean Territory
[
    'country_id' => 43,
    'port_name' => 'Port of Diego Garcia',
    'port_code' => 'IODGA',
    'city' => 'Diego Garcia',
    'latitude' => -7.313,
    'longitude' => 72.411,
    'status' => 'Active',
    'congestion_level' => 'Low',
    'description' => 'Pelabuhan utama British Indian Ocean Territory.'
],

// United States Minor Outlying Islands
[
    'country_id' => 44,
    'port_name' => 'No Seaport',
    'port_code' => 'N/A',
    'city' => 'United States Minor Outlying Islands',
    'latitude' => 19.2833,
    'longitude' => 166.6000,
    'status' => 'Closed',
    'congestion_level' => 'Low',
    'description' => 'United States Minor Outlying Islands tidak memiliki pelabuhan komersial permanen.'
],

// Virgin Islands (British)
[
    'country_id' => 45,
    'port_name' => 'Port of Road Town',
    'port_code' => 'VGRAD',
    'city' => 'Road Town',
    'latitude' => 18.420,
    'longitude' => -64.618,
    'status' => 'Active',
    'congestion_level' => 'Low',
    'description' => 'Pelabuhan utama British Virgin Islands.'
],

// Virgin Islands (U.S.)
[
    'country_id' => 46,
    'port_name' => 'Port of Charlotte Amalie',
    'port_code' => 'VICHA',
    'city' => 'Charlotte Amalie',
    'latitude' => 18.341,
    'longitude' => -64.930,
    'status' => 'Active',
    'congestion_level' => 'Low',
    'description' => 'Pelabuhan utama U.S. Virgin Islands.'
],

// Brunei Darussalam
[
    'country_id' => 47,
    'port_name' => 'Muara Port',
    'port_code' => 'BNMUA',
    'city' => 'Muara',
    'latitude' => 5.024,
    'longitude' => 115.073,
    'status' => 'Active',
    'congestion_level' => 'Low',
    'description' => 'Pelabuhan utama Brunei Darussalam.'
],

// Bulgaria
[
    'country_id' => 48,
    'port_name' => 'Port of Varna',
    'port_code' => 'BGVAR',
    'city' => 'Varna',
    'latitude' => 43.205,
    'longitude' => 27.916,
    'status' => 'Active',
    'congestion_level' => 'Medium',
    'description' => 'Pelabuhan terbesar Bulgaria.'
],

// Burkina Faso
[
    'country_id' => 49,
    'port_name' => 'Port of Abidjan',
    'port_code' => 'CIABJ',
    'city' => 'Abidjan',
    'latitude' => 5.274,
    'longitude' => -4.003,
    'status' => 'Active',
    'congestion_level' => 'Medium',
    'description' => 'Burkina Faso menggunakan Pelabuhan Abidjan di Pantai Gading.'
],

// Burundi
[
    'country_id' => 50,
    'port_name' => 'Port of Bujumbura',
    'port_code' => 'BIBJM',
    'city' => 'Bujumbura',
    'latitude' => -3.381,
    'longitude' => 29.362,
    'status' => 'Active',
    'congestion_level' => 'Low',
    'description' => 'Pelabuhan utama Burundi di Danau Tanganyika.'
],

// Cambodia
[
    'country_id' => 51,
    'port_name' => 'Port of Sihanoukville',
    'port_code' => 'KHKOS',
    'city' => 'Sihanoukville',
    'latitude' => 10.626,
    'longitude' => 103.523,
    'status' => 'Active',
    'congestion_level' => 'Medium',
    'description' => 'Pelabuhan terbesar Kamboja.'
],

// Cameroon
[
    'country_id' => 52,
    'port_name' => 'Port of Douala',
    'port_code' => 'CMDLA',
    'city' => 'Douala',
    'latitude' => 4.048,
    'longitude' => 9.692,
    'status' => 'Active',
    'congestion_level' => 'Medium',
    'description' => 'Pelabuhan terbesar Kamerun.'
],

// Canada
[
    'country_id' => 53,
    'port_name' => 'Port of Vancouver',
    'port_code' => 'CAVAN',
    'city' => 'Vancouver',
    'latitude' => 49.293,
    'longitude' => -123.106,
    'status' => 'Active',
    'congestion_level' => 'Medium',
    'description' => 'Pelabuhan terbesar Kanada.'
],

// Cabo Verde
[
    'country_id' => 54,
    'port_name' => 'Port of Praia',
    'port_code' => 'CVRAI',
    'city' => 'Praia',
    'latitude' => 14.917,
    'longitude' => -23.509,
    'status' => 'Active',
    'congestion_level' => 'Low',
    'description' => 'Pelabuhan utama Cabo Verde.'
],

// Cayman Islands
[
    'country_id' => 55,
    'port_name' => 'Port of George Town',
    'port_code' => 'KYGEC',
    'city' => 'George Town',
    'latitude' => 19.286,
    'longitude' => -81.367,
    'status' => 'Active',
    'congestion_level' => 'Low',
    'description' => 'Pelabuhan utama Cayman Islands.'
],

// Central African Republic
[
    'country_id' => 56,
    'port_name' => 'Port of Douala',
    'port_code' => 'CMDLA',
    'city' => 'Douala',
    'latitude' => 4.048,
    'longitude' => 9.692,
    'status' => 'Active',
    'congestion_level' => 'Medium',
    'description' => 'Republik Afrika Tengah menggunakan Pelabuhan Douala di Kamerun.'
],

// Chad
[
    'country_id' => 57,
    'port_name' => 'Port of Douala',
    'port_code' => 'CMDLA',
    'city' => 'Douala',
    'latitude' => 4.048,
    'longitude' => 9.692,
    'status' => 'Active',
    'congestion_level' => 'Medium',
    'description' => 'Chad menggunakan Pelabuhan Douala di Kamerun.'
],

// Chile
[
    'country_id' => 58,
    'port_name' => 'Port of Valparaiso',
    'port_code' => 'CLVAP',
    'city' => 'Valparaiso',
    'latitude' => -33.036,
    'longitude' => -71.629,
    'status' => 'Active',
    'congestion_level' => 'Medium',
    'description' => 'Pelabuhan utama Chile.'
],

// Christmas Island
[
    'country_id' => 59,
    'port_name' => 'Flying Fish Cove Port',
    'port_code' => 'CXFFS',
    'city' => 'Flying Fish Cove',
    'latitude' => -10.421,
    'longitude' => 105.679,
    'status' => 'Active',
    'congestion_level' => 'Low',
    'description' => 'Pelabuhan utama Christmas Island.'
],

// Cocos (Keeling) Islands
[
    'country_id' => 60,
    'port_name' => 'Port of West Island',
    'port_code' => 'CCWIS',
    'city' => 'West Island',
    'latitude' => -12.188,
    'longitude' => 96.830,
    'status' => 'Active',
    'congestion_level' => 'Low',
    'description' => 'Pelabuhan utama Cocos (Keeling) Islands.'
],

// Colombia
[
    'country_id' => 61,
    'port_name' => 'Port of Cartagena',
    'port_code' => 'COCTG',
    'city' => 'Cartagena',
    'latitude' => 10.399,
    'longitude' => -75.514,
    'status' => 'Active',
    'congestion_level' => 'Medium',
    'description' => 'Pelabuhan terbesar Kolombia.'
],

// Comoros
[
    'country_id' => 62,
    'port_name' => 'Port of Moroni',
    'port_code' => 'KMMUT',
    'city' => 'Moroni',
    'latitude' => -11.702,
    'longitude' => 43.255,
    'status' => 'Active',
    'congestion_level' => 'Low',
    'description' => 'Pelabuhan utama Komoro.'
],

// Congo
[
    'country_id' => 63,
    'port_name' => 'Port of Pointe-Noire',
    'port_code' => 'CGPNR',
    'city' => 'Pointe-Noire',
    'latitude' => -4.785,
    'longitude' => 11.846,
    'status' => 'Active',
    'congestion_level' => 'Medium',
    'description' => 'Pelabuhan terbesar Republik Kongo.'
],

// Congo (Democratic Republic of the)
[
    'country_id' => 64,
    'port_name' => 'Port of Matadi',
    'port_code' => 'CDMAT',
    'city' => 'Matadi',
    'latitude' => -5.817,
    'longitude' => 13.450,
    'status' => 'Active',
    'congestion_level' => 'Medium',
    'description' => 'Pelabuhan utama Republik Demokratik Kongo.'
],

// Cook Islands
[
    'country_id' => 65,
    'port_name' => 'Port of Avarua',
    'port_code' => 'CKRAR',
    'city' => 'Avarua',
    'latitude' => -21.207,
    'longitude' => -159.775,
    'status' => 'Active',
    'congestion_level' => 'Low',
    'description' => 'Pelabuhan utama Cook Islands.'
],

// Costa Rica
[
    'country_id' => 66,
    'port_name' => 'Port of Limón',
    'port_code' => 'CRLIO',
    'city' => 'Limón',
    'latitude' => 9.991,
    'longitude' => -83.036,
    'status' => 'Active',
    'congestion_level' => 'Medium',
    'description' => 'Pelabuhan terbesar Kosta Rika.'
],

// Croatia
[
    'country_id' => 67,
    'port_name' => 'Port of Rijeka',
    'port_code' => 'HRRJK',
    'city' => 'Rijeka',
    'latitude' => 45.327,
    'longitude' => 14.442,
    'status' => 'Active',
    'congestion_level' => 'Medium',
    'description' => 'Pelabuhan terbesar Kroasia.'
],

// Cuba
[
    'country_id' => 68,
    'port_name' => 'Port of Havana',
    'port_code' => 'CUHAV',
    'city' => 'Havana',
    'latitude' => 23.113,
    'longitude' => -82.366,
    'status' => 'Active',
    'congestion_level' => 'Medium',
    'description' => 'Pelabuhan utama Kuba.'
],

// Curaçao
[
    'country_id' => 69,
    'port_name' => 'Port of Willemstad',
    'port_code' => 'CWWIL',
    'city' => 'Willemstad',
    'latitude' => 12.108,
    'longitude' => -68.934,
    'status' => 'Active',
    'congestion_level' => 'Low',
    'description' => 'Pelabuhan utama Curaçao.'
],

// Cyprus
[
    'country_id' => 70,
    'port_name' => 'Port of Limassol',
    'port_code' => 'CYLMS',
    'city' => 'Limassol',
    'latitude' => 34.650,
    'longitude' => 33.033,
    'status' => 'Active',
    'congestion_level' => 'Medium',
    'description' => 'Pelabuhan terbesar Siprus.'
],

// Czech Republic
[
    'country_id' => 71,
    'port_name' => 'Port of Hamburg',
    'port_code' => 'DEHAM',
    'city' => 'Hamburg',
    'latitude' => 53.546,
    'longitude' => 9.966,
    'status' => 'Active',
    'congestion_level' => 'Medium',
    'description' => 'Republik Ceko menggunakan Pelabuhan Hamburg di Jerman.'
],

// Denmark
[
    'country_id' => 72,
    'port_name' => 'Port of Copenhagen',
    'port_code' => 'DKCPH',
    'city' => 'Copenhagen',
    'latitude' => 55.676,
    'longitude' => 12.596,
    'status' => 'Active',
    'congestion_level' => 'Medium',
    'description' => 'Pelabuhan utama Denmark.'
],

// Djibouti
[
    'country_id' => 73,
    'port_name' => 'Port of Djibouti',
    'port_code' => 'DJJIB',
    'city' => 'Djibouti',
    'latitude' => 11.595,
    'longitude' => 43.148,
    'status' => 'Active',
    'congestion_level' => 'Medium',
    'description' => 'Pelabuhan terbesar Djibouti.'
],

// Dominica
[
    'country_id' => 74,
    'port_name' => 'Port of Roseau',
    'port_code' => 'DMRSU',
    'city' => 'Roseau',
    'latitude' => 15.301,
    'longitude' => -61.387,
    'status' => 'Active',
    'congestion_level' => 'Low',
    'description' => 'Pelabuhan utama Dominika.'
],

// Dominican Republic
[
    'country_id' => 75,
    'port_name' => 'Port of Santo Domingo',
    'port_code' => 'DOSDQ',
    'city' => 'Santo Domingo',
    'latitude' => 18.473,
    'longitude' => -69.882,
    'status' => 'Active',
    'congestion_level' => 'Medium',
    'description' => 'Pelabuhan utama Republik Dominika.'
],

// Ecuador
[
    'country_id' => 76,
    'port_name' => 'Port of Guayaquil',
    'port_code' => 'ECGYE',
    'city' => 'Guayaquil',
    'latitude' => -2.274,
    'longitude' => -79.884,
    'status' => 'Active',
    'congestion_level' => 'Medium',
    'description' => 'Pelabuhan terbesar Ekuador.'
],

// Egypt
[
    'country_id' => 77,
    'port_name' => 'Port of Alexandria',
    'port_code' => 'EGALY',
    'city' => 'Alexandria',
    'latitude' => 31.200,
    'longitude' => 29.918,
    'status' => 'Active',
    'congestion_level' => 'High',
    'description' => 'Pelabuhan terbesar Mesir.'
],

// El Salvador
[
    'country_id' => 78,
    'port_name' => 'Port of Acajutla',
    'port_code' => 'SVACJ',
    'city' => 'Acajutla',
    'latitude' => 13.593,
    'longitude' => -89.833,
    'status' => 'Active',
    'congestion_level' => 'Low',
    'description' => 'Pelabuhan utama El Salvador.'
],

// Equatorial Guinea
[
    'country_id' => 79,
    'port_name' => 'Port of Malabo',
    'port_code' => 'GQSSG',
    'city' => 'Malabo',
    'latitude' => 3.755,
    'longitude' => 8.782,
    'status' => 'Active',
    'congestion_level' => 'Low',
    'description' => 'Pelabuhan utama Guinea Khatulistiwa.'
],

// Eritrea
[
    'country_id' => 80,
    'port_name' => 'Port of Massawa',
    'port_code' => 'ERMSW',
    'city' => 'Massawa',
    'latitude' => 15.608,
    'longitude' => 39.474,
    'status' => 'Active',
    'congestion_level' => 'Low',
    'description' => 'Pelabuhan terbesar Eritrea.'
],

// Estonia
[
    'country_id' => 81,
    'port_name' => 'Port of Tallinn',
    'port_code' => 'EETLL',
    'city' => 'Tallinn',
    'latitude' => 59.437,
    'longitude' => 24.753,
    'status' => 'Active',
    'congestion_level' => 'Low',
    'description' => 'Pelabuhan utama Estonia.'
],

// Ethiopia
[
    'country_id' => 82,
    'port_name' => 'Port of Djibouti',
    'port_code' => 'DJJIB',
    'city' => 'Djibouti',
    'latitude' => 11.595,
    'longitude' => 43.148,
    'status' => 'Active',
    'congestion_level' => 'Medium',
    'description' => 'Ethiopia menggunakan Pelabuhan Djibouti sebagai akses laut utama.'
],

// Falkland Islands
[
    'country_id' => 83,
    'port_name' => 'Port Stanley',
    'port_code' => 'FKPSY',
    'city' => 'Stanley',
    'latitude' => -51.697,
    'longitude' => -57.852,
    'status' => 'Active',
    'congestion_level' => 'Low',
    'description' => 'Pelabuhan utama Falkland Islands.'
],

// Faroe Islands
[
    'country_id' => 84,
    'port_name' => 'Port of Tórshavn',
    'port_code' => 'FOTHO',
    'city' => 'Tórshavn',
    'latitude' => 62.010,
    'longitude' => -6.771,
    'status' => 'Active',
    'congestion_level' => 'Low',
    'description' => 'Pelabuhan utama Faroe Islands.'
],

// Fiji
[
    'country_id' => 85,
    'port_name' => 'Port of Suva',
    'port_code' => 'FJSUV',
    'city' => 'Suva',
    'latitude' => -18.142,
    'longitude' => 178.441,
    'status' => 'Active',
    'congestion_level' => 'Low',
    'description' => 'Pelabuhan terbesar Fiji.'
],

// Finland
[
    'country_id' => 86,
    'port_name' => 'Port of Helsinki',
    'port_code' => 'FIHEL',
    'city' => 'Helsinki',
    'latitude' => 60.169,
    'longitude' => 24.952,
    'status' => 'Active',
    'congestion_level' => 'Medium',
    'description' => 'Pelabuhan utama Finlandia.'
],

// France
[
    'country_id' => 87,
    'port_name' => 'Port of Marseille',
    'port_code' => 'FRMRS',
    'city' => 'Marseille',
    'latitude' => 43.296,
    'longitude' => 5.369,
    'status' => 'Active',
    'congestion_level' => 'High',
    'description' => 'Pelabuhan terbesar Prancis.'
],

// French Guiana
[
    'country_id' => 88,
    'port_name' => 'Port of Dégrad des Cannes',
    'port_code' => 'GFDDC',
    'city' => 'Cayenne',
    'latitude' => 4.850,
    'longitude' => -52.300,
    'status' => 'Active',
    'congestion_level' => 'Low',
    'description' => 'Pelabuhan utama French Guiana.'
],

// French Polynesia
[
    'country_id' => 89,
    'port_name' => 'Port of Papeete',
    'port_code' => 'PFPPT',
    'city' => 'Papeete',
    'latitude' => -17.536,
    'longitude' => -149.566,
    'status' => 'Active',
    'congestion_level' => 'Low',
    'description' => 'Pelabuhan utama French Polynesia.'
],

// French Southern Territories
[
    'country_id' => 90,
    'port_name' => 'Port-aux-Français',
    'port_code' => 'TFPAF',
    'city' => 'Port-aux-Français',
    'latitude' => -49.350,
    'longitude' => 70.217,
    'status' => 'Active',
    'congestion_level' => 'Low',
    'description' => 'Pelabuhan utama French Southern Territories.'
],

// Gabon
[
    'country_id' => 91,
    'port_name' => 'Port of Owendo',
    'port_code' => 'GAOWE',
    'city' => 'Owendo',
    'latitude' => -0.317,
    'longitude' => 9.500,
    'status' => 'Active',
    'congestion_level' => 'Medium',
    'description' => 'Pelabuhan terbesar Gabon.'
],

// Gambia
[
    'country_id' => 92,
    'port_name' => 'Port of Banjul',
    'port_code' => 'GMBJL',
    'city' => 'Banjul',
    'latitude' => 13.454,
    'longitude' => -16.577,
    'status' => 'Active',
    'congestion_level' => 'Low',
    'description' => 'Pelabuhan utama Gambia.'
],

// Georgia
[
    'country_id' => 93,
    'port_name' => 'Port of Poti',
    'port_code' => 'GEPOT',
    'city' => 'Poti',
    'latitude' => 42.147,
    'longitude' => 41.671,
    'status' => 'Active',
    'congestion_level' => 'Medium',
    'description' => 'Pelabuhan terbesar Georgia.'
],

// Germany
[
    'country_id' => 94,
    'port_name' => 'Port of Hamburg',
    'port_code' => 'DEHAM',
    'city' => 'Hamburg',
    'latitude' => 53.546,
    'longitude' => 9.966,
    'status' => 'Active',
    'congestion_level' => 'High',
    'description' => 'Pelabuhan terbesar Jerman.'
],

// Ghana
[
    'country_id' => 95,
    'port_name' => 'Port of Tema',
    'port_code' => 'GHTEM',
    'city' => 'Tema',
    'latitude' => 5.669,
    'longitude' => -0.016,
    'status' => 'Active',
    'congestion_level' => 'Medium',
    'description' => 'Pelabuhan terbesar Ghana.'
],

// Gibraltar
[
    'country_id' => 96,
    'port_name' => 'Port of Gibraltar',
    'port_code' => 'GIGIB',
    'city' => 'Gibraltar',
    'latitude' => 36.140,
    'longitude' => -5.353,
    'status' => 'Active',
    'congestion_level' => 'Medium',
    'description' => 'Pelabuhan utama Gibraltar.'
],

// Greece
[
    'country_id' => 97,
    'port_name' => 'Port of Piraeus',
    'port_code' => 'GRPIR',
    'city' => 'Piraeus',
    'latitude' => 37.942,
    'longitude' => 23.646,
    'status' => 'Active',
    'congestion_level' => 'High',
    'description' => 'Pelabuhan terbesar Yunani.'
],

// Greenland
[
    'country_id' => 98,
    'port_name' => 'Port of Nuuk',
    'port_code' => 'GLGOH',
    'city' => 'Nuuk',
    'latitude' => 64.174,
    'longitude' => -51.738,
    'status' => 'Active',
    'congestion_level' => 'Low',
    'description' => 'Pelabuhan utama Greenland.'
],

// Grenada
[
    'country_id' => 99,
    'port_name' => "Port of St. George' s",
    'port_code' => 'GDSTG',
    'city' => "St. George' s",
    'latitude' => 12.052,
    'longitude' => -61.748,
    'status' => 'Active',
    'congestion_level' => 'Low',
    'description' => 'Pelabuhan utama Grenada.'
],

// Guadeloupe
[
    'country_id' => 100,
    'port_name' => 'Port of Pointe-à-Pitre',
    'port_code' => 'GPPTP',
    'city' => 'Pointe-à-Pitre',
    'latitude' => 16.241,
    'longitude' => -61.532,
    'status' => 'Active',
    'congestion_level' => 'Low',
    'description' => 'Pelabuhan utama Guadeloupe.'
],

// Guam
[
    'country_id' => 101,
    'port_name' => 'Port of Apra',
    'port_code' => 'GUAPR',
    'city' => 'Apra Harbor',
    'latitude' => 13.445,
    'longitude' => 144.656,
    'status' => 'Active',
    'congestion_level' => 'Medium',
    'description' => 'Pelabuhan utama Guam.'
],

// Guatemala
[
    'country_id' => 102,
    'port_name' => 'Port of Puerto Quetzal',
    'port_code' => 'GTPRQ',
    'city' => 'Escuintla',
    'latitude' => 13.917,
    'longitude' => -90.792,
    'status' => 'Active',
    'congestion_level' => 'Medium',
    'description' => 'Pelabuhan terbesar Guatemala.'
],

// Guernsey
[
    'country_id' => 103,
    'port_name' => 'Port of St. Peter Port',
    'port_code' => 'GGGCI',
    'city' => 'St. Peter Port',
    'latitude' => 49.456,
    'longitude' => -2.536,
    'status' => 'Active',
    'congestion_level' => 'Low',
    'description' => 'Pelabuhan utama Guernsey.'
],

// Guinea
[
    'country_id' => 104,
    'port_name' => 'Port of Conakry',
    'port_code' => 'GNCKY',
    'city' => 'Conakry',
    'latitude' => 9.509,
    'longitude' => -13.712,
    'status' => 'Active',
    'congestion_level' => 'Medium',
    'description' => 'Pelabuhan terbesar Guinea.'
],

// Guinea-Bissau
[
    'country_id' => 105,
    'port_name' => 'Port of Bissau',
    'port_code' => 'GWOXB',
    'city' => 'Bissau',
    'latitude' => 11.859,
    'longitude' => -15.598,
    'status' => 'Active',
    'congestion_level' => 'Low',
    'description' => 'Pelabuhan utama Guinea-Bissau.'
],

// Guyana
[
    'country_id' => 106,
    'port_name' => 'Port of Georgetown',
    'port_code' => 'GYGEO',
    'city' => 'Georgetown',
    'latitude' => 6.802,
    'longitude' => -58.155,
    'status' => 'Active',
    'congestion_level' => 'Low',
    'description' => 'Pelabuhan utama Guyana.'
],

// Haiti
[
    'country_id' => 107,
    'port_name' => 'Port-au-Prince Port',
    'port_code' => 'HTPAP',
    'city' => 'Port-au-Prince',
    'latitude' => 18.539,
    'longitude' => -72.337,
    'status' => 'Active',
    'congestion_level' => 'Medium',
    'description' => 'Pelabuhan utama Haiti.'
],

// Heard Island and McDonald Islands
[
    'country_id' => 108,
    'port_name' => 'No Seaport',
    'port_code' => 'N/A',
    'city' => 'Heard Island and McDonald Islands',
    'latitude' => -53.0818,
    'longitude' => 73.5042,
    'status' => 'Closed',
    'congestion_level' => 'Low',
    'description' => 'Heard Island and McDonald Islands tidak memiliki pelabuhan komersial permanen.'
],

// Vatican City
[
    'country_id' => 109,
    'port_name' => 'No Seaport',
    'port_code' => 'N/A',
    'city' => 'Vatican City',
    'latitude' => 41.9029,
    'longitude' => 12.4534,
    'status' => 'Closed',
    'congestion_level' => 'Low',
    'description' => 'Vatican City merupakan negara terkecil di dunia dan tidak memiliki pelabuhan laut atau pelabuhan komersial.'
],

// Honduras
[
    'country_id' => 110,
    'port_name' => 'Port of Puerto Cortés',
    'port_code' => 'HNPCR',
    'city' => 'Puerto Cortés',
    'latitude' => 15.839,
    'longitude' => -87.949,
    'status' => 'Active',
    'congestion_level' => 'Medium',
    'description' => 'Pelabuhan terbesar Honduras.'
],

// Hungary
[
    'country_id' => 111,
    'port_name' => 'Port of Budapest',
    'port_code' => 'HUBUD',
    'city' => 'Budapest',
    'latitude' => 47.497,
    'longitude' => 19.040,
    'status' => 'Active',
    'congestion_level' => 'Low',
    'description' => 'Pelabuhan sungai utama Hungaria.'
],

// Hong Kong
[
    'country_id' => 112,
    'port_name' => 'Port of Hong Kong',
    'port_code' => 'HKHKG',
    'city' => 'Hong Kong',
    'latitude' => 22.308,
    'longitude' => 114.225,
    'status' => 'Active',
    'congestion_level' => 'High',
    'description' => 'Pelabuhan terbesar Hong Kong.'
],

// Iceland
[
    'country_id' => 113,
    'port_name' => 'Port of Reykjavík',
    'port_code' => 'ISREY',
    'city' => 'Reykjavík',
    'latitude' => 64.147,
    'longitude' => -21.940,
    'status' => 'Active',
    'congestion_level' => 'Low',
    'description' => 'Pelabuhan utama Islandia.'
],

// India
[
    'country_id' => 114,
    'port_name' => 'Jawaharlal Nehru Port',
    'port_code' => 'INNSA',
    'city' => 'Navi Mumbai',
    'latitude' => 18.949,
    'longitude' => 72.949,
    'status' => 'Active',
    'congestion_level' => 'High',
    'description' => 'Pelabuhan peti kemas terbesar India.'
],

// Ivory Coast
[
    'country_id' => 115,
    'port_name' => 'Port of Abidjan',
    'port_code' => 'CIABJ',
    'city' => 'Abidjan',
    'latitude' => 5.274,
    'longitude' => -4.003,
    'status' => 'Active',
    'congestion_level' => 'High',
    'description' => 'Pelabuhan terbesar Pantai Gading.'
],

// Iran
[
    'country_id' => 116,
    'port_name' => 'Port of Bandar Abbas',
    'port_code' => 'IRBND',
    'city' => 'Bandar Abbas',
    'latitude' => 27.183,
    'longitude' => 56.266,
    'status' => 'Active',
    'congestion_level' => 'Medium',
    'description' => 'Pelabuhan terbesar Iran.'
],

// Iraq
[
    'country_id' => 117,
    'port_name' => 'Port of Umm Qasr',
    'port_code' => 'IQUMQ',
    'city' => 'Umm Qasr',
    'latitude' => 30.036,
    'longitude' => 47.919,
    'status' => 'Active',
    'congestion_level' => 'Medium',
    'description' => 'Pelabuhan utama Irak.'
],

// Ireland
[
    'country_id' => 118,
    'port_name' => 'Port of Dublin',
    'port_code' => 'IEDUB',
    'city' => 'Dublin',
    'latitude' => 53.349,
    'longitude' => -6.195,
    'status' => 'Active',
    'congestion_level' => 'Medium',
    'description' => 'Pelabuhan terbesar Irlandia.'
],

// Isle of Man
[
    'country_id' => 119,
    'port_name' => 'Port of Douglas',
    'port_code' => 'IMDGS',
    'city' => 'Douglas',
    'latitude' => 54.150,
    'longitude' => -4.481,
    'status' => 'Active',
    'congestion_level' => 'Low',
    'description' => 'Pelabuhan utama Isle of Man.'
],

// Israel
[
    'country_id' => 120,
    'port_name' => 'Port of Haifa',
    'port_code' => 'ILHFA',
    'city' => 'Haifa',
    'latitude' => 32.820,
    'longitude' => 34.998,
    'status' => 'Active',
    'congestion_level' => 'Medium',
    'description' => 'Pelabuhan terbesar Israel.'
],

// Italy
[
    'country_id' => 121,
    'port_name' => 'Port of Genoa',
    'port_code' => 'ITGOA',
    'city' => 'Genoa',
    'latitude' => 44.404,
    'longitude' => 8.929,
    'status' => 'Active',
    'congestion_level' => 'High',
    'description' => 'Pelabuhan terbesar Italia.'
],

// Jamaica
[
    'country_id' => 122,
    'port_name' => 'Port of Kingston',
    'port_code' => 'JMKIN',
    'city' => 'Kingston',
    'latitude' => 17.971,
    'longitude' => -76.793,
    'status' => 'Active',
    'congestion_level' => 'Medium',
    'description' => 'Pelabuhan utama Jamaika.'
],

// Jersey
[
    'country_id' => 123,
    'port_name' => 'Port of St. Helier',
    'port_code' => 'JEJER',
    'city' => 'Saint Helier',
    'latitude' => 49.186,
    'longitude' => -2.106,
    'status' => 'Active',
    'congestion_level' => 'Low',
    'description' => 'Pelabuhan utama Jersey.'
],

// Jordan
[
    'country_id' => 124,
    'port_name' => 'Port of Aqaba',
    'port_code' => 'JOAQJ',
    'city' => 'Aqaba',
    'latitude' => 29.526,
    'longitude' => 35.007,
    'status' => 'Active',
    'congestion_level' => 'Medium',
    'description' => 'Pelabuhan utama Yordania.'
],

// Kazakhstan
[
    'country_id' => 125,
    'port_name' => 'Port of Aktau',
    'port_code' => 'KZAKT',
    'city' => 'Aktau',
    'latitude' => 43.650,
    'longitude' => 51.170,
    'status' => 'Active',
    'congestion_level' => 'Low',
    'description' => 'Pelabuhan utama Kazakhstan di Laut Kaspia.'
],

// Kenya
[
    'country_id' => 126,
    'port_name' => 'Port of Mombasa',
    'port_code' => 'KEMBA',
    'city' => 'Mombasa',
    'latitude' => -4.043,
    'longitude' => 39.668,
    'status' => 'Active',
    'congestion_level' => 'High',
    'description' => 'Pelabuhan terbesar Kenya.'
],

// Kiribati
[
    'country_id' => 127,
    'port_name' => 'Port of Betio',
    'port_code' => 'KIBET',
    'city' => 'Betio',
    'latitude' => 1.357,
    'longitude' => 172.923,
    'status' => 'Active',
    'congestion_level' => 'Low',
    'description' => 'Pelabuhan utama Kiribati.'
],

// Kuwait
[
    'country_id' => 128,
    'port_name' => 'Shuwaikh Port',
    'port_code' => 'KWSWK',
    'city' => 'Kuwait City',
    'latitude' => 29.359,
    'longitude' => 47.905,
    'status' => 'Active',
    'congestion_level' => 'Medium',
    'description' => 'Pelabuhan utama Kuwait.'
],

// Kyrgyzstan
[
    'country_id' => 129,
    'port_name' => 'No Seaport',
    'port_code' => 'N/A',
    'city' => 'Bishkek',
    'latitude' => 42.8746,
    'longitude' => 74.5698,
    'status' => 'Closed',
    'congestion_level' => 'Low',
    'description' => 'Kyrgyzstan merupakan negara yang tidak memiliki akses laut sehingga tidak memiliki pelabuhan laut atau pelabuhan komersial.'
],

// Laos
[
    'country_id' => 130,
    'port_name' => 'Port of Vientiane',
    'port_code' => 'LAVTE',
    'city' => 'Vientiane',
    'latitude' => 17.975,
    'longitude' => 102.633,
    'status' => 'Active',
    'congestion_level' => 'Low',
    'description' => 'Pelabuhan sungai utama Laos.'
],

// Latvia
[
    'country_id' => 131,
    'port_name' => 'Port of Riga',
    'port_code' => 'LVRIX',
    'city' => 'Riga',
    'latitude' => 56.949,
    'longitude' => 24.106,
    'status' => 'Active',
    'congestion_level' => 'Medium',
    'description' => 'Pelabuhan terbesar Latvia.'
],

// Lebanon
[
    'country_id' => 132,
    'port_name' => 'Port of Beirut',
    'port_code' => 'LBBEY',
    'city' => 'Beirut',
    'latitude' => 33.901,
    'longitude' => 35.519,
    'status' => 'Active',
    'congestion_level' => 'Medium',
    'description' => 'Pelabuhan utama Lebanon.'
],

// Lesotho
[
    'country_id' => 133,
    'port_name' => 'Port of Durban',
    'port_code' => 'ZADUR',
    'city' => 'Durban',
    'latitude' => -29.871,
    'longitude' => 31.026,
    'status' => 'Active',
    'congestion_level' => 'Medium',
    'description' => 'Lesotho menggunakan Pelabuhan Durban di Afrika Selatan.'
],

// Liberia
[
    'country_id' => 134,
    'port_name' => 'Port of Monrovia',
    'port_code' => 'LRMLW',
    'city' => 'Monrovia',
    'latitude' => 6.313,
    'longitude' => -10.804,
    'status' => 'Active',
    'congestion_level' => 'Medium',
    'description' => 'Pelabuhan utama Liberia.'
],

// Libya
[
    'country_id' => 135,
    'port_name' => 'Port of Tripoli',
    'port_code' => 'LYTIP',
    'city' => 'Tripoli',
    'latitude' => 32.887,
    'longitude' => 13.191,
    'status' => 'Active',
    'congestion_level' => 'Medium',
    'description' => 'Pelabuhan terbesar Libya.'
],

// Liechtenstein
[
    'country_id' => 136,
    'port_name' => 'No Seaport',
    'port_code' => 'N/A',
    'city' => 'Vaduz',
    'latitude' => 47.1410,
    'longitude' => 9.5209,
    'status' => 'Closed',
    'congestion_level' => 'Low',
    'description' => 'Liechtenstein merupakan negara tanpa akses laut sehingga tidak memiliki pelabuhan laut atau pelabuhan komersial.'
],

// Lithuania
[
    'country_id' => 137,
    'port_name' => 'Port of Klaipeda',
    'port_code' => 'LTKLJ',
    'city' => 'Klaipeda',
    'latitude' => 55.706,
    'longitude' => 21.131,
    'status' => 'Active',
    'congestion_level' => 'Medium',
    'description' => 'Pelabuhan terbesar Lithuania.'
],

// Luxembourg
[
    'country_id' => 138,
    'port_name' => 'Port of Mertert',
    'port_code' => 'LUMRT',
    'city' => 'Mertert',
    'latitude' => 49.706,
    'longitude' => 6.478,
    'status' => 'Active',
    'congestion_level' => 'Low',
    'description' => 'Pelabuhan sungai utama Luksemburg.'
],

// Macao
[
    'country_id' => 139,
    'port_name' => 'Port of Macau',
    'port_code' => 'MOMFM',
    'city' => 'Macau',
    'latitude' => 22.198,
    'longitude' => 113.549,
    'status' => 'Active',
    'congestion_level' => 'Medium',
    'description' => 'Pelabuhan utama Makau.'
],

// North Macedonia
[
    'country_id' => 140,
    'port_name' => 'No Seaport',
    'port_code' => 'N/A',
    'city' => 'Skopje',
    'latitude' => 42.0043,
    'longitude' => 21.4272,
    'status' => 'Closed',
    'congestion_level' => 'Low',
    'description' => 'North Macedonia merupakan negara tanpa akses laut sehingga tidak memiliki pelabuhan laut atau pelabuhan komersial.'
],

// Madagascar
[
    'country_id' => 141,
    'port_name' => 'Port of Toamasina',
    'port_code' => 'MGTMM',
    'city' => 'Toamasina',
    'latitude' => -18.149,
    'longitude' => 49.402,
    'status' => 'Active',
    'congestion_level' => 'Medium',
    'description' => 'Pelabuhan terbesar Madagaskar.'
],

// Malawi
[
    'country_id' => 142,
    'port_name' => 'Port of Chipoka',
    'port_code' => 'MWCPK',
    'city' => 'Chipoka',
    'latitude' => -13.993,
    'longitude' => 34.515,
    'status' => 'Active',
    'congestion_level' => 'Low',
    'description' => 'Pelabuhan utama Malawi di Danau Malawi.'
],

// Maldives
[
    'country_id' => 143,
    'port_name' => 'Port of Malé',
    'port_code' => 'MVMLE',
    'city' => 'Malé',
    'latitude' => 4.175,
    'longitude' => 73.509,
    'status' => 'Active',
    'congestion_level' => 'Medium',
    'description' => 'Pelabuhan utama Maladewa.'
],

// Mali
[
    'country_id' => 144,
    'port_name' => 'Port of Dakar',
    'port_code' => 'SNDKR',
    'city' => 'Dakar',
    'latitude' => 14.693,
    'longitude' => -17.447,
    'status' => 'Active',
    'congestion_level' => 'Medium',
    'description' => 'Mali menggunakan Pelabuhan Dakar di Senegal.'
],

// Malta
[
    'country_id' => 145,
    'port_name' => 'Port of Valletta',
    'port_code' => 'MTMLA',
    'city' => 'Valletta',
    'latitude' => 35.898,
    'longitude' => 14.514,
    'status' => 'Active',
    'congestion_level' => 'Medium',
    'description' => 'Pelabuhan utama Malta.'
],

// Marshall Islands
[
    'country_id' => 146,
    'port_name' => 'Port of Majuro',
    'port_code' => 'MHMAJ',
    'city' => 'Majuro',
    'latitude' => 7.116,
    'longitude' => 171.185,
    'status' => 'Active',
    'congestion_level' => 'Low',
    'description' => 'Pelabuhan utama Kepulauan Marshall.'
],

// Martinique
[
    'country_id' => 147,
    'port_name' => 'Port of Fort-de-France',
    'port_code' => 'MQFDF',
    'city' => 'Fort-de-France',
    'latitude' => 14.603,
    'longitude' => -61.073,
    'status' => 'Active',
    'congestion_level' => 'Low',
    'description' => 'Pelabuhan utama Martinique.'
],

// Mauritania
[
    'country_id' => 148,
    'port_name' => 'Port of Nouakchott',
    'port_code' => 'MRNKC',
    'city' => 'Nouakchott',
    'latitude' => 18.078,
    'longitude' => -15.958,
    'status' => 'Active',
    'congestion_level' => 'Low',
    'description' => 'Pelabuhan utama Mauritania.'
],

// Mauritius
[
    'country_id' => 149,
    'port_name' => 'Port Louis',
    'port_code' => 'MUPLU',
    'city' => 'Port Louis',
    'latitude' => -20.161,
    'longitude' => 57.498,
    'status' => 'Active',
    'congestion_level' => 'Medium',
    'description' => 'Pelabuhan terbesar Mauritius.'
],

// Mayotte
[
    'country_id' => 150,
    'port_name' => 'Port of Longoni',
    'port_code' => 'YTLON',
    'city' => 'Longoni',
    'latitude' => -12.730,
    'longitude' => 45.153,
    'status' => 'Active',
    'congestion_level' => 'Low',
    'description' => 'Pelabuhan utama Mayotte.'
],

// Mexico
[
    'country_id' => 151,
    'port_name' => 'Port of Manzanillo',
    'port_code' => 'MXZLO',
    'city' => 'Manzanillo',
    'latitude' => 19.051,
    'longitude' => -104.315,
    'status' => 'Active',
    'congestion_level' => 'High',
    'description' => 'Pelabuhan terbesar Meksiko.'
],

// Micronesia (Federated States of)
[
    'country_id' => 152,
    'port_name' => 'Port of Pohnpei',
    'port_code' => 'FMPNI',
    'city' => 'Palikir',
    'latitude' => 6.984,
    'longitude' => 158.207,
    'status' => 'Active',
    'congestion_level' => 'Low',
    'description' => 'Pelabuhan utama Mikronesia.'
],

// Moldova
[
    'country_id' => 153,
    'port_name' => 'Port of Giurgiulesti',
    'port_code' => 'MDGIU',
    'city' => 'Giurgiulesti',
    'latitude' => 45.481,
    'longitude' => 28.197,
    'status' => 'Active',
    'congestion_level' => 'Low',
    'description' => 'Pelabuhan utama Moldova di Sungai Danube.'
],

// Monaco
[
    'country_id' => 154,
    'port_name' => 'Port Hercules',
    'port_code' => 'MCMON',
    'city' => 'Monaco',
    'latitude' => 43.738,
    'longitude' => 7.427,
    'status' => 'Active',
    'congestion_level' => 'Medium',
    'description' => 'Pelabuhan utama Monako.'
],

// Mongolia
[
    'country_id' => 155,
    'port_name' => 'Port of Tianjin',
    'port_code' => 'CNTXG',
    'city' => 'Tianjin',
    'latitude' => 38.986,
    'longitude' => 117.708,
    'status' => 'Active',
    'congestion_level' => 'Medium',
    'description' => 'Mongolia menggunakan Pelabuhan Tianjin di China.'
],

// Montenegro
[
    'country_id' => 156,
    'port_name' => 'Port of Bar',
    'port_code' => 'MEBAR',
    'city' => 'Bar',
    'latitude' => 42.100,
    'longitude' => 19.100,
    'status' => 'Active',
    'congestion_level' => 'Low',
    'description' => 'Pelabuhan terbesar Montenegro.'
],

// Montserrat
[
    'country_id' => 157,
    'port_name' => 'Port of Little Bay',
    'port_code' => 'MSLTB',
    'city' => 'Little Bay',
    'latitude' => 16.791,
    'longitude' => -62.210,
    'status' => 'Active',
    'congestion_level' => 'Low',
    'description' => 'Pelabuhan utama Montserrat.'
],

// Morocco
[
    'country_id' => 158,
    'port_name' => 'Port of Tanger Med',
    'port_code' => 'MATNG',
    'city' => 'Tangier',
    'latitude' => 35.892,
    'longitude' => -5.503,
    'status' => 'Active',
    'congestion_level' => 'High',
    'description' => 'Pelabuhan terbesar Maroko.'
],

// Mozambique
[
    'country_id' => 159,
    'port_name' => 'Port of Maputo',
    'port_code' => 'MZMPM',
    'city' => 'Maputo',
    'latitude' => -25.966,
    'longitude' => 32.583,
    'status' => 'Active',
    'congestion_level' => 'Medium',
    'description' => 'Pelabuhan utama Mozambik.'
],

// Myanmar
[
    'country_id' => 160,
    'port_name' => 'Port of Yangon',
    'port_code' => 'MMRGN',
    'city' => 'Yangon',
    'latitude' => 16.768,
    'longitude' => 96.170,
    'status' => 'Active',
    'congestion_level' => 'Medium',
    'description' => 'Pelabuhan terbesar Myanmar.'
],

// Namibia
[
    'country_id' => 161,
    'port_name' => 'Port of Walvis Bay',
    'port_code' => 'NAWVB',
    'city' => 'Walvis Bay',
    'latitude' => -22.957,
    'longitude' => 14.505,
    'status' => 'Active',
    'congestion_level' => 'Medium',
    'description' => 'Pelabuhan terbesar Namibia.'
],

// Nauru
[
    'country_id' => 162,
    'port_name' => 'Port of Aiwo',
    'port_code' => 'NRAIW',
    'city' => 'Aiwo',
    'latitude' => -0.534,
    'longitude' => 166.912,
    'status' => 'Active',
    'congestion_level' => 'Low',
    'description' => 'Pelabuhan utama Nauru.'
],

// Nepal
[
    'country_id' => 163,
    'port_name' => 'Port of Kolkata',
    'port_code' => 'INCCU',
    'city' => 'Kolkata',
    'latitude' => 22.546,
    'longitude' => 88.322,
    'status' => 'Active',
    'congestion_level' => 'Medium',
    'description' => 'Nepal menggunakan Pelabuhan Kolkata di India.'
],

// Netherlands
[
    'country_id' => 164,
    'port_name' => 'Port of Rotterdam',
    'port_code' => 'NLRTM',
    'city' => 'Rotterdam',
    'latitude' => 51.948,
    'longitude' => 4.142,
    'status' => 'Active',
    'congestion_level' => 'High',
    'description' => 'Pelabuhan terbesar Belanda.'
],

// New Caledonia
[
    'country_id' => 165,
    'port_name' => 'Port of Noumea',
    'port_code' => 'NCNOU',
    'city' => 'Noumea',
    'latitude' => -22.275,
    'longitude' => 166.458,
    'status' => 'Active',
    'congestion_level' => 'Low',
    'description' => 'Pelabuhan utama Kaledonia Baru.'
],

// New Zealand
[
    'country_id' => 166,
    'port_name' => 'Port of Auckland',
    'port_code' => 'NZAKL',
    'city' => 'Auckland',
    'latitude' => -36.841,
    'longitude' => 174.766,
    'status' => 'Active',
    'congestion_level' => 'Medium',
    'description' => 'Pelabuhan terbesar Selandia Baru.'
],

// Nicaragua
[
    'country_id' => 167,
    'port_name' => 'Port of Corinto',
    'port_code' => 'NICIO',
    'city' => 'Corinto',
    'latitude' => 12.483,
    'longitude' => -87.173,
    'status' => 'Active',
    'congestion_level' => 'Low',
    'description' => 'Pelabuhan utama Nikaragua.'
],

// Niger
[
    'country_id' => 168,
    'port_name' => 'Port of Cotonou',
    'port_code' => 'BJCOO',
    'city' => 'Cotonou',
    'latitude' => 6.357,
    'longitude' => 2.434,
    'status' => 'Active',
    'congestion_level' => 'Medium',
    'description' => 'Niger menggunakan Pelabuhan Cotonou di Benin.'
],

// Nigeria
[
    'country_id' => 169,
    'port_name' => 'Port of Lagos',
    'port_code' => 'NGLOS',
    'city' => 'Lagos',
    'latitude' => 6.454,
    'longitude' => 3.394,
    'status' => 'Active',
    'congestion_level' => 'High',
    'description' => 'Pelabuhan terbesar Nigeria.'
],

// Niue
[
    'country_id' => 170,
    'port_name' => 'Port of Alofi',
    'port_code' => 'NUALO',
    'city' => 'Alofi',
    'latitude' => -19.054,
    'longitude' => -169.918,
    'status' => 'Active',
    'congestion_level' => 'Low',
    'description' => 'Pelabuhan utama Niue.'
],

// Norfolk Island
[
    'country_id' => 171,
    'port_name' => 'Cascade Pier',
    'port_code' => 'NFCAS',
    'city' => 'Kingston',
    'latitude' => -29.056,
    'longitude' => 167.959,
    'status' => 'Active',
    'congestion_level' => 'Low',
    'description' => 'Pelabuhan utama Norfolk Island.'
],

// North Korea
[
    'country_id' => 172,
    'port_name' => 'Port of Nampo',
    'port_code' => 'KPNAM',
    'city' => 'Nampo',
    'latitude' => 38.736,
    'longitude' => 125.407,
    'status' => 'Active',
    'congestion_level' => 'Medium',
    'description' => 'Pelabuhan terbesar Korea Utara.'
],

// Northern Mariana Islands
[
    'country_id' => 173,
    'port_name' => 'Port of Saipan',
    'port_code' => 'MPSPN',
    'city' => 'Saipan',
    'latitude' => 15.213,
    'longitude' => 145.754,
    'status' => 'Active',
    'congestion_level' => 'Low',
    'description' => 'Pelabuhan utama Northern Mariana Islands.'
],

// Norway
[
    'country_id' => 174,
    'port_name' => 'Port of Oslo',
    'port_code' => 'NOOSL',
    'city' => 'Oslo',
    'latitude' => 59.913,
    'longitude' => 10.752,
    'status' => 'Active',
    'congestion_level' => 'Medium',
    'description' => 'Pelabuhan utama Norwegia.'
],

// Oman
[
    'country_id' => 175,
    'port_name' => 'Port of Sohar',
    'port_code' => 'OMSOH',
    'city' => 'Sohar',
    'latitude' => 24.495,
    'longitude' => 56.626,
    'status' => 'Active',
    'congestion_level' => 'Medium',
    'description' => 'Pelabuhan terbesar Oman.'
],

// Pakistan
[
    'country_id' => 176,
    'port_name' => 'Port of Karachi',
    'port_code' => 'PKKHI',
    'city' => 'Karachi',
    'latitude' => 24.847,
    'longitude' => 66.975,
    'status' => 'Active',
    'congestion_level' => 'High',
    'description' => 'Pelabuhan terbesar Pakistan.'
],

// Palau
[
    'country_id' => 177,
    'port_name' => 'Port of Malakal',
    'port_code' => 'PWKOR',
    'city' => 'Koror',
    'latitude' => 7.342,
    'longitude' => 134.473,
    'status' => 'Active',
    'congestion_level' => 'Low',
    'description' => 'Pelabuhan utama Palau.'
],

// Palestine
[
    'country_id' => 178,
    'port_name' => 'Port of Gaza',
    'port_code' => 'N/A',
    'city' => 'Gaza',
    'latitude' => 31.520,
    'longitude' => 34.450,
    'status' => 'Busy',
    'congestion_level' => 'Low',
    'description' => 'Pelabuhan Gaza memiliki operasi yang sangat terbatas.'
],

// Panama
[
    'country_id' => 179,
    'port_name' => 'Port of Balboa',
    'port_code' => 'PABLB',
    'city' => 'Balboa',
    'latitude' => 8.950,
    'longitude' => -79.566,
    'status' => 'Active',
    'congestion_level' => 'High',
    'description' => 'Pelabuhan utama Panama di Terusan Panama.'
],

// Papua New Guinea
[
    'country_id' => 180,
    'port_name' => 'Port of Port Moresby',
    'port_code' => 'PGPOM',
    'city' => 'Port Moresby',
    'latitude' => -9.474,
    'longitude' => 147.159,
    'status' => 'Active',
    'congestion_level' => 'Medium',
    'description' => 'Pelabuhan utama Papua Nugini.'
],

// Paraguay
[
    'country_id' => 181,
    'port_name' => 'Port of Asunción',
    'port_code' => 'PYASU',
    'city' => 'Asunción',
    'latitude' => -25.263,
    'longitude' => -57.575,
    'status' => 'Active',
    'congestion_level' => 'Low',
    'description' => 'Pelabuhan sungai terbesar Paraguay.'
],

// Peru
[
    'country_id' => 182,
    'port_name' => 'Port of Callao',
    'port_code' => 'PECLL',
    'city' => 'Callao',
    'latitude' => -12.056,
    'longitude' => -77.148,
    'status' => 'Active',
    'congestion_level' => 'High',
    'description' => 'Pelabuhan terbesar Peru.'
],

// Philippines
[
    'country_id' => 183,
    'port_name' => 'Port of Manila',
    'port_code' => 'PHMNL',
    'city' => 'Manila',
    'latitude' => 14.583,
    'longitude' => 120.967,
    'status' => 'Active',
    'congestion_level' => 'High',
    'description' => 'Pelabuhan terbesar Filipina.'
],

// Pitcairn
[
    'country_id' => 184,
    'port_name' => 'Bounty Bay',
    'port_code' => 'N/A',
    'city' => 'Adamstown',
    'latitude' => -25.067,
    'longitude' => -130.100,
    'status' => 'Active',
    'congestion_level' => 'Low',
    'description' => 'Pelabuhan kecil Pitcairn.'
],

// Poland
[
    'country_id' => 185,
    'port_name' => 'Port of Gdańsk',
    'port_code' => 'PLGDN',
    'city' => 'Gdańsk',
    'latitude' => 54.352,
    'longitude' => 18.646,
    'status' => 'Active',
    'congestion_level' => 'Medium',
    'description' => 'Pelabuhan terbesar Polandia.'
],

// Portugal
[
    'country_id' => 186,
    'port_name' => 'Port of Sines',
    'port_code' => 'PTSIE',
    'city' => 'Sines',
    'latitude' => 37.956,
    'longitude' => -8.869,
    'status' => 'Active',
    'congestion_level' => 'Medium',
    'description' => 'Pelabuhan terbesar Portugal.'
],

// Puerto Rico
[
    'country_id' => 187,
    'port_name' => 'Port of San Juan',
    'port_code' => 'PRSJU',
    'city' => 'San Juan',
    'latitude' => 18.465,
    'longitude' => -66.105,
    'status' => 'Active',
    'congestion_level' => 'Medium',
    'description' => 'Pelabuhan utama Puerto Rico.'
],

// Republic of Kosovo
[
    'country_id' => 188,
    'port_name' => 'No Seaport',
    'port_code' => 'N/A',
    'city' => 'Pristina',
    'latitude' => 42.6629,
    'longitude' => 21.1655,
    'status' => 'Closed',
    'congestion_level' => 'Low',
    'description' => 'Republic of Kosovo merupakan negara tanpa akses laut sehingga tidak memiliki pelabuhan laut atau pelabuhan komersial.'
],

// Réunion
[
    'country_id' => 189,
    'port_name' => 'Port of Réunion',
    'port_code' => 'REPDG',
    'city' => 'Le Port',
    'latitude' => -20.937,
    'longitude' => 55.291,
    'status' => 'Active',
    'congestion_level' => 'Low',
    'description' => 'Pelabuhan utama Réunion.'
],

// Romania
[
    'country_id' => 190,
    'port_name' => 'Port of Constanța',
    'port_code' => 'ROCND',
    'city' => 'Constanța',
    'latitude' => 44.173,
    'longitude' => 28.638,
    'status' => 'Active',
    'congestion_level' => 'Medium',
    'description' => 'Pelabuhan terbesar Rumania.'
],

// Russian Federation
[
    'country_id' => 191,
    'port_name' => 'Port of Novorossiysk',
    'port_code' => 'RUNVS',
    'city' => 'Novorossiysk',
    'latitude' => 44.723,
    'longitude' => 37.768,
    'status' => 'Active',
    'congestion_level' => 'High',
    'description' => 'Pelabuhan terbesar Rusia di Laut Hitam.'
],

// Rwanda
[
    'country_id' => 192,
    'port_name' => 'No Seaport',
    'port_code' => 'N/A',
    'city' => 'Kigali',
    'latitude' => -1.9441,
    'longitude' => 30.0619,
    'status' => 'Closed',
    'congestion_level' => 'Low',
    'description' => 'Rwanda merupakan negara tanpa akses laut sehingga tidak memiliki pelabuhan laut atau pelabuhan komersial.'
],

// Saint Barthélemy
[
    'country_id' => 193,
    'port_name' => 'Port of Gustavia',
    'port_code' => 'BLGUS',
    'city' => 'Gustavia',
    'latitude' => 17.896,
    'longitude' => -62.851,
    'status' => 'Active',
    'congestion_level' => 'Low',
    'description' => 'Pelabuhan utama Saint Barthélemy.'
],

// Saint Helena
[
    'country_id' => 194,
    'port_name' => 'Jamestown Harbour',
    'port_code' => 'SHSHN',
    'city' => 'Jamestown',
    'latitude' => -15.938,
    'longitude' => -5.716,
    'status' => 'Active',
    'congestion_level' => 'Low',
    'description' => 'Pelabuhan utama Saint Helena.'
],

// Saint Kitts and Nevis
[
    'country_id' => 195,
    'port_name' => 'Port Zante',
    'port_code' => 'KNBAS',
    'city' => 'Basseterre',
    'latitude' => 17.295,
    'longitude' => -62.724,
    'status' => 'Active',
    'congestion_level' => 'Low',
    'description' => 'Pelabuhan utama Saint Kitts and Nevis.'
],

// Saint Lucia
[
    'country_id' => 196,
    'port_name' => 'Port Castries',
    'port_code' => 'LCCAS',
    'city' => 'Castries',
    'latitude' => 14.010,
    'longitude' => -60.987,
    'status' => 'Active',
    'congestion_level' => 'Low',
    'description' => 'Pelabuhan utama Saint Lucia.'
],

// Saint Martin
[
    'country_id' => 197,
    'port_name' => 'Port of Marigot',
    'port_code' => 'MFMAR',
    'city' => 'Marigot',
    'latitude' => 18.068,
    'longitude' => -63.083,
    'status' => 'Active',
    'congestion_level' => 'Low',
    'description' => 'Pelabuhan utama Saint Martin.'
],

// Saint Pierre and Miquelon
[
    'country_id' => 198,
    'port_name' => 'Port of Saint-Pierre',
    'port_code' => 'PMSPM',
    'city' => 'Saint-Pierre',
    'latitude' => 46.781,
    'longitude' => -56.176,
    'status' => 'Active',
    'congestion_level' => 'Low',
    'description' => 'Pelabuhan utama Saint Pierre and Miquelon.'
],

// Saint Vincent and the Grenadines
[
    'country_id' => 199,
    'port_name' => 'Port Kingstown',
    'port_code' => 'VCKTN',
    'city' => 'Kingstown',
    'latitude' => 13.160,
    'longitude' => -61.225,
    'status' => 'Active',
    'congestion_level' => 'Low',
    'description' => 'Pelabuhan utama Saint Vincent and the Grenadines.'
],

// Samoa
[
    'country_id' => 200,
    'port_name' => 'Port of Apia',
    'port_code' => 'WSAPW',
    'city' => 'Apia',
    'latitude' => -13.833,
    'longitude' => -171.750,
    'status' => 'Active',
    'congestion_level' => 'Low',
    'description' => 'Pelabuhan utama Samoa.'
],

// San Marino
[
    'country_id' => 201,
    'port_name' => 'No Seaport',
    'port_code' => 'N/A',
    'city' => 'City of San Marino',
    'latitude' => 43.9424,
    'longitude' => 12.4578,
    'status' => 'Closed',
    'congestion_level' => 'Low',
    'description' => 'San Marino merupakan negara tanpa akses laut sehingga tidak memiliki pelabuhan laut atau pelabuhan komersial.'
],

// Sao Tome and Principe
[
    'country_id' => 202,
    'port_name' => 'Port of São Tomé',
    'port_code' => 'STTMS',
    'city' => 'São Tomé',
    'latitude' => 0.336,
    'longitude' => 6.731,
    'status' => 'Active',
    'congestion_level' => 'Low',
    'description' => 'Pelabuhan utama São Tomé dan Príncipe.'
],

// Senegal
[
    'country_id' => 203,
    'port_name' => 'Port of Dakar',
    'port_code' => 'SNDKR',
    'city' => 'Dakar',
    'latitude' => 14.693,
    'longitude' => -17.447,
    'status' => 'Active',
    'congestion_level' => 'Medium',
    'description' => 'Pelabuhan terbesar Senegal.'
],

// Serbia
[
    'country_id' => 204,
    'port_name' => 'Port of Belgrade',
    'port_code' => 'RSBEG',
    'city' => 'Belgrade',
    'latitude' => 44.817,
    'longitude' => 20.463,
    'status' => 'Active',
    'congestion_level' => 'Low',
    'description' => 'Pelabuhan sungai utama Serbia.'
],

// Seychelles
[
    'country_id' => 205,
    'port_name' => 'Port Victoria',
    'port_code' => 'SCPOV',
    'city' => 'Victoria',
    'latitude' => -4.620,
    'longitude' => 55.455,
    'status' => 'Active',
    'congestion_level' => 'Low',
    'description' => 'Pelabuhan utama Seychelles.'
],

// Sierra Leone
[
    'country_id' => 206,
    'port_name' => 'Port of Freetown',
    'port_code' => 'SLFNA',
    'city' => 'Freetown',
    'latitude' => 8.490,
    'longitude' => -13.234,
    'status' => 'Active',
    'congestion_level' => 'Medium',
    'description' => 'Pelabuhan terbesar Sierra Leone.'
],

// Sint Maarten
[
    'country_id' => 207,
    'port_name' => 'Port of Philipsburg',
    'port_code' => 'SXPHI',
    'city' => 'Philipsburg',
    'latitude' => 18.025,
    'longitude' => -63.045,
    'status' => 'Active',
    'congestion_level' => 'Low',
    'description' => 'Pelabuhan utama Sint Maarten.'
],

// Slovakia
[
    'country_id' => 208,
    'port_name' => 'Port of Bratislava',
    'port_code' => 'SKBTS',
    'city' => 'Bratislava',
    'latitude' => 48.148,
    'longitude' => 17.107,
    'status' => 'Active',
    'congestion_level' => 'Low',
    'description' => 'Pelabuhan sungai utama Slovakia.'
],

// Slovenia
[
    'country_id' => 209,
    'port_name' => 'Port of Koper',
    'port_code' => 'SIKOP',
    'city' => 'Koper',
    'latitude' => 45.548,
    'longitude' => 13.730,
    'status' => 'Active',
    'congestion_level' => 'Medium',
    'description' => 'Pelabuhan terbesar Slovenia.'
],

// Solomon Islands
[
    'country_id' => 210,
    'port_name' => 'Port of Honiara',
    'port_code' => 'SBHIR',
    'city' => 'Honiara',
    'latitude' => -9.433,
    'longitude' => 159.950,
    'status' => 'Active',
    'congestion_level' => 'Low',
    'description' => 'Pelabuhan utama Kepulauan Solomon.'
],

// Somalia
[
    'country_id' => 211,
    'port_name' => 'Port of Mogadishu',
    'port_code' => 'SOMGQO',
    'city' => 'Mogadishu',
    'latitude' => 2.037,
    'longitude' => 45.343,
    'status' => 'Active',
    'congestion_level' => 'Medium',
    'description' => 'Pelabuhan terbesar Somalia.'
],

// South Africa
[
    'country_id' => 212,
    'port_name' => 'Port of Durban',
    'port_code' => 'ZADUR',
    'city' => 'Durban',
    'latitude' => -29.871,
    'longitude' => 31.026,
    'status' => 'Active',
    'congestion_level' => 'High',
    'description' => 'Pelabuhan terbesar Afrika Selatan.'
],

// South Georgia and the South Sandwich Islands
[
    'country_id' => 213,
    'port_name' => 'King Edward Point',
    'port_code' => 'N/A',
    'city' => 'King Edward Point',
    'latitude' => -54.283,
    'longitude' => -36.500,
    'status' => 'Busy',
    'congestion_level' => 'Low',
    'description' => 'Pelabuhan kecil untuk keperluan penelitian.'
],

// Spain
[
    'country_id' => 214,
    'port_name' => 'Port of Valencia',
    'port_code' => 'ESVLC',
    'city' => 'Valencia',
    'latitude' => 39.448,
    'longitude' => -0.316,
    'status' => 'Active',
    'congestion_level' => 'High',
    'description' => 'Pelabuhan terbesar Spanyol.'
],

// Sri Lanka
[
    'country_id' => 215,
    'port_name' => 'Port of Colombo',
    'port_code' => 'LKCMB',
    'city' => 'Colombo',
    'latitude' => 6.953,
    'longitude' => 79.844,
    'status' => 'Active',
    'congestion_level' => 'High',
    'description' => 'Pelabuhan terbesar Sri Lanka.'
],

// Sudan
[
    'country_id' => 216,
    'port_name' => 'Port Sudan',
    'port_code' => 'SDPZU',
    'city' => 'Port Sudan',
    'latitude' => 19.617,
    'longitude' => 37.216,
    'status' => 'Active',
    'congestion_level' => 'Medium',
    'description' => 'Pelabuhan utama Sudan.'
],

// South Sudan
[
    'country_id' => 217,
    'port_name' => 'No Seaport',
    'port_code' => 'N/A',
    'city' => 'Juba',
    'latitude' => 4.8594,
    'longitude' => 31.5713,
    'status' => 'Closed',
    'congestion_level' => 'Low',
    'description' => 'South Sudan merupakan negara tanpa akses laut sehingga tidak memiliki pelabuhan laut atau pelabuhan komersial.'
],

// Suriname
[
    'country_id' => 218,
    'port_name' => 'Port of Paramaribo',
    'port_code' => 'SRPBM',
    'city' => 'Paramaribo',
    'latitude' => 5.852,
    'longitude' => -55.166,
    'status' => 'Active',
    'congestion_level' => 'Low',
    'description' => 'Pelabuhan utama Suriname.'
],

// Svalbard and Jan Mayen
[
    'country_id' => 219,
    'port_name' => 'Port of Longyearbyen',
    'port_code' => 'SJLYR',
    'city' => 'Longyearbyen',
    'latitude' => 78.223,
    'longitude' => 15.646,
    'status' => 'Active',
    'congestion_level' => 'Low',
    'description' => 'Pelabuhan utama Svalbard.'
],

// Swaziland (Eswatini)
[
    'country_id' => 220,
    'port_name' => 'Port of Maputo',
    'port_code' => 'MZMPM',
    'city' => 'Maputo',
    'latitude' => -25.966,
    'longitude' => 32.583,
    'status' => 'Active',
    'congestion_level' => 'Medium',
    'description' => 'Eswatini menggunakan Pelabuhan Maputo di Mozambik.'
],

// Sweden
[
    'country_id' => 221,
    'port_name' => 'Port of Gothenburg',
    'port_code' => 'SEGOT',
    'city' => 'Gothenburg',
    'latitude' => 57.708,
    'longitude' => 11.974,
    'status' => 'Active',
    'congestion_level' => 'Medium',
    'description' => 'Pelabuhan terbesar Swedia.'
],

// Switzerland
[
    'country_id' => 222,
    'port_name' => 'Port of Basel',
    'port_code' => 'CHBSL',
    'city' => 'Basel',
    'latitude' => 47.559,
    'longitude' => 7.588,
    'status' => 'Active',
    'congestion_level' => 'Low',
    'description' => 'Pelabuhan sungai terbesar Swiss.'
],

// Syria
[
    'country_id' => 223,
    'port_name' => 'Port of Latakia',
    'port_code' => 'SYLTK',
    'city' => 'Latakia',
    'latitude' => 35.520,
    'longitude' => 35.780,
    'status' => 'Active',
    'congestion_level' => 'Medium',
    'description' => 'Pelabuhan terbesar Suriah.'
],

// Taiwan
[
    'country_id' => 224,
    'port_name' => 'Port of Kaohsiung',
    'port_code' => 'TWKHH',
    'city' => 'Kaohsiung',
    'latitude' => 22.616,
    'longitude' => 120.280,
    'status' => 'Active',
    'congestion_level' => 'Low',
    'description' => 'Pelabuhan terbesar Taiwan.'
],

// Tajikistan
[
    'country_id' => 225,
    'port_name' => 'No Seaport',
    'port_code' => 'N/A',
    'city' => 'Dushanbe',
    'latitude' => 38.5598,
    'longitude' => 68.7870,
    'status' => 'Closed',
    'congestion_level' => 'Low',
    'description' => 'Tajikistan merupakan negara tanpa akses laut sehingga tidak memiliki pelabuhan laut atau pelabuhan komersial.'
],

// Tanzania
[
    'country_id' => 226,
    'port_name' => 'Port of Dar es Salaam',
    'port_code' => 'TZDAR',
    'city' => 'Dar es Salaam',
    'latitude' => -6.817,
    'longitude' => 39.283,
    'status' => 'Active',
    'congestion_level' => 'Medium',
    'description' => 'Pelabuhan terbesar Tanzania.'
],

// Timor-Leste
[
    'country_id' => 227,
    'port_name' => 'Port of Dili',
    'port_code' => 'TLDIL',
    'city' => 'Dili',
    'latitude' => -8.557,
    'longitude' => 125.578,
    'status' => 'Active',
    'congestion_level' => 'Low',
    'description' => 'Pelabuhan utama Timor-Leste.'
],

// Togo
[
    'country_id' => 228,
    'port_name' => 'Port of Lomé',
    'port_code' => 'TGLFW',
    'city' => 'Lomé',
    'latitude' => 6.137,
    'longitude' => 1.287,
    'status' => 'Active',
    'congestion_level' => 'Medium',
    'description' => 'Pelabuhan terbesar Togo.'
],

// Tokelau
[
    'country_id' => 229,
    'port_name' => 'Port of Fakaofo',
    'port_code' => 'N/A',
    'city' => 'Fakaofo',
    'latitude' => -9.381,
    'longitude' => -171.246,
    'status' => 'Active',
    'congestion_level' => 'Low',
    'description' => 'Pelabuhan kecil Tokelau.'
],

// Tonga
[
    'country_id' => 230,
    'port_name' => 'Port of Nukuʻalofa',
    'port_code' => 'TONUK',
    'city' => 'Nukuʻalofa',
    'latitude' => -21.139,
    'longitude' => -175.202,
    'status' => 'Active',
    'congestion_level' => 'Low',
    'description' => 'Pelabuhan utama Tonga.'
],

// Trinidad and Tobago
[
    'country_id' => 231,
    'port_name' => 'Port of Spain',
    'port_code' => 'TTPOS',
    'city' => 'Port of Spain',
    'latitude' => 10.660,
    'longitude' => -61.518,
    'status' => 'Active',
    'congestion_level' => 'Medium',
    'description' => 'Pelabuhan utama Trinidad dan Tobago.'
],

// Tunisia
[
    'country_id' => 232,
    'port_name' => 'Port of Rades',
    'port_code' => 'TNRDS',
    'city' => 'Rades',
    'latitude' => 36.769,
    'longitude' => 10.276,
    'status' => 'Active',
    'congestion_level' => 'Medium',
    'description' => 'Pelabuhan terbesar Tunisia.'
],

// Turkey
[
    'country_id' => 233,
    'port_name' => 'Port of Ambarli',
    'port_code' => 'TRAMB',
    'city' => 'Istanbul',
    'latitude' => 40.968,
    'longitude' => 28.675,
    'status' => 'Active',
    'congestion_level' => 'High',
    'description' => 'Pelabuhan peti kemas terbesar Turki.'
],

// Turkmenistan
[
    'country_id' => 234,
    'port_name' => 'Port of Turkmenbashi',
    'port_code' => 'TMTKR',
    'city' => 'Turkmenbashi',
    'latitude' => 40.022,
    'longitude' => 52.969,
    'status' => 'Active',
    'congestion_level' => 'Low',
    'description' => 'Pelabuhan utama Turkmenistan di Laut Kaspia.'
],

// Turks and Caicos Islands
[
    'country_id' => 235,
    'port_name' => 'Port of Cockburn Harbour',
    'port_code' => 'TCCBH',
    'city' => 'Cockburn Town',
    'latitude' => 21.461,
    'longitude' => -71.141,
    'status' => 'Active',
    'congestion_level' => 'Low',
    'description' => 'Pelabuhan utama Turks and Caicos Islands.'
],

// Tuvalu
[
    'country_id' => 236,
    'port_name' => 'Port of Funafuti',
    'port_code' => 'TVFUN',
    'city' => 'Funafuti',
    'latitude' => -8.517,
    'longitude' => 179.217,
    'status' => 'Active',
    'congestion_level' => 'Low',
    'description' => 'Pelabuhan utama Tuvalu.'
],

// Uganda
[
    'country_id' => 237,
    'port_name' => 'Port Bell',
    'port_code' => 'UGPBL',
    'city' => 'Kampala',
    'latitude' => 0.300,
    'longitude' => 32.650,
    'status' => 'Active',
    'congestion_level' => 'Low',
    'description' => 'Pelabuhan utama Uganda di Danau Victoria.'
],

// Ukraine
[
    'country_id' => 238,
    'port_name' => 'Port of Odesa',
    'port_code' => 'UAODS',
    'city' => 'Odesa',
    'latitude' => 46.482,
    'longitude' => 30.723,
    'status' => 'Active',
    'congestion_level' => 'Medium',
    'description' => 'Pelabuhan terbesar Ukraina.'
],

// United Arab Emirates
[
    'country_id' => 239,
    'port_name' => 'Port of Jebel Ali',
    'port_code' => 'AEJEA',
    'city' => 'Dubai',
    'latitude' => 25.011,
    'longitude' => 55.061,
    'status' => 'Active',
    'congestion_level' => 'High',
    'description' => 'Pelabuhan terbesar Uni Emirat Arab.'
],

// United Kingdom
[
    'country_id' => 240,
    'port_name' => 'Port of Felixstowe',
    'port_code' => 'GBFXT',
    'city' => 'Felixstowe',
    'latitude' => 51.954,
    'longitude' => 1.351,
    'status' => 'Active',
    'congestion_level' => 'High',
    'description' => 'Pelabuhan peti kemas terbesar Inggris.'
],

// United States of America
[
    'country_id' => 241,
    'port_name' => 'Port of Los Angeles',
    'port_code' => 'USLAX',
    'city' => 'Los Angeles',
    'latitude' => 33.736,
    'longitude' => -118.263,
    'status' => 'Active',
    'congestion_level' => 'High',
    'description' => 'Pelabuhan peti kemas terbesar di Amerika Serikat.'
],

// Uruguay
[
    'country_id' => 242,
    'port_name' => 'Port of Montevideo',
    'port_code' => 'UYMVD',
    'city' => 'Montevideo',
    'latitude' => -34.903,
    'longitude' => -56.211,
    'status' => 'Active',
    'congestion_level' => 'Medium',
    'description' => 'Pelabuhan utama Uruguay.'
],

// Uzbekistan
[
    'country_id' => 243,
    'port_name' => 'No Seaport',
    'port_code' => 'N/A',
    'city' => 'Tashkent',
    'latitude' => 41.2995,
    'longitude' => 69.2401,
    'status' => 'Closed',
    'congestion_level' => 'Low',
    'description' => 'Uzbekistan merupakan negara tanpa akses laut sehingga tidak memiliki pelabuhan laut atau pelabuhan komersial.'
],

// Vanuatu
[
    'country_id' => 244,
    'port_name' => 'Port of Port Vila',
    'port_code' => 'VUVLI',
    'city' => 'Port Vila',
    'latitude' => -17.740,
    'longitude' => 168.321,
    'status' => 'Active',
    'congestion_level' => 'Low',
    'description' => 'Pelabuhan utama Vanuatu.'
],

// Vatican City
[
    'country_id' => 245,
    'port_name' => 'Port of Civitavecchia',
    'port_code' => 'ITCVV',
    'city' => 'Civitavecchia',
    'latitude' => 42.093,
    'longitude' => 11.795,
    'status' => 'Active',
    'congestion_level' => 'Medium',
    'description' => 'Vatikan menggunakan Pelabuhan Civitavecchia di Italia.'
],

// Venezuela
[
    'country_id' => 246,
    'port_name' => 'Port of La Guaira',
    'port_code' => 'VELAG',
    'city' => 'La Guaira',
    'latitude' => 10.602,
    'longitude' => -66.934,
    'status' => 'Active',
    'congestion_level' => 'Medium',
    'description' => 'Pelabuhan utama Venezuela.'
],

// Vietnam
[
    'country_id' => 247,
    'port_name' => 'Port of Hai Phong',
    'port_code' => 'VNHPH',
    'city' => 'Hai Phong',
    'latitude' => 20.864,
    'longitude' => 106.683,
    'status' => 'Active',
    'congestion_level' => 'High',
    'description' => 'Pelabuhan terbesar Vietnam.'
],

// Wallis and Futuna
[
    'country_id' => 248,
    'port_name' => 'Port of Mata-Utu',
    'port_code' => 'WFMUU',
    'city' => 'Mata-Utu',
    'latitude' => -13.282,
    'longitude' => -176.174,
    'status' => 'Active',
    'congestion_level' => 'Low',
    'description' => 'Pelabuhan utama Wallis dan Futuna.'
],

// Western Sahara
[
    'country_id' => 249,
    'port_name' => 'Port of El Aaiún',
    'port_code' => 'EHEUN',
    'city' => 'El Aaiún',
    'latitude' => 27.153,
    'longitude' => -13.203,
    'status' => 'Active',
    'congestion_level' => 'Low',
    'description' => 'Pelabuhan utama Sahara Barat.'
],

// Yemen
[
    'country_id' => 250,
    'port_name' => 'Port of Aden',
    'port_code' => 'YEADE',
    'city' => 'Aden',
    'latitude' => 12.785,
    'longitude' => 45.018,
    'status' => 'Active',
    'congestion_level' => 'Medium',
    'description' => 'Pelabuhan terbesar Yaman.'
],

        ];


        foreach($ports as $port){

            Port::create($port);

        }

    }
}
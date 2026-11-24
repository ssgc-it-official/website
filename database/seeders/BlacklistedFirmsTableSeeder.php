<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BlacklistedFirmsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('blacklisted_firms')->delete();
        
        \DB::table('blacklisted_firms')->insert(array (
            0 => 
            array (
                'id' => 1,
            'name' => 'M/s. Potentia Middle East FZ/LLC & L/A M/s Potentia Engineering (Pvt) Ltd.',
            'address' => 'FDRK2920 COMPASS BUILDING, AL SHOHADA ROAD, AL HAMRA INDUSTRIAL ZONE-FZ, RAS AL KHAIMAH, UNITED ARAB EMIRATES, 2ND FLOOR, 285-Q, COMMERCIAL AREA, D.H.A., PHASE-II, LAHORE, PUNJAB (NTN #  A223615-1)',
                'from' => '2026-07-17',
                'to' => '2028-07-16',
                'reasons' => 'Contractor\'s failure to complete the assigned work and also misbehaved with measurement department staff ,used abusive language and given threats to the measurement office staff',
            'type' => 'Cross Debarred / Blacklisted for period of two (02) years',
                'filename' => NULL,
                'user_id' => 1,
                'created_at' => '2026-08-05 10:58:10',
                'updated_at' => '2026-11-22 08:26:24',
                'deleted_at' => NULL,
            ),
            1 => 
            array (
                'id' => 2,
                'name' => 'The Engineers Consolidated',
            'address' => 'OFFICE: 4/504 SHAH FAISAL COLONY # 4, Karachi,, Sindh (NTN# 3878337-1)',
                'from' => '2025-12-08',
                'to' => '2028-12-07',
                'reasons' => 'On account of violating the tender terms and conditions, failed to comply the contractual obligations and also Refused to deliver and not submitted PBG.',
            'type' => 'Cross Debarred / Blacklisted for period of Three(03) years',
                'filename' => NULL,
                'user_id' => 1,
                'created_at' => '2026-08-05 10:58:09',
                'updated_at' => '2026-08-05 10:58:09',
                'deleted_at' => NULL,
            ),
            2 => 
            array (
                'id' => 3,
                'name' => 'M/s Allied Piping Inc.',
            'address' => 'Suit # 401, 4th Floor, The Forum, G-20, Block-9, Clifton, Karachi,, Sindh 75600 (NTN# 3153749-9)',
                'from' => '2025-09-15',
                'to' => '2027-09-14',
                'reasons' => 'On account of violating the tender terms and conditions, failed to comply the contractual obligations and also failed to deliver the required material on specified delivery period.',
            'type' => 'Cross Debarred / Blacklisted for period of two (02) years.',
                'filename' => NULL,
                'user_id' => 1,
                'created_at' => '2026-08-05 10:58:08',
                'updated_at' => '2026-08-05 10:58:08',
                'deleted_at' => NULL,
            ),
            3 => 
            array (
                'id' => 4,
                'name' => 'M/s Microtech International',
                'address' => 'Plot No.1/2, Block-3-A, Doctors Inn Building, 3rd Floor Suite No. 301, Nazimabad # 3 Karachi, Sindh
74600 (NTN# 4242682-7)',
                    'from' => '2025-06-23',
                    'to' => '2027-06-22',
                    'reasons' => 'On account of violating the tender terms and conditions, failed to comply the contractual obligations
and also failed to deliver the required material on specified delivery period',
                'type' => 'Cross Debarred / Blacklisted for period of two (02) years.',
                    'filename' => NULL,
                    'user_id' => 1,
                    'created_at' => '2026-08-05 10:58:07',
                    'updated_at' => '2026-08-05 10:58:07',
                    'deleted_at' => NULL,
                ),
                4 => 
                array (
                    'id' => 5,
                'name' => 'M/s Tricom PWR (SMC-Pvt) Ltd.',
                'address' => 'Head Office: 50/3, Shikarpur Colony Near Mazar-e- Quaid, Karachi, Sindh (NTN# 6607907-8)',
                    'from' => '2025-04-21',
                    'to' => '2025-10-20',
                    'reasons' => 'On account of violating the tender terms and conditions, failed to comply the contractual obligations
and also failed to deliver the material on specified delivery period.',
                'type' => 'Cross Debarred / Blacklisted for period of six (06) months.',
                    'filename' => NULL,
                    'user_id' => 1,
                    'created_at' => '2026-08-05 10:58:06',
                    'updated_at' => '2026-08-05 10:58:06',
                    'deleted_at' => NULL,
                ),
                5 => 
                array (
                    'id' => 6,
                'name' => 'M/s B A Partner (Private) Limited',
                'address' => '1104, 11th Floor, Uni Tower, I.I. Chundrigar Road Karachi, Sindh (NTN# 7150917-3)',
                    'from' => '2024-09-25',
                    'to' => '2026-09-23',
                    'reasons' => 'On account of violating the tender terms and conditions, failed to comply the contractual obligations
and also refused to accept LOI and execute the job.',
                'type' => 'Cross debarred / Blacklisted for a period of two (02) years',
                    'filename' => NULL,
                    'user_id' => 1,
                    'created_at' => '2026-08-05 10:58:05',
                    'updated_at' => '2026-08-05 10:58:05',
                    'deleted_at' => NULL,
                ),
                6 => 
                array (
                    'id' => 7,
                'name' => 'M/s Brothers Gas Bottling and Distribution Company (Private) Limited (Local Agent)',
                    'address' => 'Office No.947, Tricon Business Centre, 9th Floor, Tricon Corporate Centre, Main Boulevard, Gulberg,
Lahore, Punjab (NTN# 6982849-1)',
                        'from' => '2024-08-05',
                        'to' => '2026-08-03',
                        'reasons' => 'On account of violating the tender terms and conditions, failed to comply the contractual obligations
and Non-delivery of material within required period.',
                    'type' => 'Cross debarred / Blacklisted for period of two (02) years.',
                        'filename' => NULL,
                        'user_id' => 1,
                        'created_at' => '2026-08-05 10:58:04',
                        'updated_at' => '2026-08-05 10:58:04',
                        'deleted_at' => NULL,
                    ),
                    7 => 
                    array (
                        'id' => 8,
                    'name' => 'M/s Brothers Gas Bottling and Distribution Co. LLC (Principal)',
                        'address' => '204, Al Fattan Plaza, Airport Road, Dubai-UAE',
                        'from' => '2024-08-05',
                        'to' => '2026-08-03',
                        'reasons' => 'On account of violating the tender terms and conditions, failed to comply the contractual obligations
and Non-delivery of material within required period.',
                    'type' => 'Cross debarred / Blacklisted for period of two (02) years.',
                        'filename' => NULL,
                        'user_id' => 1,
                        'created_at' => '2026-08-05 10:58:03',
                        'updated_at' => '2026-08-05 10:58:03',
                        'deleted_at' => NULL,
                    ),
                    8 => 
                    array (
                        'id' => 9,
                        'name' => 'M/s S.I. Raza Co. Private Limited',
                    'address' => 'Office: A-681, Block-12, Gulberg, Federal. B. Area, Karachi, Sindh (NTN# 3277762-7)',
                        'from' => '2024-07-22',
                        'to' => '2026-07-20',
                        'reasons' => 'On account of violating the tender terms and conditions and also refused to oblige the contractual
obligations.',
                    'type' => 'Cross debarred / Blacklisted for period of two (02) years.',
                        'filename' => NULL,
                        'user_id' => 1,
                        'created_at' => '2026-08-05 10:58:02',
                        'updated_at' => '2026-08-05 10:58:02',
                        'deleted_at' => NULL,
                    ),
                    9 => 
                    array (
                        'id' => 10,
                        'name' => 'M/s National Electric Centre',
                    'address' => 'Office #4, 2nd Floor, Imtiaz Chamber, 85-A-Tample Road, Lahore, Punjab (NTN# 0893978-7)',
                        'from' => '2024-04-25',
                        'to' => '2026-04-24',
                        'reasons' => 'On account of violating the tender terms and conditions, failed to comply the contractual obligations
and refused to deliver the materials.',
                    'type' => 'Cross debarred / Blacklisted for period of two (02) years.',
                        'filename' => NULL,
                        'user_id' => 1,
                        'created_at' => '2026-08-05 10:58:01',
                        'updated_at' => '2026-08-05 10:58:01',
                        'deleted_at' => NULL,
                    ),
                    10 => 
                    array (
                        'id' => 11,
                    'name' => 'M/s Drilling Solutions Pakistan (Private) Limited',
                        'address' => 'R-15, Rufi Rose Petal, Sector 15/A
KDA Scheme-33, Gulzar E Hijri
Karachi, Sindh (NTN# 7934473-1)',
                            'from' => '2024-06-03',
                            'to' => '2026-06-01',
                            'reasons' => 'On account of violating the tender terms and conditions, failed to comply the contractual obligations
and Non-delivery of material within required period.',
                        'type' => 'Cross debarred / Blacklisted for period of two (02) years',
                            'filename' => NULL,
                            'user_id' => 1,
                            'created_at' => '2026-08-05 10:58:00',
                            'updated_at' => '2026-10-02 22:21:02',
                            'deleted_at' => '2026-10-02 22:21:02',
                        ),
                        11 => 
                        array (
                            'id' => 12,
                            'name' => 'M/s S.A. Engineering Works',
                            'address' => 'Room # 310, 3rd Floor, Japan Plaza, M.A. Jinnah Road
Karachi, Pakistan, Sindh (NTN# 2770017-8)',
                                'from' => '2024-05-23',
                                'to' => '2026-05-21',
                                'reasons' => 'On account of violating the tender terms and conditions, failed to comply the contractual obligations
and also failed to replace the rejected material.',
                            'type' => 'Cross debarred / Blacklisted for period of two (02) years',
                                'filename' => NULL,
                                'user_id' => 1,
                                'created_at' => '2026-08-05 10:57:59',
                                'updated_at' => '2026-08-05 10:57:59',
                                'deleted_at' => NULL,
                            ),
                            12 => 
                            array (
                                'id' => 13,
                                'name' => 'M/s Alibhoy and Sons',
                            'address' => 'Shop # 68, Bank Arcade Seriaa Road, Karachi, Sindh (NTN# 1329175-7)',
                                'from' => '2024-03-11',
                                'to' => '2027-03-09',
                                'reasons' => 'On account of violating the tender terms and conditions, failed to comply the contractual obligations
and refused to deliver the required materials.',
                            'type' => 'Cross debarred / Blacklisted for period of three (03) years',
                                'filename' => NULL,
                                'user_id' => 1,
                                'created_at' => '2026-08-05 10:57:58',
                                'updated_at' => '2026-08-05 10:57:58',
                                'deleted_at' => NULL,
                            ),
                            13 => 
                            array (
                                'id' => 14,
                                'name' => 'M/s Rafi Engineering Works',
                                'address' => 'M/s Rafi Engineering Works Bugti Colony, Sui District
Dera Bugti, Balochistan (NTN# 5228403-6)',
                                    'from' => '2024-04-24',
                                    'to' => '2026-04-22',
                                    'reasons' => '22-Apr-2026 On account of violating the tender terms and conditions, deviation of contractual
obligations and failed to submit required legal documents and not start required work.',
                                'type' => 'Cross debarred / Blacklisted for period of two (02) years',
                                    'filename' => NULL,
                                    'user_id' => 1,
                                    'created_at' => '2026-08-05 10:57:57',
                                    'updated_at' => '2026-08-05 10:57:57',
                                    'deleted_at' => NULL,
                                ),
                                14 => 
                                array (
                                    'id' => 15,
                                    'name' => 'M/s MKR & Company',
                                    'address' => 'Bungalow No. C-173, Government Housing Society, Airport Road
Sukkur, Sindh (NTN# 5251124-2)',
                                        'from' => '2024-03-06',
                                        'to' => '2026-03-04',
                                        'reasons' => 'On account of violating the tender terms and conditions and failed to comply the contractual
obligations.',
                                    'type' => 'Cross debarred / Blacklisted for period of two (02) years',
                                        'filename' => NULL,
                                        'user_id' => 1,
                                        'created_at' => '2026-08-05 10:57:56',
                                        'updated_at' => '2026-08-05 10:57:56',
                                        'deleted_at' => NULL,
                                    ),
                                    15 => 
                                    array (
                                        'id' => 16,
                                        'name' => 'M/s New Khosa Brothers Construction Builders Company',
                                        'address' => 'Head Office: Rind Street, Mohallah New Baloch Colony Dera Allahyar, Tehsil Jhat Pat, District Jafarabad
Balochistan (NTN# 4261684-7)',
                                            'from' => '2024-01-18',
                                            'to' => '2025-01-17',
                                            'reasons' => 'On account of violating the tender terms and conditions and failed to comply the contractual
obligations.',
                                        'type' => 'Cross debarred / Blacklisted for period of one (01) year',
                                            'filename' => NULL,
                                            'user_id' => 1,
                                            'created_at' => '2026-08-05 10:57:55',
                                            'updated_at' => '2026-08-05 10:57:55',
                                            'deleted_at' => NULL,
                                        ),
                                        16 => 
                                        array (
                                            'id' => 17,
                                        'name' => 'M/s Skill Orbit (Pvt.) Limited',
                                        'address' => 'Office No.601, Windsong Place, KCHSU, Block 7/8, Shahrah-E-Faisal, Karachi, Sindh (vide NTN # 7275976-7)',
                                            'from' => '2023-08-15',
                                            'to' => '2024-08-14',
                                            'reasons' => 'On account of violating the tender terms and conditions / failed to execute of required job',
                                        'type' => 'Cross debarred / Blacklisted for period of one (01) year',
                                            'filename' => NULL,
                                            'user_id' => 1,
                                            'created_at' => '2026-08-05 10:57:54',
                                            'updated_at' => '2026-08-05 10:57:54',
                                            'deleted_at' => NULL,
                                        ),
                                        17 => 
                                        array (
                                            'id' => 18,
                                            'name' => 'M/s Al-Meezan Industrial Metrology Services',
                                        'address' => 'House No. 58, Block-B, OPF Society Lahore, Punjab (vide NTN # 7322733-0)',
                                            'from' => '2023-08-15',
                                            'to' => '2024-02-14',
                                            'reasons' => 'On account of violating the tender terms and conditions / failed to execute of required job',
                                        'type' => 'Cross debarred / Blacklisted for period of six (06) months',
                                            'filename' => NULL,
                                            'user_id' => 1,
                                            'created_at' => '2026-08-05 10:57:53',
                                            'updated_at' => '2026-08-05 10:57:53',
                                            'deleted_at' => NULL,
                                        ),
                                        18 => 
                                        array (
                                            'id' => 19,
                                        'name' => 'M/s Afzal Motors (Pvt.) Ltd.',
                                        'address' => 'Plot No. 145/147, Razzaqabad, Main National Highway Karachi, Pakistan, Sindh (vide NTN # 2140272-8)',
                                            'from' => '2023-05-25',
                                            'to' => '2023-11-24',
                                            'reasons' => 'On account of violating the tender terms and conditions / failed to deliver material items within
required period',
                                        'type' => 'Cross debarred / Blacklisted for period of six (06) months',
                                            'filename' => NULL,
                                            'user_id' => 1,
                                            'created_at' => '2026-08-05 10:57:52',
                                            'updated_at' => '2026-08-05 10:57:52',
                                            'deleted_at' => NULL,
                                        ),
                                        19 => 
                                        array (
                                            'id' => 20,
                                            'name' => 'M/s SWAP Traders',
                                            'address' => 'Office No. 36, Mezzanine Floor, Decent Garden East, Gulshan Town, Karachi, Sindh (vide NTN No.
4748182-3)',
                                            'from' => '2023-04-26',
                                            'to' => '2024-04-25',
                                            'reasons' => 'Non- delivery of material',
                                        'type' => 'Cross debarred / Blacklisted for a period of One (01) year',
                                            'filename' => NULL,
                                            'user_id' => 1,
                                            'created_at' => '2026-08-05 10:57:51',
                                            'updated_at' => '2026-08-05 10:57:51',
                                            'deleted_at' => NULL,
                                        ),
                                        20 => 
                                        array (
                                            'id' => 21,
                                            'name' => 'M/s MRM International',
                                        'address' => 'HOUSE NO. R-802, BLOCK-14, F.B AREA KARACHI CENTRAL Karachi, Sindh (vide NTN # 7959127-4)',
                                            'from' => '2022-12-23',
                                            'to' => '2024-12-20',
                                            'reasons' => 'Non- delivery of material',
                                        'type' => 'Cross debarred / Blacklisted for a period of two (02) years',
                                            'filename' => NULL,
                                            'user_id' => 1,
                                            'created_at' => '2026-08-05 10:57:50',
                                            'updated_at' => '2026-08-05 10:57:50',
                                            'deleted_at' => NULL,
                                        ),
                                        21 => 
                                        array (
                                            'id' => 22,
                                            'name' => 'M/s Zakir ur Rehman Abbasi & Brothers',
                                            'address' => 'Head Office: A-346, Shahid Abbasi General Store Nusrat Bhutto Colony, Mustafabad, North Nazimabad
Karachi, Sindh (vide NTN # 1750126-1)',
                                                'from' => '2022-12-22',
                                                'to' => '2023-12-21',
                                                'reasons' => 'Non-performance & non- submission of required documents as per tender terms of SSGC',
                                            'type' => 'Cross debarred / Blacklisted for a period of one (01) year',
                                                'filename' => NULL,
                                                'user_id' => 1,
                                                'created_at' => '2026-08-05 10:57:49',
                                                'updated_at' => '2026-08-05 10:57:49',
                                                'deleted_at' => NULL,
                                            ),
                                            22 => 
                                            array (
                                                'id' => 23,
                                                'name' => 'M/s Ajwa Constructions',
                                                'address' => 'Area Office State Life, Near Burj-Al-Marjan Hotel, Rice Canal Road, Lahori Muhalla, Larkana, Sindh (vide
NTN # 7640863-7)',
                                                'from' => '2022-10-01',
                                                'to' => '2023-09-30',
                                                'reasons' => 'On account of violating the tender terms and conditions and poor performance',
                                            'type' => 'Cross debar / Blacklisting for period of one (01) year',
                                                'filename' => NULL,
                                                'user_id' => 1,
                                                'created_at' => '2026-08-05 10:57:48',
                                                'updated_at' => '2026-08-05 10:57:48',
                                                'deleted_at' => NULL,
                                            ),
                                            23 => 
                                            array (
                                                'id' => 24,
                                            'name' => 'M/s Industrial Brands (Pvt) Ltd.',
                                            'address' => 'B-9 Suleman Plaza, Block-10, Rashid Minhas Road, Gulshan-E-Iqbal Karachi, Sindh (NTN # 4415247-7)',
                                                'from' => '2022-02-02',
                                                'to' => '2023-02-01',
                                            'reasons' => 'Failed to deliver required material (Spares) as per tender terms.',
                                            'type' => 'Cross debar / Blacklisting for a period of one (01) year',
                                                'filename' => NULL,
                                                'user_id' => 1,
                                                'created_at' => '2026-08-05 10:57:47',
                                                'updated_at' => '2026-08-05 10:57:47',
                                                'deleted_at' => NULL,
                                            ),
                                            24 => 
                                            array (
                                                'id' => 25,
                                                'name' => 'M/s Aaryan Enterprises',
                                                'address' => 'B-103/3, Harmain Tower. Block-19, Gulistan e Jauher, Karachi. Sindh.',
                                                'from' => '2022-01-25',
                                                'to' => '2023-01-24',
                                                'reasons' => 'Violating the Contractual Obligations & Non-performance',
                                            'type' => 'Blacklisted/ Cross Debarred for the period of 1 (one) year',
                                                'filename' => NULL,
                                                'user_id' => 1,
                                                'created_at' => '2026-08-05 10:57:46',
                                                'updated_at' => '2026-08-05 10:57:46',
                                                'deleted_at' => NULL,
                                            ),
                                            25 => 
                                            array (
                                                'id' => 26,
                                                'name' => 'M/s Emerald Trading Co.',
                                            'address' => 'Room # 301, 3rd Floor, Ashraf Plaza, 17-Mcleod Road Lahore, Punjab (vide NTN # 7143057-0)',
                                                'from' => '2022-02-01',
                                                'to' => '2023-12-31',
                                            'reasons' => 'Failed to deliver required material (Spares) as per tender terms',
                                            'type' => 'Barred for a period of one (01) year',
                                                'filename' => NULL,
                                                'user_id' => 1,
                                                'created_at' => '2026-08-05 10:57:45',
                                                'updated_at' => '2026-08-05 10:57:45',
                                                'deleted_at' => NULL,
                                            ),
                                            26 => 
                                            array (
                                                'id' => 27,
                                                'name' => 'M/S Pak International Associates',
                                            'address' => '312/15, Punjab Colony, Off Khayaban-e-Jami Road, Karachi, Sindh (vide NTN # 2207814-2)',
                                                'from' => '2021-03-31',
                                                'to' => '2023-03-30',
                                            'reasons' => 'Failed to deliver required material (meter locks) as per tender terms.',
                                            'type' => 'Barred for period of two (02) years',
                                                'filename' => NULL,
                                                'user_id' => 1,
                                                'created_at' => '2026-08-05 10:57:44',
                                                'updated_at' => '2026-08-05 10:57:44',
                                                'deleted_at' => NULL,
                                            ),
                                            27 => 
                                            array (
                                                'id' => 28,
                                                'name' => 'M/S Kesay Enterprises',
                                            'address' => 'House No.100 College Mohallah, Near Mali Gul Hassan Masjid, Zhob, Balochistan, (vide NTN # 3164467-8)',
                                                'from' => '2020-11-19',
                                                'to' => '2021-05-18',
                                                'reasons' => 'Failed to submit requisite documents within required period 15 days of receipt of LOI against Tender
Enquiry
# SC/10265.',
                                            'type' => 'Temporary barred for a period of six (06) months',
                                                'filename' => NULL,
                                                'user_id' => 1,
                                                'created_at' => '2026-08-05 10:57:43',
                                                'updated_at' => '2026-08-05 10:57:43',
                                                'deleted_at' => NULL,
                                            ),
                                            28 => 
                                            array (
                                                'id' => 29,
                                                'name' => 'M/S Aliza Traders',
                                            'address' => 'Suite # 26A D3, Snow White Commercial Complex, D3, KCHS, Sharah-e-Faisal, Karachi (vide NTN# 2698675-2)',
                                                'from' => '2020-01-23',
                                                'to' => '2020-01-22',
                                                'reasons' => 'Failed to submit the required 10% PBG of total order value within 15 days after receiving of purchase
order
vide No. 13/TKT/24587',
                                            'type' => 'Temporary barred for a period of one (01) year',
                                                'filename' => NULL,
                                                'user_id' => 1,
                                                'created_at' => '2026-08-05 10:57:42',
                                                'updated_at' => '2026-08-05 10:57:42',
                                                'deleted_at' => NULL,
                                            ),
                                            29 => 
                                            array (
                                                'id' => 30,
                                                'name' => 'M/S Flagturn Engineering & Automation',
                                            'address' => 'WA-119 Waheedabad Gulbahar, Karachi (vide NTN # 7152605-8)',
                                                'from' => '2020-10-27',
                                                'to' => '2021-10-26',
                                                'reasons' => 'Due to supplier’s unprofessional business ethics and miscommitment & submission of dubious ISO
certification by which he put deliberately to SSGC under difficult situation against 12/DKS/23839',
                                            'type' => 'Temporary barred for a period of one (01) year',
                                                'filename' => NULL,
                                                'user_id' => 1,
                                                'created_at' => '2026-08-05 10:57:41',
                                                'updated_at' => '2026-08-05 10:57:41',
                                                'deleted_at' => NULL,
                                            ),
                                            30 => 
                                            array (
                                                'id' => 31,
                                                'name' => 'M/S Vesnis Import / Export',
                                            'address' => 'Shop No. 34, Islam Plaza, Civil Hospital, Road Jama Cloth Road, Karachi (vide NTN # 7959063-3)',
                                                'from' => '2020-10-26',
                                                'to' => '2022-10-25',
                                                'reasons' => 'Failed to replace the rejected / defective material and nor had supply the required material yet to date
against PO # 12/DKS/24194 & 12/DKS/24641',
                                            'type' => 'Temporary barred for a period of two (02) years',
                                                'filename' => NULL,
                                                'user_id' => 1,
                                                'created_at' => '2026-08-05 10:57:40',
                                                'updated_at' => '2026-08-05 10:57:40',
                                                'deleted_at' => NULL,
                                            ),
                                            31 => 
                                            array (
                                                'id' => 32,
                                                'name' => 'M/S Syed Asad Abbas Govt. Contractor',
                                            'address' => 'House No. 2146/25, Kamora Colony, Camp No.2, Nawabshah, (vide NTN # 3013589-3)',
                                                'from' => '2020-10-26',
                                                'to' => '2021-04-25',
                                                'reasons' => 'Failed to submit requisite documents within required period 15 days of receipt of LOI against Enquiry #
SC/10396 & 10397',
                                            'type' => 'Temporary barred for a period of six (06) months',
                                                'filename' => NULL,
                                                'user_id' => 1,
                                                'created_at' => '2026-08-05 10:57:39',
                                                'updated_at' => '2026-08-05 10:57:39',
                                                'deleted_at' => NULL,
                                            ),
                                            32 => 
                                            array (
                                                'id' => 33,
                                                'name' => 'M/S Shahmir Construction Company',
                                            'address' => 'Al Faiz Shopping Centre, Liaquat Bazar, Quetta, Balochistan (vide NTN # 7378573-4)',
                                                'from' => '2019-10-16',
                                                'to' => NULL,
                                                'reasons' => 'Failed to complete the work as specified in LTP against Tender Enquiry No. SSGC/SC/8613./td>',
                                                'type' => 'Permanent',
                                                'filename' => NULL,
                                                'user_id' => 1,
                                                'created_at' => '2026-08-05 10:57:38',
                                                'updated_at' => '2026-08-05 10:57:38',
                                                'deleted_at' => NULL,
                                            ),
                                            33 => 
                                            array (
                                                'id' => 34,
                                                'name' => 'M/s. Interman Trading FZE, UAE M/S MK International',
                                                'address' => '69-W, Mezzanine Floor, Ratta Mansion Fazal-Haq Road, Blue area, Islamabad',
                                                'from' => '2014-09-24',
                                                'to' => NULL,
                                                'reasons' => 'Submission of fake/forged documents against Tender Enquiries & default against PO',
                                                'type' => 'Permanent',
                                                'filename' => NULL,
                                                'user_id' => 1,
                                                'created_at' => '2026-08-05 10:57:37',
                                                'updated_at' => '2026-08-05 10:57:37',
                                                'deleted_at' => NULL,
                                            ),
                                            34 => 
                                            array (
                                                'id' => 35,
                                                'name' => 'M/S Fatemi Traders',
                                                'address' => '29, Kanchwala Building Opp. Risala Police Station Nishter Road, Karachi',
                                                'from' => '2014-08-07',
                                                'to' => NULL,
                                                'reasons' => 'Non Supply of material within the order validity period.',
                                                'type' => 'Permanent',
                                                'filename' => NULL,
                                                'user_id' => 1,
                                                'created_at' => '2026-08-05 10:57:36',
                                                'updated_at' => '2026-08-05 10:57:36',
                                                'deleted_at' => NULL,
                                            ),
                                            35 => 
                                            array (
                                                'id' => 36,
                                                'name' => 'M/S Chhotani Jewellers',
                                                'address' => 'Shop No. 5 Yousaf Grand Square Main Clifton Road Karachi.',
                                                'from' => '2014-03-28',
                                                'to' => '2017-03-28',
                                                'reasons' => 'Non supply of material within the order validity.',
                                                'type' => 'Temporary',
                                                'filename' => NULL,
                                                'user_id' => 1,
                                                'created_at' => '2026-08-05 10:57:35',
                                                'updated_at' => '2026-08-05 10:57:35',
                                                'deleted_at' => NULL,
                                            ),
                                            36 => 
                                            array (
                                                'id' => 37,
                                                'name' => 'M/S A.A Enterprises',
                                                'address' => 'B-14, Block-4, Saadi Town Scheme-33, Karachi',
                                                'from' => '2014-02-07',
                                                'to' => '2016-01-07',
                                                'reasons' => 'Non supply of material within the order validity period.',
                                                'type' => 'Temporary',
                                                'filename' => NULL,
                                                'user_id' => 1,
                                                'created_at' => '2026-08-05 10:57:34',
                                                'updated_at' => '2026-08-05 10:57:34',
                                                'deleted_at' => NULL,
                                            ),
                                            37 => 
                                            array (
                                                'id' => 38,
                                            'name' => 'M/s. Worldwide Equipment (Foreign Supplier) M/s. Countryman Power System Singapore',
                                                'address' => '2, 18-C, Khayaban-e-Tanzeem, Defence-V, Karachi',
                                                'from' => '2013-03-27',
                                                'to' => NULL,
                                                'reasons' => 'Supplied material was not as per specification & rejected.',
                                                'type' => 'Permanent',
                                                'filename' => NULL,
                                                'user_id' => 1,
                                                'created_at' => '2026-08-05 10:57:33',
                                                'updated_at' => '2026-08-05 10:57:33',
                                                'deleted_at' => NULL,
                                            ),
                                            38 => 
                                            array (
                                                'id' => 39,
                                                'name' => 'M/s. Harif Gul Enterprises',
                                                'address' => 'H # 558 Street # 2, Ittehad Town, Baldia Town, Karachi',
                                                'from' => '2016-01-09',
                                                'to' => NULL,
                                                'reasons' => 'Fake Billing',
                                                'type' => 'Permanent',
                                                'filename' => NULL,
                                                'user_id' => 1,
                                                'created_at' => '2026-08-05 10:57:32',
                                                'updated_at' => '2026-08-05 10:57:32',
                                                'deleted_at' => NULL,
                                            ),
                                            39 => 
                                            array (
                                                'id' => 40,
                                                'name' => 'M/s. U. A. Enterprises',
                                                'address' => 'Plot # 1730/759-A, Rasheedabad, Baldis Town, Karachi',
                                                'from' => '2016-01-09',
                                                'to' => NULL,
                                                'reasons' => 'Fake Billing',
                                                'type' => 'Permanent',
                                                'filename' => NULL,
                                                'user_id' => 1,
                                                'created_at' => '2026-08-05 10:57:31',
                                                'updated_at' => '2026-08-05 10:57:31',
                                                'deleted_at' => NULL,
                                            ),
                                            40 => 
                                            array (
                                                'id' => 41,
                                                'name' => 'M/s. T. M. Enterprises',
                                                'address' => 'H # 558 Street # 2, Ittehad Town, Baldia Town, Karachi',
                                                'from' => '2016-01-09',
                                                'to' => NULL,
                                                'reasons' => 'Fake Billing',
                                                'type' => 'Permanent',
                                                'filename' => NULL,
                                                'user_id' => 1,
                                                'created_at' => '2026-08-05 10:57:30',
                                                'updated_at' => '2026-08-05 10:57:30',
                                                'deleted_at' => NULL,
                                            ),
                                            41 => 
                                            array (
                                                'id' => 42,
                                                'name' => 'M/s. Ehsan Enterprises',
                                                'address' => 'H # 558 Street # 2, Ittehad Town, Baldia Town, Karachi',
                                                'from' => '2016-01-09',
                                                'to' => NULL,
                                                'reasons' => 'Fake Billing',
                                                'type' => 'Permanent',
                                                'filename' => NULL,
                                                'user_id' => 1,
                                                'created_at' => '2026-08-05 10:57:29',
                                                'updated_at' => '2026-08-05 10:57:29',
                                                'deleted_at' => NULL,
                                            ),
                                            42 => 
                                            array (
                                                'id' => 43,
                                                'name' => 'M/s. Sooraj Construction',
                                                'address' => 'H # 558 Street # 2, Ittehad Town, Baldia Town, Karachi',
                                                'from' => '2016-01-09',
                                                'to' => NULL,
                                                'reasons' => 'Fake Billing',
                                                'type' => 'Permanent',
                                                'filename' => NULL,
                                                'user_id' => 1,
                                                'created_at' => '2026-08-05 10:57:28',
                                                'updated_at' => '2026-08-05 10:57:28',
                                                'deleted_at' => NULL,
                                            ),
                                            43 => 
                                            array (
                                                'id' => 44,
                                                'name' => 'M/s. S. S. Co.',
                                                'address' => 'R-545, Street # 8, Muhammad Pur, Qasba Colony, Manghopir Road, Karachi',
                                                'from' => '2016-01-09',
                                                'to' => NULL,
                                                'reasons' => 'Fake Billing',
                                                'type' => 'Permanent',
                                                'filename' => NULL,
                                                'user_id' => 1,
                                                'created_at' => '2026-08-05 10:57:27',
                                                'updated_at' => '2026-08-05 10:57:27',
                                                'deleted_at' => NULL,
                                            ),
                                            44 => 
                                            array (
                                                'id' => 45,
                                                'name' => 'M/s. Sidra & Brothers',
                                                'address' => 'R-545, Street # 8, Muhammad Pur, Qasba Colony, Manghopir Road, Karachi',
                                                'from' => '2016-01-09',
                                                'to' => NULL,
                                                'reasons' => 'Fake Billing',
                                                'type' => 'Permanent',
                                                'filename' => NULL,
                                                'user_id' => 1,
                                                'created_at' => '2026-08-05 10:57:26',
                                                'updated_at' => '2026-08-05 10:57:26',
                                                'deleted_at' => NULL,
                                            ),
                                            45 => 
                                            array (
                                                'id' => 46,
                                                'name' => 'M/s. TMD International Inc',
                                                'address' => 'Office \'D\' Anum Classic, Plot # 48, Block 7 & 8, Darul Aman Society, Shahra-e-Faisal,
Karachi-75350',
                                                'from' => '2017-01-04',
                                                'to' => NULL,
                                                'reasons' => 'Submission of fake/forged documents against Tender Enquiries.',
                                                'type' => 'Permanent',
                                                'filename' => NULL,
                                                'user_id' => 1,
                                                'created_at' => '2026-08-05 10:57:25',
                                                'updated_at' => '2026-08-05 10:57:25',
                                                'deleted_at' => NULL,
                                            ),
                                        ));
        
        
    }
}
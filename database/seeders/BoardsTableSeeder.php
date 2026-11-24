<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BoardsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('boards')->delete();
        
        \DB::table('boards')->insert(array (
            0 => 
            array (
                'id' => 1,
                'name' => 'Mr. Asif Inam',
                'type' => 'Chairman',
            'profile' => 'Mr. Asif Inam, is a distinguished Pakistani businessman and industrialist with an established reputation in the textile sector. Mr. Inam has extensively traveled across the United States, United Kingdom, European Union, Canada, the Middle East and the Far East, contributing to his broad global exposure. A subject-matter expert in cotton and textiles, he has conducted significant research in the field and is well-versed in the full spectrum of cotton varieties. He also possesses deep insight into national energy challenges, particularly those affecting the textile industry. His informed views on economic, trade and industrial matters are widely recognized and frequently sought by national media platforms.He serves as the Chairman and Chief Executive Officer of Diamond International Corporation Limited, a leading textile spinning enterprise with an annual turnover of approximately PKR 12 billion, and as Chairman and Director of N.P. Cotton Mills Limited, another prominent spinning mill with an annual turnover of about PKR 14 billion. His leadership credentials include serving as Vice President of the Federation of Pakistan Chambers of Commerce and Industry (FPCCI) for 2024–25, former Chairman of APTMA Central (2022–24), former Chairman of APTMA Southern Zone (2020–22), former Vice Chairman of APTMA Central (2018–19), former Director of the Karachi Cotton Association (2022–24) and former Member of the FPCCI Standing Committee on Finance & Investment (2022).

Committed to community development, Mr. Inam actively supports educational advancement by providing financial assistance to deserving and high-achieving students and contributes meaningfully to healthcare initiatives. His dedication to social welfare reflects his firm belief in economic empowerment, professional education and sustainable community upliftment.',
            'picture' => 'media',
            'user_id' => 1,
            'created_at' => '2026-11-21 19:33:01',
            'updated_at' => '2026-11-22 07:20:04',
            'deleted_at' => NULL,
        ),
        1 => 
        array (
            'id' => 2,
            'name' => 'Mr. Muhammad Ali Khan',
            'type' => 'Director',
        'profile' => 'Former Senior Government Officer (BPS-20), Pakistan Administrative Service.Mr. Muhammad Ali Khan is a seasoned public sector professional whose career spans nearly four decades of distinguished service in the Pakistan Administrative Service (PAS) and the Pakistan Army. Beginning his professional journey in 1974 with the Pakistan Army, Mr. Khan transitioned to the Civil Service in 1983, joining the District Management Group (DMG), where he went on to build a diverse and impactful career in governance, administration, and institutional leadership across federal and provincial domains.

Over the course of his civil service tenure, Mr. Khan held multiple senior leadership roles in Baluchistan, Khyber Pakhtunkhwa, and the Federal Government. As a BPS-20 officer, he served as Secretary, Government of Baluchistan in key departments including Education; Local Government & Rural Development; and Services & General Administration Department (S&GAD). He also served as Director General of the Gwadar Development Authority, where he oversaw strategic initiatives aimed at the region’s urban planning and development. His role as Chairman of the Chief Minister’s Inspection Team further underscores his commitment to institutional accountability and governance reforms.

At the federal level, Mr. Khan served as Administrator for Jammu & Kashmir state property under the Ministry of Kashmir Affairs and Northern Areas, contributing to governance and coordination in a sensitive and strategically important region. Prior to these senior appointments, he held pivotal administrative positions as Commissioner of Hazara and Kalat Divisions; Director General of the Environmental Protection Agency; and Additional Secretary in both the Home and Education Departments of Baluchistan.

Earlier in his career, Mr. Khan served as Deputy Commissioner and Political Agent in several key districts—including Ziarat, Dera Bugti, Khuzdar, Turbat, and Killa Saifullah—where he led district administration, law and order management, and development planning. He also held various senior roles within the provincial Finance Department, S&GAD, and the Chief Secretary’s Office, strengthening his expertise in public finance, service administration, and executive coordination. His administrative foundation was shaped through roles as Assistant Commissioner and Land Reforms Officer across multiple districts of Baluchistan.

Mr. Mohammad Ali Khan’s career reflects a deep commitment to public service, institutional governance, and regional development across Pakistan. His wide-ranging experience from district-level leadership to provincial and federal senior management demonstrates a legacy of dedication, integrity, and significant contribution to public administration. He holds a Bachelor of Arts degree and belongs to Quetta, Baluchistan.',
        'picture' => 'media',
        'user_id' => 1,
        'created_at' => '2026-11-21 19:34:22',
        'updated_at' => '2026-11-21 19:34:22',
        'deleted_at' => NULL,
    ),
    2 => 
    array (
        'id' => 4,
        'name' => 'Mr. Muhammad Rehan Hashmi',
        'type' => 'Director',
        'profile' => 'Mr. Muhammad Rehan Hashmi, is a seasoned professional with diversified experience spanning management, human resources, strategic policy development, community mobilization and engagement, and legislative affairs. He currently chairs the Red Crescent Sindh, the Monotechnic Institute, and several Sindh Olympic–recognized sports associations. He has completed management courses and holds a Master’s in International Relations and a Bachelor’s in Law.Over a decade as an Advisor to a Foreign Trade Mission, he facilitated increased bilateral trade and investment, helping catalyze several multimillion initiatives, including the New Bong Hydropower Project, Power Asia, the Automobile Industry deletion program, and dozens of reciprocal trade delegations. He has authored hundreds of customized market research reports. He also led the development of several small-scale alternative energy projects, water treatment plants, and campaigns aimed at reducing carbon emissions. His contributions to the N.A include support on legislative matters & policy formulation. He has designed and delivered customized training programs for a range of organizations including TNAs & capacity enhancement.',
        'picture' => 'media',
        'user_id' => 1,
        'created_at' => '2026-11-21 19:43:05',
        'updated_at' => '2026-11-21 19:43:05',
        'deleted_at' => NULL,
    ),
));
        
        
    }
}
<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FinancialReportsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('financial_reports')->delete();
        
        \DB::table('financial_reports')->insert(array (
            0 => 
            array (
                'id' => 1,
                'year' => 2026,
                'period_title' => 'Annual Report',
                'document_title' => 'Annual Report, 2026',
                'file_path' => 'financial-reports/EiBWeC0nQdnpizCzaKz87AUYEix0syTy50TlWr3f.pdf',
                'sort_order' => 0,
                'created_at' => '2026-11-26 16:35:37',
                'updated_at' => '2026-11-26 16:35:37',
            ),
            1 => 
            array (
                'id' => 2,
                'year' => 2026,
                'period_title' => 'Accounts for Nine Months Ended, March 31, 2026',
                'document_title' => 'Condensed Interim Financial Statements',
                'file_path' => 'financial-reports/18ukNaG1mclosY6GylRIOeey9GMbNhVrtyI31obY.pdf',
                'sort_order' => 0,
                'created_at' => '2026-11-26 16:46:07',
                'updated_at' => '2026-11-26 16:46:07',
            ),
            2 => 
            array (
                'id' => 3,
                'year' => 2025,
                'period_title' => 'Annual Report',
                'document_title' => 'Annual Report, 2025',
                'file_path' => 'financial-reports/VV4mnCSDEcfDFs659f77injBPchUs0BwOCVjCDer.pdf',
                'sort_order' => 0,
                'created_at' => '2026-11-26 17:10:49',
                'updated_at' => '2026-11-26 17:10:49',
            ),
            3 => 
            array (
                'id' => 4,
                'year' => 2025,
                'period_title' => 'Accounts for Half Year Ended, December 31, 2025',
                'document_title' => 'Condensed Interim Financial Statements',
                'file_path' => 'financial-reports/aDQi2ATOQCxLBdUvI9ueNsddyDC2F7mPMZoHGrTA.pdf',
                'sort_order' => 0,
                'created_at' => '2026-11-26 17:12:20',
                'updated_at' => '2026-11-26 17:12:20',
            ),
            4 => 
            array (
                'id' => 5,
                'year' => 2025,
                'period_title' => 'Accounts for Nine Months Ended, March 31, 2025',
                'document_title' => 'Condensed Interim Financial Statements',
                'file_path' => 'financial-reports/IUVeGqupN9N88yurcGCtz5Jd9jfwDCMmbpFHkW1m.pdf',
                'sort_order' => 0,
                'created_at' => '2026-11-26 17:12:58',
                'updated_at' => '2026-11-26 17:12:58',
            ),
            5 => 
            array (
                'id' => 6,
                'year' => 2025,
                'period_title' => 'Accounts for Quarter Ended, September 30, 2025',
                'document_title' => 'Condensed Interim Financial Statements',
                'file_path' => 'financial-reports/cK5pC55EETvduqOmXabBqgmaz3rKTeWX7GNguh0R.pdf',
                'sort_order' => 0,
                'created_at' => '2026-11-26 17:14:01',
                'updated_at' => '2026-11-26 17:14:01',
            ),
            6 => 
            array (
                'id' => 7,
                'year' => 2024,
                'period_title' => 'Annual Report',
                'document_title' => 'Annual Report, 2024',
                'file_path' => 'financial-reports/ySLOwjBSEcfnY4AnaOBAGgsX8pgBZIcUScjkERx5.pdf',
                'sort_order' => 0,
                'created_at' => '2026-11-26 17:14:41',
                'updated_at' => '2026-11-26 17:14:41',
            ),
            7 => 
            array (
                'id' => 8,
                'year' => 2024,
                'period_title' => 'Accounts for the Half Year Ended December 31, 2024',
                'document_title' => 'Condensed Interim Financial Statements',
                'file_path' => 'financial-reports/TZDv07Nd9NeoaBvSpc5KG8Kuakfowly1UXZzSjj1.pdf',
                'sort_order' => 0,
                'created_at' => '2026-11-27 08:45:43',
                'updated_at' => '2026-11-27 08:45:43',
            ),
            8 => 
            array (
                'id' => 9,
                'year' => 2024,
                'period_title' => 'Accounts for Quarter Ended, September 30, 2024',
                'document_title' => 'Condensed Interim Financial Statements',
                'file_path' => 'financial-reports/XjPwP45Ky3ZukYNDvubjBsr9f3ktyd9yb1ydCHq1.pdf',
                'sort_order' => 0,
                'created_at' => '2026-11-27 08:46:53',
                'updated_at' => '2026-11-27 08:46:53',
            ),
            9 => 
            array (
                'id' => 10,
                'year' => 2024,
                'period_title' => 'Quarterly Report, March 2024',
                'document_title' => 'Condensed Interim Financial Statements',
                'file_path' => 'financial-reports/PFl2KuYrKWAuwiNCMEMkGCmoPA3KPp9NbVIxaiif.pdf',
                'sort_order' => 0,
                'created_at' => '2026-11-27 08:57:48',
                'updated_at' => '2026-11-27 08:57:48',
            ),
            10 => 
            array (
                'id' => 11,
                'year' => 2023,
                'period_title' => 'Annual Report',
                'document_title' => 'Annual Report, 2023',
                'file_path' => 'financial-reports/MNp4YL63rWMNrCeom42YJTw6DPrydRJWPgdIbzDe.pdf',
                'sort_order' => 0,
                'created_at' => '2026-11-27 08:58:21',
                'updated_at' => '2026-11-27 08:58:21',
            ),
        ));
        
        
    }
}
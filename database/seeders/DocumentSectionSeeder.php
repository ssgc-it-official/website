<?php

namespace Database\Seeders;

use App\Models\DocumentSection;
use Illuminate\Database\Seeder;

class DocumentSectionSeeder extends Seeder
{
    public function run(): void
    {
        // [name, title, heading, sub_heading, slug]
        $rows = [
            ['HSE Integrated Management System', 'HSE Integrated Management System Handbook', 'HSE Integrated Management System Handbook', 'Download HSE Integrated Management System Handbook', 'hse-handbook'],
            ['environmental impact assessment', 'Environmental Impact Assessment RLNG-II', 'Environmental Impact Assessment Report', 'Download Environmental Impact Assessment Report for the RLNG-II Pipeline Project', 'environmental-impact-assessment'],
            ['State-Owned Enterprises', 'The State-Owned Enterprises (C-Level Appointments) Guidelines 2024', 'The State-Owned Enterprises (C-Level Appointments) Guidelines 2024', 'Download The State-Owned Enterprises (C-Level Appointments) Guidelines 2024', 'state-owned-enterprises'],
            ['Pakistan Gas Network Code', 'Pakistan Gas Network Code', 'Pakistan Gas Network Code', 'Pakistan Gas Network Code - Download PDF', 'pakistan-gas-network-code'],
            ['Pakistan Gas Network Code – Amendment', 'Pakistan Gas Network Code – Amendment', 'Pakistan Gas Network Code – Amendment', 'Pakistan Gas Network Code - Amendment - Download PDF', 'pakistan-gas-network-code-amendment'],
            ['License for Transmission', 'License for Transmission, Distribution, and Sale of Natural Gas', 'License for Transmission, Distribution, and Sale of Natural Gas', 'Download License for Transmission, Distribution, and Sale of Natural Gas', 'license-for-transmission'],
            ['Capacity Information – Gas Transmission', 'Capacity Information – Gas Transmission', 'Capacity Information', 'Download - Capacity Information', 'capacity-info-transmission'],
            ['List of Focal Persons', 'List of Focal Persons', 'List of Focal Persons', 'Download SSGC List of Focal Persons', 'list-of-focal-persons'],
            ['Ten Years At a Glance', 'Ten Years At a Glance', 'Ten Years At a Glance', 'Download Ten Years At A Glance PDF document', 'ten-years-at-a-glance'],
            ['Annual Progress on Business', 'Annual Progress on Business Plan FY 2025-2028', 'Annual Progress on Business Plan FY 2025-2028', 'Download the Annual Progress on Business Plan FY 2025-2028', 'annual-progress-on-business-plan'],
            ['Domestic Connection Form', 'Domestic Connection Form', 'Domestic Connection Form', 'Download Domestic Connection Form', 'domestic-connection-form'],
            ['Commercial Connection Form', 'Commercial Connection Form', 'Commercial Connection Form', 'Download Commercial Connection Application Form', 'commercial-connection-form'],
            ['Commercial Connection Contract', 'Commercial Connection Contract', 'Commercial Connection Contract', 'Download Commercial Connection Contract', 'commercial-connection-contract'],
            ['Industrial Connection Form', 'Industrial Connection Form', 'Industrial Connection Form', 'Download Industrial Connection Form', 'industrial-connection-form'],
            ['RLNG Contract – Industrial', 'RLNG Contract – Industrial', 'RLNG Contract – Industrial', 'Download RLNG Contract – Industrial', 'rlng-contract'],
            ['Consumer Service Manual', 'Consumer Service Manual', 'Consumer Service Manual', 'Download Consumer Service Manual', 'consumer-service-manual'],
            ['Scrutinizer Report for AGM', 'Scrutinizer Report for AGM 2022 held on 29 December 2023', 'Scrutinizer Report for AGM 2022 held on 29 December 2023', 'Download Scrutinizer Report for AGM', 'scrutinizer-report-for-agm-2022'],
            ['Scrutinizer Report', 'Scrutinizer Report', 'Scrutinizer Report', 'Download Scrutinizer Report', 'scrutinizer-report-2025'],
            ['Statement of Corporate Intent', 'Statement of Corporate Intent', 'Statement of Corporate Intent', 'Download Statement of Corporate Intent', 'statement-of-corporate-intent'],
            ['Notice of the 71st Annual General Meeting', 'Notice of the 71st Annual General Meeting', 'Notice of the 71st Annual General Meeting', 'Download Notice of the 71st Annual General Meeting', 'notice-of-71st-agm'],
            ['Form of Proxy (71st AGM)', 'Form of Proxy (71st AGM)', 'Form of Proxy (71st AGM)', 'Download Form of Proxy (71st AGM)', 'form-of-proxy-71st-agm'],
            ['Minutes of the 71st Annual General Meeting', 'Draft Minutes of the 71st Annual General Meeting', 'Draft Minutes of the 71st Annual General Meeting', 'Download Draft Minutes of the 71st Annual General Meeting', 'minutes-of-the-71st-annual-general-meeting'],
            ['Corporate Briefing Presentation', 'Corporate Briefing Presentation', 'Corporate Briefing Presentation', 'Download Corporate Briefing Presentation', 'corporate-briefing-presentation'],
            ['Notice Corporate Briefing Session', 'Notice of the Corporate Briefing Session', 'Notice of the Corporate Briefing Session', 'Download Notice of the Corporate Briefing Session', 'notice-corporate-briefing-session'],
            ['Corporate Briefing Session (CBS)', 'Corporate Briefing Session (CBS)', 'Corporate Briefing Session (CBS)', 'Download Corporate Briefing Session (CBS)', 'corporate-briefing-session'],
            ['Annual Audited Financial Statements', 'Consent for Electronic Transmission of Annual Audited Financial Statements', 'Consent for Electronic Transmission of Annual Audited Financial Statements', 'Download PDF file: Consent for Electronic Transmission of Annual Audited Financial Statements', 'annual-audited-financial-statements'],
            ['Dividend Mandate Form', 'Dividend Mandate Form', 'Dividend Mandate Form', 'Download the Dividend Mandate Form', 'dividend-mandate-form'],
            ['Report for AGM 29 December 2023', 'Scrutinizer Report for AGM 2022 held on 29 December 2023', 'Scrutinizer Report for AGM 2022 held on 29 December 2023', 'Download Scrutinizer Report for AGM', 'report-for-agm-29-december-2023'],
            ['Blacklisting Mechanism', 'Blacklisting Mechanism', 'Blacklisting Mechanism', 'Download SSGC Blacklisting Mechanism', 'blacklisting-mechanism'],
            ['Annual Procurement Plan 2026-27', 'Annual Procurement Plan 2026-27', 'Annual Procurement Plan 2026-27', 'Download Annual Procurement Plan 2026-27', 'annual-procurement-plan'],
            ['Industrial Connection Contract', 'Industrial Connection Contract', 'Industrial Connection Contract', 'Download Industrial Connection Contract', 'industrial-connection-contract'],
            ['Draft Minutes of the Extraordinary General Meeting (EOGM), 2025', 'Draft Minutes of the Extraordinary General Meeting (EOGM), 2025', 'Draft Minutes of the Extraordinary General Meeting (EOGM), 2025', 'Download Draft Minutes of the Extraordinary General Meeting (EOGM), 2025', 'draft-minutes-71st-agm'],
            ['Consent for Electronic Transmission of Annual Audited Financial Statements', 'Consent for Electronic Transmission of Annual Audited Financial Statements', 'Consent for Electronic Transmission of Annual Audited Financial Statements', 'Download Consent for Electronic Transmission of Annual Audited Financial Statements', 'consent-for-electronic-transmission'],
        ];

        foreach ($rows as [$name, $title, $heading, $subHeading, $slug]) {
            DocumentSection::updateOrCreate(
                ['slug' => $slug],
                [
                    'name'        => trim($name),
                    'title'       => trim($title),
                    'heading'     => trim($heading),
                    'sub_heading' => trim($subHeading),
                ]
            );
        }
    }
}

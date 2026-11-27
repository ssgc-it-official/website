<?php

use App\Http\Controllers\HomeController;
use App\Livewire\Web\AnnualProcurementPlan202627;
use App\Livewire\Web\AnnualProgressOnBusinessPlan;
use App\Livewire\Web\BlacklistedFirms;
use App\Livewire\Web\BlacklistingMechanism;
use App\Livewire\Web\BoardOfDirectors;
use App\Livewire\Web\BusinessPolicy;
use App\Livewire\Web\CapacityInfoBalochistan;
use App\Livewire\Web\CapacityInfoKarachi;
use App\Livewire\Web\CapacityInfoSindh;
use App\Livewire\Web\CapacityInfoTransmission;
use App\Livewire\Web\ChairmanMdDmd;
use App\Livewire\Web\CheckForLeakages;
use App\Livewire\Web\CommercialConnectionContract;
use App\Livewire\Web\CommercialConnectionForm;
use App\Livewire\Web\CommercialRates;
use App\Livewire\Web\CompanyOffices;
use App\Livewire\Web\Complaints;
use App\Livewire\Web\ComplaintTypes;
use App\Livewire\Web\ConsentForElectronicTransmission;
use App\Livewire\Web\ConsumerServiceManual;
use App\Livewire\Web\ContactForInvestmentAssistance;
use App\Livewire\Web\ConversionOfPhysicalShares;
use App\Livewire\Web\CoreValues;
use App\Livewire\Web\CustomerFacilitationCenters;
use App\Livewire\Web\DirectorProfile;
use App\Livewire\Web\DividendMandateForm;
use App\Livewire\Web\DomesticBillCalculator;
use App\Livewire\Web\DomesticConnectionForm;
use App\Livewire\Web\DomesticRates;
use App\Livewire\Web\DownloadTenderDocuments;
use App\Livewire\Web\DraftMinutes71stAgm;
use App\Livewire\Web\EnvironmentalImpactAssessment;
use App\Livewire\Web\FederalOmbudsmanNumbers;
use App\Livewire\Web\FinancialReports;
use App\Livewire\Web\FocalPersons;
use App\Livewire\Web\FormOfProxy71stAgm;
use App\Livewire\Web\FrequentlyAskedQuestions;
use App\Livewire\Web\GenderPayGap;
use App\Livewire\Web\GeneralManagers;
use App\Livewire\Web\HowCustomersComplain;
use App\Livewire\Web\HseHandbook;
use App\Livewire\Web\HsePolicy;
use App\Livewire\Web\ImportantCirculars;
use App\Livewire\Web\ImportantNumbers;
use App\Livewire\Web\IndustrialConnectionContract;
use App\Livewire\Web\IndustrialConnectionForm;
use App\Livewire\Web\IndustrialRates;
use App\Livewire\Web\InvestorRelation;
use App\Livewire\Web\LicenseForTransmission;
use App\Livewire\Web\LpgAirMix;
use App\Livewire\Web\MeterPlant;
use App\Livewire\Web\Mission;
use App\Livewire\Web\NoticeOf71stAgm;
use App\Livewire\Web\PakistanGasNetworkCode;
use App\Livewire\Web\PakistanGasNetworkCodeAmend;
use App\Livewire\Web\ProcessOfGasConnection;
use App\Livewire\Web\Profile;
use App\Livewire\Web\PublicComplaintsResolution;
use App\Livewire\Web\PurchaseOfDocuments;
use App\Livewire\Web\RlngContract;
use App\Livewire\Web\RlngProvisionalPrice;
use App\Livewire\Web\SafetyEducation;
use App\Livewire\Web\ScrutinizerReport2025;
use App\Livewire\Web\ScrutinizerReportForAgm2022;
use App\Livewire\Web\SecpCompliance;
use App\Livewire\Web\SeniorGeneralManagers;
use App\Livewire\Web\StatementOfCorporateIntent;
use App\Livewire\Web\StateOwnedEnterprises;
use App\Livewire\Web\Tenders;
use App\Livewire\Web\TenYears;
use App\Livewire\Web\ThreeQuotationTenders;
use App\Livewire\Web\Vision;
use App\Livewire\Web\WhistleBlowingMechanism;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

// Website Static Pages
// About
Route::get('state-owned-enterprises', StateOwnedEnterprises::class)->name('state-owned-enterprises');
Route::get('profile', Profile::class)->name('profile');
Route::get('vision', Vision::class)->name('vision');
Route::get('mission', Mission::class)->name('mission');
Route::get('core-values', CoreValues::class)->name('core-values');
Route::get('meter-plant', MeterPlant::class)->name('meter-plant');
Route::get('board-of-directors', BoardOfDirectors::class)->name('board-of-directors');
Route::get('director-profile/{id}', DirectorProfile::class)->name('director-profile');
Route::get('chairman-md-dmd', ChairmanMdDmd::class)->name('chairman-md-dmd');
Route::get('senior-general-managers', SeniorGeneralManagers::class)->name('senior-general-managers');
Route::get('general-managers', GeneralManagers::class)->name('general-managers');
Route::get('gender-pay-gap', GenderPayGap::class)->name('gender-pay-gap');
Route::get('company-offices', CompanyOffices::class)->name('company-offices');
Route::get('business-policy', BusinessPolicy::class)->name('business-policy');
Route::get('hse-policy', HsePolicy::class)->name('hse-policy');
Route::get('hse-handbook', HseHandbook::class)->name('hse-handbook');
Route::get('pakistan-gas-network-code', PakistanGasNetworkCode::class)->name('pakistan-gas-network-code');
Route::get('pakistan-gas-network-code-amend', PakistanGasNetworkCodeAmend::class)->name('pakistan-gas-network-code-amend');
Route::get('license-for-transmission', LicenseForTransmission::class)->name('license-for-transmission');
Route::get('capacity-info-transmission', CapacityInfoTransmission::class)->name('capacity-info-transmission');
Route::get('capacity-info-sindh', CapacityInfoSindh::class)->name('capacity-info-sindh');
Route::get('capacity-info-karachi', CapacityInfoKarachi::class)->name('capacity-info-karachi');
Route::get('capacity-info-balochistan', CapacityInfoBalochistan::class)->name('capacity-info-balochistan');
Route::get('list-of-focal-persons', FocalPersons::class)->name('list-of-focal-persons');
Route::get('environmental-impact-assessment', EnvironmentalImpactAssessment::class)->name('environmental-impact-assessment');
Route::get('whistle-blowing-mechanism', WhistleBlowingMechanism::class)->name('whistle-blowing-mechanism');

// Financial
Route::get('ten-years-at-a-glance', TenYears::class)->name('ten-years-at-glance');
Route::get('financial-reports', FinancialReports::class)->name('financial-reports');
Route::get('annual-progress-on-business-plan', AnnualProgressOnBusinessPlan::class)->name('annual-progress-on-business-plan');
Route::get('secp-compliance', SecpCompliance::class)->name('secp-compliance');

// Customer
Route::get('domestic-rates', DomesticRates::class)->name('domestic-rates');
Route::get('domestic-connection-form', DomesticConnectionForm::class)->name('domestic-connection-form');
Route::get('commercial-rates', CommercialRates::class)->name('commercial-rates');
Route::get('commercial-connection-form', CommercialConnectionForm::class)->name('commercial-connection-form');
Route::get('commercial-connection-contract', CommercialConnectionContract::class)->name('commercial-connection-contract');
Route::get('industrial-rates', IndustrialRates::class)->name('industrial-rates');
Route::get('industrial-connection-form', IndustrialConnectionForm::class)->name('industrial-connection-form');
Route::get('industrial-connection-contract', IndustrialConnectionContract::class)->name('industrial-connection-contract');
Route::get('rlng-contract', RLNGContract::class)->name('rlng-contract');
Route::get('process-of-gas-connection', ProcessOfGasConnection::class)->name('process-of-gas-connection');
Route::get('lpg-air-mix', LpgAirMix::class)->name('lpg-air-mix');
Route::get('rlng-provisional-price', RLNGProvisionalPrice::class)->name('rlng-provisional-price');
Route::get('consumer-service-manual', ConsumerServiceManual::class)->name('consumer-service-manual');
Route::get('domestic-bill-calculator', DomesticBillCalculator::class)->name('domestic-bill-calculator');
Route::get('frequently-asked-questions', FrequentlyAskedQuestions::class)->name('frequently-asked-questions');

// Investors
Route::get('scrutinizer-report-2025', ScrutinizerReport2025::class)->name('scrutinizer-report-2025');
Route::get('statement-of-corporate-intent', StatementOfCorporateIntent::class)->name('statement-of-corporate-intent');
Route::get('notice-of-71st-agm', NoticeOf71stAgm::class)->name('notice-of-71st-agm');
Route::get('form-of-proxy-71st-agm', FormOfProxy71stAgm::class)->name('form-of-proxy-71st-agm');
Route::get('draft-minutes-71st-agm', DraftMinutes71stAgm::class)->name('draft-minutes-71st-agm');
Route::get('consent-for-electronic-transmission', ConsentForElectronicTransmission::class);
Route::get('contact-for-investment-assistance', ContactForInvestmentAssistance::class);
Route::get('dividend-mandate-form', DividendMandateForm::class);
Route::get('important-ciriculars', ImportantCirculars::class)->name('important-ciriculars');
Route::get('investor-relation', InvestorRelation::class)->name('investor-relation');
Route::get('conversion-of-physical-shares', ConversionOfPhysicalShares::class);
Route::get('scrutinizer-report-for-agm-2022', ScrutinizerReportForAgm2022::class);

// Tenders
Route::get('tenders', Tenders::class)->name('tenders');
Route::get('three-quotation-tenders', ThreeQuotationTenders::class)->name('three-quotation-tenders');
Route::get('purchase-of-documents', PurchaseOfDocuments::class)->name('purchase-of-documents');
Route::get('download-tender-documents/{id}', DownloadTenderDocuments::class)->name('download-tender-documents');
Route::get('blacklisted-firms', BlacklistedFirms::class)->name('blacklisted-firms');
Route::get('blacklisting-mechanism', BlacklistingMechanism::class)->name('blacklisting-mechanism');
Route::get('annual-procurement-plan', AnnualProcurementPlan202627::class)->name('annual-procurement-plan-2026-27');

// Helpline & Complaints
Route::get('how-customers-complain', HowCustomersComplain::class)->name('how-customers-complain');
Route::get('complaint-types', ComplaintTypes::class)->name('complaint-types');
Route::get('federal-ombudsman-numbers', FederalOmbudsmanNumbers::class)->name('federal-ombudsman-numbers');
Route::get('public-complaints-resolution', PublicComplaintsResolution::class)->name('public-complaints-resolution');
Route::get('complaints', Complaints::class)->name('complaints');
Route::get('important-numbers', ImportantNumbers::class)->name('important-numbers');
Route::get('customer-facilitation-centers', CustomerFacilitationCenters::class)->name('customer-facilitation-centers');
Route::get('check-for-leakages', CheckForLeakages::class)->name('check-for-leakages');
Route::get('safety-education', SafetyEducation::class)->name('safety-education');
require __DIR__.'/settings.php';

// Admin Section
Route::name('admin.')
    ->prefix('admin')
    ->middleware('auth')
    ->group(function () {
        // Board of Directors
        Route::livewire('/director', 'pages::admin.bod.index')->name('director.index');
        Route::livewire('/director/create', 'pages::admin.bod.create')->name('director.create');
        Route::livewire('/director/{board}/edit', 'pages::admin.bod.edit')->name('director.edit');

        // Senior General Managers
        Route::livewire('/sgms', 'pages::admin.sgm.index')->name('sgms.index');
        Route::livewire('/sgms/create', 'pages::admin.sgm.create')->name('sgms.create');
        Route::livewire('/sgms/{sgm}/edit', 'pages::admin.sgm.edit')->name('sgms.edit');

        // General Managers
        Route::livewire('/gms', 'pages::admin.gm.index')->name('gms.index');
        Route::livewire('/gms/create', 'pages::admin.gm.create')->name('gms.create');
        Route::livewire('/gms/{gm}/edit', 'pages::admin.gm.edit')->name('gms.edit');

        // Capacity Info
        Route::livewire('/capacity-info', 'pages::admin.capacity.edit')->name('capacity-info.edit');

        // Blacklisted Firms
        Route::livewire('/blacklisted-firms', 'pages::admin.blacklist.index')->name('blacklist.index');
        Route::livewire('/blacklisted-firms/create', 'pages::admin.blacklist.create')->name('blacklist.create');
        Route::livewire('/blacklisted-firms/{blacklistedFirm}/edit', 'pages::admin.blacklist.edit')->name('blacklist.edit');

        // Financial Reports
        Route::livewire('/financial-reports', 'pages::admin.financial-reports.index')->name('financial-reports.index');
        Route::livewire('/financial-reports/create', 'pages::admin.financial-reports.create')->name('financial-reports.create');
        Route::livewire('/financial-reports/{report}/edit', 'pages::admin.financial-reports.edit')->name('financial-reports.edit');

        // Menus
        Route::livewire('/menus', 'pages::admin.menus.index')->name('menus.index');
        Route::livewire('/menus/create', 'pages::admin.menus.create')->name('menus.create');
        Route::livewire('/menus/{menu}/edit', 'pages::admin.menus.edit')->name('menus.edit');
    });

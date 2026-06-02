<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\Tags\Url;

Route::get('/generate-sitemap', function () {

    $sitemap = Sitemap::create()

        ->add(Url::create('/'))
        ->add(Url::create('/how-it-works'))
        ->add(Url::create('/about-us'))
        ->add(Url::create('/resources'))

        ->add(Url::create('/resources/credit-card-debt-relief'))
        ->add(Url::create('/resources/debt-relief-settlement'))
        ->add(Url::create('/resources/debt-consolidation-relief'))
        ->add(Url::create('/resources/credit-counseling'))

        ->add(Url::create('/resources/credit-card-debt-relief/credit-card-debt-forgiveness'))
        ->add(Url::create('/resources/credit-card-debt-relief/how-to-eliminate-credit-card-debt'))

        ->add(Url::create('/resources/debt-relief-settlement/national-debt-relief-top-faqs'))
        ->add(Url::create('/resources/debt-relief-settlement/debt-relief-options-and-benefits'))
        ->add(Url::create('/resources/debt-relief-settlement/debt-relief-qualifications'))

        ->add(Url::create('/resources/debt-consolidation-relief/debt-consolidation-programs'))
        ->add(Url::create('/resources/debt-consolidation-relief/how-to-choose-debt-consolidation-program'))

        ->add(Url::create('/resources/credit-counseling/finding-a-credit-counselor'))
        ->add(Url::create('/resources/credit-counseling/debt-management-plans'))

        ->add(Url::create('/client-stories'))
        ->add(Url::create('/privacy-policy'))
        ->add(Url::create('/terms-of-use'))
        ->add(Url::create('/contact-us'))
        ->add(Url::create('/our-firm'))
        ->add(Url::create('/our-practices'))
        ->add(Url::create('/news-events'));

    $sitemap->writeToFile(public_path('sitemap.xml'));

    return 'Sitemap generated successfully!';
});


// Frontend Routes
Route::get('/', [FrontendController::class, 'home'])->name('home');
Route::get('/how-it-works', [FrontendController::class, 'howItWorks'])->name('how-it-works');
Route::get('/about-us', [FrontendController::class, 'aboutUs'])->name('about-us');
Route::get('/resources', [FrontendController::class, 'resources'])->name('resources');

// Resources Routes

Route::prefix('resources')
    // ->name('resources.')
    ->controller(FrontendController::class)
    ->group(function () {

        Route::get('/credit-card-debt-relief', 'creditCardDebtRelief')
            ->name('credit-card-debt-relief');

        Route::get('/debt-relief-settlement', 'debtReliefSettlement')
            ->name('debt-relief-settlement');

        Route::get('/debt-consolidation-relief', 'debtConsolidationRelief')
            ->name('debt-consolidation-relief');

        Route::get('/credit-counseling', 'creditCounseling')
            ->name('credit-counseling');
    });

Route::prefix('resources/credit-card-debt-relief')
    // ->name('resources.')
    ->controller(FrontendController::class)
    ->group(function () {

        Route::get('/credit-card-debt-forgiveness', 'creditCardDebtForgiveness')
            ->name('credit-card-debt-forgiveness');

        Route::get('/how-to-eliminate-credit-card-debt', 'howToEliminateCreditCardDebt')
            ->name('how-to-eliminate-credit-card-debt');

    });

Route::prefix('resources/debt-relief-settlement')
    // ->name('resources.')
    ->controller(FrontendController::class)
    ->group(function () {

        Route::get('/national-debt-relief-top-faqs', 'nationalDebtReliefTopFaqs')
            ->name('national-debt-relief-top-faqs');

        Route::get('/debt-relief-options-and-benefits', 'debtReliefOptionsAndBenefits')
            ->name('debt-relief-options-and-benefits');

        Route::get('/debt-relief-qualifications', 'debtReliefQualifications')
            ->name('debt-relief-qualifications');

    });

Route::prefix('resources/debt-consolidation-relief')
    // ->name('resources.')
    ->controller(FrontendController::class)
    ->group(function () {

        Route::get('/debt-consolidation-programs', 'debtConsolidationPrograms')
            ->name('debt-consolidation-programs');

        Route::get('/how-to-choose-debt-consolidation-program', 'howToChooseDebtConsolidationProgram')
            ->name('how-to-choose-debt-consolidation-program');

    });

Route::prefix('resources/credit-counseling')
    ->controller(FrontendController::class)
    ->group(function () {

        Route::get('/finding-a-credit-counselor', 'findingACreditCounselor')
            ->name('finding-a-credit-counselor');

        Route::get('/debt-management-plans', 'debtManagementPlans')
            ->name('debt-management-plans');

    });

Route::get('/client-stories', [FrontendController::class, 'clientStories'])->name('client-stories');

Route::get('/client-stories/{slug}', [FrontendController::class, 'clientStoriesDetail'])
    ->name('client-stories-detail');

Route::get('/privacy-policy', [FrontendController::class, 'privacyPolicy'])->name('privacy-policy');

Route::get('/terms-of-use', [FrontendController::class, 'termsOfUse'])->name('terms-of-use');

Route::get('/contact-us', [FrontendController::class, 'contactUs'])->name('contact-us');

// Route::get('/client-stories-detail', function () {
//     return view('website.client-stories-detail');
// })->name('client-stories-detail');

Route::get('/our-firm', [FrontendController::class, 'ourFirm'])->name('our-firm');
Route::get('/our-practices', [FrontendController::class, 'ourPractices'])->name('our-practices');
Route::get('/news-events', [FrontendController::class, 'newsEvents'])->name('news-events');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

require __DIR__ . '/settings.php';

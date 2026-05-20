<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;


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

Route::get('/our-firm', [FrontendController::class, 'ourFirm'])->name('our-firm');
Route::get('/our-practices', [FrontendController::class, 'ourPractices'])->name('our-practices');
Route::get('/our-people', [FrontendController::class, 'ourPeople'])->name('our-people');
Route::get('/news-events', [FrontendController::class, 'newsEvents'])->name('news-events');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
});

require __DIR__ . '/settings.php';

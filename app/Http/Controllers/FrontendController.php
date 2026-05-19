<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home()
    {
        return view('website.index', [
            'title' => 'Home - State Attorney LLC'
        ]);
    }

    public function howItWorks()
    {
        return view('website.how-it-works', [
            'title' => 'How It Works'
        ]);
    }

    public function aboutUs()
    {
        return view('website.about-us', [
            'title' => 'How It Works'
        ]);
    }

    // public function resources()
    // {
    //     return view('website.resources', [
    //         'title' => 'Resources'
    //     ]);
    // }

    private function getServices()
    {
        return [
            // --- First Four ---
            [
                'icon' => 'assets/images/resources/credit-card-debt-relief.svg',
                'title' => 'Credit Card Debt Relief',
                'description' => "Clear the balances you have accumulated.",
                'link' => route('credit-card-debt-relief')
            ],
            [
                'icon' => 'assets/images/resources/debt-consolidation.svg',
                'title' => 'Debt Consolidation',
                'description' => "Merge various accounts into a solo obligation to economize.",
                'link' => '#'
            ],
            // [
            //     'icon' => 'assets/images/resources/business-debt-relief.svg',
            //     'title' => 'Business Debt Relief',
            //     'description' => "Avoid operating or launching your venture on a deficit.",
            //     'link' => '#'
            // ],

            [
                'icon' => 'assets/images/resources/debt-relief-settlement.svg',
                'title' => 'Debt Relief Settlement',
                'description' => "Settle what you owe faster while maximizing your keepings.",
                'link' => '#'
            ],

            // --- Second Four ---

            // [
            //     'icon' => 'assets/images/resources/bankruptcy.png',
            //     'title' => 'Bankruptcy',
            //     'description' => "Understand the process and if it suits your circumstances.",
            //     'link' => '#'
            // ],

            // [
            //     'icon' => 'assets/images/resources/unemployment-debt-relief.svg',
            //     'title' => 'Unemployment Debt Relief',
            //     'description' => "Utilize these solutions to manage and satisfy your monthly costs.",
            //     'link' => '#'
            // ],
            // [
            //     'icon' => 'assets/images/resources/retirement-debt-relief.svg',
            //     'title' => 'Retirement Debt Relief',
            //     'description' => "We assist in making your senior years more prosperous.",
            //     'link' => '#'
            // ],
            // [
            //     'icon' => 'assets/images/resources/veteran-debt-relief.svg',
            //     'title' => 'Veteran Debt Relief',
            //     'description' => "It is a privilege to help former service members start fresh.",
            //     'link' => '#'
            // ],

            // --- Third Four ---

            // [
            //     'icon' => 'assets/images/resources/personal-loan-debt-relief.svg',
            //     'title' => 'Personal Loan Debt Relief',
            //     'description' => "Our team assists in steering through difficult monetary periods.",
            //     'link' => '#'
            // ],



            // [
            //     'icon' => 'assets/images/resources/medical-debt-relief.svg',
            //     'title' => 'Medical Debt Relief',
            //     'description' => "Achieve peace of mind by resolving your healthcare invoices.",
            //     'link' => '#'
            // ],
            [
                'icon' => 'assets/images/resources/credit-counseling.png',
                'title' => 'Credit Counseling',
                'description' => "Discover if a professional guidance strategy is your best path.",
                'link' => '#'
            ],
            // [
            //     'icon' => 'assets/images/resources/private-student-debt-relief.svg',
            //     'title' => 'Private Student Debt Relief',
            //     'description' => "Gain knowledge on resolving non-federal educational loans for less.",
            //     'link' => '#'
            // ],

            // --- Fourth Three ---
            // [
            //     'icon' => 'assets/images/resources/marital-debt-relief.svg',
            //     'title' => 'Marital Debt Relief',
            //     'description' => "Find out how to manage costs related to major life changes and reclaim your stability.",
            //     'link' => '#'
            // ],
            // [
            //     'icon' => 'assets/images/resources/personal-finance-debt-relief.svg',
            //     'title' => 'Personal Finance Debt Relief',
            //     'description' => "Prevent individual financial burdens from disrupting your private life and goals.",
            //     'link' => '#'
            // ],
            // [
            //     'icon' => 'assets/images/resources/debt-relief-by-state.png',
            //     'title' => 'Debt Relief by State',
            //     'description' => "Review the specific programs and solutions available in your local area.",
            //     'link' => '#'
            // ],
        ];
    }

    public function resources()
    {
        return view('website.resources', [
            'title' => 'Resources',
            'services' => $this->getServices()
        ]);
    }

    public function creditCardDebtRelief()
    {
        return view('website.resources.credit-card-debt-relief', [
            'title' => 'Credit Card Debt Relief',
            'services' => $this->getServices()
        ]);
    }

    public function creditCardDebtForgiveness()
    {
        return view('website.resources.credit-card-debt-relief.credit-card-debt-forgiveness', [
            'title' => 'Credit Card Debt Forgiveness',
            'services' => $this->getServices()
        ]);
    }

    public function howToEliminateCreditCardDebt()
    {
        return view('website.resources.credit-card-debt-relief.how-to-eliminate-credit-card-debt', [
            'title' => 'How to Eliminate Credit Card Debt',
            'services' => $this->getServices()
        ]);
    }

    public function debtReliefSettlement()
    {
        return view('website.resources.debt-relief-settlement', [
            'title' => 'Debt Relief Settlement',
            'services' => $this->getServices()
        ]);
    }

    public function nationalDebtReliefTopFaqs()
    {
        return view('website.resources.debt-relief-settlement.national-debt-relief-top-faqs', [
            'title' => 'National Debt Relief Top FAQs',
            'services' => $this->getServices()
        ]);
    }

    public function debtReliefOptionsAndBenefits()
    {
        return view('website.resources.debt-relief-settlement.debt-relief-options-and-benefits', [
            'title' => 'Debt Relief Options and Benefits',
            'services' => $this->getServices()
        ]);
    }

    public function ourFirm()
    {
        return view('website.our-firm', [
            'title' => 'Our Firm'
        ]);
    }

    public function ourPractices()
    {
        return view('website.our-practices', [
            'title' => 'Our Practices'
        ]);
    }

    public function ourPeople()
    {
        return view('website.our-people', [
            'title' => 'Our People'
        ]);
    }

    public function newsEvents()
    {
        return view('website.news-events', [
            'title' => 'News Events'
        ]);
    }
}

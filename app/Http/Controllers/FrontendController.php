<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class FrontendController extends Controller
{
    public function home()
    {
        return view('website.index', [
            'title' => 'Home - Consumer Debt Management Service'
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
            'title' => 'About Us'
        ]);
    }

    public function privacyPolicy()
    {
        return view('website.privacy-policy', [
            'title' => 'Privacy Policy'
        ]);
    }

    public function termsOfUse()
    {
        return view('website.terms-of-use', [
            'title' => 'Terms of Use'
        ]);
    }

    public function contactUs()
    {
        return view('website.contact-us', [
            'title' => 'Contact Us'
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
                'link' => route('debt-consolidation-relief')
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
                'link' => route('debt-relief-settlement')
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
                'link' => route('credit-counseling')
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

    public function debtReliefQualifications()
    {
        return view('website.resources.debt-relief-settlement.debt-relief-qualifications', [
            'title' => 'Debt Relief Qualifications',
            'services' => $this->getServices()
        ]);
    }

    public function debtConsolidationRelief()
    {
        return view('website.resources.debt-consolidation-relief', [
            'title' => 'Debt Consolidation Relief',
            'services' => $this->getServices()
        ]);
    }

    public function debtConsolidationPrograms()
    {
        return view('website.resources.debt-consolidation-relief.debt-consolidation-programs', [
            'title' => 'Debt Consolidation Programs',
            'services' => $this->getServices()
        ]);
    }

    public function howToChooseDebtConsolidationProgram()
    {
        return view('website.resources.debt-consolidation-relief.how-to-choose-debt-consolidation-program', [
            'title' => 'How to Choose a Debt Consolidation Program',
            'services' => $this->getServices()
        ]);
    }

    public function creditCounseling()
    {
        return view('website.resources.credit-counseling', [
            'title' => 'Credit Counseling',
            'services' => $this->getServices()
        ]);
    }

    public function findingACreditCounselor()
    {
        return view('website.resources.credit-counseling.finding-a-credit-counselor', [
            'title' => 'Finding a Credit Counselor',
            'services' => $this->getServices()
        ]);
    }

    public function debtManagementPlans()
    {
        return view('website.resources.credit-counseling.debt-management-plans', [
            'title' => 'Debt Management Plans',
            'services' => $this->getServices()
        ]);
    }

    private function getClients()
    {
        return [
            [
                'name' => 'Marcus T.',
                'slug' => 'marcus-t',
                'image' => 'assets/images/marcus-t.webp',
                'description' => 'Canine rescuer, motorcycle collector',
                'tabs' => [
                    [
                        'title' => 'Savings',
                        'heading' => 'Marcus reduced his obligations by 42%',
                        'cards' => [
                            [
                                'image' => 'assets/images/money-coin-cash.svg',
                                'label' => 'Total Debt',
                                'amount' => '$44,750',
                            ],
                            [
                                'image' => 'assets/images/wealth-time-money.svg',
                                'label' => 'Monthly Payment',
                                'amount' => '$785',
                            ],
                            [
                                'image' => 'assets/images/calendar-clock.svg',
                                'label' => 'Program Length',
                                'amount' => '32 Months',
                            ],
                            [
                                'image' => 'assets/images/saving-piggy-coins.svg',
                                'label' => 'Total Savings',
                                'amount' => '$18,795',
                            ],
                        ],
                    ],
                    [
                        'title' => 'Testimonial',
                        'images' => [
                            'assets/images/Open-Quote.svg',
                            'assets/images/Close-Quote.svg',
                        ],
                        'text' => 'When the initial agreement was finalized, it seemed completely surreal.',
                    ],
                    [
                        'title' => 'Comparison',
                        'content' => [
                            'heading' => 'Marcus managed to wipe out his liabilities for a small percentage of his original balance, crossing the<br> finish line much faster than if he had stuck to standard monthly minimums.',
                            'name' => 'Marcus T., Canine rescuer, motorcycle collector',
                            'image' => 'assets/images/marcus-t.webp',
                            'starting_debt_label' => 'Initial Liabilities:',
                            'starting_debt' => '$44,750',
                            'savings_label' => 'Reduced by:',
                            'savings' => '42%',
                            'programs' => [
                                [
                                    'name' => 'Consumer Debt Management Service Solution:',
                                    'value' => '$25,955',
                                    'percent' => 12,
                                    'color_key' => 'red'
                                ],
                                [
                                    'name' => 'Debt Consolidation Options:',
                                    'value' => '$52,430',
                                    'percent' => 25,
                                    'color_key' => 'yellow'
                                ],
                                [
                                    'name' => 'Credit Counseling Paths:',
                                    'value' => '$53,820',
                                    'percent' => 25,
                                    'color_key' => 'green'
                                ],
                                [
                                    'name' => 'Standard Minimum Credit Card Payments:',
                                    'value' => '$148,940',
                                    'percent' => 90,
                                    'color_key' => 'orange'
                                ],
                            ]
                        ]
                    ]
                ],
            ],
            [
                'name' => 'Julian K.',
                'slug' => 'julian-k',
                'image' => 'assets/images/julian-k.webp',
                'description' => 'Logistics analyst, avid hiker',
                'tabs' => [
                    [
                        'title' => 'Savings',
                        'heading' => 'Julian reduced his obligations by 44%',
                        'cards' => [
                            [
                                'image' => 'assets/images/money-coin-cash.svg',
                                'label' => 'Total Debt',
                                'amount' => '$58,320',
                            ],
                            [
                                'image' => 'assets/images/wealth-time-money.svg',
                                'label' => 'Monthly Payment',
                                'amount' => '$890',
                            ],
                            [
                                'image' => 'assets/images/calendar-clock.svg',
                                'label' => 'Program Length',
                                'amount' => '41 Months',
                            ],
                            [
                                'image' => 'assets/images/saving-piggy-coins.svg',
                                'label' => 'Total Savings',
                                'amount' => '$25,660',
                            ],
                        ],
                    ],
                    [
                        'title' => 'Testimonial',
                        'images' => [
                            'assets/images/Open-Quote.svg',
                            'assets/images/Close-Quote.svg',
                        ],
                        'text' => 'With my finances restored, planning family milestones is no longer a strain.<br> I can finally invest in personal upgrades.',
                    ],
                    [
                        'title' => 'Comparison',
                        'content' => [
                            'heading' => 'Julian managed to wipe out his liabilities for a small percentage of his original balance, crossing the finish line much faster than if he had stuck to standard monthly minimums.',
                            'name' => 'Julian K., Logistics analyst, avid hiker',
                            'image' => 'assets/images/julian-k.webp',
                            'starting_debt_label' => 'Initial Liabilities:',
                            'starting_debt' => '$58,320',
                            'savings_label' => 'Reduced by:',
                            'savings' => '44%',
                            'programs' => [
                                [
                                    'name' => 'Consumer Debt Management Service Solution:',
                                    'value' => '$32,660',
                                    'percent' => 12,
                                    'color_key' => 'red'
                                ],
                                [
                                    'name' => 'Debt Consolidation Options:',
                                    'value' => '$69,450',
                                    'percent' => 25,
                                    'color_key' => 'yellow'
                                ],
                                [
                                    'name' => 'Credit Counseling Paths:',
                                    'value' => '$71,280',
                                    'percent' => 25,
                                    'color_key' => 'green'
                                ],
                                [
                                    'name' => 'Standard Minimum Credit Card Payments:',
                                    'value' => '$194,370',
                                    'percent' => 90,
                                    'color_key' => 'orange'
                                ],
                            ]
                        ]
                    ]
                ],
            ],
            [
                'name' => 'Raymond V.',
                'slug' => 'raymond-v',
                'image' => 'assets/images/raymond-v.webp',
                'description' => 'Rideshare operator, dedicated father',
                'tabs' => [
                    [
                        'title' => 'Savings',
                        'heading' => 'Raymond reduced his obligations by 34%',
                        'cards' => [
                            [
                                'image' => 'assets/images/money-coin-cash.svg',
                                'label' => 'Total Debt',
                                'amount' => '$31,650',
                            ],
                            [
                                'image' => 'assets/images/wealth-time-money.svg',
                                'label' => 'Monthly Payment',
                                'amount' => '$1,340',
                            ],
                            [
                                'image' => 'assets/images/calendar-clock.svg',
                                'label' => 'Program Length',
                                'amount' => '19 Months',
                            ],
                            [
                                'image' => 'assets/images/saving-piggy-coins.svg',
                                'label' => 'Total Savings',
                                'amount' => '$10,760',
                            ],
                        ],
                    ],
                    [
                        'title' => 'Testimonial',
                        'images' => [
                            'assets/images/Open-Quote.svg',
                            'assets/images/Close-Quote.svg',
                        ],
                        'text' => 'Discovering Consumer Debt Management Service completely turned my situation around.<br> My monetary outlook and that crushing sense of anxiety both got drastically better.',
                    ],
                    [
                        'title' => 'Comparison',
                        'content' => [
                            'heading' => 'Raymond managed to wipe out his liabilities for a small percentage of his original balance, crossing the finish line much faster than if he had stuck to standard monthly minimums.',
                            'name' => 'Raymond V., Rideshare operator, dedicated father',
                            'image' => 'assets/images/raymond-v.webp',
                            'starting_debt_label' => 'Initial Liabilities:',
                            'starting_debt' => '$31,650',
                            'savings_label' => 'Reduced by:',
                            'savings' => '34%',
                            'programs' => [
                                [
                                    'name' => 'Consumer Debt Management Service Solution:',
                                    'value' => '$20,890',
                                    'percent' => 12,
                                    'color_key' => 'red'
                                ],
                                [
                                    'name' => 'Debt Consolidation Options:',
                                    'value' => '$36,920',
                                    'percent' => 25,
                                    'color_key' => 'yellow'
                                ],
                                [
                                    'name' => 'Credit Counseling Paths:',
                                    'value' => '$52,180',
                                    'percent' => 25,
                                    'color_key' => 'green'
                                ],
                                [
                                    'name' => 'Standard Minimum Credit Card Payments:',
                                    'value' => '$162,450',
                                    'percent' => 90,
                                    'color_key' => 'orange'
                                ],
                            ]
                        ]
                    ]
                ],
            ],
            [
                'name' => 'Valerie G.',
                'slug' => 'valerie-g',
                'image' => 'assets/images/valerie-g.webp',
                'description' => 'High school counselor',
                'tabs' => [
                    [
                        'title' => 'Savings',
                        'heading' => 'Valerie reduced her obligations by 35%',
                        'cards' => [
                            [
                                'image' => 'assets/images/money-coin-cash.svg',
                                'label' => 'Total Debt',
                                'amount' => '$64,250',
                            ],
                            [
                                'image' => 'assets/images/wealth-time-money.svg',
                                'label' => 'Monthly Payment',
                                'amount' => '$795',
                            ],
                            [
                                'image' => 'assets/images/calendar-clock.svg',
                                'label' => 'Program Length',
                                'amount' => '45 Months',
                            ],
                            [
                                'image' => 'assets/images/saving-piggy-coins.svg',
                                'label' => 'Total Savings',
                                'amount' => '$22,485',
                            ],
                        ],
                    ],
                    [
                        'title' => 'Testimonial',
                        'images' => [
                            'assets/images/Open-Quote.svg',
                            'assets/images/Close-Quote.svg',
                        ],
                        'text' => 'It genuinely unlocked a completely fresh chapter for us. That was the<br> precise instance where I felt the heavy weight lift.',
                    ],
                    [
                        'title' => 'Comparison',
                        'content' => [
                            'heading' => 'Valerie managed to wipe out his liabilities for a small percentage of his original balance, crossing the finish line much faster than if he had stuck to standard monthly minimums.',
                            'name' => 'Valerie G., High school counselor, parent of 2 energetic boys',
                            'image' => 'assets/images/valerie-g.webp',
                            'starting_debt_label' => 'Initial Liabilities:',
                            'starting_debt' => '$64,250',
                            'savings_label' => 'Reduced by:',
                            'savings' => '35%',
                            'programs' => [
                                [
                                    'name' => 'Consumer Debt Management Service Solution:',
                                    'value' => '$41,765',
                                    'percent' => 12,
                                    'color_key' => 'red'
                                ],
                                [
                                    'name' => 'Debt Consolidation Options:',
                                    'value' => '$74,890',
                                    'percent' => 25,
                                    'color_key' => 'yellow'
                                ],
                                [
                                    'name' => 'Credit Counseling Paths:',
                                    'value' => '$76,320',
                                    'percent' => 25,
                                    'color_key' => 'green'
                                ],
                                [
                                    'name' => 'Standard Minimum Credit Card Payments:',
                                    'value' => '$212,640',
                                    'percent' => 90,
                                    'color_key' => 'orange'
                                ],
                            ]
                        ]
                    ]
                ],
            ],
            [
                'name' => 'Elena M.',
                'slug' => 'elena-m',
                'image' => 'assets/images/elena-m.webp',
                'description' => 'Financial consultant',
                'tabs' => [
                    [
                        'title' => 'Savings',
                        'heading' => 'Elena reduced her obligations by 18%',
                        'cards' => [
                            [
                                'image' => 'assets/images/money-coin-cash.svg',
                                'label' => 'Total Debt',
                                'amount' => '$24,500',
                            ],
                            [
                                'image' => 'assets/images/wealth-time-money.svg',
                                'label' => 'Monthly Payment',
                                'amount' => '$510',
                            ],
                            [
                                'image' => 'assets/images/calendar-clock.svg',
                                'label' => 'Program Length',
                                'amount' => '28 Months',
                            ],
                            [
                                'image' => 'assets/images/saving-piggy-coins.svg',
                                'label' => 'Total Savings',
                                'amount' => '$4,410',
                            ],
                        ],
                    ],
                    [
                        'title' => 'Testimonial',
                        'images' => [
                            'assets/images/Open-Quote.svg',
                            'assets/images/Close-Quote.svg',
                        ],
                        'text' => 'I was completely stunned when they explained that I could resolve my liabilities while still <br>retaining enough funds to appreciate life alongside my household.',
                    ],
                    [
                        'title' => 'Comparison',
                        'content' => [
                            'heading' => 'Elena managed to wipe out her liabilities for a small percentage of her original balance, crossing the finish line much faster than if she had stuck to standard monthly minimums.',
                            'name' => 'Elena M., Financial consultant, gardener, and baking enthusiast',
                            'image' => 'assets/images/elena-m.webp',
                            'starting_debt_label' => 'Initial Liabilities:',
                            'starting_debt' => '$24,500',
                            'savings_label' => 'Reduced by:',
                            'savings' => '18%',
                            'programs' => [
                                [
                                    'name' => 'Consumer Debt Management Service Solution:',
                                    'value' => '$20,090',
                                    'percent' => 12,
                                    'color_key' => 'red'
                                ],
                                [
                                    'name' => 'Debt Consolidation Options:',
                                    'value' => '$27,850',
                                    'percent' => 25,
                                    'color_key' => 'yellow'
                                ],
                                [
                                    'name' => 'Credit Counseling Paths:',
                                    'value' => '$31,440',
                                    'percent' => 25,
                                    'color_key' => 'green'
                                ],
                                [
                                    'name' => 'Standard Minimum Credit Card Payments:',
                                    'value' => '$78,350',
                                    'percent' => 90,
                                    'color_key' => 'orange'
                                ],
                            ]
                        ]
                    ]
                ],
            ],
            [
                'name' => 'Derek S.',
                'slug' => 'derek-s',
                'image' => 'assets/images/derek-s.webp',
                'description' => 'Commercial skipper',
                'tabs' => [
                    [
                        'title' => 'Savings',
                        'heading' => 'Derek reduced his obligations by 36%',
                        'cards' => [
                            [
                                'image' => 'assets/images/money-coin-cash.svg',
                                'label' => 'Total Debt',
                                'amount' => '$42,850',
                            ],
                            [
                                'image' => 'assets/images/wealth-time-money.svg',
                                'label' => 'Monthly Payment',
                                'amount' => '$635',
                            ],
                            [
                                'image' => 'assets/images/calendar-clock.svg',
                                'label' => 'Program Length',
                                'amount' => '38 Months',
                            ],
                            [
                                'image' => 'assets/images/saving-piggy-coins.svg',
                                'label' => 'Total Savings',
                                'amount' => '$15,426',
                            ],
                        ],
                    ],
                    [
                        'title' => 'Testimonial',
                        'images' => [
                            'assets/images/Open-Quote.svg',
                            'assets/images/Close-Quote.svg',
                        ],
                        'text' => 'When you strip away that crushing weight, every aspect of life becomes more manageable.',
                    ],
                    [
                        'title' => 'Comparison',
                        'content' => [
                            'heading' => 'Derek managed to wipe out his liabilities for a small percentage of his original balance, crossing the finish line much faster than if he had stuck to standard monthly minimums.',
                            'name' => 'Derek S., Commercial skipper, loving partner',
                            'image' => 'assets/images/derek-s.webp',
                            'starting_debt_label' => 'Initial Liabilities:',
                            'starting_debt' => '$42,850',
                            'savings_label' => 'Reduced by:',
                            'savings' => '36%',
                            'programs' => [
                                [
                                    'name' => 'Consumer Debt Management Service Solution:',
                                    'value' => '$27,424',
                                    'percent' => 12,
                                    'color_key' => 'red'
                                ],
                                [
                                    'name' => 'Debt Consolidation Options:',
                                    'value' => '$49,820',
                                    'percent' => 25,
                                    'color_key' => 'yellow'
                                ],
                                [
                                    'name' => 'Credit Counseling Paths:',
                                    'value' => '$51,160',
                                    'percent' => 25,
                                    'color_key' => 'green'
                                ],
                                [
                                    'name' => 'Standard Minimum Credit Card Payments:',
                                    'value' => '$144,930',
                                    'percent' => 90,
                                    'color_key' => 'orange'
                                ],
                            ]
                        ]
                    ]
                ],
            ],
        ];
    }

    public function __construct()
    {
        View::share('clients', $this->getClients());
    }

    public function clientStories()
    {
        $clients = $this->getClients();

        return view('website.client-stories', compact('clients'));
    }

    public function clientStoriesDetail($slug)
    {
        $clients = $this->getClients();

        $client = collect($clients)->firstWhere('slug', $slug);

        if (!$client) {
            abort(404);
        }

        $related = collect($clients)
            ->where('slug', '!=', $slug)
            ->values();

        return view('website.client-stories-detail', compact('client', 'related'));
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

    public function newsEvents()
    {
        return view('website.news-events', [
            'title' => 'News Events'
        ]);
    }
}

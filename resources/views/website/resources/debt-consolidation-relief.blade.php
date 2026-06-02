@extends('website-layouts.app')

@section('content')

<div class="container md-mt-26">

    <div class="column dt-sc-one-third first m-0">
        <h4 class="aligncenter p-20 border-1"><a href="{{ route('debt-consolidation-relief') }}">Debt Consolidation</a></h4>
    </div>

    <div class="column dt-sc-one-third m-0">
        <h4 class="aligncenter p-20 border-1"><a href="{{ route('debt-consolidation-programs') }}">Programs</a></h4>
    </div>

    <div class="column dt-sc-one-third m-0">
        <h4 class="aligncenter p-20 border-1"><a href="{{ route('how-to-choose-debt-consolidation-program') }}">How to Choose</a></h4>
    </div>

</div>

<!-- <div class="breadcrumb-section">
    <div class="container">
        <h1> Credit Card Debt Relief </h1>
        <div class="breadcrumb">
            <a href="{{ route('home') }}"> Home </a>
            <a href="{{ route('resources') }}"> Resources </a>
            <span class="current"> Credit Card Debt Relief </span>
        </div>
    </div>
</div> -->

<!--primary starts-->
<section id="primary" class="content-full-width">
    <!--container starts-->
    <div class="container">

        <div class="dt-sc-two-third column first">
            <h1 class="dt-sc-simple-hr-title"> Debt Consolidation Loans </h1>
            <p> <b>Key Insights</b> </p>
            <ul class="dt-sc-fancy-list chocolate check-circle">
                <li>Credit consolidation financing merges distinct liabilities into a single account, frequently establishing a reduced percentage rate to streamline your monthly outlays.</li>
                <li>Equity-backed options demand physical property as a safety net for the lender, whereas signature options require no collateral but typically carry elevated interest parameters.</li>
                <li>Primary advantages encompass a unified payment structure, diminished financing costs,<br> and a significantly compressed path to total resolution.</li>
                <li>This strategy is counterproductive if it translates into steeper long-term financing fees, advance administrative costs, or if your borrowing rating falls below baseline requirements.</li>
                <li>Consumer Debt Management Service provides personalized liability strategies engineered to guide participants to complete financial autonomy within 18 to 42 months.</li>
            </ul>
            <p>
                Utilizing a consolidation financing instrument serves as a practical mechanism to restructure your outstanding credit card liabilities. It offers targeted advantages for individuals managing numerous revolving lines across independent financial institutions with disparate interest structures.
            </p>
        </div>

        @include('website-component.inner-form')

    </div>
    <!--container ends-->

</section>
<!--primary ends-->

<!--primary starts-->
<section id="primary" class="content-full-width">
    <!--container starts-->
    <div class="container">

        <div class="dt-sc-one-half column first">
            <div class="dt-sc-hr-invisible-large"></div>
            <h1 class="dt-sc-simple-hr-title"> Determine your eligibility for a<br><br> credit consolidation program! </h1>
            <div class="alignleft">
                <a class="dt-sc-bordered-button" href="{{ route('contact-us') }}"> Get Started </a>
            </div>
        </div>

        <div class="dt-sc-one-half column">
            <img src="{{ asset('assets/images/determine-your-eligibility-for-a-credit-consolidation-program.webp') }}" alt="Determine Your Eligibility for a Credit Consolidation Program!" title="Determine Your Eligibility for a Credit Consolidation Program!">
        </div>

    </div>
    <!--container ends-->

</section>
<!--primary ends-->

<!-- <div class="dt-sc-hr-invisible-large"></div> -->

<!-- ============================================================
     STICKY FAQ SECTION 
============================================================ -->

<div class="dt-sc-hr-invisible-large"></div>

<section class="faq-sticky-wrapper">
    <div class="container">

        <!-- LEFT — scrolling content -->
        <div class="dt-sc-two-third column first" id="mainContent">

            <div id="comprehensive-debt-consolidation-insights" class="content-block scroll-section">

                <h2 class="highlight-box">Comprehensive Debt Consolidation Insights</h2>
                <p>To initiate a credit consolidation strategy, you provide the cumulative balance of your active obligations. Upon formal underwriting approval, you merge those multiple liabilities into a singular new financing agreement. This structure can preserve both time and capital by securing a reduced interest rate and minimizing your aggregate monthly outlays. By rendering your outstanding balances far more straightforward to track, you place your budget in a significantly stronger position to fully liquidate the principal over a compressed timeline.</p>
                <p>The vast majority of consolidation instruments feature a fixed interest structure, meaning your required monthly installment remains completely identical until the principal is entirely satisfied. For instance, if you are currently juggling four separate revolving accounts across four independent banking institutions—all carrying disparate, fluctuating interest metrics—you can utilize a unified consolidation plan to pay off those individual accounts. Instead of managing four distinct payment cycles, you interface with just one. However, it is imperative to verify that the newly established contract delivers an interest percentage below the weighted average of your existing accounts.</p>

            </div>

            <div id="functional-mechanics-of-consolidation-structures" class="content-block scroll-section">

                <h2 class="highlight-box">Functional Mechanics of Consolidation Structures</h2>
                <p>Consolidation mechanisms are fundamentally divided into two operational categories:</p>
                <ul class="dt-sc-fancy-list chocolate check-circle">
                    <li><b>Asset-Backed Agreements (Secured):</b> These obligations are explicitly tied to a high-value personal asset, such as residential real estate or an automobile, which serves as contractual collateral for the lender in the event of a payment default.</li>
                    <li><b>Signature-Based Agreements (Unsecured):</b> These instruments demand no asset mitigation, which inherently renders underwriting criteria more stringent. Without physical collateral, interest parameters can be elevated and your structural options may be more limited. However, because the rates remain fixed, your total long-term expenditures will generally remain significantly lower than if you attempted to satisfy multiple compounding lines independently.</li>
                    <li>Clear your debt more rapidly than attempting independent bargaining</li>
                </ul>
                <p>Because a significant percentage of national underwriting platforms mandate a baseline credit score of at least 660, programmatic entry is not universally available. Even with a score above this benchmark, recent historical delinquencies or negative repayment markers can diminish your probability of formal approval.</p>

                <h3>Operational Projections for Premium Credit Profiles</h3>
                <p>Supposing you require a $30,000 consolidation instrument and your credit profile occupies an optimal tier between 740 and 799, you can anticipate an estimated base interest rate hovering around 10.49%. Your structured repayment configurations would align close to the following trajectories:</p>
                <p>36-Month Term: $975 per month | $35,100 cumulative expenditure over 3 years</p>
                <p>48-Month Term: $768 per month | $36,864 cumulative expenditure over 4 years</p>
                <p>60-Month Term: $645 per month | $38,700 cumulative expenditure over 5 years</p>
                <p>72-Month Term: $564 per month | $40,608 cumulative expenditure over 6 years</p>
                <p>84-Month Term: $507 per month | $42,588 cumulative expenditure over 7 years</p>

                <h3>Comparative Analysis: Merging Multiple Revolving Accounts</h3>
                <table border="1" cellpadding="10" cellspacing="0" style="border-collapse: collapse; width: 100%; text-align: left;">
                    <thead>
                        <tr>
                            <th>Metric</th>
                            <th>Dispersed Credit Cards</th>
                            <th>Unified Consolidation Framework</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Interest Parameter</td>
                            <td>27% average</td>
                            <td>11% fixed</td>
                        </tr>
                        <tr>
                            <td>Monthly Installment</td>
                            <td>$700</td>
                            <td>$700</td>
                        </tr>
                        <tr>
                            <td>Repayment Horizon</td>
                            <td>27 Months</td>
                            <td>22 Months</td>
                        </tr>
                        <tr>
                            <td>Monthly Invoices</td>
                            <td>3 distinct statements</td>
                            <td>1 single statement</td>
                        </tr>
                        <tr>
                            <td>Principal Balance</td>
                            <td>$14,000</td>
                            <td>$14,000</td>
                        </tr>
                        <tr>
                            <td>Cumulative Interest</td>
                            <td>$4,845.20</td>
                            <td>$1,612.44</td>
                        </tr>
                        <tr>
                            <td>Aggregate Program Cost</td>
                            <td>$18,845.20</td>
                            <td>$15,612.44</td>
                        </tr>
                    </tbody>
                </table>

                <div class="highlight-box-2 mb-2">
                    <img src="{{ asset('assets/images/resources/inner/tip-icon.svg') }}" alt="">
                    <p class="m-0">
                        <b>Strategic Note:</b> Program participants possessing premium credit marks can routinely identify institutional lenders that entirely waive initial origination or administrative setup fees.
                    </p>
                </div>

                <h3>Limitations for Challenged Credit Profiles</h3>
                <p>
                    If your current credit metric falls short of the 660 threshold, the interest percentages offered on standard financing instruments typically escalate past the point of structural utility. A depressed scoring metric signals higher risk to underwriting boards; consequently, institutions adjust their parameters by integrating steep administrative processing fees and maximizing interest rates to mitigate potential default volatility.
                </p>
                <p>Under these underwriting conditions, you can anticipate an upfront origination fee ranging from 2% to 6%. Furthermore, base interest options can spike anywhere from 28.99% to 35.99%, or potentially higher depending on regional caps.</p>
                <p>When an individual does not align with the strict requirements of a traditional consolidation loan, Consumer Debt Management Service deploys an array of alternative restructuring frameworks engineered to align with alternative financial profiles and re-establish long-term stability.</p>

            </div>

            <div id="when-is-credit-consolidation-an-optimal-strategy" class="content-block scroll-section">

                <h2 class="highlight-box">When Is Credit Consolidation an Optimal Strategy?</h2>
                <p>If you maintain a credit score of 660 or higher and prefer a more streamlined approach to managing your financial obligations, implementing a consolidation framework may be highly advantageous. Securing a reduced monthly installment and a minimized interest rate introduces valuable liquidity and breathing room into your household budget.</p>
                <p>The primary operational benefits include:</p>
                <ul class="dt-sc-fancy-list chocolate check-circle">
                    <li>
                        <p><b>Streamlining Monthly Commitments:</b></p>
                        <p>payment reduces the logistical risk of missing a due date and incurring costly delinquency penalties.</p>
                    </li>
                    <li>
                        <p><b>Minimizing Outlays:</b></p>
                        <p>Lowering your regular payment threshold frees up immediate capital, allowing you to establish an emergency reserve and stop the cycle of relying on new credit.</p>
                    </li>
                    <li>
                        <p><b>Mitigating Financing Expenses:</b></p>
                        <p>Obtaining a lower interest rate ensures that more of your capital targets the principal balance, enabling you to liquidate your liabilities significantly faster and at a lower overall cost.</p>
                    </li>
                    <li>
                        <p><b>Regaining Budget Control:</b></p>
                        <p>A targeted consolidation loan acts as an efficient mechanism to catch up on obligations if your household budget has fallen slightly behind.</p>
                    </li>
                    <li>
                        <p><b>Amortizing on a Predictable Schedule:</b></p>
                        <p>Traditional consolidation structures operate on fixed timelines. Assuming you strictly fulfill the required payment schedule, your ultimate debt-free date is clearly defined from day one..</p>
                    </li>
                </ul>

            </div>

            <div id="when-is-credit-consolidation-an-ineffective-strategy" class="content-block scroll-section">

                <h2 class="highlight-box">When Is Credit Consolidation an Ineffective Strategy?</h2>
                <p>A consolidation plan fails to achieve its primary purpose if the newly established contract does not actively lower your weighted interest rate. Under those circumstances, the sole benefit is organizational convenience, whereas alternative restructuring frameworks can deliver both structural management and direct principal reduction.</p>
                <p>Furthermore, if your consumer credit score has dropped below the rating you held when first opening your revolving lines, securing a financially viable rate becomes exceedingly difficult. Reviewing your current credit profile is a critical prerequisite, as it dictates your eligibility matrix across the majority of institutional programs.</p>

                <h3>Financing Major Acquisitions</h3>
                <p>If you intend to buy a home or a vehicle, your credit rating dictates your options. Procuring a debt restructuring loan or an alternative financing instrument triggers a rigorous credit inquiry, dropping your rating by roughly 4 to 9 points. Should your current rating hover near the minimum threshold, this slight reduction can severely jeopardize your approval odds.</p>
                <div class="highlight-box-2 mb-2">
                    <img src="{{ asset('assets/images/resources/inner/tip-icon.svg') }}" alt="">
                    <p class="m-0">
                        <b>Guidance:</b> Combining your liabilities serves as a fleeting remedy for structural budgeting challenges. Identifying the root causes of your financial deficits and modifying your transactional behavior are crucial for enduring fiscal health.
                    </p>
                </div>

                <h3>Recognize Preliminary Expenses</h3>
                <p>Evaluating the complete expense structure is vital to confirm whether restructuring your obligations actually lowers your total expenditures. Based on the financial institution you select, you might incur substantial penalties for tardy remittances or premature payoffs. Even if these expenditures remain below your existing interest obligations, factoring them into your math is mandatory.</p>
                <p>Various debt restructuring mechanisms impose administrative charges, such as:</p>
                <ul class="dt-sc-fancy-list chocolate check-circle">
                    <li>Administrative processing fees</li>
                    <li>Liability relocation charges</li>
                    <li>Transaction finalization expenses</li>
                    <li>Yearly maintenance levies</li>
                </ul>

                <h3>Avoid Elevated Interest Charges</h3>
                <p>Your structured obligation loan might carry an interest percentage that exceeds the current rate on your liabilities. This outcome stems from multiple variables, including your present credit evaluation. Other elements that influence your cumulative financing expenses involve the principal size and the duration of the agreement. Lengthening the payoff timeline can minimize your recurring monthly obligation, though it frequently increases the total interest paid over the life of the agreement.</p>
                <div class="highlight-box-2 mb-2">
                    <img src="{{ asset('assets/images/resources/inner/tip-icon.svg') }}" alt="">
                    <p class="m-0">
                        <b>Guidance:</b> Amalgamating your liabilities does not guarantee a markdown on your interest charges, especially if your credit tracking score falls south of 660.
                    </p>
                </div>

                <h3>Neglecting Remittances Compounds Financial Stress</h3>
                <p>Failing to meet a monthly installment generally triggers an immediate penalty assessment. Furthermore, if a remittance bounces because of an empty bank balance, various financing entities levy a returned processing charge. These cumulative penalties drastically inflate your overall cost of credit. Because financial providers routinely notify reporting bureaus once an account hits 30 days overdue, your credit health will deteriorate. This decline restricts your ability to secure future financing and access competitive borrowing terms. To minimize the likelihood of an overlooked deadline, sign up for the provider's automated remittance schedule if available.</p>
                <div class="highlight-box-2 mb-2">
                    <img src="{{ asset('assets/images/resources/inner/tip-icon.svg') }}" alt="">
                    <p class="m-0">
                        <b>Guidance:</b> If your aggregate liabilities surpass 50% of your total earnings, you would likely achieve a better outcome through a debt reduction strategy. Consumer Debt Management Service is available to evaluate your alternatives to establish the ideal path for your situation.
                    </p>
                </div>

            </div>

            <div id="qualifications-for-liability-amalgamation-financing" class="content-block scroll-section">

                <h2 class="highlight-box">Qualifications For Liability Amalgamation Financing</h2>
                <p>Financing entities must verify that you represent a reliable borrower who will honor the repayment agreement. The following benchmarks serve as validation that you meet the standards for a debt consolidation mechanism:</p>
                <ul class="dt-sc-fancy-list chocolate check-circle">
                    <li>
                        <p><b>Verification of Earnings</b></p>
                        <p>Documentation proving you possess the financial capacity to manage the recurring monthly installments.</p>
                    </li>
                    <li>
                        <p><b>Credit Tracking Profile</b></p>
                        <p>As standard practice with any financing product, underwriting teams will examine your historical remittance patterns and credit bureau data.</p>
                    </li>
                    <li>
                        <p><b>Fiscal Reliability</b></p>
                        <p>An assessment of whether your current monetary patterns place you within an acceptable risk category.</p>
                    </li>
                    <li>
                        <p><b>Securing Assets</b></p>
                        <p>Utilizing residential property value stands as one of the most frequent methods to qualify for substantial consolidation sums.</p>
                    </li>
                </ul>

                <h3>Analyze If Restructuring Aligns With Your Goals</h3>
                <p>Evaluate the parameters outlined below to estimate the structural layout of a potential consolidation vehicle.</p>
                <ul class="dt-sc-fancy-list chocolate check-circle">
                    <li>
                        <p><b>Aggregate Your Outstanding Balances</b></p>
                        <p>Sum up your total liabilities to gauge the precise financing volume required to completely wipe out your existing obligations.</p>
                    </li>
                    <li>
                        <p><b>Compute the Mean Interest Percentage of Your Liabilities</b></p>
                        <p>By determining the average interest matrix across your revolving credit card balances, you can confirm whether the new financing arrangement reduces your overhead. If the math falls short, explore alternative avenues.</p>
                    </li>
                    <li>
                        <p><b>Establish a Sustainable Monthly Allocation</b></p>
                        <p>Itemize your non-negotiable living overhead, including groceries, energy bills, and housing or leasing commitments. Once these primary expenses are handled, target a recurring installment figure that closely mirrors your remaining unallocated capital.</p>
                    </li>
                    <li>
                        <p><b>Evaluate Your Pathways</b></p>
                        <p>Selecting the appropriate consolidation instrument hinges entirely on your unique economic profile—anticipate that you might not meet the prerequisites for every product category. An effective approach involves filtering out mechanisms that diverge from your parameters, then conducting a detailed comparison of the remaining options.</p>
                    </li>
                </ul>
                <div class="highlight-box-2 mb-2">
                    <img src="{{ asset('assets/images/resources/inner/tip-icon.svg') }}" alt="">
                    <p class="m-0">
                        <b>Guidance:</b> The optimal debt consolidation arrangement should actively compress the interest rates you currently carry while scaling down your recurring monthly obligation.
                    </p>
                </div>

            </div>

            <div id="categories-of-liability-amalgamation-financing" class="content-block scroll-section">

                <h2 class="highlight-box">Categories of Liability Amalgamation Financing</h2>
                <p>There are several mechanisms available for consolidating liabilities:</p>
                <ul class="dt-sc-fancy-list chocolate check-circle">
                    <li>
                        <p><b>Debt Consolidation</b></p>
                        <p>Debt consolidation arrangements offer an effective strategy for obligations dispersed among various financial institutions, such as revolving credit card balances. It compresses your multiple liabilities into a single account featuring a reduced interest percentage and a more manageable recurring monthly installment.</p>
                    </li>
                    <li>
                        <p><b>Credit Cards</b></p>
                        <p>Depending on your credit profile, you may qualify to migrate your aggregate liabilities onto a single credit card. Utilizing a balance transfer on a new account featuring zero or minimal initial interest can accelerate your path to becoming liability-free. It is crucial to eliminate the outstanding balance before the financing charges escalate dramatically upon the expiration of the introductory timeline. Alternatively, you can shift your liabilities to a current credit card if the issuing bank is running a promotional campaign with a locked or discounted interest structure.</p>
                        <p>Certain financial providers offer specialized hardship programs where you commit to a negotiated monthly sum distributed over an extended timeline. Beyond rendering your installments more sustainable, this path preserves capital by halting extra interest growth. You must initiate direct communication with your financial providers to negotiate this arrangement.</p>
                        <p>For instance, if you carry a balance of $8,500 on a specific credit card, you could propose a single cash settlement of $4,250 to resolve the obligation entirely. If you provide verifiable evidence of a severe economic crisis, the card issuer may consent to clear the account for that specific volume. You will be required to furnish paperwork validating your severe financial distress:</p>
                        <ul class="dt-sc-fancy-list chocolate check-circle">
                            <li>A complete index of your active liabilities</li>
                            <li>The exact balance owed on every individual account</li>
                            <li>The date of your most recent remittance toward those obligations</li>
                            <li>All required minimum monthly installments</li>
                        </ul>
                    </li>
                    <li>
                        <p><b>HELOCs</b></p>
                        <p>For residential property owners, a HELOC represents a viable pathway. This structure operates as a home equity loan or a flexible home equity line of credit. The borrowing limit is calculated against the market valuation of your property, functioning as a secondary lien or a revolving credit line. Many HELOC structures transition from a locked rate to a fluctuating index after an initial half-year window. Even with that shift, the interest percentage typically remains significantly lower than standard credit card financing charges.</p>
                    </li>
                </ul>

            </div>

            <div id="operational-process-of-consumer-debt-management-service" class="content-block scroll-section">

                <h2 class="highlight-box">The Operational Process of Consumer Debt Management Service</h2>
                <p>During your initial complimentary assessment, a dedicated financial strategist will map out a target timeline and establish a monthly savings target to resolve your obligations. The majority of participants achieve complete freedom from their liabilities within a 12-to-36-month window. You will immediately begin directing that designated monthly amount into a protected, bank-insured custodial account established under your legal name.</p>
                <p>The moment a compromise is negotiated on an account, our team reaches out for your authorization to release those specific funds. If your available capital cannot simultaneously cover all outstanding liabilities, we provide a structured remittance program that permits you to make a single consolidated monthly transfer directly to Consumer Debt Management Service. As your capital accumulates over time, those reserves are deployed to systematically compensate your financial providers.</p>
                <div class="highlight-box-2 mb-2">
                    <img src="{{ asset('assets/images/resources/inner/tip-icon.svg') }}" alt="">
                    <p class="m-0">
                        <b>Guidance:</b> Your ultimate progression through this framework relies entirely on executing consistent, timely monthly allocations.
                    </p>
                </div>
                <p>Consumer Debt Management Service maintains full operational certification with a top-tier rating from trusted consumer protection bureaus and holds active membership within global professional debt resolution coalitions—the primary governing authorities of the liability intervention sector. To maintain this professional standing, we have formally committed to serving our client network with complete transparency, absolute integrity, strict ethics, and equitable practices.</p>
                <p>To discover how Consumer Debt Management Service can empower you to reclaim your financial freedom, dial (800) 555-0199 or submit the complimentary liability evaluation profile today. We commit to guiding you through every phase of this journey, mirroring the successful outcomes achieved for more than 250,000 consumers nationwide.</p>
                <p>To initiate a debt consolidation request, you submit the precise total of your active liabilities. Once authorized, you merge all of those separate balances into a solitary new financing agreement. This structure optimizes your time and resources by driving down interest overhead and scaling back recurring payments. By transforming your open obligations into an organized system, you place yourself in an ideal position to eliminate what you owe on an accelerated timeline.</p>

            </div>

        </div>

        <!-- RIGHT — sticky sidebar -->
        <div class="dt-sc-one-third column faq-sidebar-col">
            <div class="toc-box" id="tocBox">
                <h4><b>In This Guide</b></h4>
                <ul class="toc">

                    <li><a href="#comprehensive-debt-consolidation-insights" class="toc-link">Comprehensive Debt Consolidation Insights</a></li>

                    <li><a href="#functional-mechanics-of-consolidation-structures" class="toc-link">Functional Mechanics of Consolidation Structures</a></li>

                    <li><a href="#when-is-credit-consolidation-an-optimal-strategy" class="toc-link">When Is Credit Consolidation an Optimal Strategy?</a></li>

                    <li><a href="#when-is-credit-consolidation-an-ineffective-strategy" class="toc-link">When Is Credit Consolidation an Ineffective Strategy?</a></li>

                    <li><a href="#qualifications-for-liability-amalgamation-financing" class="toc-link">Qualifications For Liability Amalgamation Financing</a></li>
                    
                    <li><a href="#categories-of-liability-amalgamation-financing" class="toc-link">Categories of Liability Amalgamation Financing</a></li>

                    <li><a href="#operational-process-of-consumer-debt-management-service" class="toc-link">Operational Process of Consumer Debt Management Service</a></li>

                </ul>
                <div class="toc-divider"></div>
                <div class="">
                    <a class="dt-sc-bordered-button" href="{{ route('contact-us') }}"> Get Started </a>
                </div>
            </div>
        </div>

    </div>
</section>

<div class="dt-sc-hr-invisible-large"></div>

<!-- CTA -->

<section>

    <div class="container">

        <h4 class="aligncenter no-transform"> Comprehensive Resource Center </h4>
        <div class="dt-sc-hr-invisible-very-small"></div>
        <p class="aligncenter">We have consolidated our primary tools and guides into a single location. Access everything from debt resolution strategies to methods for mastering your long-term economic path. Prefer a direct conversation? Our professional advisory team is standing by to assist. Reach out whenever you are ready for a complimentary, zero-commitment evaluation.</p>

        <div class="aligncenter mt-3">
            <a class="dt-sc-bordered-button" href="#"> (800) 555-0199 </a>
        </div>

    </div>

</section>

<div class="dt-sc-hr-invisible-large"></div>

@include('website-component.services')

<div class="dt-sc-hr-invisible-large"></div>

<section>

    <h2 class="dt-sc-hr-title">Are You Eligible For Liability Amalgamation?</h2>
    <div class="column aligncenter text-alignleft">
        <ul class="dt-sc-fancy-list chocolate check-circle">
            <li><span>Cut Recurring Monthly Installments By Up To 45%</span></li>
            <li><span>Merge Multiple Balances Into A Solitary Transaction</span></li>
            <li><span>Complete Financial Freedom Within 12-36 Months</span></li>
            <li><span>Rapid 90-Second Qualification Review</span></li>
        </ul>
    </div>

    @include('website-component.step-form')

</section>

@include('website-component.inner-testimonial')

<div class="dt-sc-hr-invisible-large"></div>

<div class="dt-sc-hr-invisible-large"></div>

@endsection
@extends('website-layouts.app')

@section('content')

<div class="breadcrumb-section">
    <div class="container">
        <h1> Our People </h1>
        <div class="breadcrumb">
            <a href="index.html"> Home </a>
            <span class="current"> Our People </span>
        </div>
    </div>
</div>

<!--container starts-->
<div class="container">
    <!--primary starts-->
    <section id="primary" class="page-with-sidebar with-right-sidebar">


        <h2 class="dt-sc-bordered-title"> About our Attorneys </h2>

        <p class="alignleft"> Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt. </p>

        <div class="dt-sc-hr-invisible-small"></div>

        <!--attorney_list starts-->
        <div class="attorney_list">
            <form name="attroney_list_form" method="post" class="attorney-form" action="php/subscribe.php">
                <p>
                    <label>Filter by:</label>
                    <span class="select-sort">
                        <select name="cause">
                            <option value="practice_area">Practice Area</option>
                            <option value="divorce_cases">Divorce Cases</option>
                            <option value="local_asset_management">Local Asset Management</option>
                            <option value="health_insurance">Health Insurance</option>
                            <option value="business_law">Business Law</option>
                            <option value="pregnancy">Pregnancy</option>
                            <option value="estate_planning">Estate Planning</option>
                        </select>
                    </span>
                </p>
            </form>
            <p class="alignright result-count"> Showing 7 of 7 </p>
            <div class="dt-sc-hr-invisible"></div>

            <div class="attorney_content local_asset_management">
                <div class="image">
                    <a href="our-people-detail.html"><img src="{{ asset('assets/images/attorney1.jpg') }}" alt="" title=""></a>
                </div>
                <div class="attorney_details">
                    <div class="attorney_details_info">
                        <div class="alignleft">
                            <h6> <a href="our-people-detail.html"> Robert James </a> </h6>
                            <span> Associate / Crime </span>
                        </div>
                        <div class="alignright">
                            <p class="phone-no"> <span class="fa fa-phone"></span> (552) 226 3314 </p>
                        </div>
                    </div>
                    <p> Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi vel samar this ki last man. </p>
                    <a href="our-people-detail.html" class="dt-sc-button alignright"> <span class="fa fa-user"></span> View Bio </a>
                </div>
            </div>

            <div class="attorney_content local_asset_management">
                <div class="image">
                    <a href="our-people-detail.html"><img src="{{ asset('assets/images/attorney1.jpg') }}" alt="" title=""></a>
                </div>
                <div class="attorney_details">
                    <div class="attorney_details_info">
                        <div class="alignleft">
                            <h6> <a href="our-people-detail.html"> Craig Thompson </a> </h6>
                            <span> Associate / Estate Planning </span>
                        </div>
                        <div class="alignright">
                            <p class="phone-no"> <span class="fa fa-phone"></span> (552) 226 3314 </p>
                        </div>
                    </div>
                    <p> Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi vel samar this ki last man. </p>
                    <a href="our-people-detail.html" class="dt-sc-button alignright"> <span class="fa fa-user"></span> View Bio </a>
                </div>
            </div>

            <div class="attorney_content local_asset_management health_insurance">
                <div class="image">
                    <a href="our-people-detail.html"><img src="{{ asset('assets/images/attorney1.jpg') }}" alt="" title=""></a>
                </div>
                <div class="attorney_details">
                    <div class="attorney_details_info">
                        <div class="alignleft">
                            <h6> <a href="our-people-detail.html"> Jeniffer Lohan </a> </h6>
                            <span> Women Harrasment </span>
                        </div>
                        <div class="alignright">
                            <p class="phone-no"> <span class="fa fa-phone"></span> (552) 226 3314 </p>
                        </div>
                    </div>
                    <p> Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi vel samar this ki last man. </p>
                    <a href="our-people-detail.html" class="dt-sc-button alignright"> <span class="fa fa-user"></span> View Bio </a>
                </div>
            </div>

            <div class="attorney_content local_asset_management">
                <div class="image">
                    <a href="our-people-detail.html"><img src="{{ asset('assets/images/attorney1.jpg') }}" alt="" title=""></a>
                </div>
                <div class="attorney_details">
                    <div class="attorney_details_info">
                        <div class="alignleft">
                            <h6> <a href="our-people-detail.html"> Carl Danny </a> </h6>
                            <span> Accident and Insurance </span>
                        </div>
                        <div class="alignright">
                            <p class="phone-no"> <span class="fa fa-phone"></span> (552) 226 3314 </p>
                        </div>
                    </div>
                    <p> Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi vel samar this ki last man. </p>
                    <a href="our-people-detail.html" class="dt-sc-button alignright"> <span class="fa fa-user"></span> View Bio </a>
                </div>
            </div>

            <div class="attorney_content local_asset_management pregnancy divorce_cases business_law">
                <div class="image">
                    <a href="our-people-detail.html"><img src="{{ asset('assets/images/attorney1.jpg') }}" alt="" title=""></a>
                </div>
                <div class="attorney_details">
                    <div class="attorney_details_info">
                        <div class="alignleft">
                            <h6> <a href="our-people-detail.html"> Daniel Craig </a> </h6>
                            <span> Associate / Estate Planning </span>
                        </div>
                        <div class="alignright">
                            <p class="phone-no"> <span class="fa fa-phone"></span> (552) 226 3314 </p>
                        </div>
                    </div>
                    <p> Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi vel samar this ki last man. </p>
                    <a href="our-people-detail.html" class="dt-sc-button alignright"> <span class="fa fa-user"></span> View Bio </a>
                </div>
            </div>

            <div class="attorney_content local_asset_management estate_planning business_law">
                <div class="image">
                    <a href="our-people-detail.html"><img src="{{ asset('assets/images/attorney1.jpg') }}" alt="" title=""></a>
                </div>
                <div class="attorney_details">
                    <div class="attorney_details_info">
                        <div class="alignleft">
                            <h6> <a href="our-people-detail.html"> Peter Jackson </a> </h6>
                            <span> Business Law </span>
                        </div>
                        <div class="alignright">
                            <p class="phone-no"> <span class="fa fa-phone"></span> (552) 226 3314 </p>
                        </div>
                    </div>
                    <p> Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi vel samar this ki last man. </p>
                    <a href="our-people-detail.html" class="dt-sc-button alignright"> <span class="fa fa-user"></span> View Bio </a>
                </div>
            </div>

            <div class="attorney_content local_asset_management health_insurance estate_planning business_law">
                <div class="image">
                    <a href="our-people-detail.html"><img src="{{ asset('assets/images/attorney1.jpg') }}" alt="" title=""></a>
                </div>
                <div class="attorney_details">
                    <div class="attorney_details_info">
                        <div class="alignleft">
                            <h6> <a href="our-people-detail.html"> Daniel Craig </a> </h6>
                            <span> Associate / Estate Planning </span>
                        </div>
                        <div class="alignright">
                            <p class="phone-no"> <span class="fa fa-phone"></span> (552) 226 3314 </p>
                        </div>
                    </div>
                    <p> Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi vel samar this ki last man. </p>
                    <a href="our-people-detail.html" class="dt-sc-button alignright"> <span class="fa fa-user"></span> View Bio </a>
                </div>
            </div>

        </div>
        <!--attorney_list ends-->

        <!--pagination starts-->
        <div class="pagination">
            <div class="prev-post active-page"><a href="#"><span class="fa fa-caret-left"></span> Prev </a></div>
            <ul>
                <li><a href="">1</a></li>
                <li><a href="">2</a></li>
                <li><a href="">3</a></li>
                <li><a href="">4</a></li>
            </ul>
            <div class="next-post"><a href="#"> Next <span class="fa fa-caret-right"></span></a></div>
        </div>
        <!--pagination ends-->
    </section>
    <!--primary ends-->
    <!--secondary starts-->
    <section id="secondary">
        <aside class="widget widget_form">
            <h3 class="dt-sc-bordered-title"> Have a Question? </h3>
            <form name="frmquestions" method="post" class="question-form" action="php/questions.php">
                <p>
                    <input type="text" name="name" required="" placeholder="Name">
                </p>
                <p>
                    <input type="email" name="emailid" required="" placeholder="Email">
                </p>
                <p>
                    <input name="phone" type="text" placeholder="Phone" required="">
                </p>
                <p class="dt-sc-full-width-content">
                    <span class="select-sort">
                        <select name="question">
                            <option value="">Practice Area</option>
                            <option value="Divorce Cases">Divorce Cases</option>
                            <option value="Local Asset Management">Local Asset Management</option>
                            <option value="Health Insurance">Health Insurance</option>
                            <option value="Business Law">Business Law</option>
                            <option value="Pregnancy">Pregnancy</option>
                            <option value="Estate Planning">Estate Planning</option>
                        </select>
                    </span>
                </p>
                <p class="dt-sc-full-width-content">
                    <textarea name="message" placeholder="Optional Message"></textarea>
                </p>
                <div id="ajax_questions_msg"> </div>
                <p class="alignright">
                    <input type="submit" name="submit" class="dt-sc-bordered-button" value="Submit">
                </p>
            </form>
        </aside>
        <aside class="widget widget_text">
            <a href="#"><img src="http://placehold.it/420x204" alt="" title=""></a>
        </aside>
        <aside class="widget widget_text">
            <a class="dt-sc-bordered-button" href="#"> Give us a Call: (552) 226 3314 </a>
        </aside>
        <aside class="widget widget_text">
            <a href="#"><img src="http://placehold.it/420x465" alt="" title=""></a>
        </aside>
    </section>
    <!--secondary ends-->
    <div class="dt-sc-hr-invisible-large"></div>
    <div class="mailchimp">
        <p> <span class="fa fa-envelope-o"></span> Subscribe to Newsletter </p>
        <form name="frmnewsletter" method="post" class="mailchimp-form" action="php/subscribe.php">
            <input type="email" placeholder="Email" name="mc_email" required />
            <input type="submit" value="Submit" class="nl-submit" name="btnsubscribe">
        </form>
        <div id="ajax_subscribe_msg"></div>
    </div>
</div>
<!--container ends-->

@endsection
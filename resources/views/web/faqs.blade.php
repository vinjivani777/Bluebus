@extends('web.layout')

@section('page-title')
Blue Bus | Search Bus Tickets
@endsection
@section('other-page-js')

@endsection

@section('content')
<div id="content ">
    <div class="container">
        <div class="bg-light shadow-md rounded p-3">
            <h3 class="text-6">Get answers to your Queries</h3>
            <hr style="border-top: 1px solid #060a0f">
            <div class="row">
                <div class="col-md-3">
                    <h3 class="text-5 font-weight-400">Booking</h3>
                </div>
                <div class="col-md-9">
                    <div class="accordion accordion-alternate" id="accordionBooking">
                        <div class="card" style="margin-bottom: 15px">
                            <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                <div class="card-header" style="padding:12px;background-color:#bcc3ca;padding-top:2px;" id="heading5">
                                    <h5 class="mb-0" itemprop="name">
                                    <a href="#" class="collapsed" data-toggle="collapse" data-target="#faq5" aria-expanded="false" aria-controls="faq5">
                                        <i class="mdi mdi-help-circle mr-1 text-primary"></i>
                                                    How can i cancel my bus ticket?</a></h5>
                                </div>
                                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" id="faq5" class="collapse" aria-labelledby="heading5" data-parent="#accordionBooking">
                                    <div itemprop="text" class="card-body"><?php echo str_repeat("&nbsp;", 13); ?>You can cancel your bus tickets on HAPPY JOURNEY website or mobile App from
                                        <mark style="background-color: #e0e6f1;">My journeys</mark> section. Select the ticket you wish to cancel and you will see a Cancel button at the bottom of the ticket. Click on it to select seats for cancellation and view cancellation charges applicable. You can then acknowledge it to proceed with Cancellation.
                                        <mark style="background-color: #e0e6f1;">Depending on the operator there are seperate cancellation policy and you may not be allowed to cancel ticket before certain hours from Departure time.</mark> To know more on operator specific cancellation time limits and charges, click here <a href="/bus-ticket-cancellation-policy" target="_blank">Ticket cancellation policy</a>.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card" style="margin-bottom: 15px">
                            <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                <div class="card-header" style="padding:12px;background-color:#bcc3ca;padding-top:6px;" id="heading6">
                                    <h5 class="mb-0" itemprop="name"><a href="#" class="collapsed" data-toggle="collapse" data-target="#faq6" aria-expanded="false" aria-controls="faq6">
                                        <i class="mdi mdi-help-circle mr-1 text-primary"></i>
                                        How do I print/download my e-ticket? </a>
                                    </h5>
                                </div>
                                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" id="faq6" class="collapse" aria-labelledby="heading6" data-parent="#accordionBooking">
                                    <div itemprop="text" class="card-body"><?php echo str_repeat("&nbsp;", 13); ?> You can print your ticket from the website - "View Ticket" menu option. Enter your TR / PNR number and your mobile number provided during booking. You can print the ticket or download as PDF.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card" style="margin-bottom: 15px">
                            <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                <div class="card-header" style="padding:12px;background-color:#bcc3ca;padding-top:6px;" id="heading7">
                                    <h5 class="mb-0" itemprop="name"><a href="#" class="collapsed" data-toggle="collapse" data-target="#faq7" aria-controls="faq7">
                                        <i class="mdi mdi-help-circle mr-1 text-primary"></i>
                                        Do I need an ID Proof while booking ticket?</a>
                                    </h5>
                                </div>
                                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" id="faq7" class="collapse" aria-labelledby="heading7" data-parent="#accordionBooking">
                                    <div itemprop="text" class="card-body"><?php echo str_repeat("&nbsp;", 13); ?> A government provided ID proof is required to board the bus. However you need not enter the details during booking.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card" style="margin-bottom: 15px">
                            <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                <div class="card-header" style="padding:12px;background-color:#bcc3ca;padding-top:6px;" id="heading8">
                                    <h5 class="mb-0" itemprop="name"><a href="#" class="collapsed" data-toggle="collapse" data-target="#faq8" aria-expanded="false" aria-controls="faq8">
                                        <i class="mdi mdi-help-circle mr-1 text-primary"></i>
                                        Why are seats priced differently on the same bus?</a>
                                    </h5>
                                </div>
                                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" id="faq8" class="collapse" aria-labelledby="heading8" data-parent="#accordionBooking">
                                    <div itemprop="text" class="card-body"><?php echo str_repeat("&nbsp;", 13); ?> Pricing varies depending on luxury and the convenience the seat provides and is completely controlled and fixed by Bus operator. For any pricing related queries please write to us <a href="mailto:support@happyjourney.com">support@happyjourney.com</a>.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card" style="margin-bottom: 15px">
                            <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                <div class="card-header" style="padding:12px;background-color:#bcc3ca;padding-top:6px;" id="heading8">
                                    <h5 class="mb-0" itemprop="name"><a href="#" class="collapsed" data-toggle="collapse" data-target="#faq40" aria-expanded="false" aria-controls="faq40">
                                        <i class="mdi mdi-help-circle mr-1 text-primary"></i>
                                        Can I change my ticket details?</a>
                                    </h5>
                                </div>
                                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" id="faq40" class="collapse" aria-labelledby="heading8" data-parent="#accordionBooking">
                                    <div itemprop="text" class="card-body"><?php echo str_repeat("&nbsp;", 13); ?> Once the ticket(s) is booked and confirmed then below options are applicable:</br>
                                        <ul>
                                            <li><strong style="color: green">Partial cancellation: Available.</strong> You can cancel seats if you have booked for more than 1 seat in a booking. You can do it from your My Journeys section -> Select the Ticket. Please note that operator specific cancellation time restrictions and charges are applicable and will be shown before ticket cancellation.</li>
                                            <li><strong style="color: red">Ticket Postpone/Prepone, Seat Number Change: Not Available</strong> Currently NO Online option to change date of journey or number of passengers or the seat number. Mean time you can either cancel the existing booking and place a new booking. If you dont want to cancel the existing booking and explore alternative options then you have to contact respective operators and visit nearby office of the operator. Operator contact details can be found
                                                <a href="/bus-ticket-cancellation-policy">
                                            here.</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <hr style="border-top: 1px solid #060a0f">
            <div class="row">
                <div class="col-md-3">
                    <h3 class="text-5 font-weight-400">Payments</h3>
                </div>
                <div class="col-md-9">
                    <div class="accordion accordion-alternate" id="accordionPayments">
                        <div class="card" style="margin-bottom: 15px">
                            <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                <div class="card-header" style="padding:12px;background-color:#bcc3ca;padding-top:6px;" id="heading9">
                                    <h5 class="mb-0" itemprop="name"><a href="#" class="collapsed" data-toggle="collapse" data-target="#faq9" aria-expanded="false" aria-controls="faq9">
                                        <i class="mdi mdi-help-circle mr-1 text-primary"></i>
                                        How do I pay?</a>
                                    </h5>
                                </div>
                                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" id="faq9" class="collapse" aria-labelledby="heading9" data-parent="#accordionPayments">
                                    <div itemprop="text" class="card-body"><?php echo str_repeat("&nbsp;", 13); ?> You can pay using multiple options like debit card, credit card, wallets, net-banking and even UPI.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card" style="margin-bottom: 15px">
                            <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                <div class="card-header" style="padding:12px;background-color:#bcc3ca;padding-top:6px;" id="heading11">
                                    <h5 class="mb-0" itemprop="name"><a href="#" class="collapsed" data-toggle="collapse" data-target="#faq11" aria-expanded="false" aria-controls="faq11">
                                        <i class="mdi mdi-help-circle mr-1 text-primary"></i>
                                        Payment deducted but booking not done? </a></h5>
                                </div>
                                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" id="faq11" class="collapse" aria-labelledby="heading11" data-parent="#accordionPayments">
                                    <div itemprop="text" class="card-body"><?php echo str_repeat("&nbsp;", 13); ?> Sometimes due to network issues on the bank side we dont receive the payment information and so is the reason the booking fails. During such scenario our executives will immediately contact customer to either confirm the ticket for the same amount or initiate a refund in case customer need not like to proceed with booking.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card" style="margin-bottom: 15px">
                            <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                <div class="card-header" style="padding:12px;background-color:#bcc3ca;padding-top:6px;" id="heading20">
                                    <h5 class="mb-0" itemprop="name"><a href="#" class="collapsed" data-toggle="collapse" data-target="#faq20" aria-expanded="false" aria-controls="faq20">
                                        <i class="mdi mdi-help-circle mr-1 text-primary"></i>
                                        Are there any hidden charges (Service Charge or Tax)? </a></h5>
                                </div>
                                <div itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer" id="faq20" class="collapse" aria-labelledby="heading20" data-parent="#accordionPayments">
                                    <div itemprop="text" class="card-body"><?php echo str_repeat("&nbsp;", 13); ?> Unlike other online bus booking sites we do not have any hidden charges like Service charge, payment gateway charge etc.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr style="border-top: 1px solid #060a0f">
            <div class="row">
                <div class="col-md-3">
                    <h3 class="text-5 font-weight-400">Refunds</h3>
                </div>
                <div class="col-md-9">
                    <div class="accordion accordion-alternate" id="accordionRefunds">
                        <div class="card" style="margin-bottom: 15px">
                            <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                <div class="card-header" style="padding:12px;background-color:#bcc3ca;padding-top:6px;" id="heading10">
                                    <h5 class="mb-0" itemprop="name"><a href="#" class="collapsed" data-toggle="collapse" data-target="#faq31" aria-expanded="false" aria-controls="faq31">
                                        <i class="mdi mdi-help-circle mr-1 text-primary"></i>
                                        How will I get my refund?</a>
                                    </h5>
                                </div>
                                <div id="faq31" class="collapse" aria-labelledby="heading10" data-parent="#accordionRefunds" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <div class="card-body" itemprop="text">In respect of tickets canceled by the passenger or bus cancelled by the operator, we will refund the amount applicable to the respective Credit card / Debit Card / Online banking account / Wallet / UPI linked account that was used for booking the ticket. Refunds are initiated automatically as soon as you cancel your ticket from the App. It might take 8-10 Bank Working Days to get the amount credited to your account.</div>
                                </div>
                            </div>
                        </div>
                        <div class="card" style="margin-bottom: 15px">
                            <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                <div class="card-header" style="padding:12px;background-color:#bcc3ca;padding-top:6px;" id="heading10">
                                    <h5 class="mb-0" itemprop="name"><a href="#" class="collapsed" data-toggle="collapse" data-target="#faq34" aria-expanded="false" aria-controls="faq34">
                                        <i class="mdi mdi-help-circle mr-1 text-primary"></i>
                                        Refund amount not yet credited to my account?</a></h5>
                                </div>
                                <div id="faq34" class="collapse" aria-labelledby="heading10" data-parent="#accordionRefunds" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <div class="card-body" itemprop="text"> Refund process is automatic and is initiated instantly. It typically takes about
                                        <mark style="background-color: #e0e6f1;">8-10 bank working days</mark> for all credit card, debit card and netbanking transactions. Sometimes the refunds dont get credited to your account even after 10 days due to
                                        <mark style="background-color: #e0e6f1;">bank holidays</mark> and delay in processing your credit or refund process being interrupted by network error or systems error at the banks side. In such cases you need to contact your banks
                                        <mark style="background-color: #e0e6f1;">Charge Back / Dispute Resolution Team</mark> and raise a refund credit request mentioning the transaction ID you have received from your bank SMS/Email. You can check your banks website to get the customer support phone contact number.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <hr style="border-top: 1px solid #060a0f">
            <div class="row">
                <div class="col-md-3">
                    <h3 class="text-5 font-weight-400">My Account</h3>
                </div>
                <div class="col-md-9">
                    <div class="accordion accordion-alternate" id="accordionAccount">
                        <div class="card" style="margin-bottom: 15px">
                            <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                <div class="card-header" style="padding:12px;background-color:#bcc3ca;padding-top:6px;" id="heading13">
                                    <h5 class="mb-0" itemprop="name"><a href="#" class="collapsed" data-toggle="collapse" data-target="#faq13" aria-expanded="false" aria-controls="faq13">
                                        <i class="mdi mdi-help-circle mr-1 text-primary"></i>
                                        Is there any registration fee?</a>
                                    </h5>
                                </div>
                                <div id="faq13" class="collapse" aria-labelledby="heading13" data-parent="#accordionAccount" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <div class="card-body" itemprop="text"> There is no registration fee or any kind of booking fees. You pay only the ticket price.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card" style="margin-bottom: 15px">
                            <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                <div class="card-header" style="padding:12px;background-color:#bcc3ca;padding-top:6px;" id="heading14">
                                    <h5 class="mb-0" itemprop="name"><a href="#" class="collapsed" data-toggle="collapse" data-target="#faq14" aria-expanded="false" aria-controls="faq14">
                                        <i class="mdi mdi-help-circle mr-1 text-primary"></i>
                                        Is my account information safe?</a>
                                    </h5>
                                </div>
                                <div id="faq14" class="collapse" aria-labelledby="heading14" data-parent="#accordionAccount" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <div class="card-body" itemprop="text"> Your personal and travel details are safe and we dont share it with any third party agencies.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card" style="margin-bottom: 15px">
                            <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                <div class="card-header" style="padding:12px;background-color:#bcc3ca;padding-top:6px;" id="heading15">
                                    <h5 class="mb-0" itemprop="name"><a href="#" class="collapsed" data-toggle="collapse" data-target="#faq15" aria-expanded="false" aria-controls="faq15">
                                        <i class="mdi mdi-help-circle mr-1 text-primary"></i>
                                        How does it work?</a>
                                    </h5>
                                </div>
                                <div id="faq15" class="collapse" aria-labelledby="heading15" data-parent="#accordionAccount" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <div class="card-body" itemprop="text"> Create an account using your email and mobile number to get started with the booking. All booking confirmations will be sent to your Primary email and phone number. You can forward the message to your co-passanger or friend, if in case you have booked on behalf of them.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card" style="margin-bottom: 15px">
                            <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                <div class="card-header" style="padding:12px;background-color:#bcc3ca;padding-top:6px;" id="heading16">
                                    <h5 class="mb-0" itemprop="name"><a href="#" class="collapsed" data-toggle="collapse" data-target="#faq16" aria-expanded="false" aria-controls="faq16">
                                        <i class="mdi mdi-help-circle mr-1 text-primary"></i>
                                        Will I get any offers and how do I claim them?</a>
                                    </h5>
                                </div>
                                <div id="faq16" class="collapse" aria-labelledby="heading16" data-parent="#accordionAccount" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <div class="card-body" itemprop="text"> You get FLAT 5% cash back on every bus ticket booking you make on HAPPYJOURNEY website and mobile app. You can avail this offer on the checkout page.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card" style="margin-bottom: 15px">
                            <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                <div class="card-header" style="padding:12px;background-color:#bcc3ca;padding-top:6px;" id="heading17">
                                    <h5 class="mb-0" itemprop="name"><a href="#" class="collapsed" data-toggle="collapse" data-target="#faq17" aria-expanded="false" aria-controls="faq17">
                                        <i class="mdi mdi-help-circle mr-1 text-primary"></i>
                                        Forgot my password! What next?</a>
                                    </h5>
                                </div>
                                <div id="faq17" class="collapse" aria-labelledby="heading17" data-parent="#accordionAccount" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <div class="card-body" itemprop="text"> We have simplified login process so that you can login with your Google account and dont need to set and remeber any password for your HAPPYJOURNEY account.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card" style="margin-bottom: 15px">
                            <div itemscope itemprop="mainEntity" itemtype="https://schema.org/Question">
                                <div class="card-header" style="padding:12px;background-color:#bcc3ca;padding-top:6px;" id="heading18">
                                    <h5 class="mb-0" itemprop="name"><a href="#" class="collapsed" data-toggle="collapse" data-target="#faq18" aria-expanded="false" aria-controls="faq18">
                                        <i class="mdi mdi-help-circle mr-1 text-primary"></i>
                                        Close my HAPPYJOURNEY account</a>
                                    </h5>
                                </div>
                                <div id="faq18" class="collapse" aria-labelledby="heading18" data-parent="#accordionAccount" itemscope itemprop="acceptedAnswer" itemtype="https://schema.org/Answer">
                                    <div class="card-body" itemprop="text"> We hate to see you leave us and we can address if you are facing any issues. You could uninstall the App or you can logout from your profile section Your booking history will be archived and available whenever you login in the future. You could write to us <a href="mailto:support@happyjourney.com">support@happyjourney.com</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <hr style="border-top: 1px solid #060a0f">
            <div class="text-center my-3 my-md-5">
                <p class="text-4 mb-3">Can't find what you're looking for? Our customer care team are here to help.</p>
                <!--<a href="/support" class="btn btn-primary">Contact Customer Care</a>-->
                Email: <a href="mailto:support@happyjourney.com">support@happyjourney.com</a> | Phone: <a href="tel:+919664675543">+91-9664675543</a>
            </div>
        </div>
    </div>
</div>

@endsection

@section('other-js')
    <script>
        function btnmove()
        {
            return true;
        };
    </script>
@endsection


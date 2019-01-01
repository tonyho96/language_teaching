@extends('layouts.frontend')
@section('content')
    
<div class="finance-page" >
    <div class="container overview">
        <h2 style="margin-bottom: 22px;">Finance</h2>
        <div class="row">
            <div class="col-md-9">
                <div class="">
                    <div class="panel ng-hide">
                        <div class="panel-body">
                            <h4 class="no-margin-t">Teacher Wallet</h4>
                            <div class="stat-panel">
                                <ul class="profile_card list-inline finance">
                                    <li>
                                        <div class="info">Total Balance<br>
                                        <strong class="text-lg">$ USD</strong><br>
                                        <font class="label label-tags" > VND</font>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="info">Available Balance<br>
                                        <strong class="text-lg">$ USD</strong><br>
                                        <font class="label label-tags" > VND</font>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="info">Withdrawal Pending<br>
                                        <strong class="text-lg">$ USD</strong><br>
                                        <font class="label label-tags" > VND</font>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <ul class="list-inline no-margin-b hidden-phone ng-hide">
                                <li>
                                    <a class="btn" href="javascript:void(0);">Withdraw</a>
                                </li>
                                <li>
                                    <a class="btn" href="javascript:void(0);">Transfer Credits</a>
                                </li>
                            </ul>
                            <p style="color:  #777;margin-top: 6px">
                                *The amounts listed here are close approximations. There may be a slight difference due to changes in foreign exchange rates. All amounts are based on US Dollars. 
                            </p>
                            <p>
                                Sorry, your italki Teacher Wallet is currently inactive. Please contact 
                                <a href="support@italki.com" target="_blank">italki support</a>. 
                            </p>
                            <div class="text-center visible-phone ng-hide"><hr>
                                <a href="javascript:void(0);">Withdraw</a>&nbsp;&nbsp; 
                                <a href="javascript:void(0);">Transfer Credits</a>
                            </div>
                        </div>
                    </div>
                        <div class="panel no-border-radius">
                            <div class="panel-body">
                                <h4 class="no-margin-t">Student Wallet</h4>
                                <div class="stat-panel">
                                    <ul class="profile_card list-inline finance">
                                        <li>
                                            <div>Total Balance<br>
                                                <strong class="text-lg">$0.00 USD</strong><br>
                                                <font class="label label-tags" >0.00 VND</font>
                                            </div>
                                        </li>
                                        <li>
                                            <div>Available Balance<br>
                                                <strong class="text-lg">$0.00 USD</strong><br>
                                                <font class="label label-tags" >0.00 VND</font>
                                            </div>
                                        </li>
                                        <li>
                                            <div>Purchase Pending<br>
                                                <strong class="text-lg">$0.00 USD</strong><br>
                                                <font class="label label-tags" >0.00 VND</font>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <ul class="list-inline no-margin-b hidden-phone">
                                    <li>
                                        <a class="btn btn-primary btn-buy-credit" href="#">
                                            <i class="fa fa-shopping-cart"></i>&nbsp;Buy Credits
                                        </a>
                                    </li>
                                    <li>
                                        <a class="btn btn-redeem-code" href="javascript:void(0);">Redeem Promotion Code</a>
                                    </li>
                                </ul>
                                <p style="color:  #777;margin-top: 6px">
                                    *The amounts listed here are close approximations. 
                                    There may be a slight difference due to changes in foreign exchange rates. 
                                    All amounts are based on US Dollars. 
                                </p>
                                <p class="text-center visible-phone hidden-md hidden-lg">
                                    <button class="btn btn-primary btn-buy-credit btn-full-width no-border-radius" href="#">
                                        <span class="btn-txt">
                                            <i class="fa fa-shopping-cart"></i>&nbsp;Buy Credits
                                        </span>
                                    </button> 
                                    <a href="javascript:void(0);">Redeem Promotion Code</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="panel">
                        <ul class="content-block-tabs js-tabs-tabs no-margin-b finance" style="display:  inline-block;">
                            <li class="content-block-tab" onclick="onSelectFinanceMenu('student-wallet-detail')">
                                <a id="student-wallet-detail" class="content-block-tab-link js-tab-link selected" href="javascript:void(0);">Student Wallet details</a>
                            </li>
                            <li class="content-block-tab" onclick="onSelectFinanceMenu('create-purchase-history')">
                                <a id="create-purchase-history" class="content-block-tab-link js-tab-link" href="javascript:void(0);">Credit purchase history</a>
                            </li>
                            <li class="content-block-tab" onclick="onSelectFinanceMenu('my-coupons')">
                                <a id="my-coupons" class="content-block-tab-link js-tab-link" href="javascript:void(0);">My coupons</a>
                            </li>
                        </ul>
                        <div class="panel-finance-heading">
                            <div class="form-group w-icon ng-hide">
                                <div class="alert alert-danger animated shake">
                                    Please select a Start and End Date. The maximum length is 2 years.
                                </div>
                            </div>
                            <div id="first-second-menu" class="row hidden-xs hidden-sm">
                                <div class="col-sm-8 text-center">
                                    <div class="row">
                                        <div id="left-search" class="text-left col-sm-8">
                                            <div class="input-daterange input-group" id="bs-datepicker-range">
                                                <div class="button-style" style="position: relative">
                                                    <input id="start-date-picker" type="text" class="input-sm form-control" placeholder="Start Date" datepicker-popup=""
                                                        style="padding-right: 25px;text-overflow: ellipsis">
                                                    <i class="fa fa-calendar" style="font-size: 14px; position: absolute; right:10px; top: 10px; color:#777; z-index: 3"></i>
                                                </div>
                                                    <span class="input-group-addon">to</span>
                                                    <div class="button-style" style="position: relative">
                                                        <input id="end-date-picker" type="text" class="input-sm form-control" placeholder="End Date" datepicker-popup="" 
                                                            style="padding-right: 25px;text-overflow: ellipsis" 
                                                         close-text="Close">
                                                        <i class="fa fa-calendar" style="font-size: 14px; position: absolute; right:10px; top: 10px; color:#777; z-index: 3"></i>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-2" style="margin-left: -10px">
                                                <button class="btn btn-primary btn-buy-credit no-border-radius">SEARCH</button>
                                            </div>
                                            <div class="col-sm-2" style="margin-left: 5px">
                                                <button id="btn-download" class="btn btn-primary btn-buy-credit no-border-radius">DOWNLOAD</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <form class="row">
                                            <div class="col-xs-11" style="float: right">
                                                <div style="position: relative">
                                                    <input class="form-control no-border-radius" type="text" placeholder="Search by transaction ID" autocomplete="on" style="padding-right: 25px;text-overflow: ellipsis"> 
                                                        <i class="fa fa-search"
                                                            style="font-size: 16px; position: absolute; right:10px; top: 9px; color:#777; z-index: 3">
                                                        </i>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div id="coupon-history-content" class="panel-heading no-padding clearfix" style="height: 47px;display: none">
                                    <div class="pull-left text-center">
                                        <ul class="switch-block-tabs js-tabs-tabs no-margin-b finance" 
                                            style="border-bottom: none">
                                            <li class="switch-block-tab" onclick="onSelectCouponMenu('coupon')">
                                                <a id="coupon-menu" class="switch-block-tab-link js-tab-link coupon-history-phone selected" href="javascript:void(0);">Coupon</a>
                                            </li>
                                            <li class="switch-block-tab" onclick="onSelectCouponMenu('history')">
                                                <a id="history-menu" class="switch-block-tab-link js-tab-link coupon-history-phone" href="javascript:void(0);">History</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="panel-body">
                                <div class="loading-layout" id="first-second-content">
                                    <div class="noresult-text text-lg text-center text-muted" style="">
                                        <img class="rounded" src="/front/images/contacts/icon_norecord.png"><br>
                                            <span>Nothing found.</span>
                                    </div>
                                    <div  class="visible-phone widget-support-tickets">
                                    </div>
                                    <div class="hidden-xs hidden-sm" id="table-student-credit">
                                        <table class="table table-striped">
                                            <thead>
                                                <tr>
                                                    <th class="center">Transaction ID</th>
                                                    <th class="center">Time</th>
                                                    <th class="center">Description</th>
                                                    <th class="text-right">Amount (USD)</th>
                                                    <th class="text-right">Balance (USD)</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody></tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                            
                    <div class="col-md-3">
                        <div class="panel no-border no-border-radius">
                            <div class="panel-body">
                                <button class="btn btn-buy-credit grid-gutter-margin-b btn-big no-border-radius" ui-sref="recharge" href="#">
                                    <span class="btn-txt">
                                        <i class="fa fa-shopping-cart"></i>&nbsp;Buy Credits
                                    </span>
                                </button>
                                <p>
                                    <a class="" ui-sref="giftcard" href="#">
                                        <i class="fa fa-credit-card"></i>&nbsp;Buy a Gift Card
                                    </a>
                                </p>
                                <p class="ng-hide">
                                    <a ui-sref="setting.withdraw" href="/settings/withdraw">
                                    <i class="fa fa-cog"></i>&nbsp;Withdrawal Method</a>
                                </p>
                            </div>
                        </div>
                        <div class="panel no-border no-border-radius">
                            <div class="panel-body">
                                <h4 class="no-margin-t">Referral Program</h4>
                                <p>Receive $10 USD in credits for every friend you refer!</p>
                                <table class="table table-striped">
                                    <tbody>
                                        <tr>
                                            <td class="text-muted">Total Referrals</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td class="text-muted">Referral Bonus Due</td>
                                            <td>0</td>
                                        </tr>
                                        <tr>
                                            <td class="text-muted">Referral Bonus Paid</td>
                                            <td>0</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <a href="#" class="">View details</a>
                            </div>
                        </div>
                        <div class="panel no-border no-border-radius">
                            <div class="panel-body">
                                <h4 class="no-margin-t">Need help?</h4>
                                <div class="grid-gutter-margin-b">
                                    <p>Billing, Payments &amp; italki Credits</p>
                                </div>
                                <div class="">
                                    <a class="btn btn-block" href="#">
                                        <span class="btn-txt">Support</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            
            </div>
          
</div>


@endsection
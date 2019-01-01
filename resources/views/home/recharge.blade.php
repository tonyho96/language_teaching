@extends('layouts.frontend')
@section('content')
    
<div class="recharge-page" >
    <div class="container">
        <h3 style="font-size: 23px; font-weight: 300; margin: 40px 0px 24px;">Buy italki Credits</h3>
        <div class="row">
            <div class="col-md-9 no-padding-r-phone">
                <div class="panel panel-shadow no-boder-radius">
                    <div class="panel-body text-center">
                        <p class="text-title text-center" style="margin: 10px 0 30px 0">How many italki Credits do you want to buy?</p>
                        <div class="count-container text-center">
                            <button id="decrease-credits" onclick="onClickSubCredits()" class="oval-btn text-center oval-btn-left">
                                <span>
                                    <img class="btn-add" src="/front/images/recharge/-.png">
                                </span>
                            </button> 
                            <span class="count-text">$
                                <input id="count-value" type="text" value="100" style="margin: 0;padding: 1px;width: 85px;text-align: center;border:none;outline: none">
                            </span> 
                            <button id="add-credits" onclick="onClickAddCredits()" class="oval-btn text-center oval-btn-right">
                                <span>
                                    <img class="btn-add" src="/front/images/recharge/+.png">
                                </span>
                            </button>
                        </div>
                        <p style="color: #cb242b;margin-top: 5px" class="ng-hide">You must purchase at least $10</p>
                        <p style="color: #cb242b;margin-top: 5px" class="ng-hide">italki Credit purchases are limited to $1000</p>
                        <h4 style="margin-top: 10px; visibility: visible;">VND 
                            <span id="total-payment">2974000</span>
                        </h4>
                        <div class="row text-center payment-items">
                            <p class="text-title phone-book-align">With $100 you can book… 
                                <a class="hidden-lg">
                                    <img id="show-itaki-credit" class="" style="width: 25px;height: 25px;margin-left: 6px" onclick="onShowItakiCredit()" src="/front/images/recharge/icon_plus.svg"> 
                                    <img id="hide-itaki-credit" class="hidden-sm hidden-lg hidden-md" style="width: 25px;height: 25px;margin-left: 6px;display:none;" onclick="onHideItakiCredit()" src="/front/images/recharge/icon-minus.png">
                                </a>
                            </p>
                            <div id="content-panel-xs" class="hidden-sm hidden-md hidden-lg" style="display:none;">
                                <div class="col-sm-4 text-phone" style="display:  flex; margin-bottom:20px;">
                                    <img class="icon-pic" src="/front/images/recharge/icons_trial.svg">
                                    <p class="text-title pay-word set-title-line">3 trial lessons*</p>
                                    <p class="text-title pay-word ng-hide">1 trial lesson*</p>
                                </div>
                                <div class="col-sm-4 text-phone" style="display:  flex; margin-bottom:20px;">
                                    <img class="icon-pic" src="/front/images/recharge/icons_teacher.svg">
                                    <p class="text-title pay-word set-title-line" style="">5 - 7 hours of professional lessons*</p>
                                    <p class="text-title pay-word ng-hide" style="">7 hours*</p>
                                    <p class="text-title pay-word ng-hide">Up to 7 hours*</p>
                                </div>
                                <div class="col-sm-4 text-phone" style="display:  flex; margin-bottom:20px;">
                                    <img class="icon-pic" src="/front/images/recharge/icon_tutor.svg">
                                    <p class="text-title pay-word set-title-line" style="">8 - 13 hours of informal tutoring*</p>
                                    <p class="text-title pay-word ng-hide" style="">13 hours*</p>
                                    <p class="text-title pay-word ng-hide">Up to 13 hours*</p>
                                </div>
                            </div>
                            <div class="visible-computer hidden-xs">
                                <div class="col-sm-4 text-phone">
                                    <img class="icon-pic" src="/front/images/recharge/icons_trial.svg">
                                        <p class="text-title pay-word">3 trial lessons</p>
                                        <p style="font-size: 16px;font-weight: normal">You can book 3 trial lessons to find your perfect Vietnamese teacher.*</p>
                                        <p style="font-size: 16px;font-weight: normal" class="ng-hide">You can book 1 trial lesson to find your perfect Vietnamese teacher.*</p>
                                        <p style="font-size: 16px;font-weight: normal" class="ng-hide">You can book 1 trial lesson.*</p>
                                        <p style="font-size: 16px;font-weight: normal" class="ng-hide">You can book 3 trial lessons.*</p>
                                    </div>
                                    <div class="col-sm-4 text-phone">
                                        <img class="icon-pic" src="/front/images/recharge/icons_teacher.svg">
                                        <p class="text-title pay-word" style="">5 - 7 hours</p>
                                        <p class="text-title pay-word ng-hide" style="">7 hours</p>
                                        <p class="text-title pay-word ng-hide">Up to 7 hours</p>
                                        <p class="visible-computer" style="font-size: 16px;font-weight: normal">You can book 5 - 7 hours of professional lessons to improve your Vietnamese.*</p>
                                        <p class="visible-computer ng-hide" style="font-size: 16px;font-weight: normal">5 hours of professional lessons*</p>
                                        <p class="visible-computer ng-hide" style="font-size: 16px;font-weight: normal">You can book 1 hour of professional lessons to improve your Vietnamese.*</p>
                                        <p class="visible-computer ng-hide" style="font-size: 16px;font-weight: normal" ng-show="LessonAmount.promax=='1' &amp;&amp; !currentUser.learning_language">1 hour of professional lessons*</p>
                                    </div>
                                    <div class="col-sm-4 text-phone">
                                        <img class="icon-pic" src="/front/images/recharge/icon_tutor.svg">
                                        <p class="text-title pay-word" style="">8 - 13 hours</p>
                                        <p class="text-title pay-word ng-hide" style="">13 hours</p>
                                        <p class="text-title pay-word ng-hide">Up to 13 hours</p>
                                        <p class="visible-computer" style="font-size: 16px;font-weight: normal">You can book 8 - 13 hours of informal conversation practice in Vietnamese.*</p>
                                        <p class="visible-computer ng-hide" style="font-size: 16px;font-weight: normal">8 hours of informal tutoring*</p>
                                        <p class="visible-computer ng-hide" style="font-size: 16px;font-weight: normal">You can book 1 hour of informal conversation practice in Vietnamese.*</p>
                                        <p class="visible-computer ng-hide" style="font-size: 16px;font-weight: normal">1 hour of informal tutoring*</p>
                                    </div>
                                </div>
                            </div>
                            <div class="coupons-container">
                                <a id="add-a-coupon-right" onclick="onClickAddCoupon()" style="cursor:  pointer;">
                                    <img style="width: 25px;height: 25px;margin-right: 5px" class="visible-computer hidden-xs" src="/front/images/recharge/icon_plus.svg">
                                    <span class="hidden-md hidden-sm hidden-lg">+</span>Add a coupon
                                </a>
                                <div class="" style="display:none;" id="coupon">
                                    <p ng-show="showCoupon" class="text-title phone-align" style="">Add a coupon</p><p ng-show="showCoupon" class="phone-align" style="font-size: 16px; font-weight: 300;">Add a coupon to your order. You can use just one coupon per purchase.</p>
                                    <img style="display: none" src="/front/images/recharge/coupon-red.png">
                                    <div class="carousel" no-wrap="ui.carousel.noWrap" slideindex="ui.carousel.slideIndex" style="">
                                        <ol class="carousel-indicators ng-hide">
                                            <li class="active"></li>
                                        </ol>
                                        <div class="carousel-inner">
                                            <div class="item text-center active">
                                                <div class="coupon">
                                                    <!-- <div class="voucher-shadow"></div>
                                                    <div class="code-bg"></div> -->
                                                    <div class="coupon-code-slide">
                                                        <div class="coupon-code-container">
                                                            <label style="font-weight: normal;white-space: nowrap;color: white;" for="coupon-code">Use a coupon code</label>
                                                            <input placeholder="Insert your coupon code" id="coupon-code" type="text" class="coupon-code"> 
                                                            <button class="btn redeem btn-redeem">REDEEM</button>
                                                        </div>
                                                        <p class="coupon-code-msg coupon-success" style="visibility: hidden;">Coupon successfully added</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <a class="left control ng-hide" style="opacity: 0.3;">
                                            <span class="fa fa-angle-left"></span>
                                        </a> 
                                        <a class="right control ng-hide" style="opacity: 0.3;">
                                            <span class="fa fa-angle-right"></span>
                                        </a>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 visible-detail hidden-xs">
                    <div class="panel panel-shadow no-boder-radius">
                        <div class="panel-body" style="border-bottom: solid 1px #e8e8e8">
                            <p style="font-size: 14px;line-height: 1.36;margin-bottom: 20px">Your order</p>
                            <div style="float: left;margin-right: 20px">
                                <img style="width: 50px;height: 50px" src="/front/images/recharge/icon_dollars.svg">
                            </div>
                            <div style="float: left">
                                <p style="font-size: 14px;line-height: 1.36;margin: 0">italki Credits</p>
                                <p style="font-size: 20px;line-height: 1.35">$
                                    <span id="itaki-credit-order">100.00</span>
                                </p>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="row" style="border-bottom: solid 1px #e8e8e8;padding-bottom: 20px">
                                <div class="col-xs-6">
                                    <p style="font-size: 14px;line-height: 1.36">italki Credits</p>
                                </div>
                                <div class="col-xs-6 text-right">
                                    <p style="font-size: 16px;line-height: 1.19">$
                                    <span id="itaki-credit" >100.00</span>
                                </p>
                                </div>
                                <div class="col-xs-12">
                                    <a id="add-a-coupon-left" onclick="onClickAddCoupon()" style="cursor:  pointer;">+ Add a coupon</a>
                                </div>
                            </div>
                            <button id="go-to-pay" onclick="onClickGoToPay()" class="btn btn-lg btn-block grid-gutter-margin-b btn-go-to-pay">GO TO PAY</button>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 hidden-sm hidden-lg hidden-md" style="margin-left: -15px !important;margin-right:  -15px !important;">
                    <div class="panel panel-shadow no-border-radius">
                        <div class="panel-body" style="border-bottom: solid 1px #e8e8e8">
                            <div class="row">
                                <div class="col-sm-3 col-xs-12">
                                    <div class="pay-button">
                                        <button class="btn btn-primary btn-lg btn-block btn-go-to-pay" onclick="onClickGoToPay()">GO TO PAY</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <p class="visible-computer" style="font-size: 12px;color: #797979">* 
                This is calculated based on the average lesson price in Vietnamese.<br>
                <span>You can change the primary language you are learning from 
                    <a href="/settings/profile">your profile</a>.
                </span>
            </p>
    </div>
          
</div>

<div class="fixed-bottom-help-button hidden-xs hidden-sm">
    <button class="btn-recharge-help" id="help-button">
        <span class="fa fa-question-circle" style="margin-right: 10px;">
        </span>HELP
    </button>
</div>
@endsection
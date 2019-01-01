@extends('layouts.frontend')
@section('content')
    
<div class="checkout-page" >
    <div class="container">
   
        <h3 style="font-size: 23px; font-weight: 300; margin-top: 40px;">Checkout</h3>
        <h4>Please, review your order and pay.</h4>

        <div class="row visible-xs-block visible-sm-block">
            <div class="col-xs-12">
                <div class="panel panel-shadow">
                    <div class="panel-body">
                        <div class="row show-details-xs-row">
                            <div class="col-xs-12 col-sm-8">
                                <div class="order-dollar col-xs-4">
                                    <img src="/front/images/checkout/icon_dollars.svg"></div>
                                <div class="order-xs-price">
                                    <p>
                                        <a>Change your order</a>
                                    </p>
                                    <p>italki Credits - $&nbsp;100.00</p>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-4 show-details-xs-col">
                                <a class="visible-sm-inline-block show-details-xs">Show Summary<br>
                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </a>
                                <div id="summary-credit-payment" class="panel-body" style="text-align: left;display:none;">
                                    <div class="row">
                                        <div class="col-xs-6">
                                            <p style="font-size: 14px;line-height: 1.36">italki Credits</p>
                                        </div>
                                        <div class="col-xs-6 text-right">
                                            <p style="font-size: 16px;line-height: 1.19">$&nbsp;100.00</p>
                                        </div>
                                    </div>
                                    <div class="row"></div>
                                    <div class="row" style="border-bottom: solid 1px #e8e8e8;padding-bottom: 20px">
                                        <div class="col-xs-6">
                                            <p style="font-size: 14px;line-height: 1.36">Processing Fee 
                                                <strong class="help-icon" tooltip-class="help-tips" tooltip-placement="right" tooltip-html="ui.processingFeeTip">?</strong>
                                            </p>
                                        </div>
                                        <div class="col-xs-6 text-right">
                                            <p style="font-size: 16px;line-height: 1.19">$&nbsp;3.84</p>
                                        </div>
                                    </div>
                                    <div class="row" style="padding: 20px 0 0">
                                        <div class="col-xs-6">
                                            <p style="margin: 5px 0 0;font-size: 14px;line-height: 1.36">Total</p>
                                        </div>
                                        <div class="col-xs-6 text-right">
                                            <p style="font-size: 24px;line-height: 1.19;font-weight: 500">$&nbsp;103.84</p>
                                            <p style="float: right; margin: 0px; padding: 2px 5px; height: 20px; background-color: rgb(238, 238, 238); border-radius: 2px; font-size: 12px; visibility: visible;">≈2,399,175.19VND</p>
                                        </div>
                                    </div>
                                </div>
                                <a id="show-summary-icon" class="show-details-xs col-xs-12 text-center" onclick="onClickShowSummary()">Show Summary<br>
                                    <i class="fa fa-angle-down" aria-hidden="true"></i>
                                </a>
                                <a id="hide-summary-icon" class="show-details-xs col-xs-12 text-center" onclick="onClickHideSummary()" style="display:none;">Hide Summary<br>
                                    <i  class="fa fa-angle-up" aria-hidden="true"></i>
                                </a>
                            </div>
                        </div>
                        <div class="visible-sm-block panel-body ng-hide" style="margin: 20px -20px 0;padding-bottom:0;border-top: 1px solid #e8e8e8">
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="row">
                                        <div class="col-sm-7">
                                            <p style="position: relative;font-size: 14px;line-height: 1.36">italki Credits 
                                                <span style="position: absolute; right: 0;font-size: 16px;line-height: 1.19">$&nbsp;100.00</span>
                                            </p>
                                            <p style="position: relative;font-size: 14px;line-height: 1.36">Processing Fee 
                                                <strong class="help-icon" tooltip-class="help-tips" tooltip-placement="right" tooltip-html="ui.processingFeeTip">?</strong> 
                                                <span style="position: absolute; right: 0;font-size: 16px;line-height: 1.19">$&nbsp;3.84</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-right">
                                    <p style="font-size: 24px;line-height: 1.19">
                                        <span style="display: inline-block;margin: 5px 0 0;font-size: 14px;line-height: 1.36">Total</span> $&nbsp;103.84
                                    </p>
                                    <p style="float: right; margin: 0px; padding: 2px 5px; height: 20px; background-color: rgb(238, 238, 238); border-radius: 2px; font-size: 12px; visibility: visible;">≈2,399,175.19VND</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-9 match-col panel-shadow left-content" style="background:  white;padding-top:20px;">
            <div class="" style="">
                <p class="pay-with-paypal-title">Pay with PayPal</p>
                <div class="row credit-card-row">
                    <div class="col-md-5">
                        <label>Billing Country</label>
                        <select class="form-control no-border-radius" style="text-align: center;text-align-last: center;">
                            <option value="0" selected="selected">Vietnam</option>
                            <option value="1">China</option>
                        </select>
                    </div>
                </div>
            </div>
            <p class="paypal-hint">Select "GO TO PAYPAL" to complete your purchase. 
                You will be redirected to PayPal<br>
                Sign in using your credentials to complete your purchase.
            </p>
        
            <p style="font-size: 16px;line-height: 1.2">Create a PayPal account if you don't have one.</p>
        </div>

        <div class="col-md-3 match-height">
            <div class="panel panel-shadow visible-md-block visible-lg-block no-border-radius">
                <a class="desktop-changeOrder">Change your order</a>
                <div class="panel-body" style="border-bottom: solid 1px #e8e8e8;padding:20px !important;">
                    <div style="float: left;margin-right: 20px">
                        <img style="width: 50px;height: 50px" src="/front/images/checkout/icon_dollars.svg">
                    </div>
                    <div style="float: left">
                        <p style="font-size: 14px;line-height: 1.36;margin: 0">italki Credits</p>
                        <p style="font-size: 20px;line-height: 1.35">$&nbsp;100.00</p>
                    </div>
                </div>
                <div class="panel-body" style="padding:20px !important;">
                    <div class="row">
                        <div class="col-xs-6">
                            <p style="font-size: 14px;line-height: 1.36">italki Credits</p>
                        </div>
                        <div class="col-xs-6 text-right">
                            <p style="font-size: 16px;line-height: 1.19">$&nbsp;100.00</p>
                        </div>
                    </div>
                    <div class="row"></div>
                    <div class="row" style="border-bottom: solid 1px #e8e8e8;padding-bottom: 20px">
                        <div class="col-md-8">
                            <p style="font-size: 14px;line-height: 1.36">Processing Fee 
                                <strong class="help-icon" tooltip-class="help-tips" tooltip-placement="right" tooltip-html="ui.processingFeeTip">?</strong>
                            </p>
                        </div>
                        <div class="col-md-4 text-right">
                            <p style="font-size: 16px;line-height: 1.19">$&nbsp;3.84</p>
                        </div>
                    </div>
                    <div class="row" style="padding: 20px 0 0">
                        <div class="col-xs-5">
                            <p style="margin: 5px 0 0;font-size: 14px;line-height: 1.36">Total</p>
                        </div>
                        <div class="col-xs-7 text-right">
                            <p style="margin-bottom: 5px;font-size: 24px;line-height: 1.19;font-weight: 500">$&nbsp;103.84</p>
                            <p style="float: right; margin: 0px; padding: 2px 5px; height: 20px; background-color: rgb(238, 238, 238); border-radius: 2px; font-size: 12px; visibility: visible;">≈2,399,175.19VND</p>
                        </div>
                    </div>
                    <button id="italki-pay" class="btn btn-go-to-paypal">GO TO PAYPAL</button>
                </div>
            </div>
            <div class="panel panel-shadow help-box no-border-radius">
                <h4 class="help-title">Need help?</h4>
                <div class="panel-body" style="border-top: solid 1px #e8e8e8;padding:20px;">
                    <div class="ui-select-container ui-select-bootstrap dropdown ng-pristine ng-untouched ng-valid" theme="bootstrap">
                        <select class="form-control  no-border-radius" style="text-align: center;text-align-last: center;">
                            <option value="0" selected="selected">Select a question</option>
                            <option value="1">Are purchases of italki Credits secure?</option>
                        </select>
                        <div style="margin-top: 10px">
                            <p class=""></p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="xs-pay pay-btn-container hidden-sm hidden-md hidden-lg">
                <div class="panel panel-shadow">
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-xs-6">
                                <p style="margin: 0;font-size: 14px;line-height: 1.62">Total to pay</p>
                                <p style="margin: 0;font-size: 28px;line-height: 0.9">$103.84
                                    <span style="font-size: 18px;vertical-align: super">&nbsp;USD</span>
                                </p>
                            </div>
                            <div class="col-xs-6">
                                <p class="total-pay-price-phone">≈2,399,175.19VND</p>
                            </div>
                        </div>
        
                        <button id="italki-pay" class="btn btn-go-to-paypal">GO TO PAYPAL</button>
                    </div>
                </div>
            </div>

    </div>
</div>


@endsection
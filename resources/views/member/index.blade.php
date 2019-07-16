@extends('layouts.app')

@section('page-title', 'Membership')

@section('content')

<div class="m-content">
    <div class="row">
        <div class="col-xl-12">
            <!--Begin::Main Portlet-->
            <div class="m-portlet">
                <!--begin: Portlet Head-->
                <div class="m-portlet__head">
                    <div class="m-portlet__head-caption">
                        <div class="m-portlet__head-title">
                            <img src="favicon.png" class="logo-brand">
                            <h3 class="m-portlet__head-text">
                                <span>@lang('membership.membership_registration')</span><br>
                                <small>@lang('membership.pjstate')</small>
                            </h3>
                        </div>
                    </div>
                    <div class="m-portlet__head-tools">
                        <ul class="m-portlet__nav">
                            <li class="m-portlet__nav-item"><a href="{{ url('locale/en') }}" ><i class="fa fa-language"></i><br><span>English</span></a></li>
                            <li class="m-portlet__nav-item"><a href="{{ url('locale/zh') }}" ><i class="fa fa-language"></i><br><span>中文</span></a></li>
                        </ul>
                    </div>
                </div>
                <!--end: Portlet Head-->
<!--begin: Form Wizard-->
                <div class="m-wizard m-wizard--1 m-wizard--success m-wizard--step-last" id="m_wizard">
<!--begin: Form Wizard Head -->
                    <div class="m-wizard__head m-portlet__padding-x">
                        <!--begin: Form Wizard Progress -->
                        <div class="m-wizard__progress">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: calc(100% + 26px);"></div>
                            </div>
                        </div>
                        <!--end: Form Wizard Progress -->
<!--begin: Form Wizard Nav -->
                        <div class="m-wizard__nav">
                            <div class="m-wizard__steps">
                                <div class="m-wizard__step m-wizard__step--done" data-wizard-target="#m_wizard_form_step_1">
                                    <div class="m-wizard__step-info">
                                        <a href="#" class="m-wizard__step-number">
                                            <span>
                                                <span>
                                                    1
                                                </span>
                                            </span>
                                        </a>
                                        <div class="m-wizard__step-line">
                                            <span></span>
                                        </div>
                                        <div class="m-wizard__step-label">
                                            @lang('membership.step1')
                                        </div>
                                    </div>
                                </div>
                                <div class="m-wizard__step m-wizard__step--done" data-wizard-target="#m_wizard_form_step_2">
                                    <div class="m-wizard__step-info">
                                        <a href="#" class="m-wizard__step-number">
                                            <span>
                                                <span>
                                                    2
                                                </span>
                                            </span>
                                        </a>
                                        <div class="m-wizard__step-line">
                                            <span></span>
                                        </div>
                                        <div class="m-wizard__step-label">
                                            @lang('membership.step2')
                                        </div>
                                    </div>
                                </div>
                                <div class="m-wizard__step m-wizard__step--done" data-wizard-target="#m_wizard_form_step_3">
                                    <div class="m-wizard__step-info">
                                        <a href="#" class="m-wizard__step-number">
                                            <span>
                                                <span>
                                                    3
                                                </span>
                                            </span>
                                        </a>
                                        <div class="m-wizard__step-line">
                                            <span></span>
                                        </div>
                                        <div class="m-wizard__step-label">
                                            @lang('membership.step3')
                                        </div>
                                    </div>
                                </div>
                                <div class="m-wizard__step m-wizard__step--current" data-wizard-target="#m_wizard_form_step_4">
                                    <div class="m-wizard__step-info">
                                        <a href="#" class="m-wizard__step-number">
                                            <span>
                                                <span>
                                                    4
                                                </span>
                                            </span>
                                        </a>
                                        <div class="m-wizard__step-line">
                                            <span></span>
                                        </div>
                                        <div class="m-wizard__step-label">
                                            @lang('membership.step4')
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--end: Form Wizard Nav -->
                    </div>
                    <!--end: Form Wizard Head -->
<!--begin: Form Wizard Form-->
                    <div class="m-wizard__form">
                        <!--
    1) Use m-form--label-align-left class to alight the form input lables to the right
    2) Use m-form--state class to highlight input control borders on form validation
-->
                        <form class="m-form m-form--label-align-left- m-form--state-" id="m_form" novalidate="novalidate" method="POST" action="/membership">
                            @csrf
                            <!--begin: Form Body -->
                            <div class="m-portlet__body">
                                <!--begin: Form Wizard Step 1-->
                                <div class="m-wizard__form-step" id="m_wizard_form_step_1">
                                    <div class="row">
                                        <div class="col-xl-8 offset-xl-2">
                                            <div class="m-form__section m-form__section--first">
                                                <div class="m-form__heading">
                                                    <h3 class="m-form__heading-title">
                                                        @lang('membership.member_details')
                                                    </h3>
                                                </div>
                                                <div class="form-group m-form__group row">
                                                    <label class="col-xl-3 col-lg-3 col-form-label">
                                                        * @lang('membership.legal_name'):
                                                    </label>
                                                    <div class="col-xl-9 col-lg-9">
                                                        <div class="input-group">
                                                            <input type="text" name="legal_name" class="form-control m-input">
                                                        </div>
                                                        <span class="m-form__help">
                                                            @lang('membership.legal_name_caption')
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="form-group m-form__group row">
                                                    <label class="col-xl-3 col-lg-3 col-form-label">
                                                        @lang('membership.chinese_name'):
                                                    </label>
                                                    <div class="col-xl-9 col-lg-9">
                                                        <div class="input-group">
                                                            <input type="text" name="chinese_name" class="form-control m-input">
                                                        </div>
                                                        <span class="m-form__help">
                                                            @lang('membership.chinese_name_caption')
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="form-group m-form__group row">
                                                    <label class="col-xl-3 col-lg-3 col-form-label">
                                                        @lang('membership.nick_name'):
                                                    </label>
                                                    <div class="col-xl-9 col-lg-9">
                                                        <div class="input-group">
                                                            <input type="text" name="nickname" class="form-control m-input">
                                                        </div>
                                                        <span class="m-form__help">
                                                            @lang('membership.nick_name_caption')
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="form-group m-form__group row">
                                                    <label class="col-xl-3 col-lg-3 col-form-label">
                                                        * @lang('membership.ic_number'):
                                                    </label>
                                                    <div class="col-xl-9 col-lg-9">
                                                        <div class="input-group">
                                                            <input type="text" name="ic_number" class="form-control m-input">
                                                        </div>
                                                        <span class="m-form__help">
                                                            @lang('membership.ic_number_caption')
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="form-group m-form__group row">
                                                    <label class="col-xl-3 col-lg-3 col-form-label">
                                                        @lang('membership.email'):
                                                    </label>
                                                    <div class="col-xl-9 col-lg-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="la la-envelope"></i>
                                                            </span>
                                                            <input type="email" name="email" class="form-control m-input" aria-describedby="email-error">
                                                        </div>
                                                        <span class="m-form__help">
                                                            @lang('membership.email_caption')
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="form-group m-form__group row">
                                                    <label class="col-xl-3 col-lg-3 col-form-label">
                                                        @lang('membership.mobile_phone'):
                                                    </label>
                                                    <div class="col-xl-9 col-lg-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="la la-phone"></i>
                                                            </span>
                                                            <input type="text" name="mobile_phone" class="form-control m-input" aria-describedby="phone-error">
                                                        </div>
                                                        <span class="m-form__help">
                                                            @lang('membership.mobile_phone_caption')
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="form-group m-form__group row">
                                                    <label class="col-xl-3 col-lg-3 col-form-label">
                                                        @lang('membership.house_phone'):
                                                    </label>
                                                    <div class="col-xl-9 col-lg-9">
                                                        <div class="input-group">
                                                            <span class="input-group-addon">
                                                                <i class="la la-phone"></i>
                                                            </span>
                                                            <input type="text" name="house_phone" class="form-control m-input" aria-describedby="phone-error">
                                                        </div>
                                                        <span class="m-form__help">
                                                            @lang('membership.house_phone_caption')
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="m-separator m-separator--dashed m-separator--lg"></div>
                                        </div>
                                    </div>
                                </div>
                                <!--end: Form Wizard Step 1-->
        <!--begin: Form Wizard Step 2-->
                                <div class="m-wizard__form-step" id="m_wizard_form_step_2">
                                    <div class="row">
                                        <div class="col-xl-8 offset-xl-2">
                                            <div class="m-form__section m-form__section--first">
                                                <div class="m-form__section">
                                                    <div class="m-form__heading">
                                                        <h3 class="m-form__heading-title">
                                                            @lang('membership.mailing_address')
                                                        </h3>
                                                    </div>
                                                    <div class="form-group m-form__group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">
                                                            <i data-toggle="m-tooltip" data-width="auto" class="m-form__heading-help-icon flaticon-info m--font-danger" data-original-title="@lang('membership.parent_ic_tooltip')"></i>
                                                            @lang('membership.parent_ic'):
                                                        </label>
                                                        <div class="col-xl-9 col-lg-9">
                                                            <div class="input-group">
                                                                <input type="text" name="parent_ic" class="form-control m-input">
                                                            </div>
                                                            <span class="m-form__help">
                                                                @lang('membership.parent_ic_caption')
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group m-form__group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">
                                                            * @lang('membership.address1'):
                                                        </label>
                                                        <div class="col-xl-9 col-lg-9">
                                                            <div class="input-group">
                                                                <input type="text" name="address1" class="form-control m-input">
                                                            </div>
                                                            <span class="m-form__help">
                                                                @lang('membership.address1_caption')
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group m-form__group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">
                                                            @lang('membership.address2'):
                                                        </label>
                                                        <div class="col-xl-9 col-lg-9">
                                                            <div class="input-group">
                                                                <input type="text" name="address2" class="form-control m-input">
                                                            </div>
                                                            <span class="m-form__help">
                                                                @lang('membership.address2_caption')
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group m-form__group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">
                                                            * @lang('membership.postcode'):
                                                        </label>
                                                        <div class="col-xl-9 col-lg-9">
                                                            <div class="input-group">
                                                                <input type="text" name="postcode" class="form-control m-input">
                                                            </div>
                                                            <span class="m-form__help"></span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group m-form__group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">
                                                            * @lang('membership.city'):
                                                        </label>
                                                        <div class="col-xl-9 col-lg-9">
                                                            <div class="input-group">
                                                                <input type="text" name="city" class="form-control m-input">
                                                            </div>
                                                            <span class="m-form__help"></span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group m-form__group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">
                                                            * @lang('membership.state'):
                                                        </label>
                                                        <div class="col-xl-9 col-lg-9">
                                                            <div class="input-group">
                                                                <input type="text" name="state" class="form-control m-input">
                                                            </div>
                                                            <span class="m-form__help"></span>
                                                        </div>
                                                    </div>
                                                    <div class="form-group m-form__group row">
                                                        <label class="col-xl-3 col-lg-3 col-form-label">
                                                            * @lang('membership.country'):
                                                        </label>
                                                        <div class="col-xl-9 col-lg-9">
                                                            <div class="input-group">
                                                                <select name="country" class="form-control m-input">
                                                                    <option value="">
                                                                        Select
                                                                    </option>
                                                                    @foreach($countries as $country)
                                                                    <option value="{{ $country->code }}" @php if($country->code == 'MYS') echo 'selected="selected"'; @endphp>{{ $country->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                                <span class="m-form__help"></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="m-separator m-separator--dashed m-separator--lg"></div>
                                            <div class="m-form__section m-form__section--first">
                                                <div class="m-form__heading">
                                                    <h3 class="m-form__heading-title">
                                                        @lang('membership.family_details')
                                                    </h3>
                                                </div>
                                                <div class="input_fields_wrap">
                                                    <div class="form-group m-form__group row">
                                                        <div class="col-xs-12 col-md-3 m-form__group-sub">
                                                            <label class="form-control-label">
                                                                @lang('membership.name'):
                                                            </label>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control m-input" name="name_family[]">
                                                            </div>
                                                            <span class="m-form__help"></span>
                                                        </div>
                                                        <div class="col-xs-12 col-md-3 m-form__group-sub">
                                                            <label class="form-control-label">
                                                                @lang('membership.relationship'):
                                                            </label>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control m-input" name="relationship_family[]">
                                                            </div>
                                                            <span class="m-form__help"></span>
                                                        </div>
                                                        <div class="col-xs-12 col-md-3 m-form__group-sub">
                                                            <label class="form-control-label">
                                                                @lang('membership.mobile_phone'):
                                                            </label>
                                                            <div class="input-group">
                                                                <input type="text" class="form-control m-input" name="phone_family[]">
                                                            </div>
                                                            <span class="m-form__help"></span>
                                                        </div>
                                                        <div class="col-xs-12 col-md-3 m-form__group-sub"></div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-offset-9 col-md-3">
                                                        <button id="btn-add" class="btn btn-success"><i class="la la-plus"></i>&nbsp;&nbsp;@lang('membership.btn-add')</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end: Form Wizard Step 2-->
        <!--begin: Form Wizard Step 3-->
                                <div class="m-wizard__form-step" id="m_wizard_form_step_3">
                                    <div class="row">
                                        <div class="col-xl-8 offset-xl-2">
                                            <div class="m-form__section m-form__section--first">
                                                <div class="m-form__heading">
                                                    <h3 class="m-form__heading-title">
                                                        @lang('membership.step3')
                                                    </h3>
                                                </div>
                                                <div class="form-group m-form__group form-group row">
                                                    <div class="col-lg-12">
                                                        <label for="">
                                                           * @lang('membership.baptized'):
                                                        </label>
                                                        <div class="m-radio-list">
                                                            <label class="m-radio">
                                                                <input type="radio" name="baptized" value="1">
                                                                @lang('membership.yes')
                                                                <span></span>
                                                            </label>
                                                            <label class="m-radio">
                                                                <input type="radio" name="baptized" value="0">
                                                                @lang('membership.no')
                                                                <span></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group m-form__group form-group row">
                                                    <div class="col-lg-12">
                                                        <label for="">
                                                           * @lang('membership.baptized_in'):
                                                        </label>
                                                        <div class="m-radio-list">
                                                            <label class="m-radio">
                                                                <input type="radio" name="baptized_in" value="PJ State Methodist Church">
                                                                @lang('membership.pjstate')
                                                                <span></span>
                                                            </label>
                                                            <label class="m-radio">
                                                                <input type="radio" name="baptized_in" value="Not Sure">
                                                                @lang('membership.not_sure')
                                                                <span></span>
                                                            </label>
                                                            <label class="m-radio" id="baptized_in">
                                                                <input type="radio" name="baptized_in" value="Others">
                                                                @lang('membership.others')
                                                                <span></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group m-form__group form-group row">
                                                    <div class="col-lg-12">
                                                        <label for="">
                                                           * @lang('membership.membership_in'):
                                                        </label>
                                                        <div class="m-radio-list">
                                                            <label class="m-radio">
                                                                <input type="radio" name="membership_in" value="PJ State Methodist Church" data-error="#errNm1">
                                                                @lang('membership.pjstate')
                                                                <span></span>
                                                            </label>
                                                            <label class="m-radio">
                                                                <input type="radio" name="membership_in" value="Not Sure">
                                                                @lang('membership.not_sure')
                                                                <span></span>
                                                            </label>
                                                            <label class="m-radio" id="membership_in">
                                                                <input type="radio" name="membership_in" value="Others">
                                                                @lang('membership.others')
                                                                <span></span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group m-form__group form-group row">
                                                    <div class="col-lg-12">
                                                        <label for="">
                                                           * @lang('membership.currently_attend'):
                                                        </label>
                                                        <div class="m-checkbox-list">
                                                            @foreach($fellowships as $fellowship)
                                                            <label class="m-checkbox">
                                                                <input type="checkbox" name="fellowship[]" value="{{ $fellowship->code }}">
                                                                @lang('membership.'.$fellowship->code)
                                                                <span></span>
                                                            </label>
                                                            @endforeach
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--end: Form Wizard Step 3-->
        <!--begin: Form Wizard Step 4-->
                                <div class="m-wizard__form-step m-wizard__form-step--current" id="m_wizard_form_step_4">
                                    <div class="row">
                                        <div class="col-xl-8 offset-xl-2">
                                            <!--begin::Section-->
                                            <div class="m-accordion m-accordion--default" id="m_accordion_1" role="tablist">
                                                <!--begin::Item-->
                                                <div class="m-accordion__item active">
                                                    <div class="m-accordion__item-head" role="tab" id="m_accordion_1_item_1_head" data-toggle="collapse" href="#m_accordion_1_item_1_body" aria-expanded="  false">
                                                        <span class="m-accordion__item-icon">
                                                            <i class="la la-user"></i>
                                                        </span>
                                                        <span class="m-accordion__item-title">
                                                            1. @lang('membership.step1')
                                                        </span>
                                                        <span class="m-accordion__item-mode">
                                                            <i class="la la-plus"></i>
                                                        </span>
                                                    </div>
                                                    <div class="m-accordion__item-body collapse show" id="m_accordion_1_item_1_body" role="tabpanel" aria-labelledby="m_accordion_1_item_1_head" data-parent="#m_accordion_1">
                                                        <!--begin::Content-->
                                                        <div class="tab-content  m--padding-30">
                                                            <div class="m-form__section m-form__section--first">
                                                                <div class="m-form__heading">
                                                                    <h4 class="m-form__heading-title">
                                                                        @lang('membership.member_details')
                                                                    </h4>
                                                                </div>
                                                                <div class="form-group m-form__group m-form__group--sm row">
                                                                    <label class="col-xl-4 col-lg-4 col-form-label">
                                                                        @lang('membership.legal_name'):
                                                                    </label>
                                                                    <div class="col-xl-8 col-lg-8">
                                                                        <span class="m-form__control-static" id="legal_name"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group m-form__group m-form__group--sm row">
                                                                    <label class="col-xl-4 col-lg-4 col-form-label">
                                                                        @lang('membership.chinese_name'):
                                                                    </label>
                                                                    <div class="col-xl-8 col-lg-8">
                                                                        <span class="m-form__control-static" id="chinese_name"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group m-form__group m-form__group--sm row">
                                                                    <label class="col-xl-4 col-lg-4 col-form-label">
                                                                        @lang('membership.nick_name'):
                                                                    </label>
                                                                    <div class="col-xl-8 col-lg-8">
                                                                        <span class="m-form__control-static" id="nickname"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group m-form__group m-form__group--sm row">
                                                                    <label class="col-xl-4 col-lg-4 col-form-label">
                                                                        @lang('membership.ic_number'):
                                                                    </label>
                                                                    <div class="col-xl-8 col-lg-8">
                                                                        <span class="m-form__control-static" id="ic_number"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group m-form__group m-form__group--sm row">
                                                                    <label class="col-xl-4 col-lg-4 col-form-label">
                                                                        @lang('membership.email'):
                                                                    </label>
                                                                    <div class="col-xl-8 col-lg-8">
                                                                        <span class="m-form__control-static" id="email"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group m-form__group m-form__group--sm row">
                                                                    <label class="col-xl-4 col-lg-4 col-form-label">
                                                                        @lang('membership.mobile_phone'):
                                                                    </label>
                                                                    <div class="col-xl-8 col-lg-8">
                                                                        <span class="m-form__control-static" id="mobile_phone"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group m-form__group m-form__group--sm row">
                                                                    <label class="col-xl-4 col-lg-4 col-form-label">
                                                                        @lang('membership.house_phone'):
                                                                    </label>
                                                                    <div class="col-xl-8 col-lg-8">
                                                                        <span class="m-form__control-static" id="house_phone"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="m-separator m-separator--dashed m-separator--lg"></div>
                                                            <div class="m-form__section">
                                                                <div class="m-form__heading">
                                                                    <h4 class="m-form__heading-title">
                                                                        @lang('membership.mailing_address')
                                                                    </h4>
                                                                </div>
                                                                <div class="form-group m-form__group m-form__group--sm row">
                                                                    <label class="col-xl-4 col-lg-4 col-form-label">
                                                                        @lang('membership.address1'):
                                                                    </label>
                                                                    <div class="col-xl-8 col-lg-8">
                                                                        <span class="m-form__control-static" id="address1"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group m-form__group m-form__group--sm row">
                                                                    <label class="col-xl-4 col-lg-4 col-form-label">
                                                                        @lang('membership.address2'):
                                                                    </label>
                                                                    <div class="col-xl-8 col-lg-8">
                                                                        <span class="m-form__control-static" id="address2"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group m-form__group m-form__group--sm row">
                                                                    <label class="col-xl-4 col-lg-4 col-form-label">
                                                                        @lang('membership.postcode'):
                                                                    </label>
                                                                    <div class="col-xl-8 col-lg-8">
                                                                        <span class="m-form__control-static" id="postcode"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group m-form__group m-form__group--sm row">
                                                                    <label class="col-xl-4 col-lg-4 col-form-label">
                                                                        @lang('membership.city'):
                                                                    </label>
                                                                    <div class="col-xl-8 col-lg-8">
                                                                        <span class="m-form__control-static" id="city"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group m-form__group m-form__group--sm row">
                                                                    <label class="col-xl-4 col-lg-4 col-form-label">
                                                                        @lang('membership.state'):
                                                                    </label>
                                                                    <div class="col-xl-8 col-lg-8">
                                                                        <span class="m-form__control-static" id="state"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group m-form__group m-form__group--sm row">
                                                                    <label class="col-xl-4 col-lg-4 col-form-label">
                                                                        @lang('membership.country'):
                                                                    </label>
                                                                    <div class="col-xl-8 col-lg-8">
                                                                        <span class="m-form__control-static" id="country"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--end::Content-->
                                                    </div>
                                                </div>
                                                <!--end::Item-->
                        <!--begin::Item-->
                                                <div class="m-accordion__item">
                                                    <div class="m-accordion__item-head collapsed" role="tab" id="m_accordion_1_item_2_head" data-toggle="collapse" href="#m_accordion_1_item_2_body" aria-expanded="false">
                                                        <span class="m-accordion__item-icon">
                                                            <i class="la la-users"></i>
                                                        </span>
                                                        <span class="m-accordion__item-title">
                                                            2. @lang('membership.step2'):
                                                        </span>
                                                        <span class="m-accordion__item-mode">
                                                            <i class="la la-plus"></i>
                                                        </span>
                                                    </div>
                                                    <div class="m-accordion__item-body collapse" id="m_accordion_1_item_2_body" role="tabpanel" aria-labelledby="m_accordion_1_item_2_head" data-parent="#m_accordion_1">
                                                        <!--begin::Content-->
                                                        <div class="tab-content m--padding-30">
                                                            <div class="m-form__section m-form__section--first">
                                                                <div class="m-form__heading">
                                                                    <h4 class="m-form__heading-title">
                                                                         @lang('membership.family_details')
                                                                    </h4>
                                                                </div>

                                                                <div class="form-group m-form__group form-group row">
                                                                    <div class="col-lg-12">
                                                                         <table class="table table-sm m-table m-table--head-bg-brand m-form__control-static" style="display:inline-table;">
                                                                            <thead class="thead-inverse">
                                                                                <tr>
                                                                                    <th>#</th>
                                                                                    <th>@lang('membership.name')</th>
                                                                                    <th>@lang('membership.relationship')</th>
                                                                                    <th>@lang('membership.mobile_phone')</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody id="tbody">
                                                                                <tr>
                                                                                    <td colspan="4">
                                                                                    @lang('membership.no_family_details')</td>
                                                                                </tr>
                                                                            </tbody>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!--end::Content-->
                                                    </div>
                                                </div>
                                                <!--end::Item-->
                        <!--begin::Item-->
                                                <div class="m-accordion__item">
                                                    <div class="m-accordion__item-head collapsed" role="tab" id="m_accordion_1_item_3_head" data-toggle="collapse" href="#m_accordion_1_item_3_body" aria-expanded="    false">
                                                        <span class="m-accordion__item-icon">
                                                            <i class="la la-bank"></i>
                                                        </span>
                                                        <span class="m-accordion__item-title">
                                                            3. @lang('membership.step3')
                                                        </span>
                                                        <span class="m-accordion__item-mode">
                                                            <i class="la la-plus"></i>
                                                        </span>
                                                    </div>
                                                    <div class="m-accordion__item-body collapse" id="m_accordion_1_item_3_body" role="tabpanel" aria-labelledby="m_accordion_1_item_3_head" data-parent="#m_accordion_1">
                                                        <div class="tab-content m--padding-30">
                                                            <div class="m-form__section m-form__section--first">
                                                                <div class="form-group m-form__group m-form__group--sm row">
                                                                    <label class="col-xl-4 col-lg-4 col-form-label">
                                                                        @lang('membership.baptized'):
                                                                    </label>
                                                                    <div class="col-xl-8 col-lg-8">
                                                                        <span class="m-form__control-static" id="baptized"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group m-form__group m-form__group--sm row">
                                                                    <label class="col-xl-4 col-lg-4 col-form-label">
                                                                        @lang('membership.baptized_in'):
                                                                    </label>
                                                                    <div class="col-xl-8 col-lg-8">
                                                                        <span class="m-form__control-static" id="baptized_text"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group m-form__group m-form__group--sm row">
                                                                    <label class="col-xl-4 col-lg-4 col-form-label">
                                                                        @lang('membership.membership_in'):
                                                                    </label>
                                                                    <div class="col-xl-8 col-lg-8">
                                                                        <span class="m-form__control-static" id="membership_text"></span>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group m-form__group m-form__group--sm row">
                                                                    <label class="col-xl-4 col-lg-4 col-form-label">
                                                                        @lang('membership.currently_attend'):
                                                                    </label>
                                                                    <div class="col-xl-8 col-lg-8">
                                                                        <span class="m-form__control-static" id="fellowship"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Item-->
                                            </div>
                                            <!--end::Section-->
                                        </div>
                                    </div>
                                </div>
                                <!--end: Form Wizard Step 4-->
                            </div>
                            <!--end: Form Body -->
    <!--begin: Form Actions -->
                            <div class="m-portlet__foot m-portlet__foot--fit">
                                <div class="d-flex justify-content-between" style="padding:20px 10px">
                                    <div>
                                    <a href="#" class="btn btn-secondary m-btn m-btn--custom m-btn--icon pull-left" data-wizard-action="prev">
                                        <span>
                                            <i class="la la-arrow-left"></i>&nbsp;&nbsp;
                                            <span>@lang('membership.back')</span>
                                        </span>
                                    </a>
                                    </div>
                                    <div>
                                    <a href="#" class="btn btn-primary m-btn m-btn--custom m-btn--icon pull-right" data-wizard-action="submit">
                                        <span>
                                            <i class="la la-check"></i>
                                            &nbsp;&nbsp;
                                            <span>@lang('membership.submit')</span>
                                        </span>
                                    </a>
                                    <a href="#" class="btn btn-primary m-btn m-btn--custom m-btn--icon pull-right" data-wizard-action="next">
                                        <span>
                                            <span>@lang('membership.save_and_continue')</span>
                                            &nbsp;&nbsp;
                                            <i class="la la-arrow-right"></i>
                                        </span>
                                    </a>
                                    </div>
                                </div>
                            </div>
                            <!--end: Form Actions -->
                        </form>
                    </div>
                    <!--end: Form Wizard Form-->
                </div>
                <!--end: Form Wizard-->
            </div>
            <!--End::Main Portlet-->
        </div>
    </div>
</div>
@stop

@section('styles')
    <link href="{{ asset('css/vendors.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <style type="text/css">
    /* Brand */
    @media screen and (max-width: 399px) {
        .m-portlet .m-portlet__head {
            display: table;
            padding: 0;
            width: 100%;
            padding: 0 1.5rem;
            height: 5.1rem;
        }

        .logo-brand {
            height: 30px;
            width: 30px;
            margin-top: 15px;
            margin-right: 8px;
        }
    }

    @media screen and (min-width: 400px) {
        .logo-brand {
            height: 30px;
            width: 30px;
            margin-top: 17px;
            margin-right: 10px;
        }
    }

    @media screen and (min-width:768px) {
        .logo-brand {
            height: 45px;
            width: 45px;
            margin-top: 10px;
            margin-right: 5px;
        }
    }

    .m-portlet .m-portlet__head .m-portlet__head-caption .m-portlet__head-title .m-portlet__head-text small {
        padding-left: initial;
    }
    /* End brand */

    /* Step colour */
    .m-wizard.m-wizard--1.m-wizard--success .m-wizard__progress .progress .progress-bar:after {
        background-color: #5867dd;
    }
    .m-wizard.m-wizard--1.m-wizard--success .m-wizard__progress .progress .progress-bar {
        background-color: #5867dd;
    }
    .m-wizard.m-wizard--1.m-wizard--success .m-wizard__steps .m-wizard__step.m-wizard__step--current .m-wizard__step-info .m-wizard__step-number > span {
        background-color: #5867dd;
    }
    .m-wizard.m-wizard--1.m-wizard--success .m-wizard__steps .m-wizard__step.m-wizard__step--done .m-wizard__step-info .m-wizard__step-number > span {
        background-color: #5867dd;
    }
    .m-wizard.m-wizard--1.m-wizard--success .m-wizard__steps .m-wizard__step.m-wizard__step--current .m-wizard__step-info a.m-wizard__step-number:hover > span {
        background-color: #5867dd;
    }
    /* End Step colour */

    /* Form input colour */
    .input-group-addon, .input-group-btn, .input-group .form-control {
        border: 1px solid #5867dd;
    }
    /* End form input colour */

    /* Step 4 user text colour */
    .m-form .m-form__group .m-form__control-static {
        color: #5867dd !important;
    }
    /* End step 4 user text colour */
    </style>
@stop

@section('scripts')
    <script src="{{ asset('js/vendors.bundle.js') }}"></script>
    <script src="{{ asset('js/scripts.bundle.js') }}"></script>
    <script src="{{ asset('js/wizard.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            // Step 2 - family relationship
            var max_fields      = 10; //maximum input boxes allowed
            var wrapper         = $(".input_fields_wrap"); //Fields wrapper
            var add_button      = $("#btn-add"); //Add button ID

            var x = 1; //initlal text box count
            $(add_button).click(function(e){ //on add input button click
                e.preventDefault();
                if(x < max_fields){ //max input box allowed
                    x++; //text box increment

                    $(wrapper).append('<div class="form-group m-form__group row"><div class="col-xs-12 col-md-3 m-form__group-sub"><label class="form-control-label">@lang("membership.name"):</label><div class="input-group"><input type="text" class="form-control m-input" name="name_family[]"></div><span class="m-form__help"></span></div><div class="col-xs-12 col-md-3 m-form__group-sub"><label class="form-control-label">@lang("membership.relationship"):</label><div class="input-group"><input type="text" class="form-control m-input" name="relationship_family[]"></div><span class="m-form__help"></span></div><div class="col-xs-12 col-md-3 m-form__group-sub"><label class="form-control-label">@lang("membership.mobile_phone"):</label><div class="input-group"><input type="text" class="form-control m-input" name="phone_family[]"></div><span class="m-form__help"></span></div><div class="col-xs-12 col-md-3 m-form__group-sub"><label class="form-control-label">&nbsp;</label><button class="form-control m-input remove_field btn btn-danger"><i class="la la-close" style="color:white;"></i></button></div></div>');
                }
            });

            $(wrapper).on("click",".remove_field", function(e){ //user click on remove text
                e.preventDefault();
                // Get parent and remove whole element.
                var parent = $(this).parent().parent();
                parent.remove();
                x--;
            });

            $("input[name='parent_ic']").focusout(function(){
                var parent_ic = $("input[name='parent_ic']").val();

                $.ajax({
                    url : '/populate_address',
                    type : 'GET',
                    data : {
                        'parent_ic' : parent_ic
                    },
                    dataType:'json',
                    success : function(response) {
                        console.log('Data: '+response.data);

                        // Populate address if not empty.
                        if (response.statusCode == 200) {
                            // Populate the address.
                            $('input[name="address1"]').val(response.data.address1);
                            $('input[name="address2"]').val(response.data.address2);
                            $('input[name="postcode"]').val(response.data.postcode);
                            $('input[name="city"]').val(response.data.city);
                            $('input[name="state"]').val(response.data.state);
                            $('select[name="country"]').val(response.data.country);
                        } else {
                            swal({
                                "title": "",
                                "text": "Address info not available by this ic number.",
                                "type": "error",
                                "confirmButtonClass": "btn btn-secondary m-btn m-btn--wide"
                            });
                        }
                    },
                    error : function(request,error) {
                        // console.log("Request: "+JSON.stringify(request));
                    }
                });
            });
            // End Step 2

            // Step 3 - Church information
            $("input[name='baptized']").change(function(){
                var baptized = $("input[name='baptized']:checked").parent('label').text();
                $('#baptized').text(baptized);
            });

            $("input[name='baptized_in']").change(function(){
                var baptized_text = $("input[name='baptized_in']:checked").parent('label').text();
                $('#baptized_text').text(baptized_text);

                // `Others` option then appear a text field.
                var baptized_in = $("input[name='baptized_in']:checked").val();
                if (baptized_in == 'Others') {
                    $('#baptized_in').append('<input type="text" name="baptized_in_others" class="form-control m-input" data-msg="@lang("membership.required")" style="z-index:2;opacity:1;"><div id="baptized_in_others-error" class="form-control-feedback" style="color: red;margin-top: 10.5%;">This field is required.</div>');

                    // Get `others` option value.
                    $("input[name='baptized_in_others']").keyup(function(){
                        var baptized_in_others_txt = $("input[name='baptized_in_others']").val();
                        $('#baptized_text').text(baptized_in_others_txt);
                    });
                } else {
                    $('input[name="baptized_in_others"]').remove();
                    $('#baptized_in_others-error').remove();
                }
            });

            $("input[name='membership_in']").change(function(){
                var membership_text = $("input[name='membership_in']:checked").parent('label').text();
                $('#membership_text').text(membership_text);

                // `Others` option then appear a text field.
                var membership_in = $("input[name='membership_in']:checked").val();
                if (membership_in == 'Others') {
                    $('#membership_in').append('<input type="text" name="membership_in_others" class="form-control m-input" data-msg="@lang("membership.required")" style="z-index:2;opacity:1;"><div id="membership_in_others-error" class="form-control-feedback" style="color: red;margin-top: 10.5%;">This field is required.</div>');

                    // Get `others` option value.
                    $("input[name='membership_in_others']").keyup(function(){
                        var membership_in_others_txt = $("input[name='membership_in_others']").val();
                        $('#membership_text').text(membership_in_others_txt);
                    });
                } else {
                    $('input[name="membership_in_others"]').remove();
                    $('#membership_in_others-error').remove();
                }
            });

            $("input[name='fellowship[]']").change(function(){
                var arr = [];
                $('input[name="fellowship[]"]:checked').each(function(){
                    var text;
                    switch($(this).val()) {
                      case 'SF':
                        text = '@lang("membership.SF")';
                        break;
                      case 'WF':
                        text = '@lang("membership.WF")';
                        break;
                      case 'CF':
                        text = '@lang("membership.CF")';
                        break;
                      case 'BF':
                        text = '@lang("membership.BF")';
                        break;
                      case 'MYF':
                        text = '@lang("membership.MYF")';
                        break;
                      case 'MIF':
                        text = '@lang("membership.MIF")';
                        break;
                      case 'SSS':
                        text = '@lang("membership.SSS")';
                        break;
                      case 'ASS':
                        text = '@lang("membership.ASS")';
                        break;
                      case 'YSS':
                        text = '@lang("membership.YSS")';
                        break;
                      case 'CSS':
                        text = '@lang("membership.CSS")';
                        break;
                      case 'NA':
                        text = '@lang("membership.NA")';
                        break;
                    }
                    arr.push(text);
                });

                var fellowship_text = arr.join(', ');
                $('#fellowship').text(fellowship_text);
            });
            // End Step 3

            // Step 4 - Confirmation
            // If user click step or next button, then load the confirmation data.
            $('.m-wizard__step-number, .btn-primary').click(function(){
                // Member Details.
                $('#legal_name').text($('input[name="legal_name"]').val());
                $('#chinese_name').text($('input[name="chinese_name"]').val());
                $('#nickname').text($('input[name="nickname"]').val());
                $('#ic_number').text($('input[name="ic_number"]').val());
                $('#email').text($('input[name="email"]').val());
                $('#mobile_phone').text($('input[name="mobile_phone"]').val());
                $('#house_phone').text($('input[name="house_phone"]').val());
                // Mailing address
                $('#address1').text($('input[name="address1"]').val());
                $('#address2').text($('input[name="address2"]').val());
                $('#postcode').text($('input[name="postcode"]').val());
                $('#city').text($('input[name="city"]').val());
                $('#state').text($('input[name="state"]').val());
                $('#country').text($('select[name="country"] option:selected').text());

                var name_arr = $("input[name='name_family[]']").map(function(){return $(this).val();}).get();
                var relationship_arr = $("input[name='relationship_family[]']").map(function(){return $(this).val();}).get();
                var phone_arr = $("input[name='phone_family[]']").map(function(){return $(this).val();}).get();
                // User family details.
                if (name_arr.length > 0) {
                    $('#tbody').empty();
                    for(let i=0; i<name_arr.length; i++) {
                        $('#tbody').append('<tr><td>'+parseInt(i+1)+'</td><td>'+name_arr[i]+'</td><td>'+relationship_arr[i]+'</td><td>'+phone_arr[i]+'</td></tr>');

                        // Check for first time data, empty then display text.
                        if ((!name_arr[i]) && (i == 0)) {
                            $('#tbody').empty();
                            $('#tbody').append('<tr><td colspan="4">@lang("membership.no_family_details")</td></tr>');
                        }
                    }
                }
            });
            // End Step 4
        });
    </script>
@stop

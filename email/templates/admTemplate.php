<?php
    
    function admEmailTemplate($name, $cellphone, $email, $neighborhood, $city, $msg, $ip, $data, $hora) {
        
        $logo = 'http://my.logo.path/img.png';
        
        return utf8_decode('<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xmlns="http://www.w3.org/1999/xhtml"
      style="min-height: 100%; background: #f3f3f3;">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width"/>
</head>
<body style="width: 100% !important; min-width: 100%; -webkit-text-size-adjust: 100%; -ms-text-size-adjust: 100%; -moz-box-sizing: border-box; -webkit-box-sizing: border-box; box-sizing: border-box; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-weight: normal; text-align: left; line-height: 19px; font-size: 16px; margin: 0; padding: 0;">
<style type="text/css">
    @media only screen and (max-width: 596px) {
        .small-float-center {
            margin: 0 auto !important;
            float: none !important;
            text-align: center !important;
        }

        .small-text-center {
            text-align: center !important;
        }

        .small-text-left {
            text-align: left !important;
        }

        .small-text-right {
            text-align: right !important;
        }

        table.body table.container .hide-for-large {
            display: block !important;
            width: auto !important;
            overflow: visible !important;
        }

        table.body table.container .row.hide-for-large {
            display: table !important;
            width: 100% !important;
        }

        table.body table.container .row.hide-for-large {
            display: table !important;
            width: 100% !important;
        }

        table.body table.container .show-for-large {
            display: none !important;
            width: 0;
            mso-hide: all;
            overflow: hidden;
        }

        table.body img {
            width: auto !important;
            height: auto !important;
        }

        table.body center {
            min-width: 0 !important;
        }

        table.body .container {
            width: 95% !important;
        }

        table.body .columns {
            height: auto !important;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            padding-left: 16px !important;
            padding-right: 16px !important;
        }

        table.body .column {
            height: auto !important;
            -moz-box-sizing: border-box;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;
            padding-left: 16px !important;
            padding-right: 16px !important;
        }

        table.body .columns .column {
            padding-left: 0 !important;
            padding-right: 0 !important;
        }

        table.body .columns .columns {
            padding-left: 0 !important;
            padding-right: 0 !important;
        }

        table.body .column .column {
            padding-left: 0 !important;
            padding-right: 0 !important;
        }

        table.body .column .columns {
            padding-left: 0 !important;
            padding-right: 0 !important;
        }

        table.body .collapse .columns {
            padding-left: 0 !important;
            padding-right: 0 !important;
        }

        table.body .collapse .column {
            padding-left: 0 !important;
            padding-right: 0 !important;
        }

        td.small-1 {
            display: inline-block !important;
            width: 8.33333% !important;
        }

        th.small-1 {
            display: inline-block !important;
            width: 8.33333% !important;
        }

        td.small-2 {
            display: inline-block !important;
            width: 16.66667% !important;
        }

        th.small-2 {
            display: inline-block !important;
            width: 16.66667% !important;
        }

        td.small-3 {
            display: inline-block !important;
            width: 25% !important;
        }

        th.small-3 {
            display: inline-block !important;
            width: 25% !important;
        }

        td.small-4 {
            display: inline-block !important;
            width: 33.33333% !important;
        }

        th.small-4 {
            display: inline-block !important;
            width: 33.33333% !important;
        }

        td.small-5 {
            display: inline-block !important;
            width: 41.66667% !important;
        }

        th.small-5 {
            display: inline-block !important;
            width: 41.66667% !important;
        }

        td.small-6 {
            display: inline-block !important;
            width: 50% !important;
        }

        th.small-6 {
            display: inline-block !important;
            width: 50% !important;
        }

        td.small-7 {
            display: inline-block !important;
            width: 58.33333% !important;
        }

        th.small-7 {
            display: inline-block !important;
            width: 58.33333% !important;
        }

        td.small-8 {
            display: inline-block !important;
            width: 66.66667% !important;
        }

        th.small-8 {
            display: inline-block !important;
            width: 66.66667% !important;
        }

        td.small-9 {
            display: inline-block !important;
            width: 75% !important;
        }

        th.small-9 {
            display: inline-block !important;
            width: 75% !important;
        }

        td.small-10 {
            display: inline-block !important;
            width: 83.33333% !important;
        }

        th.small-10 {
            display: inline-block !important;
            width: 83.33333% !important;
        }

        td.small-11 {
            display: inline-block !important;
            width: 91.66667% !important;
        }

        th.small-11 {
            display: inline-block !important;
            width: 91.66667% !important;
        }

        td.small-12 {
            display: inline-block !important;
            width: 100% !important;
        }

        th.small-12 {
            display: inline-block !important;
            width: 100% !important;
        }

        .columns td.small-12 {
            display: block !important;
            width: 100% !important;
        }

        .column td.small-12 {
            display: block !important;
            width: 100% !important;
        }

        .columns th.small-12 {
            display: block !important;
            width: 100% !important;
        }

        .column th.small-12 {
            display: block !important;
            width: 100% !important;
        }

        .body .columns td.small-1 {
            display: inline-block !important;
            width: 8.33333% !important;
        }

        .body .column td.small-1 {
            display: inline-block !important;
            width: 8.33333% !important;
        }

        td.small-1 center {
            display: inline-block !important;
            width: 8.33333% !important;
        }

        .body .columns th.small-1 {
            display: inline-block !important;
            width: 8.33333% !important;
        }

        .body .column th.small-1 {
            display: inline-block !important;
            width: 8.33333% !important;
        }

        th.small-1 center {
            display: inline-block !important;
            width: 8.33333% !important;
        }

        .body .columns td.small-2 {
            display: inline-block !important;
            width: 16.66667% !important;
        }

        .body .column td.small-2 {
            display: inline-block !important;
            width: 16.66667% !important;
        }

        td.small-2 center {
            display: inline-block !important;
            width: 16.66667% !important;
        }

        .body .columns th.small-2 {
            display: inline-block !important;
            width: 16.66667% !important;
        }

        .body .column th.small-2 {
            display: inline-block !important;
            width: 16.66667% !important;
        }

        th.small-2 center {
            display: inline-block !important;
            width: 16.66667% !important;
        }

        .body .columns td.small-3 {
            display: inline-block !important;
            width: 25% !important;
        }

        .body .column td.small-3 {
            display: inline-block !important;
            width: 25% !important;
        }

        td.small-3 center {
            display: inline-block !important;
            width: 25% !important;
        }

        .body .columns th.small-3 {
            display: inline-block !important;
            width: 25% !important;
        }

        .body .column th.small-3 {
            display: inline-block !important;
            width: 25% !important;
        }

        th.small-3 center {
            display: inline-block !important;
            width: 25% !important;
        }

        .body .columns td.small-4 {
            display: inline-block !important;
            width: 33.33333% !important;
        }

        .body .column td.small-4 {
            display: inline-block !important;
            width: 33.33333% !important;
        }

        td.small-4 center {
            display: inline-block !important;
            width: 33.33333% !important;
        }

        .body .columns th.small-4 {
            display: inline-block !important;
            width: 33.33333% !important;
        }

        .body .column th.small-4 {
            display: inline-block !important;
            width: 33.33333% !important;
        }

        th.small-4 center {
            display: inline-block !important;
            width: 33.33333% !important;
        }

        .body .columns td.small-5 {
            display: inline-block !important;
            width: 41.66667% !important;
        }

        .body .column td.small-5 {
            display: inline-block !important;
            width: 41.66667% !important;
        }

        td.small-5 center {
            display: inline-block !important;
            width: 41.66667% !important;
        }

        .body .columns th.small-5 {
            display: inline-block !important;
            width: 41.66667% !important;
        }

        .body .column th.small-5 {
            display: inline-block !important;
            width: 41.66667% !important;
        }

        th.small-5 center {
            display: inline-block !important;
            width: 41.66667% !important;
        }

        .body .columns td.small-6 {
            display: inline-block !important;
            width: 50% !important;
        }

        .body .column td.small-6 {
            display: inline-block !important;
            width: 50% !important;
        }

        td.small-6 center {
            display: inline-block !important;
            width: 50% !important;
        }

        .body .columns th.small-6 {
            display: inline-block !important;
            width: 50% !important;
        }

        .body .column th.small-6 {
            display: inline-block !important;
            width: 50% !important;
        }

        th.small-6 center {
            display: inline-block !important;
            width: 50% !important;
        }

        .body .columns td.small-7 {
            display: inline-block !important;
            width: 58.33333% !important;
        }

        .body .column td.small-7 {
            display: inline-block !important;
            width: 58.33333% !important;
        }

        td.small-7 center {
            display: inline-block !important;
            width: 58.33333% !important;
        }

        .body .columns th.small-7 {
            display: inline-block !important;
            width: 58.33333% !important;
        }

        .body .column th.small-7 {
            display: inline-block !important;
            width: 58.33333% !important;
        }

        th.small-7 center {
            display: inline-block !important;
            width: 58.33333% !important;
        }

        .body .columns td.small-8 {
            display: inline-block !important;
            width: 66.66667% !important;
        }

        .body .column td.small-8 {
            display: inline-block !important;
            width: 66.66667% !important;
        }

        td.small-8 center {
            display: inline-block !important;
            width: 66.66667% !important;
        }

        .body .columns th.small-8 {
            display: inline-block !important;
            width: 66.66667% !important;
        }

        .body .column th.small-8 {
            display: inline-block !important;
            width: 66.66667% !important;
        }

        th.small-8 center {
            display: inline-block !important;
            width: 66.66667% !important;
        }

        .body .columns td.small-9 {
            display: inline-block !important;
            width: 75% !important;
        }

        .body .column td.small-9 {
            display: inline-block !important;
            width: 75% !important;
        }

        td.small-9 center {
            display: inline-block !important;
            width: 75% !important;
        }

        .body .columns th.small-9 {
            display: inline-block !important;
            width: 75% !important;
        }

        .body .column th.small-9 {
            display: inline-block !important;
            width: 75% !important;
        }

        th.small-9 center {
            display: inline-block !important;
            width: 75% !important;
        }

        .body .columns td.small-10 {
            display: inline-block !important;
            width: 83.33333% !important;
        }

        .body .column td.small-10 {
            display: inline-block !important;
            width: 83.33333% !important;
        }

        td.small-10 center {
            display: inline-block !important;
            width: 83.33333% !important;
        }

        .body .columns th.small-10 {
            display: inline-block !important;
            width: 83.33333% !important;
        }

        .body .column th.small-10 {
            display: inline-block !important;
            width: 83.33333% !important;
        }

        th.small-10 center {
            display: inline-block !important;
            width: 83.33333% !important;
        }

        .body .columns td.small-11 {
            display: inline-block !important;
            width: 91.66667% !important;
        }

        .body .column td.small-11 {
            display: inline-block !important;
            width: 91.66667% !important;
        }

        td.small-11 center {
            display: inline-block !important;
            width: 91.66667% !important;
        }

        .body .columns th.small-11 {
            display: inline-block !important;
            width: 91.66667% !important;
        }

        .body .column th.small-11 {
            display: inline-block !important;
            width: 91.66667% !important;
        }

        th.small-11 center {
            display: inline-block !important;
            width: 91.66667% !important;
        }

        table.body td.small-offset-1 {
            margin-left: 8.33333% !important;
        }

        table.body th.small-offset-1 {
            margin-left: 8.33333% !important;
        }

        table.body td.small-offset-2 {
            margin-left: 16.66667% !important;
        }

        table.body th.small-offset-2 {
            margin-left: 16.66667% !important;
        }

        table.body td.small-offset-3 {
            margin-left: 25% !important;
        }

        table.body th.small-offset-3 {
            margin-left: 25% !important;
        }

        table.body td.small-offset-4 {
            margin-left: 33.33333% !important;
        }

        table.body th.small-offset-4 {
            margin-left: 33.33333% !important;
        }

        table.body td.small-offset-5 {
            margin-left: 41.66667% !important;
        }

        table.body th.small-offset-5 {
            margin-left: 41.66667% !important;
        }

        table.body td.small-offset-6 {
            margin-left: 50% !important;
        }

        table.body th.small-offset-6 {
            margin-left: 50% !important;
        }

        table.body td.small-offset-7 {
            margin-left: 58.33333% !important;
        }

        table.body th.small-offset-7 {
            margin-left: 58.33333% !important;
        }

        table.body td.small-offset-8 {
            margin-left: 66.66667% !important;
        }

        table.body th.small-offset-8 {
            margin-left: 66.66667% !important;
        }

        table.body td.small-offset-9 {
            margin-left: 75% !important;
        }

        table.body th.small-offset-9 {
            margin-left: 75% !important;
        }

        table.body td.small-offset-10 {
            margin-left: 83.33333% !important;
        }

        table.body th.small-offset-10 {
            margin-left: 83.33333% !important;
        }

        table.body td.small-offset-11 {
            margin-left: 91.66667% !important;
        }

        table.body th.small-offset-11 {
            margin-left: 91.66667% !important;
        }

        table.body table.columns td.expander {
            display: none !important;
        }

        table.body table.columns th.expander {
            display: none !important;
        }

        table.body .right-text-pad {
            padding-left: 10px !important;
        }

        table.body .text-pad-right {
            padding-left: 10px !important;
        }

        table.body .left-text-pad {
            padding-right: 10px !important;
        }

        table.body .text-pad-left {
            padding-right: 10px !important;
        }

        table.menu {
            width: 100% !important;
        }

        table.menu td {
            width: auto !important;
            display: inline-block !important;
        }

        table.menu th {
            width: auto !important;
            display: inline-block !important;
        }

        table.menu.vertical td {
            display: block !important;
        }

        table.menu.vertical th {
            display: block !important;
        }

        table.menu.small-vertical td {
            display: block !important;
        }

        table.menu.small-vertical th {
            display: block !important;
        }

        table.button.expand {
            width: 100% !important;
        }
    }
</style>

<table class="body"
       style="border-spacing: 0; border-collapse: collapse; vertical-align: top; text-align: left; height: 100%; width: 100%; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-weight: normal; line-height: 19px; font-size: 16px; background: #f3f3f3; margin: 0; padding: 0;"
       bgcolor="#f3f3f3">
    <tr style="vertical-align: top; text-align: left; padding: 0;" align="left">
        <td class="center" align="center" valign="top"
            style="word-wrap: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; text-align: left; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-weight: normal; line-height: 19px; font-size: 16px; margin: 0; padding: 0;">
            <center data-parsed="" style="width: 100%; min-width: 580px;">
                <div class="header text-center" align="center" style="background: #8a8a8a;">
                    <table class="container"
                           style="border-spacing: 0; border-collapse: collapse; vertical-align: top; text-align: inherit; width: 580px; background: #8a8a8a; margin: 0 auto; padding: 16px 0;"
                           bgcolor="#8a8a8a">
                        <tbody>
                        <tr style="vertical-align: top; text-align: left; padding: 0;" align="left">
                            <td style="word-wrap: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; text-align: left; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-weight: normal; line-height: 19px; font-size: 16px; margin: 0; padding: 16px 0;"
                                align="left" valign="top">
                                <table class="row collapse"
                                       style="border-spacing: 0; border-collapse: collapse; vertical-align: top; text-align: left; width: 100%; position: relative; display: table; padding: 0;">
                                    <tbody>
                                    <tr style="vertical-align: top; text-align: left; padding: 0;" align="left">
                                        <th class="small-6 large-6 columns first"
                                            style="width: 298px; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-weight: normal; text-align: left; line-height: 19px; font-size: 16px; margin: 0 auto; padding: 0;"
                                            align="left">
                                            <table style="border-spacing: 0; border-collapse: collapse; vertical-align: top; text-align: left; width: 100%; padding: 0;">
                                                <tr style="vertical-align: top; text-align: left; padding: 0;"
                                                    align="left">
                                                    <img
                                                            src="' . $logo . '" width="35"
                                                            height="35"
                                                            style="outline: none; text-decoration: none; -ms-interpolation-mode: bicubic; width: auto; float: none; margin: 0 auto;"/>
                                               
                                                </tr>
                                            </table>
                                        </th>
                                        <th class="small-6 large-6 columns last"
                                            style="width: 298px; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-weight: normal; text-align: left; line-height: 19px; font-size: 16px; margin: 0 auto; padding: 0;"
                                            align="left">
                                            <table style="border-spacing: 0; border-collapse: collapse; vertical-align: top; text-align: left; width: 100%; padding: 0;">
                                                <tr style="vertical-align: top; text-align: left; padding: 0;"
                                                    align="left">
                                                    <th style="color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-weight: normal; text-align: left; line-height: 19px; font-size: 16px; margin: 0; padding: 0;"
                                                        align="left"><br/></th>
                                                </tr>
                                            </table>
                                        </th>
                                    </tr>
                                    </tbody>
                                </table>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <table class="container text-center"
                       style="border-spacing: 0; border-collapse: collapse; vertical-align: top; text-align: center; width: 580px; background: #fefefe; margin: 0 auto; padding: 0;"
                       bgcolor="#fefefe">
                    <tbody>
                    <tr style="vertical-align: top; text-align: left; padding: 0;" align="left">
                        <td style="word-wrap: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; text-align: left; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-weight: normal; line-height: 19px; font-size: 16px; margin: 0; padding: 0;"
                            align="left" valign="top">
                            <table class="row"
                                   style="border-spacing: 0; border-collapse: collapse; vertical-align: top; text-align: left; width: 100%; position: relative; display: table; padding: 0;">
                                <tbody>
                                <tr style="vertical-align: top; text-align: left; padding: 0;" align="left">
                                    <th class="small-12 large-12 columns first last"
                                        style="width: 564px; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-weight: normal; text-align: left; line-height: 19px; font-size: 16px; margin: 0 auto; padding: 0 16px 16px;"
                                        align="left">
                                        <table style="border-spacing: 0; border-collapse: collapse; vertical-align: top; text-align: left; width: 100%; padding: 0;">
                                            <tr style="vertical-align: top; text-align: left; padding: 0;" align="left">
                                                <th style="color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-weight: normal; text-align: left; line-height: 19px; font-size: 16px; margin: 0; padding: 0;"
                                                    align="left">
                                                </th>
                                                <th class="expander"
                                                    style="visibility: hidden; width: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-weight: normal; text-align: left; line-height: 19px; font-size: 16px; margin: 0; padding: 0;"
                                                    align="left"></th>
                                            </tr>
                                        </table>
                                    </th>
                                </tr>
                                </tbody>
                            </table>
                            <table class="row"
                                   style="border-spacing: 0; border-collapse: collapse; vertical-align: top; text-align: left; width: 100%; position: relative; display: table; padding: 0;">
                                <tbody>
                                <tr style="vertical-align: top; text-align: left; padding: 0;" align="left">
                                    <th class="small-12 large-5 columns first"
                                        style="width: 225.66667px; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-weight: normal; text-align: left; line-height: 19px; font-size: 16px; margin: 0 auto; padding: 0 8px 16px 16px;"
                                        align="left">
                                        <table style="border-spacing: 0; border-collapse: collapse; vertical-align: top; text-align: left; width: 100%; padding: 0;">
                                            <tr style="vertical-align: top; text-align: left; padding: 0;" align="left">
                                                <th style="color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-weight: normal; text-align: left; line-height: 19px; font-size: 16px; margin: 0; padding: 0;"
                                                    align="left">
                                                    <table class="callout"
                                                           style="border-spacing: 0; border-collapse: collapse; vertical-align: top; text-align: left; width: 100%; margin-bottom: 16px; padding: 0;">
                                                        <tr style="vertical-align: top; text-align: left; padding: 0;"
                                                            align="left">
                                                            <td class="callout-inner secondary"
                                                                style="word-wrap: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; text-align: left; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-weight: normal; line-height: 19px; font-size: 16px; margin: 0; padding: 0;"
                                                                align="left" valign="top">
                                                                <h5 style="color: inherit; font-family: Helvetica, Arial, sans-serif; font-weight: normal; text-align: left; line-height: 1.3; word-wrap: normal; font-size: 20px; margin: 0 0 10px; padding: 0;"
                                                                    align="left">Dados do cliente</h5>

                                                                <table class="menu vertical"
                                                                       style="border-spacing: 0; border-collapse: collapse; vertical-align: top; text-align: left; width: 100%; padding: 0;">
                                                                    <tr style="vertical-align: top; text-align: left; padding: 0;"
                                                                        align="left">
                                                                        <td style="word-wrap: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; text-align: left; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-weight: normal; line-height: 19px; font-size: 16px; margin: 0; padding: 0;"
                                                                            align="left" valign="top">
                                                                            <table style="border-spacing: 0; border-collapse: collapse; vertical-align: top; text-align: left; width: 100%; padding: 0;">
                                                                                <tr style="vertical-align: top; text-align: left; padding: 0;"
                                                                                    align="left">
                                                                                    <th class="menu-item"
                                                                                        style="color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-weight: normal; text-align: left; line-height: 19px; font-size: 16px; display: block; margin: 0; padding: 10px 0 10px 10px;"
                                                                                        align="left">Nome:' . $name . '
                                                                                    </th>
                                                                                    <th class="menu-item"
                                                                                        style="color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-weight: normal; text-align: left; line-height: 19px; font-size: 16px; display: block; margin: 0; padding: 10px 0 10px 10px;"
                                                                                        align="left">Celular:' .
            $cellphone . '
                                                                                    </th>

                                                                                    <th class="menu-item"
                                                                                        style="color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-weight: normal; text-align: left; line-height: 19px; font-size: 16px; display: block; margin: 0; padding: 10px 0 10px 10px;"
                                                                                        align="left">Regiao:' . $city
            . '/' . $neighborhood . '
                                                                                    </th>
                                                                                    <th class="menu-item"
                                                                                        style="color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-weight: normal; text-align: left; line-height: 19px; font-size: 16px; display: block; margin: 0; padding: 10px 0 10px 10px;"
                                                                                        align="left">Data:' . $data . '
                                                                                        as ' . $hora . '
                                                                                    </th>
                                                                                    <th class="menu-item"
                                                                                        style="color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-weight: normal; text-align: left; line-height: 19px; font-size: 16px; display: block; margin: 0; padding: 10px 0 10px 10px;"
                                                                                        align="left">IP:' . $ip . '
                                                                                    </th>
                                                                                    <th class="menu-item"
                                                                                        style="color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-weight: normal; text-align: left; line-height: 19px; font-size: 16px; display: block; margin: 0; padding: 10px 0 10px 10px;"
                                                                                        align="left">' . $email . '
                                                                                    </th>
                                                                                </tr>
                                                                            </table>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </td>
                                                            <td class="expander"
                                                                style="word-wrap: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; text-align: left; visibility: hidden; width: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-weight: normal; line-height: 19px; font-size: 16px; margin: 0; padding: 0;"
                                                                align="left" valign="top"></td>
                                                        </tr>
                                                    </table>
                                                    <table class="callout"
                                                           style="border-spacing: 0; border-collapse: collapse; vertical-align: top; text-align: left; width: 100%; margin-bottom: 16px; padding: 0;">
                                                        <tr style="vertical-align: top; text-align: left; padding: 0;"
                                                            align="left">
                                                            <td class="expander"
                                                                style="word-wrap: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; text-align: left; visibility: hidden; width: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-weight: normal; line-height: 19px; font-size: 16px; margin: 0; padding: 0;"
                                                                align="left" valign="top"></td>
                                                        </tr>
                                                    </table>
                                                </th>
                                            </tr>
                                        </table>
                                    </th>

                                    <th class="small-12 large-7 columns last "
                                        style="width: 322.33333px; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-weight: normal; text-align: left; line-height: 19px; font-size: 16px; margin: 0 auto; padding: 0 16px 16px 8px;"
                                        align="left">
                                        <table style="border-spacing: 0; border-collapse: collapse; vertical-align: top; text-align: left; width: 100%; padding: 0;">
                                            <tr style="vertical-align: top; text-align: left; padding: 0;" align="left">
                                                <th style="color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-weight: normal; text-align: left; line-height: 19px; font-size: 16px; margin: 0; padding: 0;"
                                                    align="left">

                                                    <h5 style="color: inherit; font-family: Helvetica, Arial, sans-serif; font-weight: normal; text-align: left; line-height: 1.3; word-wrap: normal; font-size: 24px; margin: 0 0 10px; padding: 0;"
                                                        align="left">Mensagem de ' . $name . '</h5>
                                                    <p style="color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-weight: normal; text-align: left; line-height: 19px; font-size: 16px; margin: 0 0 10px; padding: 0;"
                                                       align="left">' . $msg . '</p>
                                                </th>
                                            </tr>
                                        </table>
                                    </th>

                                </tr>
                                </tbody>
                            </table>
                            <table class="row"
                                   style="border-spacing: 0; border-collapse: collapse; vertical-align: top; text-align: left; width: 100%; position: relative; display: table; padding: 0;">
                                <tbody>
                                <tr style="vertical-align: top; text-align: left; padding: 0;" align="left">
                                    <th class="small-12 large-12 columns first last"
                                        style="width: 564px; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-weight: normal; text-align: left; line-height: 19px; font-size: 16px; margin: 0 auto; padding: 0 16px 16px;"
                                        align="left">
                                        <table style="border-spacing: 0; border-collapse: collapse; vertical-align: top; text-align: left; width: 100%; padding: 0;">
                                            <tr style="vertical-align: top; text-align: left; padding: 0;" align="left">
                                                <th style="color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-weight: normal; text-align: left; line-height: 19px; font-size: 16px; margin: 0; padding: 0;"
                                                    align="left">
                                                    <table class="menu"
                                                           style="border-spacing: 0; border-collapse: collapse; vertical-align: top; text-align: left; width: 100%; padding: 0;">
                                                        <tr style="vertical-align: top; text-align: left; padding: 0;"
                                                            align="left">
                                                            <td style="word-wrap: break-word; -webkit-hyphens: auto; -moz-hyphens: auto; hyphens: auto; border-collapse: collapse !important; vertical-align: top; text-align: left; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-weight: normal; line-height: 19px; font-size: 16px; margin: 0; padding: 0;"
                                                                align="left" valign="top">

                                                            </td>
                                                        </tr>
                                                    </table>
                                                </th>
                                                <th class="expander"
                                                    style="visibility: hidden; width: 0; color: #0a0a0a; font-family: Helvetica, Arial, sans-serif; font-weight: normal; text-align: left; line-height: 19px; font-size: 16px; margin: 0; padding: 0;"
                                                    align="left"></th>
                                            </tr>
                                        </table>
                                    </th>
                                </tr>
                                </tbody>
                            </table>
                        </td>
                    </tr>
                    </tbody>
                </table>
            </center>
        </td>
    </tr>
</table>
</body>
</html>');
    }
    
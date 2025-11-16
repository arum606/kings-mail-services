<?php  include("../server/connection.php");   include("../server/auth.php") ;   ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bulk Email Sender - Professional Email Marketing Platform</title>
    <meta name="description"
        content="Send bulk emails to 100+ recipients with our professional email sender platform. Track deliveries, manage SMTP settings, and monitor campaign performance.">
    <meta name="keywords" content="bulk email sender, email marketing, SMTP, mass email, email campaigns">
    <meta name="author" content="Email Sender Pro">

    <meta property="og:title" content="Bulk Email Sender - Professional Email Marketing Platform">
    <meta property="og:description"
        content="Send bulk emails to 100+ recipients with our professional email sender platform. Track deliveries, manage SMTP settings, and monitor campaign performance.">
    <meta property="og:type" content="website">
    <meta property="og:image"
        content="https://pub-bb2e103a32db4e198524a2e9ed8f35b4.r2.dev/50617b89-bb7f-4d4d-9560-c9875bc01890/id-preview-399cb5cb--18ca528e-b2b3-4eeb-8052-daad5eb0e64f.lovable.app-1760374855277.png">

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@lovable_dev">
    <meta name="twitter:image"
        content="https://pub-bb2e103a32db4e198524a2e9ed8f35b4.r2.dev/50617b89-bb7f-4d4d-9560-c9875bc01890/id-preview-399cb5cb--18ca528e-b2b3-4eeb-8052-daad5eb0e64f.lovable.app-1760374855277.png">

    <link rel="stylesheet" crossorigin="" href="../src/index-Do3cWJMn.css">



        <style type="text/css">
            :where(html[dir="ltr"]),
            :where([data-sonner-toaster][dir="ltr"]) {
                --toast-icon-margin-start: -3px;
                --toast-icon-margin-end: 4px;
                --toast-svg-margin-start: -1px;
                --toast-svg-margin-end: 0px;
                --toast-button-margin-start: auto;
                --toast-button-margin-end: 0;
                --toast-close-button-start: 0;
                --toast-close-button-end: unset;
                --toast-close-button-transform: translate(-35%, -35%)
            }

            :where(html[dir="rtl"]),
            :where([data-sonner-toaster][dir="rtl"]) {
                --toast-icon-margin-start: 4px;
                --toast-icon-margin-end: -3px;
                --toast-svg-margin-start: 0px;
                --toast-svg-margin-end: -1px;
                --toast-button-margin-start: 0;
                --toast-button-margin-end: auto;
                --toast-close-button-start: unset;
                --toast-close-button-end: 0;
                --toast-close-button-transform: translate(35%, -35%)
            }

            :where([data-sonner-toaster]) {
                position: fixed;
                width: var(--width);
                font-family: ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, sans-serif, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol, Noto Color Emoji;
                --gray1: hsl(0, 0%, 99%);
                --gray2: hsl(0, 0%, 97.3%);
                --gray3: hsl(0, 0%, 95.1%);
                --gray4: hsl(0, 0%, 93%);
                --gray5: hsl(0, 0%, 90.9%);
                --gray6: hsl(0, 0%, 88.7%);
                --gray7: hsl(0, 0%, 85.8%);
                --gray8: hsl(0, 0%, 78%);
                --gray9: hsl(0, 0%, 56.1%);
                --gray10: hsl(0, 0%, 52.3%);
                --gray11: hsl(0, 0%, 43.5%);
                --gray12: hsl(0, 0%, 9%);
                --border-radius: 8px;
                box-sizing: border-box;
                padding: 0;
                margin: 0;
                list-style: none;
                outline: none;
                z-index: 999999999;
                transition: transform .4s ease
            }

            :where([data-sonner-toaster][data-lifted="true"]) {
                transform: translateY(-10px)
            }

            @media (hover: none) and (pointer: coarse) {
                :where([data-sonner-toaster][data-lifted="true"]) {
                    transform: none
                }
            }

            :where([data-sonner-toaster][data-x-position="right"]) {
                right: var(--offset-right)
            }

            :where([data-sonner-toaster][data-x-position="left"]) {
                left: var(--offset-left)
            }

            :where([data-sonner-toaster][data-x-position="center"]) {
                left: 50%;
                transform: translate(-50%)
            }

            :where([data-sonner-toaster][data-y-position="top"]) {
                top: var(--offset-top)
            }

            :where([data-sonner-toaster][data-y-position="bottom"]) {
                bottom: var(--offset-bottom)
            }

            :where([data-sonner-toast]) {
                --y: translateY(100%);
                --lift-amount: calc(var(--lift) * var(--gap));
                z-index: var(--z-index);
                position: absolute;
                opacity: 0;
                transform: var(--y);
                filter: blur(0);
                touch-action: none;
                transition: transform .4s, opacity .4s, height .4s, box-shadow .2s;
                box-sizing: border-box;
                outline: none;
                overflow-wrap: anywhere
            }

            :where([data-sonner-toast][data-styled="true"]) {
                padding: 16px;
                background: var(--normal-bg);
                border: 1px solid var(--normal-border);
                color: var(--normal-text);
                border-radius: var(--border-radius);
                box-shadow: 0 4px 12px #0000001a;
                width: var(--width);
                font-size: 13px;
                display: flex;
                align-items: center;
                gap: 6px
            }

            :where([data-sonner-toast]:focus-visible) {
                box-shadow: 0 4px 12px #0000001a, 0 0 0 2px #0003
            }

            :where([data-sonner-toast][data-y-position="top"]) {
                top: 0;
                --y: translateY(-100%);
                --lift: 1;
                --lift-amount: calc(1 * var(--gap))
            }

            :where([data-sonner-toast][data-y-position="bottom"]) {
                bottom: 0;
                --y: translateY(100%);
                --lift: -1;
                --lift-amount: calc(var(--lift) * var(--gap))
            }

            :where([data-sonner-toast]) :where([data-description]) {
                font-weight: 400;
                line-height: 1.4;
                color: inherit
            }

            :where([data-sonner-toast]) :where([data-title]) {
                font-weight: 500;
                line-height: 1.5;
                color: inherit
            }

            :where([data-sonner-toast]) :where([data-icon]) {
                display: flex;
                height: 16px;
                width: 16px;
                position: relative;
                justify-content: flex-start;
                align-items: center;
                flex-shrink: 0;
                margin-left: var(--toast-icon-margin-start);
                margin-right: var(--toast-icon-margin-end)
            }

            :where([data-sonner-toast][data-promise="true"]) :where([data-icon])>svg {
                opacity: 0;
                transform: scale(.8);
                transform-origin: center;
                animation: sonner-fade-in .3s ease forwards
            }

            :where([data-sonner-toast]) :where([data-icon])>* {
                flex-shrink: 0
            }

            :where([data-sonner-toast]) :where([data-icon]) svg {
                margin-left: var(--toast-svg-margin-start);
                margin-right: var(--toast-svg-margin-end)
            }

            :where([data-sonner-toast]) :where([data-content]) {
                display: flex;
                flex-direction: column;
                gap: 2px
            }

            [data-sonner-toast][data-styled=true] [data-button] {
                border-radius: 4px;
                padding-left: 8px;
                padding-right: 8px;
                height: 24px;
                font-size: 12px;
                color: var(--normal-bg);
                background: var(--normal-text);
                margin-left: var(--toast-button-margin-start);
                margin-right: var(--toast-button-margin-end);
                border: none;
                cursor: pointer;
                outline: none;
                display: flex;
                align-items: center;
                flex-shrink: 0;
                transition: opacity .4s, box-shadow .2s
            }

            :where([data-sonner-toast]) :where([data-button]):focus-visible {
                box-shadow: 0 0 0 2px #0006
            }

            :where([data-sonner-toast]) :where([data-button]):first-of-type {
                margin-left: var(--toast-button-margin-start);
                margin-right: var(--toast-button-margin-end)
            }

            :where([data-sonner-toast]) :where([data-cancel]) {
                color: var(--normal-text);
                background: rgba(0, 0, 0, .08)
            }

            :where([data-sonner-toast][data-theme="dark"]) :where([data-cancel]) {
                background: rgba(255, 255, 255, .3)
            }

            :where([data-sonner-toast]) :where([data-close-button]) {
                position: absolute;
                left: var(--toast-close-button-start);
                right: var(--toast-close-button-end);
                top: 0;
                height: 20px;
                width: 20px;
                display: flex;
                justify-content: center;
                align-items: center;
                padding: 0;
                color: var(--gray12);
                border: 1px solid var(--gray4);
                transform: var(--toast-close-button-transform);
                border-radius: 50%;
                cursor: pointer;
                z-index: 1;
                transition: opacity .1s, background .2s, border-color .2s
            }

            [data-sonner-toast] [data-close-button] {
                background: var(--gray1)
            }

            :where([data-sonner-toast]) :where([data-close-button]):focus-visible {
                box-shadow: 0 4px 12px #0000001a, 0 0 0 2px #0003
            }

            :where([data-sonner-toast]) :where([data-disabled="true"]) {
                cursor: not-allowed
            }

            :where([data-sonner-toast]):hover :where([data-close-button]):hover {
                background: var(--gray2);
                border-color: var(--gray5)
            }

            :where([data-sonner-toast][data-swiping="true"]):before {
                content: "";
                position: absolute;
                left: -50%;
                right: -50%;
                height: 100%;
                z-index: -1
            }

            :where([data-sonner-toast][data-y-position="top"][data-swiping="true"]):before {
                bottom: 50%;
                transform: scaleY(3) translateY(50%)
            }

            :where([data-sonner-toast][data-y-position="bottom"][data-swiping="true"]):before {
                top: 50%;
                transform: scaleY(3) translateY(-50%)
            }

            :where([data-sonner-toast][data-swiping="false"][data-removed="true"]):before {
                content: "";
                position: absolute;
                inset: 0;
                transform: scaleY(2)
            }

            :where([data-sonner-toast]):after {
                content: "";
                position: absolute;
                left: 0;
                height: calc(var(--gap) + 1px);
                bottom: 100%;
                width: 100%
            }

            :where([data-sonner-toast][data-mounted="true"]) {
                --y: translateY(0);
                opacity: 1
            }

            :where([data-sonner-toast][data-expanded="false"][data-front="false"]) {
                --scale: var(--toasts-before) * .05 + 1;
                --y: translateY(calc(var(--lift-amount) * var(--toasts-before))) scale(calc(-1 * var(--scale)));
                height: var(--front-toast-height)
            }

            :where([data-sonner-toast])>* {
                transition: opacity .4s
            }

            :where([data-sonner-toast][data-expanded="false"][data-front="false"][data-styled="true"])>* {
                opacity: 0
            }

            :where([data-sonner-toast][data-visible="false"]) {
                opacity: 0;
                pointer-events: none
            }

            :where([data-sonner-toast][data-mounted="true"][data-expanded="true"]) {
                --y: translateY(calc(var(--lift) * var(--offset)));
                height: var(--initial-height)
            }

            :where([data-sonner-toast][data-removed="true"][data-front="true"][data-swipe-out="false"]) {
                --y: translateY(calc(var(--lift) * -100%));
                opacity: 0
            }

            :where([data-sonner-toast][data-removed="true"][data-front="false"][data-swipe-out="false"][data-expanded="true"]) {
                --y: translateY(calc(var(--lift) * var(--offset) + var(--lift) * -100%));
                opacity: 0
            }

            :where([data-sonner-toast][data-removed="true"][data-front="false"][data-swipe-out="false"][data-expanded="false"]) {
                --y: translateY(40%);
                opacity: 0;
                transition: transform .5s, opacity .2s
            }

            :where([data-sonner-toast][data-removed="true"][data-front="false"]):before {
                height: calc(var(--initial-height) + 20%)
            }

            [data-sonner-toast][data-swiping=true] {
                transform: var(--y) translateY(var(--swipe-amount-y, 0px)) translate(var(--swipe-amount-x, 0px));
                transition: none
            }

            [data-sonner-toast][data-swiped=true] {
                user-select: none
            }

            [data-sonner-toast][data-swipe-out=true][data-y-position=bottom],
            [data-sonner-toast][data-swipe-out=true][data-y-position=top] {
                animation-duration: .2s;
                animation-timing-function: ease-out;
                animation-fill-mode: forwards
            }

            [data-sonner-toast][data-swipe-out=true][data-swipe-direction=left] {
                animation-name: swipe-out-left
            }

            [data-sonner-toast][data-swipe-out=true][data-swipe-direction=right] {
                animation-name: swipe-out-right
            }

            [data-sonner-toast][data-swipe-out=true][data-swipe-direction=up] {
                animation-name: swipe-out-up
            }

            [data-sonner-toast][data-swipe-out=true][data-swipe-direction=down] {
                animation-name: swipe-out-down
            }

            @keyframes swipe-out-left {
                0% {
                    transform: var(--y) translate(var(--swipe-amount-x));
                    opacity: 1
                }

                to {
                    transform: var(--y) translate(calc(var(--swipe-amount-x) - 100%));
                    opacity: 0
                }
            }

            @keyframes swipe-out-right {
                0% {
                    transform: var(--y) translate(var(--swipe-amount-x));
                    opacity: 1
                }

                to {
                    transform: var(--y) translate(calc(var(--swipe-amount-x) + 100%));
                    opacity: 0
                }
            }

            @keyframes swipe-out-up {
                0% {
                    transform: var(--y) translateY(var(--swipe-amount-y));
                    opacity: 1
                }

                to {
                    transform: var(--y) translateY(calc(var(--swipe-amount-y) - 100%));
                    opacity: 0
                }
            }

            @keyframes swipe-out-down {
                0% {
                    transform: var(--y) translateY(var(--swipe-amount-y));
                    opacity: 1
                }

                to {
                    transform: var(--y) translateY(calc(var(--swipe-amount-y) + 100%));
                    opacity: 0
                }
            }

            @media (max-width: 600px) {
                [data-sonner-toaster] {
                    position: fixed;
                    right: var(--mobile-offset-right);
                    left: var(--mobile-offset-left);
                    width: 100%
                }

                [data-sonner-toaster][dir=rtl] {
                    left: calc(var(--mobile-offset-left) * -1)
                }

                [data-sonner-toaster] [data-sonner-toast] {
                    left: 0;
                    right: 0;
                    width: calc(100% - var(--mobile-offset-left) * 2)
                }

                [data-sonner-toaster][data-x-position=left] {
                    left: var(--mobile-offset-left)
                }

                [data-sonner-toaster][data-y-position=bottom] {
                    bottom: var(--mobile-offset-bottom)
                }

                [data-sonner-toaster][data-y-position=top] {
                    top: var(--mobile-offset-top)
                }

                [data-sonner-toaster][data-x-position=center] {
                    left: var(--mobile-offset-left);
                    right: var(--mobile-offset-right);
                    transform: none
                }
            }

            [data-sonner-toaster][data-theme=light] {
                --normal-bg: #fff;
                --normal-border: var(--gray4);
                --normal-text: var(--gray12);
                --success-bg: hsl(143, 85%, 96%);
                --success-border: hsl(145, 92%, 91%);
                --success-text: hsl(140, 100%, 27%);
                --info-bg: hsl(208, 100%, 97%);
                --info-border: hsl(221, 91%, 91%);
                --info-text: hsl(210, 92%, 45%);
                --warning-bg: hsl(49, 100%, 97%);
                --warning-border: hsl(49, 91%, 91%);
                --warning-text: hsl(31, 92%, 45%);
                --error-bg: hsl(359, 100%, 97%);
                --error-border: hsl(359, 100%, 94%);
                --error-text: hsl(360, 100%, 45%)
            }

            [data-sonner-toaster][data-theme=light] [data-sonner-toast][data-invert=true] {
                --normal-bg: #000;
                --normal-border: hsl(0, 0%, 20%);
                --normal-text: var(--gray1)
            }

            [data-sonner-toaster][data-theme=dark] [data-sonner-toast][data-invert=true] {
                --normal-bg: #fff;
                --normal-border: var(--gray3);
                --normal-text: var(--gray12)
            }

            [data-sonner-toaster][data-theme=dark] {
                --normal-bg: #000;
                --normal-bg-hover: hsl(0, 0%, 12%);
                --normal-border: hsl(0, 0%, 20%);
                --normal-border-hover: hsl(0, 0%, 25%);
                --normal-text: var(--gray1);
                --success-bg: hsl(150, 100%, 6%);
                --success-border: hsl(147, 100%, 12%);
                --success-text: hsl(150, 86%, 65%);
                --info-bg: hsl(215, 100%, 6%);
                --info-border: hsl(223, 100%, 12%);
                --info-text: hsl(216, 87%, 65%);
                --warning-bg: hsl(64, 100%, 6%);
                --warning-border: hsl(60, 100%, 12%);
                --warning-text: hsl(46, 87%, 65%);
                --error-bg: hsl(358, 76%, 10%);
                --error-border: hsl(357, 89%, 16%);
                --error-text: hsl(358, 100%, 81%)
            }

            [data-sonner-toaster][data-theme=dark] [data-sonner-toast] [data-close-button] {
                background: var(--normal-bg);
                border-color: var(--normal-border);
                color: var(--normal-text)
            }

            [data-sonner-toaster][data-theme=dark] [data-sonner-toast] [data-close-button]:hover {
                background: var(--normal-bg-hover);
                border-color: var(--normal-border-hover)
            }

            [data-rich-colors=true][data-sonner-toast][data-type=success],
            [data-rich-colors=true][data-sonner-toast][data-type=success] [data-close-button] {
                background: var(--success-bg);
                border-color: var(--success-border);
                color: var(--success-text)
            }

            [data-rich-colors=true][data-sonner-toast][data-type=info],
            [data-rich-colors=true][data-sonner-toast][data-type=info] [data-close-button] {
                background: var(--info-bg);
                border-color: var(--info-border);
                color: var(--info-text)
            }

            [data-rich-colors=true][data-sonner-toast][data-type=warning],
            [data-rich-colors=true][data-sonner-toast][data-type=warning] [data-close-button] {
                background: var(--warning-bg);
                border-color: var(--warning-border);
                color: var(--warning-text)
            }

            [data-rich-colors=true][data-sonner-toast][data-type=error],
            [data-rich-colors=true][data-sonner-toast][data-type=error] [data-close-button] {
                background: var(--error-bg);
                border-color: var(--error-border);
                color: var(--error-text)
            }

            .sonner-loading-wrapper {
                --size: 16px;
                height: var(--size);
                width: var(--size);
                position: absolute;
                inset: 0;
                z-index: 10
            }

            .sonner-loading-wrapper[data-visible=false] {
                transform-origin: center;
                animation: sonner-fade-out .2s ease forwards
            }

            .sonner-spinner {
                position: relative;
                top: 50%;
                left: 50%;
                height: var(--size);
                width: var(--size)
            }

            .sonner-loading-bar {
                animation: sonner-spin 1.2s linear infinite;
                background: var(--gray11);
                border-radius: 6px;
                height: 8%;
                left: -10%;
                position: absolute;
                top: -3.9%;
                width: 24%
            }

            .sonner-loading-bar:nth-child(1) {
                animation-delay: -1.2s;
                transform: rotate(.0001deg) translate(146%)
            }

            .sonner-loading-bar:nth-child(2) {
                animation-delay: -1.1s;
                transform: rotate(30deg) translate(146%)
            }

            .sonner-loading-bar:nth-child(3) {
                animation-delay: -1s;
                transform: rotate(60deg) translate(146%)
            }

            .sonner-loading-bar:nth-child(4) {
                animation-delay: -.9s;
                transform: rotate(90deg) translate(146%)
            }

            .sonner-loading-bar:nth-child(5) {
                animation-delay: -.8s;
                transform: rotate(120deg) translate(146%)
            }

            .sonner-loading-bar:nth-child(6) {
                animation-delay: -.7s;
                transform: rotate(150deg) translate(146%)
            }

            .sonner-loading-bar:nth-child(7) {
                animation-delay: -.6s;
                transform: rotate(180deg) translate(146%)
            }

            .sonner-loading-bar:nth-child(8) {
                animation-delay: -.5s;
                transform: rotate(210deg) translate(146%)
            }

            .sonner-loading-bar:nth-child(9) {
                animation-delay: -.4s;
                transform: rotate(240deg) translate(146%)
            }

            .sonner-loading-bar:nth-child(10) {
                animation-delay: -.3s;
                transform: rotate(270deg) translate(146%)
            }

            .sonner-loading-bar:nth-child(11) {
                animation-delay: -.2s;
                transform: rotate(300deg) translate(146%)
            }

            .sonner-loading-bar:nth-child(12) {
                animation-delay: -.1s;
                transform: rotate(330deg) translate(146%)
            }

            @keyframes sonner-fade-in {
                0% {
                    opacity: 0;
                    transform: scale(.8)
                }

                to {
                    opacity: 1;
                    transform: scale(1)
                }
            }

            @keyframes sonner-fade-out {
                0% {
                    opacity: 1;
                    transform: scale(1)
                }

                to {
                    opacity: 0;
                    transform: scale(.8)
                }
            }

            @keyframes sonner-spin {
                0% {
                    opacity: 1
                }

                to {
                    opacity: .15
                }
            }

            @media (prefers-reduced-motion) {

                [data-sonner-toast],
                [data-sonner-toast]>*,
                .sonner-loading-bar {
                    transition: none !important;
                    animation: none !important
                }
            }

            .sonner-loader {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                transform-origin: center;
                transition: opacity .2s, transform .2s
            }

            .sonner-loader[data-visible=false] {
                opacity: 0;
                transform: scale(.8) translate(-50%, -50%)
            }
        </style>
</head>

<body>
    <div id="root">
        <div role="region" aria-label="Notifications (F8)" tabindex="-1" style="pointer-events: none;">
            <ol tabindex="-1" data-lov-id="src/components/ui/toaster.tsx:21:6" data-lov-name="ToastViewport"
                data-component-path="src/components/ui/toaster.tsx" data-component-line="21"
                data-component-file="toaster.tsx" data-component-name="ToastViewport" data-component-content="%7B%7D"
                class="fixed top-0 z-[100] flex max-h-screen w-full flex-col-reverse p-4 sm:bottom-0 sm:right-0 sm:top-auto sm:flex-col md:max-w-[420px]">
            </ol>
        </div>
        <section aria-label="Notifications alt+T" tabindex="-1" aria-live="polite" aria-relevant="additions text"
            aria-atomic="false"></section>
        <div data-lov-id="src/pages/Dashboard.tsx:71:4" data-lov-name="div"
            data-component-path="src/pages/Dashboard.tsx" data-component-line="71" data-component-file="Dashboard.tsx"
            data-component-name="div"
            data-component-content="%7B%22className%22%3A%22min-h-screen%20bg-background%22%7D"
            class="min-h-screen bg-background">


            <?php  include('../components/nav.php')   ?>


            <div data-lov-id="src/pages/Dashboard.tsx:73:6" data-lov-name="div"
                data-component-path="src/pages/Dashboard.tsx" data-component-line="73"
                data-component-file="Dashboard.tsx" data-component-name="div"
                data-component-content="%7B%22className%22%3A%22container%20mx-auto%20px-4%20py-8%22%7D"
                class="container mx-auto px-4 py-8">
                <div data-lov-id="src/pages/Dashboard.tsx:74:8" data-lov-name="div"
                    data-component-path="src/pages/Dashboard.tsx" data-component-line="74"
                    data-component-file="Dashboard.tsx" data-component-name="div"
                    data-component-content="%7B%22className%22%3A%22mb-8%22%7D" class="mb-8">
                    <h2 data-lov-id="src/pages/Dashboard.tsx:75:10" data-lov-name="h2"
                        data-component-path="src/pages/Dashboard.tsx" data-component-line="75"
                        data-component-file="Dashboard.tsx" data-component-name="h2"
                        data-component-content="%7B%22text%22%3A%22Dashboard%22%2C%22className%22%3A%22text-3xl%20font-bold%20tracking-tight%22%7D"
                        class="text-3xl font-bold tracking-tight">Dashboard</h2>
                    <p data-lov-id="src/pages/Dashboard.tsx:76:10" data-lov-name="p"
                        data-component-path="src/pages/Dashboard.tsx" data-component-line="76"
                        data-component-file="Dashboard.tsx" data-component-name="p"
                        data-component-content="%7B%22text%22%3A%22Overview%20of%20your%20email%20campaigns%22%2C%22className%22%3A%22text-muted-foreground%20mt-1%22%7D"
                        class="text-muted-foreground mt-1">Overview of your email campaigns</p>
                </div>

                <?php 


                
                    // get today's total sent count;
                    $sql1 = mysqli_query($connection, "SELECT * FROM `sent_email_list` WHERE  `status` = 'success' AND `user` = '$id' ");
                    $sql2 = mysqli_query($connection, "SELECT * FROM `sent_email_list` WHERE  `status` = 'seen' AND `user` = '$id' ");

                    $total_sent = mysqli_num_rows($sql1) + mysqli_num_rows($sql2);
                    $seen = mysqli_num_rows($sql2);
                    $success = mysqli_num_rows($sql1);

                
                ?>

                <div class="grid gap-4 md:grid-cols-3 mb-8">
                    <div
                        class="rounded-lg border text-card-foreground shadow-sm transition-all duration-300 bg-card hover:shadow-elevated">
                        <div class="space-y-1.5 p-6 flex flex-row items-center justify-between pb-2">
                            <h3 class="tracking-tight text-sm font-medium text-muted-foreground">Total Sent</h3>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-mail h-4 w-4 text-muted-foreground">
                                <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                                <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                            </svg>
                        </div>
                        <div class="p-6 pt-0">
                            <div class="text-3xl font-bold"><?php echo $total_sent  ?></div>
                            <p class="text-xs text-muted-foreground mt-1">Today's emails</p>
                        </div>
                    </div>

                    <div
                        class="rounded-lg border bg-card text-card-foreground shadow-sm transition-all duration-300 bg-gradient-to-br from-success/10 to-success/5 border-success/20">
                        <div class="space-y-1.5 p-6 flex flex-row items-center justify-between pb-2">
                            <h3 class="tracking-tight text-sm font-medium text-muted-foreground">Unread Emails</h3>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-circle-check h-4 w-4 text-success">
                                <circle cx="12" cy="12" r="10"></circle>
                                <path d="m9 12 2 2 4-4"></path>
                            </svg>
                        </div>
                        <div class="p-6 pt-0">
                            <div class="text-3xl font-bold"><?php echo $success  ?></div>
                            <p class="text-xs text-muted-foreground mt-1">time sencitive</p>
                        </div>
                    </div>

                    <div class="rounded-lg border border-green-500 text-card-foreground shadow-sm transition-all duration-300"
                        style="background-color: rgba(144, 238, 144, 0.2);">
                        <!-- light green inside -->
                        <div class="space-y-1.5 p-6 flex flex-row items-center justify-between pb-2">
                            <h3 class="tracking-tight text-sm font-medium text-muted-foreground">Seen Emails</h3>
                            <!-- Green Check Icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" class="lucide lucide-circle-check h-4 w-4 text-green-500">
                                <circle cx="12" cy="12" r="10"></circle>
                                <path d="m9 12 2 2 4-4"></path>
                            </svg>
                        </div>
                        <div class="p-6 pt-0">
                            <div class="text-3xl font-bold"><?php echo $seen ?></div>
                            <p class="text-xs text-muted-foreground mt-1">time sensitive</p>
                        </div>
                    </div>


                </div>








                <div data-lov-id="src/pages/Dashboard.tsx:103:8" data-lov-name="Card"
                    data-component-path="src/pages/Dashboard.tsx" data-component-line="103"
                    data-component-file="Dashboard.tsx" data-component-name="Card" data-component-content="%7B%7D"
                    class="rounded-lg border bg-card text-card-foreground shadow-sm">
                    <div data-lov-id="src/pages/Dashboard.tsx:104:10" data-lov-name="CardHeader"
                        data-component-path="src/pages/Dashboard.tsx" data-component-line="104"
                        data-component-file="Dashboard.tsx" data-component-name="CardHeader"
                        data-component-content="%7B%7D" class="flex flex-col space-y-1.5 p-6">
                        <h3 data-lov-id="src/pages/Dashboard.tsx:105:12" data-lov-name="CardTitle"
                            data-component-path="src/pages/Dashboard.tsx" data-component-line="105"
                            data-component-file="Dashboard.tsx" data-component-name="CardTitle"
                            data-component-content="%7B%22text%22%3A%22Getting%20Started%22%7D"
                            class="text-2xl font-semibold leading-none tracking-tight">Getting Started</h3>
                        <p data-lov-id="src/pages/Dashboard.tsx:106:12" data-lov-name="CardDescription"
                            data-component-path="src/pages/Dashboard.tsx" data-component-line="106"
                            data-component-file="Dashboard.tsx" data-component-name="CardDescription"
                            data-component-content="%7B%22text%22%3A%22Follow%20these%20steps%20to%20start%20sending%20bulk%20emails%22%7D"
                            class="text-sm text-muted-foreground">Follow these steps to start sending bulk emails</p>
                    </div>
                    <div data-lov-id="src/pages/Dashboard.tsx:110:10" data-lov-name="CardContent"
                        data-component-path="src/pages/Dashboard.tsx" data-component-line="110"
                        data-component-file="Dashboard.tsx" data-component-name="CardContent"
                        data-component-content="%7B%22className%22%3A%22space-y-4%22%7D" class="p-6 pt-0 space-y-4">
                        <div data-lov-id="src/pages/Dashboard.tsx:111:12" data-lov-name="div"
                            data-component-path="src/pages/Dashboard.tsx" data-component-line="111"
                            data-component-file="Dashboard.tsx" data-component-name="div"
                            data-component-content="%7B%22className%22%3A%22flex%20items-start%20space-x-3%22%7D"
                            class="flex items-start space-x-3">
                            <div data-lov-id="src/pages/Dashboard.tsx:112:14" data-lov-name="div"
                                data-component-path="src/pages/Dashboard.tsx" data-component-line="112"
                                data-component-file="Dashboard.tsx" data-component-name="div"
                                data-component-content="%7B%22text%22%3A%221%22%2C%22className%22%3A%22flex-shrink-0%20w-6%20h-6%20rounded-full%20bg-primary%20text-primary-foreground%20flex%20items-center%20justify-center%20text-sm%20font-bold%22%7D"
                                class="flex-shrink-0 w-6 h-6 rounded-full bg-primary text-primary-foreground flex items-center justify-center text-sm font-bold">
                                1</div>
                            <div data-lov-id="src/pages/Dashboard.tsx:115:14" data-lov-name="div"
                                data-component-path="src/pages/Dashboard.tsx" data-component-line="115"
                                data-component-file="Dashboard.tsx" data-component-name="div"
                                data-component-content="%7B%7D">
                                <h4 data-lov-id="src/pages/Dashboard.tsx:116:16" data-lov-name="h4"
                                    data-component-path="src/pages/Dashboard.tsx" data-component-line="116"
                                    data-component-file="Dashboard.tsx" data-component-name="h4"
                                    data-component-content="%7B%22text%22%3A%22Configure%20SMTP%20Settings%22%2C%22className%22%3A%22font-semibold%22%7D"
                                    class="font-semibold">Configure SMTP Settings</h4>
                                <p data-lov-id="src/pages/Dashboard.tsx:117:16" data-lov-name="p"
                                    data-component-path="src/pages/Dashboard.tsx" data-component-line="117"
                                    data-component-file="Dashboard.tsx" data-component-name="p"
                                    data-component-content="%7B%22text%22%3A%22Go%20to%20Settings%20and%20add%20your%20email%20credentials%20to%20enable%20sending%22%2C%22className%22%3A%22text-sm%20text-muted-foreground%22%7D"
                                    class="text-sm text-muted-foreground">Go to Settings and add your email credentials
                                    to enable sending</p>
                            </div>
                        </div>
                        <div data-lov-id="src/pages/Dashboard.tsx:122:12" data-lov-name="div"
                            data-component-path="src/pages/Dashboard.tsx" data-component-line="122"
                            data-component-file="Dashboard.tsx" data-component-name="div"
                            data-component-content="%7B%22className%22%3A%22flex%20items-start%20space-x-3%22%7D"
                            class="flex items-start space-x-3">
                            <div data-lov-id="src/pages/Dashboard.tsx:123:14" data-lov-name="div"
                                data-component-path="src/pages/Dashboard.tsx" data-component-line="123"
                                data-component-file="Dashboard.tsx" data-component-name="div"
                                data-component-content="%7B%22text%22%3A%222%22%2C%22className%22%3A%22flex-shrink-0%20w-6%20h-6%20rounded-full%20bg-primary%20text-primary-foreground%20flex%20items-center%20justify-center%20text-sm%20font-bold%22%7D"
                                class="flex-shrink-0 w-6 h-6 rounded-full bg-primary text-primary-foreground flex items-center justify-center text-sm font-bold">
                                2</div>
                            <div data-lov-id="src/pages/Dashboard.tsx:126:14" data-lov-name="div"
                                data-component-path="src/pages/Dashboard.tsx" data-component-line="126"
                                data-component-file="Dashboard.tsx" data-component-name="div"
                                data-component-content="%7B%7D">
                                <h4 data-lov-id="src/pages/Dashboard.tsx:127:16" data-lov-name="h4"
                                    data-component-path="src/pages/Dashboard.tsx" data-component-line="127"
                                    data-component-file="Dashboard.tsx" data-component-name="h4"
                                    data-component-content="%7B%22text%22%3A%22Compose%20Your%20Email%22%2C%22className%22%3A%22font-semibold%22%7D"
                                    class="font-semibold">Compose Your Email</h4>
                                <p data-lov-id="src/pages/Dashboard.tsx:128:16" data-lov-name="p"
                                    data-component-path="src/pages/Dashboard.tsx" data-component-line="128"
                                    data-component-file="Dashboard.tsx" data-component-name="p"
                                    data-component-content="%7B%22text%22%3A%22Navigate%20to%20Send%20Email%20to%20create%20your%20bulk%20email%20campaign%22%2C%22className%22%3A%22text-sm%20text-muted-foreground%22%7D"
                                    class="text-sm text-muted-foreground">Navigate to Send Email to create your bulk
                                    email campaign</p>
                            </div>
                        </div>
                        <div data-lov-id="src/pages/Dashboard.tsx:133:12" data-lov-name="div"
                            data-component-path="src/pages/Dashboard.tsx" data-component-line="133"
                            data-component-file="Dashboard.tsx" data-component-name="div"
                            data-component-content="%7B%22className%22%3A%22flex%20items-start%20space-x-3%22%7D"
                            class="flex items-start space-x-3">
                            <div data-lov-id="src/pages/Dashboard.tsx:134:14" data-lov-name="div"
                                data-component-path="src/pages/Dashboard.tsx" data-component-line="134"
                                data-component-file="Dashboard.tsx" data-component-name="div"
                                data-component-content="%7B%22text%22%3A%223%22%2C%22className%22%3A%22flex-shrink-0%20w-6%20h-6%20rounded-full%20bg-primary%20text-primary-foreground%20flex%20items-center%20justify-center%20text-sm%20font-bold%22%7D"
                                class="flex-shrink-0 w-6 h-6 rounded-full bg-primary text-primary-foreground flex items-center justify-center text-sm font-bold">
                                3</div>
                            <div data-lov-id="src/pages/Dashboard.tsx:137:14" data-lov-name="div"
                                data-component-path="src/pages/Dashboard.tsx" data-component-line="137"
                                data-component-file="Dashboard.tsx" data-component-name="div"
                                data-component-content="%7B%7D">
                                <h4 data-lov-id="src/pages/Dashboard.tsx:138:16" data-lov-name="h4"
                                    data-component-path="src/pages/Dashboard.tsx" data-component-line="138"
                                    data-component-file="Dashboard.tsx" data-component-name="h4"
                                    data-component-content="%7B%22text%22%3A%22Track%20Results%22%2C%22className%22%3A%22font-semibold%22%7D"
                                    class="font-semibold">Track Results</h4>
                                <p data-lov-id="src/pages/Dashboard.tsx:139:16" data-lov-name="p"
                                    data-component-path="src/pages/Dashboard.tsx" data-component-line="139"
                                    data-component-file="Dashboard.tsx" data-component-name="p"
                                    data-component-content="%7B%22text%22%3A%22Monitor%20your%20campaign%20performance%20right%20here%20on%20the%20dashboard%22%2C%22className%22%3A%22text-sm%20text-muted-foreground%22%7D"
                                    class="text-sm text-muted-foreground">Monitor your campaign performance right here
                                    on the dashboard</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.gpteng.co/lovable.js" type="module"></script>



</body>

</html>
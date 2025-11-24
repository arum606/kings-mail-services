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
        <div data-lov-id="src/pages/Logs.tsx:76:4" data-lov-name="div" data-component-path="src/pages/Logs.tsx"
            data-component-line="76" data-component-file="Logs.tsx" data-component-name="div"
            data-component-content="%7B%22className%22%3A%22min-h-screen%20bg-background%22%7D"
            class="min-h-screen bg-background">


            <?php  include('../components/nav.php')   ?>


            <div data-lov-id="src/pages/Logs.tsx:78:6" data-lov-name="div" data-component-path="src/pages/Logs.tsx"
                data-component-line="78" data-component-file="Logs.tsx" data-component-name="div"
                data-component-content="%7B%22className%22%3A%22container%20mx-auto%20px-4%20py-8%22%7D"
                class="container mx-auto px-4 py-8">
                <div data-lov-id="src/pages/Logs.tsx:79:8" data-lov-name="div" data-component-path="src/pages/Logs.tsx"
                    data-component-line="79" data-component-file="Logs.tsx" data-component-name="div"
                    data-component-content="%7B%22className%22%3A%22mb-8%22%7D" class="mb-8">
                    <h2 data-lov-id="src/pages/Logs.tsx:80:10" data-lov-name="h2"
                        data-component-path="src/pages/Logs.tsx" data-component-line="80" data-component-file="Logs.tsx"
                        data-component-name="h2"
                        data-component-content="%7B%22text%22%3A%22Email%20Logs%22%2C%22className%22%3A%22text-3xl%20font-bold%20tracking-tight%22%7D"
                        class="text-3xl font-bold tracking-tight">Email Logs</h2>
                    <p data-lov-id="src/pages/Logs.tsx:81:10" data-lov-name="p" data-component-path="src/pages/Logs.tsx"
                        data-component-line="81" data-component-file="Logs.tsx" data-component-name="p"
                        data-component-content="%7B%22text%22%3A%22View%20all%20your%20email%20campaign%20history%22%2C%22className%22%3A%22text-muted-foreground%20mt-1%22%7D"
                        class="text-muted-foreground mt-1">View all your email campaign history</p>
                </div>
                <div data-lov-id="src/pages/Logs.tsx:84:8" data-lov-name="Card" data-component-path="src/pages/Logs.tsx"
                    data-component-line="84" data-component-file="Logs.tsx" data-component-name="Card"
                    data-component-content="%7B%7D" class="rounded-lg border bg-card text-card-foreground shadow-sm">




                    <form method="GET" class="inline-block">
                        <input type="date" name="preview_date"
                            value="<?php echo isset($_GET['preview_date']) ? $_GET['preview_date'] : date('Y-m-d'); ?>"
                            class="rounded-lg border border-blue-500 bg-blue-100 text-blue-800 px-3 py-1 shadow-sm text-sm transition-all duration-200 hover:bg-blue-200 cursor-pointer"
                            style="border-color: #3b82f6; color: #1e40af;" onchange="this.form.submit()">
                    </form>













                    <div data-lov-id="src/pages/Logs.tsx:85:10" data-lov-name="CardHeader"
                        data-component-path="src/pages/Logs.tsx" data-component-line="85" data-component-file="Logs.tsx"
                        data-component-name="CardHeader" data-component-content="%7B%7D"
                        class="flex flex-col space-y-1.5 p-6">
                        <h3 data-lov-id="src/pages/Logs.tsx:86:12" data-lov-name="CardTitle"
                            data-component-path="src/pages/Logs.tsx" data-component-line="86"
                            data-component-file="Logs.tsx" data-component-name="CardTitle"
                            data-component-content="%7B%22text%22%3A%22Campaign%20History%22%7D"
                            class="text-2xl font-semibold leading-none tracking-tight">Campaign History</h3>
                        <p data-lov-id="src/pages/Logs.tsx:87:12" data-lov-name="CardDescription"
                            data-component-path="src/pages/Logs.tsx" data-component-line="87"
                            data-component-file="Logs.tsx" data-component-name="CardDescription"
                            data-component-content="%7B%22text%22%3A%22Complete%20history%20of%20all%20email%20campaigns%20sent%22%7D"
                            class="text-sm text-muted-foreground">Complete history of all email campaigns sent</p>
                    </div>
                    <div data-lov-id="src/pages/Logs.tsx:91:10" data-lov-name="CardContent"
                        data-component-path="src/pages/Logs.tsx" data-component-line="91" data-component-file="Logs.tsx"
                        data-component-name="CardContent" data-component-content="%7B%7D" class="p-6 pt-0">
                        <div data-lov-id="src/pages/Logs.tsx:97:14" data-lov-name="div"
                            data-component-path="src/pages/Logs.tsx" data-component-line="97"
                            data-component-file="Logs.tsx" data-component-name="div"
                            data-component-content="%7B%22className%22%3A%22overflow-x-auto%22%7D"
                            class="overflow-x-auto">
                            <div data-lov-id="src/components/ui/table.tsx:7:4" data-lov-name="div"
                                data-component-path="src/components/ui/table.tsx" data-component-line="7"
                                data-component-file="table.tsx" data-component-name="div"
                                data-component-content="%7B%22className%22%3A%22relative%20w-full%20overflow-auto%22%7D"
                                class="relative w-full overflow-auto">

                                <table class="w-full caption-bottom text-sm">
                                    <thead class="[&_tr]:border-b">
                                        <tr
                                            class="border-b transition-colors data-[state=selected]:bg-muted hover:bg-muted/50">
                                            <th
                                                class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&:has([role=checkbox])]:pr-0">
                                                Date &amp; Time
                                            </th>
                                            <th
                                                class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&:has([role=checkbox])]:pr-0">
                                                Subject
                                            </th>
                                            <th
                                                class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&:has([role=checkbox])]:pr-0">
                                                Recipients
                                            </th>
                                            <th
                                                class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&:has([role=checkbox])]:pr-0">
                                                Unread
                                            </th>
                                            <th
                                                class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&:has([role=checkbox])]:pr-0">
                                                Seen
                                            </th>

                                            <th
                                                class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&:has([role=checkbox])]:pr-0">
                                                Failed
                                            </th>
                                            <th
                                                class="h-12 px-4 text-left align-middle font-medium text-muted-foreground [&:has([role=checkbox])]:pr-0">
                                                Details
                                            </th>
                                        </tr>
                                    </thead>


                                        <?php 

                                            if (!isset($_GET['preview_date'])) {
                                                $date = date('Y-m-d'); // today
                                            } else {
                                                $date = $_GET['preview_date'];
                                            }

                                            // Escape date to prevent SQL injection
                                            $date = mysqli_real_escape_string($connection, $date);

                                            // Corrected SQL with accurate sent, seen, failed counters
                                            $sql = mysqli_query($connection, "
                                                SELECT 
                                                    h.*,
                                                    SUM(CASE WHEN s.status = 'success' THEN 1 ELSE 0 END) AS sent_count,
                                                    SUM(CASE WHEN s.status = 'seen' THEN 1 ELSE 0 END) AS seen_count,
                                                    SUM(CASE WHEN s.status = 'failed' THEN 1 ELSE 0 END) AS failed_count
                                                FROM history h
                                                LEFT JOIN sent_email_list s ON s.history_id = h.id
                                                WHERE h.user = '$id' AND DATE(h.date) = '$date'
                                                GROUP BY h.id
                                                ORDER BY h.id DESC
                                            ");

                                            if ($sql && mysqli_num_rows($sql) > 0) {
                                                echo '<tbody class="[&_tr:last-child]:border-0">';

                                                while ($row = mysqli_fetch_assoc($sql)) {

                                                    $date = htmlspecialchars($row['date']);
                                                    $url = '../preview/index.php?id=' . urlencode($row['id']);
                                                    $subject = htmlspecialchars($row['subject']);
                                                    $recipients = intval($row['receipant']);

                                                    // Correct counters
                                                    $sent = intval($row['sent_count']);
                                                    $seen = intval($row['seen_count']);
                                                    $failed = intval($row['failed_count']);

                                                    // Sent badge
                                                    $sentBadge = '
                                                        <div class="inline-flex items-center rounded-full px-2.5 py-0.5 
                                                        text-xs font-semibold" style="background-color:#3b82f6; color:#fff;">
                                                            ' . $sent . '
                                                        </div>';

                                                    // Seen badge
                                                    $seenBadge = '
                                                        <div class="inline-flex items-center rounded-full px-2.5 py-0.5 
                                                        text-xs font-semibold" style="background-color:green; color:#fff;">
                                                            ' . $seen . '
                                                        </div>';

                                                    // Failed badge
                                                    $failedBadge = '
                                                        <div class="inline-flex items-center rounded-full px-2.5 py-0.5 
                                                        text-xs font-semibold" style="background-color:red; color:#fff;">
                                                            ' . $failed . '
                                                        </div>';

                                                    echo '<tr class="border-b hover:bg-muted/50">';
                                                    echo '<td class="p-4 font-medium">' . $date . '</td>';
                                                    echo '<td class="p-4">' . $subject . '</td>';
                                                    echo '<td class="p-4">' . $recipients . '</td>';
                                                    echo '<td class="p-4">' . $sentBadge . '</td>';
                                                    echo '<td class="p-4">' . $seenBadge . '</td>';
                                                    echo '<td class="p-4">' . $failedBadge . '</td>';
                                                    echo '<td class="p-4"><a href="' . $url . '" 
                                                        class="inline-block rounded-lg px-3 py-1 text-sm"
                                                        style="background-color:#3b82f6; color:#fff;">
                                                        Preview</a></td>';
                                                    echo '</tr>';
                                                }

                                                echo '</tbody>';

                                            } else {
                                                echo '<tbody class="[&_tr:last-child]:border-0">';
                                                echo '<tr class="border-b hover:bg-muted/50">';
                                                echo '<td class="p-4 font-medium" colspan="7">No logs found.</td>';
                                                echo '</tr>';
                                                echo '</tbody>';
                                            }

                                        ?>



                                </table>
                                </table>

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
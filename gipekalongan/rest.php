<!DOCTYPE html>

<!-- This code was generated using AnimaApp.com. 
This code is a high-fidelity prototype.
Get developer-friendly React or HTML/CSS code for this project at: https://projects.animaapp.com?utm_source=hosted-code 
31/01/2025 04:49:11 -->

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=1920, maximum-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="https://animaproject.s3.amazonaws.com/home/favicon.png">
    <meta name="og:type" content="website">
    <meta name="twitter:card" content="photo">
    <script id="anima-load-script" src="load.js"></script>
    <script id="anima-hotspots-script" src="hotspots.js"></script>
    <script id="anima-overrides-script" src="overrides.js"></script>
    <script src="https://animaapp.s3.amazonaws.com/js/timeline.js"></script>
    <style>
        @import url("https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css");

        @import url("https://fonts.googleapis.com/css?family=Fjalla+One:400");


        @font-face {
            font-family: "Times New Roman-Regular";
            font-style: normal;
            font-weight: 400;
            src: url('https://anima-uploads.s3.amazonaws.com/projects/636cd5107dcef7c2a83cb8cc/fonts/timesnewromanpsmt.ttf') format("truetype");
        }

        /* The following line is used to measure usage of this code. You can remove it if you want. */
        @import url("https://px.animaapp.com/6789c1d4c445ac407d107902.6789c1d5c445ac407d107905.6p4yvya.hch.png");


        .screen textarea:focus,
        .screen input:focus {
            outline: none;
        }

        .screen * {
            -webkit-font-smoothing: antialiased;
            box-sizing: border-box;
        }

        .screen div {
            -webkit-text-size-adjust: none;
        }

        .component-wrapper a {
            display: contents;
            pointer-events: auto;
            text-decoration: none;
        }

        .component-wrapper * {
            -webkit-font-smoothing: antialiased;
            box-sizing: border-box;
            pointer-events: none;
        }

        .component-wrapper a *,
        .component-wrapper input,
        .component-wrapper video,
        .component-wrapper iframe {
            pointer-events: auto;
        }

        .component-wrapper.not-ready,
        .component-wrapper.not-ready * {
            visibility: hidden !important;
        }

        .screen a {
            display: contents;
            text-decoration: none;
        }

        .full-width-a {
            width: 100%;
        }

        .full-height-a {
            height: 100%;
        }

        .container-center-vertical {
            align-items: center;
            display: flex;
            flex-direction: row;
            height: 100%;
            pointer-events: none;
        }

        .container-center-vertical>* {
            flex-shrink: 0;
            pointer-events: auto;
        }

        .container-center-horizontal {
            display: flex;
            flex-direction: row;
            justify-content: center;
            pointer-events: none;
            width: 100%;
        }

        .container-center-horizontal>* {
            flex-shrink: 0;
            pointer-events: auto;
        }

        .auto-animated div {
            --z-index: -1;
            opacity: 0;
            position: absolute;
        }

        .auto-animated input {
            --z-index: -1;
            opacity: 0;
            position: absolute;
        }

        .auto-animated .container-center-vertical,
        .auto-animated .container-center-horizontal {
            opacity: 1;
        }

        .overlay-base {
            display: none;
            height: 100%;
            opacity: 0;
            position: fixed;
            top: 0;
            width: 100%;
        }

        .overlay-base.animate-appear {
            align-items: center;
            animation: reveal 0.3s ease-in-out 1 normal forwards;
            display: flex;
            flex-direction: column;
            justify-content: center;
            opacity: 0;
        }

        .overlay-base.animate-disappear {
            animation: reveal 0.3s ease-in-out 1 reverse forwards;
            display: block;
            opacity: 1;
            pointer-events: none;
        }

        .overlay-base.animate-disappear * {
            pointer-events: none;
        }

        @keyframes reveal {
            from {
                opacity: 0
            }

            to {
                opacity: 1
            }
        }

        .animate-nodelay {
            animation-delay: 0s;
        }

        .align-self-flex-start {
            align-self: flex-start;
        }

        .align-self-flex-end {
            align-self: flex-end;
        }

        .align-self-flex-center {
            align-self: flex-center;
        }

        .valign-text-middle {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .valign-text-bottom {
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
        }

        input:focus {
            outline: none;
        }

        .listeners-active,
        .listeners-active * {
            pointer-events: auto;
        }

        .hidden,
        .hidden * {
            pointer-events: none;
            visibility: hidden;
        }

        .smart-layers-pointers,
        .smart-layers-pointers * {
            pointer-events: auto;
            visibility: visible;
        }

        .listeners-active-click,
        .listeners-active-click * {
            cursor: pointer;
        }

        * {
            box-sizing: border-box;
        }

        :root {
            --black: #000000;
            --green: #0cff00;
            --red: #ff0004;
            --red-2: #ff0000;
            --white: #ffffff;

            --font-size-l: 24px;
            --font-size-m: 16px;
            --font-size-s: 12px;
            --font-size-xl: 32px;
            --font-size-xxl: 48px;

            --font-family-fjalla_one: "Fjalla One", Helvetica;
            --font-family-times_new_roman-regular: "Times New Roman-Regular", Helvetica;
        }

        .fjallaone-normal-black-16px {
            color: var(--black);
            font-family: var(--font-family-fjalla_one);
            font-size: var(--font-size-m);
            font-style: normal;
            font-weight: 400;
        }

        .timesnewroman-regular-normal-white-32px {
            color: var(--white);
            font-family: var(--font-family-times_new_roman-regular);
            font-size: var(--font-size-xl);
            font-style: normal;
            font-weight: 400;
        }

        .fjallaone-normal-black-24px {
            color: var(--black);
            font-family: var(--font-family-fjalla_one);
            font-size: var(--font-size-l);
            font-style: normal;
            font-weight: 400;
        }

        .fjallaone-normal-white-32px {
            color: var(--white);
            font-family: var(--font-family-fjalla_one);
            font-size: var(--font-size-xl);
            font-style: normal;
            font-weight: 400;
        }

        :root {}


        /* screen - desktop-1 */

        .desktop-1 {
            background-color: #252424;
            height: 1235px;
            overflow: hidden;
            overflow-x: hidden;
            position: relative;
            width: 1920px;
        }

        .desktop-1 .alarm-Ys8k0x {
            background-color: transparent;
            height: 892px;
            left: 494px;
            position: absolute;
            top: 152px;
            width: 1410px;
        }

        .desktop-1 .signal50-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 11px;
            position: absolute;
            top: 731px;
            width: 242px;
        }

        .desktop-1 .rectangle-50-XqiMjV {
            background-color: var(--green);
            height: 33px;
            left: 0px;
            position: absolute;
            top: 0px;
            width: 240px;
        }

        .desktop-1 .signal-50-XqiMjV {
            background-color: transparent;
            height: 23px;
            left: 11px;
            letter-spacing: 1.28px;
            line-height: 20.1px;
            position: absolute;
            text-align: center;
            top: 5px;
            white-space: nowrap;
            width: 215px;
        }

        .desktop-1 .signal45-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 11px;
            position: absolute;
            top: 688px;
            width: 242px;
        }

        .desktop-1 .rectangle-45-8cinyG {
            background-color: var(--green);
            height: 33px;
            left: 0px;
            position: absolute;
            top: 0px;
            width: 240px;
        }

        .desktop-1 .signal-45-8cinyG {
            background-color: transparent;
            height: 23px;
            left: 11px;
            letter-spacing: 1.28px;
            line-height: 20.1px;
            position: absolute;
            text-align: center;
            top: 5px;
            white-space: nowrap;
            width: 215px;
        }

        .desktop-1 .signal51-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 297px;
            position: absolute;
            top: 732px;
            width: 242px;
        }

        .desktop-1 .rectangle-51-VnfSgW {
            background-color: var(--green);
            height: 33px;
            left: 0px;
            position: absolute;
            top: 0px;
            width: 240px;
        }

        .desktop-1 .signal-51-VnfSgW {
            background-color: transparent;
            height: 23px;
            left: 11px;
            letter-spacing: 1.28px;
            line-height: 20.1px;
            position: absolute;
            text-align: center;
            top: 5px;
            white-space: nowrap;
            width: 215px;
        }

        .desktop-1 .signal46-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 297px;
            position: absolute;
            top: 689px;
            width: 242px;
        }

        .desktop-1 .rectangle-46-1beIAb {
            background-color: var(--green);
            height: 33px;
            left: 0px;
            position: absolute;
            top: 0px;
            width: 240px;
        }

        .desktop-1 .signal-46-1beIAb {
            background-color: transparent;
            height: 23px;
            left: 11px;
            letter-spacing: 1.28px;
            line-height: 20.1px;
            position: absolute;
            text-align: center;
            top: 5px;
            white-space: nowrap;
            width: 215px;
        }

        .desktop-1 .signal53-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 869px;
            position: absolute;
            top: 732px;
            width: 242px;
        }

        .desktop-1 .rectangle-53-ce6cbq {
            background-color: var(--green);
            height: 33px;
            left: 0px;
            position: absolute;
            top: 0px;
            width: 240px;
        }

        .desktop-1 .signal-53-ce6cbq {
            background-color: transparent;
            height: 23px;
            left: 11px;
            letter-spacing: 1.28px;
            line-height: 20.1px;
            position: absolute;
            text-align: center;
            top: 5px;
            white-space: nowrap;
            width: 215px;
        }

        .desktop-1 .signal48-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 869px;
            position: absolute;
            top: 689px;
            width: 242px;
        }

        .desktop-1 .rectangle-48-5IJ1Hb {
            background-color: var(--green);
            height: 33px;
            left: 0px;
            position: absolute;
            top: 0px;
            width: 240px;
        }

        .desktop-1 .signal-48-5IJ1Hb {
            background-color: transparent;
            height: 23px;
            left: 11px;
            letter-spacing: 1.28px;
            line-height: 20.1px;
            position: absolute;
            text-align: center;
            top: 5px;
            white-space: nowrap;
            width: 215px;
        }

        .desktop-1 .signal52-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 583px;
            position: absolute;
            top: 732px;
            width: 242px;
        }

        .desktop-1 .rectangle-52-O4HqX1 {
            background-color: var(--green);
            height: 33px;
            left: 0px;
            position: absolute;
            top: 0px;
            width: 240px;
        }

        .desktop-1 .signal-52-O4HqX1 {
            background-color: transparent;
            height: 23px;
            left: 11px;
            letter-spacing: 1.28px;
            line-height: 20.1px;
            position: absolute;
            text-align: center;
            top: 5px;
            white-space: nowrap;
            width: 215px;
        }

        .desktop-1 .signal47-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 583px;
            position: absolute;
            top: 689px;
            width: 242px;
        }

        .desktop-1 .rectangle-47-5NuwOv {
            background-color: var(--green);
            height: 33px;
            left: 0px;
            position: absolute;
            top: 0px;
            width: 240px;
        }

        .desktop-1 .signal-47-5NuwOv {
            background-color: transparent;
            height: 23px;
            left: 11px;
            letter-spacing: 1.28px;
            line-height: 20.1px;
            position: absolute;
            text-align: center;
            top: 5px;
            white-space: nowrap;
            width: 215px;
        }

        .desktop-1 .signal54-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 1155px;
            position: absolute;
            top: 732px;
            width: 242px;
        }

        .desktop-1 .rectangle-54-FTMNZe {
            background-color: var(--green);
            height: 33px;
            left: 0px;
            position: absolute;
            top: 0px;
            width: 240px;
        }

        .desktop-1 .signal-54-FTMNZe {
            background-color: transparent;
            height: 23px;
            left: 11px;
            letter-spacing: 1.28px;
            line-height: 20.1px;
            position: absolute;
            text-align: center;
            top: 5px;
            white-space: nowrap;
            width: 215px;
        }

        .desktop-1 .signal49-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 1155px;
            position: absolute;
            top: 689px;
            width: 242px;
        }

        .desktop-1 .rectangle-49-gL4xr7 {
            background-color: var(--green);
            height: 33px;
            left: 0px;
            position: absolute;
            top: 0px;
            width: 240px;
        }

        .desktop-1 .signal-49-gL4xr7 {
            background-color: transparent;
            height: 23px;
            left: 11px;
            letter-spacing: 1.28px;
            line-height: 20.1px;
            position: absolute;
            text-align: center;
            top: 5px;
            white-space: nowrap;
            width: 215px;
        }

        .desktop-1 .signal55-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 11px;
            position: absolute;
            top: 772px;
            width: 242px;
        }

        .desktop-1 .rectangle-55-hINH5C {
            background-color: var(--green);
            height: 33px;
            left: 0px;
            position: absolute;
            top: 0px;
            width: 240px;
        }

        .desktop-1 .signal-55-hINH5C {
            background-color: transparent;
            height: 23px;
            left: 11px;
            letter-spacing: 1.28px;
            line-height: 20.1px;
            position: absolute;
            text-align: center;
            top: 5px;
            white-space: nowrap;
            width: 215px;
        }

        .desktop-1 .signal56-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 297px;
            position: absolute;
            top: 773px;
            width: 242px;
        }

        .desktop-1 .rectangle-56-HUIwWE {
            background-color: var(--green);
            height: 33px;
            left: 0px;
            position: absolute;
            top: 0px;
            width: 240px;
        }

        .desktop-1 .signal-56-HUIwWE {
            background-color: transparent;
            height: 23px;
            left: 11px;
            letter-spacing: 1.28px;
            line-height: 20.1px;
            position: absolute;
            text-align: center;
            top: 5px;
            white-space: nowrap;
            width: 215px;
        }

        .desktop-1 .signal58-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 869px;
            position: absolute;
            top: 773px;
            width: 242px;
        }

        .desktop-1 .rectangle-58-S7ZpZs {
            background-color: var(--green);
            height: 33px;
            left: 0px;
            position: absolute;
            top: 0px;
            width: 240px;
        }

        .desktop-1 .signal-58-S7ZpZs {
            background-color: transparent;
            height: 23px;
            left: 11px;
            letter-spacing: 1.28px;
            line-height: 20.1px;
            position: absolute;
            text-align: center;
            top: 5px;
            white-space: nowrap;
            width: 215px;
        }

        .desktop-1 .signal57-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 583px;
            position: absolute;
            top: 773px;
            width: 242px;
        }

        .desktop-1 .rectangle-57-yaVUkg {
            background-color: var(--green);
            height: 33px;
            left: 0px;
            position: absolute;
            top: 0px;
            width: 240px;
        }

        .desktop-1 .signal-57-yaVUkg {
            background-color: transparent;
            height: 23px;
            left: 11px;
            letter-spacing: 1.28px;
            line-height: 20.1px;
            position: absolute;
            text-align: center;
            top: 5px;
            white-space: nowrap;
            width: 215px;
        }

        .desktop-1 .signal59-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 1155px;
            position: absolute;
            top: 773px;
            width: 242px;
        }

        .desktop-1 .rectangle-59-Jgs9Zz {
            background-color: var(--green);
            height: 33px;
            left: 0px;
            position: absolute;
            top: 0px;
            width: 240px;
        }

        .desktop-1 .signal-59-Jgs9Zz {
            background-color: transparent;
            height: 23px;
            left: 11px;
            letter-spacing: 1.28px;
            line-height: 20.1px;
            position: absolute;
            text-align: center;
            top: 5px;
            white-space: nowrap;
            width: 215px;
        }

        .desktop-1 .signal60-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 11px;
            position: absolute;
            top: 813px;
            width: 242px;
        }

        .desktop-1 .rectangle-60-CC1jK2 {
            background-color: var(--green);
            height: 33px;
            left: 0px;
            position: absolute;
            top: 0px;
            width: 240px;
        }

        .desktop-1 .signal-60-CC1jK2 {
            background-color: transparent;
            height: 23px;
            left: 11px;
            letter-spacing: 1.28px;
            line-height: 20.1px;
            position: absolute;
            text-align: center;
            top: 5px;
            white-space: nowrap;
            width: 215px;
        }

        .desktop-1 .signal61-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 297px;
            position: absolute;
            top: 814px;
            width: 242px;
        }

        .desktop-1 .rectangle-61-NJ4hON {
            background-color: var(--green);
            height: 33px;
            left: 0px;
            position: absolute;
            top: 0px;
            width: 240px;
        }

        .desktop-1 .signal-61-NJ4hON {
            background-color: transparent;
            height: 23px;
            left: 11px;
            letter-spacing: 1.28px;
            line-height: 20.1px;
            position: absolute;
            text-align: center;
            top: 5px;
            white-space: nowrap;
            width: 215px;
        }

        .desktop-1 .signal63-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 869px;
            position: absolute;
            top: 814px;
            width: 242px;
        }

        .desktop-1 .rectangle-63-wEphgc {
            background-color: var(--green);
            height: 33px;
            left: 0px;
            position: absolute;
            top: 0px;
            width: 240px;
        }

        .desktop-1 .signal-63-wEphgc {
            background-color: transparent;
            height: 23px;
            left: 11px;
            letter-spacing: 1.28px;
            line-height: 20.1px;
            position: absolute;
            text-align: center;
            top: 5px;
            white-space: nowrap;
            width: 215px;
        }

        .desktop-1 .signal62-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 583px;
            position: absolute;
            top: 814px;
            width: 242px;
        }

        .desktop-1 .rectangle-62-hT83aN {
            background-color: var(--green);
            height: 33px;
            left: 0px;
            position: absolute;
            top: 0px;
            width: 240px;
        }

        .desktop-1 .signal-62-hT83aN {
            background-color: transparent;
            height: 23px;
            left: 11px;
            letter-spacing: 1.28px;
            line-height: 20.1px;
            position: absolute;
            text-align: center;
            top: 5px;
            white-space: nowrap;
            width: 215px;
        }

        .desktop-1 .signal64-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 1155px;
            position: absolute;
            top: 814px;
            width: 242px;
        }

        .desktop-1 .rectangle-64-ZmXZZ9 {
            background-color: var(--green);
            height: 33px;
            left: 0px;
            position: absolute;
            top: 0px;
            width: 240px;
        }

        .desktop-1 .signal-64-ZmXZZ9 {
            background-color: transparent;
            height: 23px;
            left: 11px;
            letter-spacing: 1.28px;
            line-height: 20.1px;
            position: absolute;
            text-align: center;
            top: 5px;
            white-space: nowrap;
            width: 215px;
        }

        .desktop-1 .signal65-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 11px;
            position: absolute;
            top: 854px;
            width: 242px;
        }

        .desktop-1 .rectangle-65-SoMfDh {
            background-color: var(--green);
            height: 33px;
            left: 0px;
            position: absolute;
            top: 0px;
            width: 240px;
        }

        .desktop-1 .signal-65-SoMfDh {
            background-color: transparent;
            height: 23px;
            left: 11px;
            letter-spacing: 1.28px;
            line-height: 20.1px;
            position: absolute;
            text-align: center;
            top: 5px;
            white-space: nowrap;
            width: 215px;
        }

        .desktop-1 .signal66-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 297px;
            position: absolute;
            top: 855px;
            width: 242px;
        }

        .desktop-1 .rectangle-66-jPcLDv {
            background-color: var(--green);
            height: 33px;
            left: 0px;
            position: absolute;
            top: 0px;
            width: 240px;
        }

        .desktop-1 .signal-66-jPcLDv {
            background-color: transparent;
            height: 23px;
            left: 11px;
            letter-spacing: 1.28px;
            line-height: 20.1px;
            position: absolute;
            text-align: center;
            top: 5px;
            white-space: nowrap;
            width: 215px;
        }

        .desktop-1 .signal68-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 869px;
            position: absolute;
            top: 855px;
            width: 242px;
        }

        .desktop-1 .rectangle-68-35oF4Y {
            background-color: var(--green);
            height: 33px;
            left: 0px;
            position: absolute;
            top: 0px;
            width: 240px;
        }

        .desktop-1 .signal-68-35oF4Y {
            background-color: transparent;
            height: 23px;
            left: 11px;
            letter-spacing: 1.28px;
            line-height: 20.1px;
            position: absolute;
            text-align: center;
            top: 5px;
            white-space: nowrap;
            width: 215px;
        }

        .desktop-1 .signal67-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 583px;
            position: absolute;
            top: 855px;
            width: 242px;
        }

        .desktop-1 .rectangle-67-71sie6 {
            background-color: var(--green);
            height: 33px;
            left: 0px;
            position: absolute;
            top: 0px;
            width: 240px;
        }

        .desktop-1 .signal-67-71sie6 {
            background-color: transparent;
            height: 23px;
            left: 11px;
            letter-spacing: 1.28px;
            line-height: 20.1px;
            position: absolute;
            text-align: center;
            top: 5px;
            white-space: nowrap;
            width: 215px;
        }

        .desktop-1 .signal69-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 1155px;
            position: absolute;
            top: 855px;
            width: 242px;
        }

        .desktop-1 .rectangle-69-8Oalgk {
            background-color: var(--green);
            height: 33px;
            left: 0px;
            position: absolute;
            top: 0px;
            width: 240px;
        }

        .desktop-1 .signal-69-8Oalgk {
            background-color: transparent;
            height: 23px;
            left: 11px;
            letter-spacing: 1.28px;
            line-height: 20.1px;
            position: absolute;
            text-align: center;
            top: 5px;
            white-space: nowrap;
            width: 215px;
        }

        .desktop-1 .signal-1-0AvDFH {
            height: 33px;
            top: 97px;
            width: 242px;
        }

        .desktop-1 .rectangle-1-sYeNs3 {
            background-color: var(--green);
            height: 33px;
            left: 0px;
            position: absolute;
            top: 0px;
            width: 240px;
        }

        .desktop-1 .signal-1-sYeNs3 {
            height: 23px;
            letter-spacing: 1.28px;
            line-height: 20.1px;
            text-align: center;
            top: 5px;
            white-space: nowrap;
            width: 215px;
        }

        .desktop-1 .signal5-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 11px;
            position: absolute;
            top: 150px;
            width: 242px;
        }

        .desktop-1 .rectangle-5-br5aaw {
            background-color: var(--green);
            height: 33px;
            left: 0px;
            position: absolute;
            top: 0px;
            width: 240px;
        }

        .desktop-1 .signal-5-br5aaw {
            background-color: transparent;
            height: 23px;
            left: 11px;
            letter-spacing: 1.28px;
            line-height: 20.1px;
            position: absolute;
            text-align: center;
            top: 5px;
            white-space: nowrap;
            width: 215px;
        }

        .desktop-1 .signal10-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 10px;
            position: absolute;
            top: 203px;
            width: 242px;
        }

        .desktop-1 .rectangle-10-lyj1Pk {
            background-color: var(--green);
            height: 33px;
            left: 0px;
            position: absolute;
            top: 0px;
            width: 240px;
        }

        .desktop-1 .signal-10-lyj1Pk {
            background-color: transparent;
            height: 23px;
            left: 11px;
            letter-spacing: 1.28px;
            line-height: 20.1px;
            position: absolute;
            text-align: center;
            top: 5px;
            white-space: nowrap;
            width: 215px;
        }

        .desktop-1 .signal15-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 9px;
            position: absolute;
            top: 256px;
            width: 242px;
        }

        .desktop-1 .rectangle-15-RWTMEi {
            background-color: var(--green);
            height: 33px;
            left: 0px;
            position: absolute;
            top: 0px;
            width: 240px;
        }

        .desktop-1 .signal-15-RWTMEi {
            background-color: transparent;
            height: 23px;
            left: 11px;
            letter-spacing: 1.28px;
            line-height: 20.1px;
            position: absolute;
            text-align: center;
            top: 5px;
            white-space: nowrap;
            width: 215px;
        }

        .desktop-1 .signal20-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 10px;
            position: absolute;
            top: 309px;
            width: 242px;
        }

        .desktop-1 .rectangle-20-RorFWr {
            background-color: var(--green);
            height: 33px;
            left: 0px;
            position: absolute;
            top: 0px;
            width: 240px;
        }

        .desktop-1 .signal-20-RorFWr {
            background-color: transparent;
            height: 23px;
            left: 11px;
            letter-spacing: 1.28px;
            line-height: 20.1px;
            position: absolute;
            text-align: center;
            top: 5px;
            white-space: nowrap;
            width: 215px;
        }

        .desktop-1 .signal25-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 11px;
            position: absolute;
            top: 362px;
            width: 242px;
        }

        .desktop-1 .rectangle-25-fHHb9G {
            background-color: var(--green);
            height: 33px;
            left: 0px;
            position: absolute;
            top: 0px;
            width: 240px;
        }

        .desktop-1 .signal-25-fHHb9G {
            background-color: transparent;
            height: 23px;
            left: 11px;
            letter-spacing: 1.28px;
            line-height: 20.1px;
            position: absolute;
            text-align: center;
            top: 5px;
            white-space: nowrap;
            width: 215px;
        }

        .desktop-1 .signal30-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 11px;
            position: absolute;
            top: 415px;
            width: 242px;
        }

        .desktop-1 .rectangle-30-Y0jUco {
            background-color: var(--green);
            height: 33px;
            left: 0px;
            position: absolute;
            top: 0px;
            width: 240px;
        }

        .desktop-1 .signal-30-Y0jUco {
            background-color: transparent;
            height: 23px;
            left: 11px;
            letter-spacing: 1.28px;
            line-height: 20.1px;
            position: absolute;
            text-align: center;
            top: 5px;
            white-space: nowrap;
            width: 215px;
        }

        .desktop-1 .signal35-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 9px;
            position: absolute;
            top: 468px;
            width: 242px;
        }

        .desktop-1 .rectangle-35-x9ygMq {
            background-color: var(--green);
            height: 33px;
            left: 0px;
            position: absolute;
            top: 0px;
            width: 240px;
        }

        .desktop-1 .signal-35-x9ygMq {
            background-color: transparent;
            height: 23px;
            left: 11px;
            letter-spacing: 1.28px;
            line-height: 20.1px;
            position: absolute;
            text-align: center;
            top: 5px;
            white-space: nowrap;
            width: 215px;
        }

        .desktop-1 .signal40-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 10px;
            position: absolute;
            top: 521px;
            width: 242px;
        }

        .desktop-1 .rectangle-40-f0Xanx {
            background-color: var(--green);
            height: 33px;
            left: 0px;
            position: absolute;
            top: 0px;
            width: 240px;
        }

        .desktop-1 .signal-40-f0Xanx {
            background-color: transparent;
            height: 23px;
            left: 11px;
            letter-spacing: 1.28px;
            line-height: 20.1px;
            position: absolute;
            text-align: center;
            top: 5px;
            white-space: nowrap;
            width: 215px;
        }

        .desktop-1 .signal5a-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 1155px;
            position: absolute;
            top: 97px;
            width: 242px;
        }

        .desktop-1 .rectangle-5-pmxfOL {
            background-color: var(--green);
            height: 33px;
            left: 0px;
            position: absolute;
            top: 0px;
            width: 240px;
        }

        .desktop-1 .signal-5a-pmxfOL {
            background-color: transparent;
            height: 23px;
            left: 11px;
            letter-spacing: 1.28px;
            line-height: 20.1px;
            position: absolute;
            text-align: center;
            top: 5px;
            white-space: nowrap;
            width: 215px;
        }

        .desktop-1 .signal9-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 1155px;
            position: absolute;
            top: 150px;
            width: 242px;
        }

        .desktop-1 .rectangle-9-Yw47vs {
            background-color: var(--green);
            height: 33px;
            left: 0px;
            position: absolute;
            top: 0px;
            width: 240px;
        }

        .desktop-1 .signal-9-Yw47vs {
            background-color: transparent;
            height: 23px;
            left: 11px;
            letter-spacing: 1.28px;
            line-height: 20.1px;
            position: absolute;
            text-align: center;
            top: 5px;
            white-space: nowrap;
            width: 215px;
        }

        .desktop-1 .signal14-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 1154px;
            position: absolute;
            top: 203px;
            width: 242px;
        }

        .desktop-1 .rectangle-14-abpxyv {
            background-color: var(--green);
            height: 33px;
            left: 0px;
            position: absolute;
            top: 0px;
            width: 240px;
        }

        .desktop-1 .signal-14-abpxyv {
            background-color: transparent;
            height: 23px;
            left: 11px;
            letter-spacing: 1.28px;
            line-height: 20.1px;
            position: absolute;
            text-align: center;
            top: 5px;
            white-space: nowrap;
            width: 215px;
        }

        .desktop-1 .signal19-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 1153px;
            position: absolute;
            top: 256px;
            width: 242px;
        }

        .desktop-1 .rectangle-19-XQZ7Qx {
            background-color: var(--green);
            height: 33px;
            left: 0px;
            position: absolute;
            top: 0px;
            width: 240px;
        }

        .desktop-1 .signal-19-XQZ7Qx {
            background-color: transparent;
            height: 23px;
            left: 11px;
            letter-spacing: 1.28px;
            line-height: 20.1px;
            position: absolute;
            text-align: center;
            top: 5px;
            white-space: nowrap;
            width: 215px;
        }

        .desktop-1 .signal24-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 1154px;
            position: absolute;
            top: 309px;
            width: 242px;
        }

        .desktop-1 .rectangle-24-rmwYck {
            background-color: var(--green);
            height: 33px;
            left: 0px;
            position: absolute;
            top: 0px;
            width: 240px;
        }

        .desktop-1 .signal-24-rmwYck {
            background-color: transparent;
            height: 23px;
            left: 11px;
            letter-spacing: 1.28px;
            line-height: 20.1px;
            position: absolute;
            text-align: center;
            top: 5px;
            white-space: nowrap;
            width: 215px;
        }

        .desktop-1 .signal29-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 1155px;
            position: absolute;
            top: 362px;
            width: 242px;
        }

        .desktop-1 .rectangle-29-DftyQU {
            background-color: var(--green);
            height: 33px;
            left: 0px;
            position: absolute;
            top: 0px;
            width: 240px;
        }

        .desktop-1 .signal-29-DftyQU {
            background-color: transparent;
            height: 23px;
            left: 11px;
            letter-spacing: 1.28px;
            line-height: 20.1px;
            position: absolute;
            text-align: center;
            top: 5px;
            white-space: nowrap;
            width: 215px;
        }

        .desktop-1 .signal34-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 1155px;
            position: absolute;
            top: 415px;
            width: 242px;
        }

        .desktop-1 .rectangle-34-Ax0JC9 {
            background-color: var(--green);
            height: 33px;
            left: 0px;
            position: absolute;
            top: 0px;
            width: 240px;
        }

        .desktop-1 .signal-34-Ax0JC9 {
            background-color: transparent;
            height: 23px;
            left: 11px;
            letter-spacing: 1.28px;
            line-height: 20.1px;
            position: absolute;
            text-align: center;
            top: 5px;
            white-space: nowrap;
            width: 215px;
        }

        .desktop-1 .signal39-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 1153px;
            position: absolute;
            top: 468px;
            width: 242px;
        }

        .desktop-1 .rectangle-39-h2LafA {
            background-color: var(--green);
            height: 33px;
            left: 0px;
            position: absolute;
            top: 0px;
            width: 240px;
        }

        .desktop-1 .signal-39-h2LafA {
            background-color: transparent;
            height: 23px;
            left: 11px;
            letter-spacing: 1.28px;
            line-height: 20.1px;
            position: absolute;
            text-align: center;
            top: 5px;
            white-space: nowrap;
            width: 215px;
        }

        .desktop-1 .signal44-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 1154px;
            position: absolute;
            top: 521px;
            width: 242px;
        }

        .desktop-1 .rectangle-44-OQ5iCL {
            background-color: var(--green);
            height: 33px;
            left: 0px;
            position: absolute;
            top: 0px;
            width: 240px;
        }

        .desktop-1 .signal-44-OQ5iCL {
            background-color: transparent;
            height: 23px;
            left: 11px;
            letter-spacing: 1.28px;
            line-height: 20.1px;
            position: absolute;
            text-align: center;
            top: 5px;
            white-space: nowrap;
            width: 215px;
        }

        .desktop-1 .signal4-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 869px;
            position: absolute;
            top: 97px;
            width: 242px;
        }

        .desktop-1 .rectangle-4-JgUiqj {
            background-color: var(--green);
            height: 33px;
            left: 0px;
            position: absolute;
            top: 0px;
            width: 240px;
        }

        .desktop-1 .signal-4-JgUiqj {
            background-color: transparent;
            height: 23px;
            left: 11px;
            letter-spacing: 1.28px;
            line-height: 20.1px;
            position: absolute;
            text-align: center;
            top: 5px;
            white-space: nowrap;
            width: 215px;
        }

        .desktop-1 .signal8-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 869px;
            position: absolute;
            top: 150px;
            width: 242px;
        }

        .desktop-1 .rectangle-8-xeOiyb {
            background-color: var(--green);
            height: 33px;
            left: 0px;
            position: absolute;
            top: 0px;
            width: 240px;
        }

        .desktop-1 .signal-8-xeOiyb {
            background-color: transparent;
            height: 23px;
            left: 11px;
            letter-spacing: 1.28px;
            line-height: 20.1px;
            position: absolute;
            text-align: center;
            top: 5px;
            white-space: nowrap;
            width: 215px;
        }

        .desktop-1 .signal13-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 868px;
            position: absolute;
            top: 203px;
            width: 242px;
        }

        .desktop-1 .rectangle-13-Q1UOJq {
            background-color: var(--green);
            height: 33px;
            left: 0px;
            position: absolute;
            top: 0px;
            width: 240px;
        }

        .desktop-1 .signal-13-Q1UOJq {
            background-color: transparent;
            height: 23px;
            left: 11px;
            letter-spacing: 1.28px;
            line-height: 20.1px;
            position: absolute;
            text-align: center;
            top: 5px;
            white-space: nowrap;
            width: 215px;
        }

        .desktop-1 .signal18-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 867px;
            position: absolute;
            top: 256px;
            width: 242px;
        }

        .desktop-1 .rectangle-18-2daefs {
            background-color: var(--green);
            height: 33px;
            left: 0px;
            position: absolute;
            top: 0px;
            width: 240px;
        }

        .desktop-1 .signal-18-2daefs {
            background-color: transparent;
            height: 23px;
            left: 11px;
            letter-spacing: 1.28px;
            line-height: 20.1px;
            position: absolute;
            text-align: center;
            top: 5px;
            white-space: nowrap;
            width: 215px;
        }

        .desktop-1 .signal23-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 868px;
            position: absolute;
            top: 309px;
            width: 242px;
        }

        .desktop-1 .rectangle-23-dchVxi {
            background-color: var(--green);
            height: 33px;
            left: 0px;
            position: absolute;
            top: 0px;
            width: 240px;
        }

        .desktop-1 .signal-23-dchVxi {
            background-color: transparent;
            height: 23px;
            left: 11px;
            letter-spacing: 1.28px;
            line-height: 20.1px;
            position: absolute;
            text-align: center;
            top: 5px;
            white-space: nowrap;
            width: 215px;
        }

        .desktop-1 .signal28-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 869px;
            position: absolute;
            top: 362px;
            width: 242px;
        }

        .desktop-1 .rectangle-28-CfMhkm {
            background-color: var(--green);
            height: 33px;
            left: 0px;
            position: absolute;
            top: 0px;
            width: 240px;
        }

        .desktop-1 .signal-28-CfMhkm {
            background-color: transparent;
            height: 23px;
            left: 11px;
            letter-spacing: 1.28px;
            line-height: 20.1px;
            position: absolute;
            text-align: center;
            top: 5px;
            white-space: nowrap;
            width: 215px;
        }

        .desktop-1 .signal33-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 869px;
            position: absolute;
            top: 415px;
            width: 242px;
        }

        .desktop-1 .rectangle-33-Ba1AwH {
            background-color: var(--green);
            height: 33px;
            left: 0px;
            position: absolute;
            top: 0px;
            width: 240px;
        }

        .desktop-1 .signal-33-Ba1AwH {
            background-color: transparent;
            height: 23px;
            left: 11px;
            letter-spacing: 1.28px;
            line-height: 20.1px;
            position: absolute;
            text-align: center;
            top: 5px;
            white-space: nowrap;
            width: 215px;
        }

        .desktop-1 .signal38-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 867px;
            position: absolute;
            top: 468px;
            width: 242px;
        }

        .desktop-1 .rectangle-38-z5IJ9a {
            background-color: var(--green);
            height: 33px;
            left: 0px;
            position: absolute;
            top: 0px;
            width: 240px;
        }

        .desktop-1 .signal-38-z5IJ9a {
            background-color: transparent;
            height: 23px;
            left: 11px;
            letter-spacing: 1.28px;
            line-height: 20.1px;
            position: absolute;
            text-align: center;
            top: 5px;
            white-space: nowrap;
            width: 215px;
        }

        .desktop-1 .signal43-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 868px;
            position: absolute;
            top: 521px;
            width: 242px;
        }

        .desktop-1 .rectangle-43-tDuZB1 {
            background-color: var(--green);
            height: 33px;
            left: 0px;
            position: absolute;
            top: 0px;
            width: 240px;
        }

        .desktop-1 .signal-43-tDuZB1 {
            background-color: transparent;
            height: 23px;
            left: 11px;
            letter-spacing: 1.28px;
            line-height: 20.1px;
            position: absolute;
            text-align: center;
            top: 5px;
            white-space: nowrap;
            width: 215px;
        }

        .desktop-1 .signal3-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 583px;
            position: absolute;
            top: 97px;
            width: 242px;
        }

        .desktop-1 .rectangle-3-OsIyRa {
            background-color: var(--green);
            height: 33px;
            left: 0px;
            position: absolute;
            top: 0px;
            width: 240px;
        }

        .desktop-1 .signal-3-OsIyRa {
            background-color: transparent;
            height: 23px;
            left: 11px;
            letter-spacing: 1.28px;
            line-height: 20.1px;
            position: absolute;
            text-align: center;
            top: 5px;
            white-space: nowrap;
            width: 215px;
        }

        .desktop-1 .signal7-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 583px;
            position: absolute;
            top: 150px;
            width: 242px;
        }

        .desktop-1 .rectangle-7-ASqS2S {
            background-color: var(--green);
            height: 33px;
            left: 0px;
            position: absolute;
            top: 0px;
            width: 240px;
        }

        .desktop-1 .signal-7-ASqS2S {
            background-color: transparent;
            height: 23px;
            left: 11px;
            letter-spacing: 1.28px;
            line-height: 20.1px;
            position: absolute;
            text-align: center;
            top: 5px;
            white-space: nowrap;
            width: 215px;
        }

        .desktop-1 .signal12-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 582px;
            position: absolute;
            top: 203px;
            width: 242px;
        }

        .desktop-1 .rectangle-12-xRMI3h {
            background-color: var(--green);
            height: 33px;
            left: 0px;
            position: absolute;
            top: 0px;
            width: 240px;
        }

        .desktop-1 .signal-12-xRMI3h {
            background-color: transparent;
            height: 23px;
            left: 11px;
            letter-spacing: 1.28px;
            line-height: 20.1px;
            position: absolute;
            text-align: center;
            top: 5px;
            white-space: nowrap;
            width: 215px;
        }

        .desktop-1 .signal17-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 581px;
            position: absolute;
            top: 256px;
            width: 242px;
        }

        .desktop-1 .rectangle-17-suxxWg {
            background-color: var(--green);
            height: 33px;
            left: 0px;
            position: absolute;
            top: 0px;
            width: 240px;
        }

        .desktop-1 .signal-17-suxxWg {
            background-color: transparent;
            height: 23px;
            left: 11px;
            letter-spacing: 1.28px;
            line-height: 20.1px;
            position: absolute;
            text-align: center;
            top: 5px;
            white-space: nowrap;
            width: 215px;
        }

        .desktop-1 .signal22-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 582px;
            position: absolute;
            top: 309px;
            width: 242px;
        }

        .desktop-1 .rectangle-22-Xqjgs8 {
            background-color: var(--green);
            height: 33px;
            left: 0px;
            position: absolute;
            top: 0px;
            width: 240px;
        }

        .desktop-1 .signal-22-Xqjgs8 {
            background-color: transparent;
            height: 23px;
            left: 11px;
            letter-spacing: 1.28px;
            line-height: 20.1px;
            position: absolute;
            text-align: center;
            top: 5px;
            white-space: nowrap;
            width: 215px;
        }

        .desktop-1 .signal27-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 583px;
            position: absolute;
            top: 362px;
            width: 242px;
        }

        .desktop-1 .rectangle-27-EkGsWW {
            background-color: var(--green);
            height: 33px;
            left: 0px;
            position: absolute;
            top: 0px;
            width: 240px;
        }

        .desktop-1 .signal-27-EkGsWW {
            background-color: transparent;
            height: 23px;
            left: 11px;
            letter-spacing: 1.28px;
            line-height: 20.1px;
            position: absolute;
            text-align: center;
            top: 5px;
            white-space: nowrap;
            width: 215px;
        }

        .desktop-1 .signal32-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 583px;
            position: absolute;
            top: 415px;
            width: 242px;
        }

        .desktop-1 .rectangle-32-TAGxXw {
            background-color: var(--green);
            height: 33px;
            left: 0px;
            position: absolute;
            top: 0px;
            width: 240px;
        }

        .desktop-1 .signal-32-TAGxXw {
            background-color: transparent;
            height: 23px;
            left: 11px;
            letter-spacing: 1.28px;
            line-height: 20.1px;
            position: absolute;
            text-align: center;
            top: 5px;
            white-space: nowrap;
            width: 215px;
        }

        .desktop-1 .signal37-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 581px;
            position: absolute;
            top: 468px;
            width: 242px;
        }

        .desktop-1 .rectangle-37-CFfQI1 {
            background-color: var(--green);
            height: 33px;
            left: 0px;
            position: absolute;
            top: 0px;
            width: 240px;
        }

        .desktop-1 .signal-37-CFfQI1 {
            background-color: transparent;
            height: 23px;
            left: 11px;
            letter-spacing: 1.28px;
            line-height: 20.1px;
            position: absolute;
            text-align: center;
            top: 5px;
            white-space: nowrap;
            width: 215px;
        }

        .desktop-1 .signal42-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 582px;
            position: absolute;
            top: 521px;
            width: 242px;
        }

        .desktop-1 .rectangle-42-T67D9S {
            background-color: var(--green);
            height: 33px;
            left: 0px;
            position: absolute;
            top: 0px;
            width: 240px;
        }

        .desktop-1 .signal-42-T67D9S {
            background-color: transparent;
            height: 23px;
            left: 11px;
            letter-spacing: 1.28px;
            line-height: 20.1px;
            position: absolute;
            text-align: center;
            top: 5px;
            white-space: nowrap;
            width: 215px;
        }

        .desktop-1 .signal-2-0AvDFH {
            height: 33px;
            left: 297px;
            top: 97px;
            width: 242px;
        }

        .desktop-1 .rectangle-2-y7jNHr {
            background-color: var(--green);
            height: 33px;
            left: 0px;
            position: absolute;
            top: 0px;
            width: 240px;
        }

        .desktop-1 .signal-2-y7jNHr {
            height: 23px;
            left: 11px;
            letter-spacing: 1.28px;
            line-height: 20.1px;
            text-align: center;
            top: 5px;
            white-space: nowrap;
            width: 215px;
        }

        .desktop-1 .signal6-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 297px;
            position: absolute;
            top: 150px;
            width: 242px;
        }

        .desktop-1 .rectangle-6-xTcHmK {
            background-color: var(--green);
            height: 33px;
            left: 0px;
            position: absolute;
            top: 0px;
            width: 240px;
        }

        .desktop-1 .signal-6-xTcHmK {
            background-color: transparent;
            height: 23px;
            left: 11px;
            letter-spacing: 1.28px;
            line-height: 20.1px;
            position: absolute;
            text-align: center;
            top: 5px;
            white-space: nowrap;
            width: 215px;
        }

        .desktop-1 .signal11-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 296px;
            position: absolute;
            top: 203px;
            width: 242px;
        }

        .desktop-1 .rectangle-11-sB5LfW {
            background-color: var(--green);
            height: 33px;
            left: 0px;
            position: absolute;
            top: 0px;
            width: 240px;
        }

        .desktop-1 .signal-11-sB5LfW {
            background-color: transparent;
            height: 23px;
            left: 11px;
            letter-spacing: 1.28px;
            line-height: 20.1px;
            position: absolute;
            text-align: center;
            top: 5px;
            white-space: nowrap;
            width: 215px;
        }

        .desktop-1 .signal16-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 295px;
            position: absolute;
            top: 256px;
            width: 242px;
        }

        .desktop-1 .rectangle-16-JD1n5a {
            background-color: var(--green);
            height: 33px;
            left: 0px;
            position: absolute;
            top: 0px;
            width: 240px;
        }

        .desktop-1 .signal-16-JD1n5a {
            background-color: transparent;
            height: 23px;
            left: 11px;
            letter-spacing: 1.28px;
            line-height: 20.1px;
            position: absolute;
            text-align: center;
            top: 5px;
            white-space: nowrap;
            width: 215px;
        }

        .desktop-1 .signal21-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 296px;
            position: absolute;
            top: 309px;
            width: 242px;
        }

        .desktop-1 .rectangle-21-wZlhtI {
            background-color: var(--green);
            height: 33px;
            left: 0px;
            position: absolute;
            top: 0px;
            width: 240px;
        }

        .desktop-1 .signal-21-wZlhtI {
            background-color: transparent;
            height: 23px;
            left: 11px;
            letter-spacing: 1.28px;
            line-height: 20.1px;
            position: absolute;
            text-align: center;
            top: 5px;
            white-space: nowrap;
            width: 215px;
        }

        .desktop-1 .signal26-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 297px;
            position: absolute;
            top: 362px;
            width: 242px;
        }

        .desktop-1 .rectangle-26-W8qox8 {
            background-color: var(--green);
            height: 33px;
            left: 0px;
            position: absolute;
            top: 0px;
            width: 240px;
        }

        .desktop-1 .signal-26-W8qox8 {
            background-color: transparent;
            height: 23px;
            left: 11px;
            letter-spacing: 1.28px;
            line-height: 20.1px;
            position: absolute;
            text-align: center;
            top: 5px;
            white-space: nowrap;
            width: 215px;
        }

        .desktop-1 .signal31-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 297px;
            position: absolute;
            top: 415px;
            width: 242px;
        }

        .desktop-1 .rectangle-31-bn5xI7 {
            background-color: var(--green);
            height: 33px;
            left: 0px;
            position: absolute;
            top: 0px;
            width: 240px;
        }

        .desktop-1 .signal-31-bn5xI7 {
            background-color: transparent;
            height: 23px;
            left: 11px;
            letter-spacing: 1.28px;
            line-height: 20.1px;
            position: absolute;
            text-align: center;
            top: 5px;
            white-space: nowrap;
            width: 215px;
        }

        .desktop-1 .signal36-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 295px;
            position: absolute;
            top: 468px;
            width: 242px;
        }

        .desktop-1 .rectangle-36-ZGLyx2 {
            background-color: var(--green);
            height: 33px;
            left: 0px;
            position: absolute;
            top: 0px;
            width: 240px;
        }

        .desktop-1 .signal-36-ZGLyx2 {
            background-color: transparent;
            height: 23px;
            left: 11px;
            letter-spacing: 1.28px;
            line-height: 20.1px;
            position: absolute;
            text-align: center;
            top: 5px;
            white-space: nowrap;
            width: 215px;
        }

        .desktop-1 .signal41-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 296px;
            position: absolute;
            top: 521px;
            width: 242px;
        }

        .desktop-1 .rectangle-41-ohRHDJ {
            background-color: var(--green);
            height: 33px;
            left: 0px;
            position: absolute;
            top: 0px;
            width: 240px;
        }

        .desktop-1 .signal-41-ohRHDJ {
            background-color: transparent;
            height: 23px;
            left: 11px;
            letter-spacing: 1.28px;
            line-height: 20.1px;
            position: absolute;
            text-align: center;
            top: 5px;
            white-space: nowrap;
            width: 215px;
        }

        .desktop-1 .kotak-sinyal-0AvDFH {
            background-color: transparent;
            height: 892px;
            left: 0px;
            position: absolute;
            top: 0px;
            width: 1414px;
        }

        .desktop-1 .rectangle-4-xwnY9r {
            background-color: transparent;
            border: 7px solid;
            border-color: var(--white);
            height: 252px;
            left: -7px;
            position: absolute;
            top: 647px;
            width: 1424px;
        }

        .desktop-1 .rectangle-4-Wu6Ge3 {
            background-color: var(--red-2);
            border: 9px solid;
            border-color: var(--black);
            height: 72px;
            left: 496px;
            position: absolute;
            top: 610px;
            width: 418px;
        }

        .desktop-1 .relay-operated-xwnY9r {
            background-color: transparent;
            height: auto;
            left: 610px;
            letter-spacing: 2.56px;
            line-height: 40.2px;
            position: absolute;
            text-align: left;
            top: 627px;
            white-space: nowrap;
            width: 257px;
        }

        .desktop-1 .rectangle-4-VyPSHk {
            background-color: transparent;
            border: 7px solid;
            border-color: var(--white);
            height: 574px;
            left: -5px;
            position: absolute;
            top: 22px;
            width: 1416px;
        }

        .desktop-1 .rectangle-4-uGOxIn {
            background-color: var(--red-2);
            border: 9px solid;
            border-color: var(--black);
            height: 72px;
            left: 503px;
            position: absolute;
            top: -9px;
            width: 416px;
        }

        .desktop-1 .signal-xwnY9r {
            background-color: transparent;
            height: auto;
            left: 659px;
            letter-spacing: 2.56px;
            line-height: 40.2px;
            position: absolute;
            text-align: left;
            top: 5px;
            white-space: nowrap;
            width: 103px;
        }

        .desktop-1 .bay-Ys8k0x {
            background-color: transparent;
            height: 72px;
            left: 94px;
            position: absolute;
            top: 1128px;
            width: 1735px;
        }

        .desktop-1 .bay1-kCx7qP {
            background-color: transparent;
            height: 33px;
            left: 17px;
            position: absolute;
            top: 22px;
            width: 164px;
        }

        .desktop-1 .bay1-mKko7V {
            background-color: var(--red);
            height: 33px;
            left: 0px;
            position: absolute;
            top: 0px;
            width: 162px;
        }

        .desktop-1 .bay1-xwxXxg {
            background-color: transparent;
            height: 23px;
            left: 7px;
            letter-spacing: 1.92px;
            line-height: 30.2px;
            position: absolute;
            text-align: center;
            top: 5px;
            white-space: nowrap;
            width: 145px;
        }

        .desktop-1 .bay2-kCx7qP {
            background-color: transparent;
            height: 33px;
            left: 209px;
            position: absolute;
            top: 22px;
            width: 164px;
        }

        .desktop-1 .bay2-RKqlSC {
            background-color: var(--red);
            height: 33px;
            left: 0px;
            position: absolute;
            top: 0px;
            width: 162px;
        }

        .desktop-1 .bay2-UFvSna {
            background-color: transparent;
            height: 23px;
            left: 7px;
            letter-spacing: 1.92px;
            line-height: 30.2px;
            position: absolute;
            text-align: center;
            top: 5px;
            white-space: nowrap;
            width: 145px;
        }

        .desktop-1 .bay3-kCx7qP {
            background-color: transparent;
            height: 33px;
            left: 401px;
            position: absolute;
            top: 22px;
            width: 164px;
        }

        .desktop-1 .bay3-5LvkQS {
            background-color: var(--red);
            height: 33px;
            left: 0px;
            position: absolute;
            top: 0px;
            width: 162px;
        }

        .desktop-1 .bay3-3IfNfQ {
            background-color: transparent;
            height: 23px;
            left: 7px;
            letter-spacing: 1.92px;
            line-height: 30.2px;
            position: absolute;
            text-align: center;
            top: 5px;
            white-space: nowrap;
            width: 145px;
        }

        .desktop-1 .bay4-kCx7qP {
            background-color: transparent;
            height: 33px;
            left: 593px;
            position: absolute;
            top: 22px;
            width: 164px;
        }

        .desktop-1 .bay4-6WK36Y {
            background-color: var(--red);
            height: 33px;
            left: 0px;
            position: absolute;
            top: 0px;
            width: 162px;
        }

        .desktop-1 .bay4-OxLxvc {
            background-color: transparent;
            height: 23px;
            left: 7px;
            letter-spacing: 1.92px;
            line-height: 30.2px;
            position: absolute;
            text-align: center;
            top: 5px;
            white-space: nowrap;
            width: 145px;
        }

        .desktop-1 .bay5-kCx7qP {
            background-color: transparent;
            height: 33px;
            left: 785px;
            position: absolute;
            top: 22px;
            width: 164px;
        }

        .desktop-1 .bay5-Q5XVa3 {
            background-color: var(--red);
            height: 33px;
            left: 0px;
            position: absolute;
            top: 0px;
            width: 162px;
        }

        .desktop-1 .bay5-hG6zxO {
            background-color: transparent;
            height: 23px;
            left: 7px;
            letter-spacing: 1.92px;
            line-height: 30.2px;
            position: absolute;
            text-align: center;
            top: 5px;
            white-space: nowrap;
            width: 145px;
        }

        .desktop-1 .bay6-kCx7qP {
            background-color: transparent;
            height: 33px;
            left: 977px;
            position: absolute;
            top: 22px;
            width: 164px;
        }

        .desktop-1 .bay6-4Y1go2 {
            background-color: var(--red);
            height: 33px;
            left: 0px;
            position: absolute;
            top: 0px;
            width: 162px;
        }

        .desktop-1 .bay6-Dz2XVP {
            background-color: transparent;
            height: 23px;
            left: 7px;
            letter-spacing: 1.92px;
            line-height: 30.2px;
            position: absolute;
            text-align: center;
            top: 5px;
            white-space: nowrap;
            width: 145px;
        }

        .desktop-1 .bay7-kCx7qP {
            background-color: transparent;
            height: 33px;
            left: 1169px;
            position: absolute;
            top: 22px;
            width: 164px;
        }

        .desktop-1 .bay7-bEdVnk {
            background-color: var(--red);
            height: 33px;
            left: 0px;
            position: absolute;
            top: 0px;
            width: 162px;
        }

        .desktop-1 .bay7-Id8k2b {
            background-color: transparent;
            height: 23px;
            left: 7px;
            letter-spacing: 1.92px;
            line-height: 30.2px;
            position: absolute;
            text-align: center;
            top: 5px;
            white-space: nowrap;
            width: 145px;
        }

        .desktop-1 .bay8-kCx7qP {
            background-color: transparent;
            height: 33px;
            left: 1361px;
            position: absolute;
            top: 22px;
            width: 164px;
        }

        .desktop-1 .bay8-ciLhrw {
            background-color: var(--red);
            height: 33px;
            left: 0px;
            position: absolute;
            top: 0px;
            width: 162px;
        }

        .desktop-1 .bay8-fRuNg5 {
            background-color: transparent;
            height: 23px;
            left: 7px;
            letter-spacing: 1.92px;
            line-height: 30.2px;
            position: absolute;
            text-align: center;
            top: 5px;
            white-space: nowrap;
            width: 145px;
        }

        .desktop-1 .bay9-kCx7qP {
            background-color: transparent;
            height: 33px;
            left: 1553px;
            position: absolute;
            top: 22px;
            width: 164px;
        }

        .desktop-1 .bay9-G6QKvS {
            background-color: var(--red);
            height: 33px;
            left: 0px;
            position: absolute;
            top: 0px;
            width: 162px;
        }

        .desktop-1 .bay9-djNN6u {
            background-color: transparent;
            height: 23px;
            left: 7px;
            letter-spacing: 1.92px;
            line-height: 30.2px;
            position: absolute;
            text-align: center;
            top: 5px;
            white-space: nowrap;
            width: 145px;
        }

        .desktop-1 .rectangle-3-kCx7qP {
            background-color: transparent;
            border: 7px solid;
            border-color: var(--white);
            height: 86px;
            left: -7px;
            position: absolute;
            top: -7px;
            width: 1749px;
        }

        .desktop-1 .measurement-Ys8k0x {
            height: 714px;
            left: 16px;
            top: 149px;
            width: 452px;
        }

        .desktop-1 .rectangle-3-BNLOE4 {
            background-color: transparent;
            border: 7px solid;
            border-color: var(--white);
            height: 697px;
            left: -7px;
            position: absolute;
            top: 24px;
            width: 464px;
        }

        .desktop-1 .rectangle-2-BNLOE4 {
            background-color: var(--red-2);
            border: 9px solid;
            border-color: var(--black);
            height: 78px;
            left: 39px;
            position: absolute;
            top: -9px;
            width: 373px;
        }

        .desktop-1 .measurement-BNLOE4 {
            height: auto;
            left: 125px;
            letter-spacing: 2.56px;
            line-height: 40.2px;
            text-align: left;
            top: 13px;
            white-space: nowrap;
            width: 207px;
        }

        .desktop-1 .q-BNLOE4 {
            height: 53px;
            left: 28px;
            top: 630px;
            width: 399px;
        }

        .desktop-1 .rectangle-5-PSV7UA {
            background-color: transparent;
            border: 1px solid;
            border-color: var(--white);
            height: 55px;
            left: -1px;
            position: absolute;
            top: -1px;
            width: 102px;
        }

        .desktop-1 .q-PSV7UA {
            height: auto;
            left: 32px;
            letter-spacing: 2.56px;
            line-height: 36.8px;
            text-align: left;
            top: 8px;
            white-space: nowrap;
            width: auto;
        }

        .desktop-1 .rectangle-5-bR8jaq {
            background-color: transparent;
            border: 1px solid;
            border-color: var(--white);
            height: 55px;
            left: 99px;
            position: absolute;
            top: -1px;
            width: 177px;
        }

        .desktop-1 .a11-PSV7UA {
            background-color: transparent;
            height: auto;
            left: 130px;
            letter-spacing: 2.56px;
            line-height: 36.8px;
            position: absolute;
            text-align: left;
            top: 8px;
            width: 130px;
        }

        .desktop-1 .rectangle-5-SawFZ7 {
            background-color: transparent;
            border: 1px solid;
            border-color: var(--white);
            height: 55px;
            left: 274px;
            position: absolute;
            top: -1px;
            width: 120px;
        }

        .desktop-1 .p-BNLOE4 {
            height: 53px;
            left: 28px;
            top: 577px;
            width: 399px;
        }

        .desktop-1 .rectangle-5-VJSH7j {
            background-color: transparent;
            border: 1px solid;
            border-color: var(--white);
            height: 55px;
            left: -1px;
            position: absolute;
            top: -1px;
            width: 102px;
        }

        .desktop-1 .p-VJSH7j {
            height: auto;
            left: 32px;
            letter-spacing: 2.56px;
            line-height: 36.8px;
            text-align: left;
            top: 8px;
            white-space: nowrap;
            width: auto;
        }

        .desktop-1 .rectangle-5-9r8Rvx {
            background-color: transparent;
            border: 1px solid;
            border-color: var(--white);
            height: 55px;
            left: 99px;
            position: absolute;
            top: -1px;
            width: 177px;
        }

        .desktop-1 .a10-VJSH7j {
            background-color: transparent;
            height: auto;
            left: 130px;
            letter-spacing: 2.56px;
            line-height: 36.8px;
            position: absolute;
            text-align: left;
            top: 8px;
            width: 130px;
        }

        .desktop-1 .rectangle-5-Tir7pv {
            background-color: transparent;
            border: 1px solid;
            border-color: var(--white);
            height: 55px;
            left: 274px;
            position: absolute;
            top: -1px;
            width: 120px;
        }

        .desktop-1 .it-BNLOE4 {
            height: 53px;
            left: 28px;
            top: 524px;
            width: 399px;
        }

        .desktop-1 .rectangle-5-kUygQt {
            background-color: transparent;
            border: 1px solid;
            border-color: var(--white);
            height: 55px;
            left: -1px;
            position: absolute;
            top: -1px;
            width: 102px;
        }

        .desktop-1 .it-kUygQt {
            height: auto;
            left: 32px;
            letter-spacing: 2.56px;
            line-height: 36.8px;
            text-align: left;
            top: 8px;
            white-space: nowrap;
            width: auto;
        }

        .desktop-1 .rectangle-5-uPh8p6 {
            background-color: transparent;
            border: 1px solid;
            border-color: var(--white);
            height: 55px;
            left: 99px;
            position: absolute;
            top: -1px;
            width: 177px;
        }

        .desktop-1 .a9-kUygQt {
            background-color: transparent;
            height: auto;
            left: 130px;
            letter-spacing: 2.56px;
            line-height: 36.8px;
            position: absolute;
            text-align: left;
            top: 8px;
            width: 130px;
        }

        .desktop-1 .rectangle-5-gVVo04 {
            background-color: transparent;
            border: 1px solid;
            border-color: var(--white);
            height: 55px;
            left: 274px;
            position: absolute;
            top: -1px;
            width: 120px;
        }

        .desktop-1 .is-BNLOE4 {
            height: 53px;
            left: 28px;
            top: 471px;
            width: 399px;
        }

        .desktop-1 .rectangle-5-mx4oKo {
            background-color: transparent;
            border: 1px solid;
            border-color: var(--white);
            height: 55px;
            left: -1px;
            position: absolute;
            top: -1px;
            width: 102px;
        }

        .desktop-1 .is-mx4oKo {
            height: auto;
            left: 32px;
            letter-spacing: 2.56px;
            line-height: 36.8px;
            text-align: left;
            top: 8px;
            white-space: nowrap;
            width: auto;
        }

        .desktop-1 .rectangle-5-lFsZQx {
            background-color: transparent;
            border: 1px solid;
            border-color: var(--white);
            height: 55px;
            left: 99px;
            position: absolute;
            top: -1px;
            width: 177px;
        }

        .desktop-1 .a8-mx4oKo {
            background-color: transparent;
            height: auto;
            left: 130px;
            letter-spacing: 2.56px;
            line-height: 36.8px;
            position: absolute;
            text-align: left;
            top: 8px;
            width: 130px;
        }

        .desktop-1 .rectangle-5-VxL000 {
            background-color: transparent;
            border: 1px solid;
            border-color: var(--white);
            height: 55px;
            left: 274px;
            position: absolute;
            top: -1px;
            width: 120px;
        }

        .desktop-1 .ir-BNLOE4 {
            height: 53px;
            left: 28px;
            top: 418px;
            width: 399px;
        }

        .desktop-1 .rectangle-5-VtK8su {
            background-color: transparent;
            border: 1px solid;
            border-color: var(--white);
            height: 55px;
            left: -1px;
            position: absolute;
            top: -1px;
            width: 102px;
        }

        .desktop-1 .ir-VtK8su {
            height: auto;
            left: 32px;
            letter-spacing: 2.56px;
            line-height: 36.8px;
            text-align: left;
            top: 8px;
            white-space: nowrap;
            width: auto;
        }

        .desktop-1 .rectangle-5-WOBGgg {
            background-color: transparent;
            border: 1px solid;
            border-color: var(--white);
            height: 55px;
            left: 99px;
            position: absolute;
            top: -1px;
            width: 177px;
        }

        .desktop-1 .a7-VtK8su {
            background-color: transparent;
            height: auto;
            left: 130px;
            letter-spacing: 2.56px;
            line-height: 36.8px;
            position: absolute;
            text-align: left;
            top: 8px;
            width: 130px;
        }

        .desktop-1 .rectangle-5-hAxm9X {
            background-color: transparent;
            border: 1px solid;
            border-color: var(--white);
            height: 55px;
            left: 274px;
            position: absolute;
            top: -1px;
            width: 120px;
        }

        .desktop-1 .vtr-BNLOE4 {
            height: 53px;
            left: 28px;
            top: 365px;
            width: 399px;
        }

        .desktop-1 .rectangle-5-CPUTgU {
            background-color: transparent;
            border: 1px solid;
            border-color: var(--white);
            height: 55px;
            left: -1px;
            position: absolute;
            top: -1px;
            width: 102px;
        }

        .desktop-1 .vtr-CPUTgU {
            height: auto;
            left: 32px;
            letter-spacing: 2.56px;
            line-height: 36.8px;
            text-align: left;
            top: 8px;
            white-space: nowrap;
            width: auto;
        }

        .desktop-1 .rectangle-5-68TLP6 {
            background-color: transparent;
            border: 1px solid;
            border-color: var(--white);
            height: 55px;
            left: 99px;
            position: absolute;
            top: -1px;
            width: 177px;
        }

        .desktop-1 .a6-CPUTgU {
            background-color: transparent;
            height: auto;
            left: 130px;
            letter-spacing: 2.56px;
            line-height: 36.8px;
            position: absolute;
            text-align: left;
            top: 8px;
            width: 130px;
        }

        .desktop-1 .rectangle-5-UExGn2 {
            background-color: transparent;
            border: 1px solid;
            border-color: var(--white);
            height: 55px;
            left: 274px;
            position: absolute;
            top: -1px;
            width: 120px;
        }

        .desktop-1 .vst-BNLOE4 {
            height: 53px;
            left: 28px;
            top: 312px;
            width: 399px;
        }

        .desktop-1 .rectangle-5-wHRj3i {
            background-color: transparent;
            border: 1px solid;
            border-color: var(--white);
            height: 55px;
            left: -1px;
            position: absolute;
            top: -1px;
            width: 102px;
        }

        .desktop-1 .vst-wHRj3i {
            height: auto;
            left: 32px;
            letter-spacing: 2.56px;
            line-height: 36.8px;
            text-align: left;
            top: 8px;
            white-space: nowrap;
            width: auto;
        }

        .desktop-1 .rectangle-5-bx4fTC {
            background-color: transparent;
            border: 1px solid;
            border-color: var(--white);
            height: 55px;
            left: 99px;
            position: absolute;
            top: -1px;
            width: 177px;
        }

        .desktop-1 .a5-wHRj3i {
            background-color: transparent;
            height: auto;
            left: 130px;
            letter-spacing: 2.56px;
            line-height: 36.8px;
            position: absolute;
            text-align: left;
            top: 8px;
            width: 130px;
        }

        .desktop-1 .rectangle-5-HyNhJk {
            background-color: transparent;
            border: 1px solid;
            border-color: var(--white);
            height: 55px;
            left: 274px;
            position: absolute;
            top: -1px;
            width: 120px;
        }

        .desktop-1 .vrs-BNLOE4 {
            height: 53px;
            left: 28px;
            top: 259px;
            width: 399px;
        }

        .desktop-1 .rectangle-5-w0mLix {
            background-color: transparent;
            border: 1px solid;
            border-color: var(--white);
            height: 55px;
            left: -1px;
            position: absolute;
            top: -1px;
            width: 102px;
        }

        .desktop-1 .vrs-w0mLix {
            height: auto;
            left: 32px;
            letter-spacing: 2.56px;
            line-height: 36.8px;
            text-align: left;
            top: 8px;
            white-space: nowrap;
            width: auto;
        }

        .desktop-1 .rectangle-5-nYzD34 {
            background-color: transparent;
            border: 1px solid;
            border-color: var(--white);
            height: 55px;
            left: 99px;
            position: absolute;
            top: -1px;
            width: 177px;
        }

        .desktop-1 .a4-w0mLix {
            background-color: transparent;
            height: auto;
            left: 130px;
            letter-spacing: 2.56px;
            line-height: 36.8px;
            position: absolute;
            text-align: left;
            top: 8px;
            width: 130px;
        }

        .desktop-1 .rectangle-5-rj0Qaz {
            background-color: transparent;
            border: 1px solid;
            border-color: var(--white);
            height: 55px;
            left: 274px;
            position: absolute;
            top: -1px;
            width: 120px;
        }

        .desktop-1 .vt-BNLOE4 {
            height: 53px;
            left: 28px;
            top: 206px;
            width: 399px;
        }

        .desktop-1 .rectangle-5-KwAIRF {
            background-color: transparent;
            border: 1px solid;
            border-color: var(--white);
            height: 55px;
            left: -1px;
            position: absolute;
            top: -1px;
            width: 102px;
        }

        .desktop-1 .vt-KwAIRF {
            height: auto;
            left: 32px;
            letter-spacing: 2.56px;
            line-height: 36.8px;
            text-align: left;
            top: 8px;
            white-space: nowrap;
            width: auto;
        }

        .desktop-1 .rectangle-5-xFxVcf {
            background-color: transparent;
            border: 1px solid;
            border-color: var(--white);
            height: 55px;
            left: 99px;
            position: absolute;
            top: -1px;
            width: 177px;
        }

        .desktop-1 .a3-KwAIRF {
            background-color: transparent;
            height: auto;
            left: 130px;
            letter-spacing: 2.56px;
            line-height: 36.8px;
            position: absolute;
            text-align: left;
            top: 8px;
            width: 130px;
        }

        .desktop-1 .rectangle-5-RQtOan {
            background-color: transparent;
            border: 1px solid;
            border-color: var(--white);
            height: 55px;
            left: 274px;
            position: absolute;
            top: -1px;
            width: 120px;
        }

        .desktop-1 .vs-BNLOE4 {
            height: 53px;
            left: 28px;
            top: 153px;
            width: 399px;
        }

        .desktop-1 .rectangle-5-oCiL5X {
            background-color: transparent;
            border: 1px solid;
            border-color: var(--white);
            height: 55px;
            left: -1px;
            position: absolute;
            top: -1px;
            width: 102px;
        }

        .desktop-1 .vs-oCiL5X {
            height: auto;
            left: 32px;
            letter-spacing: 2.56px;
            line-height: 36.8px;
            text-align: left;
            top: 8px;
            white-space: nowrap;
            width: auto;
        }

        .desktop-1 .rectangle-5-l1w2Ym {
            background-color: transparent;
            border: 1px solid;
            border-color: var(--white);
            height: 55px;
            left: 99px;
            position: absolute;
            top: -1px;
            width: 177px;
        }

        .desktop-1 .a2-oCiL5X {
            background-color: transparent;
            height: auto;
            left: 130px;
            letter-spacing: 2.56px;
            line-height: 36.8px;
            position: absolute;
            text-align: left;
            top: 8px;
            width: 130px;
        }

        .desktop-1 .rectangle-5-h0cxms {
            background-color: transparent;
            border: 1px solid;
            border-color: var(--white);
            height: 55px;
            left: 274px;
            position: absolute;
            top: -1px;
            width: 120px;
        }

        .desktop-1 .vr-BNLOE4 {
            height: 53px;
            left: 28px;
            top: 100px;
            width: 399px;
        }

        .desktop-1 .rectangle-5-VKmIZQ {
            background-color: transparent;
            border: 1px solid;
            border-color: var(--white);
            height: 55px;
            left: -1px;
            position: absolute;
            top: -1px;
            width: 102px;
        }

        .desktop-1 .vr-VKmIZQ {
            height: auto;
            left: 32px;
            letter-spacing: 2.56px;
            line-height: 36.8px;
            text-align: left;
            top: 8px;
            white-space: nowrap;
            width: auto;
        }

        .desktop-1 .rectangle-5-GG2tS4 {
            background-color: transparent;
            border: 1px solid;
            border-color: var(--white);
            height: 55px;
            left: 99px;
            position: absolute;
            top: -1px;
            width: 177px;
        }

        .desktop-1 .a1-VKmIZQ {
            background-color: transparent;
            height: auto;
            left: 130px;
            letter-spacing: 2.56px;
            line-height: 36.8px;
            position: absolute;
            text-align: left;
            top: 8px;
            width: 130px;
        }

        .desktop-1 .rectangle-5-QC725P {
            background-color: transparent;
            border: 1px solid;
            border-color: var(--white);
            height: 55px;
            left: 274px;
            position: absolute;
            top: -1px;
            width: 120px;
        }

        .desktop-1 .header-Ys8k0x {
            background-color: transparent;
            height: 75px;
            left: 86px;
            position: absolute;
            top: 33px;
            width: 1758px;
        }

        .desktop-1 .rectangle-2-POyVWW {
            background-color: var(--white);
            border: 9px solid;
            border-color: var(--black);
            height: 90px;
            left: 1234px;
            position: absolute;
            top: -6px;
            width: 525px;
        }

        .desktop-1 .title-POyVWW {
            background-color: transparent;
            color: var(--black);
            font-family: var(--font-family-fjalla_one);
            font-size: var(--font-size-xxl);
            font-style: normal;
            font-weight: 400;
            height: auto;
            left: 1309px;
            letter-spacing: 3.84px;
            line-height: 60.3px;
            position: absolute;
            text-align: left;
            top: 9px;
            width: 376px;
        }

        .desktop-1 .rectangle-2-d4Ns1Q {
            background-color: #0033ff;
            border: 9px solid;
            border-color: var(--black);
            height: 90px;
            left: 510px;
            position: absolute;
            top: -6px;
            width: 730px;
        }

        .desktop-1 .gardu-induk-pekalongan-POyVWW {
            background-color: transparent;
            color: var(--white);
            font-family: var(--font-family-fjalla_one);
            font-size: var(--font-size-xxl);
            font-style: normal;
            font-weight: 400;
            height: auto;
            left: 588px;
            letter-spacing: 3.84px;
            line-height: 60.3px;
            position: absolute;
            text-align: left;
            top: 0px;
            width: 574px;
        }

        .desktop-1 .tanggal-POyVWW {
            background-color: transparent;
            color: #00ff6a;
            font-family: var(--font-family-fjalla_one);
            font-size: var(--font-size-s);
            font-style: normal;
            font-weight: 400;
            height: auto;
            left: 854px;
            letter-spacing: 0.96px;
            line-height: 15.1px;
            position: absolute;
            text-align: left;
            top: 57px;
            white-space: nowrap;
            width: auto;
        }

        .desktop-1 .rectangle-1-POyVWW {
            background-color: var(--white);
            border: 9px solid;
            border-color: var(--black);
            height: 90px;
            left: -9px;
            position: absolute;
            top: -6px;
            width: 525px;
        }

        .desktop-1 .pt-pln-persero-POyVWW {
            background-color: transparent;
            color: var(--black);
            font-family: var(--font-family-fjalla_one);
            font-size: var(--font-size-xxl);
            font-style: normal;
            font-weight: 400;
            height: auto;
            left: 100px;
            letter-spacing: 3.84px;
            line-height: 60.3px;
            position: absolute;
            text-align: left;
            top: 9px;
            width: 376px;
        }

        .desktop-1 .logo_pln-1-POyVWW {
            background-color: transparent;
            height: 72px;
            left: 26px;
            object-fit: cover;
            position: absolute;
            top: 3px;
            width: 52px;
        }

        .desktop-1 .ir {
            background-color: transparent;
            position: absolute;
        }

        .desktop-1 .is {
            background-color: transparent;
            position: absolute;
        }

        .desktop-1 .it {
            background-color: transparent;
            position: absolute;
        }

        .desktop-1 .k-v {
            background-color: transparent;
            height: auto;
            left: 313px;
            letter-spacing: 2.56px;
            line-height: 36.8px;
            position: absolute;
            text-align: left;
            top: 8px;
            width: 49px;
        }

        .desktop-1 .measurement {
            background-color: transparent;
            position: absolute;
        }

        .desktop-1 .p {
            background-color: transparent;
            position: absolute;
        }

        .desktop-1 .q {
            background-color: transparent;
            position: absolute;
        }

        .desktop-1 .signal-1 {
            background-color: transparent;
            left: 11px;
            position: absolute;
        }

        .desktop-1 .signal-2 {
            background-color: transparent;
            position: absolute;
        }

        .desktop-1 .vr {
            background-color: transparent;
            position: absolute;
        }

        .desktop-1 .vrs {
            background-color: transparent;
            position: absolute;
        }

        .desktop-1 .vs {
            background-color: transparent;
            position: absolute;
        }

        .desktop-1 .vst {
            background-color: transparent;
            position: absolute;
        }

        .desktop-1 .vt {
            background-color: transparent;
            position: absolute;
        }

        .desktop-1 .vtr {
            background-color: transparent;
            position: absolute;
        }
    </style>
</head>

<body style="margin: 0;background: #252424;"><input type="hidden" id="anPageName" name="page" value="desktop-1">
    <div class="container-center-horizontal">
        <div class="desktop-1 screen " data-id="12:85">
            <div class="alarm-Ys8k0x" data-id="18:75">
                <div class="signal50-0AvDFH" data-id="18:54">
                    <div class="rectangle-50-XqiMjV" data-id="3:414"></div>
                    <div class="signal-50-XqiMjV valign-text-middle fjallaone-normal-black-16px" data-id="3:415">SIGNAL
                        50</div>
                </div>
                <div class="signal45-0AvDFH" data-id="18:49">
                    <div class="rectangle-45-8cinyG" data-id="3:475"></div>
                    <div class="signal-45-8cinyG valign-text-middle fjallaone-normal-black-16px" data-id="3:476">SIGNAL
                        45</div>
                </div>
                <div class="signal51-0AvDFH" data-id="18:55">
                    <div class="rectangle-51-VnfSgW" data-id="3:427"></div>
                    <div class="signal-51-VnfSgW valign-text-middle fjallaone-normal-black-16px" data-id="3:428">SIGNAL
                        51</div>
                </div>
                <div class="signal46-0AvDFH" data-id="18:50">
                    <div class="rectangle-46-1beIAb" data-id="3:478"></div>
                    <div class="signal-46-1beIAb valign-text-middle fjallaone-normal-black-16px" data-id="3:479">SIGNAL
                        46</div>
                </div>
                <div class="signal53-0AvDFH" data-id="18:57">
                    <div class="rectangle-53-ce6cbq" data-id="3:451"></div>
                    <div class="signal-53-ce6cbq valign-text-middle fjallaone-normal-black-16px" data-id="3:452">SIGNAL
                        53</div>
                </div>
                <div class="signal48-0AvDFH" data-id="18:52">
                    <div class="rectangle-48-5IJ1Hb" data-id="3:508"></div>
                    <div class="signal-48-5IJ1Hb valign-text-middle fjallaone-normal-black-16px" data-id="3:509">SIGNAL
                        48</div>
                </div>
                <div class="signal52-0AvDFH" data-id="18:56">
                    <div class="rectangle-52-O4HqX1" data-id="3:439"></div>
                    <div class="signal-52-O4HqX1 valign-text-middle fjallaone-normal-black-16px" data-id="3:440">SIGNAL
                        52</div>
                </div>
                <div class="signal47-0AvDFH" data-id="18:51">
                    <div class="rectangle-47-5NuwOv" data-id="3:481"></div>
                    <div class="signal-47-5NuwOv valign-text-middle fjallaone-normal-black-16px" data-id="3:482">SIGNAL
                        47</div>
                </div>
                <div class="signal54-0AvDFH" data-id="18:58">
                    <div class="rectangle-54-FTMNZe" data-id="3:454"></div>
                    <div class="signal-54-FTMNZe valign-text-middle fjallaone-normal-black-16px" data-id="3:455">SIGNAL
                        54</div>
                </div>
                <div class="signal49-0AvDFH" data-id="18:53">
                    <div class="rectangle-49-gL4xr7" data-id="3:511"></div>
                    <div class="signal-49-gL4xr7 valign-text-middle fjallaone-normal-black-16px" data-id="3:512">SIGNAL
                        49</div>
                </div>
                <div class="signal55-0AvDFH" data-id="18:59">
                    <div class="rectangle-55-hINH5C" data-id="3:417"></div>
                    <div class="signal-55-hINH5C valign-text-middle fjallaone-normal-black-16px" data-id="3:418">SIGNAL
                        55</div>
                </div>
                <div class="signal56-0AvDFH" data-id="18:60">
                    <div class="rectangle-56-HUIwWE" data-id="3:430"></div>
                    <div class="signal-56-HUIwWE valign-text-middle fjallaone-normal-black-16px" data-id="3:431">SIGNAL
                        56</div>
                </div>
                <div class="signal58-0AvDFH" data-id="18:62">
                    <div class="rectangle-58-S7ZpZs" data-id="3:457"></div>
                    <div class="signal-58-S7ZpZs valign-text-middle fjallaone-normal-black-16px" data-id="3:458">SIGNAL
                        58</div>
                </div>
                <div class="signal57-0AvDFH" data-id="18:61">
                    <div class="rectangle-57-yaVUkg" data-id="3:442"></div>
                    <div class="signal-57-yaVUkg valign-text-middle fjallaone-normal-black-16px" data-id="3:443">SIGNAL
                        57</div>
                </div>
                <div class="signal59-0AvDFH" data-id="18:63">
                    <div class="rectangle-59-Jgs9Zz" data-id="3:460"></div>
                    <div class="signal-59-Jgs9Zz valign-text-middle fjallaone-normal-black-16px" data-id="3:461">SIGNAL
                        59</div>
                </div>
                <div class="signal60-0AvDFH" data-id="18:64">
                    <div class="rectangle-60-CC1jK2" data-id="3:420"></div>
                    <div class="signal-60-CC1jK2 valign-text-middle fjallaone-normal-black-16px" data-id="3:421">SIGNAL
                        60</div>
                </div>
                <div class="signal61-0AvDFH" data-id="18:65">
                    <div class="rectangle-61-NJ4hON" data-id="3:433"></div>
                    <div class="signal-61-NJ4hON valign-text-middle fjallaone-normal-black-16px" data-id="3:434">SIGNAL
                        61</div>
                </div>
                <div class="signal63-0AvDFH" data-id="18:67">
                    <div class="rectangle-63-wEphgc" data-id="3:463"></div>
                    <div class="signal-63-wEphgc valign-text-middle fjallaone-normal-black-16px" data-id="3:464">SIGNAL
                        63</div>
                </div>
                <div class="signal62-0AvDFH" data-id="18:66">
                    <div class="rectangle-62-hT83aN" data-id="3:445"></div>
                    <div class="signal-62-hT83aN valign-text-middle fjallaone-normal-black-16px" data-id="3:446">SIGNAL
                        62</div>
                </div>
                <div class="signal64-0AvDFH" data-id="18:69">
                    <div class="rectangle-64-ZmXZZ9" data-id="3:466"></div>
                    <div class="signal-64-ZmXZZ9 valign-text-middle fjallaone-normal-black-16px" data-id="3:467">SIGNAL
                        64</div>
                </div>
                <div class="signal65-0AvDFH" data-id="18:70">
                    <div class="rectangle-65-SoMfDh" data-id="3:423"></div>
                    <div class="signal-65-SoMfDh valign-text-middle fjallaone-normal-black-16px" data-id="3:424">SIGNAL
                        65</div>
                </div>
                <div class="signal66-0AvDFH" data-id="18:71">
                    <div class="rectangle-66-jPcLDv" data-id="3:436"></div>
                    <div class="signal-66-jPcLDv valign-text-middle fjallaone-normal-black-16px" data-id="3:437">SIGNAL
                        66</div>
                </div>
                <div class="signal68-0AvDFH" data-id="18:73">
                    <div class="rectangle-68-35oF4Y" data-id="3:469"></div>
                    <div class="signal-68-35oF4Y valign-text-middle fjallaone-normal-black-16px" data-id="3:470">SIGNAL
                        68</div>
                </div>
                <div class="signal67-0AvDFH" data-id="18:72">
                    <div class="rectangle-67-71sie6" data-id="3:448"></div>
                    <div class="signal-67-71sie6 valign-text-middle fjallaone-normal-black-16px" data-id="3:449">SIGNAL
                        67</div>
                </div>
                <div class="signal69-0AvDFH" data-id="18:74">
                    <div class="rectangle-69-8Oalgk" data-id="3:472"></div>
                    <div class="signal-69-8Oalgk valign-text-middle fjallaone-normal-black-16px" data-id="3:473">SIGNAL
                        69</div>
                </div>
                <div class="signal-1-0AvDFH signal-1" data-id="18:3">
                    <div class="rectangle-1-sYeNs3" data-id="3:108"></div>
                    <div class="signal-1-sYeNs3 valign-text-middle signal-1 fjallaone-normal-black-16px"
                        data-id="3:109">SIGNAL 1</div>
                </div>
                <div class="signal5-0AvDFH" data-id="18:7">
                    <div class="rectangle-5-br5aaw" data-id="3:215"></div>
                    <div class="signal-5-br5aaw valign-text-middle fjallaone-normal-black-16px" data-id="3:216">SIGNAL 5
                    </div>
                </div>
                <div class="signal10-0AvDFH" data-id="18:11">
                    <div class="rectangle-10-lyj1Pk" data-id="3:230"></div>
                    <div class="signal-10-lyj1Pk valign-text-middle fjallaone-normal-black-16px" data-id="3:231">SIGNAL
                        10</div>
                </div>
                <div class="signal15-0AvDFH" data-id="18:19">
                    <div class="rectangle-15-RWTMEi" data-id="3:275"></div>
                    <div class="signal-15-RWTMEi valign-text-middle fjallaone-normal-black-16px" data-id="3:276">SIGNAL
                        15</div>
                </div>
                <div class="signal20-0AvDFH" data-id="18:24">
                    <div class="rectangle-20-RorFWr" data-id="3:290"></div>
                    <div class="signal-20-RorFWr valign-text-middle fjallaone-normal-black-16px" data-id="3:291">SIGNAL
                        20</div>
                </div>
                <div class="signal25-0AvDFH" data-id="18:33">
                    <div class="rectangle-25-fHHb9G" data-id="3:305"></div>
                    <div class="signal-25-fHHb9G valign-text-middle fjallaone-normal-black-16px" data-id="3:306">SIGNAL
                        25</div>
                </div>
                <div class="signal30-0AvDFH" data-id="18:34">
                    <div class="rectangle-30-Y0jUco" data-id="3:350"></div>
                    <div class="signal-30-Y0jUco valign-text-middle fjallaone-normal-black-16px" data-id="3:351">SIGNAL
                        30</div>
                </div>
                <div class="signal35-0AvDFH" data-id="18:39">
                    <div class="rectangle-35-x9ygMq" data-id="3:365"></div>
                    <div class="signal-35-x9ygMq valign-text-middle fjallaone-normal-black-16px" data-id="3:366">SIGNAL
                        35</div>
                </div>
                <div class="signal40-0AvDFH" data-id="18:44">
                    <div class="rectangle-40-f0Xanx" data-id="3:380"></div>
                    <div class="signal-40-f0Xanx valign-text-middle fjallaone-normal-black-16px" data-id="3:381">SIGNAL
                        40</div>
                </div>
                <div class="signal5a-0AvDFH" data-id="18:12">
                    <div class="rectangle-5-pmxfOL" data-id="3:112"></div>
                    <div class="signal-5a-pmxfOL valign-text-middle fjallaone-normal-black-16px" data-id="3:113">SIGNAL
                        5a</div>
                </div>
                <div class="signal9-0AvDFH" data-id="18:13">
                    <div class="rectangle-9-Yw47vs" data-id="3:218"></div>
                    <div class="signal-9-Yw47vs valign-text-middle fjallaone-normal-black-16px" data-id="3:219">SIGNAL 9
                    </div>
                </div>
                <div class="signal14-0AvDFH" data-id="18:18">
                    <div class="rectangle-14-abpxyv" data-id="3:233"></div>
                    <div class="signal-14-abpxyv valign-text-middle fjallaone-normal-black-16px" data-id="3:234">SIGNAL
                        14</div>
                </div>
                <div class="signal19-0AvDFH" data-id="18:23">
                    <div class="rectangle-19-XQZ7Qx" data-id="3:278"></div>
                    <div class="signal-19-XQZ7Qx valign-text-middle fjallaone-normal-black-16px" data-id="3:279">SIGNAL
                        19</div>
                </div>
                <div class="signal24-0AvDFH" data-id="18:28">
                    <div class="rectangle-24-rmwYck" data-id="3:293"></div>
                    <div class="signal-24-rmwYck valign-text-middle fjallaone-normal-black-16px" data-id="3:294">SIGNAL
                        24</div>
                </div>
                <div class="signal29-0AvDFH" data-id="18:29">
                    <div class="rectangle-29-DftyQU" data-id="3:308"></div>
                    <div class="signal-29-DftyQU valign-text-middle fjallaone-normal-black-16px" data-id="3:309">SIGNAL
                        29</div>
                </div>
                <div class="signal34-0AvDFH" data-id="18:38">
                    <div class="rectangle-34-Ax0JC9" data-id="3:353"></div>
                    <div class="signal-34-Ax0JC9 valign-text-middle fjallaone-normal-black-16px" data-id="3:354">SIGNAL
                        34</div>
                </div>
                <div class="signal39-0AvDFH" data-id="18:43">
                    <div class="rectangle-39-h2LafA" data-id="3:368"></div>
                    <div class="signal-39-h2LafA valign-text-middle fjallaone-normal-black-16px" data-id="3:369">SIGNAL
                        39</div>
                </div>
                <div class="signal44-0AvDFH" data-id="18:48">
                    <div class="rectangle-44-OQ5iCL" data-id="3:383"></div>
                    <div class="signal-44-OQ5iCL valign-text-middle fjallaone-normal-black-16px" data-id="3:384">SIGNAL
                        44</div>
                </div>
                <div class="signal4-0AvDFH" data-id="18:6">
                    <div class="rectangle-4-JgUiqj" data-id="3:121"></div>
                    <div class="signal-4-JgUiqj valign-text-middle fjallaone-normal-black-16px" data-id="3:122">SIGNAL 4
                    </div>
                </div>
                <div class="signal8-0AvDFH" data-id="18:10">
                    <div class="rectangle-8-xeOiyb" data-id="3:221"></div>
                    <div class="signal-8-xeOiyb valign-text-middle fjallaone-normal-black-16px" data-id="3:222">SIGNAL 8
                    </div>
                </div>
                <div class="signal13-0AvDFH" data-id="18:16">
                    <div class="rectangle-13-Q1UOJq" data-id="3:236"></div>
                    <div class="signal-13-Q1UOJq valign-text-middle fjallaone-normal-black-16px" data-id="3:237">SIGNAL
                        13</div>
                </div>
                <div class="signal18-0AvDFH" data-id="18:22">
                    <div class="rectangle-18-2daefs" data-id="3:281"></div>
                    <div class="signal-18-2daefs valign-text-middle fjallaone-normal-black-16px" data-id="3:282">SIGNAL
                        18</div>
                </div>
                <div class="signal23-0AvDFH" data-id="18:27">
                    <div class="rectangle-23-dchVxi" data-id="3:296"></div>
                    <div class="signal-23-dchVxi valign-text-middle fjallaone-normal-black-16px" data-id="3:297">SIGNAL
                        23</div>
                </div>
                <div class="signal28-0AvDFH" data-id="18:30">
                    <div class="rectangle-28-CfMhkm" data-id="3:311"></div>
                    <div class="signal-28-CfMhkm valign-text-middle fjallaone-normal-black-16px" data-id="3:312">SIGNAL
                        28</div>
                </div>
                <div class="signal33-0AvDFH" data-id="18:37">
                    <div class="rectangle-33-Ba1AwH" data-id="3:356"></div>
                    <div class="signal-33-Ba1AwH valign-text-middle fjallaone-normal-black-16px" data-id="3:357">SIGNAL
                        33</div>
                </div>
                <div class="signal38-0AvDFH" data-id="18:42">
                    <div class="rectangle-38-z5IJ9a" data-id="3:371"></div>
                    <div class="signal-38-z5IJ9a valign-text-middle fjallaone-normal-black-16px" data-id="3:372">SIGNAL
                        38</div>
                </div>
                <div class="signal43-0AvDFH" data-id="18:47">
                    <div class="rectangle-43-tDuZB1" data-id="3:386"></div>
                    <div class="signal-43-tDuZB1 valign-text-middle fjallaone-normal-black-16px" data-id="3:387">SIGNAL
                        43</div>
                </div>
                <div class="signal3-0AvDFH" data-id="18:5">
                    <div class="rectangle-3-OsIyRa" data-id="3:118"></div>
                    <div class="signal-3-OsIyRa valign-text-middle fjallaone-normal-black-16px" data-id="3:119">SIGNAL 3
                    </div>
                </div>
                <div class="signal7-0AvDFH" data-id="18:9">
                    <div class="rectangle-7-ASqS2S" data-id="3:224"></div>
                    <div class="signal-7-ASqS2S valign-text-middle fjallaone-normal-black-16px" data-id="3:225">SIGNAL 7
                    </div>
                </div>
                <div class="signal12-0AvDFH" data-id="18:15">
                    <div class="rectangle-12-xRMI3h" data-id="3:239"></div>
                    <div class="signal-12-xRMI3h valign-text-middle fjallaone-normal-black-16px" data-id="3:240">SIGNAL
                        12</div>
                </div>
                <div class="signal17-0AvDFH" data-id="18:21">
                    <div class="rectangle-17-suxxWg" data-id="3:284"></div>
                    <div class="signal-17-suxxWg valign-text-middle fjallaone-normal-black-16px" data-id="3:285">SIGNAL
                        17</div>
                </div>
                <div class="signal22-0AvDFH" data-id="18:26">
                    <div class="rectangle-22-Xqjgs8" data-id="3:299"></div>
                    <div class="signal-22-Xqjgs8 valign-text-middle fjallaone-normal-black-16px" data-id="3:300">SIGNAL
                        22</div>
                </div>
                <div class="signal27-0AvDFH" data-id="18:31">
                    <div class="rectangle-27-EkGsWW" data-id="3:314"></div>
                    <div class="signal-27-EkGsWW valign-text-middle fjallaone-normal-black-16px" data-id="3:315">SIGNAL
                        27</div>
                </div>
                <div class="signal32-0AvDFH" data-id="18:36">
                    <div class="rectangle-32-TAGxXw" data-id="3:359"></div>
                    <div class="signal-32-TAGxXw valign-text-middle fjallaone-normal-black-16px" data-id="3:360">SIGNAL
                        32</div>
                </div>
                <div class="signal37-0AvDFH" data-id="18:41">
                    <div class="rectangle-37-CFfQI1" data-id="3:374"></div>
                    <div class="signal-37-CFfQI1 valign-text-middle fjallaone-normal-black-16px" data-id="3:375">SIGNAL
                        37</div>
                </div>
                <div class="signal42-0AvDFH" data-id="18:46">
                    <div class="rectangle-42-T67D9S" data-id="3:389"></div>
                    <div class="signal-42-T67D9S valign-text-middle fjallaone-normal-black-16px" data-id="3:390">SIGNAL
                        42</div>
                </div>
                <div class="signal-2-0AvDFH signal-2" data-id="18:4">
                    <div class="rectangle-2-y7jNHr" data-id="3:115"></div>
                    <div class="signal-2-y7jNHr valign-text-middle signal-2 fjallaone-normal-black-16px"
                        data-id="3:116">SIGNAL 2</div>
                </div>
                <div class="signal6-0AvDFH" data-id="18:8">
                    <div class="rectangle-6-xTcHmK" data-id="3:227"></div>
                    <div class="signal-6-xTcHmK valign-text-middle fjallaone-normal-black-16px" data-id="3:228">SIGNAL 6
                    </div>
                </div>
                <div class="signal11-0AvDFH" data-id="18:14">
                    <div class="rectangle-11-sB5LfW" data-id="3:242"></div>
                    <div class="signal-11-sB5LfW valign-text-middle fjallaone-normal-black-16px" data-id="3:243">SIGNAL
                        11</div>
                </div>
                <div class="signal16-0AvDFH" data-id="18:20">
                    <div class="rectangle-16-JD1n5a" data-id="3:287"></div>
                    <div class="signal-16-JD1n5a valign-text-middle fjallaone-normal-black-16px" data-id="3:288">SIGNAL
                        16</div>
                </div>
                <div class="signal21-0AvDFH" data-id="18:25">
                    <div class="rectangle-21-wZlhtI" data-id="3:302"></div>
                    <div class="signal-21-wZlhtI valign-text-middle fjallaone-normal-black-16px" data-id="3:303">SIGNAL
                        21</div>
                </div>
                <div class="signal26-0AvDFH" data-id="18:32">
                    <div class="rectangle-26-W8qox8" data-id="3:317"></div>
                    <div class="signal-26-W8qox8 valign-text-middle fjallaone-normal-black-16px" data-id="3:318">SIGNAL
                        26</div>
                </div>
                <div class="signal31-0AvDFH" data-id="18:35">
                    <div class="rectangle-31-bn5xI7" data-id="3:362"></div>
                    <div class="signal-31-bn5xI7 valign-text-middle fjallaone-normal-black-16px" data-id="3:363">SIGNAL
                        31</div>
                </div>
                <div class="signal36-0AvDFH" data-id="18:40">
                    <div class="rectangle-36-ZGLyx2" data-id="3:377"></div>
                    <div class="signal-36-ZGLyx2 valign-text-middle fjallaone-normal-black-16px" data-id="3:378">SIGNAL
                        36</div>
                </div>
                <div class="signal41-0AvDFH" data-id="18:45">
                    <div class="rectangle-41-ohRHDJ" data-id="3:392"></div>
                    <div class="signal-41-ohRHDJ valign-text-middle fjallaone-normal-black-16px" data-id="3:393">SIGNAL
                        41</div>
                </div>
                <div class="kotak-sinyal-0AvDFH" data-id="12:87">
                    <div class="rectangle-4-xwnY9r" data-id="1:33"></div>
                    <div class="rectangle-4-Wu6Ge3" data-id="1:34"></div>
                    <div class="relay-operated-xwnY9r fjallaone-normal-white-32px" data-id="1:35">Relay Operated</div>
                    <div class="rectangle-4-VyPSHk" data-id="1:26"></div>
                    <div class="rectangle-4-uGOxIn" data-id="1:27"></div>
                    <div class="signal-xwnY9r fjallaone-normal-white-32px" data-id="1:29">SIGNAL</div>
                </div>
            </div>
            <div class="bay-Ys8k0x" data-id="26:2">
                <div class="bay1-kCx7qP" data-id="24:2">
                    <div class="bay1-mKko7V" data-id="24:3"></div>
                    <div class="bay1-xwxXxg valign-text-middle fjallaone-normal-black-24px" data-id="24:4">BAY1</div>
                </div>
                <div class="bay2-kCx7qP" data-id="24:10">
                    <div class="bay2-RKqlSC" data-id="24:11"></div>
                    <div class="bay2-UFvSna valign-text-middle fjallaone-normal-black-24px" data-id="24:12">BAY2</div>
                </div>
                <div class="bay3-kCx7qP" data-id="24:13">
                    <div class="bay3-5LvkQS" data-id="24:14"></div>
                    <div class="bay3-3IfNfQ valign-text-middle fjallaone-normal-black-24px" data-id="24:15">BAY3</div>
                </div>
                <div class="bay4-kCx7qP" data-id="24:16">
                    <div class="bay4-6WK36Y" data-id="24:17"></div>
                    <div class="bay4-OxLxvc valign-text-middle fjallaone-normal-black-24px" data-id="24:18">BAY4</div>
                </div>
                <div class="bay5-kCx7qP" data-id="24:19">
                    <div class="bay5-Q5XVa3" data-id="24:20"></div>
                    <div class="bay5-hG6zxO valign-text-middle fjallaone-normal-black-24px" data-id="24:21">BAY5</div>
                </div>
                <div class="bay6-kCx7qP" data-id="24:22">
                    <div class="bay6-4Y1go2" data-id="24:23"></div>
                    <div class="bay6-Dz2XVP valign-text-middle fjallaone-normal-black-24px" data-id="24:24">BAY6</div>
                </div>
                <div class="bay7-kCx7qP" data-id="24:25">
                    <div class="bay7-bEdVnk" data-id="24:26"></div>
                    <div class="bay7-Id8k2b valign-text-middle fjallaone-normal-black-24px" data-id="24:27">BAY7</div>
                </div>
                <div class="bay8-kCx7qP" data-id="25:2">
                    <div class="bay8-ciLhrw" data-id="25:3"></div>
                    <div class="bay8-fRuNg5 valign-text-middle fjallaone-normal-black-24px" data-id="25:4">BAY8</div>
                </div>
                <div class="bay9-kCx7qP" data-id="25:6">
                    <div class="bay9-G6QKvS" data-id="25:7"></div>
                    <div class="bay9-djNN6u valign-text-middle fjallaone-normal-black-24px" data-id="25:8">BAY9</div>
                </div>
                <div class="rectangle-3-kCx7qP" data-id="31:2"></div>
            </div>
            <div class="measurement-Ys8k0x measurement" data-id="12:78">
                <div class="rectangle-3-BNLOE4" data-id="1:24"></div>
                <div class="rectangle-2-BNLOE4" data-id="1:22"></div>
                <div class="measurement-BNLOE4 measurement fjallaone-normal-white-32px" data-id="1:23">MEASUREMENT</div>
                <div class="q-BNLOE4 q" data-id="12:70">
                    <div class="rectangle-5-PSV7UA" data-id="12:71"></div>
                    <div class="q-PSV7UA q timesnewroman-regular-normal-white-32px" data-id="12:72">Q</div>
                    <div class="rectangle-5-bR8jaq" data-id="12:73"></div>
                    <div class="a11-PSV7UA timesnewroman-regular-normal-white-32px" data-id="12:74">A11</div>
                    <div class="rectangle-5-SawFZ7" data-id="12:75"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="12:76">kV</div>
                </div>
                <div class="p-BNLOE4 p" data-id="12:56">
                    <div class="rectangle-5-VJSH7j" data-id="12:57"></div>
                    <div class="p-VJSH7j p timesnewroman-regular-normal-white-32px" data-id="12:58">P</div>
                    <div class="rectangle-5-9r8Rvx" data-id="12:59"></div>
                    <div class="a10-VJSH7j timesnewroman-regular-normal-white-32px" data-id="12:60">A10</div>
                    <div class="rectangle-5-Tir7pv" data-id="12:61"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="12:62">kV</div>
                </div>
                <div class="it-BNLOE4 it" data-id="12:63">
                    <div class="rectangle-5-kUygQt" data-id="12:64"></div>
                    <div class="it-kUygQt it timesnewroman-regular-normal-white-32px" data-id="12:65">It</div>
                    <div class="rectangle-5-uPh8p6" data-id="12:66"></div>
                    <div class="a9-kUygQt timesnewroman-regular-normal-white-32px" data-id="12:67">A9</div>
                    <div class="rectangle-5-gVVo04" data-id="12:68"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="12:69">kV</div>
                </div>
                <div class="is-BNLOE4 is" data-id="12:48">
                    <div class="rectangle-5-mx4oKo" data-id="12:49"></div>
                    <div class="is-mx4oKo is timesnewroman-regular-normal-white-32px" data-id="12:50">Is</div>
                    <div class="rectangle-5-lFsZQx" data-id="12:51"></div>
                    <div class="a8-mx4oKo timesnewroman-regular-normal-white-32px" data-id="12:52">A8</div>
                    <div class="rectangle-5-VxL000" data-id="12:53"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="12:54">kV</div>
                </div>
                <div class="ir-BNLOE4 ir" data-id="12:34">
                    <div class="rectangle-5-VtK8su" data-id="12:35"></div>
                    <div class="ir-VtK8su ir timesnewroman-regular-normal-white-32px" data-id="12:36">Ir</div>
                    <div class="rectangle-5-WOBGgg" data-id="12:37"></div>
                    <div class="a7-VtK8su timesnewroman-regular-normal-white-32px" data-id="12:38">A7</div>
                    <div class="rectangle-5-hAxm9X" data-id="12:39"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="12:40">kV</div>
                </div>
                <div class="vtr-BNLOE4 vtr" data-id="12:41">
                    <div class="rectangle-5-CPUTgU" data-id="12:42"></div>
                    <div class="vtr-CPUTgU vtr timesnewroman-regular-normal-white-32px" data-id="12:43">Vtr</div>
                    <div class="rectangle-5-68TLP6" data-id="12:44"></div>
                    <div class="a6-CPUTgU timesnewroman-regular-normal-white-32px" data-id="12:45">A6</div>
                    <div class="rectangle-5-UExGn2" data-id="12:46"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="12:47">kV</div>
                </div>
                <div class="vst-BNLOE4 vst" data-id="12:27">
                    <div class="rectangle-5-wHRj3i" data-id="12:28"></div>
                    <div class="vst-wHRj3i vst timesnewroman-regular-normal-white-32px" data-id="12:29">Vst</div>
                    <div class="rectangle-5-bx4fTC" data-id="12:30"></div>
                    <div class="a5-wHRj3i timesnewroman-regular-normal-white-32px" data-id="12:31">A5</div>
                    <div class="rectangle-5-HyNhJk" data-id="12:32"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="12:33">kV</div>
                </div>
                <div class="vrs-BNLOE4 vrs" data-id="12:20">
                    <div class="rectangle-5-w0mLix" data-id="12:21"></div>
                    <div class="vrs-w0mLix vrs timesnewroman-regular-normal-white-32px" data-id="12:22">Vrs</div>
                    <div class="rectangle-5-nYzD34" data-id="12:23"></div>
                    <div class="a4-w0mLix timesnewroman-regular-normal-white-32px" data-id="12:24">A4</div>
                    <div class="rectangle-5-rj0Qaz" data-id="12:25"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="12:26">kV</div>
                </div>
                <div class="vt-BNLOE4 vt" data-id="12:13">
                    <div class="rectangle-5-KwAIRF" data-id="12:14"></div>
                    <div class="vt-KwAIRF vt timesnewroman-regular-normal-white-32px" data-id="12:15">Vt</div>
                    <div class="rectangle-5-xFxVcf" data-id="12:16"></div>
                    <div class="a3-KwAIRF timesnewroman-regular-normal-white-32px" data-id="12:17">A3</div>
                    <div class="rectangle-5-RQtOan" data-id="12:18"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="12:19">kV</div>
                </div>
                <div class="vs-BNLOE4 vs" data-id="12:6">
                    <div class="rectangle-5-oCiL5X" data-id="12:7"></div>
                    <div class="vs-oCiL5X vs timesnewroman-regular-normal-white-32px" data-id="12:8">Vs</div>
                    <div class="rectangle-5-l1w2Ym" data-id="12:9"></div>
                    <div class="a2-oCiL5X timesnewroman-regular-normal-white-32px" data-id="12:10">A2</div>
                    <div class="rectangle-5-h0cxms" data-id="12:11"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="12:12">kV</div>
                </div>
                <div class="vr-BNLOE4 vr" data-id="12:5">
                    <div class="rectangle-5-VKmIZQ" data-id="1:40"></div>
                    <div class="vr-VKmIZQ vr timesnewroman-regular-normal-white-32px" data-id="1:42">Vr</div>
                    <div class="rectangle-5-GG2tS4" data-id="2:3"></div>
                    <div class="a1-VKmIZQ timesnewroman-regular-normal-white-32px" data-id="2:4">A1</div>
                    <div class="rectangle-5-QC725P" data-id="2:36"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="2:37">kV</div>
                </div>
            </div>
            <header class="header-Ys8k0x" data-id="12:86">
                <div class="rectangle-2-POyVWW" data-id="1:11"></div>
                <h1 class="title-POyVWW" data-id="1:12">MAIN SINGLE LINE</h1>
                <div class="rectangle-2-d4Ns1Q" data-id="1:16"></div>
                <div class="gardu-induk-pekalongan-POyVWW" data-id="1:17">GARDU INDUK PEKALONGAN</div>
                <div class="tanggal-POyVWW" data-id="12:88">tanggal</div>
                <div class="rectangle-1-POyVWW" data-id="1:5"></div>
                <div class="pt-pln-persero-POyVWW" data-id="1:7">PT. PLN (Persero)</div><img class="logo_pln-1-POyVWW"
                    data-id="1:6"
                    src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                    anima-src="https://cdn.animaapp.com/projects/6789c1d6c445ac407d107907/releases/6789c389e973dcb9af037037/img/logo-pln-1.png"
                    alt="Logo_PLN 1">
            </header>
        </div>
    </div>
    <script src="launchpad-js/launchpad-banner.js" async></script>
    <script defer src="https://animaapp.s3.amazonaws.com/static/restart-btn.min.js"></script>
</body>

</html>
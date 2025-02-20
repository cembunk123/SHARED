<!DOCTYPE html>

<!-- This code was generated using AnimaApp.com. 
This code is a high-fidelity prototype.
Get developer-friendly React or HTML/CSS code for this project at: https://projects.animaapp.com?utm_source=hosted-code 
05/02/2025 05:39:59 -->

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
            --red: #ff0000;
            --red-2: #ff0004;
            --white: #ffffff;

            --font-size-l: 24px;
            --font-size-m: 16px;
            --font-size-s: 15px;
            --font-size-xl: 32px;
            --font-size-xs: 12px;
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

        .fjallaone-normal-white-15px {
            color: var(--white);
            font-family: var(--font-family-fjalla_one);
            font-size: var(--font-size-s);
            font-style: normal;
            font-weight: 400;
        }

        .fjallaone-normal-white-24px {
            color: var(--white);
            font-family: var(--font-family-fjalla_one);
            font-size: var(--font-size-l);
            font-style: normal;
            font-weight: 400;
        }

        :root {}


        /* screen - desktop-1 */

        .desktop-1 {
            background-color: #252424;
            height: 2189px;
            overflow: hidden;
            overflow-x: hidden;
            position: relative;
            width: 1920px;
        }

        .desktop-1 .bay-Ys8k0x {
            background-color: transparent;
            height: 72px;
            left: 92px;
            position: absolute;
            top: 2029px;
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
            background-color: var(--red-2);
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
            background-color: var(--red-2);
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
            background-color: var(--red-2);
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
            background-color: var(--red-2);
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
            background-color: var(--red-2);
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
            background-color: var(--red-2);
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
            background-color: var(--red-2);
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
            background-color: var(--red-2);
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
            background-color: var(--red-2);
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

        .desktop-1 .alarm-Ys8k0x {
            background-color: transparent;
            height: 962px;
            left: 100px;
            position: absolute;
            top: 989px;
            width: 1410px;
        }

        .desktop-1 .signal75-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 1157px;
            position: absolute;
            top: 924px;
            width: 242px;
        }

        .desktop-1 .rectangle-75-PUhr2B {
            background-color: var(--green);
            height: 33px;
            left: 0px;
            position: absolute;
            top: 0px;
            width: 240px;
        }

        .desktop-1 .signal-75-PUhr2B {
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

        .desktop-1 .signal74-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 1157px;
            position: absolute;
            top: 883px;
            width: 242px;
        }

        .desktop-1 .rectangle-74-RUExx1 {
            background-color: var(--green);
            height: 33px;
            left: 0px;
            position: absolute;
            top: 0px;
            width: 240px;
        }

        .desktop-1 .signal-74-RUExx1 {
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

        .desktop-1 .signal73-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 1157px;
            position: absolute;
            top: 842px;
            width: 242px;
        }

        .desktop-1 .rectangle-73-13m23U {
            background-color: var(--green);
            height: 33px;
            left: 0px;
            position: absolute;
            top: 0px;
            width: 240px;
        }

        .desktop-1 .signal-73-13m23U {
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

        .desktop-1 .signal72-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 1157px;
            position: absolute;
            top: 801px;
            width: 242px;
        }

        .desktop-1 .rectangle-72-p07tlr {
            background-color: var(--green);
            height: 33px;
            left: 0px;
            position: absolute;
            top: 0px;
            width: 240px;
        }

        .desktop-1 .signal-72-p07tlr {
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

        .desktop-1 .signal71-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 1157px;
            position: absolute;
            top: 758px;
            width: 242px;
        }

        .desktop-1 .rectangle-71-0AnL6R {
            background-color: var(--green);
            height: 33px;
            left: 0px;
            position: absolute;
            top: 0px;
            width: 240px;
        }

        .desktop-1 .signal-71-0AnL6R {
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

        .desktop-1 .signal70-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 871px;
            position: absolute;
            top: 924px;
            width: 242px;
        }

        .desktop-1 .rectangle-70-lyAnRA {
            background-color: var(--green);
            height: 33px;
            left: 0px;
            position: absolute;
            top: 0px;
            width: 240px;
        }

        .desktop-1 .signal-70-lyAnRA {
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
            left: 871px;
            position: absolute;
            top: 883px;
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

        .desktop-1 .signal68-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 871px;
            position: absolute;
            top: 842px;
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
            left: 871px;
            position: absolute;
            top: 801px;
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

        .desktop-1 .signal66-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 871px;
            position: absolute;
            top: 758px;
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

        .desktop-1 .signal65-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 585px;
            position: absolute;
            top: 924px;
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

        .desktop-1 .signal64-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 585px;
            position: absolute;
            top: 883px;
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

        .desktop-1 .signal63-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 585px;
            position: absolute;
            top: 842px;
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
            left: 585px;
            position: absolute;
            top: 801px;
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

        .desktop-1 .signal61-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 585px;
            position: absolute;
            top: 758px;
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

        .desktop-1 .signal60-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 299px;
            position: absolute;
            top: 924px;
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

        .desktop-1 .signal59-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 299px;
            position: absolute;
            top: 883px;
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

        .desktop-1 .signal58-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 299px;
            position: absolute;
            top: 842px;
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
            left: 299px;
            position: absolute;
            top: 801px;
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

        .desktop-1 .signal56-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 299px;
            position: absolute;
            top: 758px;
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

        .desktop-1 .signal55-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 13px;
            position: absolute;
            top: 923px;
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

        .desktop-1 .signal54-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 13px;
            position: absolute;
            top: 882px;
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

        .desktop-1 .signal53-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 13px;
            position: absolute;
            top: 841px;
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

        .desktop-1 .signal52-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 13px;
            position: absolute;
            top: 800px;
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

        .desktop-1 .signal51-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 13px;
            position: absolute;
            top: 757px;
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

        .desktop-1 .signal50-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 1153px;
            position: absolute;
            top: 574px;
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

        .desktop-1 .signal49-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 1152px;
            position: absolute;
            top: 521px;
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

        .desktop-1 .signal48-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 1151px;
            position: absolute;
            top: 468px;
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

        .desktop-1 .signal47-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 1153px;
            position: absolute;
            top: 415px;
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

        .desktop-1 .signal46-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 1153px;
            position: absolute;
            top: 362px;
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

        .desktop-1 .signal45-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 1152px;
            position: absolute;
            top: 309px;
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

        .desktop-1 .signal44-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 1151px;
            position: absolute;
            top: 256px;
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

        .desktop-1 .signal43-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 1152px;
            position: absolute;
            top: 203px;
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

        .desktop-1 .signal42-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 1153px;
            position: absolute;
            top: 150px;
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

        .desktop-1 .signal41-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 1153px;
            position: absolute;
            top: 97px;
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

        .desktop-1 .signal40-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 867px;
            position: absolute;
            top: 574px;
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

        .desktop-1 .signal39-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 866px;
            position: absolute;
            top: 521px;
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

        .desktop-1 .signal38-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 865px;
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

        .desktop-1 .signal37-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 867px;
            position: absolute;
            top: 415px;
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

        .desktop-1 .signal36-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 867px;
            position: absolute;
            top: 362px;
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

        .desktop-1 .signal35-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 866px;
            position: absolute;
            top: 309px;
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

        .desktop-1 .signal34-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 865px;
            position: absolute;
            top: 256px;
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

        .desktop-1 .signal33-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 866px;
            position: absolute;
            top: 203px;
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

        .desktop-1 .signal32-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 867px;
            position: absolute;
            top: 150px;
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

        .desktop-1 .signal31-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 867px;
            position: absolute;
            top: 97px;
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

        .desktop-1 .signal30-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 581px;
            position: absolute;
            top: 574px;
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

        .desktop-1 .signal29-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 580px;
            position: absolute;
            top: 521px;
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

        .desktop-1 .signal28-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 579px;
            position: absolute;
            top: 468px;
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

        .desktop-1 .signal27-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 581px;
            position: absolute;
            top: 415px;
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

        .desktop-1 .signal26-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 581px;
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

        .desktop-1 .signal25-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 580px;
            position: absolute;
            top: 309px;
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

        .desktop-1 .signal24-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 579px;
            position: absolute;
            top: 256px;
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

        .desktop-1 .signal23-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 580px;
            position: absolute;
            top: 203px;
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

        .desktop-1 .signal22-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 581px;
            position: absolute;
            top: 150px;
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

        .desktop-1 .signal21-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 581px;
            position: absolute;
            top: 97px;
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

        .desktop-1 .signal20-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 295px;
            position: absolute;
            top: 574px;
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

        .desktop-1 .signal19-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 294px;
            position: absolute;
            top: 521px;
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

        .desktop-1 .signal18-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 293px;
            position: absolute;
            top: 468px;
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

        .desktop-1 .signal17-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 295px;
            position: absolute;
            top: 415px;
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

        .desktop-1 .signal16-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 295px;
            position: absolute;
            top: 362px;
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

        .desktop-1 .signal15-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 294px;
            position: absolute;
            top: 309px;
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

        .desktop-1 .signal14-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 293px;
            position: absolute;
            top: 256px;
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

        .desktop-1 .signal13-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 294px;
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

        .desktop-1 .signal12-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 295px;
            position: absolute;
            top: 150px;
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

        .desktop-1 .signal-11-0AvDFH {
            height: 33px;
            left: 295px;
            top: 97px;
            width: 242px;
        }

        .desktop-1 .rectangle-11-GwFtM3 {
            background-color: var(--green);
            height: 33px;
            left: 0px;
            position: absolute;
            top: 0px;
            width: 240px;
        }

        .desktop-1 .signal-11-GwFtM3 {
            height: 23px;
            left: 11px;
            letter-spacing: 1.28px;
            line-height: 20.1px;
            text-align: center;
            top: 5px;
            white-space: nowrap;
            width: 215px;
        }

        .desktop-1 .signal10-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 9px;
            position: absolute;
            top: 574px;
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

        .desktop-1 .signal9-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 8px;
            position: absolute;
            top: 521px;
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

        .desktop-1 .signal8-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 7px;
            position: absolute;
            top: 468px;
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

        .desktop-1 .signal7-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 9px;
            position: absolute;
            top: 415px;
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

        .desktop-1 .signal6-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 9px;
            position: absolute;
            top: 362px;
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

        .desktop-1 .signal5-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 8px;
            position: absolute;
            top: 309px;
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

        .desktop-1 .signal4-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 7px;
            position: absolute;
            top: 256px;
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

        .desktop-1 .signal3-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 8px;
            position: absolute;
            top: 203px;
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

        .desktop-1 .signal2-0AvDFH {
            background-color: transparent;
            height: 33px;
            left: 9px;
            position: absolute;
            top: 150px;
            width: 242px;
        }

        .desktop-1 .rectangle-2-rBmBbX {
            background-color: var(--green);
            height: 33px;
            left: 0px;
            position: absolute;
            top: 0px;
            width: 240px;
        }

        .desktop-1 .signal-2-rBmBbX {
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
            left: 9px;
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
            left: 11px;
            letter-spacing: 1.28px;
            line-height: 20.1px;
            text-align: center;
            top: 5px;
            white-space: nowrap;
            width: 215px;
        }

        .desktop-1 .kotak-sinyal-0AvDFH {
            background-color: transparent;
            height: 962px;
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
            top: 717px;
            width: 1424px;
        }

        .desktop-1 .rectangle-4-Wu6Ge3 {
            background-color: var(--red);
            border: 9px solid;
            border-color: var(--black);
            height: 72px;
            left: 496px;
            position: absolute;
            top: 680px;
            width: 418px;
        }

        .desktop-1 .relay-operated-xwnY9r {
            background-color: transparent;
            color: var(--white);
            font-family: var(--font-family-fjalla_one);
            font-size: var(--font-size-xl);
            font-style: normal;
            font-weight: 400;
            height: auto;
            left: 610px;
            letter-spacing: 2.56px;
            line-height: 40.2px;
            position: absolute;
            text-align: left;
            top: 697px;
            white-space: nowrap;
            width: 257px;
        }

        .desktop-1 .rectangle-4-VyPSHk {
            background-color: transparent;
            border: 7px solid;
            border-color: var(--white);
            height: 611px;
            left: -7px;
            position: absolute;
            top: 22px;
            width: 1416px;
        }

        .desktop-1 .rectangle-4-uGOxIn {
            background-color: var(--red);
            border: 9px solid;
            border-color: var(--black);
            height: 72px;
            left: 501px;
            position: absolute;
            top: -9px;
            width: 416px;
        }

        .desktop-1 .signal-xwnY9r {
            background-color: transparent;
            color: var(--white);
            font-family: var(--font-family-fjalla_one);
            font-size: var(--font-size-xl);
            font-style: normal;
            font-weight: 400;
            height: auto;
            left: 657px;
            letter-spacing: 2.56px;
            line-height: 40.2px;
            position: absolute;
            text-align: left;
            top: 5px;
            white-space: nowrap;
            width: 103px;
        }

        .desktop-1 .measurement-hv-Ys8k0x {
            height: 704px;
            left: 593px;
            top: 230px;
            width: 420px;
        }

        .desktop-1 .rectangle-3-M0xYid {
            background-color: transparent;
            border: 7px solid;
            border-color: var(--white);
            height: 697px;
            left: -7px;
            position: absolute;
            top: 14px;
            width: 432px;
        }

        .desktop-1 .rectangle-2-M0xYid {
            background-color: var(--red);
            border: 9px solid;
            border-color: var(--black);
            height: 59px;
            left: 71px;
            position: absolute;
            top: -9px;
            width: 275px;
        }

        .desktop-1 .measurement-hv-M0xYid {
            height: auto;
            left: 83px;
            letter-spacing: 1.92px;
            line-height: 30.2px;
            text-align: center;
            top: 6px;
            white-space: nowrap;
            width: 257px;
        }

        .desktop-1 .q-M0xYid {
            height: 53px;
            left: 14px;
            top: 620px;
            width: 399px;
        }

        .desktop-1 .rectangle-5-5DM4st {
            background-color: transparent;
            border: 1px solid;
            border-color: var(--white);
            height: 55px;
            left: -1px;
            position: absolute;
            top: -1px;
            width: 102px;
        }

        .desktop-1 .q-5DM4st {
            height: auto;
            left: 32px;
            letter-spacing: 2.56px;
            line-height: 36.8px;
            text-align: left;
            top: 8px;
            white-space: nowrap;
            width: auto;
        }

        .desktop-1 .rectangle-5-YXhlRh {
            background-color: transparent;
            border: 1px solid;
            border-color: var(--white);
            height: 55px;
            left: 99px;
            position: absolute;
            top: -1px;
            width: 177px;
        }

        .desktop-1 .rectangle-5-oEGvBF {
            background-color: transparent;
            border: 1px solid;
            border-color: var(--white);
            height: 55px;
            left: 274px;
            position: absolute;
            top: -1px;
            width: 120px;
        }

        .desktop-1 .mvar-5DM4st {
            left: 300px;
            top: 8px;
            width: 86px;
        }

        .desktop-1 .p-M0xYid {
            height: 53px;
            left: 14px;
            top: 567px;
            width: 399px;
        }

        .desktop-1 .rectangle-5-QihkUp {
            background-color: transparent;
            border: 1px solid;
            border-color: var(--white);
            height: 55px;
            left: -1px;
            position: absolute;
            top: -1px;
            width: 102px;
        }

        .desktop-1 .p-QihkUp {
            height: auto;
            left: 32px;
            letter-spacing: 2.56px;
            line-height: 36.8px;
            text-align: left;
            top: 8px;
            white-space: nowrap;
            width: auto;
        }

        .desktop-1 .rectangle-5-6T2WWy {
            background-color: transparent;
            border: 1px solid;
            border-color: var(--white);
            height: 55px;
            left: 99px;
            position: absolute;
            top: -1px;
            width: 177px;
        }

        .desktop-1 .rectangle-5-RAkpNO {
            background-color: transparent;
            border: 1px solid;
            border-color: var(--white);
            height: 55px;
            left: 274px;
            position: absolute;
            top: -1px;
            width: 120px;
        }

        .desktop-1 .mw-QihkUp {
            width: 65px;
        }

        .desktop-1 .it-M0xYid {
            height: 53px;
            left: 14px;
            top: 514px;
            width: 399px;
        }

        .desktop-1 .rectangle-5-jMcQIr {
            background-color: transparent;
            border: 1px solid;
            border-color: var(--white);
            height: 55px;
            left: -1px;
            position: absolute;
            top: -1px;
            width: 102px;
        }

        .desktop-1 .it-jMcQIr {
            height: auto;
            left: 32px;
            letter-spacing: 2.56px;
            line-height: 36.8px;
            text-align: left;
            top: 8px;
            white-space: nowrap;
            width: auto;
        }

        .desktop-1 .rectangle-5-Z91Yss {
            background-color: transparent;
            border: 1px solid;
            border-color: var(--white);
            height: 55px;
            left: 99px;
            position: absolute;
            top: -1px;
            width: 177px;
        }

        .desktop-1 .rectangle-5-t2a3rp {
            background-color: transparent;
            border: 1px solid;
            border-color: var(--white);
            height: 55px;
            left: 274px;
            position: absolute;
            top: -1px;
            width: 120px;
        }

        .desktop-1 .is-M0xYid {
            height: 53px;
            left: 14px;
            top: 461px;
            width: 399px;
        }

        .desktop-1 .rectangle-5-i9XTzz {
            background-color: transparent;
            border: 1px solid;
            border-color: var(--white);
            height: 55px;
            left: -1px;
            position: absolute;
            top: -1px;
            width: 102px;
        }

        .desktop-1 .is-i9XTzz {
            height: auto;
            left: 32px;
            letter-spacing: 2.56px;
            line-height: 36.8px;
            text-align: left;
            top: 8px;
            white-space: nowrap;
            width: auto;
        }

        .desktop-1 .rectangle-5-Hc9edZ {
            background-color: transparent;
            border: 1px solid;
            border-color: var(--white);
            height: 55px;
            left: 99px;
            position: absolute;
            top: -1px;
            width: 177px;
        }

        .desktop-1 .rectangle-5-eSXWFe {
            background-color: transparent;
            border: 1px solid;
            border-color: var(--white);
            height: 55px;
            left: 274px;
            position: absolute;
            top: -1px;
            width: 120px;
        }

        .desktop-1 .ir-M0xYid {
            height: 53px;
            left: 14px;
            top: 408px;
            width: 399px;
        }

        .desktop-1 .rectangle-5-rdeoTA {
            background-color: transparent;
            border: 1px solid;
            border-color: var(--white);
            height: 55px;
            left: -1px;
            position: absolute;
            top: -1px;
            width: 102px;
        }

        .desktop-1 .ir-rdeoTA {
            height: auto;
            left: 32px;
            letter-spacing: 2.56px;
            line-height: 36.8px;
            text-align: left;
            top: 8px;
            white-space: nowrap;
            width: auto;
        }

        .desktop-1 .rectangle-5-eCCjNB {
            background-color: transparent;
            border: 1px solid;
            border-color: var(--white);
            height: 55px;
            left: 99px;
            position: absolute;
            top: -1px;
            width: 177px;
        }

        .desktop-1 .rectangle-5-FUiomk {
            background-color: transparent;
            border: 1px solid;
            border-color: var(--white);
            height: 55px;
            left: 274px;
            position: absolute;
            top: -1px;
            width: 120px;
        }

        .desktop-1 .vtr-M0xYid {
            height: 53px;
            left: 14px;
            top: 355px;
            width: 399px;
        }

        .desktop-1 .rectangle-5-qxqXoW {
            background-color: transparent;
            border: 1px solid;
            border-color: var(--white);
            height: 55px;
            left: -1px;
            position: absolute;
            top: -1px;
            width: 102px;
        }

        .desktop-1 .vtr-qxqXoW {
            height: auto;
            left: 32px;
            letter-spacing: 2.56px;
            line-height: 36.8px;
            text-align: left;
            top: 8px;
            white-space: nowrap;
            width: auto;
        }

        .desktop-1 .rectangle-5-iCCRsq {
            background-color: transparent;
            border: 1px solid;
            border-color: var(--white);
            height: 55px;
            left: 99px;
            position: absolute;
            top: -1px;
            width: 177px;
        }

        .desktop-1 .rectangle-5-H7sSG2 {
            background-color: transparent;
            border: 1px solid;
            border-color: var(--white);
            height: 55px;
            left: 274px;
            position: absolute;
            top: -1px;
            width: 120px;
        }

        .desktop-1 .vst-M0xYid {
            height: 53px;
            left: 14px;
            top: 302px;
            width: 399px;
        }

        .desktop-1 .rectangle-5-KPTBBb {
            background-color: transparent;
            border: 1px solid;
            border-color: var(--white);
            height: 55px;
            left: -1px;
            position: absolute;
            top: -1px;
            width: 102px;
        }

        .desktop-1 .vst-KPTBBb {
            height: auto;
            left: 32px;
            letter-spacing: 2.56px;
            line-height: 36.8px;
            text-align: left;
            top: 8px;
            white-space: nowrap;
            width: auto;
        }

        .desktop-1 .rectangle-5-xqraYL {
            background-color: transparent;
            border: 1px solid;
            border-color: var(--white);
            height: 55px;
            left: 99px;
            position: absolute;
            top: -1px;
            width: 177px;
        }

        .desktop-1 .rectangle-5-OgThCE {
            background-color: transparent;
            border: 1px solid;
            border-color: var(--white);
            height: 55px;
            left: 274px;
            position: absolute;
            top: -1px;
            width: 120px;
        }

        .desktop-1 .vrs-M0xYid {
            height: 53px;
            left: 14px;
            top: 249px;
            width: 399px;
        }

        .desktop-1 .rectangle-5-ixq67h {
            background-color: transparent;
            border: 1px solid;
            border-color: var(--white);
            height: 55px;
            left: -1px;
            position: absolute;
            top: -1px;
            width: 102px;
        }

        .desktop-1 .vrs-ixq67h {
            height: auto;
            left: 32px;
            letter-spacing: 2.56px;
            line-height: 36.8px;
            text-align: left;
            top: 8px;
            white-space: nowrap;
            width: auto;
        }

        .desktop-1 .rectangle-5-zLdqjt {
            background-color: transparent;
            border: 1px solid;
            border-color: var(--white);
            height: 55px;
            left: 99px;
            position: absolute;
            top: -1px;
            width: 177px;
        }

        .desktop-1 .rectangle-5-xVYjlv {
            background-color: transparent;
            border: 1px solid;
            border-color: var(--white);
            height: 55px;
            left: 274px;
            position: absolute;
            top: -1px;
            width: 120px;
        }

        .desktop-1 .vt-M0xYid {
            height: 53px;
            left: 14px;
            top: 196px;
            width: 399px;
        }

        .desktop-1 .rectangle-5-lM6xfU {
            background-color: transparent;
            border: 1px solid;
            border-color: var(--white);
            height: 55px;
            left: -1px;
            position: absolute;
            top: -1px;
            width: 102px;
        }

        .desktop-1 .vt-lM6xfU {
            height: auto;
            left: 32px;
            letter-spacing: 2.56px;
            line-height: 36.8px;
            text-align: left;
            top: 8px;
            white-space: nowrap;
            width: auto;
        }

        .desktop-1 .rectangle-5-bMtx5j {
            background-color: transparent;
            border: 1px solid;
            border-color: var(--white);
            height: 55px;
            left: 99px;
            position: absolute;
            top: -1px;
            width: 177px;
        }

        .desktop-1 .rectangle-5-Pxx4s6 {
            background-color: transparent;
            border: 1px solid;
            border-color: var(--white);
            height: 55px;
            left: 274px;
            position: absolute;
            top: -1px;
            width: 120px;
        }

        .desktop-1 .vs-M0xYid {
            height: 53px;
            left: 14px;
            top: 143px;
            width: 399px;
        }

        .desktop-1 .rectangle-5-ICq8o7 {
            background-color: transparent;
            border: 1px solid;
            border-color: var(--white);
            height: 55px;
            left: -1px;
            position: absolute;
            top: -1px;
            width: 102px;
        }

        .desktop-1 .vs-ICq8o7 {
            height: auto;
            left: 32px;
            letter-spacing: 2.56px;
            line-height: 36.8px;
            text-align: left;
            top: 8px;
            white-space: nowrap;
            width: auto;
        }

        .desktop-1 .rectangle-5-G6t53c {
            background-color: transparent;
            border: 1px solid;
            border-color: var(--white);
            height: 55px;
            left: 99px;
            position: absolute;
            top: -1px;
            width: 177px;
        }

        .desktop-1 .rectangle-5-KWIPWk {
            background-color: transparent;
            border: 1px solid;
            border-color: var(--white);
            height: 55px;
            left: 274px;
            position: absolute;
            top: -1px;
            width: 120px;
        }

        .desktop-1 .vr-M0xYid {
            height: 53px;
            left: 14px;
            top: 90px;
            width: 399px;
        }

        .desktop-1 .rectangle-5-ex6u8Z {
            background-color: transparent;
            border: 1px solid;
            border-color: var(--white);
            height: 55px;
            left: -1px;
            position: absolute;
            top: -1px;
            width: 102px;
        }

        .desktop-1 .vr-ex6u8Z {
            height: auto;
            left: 32px;
            letter-spacing: 2.56px;
            line-height: 36.8px;
            text-align: left;
            top: 8px;
            white-space: nowrap;
            width: auto;
        }

        .desktop-1 .rectangle-5-rBmaf8 {
            background-color: transparent;
            border: 1px solid;
            border-color: var(--white);
            height: 55px;
            left: 99px;
            position: absolute;
            top: -1px;
            width: 177px;
        }

        .desktop-1 .a1-ex6u8Z {
            left: 130px;
            top: 8px;
        }

        .desktop-1 .rectangle-5-xTimpw {
            background-color: transparent;
            border: 1px solid;
            border-color: var(--white);
            height: 55px;
            left: 274px;
            position: absolute;
            top: -1px;
            width: 120px;
        }

        .desktop-1 .measurement-lv-Ys8k0x {
            height: 704px;
            left: 1054px;
            top: 230px;
            width: 420px;
        }

        .desktop-1 .rectangle-3-A0Zz3h {
            background-color: transparent;
            border: 7px solid;
            border-color: var(--white);
            height: 697px;
            left: -7px;
            position: absolute;
            top: 14px;
            width: 432px;
        }

        .desktop-1 .rectangle-2-A0Zz3h {
            background-color: var(--red);
            border: 9px solid;
            border-color: var(--black);
            height: 59px;
            left: 71px;
            position: absolute;
            top: -9px;
            width: 275px;
        }

        .desktop-1 .measurement-lv-A0Zz3h {
            height: auto;
            left: 83px;
            letter-spacing: 1.92px;
            line-height: 30.2px;
            text-align: center;
            top: 6px;
            white-space: nowrap;
            width: 257px;
        }

        .desktop-1 .q-A0Zz3h {
            height: 53px;
            left: 14px;
            top: 620px;
            width: 399px;
        }

        .desktop-1 .rectangle-5-xTxL71 {
            background-color: transparent;
            border: 1px solid;
            border-color: var(--white);
            height: 55px;
            left: -1px;
            position: absolute;
            top: -1px;
            width: 102px;
        }

        .desktop-1 .q-xTxL71 {
            height: auto;
            left: 32px;
            letter-spacing: 2.56px;
            line-height: 36.8px;
            text-align: left;
            top: 8px;
            white-space: nowrap;
            width: auto;
        }

        .desktop-1 .rectangle-5-Qp3MHm {
            background-color: transparent;
            border: 1px solid;
            border-color: var(--white);
            height: 55px;
            left: 99px;
            position: absolute;
            top: -1px;
            width: 177px;
        }

        .desktop-1 .rectangle-5-eBgbKX {
            background-color: transparent;
            border: 1px solid;
            border-color: var(--white);
            height: 55px;
            left: 274px;
            position: absolute;
            top: -1px;
            width: 120px;
        }

        .desktop-1 .mvar-xTxL71 {
            left: 304px;
            top: 9px;
            width: 80px;
        }

        .desktop-1 .p-A0Zz3h {
            height: 53px;
            left: 14px;
            top: 567px;
            width: 399px;
        }

        .desktop-1 .rectangle-5-FiRrVS {
            background-color: transparent;
            border: 1px solid;
            border-color: var(--white);
            height: 55px;
            left: -1px;
            position: absolute;
            top: -1px;
            width: 102px;
        }

        .desktop-1 .p-FiRrVS {
            height: auto;
            left: 32px;
            letter-spacing: 2.56px;
            line-height: 36.8px;
            text-align: left;
            top: 8px;
            white-space: nowrap;
            width: auto;
        }

        .desktop-1 .rectangle-5-lxEpYr {
            background-color: transparent;
            border: 1px solid;
            border-color: var(--white);
            height: 55px;
            left: 99px;
            position: absolute;
            top: -1px;
            width: 177px;
        }

        .desktop-1 .rectangle-5-cvN8Qo {
            background-color: transparent;
            border: 1px solid;
            border-color: var(--white);
            height: 55px;
            left: 274px;
            position: absolute;
            top: -1px;
            width: 120px;
        }

        .desktop-1 .mw-FiRrVS {
            width: 70px;
        }

        .desktop-1 .it-A0Zz3h {
            height: 53px;
            left: 14px;
            top: 514px;
            width: 399px;
        }

        .desktop-1 .rectangle-5-xmPRob {
            background-color: transparent;
            border: 1px solid;
            border-color: var(--white);
            height: 55px;
            left: -1px;
            position: absolute;
            top: -1px;
            width: 102px;
        }

        .desktop-1 .it-xmPRob {
            height: auto;
            left: 32px;
            letter-spacing: 2.56px;
            line-height: 36.8px;
            text-align: left;
            top: 8px;
            white-space: nowrap;
            width: auto;
        }

        .desktop-1 .rectangle-5-xzmNbb {
            background-color: transparent;
            border: 1px solid;
            border-color: var(--white);
            height: 55px;
            left: 99px;
            position: absolute;
            top: -1px;
            width: 177px;
        }

        .desktop-1 .rectangle-5-TsEgT7 {
            background-color: transparent;
            border: 1px solid;
            border-color: var(--white);
            height: 55px;
            left: 274px;
            position: absolute;
            top: -1px;
            width: 120px;
        }

        .desktop-1 .is-A0Zz3h {
            height: 53px;
            left: 14px;
            top: 461px;
            width: 399px;
        }

        .desktop-1 .rectangle-5-UlKtS4 {
            background-color: transparent;
            border: 1px solid;
            border-color: var(--white);
            height: 55px;
            left: -1px;
            position: absolute;
            top: -1px;
            width: 102px;
        }

        .desktop-1 .is-UlKtS4 {
            height: auto;
            left: 32px;
            letter-spacing: 2.56px;
            line-height: 36.8px;
            text-align: left;
            top: 8px;
            white-space: nowrap;
            width: auto;
        }

        .desktop-1 .rectangle-5-EITxUu {
            background-color: transparent;
            border: 1px solid;
            border-color: var(--white);
            height: 55px;
            left: 99px;
            position: absolute;
            top: -1px;
            width: 177px;
        }

        .desktop-1 .rectangle-5-rpw0Ug {
            background-color: transparent;
            border: 1px solid;
            border-color: var(--white);
            height: 55px;
            left: 274px;
            position: absolute;
            top: -1px;
            width: 120px;
        }

        .desktop-1 .ir-A0Zz3h {
            height: 53px;
            left: 14px;
            top: 408px;
            width: 399px;
        }

        .desktop-1 .rectangle-5-LpLijB {
            background-color: transparent;
            border: 1px solid;
            border-color: var(--white);
            height: 55px;
            left: -1px;
            position: absolute;
            top: -1px;
            width: 102px;
        }

        .desktop-1 .ir-LpLijB {
            height: auto;
            left: 32px;
            letter-spacing: 2.56px;
            line-height: 36.8px;
            text-align: left;
            top: 8px;
            white-space: nowrap;
            width: auto;
        }

        .desktop-1 .rectangle-5-pJU1Nf {
            background-color: transparent;
            border: 1px solid;
            border-color: var(--white);
            height: 55px;
            left: 99px;
            position: absolute;
            top: -1px;
            width: 177px;
        }

        .desktop-1 .rectangle-5-xREJbp {
            background-color: transparent;
            border: 1px solid;
            border-color: var(--white);
            height: 55px;
            left: 274px;
            position: absolute;
            top: -1px;
            width: 120px;
        }

        .desktop-1 .vtr-A0Zz3h {
            height: 53px;
            left: 14px;
            top: 355px;
            width: 399px;
        }

        .desktop-1 .rectangle-5-RnS7IK {
            background-color: transparent;
            border: 1px solid;
            border-color: var(--white);
            height: 55px;
            left: -1px;
            position: absolute;
            top: -1px;
            width: 102px;
        }

        .desktop-1 .vtr-RnS7IK {
            height: auto;
            left: 32px;
            letter-spacing: 2.56px;
            line-height: 36.8px;
            text-align: left;
            top: 8px;
            white-space: nowrap;
            width: auto;
        }

        .desktop-1 .rectangle-5-KxyUxu {
            background-color: transparent;
            border: 1px solid;
            border-color: var(--white);
            height: 55px;
            left: 99px;
            position: absolute;
            top: -1px;
            width: 177px;
        }

        .desktop-1 .rectangle-5-4YBwpS {
            background-color: transparent;
            border: 1px solid;
            border-color: var(--white);
            height: 55px;
            left: 274px;
            position: absolute;
            top: -1px;
            width: 120px;
        }

        .desktop-1 .vst-A0Zz3h {
            height: 53px;
            left: 14px;
            top: 302px;
            width: 399px;
        }

        .desktop-1 .rectangle-5-IOuaoM {
            background-color: transparent;
            border: 1px solid;
            border-color: var(--white);
            height: 55px;
            left: -1px;
            position: absolute;
            top: -1px;
            width: 102px;
        }

        .desktop-1 .vst-IOuaoM {
            height: auto;
            left: 32px;
            letter-spacing: 2.56px;
            line-height: 36.8px;
            text-align: left;
            top: 8px;
            white-space: nowrap;
            width: auto;
        }

        .desktop-1 .rectangle-5-vaFaRX {
            background-color: transparent;
            border: 1px solid;
            border-color: var(--white);
            height: 55px;
            left: 99px;
            position: absolute;
            top: -1px;
            width: 177px;
        }

        .desktop-1 .rectangle-5-weHkx4 {
            background-color: transparent;
            border: 1px solid;
            border-color: var(--white);
            height: 55px;
            left: 274px;
            position: absolute;
            top: -1px;
            width: 120px;
        }

        .desktop-1 .vrs-A0Zz3h {
            height: 53px;
            left: 14px;
            top: 249px;
            width: 399px;
        }

        .desktop-1 .rectangle-5-MbwTOr {
            background-color: transparent;
            border: 1px solid;
            border-color: var(--white);
            height: 55px;
            left: -1px;
            position: absolute;
            top: -1px;
            width: 102px;
        }

        .desktop-1 .vrs-MbwTOr {
            height: auto;
            left: 32px;
            letter-spacing: 2.56px;
            line-height: 36.8px;
            text-align: left;
            top: 8px;
            white-space: nowrap;
            width: auto;
        }

        .desktop-1 .rectangle-5-Y16ykO {
            background-color: transparent;
            border: 1px solid;
            border-color: var(--white);
            height: 55px;
            left: 99px;
            position: absolute;
            top: -1px;
            width: 177px;
        }

        .desktop-1 .rectangle-5-1MDNho {
            background-color: transparent;
            border: 1px solid;
            border-color: var(--white);
            height: 55px;
            left: 274px;
            position: absolute;
            top: -1px;
            width: 120px;
        }

        .desktop-1 .vt-A0Zz3h {
            height: 53px;
            left: 14px;
            top: 196px;
            width: 399px;
        }

        .desktop-1 .rectangle-5-j7jt4p {
            background-color: transparent;
            border: 1px solid;
            border-color: var(--white);
            height: 55px;
            left: -1px;
            position: absolute;
            top: -1px;
            width: 102px;
        }

        .desktop-1 .vt-j7jt4p {
            height: auto;
            left: 32px;
            letter-spacing: 2.56px;
            line-height: 36.8px;
            text-align: left;
            top: 8px;
            white-space: nowrap;
            width: auto;
        }

        .desktop-1 .rectangle-5-9nWuQc {
            background-color: transparent;
            border: 1px solid;
            border-color: var(--white);
            height: 55px;
            left: 99px;
            position: absolute;
            top: -1px;
            width: 177px;
        }

        .desktop-1 .rectangle-5-79NoPb {
            background-color: transparent;
            border: 1px solid;
            border-color: var(--white);
            height: 55px;
            left: 274px;
            position: absolute;
            top: -1px;
            width: 120px;
        }

        .desktop-1 .vs-A0Zz3h {
            height: 53px;
            left: 14px;
            top: 143px;
            width: 399px;
        }

        .desktop-1 .rectangle-5-tRvX8m {
            background-color: transparent;
            border: 1px solid;
            border-color: var(--white);
            height: 55px;
            left: -1px;
            position: absolute;
            top: -1px;
            width: 102px;
        }

        .desktop-1 .vs-tRvX8m {
            height: auto;
            left: 32px;
            letter-spacing: 2.56px;
            line-height: 36.8px;
            text-align: left;
            top: 8px;
            white-space: nowrap;
            width: auto;
        }

        .desktop-1 .rectangle-5-wKZalD {
            background-color: transparent;
            border: 1px solid;
            border-color: var(--white);
            height: 55px;
            left: 99px;
            position: absolute;
            top: -1px;
            width: 177px;
        }

        .desktop-1 .rectangle-5-EKJ7RJ {
            background-color: transparent;
            border: 1px solid;
            border-color: var(--white);
            height: 55px;
            left: 274px;
            position: absolute;
            top: -1px;
            width: 120px;
        }

        .desktop-1 .vr-A0Zz3h {
            height: 53px;
            left: 14px;
            top: 90px;
            width: 399px;
        }

        .desktop-1 .rectangle-5-Li5Azn {
            background-color: transparent;
            border: 1px solid;
            border-color: var(--white);
            height: 55px;
            left: -1px;
            position: absolute;
            top: -1px;
            width: 102px;
        }

        .desktop-1 .vr-Li5Azn {
            height: auto;
            left: 32px;
            letter-spacing: 2.56px;
            line-height: 36.8px;
            text-align: left;
            top: 8px;
            white-space: nowrap;
            width: auto;
        }

        .desktop-1 .rectangle-5-yb4TMN {
            background-color: transparent;
            border: 1px solid;
            border-color: var(--white);
            height: 55px;
            left: 99px;
            position: absolute;
            top: -1px;
            width: 177px;
        }

        .desktop-1 .a1-Li5Azn {
            left: 130px;
            top: 8px;
        }

        .desktop-1 .rectangle-5-Ox8f35 {
            background-color: transparent;
            border: 1px solid;
            border-color: var(--white);
            height: 55px;
            left: 274px;
            position: absolute;
            top: -1px;
            width: 120px;
        }

        .desktop-1 .tap-changer-Ys8k0x {
            height: 155px;
            left: 1515px;
            top: 230px;
            width: 354px;
        }

        .desktop-1 .rectangle-3-1Tf1Pe {
            background-color: transparent;
            border: 7px solid;
            border-color: var(--white);
            height: 148px;
            left: -7px;
            position: absolute;
            top: 14px;
            width: 366px;
        }

        .desktop-1 .rectangle-2-1Tf1Pe {
            background-color: var(--red);
            border: 9px solid;
            border-color: var(--black);
            height: 59px;
            left: 36px;
            position: absolute;
            top: -9px;
            width: 275px;
        }

        .desktop-1 .tap-changer-1Tf1Pe {
            height: auto;
            left: 47px;
            letter-spacing: 1.92px;
            line-height: 30.2px;
            text-align: center;
            top: 3px;
            white-space: nowrap;
            width: 257px;
        }

        .desktop-1 .poss-1Tf1Pe {
            background-color: transparent;
            height: 37px;
            left: 31px;
            position: absolute;
            top: 78px;
            width: 232px;
        }

        .desktop-1 .posisi-jNgacy {
            background-color: transparent;
            height: auto;
            left: 0px;
            letter-spacing: 2.56px;
            line-height: 36.8px;
            position: absolute;
            text-align: left;
            top: 0px;
            white-space: nowrap;
            width: auto;
        }

        .desktop-1 .a1-jNgacy {
            left: 98px;
            top: 0px;
        }

        .desktop-1 .header-Ys8k0x {
            background-color: transparent;
            height: 72px;
            left: 86px;
            position: absolute;
            top: 36px;
            width: 1758px;
        }

        .desktop-1 .rectangle-2-POyVWW {
            background-color: var(--white);
            border: 9px solid;
            border-color: var(--black);
            height: 90px;
            left: 1234px;
            position: absolute;
            top: -9px;
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
            top: 6px;
            width: 376px;
        }

        .desktop-1 .rectangle-2-d4Ns1Q {
            background-color: #0033ff;
            border: 9px solid;
            border-color: var(--black);
            height: 90px;
            left: 510px;
            position: absolute;
            top: -9px;
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
            font-size: var(--font-size-xs);
            font-style: normal;
            font-weight: 400;
            height: auto;
            left: 854px;
            letter-spacing: 0.96px;
            line-height: 15.1px;
            position: absolute;
            text-align: left;
            top: 54px;
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
            top: -9px;
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
            top: 6px;
            width: 376px;
        }

        .desktop-1 .logo_pln-1-POyVWW {
            background-color: transparent;
            height: 72px;
            left: 26px;
            object-fit: cover;
            position: absolute;
            top: 0px;
            width: 52px;
        }

        .desktop-1 .status-bay-Ys8k0x {
            background-color: transparent;
            height: 704px;
            left: 138px;
            position: absolute;
            top: 229px;
            width: 403px;
        }

        .desktop-1 .rectangle-3-gT0ffV {
            background-color: transparent;
            border: 7px solid;
            border-color: var(--white);
            height: 697px;
            left: -7px;
            position: absolute;
            top: 14px;
            width: 417px;
        }

        .desktop-1 .kotak-status-bay-gT0ffV {
            background-color: transparent;
            height: 41px;
            left: 73px;
            position: absolute;
            top: 0px;
            width: 259px;
        }

        .desktop-1 .rectangle-2-H5RUu2 {
            background-color: var(--red);
            border: 9px solid;
            border-color: var(--black);
            height: 59px;
            left: -9px;
            position: absolute;
            top: -9px;
            width: 275px;
        }

        .desktop-1 .status-H5RUu2 {
            background-color: transparent;
            height: auto;
            left: 2px;
            letter-spacing: 1.92px;
            line-height: 30.2px;
            position: absolute;
            text-align: center;
            top: 5px;
            white-space: nowrap;
            width: 255px;
        }

        .desktop-1 .bus-1-gT0ffV {
            background-color: transparent;
            height: 114px;
            left: 25px;
            position: absolute;
            top: 71px;
            width: 318px;
        }

        .desktop-1 .bus-1-_bar-ptkwRj {
            background-color: transparent;
            height: 111px;
            left: 47px;
            position: absolute;
            top: 3px;
            width: 269px;
        }

        .desktop-1 .line-1-k3OlHA {
            background-color: transparent;
            height: 107px;
            left: 39px;
            position: absolute;
            top: 4px;
            width: 5px;
        }

        .desktop-1 .bar-k3OlHA {
            height: 12px;
        }

        .desktop-1 .bus-1_text-ptkwRj {
            background-color: transparent;
            height: auto;
            left: 0px;
            letter-spacing: 1.20px;
            line-height: 18.9px;
            position: absolute;
            text-align: center;
            top: 0px;
            white-space: nowrap;
            width: auto;
        }

        .desktop-1 .bus-2-gT0ffV {
            background-color: transparent;
            height: 85px;
            left: 25px;
            position: absolute;
            top: 101px;
            width: 318px;
        }

        .desktop-1 .bus-2_bar-Rqeglc {
            background-color: transparent;
            height: 85px;
            left: 47px;
            position: absolute;
            top: 0px;
            width: 269px;
        }

        .desktop-1 .line-2-sx6qn9 {
            background-color: transparent;
            height: 81px;
            left: 217px;
            position: absolute;
            top: 4px;
            width: 5px;
        }

        .desktop-1 .bar-sx6qn9 {
            height: 11px;
        }

        .desktop-1 .bus-2_text-Rqeglc {
            background-color: transparent;
            height: auto;
            left: 0px;
            letter-spacing: 1.20px;
            line-height: 18.9px;
            position: absolute;
            text-align: center;
            top: 0px;
            white-space: nowrap;
            width: 38px;
        }

        .desktop-1 .live-bay-gT0ffV {
            background-color: transparent;
            height: 169px;
            left: 111px;
            position: absolute;
            top: 250px;
            width: 182px;
        }

        .desktop-1 .bar-3-zkGoVV {
            background-color: transparent;
            height: 52px;
            left: 0px;
            position: absolute;
            top: 0px;
            width: 5px;
        }

        .desktop-1 .bar-7-zkGoVV {
            background-color: transparent;
            height: 41px;
            left: 86px;
            position: absolute;
            top: 128px;
            width: 5px;
        }

        .desktop-1 .bar-6-zkGoVV {
            background-color: transparent;
            height: 30px;
            left: 86px;
            position: absolute;
            top: 48px;
            width: 5px;
        }

        .desktop-1 .bar-4-zkGoVV {
            background-color: transparent;
            height: 52px;
            left: 178px;
            position: absolute;
            top: 0px;
            width: 5px;
        }

        .desktop-1 .bar-5-zkGoVV {
            background-color: transparent;
            height: 5px;
            left: 0px;
            position: absolute;
            top: 47px;
            width: 182px;
        }

        .desktop-1 .q21-gT0ffV {
            background-color: transparent;
            height: 71px;
            left: 48px;
            position: absolute;
            top: 182px;
            width: 103px;
        }

        .desktop-1 .q21_t-uxGWYS {
            background-color: transparent;
            height: auto;
            left: 0px;
            letter-spacing: 1.20px;
            line-height: 18.9px;
            position: absolute;
            text-align: center;
            top: 25px;
            white-space: nowrap;
            width: auto;
        }

        .desktop-1 .q21-uxGWYS {
            background-color: var(--red);
            height: 50px;
            left: 40px;
            position: absolute;
            top: 10px;
            transform: rotate(-45deg);
            width: 50px;
        }

        .desktop-1 .q28-gT0ffV {
            background-color: transparent;
            left: 149px;
            top: 566px;
            width: 70px;
        }

        .desktop-1 .q28_t-ldi0Zx {
            background-color: transparent;
            height: auto;
            left: 0px;
            letter-spacing: 1.20px;
            line-height: 18.9px;
            position: absolute;
            text-align: center;
            top: 8px;
            white-space: nowrap;
            width: auto;
        }

        .desktop-1 .q28-ldi0Zx {
            background-color: var(--red);
            left: 34px;
            top: 0px;
            width: 34px;
        }

        .desktop-1 .q50-gT0ffV {
            background-color: transparent;
            left: 144px;
            top: 328px;
            width: 83px;
        }

        .desktop-1 .q50_t-sgyNXS {
            background-color: transparent;
            height: auto;
            left: 0px;
            letter-spacing: 1.20px;
            line-height: 18.9px;
            position: absolute;
            text-align: center;
            top: 15px;
            white-space: nowrap;
            width: auto;
        }

        .desktop-1 .q50-sgyNXS {
            background-color: var(--red);
            left: 31px;
            top: 0px;
            width: 50px;
        }

        .desktop-1 .q22-gT0ffV {
            background-color: transparent;
            height: 71px;
            left: 232px;
            position: absolute;
            top: 182px;
            width: 98px;
        }

        .desktop-1 .q22_t-Pr1xwt {
            background-color: transparent;
            height: auto;
            left: 0px;
            letter-spacing: 1.20px;
            line-height: 18.9px;
            position: absolute;
            text-align: center;
            top: 25px;
            width: auto;
        }

        .desktop-1 .q22-Pr1xwt {
            background-color: var(--red);
            height: 50px;
            left: 35px;
            position: absolute;
            top: 10px;
            transform: rotate(-45deg);
            width: 50px;
        }

        .desktop-1 .live-line-gT0ffV {
            background-color: transparent;
            height: 152px;
            left: 183px;
            position: absolute;
            top: 505px;
            width: 74px;
        }

        .desktop-1 .q38-gT0ffV {
            background-color: transparent;
            height: 38px;
            left: 253px;
            position: absolute;
            top: 514px;
            width: 54px;
        }

        .desktop-1 .ds-gaP5wx {
            background-color: #4c00ff;
            height: 27px;
            left: 6px;
            position: absolute;
            top: 6px;
            transform: rotate(-45deg);
            width: 27px;
        }

        .desktop-1 .ground-gaP5wx {
            background-color: transparent;
            height: 29px;
            left: 34px;
            position: absolute;
            top: 5px;
            width: 20px;
        }

        .desktop-1 .line-9-kJdZWE {
            background-color: transparent;
            height: 5px;
            left: 0px;
            position: absolute;
            top: 11px;
            width: 11px;
        }

        .desktop-1 .line-10-kJdZWE {
            background-color: transparent;
            height: 29px;
            left: 11px;
            object-fit: cover;
            position: absolute;
            top: 0px;
            width: 1px;
        }

        .desktop-1 .line-11-kJdZWE {
            background-color: transparent;
            height: 22px;
            left: 14px;
            object-fit: cover;
            position: absolute;
            top: 4px;
            width: 1px;
        }

        .desktop-1 .line-12-kJdZWE {
            background-color: transparent;
            height: 16px;
            left: 17px;
            object-fit: cover;
            position: absolute;
            top: 7px;
            width: 1px;
        }

        .desktop-1 .line-13-kJdZWE {
            background-color: transparent;
            height: 10px;
            left: 20px;
            object-fit: cover;
            position: absolute;
            top: 10px;
            width: 1px;
        }

        .desktop-1 .trafo-gT0ffV {
            background-color: transparent;
            height: 86px;
            left: 172px;
            position: absolute;
            top: 419px;
            width: 55px;
        }

        .desktop-1 .ellipse-1-ekZuDE {
            background-color: #d9d9d9;
            border-radius: 27.5px;
            height: 55px;
            left: 0px;
            position: absolute;
            top: 0px;
            width: 55px;
        }

        .desktop-1 .ellipse-2-ekZuDE {
            background-color: #ff8383;
            border-radius: 27.5px;
            height: 55px;
            left: 0px;
            position: absolute;
            top: 31px;
            width: 55px;
        }

        .desktop-1 .a1 {
            background-color: transparent;
            height: auto;
            letter-spacing: 2.56px;
            line-height: 36.8px;
            position: absolute;
            text-align: left;
            width: 130px;
        }

        .desktop-1 .a10 {
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

        .desktop-1 .a11 {
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

        .desktop-1 .a2 {
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

        .desktop-1 .a3 {
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

        .desktop-1 .a4 {
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

        .desktop-1 .a5 {
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

        .desktop-1 .a6 {
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

        .desktop-1 .a7 {
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

        .desktop-1 .a8 {
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

        .desktop-1 .a9 {
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

        .desktop-1 .bar {
            background-color: var(--red);
            left: 0px;
            position: absolute;
            top: 0px;
            width: 269px;
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

        .desktop-1 .measurement-hv {
            background-color: transparent;
            position: absolute;
        }

        .desktop-1 .measurement-lv {
            background-color: transparent;
            position: absolute;
        }

        .desktop-1 .mvar {
            background-color: transparent;
            color: var(--white);
            font-family: var(--font-family-times_new_roman-regular);
            font-size: var(--font-size-l);
            font-style: normal;
            font-weight: 400;
            height: auto;
            letter-spacing: 1.92px;
            line-height: 27.6px;
            position: absolute;
            text-align: left;
        }

        .desktop-1 .mw {
            background-color: transparent;
            height: auto;
            left: 313px;
            letter-spacing: 2.56px;
            line-height: 36.8px;
            position: absolute;
            text-align: left;
            top: 8px;
        }

        .desktop-1 .p {
            background-color: transparent;
            position: absolute;
        }

        .desktop-1 .q {
            background-color: transparent;
            position: absolute;
        }

        .desktop-1 .q28 {
            height: 34px;
            position: absolute;
        }

        .desktop-1 .q50 {
            height: 50px;
            position: absolute;
        }

        .desktop-1 .signal-1 {
            background-color: transparent;
            position: absolute;
        }

        .desktop-1 .signal-11 {
            background-color: transparent;
            position: absolute;
        }

        .desktop-1 .tap-changer {
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
            <div class="alarm-Ys8k0x" data-id="18:75">
                <div class="signal75-0AvDFH" data-id="18:74">
                    <div class="rectangle-75-PUhr2B" data-id="3:472"></div>
                    <div class="signal-75-PUhr2B valign-text-middle fjallaone-normal-black-16px" data-id="3:473">SIGNAL
                        75</div>
                </div>
                <div class="signal74-0AvDFH" data-id="18:69">
                    <div class="rectangle-74-RUExx1" data-id="3:466"></div>
                    <div class="signal-74-RUExx1 valign-text-middle fjallaone-normal-black-16px" data-id="3:467">SIGNAL
                        74</div>
                </div>
                <div class="signal73-0AvDFH" data-id="18:63">
                    <div class="rectangle-73-13m23U" data-id="3:460"></div>
                    <div class="signal-73-13m23U valign-text-middle fjallaone-normal-black-16px" data-id="3:461">SIGNAL
                        73</div>
                </div>
                <div class="signal72-0AvDFH" data-id="18:58">
                    <div class="rectangle-72-p07tlr" data-id="3:454"></div>
                    <div class="signal-72-p07tlr valign-text-middle fjallaone-normal-black-16px" data-id="3:455">SIGNAL
                        72</div>
                </div>
                <div class="signal71-0AvDFH" data-id="18:53">
                    <div class="rectangle-71-0AnL6R" data-id="3:511"></div>
                    <div class="signal-71-0AnL6R valign-text-middle fjallaone-normal-black-16px" data-id="3:512">SIGNAL
                        71</div>
                </div>
                <div class="signal70-0AvDFH" data-id="18:73">
                    <div class="rectangle-70-lyAnRA" data-id="3:469"></div>
                    <div class="signal-70-lyAnRA valign-text-middle fjallaone-normal-black-16px" data-id="3:470">SIGNAL
                        70</div>
                </div>
                <div class="signal69-0AvDFH" data-id="18:67">
                    <div class="rectangle-69-8Oalgk" data-id="3:463"></div>
                    <div class="signal-69-8Oalgk valign-text-middle fjallaone-normal-black-16px" data-id="3:464">SIGNAL
                        69</div>
                </div>
                <div class="signal68-0AvDFH" data-id="18:62">
                    <div class="rectangle-68-35oF4Y" data-id="3:457"></div>
                    <div class="signal-68-35oF4Y valign-text-middle fjallaone-normal-black-16px" data-id="3:458">SIGNAL
                        68</div>
                </div>
                <div class="signal67-0AvDFH" data-id="18:57">
                    <div class="rectangle-67-71sie6" data-id="3:451"></div>
                    <div class="signal-67-71sie6 valign-text-middle fjallaone-normal-black-16px" data-id="3:452">SIGNAL
                        67</div>
                </div>
                <div class="signal66-0AvDFH" data-id="18:52">
                    <div class="rectangle-66-jPcLDv" data-id="3:508"></div>
                    <div class="signal-66-jPcLDv valign-text-middle fjallaone-normal-black-16px" data-id="3:509">SIGNAL
                        66</div>
                </div>
                <div class="signal65-0AvDFH" data-id="18:72">
                    <div class="rectangle-65-SoMfDh" data-id="3:448"></div>
                    <div class="signal-65-SoMfDh valign-text-middle fjallaone-normal-black-16px" data-id="3:449">SIGNAL
                        65</div>
                </div>
                <div class="signal64-0AvDFH" data-id="18:66">
                    <div class="rectangle-64-ZmXZZ9" data-id="3:445"></div>
                    <div class="signal-64-ZmXZZ9 valign-text-middle fjallaone-normal-black-16px" data-id="3:446">SIGNAL
                        64</div>
                </div>
                <div class="signal63-0AvDFH" data-id="18:61">
                    <div class="rectangle-63-wEphgc" data-id="3:442"></div>
                    <div class="signal-63-wEphgc valign-text-middle fjallaone-normal-black-16px" data-id="3:443">SIGNAL
                        63</div>
                </div>
                <div class="signal62-0AvDFH" data-id="18:56">
                    <div class="rectangle-62-hT83aN" data-id="3:439"></div>
                    <div class="signal-62-hT83aN valign-text-middle fjallaone-normal-black-16px" data-id="3:440">SIGNAL
                        62</div>
                </div>
                <div class="signal61-0AvDFH" data-id="18:51">
                    <div class="rectangle-61-NJ4hON" data-id="3:481"></div>
                    <div class="signal-61-NJ4hON valign-text-middle fjallaone-normal-black-16px" data-id="3:482">SIGNAL
                        61</div>
                </div>
                <div class="signal60-0AvDFH" data-id="18:71">
                    <div class="rectangle-60-CC1jK2" data-id="3:436"></div>
                    <div class="signal-60-CC1jK2 valign-text-middle fjallaone-normal-black-16px" data-id="3:437">SIGNAL
                        60</div>
                </div>
                <div class="signal59-0AvDFH" data-id="18:65">
                    <div class="rectangle-59-Jgs9Zz" data-id="3:433"></div>
                    <div class="signal-59-Jgs9Zz valign-text-middle fjallaone-normal-black-16px" data-id="3:434">SIGNAL
                        59</div>
                </div>
                <div class="signal58-0AvDFH" data-id="18:60">
                    <div class="rectangle-58-S7ZpZs" data-id="3:430"></div>
                    <div class="signal-58-S7ZpZs valign-text-middle fjallaone-normal-black-16px" data-id="3:431">SIGNAL
                        58</div>
                </div>
                <div class="signal57-0AvDFH" data-id="18:55">
                    <div class="rectangle-57-yaVUkg" data-id="3:427"></div>
                    <div class="signal-57-yaVUkg valign-text-middle fjallaone-normal-black-16px" data-id="3:428">SIGNAL
                        57</div>
                </div>
                <div class="signal56-0AvDFH" data-id="18:50">
                    <div class="rectangle-56-HUIwWE" data-id="3:478"></div>
                    <div class="signal-56-HUIwWE valign-text-middle fjallaone-normal-black-16px" data-id="3:479">SIGNAL
                        56</div>
                </div>
                <div class="signal55-0AvDFH" data-id="18:70">
                    <div class="rectangle-55-hINH5C" data-id="3:423"></div>
                    <div class="signal-55-hINH5C valign-text-middle fjallaone-normal-black-16px" data-id="3:424">SIGNAL
                        55</div>
                </div>
                <div class="signal54-0AvDFH" data-id="18:64">
                    <div class="rectangle-54-FTMNZe" data-id="3:420"></div>
                    <div class="signal-54-FTMNZe valign-text-middle fjallaone-normal-black-16px" data-id="3:421">SIGNAL
                        54</div>
                </div>
                <div class="signal53-0AvDFH" data-id="18:59">
                    <div class="rectangle-53-ce6cbq" data-id="3:417"></div>
                    <div class="signal-53-ce6cbq valign-text-middle fjallaone-normal-black-16px" data-id="3:418">SIGNAL
                        53</div>
                </div>
                <div class="signal52-0AvDFH" data-id="18:54">
                    <div class="rectangle-52-O4HqX1" data-id="3:414"></div>
                    <div class="signal-52-O4HqX1 valign-text-middle fjallaone-normal-black-16px" data-id="3:415">SIGNAL
                        52</div>
                </div>
                <div class="signal51-0AvDFH" data-id="18:49">
                    <div class="rectangle-51-VnfSgW" data-id="3:475"></div>
                    <div class="signal-51-VnfSgW valign-text-middle fjallaone-normal-black-16px" data-id="3:476">SIGNAL
                        51</div>
                </div>
                <div class="signal50-0AvDFH" data-id="35:46">
                    <div class="rectangle-50-XqiMjV" data-id="35:47"></div>
                    <div class="signal-50-XqiMjV valign-text-middle fjallaone-normal-black-16px" data-id="35:48">SIGNAL
                        50</div>
                </div>
                <div class="signal49-0AvDFH" data-id="18:48">
                    <div class="rectangle-49-gL4xr7" data-id="3:383"></div>
                    <div class="signal-49-gL4xr7 valign-text-middle fjallaone-normal-black-16px" data-id="3:384">SIGNAL
                        49</div>
                </div>
                <div class="signal48-0AvDFH" data-id="18:43">
                    <div class="rectangle-48-5IJ1Hb" data-id="3:368"></div>
                    <div class="signal-48-5IJ1Hb valign-text-middle fjallaone-normal-black-16px" data-id="3:369">SIGNAL
                        48</div>
                </div>
                <div class="signal47-0AvDFH" data-id="18:38">
                    <div class="rectangle-47-5NuwOv" data-id="3:353"></div>
                    <div class="signal-47-5NuwOv valign-text-middle fjallaone-normal-black-16px" data-id="3:354">SIGNAL
                        47</div>
                </div>
                <div class="signal46-0AvDFH" data-id="18:29">
                    <div class="rectangle-46-1beIAb" data-id="3:308"></div>
                    <div class="signal-46-1beIAb valign-text-middle fjallaone-normal-black-16px" data-id="3:309">SIGNAL
                        46</div>
                </div>
                <div class="signal45-0AvDFH" data-id="18:28">
                    <div class="rectangle-45-8cinyG" data-id="3:293"></div>
                    <div class="signal-45-8cinyG valign-text-middle fjallaone-normal-black-16px" data-id="3:294">SIGNAL
                        45</div>
                </div>
                <div class="signal44-0AvDFH" data-id="18:23">
                    <div class="rectangle-44-OQ5iCL" data-id="3:278"></div>
                    <div class="signal-44-OQ5iCL valign-text-middle fjallaone-normal-black-16px" data-id="3:279">SIGNAL
                        44</div>
                </div>
                <div class="signal43-0AvDFH" data-id="18:18">
                    <div class="rectangle-43-tDuZB1" data-id="3:233"></div>
                    <div class="signal-43-tDuZB1 valign-text-middle fjallaone-normal-black-16px" data-id="3:234">SIGNAL
                        43</div>
                </div>
                <div class="signal42-0AvDFH" data-id="18:13">
                    <div class="rectangle-42-T67D9S" data-id="3:218"></div>
                    <div class="signal-42-T67D9S valign-text-middle fjallaone-normal-black-16px" data-id="3:219">SIGNAL
                        42</div>
                </div>
                <div class="signal41-0AvDFH" data-id="18:12">
                    <div class="rectangle-41-ohRHDJ" data-id="3:112"></div>
                    <div class="signal-41-ohRHDJ valign-text-middle fjallaone-normal-black-16px" data-id="3:113">SIGNAL
                        41</div>
                </div>
                <div class="signal40-0AvDFH" data-id="35:50">
                    <div class="rectangle-40-f0Xanx" data-id="35:51"></div>
                    <div class="signal-40-f0Xanx valign-text-middle fjallaone-normal-black-16px" data-id="35:52">SIGNAL
                        40</div>
                </div>
                <div class="signal39-0AvDFH" data-id="18:47">
                    <div class="rectangle-39-h2LafA" data-id="3:386"></div>
                    <div class="signal-39-h2LafA valign-text-middle fjallaone-normal-black-16px" data-id="3:387">SIGNAL
                        39</div>
                </div>
                <div class="signal38-0AvDFH" data-id="18:42">
                    <div class="rectangle-38-z5IJ9a" data-id="3:371"></div>
                    <div class="signal-38-z5IJ9a valign-text-middle fjallaone-normal-black-16px" data-id="3:372">SIGNAL
                        38</div>
                </div>
                <div class="signal37-0AvDFH" data-id="18:37">
                    <div class="rectangle-37-CFfQI1" data-id="3:356"></div>
                    <div class="signal-37-CFfQI1 valign-text-middle fjallaone-normal-black-16px" data-id="3:357">SIGNAL
                        37</div>
                </div>
                <div class="signal36-0AvDFH" data-id="18:30">
                    <div class="rectangle-36-ZGLyx2" data-id="3:311"></div>
                    <div class="signal-36-ZGLyx2 valign-text-middle fjallaone-normal-black-16px" data-id="3:312">SIGNAL
                        36</div>
                </div>
                <div class="signal35-0AvDFH" data-id="18:27">
                    <div class="rectangle-35-x9ygMq" data-id="3:296"></div>
                    <div class="signal-35-x9ygMq valign-text-middle fjallaone-normal-black-16px" data-id="3:297">SIGNAL
                        35</div>
                </div>
                <div class="signal34-0AvDFH" data-id="18:22">
                    <div class="rectangle-34-Ax0JC9" data-id="3:281"></div>
                    <div class="signal-34-Ax0JC9 valign-text-middle fjallaone-normal-black-16px" data-id="3:282">SIGNAL
                        34</div>
                </div>
                <div class="signal33-0AvDFH" data-id="18:16">
                    <div class="rectangle-33-Ba1AwH" data-id="3:236"></div>
                    <div class="signal-33-Ba1AwH valign-text-middle fjallaone-normal-black-16px" data-id="3:237">SIGNAL
                        33</div>
                </div>
                <div class="signal32-0AvDFH" data-id="18:10">
                    <div class="rectangle-32-TAGxXw" data-id="3:221"></div>
                    <div class="signal-32-TAGxXw valign-text-middle fjallaone-normal-black-16px" data-id="3:222">SIGNAL
                        32</div>
                </div>
                <div class="signal31-0AvDFH" data-id="18:6">
                    <div class="rectangle-31-bn5xI7" data-id="3:121"></div>
                    <div class="signal-31-bn5xI7 valign-text-middle fjallaone-normal-black-16px" data-id="3:122">SIGNAL
                        31</div>
                </div>
                <div class="signal30-0AvDFH" data-id="35:41">
                    <div class="rectangle-30-Y0jUco" data-id="35:42"></div>
                    <div class="signal-30-Y0jUco valign-text-middle fjallaone-normal-black-16px" data-id="35:43">SIGNAL
                        30</div>
                </div>
                <div class="signal29-0AvDFH" data-id="18:46">
                    <div class="rectangle-29-DftyQU" data-id="3:389"></div>
                    <div class="signal-29-DftyQU valign-text-middle fjallaone-normal-black-16px" data-id="3:390">SIGNAL
                        29</div>
                </div>
                <div class="signal28-0AvDFH" data-id="18:41">
                    <div class="rectangle-28-CfMhkm" data-id="3:374"></div>
                    <div class="signal-28-CfMhkm valign-text-middle fjallaone-normal-black-16px" data-id="3:375">SIGNAL
                        28</div>
                </div>
                <div class="signal27-0AvDFH" data-id="18:36">
                    <div class="rectangle-27-EkGsWW" data-id="3:359"></div>
                    <div class="signal-27-EkGsWW valign-text-middle fjallaone-normal-black-16px" data-id="3:360">SIGNAL
                        27</div>
                </div>
                <div class="signal26-0AvDFH" data-id="18:31">
                    <div class="rectangle-26-W8qox8" data-id="3:314"></div>
                    <div class="signal-26-W8qox8 valign-text-middle fjallaone-normal-black-16px" data-id="3:315">SIGNAL
                        26</div>
                </div>
                <div class="signal25-0AvDFH" data-id="18:26">
                    <div class="rectangle-25-fHHb9G" data-id="3:299"></div>
                    <div class="signal-25-fHHb9G valign-text-middle fjallaone-normal-black-16px" data-id="3:300">SIGNAL
                        25</div>
                </div>
                <div class="signal24-0AvDFH" data-id="18:21">
                    <div class="rectangle-24-rmwYck" data-id="3:284"></div>
                    <div class="signal-24-rmwYck valign-text-middle fjallaone-normal-black-16px" data-id="3:285">SIGNAL
                        24</div>
                </div>
                <div class="signal23-0AvDFH" data-id="18:15">
                    <div class="rectangle-23-dchVxi" data-id="3:239"></div>
                    <div class="signal-23-dchVxi valign-text-middle fjallaone-normal-black-16px" data-id="3:240">SIGNAL
                        23</div>
                </div>
                <div class="signal22-0AvDFH" data-id="18:9">
                    <div class="rectangle-22-Xqjgs8" data-id="3:224"></div>
                    <div class="signal-22-Xqjgs8 valign-text-middle fjallaone-normal-black-16px" data-id="3:225">SIGNAL
                        22</div>
                </div>
                <div class="signal21-0AvDFH" data-id="18:5">
                    <div class="rectangle-21-wZlhtI" data-id="3:118"></div>
                    <div class="signal-21-wZlhtI valign-text-middle fjallaone-normal-black-16px" data-id="3:119">SIGNAL
                        21</div>
                </div>
                <div class="signal20-0AvDFH" data-id="35:38">
                    <div class="rectangle-20-RorFWr" data-id="35:39"></div>
                    <div class="signal-20-RorFWr valign-text-middle fjallaone-normal-black-16px" data-id="35:40">SIGNAL
                        20</div>
                </div>
                <div class="signal19-0AvDFH" data-id="18:45">
                    <div class="rectangle-19-XQZ7Qx" data-id="3:392"></div>
                    <div class="signal-19-XQZ7Qx valign-text-middle fjallaone-normal-black-16px" data-id="3:393">SIGNAL
                        19</div>
                </div>
                <div class="signal18-0AvDFH" data-id="18:40">
                    <div class="rectangle-18-2daefs" data-id="3:377"></div>
                    <div class="signal-18-2daefs valign-text-middle fjallaone-normal-black-16px" data-id="3:378">SIGNAL
                        18</div>
                </div>
                <div class="signal17-0AvDFH" data-id="18:35">
                    <div class="rectangle-17-suxxWg" data-id="3:362"></div>
                    <div class="signal-17-suxxWg valign-text-middle fjallaone-normal-black-16px" data-id="3:363">SIGNAL
                        17</div>
                </div>
                <div class="signal16-0AvDFH" data-id="18:32">
                    <div class="rectangle-16-JD1n5a" data-id="3:317"></div>
                    <div class="signal-16-JD1n5a valign-text-middle fjallaone-normal-black-16px" data-id="3:318">SIGNAL
                        16</div>
                </div>
                <div class="signal15-0AvDFH" data-id="18:25">
                    <div class="rectangle-15-RWTMEi" data-id="3:302"></div>
                    <div class="signal-15-RWTMEi valign-text-middle fjallaone-normal-black-16px" data-id="3:303">SIGNAL
                        15</div>
                </div>
                <div class="signal14-0AvDFH" data-id="18:20">
                    <div class="rectangle-14-abpxyv" data-id="3:287"></div>
                    <div class="signal-14-abpxyv valign-text-middle fjallaone-normal-black-16px" data-id="3:288">SIGNAL
                        14</div>
                </div>
                <div class="signal13-0AvDFH" data-id="18:14">
                    <div class="rectangle-13-Q1UOJq" data-id="3:242"></div>
                    <div class="signal-13-Q1UOJq valign-text-middle fjallaone-normal-black-16px" data-id="3:243">SIGNAL
                        13</div>
                </div>
                <div class="signal12-0AvDFH" data-id="18:8">
                    <div class="rectangle-12-xRMI3h" data-id="3:227"></div>
                    <div class="signal-12-xRMI3h valign-text-middle fjallaone-normal-black-16px" data-id="3:228">SIGNAL
                        12</div>
                </div>
                <div class="signal-11-0AvDFH signal-11" data-id="18:4">
                    <div class="rectangle-11-GwFtM3" data-id="3:115"></div>
                    <div class="signal-11-GwFtM3 valign-text-middle signal-11 fjallaone-normal-black-16px"
                        data-id="3:116">SIGNAL 11</div>
                </div>
                <div class="signal10-0AvDFH" data-id="35:33">
                    <div class="rectangle-10-lyj1Pk" data-id="35:34"></div>
                    <div class="signal-10-lyj1Pk valign-text-middle fjallaone-normal-black-16px" data-id="35:35">SIGNAL
                        10</div>
                </div>
                <div class="signal9-0AvDFH" data-id="18:44">
                    <div class="rectangle-9-Yw47vs" data-id="3:380"></div>
                    <div class="signal-9-Yw47vs valign-text-middle fjallaone-normal-black-16px" data-id="3:381">SIGNAL 9
                    </div>
                </div>
                <div class="signal8-0AvDFH" data-id="18:39">
                    <div class="rectangle-8-xeOiyb" data-id="3:365"></div>
                    <div class="signal-8-xeOiyb valign-text-middle fjallaone-normal-black-16px" data-id="3:366">SIGNAL 8
                    </div>
                </div>
                <div class="signal7-0AvDFH" data-id="18:34">
                    <div class="rectangle-7-ASqS2S" data-id="3:350"></div>
                    <div class="signal-7-ASqS2S valign-text-middle fjallaone-normal-black-16px" data-id="3:351">SIGNAL 7
                    </div>
                </div>
                <div class="signal6-0AvDFH" data-id="18:33">
                    <div class="rectangle-6-xTcHmK" data-id="3:305"></div>
                    <div class="signal-6-xTcHmK valign-text-middle fjallaone-normal-black-16px" data-id="3:306">SIGNAL 6
                    </div>
                </div>
                <div class="signal5-0AvDFH" data-id="18:24">
                    <div class="rectangle-5-br5aaw" data-id="3:290"></div>
                    <div class="signal-5-br5aaw valign-text-middle fjallaone-normal-black-16px" data-id="3:291">SIGNAL 5
                    </div>
                </div>
                <div class="signal4-0AvDFH" data-id="18:19">
                    <div class="rectangle-4-JgUiqj" data-id="3:275"></div>
                    <div class="signal-4-JgUiqj valign-text-middle fjallaone-normal-black-16px" data-id="3:276">SIGNAL 4
                    </div>
                </div>
                <div class="signal3-0AvDFH" data-id="18:11">
                    <div class="rectangle-3-OsIyRa" data-id="3:230"></div>
                    <div class="signal-3-OsIyRa valign-text-middle fjallaone-normal-black-16px" data-id="3:231">SIGNAL 3
                    </div>
                </div>
                <div class="signal2-0AvDFH" data-id="18:7">
                    <div class="rectangle-2-rBmBbX" data-id="3:215"></div>
                    <div class="signal-2-rBmBbX valign-text-middle fjallaone-normal-black-16px" data-id="3:216">SIGNAL 2
                    </div>
                </div>
                <div class="signal-1-0AvDFH signal-1" data-id="18:3">
                    <div class="rectangle-1-sYeNs3" data-id="3:108"></div>
                    <div class="signal-1-sYeNs3 valign-text-middle signal-1 fjallaone-normal-black-16px"
                        data-id="3:109">SIGNAL 1</div>
                </div>
                <div class="kotak-sinyal-0AvDFH" data-id="12:87">
                    <div class="rectangle-4-xwnY9r" data-id="1:33"></div>
                    <div class="rectangle-4-Wu6Ge3" data-id="1:34"></div>
                    <div class="relay-operated-xwnY9r" data-id="1:35">Relay Operated</div>
                    <div class="rectangle-4-VyPSHk" data-id="1:26"></div>
                    <div class="rectangle-4-uGOxIn" data-id="1:27"></div>
                    <div class="signal-xwnY9r" data-id="1:29">SIGNAL</div>
                </div>
            </div>
            <div class="measurement-hv-Ys8k0x measurement-hv" data-id="33:2">
                <div class="rectangle-3-M0xYid" data-id="33:3"></div>
                <div class="rectangle-2-M0xYid" data-id="33:4"></div>
                <div class="measurement-hv-M0xYid measurement-hv fjallaone-normal-white-24px" data-id="33:5">MEASUREMENT
                    HV</div>
                <div class="q-M0xYid q" data-id="33:6">
                    <div class="rectangle-5-5DM4st" data-id="33:7"></div>
                    <div class="q-5DM4st q timesnewroman-regular-normal-white-32px" data-id="33:8">Q</div>
                    <div class="rectangle-5-YXhlRh" data-id="33:9"></div>
                    <div class="a11 timesnewroman-regular-normal-white-32px" data-id="33:10">A11</div>
                    <div class="rectangle-5-oEGvBF" data-id="33:11"></div>
                    <div class="mvar-5DM4st mvar" data-id="33:12">MVAR</div>
                </div>
                <div class="p-M0xYid p" data-id="33:13">
                    <div class="rectangle-5-QihkUp" data-id="33:14"></div>
                    <div class="p-QihkUp p timesnewroman-regular-normal-white-32px" data-id="33:15">P</div>
                    <div class="rectangle-5-6T2WWy" data-id="33:16"></div>
                    <div class="a10 timesnewroman-regular-normal-white-32px" data-id="33:17">A10</div>
                    <div class="rectangle-5-RAkpNO" data-id="33:18"></div>
                    <div class="mw-QihkUp mw timesnewroman-regular-normal-white-32px" data-id="33:19">MW</div>
                </div>
                <div class="it-M0xYid it" data-id="33:20">
                    <div class="rectangle-5-jMcQIr" data-id="33:21"></div>
                    <div class="it-jMcQIr it timesnewroman-regular-normal-white-32px" data-id="33:22">It</div>
                    <div class="rectangle-5-Z91Yss" data-id="33:23"></div>
                    <div class="a9 timesnewroman-regular-normal-white-32px" data-id="33:24">A9</div>
                    <div class="rectangle-5-t2a3rp" data-id="33:25"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="33:26">kV</div>
                </div>
                <div class="is-M0xYid is" data-id="33:27">
                    <div class="rectangle-5-i9XTzz" data-id="33:28"></div>
                    <div class="is-i9XTzz is timesnewroman-regular-normal-white-32px" data-id="33:29">Is</div>
                    <div class="rectangle-5-Hc9edZ" data-id="33:30"></div>
                    <div class="a8 timesnewroman-regular-normal-white-32px" data-id="33:31">A8</div>
                    <div class="rectangle-5-eSXWFe" data-id="33:32"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="33:33">kV</div>
                </div>
                <div class="ir-M0xYid ir" data-id="33:34">
                    <div class="rectangle-5-rdeoTA" data-id="33:35"></div>
                    <div class="ir-rdeoTA ir timesnewroman-regular-normal-white-32px" data-id="33:36">Ir</div>
                    <div class="rectangle-5-eCCjNB" data-id="33:37"></div>
                    <div class="a7 timesnewroman-regular-normal-white-32px" data-id="33:38">A7</div>
                    <div class="rectangle-5-FUiomk" data-id="33:39"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="33:40">kV</div>
                </div>
                <div class="vtr-M0xYid vtr" data-id="33:41">
                    <div class="rectangle-5-qxqXoW" data-id="33:42"></div>
                    <div class="vtr-qxqXoW vtr timesnewroman-regular-normal-white-32px" data-id="33:43">Vtr</div>
                    <div class="rectangle-5-iCCRsq" data-id="33:44"></div>
                    <div class="a6 timesnewroman-regular-normal-white-32px" data-id="33:45">A6</div>
                    <div class="rectangle-5-H7sSG2" data-id="33:46"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="33:47">kV</div>
                </div>
                <div class="vst-M0xYid vst" data-id="33:48">
                    <div class="rectangle-5-KPTBBb" data-id="33:49"></div>
                    <div class="vst-KPTBBb vst timesnewroman-regular-normal-white-32px" data-id="33:50">Vst</div>
                    <div class="rectangle-5-xqraYL" data-id="33:51"></div>
                    <div class="a5 timesnewroman-regular-normal-white-32px" data-id="33:52">A5</div>
                    <div class="rectangle-5-OgThCE" data-id="33:53"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="33:54">kV</div>
                </div>
                <div class="vrs-M0xYid vrs" data-id="33:55">
                    <div class="rectangle-5-ixq67h" data-id="33:56"></div>
                    <div class="vrs-ixq67h vrs timesnewroman-regular-normal-white-32px" data-id="33:57">Vrs</div>
                    <div class="rectangle-5-zLdqjt" data-id="33:58"></div>
                    <div class="a4 timesnewroman-regular-normal-white-32px" data-id="33:59">A4</div>
                    <div class="rectangle-5-xVYjlv" data-id="33:60"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="33:61">kV</div>
                </div>
                <div class="vt-M0xYid vt" data-id="33:62">
                    <div class="rectangle-5-lM6xfU" data-id="33:63"></div>
                    <div class="vt-lM6xfU vt timesnewroman-regular-normal-white-32px" data-id="33:64">Vt</div>
                    <div class="rectangle-5-bMtx5j" data-id="33:65"></div>
                    <div class="a3 timesnewroman-regular-normal-white-32px" data-id="33:66">A3</div>
                    <div class="rectangle-5-Pxx4s6" data-id="33:67"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="33:68">kV</div>
                </div>
                <div class="vs-M0xYid vs" data-id="33:69">
                    <div class="rectangle-5-ICq8o7" data-id="33:70"></div>
                    <div class="vs-ICq8o7 vs timesnewroman-regular-normal-white-32px" data-id="33:71">Vs</div>
                    <div class="rectangle-5-G6t53c" data-id="33:72"></div>
                    <div class="a2 timesnewroman-regular-normal-white-32px" data-id="33:73">A2</div>
                    <div class="rectangle-5-KWIPWk" data-id="33:74"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="33:75">kV</div>
                </div>
                <div class="vr-M0xYid vr" data-id="33:76">
                    <div class="rectangle-5-ex6u8Z" data-id="33:77"></div>
                    <div class="vr-ex6u8Z vr timesnewroman-regular-normal-white-32px" data-id="33:78">Vr</div>
                    <div class="rectangle-5-rBmaf8" data-id="33:79"></div>
                    <div class="a1-ex6u8Z a1 timesnewroman-regular-normal-white-32px" data-id="33:80">A1</div>
                    <div class="rectangle-5-xTimpw" data-id="33:81"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="33:82">kV</div>
                </div>
            </div>
            <div class="measurement-lv-Ys8k0x measurement-lv" data-id="50:5">
                <div class="rectangle-3-A0Zz3h" data-id="50:6"></div>
                <div class="rectangle-2-A0Zz3h" data-id="50:7"></div>
                <div class="measurement-lv-A0Zz3h measurement-lv fjallaone-normal-white-24px" data-id="50:8">MEASUREMENT
                    LV</div>
                <div class="q-A0Zz3h q" data-id="50:9">
                    <div class="rectangle-5-xTxL71" data-id="50:10"></div>
                    <div class="q-xTxL71 q timesnewroman-regular-normal-white-32px" data-id="50:11">Q</div>
                    <div class="rectangle-5-Qp3MHm" data-id="50:12"></div>
                    <div class="a11 timesnewroman-regular-normal-white-32px" data-id="50:13">A11</div>
                    <div class="rectangle-5-eBgbKX" data-id="50:14"></div>
                    <div class="mvar-xTxL71 mvar" data-id="50:15">MVAR</div>
                </div>
                <div class="p-A0Zz3h p" data-id="50:16">
                    <div class="rectangle-5-FiRrVS" data-id="50:17"></div>
                    <div class="p-FiRrVS p timesnewroman-regular-normal-white-32px" data-id="50:18">P</div>
                    <div class="rectangle-5-lxEpYr" data-id="50:19"></div>
                    <div class="a10 timesnewroman-regular-normal-white-32px" data-id="50:20">A10</div>
                    <div class="rectangle-5-cvN8Qo" data-id="50:21"></div>
                    <div class="mw-FiRrVS mw timesnewroman-regular-normal-white-32px" data-id="50:22">MW</div>
                </div>
                <div class="it-A0Zz3h it" data-id="50:23">
                    <div class="rectangle-5-xmPRob" data-id="50:24"></div>
                    <div class="it-xmPRob it timesnewroman-regular-normal-white-32px" data-id="50:25">It</div>
                    <div class="rectangle-5-xzmNbb" data-id="50:26"></div>
                    <div class="a9 timesnewroman-regular-normal-white-32px" data-id="50:27">A9</div>
                    <div class="rectangle-5-TsEgT7" data-id="50:28"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="50:29">kV</div>
                </div>
                <div class="is-A0Zz3h is" data-id="50:30">
                    <div class="rectangle-5-UlKtS4" data-id="50:31"></div>
                    <div class="is-UlKtS4 is timesnewroman-regular-normal-white-32px" data-id="50:32">Is</div>
                    <div class="rectangle-5-EITxUu" data-id="50:33"></div>
                    <div class="a8 timesnewroman-regular-normal-white-32px" data-id="50:34">A8</div>
                    <div class="rectangle-5-rpw0Ug" data-id="50:35"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="50:36">kV</div>
                </div>
                <div class="ir-A0Zz3h ir" data-id="50:37">
                    <div class="rectangle-5-LpLijB" data-id="50:38"></div>
                    <div class="ir-LpLijB ir timesnewroman-regular-normal-white-32px" data-id="50:39">Ir</div>
                    <div class="rectangle-5-pJU1Nf" data-id="50:40"></div>
                    <div class="a7 timesnewroman-regular-normal-white-32px" data-id="50:41">A7</div>
                    <div class="rectangle-5-xREJbp" data-id="50:42"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="50:43">kV</div>
                </div>
                <div class="vtr-A0Zz3h vtr" data-id="50:44">
                    <div class="rectangle-5-RnS7IK" data-id="50:45"></div>
                    <div class="vtr-RnS7IK vtr timesnewroman-regular-normal-white-32px" data-id="50:46">Vtr</div>
                    <div class="rectangle-5-KxyUxu" data-id="50:47"></div>
                    <div class="a6 timesnewroman-regular-normal-white-32px" data-id="50:48">A6</div>
                    <div class="rectangle-5-4YBwpS" data-id="50:49"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="50:50">kV</div>
                </div>
                <div class="vst-A0Zz3h vst" data-id="50:51">
                    <div class="rectangle-5-IOuaoM" data-id="50:52"></div>
                    <div class="vst-IOuaoM vst timesnewroman-regular-normal-white-32px" data-id="50:53">Vst</div>
                    <div class="rectangle-5-vaFaRX" data-id="50:54"></div>
                    <div class="a5 timesnewroman-regular-normal-white-32px" data-id="50:55">A5</div>
                    <div class="rectangle-5-weHkx4" data-id="50:56"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="50:57">kV</div>
                </div>
                <div class="vrs-A0Zz3h vrs" data-id="50:58">
                    <div class="rectangle-5-MbwTOr" data-id="50:59"></div>
                    <div class="vrs-MbwTOr vrs timesnewroman-regular-normal-white-32px" data-id="50:60">Vrs</div>
                    <div class="rectangle-5-Y16ykO" data-id="50:61"></div>
                    <div class="a4 timesnewroman-regular-normal-white-32px" data-id="50:62">A4</div>
                    <div class="rectangle-5-1MDNho" data-id="50:63"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="50:64">kV</div>
                </div>
                <div class="vt-A0Zz3h vt" data-id="50:65">
                    <div class="rectangle-5-j7jt4p" data-id="50:66"></div>
                    <div class="vt-j7jt4p vt timesnewroman-regular-normal-white-32px" data-id="50:67">Vt</div>
                    <div class="rectangle-5-9nWuQc" data-id="50:68"></div>
                    <div class="a3 timesnewroman-regular-normal-white-32px" data-id="50:69">A3</div>
                    <div class="rectangle-5-79NoPb" data-id="50:70"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="50:71">kV</div>
                </div>
                <div class="vs-A0Zz3h vs" data-id="50:72">
                    <div class="rectangle-5-tRvX8m" data-id="50:73"></div>
                    <div class="vs-tRvX8m vs timesnewroman-regular-normal-white-32px" data-id="50:74">Vs</div>
                    <div class="rectangle-5-wKZalD" data-id="50:75"></div>
                    <div class="a2 timesnewroman-regular-normal-white-32px" data-id="50:76">A2</div>
                    <div class="rectangle-5-EKJ7RJ" data-id="50:77"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="50:78">kV</div>
                </div>
                <div class="vr-A0Zz3h vr" data-id="50:79">
                    <div class="rectangle-5-Li5Azn" data-id="50:80"></div>
                    <div class="vr-Li5Azn vr timesnewroman-regular-normal-white-32px" data-id="50:81">Vr</div>
                    <div class="rectangle-5-yb4TMN" data-id="50:82"></div>
                    <div class="a1-Li5Azn a1 timesnewroman-regular-normal-white-32px" data-id="50:83">A1</div>
                    <div class="rectangle-5-Ox8f35" data-id="50:84"></div>
                    <div class="k-v timesnewroman-regular-normal-white-32px" data-id="50:85">kV</div>
                </div>
            </div>
            <div class="tap-changer-Ys8k0x tap-changer" data-id="50:87">
                <div class="rectangle-3-1Tf1Pe" data-id="50:88"></div>
                <div class="rectangle-2-1Tf1Pe" data-id="50:89"></div>
                <div class="tap-changer-1Tf1Pe tap-changer fjallaone-normal-white-24px" data-id="50:90">TAP CHANGER
                </div>
                <div class="poss-1Tf1Pe" data-id="50:161">
                    <div class="posisi-jNgacy timesnewroman-regular-normal-white-32px" data-id="50:163">TAP :</div>
                    <div class="a1-jNgacy a1 timesnewroman-regular-normal-white-32px" data-id="50:165">A1</div>
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
            <div class="status-bay-Ys8k0x" data-id="35:32">
                <div class="rectangle-3-gT0ffV" data-id="1:24"></div>
                <div class="kotak-status-bay-gT0ffV" data-id="33:85">
                    <div class="rectangle-2-H5RUu2" data-id="1:22"></div>
                    <div class="status-H5RUu2 fjallaone-normal-white-24px" data-id="1:23">STATUS BAY</div>
                </div>
                <div class="bus-1-gT0ffV" data-id="33:91">
                    <div class="bus-1-_bar-ptkwRj" data-id="33:95"><img class="line-1-k3OlHA" data-id="33:93"
                            src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                            anima-src="https://cdn.animaapp.com/projects/6789c1d6c445ac407d107907/releases/67a17a2d0bb57fda9a863de5/img/line-1.svg"
                            alt="Line 1">
                        <div class="bar-k3OlHA bar" data-id="33:86"></div>
                    </div>
                    <div class="bus-1_text-ptkwRj fjallaone-normal-white-15px" data-id="33:89">BUS 1</div>
                </div>
                <div class="bus-2-gT0ffV" data-id="33:92">
                    <div class="bus-2_bar-Rqeglc" data-id="33:96"><img class="line-2-sx6qn9" data-id="33:94"
                            src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                            anima-src="https://cdn.animaapp.com/projects/6789c1d6c445ac407d107907/releases/67a17a2d0bb57fda9a863de5/img/line-2.svg"
                            alt="Line 2">
                        <div class="bar-sx6qn9 bar" data-id="33:87"></div>
                    </div>
                    <div class="bus-2_text-Rqeglc fjallaone-normal-white-15px" data-id="33:90">BUS 2</div>
                </div>
                <div class="live-bay-gT0ffV" data-id="34:11"><img class="bar-3-zkGoVV" data-id="33:103"
                        src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                        anima-src="https://cdn.animaapp.com/projects/6789c1d6c445ac407d107907/releases/67a17a2d0bb57fda9a863de5/img/line-3.svg"
                        alt="bar 3"><img class="bar-7-zkGoVV" data-id="34:9"
                        src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                        anima-src="https://cdn.animaapp.com/projects/6789c1d6c445ac407d107907/releases/67a17a2d0bb57fda9a863de5/img/line-7.svg"
                        alt="bar 7"><img class="bar-6-zkGoVV" data-id="33:107"
                        src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                        anima-src="https://cdn.animaapp.com/projects/6789c1d6c445ac407d107907/releases/67a2ec3d85d71741289e3c23/img/bar-6.svg"
                        alt="bar 6"><img class="bar-4-zkGoVV" data-id="33:105"
                        src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                        anima-src="https://cdn.animaapp.com/projects/6789c1d6c445ac407d107907/releases/67a17a2d0bb57fda9a863de5/img/line-3.svg"
                        alt="bar 4"><img class="bar-5-zkGoVV" data-id="33:106"
                        src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                        anima-src="https://cdn.animaapp.com/projects/6789c1d6c445ac407d107907/releases/67a17a2d0bb57fda9a863de5/img/line-5.svg"
                        alt="bar 5"></div>
                <div class="q21-gT0ffV" data-id="35:29">
                    <div class="q21_t-uxGWYS fjallaone-normal-white-15px" data-id="35:23">Q21</div>
                    <div class="q21-uxGWYS" data-id="33:97"></div>
                </div>
                <div class="q28-gT0ffV q28" data-id="35:27">
                    <div class="q28_t-ldi0Zx fjallaone-normal-white-15px" data-id="35:26">Q28</div>
                    <div class="q28-ldi0Zx q28" data-id="34:7"></div>
                </div>
                <div class="q50-gT0ffV q50" data-id="35:28">
                    <div class="q50_t-sgyNXS fjallaone-normal-white-15px" data-id="35:25">Q50</div>
                    <div class="q50-sgyNXS q50" data-id="34:5"></div>
                </div>
                <div class="q22-gT0ffV" data-id="35:31">
                    <div class="q22_t-Pr1xwt fjallaone-normal-white-15px" data-id="35:30">Q22</div>
                    <div class="q22-Pr1xwt" data-id="33:101"></div>
                </div><img class="live-line-gT0ffV" data-id="35:22"
                    src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                    anima-src="https://cdn.animaapp.com/projects/6789c1d6c445ac407d107907/releases/67a2ec3d85d71741289e3c23/img/live--line@2x.png"
                    alt="Live  Line">
                <div class="q38-gT0ffV" data-id="35:20">
                    <div class="ds-gaP5wx" data-id="35:14"></div>
                    <div class="ground-gaP5wx" data-id="35:21"><img class="line-9-kJdZWE" data-id="35:15"
                            src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                            anima-src="https://cdn.animaapp.com/projects/6789c1d6c445ac407d107907/releases/67a17a2d0bb57fda9a863de5/img/line-9.svg"
                            alt="Line 9"><img class="line-10-kJdZWE" data-id="35:16"
                            src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                            anima-src="https://cdn.animaapp.com/projects/6789c1d6c445ac407d107907/releases/67a17a2d0bb57fda9a863de5/img/line-10.svg"
                            alt="Line 10"><img class="line-11-kJdZWE" data-id="35:17"
                            src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                            anima-src="https://cdn.animaapp.com/projects/6789c1d6c445ac407d107907/releases/67a17a2d0bb57fda9a863de5/img/line-11.svg"
                            alt="Line 11"><img class="line-12-kJdZWE" data-id="35:18"
                            src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                            anima-src="https://cdn.animaapp.com/projects/6789c1d6c445ac407d107907/releases/67a17a2d0bb57fda9a863de5/img/line-12.svg"
                            alt="Line 12"><img class="line-13-kJdZWE" data-id="35:19"
                            src="data:image/gif;base64,R0lGODlhAQABAIAAAP///wAAACH5BAEAAAAALAAAAAABAAEAAAICRAEAOw=="
                            anima-src="https://cdn.animaapp.com/projects/6789c1d6c445ac407d107907/releases/67a17a2d0bb57fda9a863de5/img/line-13.svg"
                            alt="Line 13"></div>
                </div>
                <div class="trafo-gT0ffV" data-id="50:171">
                    <div class="ellipse-1-ekZuDE" data-id="50:3"></div>
                    <div class="ellipse-2-ekZuDE" data-id="50:4"></div>
                </div>
            </div>
        </div>
    </div>
    <script src="launchpad-js/launchpad-banner.js" async></script>
    <script defer src="https://animaapp.s3.amazonaws.com/static/restart-btn.min.js"></script>
</body>

</html>
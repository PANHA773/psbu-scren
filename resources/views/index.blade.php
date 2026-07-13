<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Preah Sihamoniraja Buddhist University</title>
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com"> -->
    <link rel="icon" type="image/png" href="images/logo.png">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Noto+Serif+Khmer:wght@400;600;700&family=Cormorant+Garamond:ital,wght@0,400;0,600;1,400&family=DM+Sans:wght@300;400;500;600&display=swap"
        rel="stylesheet">
    <style>
        :root {
            --navy: #0D1B3E;
            --navy-d: #091022;
            --navy-m: #142254;
            --gold: #C9963A;
            --gold-l: #E8B96A;
            --gold-pale: #F5DFA0;
            --gold-dim: rgba(201, 150, 58, 0.13);
            --cream: #F4F0E8;
            --muted: rgba(255, 255, 255, 0.52);
            --border: rgba(255, 255, 255, 0.10);
            --border-g: rgba(201, 150, 58, 0.30);
        }

        /* ── POINTER SPOTLIGHT ── */
        #pointer-light {
            position: fixed;
            inset: 0;
            z-index: 50;
            pointer-events: none;
            filter: blur(35px);
            background:
                /* bright warm core */
                radial-gradient(
                    80px circle at var(--mx, -9999px) var(--my, -9999px),
                    rgba(255, 210, 100, 0.30) 0%,
                    transparent 100%
                ),
                /* golden mid-ring */
                radial-gradient(
                    220px circle at var(--mx, -9999px) var(--my, -9999px),
                    rgba(201, 150, 58, 0.22) 0%,
                    rgba(180, 120, 40, 0.08) 60%,
                    transparent 100%
                ),
                /* soft outer bloom */
                radial-gradient(
                    400px circle at var(--mx, -9999px) var(--my, -9999px),
                    rgba(160, 110, 30, 0.08) 0%,
                    transparent 100%
                );
        }

        *,
        *::before,
        *::after {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        html,
        body {
            width: 100%;
            min-height: 100%;
            overflow-x: hidden;
            font-family: 'DM Sans', sans-serif;
            font-weight: 300;
            background: var(--navy-d) url('{{ asset('images/bg_body.png') }}') no-repeat center center fixed;
            background-size: cover;
            color: #fff;
            -webkit-font-smoothing: antialiased;
        }

        /* ── SHELL: full viewport, column ── */
        .shell {
            display: flex;
            flex-direction: column;
            width: 100%;
            min-height: 100vh;
        }

        /* ══════════════════════
           HEADER
        ══════════════════════ */
        .site-header {
            flex-shrink: 0;
            height: 72px;
            background: var(--navy);
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 36px;
            z-index: 30;
        }

        .header-logo {
            display: flex;
            align-items: center;
            gap: 12px;
            text-decoration: none;
        }

        .logo-seal {
            width: clamp(56px, 10vw, 120px);
            height: clamp(56px, 10vw, 120px);
            border-radius: 50%;
            border: 2px solid var(--gold);
            background: radial-gradient(circle at 40% 40%, #1a3060, var(--navy-d));
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: clamp(14px, 2.2vw, 22px);
            flex-shrink: 0;
            box-shadow: 0 0 12px rgba(201, 150, 58, 0.20);
        }

        .logo-seal img,
        .hero-seal img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            border-radius: inherit;
            display: block;
        }

        .logo-words {
            display: flex;
            flex-direction: column;
            gap: 2px;
        }

        .logo-kh {
            font-family: 'Noto Serif Khmer', serif;
            font-size: 18px;
            font-weight: 600;
            color: var(--gold-l);
            line-height: 1;
        }

        .logo-en {
            margin-top: 5px;
            font-family: 'Cormorant Garamond', serif;
            font-size: 10.8px;
            letter-spacing: 0.28em;
            text-transform: uppercase;
            color: var(--muted);
            white-space: nowrap;
        }

        .header-right {
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .lang-pill {
            display: flex;
            align-items: center;
            gap: 7px;
            padding: 7px 16px;
            border-radius: 6px;
            border: 1px solid var(--border);
            background: transparent;
            color: var(--muted);
            font-size: 12px;
            font-weight: 500;
            text-decoration: none;
            cursor: pointer;
            transition: all .2s;
        }

        .lang-pill:hover,
        .lang-pill.active {
            background: var(--gold-dim);
            border-color: var(--border-g);
            color: var(--gold-l);
        }

        .lang-flag {
            font-size: 15px;
        }

        .intl-pill {
            margin-left: 4px;
            padding: 8px 18px;
            border-radius: 6px;
            background: var(--gold);
            color: var(--navy-d);
            font-family: 'Noto Serif Khmer', 'DM Sans', sans-serif;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: .10em;
            text-transform: uppercase;
            text-decoration: none;
            border: none;
            cursor: pointer;
            transition: background .2s, transform .15s;
            white-space: nowrap;
        }

        .intl-pill:hover {
            background: var(--gold-l);
            transform: translateY(-1px);
        }

        /* ══════════════════════
           HERO  (full-width)
        ══════════════════════ */
        .hero {
            width: 100%;
            max-width: 2056px;
            height: 512px;
            margin: 0 auto;
            position: relative;
            overflow: hidden;
            flex-shrink: 0;
        }

        /* Carousel */
        .c-track {
            position: absolute;
            inset: 0;
        }

        .c-slide {
            position: absolute;
            inset: 0;
            opacity: 0;
            overflow: hidden;
            font-size: 0;
            transition: opacity 1.5s cubic-bezier(.4, 0, .2, 1);
        }

        .c-slide.active {
            opacity: 1;
        }

        .c-slide img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center top;
        }

        /* Overlays — match reference: dark bottom + slight left tint */
        .hero-ov {
            position: absolute;
            inset: 0;
            z-index: 2;
            background:
                linear-gradient(to top, rgba(9, 16, 34, .88) 0%, rgba(9, 16, 34, .30) 42%, transparent 68%),
                linear-gradient(to right, rgba(9, 16, 34, .40) 0%, transparent 60%);
        }

        /* Prev / Next */
        .c-btn {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            z-index: 10;
            width: 44px;
            height: 44px;
            border-radius: 50%;
            background: rgba(9, 16, 34, .60);
            border: 1px solid var(--border);
            color: #fff;
            font-size: 22px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            backdrop-filter: blur(8px);
            transition: all .2s;
        }

        .c-btn:hover {
            background: var(--gold-dim);
            border-color: var(--border-g);
            color: var(--gold-l);
        }

        .c-btn.prev {
            left: 18px;
        }

        .c-btn.next {
            right: 18px;
        }

        /* Centre content */
        .hero-body {
            position: absolute;
            inset: 0;
            z-index: 5;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            text-align: center;
            gap: 6px;
            padding: clamp(8px, 2vw, 16px) clamp(16px, 8vw, 80px);
        }

        .hero-seal {
            width: clamp(72px, 9vw, 110px);
            height: clamp(72px, 9vw, 110px);
            border-radius: 50%;
            background: radial-gradient(circle at 40% 35%, #1a3060, var(--navy-d));
            border: 3px solid var(--gold);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: clamp(18px, 3.5vw, 30px);
            margin-bottom: 0;
            box-shadow: 0 0 32px rgba(201, 150, 58, .30), 0 4px 24px rgba(0, 0, 0, .55);
            animation: up .7s ease both;
        }

        .hero-kh {
            font-family: 'Noto Serif Khmer', serif;
            font-size: clamp(22px, 3.2vw, 40px);
            font-weight: 700;
            color: #fff;
            line-height: 1.4;
            animation: up .75s ease both .08s;
        }

        .hero-en {
            font-family: 'Cormorant Garamond', serif;
            font-size: clamp(12px, 1.7vw, 20px);
            letter-spacing: .15em;
            text-transform: uppercase;
            color: var(--gold-l);
            animation: up .80s ease both .16s;
        }

        .hero-motto {
            display: flex;
            align-items: center;
            gap: 14px;
            margin-top: 2px;
            animation: up .85s ease both .24s;
        }

        .hero-motto span {
            font-family: 'Noto Serif Khmer', serif;
            font-size: clamp(13px, 1.8vw, 18px);
            font-weight: 600;
            color: var(--gold-pale);
        }

        .m-dot {
            width: 5px;
            height: 5px;
            border-radius: 50%;
            background: var(--gold);
            opacity: .7;
        }

        /* Dots */
        .c-dots {
            position: absolute;
            bottom: 14px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 10;
            display: flex;
            gap: 7px;
        }

        .c-dot {
            width: 24px;
            height: 3px;
            border-radius: 2px;
            background: rgba(255, 255, 255, .22);
            border: none;
            cursor: pointer;
            padding: 0;
            transition: width .35s, background .35s;
        }

        .c-dot.active {
            width: 42px;
            background: var(--gold);
        }

        /* ══════════════════════
           BOTTOM ROW
        ══════════════════════ */
            .bottom {
            flex-shrink: 0;
            display: grid;
            grid-template-columns: 230px 1fr 250px;
            gap: 0;
            background: radial-gradient(circle at 50% 50%, #0d1e46 0%, #060d1f 100%);
            background-image: 
                radial-gradient(rgba(201, 150, 58, 0.08) 1px, transparent 1px),
                radial-gradient(circle at 50% 50%, #0d1e46 0%, #060d1f 100%);
            background-size: 20px 20px, 100% 100%;
            border-top: 1px solid rgba(201, 150, 58, 0.35);
            box-shadow: 0 -10px 30px rgba(201, 150, 58, 0.06);
            padding: 12px 0;
            min-height: 140px;
            position: relative;
        }

        /* STATS CARD */
        .stats {
            background: rgba(13, 27, 62, 0.55);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(201, 150, 58, 0.22);
            border-radius: 14px;
            margin: 6px 12px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 12px 22px;
            gap: 0;
            overflow: hidden;
            box-shadow: 
                0 4px 24px rgba(0, 0, 0, 0.25),
                inset 0 1px 1px rgba(255, 255, 255, 0.05);
            position: relative;
        }

        .stat {
            padding: 12px 0;
        }

        .stat+.stat {
            border-top: 1px solid rgba(255, 255, 255, .08);
        }

        .status-dot {
            display: inline-block;
            width: 6px;
            height: 6px;
            background-color: #00ffcc;
            border-radius: 50%;
            margin-right: 6px;
            box-shadow: 0 0 8px #00ffcc, 0 0 12px #00ffcc;
            animation: pulse-dot 2s infinite;
            vertical-align: middle;
        }

        @keyframes pulse-dot {
            0% { opacity: 0.4; transform: scale(0.9); }
            50% { opacity: 1; transform: scale(1.1); }
            100% { opacity: 0.4; transform: scale(0.9); }
        }

        .stat-lbl {
            font-family: 'Noto Serif Khmer', serif;
            font-size: 10.5px;
            color: rgba(255, 255, 255, 0.55);
            display: block;
            margin-bottom: 3px;
        }

        .stat-num {
            font-family: 'Cormorant Garamond', serif;
            font-size: 50px;
            font-weight: 600;
            color: var(--gold);
            line-height: 1;
            text-shadow: 0 0 12px rgba(201, 150, 58, 0.4);
            display: inline-block;
            animation: stat-float 3.6s ease-in-out infinite;
        }

        /* stagger the two numbers so they bob out of sync */
        .stat:nth-child(2) .stat-num {
            animation-delay: -1.8s;
        }

        @keyframes stat-float {
            0%   { transform: translateY(0px); }
            50%  { transform: translateY(-7px); }
            100% { transform: translateY(0px); }
        }

        .stat-num sup {
            font-size: 22px;
            vertical-align: super;
            color: var(--gold-l);
        }

        .stat-desc {
            font-family: 'Noto Serif Khmer', serif;
            font-size: 10px;
            color: rgba(255, 255, 255, .4);
            display: block;
            margin-top: 2px;
        }

        /* SKILLS */
        .skills {
            padding: 16px 24px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            background: rgba(13, 27, 62, 0.35);
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border-radius: 14px;
            margin: 6px 12px;
            border: 1px solid rgba(255, 255, 255, 0.08);
            box-shadow: 
                inset 0 1px 1px rgba(255, 255, 255, 0.05),
                0 8px 32px rgba(0, 0, 0, 0.2);
        }

        .skills-head {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 16px;
        }

        .skills-title {
            font-family: 'Noto Serif Khmer', serif;
            font-size: 15px;
            font-weight: 700;
            color: #ffffff;
            white-space: nowrap;
            letter-spacing: 0.02em;
            position: relative;
            padding-left: 12px;
            text-shadow: 0 0 10px rgba(255, 255, 255, 0.15);
        }

        .skills-title::before {
            content: '';
            position: absolute;
            left: 0;
            top: 50%;
            transform: translateY(-50%);
            width: 4px;
            height: 16px;
            background: linear-gradient(180deg, var(--gold-l) 0%, var(--gold) 100%);
            border-radius: 2px;
        }

        .skills-rule {
            flex: 1;
            height: 1px;
            background: linear-gradient(90deg, rgba(201, 150, 58, 0.6) 0%, rgba(201, 150, 58, 0.05) 100%);
            border-radius: 1px;
        }

        .skills-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(115px, 1fr));
            gap: 10px;
        }

        .sk {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 8px;
            text-decoration: none;
            padding: 14px 8px;
            border-radius: 10px;
            background: rgba(255, 255, 255, 0.03);
            border: 1px solid rgba(255, 255, 255, 0.07);
            box-shadow: 
                0 4px 12px rgba(0, 0, 0, 0.15),
                inset 0 1px 0px rgba(255, 255, 255, 0.05);
            transition: all 0.35s cubic-bezier(0.25, 1, 0.5, 1);
            cursor: pointer;
            position: relative;
            overflow: hidden;
            z-index: 1;
        }

        /* Ambient glowing background on hover */
        .sk::before {
            content: '';
            position: absolute;
            inset: 0;
            background: linear-gradient(135deg, rgba(201, 150, 58, 0.12) 0%, rgba(13, 27, 62, 0.3) 100%);
            opacity: 0;
            z-index: -1;
            transition: opacity 0.35s ease;
        }

        .sk:hover {
            transform: translateY(-4px);
            border-color: rgba(201, 150, 58, 0.55);
            box-shadow: 
                0 10px 24px rgba(201, 150, 58, 0.18), 
                inset 0 0 12px rgba(201, 150, 58, 0.15);
        }

        .sk:hover::before {
            opacity: 1;
        }

        /* Subtle interactive border indicator at bottom of card */
        .sk::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%) scaleX(0);
            width: 60%;
            height: 2px;
            background: linear-gradient(90deg, var(--gold-l) 0%, var(--gold) 100%);
            border-radius: 2px 2px 0 0;
            transition: transform 0.35s cubic-bezier(0.25, 1, 0.5, 1);
        }

        .sk:hover::after {
            transform: translateX(-50%) scaleX(1);
        }

        .sk-icon {
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: rgba(255, 255, 255, 0.8);
            background: rgba(255, 255, 255, 0.05);
            border-radius: 50%;
            border: 1px solid rgba(255, 255, 255, 0.1);
            transition: all 0.35s cubic-bezier(0.25, 1, 0.5, 1);
        }

        .sk:hover .sk-icon {
            color: var(--gold-l);
            background: rgba(201, 150, 58, 0.15);
            border-color: rgba(201, 150, 58, 0.4);
            transform: scale(1.1) rotate(6deg);
            box-shadow: 0 0 12px rgba(201, 150, 58, 0.25);
        }

        .sk-icon svg {
            width: 20px;
            height: 20px;
            fill: currentColor;
        }

        .sk-name {
            font-family: 'Noto Serif Khmer', 'DM Sans', sans-serif;
            font-size: 10.5px;
            font-weight: 600;
            color: rgba(255, 255, 255, 0.85);
            text-align: center;
            line-height: 1.4;
            transition: all 0.3s ease;
            max-width: 100%;
            word-wrap: break-word;
        }

        .sk:hover .sk-name {
            color: var(--gold-l);
            text-shadow: 0 0 8px rgba(232, 185, 106, 0.35);
        }

        /* QR */
        .qr-col {
            background: rgba(13, 27, 62, 0.55);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border: 1px solid rgba(201, 150, 58, 0.22);
            border-radius: 14px;
            margin: 6px 12px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 12px;
            padding: 14px;
            box-shadow: 
                0 4px 24px rgba(0, 0, 0, 0.25),
                inset 0 1px 1px rgba(255, 255, 255, 0.05);
            position: relative;
            z-index: 10;
        }

        .qr-frame {
            width: 140px;
            height: 140px;
            border: 2px solid var(--gold);
            border-radius: 10px;
            background: #ffffff;
            position: relative;
            overflow: hidden;
            cursor: pointer;
            transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1), box-shadow 0.3s ease;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
        }

        .qr-frame:hover {
            transform: scale(1.06);
            box-shadow: 0 10px 24px rgba(201, 150, 58, 0.25);
        }

        .qr-grid {
            position: absolute;
            inset: 0;
            background-image:
                repeating-linear-gradient(0deg, rgba(13, 27, 62, .10) 0, rgba(13, 27, 62, .10) 1px, transparent 1px, transparent 5px),
                repeating-linear-gradient(90deg, rgba(13, 27, 62, .10) 0, rgba(13, 27, 62, .10) 1px, transparent 1px, transparent 5px);
        }

        .qr-laser {
            position: absolute;
            left: 0;
            right: 0;
            height: 3px;
            background: linear-gradient(90deg, transparent, #E8B96A, #C9963A, #E8B96A, transparent);
            box-shadow: 0 0 8px rgba(232, 185, 106, 0.8), 0 0 14px rgba(201, 150, 58, 0.6);
            z-index: 8;
            animation: qr-scan 3s ease-in-out infinite;
        }

        @keyframes qr-scan {
            0% { top: 2%; }
            50% { top: 98%; }
            100% { top: 2%; }
        }

        .qr-c {
            position: absolute;
            width: 26px;
            height: 26px;
            border: 3.5px solid var(--navy-d);
        }

        .qr-c.tl {
            top: 9px;
            left: 9px;
            border-right: none;
            border-bottom: none;
            border-radius: 2px 0 0 0;
        }

        .qr-c.tr {
            top: 9px;
            right: 9px;
            border-left: none;
            border-bottom: none;
            border-radius: 0 2px 0 0;
        }

        .qr-c.bl {
            bottom: 9px;
            left: 9px;
            border-right: none;
            border-top: none;
            border-radius: 0 0 0 2px;
        }



        .qr-lbl {
            font-family: 'Noto Serif Khmer', serif;
            font-weight: 600;
            color: #ffffff;
            text-align: center;
            line-height: 1.65;
            text-shadow: 0 0 8px rgba(255, 255, 255, 0.15);
        }

        /* ══════════════════════
           QR MODAL (Premium Zoom)
        ══════════════════════ */
        .qr-modal {
            position: fixed;
            inset: 0;
            z-index: 1000;
            background: rgba(9, 16, 34, 0.88);
            backdrop-filter: blur(12px);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            pointer-events: none;
            transition: opacity 0.4s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .qr-modal.active {
            opacity: 1;
            pointer-events: all;
        }

        .qr-modal-content {
            background: var(--navy);
            border: 2px solid var(--gold);
            border-radius: 20px;
            width: 90%;
            max-width: 440px;
            padding: 40px 24px 30px;
            position: relative;
            transform: scale(0.9) translateY(20px);
            transition: transform 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
            box-shadow: 0 20px 50px rgba(0, 0, 0, 0.6), 0 0 30px rgba(201, 150, 58, 0.2);
            text-align: center;
        }

        .qr-modal.active .qr-modal-content {
            transform: scale(1) translateY(0);
        }

        .qr-modal-close {
            position: absolute;
            top: 14px;
            right: 18px;
            background: transparent;
            border: none;
            color: var(--muted);
            font-size: 32px;
            cursor: pointer;
            transition: color 0.2s, transform 0.2s;
            line-height: 1;
        }

        .qr-modal-close:hover {
            color: var(--gold-l);
            transform: scale(1.1);
        }

        .qr-large-frame {
            width: 240px;
            height: 240px;
            border: 3.5px solid var(--gold);
            border-radius: 16px;
            background: var(--cream);
            position: relative;
            overflow: hidden;
            margin: 0 auto 24px;
            box-shadow: 0 12px 36px rgba(0, 0, 0, 0.4);
        }

        .qr-large-frame img {
            width: 100%;
            height: 100%;
            object-fit: contain;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 5;
            mix-blend-mode: multiply;
        }



        /* Large corner markers for large QR code modal */
        .qr-large-frame .qr-c {
            width: 42px;
            height: 42px;
            border-width: 5px;
        }

        .qr-large-frame .qr-c.tl {
            top: 15px;
            left: 15px;
        }

        .qr-large-frame .qr-c.tr {
            top: 15px;
            right: 15px;
        }

        .qr-large-frame .qr-c.bl {
            bottom: 15px;
            left: 15px;
        }

        .qr-modal-title {
            font-family: 'Noto Serif Khmer', serif;
            font-size: 22px;
            font-weight: 700;
            color: var(--gold-l);
            margin-bottom: 12px;
        }

        .qr-modal-desc {
            font-size: 13px;
            line-height: 1.6;
            color: rgba(255, 255, 255, 0.7);
            font-weight: 400;
        }

        /* ══════════════════════
           CONTACT BAR
        ══════════════════════ */
        .contact {
            flex-shrink: 0;
            height: 60px;
            background: linear-gradient(180deg, var(--navy) 0%, var(--navy-d) 100%);
            border-top: 1px solid var(--border-g);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
            box-shadow: 0 -8px 24px rgba(0, 0, 0, 0.15);
            z-index: 20;
        }

        .ct {
            display: flex;
            align-items: center;
            gap: 12px;
            padding: 8px 24px;
            border-radius: 30px;
            text-decoration: none;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
            cursor: pointer;
            border: 1px solid transparent;
        }

        .ct:hover {
            background: rgba(201, 150, 58, 0.08);
            border-color: var(--border-g);
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(201, 150, 58, 0.1);
        }

        .ct-icon {
            width: 32px;
            height: 32px;
            border-radius: 50%;
            background: var(--gold-dim);
            border: 1px solid var(--border-g);
            color: var(--gold-l);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-shrink: 0;
            transition: all 0.3s cubic-bezier(0.4, 0, 0.2, 1);
        }

        .ct-icon svg {
            width: 15px;
            height: 15px;
        }

        .ct:hover .ct-icon {
            background: var(--gold);
            color: var(--navy-d);
            transform: scale(1.1) rotate(12deg);
            box-shadow: 0 0 10px rgba(201, 150, 58, 0.3);
        }

        .ct-txt {
            font-size: 12px;
            font-weight: 500;
            color: rgba(255, 255, 255, 0.85);
            letter-spacing: .03em;
            transition: color 0.3s ease;
        }

        .ct:hover .ct-txt {
            color: #fff;
        }

        .ct-short-txt {
            display: none;
        }

        /* ══════════════════════
           ANIMATION
        ══════════════════════ */
        @keyframes up {
            from {
                opacity: 0;
                transform: translateY(18px)
            }

            to {
                opacity: 1;
                transform: translateY(0)
            }
        }
        @media (max-width: 1000px) {
            .site-header { padding: 0 18px; height: 64px; }
            .logo-words { display: none; }
            .header-right { gap: 8px; }
            .intl-pill { display: none; }
            .hero { height: 380px; }
            .hero-body { padding: clamp(10px, 4vw, 18px) clamp(12px, 6vw, 48px); }
            .c-btn { display: none; }
            .bottom { grid-template-columns: 1fr; padding: 16px 12px; gap: 16px; }
            .stats, .skills, .qr-col { padding: 16px 20px; margin: 0; border-radius: 12px; }
            .skills-grid { grid-template-columns: repeat(auto-fit, minmax(95px,1fr)); }
        }

        @media (max-width: 767px) {
            body {
                padding-bottom: 74px; /* Space for sticky bar */
            }

            .hero {
                height: 280px;
            }

            .contact {
                position: fixed;
                bottom: 0;
                left: 0;
                right: 0;
                height: 68px;
                background: rgba(9, 16, 34, 0.94);
                backdrop-filter: blur(16px);
                border-top: 1px solid var(--border-g);
                display: flex;
                justify-content: space-around;
                align-items: center;
                gap: 0;
                padding: 4px 6px 8px;
                box-shadow: 0 -10px 30px rgba(0, 0, 0, 0.5);
                z-index: 999;
                border-radius: 0;
            }

            .ct {
                display: flex;
                flex-direction: column;
                justify-content: center;
                align-items: center;
                gap: 4px;
                padding: 6px 2px;
                border-radius: 0;
                border: none;
                background: transparent !important;
                box-shadow: none !important;
                transform: none !important;
                flex: 1;
            }

            .ct-icon {
                width: 32px;
                height: 32px;
                background: transparent;
                border: none;
                color: var(--gold-l);
                margin: 0;
                box-shadow: none !important;
                transform: none !important;
            }

            .ct-icon svg {
                width: 20px;
                height: 20px;
            }

            .ct-txt {
                display: none;
            }

            .ct-short-txt {
                display: block;
                font-size: 10px;
                font-weight: 600;
                color: rgba(255, 255, 255, 0.65);
                text-transform: uppercase;
                letter-spacing: 0.05em;
                line-height: 1.2;
                transition: color 0.2s ease;
            }

            .ct:active .ct-short-txt,
            .ct:focus .ct-short-txt,
            .ct:hover .ct-short-txt {
                color: var(--gold-l);
            }
        }

        @media (max-width: 480px) {
            .site-header { padding: 0 12px; height: 56px; }
            .logo-seal { width: 48px; height: 48px; font-size: 12px; }
            .hero-seal { width: 48px; height: 48px; font-size: 18px; }
            .hero-kh { font-size: clamp(14px, 6vw, 20px); }
            .hero-en { font-size: clamp(11px, 4vw, 16px); }
            .stat-num { font-size: 34px; }
            .stat-num sup { font-size: 14px; }
            .c-dots { bottom: 8px; gap: 6px; }
        }

        /* ══════════════════════
           ANNOUNCEMENTS TICKER
        ══════════════════════ */
        .ann-bar {
            flex-shrink: 0;
            display: flex;
            align-items: stretch;
            background: linear-gradient(90deg, #0b1630 0%, #0d1e46 100%);
            border-top: 1px solid rgba(201, 150, 58, 0.4);
            border-bottom: 1px solid rgba(201, 150, 58, 0.25);
            height: 40px;
            overflow: hidden;
            position: relative;
            z-index: 25;
        }

        .ann-label {
            flex-shrink: 0;
            display: flex;
            align-items: center;
            gap: 8px;
            padding: 0 28px 0 18px;
            background: var(--gold);
            color: var(--navy-d);
            font-family: 'Noto Serif Khmer', 'DM Sans', sans-serif;
            font-size: 10.5px;
            font-weight: 700;
            letter-spacing: .10em;
            text-transform: uppercase;
            white-space: nowrap;
            position: relative;
            z-index: 2;
            clip-path: polygon(0 0, calc(100% - 14px) 0, 100% 50%, calc(100% - 14px) 100%, 0 100%);
        }

        .ann-label::after {
            display: none;
        }

        .ann-label svg {
            width: 14px;
            height: 14px;
            flex-shrink: 0;
        }

        .ann-track-wrap {
            flex: 1;
            overflow: hidden;
            display: flex;
            align-items: center;
            position: relative;
            cursor: pointer;
        }

        .ann-track {
            display: flex;
            align-items: center;
            white-space: nowrap;
            animation: ann-scroll 28s linear infinite;
            will-change: transform;
        }

        .ann-track:hover {
            animation-play-state: paused;
        }

        @keyframes ann-scroll {
            0%   { transform: translateX(0); }
            100% { transform: translateX(-50%); }
        }

        .ann-item {
            display: inline-flex;
            align-items: center;
            gap: 10px;
            padding: 0 28px;
            font-size: 12.5px;
            color: rgba(255, 255, 255, 0.88);
            font-weight: 400;
            letter-spacing: .01em;
            cursor: pointer;
            transition: color .2s;
        }

        .ann-item:hover {
            color: var(--gold-l);
        }

        .ann-sep {
            display: inline-block;
            width: 5px;
            height: 5px;
            border-radius: 50%;
            background: var(--gold);
            opacity: .55;
            flex-shrink: 0;
        }

        /* Announcement Modal */
        .ann-modal {
            position: fixed;
            inset: 0;
            z-index: 2000;
            background: rgba(9, 16, 34, 0.90);
            backdrop-filter: blur(14px);
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            pointer-events: none;
            transition: opacity 0.35s ease;
        }

        .ann-modal.active {
            opacity: 1;
            pointer-events: all;
        }

        .ann-modal-box {
            background: linear-gradient(160deg, #0f2050 0%, #0a1530 100%);
            border: 1.5px solid rgba(201, 150, 58, 0.5);
            border-radius: 18px;
            width: 90%;
            max-width: 560px;
            max-height: 80vh;
            overflow-y: auto;
            padding: 36px 32px 28px;
            position: relative;
            transform: scale(0.92) translateY(16px);
            transition: transform 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
            box-shadow: 0 24px 60px rgba(0,0,0,.7), 0 0 40px rgba(201,150,58,.12);
        }

        .ann-modal.active .ann-modal-box {
            transform: scale(1) translateY(0);
        }

        .ann-modal-close {
            position: absolute;
            top: 14px;
            right: 18px;
            background: transparent;
            border: none;
            color: var(--muted);
            font-size: 30px;
            cursor: pointer;
            transition: color .2s, transform .2s;
            line-height: 1;
        }

        .ann-modal-close:hover { color: var(--gold-l); transform: scale(1.1); }

        .ann-modal-badge {
            display: inline-flex;
            align-items: center;
            gap: 6px;
            padding: 4px 12px;
            border-radius: 20px;
            background: var(--gold-dim);
            border: 1px solid var(--border-g);
            color: var(--gold-l);
            font-family: 'Noto Serif Khmer', 'DM Sans', sans-serif;
            font-size: 10px;
            font-weight: 700;
            letter-spacing: .1em;
            text-transform: uppercase;
            margin-bottom: 14px;
        }

        .ann-modal-title {
            font-family: 'Noto Serif Khmer', 'Cormorant Garamond', serif;
            font-size: 20px;
            font-weight: 700;
            color: #fff;
            margin-bottom: 16px;
            line-height: 1.4;
        }

        .ann-modal-date {
            font-size: 11px;
            color: var(--muted);
            margin-bottom: 18px;
            display: block;
        }

        .ann-modal-body {
            font-size: 13.5px;
            line-height: 1.75;
            color: rgba(255,255,255,.78);
            font-weight: 300;
        }

        .ann-modal-hero {
            margin-bottom: 16px;
        }

        .ann-modal-hero img {
            width: 100%;
            max-height: 260px;
            object-fit: cover;
            border-radius: 12px;
            display: block;
        }

        .ann-modal-body p { margin-bottom: 10px; }
        .ann-modal-body p:last-child { margin-bottom: 0; }
        .ann-modal-body ul { padding-left: 20px; margin-bottom: 10px; }
        .ann-modal-body strong { color: var(--gold-l); }

        .ann-nav {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-top: 24px;
            padding-top: 16px;
            border-top: 1px solid var(--border);
        }

        .ann-nav-btn {
            display: flex;
            align-items: center;
            gap: 6px;
            padding: 7px 16px;
            border-radius: 8px;
            border: 1px solid var(--border-g);
            background: var(--gold-dim);
            color: var(--gold-l);
            font-size: 11px;
            font-weight: 600;
            cursor: pointer;
            transition: all .2s;
        }

        .ann-nav-btn:hover { background: rgba(201,150,58,.22); }
        .ann-nav-btn:disabled { opacity: .3; cursor: default; }

        .ann-counter {
            font-size: 11px;
            color: var(--muted);
        }

        @media (min-width: 1001px) {
            html,
            body {
                height: 100vh;
                overflow: hidden;
            }

            .shell {
                height: 100vh;
                overflow: hidden;
            }

            .hero {
                flex: 1 1 auto;
                height: auto;
                min-height: 200px;
            }
        }

        /* ══════════════════════
           PAGE LOADER
        ══════════════════════ */
        #page-loader {
            position: fixed;
            inset: 0;
            z-index: 9999;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #060d1f;
            transition: opacity 0.7s cubic-bezier(0.4, 0, 0.2, 1),
                        visibility 0.7s;
        }

        #page-loader.hidden {
            opacity: 0;
            visibility: hidden;
            pointer-events: none;
        }

        /* Atom wrapper */
        .atom {
            position: relative;
            width: 120px;
            height: 120px;
        }

        /* Nucleus cluster */
        .nucleus {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 34px;
            height: 34px;
        }

        .nucleus-ball {
            position: absolute;
            border-radius: 50%;
            animation: nucleus-pulse 2.4s ease-in-out infinite;
        }

        .nucleus-ball:nth-child(1) {
            width: 18px; height: 18px;
            background: radial-gradient(circle at 38% 35%, #8ab4f8, #3a6fd8);
            top: 8px; left: 8px;
            animation-delay: 0s;
        }
        .nucleus-ball:nth-child(2) {
            width: 14px; height: 14px;
            background: radial-gradient(circle at 38% 35%, #c5d8ff, #6090e0);
            top: 2px; left: 16px;
            animation-delay: -0.6s;
        }
        .nucleus-ball:nth-child(3) {
            width: 13px; height: 13px;
            background: radial-gradient(circle at 38% 35%, #7ba7f7, #2255c0);
            top: 16px; left: 2px;
            animation-delay: -1.2s;
        }
        .nucleus-ball:nth-child(4) {
            width: 12px; height: 12px;
            background: radial-gradient(circle at 38% 35%, #a8c6ff, #5580d8);
            top: 17px; left: 18px;
            animation-delay: -1.8s;
        }

        @keyframes nucleus-pulse {
            0%, 100% { transform: scale(1); opacity: 0.85; }
            50%       { transform: scale(1.12); opacity: 1; }
        }

        /* Orbital rings */
        .orbit {
            position: absolute;
            inset: 0;
            border-radius: 50%;
        }

        .orbit-ring {
            position: absolute;
            inset: 0;
            border-radius: 50%;
            border: 2.5px solid transparent;
            border-top-color:    #3355dd;
            border-bottom-color: #3355dd;
        }

        .orbit-1 .orbit-ring {
            animation: orbit-spin-1 2.2s linear infinite;
        }
        .orbit-2 .orbit-ring {
            transform: rotate(60deg);
            animation: orbit-spin-2 3s linear infinite;
        }
        .orbit-3 .orbit-ring {
            transform: rotate(-60deg);
            animation: orbit-spin-3 3.8s linear infinite;
        }

        @keyframes orbit-spin-1 {
            from { transform: rotate(0deg); }
            to   { transform: rotate(360deg); }
        }
        @keyframes orbit-spin-2 {
            from { transform: rotate(60deg); }
            to   { transform: rotate(420deg); }
        }
        @keyframes orbit-spin-3 {
            from { transform: rotate(-60deg); }
            to   { transform: rotate(300deg); }
        }

        /* Electron dots on orbits */
        .electron {
            position: absolute;
            width: 9px;
            height: 9px;
            border-radius: 50%;
            background: #e8eeff;
            box-shadow: 0 0 8px 3px rgba(160, 190, 255, 0.9);
            top: -4.5px;
            left: 50%;
            transform: translateX(-50%);
        }

        /* Glow rings behind atom */
        .atom-glow {
            position: absolute;
            inset: -22px;
            border-radius: 50%;
            background: radial-gradient(circle, rgba(40, 80, 200, 0.18) 0%, transparent 70%);
            animation: glow-pulse 2.6s ease-in-out infinite;
        }

        @keyframes glow-pulse {
            0%, 100% { transform: scale(1);   opacity: 0.6; }
            50%       { transform: scale(1.18); opacity: 1; }
        }
    </style>
</head>

<body>

    <!-- PAGE LOADER -->
    <div id="page-loader" role="status" aria-label="Loading">
        <div class="atom">
            <div class="atom-glow"></div>

            <!-- Orbit 1 -->
            <div class="orbit orbit-1">
                <div class="orbit-ring"></div>
                <div class="electron"></div>
            </div>

            <!-- Orbit 2 -->
            <div class="orbit orbit-2">
                <div class="orbit-ring"></div>
                <div class="electron"></div>
            </div>

            <!-- Orbit 3 -->
            <div class="orbit orbit-3">
                <div class="orbit-ring"></div>
                <div class="electron"></div>
            </div>

            <!-- Nucleus -->
            <div class="nucleus">
                <div class="nucleus-ball"></div>
                <div class="nucleus-ball"></div>
                <div class="nucleus-ball"></div>
                <div class="nucleus-ball"></div>
            </div>
        </div>
    </div>

    <script>
        (function () {
            var loader = document.getElementById('page-loader');
            function hideLoader() {
                if (loader) { loader.classList.add('hidden'); }
            }
            if (document.readyState === 'complete') {
                setTimeout(hideLoader, 300);
            } else {
                window.addEventListener('load', function () {
                    setTimeout(hideLoader, 300);
                });
            }
        })();
    </script>

    <div class="shell">

        <!-- HEADER -->
        <header class="site-header">
            <a href="#" class="header-logo">
                <!-- <div class="logo-seal">
            <img src="images/logo.png" alt="PSBU Logo">
        </div> -->
                <div class="logo-words">
                    <span class="logo-kh">ពុទ្ធិកសាកលវិទ្យាល័យព្រះសីហមុនីរាជា</span>
                    <span class="logo-en">Preah Sihamoniraja Buddhist University</span>
                </div>
            </a>
            <div class="header-right">
                <a href="{{ route('lang.switch', 'kh') }}" class="lang-pill {{ app()->getLocale() === 'kh' ? 'active' : '' }}"><span class="lang-flag">🇰🇭</span> Khmer</a>
                <a href="{{ route('lang.switch', 'en') }}" class="lang-pill {{ app()->getLocale() === 'en' ? 'active' : '' }}"><span class="lang-flag">🇬🇧</span> English</a>
                <a href="https://inter.psbu.edu.kh/" class="intl-pill">{{ app()->getLocale() === 'en' ? 'International Project' : 'គម្រោងអន្តរជាតិ' }}</a>
            </div>
        </header>

        <!-- HERO -->
        <div class="hero">
            <div class="c-track" id="carousel">
                @foreach($sliders as $index => $slider)
                <div class="c-slide {{ $index === 0 ? 'active' : '' }}">
                    <img src="{{ asset($slider->image) }}" alt="Slide {{ $index + 1 }}">
                </div>
                @endforeach
            </div>
            <div class="hero-ov"></div>

            <button class="c-btn prev" id="prevBtn">&#8249;</button>
            <button class="c-btn next" id="nextBtn">&#8250;</button>

            <div class="hero-body">
                <div class="hero-seal">
                    <img src="images/logo.png" alt="PSBU Logo">
                </div>
                <h1 class="hero-kh">ពុទ្ធិកសាកលវិទ្យាល័យព្រះសីហមុនីរាជា</h1>
                <p class="hero-en">Preah Sihamoniraja Buddhist University</p>
                <div class="hero-motto">
                    <span>មេត្តា</span>
                    <div class="m-dot"></div>
                    <span>សតិ</span>
                    <div class="m-dot"></div>
                    <span>បញ្ញា</span>
                </div>
            </div>

            <div class="c-dots" id="dots">
                @foreach($sliders as $index => $slider)
                <button class="c-dot {{ $index === 0 ? 'active' : '' }}" data-index="{{ $index }}"></button>
                @endforeach
            </div>
        </div>

        @if($announcements->isNotEmpty())
        <!-- ANNOUNCEMENTS TICKER -->
        <div class="ann-bar" id="annBar">
            <div class="ann-label">
                <svg viewBox="0 0 24 24" fill="currentColor"><path d="M18 11v2h4v-2h-4zm-2 6.61c.96.71 2.21 1.65 3.2 2.39.4-.53.8-1.07 1.2-1.6-.99-.74-2.24-1.68-3.2-2.4-.4.54-.8 1.08-1.2 1.61zM20.4 5.6c-.4-.53-.8-1.07-1.2-1.6-.99.74-2.24 1.68-3.2 2.39.4.53.8 1.07 1.2 1.6.96-.71 2.21-1.65 3.2-2.39zM4 9c-1.1 0-2 .9-2 2v2c0 1.1.9 2 2 2h1v4h2v-4h1l5 3V6L8 9H4zm11.5 3c0-1.33-.58-2.53-1.5-3.35v6.69c.92-.81 1.5-2.01 1.5-3.34z"/></svg>
                {{ app()->getLocale() === 'en' ? 'Announcements' : 'សេចក្តីប្រកាស' }}
            </div>
            <div class="ann-track-wrap" id="annTrackWrap">
                <div class="ann-track" id="annTrack">
                    @foreach($announcements as $ann)
                    <span class="ann-item" data-ann-id="{{ $ann->id }}">{{ $ann->title }}</span>
                    <span class="ann-sep"></span>
                    @endforeach
                    {{-- Duplicate for seamless loop --}}
                    @foreach($announcements as $ann)
                    <span class="ann-item" data-ann-id="{{ $ann->id }}">{{ $ann->title }}</span>
                    <span class="ann-sep"></span>
                    @endforeach
                </div>
            </div>
        </div>
        @endif

        <!-- BOTTOM ROW -->
        <div class="bottom">

            <!-- Stats -->
            <div class="stats">
                @foreach($stats as $stat)
                <div class="stat">
                    <span class="stat-lbl"><span class="status-dot"></span>{{ $stat->label }}</span>
                    <div class="stat-num" {!! $stat->number == 50 ? 'style="font-size:42px"' : '' !!}>{{ $stat->number }}@if($stat->superscript)<sup {!! $stat->number == 50 ? 'style="font-size:19px"' : '' !!}>{{ $stat->superscript }}</sup>@endif</div>
                    <span class="stat-desc">{{ $stat->description }}</span>
                </div>
                @endforeach
            </div>

            <!-- Skills -->
            <div class="skills">
                <div class="skills-head">
                    <span class="skills-title">{{ app()->getLocale() === 'en' ? 'Menu' : 'មីនុយ' }}</span>
                    <div class="skills-rule"></div>
                </div>
                <div class="skills-grid">
                    @foreach($skills as $skill)
                    <a href="{{ $skill->link }}" class="sk" target="_blank" rel="noopener noreferrer">
                        <div class="sk-icon">
                            <svg viewBox="0 0 24 24">
                                {!! $skill->icon_svg !!}
                            </svg>
                        </div>
                        <span class="sk-name">{{ $skill->name }}</span>
                    </a>
                    @endforeach
                </div>
            </div>

            <!-- QR -->
            <div class="qr-col">
                <div class="qr-frame">
                    <img src="images/qr_code.png" alt="QR Code" style="width: 100%; height: 100%; object-fit: cover; position: absolute; z-index: 5; mix-blend-mode: multiply;">
                    <div class="qr-grid"></div>
                    <div class="qr-laser"></div>
                    <div class="qr-c tl"></div>
                    <div class="qr-c tr"></div>
                    <div class="qr-c bl"></div>
                </div>
                <p class="qr-lbl">{!! app()->getLocale() === 'en' ? 'Scan QR<br>to Register' : 'ស្កេនទីនេះ<br>ដើម្បីចុះឈ្មោះ' !!}</p>
            </div>

        </div>

        <!-- CONTACT BAR -->
        <div class="contact">
            @php
                $icons = [
                    'phone' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>',
                    'mail' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><polyline points="22,6 12,13 2,6"/></svg>',
                    'globe' => '<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><line x1="2" y1="12" x2="22" y2="12"/><path d="M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/></svg>'
                ];
            @endphp
            @foreach($contacts as $contact)
            <a href="{{ $contact->link }}" class="ct">
                <div class="ct-icon">
                    {!! $icons[$contact->icon] ?? $icons['globe'] !!}
                </div>
                <span class="ct-txt">{{ $contact->label }}</span>
                <span class="ct-short-txt">
                    @if($contact->icon === 'phone')
                        {{ app()->getLocale() === 'en' ? 'Call' : 'ទូរស័ព្ទ' }}
                    @elseif($contact->icon === 'mail')
                        {{ app()->getLocale() === 'en' ? 'Email' : 'អ៊ីមែល' }}
                    @else
                        {{ app()->getLocale() === 'en' ? 'Website' : 'វេបសាយ' }}
                    @endif
                </span>
            </a>
            @endforeach
        </div>

    </div>

    <script>
        const slides = document.querySelectorAll('.c-slide');
        const dotBtns = document.querySelectorAll('.c-dot');
        let cur = 0, timer;

        function goTo(n) {
            slides[cur]?.classList.remove('active');
            dotBtns[cur]?.classList.remove('active');
            cur = ((n % slides.length) + slides.length) % slides.length;
            slides[cur]?.classList.add('active');
            dotBtns[cur]?.classList.add('active');
        }
        function play() { clearInterval(timer); timer = setInterval(() => goTo(cur + 1), 5000); }

        document.getElementById('prevBtn').onclick = () => { goTo(cur - 1); play(); };
        document.getElementById('nextBtn').onclick = () => { goTo(cur + 1); play(); };
        dotBtns.forEach(b => b.addEventListener('click', () => { goTo(+b.dataset.index); play(); }));
        play();

        // Premium Touch Gesture Swipe Support
        (function() {
            const heroEl = document.querySelector('.hero');
            if (heroEl) {
                let startX = 0;
                heroEl.addEventListener('touchstart', e => {
                    startX = e.touches[0].clientX;
                }, { passive: true });

                heroEl.addEventListener('touchend', e => {
                    const endX = e.changedTouches[0].clientX;
                    const diff = startX - endX;
                    if (Math.abs(diff) > 40) {
                        if (diff > 0) {
                            goTo(cur + 1);
                        } else {
                            goTo(cur - 1);
                        }
                        play();
                    }
                }, { passive: true });
            }
        })();
    </script>

    <script>
        (function () {
            const logoBtn = document.getElementById('logoUploadBtn');
            const logoInput = document.getElementById('logoInput');
            const headerLogo = document.querySelector('.logo-seal');
            const heroLogo = document.querySelector('.hero-seal');
            let logoURL = null;

            if (logoBtn && logoInput) {
                logoBtn.addEventListener('click', () => logoInput.click());
                logoInput.addEventListener('change', (e) => {
                    if (e.target.files && e.target.files[0]) {
                        const file = e.target.files[0];
                        if (logoURL) { URL.revokeObjectURL(logoURL); logoURL = null; }
                        logoURL = URL.createObjectURL(file);
                        [headerLogo, heroLogo].forEach(el => {
                            if (!el) return;
                            el.innerHTML = '';
                            const img = document.createElement('img');
                            img.src = logoURL;
                            img.alt = 'Logo';
                            el.appendChild(img);
                        });
                        e.target.value = '';
                    }
                });
            }
        })();
    </script>

    <!-- QR MODAL STRUCTURE -->
    <div id="qrModal" class="qr-modal">
        <div class="qr-modal-content">
            <button class="qr-modal-close" id="qrCloseBtn">&times;</button>
            <div class="qr-large-frame">
                <img src="images/qr_code.png" alt="QR Code Large">
                <div class="qr-grid"></div>
                <div class="qr-c tl"></div>
                <div class="qr-c tr"></div>
                <div class="qr-c bl"></div>
            </div>
            <h3 class="qr-modal-title">{!! app()->getLocale() === 'en' ? 'Register at PSBU' : 'ចុះឈ្មោះសិក្សានៅ PSBU' !!}</h3>
            <p class="qr-modal-desc">{!! app()->getLocale() === 'en' ? 'Scan this QR code with your smartphone camera or QR reader to open the student registration form.' : 'សូមស្កេនកូដ QR នេះជាមួយកាមេរ៉ាទូរស័ព្ទ ឬកម្មវិធីស្កេនរបស់អ្នក ដើម្បីចូលទៅកាន់ទម្រង់ចុះឈ្មោះចូលរៀន។' !!}</p>
        </div>
    </div>

    <!-- QR Modal Logic -->
    <script>
        (function() {
            const qrFrame = document.querySelector('.qr-frame');
            const qrModal = document.getElementById('qrModal');
            const qrCloseBtn = document.getElementById('qrCloseBtn');

            if (qrFrame && qrModal) {
                qrFrame.addEventListener('click', () => {
                    qrModal.classList.add('active');
                });

                const closeModal = () => {
                    qrModal.classList.remove('active');
                };

                if (qrCloseBtn) {
                    qrCloseBtn.addEventListener('click', closeModal);
                }

                qrModal.addEventListener('click', (e) => {
                    if (e.target === qrModal) {
                        closeModal();
                    }
                });

                // Close on ESC keypress
                document.addEventListener('keydown', (e) => {
                    if (e.key === 'Escape' && qrModal.classList.contains('active')) {
                        closeModal();
                    }
                });
            }
        })();
    </script>
    <!-- ANNOUNCEMENT MODAL -->
    @if($announcements->isNotEmpty())
    <div id="annModal" class="ann-modal">
        <div class="ann-modal-box">
            <button class="ann-modal-close" id="annModalClose">&times;</button>
            <div class="ann-modal-badge">
                <svg width="10" height="10" viewBox="0 0 24 24" fill="currentColor"><path d="M18 11v2h4v-2h-4zm-2 6.61c.96.71 2.21 1.65 3.2 2.39.4-.53.8-1.07 1.2-1.6-.99-.74-2.24-1.68-3.2-2.4-.4.54-.8 1.08-1.2 1.61zM4 9c-1.1 0-2 .9-2 2v2c0 1.1.9 2 2 2h1v4h2v-4h1l5 3V6L8 9H4zm11.5 3c0-1.33-.58-2.53-1.5-3.35v6.69c.92-.81 1.5-2.01 1.5-3.34z"/></svg>
                {{ app()->getLocale() === 'en' ? 'Announcement' : 'សេចក្តីប្រកាស' }}
            </div>
            <div class="ann-modal-hero" id="annModalImageWrap" style="display:none;">
                <img id="annModalImage" src="" alt="Announcement image">
            </div>
            <h2 class="ann-modal-title" id="annModalTitle"></h2>
            <span class="ann-modal-date" id="annModalDate"></span>
            <div class="ann-modal-body" id="annModalBody"></div>
            <div class="ann-nav">
                <button class="ann-nav-btn" id="annPrevBtn">&#8249; {{ app()->getLocale() === 'en' ? 'Prev' : 'មុន' }}</button>
                <span class="ann-counter" id="annCounter"></span>
                <button class="ann-nav-btn" id="annNextBtn">{{ app()->getLocale() === 'en' ? 'Next' : 'បន្ទាប់' }} &#8250;</button>
            </div>
        </div>
    </div>

    <script>
        (function () {
            @php
                $annData = $announcements->map(function($a) {
                    return [
                        'id'           => $a->id,
                        'title'        => $a->title,
                        'content'      => $a->content,
                        'published_at' => $a->published_at ? $a->published_at->format('d M Y') : null,
                        'image'        => $a->image ? asset($a->image) : null,
                    ];
                })->values()->all();
            @endphp
            const announcements = @json($annData);

            const modal      = document.getElementById('annModal');
            const closeBtn   = document.getElementById('annModalClose');
            const titleEl    = document.getElementById('annModalTitle');
            const dateEl     = document.getElementById('annModalDate');
            const bodyEl     = document.getElementById('annModalBody');
            const prevBtn    = document.getElementById('annPrevBtn');
            const nextBtn    = document.getElementById('annNextBtn');
            const counterEl  = document.getElementById('annCounter');
            let currentIdx   = 0;

            function showAnnouncement(idx) {
                currentIdx = ((idx % announcements.length) + announcements.length) % announcements.length;
                const ann = announcements[currentIdx];
                titleEl.textContent    = ann.title;
                dateEl.textContent     = ann.published_at || '';
                bodyEl.innerHTML       = ann.content;
                const imgWrap = document.getElementById('annModalImageWrap');
                const imgEl   = document.getElementById('annModalImage');
                if (ann.image) {
                    imgEl.src = ann.image;
                    imgEl.alt = ann.title || 'Announcement image';
                    imgWrap.style.display = '';
                } else {
                    imgEl.src = '';
                    imgWrap.style.display = 'none';
                }
                counterEl.textContent  = (currentIdx + 1) + ' / ' + announcements.length;
                prevBtn.disabled       = announcements.length <= 1;
                nextBtn.disabled       = announcements.length <= 1;
            }

            function openModal(idx) {
                showAnnouncement(idx);
                modal.classList.add('active');
            }

            function closeModal() {
                modal.classList.remove('active');
            }

            // Click on ticker items
            document.querySelectorAll('.ann-item').forEach(function (el) {
                el.addEventListener('click', function () {
                    const id  = parseInt(el.dataset.annId);
                    const idx = announcements.findIndex(function (a) { return a.id === id; });
                    openModal(idx >= 0 ? idx : 0);
                });
            });

            // Click on ticker bar area (open first)
            const trackWrap = document.getElementById('annTrackWrap');
            if (trackWrap) {
                trackWrap.addEventListener('click', function (e) {
                    if (!e.target.classList.contains('ann-item')) {
                        openModal(0);
                    }
                });
            }

            prevBtn.addEventListener('click', function () { showAnnouncement(currentIdx - 1); });
            nextBtn.addEventListener('click', function () { showAnnouncement(currentIdx + 1); });
            closeBtn.addEventListener('click', closeModal);

            modal.addEventListener('click', function (e) {
                if (e.target === modal) { closeModal(); }
            });

            document.addEventListener('keydown', function (e) {
                if (!modal.classList.contains('active')) { return; }
                if (e.key === 'Escape')      { closeModal(); }
                if (e.key === 'ArrowLeft')   { showAnnouncement(currentIdx - 1); }
                if (e.key === 'ArrowRight')  { showAnnouncement(currentIdx + 1); }
            });
        })();
    </script>
    @endif

    <!-- Pointer spotlight -->
    <div id="pointer-light" aria-hidden="true"></div>
    <script>
        (function () {
            var el = document.getElementById('pointer-light');
            var raf;
            var tx = -9999, ty = -9999;
            var cx = -9999, cy = -9999;

            document.addEventListener('mousemove', function (e) {
                tx = e.clientX;
                ty = e.clientY;
                if (!raf) { raf = requestAnimationFrame(tick); }
            });

            document.addEventListener('mouseleave', function () {
                tx = -9999; ty = -9999;
            });

            function tick() {
                raf = null;
                // smooth lerp toward target
                cx += (tx - cx) * 0.12;
                cy += (ty - cy) * 0.12;
                el.style.setProperty('--mx', cx.toFixed(1) + 'px');
                el.style.setProperty('--my', cy.toFixed(1) + 'px');
                if (Math.abs(tx - cx) > 0.5 || Math.abs(ty - cy) > 0.5) {
                    raf = requestAnimationFrame(tick);
                }
            }
        })();
    </script>

</body>

</html>
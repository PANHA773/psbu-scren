<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PSBU University</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
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
            background: var(--navy-d);
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
            font-size: 13px;
            font-weight: 700;
            color: var(--gold-l);
            line-height: 1;
        }

        .logo-en {
            font-family: 'Cormorant Garamond', serif;
            font-size: 10.5px;
            letter-spacing: .13em;
            text-transform: uppercase;
            color: var(--muted);
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
            gap: 10px;
            padding: clamp(12px, 4vw, 20px) clamp(16px, 8vw, 80px);
        }

        .hero-seal {
            width: clamp(56px, 8vw, 88px);
            height: clamp(56px, 8vw, 88px);
            border-radius: 50%;
            background: radial-gradient(circle at 40% 35%, #1a3060, var(--navy-d));
            border: 3px solid var(--gold);
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: clamp(20px, 4vw, 34px);
            margin-bottom: 2px;
            box-shadow: 0 0 32px rgba(201, 150, 58, .30), 0 4px 24px rgba(0, 0, 0, .55);
            animation: up .7s ease both;
        }

        .hero-kh {
            font-family: 'Noto Serif Khmer', serif;
            font-size: clamp(16px, 2.5vw, 28px);
            font-weight: 700;
            color: #fff;
            line-height: 1.55;
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
            gap: 18px;
            margin-top: 4px;
            animation: up .85s ease both .24s;
        }

        .hero-motto span {
            font-family: 'Noto Serif Khmer', serif;
            font-size: clamp(13px, 1.8vw, 20px);
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
            background: var(--cream);
            border-top: 3px solid var(--gold);
            padding: 12px 0;
            min-height: 140px;
        }

        /* STATS CARD */
        .stats {
            background: var(--navy);
            border-right: 1px solid rgba(255, 255, 255, 0.08);
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 0 26px;
            gap: 0;
            overflow: hidden;
            border-radius: 10px;
             box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
            
        }

        .stat {
            padding: 14px 0;
        }

        .stat+.stat {
            border-top: 1px solid rgba(255, 255, 255, .08);
        }

        .stat-lbl {
            font-family: 'Noto Serif Khmer', serif;
            font-size: 10.5px;
            color: rgba(255, 255, 255, .45);
            display: block;
            margin-bottom: 3px;
        }

        .stat-num {
            font-family: 'Cormorant Garamond', serif;
            font-size: 50px;
            font-weight: 600;
            color: var(--gold);
            line-height: 1;
        }

        .stat-num sup {
            font-size: 22px;
            vertical-align: super;
            color: var(--gold-l);
        }

        .stat-desc {
            font-family: 'Noto Serif Khmer', serif;
            font-size: 10px;
            color: rgba(255, 255, 255, .38);
            display: block;
            margin-top: 2px;
        }

        /* SKILLS */
        .skills {
            padding: 20px 32px 16px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            background: rgba(255, 255, 255, 0.45); /* Elegant glassmorphic blend on cream background */
            backdrop-filter: blur(8px);
            border-radius: 14px;
            margin: 6px 16px;
            border: 1px solid rgba(13, 27, 62, 0.05);
            box-shadow: 
                inset 0 2px 4px rgba(255, 255, 255, 0.60),
                0 4px 18px rgba(13, 27, 62, 0.02);
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
            color: var(--navy-d);
            white-space: nowrap;
            letter-spacing: 0.02em;
            position: relative;
            padding-left: 12px;
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
            height: 1.5px;
            background: linear-gradient(90deg, rgba(201, 150, 58, 0.4) 0%, rgba(201, 150, 58, 0.05) 100%);
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
            padding: 16px 8px;
            border-radius: 12px;
            background: #ffffff;
            border: 1px solid rgba(13, 27, 62, 0.06);
            box-shadow: 
                0 4px 10px rgba(13, 27, 62, 0.02), 
                0 1px 2px rgba(13, 27, 62, 0.01);
            transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
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
            background: linear-gradient(135deg, rgba(255, 255, 255, 0.95) 0%, var(--gold-dim) 100%);
            opacity: 0;
            z-index: -1;
            transition: opacity 0.4s cubic-bezier(0.16, 1, 0.3, 1);
        }

        .sk:hover {
            transform: translateY(-5px);
            border-color: rgba(201, 150, 58, 0.45);
            box-shadow: 
                0 10px 24px rgba(201, 150, 58, 0.12), 
                0 4px 8px rgba(13, 27, 62, 0.03);
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
            width: 40%;
            height: 3px;
            background: linear-gradient(90deg, var(--gold-l) 0%, var(--gold) 100%);
            border-radius: 3px 3px 0 0;
            transition: transform 0.4s cubic-bezier(0.16, 1, 0.3, 1);
        }

        .sk:hover::after {
            transform: translateX(-50%) scaleX(1);
        }

        .sk-icon {
            width: 44px;
            height: 44px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--navy);
            background: rgba(13, 27, 62, 0.04);
            border-radius: 50%;
            transition: all 0.4s cubic-bezier(0.16, 1, 0.3, 1);
        }

        .sk:hover .sk-icon {
            color: var(--navy-d);
            background: var(--gold-dim);
            transform: scale(1.1) rotate(4deg);
            box-shadow: 0 0 0 4px rgba(201, 150, 58, 0.12);
        }

        .sk-icon svg {
            width: 24px;
            height: 24px;
            fill: currentColor;
            transition: transform 0.4s cubic-bezier(0.16, 1, 0.3, 1);
        }

        .sk-name {
            font-family: 'Noto Serif Khmer', 'DM Sans', sans-serif;
            font-size: 11px;
            font-weight: 600;
            color: var(--navy-d);
            text-align: center;
            line-height: 1.4;
            transition: color 0.3s ease;
            max-width: 100%;
            word-wrap: break-word;
        }

        .sk:hover .sk-name {
            color: #b38122; /* Sleek transition of text color to brand gold */
        }

        /* QR */
        .qr-col {
            background: #fff;
            border-left: 1px solid rgba(0, 0, 0, .07);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 12px;
            padding: 18px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
            position: relative;
            z-index: 10;
            border-radius: 10px;
        }

        .qr-frame {
            width: 150px;
            height: 150px;
            border: 2.5px solid var(--gold);
            border-radius: 12px;
            background: var(--cream);
            position: relative;
            overflow: hidden;
            cursor: pointer;
            transition: transform 0.3s cubic-bezier(0.4, 0, 0.2, 1), box-shadow 0.3s ease;
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
            font-size: 11.5px;
            font-weight: 600;
            color: var(--navy-d);
            text-align: center;
            line-height: 1.65;
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
            object-fit: cover;
            position: absolute;
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
        /* Responsive tweaks */
        @media (max-width: 1000px) {
            .site-header { padding: 0 18px; height: 64px; }
            .header-right { gap: 8px; }
            .intl-pill { display: none; }
            .hero-body { padding: clamp(10px, 4vw, 18px) clamp(12px, 6vw, 48px); }
            .c-btn { display: none; }
            .bottom { grid-template-columns: 1fr; padding: 10px; gap: 12px; }
            .stats, .skills, .qr-col { padding: 12px 18px; }
            .skills { margin: 0; border-radius: 10px; }
            .skills-grid { grid-template-columns: repeat(auto-fit, minmax(90px,1fr)); }
        }

        @media (max-width: 767px) {
            body {
                padding-bottom: 74px; /* Space for sticky bar */
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
                min-height: 220px;
            }
        }
    </style>
</head>

<body>
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
                <a href="#" class="intl-pill">{{ app()->getLocale() === 'en' ? 'International Project' : 'គម្រោងអន្តរជាតិ' }}</a>
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

        <!-- BOTTOM ROW -->
        <div class="bottom">

            <!-- Stats -->
            <div class="stats">
                @foreach($stats as $stat)
                <div class="stat">
                    <span class="stat-lbl">{{ $stat->label }}</span>
                    <div class="stat-num" {!! $stat->number == 50 ? 'style="font-size:42px"' : '' !!}>{{ $stat->number }}@if($stat->superscript)<sup {!! $stat->number == 50 ? 'style="font-size:19px"' : '' !!}>{{ $stat->superscript }}</sup>@endif</div>
                    <span class="stat-desc">{{ $stat->description }}</span>
                </div>
                @endforeach
            </div>

            <!-- Skills -->
            <div class="skills">
                <div class="skills-head">
                    <span class="skills-title">{{ app()->getLocale() === 'en' ? 'Areas of Study' : 'តំបន់សិក្សា' }}</span>
                    <div class="skills-rule"></div>
                </div>
                <div class="skills-grid">
                    @foreach($skills as $skill)
                    <a href="{{ $skill->link }}" class="sk">
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
</body>

</html>
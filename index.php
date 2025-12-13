<?php
// Arrays de dados para facilitar manutenção
$developmentFocus = [
    [
        'title' => 'Backend & Concurrency:',
        'description' => '<span class="text-fuchsia-300 font-bold">Laravel</span>/FilamentPHP/PHP (see: Parallite\'s <span class="text-amber-300 font-bold">async</span> multitasking library) and high-performance <span class="text-fuchsia-300 font-bold">Go</span> environments.'
    ],
    [
        'title' => 'Data Systems:',
        'description' => '<span class="text-fuchsia-300 font-bold">PostgreSQL</span> for relational stability and complex query handling, coupled with <span class="text-fuchsia-300 font-bold">Redis</span> for high-speed caching and real-time data persistence.'
    ],
    [
        'title' => 'Frontend & Interface:',
        'description' => '<span class="text-cyan-300 font-bold">Livewire</span>, <span class="text-cyan-300 font-bold">Vue.js</span> and <span class="text-cyan-300 font-bold">Tailwind CSS</span> for building dynamic, reactive interfaces (e.g., Purrai\'s chat UI) and prioritizing rapid development cycles.'
    ]
];

$solutions = [
    [
        'id' => '01',
        'title' => 'Purrai - AI Workflow Agent/',
        'url' => 'https://github.com/b7s/purrai',
        'description' => 'Built an AI chat/scheduling agent to manage complex task flows, automating conversational inputs and reducing manual coordination overhead.'
    ],
    [
        'id' => '02',
        'title' => 'PHP Whisper Integration/',
        'url' => 'https://github.com/b7s/whisper-php-binding',
        'description' => 'Created a low-latency binding for OpenAI\'s Whisper model into the PHP ecosystem, enabling native, high-performance speech-to-text capabilities without external microservices.'
    ],
    [
        'id' => '03',
        'title' => 'Parallite - PHP Async Multitasking/',
        'url' => 'https://github.com/b7s/parallite',
        'description' => 'Developed a lightweight, non-blocking asynchronous library for PHP, solving the platform\'s traditional synchronous execution limitations and drastically improving throughput for I/O-bound tasks.'
    ],
    [
        'id' => '1+n',
        'title' => 'More Corporate &amp; Public Solutions',
        'url' => 'https://github.com/b7s',
        'description' => 'And that\'s just the beginning — explore many other powerful solutions on my GitHub',
        'type' => 'CHORE'
    ]
];

$contactLinks = [
    [
        'icon' => '<path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z"></path><path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z"></path>',
        'label' => 'Email:',
        'url' => 'mailto:me@brunots.dev',
        'text' => 'me@brunots.dev'
    ],
    [
        'icon' => '<path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/>',
        'label' => 'GitHub:',
        'url' => 'https://github.com/b7s',
        'text' => 'github.com/b7s'
    ],
    [
        'icon' => '<path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>',
        'label' => 'LinkedIn:',
        'url' => 'https://www.linkedin.com/in/brunotenorios/',
        'text' => '/in/brunotenorios/'
    ]
];

$footerLinks = [
    [
        'text' => 'Website hosted on brunots.dev',
        'url' => 'http://brunots.dev'
    ],
    [
        'text' => 'Source code',
        'url' => 'https://github.com/b7s/my-site'
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/webp" href="images/favicon.webp">
    <title>BrunoTS.dev | Problem Solver, Software Engineer - Laravel, Async Systems</title>
    <!-- SEO Additions -->
    <meta name="description" content="BrunoTS is a Software Engineer specializing in high-performance system resilience, backend concurrency (PHP/Laravel, Go), and modern frontend development (Vue.js, Tailwind CSS). Focused on resolving bottlenecks and architecting scalable solutions.">
    <meta name="keywords" content="BrunoTS, brunots.dev, Software Engineer, Laravel, FilamentPHP, PHP Async, Parallite, TypeScript, Livewire, Vue.js, Tailwind CSS, PostgreSQL, Redis, Problem Solver, High Performance, System Resilience">
    <!-- End of SEO Additions -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=JetBrains+Mono:wght@400;700&display=swap" rel="stylesheet">
    <style>
        :root {
            /* Increased transparency: 0.85 -> 0.70 (30% transparent) */
            --terminal-bg: rgba(20, 20, 20, 0.70);
            --prompt-text: #fff;
        }
        
        body {
            font-family: 'Inter', sans-serif;
            background-color: #101015;
            
            /* Static gradient background - optimized for performance */
            background-image: 
                radial-gradient(
                    ellipse at 30% 20%, 
                    hsla(220, 80%, 30%, 0.5) 0%, 
                    transparent 55%
                ),
                radial-gradient(
                    ellipse at 70% 80%, 
                    hsla(230, 75%, 25%, 0.45) 0%, 
                    transparent 55%
                ),
                linear-gradient(135deg, #101015 0%, #000000 100%); 

            height: 100vh;
            overflow: hidden; 
            
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px 20px;
        }

        .terminal-window {
            background-color: var(--terminal-bg);
            border: 1px solid rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px) saturate(180%);
            -webkit-backdrop-filter: blur(10px) saturate(180%);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.9);
            transition: all 0.3s ease;
            
            width: 100%;
            max-width: 1400px;
            height: 100%; 
            min-height: calc(100vh - 80px);
            display: flex;
            flex-direction: column;
        }

        .terminal-header {
            background-color: rgba(0, 0, 0, 0.3);
        }

        .terminal-line {
            font-family: 'JetBrains Mono', monospace;
            line-height: 1.6;
            word-break: break-word;
        }
        
        .terminal-section {
            position: relative;
        }

        .terminal-command {
            position: sticky;
            top: 0;
            z-index: 10;
        }

        .terminal-command .line {
            background-color: rgba(0, 0, 0, 0.65);
            padding: .25rem .75rem;
            border-radius: 12px;
            display: inline-block;
        }
        
        /* Cursor Blink Animation */
        @keyframes blink {
            0%, 100% { opacity: 0; }
            50% { opacity: 1; }
        }

        #dynamic-prompt {
            display: inline-block;
            position: relative;
        }
        
        #dynamic-prompt::after {
            content: '|';
            color: white;
            animation: blink 0.7s step-end infinite;
            margin-left: 2px;
        }
        
        /* Custom Scrollbar Styling */
        .scrollable-content::-webkit-scrollbar {
            width: 6px;
        }
        /* Scrollbar thumb color */
        .scrollable-content::-webkit-scrollbar-thumb {
            background-color: rgba(144, 202, 249, 0.3);
            border-radius: 3px;
        }
        /* Scrollbar track color */
        .scrollable-content::-webkit-scrollbar-track {
            background: rgba(0, 0, 0, 0.1);
        }
        
        /* Layout Fix: Padding adjustment to align the scrollbar with the right edge */
        .terminal-content-area {
            flex-grow: 1;
            overflow-y: hidden;
            display: flex;
            flex-direction: column;
            /* Layout Fix: Only 24px padding-left. Padding-right 0 so the scrollbar is on the edge. */
            padding: 0 0 0 24px; 
            padding-bottom: 0;
        }

        /* Adjustment of horizontal padding for scrollable-content */
        .scrollable-content {
            padding-top: 24px;
            padding-right: 24px;
        }
        
        /* Responsiveness adjustment for small screens (Mobile) */
        @media (max-width: 640px) {
            body {
                padding: 0 !important;
            }
            .terminal-window {
                border-radius: 0 !important;
                border: none !important;
                max-width: 100% !important;
                min-height: 100vh !important;
            }
        }
    </style>
</head>
<body>

    <div class="terminal-window p-0 rounded-xl overflow-hidden">
        
        <div class="terminal-header flex items-center p-3 border-b border-gray-800 flex-shrink-0">
            <div class="flex space-x-2">
                <div class="w-3 h-3 bg-slate-500 rounded-full" title="Close"></div>
                <div class="w-3 h-3 bg-slate-500 rounded-full" title="Minimize"></div>
                <div class="w-3 h-3 bg-slate-500 rounded-full" title="Maximize"></div>
            </div>
            <div class="flex-grow text-center text-sm font-semibold text-gray-400 select-none cursor-default">
                brunots.dev
            </div>
        </div>

        <div class="terminal-content-area">
            
            <div class="flex-grow overflow-y-auto scrollable-content">

                <h1 class="sr-only">BrunoTS: Software Engineer & Problem Solver specializing in Laravel, TypeScript, and high-performance systems.</h1>

                <div class="terminal-line text-white mb-6">
                    <span class="text-green-400 font-bold">$</span> 
                    <span class="text-gray-200">Welcome to <strong class="text-cyan-300">BrunoTS</strong>'s Problem-Solving Console.</span>
                </div>

                <div class="terminal-section">
                    <div class="terminal-line terminal-command text-white mb-4">
                        <div class="line">
                            <span class="text-green-400 font-bold">brunots.dev:<span class="text-green-600">~$</span></span> 
                            <span class="text-prompt-text">whoami</span>
                        </div>
                    </div>
                    <div class="terminal-line text-gray-200 ml-4 mb-8">
                        <span class="text-white font-bold">&gt;</span> 
                        <span><strong>Bruno</strong>, a <span class="text-cyan-300 font-bold">Software Engineer</span> focused on system resilience and high <span class="text-amber-300 font-bold">performance</span>. My passion is dissecting complex architectures and architecting clean, <span class="text-amber-300 font-bold">scalable</span> solutions using <span class="text-fuchsia-300 font-bold">Laravel</span>, <span class="text-fuchsia-300 font-bold">TypeScript</span>, and modern concurrency techniques. I don't just write code; I am a dedicated <span class="text-cyan-300 font-bold">Problem Solver</span> who resolves bottlenecks and eliminates single points of failure.</span>
                    </div>
                </div>

                <div class="terminal-section">
                    <div class="terminal-line terminal-command text-white mb-4">
                        <div class="line">
                            <span class="text-green-400 font-bold">brunots.dev:<span class="text-green-600">~$</span></span> 
                            <span class="text-prompt-text">cat development_focus.txt</span>
                        </div>
                    </div>
                    <ul class="list-none ml-4 space-y-2 mb-8">
                        <?php foreach ($developmentFocus as $focus): ?>
                        <li class="terminal-line text-gray-200">
                            <span class="text-green-500 mr-2">*</span> 
                            <span class="text-white font-semibold"><?= $focus['title'] ?></span> <?= $focus['description'] ?>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>

                <div class="terminal-section">
                    <div class="terminal-line terminal-command text-white mb-4">
                        <div class="line">
                            <span class="text-green-400 font-bold">brunots.dev:<span class="text-green-600">~$</span></span> 
                            <span class="text-prompt-text">ls -F ./solutions/</span>
                        </div>
                    </div>
                    <div class="ml-4 space-y-3 mb-8">
                        <?php foreach ($solutions as $solution): ?>
                        <div class="terminal-line text-gray-200 border-l-2 border-green-500 pl-3 py-1 hover:bg-white/10 ransition duration-150 rounded-md">
                            <span class="text-blue-400">[<?= $solution['id'] ?>]</span> <a href="<?= $solution['url'] ?>" target="_blank" class="font-bold text-white hover:underline"><?= $solution['title'] ?></a>
                            <p class="ml-6 text-xs mt-1 italic">
                                <span class="text-green-400 font-bold">// <?= $solution['type'] ?? 'FEAT' ?>:</span> <?= $solution['description'] ?>
                            </p>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="terminal-section">
                    <div class="terminal-line terminal-command text-white mb-4">
                        <div class="line">
                            <span class="text-green-400 font-bold">brunots.dev:<span class="text-green-600">~$</span></span> 
                            <span class="text-prompt-text">connect</span>
                        </div>
                    </div>
                    <div class="ml-4 terminal-line text-gray-200 flex flex-wrap gap-x-6 gap-y-2 mb-8">
                        <?php foreach ($contactLinks as $index => $contact): ?>
                        <span class="flex items-center whitespace-nowrap">
                            <svg class="w-5 h-5 text-blue-400 mr-2" fill="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <?= $contact['icon'] ?>
                            </svg>
                            <span class="text-white font-bold"><?= $contact['label'] ?></span> 
                            <a href="<?= $contact['url'] ?>" <?= strpos($contact['url'], 'mailto:') === false ? 'target="_blank"' : '' ?> class="text-blue-400 hover:text-blue-300 transition ml-1"><?= $contact['text'] ?></a>
                        </span>
                        <?php if ($index < count($contactLinks) - 1): ?>
                        <span class="text-gray-500 hidden sm:inline">|</span>
                        <?php endif; ?>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="terminal-line text-white mt-8 pb-6 min-h-[6.2rem] sm:min-h-0 flex items-start">
                    <span class="text-green-400 font-bold flex-shrink-0">brunots.dev:<span class="text-green-600">~$</span></span> 
                    <span id="dynamic-prompt" class="text-prompt-text ml-2 line-clamp-3 overflow-hidden"></span>
                </div>
            </div>
        </div>

        <div class="flex-shrink-0 py-3 text-center text-xs text-gray-400 border-t border-gray-800/50 px-6">
            <div class="flex justify-center space-x-4">
                <?php foreach ($footerLinks as $index => $link): ?>
                <p class="whitespace-nowrap">
                    <?php if (strpos($link['text'], 'hosted') !== false): ?>
                        <a href="<?= $link['url'] ?>" class="hover:underline">brunots.dev</a>
                    <?php else: ?>
                        <a href="<?= $link['url'] ?>" target="_blank" class="hover:underline"><?= $link['text'] ?></a>
                    <?php endif; ?>
                </p>
                <?php if ($index < count($footerLinks) - 1): ?>
                <span class="text-gray-500">|</span>
                <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const dynamicPrompt = document.getElementById('dynamic-prompt');
            
            const phrases = [
                "Hacking complexity with Laravel & TS. 💻",
                "Building high-performance async systems. ✨",
                "Solving problems, one commit at a time. 🚀",
                "PostgreSQL + Redis = Speed. ⚡",
                "Powered by Vue.js & Tailwind magic. 🎨",
                "Architecting scalable solutions with Go. ⚙️",
                "Eliminating bottlenecks and ensuring resilience. 🛡️",
                "Focused on clean code and robust architecture. 📐",
                "Mastering the art of backend optimization. 📊",
                "From idea to deployment, fully automated. 🤖",
                "Testing ideas until they turn into something useful. 🧪"
            ];

            // Shuffle once
            for (let i = phrases.length - 1; i > 0; i--) {
                const j = Math.floor(Math.random() * (i + 1));
                [phrases[i], phrases[j]] = [phrases[j], phrases[i]];
            }

            const TYPING_SPEED = 50;
            const DELETING_SPEED = 30;
            const PAUSE_AFTER_PHRASE = 1000;
            const PAUSE_BEFORE_TYPE = 500;

            let phraseIndex = 0;
            let charIndex = 0;
            let isDeleting = false;
            let lastTime = 0;
            let delay = TYPING_SPEED;
            let isPaused = false;
            let animationId = null;

            function type(timestamp) {
                if (isPaused) return;

                if (timestamp - lastTime < delay) {
                    animationId = requestAnimationFrame(type);
                    return;
                }
                lastTime = timestamp;

                const currentPhrase = phrases[phraseIndex];

                if (isDeleting) {
                    charIndex--;
                    dynamicPrompt.textContent = currentPhrase.substring(0, charIndex);

                    if (charIndex === 0) {
                        isDeleting = false;
                        phraseIndex = (phraseIndex + 1) % phrases.length;
                        delay = PAUSE_BEFORE_TYPE;
                    } else {
                        delay = DELETING_SPEED;
                    }
                } else {
                    charIndex++;
                    dynamicPrompt.textContent = currentPhrase.substring(0, charIndex);

                    if (charIndex === currentPhrase.length) {
                        isDeleting = true;
                        delay = PAUSE_AFTER_PHRASE;
                    } else {
                        delay = TYPING_SPEED;
                    }
                }

                animationId = requestAnimationFrame(type);
            }

            // Pause/resume when tab visibility changes
            document.addEventListener('visibilitychange', () => {
                if (document.hidden) {
                    isPaused = true;
                    if (animationId) {
                        cancelAnimationFrame(animationId);
                        animationId = null;
                    }
                } else {
                    isPaused = false;
                    lastTime = 0;
                    animationId = requestAnimationFrame(type);
                }
            });

            animationId = requestAnimationFrame(type);
        });
    </script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/webp" href="favicon.webp">
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
            padding: 30px 20px;
        }

        .terminal-window {
            background-color: var(--terminal-bg);
            border: 1px solid rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px) saturate(180%);
            -webkit-backdrop-filter: blur(10px) saturate(180%);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.4);
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
        
        /* Cursor Blink Animation */
        @keyframes blink {
            0%, 100% { border-right-color: transparent; }
            50% { border-right-color: white; }
        }

        #dynamic-prompt {
            /* Simulate a block cursor */
            border-right: 2px solid white; 
            animation: blink 0.7s step-end infinite;
            padding-right: 2px;
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
                <div class="w-3 h-3 bg-red-500 rounded-full" title="Close"></div>
                <div class="w-3 h-3 bg-yellow-500 rounded-full" title="Minimize"></div>
                <div class="w-3 h-3 bg-green-500 rounded-full" title="Maximize"></div>
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

                <div class="terminal-line text-white mb-4">
                    <span class="text-green-400 font-bold">brunots.dev:~$</span> 
                    <span class="text-prompt-text">whoami</span>
                </div>
                <div class="terminal-line text-gray-200 ml-4 mb-8">
                    <span class="text-white font-bold">&gt;</span> 
                    <span>Bruno, a <span class="text-cyan-300 font-bold">Software Engineer</span> focused on system resilience and high <span class="text-amber-300 font-bold">performance</span>. My passion is dissecting complex architectures and architecting clean, <span class="text-amber-300 font-bold">scalable</span> solutions using <span class="text-fuchsia-300 font-bold">Laravel</span>, <span class="text-fuchsia-300 font-bold">TypeScript</span>, and modern concurrency techniques. I don't just write code; I am a dedicated <span class="text-cyan-300 font-bold">Problem Solver</span> who resolves bottlenecks and eliminates single points of failure.</span>
                </div>

                <div class="terminal-line text-white mb-4">
                    <span class="text-green-400 font-bold">brunots.dev:~$</span> 
                    <span class="text-prompt-text">cat development_focus.txt</span>
                </div>
                <ul class="list-none ml-4 space-y-2 mb-8">
                    <li class="terminal-line text-gray-200">
                        <span class="text-green-500 mr-2">*</span> 
                        <span class="text-white font-semibold">Backend & Concurrency:</span> <span class="text-fuchsia-300 font-bold">Laravel</span>/FilamentPHP/PHP (see: Parallite's <span class="text-amber-300 font-bold">async</span> multitasking library) and high-performance <span class="text-fuchsia-300 font-bold">Go</span> environments.
                    </li>
                    <li class="terminal-line text-gray-200">
                        <span class="text-green-500 mr-2">*</span> 
                        <span class="text-white font-semibold">Data Systems:</span> <span class="text-fuchsia-300 font-bold">PostgreSQL</span> for relational stability and complex query handling, coupled with <span class="text-fuchsia-300 font-bold">Redis</span> for high-speed caching and real-time data persistence.
                    </li>
                    <li class="terminal-line text-gray-200">
                        <span class="text-green-500 mr-2">*</span> 
                        <span class="text-white font-semibold">Frontend & Interface:</span> <span class="text-cyan-300 font-bold">Livewire</span>, <span class="text-cyan-300 font-bold">Vue.js</span> and <span class="text-cyan-300 font-bold">Tailwind CSS</span> for building dynamic, reactive interfaces (e.g., Purrai's chat UI) and prioritizing rapid development cycles.
                    </li>
                </ul>

                <div class="terminal-line text-white mb-4">
                    <span class="text-green-400 font-bold">brunots.dev:~$</span> 
                    <span class="text-prompt-text">ls -F ./solutions/</span>
                </div>
                <div class="ml-4 space-y-4 mb-8">
                    
                    <div class="terminal-line text-gray-200 border-l-2 border-green-500 pl-3 py-1 hover:bg-white/10 transition duration-150 rounded-sm">
                        <span class="text-blue-400">[01]</span> <a href="https://github.com/b7s/purrai" target="_blank" class="font-bold text-white hover:underline">Purrai - AI Workflow Agent/</a>
                        <p class="ml-6 text-xs mt-1 italic">
                            <span class="text-green-400 font-bold">// FIX:</span> Built an AI chat/scheduling agent to manage complex task flows, automating conversational inputs and reducing manual coordination overhead.
                        </p>
                    </div>
                    
                    <div class="terminal-line text-gray-200 border-l-2 border-green-500 pl-3 py-1 hover:bg-white/10 transition duration-150 rounded-sm">
                        <span class="text-blue-400">[02]</span> <a href="https://github.com/b7s/whisper-php-binding" target="_blank" class="font-bold text-white hover:underline">PHP Whisper Integration/</a>
                        <p class="ml-6 text-xs mt-1 italic">
                            <span class="text-green-400 font-bold">// FIX:</span> Created a low-latency binding for OpenAI's Whisper model into the PHP ecosystem, enabling native, high-performance speech-to-text capabilities without external microservices.
                        </p>
                    </div>

                    <div class="terminal-line text-gray-200 border-l-2 border-green-500 pl-3 py-1 hover:bg-white/10 transition duration-150 rounded-sm">
                        <span class="text-blue-400">[03]</span> <a href="https://github.com/b7s/parallite" target="_blank" class="font-bold text-white hover:underline">Parallite - PHP Async Multitasking/</a>
                        <p class="ml-6 text-xs mt-1 italic">
                            <span class="text-green-400 font-bold">// FIX:</span> Developed a lightweight, non-blocking asynchronous library for PHP, solving the platform's traditional synchronous execution limitations and drastically improving throughput for I/O-bound tasks.
                        </p>
                    </div>

                    <div class="terminal-line text-gray-200 border-l-2 border-green-500 pl-3 py-1 hover:bg-white/10 transition duration-150 rounded-sm">
                        <span class="text-blue-400">[1+n]</span> <a href="https://github.com/b7s" target="_blank" class="font-bold text-white hover:underline">More Corporate &amp; Public Solutions</a>
                        <p class="ml-6 text-xs mt-1 italic">
                            <span class="text-green-400 font-bold">// CHORE:</span> And that's just the beginning — explore many other powerful solutions on my GitHub
                        </p>
                    </div>
                    
                </div>

                <div class="terminal-line text-white mb-4">
                    <span class="text-green-400 font-bold">brunots.dev:~$</span> 
                    <span class="text-prompt-text">connect</span>
                </div>
                <div class="ml-4 terminal-line text-gray-200 flex flex-wrap gap-x-6 gap-y-2">
                    <span class="flex items-center whitespace-nowrap">
                        <span class="text-white font-bold">Email:</span> 
                        <a href="mailto:bruno@brunots.dev" class="text-blue-400 hover:text-blue-300 transition ml-1">bruno@brunots.dev</a>
                    </span>
                    <span class="text-gray-500 hidden sm:inline">|</span>

                    <span class="flex items-center whitespace-nowrap">
                        <span class="text-white font-bold">GitHub:</span> 
                        <a href="https://github.com/b7s" target="_blank" class="text-blue-400 hover:text-blue-300 transition ml-1">github.com/b7s</a>
                    </span>
                    <span class="text-gray-500 hidden sm:inline">|</span>

                    <span class="flex items-center whitespace-nowrap">
                        <span class="text-white font-bold">LinkedIn:</span> 
                        <a href="https://www.linkedin.com/in/brunotenorios/" target="_blank" class="text-blue-400 hover:text-blue-300 transition ml-1">/in/brunotenorios/</a>
                    </span>
                </div>

                <div class="terminal-line text-white mt-8 pb-6">
                    <span class="text-green-400 font-bold">brunots.dev:~$</span> 
                    <span id="dynamic-prompt" class="text-prompt-text"></span>
                </div>
            </div>
        </div>

        <div class="flex-shrink-0 py-3 text-center text-xs text-gray-400 border-t border-gray-800/50 px-6">
            <div class="flex justify-center space-x-4">
                <p class="whitespace-nowrap">Website hosted on <a href="http://brunots.dev" class="hover:underline">brunots.dev</a></p>
                
                <span class="text-gray-500">|</span>
                
                <p class="whitespace-nowrap">
                    <a href="https://github.com/b7s/my-site" target="_blank" class="hover:underline">Source code</a>
                </p>
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

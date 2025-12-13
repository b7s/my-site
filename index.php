<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BrunoTS: Problem Solver & Software Engineer</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=JetBrains+Mono:wght@400;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --terminal-bg: rgba(20, 20, 20, 0.85); /* Fundo escuro levemente transparente */
            --prompt-text: #fff; /* Branco para o prompt */
        }
        
        body {
            font-family: 'Inter', sans-serif;
            background-color: #1e1e2e;
            background-image: radial-gradient(circle at 10% 20%, rgba(0, 0, 0, 0.2) 0%, rgba(20, 20, 30, 0.5) 100%),
                              linear-gradient(135deg, #101015 0%, #000000 100%);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 40px 20px; /* Adiciona margin vertical e lateral */
        }

        .terminal-window {
            background-color: var(--terminal-bg);
            border: 1px solid rgba(255, 255, 255, 0.1);
            /* macOS-like frosted glass effect */
            backdrop-filter: blur(20px) saturate(180%);
            -webkit-backdrop-filter: blur(20px) saturate(180%);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.4);
            transition: all 0.3s ease;
            
            /* Fullscreen com margin lateral (Request 1) */
            width: 100%;
            max-width: 1400px; /* Define um limite para a largura máxima */
            height: 100%; /* Permite expansão vertical */
            min-height: calc(100vh - 80px); /* Ocupa quase a altura total */
        }

        .terminal-header {
            background-color: rgba(0, 0, 0, 0.3);
        }

        .terminal-line {
            font-family: 'JetBrains Mono', monospace;
            line-height: 1.6;
            word-break: break-word;
        }

        /* Custom scrollbar for a cleaner look */
        .terminal-body::-webkit-scrollbar {
            width: 8px;
        }
        .terminal-body::-webkit-scrollbar-thumb {
            background-color: rgba(255, 255, 255, 0.2);
            border-radius: 4px;
        }
        .terminal-body::-webkit-scrollbar-track {
            background: rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>

    <!-- Main Terminal Window Container -->
    <!-- Classes de largura removidas e tratadas no CSS para o efeito fullscreen com margin -->
    <div class="terminal-window p-0 rounded-xl overflow-hidden">
        
        <!-- Header Bar (Traffic Lights / Window Controls) -->
        <div class="terminal-header flex items-center p-3 border-b border-gray-800">
            <div class="flex space-x-2">
                <div class="w-3 h-3 bg-red-500 rounded-full" title="Close"></div>
                <div class="w-3 h-3 bg-yellow-500 rounded-full" title="Minimize"></div>
                <div class="w-3 h-3 bg-green-500 rounded-full" title="Maximize"></div>
            </div>
            <div class="flex-grow text-center text-sm font-semibold text-gray-400">
                brunots.dev
            </div>
        </div>

        <!-- Terminal Content Body -->
        <!-- Altura ajustada para ser flexível e ocupar o espaço restante (calc) -->
        <div class="terminal-body p-6 text-sm h-full max-h-[calc(100vh-140px)] overflow-y-auto">
            
            <!-- Welcome/Initial Prompt -->
            <div class="terminal-line text-white mb-6">
                <span class="text-green-400 font-bold">$</span> 
                <span class="text-gray-200">Welcome to BrunoTS's Problem-Solving Console.</span>
            </div>

            <!-- Section 1: Introduction (whoami) -->
            <div class="terminal-line text-white mb-4">
                <span class="text-green-400 font-bold">brunots.dev:~$</span> 
                <span class="text-prompt-text">whoami</span>
            </div>
            <div class="terminal-line text-gray-200 ml-4 mb-8">
                <span class="text-white font-bold">&gt;</span> 
                <span>Bruno, a Software Engineer focused on system resilience and high performance. My passion is dissecting complex architectures and architecting clean, scalable, and high-performance solutions. I don't just write code; I resolve bottlenecks and eliminate single points of failure.</span>
            </div>

            <!-- Section 2: Core Stack & Focus (Problem-Solving Tools) -->
            <div class="terminal-line text-white mb-4">
                <span class="text-green-400 font-bold">brunots.dev:~$</span> 
                <span class="text-prompt-text">cat problem_solving_stack.txt</span>
            </div>
            <ul class="list-none ml-4 space-y-2 mb-8">
                <li class="terminal-line text-gray-200">
                    <span class="text-green-500 mr-2">*</span> 
                    <span class="text-white font-semibold">Languages:</span> TypeScript (Node/Deno), Python, Go.
                </li>
                <li class="terminal-line text-gray-200">
                    <span class="text-green-500 mr-2">*</span> 
                    <span class="text-white font-semibold">Systems:</span> Distributed Systems, High Availability, Database Optimization (PostgreSQL, Redis).
                </li>
                <li class="terminal-line text-gray-200">
                    <span class="text-green-500 mr-2">*</span> 
                    <span class="text-white font-semibold">Focus Areas:</span> Observability (Prometheus/Grafana), Cloud Architecture (GCP/AWS), Architectural Refactoring.
                </li>
            </ul>

            <!-- Section 3: Projects (Solutions) - UPDATED WITH REAL PROJECTS -->
            <div class="terminal-line text-white mb-4">
                <span class="text-green-400 font-bold">brunots.dev:~$</span> 
                <span class="text-prompt-text">ls -F ./public-solutions/</span>
            </div>
            <div class="ml-4 space-y-4 mb-8">
                
                <!-- Project 1: Purrai -->
                <div class="terminal-line text-gray-200 border-l-2 border-green-500 pl-3 hover:bg-white/10 transition duration-150 rounded-sm">
                    <span class="text-blue-400">[01]</span> <a href="https://github.com/b7s/purrai" target="_blank" class="font-bold text-white hover:underline">Purrai - AI Workflow Agent/</a>
                    <p class="ml-6 text-xs mt-1 italic">
                        <span class="text-green-400 font-bold">// FEAT:</span> Built an AI chat/scheduling agent to manage complex task flows, automating conversational inputs and reducing manual coordination overhead.
                    </p>
                </div>
                
                <!-- Project 2: PHP Whisper Integration -->
                <div class="terminal-line text-gray-200 border-l-2 border-green-500 pl-3 hover:bg-white/10 transition duration-150 rounded-sm">
                    <span class="text-blue-400">[02]</span> <a href="https://github.com/b7s/whisper-php-binding" target="_blank" class="font-bold text-white hover:underline">PHP Whisper Integration/</a>
                    <p class="ml-6 text-xs mt-1 italic">
                        <span class="text-green-400 font-bold">// FEAT:</span> Created a low-latency binding for OpenAI's Whisper model into the PHP ecosystem, enabling native, high-performance speech-to-text capabilities without external microservices.
                    </p>
                </div>

                <!-- Project 3: Parallite -->
                <div class="terminal-line text-gray-200 border-l-2 border-green-500 pl-3 hover:bg-white/10 transition duration-150 rounded-sm">
                    <span class="text-blue-400">[03]</span> <a href="https://github.com/b7s/parallite" target="_blank" class="font-bold text-white hover:underline">Parallite - PHP Async Multitasking/</a>
                    <p class="ml-6 text-xs mt-1 italic">
                        <span class="text-green-400 font-bold">// FEAT:</span> Developed a lightweight, non-blocking asynchronous library for PHP, solving the platform's traditional synchronous execution limitations and drastically improving throughput for I/O-bound tasks.
                    </p>
                </div>

              <div class="terminal-line text-gray-200 border-l-2 border-green-500 pl-3 hover:bg-white/10 transition duration-150 rounded-sm">
                    <span class="text-blue-400">[inf]</span> <a href="javasscript:void(0)" target="_blank" class="font-bold text-white hover:underline">More Corporate &amp; Public Solutions</a>
                    <p class="ml-6 text-xs mt-1 italic">
                        <span class="text-green-400 font-bold">// CHORE:</span> And that's just the beginning — explore many other powerful solutions on my GitHub
                    </p>
                </div>
            </div>

            <!-- Section 4: Contact/Links -->
            <div class="terminal-line text-white mb-4">
                <span class="text-green-400 font-bold">brunots.dev:~$</span> 
                <span class="text-prompt-text">connect</span>
            </div>
            <div class="ml-4 space-y-2">
                <div class="terminal-line text-gray-200">
                    <span class="text-white font-bold">Email:</span> 
                    <a href="mailto:bruno@brunots.dev" class="text-blue-400 hover:text-blue-300 transition">bruno@brunots.dev</a>
                </div>
                <div class="terminal-line text-gray-200">
                    <span class="text-white font-bold">GitHub:</span> 
                    <a href="https://github.com/b7s" target="_blank" class="text-blue-400 hover:text-blue-300 transition">https://github.com/b7s</a>
                </div>
                <div class="terminal-line text-gray-200">
                    <span class="text-white font-bold">LinkedIn:</span> 
                    <a href="https://linkedin.com/in/bruno-ts" target="_blank" class="text-blue-400 hover:text-blue-300 transition">/in/brunotenorios/</a>
                </div>
            </div>

            <!-- Footer Prompt Cursor -->
            <div class="terminal-line text-white mt-8">
                <span class="text-green-400 font-bold">brunots.dev:~$</span> 
                <span class="text-prompt-text"><span class="animate-pulse">_</span></span>
            </div>
            
            <!-- Small attribution -->
            <div class="mt-4 text-center text-xs text-gray-400">
                <p>Website hosted on <a href="http://brunots.dev" class="hover:underline">brunots.dev</a></p>
            </div>
        </div>
    </div>

</body>
</html>

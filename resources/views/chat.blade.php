<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Jamii Chat AI</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <style>
        :root {
            --bg-color: #f8f9fa;
            --sidebar-color: #f0f4f9;
            --text-main: #1f1f1f;
            --accent-gradient: linear-gradient(90deg, #4285f4, #9b72cb, #65d978);
            --user-bubble: #e9eef6;
            --ai-bubble: #ffffff;
        }

        body {
            margin: 0;
            font-family: 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
            background-color: var(--bg-color);
            color: var(--text-main);
        }

        .container {
            display: flex;
            height: 100vh;
        }

        /* Sidebar */
        .sidebar {
            width: 280px;
            background: var(--sidebar-color);
            display: flex;
            flex-direction: column;
            padding: 20px;
            border-right: 1px solid #e3e3e3;
        }

        .sidebar h3 {
            font-weight: 500;
            font-size: 1.2rem;
            margin-bottom: 30px;
            padding-left: 10px;
        }

        .sidebar ul {
            list-style: none;
            padding: 0;
        }

        .sidebar ul li {
            padding: 12px 15px;
            margin-bottom: 5px;
            cursor: pointer;
            border-radius: 25px;
            transition: background 0.2s;
            font-size: 0.9rem;
            font-weight: 500;
        }

        .sidebar ul li:hover {
            background: #dde3ea;
        }

        /* Chat Area */
        .chat-container {
            flex: 1;
            display: flex;
            flex-direction: column;
            width: 100%;
        }

        .chat-header {
            padding: 20px;
            text-align: center;
        }

        .chat-header h2 {
            font-weight: 500;
            background: var(--accent-gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            display: inline-block;
            font-size: 1.5rem;
            letter-spacing: 1px;
        }

        #chat-box {
            flex: 1;
            padding: 20px;
            overflow-y: auto;
            display: flex;
            flex-direction: column;
            gap: 20px;
            max-width: 850px;
            margin: 0 auto;
            width: 100%;
        }

        /* Message Bubbles */
        .message {
            max-width: 80%;
            padding: 12px 18px;
            border-radius: 18px;
            line-height: 1.5;
            font-size: 1rem;
        }

        .user-message {
            align-self: flex-end;
            background-color: var(--user-bubble);
            color: var(--text-main);
            border-bottom-right-radius: 4px;
        }

        .ai-message {
            align-self: flex-start;
            background-color: var(--ai-bubble);
            border: 1px solid #e3e3e3;
            border-bottom-left-radius: 4px;
        }

        /* Input Styling */
        .chat-input-wrapper {
            padding: 20px 40px;
            background: var(--bg-color);
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .chat-input {
            display: flex;
            align-items: center;
            background: #ffffff;
            width: 100%;
            max-width: 800px;
            padding: 8px 16px;
            border-radius: 32px;
            border: 1px solid #dfe1e5;
            transition: box-shadow 0.2s;
        }

        .chat-input:focus-within {
            box-shadow: 0 1px 6px rgba(32, 33, 36, 0.28);
            border-color: transparent;
        }

        .chat-input input {
            flex: 1;
            border: none;
            outline: none;
            padding: 12px 10px;
            font-size: 16px;
            background: transparent;
        }

        .input-icon-left {
            display: flex;
            align-items: center;
            cursor: pointer;
            padding-right: 8px;
        }

        .chat-input button {
            background: transparent;
            border: none;
            cursor: pointer;
            display: flex;
            align-items: center;
            padding: 8px;
            border-radius: 50%;
            transition: background 0.2s;
        }

        .chat-input button:hover {
            background: #f1f3f4;
        }

        .chat-input button svg path {
            fill: #1a73e8;
        }

        .input-footer {
            font-size: 11px;
            color: #70757a;
            margin-top: 8px;
            text-align: center;
        }
    </style>
</head>

<body>

    <div class="container">
        <div class="sidebar">
            <h3>Jamii Chat</h3>
            <ul>
                <li>✨ New Chat</li>
                <li>🕒 History</li>
                <li>⚙️ Settings</li>
            </ul>
        </div>

        <div class="chat-container">
            <div class="chat-header">
                <h2>PUBLIC - PRIVATE PARTNERSHIP (AI-CP3)</h2>
            </div>

            <div id="chat-box">
                <div class="message ai-message">
                    Hello! I'm Jamii. How can I help you today?
                </div>
            </div>

            <div class="chat-input-wrapper">
                <div class="chat-input">
                    <div class="input-icon-left">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 5V19M5 12H19" stroke="#5f6368" stroke-width="2" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                    </div>

                    <!-- Primary input for chat -->
                    <input type="text" id="message" placeholder="Ask Jamii for anything.....">
                    <button id="mic-btn" onclick="startVoice()">
                        <svg id="mic-icon" width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M12 14c1.66 0 3-1.34 3-3V5c0-1.66-1.34-3-3-3S9 3.34 9 5v6c0 1.66 1.34 3 3 3z"
                                fill="#5f6368" />
                            <path
                                d="M17 11c0 2.76-2.24 5-5 5s-5-2.24-5-5H5c0 3.53 2.61 6.43 6 6.92V21h2v-3.08c3.39-.49 6-3.39 6-6.92h-2z"
                                fill="#5f6368" />
                        </svg>
                    </button>
                    <button id="send-btn" onclick="sendMessage()">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.01 21L23 12L2.01 3L2 10L17 12L2 14L2.01 21Z" fill="#5f6368" />
                        </svg>
                    </button>
                </div>
                <div class="input-footer">
                    Your data is encrypted and secure. &nbsp; | &nbsp; Jamii AI v0.1
                </div>
            </div>
        </div>
    </div>

    <script>
        // Function to send message using #message input
        function sendMessage() {
            let messageInput = document.getElementById("message");
            let message = messageInput.value;

            if (message.trim() === "") return;

            let chatBox = document.getElementById("chat-box");

            // Add User Message
            chatBox.innerHTML += `<div class="message user-message">${message}</div>`;

            // Clear input
            messageInput.value = "";
            chatBox.scrollTop = chatBox.scrollHeight;

            fetch('/chat/ask', {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json",
                        "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute("content")
                    },
                    body: JSON.stringify({ message: message })
                })
                .then(res => res.json())
                .then(data => {
                    // Add AI Message
                    chatBox.innerHTML += `<div class="message ai-message">${data.answer}</div>`;
                    chatBox.scrollTop = chatBox.scrollHeight;
                })
                .catch(err => {
                    chatBox.innerHTML += `<div class="message ai-message">Error communicating with server.</div>`;
                    console.error("Error:", err);
                });
        }

        // Function to send message using #question input style (legacy)
        function sendQuestion() {
            let question = document.getElementById('question')?.value.trim();
            if (!question) return;

            let chatBox = document.getElementById('chat-box');

            // Show user question
            chatBox.innerHTML += `<div class="message user-message">${question}</div>`;

            fetch("/chat/ask", {
                method: "POST",
                headers: {
                    "Content-Type": "application/json",
                    "X-CSRF-TOKEN": document.querySelector('meta[name="csrf-token"]').getAttribute("content")
                },
                body: JSON.stringify({ message: question })
            })
            .then(res => res.json())
            .then(data => {
                chatBox.innerHTML += `<div class="message ai-message">${data.answer}</div>`;
                if (document.getElementById('question')) {
                    document.getElementById('question').value = "";
                }
                chatBox.scrollTop = chatBox.scrollHeight; // auto scroll
            })
            .catch(err => {
                chatBox.innerHTML += `<div class="message ai-message">Error communicating with server.</div>`;
                console.error(err);
            });
        }

        // Press Enter to send
        document.getElementById("message").addEventListener("keypress", function(event) {
            if (event.key === "Enter") {
                sendMessage();
            }
        });
    </script>

</body>

</html>
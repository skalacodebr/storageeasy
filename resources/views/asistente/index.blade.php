@include('layouts/head-main')

<head>
    <title>Assistente | Storage Easy</title>

    @include('layouts/head')
    @include('layouts/head-style')

    <style>
        body {
            background-color: #1a1a1a;
            color: #ffffff;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
        }

        .assistant-container {
            height: 100%;
            display: flex;
            flex-direction: column;
            background-color: #1a1a1a;
        }

        .assistant-header {
            background-color: #2a2a2a;
            border-bottom: 1px solid #3a3a3a;
            padding: 20px 24px;
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .assistant-icon {
            width: 32px;
            height: 32px;
            background-color: #f59e0b;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #1a1a1a;
            font-weight: 600;
            font-size: 16px;
        }

        .assistant-title {
            font-size: 20px;
            font-weight: 600;
            color: #ffffff;
            margin: 0;
        }

        .assistant-subtitle {
            font-size: 14px;
            color: #888;
            margin: 4px 0 0 0;
        }

        .chat-container {
            flex: 1;
            display: flex;
            flex-direction: column;
            overflow: hidden;
        }

        .chat-messages {
            flex: 1;
            overflow-y: auto;
            padding: 24px;
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        .welcome-message {
            text-align: center;
            padding: 60px 24px;
            max-width: 600px;
            margin: 0 auto;
        }

        .welcome-icon {
            width: 80px;
            height: 80px;
            background-color: #2a2a2a;
            border-radius: 16px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 24px auto;
            border: 1px solid #3a3a3a;
        }

        .welcome-title {
            font-size: 24px;
            font-weight: 600;
            color: #ffffff;
            margin: 0 0 12px 0;
        }

        .welcome-description {
            font-size: 16px;
            color: #888;
            line-height: 1.5;
            margin: 0;
        }

        .message {
            display: flex;
            gap: 12px;
            max-width: 80%;
            animation: fadeIn 0.3s ease-in;
        }

        .message.user {
            align-self: flex-end;
            flex-direction: row-reverse;
        }

        .message.assistant {
            align-self: flex-start;
        }

        .message-avatar {
            width: 32px;
            height: 32px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: 600;
            font-size: 14px;
            flex-shrink: 0;
        }

        .message.user .message-avatar {
            background-color: #3a3a3a;
            color: #ffffff;
        }

        .message.assistant .message-avatar {
            background-color: #f59e0b;
            color: #1a1a1a;
        }

        .message-content {
            background-color: #2a2a2a;
            border: 1px solid #3a3a3a;
            border-radius: 12px;
            padding: 12px 16px;
            font-size: 14px;
            line-height: 1.5;
            word-wrap: break-word;
        }

        .message.user .message-content {
            background-color: #f59e0b;
            color: #1a1a1a;
            border-color: #f59e0b;
        }

        .message.assistant .message-content {
            background-color: #2a2a2a;
            color: #ffffff;
            border-color: #3a3a3a;
        }

        .chat-input-container {
            background-color: #2a2a2a;
            border-top: 1px solid #3a3a3a;
            padding: 20px 24px;
        }

        .chat-input-wrapper {
            position: relative;
            max-width: 800px;
            margin: 0 auto;
        }

        .chat-input {
            width: 100%;
            background-color: #1a1a1a;
            border: 1px solid #3a3a3a;
            border-radius: 12px;
            padding: 12px 50px 12px 16px;
            color: #ffffff;
            font-size: 14px;
            resize: none;
            min-height: 44px;
            max-height: 120px;
            outline: none;
            transition: all 0.3s ease;
        }

        .chat-input:focus {
            border-color: #f59e0b;
            box-shadow: 0 0 0 3px rgba(245, 158, 11, 0.1);
        }

        .chat-input::placeholder {
            color: #666;
        }

        .send-button {
            position: absolute;
            right: 8px;
            top: 50%;
            transform: translateY(-50%);
            background-color: #f59e0b;
            border: none;
            border-radius: 8px;
            width: 36px;
            height: 36px;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            transition: all 0.3s ease;
            color: #1a1a1a;
        }

        .send-button:hover {
            background-color: #d97706;
        }

        .send-button:disabled {
            background-color: #3a3a3a;
            color: #666;
            cursor: not-allowed;
        }

        .typing-indicator {
            display: none;
            align-items: center;
            gap: 12px;
            max-width: 80%;
            animation: fadeIn 0.3s ease-in;
        }

        .typing-dots {
            background-color: #2a2a2a;
            border: 1px solid #3a3a3a;
            border-radius: 12px;
            padding: 12px 16px;
            display: flex;
            gap: 4px;
        }

        .typing-dot {
            width: 6px;
            height: 6px;
            background-color: #666;
            border-radius: 50%;
            animation: typing 1.4s infinite;
        }

        .typing-dot:nth-child(2) {
            animation-delay: 0.2s;
        }

        .typing-dot:nth-child(3) {
            animation-delay: 0.4s;
        }

        @keyframes typing {
            0%, 60%, 100% {
                opacity: 0.3;
            }
            30% {
                opacity: 1;
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Scrollbar customization */
        .chat-messages::-webkit-scrollbar {
            width: 6px;
        }

        .chat-messages::-webkit-scrollbar-track {
            background: #1a1a1a;
        }

        .chat-messages::-webkit-scrollbar-thumb {
            background: #3a3a3a;
            border-radius: 3px;
        }

        .chat-messages::-webkit-scrollbar-thumb:hover {
            background: #4a4a4a;
        }

        .page-content {
            padding: calc(70px + 24px) calc(24px / 2) 0px calc(24px / 2);
        }

        /* Mobile responsiveness */
        @media (max-width: 768px) {
            .assistant-header {
                padding: 16px 20px;
            }

            .chat-messages {
                padding: 16px 20px;
            }

            .chat-input-container {
                padding: 16px 20px;
            }

            .message {
                max-width: 90%;
            }

            .welcome-message {
                padding: 40px 20px;
            }

            .welcome-icon {
                width: 60px;
                height: 60px;
            }

            .welcome-title {
                font-size: 20px;
            }

            .welcome-description {
                font-size: 14px;
            }
        }
    </style>
</head>

<body>
    @include('layouts/body')
    @include('layouts/menu')
    
    <div id="layout-wrapper" style="height: 100vh;padding-bottom: 15px;">
        <div class="main-content" style="height: 100%;">
            <div class="page-content" style="height: 100%;">
                <div class="container-fluid" style="padding: 0; height: 100%;">
                    
                    <div class="assistant-container">
                        <!-- Header -->
                        <div class="assistant-header">
                            <div class="assistant-icon">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M12 2L2 7v10c0 5.55 3.84 9.74 9 11 5.16-1.26 9-5.45 9-11V7l-10-5z" fill="currentColor"/>
                                </svg>
                            </div>
                            <div>
                                <h1 class="assistant-title">Assistente JLC</h1>
                                <p class="assistant-subtitle">Converse com o assistente para obter informações sobre clientes, eventos, roteiros, orçamentos, finanças e equipe.</p>
                            </div>
                        </div>

                        <!-- Chat Container -->
                        <div class="chat-container">
                            <!-- Messages -->
                            <div class="chat-messages" id="chatMessages">
                                <!-- Welcome Message -->
                                <div class="welcome-message">
                                    <div class="welcome-icon">
                                        <svg width="32" height="32" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 2L2 7v10c0 5.55 3.84 9.74 9 11 5.16-1.26 9-5.45 9-11V7l-10-5z" stroke="currentColor" stroke-width="2"/>
                                        </svg>
                                    </div>
                                    <h2 class="welcome-title">Como posso ajudar você hoje?</h2>
                                    <p class="welcome-description">Faça perguntas sobre clientes, eventos, roteiros, orçamentos, finanças ou equipe.</p>
                                </div>

                                <!-- Typing Indicator -->
                                <div class="typing-indicator" id="typingIndicator">
                                    <div class="message-avatar">
                                        JLC
                                    </div>
                                    <div class="typing-dots">
                                        <div class="typing-dot"></div>
                                        <div class="typing-dot"></div>
                                        <div class="typing-dot"></div>
                                    </div>
                                </div>
                            </div>

                            <!-- Input -->
                            <div class="chat-input-container">
                                <div class="chat-input-wrapper">
                                    <textarea 
                                        class="chat-input" 
                                        id="chatInput" 
                                        placeholder="Digite sua mensagem..."
                                        rows="1"
                                    ></textarea>
                                    <button class="send-button" id="sendButton">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M22 2L11 13" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M22 2L15 22L11 13L2 9L22 2Z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

    @include('layouts/vendor-scripts')

    <script>
        // Chat functionality
        const chatMessages = document.getElementById('chatMessages');
        const chatInput = document.getElementById('chatInput');
        const sendButton = document.getElementById('sendButton');
        const typingIndicator = document.getElementById('typingIndicator');

        // Auto-resize textarea
        chatInput.addEventListener('input', function() {
            this.style.height = 'auto';
            this.style.height = Math.min(this.scrollHeight, 120) + 'px';
            
            // Enable/disable send button
            sendButton.disabled = this.value.trim() === '';
        });

        // Send message on Enter (but allow Shift+Enter for new lines)
        chatInput.addEventListener('keydown', function(e) {
            if (e.key === 'Enter' && !e.shiftKey) {
                e.preventDefault();
                sendMessage();
            }
        });

        // Send button click
        sendButton.addEventListener('click', sendMessage);

        function sendMessage() {
            const message = chatInput.value.trim();
            if (!message) return;

            // Add user message
            addMessage(message, 'user');
            
            // Clear input
            chatInput.value = '';
            chatInput.style.height = 'auto';
            sendButton.disabled = true;

            // Show typing indicator
            showTypingIndicator();

            // Simulate assistant response
            setTimeout(() => {
                hideTypingIndicator();
                const response = generateResponse(message);
                addMessage(response, 'assistant');
            }, 1500 + Math.random() * 1000);
        }

        function addMessage(content, type) {
            // Hide welcome message if it exists
            const welcomeMessage = document.querySelector('.welcome-message');
            if (welcomeMessage) {
                welcomeMessage.style.display = 'none';
            }

            const messageDiv = document.createElement('div');
            messageDiv.className = `message ${type}`;
            
            const avatar = document.createElement('div');
            avatar.className = 'message-avatar';
            avatar.textContent = type === 'user' ? 'U' : 'JLC';
            
            const messageContent = document.createElement('div');
            messageContent.className = 'message-content';
            messageContent.textContent = content;
            
            messageDiv.appendChild(avatar);
            messageDiv.appendChild(messageContent);
            
            chatMessages.appendChild(messageDiv);
            scrollToBottom();
        }

        function showTypingIndicator() {
            typingIndicator.style.display = 'flex';
            scrollToBottom();
        }

        function hideTypingIndicator() {
            typingIndicator.style.display = 'none';
        }

        function scrollToBottom() {
            chatMessages.scrollTop = chatMessages.scrollHeight;
        }

        function generateResponse(message) {
            const lowerMessage = message.toLowerCase();
            
            // Simple response logic - in a real app, this would connect to an AI service
            if (lowerMessage.includes('cliente') || lowerMessage.includes('clientes')) {
                return 'Posso ajudar você com informações sobre clientes. Você gostaria de saber sobre um cliente específico, criar um novo cliente ou ver a lista de clientes?';
            } else if (lowerMessage.includes('evento') || lowerMessage.includes('eventos')) {
                return 'Sobre eventos, posso ajudar você a criar novos eventos, consultar eventos existentes, verificar a agenda ou gerenciar detalhes de eventos específicos. O que você precisa?';
            } else if (lowerMessage.includes('orçamento') || lowerMessage.includes('orçamentos')) {
                return 'Para orçamentos, posso ajudar você a criar novos orçamentos, consultar orçamentos existentes, calcular valores ou converter orçamentos em contratos. Como posso ajudar?';
            } else if (lowerMessage.includes('financ') || lowerMessage.includes('dinheiro') || lowerMessage.includes('pagamento')) {
                return 'Sobre finanças, posso ajudar com relatórios financeiros, controle de pagamentos, análise de receitas e despesas. Qual informação financeira você precisa?';
            } else if (lowerMessage.includes('equipe') || lowerMessage.includes('funcionário') || lowerMessage.includes('staff')) {
                return 'Sobre a equipe, posso ajudar com informações sobre funcionários, escalas de trabalho, responsabilidades e contatos da equipe. O que você gostaria de saber?';
            } else if (lowerMessage.includes('roteiro') || lowerMessage.includes('roteiros')) {
                return 'Para roteiros, posso ajudar você a criar roteiros de eventos, consultar roteiros existentes ou modificar detalhes de roteiros. Como posso ajudar?';
            } else if (lowerMessage.includes('oi') || lowerMessage.includes('olá') || lowerMessage.includes('hello')) {
                return 'Olá! Sou o Assistente JLC e estou aqui para ajudar você com informações sobre clientes, eventos, roteiros, orçamentos, finanças e equipe. Como posso ajudar você hoje?';
            } else if (lowerMessage.includes('obrigado') || lowerMessage.includes('obrigada') || lowerMessage.includes('valeu')) {
                return 'De nada! Fico feliz em ajudar. Se precisar de mais alguma coisa, é só perguntar!';
            } else {
                return 'Entendi sua pergunta. Posso ajudar você com informações sobre clientes, eventos, roteiros, orçamentos, finanças e equipe. Pode ser mais específico sobre o que você precisa?';
            }
        }

        // Initialize
        document.addEventListener('DOMContentLoaded', function() {
            chatInput.focus();
            sendButton.disabled = true;
        });
    </script>

</body>
</html>

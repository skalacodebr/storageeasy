@include('layouts/head-main')

<head>
    <title>Assinatura de Contrato</title>

    @include('layouts/head')
    @include('layouts/head-style')

    <style>
        body {
            background-color: #1a1a1a;
            color: #ffffff;
            font-family: 'Inter', sans-serif;
        }

        .container-fluid {
            padding: 40px 20px;
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        /* Logo */
        .logo-container {
            text-align: center;
            margin-bottom: 40px;
        }

        .logo {
            width: 120px;
            height: auto;
            margin-bottom: 20px;
        }

        /* Page Content */
        .page-content-container {
            max-width: 800px;
            width: 100%;
        }

        .page-title {
            font-size: 32px;
            font-weight: 700;
            color: #ffffff;
            text-align: center;
            margin-bottom: 8px;
        }

        .page-subtitle {
            font-size: 16px;
            color: #888;
            text-align: center;
            margin-bottom: 40px;
        }

        /* Event Details Card */
        .event-details {
            background-color: rgba(42, 42, 42, 0.8);
            border-radius: 12px;
            padding: 24px;
            border: 1px solid #3a3a3a;
            margin-bottom: 32px;
        }

        .section-title {
            font-size: 20px;
            font-weight: 600;
            color: #ffffff;
            margin-bottom: 20px;
        }

        .event-info {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 24px;
            margin-bottom: 20px;
        }

        .info-item {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .info-label {
            color: #f59e0b;
            font-weight: 600;
            font-size: 14px;
        }

        .info-value {
            color: #ffffff;
            font-size: 14px;
        }

        .event-date {
            grid-column: 1 / -1;
        }

        /* Contract Terms */
        .contract-terms {
            background-color: rgba(42, 42, 42, 0.8);
            border-radius: 12px;
            padding: 24px;
            border: 1px solid #3a3a3a;
            margin-bottom: 32px;
        }

        .terms-text {
            color: #cccccc;
            line-height: 1.6;
            font-size: 14px;
            margin-bottom: 16px;
        }

        .highlight-text {
            color: #f59e0b;
            font-weight: 600;
        }

        /* Sign Button */
        .sign-btn {
            width: 100%;
            background-color: #f59e0b;
            color: #1a1a1a;
            border: none;
            padding: 16px 24px;
            border-radius: 8px;
            font-weight: 600;
            font-size: 16px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            transition: all 0.3s ease;
            text-decoration: none;
            margin-bottom: 16px;
        }

        .sign-btn:hover {
            background-color: #d97706;
            color: #1a1a1a;
        }

        .legal-text {
            text-align: center;
            color: #666;
            font-size: 12px;
            line-height: 1.4;
        }

        /* Camera Modal */
        .camera-overlay {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.95);
            z-index: 10000;
            display: none;
            align-items: center;
            justify-content: center;
            flex-direction: column;
        }

        .camera-container {
            text-align: center;
            width: 100%;
            max-width: 600px;
            padding: 20px;
        }

        .camera-title {
            font-size: 24px;
            font-weight: 600;
            color: #ffffff;
            margin-bottom: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
        }

        .camera-subtitle {
            color: #888;
            margin-bottom: 40px;
            font-size: 16px;
        }

        .camera-video {
            width: 100%;
            max-width: 555px;
            border-radius: 12px;
            margin-bottom: 20px;
            border: 3px solid #f59e0b;
        }

        .face-guide {
            position: relative;
            display: inline-block;
            margin-bottom: 20px;
        }

        .face-circle {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 200px;
            height: 200px;
            border: 3px solid #f59e0b;
            border-radius: 50%;
            pointer-events: none;
        }

        .guide-text {
            color: #cccccc;
            margin-bottom: 30px;
            font-size: 14px;
        }

        .camera-buttons {
            display: flex;
            gap: 16px;
            justify-content: center;
            align-items: center;
        }

        .capture-btn {
            background-color: #f59e0b;
            color: #1a1a1a;
            border: none;
            padding: 12px 24px;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: all 0.3s ease;
        }

        .capture-btn:hover {
            background-color: #d97706;
        }

        .close-camera-btn {
            background-color: #3a3a3a;
            color: #ffffff;
            border: none;
            padding: 12px;
            border-radius: 8px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .close-camera-btn:hover {
            background-color: #4a4a4a;
        }

        /* Signature Modal */
        .signature-overlay {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.95);
            z-index: 10000;
            display: none;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .signature-container {
            background-color: #2a2a2a;
            border-radius: 12px;
            padding: 24px;
            width: 100%;
            max-width: 600px;
            border: 1px solid #3a3a3a;
        }

        .signature-title {
            font-size: 20px;
            font-weight: 600;
            color: #ffffff;
            margin-bottom: 16px;
            text-align: center;
        }

        .signature-instruction {
            color: #888;
            text-align: center;
            margin-bottom: 8px;
            font-size: 14px;
        }

        .signature-highlight {
            color: #f59e0b;
            text-align: center;
            margin-bottom: 20px;
            font-size: 14px;
            font-weight: 600;
        }

        .signature-canvas {
            width: 100%;
            height: 200px;
            border: 2px solid #4a4a4a;
            border-radius: 8px;
            background-color: #ffffff;
            cursor: crosshair;
            margin-bottom: 16px;
        }

        .signature-buttons {
            display: flex;
            gap: 12px;
            justify-content: center;
        }

        .clear-btn {
            background-color: #ef4444;
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            border-radius: 6px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .clear-btn:hover {
            background-color: #dc2626;
        }

        .confirm-signature-btn {
            background-color: #22c55e;
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            border-radius: 6px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .confirm-signature-btn:hover {
            background-color: #16a34a;
        }

        /* Success Page */
        .success-container {
            text-align: center;
            display: none;
        }

        .success-card {
            background-color: rgba(34, 197, 94, 0.1);
            border: 2px solid rgba(34, 197, 94, 0.3);
            border-radius: 12px;
            padding: 32px;
            margin-bottom: 32px;
        }

        .success-icon {
            width: 64px;
            height: 64px;
            margin: 0 auto 16px;
            color: #22c55e;
        }

        .success-title {
            font-size: 24px;
            font-weight: 700;
            color: #22c55e;
            margin-bottom: 8px;
        }

        .success-message {
            color: #22c55e;
            margin-bottom: 8px;
            font-size: 16px;
        }

        .success-date {
            color: #22c55e;
            font-size: 14px;
        }

        .confirmation-photo {
            background-color: rgba(42, 42, 42, 0.8);
            border-radius: 12px;
            padding: 24px;
            border: 1px solid #3a3a3a;
            margin-bottom: 32px;
        }

        .photo-title {
            font-size: 18px;
            font-weight: 600;
            color: #ffffff;
            margin-bottom: 16px;
            text-align: center;
        }

        .captured-photo {
            width: 100%;
            height: 300px;
            border-radius: 8px;
            margin: 0 auto;
            display: block;
            border: 3px solid #22c55e;
        }

        .next-steps {
            background-color: rgba(42, 42, 42, 0.8);
            border-radius: 12px;
            padding: 24px;
            border: 1px solid #3a3a3a;
            margin-bottom: 32px;
        }

        .steps-title {
            font-size: 18px;
            font-weight: 600;
            color: #ffffff;
            margin-bottom: 16px;
            text-align: center;
        }

        .thank-you-message {
            color: #f59e0b;
            font-size: 16px;
            font-weight: 600;
            text-align: center;
        }

        /* Responsividade */
        @media (max-width: 768px) {
            .event-info {
                grid-template-columns: 1fr;
                gap: 16px;
            }

            .camera-video {
                max-width: 300px;
            }

            .face-circle {
                width: 150px;
                height: 150px;
            }

            .camera-buttons {
                flex-direction: column;
            }
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        
        <!-- Logo -->
        <div class="logo-container">
            <img src="{{ asset('assets/images/jlc-logo-web.png') }}" alt="João Luiz Correa" class="logo">
        </div>

        <!-- Main Content -->
        <div class="page-content-container" id="mainContent">
            <h1 class="page-title">Assinatura de Contrato</h1>
            <p class="page-subtitle">Revise os detalhes do contrato e assine abaixo</p>

            <!-- Event Details -->
            <div class="event-details">
                <h2 class="section-title">Detalhes do Evento</h2>
                <div class="event-info">
                    <div class="info-item">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2" stroke="#f59e0b" stroke-width="2"/>
                            <line x1="16" y1="2" x2="16" y2="6" stroke="#f59e0b" stroke-width="2"/>
                            <line x1="8" y1="2" x2="8" y2="6" stroke="#f59e0b" stroke-width="2"/>
                            <line x1="3" y1="10" x2="21" y2="10" stroke="#f59e0b" stroke-width="2"/>
                        </svg>
                        <span class="info-label">Evento</span>
                        <span class="info-value">Show em undefined</span>
                    </div>
                    <div class="info-item">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2" stroke="#f59e0b" stroke-width="2"/>
                            <circle cx="12" cy="7" r="4" stroke="#f59e0b" stroke-width="2"/>
                        </svg>
                        <span class="info-label">Cliente</span>
                        <span class="info-value">Clip</span>
                    </div>
                    <div class="info-item event-date">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2" stroke="#f59e0b" stroke-width="2"/>
                            <line x1="16" y1="2" x2="16" y2="6" stroke="#f59e0b" stroke-width="2"/>
                            <line x1="8" y1="2" x2="8" y2="6" stroke="#f59e0b" stroke-width="2"/>
                            <line x1="3" y1="10" x2="21" y2="10" stroke="#f59e0b" stroke-width="2"/>
                        </svg>
                        <span class="info-label">Data do Evento</span>
                        <span class="info-value">09 de junho de 2025</span>
                    </div>
                </div>
            </div>

            <!-- Contract Terms -->
            <div class="contract-terms">
                <h2 class="section-title">Termos do Contrato</h2>
                <p class="terms-text">
                    Este contrato estabelece os termos e condições para a prestação de serviços musicais 
                    pelo artista João Luiz Correa no evento acima mencionado.
                </p>
                <p class="terms-text">
                    Ao assinar este contrato, o cliente concorda com todas as condições estabelecidas, 
                    incluindo valores, horários, condições técnicas e logísticas previamente acordadas.
                </p>
                <p class="terms-text">
                    O não cumprimento das condições estabelecidas por qualquer uma das partes poderá 
                    resultar em penalidades conforme descrito nos termos completos do contrato.
                </p>
                <p class="terms-text highlight-text">
                    Após a assinatura, será necessário tirar uma foto para confirmar sua identidade.
                </p>
            </div>

            <!-- Sign Button -->
            <button class="sign-btn" onclick="startSigningProcess()">
                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" stroke="currentColor" stroke-width="2"/>
                    <polyline points="14,2 14,8 20,8" stroke="currentColor" stroke-width="2"/>
                    <line x1="16" y1="13" x2="8" y2="13" stroke="currentColor" stroke-width="2"/>
                    <line x1="16" y1="17" x2="8" y2="17" stroke="currentColor" stroke-width="2"/>
                    <polyline points="10,9 9,9 8,9" stroke="currentColor" stroke-width="2"/>
                </svg>
                Assinar Contrato
            </button>

            <p class="legal-text">
                Este é um documento legal. Ao assinar, você concorda com todos os termos e condições estabelecidos. Sua identidade será 
                confirmada por foto após a assinatura.
            </p>
        </div>

        <!-- Success Page -->
        <div class="success-container" id="successContent">
            <div class="success-card">
                <svg class="success-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14" stroke="currentColor" stroke-width="2"/>
                    <polyline points="22,4 12,14.01 9,11.01" stroke="currentColor" stroke-width="2"/>
                </svg>
                <h1 class="success-title">Contrato Assinado com Sucesso!</h1>
                <p class="success-message">Sua assinatura foi registrada e sua identidade foi confirmada por foto</p>
                <p class="success-date">Assinado em 16 de junho de 2025</p>
            </div>

            <div class="event-details">
                <h2 class="section-title">Detalhes do Evento</h2>
                <div class="event-info">
                    <div class="info-item">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2" stroke="#f59e0b" stroke-width="2"/>
                            <line x1="16" y1="2" x2="16" y2="6" stroke="#f59e0b" stroke-width="2"/>
                            <line x1="8" y1="2" x2="8" y2="6" stroke="#f59e0b" stroke-width="2"/>
                            <line x1="3" y1="10" x2="21" y2="10" stroke="#f59e0b" stroke-width="2"/>
                        </svg>
                        <span class="info-label">Evento</span>
                        <span class="info-value">Show em undefined</span>
                    </div>
                    <div class="info-item">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2" stroke="#f59e0b" stroke-width="2"/>
                            <circle cx="12" cy="7" r="4" stroke="#f59e0b" stroke-width="2"/>
                        </svg>
                        <span class="info-label">Cliente</span>
                        <span class="info-value">Clip</span>
                    </div>
                    <div class="info-item event-date">
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2" stroke="#f59e0b" stroke-width="2"/>
                            <line x1="16" y1="2" x2="16" y2="6" stroke="#f59e0b" stroke-width="2"/>
                            <line x1="8" y1="2" x2="8" y2="6" stroke="#f59e0b" stroke-width="2"/>
                            <line x1="3" y1="10" x2="21" y2="10" stroke="#f59e0b" stroke-width="2"/>
                        </svg>
                        <span class="info-label">Data do Evento</span>
                        <span class="info-value">09 de junho de 2025</span>
                    </div>
                </div>
            </div>

            <div class="confirmation-photo">
                <h3 class="photo-title">Foto de Confirmação</h3>
                <img class="captured-photo" id="finalPhoto" src="" alt="Foto de confirmação">
            </div>

            <div class="next-steps">
                <h3 class="steps-title">Próximos Passos</h3>
                <p class="thank-you-message">Obrigado por escolher nossos serviços!</p>
            </div>
        </div>
    </div>

    <!-- Camera Modal -->
    <div class="camera-overlay" id="cameraModal">
        <div class="camera-container">
            <h2 class="camera-title">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z" stroke="currentColor" stroke-width="2"/>
                    <circle cx="12" cy="13" r="4" stroke="currentColor" stroke-width="2"/>
                </svg>
                Confirmar Identidade
            </h2>
            <p class="camera-subtitle">Tire uma foto do seu rosto para confirmar a assinatura do contrato</p>
            
            <div class="face-guide">
                <video class="camera-video" id="cameraVideo" autoplay muted></video>
                <div class="face-circle"></div>
            </div>
            
            <p class="guide-text">Posicione seu rosto dentro do círculo</p>
            
            <div class="camera-buttons">
                <button class="capture-btn" onclick="capturePhoto()">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z" stroke="currentColor" stroke-width="2"/>
                        <circle cx="12" cy="13" r="4" stroke="currentColor" stroke-width="2"/>
                    </svg>
                    Capturar Foto
                </button>
                <button class="close-camera-btn" onclick="closeCameraModal()">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <line x1="18" y1="6" x2="6" y2="18" stroke="currentColor" stroke-width="2"/>
                        <line x1="6" y1="6" x2="18" y2="18" stroke="currentColor" stroke-width="2"/>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Signature Modal -->
    <div class="signature-overlay" id="signatureModal">
        <div class="signature-container">
            <h3 class="signature-title">Sua Assinatura</h3>
            <p class="signature-instruction">Assine no campo abaixo usando o mouse ou o dedo (em dispositivos touch).</p>
            <p class="signature-highlight">Após confirmar a assinatura, você será solicitado a tirar uma foto para confirmar sua identidade.</p>
            
            <canvas class="signature-canvas" id="signatureCanvas"></canvas>
            
            <div class="signature-buttons">
                <button class="clear-btn" onclick="clearSignature()">Limpar</button>
                <button class="confirm-signature-btn" onclick="confirmSignature()">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <polyline points="20,6 9,17 4,12" stroke="currentColor" stroke-width="2"/>
                    </svg>
                    Confirmar Assinatura
                </button>
            </div>
        </div>
    </div>

    @include('layouts/vendor-scripts')

    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        let canvas, ctx;
        let isDrawing = false;
        let stream;
        let capturedPhotoData;

        // Inicializar canvas de assinatura
        function initSignatureCanvas() {
            canvas = document.getElementById('signatureCanvas');
            ctx = canvas.getContext('2d');
            
            // Ajustar tamanho do canvas
            canvas.width = canvas.offsetWidth;
            canvas.height = canvas.offsetHeight;
            
            // Configurar estilo de desenho
            ctx.strokeStyle = '#000000';
            ctx.lineWidth = 2;
            ctx.lineCap = 'round';
            
            // Eventos de mouse
            canvas.addEventListener('mousedown', startDrawing);
            canvas.addEventListener('mousemove', draw);
            canvas.addEventListener('mouseup', stopDrawing);
            canvas.addEventListener('mouseout', stopDrawing);
            
            // Eventos de touch
            canvas.addEventListener('touchstart', handleTouch);
            canvas.addEventListener('touchmove', handleTouch);
            canvas.addEventListener('touchend', stopDrawing);
        }

        function startDrawing(e) {
            isDrawing = true;
            const rect = canvas.getBoundingClientRect();
            ctx.beginPath();
            ctx.moveTo(e.clientX - rect.left, e.clientY - rect.top);
        }

        function draw(e) {
            if (!isDrawing) return;
            const rect = canvas.getBoundingClientRect();
            ctx.lineTo(e.clientX - rect.left, e.clientY - rect.top);
            ctx.stroke();
        }

        function stopDrawing() {
            isDrawing = false;
            ctx.beginPath();
        }

        function handleTouch(e) {
            e.preventDefault();
            const touch = e.touches[0];
            const rect = canvas.getBoundingClientRect();
            
            if (e.type === 'touchstart') {
                isDrawing = true;
                ctx.beginPath();
                ctx.moveTo(touch.clientX - rect.left, touch.clientY - rect.top);
            } else if (e.type === 'touchmove' && isDrawing) {
                ctx.lineTo(touch.clientX - rect.left, touch.clientY - rect.top);
                ctx.stroke();
            }
        }

        function clearSignature() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
        }

        function startSigningProcess() {
            document.getElementById('signatureModal').style.display = 'flex';
            setTimeout(initSignatureCanvas, 100);
        }

        function confirmSignature() {
            // Verificar se há assinatura
            const imageData = ctx.getImageData(0, 0, canvas.width, canvas.height);
            const pixelData = imageData.data;
            let hasDrawing = false;
            
            for (let i = 0; i < pixelData.length; i += 4) {
                if (pixelData[i + 3] > 0) {
                    hasDrawing = true;
                    break;
                }
            }
            
            if (!hasDrawing) {
                Swal.fire({
                    title: 'Assinatura Necessária',
                    text: 'Por favor, assine no campo antes de confirmar.',
                    icon: 'warning',
                    confirmButtonColor: '#f59e0b',
                    confirmButtonText: 'OK',
                    background: '#2a2a2a',
                    color: '#ffffff'
                });
                return;
            }
            
            // Fechar modal de assinatura e abrir câmera
            document.getElementById('signatureModal').style.display = 'none';
            openCameraModal();
        }

        async function openCameraModal() {
            try {
                stream = await navigator.mediaDevices.getUserMedia({ 
                    video: { 
                        width: { ideal: 1280 },
                        height: { ideal: 720 },
                        facingMode: 'user'
                    } 
                });
                
                const video = document.getElementById('cameraVideo');
                video.srcObject = stream;
                document.getElementById('cameraModal').style.display = 'flex';
            } catch (error) {
                console.error('Erro ao acessar a câmera:', error);
                Swal.fire({
                    title: 'Erro na Câmera',
                    text: 'Não foi possível acessar a câmera. Verifique as permissões.',
                    icon: 'error',
                    confirmButtonColor: '#f59e0b',
                    confirmButtonText: 'OK',
                    background: '#2a2a2a',
                    color: '#ffffff'
                });
            }
        }

        function capturePhoto() {
            const video = document.getElementById('cameraVideo');
            const tempCanvas = document.createElement('canvas');
            const tempCtx = tempCanvas.getContext('2d');
            
            tempCanvas.width = video.videoWidth;
            tempCanvas.height = video.videoHeight;
            tempCtx.drawImage(video, 0, 0);
            
            capturedPhotoData = tempCanvas.toDataURL('image/jpeg', 0.8);
            
            // Fechar câmera e mostrar sucesso
            closeCameraModal();
            showSuccessPage();
        }

        function closeCameraModal() {
            if (stream) {
                stream.getTracks().forEach(track => track.stop());
            }
            document.getElementById('cameraModal').style.display = 'none';
        }

        function showSuccessPage() {
            document.getElementById('mainContent').style.display = 'none';
            
            // Definir foto capturada
            if (capturedPhotoData) {
                document.getElementById('finalPhoto').src = capturedPhotoData;
            }
            
            document.getElementById('successContent').style.display = 'block';
        }

        // Fechar modal ao clicar fora
        document.getElementById('signatureModal').addEventListener('click', function(e) {
            if (e.target === this) {
                this.style.display = 'none';
            }
        });

        document.getElementById('cameraModal').addEventListener('click', function(e) {
            if (e.target === this) {
                closeCameraModal();
            }
        });
    </script>

 </body>
 </html>

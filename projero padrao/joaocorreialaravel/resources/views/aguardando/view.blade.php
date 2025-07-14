@include('layouts/head-main')

<head>
    <title>Visualizar Aguardando</title>

    @include('layouts/head')
    @include('layouts/head-style')

    <style>
        body {
            background-color: #1a1a1a;
            color: #ffffff;
        }

        .page-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 32px;
            padding: 0 24px;
        }

        .header-left {
            display: flex;
            align-items: center;
            gap: 16px;
        }

        .back-btn {
            background: none;
            border: none;
            color: #ffffff;
            cursor: pointer;
            padding: 8px;
            border-radius: 4px;
            transition: all 0.3s ease;
        }

        .back-btn:hover {
            background-color: #3a3a3a;
        }

        .page-title {
            font-size: 32px;
            font-weight: 600;
            color: #ffffff;
            margin: 0;
        }

        .header-actions {
            display: flex;
            gap: 12px;
        }

        .action-btn {
            background-color: transparent;
            border: 1px solid #f59e0b;
            color: #f59e0b;
            padding: 10px 20px;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 500;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: all 0.3s ease;
            text-decoration: none;
        }

        .action-btn:hover {
            background-color: #f59e0b;
            color: #1a1a1a;
        }

        .action-btn.primary {
            background-color: #f59e0b;
            color: #1a1a1a;
        }

        .action-btn.primary:hover {
            background-color: #d97706;
        }

        .form-container {
            background-color: rgba(42, 42, 42, 0);
            border-radius: 12px;
            padding: 24px;
            border: 1px solid #3a3a3a;
            margin: 0 24px 24px 24px;
        }

        .section-title {
            font-size: 18px;
            font-weight: 600;
            color: #ffffff;
            margin-bottom: 24px;
            padding-bottom: 12px;
            border-bottom: 1px solid #3a3a3a;
        }

        .form-row {
            display: flex;
            gap: 20px;
            margin-bottom: 20px;
        }

        .form-group {
            flex: 1;
        }

        .form-group.full-width {
            flex: 100%;
        }

        .form-label {
            display: block;
            color: #ffffff;
            font-size: 14px;
            font-weight: 500;
            margin-bottom: 8px;
        }

        .required {
            color: #ef4444;
        }

        .form-input {
            width: 100%;
            background-color: #1a1a1a;
            border: 1px solid #3a3a3a;
            color: #ffffff;
            padding: 12px 16px;
            border-radius: 8px;
            font-size: 14px;
            box-sizing: border-box;
        }

        .form-input::placeholder {
            color: #666;
        }

        .form-input:focus {
            outline: none;
            border-color: #f59e0b;
        }

        .form-textarea {
            min-height: 100px;
            resize: vertical;
        }

        .form-select {
            width: 100%;
            background-color: #1a1a1a;
            border: 1px solid #3a3a3a;
            color: #ffffff;
            padding: 12px 16px;
            border-radius: 8px;
            font-size: 14px;
            box-sizing: border-box;
        }

        .form-select:focus {
            outline: none;
            border-color: #f59e0b;
        }

        /* Custom Select with Search */
        .custom-select {
            position: relative;
            width: 100%;
        }

        .select-input {
            width: 100%;
            background-color: #1a1a1a;
            border: 1px solid #3a3a3a;
            color: #ffffff;
            padding: 12px 40px 12px 16px;
            border-radius: 8px;
            font-size: 14px;
            cursor: pointer;
            box-sizing: border-box;
        }

        .select-input:focus {
            outline: none;
            border-color: #f59e0b;
        }

        .select-arrow {
            position: absolute;
            right: 12px;
            top: 50%;
            transform: translateY(-50%);
            color: #888;
            pointer-events: none;
            transition: transform 0.3s ease;
        }

        .select-dropdown {
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            background-color: #2a2a2a;
            border: 1px solid #3a3a3a;
            border-radius: 8px;
            max-height: 200px;
            overflow-y: auto;
            z-index: 1000;
            display: none;
        }

        .select-option {
            padding: 12px 16px;
            color: #ffffff;
            cursor: pointer;
            transition: background-color 0.2s ease;
        }

        .select-option:hover {
            background-color: rgba(245, 158, 11, 0.1);
        }

        .select-option.selected {
            background-color: #f59e0b;
            color: #1a1a1a;
        }

        /* Radio Group Styles */
        .radio-group {
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        .radio-option {
            position: relative;
            padding: 16px;
            border: 1px solid #3a3a3a;
            border-radius: 8px;
            background-color: rgba(42, 42, 42, 0);
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .radio-option:hover {
            border-color: #f59e0b;
        }

        .radio-option.selected {
            border-color: #f59e0b;
            background-color: rgba(245, 158, 11, 0.05);
        }

        .radio-header {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 12px;
        }

        .radio-input {
            width: 18px;
            height: 18px;
            accent-color: #f59e0b;
        }

        .radio-title {
            font-size: 16px;
            font-weight: 600;
            color: #ffffff;
        }

        .radio-content {
            margin-left: 30px;
            display: none;
        }

        .radio-content.active {
            display: block;
        }

        /* Checkbox Group */
        .checkbox-group {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(120px, 1fr));
            gap: 12px;
            margin-top: 12px;
        }

        .checkbox-item {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .checkbox-input {
            width: 16px;
            height: 16px;
            accent-color: #f59e0b;
        }

        .checkbox-label {
            color: #ffffff;
            font-size: 14px;
            cursor: pointer;
        }

        /* Form Actions */
        .form-actions {
            display: flex;
            justify-content: flex-end;
            gap: 12px;
            padding: 24px;
            border-top: 1px solid #3a3a3a;
            margin-top: 32px;
        }

        .btn-cancel {
            background-color: transparent;
            border: 1px solid #666;
            color: #666;
            padding: 12px 24px;
            border-radius: 8px;
            font-size: 14px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .btn-cancel:hover {
            border-color: #888;
            color: #888;
        }

        .btn-save {
            background-color: #f59e0b;
            border: none;
            color: #1a1a1a;
            padding: 12px 24px;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .btn-save:hover {
            background-color: #d97706;
        }

        .container-fluid {
            padding: 24px 0;
        }

        .date-fields {
            display: flex;
            gap: 12px;
            margin-top: 12px;
        }

        .date-field {
            flex: 1;
        }

        .specific-date-fields {
            display: flex;
            gap: 12px;
            margin-top: 12px;
        }

        .day-field {
            flex: 1;
            max-width: 80px;
        }

        .month-field {
            flex: 2;
        }

        .year-field {
            flex: 1;
            max-width: 100px;
        }

        /* View Only Styles */
        .view-item {
            margin-bottom: 20px;
        }

        .view-label {
            color: #888;
            font-size: 14px;
            margin-bottom: 4px;
            font-weight: 500;
        }

        .view-value {
            color: #ffffff;
            font-size: 16px;
            font-weight: 500;
            padding: 8px 0;
        }

        .view-value.empty {
            color: #666;
            font-style: italic;
        }

        .view-row {
            display: flex;
            gap: 40px;
            margin-bottom: 24px;
        }

        .view-group {
            flex: 1;
        }

        .view-group.full-width {
            flex: 100%;
        }

        .date-option-display {
            background-color: rgba(245, 158, 11, 0.1);
            border: 1px solid #f59e0b;
            border-radius: 8px;
            padding: 16px;
            margin-bottom: 12px;
        }

        .date-option-title {
            color: #f59e0b;
            font-size: 16px;
            font-weight: 600;
            margin-bottom: 12px;
        }

        .date-details {
            margin-left: 16px;
        }

        .days-selected {
            display: flex;
            flex-wrap: wrap;
            gap: 8px;
            margin-top: 8px;
        }

        .day-badge {
            background-color: #1a1a1a;
            color: #f59e0b;
            padding: 4px 8px;
            border-radius: 12px;
            font-size: 12px;
            font-weight: 500;
        }
    </style>
</head>

<body>
    @include('layouts/body')
    @include('layouts/menu')
    
    <div id="layout-wrapper">
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid">
                    
                    <!-- Page Header -->
                    <div class="page-header">
                        <div class="header-left">
                            <a href="{{ route('aguardando.index') }}" class="back-btn">
                                <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M19 12H5M12 19l-7-7 7-7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </a>
                            <h1 class="page-title">Visualizar Aguardando</h1>
                        </div>
                        <div class="header-actions">
                            <a href="{{ route('aguardando.edite', 1) }}" class="action-btn primary">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                Editar
                            </a>
                        </div>
                    </div>

                    <!-- Informações do Interesse -->
                    <div class="form-container">    
                        <h2 class="section-title">Informações do Interesse</h2>
                        
                        <div class="view-row">
                            <div class="view-group">
                                <div class="view-item">
                                    <div class="view-label">Cliente</div>
                                    <div class="view-value">Arthur Stein</div>
                                </div>
                            </div>
                            <div class="view-group">
                                <div class="view-item">
                                    <div class="view-label">Tempo do Show</div>
                                    <div class="view-value">Noite Completa (4 horas)</div>
                                </div>
                            </div>
                        </div>

                        <div class="view-row">
                            <div class="view-group full-width">
                                <div class="view-item">
                                    <div class="view-label">Data de Interesse</div>
                                    
                                    <!-- Exemplo: Datas e dias específicos selecionado -->
                                    <div class="date-option-display">
                                        <div class="date-option-title">Datas e dias específicos</div>
                                        <div class="date-details">
                                            <div class="view-label">Dias da semana</div>
                                            <div class="days-selected">
                                                <span class="day-badge">Sexta</span>
                                                <span class="day-badge">Sábado</span>
                                                <span class="day-badge">Domingo</span>
                                            </div>
                                            
                                            <div style="margin-top: 12px;">
                                                <div class="view-label">Período</div>
                                                <div class="view-value">Março de 2025</div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Exemplo alternativo: Final de semana -->
                                    <!-- 
                                    <div class="date-option-display">
                                        <div class="date-option-title">Qualquer final de semana do mês</div>
                                        <div class="date-details">
                                            <div class="view-label">Período</div>
                                            <div class="view-value">Abril de 2025</div>
                                        </div>
                                    </div>
                                    -->

                                    <!-- Exemplo alternativo: Data específica -->
                                    <!-- 
                                    <div class="date-option-display">
                                        <div class="date-option-title">Data específica</div>
                                        <div class="date-details">
                                            <div class="view-label">Data</div>
                                            <div class="view-value">15 de Março de 2025</div>
                                        </div>
                                    </div>
                                    -->
                                </div>
                            </div>
                        </div>

                        <div class="view-row">
                            <div class="view-group full-width">
                                <div class="view-item">
                                    <div class="view-label">Observações</div>
                                    <div class="view-value">Cliente interessado em evento de casamento. Preferência por músicas românticas e sertanejas. Local tem boa acústica e espaço para dança.</div>
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
        console.log('Aguardando view page loaded');
    </script>

</body>
</html>

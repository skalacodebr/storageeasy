@include('layouts/head-main')

<head>
    <title>Editar Aguardando</title>

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

        .page-title {
            font-size: 32px;
            font-weight: 600;
            color: #ffffff;
            margin: 0;
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
                        <h1 class="page-title">Editar Aguardando</h1>
                    </div>

                    <!-- Informações do Interesse -->
                    <div class="form-container">    
                        <h2 class="section-title">Informações do Interesse</h2>
                        
                        <div class="form-row">
                            <div class="form-group">
                                <label class="form-label">Cliente <span class="required">*</span></label>
                                <div class="custom-select">
                                    <input type="text" class="select-input" id="clienteSelect" placeholder="Pesquisar cliente..." readonly>
                                    <svg class="select-arrow" width="16" height="16" viewBox="0 0 24 24" fill="none">
                                        <path d="M6 9l6 6 6-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    <div class="select-dropdown" id="clienteDropdown">
                                        <div class="select-option" data-value="1">Arthur Stein</div>
                                        <div class="select-option" data-value="2">Maria Silva</div>
                                        <div class="select-option" data-value="3">João Santos</div>
                                        <div class="select-option" data-value="4">Ana Costa</div>
                                        <div class="select-option" data-value="5">Pedro Oliveira</div>
                                        <div class="select-option" data-value="6">Julia Ferreira</div>
                                        <div class="select-option" data-value="7">Carlos Rodrigues</div>
                                        <div class="select-option" data-value="8">Beatriz Lima</div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Tempo do Show <span class="required">*</span></label>
                                <select class="form-select" id="tempoShow">
                                    <option value="">Selecione o tempo</option>
                                    <option value="noite-completa">Noite Completa (4 horas)</option>
                                    <option value="meia-noite">Meia Noite (2 horas)</option>
                                    <option value="uma-hora">Uma hora</option>
                                    <option value="hora-extra">Hora Extra</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group full-width">
                                <label class="form-label">Data de Interesse <span class="required">*</span></label>
                                <div class="radio-group">
                                    <!-- Opção 1: Qualquer final de semana do mês -->
                                    <div class="radio-option" onclick="selectDateOption('weekend')">
                                        <div class="radio-header">
                                            <input type="radio" name="dateOption" value="weekend" class="radio-input" id="weekendOption">
                                            <label for="weekendOption" class="radio-title">Qualquer final de semana do mês</label>
                                        </div>
                                        <div class="radio-content" id="weekendContent">
                                            <div class="date-fields">
                                                <div class="date-field">
                                                    <label class="form-label">Mês</label>
                                                    <select class="form-select" id="weekendMonth">
                                                        <option value="">Selecione o mês</option>
                                                        <option value="1">Janeiro</option>
                                                        <option value="2">Fevereiro</option>
                                                        <option value="3">Março</option>
                                                        <option value="4">Abril</option>
                                                        <option value="5">Maio</option>
                                                        <option value="6">Junho</option>
                                                        <option value="7">Julho</option>
                                                        <option value="8">Agosto</option>
                                                        <option value="9">Setembro</option>
                                                        <option value="10">Outubro</option>
                                                        <option value="11">Novembro</option>
                                                        <option value="12">Dezembro</option>
                                                    </select>
                                                </div>
                                                <div class="date-field">
                                                    <label class="form-label">Ano</label>
                                                    <input type="number" class="form-input" id="weekendYear" placeholder="2025" min="2024" max="2030">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Opção 2: Datas e dias específicos -->
                                    <div class="radio-option" onclick="selectDateOption('specific-days')">
                                        <div class="radio-header">
                                            <input type="radio" name="dateOption" value="specific-days" class="radio-input" id="specificDaysOption">
                                            <label for="specificDaysOption" class="radio-title">Datas e dias específicos</label>
                                        </div>
                                        <div class="radio-content" id="specificDaysContent">
                                            <div class="form-group">
                                                <label class="form-label">Dias da semana</label>
                                                <div class="checkbox-group">
                                                    <div class="checkbox-item">
                                                        <input type="checkbox" id="segunda" class="checkbox-input" value="segunda">
                                                        <label for="segunda" class="checkbox-label">Segunda</label>
                                                    </div>
                                                    <div class="checkbox-item">
                                                        <input type="checkbox" id="terca" class="checkbox-input" value="terca">
                                                        <label for="terca" class="checkbox-label">Terça</label>
                                                    </div>
                                                    <div class="checkbox-item">
                                                        <input type="checkbox" id="quarta" class="checkbox-input" value="quarta">
                                                        <label for="quarta" class="checkbox-label">Quarta</label>
                                                    </div>
                                                    <div class="checkbox-item">
                                                        <input type="checkbox" id="quinta" class="checkbox-input" value="quinta">
                                                        <label for="quinta" class="checkbox-label">Quinta</label>
                                                    </div>
                                                    <div class="checkbox-item">
                                                        <input type="checkbox" id="sexta" class="checkbox-input" value="sexta">
                                                        <label for="sexta" class="checkbox-label">Sexta</label>
                                                    </div>
                                                    <div class="checkbox-item">
                                                        <input type="checkbox" id="sabado" class="checkbox-input" value="sabado">
                                                        <label for="sabado" class="checkbox-label">Sábado</label>
                                                    </div>
                                                    <div class="checkbox-item">
                                                        <input type="checkbox" id="domingo" class="checkbox-input" value="domingo">
                                                        <label for="domingo" class="checkbox-label">Domingo</label>
                                                    </div>
                                                </div>
                                            </div>
                                                                                            <div class="date-fields">
                                                    <div class="date-field">
                                                        <label class="form-label">Mês</label>
                                                        <select class="form-select" id="specificDaysMonth">
                                                            <option value="">Selecione o mês</option>
                                                            <option value="1">Janeiro</option>
                                                            <option value="2">Fevereiro</option>
                                                            <option value="3">Março</option>
                                                            <option value="4">Abril</option>
                                                            <option value="5">Maio</option>
                                                            <option value="6">Junho</option>
                                                            <option value="7">Julho</option>
                                                            <option value="8">Agosto</option>
                                                            <option value="9">Setembro</option>
                                                            <option value="10">Outubro</option>
                                                            <option value="11">Novembro</option>
                                                            <option value="12">Dezembro</option>
                                                        </select>
                                                    </div>
                                                    <div class="date-field">
                                                        <label class="form-label">Ano</label>
                                                        <input type="number" class="form-input" id="specificDaysYear" placeholder="2025" min="2024" max="2030">
                                                    </div>
                                                </div>
                                        </div>
                                    </div>

                                    <!-- Opção 3: Data específica -->
                                    <div class="radio-option" onclick="selectDateOption('specific-date')">
                                        <div class="radio-header">
                                            <input type="radio" name="dateOption" value="specific-date" class="radio-input" id="specificDateOption">
                                            <label for="specificDateOption" class="radio-title">Data específica</label>
                                        </div>
                                        <div class="radio-content" id="specificDateContent">
                                                                                            <div class="specific-date-fields">
                                                    <div class="day-field">
                                                        <label class="form-label">Dia</label>
                                                        <input type="number" class="form-input" id="specificDay" placeholder="15" min="1" max="31">
                                                    </div>
                                                    <div class="month-field">
                                                        <label class="form-label">Mês</label>
                                                        <select class="form-select" id="specificMonth">
                                                            <option value="">Selecione o mês</option>
                                                            <option value="1">Janeiro</option>
                                                            <option value="2">Fevereiro</option>
                                                            <option value="3">Março</option>
                                                            <option value="4">Abril</option>
                                                            <option value="5">Maio</option>
                                                            <option value="6">Junho</option>
                                                            <option value="7">Julho</option>
                                                            <option value="8">Agosto</option>
                                                            <option value="9">Setembro</option>
                                                            <option value="10">Outubro</option>
                                                            <option value="11">Novembro</option>
                                                            <option value="12">Dezembro</option>
                                                        </select>
                                                    </div>
                                                    <div class="year-field">
                                                        <label class="form-label">Ano</label>
                                                        <input type="number" class="form-input" id="specificYear" placeholder="2025" min="2024" max="2030">
                                                    </div>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="form-group full-width">
                                <label class="form-label">Observações</label>
                                <textarea class="form-input form-textarea" placeholder="Observações adicionais sobre o interesse..."></textarea>
                            </div>
                        </div>
                    </div>

                    <!-- Form Actions -->
                    <div class="form-actions">
                        <a href="{{ route('clientes.index') }}" class="btn-cancel">Cancelar</a>
                        <button type="submit" class="btn-save">Salvar Alterações</button>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

    @include('layouts/vendor-scripts')

    <script>
        // Custom Select with Search functionality
        document.addEventListener('DOMContentLoaded', function() {
            const selectInput = document.getElementById('clienteSelect');
            const dropdown = document.getElementById('clienteDropdown');
            const options = dropdown.querySelectorAll('.select-option');
            const arrow = document.querySelector('.select-arrow');

            // Toggle dropdown
            selectInput.addEventListener('click', function() {
                const isOpen = dropdown.style.display === 'block';
                dropdown.style.display = isOpen ? 'none' : 'block';
                arrow.style.transform = isOpen ? 'translateY(-50%) rotate(0deg)' : 'translateY(-50%) rotate(180deg)';
            });

            // Make input searchable when dropdown is open
            selectInput.addEventListener('focus', function() {
                this.readOnly = false;
                dropdown.style.display = 'block';
                arrow.style.transform = 'translateY(-50%) rotate(180deg)';
            });

            // Search functionality
            selectInput.addEventListener('input', function() {
                const searchTerm = this.value.toLowerCase();
                options.forEach(option => {
                    const text = option.textContent.toLowerCase();
                    option.style.display = text.includes(searchTerm) ? 'block' : 'none';
                });
            });

            // Select option
            options.forEach(option => {
                option.addEventListener('click', function() {
                    selectInput.value = this.textContent;
                    selectInput.readOnly = true;
                    dropdown.style.display = 'none';
                    arrow.style.transform = 'translateY(-50%) rotate(0deg)';
                    
                    // Remove previous selection
                    options.forEach(opt => opt.classList.remove('selected'));
                    // Add selection to clicked option
                    this.classList.add('selected');
                });
            });

            // Close dropdown when clicking outside
            document.addEventListener('click', function(e) {
                if (!selectInput.contains(e.target) && !dropdown.contains(e.target)) {
                    dropdown.style.display = 'none';
                    arrow.style.transform = 'translateY(-50%) rotate(0deg)';
                    selectInput.readOnly = true;
                }
            });
        });

        // Date option selection functionality
        function selectDateOption(option) {
            // Clear all radio inputs and hide content
            const radioOptions = document.querySelectorAll('.radio-option');
            const radioContents = document.querySelectorAll('.radio-content');
            const radioInputs = document.querySelectorAll('input[name="dateOption"]');
            
            radioOptions.forEach(opt => opt.classList.remove('selected'));
            radioContents.forEach(content => content.classList.remove('active'));
            radioInputs.forEach(input => input.checked = false);

            // Clear all form fields from other options
            clearAllDateFields();

            // Select current option
            const selectedOption = document.querySelector(`input[value="${option}"]`);
            const selectedContent = document.getElementById(`${option === 'specific-days' ? 'specificDaysContent' : option === 'specific-date' ? 'specificDateContent' : 'weekendContent'}`);
            const selectedRadioOption = selectedOption.closest('.radio-option');

            selectedOption.checked = true;
            selectedRadioOption.classList.add('selected');
            selectedContent.classList.add('active');
        }

        // Function to clear all date fields
        function clearAllDateFields() {
            // Clear weekend option fields
            const weekendMonth = document.getElementById('weekendMonth');
            const weekendYear = document.getElementById('weekendYear');
            if (weekendMonth) weekendMonth.value = '';
            if (weekendYear) weekendYear.value = '';

            // Clear specific days option fields
            const specificDaysMonth = document.getElementById('specificDaysMonth');
            const specificDaysYear = document.getElementById('specificDaysYear');
            if (specificDaysMonth) specificDaysMonth.value = '';
            if (specificDaysYear) specificDaysYear.value = '';

            // Clear all day checkboxes
            const dayCheckboxes = document.querySelectorAll('#specificDaysContent .checkbox-input');
            dayCheckboxes.forEach(checkbox => checkbox.checked = false);

            // Clear specific date option fields
            const specificDay = document.getElementById('specificDay');
            const specificMonth = document.getElementById('specificMonth');
            const specificYear = document.getElementById('specificYear');
            if (specificDay) specificDay.value = '';
            if (specificMonth) specificMonth.value = '';
            if (specificYear) specificYear.value = '';
        }

        // Prevent radio option clicks from bubbling
        document.querySelectorAll('.radio-input').forEach(input => {
            input.addEventListener('click', function(e) {
                e.stopPropagation();
            });
        });

        console.log('Aguardando create page loaded');
    </script>

</body>
</html>

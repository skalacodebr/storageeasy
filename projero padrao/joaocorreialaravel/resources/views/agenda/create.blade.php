@include('layouts/head-main')

<head>
    <title>Novo Evento</title>

    @include('layouts/head')
    @include('layouts/head-style')

    <!-- SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        body {
            background-color: #1a1a1a;
            color: #ffffff;
        }

        .wizard-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 24px;
        }

        .wizard-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 32px;
        }

        .wizard-title {
            font-size: 32px;
            font-weight: 600;
            color: #ffffff;
            margin: 0;
        }

        .wizard-subtitle {
            color: #888;
            font-size: 16px;
            margin: 4px 0 0 0;
        }

        .wizard-progress {
            width: 200px;
            height: 8px;
            background-color: #3a3a3a;
            border-radius: 4px;
            overflow: hidden;
        }

        .wizard-progress-bar {
            height: 100%;
            background-color: #f59e0b;
            transition: width 0.3s ease;
            border-radius: 4px;
        }

        .wizard-steps {
            display: flex;
            justify-content: center;
            margin-bottom: 48px;
            gap: 24px;
        }

        .wizard-step {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 12px;
            opacity: 0.5;
            transition: all 0.3s ease;
        }

        .wizard-step.active {
            opacity: 1;
        }

        .wizard-step.completed {
            opacity: 0.8;
        }

        .wizard-step-icon {
            width: 48px;
            height: 48px;
            border-radius: 50%;
            background-color: #3a3a3a;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #888;
            transition: all 0.3s ease;
        }

        .wizard-step.active .wizard-step-icon {
            background-color: #f59e0b;
            color: #1a1a1a;
        }

        .wizard-step.completed .wizard-step-icon {
            background-color: #f59e0b;
            color: #1a1a1a;
        }

        .wizard-step-label {
            font-size: 14px;
            font-weight: 500;
            color: #888;
            transition: color 0.3s ease;
        }

        .wizard-step.active .wizard-step-label {
            color: #f59e0b;
        }

        .wizard-step.completed .wizard-step-label {
            color: #f59e0b;
        }

        .wizard-content {
            background-color: rgba(42, 42, 42, 0);
            border: 1px solid #3a3a3a;
            border-radius: 16px;
            padding: 48px;
            margin-bottom: 32px;
            min-height: 500px;
        }

        .step-content {
            display: none;
        }

        .step-content.active {
            display: block;
        }

        .step-title {
            font-size: 28px;
            font-weight: 600;
            color: #ffffff;
            text-align: center;
            margin-bottom: 12px;
        }

        .step-description {
            font-size: 16px;
            color: #888;
            text-align: center;
            margin-bottom: 48px;
        }

        /* Step 1 - Type Selection */
        .type-selection {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 24px;
            max-width: 800px;
            margin: 0 auto;
        }

        .type-option {
            background-color: rgba(42, 42, 42, 0);
            border: 2px solid #3a3a3a;
            border-radius: 16px;
            padding: 48px 32px;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .type-option:hover {
            border-color: #f59e0b;
            background-color: rgba(245, 158, 11, 0.1);
        }

        .type-option.selected {
            border-color: #f59e0b;
            background-color: rgba(245, 158, 11, 0.2);
        }

        .type-option-icon {
            width: 64px;
            height: 64px;
            margin: 0 auto 24px auto;
            color: #f59e0b;
        }

        .type-option-title {
            font-size: 24px;
            font-weight: 600;
            color: #ffffff;
            margin-bottom: 12px;
        }

        .type-option-description {
            font-size: 16px;
            color: #888;
        }

        /* Step 2 - Client Info */
        .client-options {
            max-width: 600px;
            margin: 0 auto 48px auto;
        }

        .client-option {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 24px;
            cursor: pointer;
        }

        .client-option input[type="radio"] {
            width: 20px;
            height: 20px;
            accent-color: #f59e0b;
        }

        .client-option label {
            font-size: 16px;
            color: #ffffff;
            cursor: pointer;
        }

        .client-form {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 24px;
            max-width: 800px;
            margin: 0 auto;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .form-group.full-width {
            grid-column: 1 / -1;
        }

        .form-label {
            font-size: 14px;
            font-weight: 500;
            color: #ffffff;
        }

        .form-label.required::after {
            content: " *";
            color: #ef4444;
        }

        .form-input {
            background-color: #2a2a2a;
            border: 1px solid #3a3a3a;
            border-radius: 8px;
            padding: 12px 16px;
            color: #ffffff;
            font-size: 14px;
            transition: all 0.3s ease;
        }

        .form-input:focus {
            outline: none;
            border-color: #f59e0b;
        }

        .form-input::placeholder {
            color: #888;
        }

        /* Step 3 - Location */
        .location-section {
            max-width: 800px;
            margin: 0 auto;
        }

        .period-section {
            background-color: rgba(26, 26, 26, 0.5);
            border: 1px solid #3a3a3a;
            border-radius: 12px;
            padding: 24px;
            margin-bottom: 32px;
        }

        .period-header {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 16px;
        }

        .period-title {
            font-size: 18px;
            font-weight: 600;
            color: #ffffff;
        }

        .period-description {
            font-size: 14px;
            color: #888;
            margin-bottom: 24px;
        }

        .period-type-label {
            font-size: 16px;
            font-weight: 500;
            color: #ffffff;
            margin-bottom: 16px;
        }

        .period-options {
            display: flex;
            flex-direction: column;
            gap: 12px;
            margin-bottom: 32px;
        }

        .period-option {
            display: flex;
            align-items: center;
            gap: 12px;
            cursor: pointer;
        }

        .period-option input[type="radio"] {
            width: 20px;
            height: 20px;
            accent-color: #f59e0b;
        }

        .period-option label {
            font-size: 16px;
            color: #ffffff;
            cursor: pointer;
        }

        .criteria-section {
            display: none;
            margin-top: 24px;
        }

        .criteria-section.active {
            display: block;
        }

        .criteria-grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 32px;
        }

        .criteria-column h4 {
            font-size: 16px;
            font-weight: 600;
            color: #ffffff;
            margin-bottom: 16px;
        }

        .checkbox-group {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .checkbox-item {
            display: flex;
            align-items: center;
            gap: 12px;
            cursor: pointer;
        }

        .checkbox-item input[type="checkbox"] {
            width: 18px;
            height: 18px;
            accent-color: #f59e0b;
        }

        .checkbox-item label {
            font-size: 14px;
            color: #ffffff;
            cursor: pointer;
        }

        .observations-section {
            margin-top: 32px;
        }

        .observations-label {
            font-size: 16px;
            font-weight: 500;
            color: #ffffff;
            margin-bottom: 12px;
        }

        .observations-textarea {
            background-color: #2a2a2a;
            border: 1px solid #3a3a3a;
            border-radius: 8px;
            padding: 16px;
            color: #ffffff;
            font-size: 14px;
            width: 100%;
            min-height: 100px;
            resize: vertical;
            transition: all 0.3s ease;
        }

        .observations-textarea:focus {
            outline: none;
            border-color: #f59e0b;
        }

        .observations-textarea::placeholder {
            color: #888;
        }

        /* Client Select Section */
        .client-select-section {
            max-width: 600px;
            margin: 0 auto;
        }

        .searchable-select {
            position: relative;
            width: 100%;
        }

        .searchable-select-input {
            background-color: #2a2a2a;
            border: 1px solid #3a3a3a;
            color: #ffffff;
            padding: 12px 40px 12px 16px;
            border-radius: 8px;
            font-size: 14px;
            width: 100%;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .searchable-select-input:focus {
            outline: none;
            border-color: #f59e0b;
            cursor: text;
        }

        .searchable-select-input::placeholder {
            color: #888;
        }

        .searchable-select-arrow {
            position: absolute;
            right: 12px;
            top: 50%;
            transform: translateY(-50%);
            color: #888;
            pointer-events: none;
            transition: transform 0.3s ease;
        }

        .searchable-select.open .searchable-select-arrow {
            transform: translateY(-50%) rotate(180deg);
        }

        .searchable-select-dropdown {
            position: absolute;
            top: 100%;
            left: 0;
            right: 0;
            background-color: #2a2a2a;
            border: 1px solid #3a3a3a;
            border-top: none;
            border-radius: 0 0 8px 8px;
            max-height: 200px;
            overflow-y: auto;
            z-index: 1000;
            display: none;
        }

        .searchable-select.open .searchable-select-dropdown {
            display: block;
        }

        .searchable-select-option {
            padding: 12px 16px;
            color: #ffffff;
            cursor: pointer;
            transition: all 0.3s ease;
            border-bottom: 1px solid #3a3a3a;
        }

        .searchable-select-option:last-child {
            border-bottom: none;
        }

        .searchable-select-option:hover {
            background-color: #3a3a3a;
        }

        .searchable-select-option.selected {
            background-color: #f59e0b;
            color: #1a1a1a;
        }

        .searchable-select-option.no-results {
            color: #888;
            cursor: default;
            font-style: italic;
        }

        .searchable-select-option.no-results:hover {
            background-color: transparent;
        }

        /* Location Select Section */
        .location-select-section {
            margin-bottom: 32px;
        }

        .section-title {
            font-size: 18px;
            font-weight: 600;
            color: #ffffff;
            margin: 0 0 16px 0;
        }

        /* Section Headers */
        .section-header {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 12px;
        }

        .section-header h3 {
            font-size: 18px;
            font-weight: 600;
            color: #ffffff;
            margin: 0;
        }

        .section-description {
            font-size: 14px;
            color: #888;
            margin-bottom: 24px;
        }

        /* Transport Section */
        .transport-section {
            margin-bottom: 32px;
        }

        .transport-options {
            display: flex;
            flex-direction: column;
            gap: 12px;
        }

        .transport-option {
            display: flex;
            align-items: center;
            gap: 12px;
            cursor: pointer;
        }

        .transport-option input[type="radio"] {
            width: 20px;
            height: 20px;
            accent-color: #f59e0b;
        }

        .transport-option label {
            font-size: 14px;
            color: #ffffff;
            cursor: pointer;
        }

        /* Van Suppliers Section */
        .van-suppliers-section {
            margin-bottom: 32px;
        }

        .suppliers-list {
            display: none;
            gap: 16px;
        }

        .supplier-card {
            background-color: rgba(42, 42, 42, 0);
            border: 1px solid #3a3a3a;
            border-radius: 12px;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: all 0.3s ease;
            margin-bottom: 12px;
        }

        .supplier-card:hover {
            border-color: #f59e0b;
            background-color: rgba(245, 158, 11, 0.1);
        }

        .supplier-card.selected {
            border-color: #f59e0b;
            background-color: rgba(245, 158, 11, 0.2);
        }

        .supplier-info {
            flex: 1;
        }

        .supplier-name {
            font-size: 18px;
            font-weight: 600;
            color: #ffffff;
            margin: 0 0 8px 0;
        }

        .supplier-details {
            font-size: 14px;
            color: #888;
            margin: 4px 0;
        }

        .supplier-price {
            font-size: 16px;
            font-weight: 600;
            color: #f59e0b;
            margin: 8px 0 0 0;
        }

        .supplier-select-btn {
            background-color: #f59e0b;
            color: #1a1a1a;
            border: none;
            padding: 10px 20px;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .supplier-select-btn:hover {
            background-color: #d97706;
        }

        .suppliers-empty {
            background-color: rgba(26, 26, 26, 0.5);
            border: 1px solid #3a3a3a;
            border-radius: 8px;
            padding: 24px;
            text-align: center;
        }

        .suppliers-empty p {
            color: #888;
            margin: 8px 0;
        }

        .suppliers-note {
            font-size: 12px !important;
            font-style: italic;
        }

        /* Available Dates Section */
        .available-dates-section {
            margin-top: 32px;
        }

        .available-dates-section h4 {
            font-size: 16px;
            font-weight: 600;
            color: #ffffff;
            margin: 0 0 8px 0;
        }

        .available-dates-description {
            font-size: 14px;
            color: #888;
            margin-bottom: 16px;
        }

        .available-dates-list {
            display: none;
            gap: 12px;
            flex-direction: column;
        }

        .available-date-card {
            background-color: rgba(42, 42, 42, 0);
            border: 1px solid #3a3a3a;
            border-radius: 12px;
            padding: 16px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            transition: all 0.3s ease;
        }

        .available-date-card:hover {
            border-color: #f59e0b;
            background-color: rgba(245, 158, 11, 0.1);
        }

        .available-date-card.selected {
            border-color: #f59e0b;
            background-color: rgba(245, 158, 11, 0.2);
        }

        .date-info {
            flex: 1;
        }

        .date-text {
            font-size: 16px;
            color: #ffffff;
            font-weight: 500;
            text-transform: capitalize;
        }

        .date-select-btn {
            background-color: #f59e0b;
            color: #1a1a1a;
            border: none;
            padding: 8px 16px;
            border-radius: 6px;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .date-select-btn:hover {
            background-color: #d97706;
        }

        .no-dates-message {
            background-color: rgba(26, 26, 26, 0.5);
            border: 1px solid #3a3a3a;
            border-radius: 8px;
            padding: 20px;
            text-align: center;
        }

        .no-dates-message p {
            color: #888;
            margin: 8px 0;
        }

        .no-dates-note {
            font-size: 12px !important;
            font-style: italic;
        }

        /* Period Section */
        .period-section {
            background-color: rgba(26, 26, 26, 0.5);
            border: 1px solid #3a3a3a;
            border-radius: 12px;
            padding: 24px;
        }

        /* Navigation */
        .wizard-navigation {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .nav-btn {
            padding: 12px 24px;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            border: none;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .nav-btn.secondary {
            background-color: transparent;
            color: #888;
            border: 1px solid #3a3a3a;
        }

        .nav-btn.secondary:hover {
            background-color: #3a3a3a;
            color: #ffffff;
        }

        .nav-btn.primary {
            background-color: #f59e0b;
            color: #1a1a1a;
        }

        .nav-btn.primary:hover {
            background-color: #d97706;
        }

        .nav-btn:disabled {
            opacity: 0.5;
            cursor: not-allowed;
        }

        @media (max-width: 768px) {
            .wizard-container {
                padding: 16px;
            }

            .wizard-content {
                padding: 24px;
            }

            .type-selection {
                grid-template-columns: 1fr;
            }

            .client-form {
                grid-template-columns: 1fr;
            }

            .criteria-grid {
                grid-template-columns: 1fr;
            }

            .wizard-steps {
                gap: 12px;
            }

            .wizard-step-icon {
                width: 40px;
                height: 40px;
            }



            .section-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 8px;
            }

            .section-header h3 {
                font-size: 16px;
            }

            .supplier-card {
                flex-direction: column;
                align-items: flex-start;
                gap: 16px;
            }

            .supplier-select-btn {
                width: 100%;
                text-align: center;
            }

            .available-date-card {
                flex-direction: column;
                align-items: flex-start;
                gap: 12px;
            }

            .date-select-btn {
                width: 100%;
                text-align: center;
            }
        }

        .nav-btn.primary:hover {
            background-color: #d97706;
        }

        .nav-btn:disabled {
            opacity: 0.5;
            cursor: not-allowed;
        }

        .nav-btn:disabled:hover {
            background-color: transparent;
            color: #888;
        }

        /* Details Form Styles */
        .details-form {
            max-width: 800px;
            margin: 0 auto;
        }

        .form-row {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-bottom: 24px;
        }

        .form-group {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .form-label {
            font-size: 14px;
            font-weight: 600;
            color: #ffffff;
        }

        .form-input, .form-select {
            background-color: #2a2a2a;
            border: 1px solid #3a3a3a;
            color: #ffffff;
            padding: 12px 16px;
            border-radius: 8px;
            font-size: 14px;
            transition: all 0.3s ease;
        }

        .form-input:focus, .form-select:focus {
            outline: none;
            border-color: #f59e0b;
        }

        .form-input::placeholder {
            color: #888;
        }

        .form-textarea {
            background-color: #2a2a2a;
            border: 1px solid #3a3a3a;
            color: #ffffff;
            padding: 12px 16px;
            border-radius: 8px;
            font-size: 14px;
            min-height: 100px;
            resize: vertical;
            transition: all 0.3s ease;
            font-family: inherit;
        }

        .form-textarea:focus {
            outline: none;
            border-color: #f59e0b;
        }

        .form-textarea::placeholder {
            color: #888;
        }

        .checkbox-group {
            display: flex;
            align-items: start;
            gap: 12px;
        }

        .form-checkbox {
            width: 20px;
            height: 20px;
            accent-color: #f59e0b;
        }

        .checkbox-label {
            font-size: 14px;
            color: #ffffff;
            cursor: pointer;
        }

        .price-input {
            font-weight: 600;
            color: #f59e0b;
        }

        /* Sound Suppliers Section */
        .sound-suppliers-section {
            margin-bottom: 32px;
        }

        .sound-suppliers-section .section-header h3 {
            color: #ffffff;
            font-size: 16px;
            font-weight: 600;
            margin: 0 0 12px 0;
        }

        /* Van Suppliers Section Update */
        .van-suppliers-section .section-header h3 {
            color: #ffffff;
            font-size: 16px;
            font-weight: 600;
            margin: 0 0 12px 0;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .form-row {
                grid-template-columns: 1fr;
                gap: 16px;
            }
            
            .details-form {
                padding: 0 16px;
            }
        }

        /* Confirmation Summary Styles */
        .confirmation-summary {
            max-width: 800px;
            margin: 0 auto;
        }

        .summary-section {
            background-color: rgba(42, 42, 42, 0.5);
            border: 1px solid #3a3a3a;
            border-radius: 12px;
            padding: 24px;
            margin-bottom: 20px;
        }

        .summary-title {
            font-size: 18px;
            font-weight: 600;
            color: #f59e0b;
            margin: 0 0 16px 0;
            border-bottom: 1px solid #3a3a3a;
            padding-bottom: 8px;
        }

        .summary-content {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .summary-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 4px 0;
        }

        div:where(.swal2-container) {
            display: grid;
            position: fixed;
            z-index: 10601;
            inset: 0;
            box-sizing: border-box;
            grid-template-areas:
                "top-start top top-end"
                "center-start center center-end"
                "bottom-start bottom-center bottom-end";
            grid-template-rows: minmax(min-content, auto) minmax(min-content, auto) minmax(min-content, auto);
            height: 100%;
            padding: var(--swal2-container-padding);
            overflow-x: hidden;
            transition: var(--swal2-backdrop-transition);
            -webkit-overflow-scrolling: touch;
        }

        .summary-label {
            font-size: 14px;
            color: #888;
            font-weight: 500;
        }

        .summary-value {
            font-size: 14px;
            color: #ffffff;
            font-weight: 600;
        }

        .summary-text {
            font-size: 14px;
            color: #ffffff;
            line-height: 1.5;
            background-color: rgba(26, 26, 26, 0.5);
            padding: 12px;
            border-radius: 8px;
            border: 1px solid #3a3a3a;
        }

        .price-highlight {
            color: #f59e0b !important;
            font-size: 16px !important;
            font-weight: 700 !important;
        }

        .supplier-info-summary {
            background-color: rgba(26, 26, 26, 0.5);
            padding: 12px;
            border-radius: 8px;
            border: 1px solid #3a3a3a;
            margin-top: 8px;
        }

        .supplier-name-summary {
            font-weight: 600;
            color: #ffffff;
            margin-bottom: 4px;
        }

        .supplier-details-summary {
            font-size: 12px;
            color: #888;
            margin-bottom: 4px;
        }

        .supplier-price-summary {
            font-size: 14px;
            color: #f59e0b;
            font-weight: 600;
        }

        /* Responsive for confirmation */
        @media (max-width: 768px) {
            .confirmation-summary {
                padding: 0 16px;
            }
            
            .summary-row {
                flex-direction: column;
                align-items: flex-start;
                gap: 4px;
            }
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
                    
                    <div class="wizard-container">
                        <!-- Header -->
                        <div class="wizard-header">
                            <div>
                                <h1 class="wizard-title">Novo Orçamento</h1>
                                <p class="wizard-subtitle" id="wizardSubtitle">Etapa 1 de 5</p>
                            </div>
                            <div class="wizard-progress">
                                <div class="wizard-progress-bar" id="progressBar" style="width: 20%"></div>
                            </div>
                        </div>

                        <!-- Steps Indicator -->
                        <div class="wizard-steps">
                            <div class="wizard-step active" data-step="1">
                                <div class="wizard-step-icon">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" stroke="currentColor" stroke-width="2"/>
                                        <polyline points="14,2 14,8 20,8" stroke="currentColor" stroke-width="2"/>
                                        <line x1="16" y1="13" x2="8" y2="13" stroke="currentColor" stroke-width="2"/>
                                        <line x1="16" y1="17" x2="8" y2="17" stroke="currentColor" stroke-width="2"/>
                                        <polyline points="10,9 9,9 8,9" stroke="currentColor" stroke-width="2"/>
                                    </svg>
                                </div>
                                <span class="wizard-step-label">Tipo</span>
                            </div>

                            <div class="wizard-step" data-step="2">
                                <div class="wizard-step-icon">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2" stroke="currentColor" stroke-width="2"/>
                                        <circle cx="12" cy="7" r="4" stroke="currentColor" stroke-width="2"/>
                                    </svg>
                                </div>
                                <span class="wizard-step-label">Cliente</span>
                            </div>

                            <div class="wizard-step" data-step="3">
                                <div class="wizard-step-icon">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" stroke="currentColor" stroke-width="2"/>
                                        <circle cx="12" cy="10" r="3" stroke="currentColor" stroke-width="2"/>
                                    </svg>
                                </div>
                                <span class="wizard-step-label">Local</span>
                            </div>

                            <div class="wizard-step" data-step="4">
                                <div class="wizard-step-icon">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="3" y="4" width="18" height="18" rx="2" ry="2" stroke="currentColor" stroke-width="2"/>
                                        <line x1="16" y1="2" x2="16" y2="6" stroke="currentColor" stroke-width="2"/>
                                        <line x1="8" y1="2" x2="8" y2="6" stroke="currentColor" stroke-width="2"/>
                                        <line x1="3" y1="10" x2="21" y2="10" stroke="currentColor" stroke-width="2"/>
                                    </svg>
                                </div>
                                <span class="wizard-step-label">Detalhes</span>
                            </div>

                            <div class="wizard-step" data-step="5">
                                <div class="wizard-step-icon">
                                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <polyline points="20,6 9,17 4,12" stroke="currentColor" stroke-width="2"/>
                                    </svg>
                                </div>
                                <span class="wizard-step-label">Confirmação</span>
                            </div>
                        </div>

                        <!-- Content -->
                        <div class="wizard-content">
                            <!-- Step 1: Type Selection -->
                            <div class="step-content active" id="step1">
                                <h2 class="step-title">O que você deseja criar?</h2>
                                <p class="step-description">Escolha o tipo de registro para começar</p>

                                <div class="type-selection">
                                    <div class="type-option" data-type="orcamento">
                                        <svg class="type-option-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" stroke="currentColor" stroke-width="2"/>
                                            <polyline points="14,2 14,8 20,8" stroke="currentColor" stroke-width="2"/>
                                            <line x1="16" y1="13" x2="8" y2="13" stroke="currentColor" stroke-width="2"/>
                                            <line x1="16" y1="17" x2="8" y2="17" stroke="currentColor" stroke-width="2"/>
                                            <polyline points="10,9 9,9 8,9" stroke="currentColor" stroke-width="2"/>
                                        </svg>
                                        <h3 class="type-option-title">Orçamento</h3>
                                        <p class="type-option-description">Criar um orçamento para enviar ao cliente</p>
                                    </div>

                                    <div class="type-option" data-type="agendamento">
                                        <svg class="type-option-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2" stroke="currentColor" stroke-width="2"/>
                                            <line x1="16" y1="2" x2="16" y2="6" stroke="currentColor" stroke-width="2"/>
                                            <line x1="8" y1="2" x2="8" y2="6" stroke="currentColor" stroke-width="2"/>
                                            <line x1="3" y1="10" x2="21" y2="10" stroke="currentColor" stroke-width="2"/>
                                        </svg>
                                        <h3 class="type-option-title">Agendamento</h3>
                                        <p class="type-option-description">Agendar um show confirmado</p>
                                    </div>
                                </div>
                            </div>

                            <!-- Step 2: Client Information -->
                            <div class="step-content" id="step2">
                                <h2 class="step-title">Informações do Cliente</h2>
                                <p class="step-description">Selecione um cliente existente</p>

                                <div class="client-select-section">
                                    <div class="form-group full-width">
                                        <label class="form-label required">Selecionar Cliente</label>
                                        <div class="searchable-select" id="clientSearchableSelect">
                                            <input 
                                                type="text" 
                                                class="searchable-select-input" 
                                                id="clientSearchInput"
                                                placeholder="Digite para buscar um cliente..."
                                                readonly
                                            >
                                            <svg class="searchable-select-arrow" width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <polyline points="6,9 12,15 18,9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            <div class="searchable-select-dropdown" id="clientDropdown">
                                                <!-- Options will be populated by JavaScript -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Step 3: Location -->
                            <div class="step-content" id="step3">
                                <h2 class="step-title">Local do Evento</h2>
                                <p class="step-description">Selecione um local existente ou cadastre um novo</p>

                                <div class="location-section">
                                    <!-- Seleção de Local -->
                                    <div class="location-select-section">
                                        <h3 class="section-title">Local</h3>
                                        <div class="form-group">
                                            <div class="searchable-select" id="locationSearchableSelect">
                                                <input 
                                                    type="text" 
                                                    class="searchable-select-input" 
                                                    id="locationSearchInput"
                                                    placeholder="Selecione um local"
                                                    readonly
                                                >
                                                <svg class="searchable-select-arrow" width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <polyline points="6,9 12,15 18,9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                                </svg>
                                                <div class="searchable-select-dropdown" id="locationDropdown">
                                                    <!-- Options will be populated by JavaScript -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Transporte -->
                                    <div class="transport-section">
                                        <div class="section-header">
                                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M7 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" stroke="currentColor" stroke-width="2"/>
                                                <path d="M17 17m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0" stroke="currentColor" stroke-width="2"/>
                                                <path d="M5 17h-2v-6l2-5h9l4 5h1a2 2 0 0 1 2 2v4h-2m-4 0h-6m-6 -6h15m-6 0v-5" stroke="currentColor" stroke-width="2"/>
                                            </svg>
                                            <h3>Transporte</h3>
                                        </div>
                                        <p class="section-description">Configure as necessidades de transporte para o evento</p>
                                        
                                        <div class="transport-options">
                                            <div class="transport-option">
                                                <input type="radio" id="precisaVan" name="transportType" value="van">
                                                <label for="precisaVan">Precisa de van para o evento</label>
                                            </div>
                                            <div class="transport-option">
                                                <input type="radio" id="clienteDisponibiliza" name="transportType" value="cliente">
                                                <label for="clienteDisponibiliza">Cliente disponibiliza o van</label>
                                            </div>
                                            <div class="transport-option">
                                                <input type="radio" id="naoNecessario" name="transportType" value="none" checked>
                                                <label for="naoNecessario">Não necessário</label>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Fornecedores de Van Disponíveis -->
                                    <div class="van-suppliers-section" id="vanSuppliersSection" style="display: none;">
                                        <div class="section-header">
                                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2" stroke="currentColor" stroke-width="2"/>
                                                <rect x="8" y="2" width="8" height="4" rx="1" ry="1" stroke="currentColor" stroke-width="2"/>
                                            </svg>
                                            <h3>Fornecedores de Van Disponíveis</h3>
                                        </div>
                                        <p class="section-description">Vazio - 0 Van, Van, Van</p>
                                        
                                        <div class="suppliers-list" id="suppliersList">
                                            <!-- Lista de fornecedores será populada aqui -->
                                        </div>
                                        
                                        <div class="suppliers-empty" id="suppliersEmpty">
                                            <p>Aguardando coordenadas do local...</p>
                                            <p class="suppliers-note">Verifique se o endereço está completo e correto</p>
                                        </div>
                                    </div>



                                    <!-- Período do Evento -->
                                    <div class="period-section">
                                        <div class="section-header">
                                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <rect x="3" y="4" width="18" height="18" rx="2" ry="2" stroke="currentColor" stroke-width="2"/>
                                                <line x1="16" y1="2" x2="16" y2="6" stroke="currentColor" stroke-width="2"/>
                                                <line x1="8" y1="2" x2="8" y2="6" stroke="currentColor" stroke-width="2"/>
                                                <line x1="3" y1="10" x2="21" y2="10" stroke="currentColor" stroke-width="2"/>
                                            </svg>
                                            <h3>Período do Evento</h3>
                                        </div>
                                        <p class="section-description">Defina o período desejado para o evento (opcional). Se não definir aqui, será necessário informar uma data específica na próxima etapa.</p>

                                        <div class="period-type-label">Tipo de período</div>
                                        <div class="period-options">
                                            <div class="period-option">
                                                <input type="radio" id="specificDate" name="periodType" value="specific" checked>
                                                <label for="specificDate">Definir data específica depois</label>
                                            </div>
                                            <div class="period-option">
                                                <input type="radio" id="generalCriteria" name="periodType" value="general">
                                                <label for="generalCriteria">Critério geral (ex: algum sábado de dezembro)</label>
                                            </div>
                                        </div>

                                        <div class="criteria-section" id="criteriaSection">
                                            <div class="criteria-grid">
                                                <div class="criteria-column">
                                                    <h4>Dias da semana</h4>
                                                    <div class="checkbox-group">
                                                        <div class="checkbox-item">
                                                            <input type="checkbox" id="domingo" name="weekdays" value="domingo">
                                                            <label for="domingo">Domingo</label>
                                                        </div>
                                                        <div class="checkbox-item">
                                                            <input type="checkbox" id="segunda" name="weekdays" value="segunda">
                                                            <label for="segunda">Segunda-feira</label>
                                                        </div>
                                                        <div class="checkbox-item">
                                                            <input type="checkbox" id="terca" name="weekdays" value="terca">
                                                            <label for="terca">Terça-feira</label>
                                                        </div>
                                                        <div class="checkbox-item">
                                                            <input type="checkbox" id="quarta" name="weekdays" value="quarta">
                                                            <label for="quarta">Quarta-feira</label>
                                                        </div>
                                                        <div class="checkbox-item">
                                                            <input type="checkbox" id="quinta" name="weekdays" value="quinta">
                                                            <label for="quinta">Quinta-feira</label>
                                                        </div>
                                                        <div class="checkbox-item">
                                                            <input type="checkbox" id="sexta" name="weekdays" value="sexta">
                                                            <label for="sexta">Sexta-feira</label>
                                                        </div>
                                                        <div class="checkbox-item">
                                                            <input type="checkbox" id="sabado" name="weekdays" value="sabado">
                                                            <label for="sabado">Sábado</label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="criteria-column">
                                                    <h4>Meses</h4>
                                                    <div class="checkbox-group">
                                                        <div class="checkbox-item">
                                                            <input type="checkbox" id="janeiro" name="months" value="janeiro">
                                                            <label for="janeiro">Janeiro</label>
                                                        </div>
                                                        <div class="checkbox-item">
                                                            <input type="checkbox" id="fevereiro" name="months" value="fevereiro">
                                                            <label for="fevereiro">Fevereiro</label>
                                                        </div>
                                                        <div class="checkbox-item">
                                                            <input type="checkbox" id="marco" name="months" value="marco">
                                                            <label for="marco">Março</label>
                                                        </div>
                                                        <div class="checkbox-item">
                                                            <input type="checkbox" id="abril" name="months" value="abril">
                                                            <label for="abril">Abril</label>
                                                        </div>
                                                        <div class="checkbox-item">
                                                            <input type="checkbox" id="maio" name="months" value="maio">
                                                            <label for="maio">Maio</label>
                                                        </div>
                                                        <div class="checkbox-item">
                                                            <input type="checkbox" id="junho" name="months" value="junho">
                                                            <label for="junho">Junho</label>
                                                        </div>
                                                        <div class="checkbox-item">
                                                            <input type="checkbox" id="julho" name="months" value="julho">
                                                            <label for="julho">Julho</label>
                                                        </div>
                                                        <div class="checkbox-item">
                                                            <input type="checkbox" id="agosto" name="months" value="agosto">
                                                            <label for="agosto">Agosto</label>
                                                        </div>
                                                        <div class="checkbox-item">
                                                            <input type="checkbox" id="setembro" name="months" value="setembro">
                                                            <label for="setembro">Setembro</label>
                                                        </div>
                                                        <div class="checkbox-item">
                                                            <input type="checkbox" id="outubro" name="months" value="outubro">
                                                            <label for="outubro">Outubro</label>
                                                        </div>
                                                        <div class="checkbox-item">
                                                            <input type="checkbox" id="novembro" name="months" value="novembro">
                                                            <label for="novembro">Novembro</label>
                                                        </div>
                                                        <div class="checkbox-item">
                                                            <input type="checkbox" id="dezembro" name="months" value="dezembro">
                                                            <label for="dezembro">Dezembro</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <!-- Datas Disponíveis -->
                                            <div class="available-dates-section" id="availableDatesSection">
                                                <h4>Datas Disponíveis</h4>
                                                <p class="available-dates-description">Baseado nos critérios selecionados, estas são as datas disponíveis:</p>
                                                <div class="available-dates-list" id="availableDatesList">
                                                    <!-- Datas serão populadas pelo JavaScript -->
                                                </div>
                                                <div class="no-dates-message" id="noDatesMessage" style="display: none;">
                                                    <p>Nenhuma data disponível para os critérios selecionados.</p>
                                                    <p class="no-dates-note">Tente selecionar outros dias da semana ou meses.</p>
                                                </div>
                                            </div>

                                            <div class="observations-section">
                                                <div class="observations-label">Observações sobre o período</div>
                                                <textarea class="observations-textarea" placeholder="Informações adicionais sobre o período desejado..."></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Step 4: Details -->
                            <div class="step-content" id="step4">
                                <h2 class="step-title">Detalhes do Orçamento</h2>
                                <p class="step-description">Informe os detalhes do evento</p>
                                
                                <div class="details-form">
                                    <!-- Date and Time Section -->
                                    <div class="form-row">
                                        <div class="form-group">
                                            <label for="eventDate" class="form-label">Data *</label>
                                            <input type="date" id="eventDate" class="form-input" placeholder="dd/mm/aaaa">
                                        </div>
                                        <div class="form-group">
                                            <label for="startTime" class="form-label">Hora início *</label>
                                            <input type="time" id="startTime" class="form-input" value="20:00">
                                        </div>
                                        <div class="form-group">
                                            <label for="endTime" class="form-label">Hora fim *</label>
                                            <input type="time" id="endTime" class="form-input" value="00:00">
                                        </div>
                                    </div>

                                    <!-- Schedule Type -->
                                    <div class="form-group">
                                        <label for="scheduleType" class="form-label">Tipo de horário</label>
                                        <select id="scheduleType" class="form-select">
                                            <option value="noite-completa">Noite completa (4 horas)</option>
                                            <option value="meia-noite">Meia noite (2 horas)</option>
                                            <option value="uma-hora">Uma hora</option>
                                            <option value="horario-extra">Horário extra</option>
                                        </select>
                                    </div>

                                    <!-- Sound Installation -->
                                    <div class="form-group">
                                        <div class="checkbox-group my-3" style="flex-direction: row;">
                                            <input type="checkbox" id="needsSound" class="form-checkbox">
                                            <label for="needsSound" class="checkbox-label">Preciso instalar som</label>
                                        </div>
                                    </div>

                                    <!-- Sound Suppliers Section -->
                                    <div class="sound-suppliers-section" id="soundSuppliersSection" style="display: none;">
                                        <div class="section-header">
                                            <h3>Fornecedores de Som</h3>
                                        </div>
                                        <div class="searchable-select">
                                            <input type="text" 
                                                   id="soundSupplierSearchInput" 
                                                   class="searchable-select-input" 
                                                   placeholder="Selecione um fornecedor de som"
                                                   readonly>
                                            <svg class="searchable-select-arrow" width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <polyline points="6,9 12,15 18,9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            <div class="searchable-select-dropdown" id="soundSupplierDropdown"></div>
                                        </div>
                                    </div>

                                    <!-- Van Suppliers Section (Updated) -->
                                    <div class="van-suppliers-section" id="vanSuppliersSection" style="display: none;">
                                        <div class="section-header">
                                            <h3>Fornecedores de Van</h3>
                                        </div>
                                        <div class="searchable-select">
                                            <input type="text" 
                                                   id="vanSupplierSearchInput" 
                                                   class="searchable-select-input" 
                                                   placeholder="Selecione um fornecedor de van"
                                                   readonly>
                                            <svg class="searchable-select-arrow" width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <polyline points="6,9 12,15 18,9" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                            </svg>
                                            <div class="searchable-select-dropdown" id="vanSupplierDropdown"></div>
                                        </div>
                                    </div>

                                    <!-- Price Section -->
                                    <div class="form-row">
                                        <div class="form-group">
                                            <label for="totalValue" class="form-label">Valor total *</label>
                                            <input type="text" id="totalValue" class="form-input price-input" placeholder="R$ 0,00">
                                        </div>
                                        <div class="form-group">
                                            <label for="advancePayment" class="form-label">Adiantamento</label>
                                            <input type="text" id="advancePayment" class="form-input price-input" placeholder="R$ 0,00">
                                        </div>
                                    </div>

                                    <!-- Observations -->
                                    <div class="form-group">
                                        <label for="eventObservations" class="form-label">Observações</label>
                                        <textarea id="eventObservations" class="form-textarea" placeholder="Observações sobre o evento..."></textarea>
                                    </div>
                                </div>
                            </div>

                            <!-- Step 5: Confirmation -->
                            <div class="step-content" id="step5">
                                <h2 class="step-title">Confirmação</h2>
                                <p class="step-description">Revise todas as informações antes de finalizar</p>
                                
                                <div class="confirmation-summary">
                                    <!-- Type Summary -->
                                    <div class="summary-section">
                                        <h3 class="summary-title">Tipo de Registro</h3>
                                        <div class="summary-content" id="typeSummary">
                                            <span class="summary-value">Orçamento</span>
                                        </div>
                                    </div>

                                    <!-- Client Summary -->
                                    <div class="summary-section">
                                        <h3 class="summary-title">Cliente</h3>
                                        <div class="summary-content" id="clientSummary">
                                            <span class="summary-label">Nenhum cliente selecionado</span>
                                        </div>
                                    </div>

                                    <!-- Location Summary -->
                                    <div class="summary-section">
                                        <h3 class="summary-title">Local do Evento</h3>
                                        <div class="summary-content" id="locationSummary">
                                            <span class="summary-label">Nenhum local selecionado</span>
                                        </div>
                                    </div>

                                    <!-- Transport Summary -->
                                    <div class="summary-section" id="transportSummary" style="display: none;">
                                        <h3 class="summary-title">Transporte</h3>
                                        <div class="summary-content" id="transportContent">
                                            <span class="summary-label">Não necessário</span>
                                        </div>
                                    </div>

                                    <!-- Event Details Summary -->
                                    <div class="summary-section">
                                        <h3 class="summary-title">Detalhes do Evento</h3>
                                        <div class="summary-content" id="eventDetailsSummary">
                                            <div class="summary-row">
                                                <span class="summary-label">Data:</span>
                                                <span class="summary-value" id="eventDateSummary">Não informada</span>
                                            </div>
                                            <div class="summary-row">
                                                <span class="summary-label">Horário:</span>
                                                <span class="summary-value" id="eventTimeSummary">Não informado</span>
                                            </div>
                                            <div class="summary-row">
                                                <span class="summary-label">Tipo de horário:</span>
                                                <span class="summary-value" id="scheduleTypeSummary">Noite completa (4 horas)</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Sound Summary -->
                                    <div class="summary-section" id="soundSummary" style="display: none;">
                                        <h3 class="summary-title">Instalação de Som</h3>
                                        <div class="summary-content" id="soundContent">
                                            <span class="summary-label">Não necessário</span>
                                        </div>
                                    </div>

                                    <!-- Price Summary -->
                                    <div class="summary-section">
                                        <h3 class="summary-title">Valores</h3>
                                        <div class="summary-content" id="priceSummary">
                                            <div class="summary-row">
                                                <span class="summary-label">Valor total:</span>
                                                <span class="summary-value price-highlight" id="totalValueSummary">R$ 0,00</span>
                                            </div>
                                            <div class="summary-row">
                                                <span class="summary-label">Adiantamento:</span>
                                                <span class="summary-value" id="advancePaymentSummary">R$ 0,00</span>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Observations Summary -->
                                    <div class="summary-section" id="observationsSummary" style="display: none;">
                                        <h3 class="summary-title">Observações</h3>
                                        <div class="summary-content" id="observationsContent">
                                            <span class="summary-text"></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Navigation -->
                        <div class="wizard-navigation">
                            <button class="nav-btn secondary" id="prevBtn" onclick="previousStep()" disabled>
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <polyline points="15,18 9,12 15,6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                                Anterior
                            </button>
                            <button class="nav-btn primary" id="nextBtn" onclick="nextStep()">
                                Próximo
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <polyline points="9,18 15,12 9,6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

    @include('layouts/vendor-scripts')

    <script>
        let currentStep = 1;
        const totalSteps = 5;
        let selectedType = 'orcamento';
        let selectedClient = null;
        let filteredClients = [];
        let selectedLocation = null;
        let filteredLocations = [];
        let selectedSoundSupplier = null;
        let filteredSoundSuppliers = [];
        let selectedVanSupplier = null;
        let filteredVanSuppliers = [];

        // Sample clients data
        const clients = [
            { id: 'arthur', name: 'Arthur Stein', phone: '(11) 99999-9999', email: 'arthur@email.com' },
            { id: 'clip', name: 'Clip', phone: '(11) 88888-8888', email: 'contato@clip.com' },
            { id: 'testando', name: 'Testando', phone: '(11) 77777-7777', email: 'teste@email.com' },
            { id: 'joao', name: 'João Silva', phone: '(11) 66666-6666', email: 'joao@email.com' },
            { id: 'maria', name: 'Maria Santos', phone: '(11) 55555-5555', email: 'maria@email.com' },
            { id: 'pedro', name: 'Pedro Oliveira', phone: '(11) 44444-4444', email: 'pedro@email.com' },
            { id: 'ana', name: 'Ana Costa', phone: '(11) 33333-3333', email: 'ana@email.com' },
            { id: 'carlos', name: 'Carlos Ferreira', phone: '(11) 22222-2222', email: 'carlos@email.com' },
            { id: 'lucia', name: 'Lúcia Almeida', phone: '(11) 11111-1111', email: 'lucia@email.com' },
            { id: 'rafael', name: 'Rafael Souza', phone: '(11) 99999-0000', email: 'rafael@email.com' },
            { id: 'fernanda', name: 'Fernanda Lima', phone: '(11) 88888-0000', email: 'fernanda@email.com' },
            { id: 'ricardo', name: 'Ricardo Pereira', phone: '(11) 77777-0000', email: 'ricardo@email.com' },
            { id: 'juliana', name: 'Juliana Rodrigues', phone: '(11) 66666-0000', email: 'juliana@email.com' }
        ];

        // Sample locations data
        const locations = [
            { 
                id: 'casa-stein-1', 
                name: 'Casa Stein', 
                address: 'Velha, 89',
                city: 'Velha',
                capacity: null,
                equipment: null
            },
            { 
                id: 'casa-stein-2', 
                name: 'Casa Stein', 
                address: 'Rua: Mário Carlos, Qua Monteiro - 700',
                city: 'Velha',
                capacity: '1000 pessoas',
                equipment: '300 cm',
                details: 'Quintal'
            },
            { 
                id: 'salao-eventos', 
                name: 'Salão de Eventos Central', 
                address: 'Av. Principal, 123',
                city: 'Centro',
                capacity: '500 pessoas',
                equipment: 'Som completo'
            },
            { 
                id: 'clube-recreativo', 
                name: 'Clube Recreativo', 
                address: 'Rua das Flores, 456',
                city: 'Jardim',
                capacity: '300 pessoas',
                equipment: 'Palco e som'
            },
            { 
                id: 'espaco-verde', 
                name: 'Espaço Verde', 
                address: 'Estrada Rural, Km 5',
                city: 'Rural',
                capacity: '200 pessoas',
                equipment: 'Área externa'
            }
        ];

        // Sample van suppliers data
        const vanSuppliers = [
            {
                id: 'van-express',
                name: 'Van Express',
                phone: '(11) 99999-1111',
                price: 'R$ 150,00',
                capacity: '15 pessoas',
                available: true
            },
            {
                id: 'transporte-seguro',
                name: 'Transporte Seguro',
                phone: '(11) 88888-2222',
                price: 'R$ 180,00',
                capacity: '20 pessoas',
                available: true
            },
            {
                id: 'van-confort',
                name: 'Van Confort',
                phone: '(11) 77777-3333',
                price: 'R$ 200,00',
                capacity: '18 pessoas',
                available: false
            },
            {
                id: 'rapido-van',
                name: 'Rápido Van',
                phone: '(11) 66666-4444',
                price: 'R$ 160,00',
                capacity: '16 pessoas',
                available: true
            }
        ];

        // Sample sound suppliers data
        const soundSuppliers = [
            {
                id: 'som-pro',
                name: 'Som Pro Eventos',
                phone: '(11) 99999-5555',
                price: 'R$ 300,00',
                equipment: 'Sistema completo 2000W',
                available: true
            },
            {
                id: 'audio-master',
                name: 'Audio Master',
                phone: '(11) 88888-6666',
                price: 'R$ 250,00',
                equipment: 'Mesa de som + caixas',
                available: true
            },
            {
                id: 'sound-tech',
                name: 'Sound Tech',
                phone: '(11) 77777-7777',
                price: 'R$ 400,00',
                equipment: 'Sistema profissional 3000W',
                available: true
            },
            {
                id: 'mega-som',
                name: 'Mega Som',
                phone: '(11) 66666-8888',
                price: 'R$ 350,00',
                equipment: 'Line array + subwoofers',
                available: false
            },
            {
                id: 'som-perfeito',
                name: 'Som Perfeito',
                phone: '(11) 55555-9999',
                price: 'R$ 280,00',
                equipment: 'Sistema básico 1500W',
                available: true
            }
        ];

        // Sample available dates (simulating a database of available dates)
        const availableDates = [
            // Janeiro 2025
            { date: new Date(2025, 0, 4), available: true }, // Sábado
            { date: new Date(2025, 0, 5), available: true }, // Domingo
            { date: new Date(2025, 0, 11), available: true }, // Sábado
            { date: new Date(2025, 0, 12), available: true }, // Domingo
            { date: new Date(2025, 0, 18), available: true }, // Sábado
            { date: new Date(2025, 0, 19), available: true }, // Domingo
            { date: new Date(2025, 0, 25), available: true }, // Sábado
            { date: new Date(2025, 0, 26), available: true }, // Domingo
            
            // Fevereiro 2025
            { date: new Date(2025, 1, 1), available: true }, // Sábado
            { date: new Date(2025, 1, 2), available: true }, // Domingo
            { date: new Date(2025, 1, 8), available: true }, // Sábado
            { date: new Date(2025, 1, 9), available: true }, // Domingo
            { date: new Date(2025, 1, 15), available: true }, // Sábado
            { date: new Date(2025, 1, 16), available: true }, // Domingo
            { date: new Date(2025, 1, 22), available: true }, // Sábado
            { date: new Date(2025, 1, 23), available: true }, // Domingo
            
            // Março 2025
            { date: new Date(2025, 2, 1), available: true }, // Sábado
            { date: new Date(2025, 2, 2), available: true }, // Domingo
            { date: new Date(2025, 2, 8), available: true }, // Sábado
            { date: new Date(2025, 2, 9), available: true }, // Domingo
            { date: new Date(2025, 2, 15), available: true }, // Sábado
            { date: new Date(2025, 2, 16), available: true }, // Domingo
            { date: new Date(2025, 2, 22), available: true }, // Sábado
            { date: new Date(2025, 2, 23), available: true }, // Domingo
            { date: new Date(2025, 2, 29), available: true }, // Sábado
            { date: new Date(2025, 2, 30), available: true }, // Domingo
            
            // Dezembro 2025
            { date: new Date(2025, 11, 6), available: true }, // Sábado
            { date: new Date(2025, 11, 7), available: true }, // Domingo
            { date: new Date(2025, 11, 13), available: true }, // Sábado
            { date: new Date(2025, 11, 14), available: true }, // Domingo
            { date: new Date(2025, 11, 20), available: true }, // Sábado
            { date: new Date(2025, 11, 21), available: true }, // Domingo
            { date: new Date(2025, 11, 27), available: true }, // Sábado
            { date: new Date(2025, 11, 28), available: true }, // Domingo
        ];

        // Initialize wizard
        document.addEventListener('DOMContentLoaded', function() {
            initializeWizard();
        });

        function initializeWizard() {
            // Initialize clients and locations data
            filteredClients = [...clients];
            filteredLocations = [...locations];
            filteredSoundSuppliers = [...soundSuppliers];
            filteredVanSuppliers = [...vanSuppliers];

            // Type selection handlers
            document.querySelectorAll('.type-option').forEach(option => {
                option.addEventListener('click', function() {
                    document.querySelectorAll('.type-option').forEach(opt => opt.classList.remove('selected'));
                    this.classList.add('selected');
                    selectedType = this.dataset.type;
                });
            });

            // Period type handlers
            document.querySelectorAll('input[name="periodType"]').forEach(radio => {
                radio.addEventListener('change', function() {
                    const criteriaSection = document.getElementById('criteriaSection');
                    if (this.value === 'general') {
                        criteriaSection.classList.add('active');
                        updateAvailableDates();
                    } else {
                        criteriaSection.classList.remove('active');
                    }
                });
            });

            // Weekdays and months handlers
            document.querySelectorAll('input[name="weekdays"], input[name="months"]').forEach(checkbox => {
                checkbox.addEventListener('change', function() {
                    updateAvailableDates();
                });
            });

            // Initialize client searchable select immediately
            initSearchableSelect();

            // Initialize location searchable select
            initLocationSearchableSelect();

            // Initialize sound suppliers searchable select
            initSoundSuppliersSelect();

            // Initialize van suppliers searchable select
            initVanSuppliersSelect();

            // Transport handlers
            initTransportHandlers();

            // Sound installation handlers
            initSoundHandlers();

            // Price formatting handlers
            initPriceFormatting();

            updateWizardState();
        }

        function nextStep() {
            if (currentStep < totalSteps) {
                // Validate current step
                if (validateStep(currentStep)) {
                    currentStep++;
                    updateWizardState();
                }
            } else {
                // Final step - submit form
                submitForm();
            }
        }

        function previousStep() {
            if (currentStep > 1) {
                currentStep--;
                updateWizardState();
            }
        }

        function goToStep(step) {
            if (step >= 1 && step <= totalSteps) {
                currentStep = step;
                updateWizardState();
            }
        }

        function updateWizardState() {
            // Update progress bar
            const progressBar = document.getElementById('progressBar');
            const progressPercentage = (currentStep / totalSteps) * 100;
            progressBar.style.width = progressPercentage + '%';

            // Update subtitle
            const subtitle = document.getElementById('wizardSubtitle');
            subtitle.textContent = `Etapa ${currentStep} de ${totalSteps}`;

            // Update step indicators
            document.querySelectorAll('.wizard-step').forEach((step, index) => {
                const stepNumber = index + 1;
                step.classList.remove('active', 'completed');
                
                if (stepNumber < currentStep) {
                    step.classList.add('completed');
                } else if (stepNumber === currentStep) {
                    step.classList.add('active');
                }
            });

            // Update content visibility
            document.querySelectorAll('.step-content').forEach((content, index) => {
                const stepNumber = index + 1;
                content.classList.remove('active');
                if (stepNumber === currentStep) {
                    content.classList.add('active');
                }
            });

            // Update navigation buttons
            const prevBtn = document.getElementById('prevBtn');
            const nextBtn = document.getElementById('nextBtn');

            prevBtn.disabled = currentStep === 1;
            
            if (currentStep === totalSteps) {
                nextBtn.textContent = 'Finalizar';
                nextBtn.innerHTML = 'Finalizar <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><polyline points="20,6 9,17 4,12" stroke="currentColor" stroke-width="2"/></svg>';
            } else {
                nextBtn.innerHTML = 'Próximo <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg"><polyline points="9,18 15,12 9,6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>';
            }

            // Update confirmation summary if on step 5
            if (currentStep === 5) {
                updateConfirmationSummary();
            }
        }

        function validateStep(step) {
            switch(step) {
                case 1:
                    // Validate type selection
                    const selectedTypeOption = document.querySelector('.type-option.selected');
                    if (!selectedTypeOption) {
                        Swal.fire({
                            icon: 'warning',
                            title: 'Atenção',
                            text: 'Por favor, selecione um tipo de registro.',
                            background: '#2a2a2a',
                            color: '#ffffff',
                            confirmButtonColor: '#f59e0b'
                        });
                        return false;
                    }
                    return true;
                
                case 2:
                    // Validate client selection
                    if (!selectedClient) {
                        Swal.fire({
                            icon: 'warning',
                            title: 'Atenção',
                            text: 'Por favor, selecione um cliente.',
                            background: '#2a2a2a',
                            color: '#ffffff',
                            confirmButtonColor: '#f59e0b'
                        });
                        return false;
                    }
                    return true;
                
                case 3:
                    // Validate location selection
                    if (!selectedLocation) {
                        Swal.fire({
                            icon: 'warning',
                            title: 'Atenção',
                            text: 'Por favor, selecione um local para o evento.',
                            background: '#2a2a2a',
                            color: '#ffffff',
                            confirmButtonColor: '#f59e0b'
                        });
                        return false;
                    }
                    
                    // Validate period information
                    const periodType = document.querySelector('input[name="periodType"]:checked').value;
                    if (periodType === 'general') {
                        const weekdaysChecked = document.querySelectorAll('input[name="weekdays"]:checked').length;
                        const monthsChecked = document.querySelectorAll('input[name="months"]:checked').length;
                        if (weekdaysChecked === 0 || monthsChecked === 0) {
                            Swal.fire({
                                icon: 'warning',
                                title: 'Atenção',
                                text: 'Por favor, selecione pelo menos um dia da semana e um mês.',
                                background: '#2a2a2a',
                                color: '#ffffff',
                                confirmButtonColor: '#f59e0b'
                            });
                            return false;
                        }
                    }
                    return true;
                
                case 4:
                    // Validate event details
                    const eventDate = document.getElementById('eventDate').value;
                    const startTime = document.getElementById('startTime').value;
                    const endTime = document.getElementById('endTime').value;
                    const totalValue = document.getElementById('totalValue').value;

                    if (!eventDate) {
                        Swal.fire({
                            icon: 'warning',
                            title: 'Atenção',
                            text: 'Por favor, informe a data do evento.',
                            background: '#2a2a2a',
                            color: '#ffffff',
                            confirmButtonColor: '#f59e0b'
                        });
                        return false;
                    }

                    if (!startTime || !endTime) {
                        Swal.fire({
                            icon: 'warning',
                            title: 'Atenção',
                            text: 'Por favor, informe os horários de início e fim.',
                            background: '#2a2a2a',
                            color: '#ffffff',
                            confirmButtonColor: '#f59e0b'
                        });
                        return false;
                    }

                    if (!totalValue || totalValue === 'R$ 0,00') {
                        Swal.fire({
                            icon: 'warning',
                            title: 'Atenção',
                            text: 'Por favor, informe o valor total do evento.',
                            background: '#2a2a2a',
                            color: '#ffffff',
                            confirmButtonColor: '#f59e0b'
                        });
                        return false;
                    }

                    return true;
                
                default:
                    return true;
            }
        }

        function submitForm() {
            // Collect all form data
            const formData = {
                type: selectedType,
                client: selectedClient,
                location: selectedLocation,
                soundSupplier: selectedSoundSupplier,
                vanSupplier: selectedVanSupplier,
                eventDate: document.getElementById('eventDate').value,
                startTime: document.getElementById('startTime').value,
                endTime: document.getElementById('endTime').value,
                scheduleType: document.getElementById('scheduleType').value,
                needsSound: document.getElementById('needsSound').checked,
                totalValue: document.getElementById('totalValue').value,
                advancePayment: document.getElementById('advancePayment').value,
                observations: document.getElementById('eventObservations').value
            };

            console.log('Form submitted:', formData);
            
            Swal.fire({
                icon: 'success',
                title: 'Sucesso!',
                text: 'Orçamento criado com sucesso!',
                background: '#2a2a2a',
                color: '#ffffff',
                confirmButtonColor: '#f59e0b',
                confirmButtonText: 'OK'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Here you would typically send the data to the server
                    // window.location.href = '/agenda';
                }
            });
        }

                // Searchable Select functionality
        function initSearchableSelect() {
            const searchInput = document.getElementById('clientSearchInput');
            const dropdown = document.getElementById('clientDropdown');
            const selectContainer = document.getElementById('clientSearchableSelect');

            // Populate initial options
            renderClientOptions();

            // Toggle dropdown on input click
            searchInput.addEventListener('click', function() {
                if (this.readOnly) {
                    toggleDropdown();
                }
            });

            // Handle search input
            searchInput.addEventListener('input', function() {
                const searchTerm = this.value.toLowerCase();
                filteredClients = clients.filter(client => 
                    client.name.toLowerCase().includes(searchTerm) ||
                    client.phone.includes(searchTerm) ||
                    client.email.toLowerCase().includes(searchTerm)
                );
                renderClientOptions();
            });

            // Handle focus/blur for search mode
            searchInput.addEventListener('focus', function() {
                if (this.readOnly) {
                    this.readOnly = false;
                    this.value = '';
                    this.placeholder = 'Digite para buscar...';
                    selectContainer.classList.add('open');
                    renderClientOptions();
                }
            });

            // Close dropdown when clicking outside
            document.addEventListener('click', function(e) {
                if (!selectContainer.contains(e.target)) {
                    closeDropdown();
                }
            });
        }

        function toggleDropdown() {
            const selectContainer = document.getElementById('clientSearchableSelect');
            selectContainer.classList.toggle('open');
        }

        function closeDropdown() {
            const searchInput = document.getElementById('clientSearchInput');
            const selectContainer = document.getElementById('clientSearchableSelect');
            
            selectContainer.classList.remove('open');
            searchInput.readOnly = true;
            
            // Reset to selected client name
            if (selectedClient) {
                const selectedClientData = clients.find(c => c.id === selectedClient);
                searchInput.value = selectedClientData ? selectedClientData.name : '';
                searchInput.placeholder = 'Digite para buscar um cliente...';
            } else {
                searchInput.value = '';
                searchInput.placeholder = 'Digite para buscar um cliente...';
            }
            
            // Reset filtered clients
            filteredClients = [...clients];
        }

        function renderClientOptions() {
            const dropdown = document.getElementById('clientDropdown');
            dropdown.innerHTML = '';

            if (filteredClients.length === 0) {
                const noResults = document.createElement('div');
                noResults.className = 'searchable-select-option no-results';
                noResults.textContent = 'Nenhum cliente encontrado';
                dropdown.appendChild(noResults);
                return;
            }

            filteredClients.forEach(client => {
                const option = document.createElement('div');
                option.className = 'searchable-select-option';
                option.innerHTML = `
                    <div style="font-weight: 600;">${client.name}</div>
                    <div style="font-size: 12px; color: #888; margin-top: 2px;">${client.phone} • ${client.email}</div>
                `;
                option.dataset.value = client.id;

                if (client.id === selectedClient) {
                    option.classList.add('selected');
                }

                option.addEventListener('click', function() {
                    selectClient(client.id, client.name);
                });

                dropdown.appendChild(option);
            });
        }

        function selectClient(clientId, clientName) {
            selectedClient = clientId;
            const searchInput = document.getElementById('clientSearchInput');
            searchInput.value = clientName;
            
            closeDropdown();
            
            console.log('Cliente selecionado:', clientId);
        }

        // Location Searchable Select functionality
        function initLocationSearchableSelect() {
            const searchInput = document.getElementById('locationSearchInput');
            const dropdown = document.getElementById('locationDropdown');
            const selectContainer = document.getElementById('locationSearchableSelect');

            // Populate initial options
            renderLocationOptions();

            // Toggle dropdown on input click
            searchInput.addEventListener('click', function() {
                if (this.readOnly) {
                    toggleLocationDropdown();
                }
            });

            // Handle search input
            searchInput.addEventListener('input', function() {
                const searchTerm = this.value.toLowerCase();
                filteredLocations = locations.filter(location => 
                    location.name.toLowerCase().includes(searchTerm) ||
                    location.address.toLowerCase().includes(searchTerm) ||
                    location.city.toLowerCase().includes(searchTerm)
                );
                renderLocationOptions();
            });

            // Handle focus/blur for search mode
            searchInput.addEventListener('focus', function() {
                if (this.readOnly) {
                    this.readOnly = false;
                    this.value = '';
                    this.placeholder = 'Digite para buscar...';
                    selectContainer.classList.add('open');
                    renderLocationOptions();
                }
            });

            // Close dropdown when clicking outside
            document.addEventListener('click', function(e) {
                if (!selectContainer.contains(e.target)) {
                    closeLocationDropdown();
                }
            });
        }

        function toggleLocationDropdown() {
            const selectContainer = document.getElementById('locationSearchableSelect');
            selectContainer.classList.toggle('open');
        }

        function closeLocationDropdown() {
            const searchInput = document.getElementById('locationSearchInput');
            const selectContainer = document.getElementById('locationSearchableSelect');
            
            selectContainer.classList.remove('open');
            searchInput.readOnly = true;
            
            // Reset to selected location name
            if (selectedLocation) {
                const selectedLocationData = locations.find(l => l.id === selectedLocation);
                searchInput.value = selectedLocationData ? selectedLocationData.name : '';
                searchInput.placeholder = 'Selecione um local';
            } else {
                searchInput.value = '';
                searchInput.placeholder = 'Selecione um local';
            }
            
            // Reset filtered locations
            filteredLocations = [...locations];
        }

        function renderLocationOptions() {
            const dropdown = document.getElementById('locationDropdown');
            dropdown.innerHTML = '';

            if (filteredLocations.length === 0) {
                const noResults = document.createElement('div');
                noResults.className = 'searchable-select-option no-results';
                noResults.textContent = 'Nenhum local encontrado';
                dropdown.appendChild(noResults);
                return;
            }

            filteredLocations.forEach(location => {
                const option = document.createElement('div');
                option.className = 'searchable-select-option';
                
                let optionContent = `<div style="font-weight: 600;">${location.name}</div>`;
                optionContent += `<div style="font-size: 12px; color: #888; margin-top: 2px;">${location.address}</div>`;
                
                if (location.city) {
                    optionContent += `<div style="font-size: 12px; color: #888;">Cidade: ${location.city}</div>`;
                }
                
                if (location.capacity) {
                    optionContent += `<div style="font-size: 12px; color: #888;">Capacidade: ${location.capacity}</div>`;
                }
                
                if (location.equipment) {
                    optionContent += `<div style="font-size: 12px; color: #888;">Equipamento: ${location.equipment}</div>`;
                }
                
                if (location.details) {
                    optionContent += `<div style="font-size: 12px; color: #888;">${location.details}</div>`;
                }
                
                option.innerHTML = optionContent;
                option.dataset.value = location.id;

                if (location.id === selectedLocation) {
                    option.classList.add('selected');
                }

                option.addEventListener('click', function() {
                    selectLocation(location.id, location.name);
                });

                dropdown.appendChild(option);
            });
        }

        function selectLocation(locationId, locationName) {
            selectedLocation = locationId;
            const searchInput = document.getElementById('locationSearchInput');
            searchInput.value = locationName;
            
            closeLocationDropdown();
            
            // Update van suppliers when location changes
            updateVanSuppliers();
            
            console.log('Local selecionado:', locationId);
        }

        // Transport handlers
        function initTransportHandlers() {
            // Handle transport type radio buttons
            document.querySelectorAll('input[name="transportType"]').forEach(radio => {
                radio.addEventListener('change', function() {
                    updateVanSuppliersVisibility();
                });
            });
        }

        function updateVanSuppliersVisibility() {
            const transportType = document.querySelector('input[name="transportType"]:checked').value;
            const vanSuppliersSection = document.getElementById('vanSuppliersSection');

            // Mostra fornecedores apenas se precisa de van (não cliente nem nenhum)
            if (transportType === 'van') {
                vanSuppliersSection.style.display = 'block';
            } else {
                vanSuppliersSection.style.display = 'none';
                selectedVanSupplier = null;
                const searchInput = document.getElementById('vanSupplierSearchInput');
                searchInput.value = '';
            }
        }



        // Available dates functionality
        function updateAvailableDates() {
            const periodType = document.querySelector('input[name="periodType"]:checked').value;
            
            if (periodType !== 'general') {
                return;
            }

            const selectedWeekdays = Array.from(document.querySelectorAll('input[name="weekdays"]:checked')).map(cb => cb.value);
            const selectedMonths = Array.from(document.querySelectorAll('input[name="months"]:checked')).map(cb => cb.value);

            if (selectedWeekdays.length === 0 || selectedMonths.length === 0) {
                showNoDatesMessage();
                return;
            }

            // Map month names to numbers
            const monthMap = {
                'janeiro': 0, 'fevereiro': 1, 'marco': 2, 'abril': 3,
                'maio': 4, 'junho': 5, 'julho': 6, 'agosto': 7,
                'setembro': 8, 'outubro': 9, 'novembro': 10, 'dezembro': 11
            };

            // Map weekday names to numbers (0 = Sunday, 6 = Saturday)
            const weekdayMap = {
                'domingo': 0, 'segunda': 1, 'terca': 2, 'quarta': 3,
                'quinta': 4, 'sexta': 5, 'sabado': 6
            };

            // Filter available dates based on criteria
            const filteredDates = availableDates.filter(dateObj => {
                const date = dateObj.date;
                const month = date.getMonth();
                const weekday = date.getDay();

                const monthSelected = selectedMonths.some(monthName => monthMap[monthName] === month);
                const weekdaySelected = selectedWeekdays.some(weekdayName => weekdayMap[weekdayName] === weekday);

                return monthSelected && weekdaySelected && dateObj.available;
            });

            if (filteredDates.length === 0) {
                showNoDatesMessage();
            } else {
                showAvailableDates(filteredDates);
            }
        }

        function showAvailableDates(dates) {
            const datesList = document.getElementById('availableDatesList');
            const noDatesMessage = document.getElementById('noDatesMessage');
            
            noDatesMessage.style.display = 'none';
            datesList.style.display = 'block';
            
            // Sort dates chronologically
            dates.sort((a, b) => a.date - b.date);
            
            datesList.innerHTML = '';
            dates.forEach(dateObj => {
                const dateCard = document.createElement('div');
                dateCard.className = 'available-date-card';
                
                const formattedDate = dateObj.date.toLocaleDateString('pt-BR', {
                    weekday: 'long',
                    year: 'numeric',
                    month: 'long',
                    day: 'numeric'
                });
                
                dateCard.innerHTML = `
                    <div class="date-info">
                        <span class="date-text">${formattedDate}</span>
                    </div>
                    <button class="date-select-btn" onclick="selectDate('${dateObj.date.toISOString()}')">
                        Selecionar
                    </button>
                `;
                
                datesList.appendChild(dateCard);
            });
        }

        function showNoDatesMessage() {
            const datesList = document.getElementById('availableDatesList');
            const noDatesMessage = document.getElementById('noDatesMessage');
            
            datesList.style.display = 'none';
            noDatesMessage.style.display = 'block';
        }

        function selectDate(dateString) {
            const date = new Date(dateString);
            const formattedDate = date.toLocaleDateString('pt-BR');
            
            console.log('Data selecionada:', formattedDate);
            
            Swal.fire({
                icon: 'success',
                title: 'Data Selecionada',
                text: `Data ${formattedDate} selecionada!`,
                background: '#2a2a2a',
                color: '#ffffff',
                confirmButtonColor: '#f59e0b',
                timer: 2000,
                showConfirmButton: false
            });
            
            // Highlight selected date
            document.querySelectorAll('.available-date-card').forEach(card => {
                card.classList.remove('selected');
            });
            event.target.closest('.available-date-card').classList.add('selected');
        }

        // Add click handlers to step indicators for navigation
        document.querySelectorAll('.wizard-step').forEach((step, index) => {
            step.addEventListener('click', function() {
                const stepNumber = index + 1;
                if (stepNumber < currentStep || stepNumber === currentStep) {
                    goToStep(stepNumber);
                }
            });
        });

        // Sound installation handlers
        function initSoundHandlers() {
            const needsSoundCheckbox = document.getElementById('needsSound');
            const soundSuppliersSection = document.getElementById('soundSuppliersSection');

            needsSoundCheckbox.addEventListener('change', function() {
                if (this.checked) {
                    soundSuppliersSection.style.display = 'block';
                } else {
                    soundSuppliersSection.style.display = 'none';
                    selectedSoundSupplier = null;
                    const searchInput = document.getElementById('soundSupplierSearchInput');
                    searchInput.value = '';
                }
            });
        }

        // Sound Suppliers Select functionality
        function initSoundSuppliersSelect() {
            const searchInput = document.getElementById('soundSupplierSearchInput');
            const dropdown = document.getElementById('soundSupplierDropdown');
            const selectContainer = searchInput.closest('.searchable-select');

            // Populate initial options
            renderSoundSupplierOptions();

            // Toggle dropdown on input click
            searchInput.addEventListener('click', function() {
                if (this.readOnly) {
                    toggleSoundSupplierDropdown();
                }
            });

            // Handle search input
            searchInput.addEventListener('input', function() {
                const searchTerm = this.value.toLowerCase();
                filteredSoundSuppliers = soundSuppliers.filter(supplier => 
                    supplier.name.toLowerCase().includes(searchTerm) ||
                    supplier.phone.includes(searchTerm) ||
                    supplier.equipment.toLowerCase().includes(searchTerm)
                );
                renderSoundSupplierOptions();
            });

            // Handle focus/blur for search mode
            searchInput.addEventListener('focus', function() {
                if (this.readOnly) {
                    this.readOnly = false;
                    this.value = '';
                    this.placeholder = 'Digite para buscar...';
                    selectContainer.classList.add('open');
                    renderSoundSupplierOptions();
                }
            });

            // Close dropdown when clicking outside
            document.addEventListener('click', function(e) {
                if (!selectContainer.contains(e.target)) {
                    closeSoundSupplierDropdown();
                }
            });
        }

        function toggleSoundSupplierDropdown() {
            const selectContainer = document.getElementById('soundSupplierSearchInput').closest('.searchable-select');
            selectContainer.classList.toggle('open');
        }

        function closeSoundSupplierDropdown() {
            const searchInput = document.getElementById('soundSupplierSearchInput');
            const selectContainer = searchInput.closest('.searchable-select');
            
            selectContainer.classList.remove('open');
            searchInput.readOnly = true;
            
            // Reset to selected supplier name
            if (selectedSoundSupplier) {
                const selectedSupplierData = soundSuppliers.find(s => s.id === selectedSoundSupplier);
                searchInput.value = selectedSupplierData ? selectedSupplierData.name : '';
                searchInput.placeholder = 'Selecione um fornecedor de som';
            } else {
                searchInput.value = '';
                searchInput.placeholder = 'Selecione um fornecedor de som';
            }
            
            // Reset filtered suppliers
            filteredSoundSuppliers = [...soundSuppliers];
        }

        function renderSoundSupplierOptions() {
            const dropdown = document.getElementById('soundSupplierDropdown');
            dropdown.innerHTML = '';

            if (filteredSoundSuppliers.length === 0) {
                const noResults = document.createElement('div');
                noResults.className = 'searchable-select-option no-results';
                noResults.textContent = 'Nenhum fornecedor encontrado';
                dropdown.appendChild(noResults);
                return;
            }

            filteredSoundSuppliers.forEach(supplier => {
                const option = document.createElement('div');
                option.className = 'searchable-select-option';
                
                let optionContent = `<div style="font-weight: 600;">${supplier.name}</div>`;
                optionContent += `<div style="font-size: 12px; color: #888; margin-top: 2px;">${supplier.phone}</div>`;
                optionContent += `<div style="font-size: 12px; color: #888;">Equipamento: ${supplier.equipment}</div>`;
                optionContent += `<div style="font-size: 12px; color: #f59e0b; font-weight: 600;">${supplier.price}</div>`;
                
                if (!supplier.available) {
                    optionContent += `<div style="font-size: 12px; color: #ef4444;">Indisponível</div>`;
                    option.style.opacity = '0.6';
                }
                
                option.innerHTML = optionContent;
                option.dataset.value = supplier.id;

                if (supplier.id === selectedSoundSupplier) {
                    option.classList.add('selected');
                }

                if (supplier.available) {
                    option.addEventListener('click', function() {
                        selectSoundSupplier(supplier.id, supplier.name);
                    });
                }

                dropdown.appendChild(option);
            });
        }

        function selectSoundSupplier(supplierId, supplierName) {
            selectedSoundSupplier = supplierId;
            const searchInput = document.getElementById('soundSupplierSearchInput');
            searchInput.value = supplierName;
            
            closeSoundSupplierDropdown();
            
            console.log('Fornecedor de som selecionado:', supplierId);
        }

        // Van Suppliers Select functionality (Updated)
        function initVanSuppliersSelect() {
            const searchInput = document.getElementById('vanSupplierSearchInput');
            const dropdown = document.getElementById('vanSupplierDropdown');
            const selectContainer = searchInput.closest('.searchable-select');

            // Populate initial options
            renderVanSupplierOptions();

            // Toggle dropdown on input click
            searchInput.addEventListener('click', function() {
                if (this.readOnly) {
                    toggleVanSupplierDropdown();
                }
            });

            // Handle search input
            searchInput.addEventListener('input', function() {
                const searchTerm = this.value.toLowerCase();
                filteredVanSuppliers = vanSuppliers.filter(supplier => 
                    supplier.name.toLowerCase().includes(searchTerm) ||
                    supplier.phone.includes(searchTerm) ||
                    supplier.capacity.toLowerCase().includes(searchTerm)
                );
                renderVanSupplierOptions();
            });

            // Handle focus/blur for search mode
            searchInput.addEventListener('focus', function() {
                if (this.readOnly) {
                    this.readOnly = false;
                    this.value = '';
                    this.placeholder = 'Digite para buscar...';
                    selectContainer.classList.add('open');
                    renderVanSupplierOptions();
                }
            });

            // Close dropdown when clicking outside
            document.addEventListener('click', function(e) {
                if (!selectContainer.contains(e.target)) {
                    closeVanSupplierDropdown();
                }
            });
        }

        function toggleVanSupplierDropdown() {
            const selectContainer = document.getElementById('vanSupplierSearchInput').closest('.searchable-select');
            selectContainer.classList.toggle('open');
        }

        function closeVanSupplierDropdown() {
            const searchInput = document.getElementById('vanSupplierSearchInput');
            const selectContainer = searchInput.closest('.searchable-select');
            
            selectContainer.classList.remove('open');
            searchInput.readOnly = true;
            
            // Reset to selected supplier name
            if (selectedVanSupplier) {
                const selectedSupplierData = vanSuppliers.find(s => s.id === selectedVanSupplier);
                searchInput.value = selectedSupplierData ? selectedSupplierData.name : '';
                searchInput.placeholder = 'Selecione um fornecedor de van';
            } else {
                searchInput.value = '';
                searchInput.placeholder = 'Selecione um fornecedor de van';
            }
            
            // Reset filtered suppliers
            filteredVanSuppliers = [...vanSuppliers];
        }

        function renderVanSupplierOptions() {
            const dropdown = document.getElementById('vanSupplierDropdown');
            dropdown.innerHTML = '';

            if (filteredVanSuppliers.length === 0) {
                const noResults = document.createElement('div');
                noResults.className = 'searchable-select-option no-results';
                noResults.textContent = 'Nenhum fornecedor encontrado';
                dropdown.appendChild(noResults);
                return;
            }

            filteredVanSuppliers.forEach(supplier => {
                const option = document.createElement('div');
                option.className = 'searchable-select-option';
                
                let optionContent = `<div style="font-weight: 600;">${supplier.name}</div>`;
                optionContent += `<div style="font-size: 12px; color: #888; margin-top: 2px;">${supplier.phone}</div>`;
                optionContent += `<div style="font-size: 12px; color: #888;">Capacidade: ${supplier.capacity}</div>`;
                optionContent += `<div style="font-size: 12px; color: #f59e0b; font-weight: 600;">${supplier.price}</div>`;
                
                if (!supplier.available) {
                    optionContent += `<div style="font-size: 12px; color: #ef4444;">Indisponível</div>`;
                    option.style.opacity = '0.6';
                }
                
                option.innerHTML = optionContent;
                option.dataset.value = supplier.id;

                if (supplier.id === selectedVanSupplier) {
                    option.classList.add('selected');
                }

                if (supplier.available) {
                    option.addEventListener('click', function() {
                        selectVanSupplier(supplier.id, supplier.name);
                    });
                }

                dropdown.appendChild(option);
            });
        }

        function selectVanSupplier(supplierId, supplierName) {
            selectedVanSupplier = supplierId;
            const searchInput = document.getElementById('vanSupplierSearchInput');
            searchInput.value = supplierName;
            
            closeVanSupplierDropdown();
            
            console.log('Fornecedor de van selecionado:', supplierId);
        }

        // Update van suppliers visibility to use the new select
        function updateVanSuppliersVisibility() {
            const transportType = document.querySelector('input[name="transportType"]:checked').value;
            const vanSuppliersSection = document.getElementById('vanSuppliersSection');

            // Mostra fornecedores apenas se precisa de van (não cliente nem nenhum)
            if (transportType === 'van') {
                vanSuppliersSection.style.display = 'block';
            } else {
                vanSuppliersSection.style.display = 'none';
                selectedVanSupplier = null;
                const searchInput = document.getElementById('vanSupplierSearchInput');
                searchInput.value = '';
            }
        }

        // Price formatting functionality
        function initPriceFormatting() {
            const totalValueInput = document.getElementById('totalValue');
            const advancePaymentInput = document.getElementById('advancePayment');

            // Format price inputs
            [totalValueInput, advancePaymentInput].forEach(input => {
                if (input) {
                    input.addEventListener('input', function() {
                        formatPriceInput(this);
                    });

                    input.addEventListener('focus', function() {
                        // Remove formatting for editing
                        this.value = this.value.replace(/[^\d]/g, '');
                    });

                    input.addEventListener('blur', function() {
                        // Apply formatting when losing focus
                        formatPriceInput(this);
                    });
                }
            });
        }

        function formatPriceInput(input) {
            let value = input.value.replace(/[^\d]/g, '');
            
            if (value === '') {
                input.value = '';
                return;
            }

            // Convert to number and format as currency
            const numericValue = parseInt(value) / 100;
            input.value = 'R$ ' + numericValue.toLocaleString('pt-BR', {
                minimumFractionDigits: 2,
                maximumFractionDigits: 2
            });
        }

        // Update confirmation summary
        function updateConfirmationSummary() {
            // Update type summary
            const typeSummary = document.getElementById('typeSummary');
            typeSummary.innerHTML = `<span class="summary-value">${selectedType === 'orcamento' ? 'Orçamento' : 'Agendamento'}</span>`;

            // Update client summary
            const clientSummary = document.getElementById('clientSummary');
            if (selectedClient) {
                const clientData = clients.find(c => c.id === selectedClient);
                if (clientData) {
                    clientSummary.innerHTML = `
                        <div class="summary-row">
                            <span class="summary-label">Nome:</span>
                            <span class="summary-value">${clientData.name}</span>
                        </div>
                        <div class="summary-row">
                            <span class="summary-label">Telefone:</span>
                            <span class="summary-value">${clientData.phone}</span>
                        </div>
                        <div class="summary-row">
                            <span class="summary-label">Email:</span>
                            <span class="summary-value">${clientData.email}</span>
                        </div>
                    `;
                }
            } else {
                clientSummary.innerHTML = '<span class="summary-label">Nenhum cliente selecionado</span>';
            }

            // Update location summary
            const locationSummary = document.getElementById('locationSummary');
            if (selectedLocation) {
                const locationData = locations.find(l => l.id === selectedLocation);
                if (locationData) {
                    let locationContent = `
                        <div class="summary-row">
                            <span class="summary-label">Nome:</span>
                            <span class="summary-value">${locationData.name}</span>
                        </div>
                        <div class="summary-row">
                            <span class="summary-label">Endereço:</span>
                            <span class="summary-value">${locationData.address}</span>
                        </div>
                        <div class="summary-row">
                            <span class="summary-label">Cidade:</span>
                            <span class="summary-value">${locationData.city}</span>
                        </div>
                    `;
                    
                    if (locationData.capacity) {
                        locationContent += `
                            <div class="summary-row">
                                <span class="summary-label">Capacidade:</span>
                                <span class="summary-value">${locationData.capacity}</span>
                            </div>
                        `;
                    }
                    
                    if (locationData.equipment) {
                        locationContent += `
                            <div class="summary-row">
                                <span class="summary-label">Equipamento:</span>
                                <span class="summary-value">${locationData.equipment}</span>
                            </div>
                        `;
                    }
                    
                    locationSummary.innerHTML = locationContent;
                }
            } else {
                locationSummary.innerHTML = '<span class="summary-label">Nenhum local selecionado</span>';
            }

            // Update transport summary
            const transportSummary = document.getElementById('transportSummary');
            const transportContent = document.getElementById('transportContent');
            const transportType = document.querySelector('input[name="transportType"]:checked')?.value;
            
            if (transportType === 'van') {
                transportSummary.style.display = 'block';
                if (selectedVanSupplier) {
                    const vanData = vanSuppliers.find(v => v.id === selectedVanSupplier);
                    if (vanData) {
                        transportContent.innerHTML = `
                            <div class="supplier-info-summary">
                                <div class="supplier-name-summary">${vanData.name}</div>
                                <div class="supplier-details-summary">${vanData.phone} • ${vanData.capacity}</div>
                                <div class="supplier-price-summary">${vanData.price}</div>
                            </div>
                        `;
                    }
                } else {
                    transportContent.innerHTML = '<span class="summary-label">Precisa de van - Fornecedor não selecionado</span>';
                }
            } else if (transportType === 'cliente') {
                transportSummary.style.display = 'block';
                transportContent.innerHTML = '<span class="summary-value">Cliente disponibiliza o van</span>';
            } else {
                transportSummary.style.display = 'none';
            }

            // Update event details summary
            const eventDate = document.getElementById('eventDate').value;
            const startTime = document.getElementById('startTime').value;
            const endTime = document.getElementById('endTime').value;
            const scheduleType = document.getElementById('scheduleType');
            
            document.getElementById('eventDateSummary').textContent = eventDate ? 
                new Date(eventDate).toLocaleDateString('pt-BR') : 'Não informada';
            
            document.getElementById('eventTimeSummary').textContent = 
                (startTime && endTime) ? `${startTime} às ${endTime}` : 'Não informado';
            
            document.getElementById('scheduleTypeSummary').textContent = 
                scheduleType.options[scheduleType.selectedIndex].text;

            // Update sound summary
            const soundSummary = document.getElementById('soundSummary');
            const soundContent = document.getElementById('soundContent');
            const needsSound = document.getElementById('needsSound').checked;
            
            if (needsSound) {
                soundSummary.style.display = 'block';
                if (selectedSoundSupplier) {
                    const soundData = soundSuppliers.find(s => s.id === selectedSoundSupplier);
                    if (soundData) {
                        soundContent.innerHTML = `
                            <div class="supplier-info-summary">
                                <div class="supplier-name-summary">${soundData.name}</div>
                                <div class="supplier-details-summary">${soundData.phone}</div>
                                <div class="supplier-details-summary">Equipamento: ${soundData.equipment}</div>
                                <div class="supplier-price-summary">${soundData.price}</div>
                            </div>
                        `;
                    }
                } else {
                    soundContent.innerHTML = '<span class="summary-label">Precisa instalar som - Fornecedor não selecionado</span>';
                }
            } else {
                soundSummary.style.display = 'none';
            }

            // Update price summary
            const totalValue = document.getElementById('totalValue').value || 'R$ 0,00';
            const advancePayment = document.getElementById('advancePayment').value || 'R$ 0,00';
            
            document.getElementById('totalValueSummary').textContent = totalValue;
            document.getElementById('advancePaymentSummary').textContent = advancePayment;

            // Update observations summary
            const observationsSummary = document.getElementById('observationsSummary');
            const observationsContent = document.getElementById('observationsContent');
            const observations = document.getElementById('eventObservations').value;
            
            if (observations.trim()) {
                observationsSummary.style.display = 'block';
                observationsContent.querySelector('.summary-text').textContent = observations;
            } else {
                observationsSummary.style.display = 'none';
            }
        }
    </script>

</body>
</html>

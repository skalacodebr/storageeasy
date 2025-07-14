@include('layouts/head-main')

<head>
    <title>Agenda</title>

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
            align-items: flex-start;
            margin-bottom: 32px;
            padding: 0 24px;
        }

        .header-left {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .page-title {
            font-size: 32px;
            font-weight: 600;
            color: #ffffff;
            margin: 0;
        }

        .page-subtitle {
            color: #888;
            font-size: 16px;
            margin: 0;
        }

        .new-event-btn {
            background-color: #f59e0b;
            color: #1a1a1a;
            border: none;
            padding: 12px 24px;
            border-radius: 8px;
            font-weight: 600;
            font-size: 14px;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 8px;
            transition: all 0.3s ease;
            text-decoration: none;
        }

        .new-event-btn:hover {
            background-color: #d97706;
            color: #1a1a1a;
        }

        .filters-section {
            display: flex;
            gap: 16px;
            margin: 0 24px 24px 24px;
        }

        .filter-select {
            background-color: #2a2a2a;
            border: 1px solid #3a3a3a;
            color: #ffffff;
            padding: 12px 16px;
            border-radius: 8px;
            font-size: 14px;
            min-width: 180px;
            cursor: pointer;
        }

        .filter-select:focus {
            outline: none;
            border-color: #f59e0b;
        }

        /* Searchable Select */
        .searchable-select {
            position: relative;
            min-width: 180px;
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

        .view-controls {
            display: flex;
            gap: 0;
            margin: 0 24px 24px 24px;
        }

        .view-btn {
            background-color: #2a2a2a;
            border: 1px solid #3a3a3a;
            color: #888;
            padding: 12px 20px;
            font-size: 14px;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .view-btn:first-child {
            border-radius: 8px 0 0 8px;
        }

        .view-btn:last-child {
            border-radius: 0 8px 8px 0;
        }

        .view-btn:not(:first-child) {
            border-left: none;
        }

        .view-btn.active {
            background-color: #f59e0b;
            color: #1a1a1a;
            border-color: #f59e0b;
        }

        .view-btn:hover:not(.active) {
            background-color: #3a3a3a;
            color: #ffffff;
        }

        .calendar-container {
            background-color: rgba(42, 42, 42, 0);
            border-radius: 12px;
            padding: 24px;
            border: 1px solid #3a3a3a;
            margin: 0 24px;
        }

        .calendar-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 24px;
        }

        .calendar-title {
            font-size: 24px;
            font-weight: 600;
            color: #ffffff;
            margin: 0;
        }

        .calendar-nav {
            display: flex;
            gap: 8px;
        }

        .nav-btn {
            background-color: #2a2a2a;
            border: 1px solid #3a3a3a;
            color: #ffffff;
            width: 40px;
            height: 40px;
            border-radius: 8px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }

        .nav-btn:hover {
            background-color: #3a3a3a;
        }

        .calendar-grid {
            display: grid;
            grid-template-columns: repeat(7, 1fr);
            gap: 1px;
            background-color: #3a3a3a;
            border-radius: 8px;
            overflow: hidden;
        }

        .calendar-header-cell {
            background-color: #2a2a2a;
            padding: 16px 8px;
            text-align: center;
            font-weight: 600;
            font-size: 14px;
            color: #888;
        }

        .calendar-cell {
            background-color: #1a1a1a;
            min-height: 120px;
            padding: 12px;
            position: relative;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .calendar-cell:hover {
            background-color: #2a2a2a;
        }

        .calendar-cell.today {
            border: 2px solid #f59e0b;
            background-color: #2a2a2a;
        }

        .calendar-cell.other-month {
            background-color: #0f0f0f;
            color: #555;
        }

        .calendar-cell.other-month:hover {
            background-color: #1a1a1a;
        }

        .cell-date {
            font-size: 16px;
            font-weight: 600;
            color: #ffffff;
            margin-bottom: 8px;
        }

        .calendar-cell.other-month .cell-date {
            color: #555;
        }

        .event-item {
            background-color: #f59e0b;
            color: #1a1a1a;
            padding: 4px 8px;
            border-radius: 4px;
            font-size: 12px;
            font-weight: 500;
            margin-bottom: 4px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .event-item:hover {
            background-color: #d97706;
        }

        .event-item.confirmed {
            background-color: #10b981;
            color: #ffffff;
        }

        .event-item.pending {
            background-color: #f59e0b;
            color: #1a1a1a;
        }

        .event-item.cancelled {
            background-color: #ef4444;
            color: #ffffff;
        }

        .event-item.concluido {
            background-color: #6b7280;
            color: #ffffff;
        }

        .container-fluid {
            padding: 24px 0;
        }

        /* List View */
        .list-container {
            display: none;
            margin: 0 24px;
        }

        .list-title {
            font-size: 24px;
            font-weight: 600;
            color: #ffffff;
            margin-bottom: 24px;
        }

        .events-list {
            display: flex;
            flex-direction: column;
            gap: 16px;
        }

        .event-card {
            background-color: rgba(42, 42, 42, 0);
            border: 1px solid #3a3a3a;
            border-radius: 12px;
            padding: 24px;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .event-card:hover {
            background-color: #2a2a2a;
            border-color: #f59e0b;
            transform: translateY(-2px);
        }

        .event-card-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            gap: 24px;
        }

        .event-card-left {
            flex: 1;
        }

        .event-card-title {
            font-size: 20px;
            font-weight: 600;
            color: #ffffff;
            margin: 0 0 16px 0;
        }

        .event-card-meta {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 12px;
        }

        .event-card-date,
        .event-card-time,
        .event-card-client,
        .event-card-location {
            display: flex;
            align-items: center;
            gap: 8px;
            color: #888;
            font-size: 14px;
        }

        .event-card-right {
            display: flex;
            flex-direction: column;
            align-items: flex-end;
            gap: 12px;
            min-width: 150px;
        }

        .event-card-status {
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
        }

        .event-card-status.pending {
            background-color: #f59e0b;
            color: #1a1a1a;
        }

        .event-card-status.confirmed {
            background-color: #10b981;
            color: #ffffff;
        }

        .event-card-status.cancelled {
            background-color: #ef4444;
            color: #ffffff;
        }

        .event-card-status.concluido {
            background-color: #6b7280;
            color: #ffffff;
        }

        .event-card-price {
            font-size: 18px;
            font-weight: 600;
            color: #f59e0b;
        }

        .event-card-actions {
            display: flex;
            gap: 8px;
        }

        .event-action-btn {
            background-color: #3a3a3a;
            border: 1px solid #4a4a4a;
            color: #ffffff;
            width: 36px;
            height: 36px;
            border-radius: 8px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            transition: all 0.3s ease;
        }

        .event-action-btn:hover {
            background-color: #4a4a4a;
            border-color: #5a5a5a;
        }

        .event-action-btn.view:hover {
            background-color: #f59e0b;
            border-color: #f59e0b;
        }

        .event-action-btn.edit:hover {
            background-color: #f59e0b;
            border-color: #f59e0b;
            color: #1a1a1a;
        }

        .list-empty {
            text-align: center;
            padding: 80px 24px;
            color: #888;
        }

        .list-empty-icon {
            width: 64px;
            height: 64px;
            margin: 0 auto 24px auto;
            color: #555;
        }

        .list-empty h3 {
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 12px;
            color: #ffffff;
        }

        .list-empty p {
            font-size: 16px;
            margin-bottom: 32px;
            color: #888;
        }

        .create-first-event-btn {
            background-color: #f59e0b;
            color: #1a1a1a;
            border: none;
            padding: 14px 28px;
            border-radius: 8px;
            font-weight: 600;
            font-size: 16px;
            cursor: pointer;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            transition: all 0.3s ease;
            text-decoration: none;
        }

        .create-first-event-btn:hover {
            background-color: #d97706;
            color: #1a1a1a;
            transform: translateY(-1px);
        }

        /* No Date Events View */
        .no-date-container {
            display: none;
            margin: 0 24px;
        }

        .no-date-title {
            font-size: 24px;
            font-weight: 600;
            color: #ffffff;
            margin-bottom: 24px;
        }

        .no-date-event {
            background-color: rgba(42, 42, 42, 0);
            border: 1px solid #3a3a3a;
            border-radius: 12px;
            padding: 24px;
            margin-bottom: 16px;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .no-date-event:hover {
            background-color: #2a2a2a;
            border-color: #f59e0b;
        }

        .no-date-event-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 16px;
        }

        .no-date-event-title {
            font-size: 20px;
            font-weight: 600;
            color: #ffffff;
            margin: 0 0 8px 0;
        }

        .no-date-event-location {
            display: flex;
            align-items: center;
            gap: 8px;
            color: #888;
            font-size: 14px;
        }

        .no-date-event-status {
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
        }

        .no-date-event-status.pending {
            background-color: #f59e0b;
            color: #1a1a1a;
        }

        .no-date-event-status.confirmed {
            background-color: #10b981;
            color: #ffffff;
        }

        .no-date-event-status.cancelled {
            background-color: #ef4444;
            color: #ffffff;
        }

        .no-date-event-status.concluido {
            background-color: #6b7280;
            color: #ffffff;
        }

        .no-date-event-footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .no-date-event-price {
            display: flex;
            align-items: center;
            gap: 8px;
            color: #ffffff;
            font-size: 18px;
            font-weight: 600;
        }

        .no-date-empty {
            text-align: center;
            padding: 60px 24px;
            color: #888;
        }

        .no-date-empty h3 {
            font-size: 20px;
            margin-bottom: 8px;
            color: #ffffff;
        }

        .no-date-empty p {
            font-size: 16px;
            margin-bottom: 24px;
        }

        .create-event-link {
            color: #f59e0b;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .create-event-link:hover {
            color: #d97706;
            text-decoration: underline;
        }

        /* Event Details Modal */
        .event-modal {
            display: none;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            z-index: 10001;
            justify-content: center;
            align-items: center;
        }

        .event-modal.show {
            display: flex;
        }

        .event-modal-content {
            background-color: #2a2a2a;
            border-radius: 16px;
            padding: 32px;
            max-width: 500px;
            width: 90%;
            max-height: 80vh;
            overflow-y: auto;
            position: relative;
            border: 1px solid #3a3a3a;
        }

        .event-modal-header {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 24px;
        }

        .event-modal-title {
            font-size: 24px;
            font-weight: 600;
            color: #ffffff;
            margin: 0;
            flex: 1;
            margin-right: 16px;
        }

        .event-modal-status {
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 12px;
            font-weight: 600;
            text-transform: uppercase;
        }

        .event-modal-status.pending {
            background-color: #f59e0b;
            color: #1a1a1a;
        }

        .event-modal-status.confirmed {
            background-color: #10b981;
            color: #ffffff;
        }

        .event-modal-status.cancelled {
            background-color: #ef4444;
            color: #ffffff;
        }

        .event-modal-status.concluido {
            background-color: #6b7280;
            color: #ffffff;
        }

        .event-modal-close {
            position: absolute;
            top: 16px;
            right: 16px;
            background: none;
            border: none;
            color: #888;
            font-size: 24px;
            cursor: pointer;
            width: 32px;
            height: 32px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        .event-modal-close:hover {
            background-color: #3a3a3a;
            color: #ffffff;
        }

        .event-modal-field {
            margin-bottom: 24px;
        }

        .event-modal-label {
            display: flex;
            align-items: center;
            gap: 8px;
            color: #888;
            font-size: 14px;
            margin-bottom: 8px;
            font-weight: 500;
        }

        .event-modal-value {
            color: #ffffff;
            font-size: 16px;
            font-weight: 500;
        }

        .event-modal-price {
            font-size: 20px;
            font-weight: 600;
        }

        .event-modal-requirements {
            background-color: #1a1a1a;
            border: 1px solid #3a3a3a;
            border-radius: 8px;
            padding: 16px;
            margin-bottom: 24px;
        }

        .event-modal-requirements h4 {
            color: #ffffff;
            font-size: 16px;
            font-weight: 600;
            margin: 0 0 12px 0;
        }

        .event-requirement {
            display: flex;
            align-items: center;
            gap: 8px;
            color: #ffffff;
            font-size: 14px;
            margin-bottom: 8px;
        }

        .event-requirement:last-child {
            margin-bottom: 0;
        }

        .event-modal-actions {
            display: flex;
            gap: 12px;
            justify-content: flex-end;
            margin-top: 32px;
        }

        .event-modal-btn {
            padding: 12px 24px;
            border-radius: 8px;
            font-size: 14px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            border: none;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }

        .event-modal-btn.secondary {
            background-color: #3a3a3a;
            color: #ffffff;
        }

        .event-modal-btn.secondary:hover {
            background-color: #4a4a4a;
        }

        .event-modal-btn.primary {
            background-color: #f59e0b;
            color: #1a1a1a;
        }

        .event-modal-btn.primary:hover {
            background-color: #d97706;
        }

        @media (max-width: 768px) {
            .calendar-cell {
                min-height: 80px;
                padding: 8px;
            }
            
            .cell-date {
                font-size: 14px;
            }
            
            .event-item {
                font-size: 10px;
                padding: 2px 4px;
            }

            .no-date-event {
                padding: 16px;
            }

            .no-date-event-header {
                flex-direction: column;
                align-items: flex-start;
                gap: 12px;
            }

            .no-date-event-footer {
                flex-direction: column;
                align-items: flex-start;
                gap: 12px;
            }

            /* Event Cards Mobile */
            .event-card {
                padding: 16px;
            }

            .event-card-header {
                flex-direction: column;
                gap: 16px;
            }

            .event-card-right {
                align-items: flex-start;
                width: 100%;
                flex-direction: row;
                justify-content: space-between;
            }

            .event-card-meta {
                grid-template-columns: 1fr;
                gap: 8px;
            }

            .event-card-actions {
                order: 3;
            }

            .page-header {
                flex-direction: column;
                gap: 16px;
                align-items: flex-start;
            }

            .filters-section {
                flex-direction: column;
                gap: 12px;
            }

            .view-controls {
                margin: 0 24px 16px 24px;
            }

            .view-btn {
                padding: 10px 16px;
                font-size: 12px;
            }
        }

        /* Pagination Styles */
        .pagination-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 32px;
            padding: 24px;
            background-color: rgba(42, 42, 42, 0);
            border: 1px solid #3a3a3a;
            border-radius: 12px;
        }

        .pagination-info {
            color: #888;
            font-size: 14px;
        }

        .pagination-controls {
    display: flex
;
    align-items: center;
    gap: 16px;
    justify-content: space-between;
}

        .pagination-btn {
            background-color: #2a2a2a;
            border: 1px solid #3a3a3a;
            color: #ffffff;
            padding: 8px 16px;
            border-radius: 8px;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 14px;
            transition: all 0.3s ease;
        }

        .pagination-btn:hover:not(:disabled) {
            background-color: #3a3a3a;
            border-color: #f59e0b;
        }

        .pagination-btn:disabled {
            opacity: 0.5;
            cursor: not-allowed;
        }

        .pagination-numbers {
            display: flex;
            gap: 8px;
        }

        .pagination-number {
            background-color: #2a2a2a;
            border: 1px solid #3a3a3a;
            color: #ffffff;
            width: 36px;
            height: 36px;
            border-radius: 8px;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 14px;
            font-weight: 500;
            transition: all 0.3s ease;
        }

        .pagination-number:hover {
            background-color: #3a3a3a;
            border-color: #f59e0b;
        }

        .pagination-number.active {
            background-color: #f59e0b;
            border-color: #f59e0b;
            color: #1a1a1a;
        }

        /* Pagination Mobile */
        .pagination-container {
            flex-direction: column;
            gap: 16px;
            padding: 16px;
        }

        .pagination-controls {
    flex-direction: row;
    gap: 12px;
    width: 100%;
}

        .pagination-btn {
            padding: 10px 14px;
            font-size: 12px;
        }

        .pagination-numbers {
            justify-content: center;
        }

        .pagination-number {
            width: 32px;
            height: 32px;
            font-size: 12px;
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
                            <h1 class="page-title">Agenda</h1>
                            <p class="page-subtitle">Gerencie seus eventos e compromissos</p>
                        </div>
                        <a href="{{ route('agenda.create') }}" class="new-event-btn">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M12 5v14M5 12h14" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
                            </svg>
                            Novo Evento
                        </a>
                    </div>

                                        <!-- Filters -->
                    <div class="filters-section">
                        <select class="filter-select" id="statusFilter">
                            <option value="all">Todos os status</option>
                            <option value="confirmed">Confirmado</option>
                            <option value="pending">Pendente</option>
                            <option value="cancelled">Cancelado</option>
                            <option value="concluido">Concluído</option>
                        </select>
                        
                        <div class="searchable-select" id="clientSearchableSelect">
                            <input 
                                type="text" 
                                class="searchable-select-input" 
                                id="clientSearchInput"
                                placeholder="Todos os clientes"
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

                    <!-- View Controls -->
                    <div class="view-controls">
                        <button class="view-btn active" data-view="calendar">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <rect x="3" y="4" width="18" height="18" rx="2" ry="2" stroke="currentColor" stroke-width="2"/>
                                <line x1="16" y1="2" x2="16" y2="6" stroke="currentColor" stroke-width="2"/>
                                <line x1="8" y1="2" x2="8" y2="6" stroke="currentColor" stroke-width="2"/>
                                <line x1="3" y1="10" x2="21" y2="10" stroke="currentColor" stroke-width="2"/>
                            </svg>
                            Calendário
                        </button>
                        <button class="view-btn" data-view="list">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <line x1="8" y1="6" x2="21" y2="6" stroke="currentColor" stroke-width="2"/>
                                <line x1="8" y1="12" x2="21" y2="12" stroke="currentColor" stroke-width="2"/>
                                <line x1="8" y1="18" x2="21" y2="18" stroke="currentColor" stroke-width="2"/>
                                <line x1="3" y1="6" x2="3.01" y2="6" stroke="currentColor" stroke-width="2"/>
                                <line x1="3" y1="12" x2="3.01" y2="12" stroke="currentColor" stroke-width="2"/>
                                <line x1="3" y1="18" x2="3.01" y2="18" stroke="currentColor" stroke-width="2"/>
                            </svg>
                            Lista
                        </button>
                        <button class="view-btn" data-view="no-date">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2"/>
                                <path d="M8 12h8" stroke="currentColor" stroke-width="2"/>
                            </svg>
                            Sem Data Específica
                        </button>
                    </div>

                    <!-- Calendar -->
                    <div class="calendar-container" id="calendarView">
                        <div class="calendar-header">
                            <h2 class="calendar-title" id="currentMonth">junho 2025</h2>
                            <div class="calendar-nav">
                                <button class="nav-btn" onclick="previousMonth()">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <polyline points="15,18 9,12 15,6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>
                                <button class="nav-btn" onclick="nextMonth()">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <polyline points="9,18 15,12 9,6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <div class="calendar-grid" id="calendarGrid">
                            <!-- Calendar headers -->
                            <div class="calendar-header-cell">Dom</div>
                            <div class="calendar-header-cell">Seg</div>
                            <div class="calendar-header-cell">Ter</div>
                            <div class="calendar-header-cell">Qua</div>
                            <div class="calendar-header-cell">Qui</div>
                            <div class="calendar-header-cell">Sex</div>
                            <div class="calendar-header-cell">Sáb</div>

                            <!-- Calendar days will be generated by JavaScript -->
                        </div>
                    </div>

                    <!-- List View -->
                    <div class="list-container" id="listView">
                        <h2 class="list-title">Lista de Eventos</h2>
                        
                        <div class="events-list" id="eventsList">
                            <!-- Events will be populated by JavaScript -->
                        </div>

                        <!-- Pagination -->
                        <div class="pagination-container" id="paginationContainer">
                            <div class="pagination-info">
                                <span id="paginationInfo">Mostrando 1-5 de 10 eventos</span>
                            </div>
                            <div class="pagination-controls">
                                <button class="pagination-btn" id="prevPageBtn" onclick="changePage(currentPage - 1)">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <polyline points="15,18 9,12 15,6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                    Anterior
                                </button>
                                <div class="pagination-numbers" id="paginationNumbers">
                                    <!-- Page numbers will be populated by JavaScript -->
                                </div>
                                <button class="pagination-btn" id="nextPageBtn" onclick="changePage(currentPage + 1)">
                                    Próxima
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <polyline points="9,18 15,12 9,6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- No Date Events -->
                    <div class="no-date-container" id="noDateView">
                        <h2 class="no-date-title">Eventos Sem Data Específica</h2>
                        
                        <div class="no-date-event" onclick="showNoDateEventDetails(0)">
                            <div class="no-date-event-header">
                                <div>
                                    <h3 class="no-date-event-title">Show em undefined</h3>
                                    <div class="no-date-event-location">
                                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" stroke="currentColor" stroke-width="2"/>
                                            <circle cx="12" cy="10" r="3" stroke="currentColor" stroke-width="2"/>
                                        </svg>
                                        CLIP
                                    </div>
                                </div>
                                <span class="no-date-event-status pending">Pendente</span>
                            </div>
                            <div class="no-date-event-footer">
                                <div class="no-date-event-price">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <line x1="12" y1="1" x2="12" y2="23" stroke="currentColor" stroke-width="2"/>
                                        <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6" stroke="currentColor" stroke-width="2"/>
                                    </svg>
                                    R$ 1.600,00
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Event Details Modal -->
                    <div class="event-modal" id="eventModal">
                        <div class="event-modal-content">
                            <button class="event-modal-close" onclick="closeEventModal()">×</button>
                            
                            <div class="event-modal-header">
                                <h2 class="event-modal-title" id="modalEventTitle">Show em undefined</h2>
                                <span class="event-modal-status pending" id="modalEventStatus">Pendente</span>
                            </div>

                            <div class="event-modal-field">
                                <div class="event-modal-label">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2" stroke="currentColor" stroke-width="2"/>
                                        <circle cx="12" cy="7" r="4" stroke="currentColor" stroke-width="2"/>
                                    </svg>
                                    Cliente
                                </div>
                                <div class="event-modal-value" id="modalEventClient">Clip</div>
                            </div>

                            <div class="event-modal-field">
                                <div class="event-modal-label">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" stroke="currentColor" stroke-width="2"/>
                                        <circle cx="12" cy="10" r="3" stroke="currentColor" stroke-width="2"/>
                                    </svg>
                                    Local
                                </div>
                                <div class="event-modal-value" id="modalEventLocation">CLIP</div>
                            </div>

                            <div class="event-modal-field">
                                <div class="event-modal-label">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" stroke="currentColor" stroke-width="2"/>
                                        <circle cx="12" cy="10" r="3" stroke="currentColor" stroke-width="2"/>
                                    </svg>
                                    Endereço
                                </div>
                                <div class="event-modal-value" id="modalEventAddress">Endereço completo</div>
                            </div>

                            <div class="event-modal-field">
                                <div class="event-modal-label">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="3" y="4" width="18" height="18" rx="2" ry="2" stroke="currentColor" stroke-width="2"/>
                                        <line x1="16" y1="2" x2="16" y2="6" stroke="currentColor" stroke-width="2"/>
                                        <line x1="8" y1="2" x2="8" y2="6" stroke="currentColor" stroke-width="2"/>
                                        <line x1="3" y1="10" x2="21" y2="10" stroke="currentColor" stroke-width="2"/>
                                    </svg>
                                    Data e Horário
                                </div>
                                <div class="event-modal-value" id="modalEventDateTime">15 de junho de 2025, 20:00 às 00:00</div>
                            </div>

                            <div class="event-modal-field">
                                <div class="event-modal-label">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <line x1="12" y1="1" x2="12" y2="23" stroke="currentColor" stroke-width="2"/>
                                        <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6" stroke="currentColor" stroke-width="2"/>
                                    </svg>
                                    Valor do Contrato
                                </div>
                                <div class="event-modal-value event-modal-price" id="modalEventPrice">R$ 1.600,00</div>
                            </div>

                            <div class="event-modal-requirements">
                                <h4>Requisitos</h4>
                                <!-- Requirements will be populated by JavaScript -->
                            </div>

                            <div class="event-modal-field" id="modalObservationsField" style="display: none;">
                                <div class="event-modal-label">
                                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z" stroke="currentColor" stroke-width="2"/>
                                        <polyline points="14,2 14,8 20,8" stroke="currentColor" stroke-width="2"/>
                                        <line x1="16" y1="13" x2="8" y2="13" stroke="currentColor" stroke-width="2"/>
                                        <line x1="16" y1="17" x2="8" y2="17" stroke="currentColor" stroke-width="2"/>
                                        <polyline points="10,9 9,9 8,9" stroke="currentColor" stroke-width="2"/>
                                    </svg>
                                    Observações
                                </div>
                                <div class="event-modal-value" id="modalEventObservations">Observações do evento</div>
                            </div>

                            <div class="event-modal-actions">
                                <button class="event-modal-btn secondary" onclick="closeEventModal()">Fechar</button>
                                <button class="event-modal-btn primary" onclick="editEvent()">Editar Evento</button>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>

    @include('layouts/vendor-scripts')

    <script>
        // Calendar state
        let currentDate = new Date(2025, 5, 1); // June 2025 (month is 0-indexed)
        const today = new Date(2025, 5, 15); // Today is June 15, 2025

        // Sample events data
        const events = [
            {
                id: 1,
                title: "Show Arthur",
                date: new Date(2025, 5, 15),
                status: "confirmed",
                client: "Arthur Stein",
                location: "Casa Stein - Velha",
                address: "Rua das Flores, 123 - Velha",
                startTime: "20:00",
                endTime: "00:00",
                price: "R$ 2.500,00",
                requirements: ["Precisa instalar som", "Transporte próprio"],
                observations: "Evento de aniversário com aproximadamente 100 convidados."
            },
            {
                id: 2,
                title: "Reunião Cliente",
                date: new Date(2025, 5, 20),
                status: "pending",
                client: "Clip",
                location: "Salão de Eventos Central - Centro",
                address: "Av. Principal, 456 - Centro",
                startTime: "14:00",
                endTime: "16:00",
                price: "R$ 800,00",
                requirements: ["Cliente disponibiliza transporte"],
                observations: "Reunião para definir detalhes do evento principal."
            },
            {
                id: 3,
                title: "Evento Cancelado",
                date: new Date(2025, 5, 25),
                status: "cancelled",
                client: "Testando",
                location: "Clube Recreativo - Jardim",
                address: "Rua do Clube, 789 - Jardim",
                startTime: "19:00",
                endTime: "23:00",
                price: "R$ 1.200,00",
                requirements: ["Precisa instalar som", "Precisa de van"],
                observations: "Evento cancelado devido a problemas climáticos."
            },
            {
                id: 4,
                title: "Show Concluído",
                date: new Date(2025, 5, 10),
                status: "concluido",
                client: "João Silva",
                location: "Espaço Verde - Rural",
                address: "Estrada Rural, Km 15 - Rural",
                startTime: "21:00",
                endTime: "01:00",
                price: "R$ 3.000,00",
                requirements: ["Precisa instalar som", "Precisa de van"],
                observations: "Evento realizado com sucesso. Cliente muito satisfeito."
            },
            {
                id: 5,
                title: "Casamento Maria",
                date: new Date(2025, 6, 5),
                status: "confirmed",
                client: "Maria Santos",
                location: "Salão Nobre - Centro",
                address: "Rua Elegante, 321 - Centro",
                startTime: "18:00",
                endTime: "02:00",
                price: "R$ 4.500,00",
                requirements: ["Precisa instalar som", "Cliente disponibiliza transporte"],
                observations: "Casamento com 200 convidados. Som especial para cerimônia."
            },
            {
                id: 6,
                title: "Aniversário Pedro",
                date: new Date(2025, 6, 12),
                status: "pending",
                client: "Pedro Oliveira",
                location: "Chácara Oliveira - Rural",
                address: "Chácara 15, Lote 8 - Rural",
                startTime: "16:00",
                endTime: "22:00",
                price: "R$ 1.800,00",
                requirements: ["Precisa de van"],
                observations: "Festa de 50 anos. Local amplo com piscina."
            },
            {
                id: 7,
                title: "Formatura Ana",
                date: new Date(2025, 6, 18),
                status: "confirmed",
                client: "Ana Costa",
                location: "Hotel Central - Centro",
                address: "Av. Central, 100 - Centro",
                startTime: "19:30",
                endTime: "01:30",
                price: "R$ 2.200,00",
                requirements: ["Cliente disponibiliza transporte"],
                observations: "Formatura em Medicina. Evento formal."
            },
            {
                id: 8,
                title: "Show Corporativo",
                date: new Date(2025, 6, 25),
                status: "pending",
                client: "Carlos Ferreira",
                location: "Centro de Convenções - Centro",
                address: "Rua dos Eventos, 500 - Centro",
                startTime: "20:00",
                endTime: "23:00",
                price: "R$ 3.500,00",
                requirements: ["Precisa instalar som"],
                observations: "Evento corporativo de fim de ano. 300 funcionários."
            },
            {
                id: 9,
                title: "Festa Julina",
                date: new Date(2025, 6, 30),
                status: "confirmed",
                client: "Lúcia Almeida",
                location: "Quadra Comunitária - Jardim",
                address: "Rua Comunitária, 50 - Jardim",
                startTime: "19:00",
                endTime: "00:00",
                price: "R$ 1.500,00",
                requirements: ["Precisa instalar som", "Precisa de van"],
                observations: "Festa julina tradicional da comunidade."
            },
            {
                id: 10,
                title: "Baile de Debutante",
                date: new Date(2025, 7, 8),
                status: "pending",
                client: "Rafael Souza",
                location: "Salão de Festas Elegante - Centro",
                address: "Av. Elegante, 200 - Centro",
                startTime: "20:00",
                endTime: "03:00",
                price: "R$ 5.000,00",
                requirements: ["Precisa instalar som", "Cliente disponibiliza transporte"],
                observations: "Baile de 15 anos da filha. Evento muito especial."
            }
        ];

        // Sample no-date events data
        const noDateEvents = [
            {
                id: 4,
                title: "Show em undefined",
                client: "Clip",
                location: "CLIP",
                status: "pending",
                price: "R$ 1.600,00",
                requirements: ["Precisa instalar som"]
            }
        ];

        // Sample clients data
        const clients = [
            { id: 'all', name: 'Todos os clientes' },
            { id: 'arthur', name: 'Arthur Stein' },
            { id: 'clip', name: 'Clip' },
            { id: 'testando', name: 'Testando' },
            { id: 'teste', name: 'teste' },
            { id: 'joao', name: 'João Silva' },
            { id: 'maria', name: 'Maria Santos' },
            { id: 'pedro', name: 'Pedro Oliveira' },
            { id: 'ana', name: 'Ana Costa' },
            { id: 'carlos', name: 'Carlos Ferreira' },
            { id: 'lucia', name: 'Lúcia Almeida' },
            { id: 'rafael', name: 'Rafael Souza' },
            { id: 'fernanda', name: 'Fernanda Lima' },
            { id: 'ricardo', name: 'Ricardo Pereira' },
            { id: 'juliana', name: 'Juliana Rodrigues' }
        ];

        // Month names in Portuguese
        const monthNames = [
            'janeiro', 'fevereiro', 'março', 'abril', 'maio', 'junho',
            'julho', 'agosto', 'setembro', 'outubro', 'novembro', 'dezembro'
        ];

        // Pagination variables
        let currentPage = 1;
        const itemsPerPage = 5;
        let filteredEvents = [...events];
        let currentStatusFilter = 'all';
        let currentClientFilter = 'all';

        function renderCalendar() {
            const year = currentDate.getFullYear();
            const month = currentDate.getMonth();
            
            // Update month title
            document.getElementById('currentMonth').textContent = `${monthNames[month]} ${year}`;
            
            // Get first day of month and number of days
            const firstDay = new Date(year, month, 1);
            const lastDay = new Date(year, month + 1, 0);
            const daysInMonth = lastDay.getDate();
            const startingDayOfWeek = firstDay.getDay();
            
            // Get previous month info
            const prevMonth = new Date(year, month, 0);
            const daysInPrevMonth = prevMonth.getDate();
            
            // Clear existing calendar days
            const grid = document.getElementById('calendarGrid');
            const existingDays = grid.querySelectorAll('.calendar-cell');
            existingDays.forEach(day => day.remove());
            
            // Add previous month's trailing days
            for (let i = startingDayOfWeek - 1; i >= 0; i--) {
                const dayNum = daysInPrevMonth - i;
                const cell = createCalendarCell(dayNum, true, new Date(year, month - 1, dayNum));
                grid.appendChild(cell);
            }
            
            // Add current month's days
            for (let day = 1; day <= daysInMonth; day++) {
                const cellDate = new Date(year, month, day);
                const cell = createCalendarCell(day, false, cellDate);
                grid.appendChild(cell);
            }
            
            // Add next month's leading days
            const totalCells = grid.children.length - 7; // Subtract header cells
            const remainingCells = 42 - totalCells; // 6 rows × 7 days = 42 cells
            for (let day = 1; day <= remainingCells; day++) {
                const cell = createCalendarCell(day, true, new Date(year, month + 1, day));
                grid.appendChild(cell);
            }
        }

        function createCalendarCell(dayNum, isOtherMonth, cellDate) {
            const cell = document.createElement('div');
            cell.className = 'calendar-cell';
            
            if (isOtherMonth) {
                cell.classList.add('other-month');
            }
            
            // Check if this is today
            if (cellDate.toDateString() === today.toDateString()) {
                cell.classList.add('today');
            }
            
            // Create date element
            const dateEl = document.createElement('div');
            dateEl.className = 'cell-date';
            dateEl.textContent = dayNum;
            cell.appendChild(dateEl);
            
            // Add events for this date
            const dayEvents = events.filter(event => 
                event.date.toDateString() === cellDate.toDateString()
            );
            
            dayEvents.forEach(event => {
                const eventEl = document.createElement('div');
                eventEl.className = `event-item ${event.status}`;
                eventEl.textContent = event.title;
                eventEl.onclick = (e) => {
                    e.stopPropagation();
                    showEventDetails(event);
                };
                cell.appendChild(eventEl);
            });
            
            return cell;
        }

        function previousMonth() {
            currentDate.setMonth(currentDate.getMonth() - 1);
            renderCalendar();
        }

        function nextMonth() {
            currentDate.setMonth(currentDate.getMonth() + 1);
            renderCalendar();
        }

        function showEventDetails(event) {
            openEventModal(event);
        }

        function showEventById(eventId) {
            const event = events.find(e => e.id === eventId);
            if (event) {
                openEventModal(event);
            }
        }

        function showNoDateEventDetails(index) {
            const event = noDateEvents[index];
            openEventModal(event);
        }

        function createEvent(date) {
            // Redireciona para a página de criação com a data selecionada
            const dateStr = date.toISOString().split('T')[0]; // Format: YYYY-MM-DD
            window.location.href = "{{ route('agenda.create') }}?date=" + dateStr;
        }

        // View controls
        document.querySelectorAll('.view-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                // Remove active class from all buttons
                document.querySelectorAll('.view-btn').forEach(b => b.classList.remove('active'));
                // Add active class to clicked button
                this.classList.add('active');
                
                const view = this.getAttribute('data-view');
                handleViewChange(view);
            });
        });

        function handleViewChange(view) {
            const calendarView = document.getElementById('calendarView');
            const listView = document.getElementById('listView');
            const noDateView = document.getElementById('noDateView');
            
            // Hide all views first
            calendarView.style.display = 'none';
            listView.style.display = 'none';
            noDateView.style.display = 'none';
            
            switch(view) {
                case 'calendar':
                    calendarView.style.display = 'block';
                    break;
                case 'list':
                    listView.style.display = 'block';
                    // Initialize list view
                    applyFilters();
                    break;
                case 'no-date':
                    noDateView.style.display = 'block';
                    break;
            }
        }

        // Filter handlers
        document.getElementById('statusFilter').addEventListener('change', function() {
            currentStatusFilter = this.value;
            applyFilters();
        });

        // Searchable Select functionality
        let selectedClient = 'all';
        let filteredClients = [...clients];

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
                    client.name.toLowerCase().includes(searchTerm)
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
            const selectedClientData = clients.find(c => c.id === selectedClient);
            searchInput.value = selectedClientData ? selectedClientData.name : 'Todos os clientes';
            searchInput.placeholder = 'Todos os clientes';
            
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
                option.textContent = client.name;
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
            
            // Apply client filter
            currentClientFilter = clientId === 'all' ? 'all' : clientName;
            applyFilters();
        }

        // Modal functions
        function openEventModal(event) {
            // Update modal content
            document.getElementById('modalEventTitle').textContent = event.title;
            document.getElementById('modalEventClient').textContent = event.client;
            document.getElementById('modalEventLocation').textContent = event.location || event.client;
            document.getElementById('modalEventAddress').textContent = event.address || 'Endereço não informado';
            document.getElementById('modalEventPrice').textContent = event.price;
            
            // Format date and time
            const eventDate = formatEventDate(event.date);
            const dateTime = `${eventDate}, ${event.startTime} às ${event.endTime}`;
            document.getElementById('modalEventDateTime').textContent = dateTime;
            
            // Update status
            const statusElement = document.getElementById('modalEventStatus');
            statusElement.textContent = getStatusText(event.status);
            statusElement.className = `event-modal-status ${event.status}`;
            
            // Update requirements
            const requirementsContainer = document.querySelector('.event-modal-requirements');
            
            // Clear existing requirements except the title
            const existingRequirements = requirementsContainer.querySelectorAll('.event-requirement');
            existingRequirements.forEach(req => req.remove());
            
            // Add new requirements
            if (event.requirements && event.requirements.length > 0) {
                event.requirements.forEach(requirement => {
                    const reqElement = document.createElement('div');
                    reqElement.className = 'event-requirement';
                    reqElement.innerHTML = `
                        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M9 12l2 2 4-4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2"/>
                        </svg>
                        ${requirement}
                    `;
                    requirementsContainer.appendChild(reqElement);
                });
            } else {
                const reqElement = document.createElement('div');
                reqElement.className = 'event-requirement';
                reqElement.innerHTML = `
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2"/>
                        <line x1="15" y1="9" x2="9" y2="15" stroke="currentColor" stroke-width="2"/>
                        <line x1="9" y1="9" x2="15" y2="15" stroke="currentColor" stroke-width="2"/>
                    </svg>
                    Nenhum requisito especial
                `;
                requirementsContainer.appendChild(reqElement);
            }
            
            // Show/hide observations
            const observationsField = document.getElementById('modalObservationsField');
            const observationsText = document.getElementById('modalEventObservations');
            
            if (event.observations && event.observations.trim()) {
                observationsText.textContent = event.observations;
                observationsField.style.display = 'block';
            } else {
                observationsField.style.display = 'none';
            }
            
            // Show modal
            document.getElementById('eventModal').classList.add('show');
            document.body.style.overflow = 'hidden';
        }

        function closeEventModal() {
            document.getElementById('eventModal').classList.remove('show');
            document.body.style.overflow = 'auto';
        }

        function editEvent() {
            // Redireciona para a página de edição com ID 1
            window.location.href = "{{ route('agenda.edite', ['id' => 1]) }}";
        }

        function editEventById(eventId) {
            // Redireciona para a página de edição com o ID específico
            window.location.href = `/agenda/edite/${eventId}`;
        }

        function createFirstEvent() {
            window.location.href = "{{ route('agenda.create') }}";
        }

        function getStatusText(status) {
            const statusMap = {
                'pending': 'Pendente',
                'confirmed': 'Confirmado',
                'cancelled': 'Cancelado',
                'concluido': 'Concluído'
            };
            return statusMap[status] || status;
        }

        // Close modal when clicking outside
        document.addEventListener('click', function(e) {
            const modal = document.getElementById('eventModal');
            if (e.target === modal) {
                closeEventModal();
            }
        });

        // Close modal with ESC key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape') {
                closeEventModal();
            }
        });

        // Initialize calendar
        document.addEventListener('DOMContentLoaded', function() {
            renderCalendar();
            initSearchableSelect();
        });

        // List and Pagination Functions
        function applyFilters() {
            filteredEvents = events.filter(event => {
                const statusMatch = currentStatusFilter === 'all' || event.status === currentStatusFilter;
                const clientMatch = currentClientFilter === 'all' || event.client.toLowerCase().includes(currentClientFilter.toLowerCase());
                return statusMatch && clientMatch;
            });
            
            currentPage = 1; // Reset to first page when filtering
            renderEventsList();
            renderPagination();
        }

        function renderEventsList() {
            const startIndex = (currentPage - 1) * itemsPerPage;
            const endIndex = startIndex + itemsPerPage;
            const pageEvents = filteredEvents.slice(startIndex, endIndex);
            
            const eventsList = document.getElementById('eventsList');
            eventsList.innerHTML = '';
            
            if (pageEvents.length === 0) {
                eventsList.innerHTML = `
                    <div class="list-empty">
                        <svg class="list-empty-icon" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <rect x="3" y="4" width="18" height="18" rx="2" ry="2" stroke="currentColor" stroke-width="2"/>
                            <line x1="16" y1="2" x2="16" y2="6" stroke="currentColor" stroke-width="2"/>
                            <line x1="8" y1="2" x2="8" y2="6" stroke="currentColor" stroke-width="2"/>
                            <line x1="3" y1="10" x2="21" y2="10" stroke="currentColor" stroke-width="2"/>
                        </svg>
                        <h3>Nenhum evento encontrado</h3>
                        <p>Tente ajustar os filtros ou criar um novo evento.</p>
                    </div>
                `;
                return;
            }
            
            pageEvents.forEach(event => {
                const eventCard = createEventCard(event);
                eventsList.appendChild(eventCard);
            });
        }

        function createEventCard(event) {
            const eventDate = formatEventDate(event.date);
            const eventCard = document.createElement('div');
            eventCard.className = 'event-card';
            eventCard.onclick = () => showEventDetails(event);
            
            eventCard.innerHTML = `
                <div class="event-card-header">
                    <div class="event-card-left">
                        <h3 class="event-card-title">${event.title}</h3>
                        <div class="event-card-meta">
                            <div class="event-card-date">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <rect x="3" y="4" width="18" height="18" rx="2" ry="2" stroke="currentColor" stroke-width="2"/>
                                    <line x1="16" y1="2" x2="16" y2="6" stroke="currentColor" stroke-width="2"/>
                                    <line x1="8" y1="2" x2="8" y2="6" stroke="currentColor" stroke-width="2"/>
                                    <line x1="3" y1="10" x2="21" y2="10" stroke="currentColor" stroke-width="2"/>
                                </svg>
                                ${eventDate}
                            </div>
                            <div class="event-card-time">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="2"/>
                                    <polyline points="12,6 12,12 16,14" stroke="currentColor" stroke-width="2"/>
                                </svg>
                                ${event.startTime} às ${event.endTime}
                            </div>
                            <div class="event-card-client">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2" stroke="currentColor" stroke-width="2"/>
                                    <circle cx="12" cy="7" r="4" stroke="currentColor" stroke-width="2"/>
                                </svg>
                                ${event.client}
                            </div>
                            <div class="event-card-location">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z" stroke="currentColor" stroke-width="2"/>
                                    <circle cx="12" cy="10" r="3" stroke="currentColor" stroke-width="2"/>
                                </svg>
                                ${event.location}
                            </div>
                        </div>
                    </div>
                    <div class="event-card-right">
                        <span class="event-card-status ${event.status}">${getStatusText(event.status)}</span>
                        <div class="event-card-price">${event.price}</div>
                        <div class="event-card-actions">
                            <button class="event-action-btn view" onclick="event.stopPropagation(); showEventById(${event.id})">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z" stroke="currentColor" stroke-width="2"/>
                                    <circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="2"/>
                                </svg>
                            </button>
                            <button class="event-action-btn edit" onclick="event.stopPropagation(); editEventById(${event.id})">
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7" stroke="currentColor" stroke-width="2"/>
                                    <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z" stroke="currentColor" stroke-width="2"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            `;
            
            return eventCard;
        }

        function renderPagination() {
            const totalPages = Math.ceil(filteredEvents.length / itemsPerPage);
            const startItem = (currentPage - 1) * itemsPerPage + 1;
            const endItem = Math.min(currentPage * itemsPerPage, filteredEvents.length);
            
            // Update pagination info
            document.getElementById('paginationInfo').textContent = 
                `Mostrando ${startItem}-${endItem} de ${filteredEvents.length} eventos`;
            
            // Update pagination buttons
            const prevBtn = document.getElementById('prevPageBtn');
            const nextBtn = document.getElementById('nextPageBtn');
            
            prevBtn.disabled = currentPage === 1;
            nextBtn.disabled = currentPage === totalPages || totalPages === 0;
            
            // Render page numbers
            const paginationNumbers = document.getElementById('paginationNumbers');
            paginationNumbers.innerHTML = '';
            
            if (totalPages <= 1) return;
            
            const maxVisiblePages = 5;
            let startPage = Math.max(1, currentPage - Math.floor(maxVisiblePages / 2));
            let endPage = Math.min(totalPages, startPage + maxVisiblePages - 1);
            
            if (endPage - startPage + 1 < maxVisiblePages) {
                startPage = Math.max(1, endPage - maxVisiblePages + 1);
            }
            
            for (let i = startPage; i <= endPage; i++) {
                const pageBtn = document.createElement('button');
                pageBtn.className = `pagination-number ${i === currentPage ? 'active' : ''}`;
                pageBtn.textContent = i;
                pageBtn.onclick = () => changePage(i);
                paginationNumbers.appendChild(pageBtn);
            }
        }

        function changePage(page) {
            const totalPages = Math.ceil(filteredEvents.length / itemsPerPage);
            if (page < 1 || page > totalPages) return;
            
            currentPage = page;
            renderEventsList();
            renderPagination();
        }

        function formatEventDate(date) {
            const day = date.getDate();
            const month = monthNames[date.getMonth()];
            const year = date.getFullYear();
            return `${day} de ${month} de ${year}`;
        }
    </script>

</body>
</html>

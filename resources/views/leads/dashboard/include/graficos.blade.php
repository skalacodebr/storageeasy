<div class="row g-4">
    <!-- Leads por Status -->
    <div class="col-lg-6">
        <div class="leads-card p-4 h-100">
            <h4 class="fw-bold mb-1 d-flex align-items-center">
                <i class="ri-time-line me-2"></i> Leads por Status
            </h4>
            <div class="leads-card-subtitle mb-3">Distribuição de leads por status atual</div>
            <div class="leads-status-list">
                <div class="row align-items-center mb-2">
                    <div class="col-auto">
                        <span class="leads-dot bg-primary"></span>
                        <span class="leads-status-label">Novo</span>
                    </div>
                    <div class="col text-end">
                        <span class="leads-status-count">2</span>
                        <span class="text-muted small ms-1">(33%)</span>
                    </div>
                </div>
                <div class="row align-items-center mb-2">
                    <div class="col-auto">
                        <span class="leads-dot bg-warning"></span>
                        <span class="leads-status-label">Em Andamento</span>
                    </div>
                    <div class="col text-end">
                        <span class="leads-status-count">2</span>
                        <span class="text-muted small ms-1">(33%)</span>
                    </div>
                </div>
                <div class="row align-items-center mb-2">
                    <div class="col-auto">
                        <span class="leads-dot bg-success"></span>
                        <span class="leads-status-label">Convertido</span>
                    </div>
                    <div class="col text-end">
                        <span class="leads-status-count">1</span>
                        <span class="text-muted small ms-1">(17%)</span>
                    </div>
                </div>
                <div class="row align-items-center">
                    <div class="col-auto">
                        <span class="leads-dot bg-danger"></span>
                        <span class="leads-status-label">Perdido</span>
                    </div>
                    <div class="col text-end">
                        <span class="leads-status-count">1</span>
                        <span class="text-muted small ms-1">(17%)</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Leads por Origem -->
    <div class="col-lg-6">
        <div class="leads-card p-4 h-100">
            <h4 class="fw-bold mb-1 d-flex align-items-center">
                <i class="ri-bar-chart-line me-2"></i> Leads por Origem
            </h4>
            <div class="leads-card-subtitle mb-3">De onde vêm seus leads</div>
            <div class="leads-origem-list">
                <!-- Linha Origem -->
                <div class="leads-origem-row mb-2">
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="leads-origem-label">Site</span>
                        <span class="leads-origem-count">2 <span class="text-muted small">(33%)</span></span>
                    </div>
                    <div class="leads-origem-bar-bg">
                        <div class="leads-origem-bar" style="width: 70%"></div>
                    </div>
                </div>
                <div class="leads-origem-row mb-2">
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="leads-origem-label">Google Ads</span>
                        <span class="leads-origem-count">0 <span class="text-muted small">(0%)</span></span>
                    </div>
                    <div class="leads-origem-bar-bg">
                        <div class="leads-origem-bar" style="width: 0%"></div>
                    </div>
                </div>
                <div class="leads-origem-row mb-2">
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="leads-origem-label">Facebook</span>
                        <span class="leads-origem-count">0 <span class="text-muted small">(0%)</span></span>
                    </div>
                    <div class="leads-origem-bar-bg">
                        <div class="leads-origem-bar" style="width: 0%"></div>
                    </div>
                </div>
                <div class="leads-origem-row mb-2">
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="leads-origem-label">Instagram</span>
                        <span class="leads-origem-count">0 <span class="text-muted small">(0%)</span></span>
                    </div>
                    <div class="leads-origem-bar-bg">
                        <div class="leads-origem-bar" style="width: 0%"></div>
                    </div>
                </div>
                <div class="leads-origem-row mb-2">
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="leads-origem-label">Indicação</span>
                        <span class="leads-origem-count">2 <span class="text-muted small">(33%)</span></span>
                    </div>
                    <div class="leads-origem-bar-bg">
                        <div class="leads-origem-bar" style="width: 70%"></div>
                    </div>
                </div>
                <div class="leads-origem-row mb-2">
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="leads-origem-label">Telefone</span>
                        <span class="leads-origem-count">0 <span class="text-muted small">(0%)</span></span>
                    </div>
                    <div class="leads-origem-bar-bg">
                        <div class="leads-origem-bar" style="width: 0%"></div>
                    </div>
                </div>
                <div class="leads-origem-row mb-2">
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="leads-origem-label">Ligação</span>
                        <span class="leads-origem-count">1 <span class="text-muted small">(17%)</span></span>
                    </div>
                    <div class="leads-origem-bar-bg">
                        <div class="leads-origem-bar" style="width: 28%"></div>
                    </div>
                </div>
                <div class="leads-origem-row">
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="leads-origem-label">Email</span>
                        <span class="leads-origem-count">1 <span class="text-muted small">(17%)</span></span>
                    </div>
                    <div class="leads-origem-bar-bg">
                        <div class="leads-origem-bar" style="width: 28%"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<style>
    .leads-card {
        background: #fff;
        border-radius: 16px;
        box-shadow: 0 1px 10px 0 rgba(50, 50, 93, 0.04), 0 1.5px 3px 0 rgba(0, 0, 0, 0.04);
        border: none;
        min-height: 340px;
    }

    .leads-card-subtitle {
        color: #7d8695;
        font-size: 1rem;
        margin-bottom: 14px;
    }

    .leads-status-list .leads-dot {
        display: inline-block;
        width: 10px;
        height: 10px;
        border-radius: 50%;
        margin-right: 8px;
        vertical-align: middle;
    }

    .leads-status-label {
        font-size: 1rem;
        color: #222;
    }

    .leads-status-count {
        font-size: 1.1rem;
        font-weight: 600;
        color: #181e29;
    }

    .leads-origem-list .leads-origem-row {
        margin-bottom: 10px;
    }

    .leads-origem-bar-bg {
        width: 100%;
        background: #f2f4f7;
        border-radius: 8px;
        height: 7px;
        margin-top: 3px;
    }

    .leads-origem-bar {
        background: #181e29;
        border-radius: 8px;
        height: 7px;
        transition: width 0.5s;
    }

    .leads-origem-label {
        font-size: 1rem;
        color: #222;
    }

    .leads-origem-count {
        font-size: 1rem;
        font-weight: 500;
        color: #181e29;
    }

    /* Responsivo */
    @media (max-width: 991.98px) {
        .leads-card {
            min-height: unset;
        }
    }
</style>
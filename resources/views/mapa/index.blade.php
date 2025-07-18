@include('layouts/head-main')

<head>
    <title>Mapas | Storage Easy</title>
    @include('layouts/head')
    @include('layouts/head-style')

    <link href="{{ asset('assets/css/pages_new/mapa.css') }}" rel="stylesheet" type="text/css" />
    

</head>

<body>
    @include('layouts/body')
    @include('layouts/menu')
    
    <div id="layout-wrapper">
        <div class="main-content">
            <div class="page-content">
                <div class="container-fluid mapa-unidades">
                    <h1>Mapa de Unidades</h1>
                    <p class="subtitulo">Visualize e gerencie todas as unidades de armazenamento</p>

                    <div class="filtros">
                        <select>
                        <option>Matriz - Centro SP</option>
                        <!-- outras opções -->
                        </select>
                        <select>
                        <option>Setor 1 - Térreo</option>
                        <!-- outras opções -->
                        </select>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="legenda-status d-flex flex-column gap-3">

                                <h3>Legenda de Status</h3>

                                <div class="d-flex gap-3">
                                <div class="legenda-item w-100 disponivel">
                        <div class="legenda-cor"></div>
                        <div>
                            <strong>Disponível</strong><br>
                            <small>6 unidades</small>
                        </div>
                        </div>
                        <div class="legenda-item w-100 indisponivel">
                        <div class="legenda-cor"></div>
                        <div>
                            <strong>Indisponível</strong><br>
                            <small>1 unidade</small>
                        </div>
                        </div>
                        <div class="legenda-item w-100 locado">
                        <div class="legenda-cor"></div>
                        <div>
                            <strong>Locado</strong><br>
                            <small>6 unidades</small>
                        </div>
                        </div>
                        <div class="legenda-item w-100 manutencao">
                        <div class="legenda-cor"></div>
                        <div>
                            <strong>Manutenção</strong><br>
                            <small>2 unidades</small>
                        </div>
                        </div>
                        <div class="legenda-item w-100 uso-pessoal">
                        <div class="legenda-cor"></div>
                        <div>
                            <strong>Uso Pessoal</strong><br>
                            <small>0 unidades</small>
                        </div>
                        </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h2 class="mb-4 mt-5">Setor 1 - Térreo</h2>
                    <div class="grid-unidades">
                        <div class="card-unidade disponivel">
                        <div class="numero">1</div>
                        <div class="area">1.64m<sup>2</sup></div>
                        <div class="dimensoes">L: 1.04m • C: 1.58m • A: 2.20m</div>
                        <div class="volume">Vol: 3.61m<sup>3</sup></div>
                        </div>
                        <div class="card-unidade disponivel">
                        <div class="numero">2</div>
                        <div class="area">1.64m<sup>2</sup></div>
                        <div class="dimensoes">L: 1.04m • C: 1.58m • A: 2.20m</div>
                        <div class="volume">Vol: 3.61m<sup>3</sup></div>
                        </div>
                        <div class="card-unidade disponivel">
                        <div class="numero">3</div>
                        <div class="area">1.64m<sup>2</sup></div>
                        <div class="dimensoes">L: 1.04m • C: 1.58m • A: 2.20m</div>
                        <div class="volume">Vol: 3.61m<sup>3</sup></div>
                        </div>
                        <div class="card-unidade locado">
                        <div class="numero">20</div>
                        <div class="area">13.23m<sup>2</sup></div>
                        <div class="dimensoes">L: 4.74m • C: 2.80m • A: 2.50m</div>
                        <div class="volume">Vol: 33.18m<sup>3</sup></div>
                        </div>
                        <div class="card-unidade disponivel">
                        <div class="numero">21</div>
                        <div class="area">13.23m<sup>2</sup></div>
                        <div class="dimensoes">L: 4.74m • C: 2.80m • A: 2.50m</div>
                        <div class="volume">Vol: 33.18m<sup>3</sup></div>
                        </div>

                        <div class="card-unidade locado">
                        <div class="numero">22</div>
                        <div class="area">13.23m<sup>2</sup></div>
                        <div class="dimensoes">L: – • C: – • A: –</div>
                        <div class="volume">Vol: m<sup>3</sup></div>
                        </div>
                        <div class="card-unidade indisponivel">
                        <div class="numero">39</div>
                        <div class="area">12.60m<sup>2</sup></div>
                        <div class="dimensoes">L: – • C: – • A: –</div>
                        <div class="volume">Vol: m<sup>3</sup></div>
                        </div>
                        <div class="card-unidade locado">
                        <div class="numero">40</div>
                        <div class="area">12.60m<sup>2</sup></div>
                        <div class="dimensoes">L: – • C: – • A: –</div>
                        <div class="volume">Vol: m<sup>3</sup></div>
                        </div>
                        <div class="card-unidade locado">
                        <div class="numero">41</div>
                        <div class="area">12.60m<sup>2</sup></div>
                        <div class="dimensoes">L: – • C: – • A: –</div>
                        <div class="volume">Vol: m<sup>3</sup></div>
                        </div>
                        <div class="card-unidade disponivel">
                        <div class="numero">58</div>
                        <div class="area">1.90m<sup>2</sup></div>
                        <div class="dimensoes">L: – • C: – • A: –</div>
                        <div class="volume">Vol: m<sup>3</sup></div>
                        </div>

                        <div class="card-unidade manutencao">
                        <div class="numero">59</div>
                        <div class="area">1.90m<sup>2</sup></div>
                        <div class="dimensoes">L: – • C: – • A: –</div>
                        <div class="volume">Vol: m<sup>3</sup></div>
                        </div>
                        <div class="card-unidade manutencao">
                        <div class="numero">60</div>
                        <div class="area">1.90m<sup>2</sup></div>
                        <div class="dimensoes">L: – • C: – • A: –</div>
                        <div class="volume">Vol: m<sup>3</sup></div>
                        </div>
                        <div class="card-unidade disponivel">
                        <div class="numero">77</div>
                        <div class="area">13.13m<sup>2</sup></div>
                        <div class="dimensoes">L: – • C: – • A: –</div>
                        <div class="volume">Vol: m<sup>3</sup></div>
                        </div>
                        <div class="card-unidade locado">
                        <div class="numero">78</div>
                        <div class="area">13.13m<sup>2</sup></div>
                        <div class="dimensoes">L: – • C: – • A: –</div>
                        <div class="volume">Vol: m<sup>3</sup></div>
                        </div>
                        <div class="card-unidade locado">
                        <div class="numero">79</div>
                        <div class="area">13.13m<sup>2</sup></div>
                        <div class="dimensoes">L: – • C: – • A: –</div>
                        <div class="volume">Vol: m<sup>3</sup></div>
                        </div>
                    </div>

                    <div id="detalhe-unidade" class="d-none my-4"></div>
                </div>

            </div>
        </div>
    </div>

    @include('layouts/vendor-scripts')

    <script>
$(function() {
  // 1) Mapeamento de contratos por número da unidade
  var contractsByUnit = {
    '1': [
      {
        numero:     '00080',
        cliente:    'Ana Maria Brasiliense Holanda Cavalcante',
        plano:      'MENSAL',
        status:     'FINALIZADO',
        entrada:    '04/04/2023',
        saida:      '24/07/2023',
        mensalidade:'R$ 360,00',
        diaria:     'R$ 13,33',
        valorTotal: 'R$ 371,18'
      },
      {
        numero:     '00111',
        cliente:    'Henrique Sávio Melo da Silva',
        plano:      'MENSAL',
        status:     'FINALIZADO',
        entrada:    '25/07/2023',
        saida:      '28/08/2023',
        mensalidade:'R$ 400,00',
        diaria:     'R$ 13,33',
        valorTotal: 'R$ 433,32'
      }
    ]
    // adicione outros números de unidade aqui...
  };

  // 2) Clique em qualquer card
  $('.card-unidade').on('click', function() {
    var $card = $(this);

    // Extrai dados do card
    var numero      = $card.find('.numero').text().trim();
    var area        = $card.find('.area').text().trim();
    var dimsArr     = $card.find('.dimensoes').text().split('•');
    var largura     = dimsArr[0].replace('L:', '').trim();
    var comprimento = dimsArr[1].replace('C:', '').trim();
    var altura      = dimsArr[2].replace('A:', '').trim();
    var volume      = $card.find('.volume').text().replace('Vol:', '').trim();

    // Busca o array de contratos para esta unidade
    var contracts = contractsByUnit[numero] || [];

    // Função auxiliar para montar os cards de contrato
    function buildContractsHTML(arr) {
      var html  = '<div class="fw-bold mb-3">TOTAL: ' + arr.length + '</div>';
      arr.forEach(function(c) {
        html +=
          '<div class="contract-card mb-4 p-3 border rounded">' +
            '<div class="row mb-2">' +
              '<div class="col-md-3"><strong>Contrato:</strong> ' +
                '<a href="#">#' + c.numero + '</a>' +
              '</div>' +
              '<div class="col-md-3"><strong>Cliente:</strong> ' + c.cliente + '</div>' +
              '<div class="col-md-2"><strong>Plano:</strong> '   + c.plano   + '</div>' +
              '<div class="col-md-2">' +
                '<strong>Status:</strong> ' +
                '<span class="status-badge status-finalizado">' + c.status + '</span>' +
              '</div>' +
            '</div>' +
            '<div class="row mb-2">' +
              '<div class="col-md-3"><strong>Entrada:</strong> ' + c.entrada     + '</div>' +
              '<div class="col-md-3"><strong>Saída:</strong> '   + c.saida       + '</div>' +
              '<div class="col-md-2">' +
                '<strong>Mensalidade (box):</strong> ' + c.mensalidade +
              '</div>' +
              '<div class="col-md-2">' +
                '<strong>Diária (box):</strong> '     + c.diaria      +
              '</div>' +
            '</div>' +
            '<hr class="my-2" />' +
            '<div class="text-end">' +
              '<strong>Valor Total: ' + c.valorTotal + '</strong>' +
            '</div>' +
          '</div>';
      });
      return html;
    }

    // 3) Monta o HTML completo de detalhe
    var detalheHTML = `
      <div class="detail-header">
        <span>Unidade ${numero}</span>
        <button type="button" class="btn-close"></button>
      </div>

      <div class="detail-tabs">
        <div class="tab active" data-tab="box">Box</div>
        <div class="tab"        data-tab="contratos">
          Histórico Contratos <span class="badge">${contracts.length}</span>
        </div>
        <div class="tab"        data-tab="seguros">
          Histórico Seguros   <span class="badge">0</span>
        </div>
      </div>

      <div class="detail-body">
        <!-- TAB BOX -->
        <div id="tab-box" class="tab-content">
          <div class="row-detalhe mb-4">
            <div>
              <strong>Número:</strong> ${numero}
            </div>
            <div>
              <strong>Área:</strong> ${area}
            </div>
            <div>
              <strong>Status:</strong>
              <span class="status-badge status-disponivel">Disponível</span>
            </div>
          </div>
          <div class="card-dims">
            <h6>Dimensões Detalhadas</h6>
            <div class="row-dims">
              <div><strong>Largura:</strong> ${largura}</div>
              <div><strong>Comprimento:</strong> ${comprimento}</div>
              <div><strong>Altura:</strong> ${altura}</div>
              <div><strong>Volume:</strong> ${volume}</div>
            </div>
          </div>
        </div>

        <!-- TAB CONTRATOS -->
        <div id="tab-contratos" class="tab-content d-none">
          ${ buildContractsHTML(contracts) }
        </div>

        <!-- TAB SEGUROS -->
        <div id="tab-seguros" class="tab-content d-none">
          <p>Não há seguros cadastrados para esta unidade.</p>
        </div>
      </div>
    `;

    // 4) Injeta e exibe
    $('#detalhe-unidade')
      .html(detalheHTML)
      .removeClass('d-none')[0]
      .scrollIntoView({ behavior: 'smooth', block: 'start' });

    // 5) Fecha ao clicar no X
    $('#detalhe-unidade .btn-close').on('click', function() {
      $('#detalhe-unidade').addClass('d-none');
    });

    // 6) Troca de abas
    $('#detalhe-unidade .tab').on('click', function() {
      var aba = $(this).data('tab');
      $('#detalhe-unidade .tab').removeClass('active');
      $(this).addClass('active');
      $('#detalhe-unidade .tab-content').addClass('d-none');
      $('#detalhe-unidade #tab-' + aba).removeClass('d-none');
    });
  });
});
</script>


</body>
</html>

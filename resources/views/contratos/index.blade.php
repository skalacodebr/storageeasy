{{-- resources/views/contratos/demo.blade.php --}}
@include('layouts/head-main')
<meta http-equiv="Permissions-Policy" content="unload=(self)">

<head>
  <title>Editor de Contrato com WebViewer via CDN</title>
  @include('layouts/head')
  @include('layouts/head-style')

  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@pdftron/webviewer@11.6.1/public/core/external/quill.min.css"
  >
  <style>
    #viewer {
      width: 100%;
      height: calc(100vh - 160px);
      border: 1px solid #ddd;
      margin-top: 1rem;
    }
    .file-input-wrapper {
      max-width: 500px;
      margin: 1rem auto;
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

          <div class="row mb-4">
            <div class="col-12">
              <h4 class="fw-bold">Editor de Contrato</h4>
              <p class="text-muted">
                Use o contrato‑padrão ou faça upload de outro PDF para editar e baixar.
              </p>
            </div>
          </div>

          <div class="file-input-wrapper">
            <label for="file-input" class="form-label">Trocar de Contrato (opcional)</label>
            <input type="file" id="file-input" accept="application/pdf" class="form-control">
          </div>

          <div id="viewer"></div>

        </div>
      </div>
    </div>
  </div>

  @include('layouts/vendor-scripts')

  <!-- WebViewer completo via CDN -->
  <script src="https://cdn.jsdelivr.net/npm/@pdftron/webviewer@11.6.1/public/webviewer.min.js"></script>
  <script>
    document.addEventListener('DOMContentLoaded', () => {
      WebViewer({
        path: 'https://cdn.jsdelivr.net/npm/@pdftron/webviewer@11.6.1/public',
        initialDoc: '{{ asset("storage/contracts/contrato.pdf") }}',
        licenseKey: 'YOUR_LICENSE_KEY_AQUI'
      }, document.getElementById('viewer'))
      .then(instance => {
        const { documentViewer, annotManager, Annotations } = instance.Core;
        // Exibe só ferramentas de edição, redação e anotação
        instance.setToolbarGroup('toolbarGroup-Edit');
        instance.setToolbarGroup('toolbarGroup-Redact');
        instance.setToolbarGroup('toolbarGroup-Annotate');
        
        // Upload de novo PDF
        document.getElementById('file-input').addEventListener('change', async e => {
          const file = e.target.files[0];
          if (!file) return;
          const buffer = await file.arrayBuffer();
          instance.loadDocument(buffer, { filename: file.name });
        });
      });
    });
  </script>
</body>
</html>

<?php
$pageTitle = "Editar Sus Credenciales"; //Aquí se pone los titulos de las páginas
require dirname(__DIR__, 3) . '/config.php'; //la configuración del sistema
require dirname(__DIR__, 3) . '/resources/views/components/home-basic.php'; //la cabecera de las vistas con css y otros
require dirname(__DIR__, 3) . '/resources/views/components/menu-personal.php'; //el menu del sistema
?>
<link rel="stylesheet" href="<?php echo BASE_URL . 'public/css/piedepagina.css';?>">

  <main class="container_credencial">
    <h1 class="upl">Sube tus archivos PDF o PNG</h1>
    <label for="fileInput" class="upload-area" id="uploadArea" tabindex="0" aria-label="Área para subir archivos PDF o PNG. Arrastra y suelta o haz clic para seleccionar">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" stroke="currentColor" viewBox="0 0 24 24" >
        <path d="M12 3v14m0 0l-4-4m4 4l4-4"/><rect x="3" y="17" width="18" height="4" rx="2" ry="2"/>
      </svg>
      <p>Arrastra y suelta aquí o haz clic para seleccionar archivos (PDF o PNG)</p>
      <input type="file" id="fileInput" accept=".pdf,.png" multiple aria-multiselectable="true"/>
    </label>
    <div class="file-list" id="fileList" aria-live="polite" aria-relevant="additions"></div>
  </main>

<script>
  const fileInput = document.getElementById('fileInput');
  const uploadArea = document.getElementById('uploadArea');
  const fileList = document.getElementById('fileList');

  // Evitar comportamientos de arrastre predeterminados
  ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
    uploadArea.addEventListener(eventName, e => {
      e.preventDefault();
      e.stopPropagation();
    });
  });

  // Resaltar el área de colocación cuando se arrastra el archivo sobre ella
  ['dragenter', 'dragover'].forEach(eventName => {
    uploadArea.addEventListener(eventName, () => {
      uploadArea.classList.add('dragover');
    });
  });

  ['dragleave', 'drop'].forEach(eventName => {
    uploadArea.addEventListener(eventName, () => {
      uploadArea.classList.remove('dragover');
    });
  });

  // Manejar archivos caídos
  uploadArea.addEventListener('drop', e => {
    const dt = e.dataTransfer;
    if (dt && dt.files) {
      handleFiles(dt.files);
    }
  });

  // Manejar la selección de archivos de exploración
  fileInput.addEventListener('change', () => {
    if (fileInput.files) {
      handleFiles(fileInput.files);
    }
  });

  // Accesibilidad del teclado: abrir el cuadro de diálogo de archivo con Enter o Espacio cuando la etiqueta esté enfocada
  uploadArea.addEventListener('keydown', e => {
    if (e.key === 'Enter' || e.key === ' ') {
      e.preventDefault();
      fileInput.click();
    }
  });

  function handleFiles(files) {
    // Convierte FileList en una matriz y filtra por tipos permitidos
    const allowedTypes = ['application/pdf', 'image/png'];
    const filteredFiles = Array.from(files).filter(file => allowedTypes.includes(file.type));

    // Borrar lista existente
    fileList.innerHTML = '';

    if (filteredFiles.length === 0) {
      const info = document.createElement('p');
      info.textContent = 'No se seleccionaron archivos válidos (PDF o PNG).';
      info.style.color = '#dc2626';
      fileList.appendChild(info);
      return;
    }

    filteredFiles.forEach(file => {
      const item = document.createElement('div');
      item.className = 'file-list-item';

      const icon = document.createElementNS('http://www.w3.org/2000/svg', 'svg');
      icon.setAttribute('class', 'file-icon');
      icon.setAttribute('viewBox', '0 0 24 24');
      icon.setAttribute('fill', 'none');
      icon.setAttribute('stroke', '#2563eb');
      icon.setAttribute('stroke-width', '2');
      icon.setAttribute('stroke-linecap', 'round');
      icon.setAttribute('stroke-linejoin', 'round');
      
      // Elija la ruta del icono según el tipo de archivo
      if (file.type === 'application/pdf') {
        icon.innerHTML = '<path d="M6 2h7l5 5v13a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2z"/><polyline points="13 2 13 7 18 7"/><text x="8" y="17" font-size="6" font-weight="700" fill="#2563eb">PDF</text>';
      } else if (file.type === 'image/png') {
        icon.innerHTML = '<rect x="3" y="3" width="18" height="18" rx="2" ry="2"/><circle cx="8.5" cy="8.5" r="1.5"/><polyline points="21 15 16 10 5 21"/>';
      }
      item.appendChild(icon);

      const nameSpan = document.createElement('span');
      nameSpan.textContent = file.name;
      item.appendChild(nameSpan);

      fileList.appendChild(item);
    });
  }
</script>
<?php
    require dirname(__DIR__, 3) . '/resources/views/components/footer.php'; //footer y pie de la vista
?>

  window.addEventListener('pageshow', function(event) {
    // Detecta se a página veio do cache do botão voltar
    if (event.persisted || window.performance.getEntriesByType('navigation')[0].type === 'back_forward') {
      const currentPath = window.location.pathname;

      // Se estiver em uma URL de categoria ou em /todos-os-produtos/ com query
      if (currentPath.includes('/categoria-produto/') || (currentPath === '/todos-os-produtos/' && window.location.search)) {
        // Redireciona para a página limpa sem parâmetros
        window.location.href = '/todos-os-produtos/';
      }
    }
  });
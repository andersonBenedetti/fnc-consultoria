// Sucesso
document.addEventListener(
  "wpcf7mailsent",
  function (event) {
    alert("Sua mensagem foi enviada com sucesso!");
  },
  false
);

// Falha no envio
document.addEventListener(
  "wpcf7mailfailed",
  function (event) {
    alert("Ocorreu um erro ao enviar. Tente novamente.");
  },
  false
);

// Campos inválidos
document.addEventListener(
  "wpcf7invalid",
  function (event) {
    alert("Por favor, verifique os campos obrigatórios.");
  },
  false
);

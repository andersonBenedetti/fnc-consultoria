document.addEventListener("DOMContentLoaded", function () {
  const links = document.querySelectorAll(".summary-content a");
  const buttons = document.querySelectorAll(".toggle-btn");

  if (links.length > 0) {
    links[0].classList.add("active");
    const firstBtn = document.getElementById("btn-" + links[0].dataset.target);
    if (firstBtn) firstBtn.classList.add("active");
  }

  links.forEach((link) => {
    link.addEventListener("click", function () {
      const targetId = this.dataset.target;
      const targetBtn = document.getElementById("btn-" + targetId);

      links.forEach((l) => l.classList.remove("active"));
      buttons.forEach((b) => b.classList.remove("active"));

      this.classList.add("active");
      if (targetBtn) targetBtn.classList.add("active");
    });
  });
});

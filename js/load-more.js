document.addEventListener("DOMContentLoaded", function () {
  let loading = false;
  const productsContainer = document.getElementById("products-container");

  if (!productsContainer) return;

  const loadMoreBtn = document.getElementById("load-more");
  const maxPages = parseInt(loadMoreBtn.dataset.maxPages, 10);
  let currentPage = parseInt(loadMoreBtn.dataset.page, 10);

  if (currentPage > maxPages) {
    loadMoreBtn.style.display = "none";
    return;
  }

  const sentinel = document.createElement("div");
  productsContainer.appendChild(sentinel);

  const loadProducts = () => {
    if (loading || currentPage > maxPages) return;
    loading = true;

    loadMoreBtn.classList.add("loading");

    const baseUrl = window.location.href.split("?")[0];
    const url = `${baseUrl}?paged=${currentPage}&scroll=1`;

    fetch(url)
      .then((res) => res.text())
      .then((html) => {
        const parser = new DOMParser();
        const doc = parser.parseFromString(html, "text/html");
        const newProducts = doc.querySelectorAll("#products-container > *");

        if (newProducts.length === 0 || currentPage >= maxPages) {
          loadMoreBtn.style.display = "none";
          loading = false;
          loadMoreBtn.classList.remove("loading");
          observer.disconnect();
          return;
        }

        sentinel.remove();

        newProducts.forEach((el) => {
          productsContainer.appendChild(el);
        });

        productsContainer.appendChild(sentinel);

        currentPage++;
        loadMoreBtn.dataset.page = currentPage;

        loadMoreBtn.classList.remove("loading");

        loading = false;
      })
      .catch(() => {
        loadMoreBtn.classList.remove("loading");
        loading = false;
      });
  };

  const observer = new IntersectionObserver(
    (entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          loadProducts();
        }
      });
    },
    {
      root: null,
      rootMargin: "100px",
      threshold: 0.1,
    }
  );

  observer.observe(sentinel);
});

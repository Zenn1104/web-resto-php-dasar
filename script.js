// Ambil elemen-elemen modal, tombol close, dan area klik luar modal
const itemDetailModal = document.getElementById("item-detail-modal");
const closeModalIcon = document.querySelector(".close-icon");

// Fungsi untuk membuka modal
const openModal = () => {
  if (itemDetailModal) {
    itemDetailModal.style.display = "flex"; // Tampilkan modal
  }
};

// Fungsi untuk menutup modal
const closeModal = () => {
  if (itemDetailModal) {
    itemDetailModal.style.display = "none"; // Sembunyikan modal
  }
};

// Event listener untuk ikon close
if (closeModalIcon) {
  closeModalIcon.addEventListener("click", (event) => {
    event.preventDefault(); // Cegah redirect dari tag <a>
    closeModal();
  });
}

// Event listener untuk klik di luar modal
window.addEventListener("click", (event) => {
  if (event.target === itemDetailModal) {
    closeModal();
  }
});

// Ambil elemen-elemen shopping cart
const shoppingCartButton = document.getElementById("shopping-cart-button");
const shoppingCart = document.querySelector(".shopping-cart");

// Event listener untuk tombol shopping cart
if (shoppingCartButton && shoppingCart) {
  shoppingCartButton.addEventListener("click", () => {
    shoppingCart.classList.toggle("active"); // Toggle kelas "active"
  });

  // Event listener untuk klik di luar shopping cart
  document.addEventListener("click", (e) => {
    if (!shoppingCart.contains(e.target) && e.target !== shoppingCartButton) {
      shoppingCart.classList.remove("active");
    }
  });
}

// Ambil elemen-elemen sidebar
const sidebar = document.getElementById("sidebar");
const hamburgerMenu = document.getElementById("hamburger-menu");
const closeSidebar = document.getElementById("close-sidebar");

// Event listener untuk membuka sidebar
if (hamburgerMenu && sidebar) {
  hamburgerMenu.addEventListener("click", () => {
    sidebar.classList.add("active");
  });
}

// Event listener untuk menutup sidebar
if (closeSidebar && sidebar) {
  closeSidebar.addEventListener("click", () => {
    sidebar.classList.remove("active");
  });
}

// Event listener untuk klik di luar sidebar
document.addEventListener("click", (e) => {
  if (sidebar && !sidebar.contains(e.target) && e.target !== hamburgerMenu) {
    sidebar.classList.remove("active");
  }
});

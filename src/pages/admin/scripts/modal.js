const addProduct = document.querySelector(".add-product");
const addModal = document.querySelector(".table__add-modal");

const editProducts = document.querySelectorAll(".edit-product");
const editModals = document.querySelectorAll(".table__edit-modal");

const closeEditBtns = document.querySelectorAll(".close-edit");
const closeBtn = document.querySelector(".close");
const name = document.querySelector("#name");
const price = document.querySelector("#price");
const image = document.querySelector("#image");

addProduct.addEventListener("click", () => {
  addModal.classList.add("active");
  name.value = "";
  price.value = "";
  image.value = "";
});

closeBtn.addEventListener("click", () => {
  addModal.classList.remove("active");
  console.log(true);
  name.value = "";
  price.value = "";
  image.value = "";
});

editProducts.forEach((editProduct, index) => {
  editProduct.addEventListener("click", () => {
    editModals[index].classList.add("active");
  });
});

closeEditBtns.forEach((closeEditBtn) => {
  closeEditBtn.addEventListener("click", () => {
    closeEditBtn.closest(".modal").classList.remove("active");
  });
});

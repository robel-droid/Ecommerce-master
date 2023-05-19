var searchButton = document.getElementById("search-button");
var searchInput = document.getElementById("search-input");

searchButton.addEventListener("click", function() {
	console.log('search clicked!');
  var searchText = searchInput.value.toLowerCase();
  var productItems = document.querySelectorAll(".product-item");

  productItems.forEach(function(productItem) {
    var productName = productItem.querySelector(".product-info h3").textContent.toLowerCase();
    var productPrice = productItem.querySelector(".product-info p").textContent.toLowerCase();
    
    if (productName.includes(searchText) || productPrice.includes(searchText)) {
      productItem.style.display = "block";
    } else {
      productItem.style.display = "none";
    }
  });
});
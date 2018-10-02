$(document).ready(function() {
  $('#productid').click(function() {
    let proion = $('#product').val();
    $('#product').val("");
    $.ajax({
      url: `http://localhost:8085/Yummy/api/products?q=${proion}&appid=API-KEY-GOES-HERE`,
      type: 'GET',
      data: {
        format: 'json'
      },
      success: function(response) {
        $('.showPrice').text(`The price of ${proion} is ${response.main.price}`);
        $('.showStock').text(`The amount of items in stock is ${response.main.stock}.`);
      },
      error: function() {
        $('#errors').text("There was an error processing your request. Please try again.");
      }
    });
  });
});
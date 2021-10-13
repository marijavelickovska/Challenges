$(document).ready(function () {
    $.get(`https://json-project3.herokuapp.com/products`).then((bikes) => {
  
      function showAllBikes(bikes) {
        $(bikes).each((id, bike) => {
          $("#bikesContainer").append(
                ` <div class="col-4">
                      <div class="card">
                          <img src="img/${bike.image}.png" class="card-img-top px-3" style="height: 160px;">
                          <div class="card-body background-orange" style="height: 80px;">
                              <h6>${bike.name}</h6>
                              <p>${bike.price} $</p>
                              <p>${bike.gender} $</p>
                          </div>
                      </div>
                  </div>`
          );
        });
      }
  
      showAllBikes(bikes);

      $(".cursor").mouseover(function () {
        $(".cursor").css("cursor", "pointer");
      });

  
      let male = bikes.filter((bike) => bike.gender == "MALE");
      let female = bikes.filter((bike) => bike.gender == "FEMALE");
      let leGrandBikes = bikes.filter((bike) => bike.brand == "LE GRAND BIKES");
      let cross = bikes.filter((bike) => bike.brand == "KROSS");
      let explorer = bikes.filter((bike) => bike.brand == "EXPLORER");
      let visitor = bikes.filter((bike) => bike.brand == "VISITOR");
      let pony = bikes.filter((bike) => bike.brand == "PONY");
      let force = bikes.filter((bike) => bike.brand == "FORCE");
      let eBikes = bikes.filter((bike) => bike.brand == "E-BIKES");
      let ideal = bikes.filter((bike) => bike.brand == "IDEAL");
     
      
  
      $("#male").on("click", function () {
        $("#bikesContainer").empty();
        showAllBikes(male);
      });
  
      $("#female").on("click", function () {
        $("#bikesContainer").empty();
        showAllBikes(female);
      });
  
      $("#leGrandBikes").on("click", function () {
        $("#bikesContainer").empty();
        showAllBikes(leGrandBikes);
      });
  
      $("#cross").on("click", function () {
        $("#bikesContainer").empty();
        showAllBikes(cross);
      });
  
      $("#explorer").on("click", function () {
        $("#bikesContainer").empty();
        showAllBikes(explorer);
      });
  
      $("#visitor").on("click", function () {
        $("#bikesContainer").empty();
        showAllBikes(visitor);
      });
  
      $("#pony").on("click", function () {
        $("#bikesContainer").empty();
        showAllBikes(pony);
      });
  
      $("#force").on("click", function () {
        $("#bikesContainer").empty();
        showAllBikes(force);
      });
  
      $("#eBikes").on("click", function () {
        $("#bikesContainer").empty();
        showAllBikes(eBikes);
      });
  
      $("#ideal").on("click", function () {
        $("#bikesContainer").empty();
        showAllBikes(ideal);
      });
    });

   
  });
  
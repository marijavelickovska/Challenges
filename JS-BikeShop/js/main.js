$(document).ready(function () {
  //se kreiraat kartickite i istite se prikazuvaat vo bikesContainer
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
                        </div>
                    </div>
                </div>`
        );
      });
    }
    showAllBikes(bikes);

   
    //menuvanje na boite vo leviot sidebar na mouseover i mouseleave
    $(".onHover").mouseover(function () {
      $(this).css("cursor", "pointer");
      $(this).children().addClass("colorChange");
      $(this).children().find("span").addClass("colorChange");
    });

    $(".onHover").mouseleave(function () {
      $(this).children().removeClass("colorChange");
      $(this).children().find("span").removeClass("colorChange");
    });


    //na klik na izbranoto pole, istoto stanuva boldirano i so portokalova boja 
    //na prethodnoto kliknato pole mu se trgaat klasite za boldiranje i portokalova boja
    $(this).on("click", function (e) {
      $("#bikesContainer").empty();
      $("#showAll").removeClass("bold");
      $("#showAll").removeClass("orange");
      $("#showAll").children().removeClass("bg-warning");
      $(".removeOrange").parent().siblings().children().find("span").removeClass("bg-warning");
     
      let target = e.target.id;
      showAllBikes(arrFilters[target]);

      $(e.target).addClass("bold").parent().siblings().children().removeClass("bold");
      $(e.target).addClass("orange").parent().siblings().children().removeClass("orange");
      $(e.target).children().addClass("bg-warning");
      $(e.target).children().addClass("colorGray");
    });


    //filtriranje na velosipedite spored gender i brand, kako i pokazuvanje na site velosipedi (show all)
    const arrFilters = {
      "showAll": bikes,
      "male": bikes.filter((bike) => bike.gender == "MALE"),
      "female": bikes.filter((bike) => bike.gender == "FEMALE"),
      "leGrandBikes": bikes.filter((bike) => bike.brand == "LE GRAND BIKES"),
      "cross": bikes.filter((bike) => bike.brand == "KROSS"),
      "explorer": bikes.filter((bike) => bike.brand == "EXPLORER"),
      "visitor": bikes.filter((bike) => bike.brand == "VISITOR"),
      "pony": bikes.filter((bike) => bike.brand == "PONY"),
      "force": bikes.filter((bike) => bike.brand == "FORCE"),
      "eBikes": bikes.filter((bike) => bike.brand == "E-BIKES"),
      "ideal": bikes.filter((bike) => bike.brand == "IDEAL"),
    };


    //broj na velosipedite spored gender i brand, kako i vkupen broj na site velosipedi
    let badgeShowAll = arrFilters.showAll.length;
    let badgeMale = arrFilters.male.length;
    let badgeFemale = arrFilters.female.length;
    let badgeLeGrandBikes = arrFilters.leGrandBikes.length;
    let badgeCross = arrFilters.cross.length;
    let badgeExplorer = arrFilters.explorer.length;
    let badgeVisitor = arrFilters.visitor.length;
    let badgePony = arrFilters.pony.length;
    let badgeForce = arrFilters.force.length;
    let badgeeBikes = arrFilters.eBikes.length;
    let badgeIdeal = arrFilters.ideal.length;
    

    //prikazuvanje na brojot vo badge
    $(".badgeShowAll").text(badgeShowAll);
    $(".badgeMale").text(badgeMale);
    $(".badgeFemale").text(badgeFemale);
    $(".badgeLeGrandBikes").text(badgeLeGrandBikes);
    $(".badgeCross").text(badgeCross);
    $(".badgeExplorer").text(badgeExplorer);
    $(".badgeVisitor").text(badgeVisitor);
    $(".badgePony").text(badgePony);
    $(".badgeForce").text(badgeForce);
    $(".badgeeBikes").text(badgeeBikes);
    $(".badgeIdeal").text(badgeIdeal);
    
  });
});

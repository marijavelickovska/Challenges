$(document).ready(function () {
  let budgetValue = $("#budget-input");
  let budgetAmount = $("#budget-amount");
  let budgetExpence = $("#expense-amount");
  let budgetBalance = $("#balance-amount");
  let budgetFeedBack = $(".budget-feedback");
  let expenseTitle = $("#expense-input");
  let expenseValue = $("#amount-input");
  let expenseTable = $("#expense-table");

  //get value from budget input, put the same value in budget amount and budget balance, show message if input is empty or negative
  $("#budget-submit").on("click", function (e) {
    e.preventDefault();

    if (budgetValue.val() == "" || budgetValue.val() < 0) {
      budgetFeedBack.show();
      budgetValue.val("");
      return false;
    }

    budgetAmount.html(budgetValue.val());
    budgetBalance.html(budgetValue.val());
    budgetValue.val("");
  });

//on focus on the budget input, hide feedback message
  budgetValue.focus(function () {
    budgetFeedBack.hide();
  });

  //When entered expense update the value of  Budget expenses and Budget balanse, create new row for every entered expense
  $("#expense-submit").on("click", function (e) {
    e.preventDefault();

    let expense = parseInt(expenseValue.val());
    let bdgExpense = parseInt(budgetExpence.html());
    let bdgBalanse = parseInt(budgetBalance.html());
    let totalExpense = bdgExpense + expense;
    let totalBalanse = bdgBalanse - expense;
    budgetExpence.html(totalExpense);
    budgetBalance.html(totalBalanse);

    expenseTable.show();

    let title = expenseTitle.val();

    $("#expense-table > tbody:last-child").append(`
    <tr>
      <td class="info-title showRed text-uppercase" ><span></span>- <span id="takeTitle">${title}</span></td>
      <td class="info-title showRed" id="takeVal">${expense}</td>
      <td><span id="edit" class="ml-3 mr-3" ><i class="fas fa-edit edit-icon"></i></span>
      <span id="delete"><i class="fa fa-trash delete-icon"></i></span></td>
    </tr>`);

    expenseTitle.val("");
    expenseValue.val("");
  });

  // Delete expenses and update the value of Budget expenses and Budget balanse
  $("#expense-table").on("click", "#delete", function (e) {
    let deletedVal = parseInt($(this).closest("tr").find("#takeVal").html());
    let bdgExpense = parseInt(budgetExpence.html());
    let bdgBalanse = parseInt(budgetBalance.html());

    budgetExpence.html(bdgExpense - deletedVal);
    budgetBalance.html(bdgBalanse + deletedVal);
    $(this).closest("tr").remove();
  });

  // Edit expenses and update the value of Budget expenses and Budget balanse
  $("#expense-table").on("click", "#edit", function (e) {
    let editedVal = parseInt($(this).closest("tr").find("#takeVal").html());
    let editedTitle = $(this).closest("tr").find("#takeTitle").html();

    let bdgExpense = parseInt(budgetExpence.html());
    let bdgBalanse = parseInt(budgetBalance.html());

    budgetExpence.html(bdgExpense - editedVal);
    budgetBalance.html(bdgBalanse + editedVal);

    expenseTitle.val(editedTitle);
    expenseValue.val(editedVal);

    $(this).closest("tr").remove();
  });
});

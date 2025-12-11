const purchaseButtons = document.querySelectorAll('.purchase-button');
purchaseButtons.forEach(button => {
  button.addEventListener('click', () => {
    alert('You have successfully purchased the game!');
  });
});
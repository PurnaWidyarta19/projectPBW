function submitForm() {
    const form = document.getElementById('checkoutForm');
    const checkboxes = document.querySelectorAll('input[type="checkbox"][name="selected_items[]"]:checked');
    if (checkboxes.length === 0) {
       alert('Please select at least one item to checkout.');
    } else {
       form.submit();
    }
 }
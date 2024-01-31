    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script>
        document.querySelector("#cart-icon").onclick = () => {
            document.querySelector(".cart").classList.add("active");
        }

        document.querySelector("#close-icon").onclick = () => {
            document.querySelector(".cart").classList.remove("active");
        }

        if (document.readyState == 'loading') {
            document.addEventListener("DOMContentLoaded", ready);
        } else {
            ready();
        }

        $(document).ready(function() {
            $('.add-cart').on('click', function() {
                var productId = $(this).data('product-id');
                console.log(productId);
                $.ajax({
                    type: 'POST',
                    url: 'db_add_to_cart.php',
                    data: { productId: productId },
                    success: function(response) {
                        if (response === 'success') {
                            alert('Product added to cart!');
                            // updateCartCount(); 
                        } else if (response === 'error') {
                            alert('Failed to add product to cart! Error: ' + response);
                        } else {
                            alert('Unexpected response: ' + response);
                        }
                    },
                    error: function(xhr, status, error) {
                        alert('Error occurred while adding product to cart! Error: ' + error);
                    }
                });
            });
        });

        // Function to update the cart count
        // function updateCartCount() {
        //     $.ajax({
        //         type: 'GET',
        //         url: 'get_cart_count.php', // Create a PHP file to retrieve the cart count
        //         success: function(count) {
        //             $('#cart-count').text(count);
        //         },
        //         error: function(xhr, status, error) {
        //             console.log('Error occurred while updating cart count! Error: ' + error);
        //         }
        //     });
        // }

    </script>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
    <body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] flex p-6 lg:p-8 items-center lg:justify-center min-h-screen flex-col">
         <?php echo $slot; ?>
    
   
    <h2>We sell drugs</h2>
    <p>heroine 3.99</p>
    <p>cocaine 4.99</p> 
    <p>weed 2.99</p>
    <h3>docent ta stress mi kabes swa bo ta bula bo skol </h3>

    <h2>als je ons wilt opzoeken, ga dan naar:</h2>
    <p>Schoolstraat 1, 1234 AB, Schoolstad</p>

        <footer>
        <a href="/welcome">Home</a>
        <a href="/about">About</a>
        <a href="/products">Products</a>
        <a href="/kikker">Kikker</a>
    </footer>
</body>
    </body>
</html>

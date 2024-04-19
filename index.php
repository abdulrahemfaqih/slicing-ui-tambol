<?php
$pageTitle = "Home";
// start html
include "layouts/start.php";
// start section navbar
include "layouts/navbar.php";
?>

<!-- section content -->
<main class="min-h-screen flex justify-center items-center flex-col gap-y-10">
    <p class="text-4xl  font-bold">Ini adalah content</p>
    <div class="py-10 px-28 shadow-md bg-slate-100 flex flex-col gap-y-4 items-center">
        <p id="counter" class="font-semibold">Counter : 0</p>
        <div>
        <button id="button" class="py-3 px-2 bg-slate-300 font-medium rounded-md">Increment</button>
        <button id="reset" class="py-3 px-2 bg-slate-300 font-medium rounded-md">Reset</button>
        </div>
    </div>
</main>

<?php include "layouts/footer.php"; ?>


<script>
    const counter = document.getElementById("counter")
    const buttonTrigger = document.getElementById("button")
    const buttonReset = document.getElementById("reset")
    let counterValue = parseInt(localStorage.getItem("counterValue")) || 0

    function incrementCounter() {
        counterValue++
        localStorage.setItem("counterValue", counterValue)
        counter.innerHTML = `Counter : ${counterValue}`
    }

    function reset() {
        localStorage.removeItem("counterValue");
        counterValue = 0; 
        counter.innerHTML = `Counter : ${counterValue}`;
    }
    counter.innerHTML = `Counter : ${counterValue}`
    buttonTrigger.addEventListener("click", incrementCounter)
    buttonReset.addEventListener("click", reset)
</script>

<?php include "layouts/end.php" ?>

<div class="text-center">
<h1>Grazie per esserti iscritto, benvenuto!</h1>
<div>
    <h2>
       <button>Ricevi notifica riepilogo ordine</button>
    </h2>
    
</div>
</div>

<script src="../jquery-1.11.3.min.js"></script>
<script type="text/javascript">

    $("button").on("click", () => {
        $.post(
            "../notifications/addForCustomer.php",
            { idCliente: 1 }, //TODO passgli l'id del cliente
            function(data, status) {
                alert("Data: " + data);
            }
        );
    });
</script>
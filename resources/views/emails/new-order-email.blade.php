<h1>Gentil*, {{ $order->customer_name_surname }} </h1>
<p>
    Simao lieti di informarti che l'ordine è stato approvato <br>
    Dettagli ordine:
</p>
<p>
    ID ordine: {{ $order->id }}<br>
    Via di spedizione: {{ $order->customer_address }} <br>
    Informazioni aggiuntive: {{ $order->customer_notes }} <br>
    Data: {{ $order->date_time->format('d-m-Y, h:m') }}<br>
    Totale: {{ $order->total }}€
</p>

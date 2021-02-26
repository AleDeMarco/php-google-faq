<?php 
  $questions=[
    [
      'Come state implementando la recente decisione della Corte di giustizia dell\'Unione europea (CGUE) relativa al diritto all\'oblio?',
      'Da quando questa decisione è stata pubblicata il 13 maggio 2014, abbiamo lavorato incessantemente per uniformarci a essa. Si tratta di una procedura complessa perché dobbiamo valutare ogni singola richiesta e effettuare un bilanciamento tra il diritto dell\'individuo a controllare i suoi dati personali ed il diritto di tutti di conoscere e distribuire le informazioni.'
    ],
    [
      'Come fa Google a proteggere la mia privacy e a tenere le mie informazioni al sicuro?',
      'Sappiamo che la sicurezza e la privacy sono importanti per te e lo sono anche per noi. Per noi è imperativo offrire un\'elevata sicurezza e assicurarti che le tue informazioni sono al sicuro e accessibili quando ne hai bisogno.'
    ],
    [
      'Perché il mio account è associato a un paese?',
      'Il tuo account è associato a un paese (o territorio) nei Termini di servizio per poter stabilire due cose.'
    ],
    [
      'Come faccio a rimuovere informazioni su di me dai risultati di ricerca di Google?',
      'I risultati di ricerca di Google rispecchiano i contenuti pubblicamente disponibili sul Web. I motori di ricerca non possono rimuovere i contenuti direttamente dai siti web, quindi rimuovere risultati di ricerca da Google non consente di rimuovere i contenuti dal Web.'
    ],
    [
      'Quando faccio clic sui risultati della Ricerca Google, le mie chiavi di ricerca vengono inviate ai siti web?',
      'In alcuni casi sì. Quando fai clic su un risultato della Ricerca Google, il tuo browser web potrebbe reindirizzare alla pagina web di destinazione anche l\'indirizzo Internet, o URL, della pagina dei risultati di ricerca sotto forma di URL referrer. Talvolta, l\'URL della pagina dei risultati di ricerca potrebbe contenere la query di ricerca che hai inserito. Se utilizzi la ricerca SSL (la funzione di ricerca criptata di Google), nella maggior parte dei casi i termini di ricerca non vengono inviati come parte dell\'URL negli URL referrer. Questo comportamento può fare eccezione, ad esempio se utilizzi alcuni browser meno diffusi. Ulteriori informazioni sulla ricerca SSL sono disponibili sul sito.'
    ]
  ]
?>


<!DOCTYPE html>
<html lang="it" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Google faq</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans&display=swap" rel="stylesheet">
  </head>
  <body>
    <header>
      <div class="logo">
        <img src="https://www.gstatic.com/images/branding/googlelogo/svg/googlelogo_clr_74x24px.svg" alt="Logo">
      </div>
      <div class="name">
        Privacy e termini
      </div>
      <ul>
        <li>Introduzione</li>
        <li>Norme sulla privacy</li>
        <li>Termini di servizio</li>
        <li>Tecnologie</li>
        <li>Domande frequenti</li>
      </ul>
    </header>
    <div class="container">
      <?php
        foreach ($questions as $quest) {
      ?>
      <h2>
        <?php echo $quest[0]; ?>
      </h2>
      <p>
        <?php echo $quest[1]; ?>
      </p>
      <?php
        }
      ?>
    </div>
  </body>
</html>
